<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\VendorUsers;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class FoodController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function __construct()
    {
        $this->middleware('auth');
    }

	  public function index()
    {
      $user = Auth::user();
      $id = Auth::id();
      $exist = VendorUsers::where('user_id',$id)->first();
      $id=$exist->uuid;

   		return view("foods.index")->with('id',$id);
    }

    public function edit($id)
    {
    	return view('foods.edit')->with('id',$id);
    }

    public function create()
    {
      $user = Auth::user();
      $id = Auth::id();
      $exist = VendorUsers::where('user_id',$id)->first();
      $id=$exist->uuid;

      return view('foods.create')->with('id',$id);
    }

    /**
     * Handle inline updates for food prices and discount prices
     */
    public function inlineUpdate(Request $request, $id)
    {
        try {
            // Validate the request
            $request->validate([
                'field' => 'required|in:price,disPrice',
                'value' => 'required|numeric|min:0',
            ]);

            $field = $request->field;
            $value = floatval($request->value);

            // Use Firebase REST API approach
            return $this->updateViaRestApi($id, $field, $value);

        } catch (\Exception $e) {
            Log::error('Inline update error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Update failed: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Update via Firebase REST API
     */
    private function updateViaRestApi($id, $field, $value)
    {
        try {
            $projectId = env('FIREBASE_PROJECT_ID');
            $apiKey = env('FIREBASE_APIKEY');
            
            if (!$projectId || !$apiKey) {
                throw new \Exception('Firebase configuration not found');
            }

            // First, get the current document
            $getUrl = "https://firestore.googleapis.com/v1/projects/{$projectId}/databases/(default)/documents/vendor_products/{$id}?key={$apiKey}";
            
            $response = Http::get($getUrl);
            
            if (!$response->successful()) {
                throw new \Exception('Failed to fetch current document data');
            }

            $documentData = $response->json();
            $currentData = $documentData['fields'] ?? [];

            // Prepare update data
            $updateData = [];
            
            if ($field === 'price') {
                $updateData['price'] = ['doubleValue' => $value];
                
                // If discount price is higher than new price, reset it
                if (isset($currentData['disPrice']['doubleValue']) && $currentData['disPrice']['doubleValue'] > $value) {
                    $updateData['disPrice'] = ['doubleValue' => 0];
                    $message = 'Price updated successfully. Discount price was reset as it was higher than the new price.';
                } else {
                    $message = 'Price updated successfully.';
                }
            } elseif ($field === 'disPrice') {
                // Validate that discount price is not higher than regular price
                $regularPrice = $currentData['price']['doubleValue'] ?? 0;
                if ($value > $regularPrice) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Discount price cannot be higher than regular price'
                    ], 400);
                }
                
                $updateData['disPrice'] = ['doubleValue' => $value];
                $message = 'Discount price updated successfully.';
            }

            // Update the document
            $updateUrl = "https://firestore.googleapis.com/v1/projects/{$projectId}/databases/(default)/documents/vendor_products/{$id}?key={$apiKey}";
            
            $updateResponse = Http::patch($updateUrl, [
                'fields' => $updateData
            ]);

            if (!$updateResponse->successful()) {
                throw new \Exception('Failed to update document');
            }

            return response()->json([
                'success' => true,
                'message' => $message,
                'data' => $updateData
            ]);

        } catch (\Exception $e) {
            Log::error('REST API update error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Update failed: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Download Excel template for bulk import
     */
    public function downloadTemplate()
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Set headers
        $headers = [
            'name', 'price', 'description', 'vendorID', 'categoryID', 
            'disPrice', 'publish', 'nonveg', 'isAvailable', 'photo'
        ];

        foreach ($headers as $index => $header) {
            $sheet->setCellValueByColumnAndRow($index + 1, 1, $header);
        }

        // Add sample data
        $sampleData = [
            'Sample Food Item', 10.99, 'This is a sample food description', 
            'vendor_id_here', 'category_id_here', 8.99, 1, 0, 1, 'photo_url_here'
        ];

        foreach ($sampleData as $index => $value) {
            $sheet->setCellValueByColumnAndRow($index + 1, 2, $value);
        }

        // Create the Excel file
        $writer = new Xlsx($spreadsheet);
        $filename = 'food_import_template.xlsx';
        $path = storage_path('app/temp/' . $filename);
        
        // Ensure temp directory exists
        if (!file_exists(dirname($path))) {
            mkdir(dirname($path), 0755, true);
        }
        
        $writer->save($path);

        return response()->download($path, $filename)->deleteFileAfterSend();
    }

    /**
     * Import foods from Excel file
     */
    public function import(Request $request)
    {
        try {
            $request->validate([
                'file' => 'required|file|mimes:xls,xlsx|max:2048'
            ]);

            $file = $request->file('file');
            $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($file->getPathname());
            $worksheet = $spreadsheet->getActiveSheet();
            $rows = $worksheet->toArray();

            // Remove header row
            $headers = array_shift($rows);
            
            $successCount = 0;
            $errorCount = 0;
            $errors = [];

            foreach ($rows as $index => $row) {
                try {
                    if (empty(array_filter($row))) {
                        continue; // Skip empty rows
                    }

                    $data = array_combine($headers, $row);
                    
                    // Validate required fields
                    if (empty($data['name']) || empty($data['price'])) {
                        $errors[] = "Row " . ($index + 2) . ": Name and price are required";
                        $errorCount++;
                        continue;
                    }

                    // Prepare food data
                    $foodData = [
                        'name' => $data['name'],
                        'price' => floatval($data['price']),
                        'description' => $data['description'] ?? '',
                        'disPrice' => !empty($data['disPrice']) ? floatval($data['disPrice']) : 0,
                        'publish' => !empty($data['publish']),
                        'nonveg' => !empty($data['nonveg']),
                        'isAvailable' => !empty($data['isAvailable']),
                        'photo' => $data['photo'] ?? '',
                        'createdAt' => new \DateTime(),
                        'updatedAt' => new \DateTime()
                    ];

                    // Handle vendor ID/name
                    if (!empty($data['vendorID'])) {
                        $foodData['vendorID'] = $data['vendorID'];
                    } elseif (!empty($data['vendorName'])) {
                        // You might want to implement vendor name lookup here
                        $foodData['vendorID'] = $data['vendorName']; // Placeholder
                    }

                    // Handle category ID/name
                    if (!empty($data['categoryID'])) {
                        $foodData['categoryID'] = $data['categoryID'];
                    } elseif (!empty($data['categoryName'])) {
                        // You might want to implement category name lookup here
                        $foodData['categoryID'] = $data['categoryName']; // Placeholder
                    }

                    // Use the same REST API method to create the food item
                    $this->createFoodViaRestApi($foodData);
                    $successCount++;

                } catch (\Exception $e) {
                    $errors[] = "Row " . ($index + 2) . ": " . $e->getMessage();
                    $errorCount++;
                }
            }

            $message = "Import completed. Successfully imported {$successCount} items.";
            if ($errorCount > 0) {
                $message .= " {$errorCount} items failed to import.";
            }

            return redirect()->back()->with('success', $message)->with('import_errors', $errors);

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Import failed: ' . $e->getMessage());
        }
    }

    /**
     * Create food item via Firebase REST API
     */
    private function createFoodViaRestApi($foodData)
    {
        $projectId = env('FIREBASE_PROJECT_ID');
        $apiKey = env('FIREBASE_APIKEY');
        
        if (!$projectId || !$apiKey) {
            throw new \Exception('Firebase configuration not found');
        }

        // Convert data to Firebase format
        $firebaseData = [];
        foreach ($foodData as $key => $value) {
            if (is_bool($value)) {
                $firebaseData[$key] = ['booleanValue' => $value];
            } elseif (is_numeric($value)) {
                $firebaseData[$key] = ['doubleValue' => $value];
            } elseif (is_string($value)) {
                $firebaseData[$key] = ['stringValue' => $value];
            } elseif ($value instanceof \DateTime) {
                $firebaseData[$key] = ['timestampValue' => $value->format('c')];
            }
        }

        $url = "https://firestore.googleapis.com/v1/projects/{$projectId}/databases/(default)/documents/vendor_products?key={$apiKey}";
        
        $response = Http::post($url, [
            'fields' => $firebaseData
        ]);

        if (!$response->successful()) {
            throw new \Exception('Failed to create food item: ' . $response->body());
        }

        return $response->json();
    }
}

<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Kreait\Firebase\Factory;

class UpdateVendorsIsOpen extends Command
{
    protected $signature = 'vendors:update-isopen';
    protected $description = 'Add isOpen field to all documents in vendors collection';

    public function handle()
    {
        $this->info('Starting update: adding isOpen to all vendors...');

        // Load Firebase credentials
        $factory = (new Factory)->withServiceAccount(storage_path('app/firebase/credentials.json'));
        $firestore = $factory->createFirestore();
        $database = $firestore->database();

        // Access vendors collection
        $vendors = $database->collection('vendors')->documents();
        $updatedCount = 0;

        foreach ($vendors as $vendor) {
            if ($vendor->exists()) {
                $vendor->reference()->update([
                    ['path' => 'isOpen', 'value' => true] // Or false, based on your default
                ]);
                $updatedCount++;
            }
        }

        $this->info("✅ Updated $updatedCount vendor documents with isOpen field.");
    }
}

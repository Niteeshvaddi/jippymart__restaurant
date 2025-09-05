<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" <?php if (str_replace('_', '-', app()->getLocale()) == 'ar' || @$_COOKIE['is_rtl'] == 'true') { ?> dir="rtl" <?php } ?>>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title id="app_name">Jippy mart Restaurants</title>
        <!--<title id="app_name"><?php echo @$_COOKIE['meta_title']; ?></title>-->
        <link rel="icon" id="favicon" type="image/x-icon"
            href="<?php echo str_replace('images/', 'images%2F', @$_COOKIE['favicon']); ?>">
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <!-- Styles -->
        <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/css/bootstrap-timepicker.min.css">
        <?php if (str_replace('_', '-', app()->getLocale()) == 'ar' || @$_COOKIE['is_rtl'] == 'true') { ?>
        <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap-rtl.min.css') }}" rel="stylesheet">
        <?php } ?>
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <?php if (str_replace('_', '-', app()->getLocale()) == 'ar' || @$_COOKIE['is_rtl'] == 'true') { ?>
        <link href="{{ asset('css/style_rtl.css') }}" rel="stylesheet">
        <?php } ?>
        <link href="{{ asset('css/icons/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/plugins/toast-master/css/jquery.toast.css') }}" rel="stylesheet">
        <link href="{{ asset('css/colors/blue.css') }}" rel="stylesheet">
        <link href="{{ asset('css/chosen.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap-tagsinput.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.dataTables.min.css">
        <link rel="stylesheet" type="text/css"
            href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
        <link href="{{ asset('assets/plugins/select2/dist/css/select2.min.css')}}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" type="text/css"
            href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

        <!--  @yield('style')-->

        <?php if (isset($_COOKIE['store_panel_color'])) { ?>

        <style type="text/css">
            .topbar {
                background:
                    <?php    echo $_COOKIE['store_panel_color']; ?>
                ;
            }

            .sidebar-nav ul li a {
                border-bottom:
                    <?php    echo $_COOKIE['store_panel_color']; ?>
                ;
            }

            .sidebar-nav ul li a:hover i {
                color:
                    <?php    echo $_COOKIE['store_panel_color']; ?>
                ;
            }

            .restaurant_payout_create-inner fieldset legend {
                background:
                    <?php    echo $_COOKIE['store_panel_color']; ?>
                ;
            }

            a {
                color:
                    <?php    echo $_COOKIE['store_panel_color']; ?>
                ;
            }

            a:hover,
            a:focus {
                color:
                    <?php    echo $_COOKIE['store_panel_color']; ?>
                ;
            }

            a.link:hover,
            a.link:focus {
                color:
                    <?php    echo $_COOKIE['store_panel_color']; ?>
                ;
            }

            html body blockquote {
                border-left: 5px solid<?php    echo $_COOKIE['store_panel_color']; ?>;
            }

            .text-warning {
                color:
                    <?php    echo $_COOKIE['store_panel_color']; ?>
                    !important;
            }

            .text-info {
                color:
                    <?php    echo $_COOKIE['store_panel_color']; ?>
                    !important;
            }

            .sidebar-nav ul li a:hover {
                color:
                    <?php    echo $_COOKIE['store_panel_color']; ?>
                ;
            }

            .btn-primary {
                background:
                    <?php    echo $_COOKIE['store_panel_color']; ?>
                ;
                border: 1px solid<?php    echo $_COOKIE['store_panel_color']; ?>;
            }

            .sidebar-nav>ul>li.active>a {
                color:
                    <?php    echo $_COOKIE['store_panel_color']; ?>
                ;
                border-left: 3px solid<?php    echo $_COOKIE['store_panel_color']; ?>;
            }

            .sidebar-nav>ul>li.active>a i {
                color:
                    <?php    echo $_COOKIE['store_panel_color']; ?>
                ;
            }

            .bg-info {
                background-color:
                    <?php    echo $_COOKIE['store_panel_color']; ?>
                    !important;
            }

            .bellow-text ul li>span {
                color:
                    <?php    echo $_COOKIE['store_panel_color']; ?>
            }

            .table tr td.redirecttopage {
                color:
                    <?php    echo $_COOKIE['store_panel_color']; ?>
            }

            ul.rating {
                color:
                    <?php    echo $_COOKIE['store_panel_color']; ?>
                ;
            }

            nav-link.active {
                background-color:
                    <?php    echo $_COOKIE['store_panel_color']; ?>
                ;
            }

            .nav-tabs.card-header-tabs .nav-link:hover {
                background:
                    <?php    echo $_COOKIE['store_panel_color']; ?>
                ;
            }

            .nav-tabs .nav-item.show .nav-link,
            .nav-tabs .nav-link.active {
                color: #fff;
                background:
                    <?php    echo $_COOKIE['store_panel_color']; ?>
                ;
            }

            .btn-warning,
            .btn-warning.disabled {
                background:
                    <?php    echo $_COOKIE['store_panel_color']; ?>
                ;
                border: 1px solid<?php    echo $_COOKIE['store_panel_color']; ?>;
                box-shadow: none;
            }

            .payment-top-tab .nav-tabs.card-header-tabs .nav-link.active,
            .payment-top-tab .nav-tabs.card-header-tabs .nav-link:hover {
                border-color:
                    <?php    echo $_COOKIE['store_panel_color']; ?>
                ;
            }

            .nav-tabs.card-header-tabs .nav-link span.badge-success {
                background:
                    <?php    echo $_COOKIE['store_panel_color']; ?>
                ;
            }

            .nav-tabs.card-header-tabs .nav-link.active span.badge-success,
            .nav-tabs.card-header-tabs .nav-link:hover span.badge-success,
            .sidebar-nav ul li a.active,
            .sidebar-nav ul li a.active:hover,
            .sidebar-nav ul li.active a.has-arrow:hover,
            .topbar ul.dropdown-user li a:hover {
                color:
                    <?php    echo $_COOKIE['store_panel_color']; ?>
                ;
            }

            .sidebar-nav ul li a.has-arrow:hover::after,
            .sidebar-nav .active>.has-arrow::after,
            .sidebar-nav li>.has-arrow.active::after,
            .sidebar-nav .has-arrow[aria-expanded="true"]::after,
            .sidebar-nav ul li a:hover {
                border-color:
                    <?php    echo $_COOKIE['store_panel_color']; ?>
                ;
            }

            [type="checkbox"]:checked+label::before {
                border-right: 2px solid<?php    echo $_COOKIE['store_panel_color']; ?>;
                border-bottom: 2px solid<?php    echo $_COOKIE['store_panel_color']; ?>;
            }

            .btn-primary:hover,
            .btn-primary.disabled:hover {
                background:
                    <?php    echo $_COOKIE['store_panel_color']; ?>
                ;
                border: 1px solid<?php    echo $_COOKIE['store_panel_color']; ?>;
            }

            .btn-primary.active,
            .btn-primary:active,
            .btn-primary:focus,
            .btn-primary.disabled.active,
            .btn-primary.disabled:active,
            .btn-primary.disabled:focus,
            .btn-primary.active.focus,
            .btn-primary.active:focus,
            .btn-primary.active:hover,
            .btn-primary.focus:active,
            .btn-primary:active:focus,
            .btn-primary:active:hover,
            .open>.dropdown-toggle.btn-primary.focus,
            .open>.dropdown-toggle.btn-primary:focus,
            .open>.dropdown-toggle.btn-primary:hover,
            .btn-primary.focus,
            .btn-primary:focus,
            .btn-primary:not(:disabled):not(.disabled).active:focus,
            .btn-primary:not(:disabled):not(.disabled):active:focus,
            .show>.btn-primary.dropdown-toggle:focus,
            .btn-warning:hover,
            .btn-warning:hover,
            .btn-warning.disabled:hover,
            .btn-warning.active.focus,
            .btn-warning.active:focus,
            .btn-warning.active:hover,
            .btn-warning.focus:active,
            .btn-warning:active:focus,
            .btn-warning:active:hover,
            .open>.dropdown-toggle.btn-warning.focus,
            .open>.dropdown-toggle.btn-warning:focus,
            .open>.dropdown-toggle.btn-warning:hover,
            .btn-warning.focus,
            .btn-warning:focus {
                background:
                    <?php    echo $_COOKIE['store_panel_color']; ?>
                ;
                border-color:
                    <?php    echo $_COOKIE['store_panel_color']; ?>
                ;
                box-shadow: 0 0 0 0.2rem<?php    echo $_COOKIE['store_panel_color']; ?>;
            }

            .language-options select option,
            .pagination>li>a.page-link:hover {
                background:
                    <?php    echo $_COOKIE['store_panel_color']; ?>
                ;
            }

            .nav-tabs.card-header-tabs .active.nav-item .nav-link {
                color: #fff;
                background:
                    <?php    echo $_COOKIE['store_panel_color']; ?>
                ;
            }

            .print-btn button {
                border: 2px solid<?php    echo $_COOKIE['store_panel_color']; ?>;
                color:
                    <?php    echo $_COOKIE['store_panel_color']; ?>
                ;
            }

            .business-analytics .card-box i {
                background:
                    <?php    echo $_COOKIE['store_panel_color']; ?>
                ;
            }

            .order-status .data i,
            .order-status span.count {
                color:
                    <?php    echo $_COOKIE['store_panel_color']; ?>
                ;
            }

            @media screen and (max-width: 767px) {

                .mini-sidebar .sidebar-nav ul li a:hover,
                .sidebar-nav>ul>li.active>a {
                    color:
                        <?php    echo $_COOKIE['store_panel_color']; ?>
                        !important;
                }
            }
        </style>
        <?php } ?>

        <?php $id = Auth::user()->getvendorId(); ?>
        <script type="text/javascript">
            var cuser_id='<?php echo $id; ?>';
        </script>

    </head>

    <body>

        <div id="app" class="fix-header fix-sidebar card-no-border">
            <div id="main-wrapper">
                <div id="data-table_processing" class="page-overlay" style="display:none;">
                    <div class="overlay-text">
                        <img src="{{asset('images/spinner.gif')}}">
                    </div>
                </div>
                <header class="topbar">
                    <nav class="navbar top-navbar navbar-expand-md navbar-light">
                        @include('layouts.header')
                    </nav>
                </header>
                <aside class="left-sidebar">
                    <!-- Sidebar scroll-->
                    <div class="scroll-sidebar">
                        @include('layouts.menu')
                    </div>
                    <!-- End Sidebar scroll-->
                </aside>
            </div>

            <main class="py-4">
                @yield('content')
            </main>

            <!-- Impersonation Banner -->
            <script>
            // Check if user is impersonated and show notification
            (function() {
                const impersonationData = localStorage.getItem('restaurant_impersonation');
                
                if (impersonationData) {
                    try {
                        const data = JSON.parse(impersonationData);
                        
                        if (data.isImpersonated) {
                            // Show impersonation banner
                            const banner = document.createElement('div');
                            banner.innerHTML = `
                                <div style="background: #fff3cd; border: 1px solid #ffeaa7; color: #856404; padding: 15px; margin-bottom: 20px; border-radius: 5px; position: relative; z-index: 1000;">
                                    <strong>🔐 Admin Impersonation Active</strong><br>
                                    You are currently logged in as this restaurant owner for support purposes.<br>
                                    <small>Impersonated at: ${new Date(data.impersonatedAt).toLocaleString()}</small>
                                    <button onclick="this.parentElement.parentElement.remove()" style="position: absolute; top: 10px; right: 10px; background: none; border: none; font-size: 18px; cursor: pointer;">&times;</button>
                                </div>
                            `;
                            
                            // Insert at the top of the main content
                            const main = document.querySelector('main');
                            if (main && main.firstChild) {
                                main.insertBefore(banner, main.firstChild);
                            } else if (main) {
                                main.appendChild(banner);
                            }
                        }
                    } catch (error) {
                        console.error('Error parsing impersonation data:', error);
                    }
                }
            })();
            </script>

            <div class="modal fade" id="notification_add_order" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered notification-main" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title order_placed_subject" id="exampleModalLongTitle"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h6><span id="auth_accept_name" class="order_placed_msg"></span></h6>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary"><a href="{{ url('orders') }}"
                                    id="notification_add_order_a">Go</a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="notification_rejected_order" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered notification-main" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Order Rejected</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h6>There have new order rejected.</h6>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary"><a href="{{ url('orders') }}">Go</a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="notification_accepted_order" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered notification-main" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title driver_accepted_subject" id="exampleModalLongTitle"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h6><span id="np_accept_name" class="driver_accepted_msg"></span></h6>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary"><a href="{{ url('orders') }}"
                                    id="notification_accepted_a">Go</a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="notification_completed_order" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered notification-main" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Order Completed</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h6>Order has been order accepted.</h6>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary"><a href="{{ url('orders') }}">Go</a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="notification_book_table_add_order" tabindex="-1" role="dialog"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered notification-main" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title dinein_order_placed_subject" id="exampleModalLongTitle"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h6><span id="auth_accept_name_book_table" class="dinein_order_placed_msg"></span></h6>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary"><a href="{{ url('booktable') }}"
                                    id="notification_book_table_add_order_a">Go</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('js/waves.js') }}"></script>
        <script src="{{ asset('js/sidebarmenu.js') }}"></script>
        <script src="{{ asset('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
        <script src="{{ asset('js/custom.min.js') }}"></script>
        <script src="{{ asset('js/jquery.resizeImg.js') }}"></script>
        <script src="{{ asset('assets/plugins/select2/dist/js/select2.min.js') }}"></script>

        <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript"
            src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js">
            </script>
        <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.min.js"></script>
        <script type="text/javascript">
            jQuery(window).scroll(function() {
                var scroll=jQuery(window).scrollTop();
                if(scroll<=60) {
                    jQuery("body").removeClass("sticky");
                } else {
                    jQuery("body").addClass("sticky");
                }
            });
        </script>
        <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase-firestore.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase-storage.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase-auth.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase-database.js"></script>

        <!-- Firebase Configuration -->
        <script>
            // Firebase configuration
            const firebaseConfig = {
                apiKey: "AIzaSyAf_lICoxPh8qKE1QnVkmQYTFJXKkYmRXU",
                authDomain: "jippymart-27c08.firebaseapp.com",
                databaseURL: "https://jippymart-27c08-default-rtdb.firebaseio.com",
                projectId: "jippymart-27c08",
                storageBucket: "jippymart-27c08.firebasestorage.app",
                messagingSenderId: "592427852800",
                appId: "1:592427852800:web:f74df8ceb2a4b597d1a4e5",
                measurementId: "G-ZYBQYPZWCF"
            };

            // Initialize Firebase
            if (!firebase.apps.length) {
                firebase.initializeApp(firebaseConfig);
                console.log('✅ Firebase initialized in main layout');
            }
        </script>
        <script src="https://unpkg.com/geofirestore/dist/geofirestore.js"></script>
        <script src="https://cdn.firebase.com/libs/geofire/5.0.1/geofire.min.js"></script>
        <script src="{{ asset('js/crypto-js.js') }}"></script>
        <script src="{{ asset('js/jquery.cookie.js') }}"></script>
        <script src="{{ asset('js/jquery.validate.js') }}"></script>
        <script src="{{ asset('js/chosen.jquery.js') }}"></script>
        <script src="{{ asset('js/bootstrap-tagsinput.js') }}"></script>
        <script type="text/javascript" charset="utf8"
            src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
        <script type="text/javascript" charset="utf8"
            src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script type="text/javascript" charset="utf8"
            src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.1/xlsx.full.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.24/jspdf.plugin.autotable.min.js"></script>
        <script type="text/javascript" charset="utf8"
            src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
        <script type="text/javascript" charset="utf8"
            src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
        <script type="text/javascript"
            src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

        @yield('scripts')

        <script type="text/javascript">
            var route1='{{ route('orders.edit', ':id') }}';
            var booktable='{{ route('booktable.edit', ':id') }}';
            var database=firebase.firestore();
            var pageloadded=0;

            // Override existing Firebase auth listener to respect impersonation
            (function() {
                // Check if we're in the middle of an impersonation
                const impersonationInProgress = localStorage.getItem('impersonation_in_progress');
                const impersonationTargetUrl = localStorage.getItem('impersonation_target_url');
                
                if (impersonationInProgress === 'true' && impersonationTargetUrl) {
                    console.log('🔐 Impersonation in progress, overriding default redirect');
                    
                    // Override any existing onAuthStateChanged listeners
                    if (typeof firebase !== 'undefined' && firebase.auth) {
                        firebase.auth().onAuthStateChanged(function(user) {
                            if (user && impersonationInProgress === 'true') {
                                console.log('✅ User authenticated during impersonation, redirecting to:', impersonationTargetUrl);
                                
                                // Clear the impersonation flags
                                localStorage.removeItem('impersonation_in_progress');
                                localStorage.removeItem('impersonation_target_url');
                                
                                // Redirect to the target URL
                                setTimeout(function() {
                                    window.location.href = impersonationTargetUrl;
                                }, 500);
                            }
                        });
                    }
                }
            })();

            // Check if user is impersonated and show notification
            (function() {
                const impersonationData = localStorage.getItem('restaurant_impersonation');
                
                if (impersonationData) {
                    try {
                        const data = JSON.parse(impersonationData);
                        
                        if (data.isImpersonated) {
                            // Show impersonation banner
                            const banner = document.createElement('div');
                            banner.innerHTML = `
                                <div style="background: #fff3cd; border: 1px solid #ffeaa7; color: #856404; padding: 15px; margin-bottom: 20px; border-radius: 5px; position: relative;">
                                    <strong>🔐 Admin Impersonation Active</strong><br>
                                    You are currently logged in as this restaurant owner for support purposes.<br>
                                    <small>Impersonated at: ${new Date(data.impersonatedAt).toLocaleString()}</small>
                                    <button onclick="this.parentElement.parentElement.remove()" style="position: absolute; top: 10px; right: 10px; background: none; border: none; font-size: 18px; cursor: pointer;">&times;</button>
                                </div>
                            `;
                            
                            // Insert at the top of the page
                            const body = document.body;
                            if (body.firstChild) {
                                body.insertBefore(banner, body.firstChild);
                            } else {
                                body.appendChild(banner);
                            }
                        }
                    } catch (error) {
                        console.error('Error parsing impersonation data:', error);
                    }
                }
            })();
            var version=database.collection('settings').doc("Version");
            var placeholder = database.collection('settings').doc('placeHolderImage');
                placeholder.get().then(async function (snapshotsimage) {
                    var placeholderImageData = snapshotsimage.data();
                    placeholderImage = placeholderImageData.image;

                })
            var globalSettings=database.collection('settings').doc("globalSettings");
            version.get().then(async function(snapshots) {
                var version_data=snapshots.data();
                if(version_data==undefined) {
                    database.collection('settings').doc('Version').set({});
                }
                try {
                    $('.web_version').html("V:"+version_data.web_version);
                } catch(error) {
                }
            });
            globalSettings.get().then(async function(snapshots) {
                var globalSettingsData=snapshots.data();
                if(globalSettingsData==undefined) {
                    database.collection('settings').doc('globalSettings').set({});
                }
                try {
                    if(getCookie('meta_title')==undefined||getCookie('meta_title')==null||getCookie(
                        'meta_title')=="") {
                        document.title=globalSettingsData.meta_title;
                        setCookie('meta_title',globalSettingsData.meta_title,365);
                    }
                    if(getCookie('favicon')==undefined||getCookie('favicon')==null||getCookie('favicon')==
                        "") {
                        setCookie('favicon',globalSettingsData.favicon,365);
                    }
                } catch(error) {
                }
            });
            function exportData(dt,format,config) {
                const {
                    columns,
                    fileName='Export',
                }=config;

                const filteredRecords=dt.ajax.json().filteredData;

                const fieldTypes={};
                const dataMapper=(record) => {
                    return columns.map((col) => {
                        const value=record[col.key];
                        if(!fieldTypes[col.key]) {
                            if(value===true||value===false) {
                                fieldTypes[col.key]='boolean';
                            } else if(value&&typeof value==='object'&&value.seconds) {
                                fieldTypes[col.key]='date';
                            } else if(typeof value==='number') {
                                fieldTypes[col.key]='number';
                            } else if(typeof value==='string') {
                                fieldTypes[col.key]='string';
                            } else {
                                fieldTypes[col.key]='string';
                            }
                        }

                        switch(fieldTypes[col.key]) {
                            case 'boolean':
                                return value? 'Yes':'No';
                            case 'date':
                                return value? new Date(value.seconds*1000).toLocaleString():'-';
                            case 'number':
                                return typeof value==='number'? value:0;
                            case 'string':
                            default:
                                return value||'-';
                        }
                    });
                };

                const tableData=filteredRecords.map(dataMapper);

                const data=[columns.map(col => col.header),...tableData];

                const columnWidths=columns.map((_,colIndex) =>
                    Math.max(...data.map(row => row[colIndex]?.toString().length||0))
                );

                if(format==='csv') {
                    const csv=data.map(row => row.map(cell => {
                        if(typeof cell==='string'&&(cell.includes(',')||cell.includes('\n')||cell.includes('"'))) {
                            return `"${cell.replace(/"/g,'""')}"`;
                        }
                        return cell;
                    }).join(',')).join('\n');

                    const blob=new Blob([csv],{type: 'text/csv;charset=utf-8;'});
                    saveAs(blob,`${fileName}.csv`);
                } else if(format==='excel') {
                    const ws=XLSX.utils.aoa_to_sheet(data,{cellDates: true});

                    ws['!cols']=columnWidths.map(width => ({wch: Math.min(width+5,30)}));

                    const wb=XLSX.utils.book_new();
                    XLSX.utils.book_append_sheet(wb,ws,'Data');
                    XLSX.writeFile(wb,`${fileName}.xlsx`);
                } else if(format==='pdf') {
                    const {jsPDF}=window.jspdf;
                    const doc=new jsPDF();

                    const totalLength=columnWidths.reduce((sum,length) => sum+length,0);
                    const columnStyles={};
                    columnWidths.forEach((length,index) => {
                        columnStyles[index]={
                            cellWidth: (length/totalLength)*180,
                        };
                    });

                    doc.setFontSize(16);
                    doc.text(fileName,14,16);

                    doc.autoTable({
                        head: [columns.map(col => col.header)],
                        body: tableData,
                        startY: 20,
                        theme: 'striped',
                        styles: {
                            cellPadding: 2,
                            fontSize: 10,
                        },
                        columnStyles,
                        margin: {top: 30,bottom: 30},
                        didDrawPage: function(data) {
                            doc.setFontSize(10);
                            doc.text(fileName,data.settings.margin.left,10);
                        }
                    });
                    doc.save(`${fileName}.pdf`);
                } else {
                    console.error('Unsupported format');
                }
            }
            database.collection('users').doc(cuser_id).get().then(async function(usersnapshots) {
                var userData=usersnapshots.data();
                var username=userData.firstName+' '+userData.lastName;
               
                if (!userData.hasOwnProperty('profilePictureURL') || userData.profilePictureURL === '' || userData.profilePictureURL === null || userData.profilePictureURL === "null") {
                   
                    $('.profile-pic').attr('src', placeholderImage);
                }
                else
                {
                   
                    $('.profile-pic').attr('src',userData.profilePictureURL);
                }
                $('#username').text(username);
                database.collection('vendors').where('author','==',cuser_id).get().then(function(snapshots) {
                    if(snapshots.docs.length>0) {
                        snapshots.forEach(function(doc) {
                            var data=doc.data();
                            // Assuming you have retrieved a Firestore value and stored it in a variable called 'value'
                            if(data.createdAt instanceof firebase.firestore.Timestamp) {
                                // 'value' is a Firestore timestamp
                            } else if(typeof data.createdAt==='object'&&!Array.isArray(data
                                .createdAt)) {
                                const combinedValue=(data.createdAt._seconds)*1000+(data
                                    .createdAt._nanoseconds/1000000);
                                const regularTimestamp=new Date(combinedValue);
                                doc.ref.update({
                                    "createdAt": regularTimestamp
                                });
                            }
                        });
                    }
                });
            });
            var orderPlacedSubject='';
            var orderPlacedMsg='';
            var dineInPlacedSubject='';
            var dineInPlacedMsg='';
            var driverAcceptedMsg='';
            var driverAcceptedSubject='';
            var scheduleOrderPlacedSubject='';
            var scheduleOrderPlacedMsg='';
            database.collection('dynamic_notification').get().then(async function(snapshot) {
                if(snapshot.docs.length>0) {
                    snapshot.docs.map(async (listval) => {
                        val=listval.data();
                        if(val.type=="dinein_placed") {
                            dineInPlacedSubject=val.subject;
                            dineInPlacedMsg=val.message;
                        } else if(val.type=="order_placed") {
                            orderPlacedSubject=val.subject;
                            orderPlacedMsg=val.message;
                        } else if(val.type=="driver_accepted") {
                            driverAcceptedSubject=val.subject;
                            driverAcceptedMsg=val.message;
                        } else if(val.type=="schedule_order") {
                            scheduleOrderPlacedSubject=val.subject;
                            scheduleOrderPlacedMsg=val.message;
                        }
                    });
                }
            });
            database.collection('restaurant_orders').where('vendor.author',"==",cuser_id).onSnapshot(function(doc) {
                if(pageloadded) {
                    doc.docChanges().forEach(function(change) {
                        val=change.doc.data();
                        if(change.type=="added") {
                            if(val.status=="Order Placed") {
                                if(val.author.firstName) {
                                }
                                if(val.scheduleTime!=undefined&&val.scheduleTime!=null&&val
                                    .scheduleTime!='') {
                                    $('.order_placed_subject').text(scheduleOrderPlacedSubject);
                                    $('.order_placed_msg').text(scheduleOrderPlacedMsg);
                                } else {
                                    $('.order_placed_subject').text(orderPlacedSubject);
                                    $('.order_placed_msg').text(orderPlacedMsg);
                                }
                                if(route1) {
                                    jQuery("#notification_add_order_a").attr("href",route1.replace(':id',val
                                        .id));
                                }
                                jQuery("#notification_add_order").modal('show');
                            }
                        } else if(change.type=="modified") {
                            //change.status
                            if(val.status=="Order Placed") {
                                if(val.author.firstName) {
                                }
                                if(route1) {
                                    jQuery("#notification_add_order_a").attr("href",route1.replace(':id',val
                                        .id));
                                }
                                if(val.scheduleTime!=undefined&&val.scheduleTime!=null&&val
                                    .scheduleTime!='') {
                                    $('.order_placed_subject').text(scheduleOrderPlacedSubject);
                                    $('.order_placed_msg').text(scheduleOrderPlacedMsg);
                                } else {
                                    $('.order_placed_subject').text(orderPlacedSubject);
                                    $('.order_placed_msg').text(orderPlacedMsg);
                                }
                                jQuery("#notification_add_order").modal('show');
                            } else if(val.status=="Driver Accepted") {
                                if(val.driver&&val.driver.firstName) {
                                }
                                if(route1) {
                                    jQuery("#notification_accepted_a").attr("href",route1.replace(':id',val
                                        .id));
                                }
                                $('.driver_accepted_subject').text(driverAcceptedSubject);
                                $('.driver_accepted_msg').text(driverAcceptedMsg);
                                jQuery("#notification_accepted_order").modal('show');
                            }
                        }
                    });
                } else {
                    pageloadded=1;
                }
            });
            var pageloadded_book=0;
            database.collection('booked_table').where('vendor.author',"==",cuser_id).onSnapshot(function(doc) {
                if(pageloadded_book) {
                    doc.docChanges().forEach(function(change) {
                        val=change.doc.data();
                        if(change.type=="added") {
                            if(val.status=="Order Placed") {
                                if(val.author.firstName) {
                                }
                                if(route1) {
                                    jQuery("#notification_book_table_add_order_a").attr("href",booktable
                                        .replace(':id',val.id));
                                }
                                $('.dinein_order_placed_subject').text(dineInPlacedSubject);
                                $('.dinein_order_placed_msg').text(dineInPlacedMsg);
                                jQuery("#notification_book_table_add_order").modal('show');
                            }
                        }
                    });
                } else {
                    pageloadded_book=1;
                }
            });
            var langcount=0;
            var languages_list=database.collection('settings').doc('languages');
            languages_list.get().then(async function(snapshotslang) {
                snapshotslang=snapshotslang.data();
                if(snapshotslang!=undefined) {
                    snapshotslang=snapshotslang.list;
                    languages_list_main=snapshotslang;
                    snapshotslang.forEach((data) => {
                        if(data.isActive==true) {
                            langcount++;
                            $('#language_dropdown').append($("<option></option>").attr("value",data.slug)
                                .text(data.title));
                        }
                    });
                    if(langcount>1) {
                        $("#language_dropdown_box").css('visibility','visible');
                    }
                    <?php if (session()->get('locale')) { ?>
                    $("#language_dropdown").val("<?php    echo session()->get('locale'); ?>");
                    <?php } ?>
                }
            });
            var url="{{ route('changeLang') }}";
            $(".changeLang").change(function() {
                var slug=$(this).val();
                languages_list_main.forEach((data) => {
                    if(slug==data.slug) {
                        if(data.is_rtl==undefined) {
                            setCookie('is_rtl','false',365);
                        } else {
                            setCookie('is_rtl',data.is_rtl.toString(),365);
                        }
                        window.location.href=url+"?lang="+slug;
                    }
                });
            });
            function setCookie(name,value,days) {
                var expires="";
                if(days) {
                    var date=new Date();
                    date.setTime(date.getTime()+(days*24*60*60*1000));
                    expires="; expires="+date.toUTCString();
                }
                document.cookie=name+"="+(value||"")+expires+"; path=/";
            }
            function getCookie(name) {
                var nameEQ=name+"=";
                var ca=document.cookie.split(';');
                for(var i=0;i<ca.length;i++) {
                    var c=ca[i];
                    while(c.charAt(0)==' ') c=c.substring(1,c.length);
                    if(c.indexOf(nameEQ)==0) return c.substring(nameEQ.length,c.length);
                }
                return null;
            }
            database.collection('settings').doc("notification_setting").get().then(async function(snapshots) {
                var data=snapshots.data();
                if(data!=undefined) {
                    serviceJson=data.serviceJson;
                    if(serviceJson!=''&&serviceJson!=null) {
                        $.ajax({
                            type: 'POST',
                            data: {
                                serviceJson: btoa(serviceJson),
                            },
                            url: "{{ route('store-firebase-service') }}",
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function(data) {}
                        });
                    }
                }
            });
            var refDistance = database.collection('settings').doc("RestaurantNearBy");
            refDistance.get().then(async function (snapshots) {
                try {
                    var data = snapshots.data();
                    var distanceType=data.distanceType.charAt(0).toUpperCase() + data.distanceType.slice(1);
                    $('#distanceType').val(distanceType);
                    $('.global_distance_type').html(distanceType);

                } catch (error) {

                }
            });
            //On delete item delete image also from bucket general code
            const deleteDocumentWithImage=async (collection,id,singleImageField,arrayImageField) => {
                // Reference to the Firestore document
                const docRef=database.collection(collection).doc(id);
                try {
                    const doc=await docRef.get();
                    if(!doc.exists) {
                        console.log("No document found for deletion");
                        return;
                    }
                    const data=doc.data();
                    // Deleting single image field
                    if(singleImageField) {
                        if(Array.isArray(singleImageField)) {
                            for(const field of singleImageField) {
                                const imageUrl=data[field];
                                if(imageUrl) await deleteImageFromBucket(imageUrl);
                            }
                        } else {
                            const imageUrl=data[singleImageField];
                            if(imageUrl) await deleteImageFromBucket(imageUrl);
                        }
                    }
                    // Deleting array image field
                    if(arrayImageField) {
                        if(Array.isArray(arrayImageField)) {
                            for(const field of arrayImageField) {
                                const arrayImages=data[field];
                                if(arrayImages&&Array.isArray(arrayImages)) {
                                    for(const imageUrl of arrayImages) {
                                        if(imageUrl) await deleteImageFromBucket(imageUrl);
                                    }
                                }
                            }
                        } else {
                            const arrayImages=data[arrayImageField];
                            if(arrayImages&&Array.isArray(arrayImages)) {
                                for(const imageUrl of arrayImages) {
                                    if(imageUrl) await deleteImageFromBucket(imageUrl);
                                }
                            }
                        }
                    }
                    // Deleting images in variants array within item_attribute
                    const item_attribute=data.item_attribute||{};  // Access item_attribute
                    const variants=item_attribute.variants||[];    // Access variants array inside item_attribute
                    if(variants.length>0) {
                        for(const variant of variants) {
                            const variantImageUrl=variant.variant_image;
                            if(variantImageUrl) {
                                await deleteImageFromBucket(variantImageUrl);
                            }
                        }
                    }
                    // Optionally delete the Firestore document after image deletion
                    await docRef.delete();
                    console.log("Document and images deleted successfully.");
                } catch(error) {
                    console.error("Error deleting document and images:",error);
                }
            };

          
                 database.collection('users').where('id','==',"{{$id}}").get().then(async function(snapshot) {
                    var data=snapshot.docs[0].data();
                    
                    if(commisionModel||subscriptionModel) {
                        if(data.hasOwnProperty('subscriptionPlanId')&&data.subscriptionPlanId!=null) {
                            var isSubscribed=true;
                        } else {
                            var isSubscribed=false;
                        }
                    } else {
                        var isSubscribed='';
                    }
                    var url="{{ route('setSubcriptionFlag') }}";
                    $.ajax({

                        type: 'POST',

                        url: url,

                        data: {

                            email: "{{Auth::user()->email}}",
                            isSubscribed: isSubscribed
                        },
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },

                        success: function(data) {
                            if(data.access) {
                               
                            }
                        }

                    })

                })

            
        </script>

        <!-- Impersonation Banner -->
        <script>
        // Check if user is impersonated and show notification
        (function() {
            const impersonationData = localStorage.getItem('restaurant_impersonation');
            if (impersonationData) {
                try {
                    const data = JSON.parse(impersonationData);
                    if (data.isImpersonated) {
                        const banner = document.createElement('div');
                        banner.innerHTML = `
                            <div style="background: #fff3cd; border: 1px solid #ffeaa7; color: #856404; padding: 15px; margin-bottom: 20px; border-radius: 5px; position: relative; z-index: 1000;">
                                <strong>🔐 Admin Impersonation Active</strong><br>
                                You are currently logged in as this restaurant owner for support purposes.<br>
                                <small>Impersonated at: ${new Date(data.impersonatedAt).toLocaleString()}</small>
                                <button onclick="this.parentElement.parentElement.remove()" style="position: absolute; top: 10px; right: 10px; background: none; border: none; font-size: 18px; cursor: pointer;">&times;</button>
                            </div>
                        `;
                        const main = document.querySelector('main');
                        if (main && main.firstChild) {
                            main.insertBefore(banner, main.firstChild);
                        } else if (main) {
                            main.appendChild(banner);
                        }
                    }
                } catch (error) {
                    console.error('Error parsing impersonation data:', error);
                }
            }
        })();
        </script>
    </body>

</html>
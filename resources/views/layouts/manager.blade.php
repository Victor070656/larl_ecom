<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from bootstrapget.com/demos/cube-admin-template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Nov 2024 17:26:35 GMT -->

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ config('app.name') }} - Dashboard</title>

    <!-- Meta -->
    <meta name="description" content="Marketplace for Bootstrap Admin Dashboards" />
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.svg') }}" />

    <!-- *************
   ************ CSS Files *************
  ************* -->
    <link rel="stylesheet" href="{{ asset('admin/assets/fonts/bootstrap/bootstrap-icons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/main.min.css') }}" />

    <!-- *************
   ************ Vendor Css Files *************
  ************ -->

    <!-- Scrollbar CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/overlay-scroll/OverlayScrollbars.min.css') }}" />
</head>

<body>

    <!-- Page wrapper starts -->
    <div class="page-wrapper">

        <!-- Main container starts -->
        <div class="main-container">

            <!-- Sidebar wrapper starts -->
            <nav id="sidebar" class="sidebar-wrapper">

                <!-- App brand starts -->
                <div class="p-3 my-2 app-brand">
                    <a href="index.html">
                        <img src="assets/images/logo.svg" class="logo" alt="Bootstrap Gallery" />
                    </a>
                </div>

                <!-- App brand ends -->

                <!-- Sidebar menu starts -->
                <div class="sidebarMenuScroll">
                    <ul class="sidebar-menu">
                        <li class="active current-page">
                            <a href="index.html">
                                <i class="bi bi-bar-chart-line"></i>
                                <span class="menu-text">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="orders.html">
                                <i class="bi bi-shop-window"></i>
                                <span class="menu-text">Orders</span>
                            </a>
                        </li>
                        <li>
                            <a href="expenses.html">
                                <i class="bi bi-send"></i>
                                <span class="menu-text">Expenses</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#!">
                                <i class="bi bi-box"></i>
                                <span class="menu-text">Widgets</span>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="general-widgets.html">General</a>
                                </li>
                                <li>
                                    <a href="graph-widgets.html">Graph Widgers</a>
                                </li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#!">
                                <i class="bi bi-stickies"></i>
                                <span class="menu-text">Components</span>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="accordions.html">Accordions</a>
                                </li>
                                <li>
                                    <a href="alerts.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="avatars.html">Avatars</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="badges.html">Badges</a>
                                </li>
                                <li>
                                    <a href="cards.html">Cards</a>
                                </li>
                                <li>
                                    <a href="advanced-cards.html">Advanced Cards</a>
                                </li>
                                <li>
                                    <a href="carousel.html">Carousel</a>
                                </li>
                                <li>
                                    <a href="dropdowns.html">Dropdowns</a>
                                </li>
                                <li>
                                    <a href="icons.html">Icons</a>
                                </li>
                                <li>
                                    <a href="list-items.html">List Items</a>
                                </li>
                                <li>
                                    <a href="modals.html">Modals</a>
                                </li>
                                <li>
                                    <a href="offcanvas.html">Offcanvas</a>
                                </li>
                                <li>
                                    <a href="placeholders.html">Placeholders</a>
                                </li>
                                <li>
                                    <a href="progress.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="popovers.html">Popovers</a>
                                </li>
                                <li>
                                    <a href="spinners.html">Spinners</a>
                                </li>
                                <li>
                                    <a href="tabs.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="toasts.html">Toasts</a>
                                </li>
                                <li>
                                    <a href="tooltips.html">Tooltips</a>
                                </li>
                                <li>
                                    <a href="typography.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#!">
                                <i class="bi bi-ui-checks-grid"></i>
                                <span class="menu-text">Forms</span>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="form-inputs.html">Form Inputs</a>
                                </li>
                                <li>
                                    <a href="form-checkbox-radio.html">Checkbox &amp; Radio</a>
                                </li>
                                <li>
                                    <a href="form-file-input.html">File Input</a>
                                </li>
                                <li>
                                    <a href="form-validations.html">Validations</a>
                                </li>
                                <li>
                                    <a href="date-time-pickers.html">Date Time Pickers</a>
                                </li>
                                <li>
                                    <a href="input-tags.html">Input Tags</a>
                                </li>
                                <li>
                                    <a href="input-masks.html">Input Masks</a>
                                </li>
                                <li>
                                    <a href="editor.html">Editor</a>
                                </li>
                                <li>
                                    <a href="form-layouts.html">Form Layouts</a>
                                </li>
                                <li>
                                    <a href="form-tabs.html">Form Tabs</a>
                                </li>
                                <li>
                                    <a href="form-accordion.html">Form Accordion</a>
                                </li>
                                <li>
                                    <a href="form-wizard.html">Form Wizard</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="notifications.html">
                                <i class="bi bi-globe"></i>
                                <span class="menu-text">Notifications</span>
                            </a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="bi bi-calendar2"></i>
                                <span class="menu-text">Calendar</span>
                            </a>
                        </li>
                        <li>
                            <a href="contacts.html">
                                <i class="bi bi-wallet2"></i>
                                <span class="menu-text">Contacts</span>
                            </a>
                        </li>
                        <li>
                            <a href="reviews.html">
                                <i class="bi bi-mouse3"></i>
                                <span class="menu-text">Reviews</span>
                            </a>
                        </li>
                        <li>
                            <a href="support.html">
                                <i class="bi bi-headphones"></i>
                                <span class="menu-text">Support</span>
                            </a>
                        </li>
                        <li>
                            <a href="default-layout.html">
                                <i class="bi bi-layout-sidebar"></i>
                                <span class="menu-text">Default Layout</span>
                            </a>
                        </li>
                        <li>
                            <a href="tables.html">
                                <i class="bi bi-border-all"></i>
                                <span class="menu-text">Tables</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#!">
                                <i class="bi bi-pie-chart"></i>
                                <span class="menu-text">Graphs</span>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="apex.html">Apex</a>
                                </li>
                                <li>
                                    <a href="morris.html">Morris</a>
                                </li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#!">
                                <i class="bi bi-window-sidebar"></i>
                                <span class="menu-text">Invoices</span>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="create-invoice.html">Create Invoice</a>
                                </li>
                                <li>
                                    <a href="view-invoice.html">View Invoice</a>
                                </li>
                                <li>
                                    <a href="invoice-list.html">Invoice List</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="maps.html">
                                <i class="bi bi-pin-map"></i>
                                <span class="menu-text">Maps</span>
                            </a>
                        </li>
                        <li>
                            <a href="profile.html">
                                <i class="bi bi-filter-circle"></i>
                                <span class="menu-text">User Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="help.html">
                                <i class="bi bi-chat"></i>
                                <span class="menu-text">Help</span>
                            </a>
                        </li>
                        <li>
                            <a href="contact.html">
                                <i class="bi bi-phone-vibrate"></i>
                                <span class="menu-text">Contact Us</span>
                            </a>
                        </li>
                        <li>
                            <a href="settings.html">
                                <i class="bi bi-gear"></i>
                                <span class="menu-text">Settings</span>
                            </a>
                        </li>
                        <li>
                            <a href="maintenance.html">
                                <i class="bi bi-exclamation-octagon"></i>
                                <span class="menu-text">Maintenance</span>
                            </a>
                        </li>
                        <li>
                            <a href="page-not-found.html">
                                <i class="bi bi-exclamation-diamond"></i>
                                <span class="menu-text">404</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#!">
                                <i class="bi bi-upc-scan"></i>
                                <span class="menu-text">Login/Signup</span>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="signup.html">Signup</a>
                                </li>
                                <li>
                                    <a href="forgot-password.html">Forgot Password</a>
                                </li>
                                <li>
                                    <a href="reset-password.html">Reset Password</a>
                                </li>
                                <li>
                                    <a href="lock-screen.html">Lock Screen</a>
                                </li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#!">
                                <i class="bi bi-code-square"></i>
                                <span class="menu-text">Nested Menu</span>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="#!">Nested 1</a>
                                </li>
                                <li>
                                    <a href="#!">
                                        Nested 2
                                        <i class="bi bi-caret-right-fill"></i>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li>
                                            <a href="#!">Nested 2.1</a>
                                        </li>
                                        <li>
                                            <a href="#!">Nested 2.2
                                                <i class="bi bi-caret-right-fill"></i>
                                            </a>
                                            <ul class="treeview-menu">
                                                <li>
                                                    <a href="#!">Nested 2.2.1</a>
                                                </li>
                                                <li>
                                                    <a href="#!">Nested 2.2.2</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar menu ends -->

            </nav>
            <!-- Sidebar wrapper ends -->

            <!-- App container starts -->
            {{ $slot }}
            <!-- App container ends -->

        </div>
        <!-- Main container ends -->

    </div>
    <!-- Page wrapper ends -->

    <!-- *************
   ************ JavaScript Files *************
  ************* -->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/moment.min.js') }}"></script>

    <!-- *************
   ************ Vendor Js Files *************
  ************* -->

    <!-- Overlay Scroll JS -->
    <script src="{{ asset('admin/assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/overlay-scroll/custom-scrollbar.js') }}"></script>

    <!-- Apex Charts -->
    <script src="{{ asset('admin/assets/vendor/apex/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/apex/custom/analytics/stats.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/apex/custom/analytics/sales.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/apex/custom/analytics/views.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/apex/custom/analytics/audiences.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/apex/custom/analytics/orders.js') }}"></script>

    <!-- Vector Maps -->
    <script src="{{ asset('admin/assets/vendor/jvectormap/jquery-jvectormap-2.0.5.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/jvectormap/world-mill-en.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/jvectormap/gdp-data.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/jvectormap/continents-mill.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/jvectormap/custom/world-map-markers4.js') }}"></script>

    <!-- Rating -->
    <script src="{{ asset('admin/assets/vendor/rating/raty.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/rating/raty-custom.js') }}"></script>

    <!-- Custom JS files -->
    <script src="{{ asset('admin/assets/js/custom.js') }}"></script>
</body>


<!-- Mirrored from bootstrapget.com/demos/cube-admin-template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Nov 2024 17:28:13 GMT -->

</html>

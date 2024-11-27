@props(['title' => 'Dashboard'])
<div class="app-header d-flex align-items-center">

    <!-- Toggle buttons starts -->
    <div class="d-flex">
        <button class="toggle-sidebar">
            <i class="bi bi-list lh-1"></i>
        </button>
        <button class="pin-sidebar">
            <i class="bi bi-list lh-1"></i>
        </button>
    </div>
    <!-- Toggle buttons ends -->

    <!-- App brand sm starts -->
    <div class="app-brand-sm d-lg-none d-flex">

        <!-- Logo sm starts -->
        <a href="index.html">
            <img src="assets/images/logo-sm.svg" class="logo" alt="Bootstrap Gallery">
        </a>
        <!-- Logo sm end -->

    </div>
    <!-- App brand sm ends -->

    <!-- Page title starts -->
    <h5 class="m-0 ms-2 fw-semibold">{{ $title }}</h5>
    <!-- Page title ends -->

    <!-- App header actions starts -->
    <div class="header-actions">

        <!-- Search container start -->
        <div class="search-container d-xl-block d-none me-3">
            <input type="text" class="form-control" id="searchData" placeholder="Search" />
            <i class="bi bi-search"></i>
        </div>
        <!-- Search container ends -->

        <!-- Header action bar starts -->
        <div class="bg-white p-2 rounded-4 d-flex align-items-center">

            <!-- Header actions start -->
            <div class="d-sm-flex d-none">
                <div class="dropdown">
                    <a class="dropdown-toggle d-flex p-3 position-relative" href="#!" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-bag fs-4 lh-1"></i>
                        <span class="count-label">6</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-sm">
                        <h5 class="fw-semibold px-3 py-2 text-primary">Orders</h5>
                        <div class="scroll250">
                            <div class="mx-3 d-flex gap-2 flex-column">
                                <div class="bg-danger-subtle border border-danger px-3 py-2 rounded-1">
                                    <p class="m-0 text-danger">New product purchased</p>
                                    <p class="small m-0">Just now</p>
                                </div>
                                <div class="bg-success-subtle border border-success px-3 py-2 rounded-1">
                                    <p class="m-0 text-success">Order received.</p>
                                    <p class="small m-0">Today, 07:45pm</p>
                                </div>

                                <div class="bg-info-subtle border border-info px-3 py-2 rounded-1">
                                    <p class="m-0 text-info">New item ordered.</p>
                                    <p class="small m-0">Today, 07:45pm</p>
                                </div>
                                <div class="bg-warning-subtle border border-warning px-3 py-2 rounded-1">
                                    <p class="m-0 text-warning">New ticket</p>
                                    <p class="small m-0">Today, 09:30pm</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-grid m-3">
                            <a href="javascript:void(0)" class="btn btn-primary">View all</a>
                        </div>
                    </div>
                </div>
                <div class="dropdown">
                    <a class="dropdown-toggle d-flex p-3 position-relative" href="#!" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-receipt fs-4 lh-1"></i>
                        <span class="count-label bg-danger">9</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-sm">
                        <h5 class="fw-semibold px-3 py-2 text-primary">Invoices</h5>
                        <div class="scroll250">
                            <div class="dropdown-item">
                                <div class="d-flex align-items-center py-2">
                                    <img src="assets/images/user1.png" class="img-3x me-3 rounded-5"
                                        alt="Admin Theme" />
                                    <div class="m-0">
                                        <h4 class="mb-2 text-primary">$450.00</h4>
                                        <h6 class="mb-1 fw-semibold">MSD Solutions</h6>
                                        <p class="m-0 text-secondary">
                                            Invoice #99885<span class="badge bg-info ms-2">Paid</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <div class="d-flex align-items-center py-2">
                                    <img src="assets/images/user2.png" class="img-3x me-3 rounded-5"
                                        alt="Admin Theme" />
                                    <div class="m-0">
                                        <h4 class="mb-2 text-primary">$290.00</h4>
                                        <h6 class="mb-1 fw-semibold">VK Inc</h6>
                                        <p class="m-0 text-secondary">
                                            Invoice #99887<span class="badge bg-info ms-2">Paid</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <div class="d-flex align-items-center py-2">
                                    <img src="assets/images/user3.png" class="img-3x me-3 rounded-5"
                                        alt="Admin Theme" />
                                    <div class="m-0">
                                        <h4 class="mb-2 text-primary">$330.00</h4>
                                        <h6 class="mb-1 fw-semibold">Sky Labs</h6>
                                        <p class="m-0 text-secondary">
                                            Invoice #99888<span class="badge bg-info ms-2">Paid</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <div class="d-flex align-items-center py-2">
                                    <img src="assets/images/user4.png" class="img-3x me-3 rounded-5"
                                        alt="Admin Theme" />
                                    <div class="m-0">
                                        <h4 class="mb-2 text-primary">$380.00</h4>
                                        <h6 class="mb-1 fw-semibold">Good Works Inc</h6>
                                        <p class="m-0 text-secondary">
                                            Invoice #99889<span class="badge bg-info ms-2">Paid</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-grid m-3">
                            <a href="javascript:void(0)" class="btn btn-primary">View all</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header actions end -->

            <!-- User settings start -->
            <div class="dropdown ms-2">
                <a id="userSettings" class="dropdown-toggle user-settings" href="#!" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="me-2 text-truncate d-lg-block d-none">Sally Esparza</span>
                    <div class="icon-box md rounded-4 fw-bold bg-primary-subtle text-primary">
                        SE
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end shadow-lg">
                    <a class="dropdown-item d-flex align-items-center" href="profile.html"><i
                            class="bi bi-person fs-4 me-2"></i>My Profile</a>
                    <a class="dropdown-item d-flex align-items-center" href="settings.html"><i
                            class="bi bi-gear fs-4 me-2"></i>Account Settings</a>
                    <div class="mx-3 my-2 d-grid">
                        <a href="login.html" class="btn btn-warning">Logout</a>
                    </div>
                </div>
            </div>
            <!-- User settings end -->

        </div>
        <!-- Header action bar ends -->

    </div>
    <!-- App header actions ends -->

</div>

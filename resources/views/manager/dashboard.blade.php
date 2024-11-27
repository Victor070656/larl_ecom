<x-manager-layout>
    {{-- @dd(uniqid()) --}}
    <div class="app-container">

        <!-- App header starts -->
        <x-app-header title="Dashboard" />
        <!-- App header ends -->

        <!-- App body starts -->
        <div class="app-body">

            <!-- Row starts -->
            <div class="row gx-4">
                <div class="col-xxl-3 col-sm-6 col-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="p-1 border border-primary rounded-circle me-3">
                                    <div id="radial1"></div>
                                </div>
                                <div class="d-flex flex-column">
                                    <h2 class="lh-1">2200</h2>
                                    <p class="m-0 opacity-50">Sales</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-1">
                                <a class="text-primary" href="javascript:void(0);">
                                    <span>View All</span>
                                    <i class="bi bi-arrow-right ms-2"></i>
                                </a>
                                <div class="text-end">
                                    <p class="mb-0 text-primary">+20%</p>
                                    <span class="badge bg-primary-subtle text-primary small">this month</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6 col-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="p-1 border border-success rounded-circle me-3">
                                    <div id="radial2"></div>
                                </div>
                                <div class="d-flex flex-column">
                                    <h2 class="lh-1">4400</h2>
                                    <p class="m-0 opacity-50">Orders</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-1">
                                <a class="text-primary" href="javascript:void(0);">
                                    <span>View All</span>
                                    <i class="bi bi-arrow-right ms-2"></i>
                                </a>
                                <div class="text-end">
                                    <p class="mb-0 text-success">+30%</p>
                                    <span class="badge bg-success-subtle text-success small">this month</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6 col-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="p-1 border border-info rounded-circle me-3">
                                    <div id="radial3"></div>
                                </div>
                                <div class="d-flex flex-column">
                                    <h2 class="lh-1">6600</h2>
                                    <p class="m-0 opacity-50">Invoices</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-1">
                                <a class="text-primary" href="javascript:void(0);">
                                    <span>View All</span>
                                    <i class="bi bi-arrow-right ms-2"></i>
                                </a>
                                <div class="text-end">
                                    <p class="mb-0 text-info">+60%</p>
                                    <span class="badge bg-info-subtle text-info small">this month</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6 col-12">
                    <div class="card mb-4 bg-primary">
                        <div class="card-body text-white">
                            <div class="d-flex align-items-center">
                                <div class="p-1 border border-white rounded-circle me-3">
                                    <div id="radial4"></div>
                                </div>
                                <div class="d-flex flex-column">
                                    <h2 class="m-0 lh-1">8800</h2>
                                    <p class="m-0 opacity-50">Payments</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-1">
                                <a class="text-white" href="javascript:void(0);">
                                    <span>View All</span>
                                    <i class="bi bi-arrow-right ms-2"></i>
                                </a>
                                <div class="text-end">
                                    <p class="mb-0 text-warning">+90%</p>
                                    <span class="badge bg-danger text-white small">this month</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row ends -->

            <!-- Row starts -->
            <div class="row gx-4">
                <div class="col-sm-12">
                <div class="card mb-3 mt-5 pt-3">
                  <div class="card-header">
                    <h5 class="card-title fw-bold">Orders</h5>
                  </div>
                  <div class="card-body">
                    <div class="table-outer">
                      <div class="table-responsive">
                        <table class="table align-middle table-hover m-0 truncate">
                          <thead>
                            <tr>
                              <th scope="col">Employee</th>
                              <th scope="col">Position</th>
                              <th scope="col">Address</th>
                              <th scope="col">Age</th>
                              <th scope="col">Start date</th>
                              <th scope="col">Progress</th>
                              <th scope="col">Salary</th>
                              <th scope="col">Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <img class="rounded-circle img-3x me-2" src="{{ ("admin/assets/images/user.png") }}"
                                  alt="Bootstrap Gallery">
                              </td>
                              <td>Developer</td>
                              <td>3994 Grant View Drive, Muskego, 53150</td>
                              <td>28</td>
                              <td>28/10/2023</td>
                              <td>
                                <div class="progress small">
                                  <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td>$92,000</td>
                              <td>
                                <a class="btn btn-info btn-sm" href="#"><i class="bi bi-pencil"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <img class="rounded-circle img-3x me-2" src="{{ asset("admin/assets/images/user2.png") }}"
                                  alt="Bootstrap Gallery">
                              </td>
                              <td>Sales</td>
                              <td>
                                913 Alpaca Way, Garden Grove, California, 92643
                              </td>
                              <td>32</td>
                              <td>30/10/2023</td>
                              <td>
                                <div class="progress small">
                                  <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td>$86,000</td>
                              <td>
                                <a class="btn btn-primary btn-icon btn-sm mb-1" href="#"><i class="bi bi-trash"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <img class="rounded-circle img-3x me-2" src="{{ asset("admin/assets/images/user3.png") }}"
                                  alt="Bootstrap Gallery">
                              </td>
                              <td>Developer</td>
                              <td>
                                2343 Burwell Heights Road, Nederland, Texas, 77627
                              </td>
                              <td>36</td>
                              <td>16/11/2023</td>
                              <td>
                                <div class="progress small">
                                  <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td>$78,000</td>
                              <td>
                                <a class="btn btn-info btn-sm" href="#"><i class="bi bi-pencil"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <img class="rounded-circle img-3x me-2" src="{{ asset("admin/assets/images/user4.png") }}"
                                  alt="Bootstrap Gallery">
                              </td>
                              <td>Designer</td>
                              <td>
                                2127 Boone Crockett Lane, Seattle, Washington, 98109
                              </td>
                              <td>45</td>
                              <td>21/12/2023</td>
                              <td>
                                <div class="progress small">
                                  <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td>$65,000</td>
                              <td>
                                <a class="btn btn-primary btn-icon btn-sm mb-1" href="#"><i class="bi bi-trash"></i>
                                </a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Row ends -->

        </div>
        <!-- App body ends -->

        <!-- App footer starts -->
        <div class="app-footer">
            <span class="small">© Bootstrap Gallery 2024</span>
        </div>
        <!-- App footer ends -->

    </div>
</x-manager-layout>

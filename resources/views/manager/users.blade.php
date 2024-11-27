<x-manager-layout>
    {{-- @dd(uniqid()) --}}
    <div class="app-container">

        <!-- App header starts -->
        <x-app-header title="Users" />
        <!-- App header ends -->

        <!-- App body starts -->
        <div class="app-body">


            <!-- Row starts -->
            <div class="row gx-4">
                <div class="col-sm-12">
                <div class="card mb-3 mt-5 pt-3">
                  <div class="card-header">
                    <h5 class="card-title fw-bold">All Users</h5>
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

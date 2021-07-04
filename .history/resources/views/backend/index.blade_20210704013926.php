<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Katen - Admins</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('backend/vendors/iconfonts/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/iconfonts/ionicons/dist/css/ionicons.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/css/vendor.bundle.addons.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('backend/css/shared/style.css') }}">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('backend/css/demo_1/style.css') }}">
    <!-- End Layout styles -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
  </head>
  <body>
    <div class="container-scroller" id ="#app">

     <page-nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="{{ asset('backend/images/faces/face8.jpg') }}" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Allen Moreno</p>
                  <p class="designation">Premium user</p>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">Main Menu</li>
            <li class="nav-item">
              <a class="nav-link" href="index.html">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
              <div class="col-12">
                <div class="page-header">
                  <h4 class="page-title">Dashboard</h4>
                  <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                    <ul class="quick-links">
                      <li><a href="#">ICE Market data</a></li>
                      <li><a href="#">Own analysis</a></li>
                      <li><a href="#">Historic market data</a></li>
                    </ul>
                    <ul class="quick-links ml-auto">
                      <li><a href="#">Settings</a></li>
                      <li><a href="#">Analytics</a></li>
                      <li><a href="#">Watchlist</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="page-header-toolbar">
                  <div class="btn-group toolbar-item" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-secondary"><i class="mdi mdi-chevron-left"></i></button>
                    <button type="button" class="btn btn-secondary">03/02/2019 - 20/08/2019</button>
                    <button type="button" class="btn btn-secondary"><i class="mdi mdi-chevron-right"></i></button>
                  </div>
                  <div class="filter-wrapper">
                    <div class="dropdown toolbar-item">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownsorting" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Day</button>
                      <div class="dropdown-menu" aria-labelledby="dropdownsorting">
                        <a class="dropdown-item" href="#">Last Day</a>
                        <a class="dropdown-item" href="#">Last Month</a>
                        <a class="dropdown-item" href="#">Last Year</a>
                      </div>
                    </div>
                    <a href="#" class="advanced-link toolbar-item">Advanced Options</a>
                  </div>
                  <div class="sort-wrapper">
                    <button type="button" class="btn btn-primary toolbar-item">Add Post</button>
                    <div class="dropdown ml-lg-auto ml-3 toolbar-item">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownexport" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Export</button>
                      <div class="dropdown-menu" aria-labelledby="dropdownexport">
                        <a class="dropdown-item" href="#">Export as PDF</a>
                        <a class="dropdown-item" href="#">Export as DOCX</a>
                        <a class="dropdown-item" href="#">Export as CDR</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Page Title Header Ends-->
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-3 col-md-6">
                        <div class="d-flex">
                          <div class="wrapper">
                            <h3 class="mb-0 font-weight-semibold">32,451</h3>
                            <h5 class="mb-0 font-weight-medium text-primary">Visits</h5>
                            <p class="mb-0 text-muted">+14.00(+0.50%)</p>
                          </div>
                          <div class="wrapper my-auto ml-auto ml-lg-4">
                            <canvas height="50" width="100" id="stats-line-graph-1"></canvas>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                        <div class="d-flex">
                          <div class="wrapper">
                            <h3 class="mb-0 font-weight-semibold">15,236</h3>
                            <h5 class="mb-0 font-weight-medium text-primary">Impressions</h5>
                            <p class="mb-0 text-muted">+138.97(+0.54%)</p>
                          </div>
                          <div class="wrapper my-auto ml-auto ml-lg-4">
                            <canvas height="50" width="100" id="stats-line-graph-2"></canvas>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                        <div class="d-flex">
                          <div class="wrapper">
                            <h3 class="mb-0 font-weight-semibold">7,688</h3>
                            <h5 class="mb-0 font-weight-medium text-primary">Conversation</h5>
                            <p class="mb-0 text-muted">+57.62(+0.76%)</p>
                          </div>
                          <div class="wrapper my-auto ml-auto ml-lg-4">
                            <canvas height="50" width="100" id="stats-line-graph-3"></canvas>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                        <div class="d-flex">
                          <div class="wrapper">
                            <h3 class="mb-0 font-weight-semibold">1,553</h3>
                            <h5 class="mb-0 font-weight-medium text-primary">Downloads</h5>
                            <p class="mb-0 text-muted">+138.97(+0.54%)</p>
                          </div>
                          <div class="wrapper my-auto ml-auto ml-lg-4">
                            <canvas height="50" width="100" id="stats-line-graph-4"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Posts</h4>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Title</th>
                          <th>Content</th>
                          <th>Created</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>53275535</td>
                          <td>53275535</td>
                          <td>20 May 2017</td>
                          <td>
                            <label class="badge badge-success">edit</label>
                            <label class="badge badge-danger">delete</label>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">© 2021 Ela - the tech nerd.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">There are two ways to write error-free programs; only the third works.</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="assets/js/shared/off-canvas.js"></script>
    <script src="assets/js/shared/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="assets/js/demo_1/dashboard.js"></script>
    <!-- End custom js for this page-->
    <script src="assets/js/shared/jquery.cookie.js" type="text/javascript"></script>
  </body>
</html>
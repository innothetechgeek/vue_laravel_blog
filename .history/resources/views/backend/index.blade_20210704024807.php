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
    <div class="container-scroller" id ="app">

     <page-nav></page-nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">

        <!-- sidebar -->
        <page-sidebar></page-sidebar>


        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
           
           <!-- content header -->
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
    <script src="{{ mix('/js/app.js') }}"></script>
  </body>
</html>
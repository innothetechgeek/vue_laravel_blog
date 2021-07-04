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
            <content-header></content-header>

            <!-- stats -->
            <!-- dashboard-stats -->
            <dashboard-stats></dashboard-stats>
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
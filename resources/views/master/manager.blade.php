<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href={{ "dashboard/assets/vendors/mdi/css/materialdesignicons.min.css" }}>
    <link rel="stylesheet" href={{ "dashboard/assets/vendors/css/vendor.bundle.base.css" }}>
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href={{ "dashboard/assets/vendors/jvectormap/jquery-jvectormap.css" }}>
    <link rel="stylesheet" href={{ "dashboard/assets/vendors/flag-icon-css/css/flag-icon.min.css" }}>
    <link rel="stylesheet" href={{ "dashboard/assets/vendors/owl-carousel-2/owl.carousel.min.css" }}>
    <link rel="stylesheet" href={{ "dashboard/assets/vendors/owl-carousel-2/owl.theme.default.min.css" }}>
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href={{"../../dashboard/assets/css/style.css"}}>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <h3 class="sidebar-brand brand-logo">Cafe Bisa Ngopi</h3>
          <h3 class="sidebar-brand brand-logo-mini">CBN</h3>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src={{ "../../dashboard/assets/images/faces/face15.jpg" }} alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">{{ Auth::user()->name }}</h5>
                  <span>Manager</span>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="/" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Log Out</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('manager.index') }}">
              <span class="menu-title">Menu</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('laporan.index') }}">
              <span class="menu-title">Laporan</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src={{ "assets/images/logo-mini.svg" }} alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->

        <div class="main-panel">
          @yield('main')
        </div>
       
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src={{ "dashboard/assets/vendors/js/vendor.bundle.base.js" }}></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src= "dashboard/assets/vendors/chart.js/Chart.min.js"></script>
  <script src={{ "dashboard/assets/vendors/progressbar.js/progressbar.min.js" }}></script>
  <script src={{ "dashboard/assets/vendors/jvectormap/jquery-jvectormap.min.js" }}></script>
  <script src={{ "dashboard/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js" }}></script>
  <script src={{ "dashboard/assets/vendors/owl-carousel-2/owl.carousel.min.js" }}></script>
  <script src={{ "dashboard/assets/js/jquery.cookie.js"  }}type="text/javascript"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src={{ "dashboard/assets/js/off-canvas.js" }}></script>
  <script src={{ "dashboard/assets/js/hoverable-collapse.js" }}></script>
  <script src={{ "dashboard/assets/js/misc.js" }}></script>
  <script src={{ "dashboard/assets/js/settings.js" }}></script>
  <script src={{ "dashboard/assets/js/todolist.js" }}></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <script src={{ "dashboard/assets/js/dashboard.js" }}></script>
  <!-- End custom js for this page -->
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head class="antialiased">
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="admin_support/img/favicon.png" rel="icon">
  <!-- <link href="admin_support/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="admin_support/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="admin_support/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="admin_support/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="admin_support/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="admin_support/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="admin_support/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="admin_support/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="admin_support/css/style.css" rel="stylesheet">
</head>

<body class="antialiased">

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="{{url('/Admin') }}" class="logo d-flex align-items-center">
        <img src="admin_support/img/logo.png" alt="">
        <span class="d-none d-lg-block">EasyEat</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->


    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <!-- End Search Icon-->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="admin_support/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">M.S</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Milind sahu</h6>
              <span>proprietor</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{url('/profile') }}">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>




            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{url('/logout')}}">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{url('/Admin')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->


      <!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Report</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{url('/employee') }}">
              <i class="bi bi-circle"></i><span>Employee Details</span>
            </a>
          </li>
          <li>
            <a href="{{url('/user') }}">
              <i class="bi bi-circle"></i><span>User Details</span>
            </a>
          </li>
          <li>
            <a href="{{url('/request') }}">
              <i class="bi bi-circle"></i><span>Request</span>
            </a>
          </li>
          <li>
            <a href="{{url('/Feed-backs') }}">
              <i class="bi bi-circle"></i><span>Feed backs</span>
            </a>
          </li>

          <li>
            <a href="{{url('/Stats') }}">
              <i class="bi bi-circle"></i><span>stats</span>
            </a>
          </li>


        </ul>
      </li><!-- End Tables Nav -->




      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('/profile') }}">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->



      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li> --}}
      <!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('/addemp')}}">
          <i class="bi bi-card-list"></i>
          <span>Add employee</span>
        </a>
      </li><!-- End Register Page Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('/updatemenu')}}">
          <i class="bi bi-card-list"></i>
          <span>update menu</span>
        </a>
      </li>

      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li> --}}
      <!-- End Login Page Nav -->

      <!-- End Error 404 Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li><!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->


  <main class="main">
    @yield('content')
</main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Admin page</span></strong>. All Rights Reserved
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="admin_support/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="admin_support/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="admin_support/vendor/chart.js/chart.umd.js"></script>
  <script src="admin_support/vendor/echarts/echarts.min.js"></script>
  <script src="admin_support/vendor/quill/quill.js"></script>
  <script src="admin_support/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="admin_support/vendor/tinymce/tinymce.min.js"></script>
  <script src="admin_support/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="admin_support/js/main.js"></script>

</body>

</html>
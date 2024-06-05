  <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DNASOUNDSTUDIO | DASHBOARD</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('securedashboard/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('securedashboard/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('securedashboard/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('securedashboard/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{ asset('securedashboard/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{ asset('securedashboard/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{ asset('securedashboard/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('securedashboard/css/style.css')}}" rel="stylesheet">
  @yield('header')

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        {{-- <img src="assets/img/logo.png" alt=""> --}}
        <span class="d-none d-lg-block">DNASOUNDSTUDIO</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          
            
           
            <span class="d-none d-md-block dropdown-toggle ps-2">{{ $user->name }}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{ $user->name }}</h6>
              <span>{{ $user->email }}</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" onclick='return confirm("Are you sure you want to logout?")' href="/logout">
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
        <a class="nav-link " href="/dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <div id="navbarVerticalMenuPagesMenu">


        {{-- <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-menu-button-wide"></i><span>Projects</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="/createproject">
                <i class="bi bi-circle"></i><span>Add Project</span>
              </a>
            </li>
            <li>
              <a href="/viewprojects">
                <i class="bi bi-circle"></i><span>View Project</span>
              </a>
            </li>
           
          
          </ul>
        </li> --}}




        {{-- <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
            <i class="bi-receipt"></i><span>Services</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="/addclient">
                <i class="bi bi-circle"></i><span>Add Service</span>
              </a>
            </li>
            <li>
              <a href="/viewclients">
                <i class="bi bi-circle"></i><span>View Services</span>
              </a>
            </li>
           
          </ul>
        </li><!-- End Charts Nav --> --}}

        {{-- <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#charts-blog" data-bs-toggle="collapse" href="#">
            <i class="bi-receipt"></i><span>Blogs</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="charts-blog" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="/addblog">
                <i class="bi bi-circle"></i><span>Add Blogs</span>
              </a>
            </li>
            <li>
              <a href="/viewblogs">
                <i class="bi bi-circle"></i><span>View Blogs</span>
              </a>
            </li>
           
          </ul>
        </li><!-- End Charts Nav --> --}}


      </div>


    

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-chat-dots"></i>
          <span>Contact Us</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="/logout" onclick='return confirm("Are you sure you want to logout?")'>
          <i class="bi bi-box-arrow-in-left"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Login Page Nav -->


    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

   
    @yield('content')
   

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>DNASOUNDSTUDIO</span></strong>. All Rights Reserved
    </div>
   
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('securedashboard/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{ asset('securedashboard/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('securedashboard/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{ asset('securedashboard/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{ asset('securedashboard/vendor/quill/quill.min.js')}}"></script>
  <script src="{{ asset('securedashboard/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{ asset('securedashboard/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{ asset('securedashboard/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('securedashboard/js/main.js')}}"></script>

  {{-- //from the old dashboard  --}}
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Include Clipboard.js library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.10/clipboard.min.js"></script>

  <script>
    @if(isset($notification))

Swal.fire(
        '{{ $notification->title }}',
        '{{ $notification->description }}',
        'info'
)
@endif

@if (session('message'))
                Swal.fire({
                        icon: 'success',
                        title: '{{ session("message") }}'
                        }) 
           
        @endif

        @if (session('success'))
                Swal.fire({
                        icon: 'success',
                        title: '{{ session("success") }}'
                        }) 
           
        @endif

        @if (session('error'))
                Swal.fire({
                        icon: 'error',
                        title: '{{ session("error") }}'
                        }) 
           
        @endif
        $('#refCode').click(function() {
      // Select the input field content
      var inputField = $('#refContent');
      inputField.select();
      

      // Copy the selected content to clipboard
      document.execCommand('copy');

      // Deselect the input field
      inputField.blur();

      // You can add a visual feedback if needed, for example, change the icon color or show a tooltip
     
      $("#refCode").text('Copied')

      // Optionally, revert the icon color after a short delay
      setTimeout(function() {
        $('#refCode').html('<i class="bi-clipboard"></i>'); // Revert to the original color (empty string removes inline style)
      }, 1000); // Adjust the delay as needed
    });
 
 
  </script>

  @yield('script')

</body>

</html>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DNA Sound Studio</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="https://dnasoundstudio.com/producers/assets/images/favicon.ico" />

      
      <link rel="stylesheet" href="{{url('producers/assets/css/backend.min.css')}}">
      <link rel="stylesheet" href="{{url('producers/assets/vendor/fortawesome/fontawesome-free/css/all.min.css')}}">
      <link rel="stylesheet" href="{{url('producers/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css')}}">
      <link rel="stylesheet" href="{{url('producers/assets/vendor/remixicon/fonts/remixicon.css')}}">
      <link rel="stylesheet" href="{{url('producers/assets/vendor/icon/dripicons/dripicons.css')}}">
      
      <link rel='stylesheet' href="{{url('producers/assets/vendor/fullcalendar/core/main.css')}}" />
      <link rel='stylesheet' href="{{url('producers/assets/vendor/fullcalendar/daygrid/main.css')}}" />
      <link rel='stylesheet' href="{{url('producers/assets/vendor/fullcalendar/timegrid/main.css')}}" />
      <link rel='stylesheet' href="{{url('producers/assets/vendor/fullcalendar/list/main.css')}}" />
      <link rel="stylesheet" href="{{url('producers/assets/vendor/mapbox/mapbox-gl.css')}}"> 
    @yield('header')
</head>

<body class=" color-light ">
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">

        <div class="iq-sidebar  sidebar-default ">
            <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
                <a href="/" class="header-logo">
                    <img src="/assets/images/logo/png/logo5.png" class="img-fluid rounded-normal" alt="logo">
                </a>
                <div class="iq-menu-bt-sidebar">
                    <i class="las la-bars wrapper-menu"></i>
                </div>
            </div>
            <div class="data-scrollbar" data-scroll="1">
                <nav class="iq-sidebar-menu">
                    <ul id="iq-sidebar-toggle" class="iq-menu">
                        <li class=" ">
                            <a href="/dashboard" class="">
                                <i class="las la-home iq-arrow-left"></i><span>Dashboard</span>
                            </a>
                           
                        </li>
                        <li class=" ">
                            <a href="/dashboard" class="">
                                <i class="las la-home iq-arrow-left"></i><span>Profile</span>
                            </a>
                           
                        </li>
                        <li class=" ">
                            <a href="/dashboard" class="">
                                <i class="las la-home iq-arrow-left"></i><span>Resources</span>
                            </a>
                           
                        </li>
                        <li class=" ">
                            <a href="/dashboard" class="">
                                <i class="las la-home iq-arrow-left"></i><span>Storage Drive</span>
                            </a>
                           
                        </li>
                    
                      
                        <li class=" ">
                            <a href="#pages" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <i class="lab la-readme iq-arrow-left"></i><span>Extra Pages</span>
                                <i class="las la-plus iq-arrow-right arrow-active"></i>
                                <i class="las la-minus iq-arrow-right arrow-hover"></i>
                            </a>
                            <ul id="pages" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li class=" ">
                                    <a href="#contact" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                        <i class="las la-address-book"></i><span>Contact</span>
                                        <i class="las la-plus iq-arrow-right arrow-active"></i>
                                        <i class="las la-minus iq-arrow-right arrow-hover"></i>
                                    </a>
                                    <ul id="contact" class="iq-submenu collapse" data-parent="#pages">
                                        <li class=" ">
                                            <a href="#">
                                                <i class="las la-file-alt"></i><span>Contact List</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="#">
                                                <i class="las la-address-card"></i><span>Contact Details</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=" ">
                                    <a href="#timeline" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                        <i class="las la-atom"></i><span>Timeline</span>
                                        <i class="las la-plus iq-arrow-right arrow-active"></i>
                                        <i class="las la-minus iq-arrow-right arrow-hover"></i>
                                    </a>
                                    <ul id="timeline" class="iq-submenu collapse" data-parent="#pages">
                                        <li class=" ">
                                            <a href="https://dnasoundstudio.com/prox/html/backend/timeline.html">
                                                <i class="las la-circle-notch"></i><span>Timeline 1</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="https://dnasoundstudio.com/prox/html/backend/timeline-1.html">
                                                <i class="las la-compact-disc"></i><span>Timeline 2</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="https://dnasoundstudio.com/prox/html/backend/timeline-2.html">
                                                <i class="las la-cog"></i><span>Timeline 3</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="https://dnasoundstudio.com/prox/html/backend/timeline-3.html">
                                                <i class="las la-snowflake"></i><span>Timeline 4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=" ">
                                    <a href="#pricing" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                        <i class="lab la-paypal"></i><span>Pricing</span>
                                        <i class="las la-plus iq-arrow-right arrow-active"></i>
                                        <i class="las la-minus iq-arrow-right arrow-hover"></i>
                                    </a>
                                    <ul id="pricing" class="iq-submenu collapse" data-parent="#pages">
                                        <li class=" ">
                                            <a href="https://dnasoundstudio.com/prox/html/backend/pricing.html">
                                                <i class="las la-weight"></i><span>Pricing 1</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="https://dnasoundstudio.com/prox/html/backend/pricing-1.html">
                                                <i class="las la-crutch"></i><span>Pricing 2</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="https://dnasoundstudio.com/prox/html/backend/pricing-2.html">
                                                <i class="las la-tablets"></i><span>Pricing 3</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="https://dnasoundstudio.com/prox/html/backend/pricing-3.html">
                                                <i class="las la-dna"></i><span>Pricing 4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=" ">
                                    <a href="#pages-error" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                        <i class="las la-exclamation-triangle"></i><span>Error</span>
                                        <i class="las la-plus iq-arrow-right arrow-active"></i>
                                        <i class="las la-minus iq-arrow-right arrow-hover"></i>
                                    </a>
                                    <ul id="pages-error" class="iq-submenu collapse" data-parent="#pages">
                                        <li class=" ">
                                            <a href="https://dnasoundstudio.com/prox/html/backend/pages-error.html">
                                                <i class="las la-exclamation-circle"></i><span>Error 404</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="https://dnasoundstudio.com/prox/html/backend/pages-error-500.html">
                                                <i class="las la-bug"></i><span>Error 500</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=" ">
                                    <a href="https://dnasoundstudio.com/prox/html/backend/pages-invoice.html">
                                        <i class="las la-file-invoice"></i><span>Invoice</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://dnasoundstudio.com/prox/html/backend/pages-subscribers.html">
                                        <i class="las la-sort"></i><span>Subscribers</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://dnasoundstudio.com/prox/html/backend/pages-faq.html">
                                        <i class="las la-drafting-compass"></i><span>Faq</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://dnasoundstudio.com/prox/html/backend/pages-blank-page.html">
                                        <i class="las la-folder-open"></i><span>Blank Page</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://dnasoundstudio.com/prox/html/backend/pages-maintenance.html">
                                        <i class="las la-cogs"></i><span>Maintenance</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://dnasoundstudio.com/prox/html/backend/pages-comingsoon.html">
                                        <i class="lab la-cc-mastercard"></i><span>Coming Soon</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div class="p-3"></div>
            </div>
        </div>
        <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                        <i class="ri-menu-line wrapper-menu"></i>
                        <a href="index.html" class="header-logo">
                            <img src="/assets/images/logo/png/logo5.png" class="img-fluid rounded-normal" alt="logo">
                        </a>
                    </div>
                    <div class="iq-search-bar device-search">
                        <form action="#" class="searchbox">
                            <input type="text" class="text search-input" placeholder="Type here to search...">
                            <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                        </form>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="change-mode">
                            <div class="custom-control custom-switch custom-switch-icon custom-control-inline">
                                <div class="custom-switch-inner">
                                    <p class="mb-0"> </p>
                                    <input type="checkbox" class="custom-control-input" id="dark-mode" data-active="true">
                                    <label class="custom-control-label" for="dark-mode" data-mode="toggle">
                                        <span class="switch-icon-left"><i class="a-left"></i></span>
                                        <span class="switch-icon-right"><i class="a-right"></i></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
                            <i class="ri-menu-3-line"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto navbar-list align-items-center">
                                <li class="nav-item nav-icon search-content">
                                    <a href="#" class="search-toggle rounded" id="dropdownSearch" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ri-search-line"></i>
                                    </a>
                                    <div class="iq-search-bar iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownSearch">
                                        <form action="#" class="searchbox p-2">
                                            <div class="form-group mb-0 position-relative">
                                                <input type="text" class="text search-input font-size-12" placeholder="type here to search...">
                                                <a href="#" class="search-link"><i class="las la-search"></i></a>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                              
                                <li class="nav-item nav-icon dropdown">
                                    <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ri-mail-line"></i>
                                        <span class="bg-primary count-mail"></span>
                                    </a>
                                    <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                        <div class="card shadow-none m-0">
                                            <div class="card-body p-0 ">
                                                <div class="cust-title p-3">
                                                    <h5 class="mb-0">All Messages</h5>
                                                </div>
                                                <div class="p-3">
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center">
                                                            <div class="">
                                                                <img class="avatar-40 rounded-small" src="https://dnasoundstudio.com/producers/assets/images/user/01.jpg" alt="01">
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0">New beat by DJ Chicken <small class="badge badge-success float-right">New</small></h6>
                                                                <small class="float-left font-size-12">12:00 PM</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center">
                                                            <div class="">
                                                                <img class="avatar-40 rounded-small" src="https://dnasoundstudio.com/producers/assets/images/user/02.jpg" alt="02">
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0 ">New beat by Don Jazzy</h6>
                                                                <small class="float-left font-size-12">20 Apr</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                 
                                                </div>
                                                <a class="right-ic btn btn-primary btn-block position-relative p-2" href="#" role="button">
                                                    <div class="dd-icon"><i class="las la-arrow-right mr-0"></i></div>
                                                    View All
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item nav-icon dropdown">
                                    <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ri-notification-line"></i>
                                        <span class="bg-primary dots"></span>
                                    </a>
                                    <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <div class="card shadow-none m-0">
                                            <div class="card-body p-0 ">
                                                <div class="cust-title p-3">
                                                    <h5 class="mb-0">All Notifications</h5>
                                                </div>
                                                <div class="p-3">
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center">
                                                            <div class="">
                                                                <img class="avatar-40 rounded-small" src="https://dnasoundstudio.com/producers/assets/images/user/01.jpg" alt="01">
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0">Fasanya just purchased your beat <small class="badge badge-success float-right">New</small></h6>
                                                                <p class="mb-0">95 MB</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center">
                                                            <div class="">
                                                                <img class="avatar-40 rounded-small" src="https://dnasoundstudio.com/producers/assets/images/user/02.jpg" alt="02">
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0 ">You are almost out os space, try and upgrade your plan</h6>
                                                                <p class="mb-0">Admin</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                  
                                                   
                                                </div>
                                                <a class="right-ic btn btn-primary btn-block position-relative p-2" href="#" role="button">
                                                    <div class="dd-icon"><i class="las la-arrow-right mr-0"></i></div>
                                                    View All
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                              
                                <li class="nav-item iq-full-screen"><a href="#" class="" id="btnFullscreen"><i class="ri-fullscreen-line"></i></a></li>
                                <li class="caption-content">
                                    <a href="#" class="iq-user-toggle">
                                        <img src="https://dnasoundstudio.com/producers/assets/images/user/1.jpg" class="img-fluid rounded" alt="user">
                                    </a>
                                    <div class="iq-user-dropdown">
                                        <div class="card">
                                            <div class="card-header d-flex justify-content-between align-items-center mb-0">
                                                <div class="header-title">
                                                    <h4 class="card-title mb-0">Profile</h4>
                                                </div>
                                                <div class="close-data text-right badge badge-primary cursor-pointer"><i class="ri-close-fill"></i></div>
                                            </div>
                                            <div class="data-scrollbar" data-scroll="2">
                                                <div class="card-body">
                                                    <div class="profile-header">
                                                        <div class="cover-container text-center">
                                                            <img src="https://dnasoundstudio.com/producers/assets/images/user/1.jpg" alt="profile-bg" class="rounded img-fluid avatar-80">
                                                            <div class="profile-detail mt-3">
                                                                <h3>{{Auth::user()->name }}</h3>
                                                                <p class="mb-1">Producer</p>
                                                            </div>
                                                            <a href="/logout" onclick="return confirm('Are you sure you want to log out?')" class="btn btn-primary">Sign Out</a>
                                                        </div>
                                                        <div class="profile-details my-4">
                                                            <a href="/profile" class="iq-sub-card bg-primary-light rounded-small p-2">
                                                                <div class="media align-items-center">
                                                                    <div class="rounded iq-card-icon-small">
                                                                        <i class="ri-file-user-line"></i>
                                                                    </div>
                                                                    <div class="media-body ml-3">
                                                                        <h6 class="mb-0 ">My Profile</h6>
                                                                        <p class="mb-0 font-size-12">View personal profile details.</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                         
                                                        </div>
                                                      
                                                    </div>
                                                    <div class="p-3"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        @yield('content')
       
    </div>
    <!-- Wrapper End-->
    <footer class="iq-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="#">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 text-right">
                    Copyright <span id="copyright">
                        <script>
                            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                        </script>
                    </span> @<a href="#">DNA Sound Studio</a> All Rights Reserved.
                </div>
            </div>
        </div>
    </footer>
    <script src="{{url('producers/assets/js/backend-bundle.min.js')}}"></script>
    
    <!-- Flextree Javascript-->
    <script src="{{url('producers/assets/js/flex-tree.min.js')}}"></script>
    <script src="{{url('producers/assets/js/tree.js')}}"></script>
    
    <!-- Table Treeview JavaScript -->
    <script src="{{url('producers/assets/js/table-treeview.js')}}"></script>
    
    <!-- Masonary Gallery Javascript -->
    <script src="{{url('producers/assets/js/masonry.pkgd.min.js')}}"></script>
    <script src="{{url('producers/assets/js/imagesloaded.pkgd.min.js')}}"></script>
    
    <!-- Mapbox Javascript -->
    <script src="{{url('producers/assets/js/mapbox-gl.js')}}"></script>
    <script src="{{url('producers/assets/js/mapbox.js')}}"></script>
    
    <!-- Fullcalender Javascript -->
    <script src="{{url('producers/assets/vendor/fullcalendar/core/main.js')}}"></script>
    <script src="{{url('producers/assets/vendor/fullcalendar/daygrid/main.js')}}"></script>
    <script src="{{url('producers/assets/vendor/fullcalendar/timegrid/main.js')}}"></script>
    <script src="{{url('producers/assets/vendor/fullcalendar/list/main.js')}}"></script>
    
    <!-- SweetAlert JavaScript -->
    <script src="{{url('producers/assets/js/sweetalert.js')}}"></script>
    
    <!-- Vectoe Map JavaScript -->
    <script src="{{url('producers/assets/js/vector-map-custom.js')}}"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="{{url('producers/assets/js/customizer.js')}}"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="{{url('producers/assets/js/chart-custom.js')}}"></script>
    
    <!-- slider JavaScript -->
    <script src="{{url('producers/assets/js/slider.js')}}"></script>
    
    <!-- app JavaScript -->
    <script src="{{url('producers/assets/js/app.js')}}"></script>

    @yield('script')
</body>

</html>
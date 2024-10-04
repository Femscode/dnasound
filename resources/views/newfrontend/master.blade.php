<!DOCTYPE html>
<html lang="en">

<head>
    <title>DNASoundStudio</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Webestica.com">
    <meta name="description" content="Booking - Multipurpose Online Booking Theme">

    <!-- Dark mode -->
    <script>
        const storedTheme = localStorage.getItem('theme')

        const getPreferredTheme = () => {
            if (storedTheme) {
                return storedTheme
            }
            return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
        }

        const setTheme = function(theme) {
            if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                document.documentElement.setAttribute('data-bs-theme', 'dark')
            } else {
                document.documentElement.setAttribute('data-bs-theme', theme)
            }
        }

        setTheme(getPreferredTheme())

        window.addEventListener('DOMContentLoaded', () => {
            var el = document.querySelector('.theme-icon-active');
            if (el != 'undefined' && el != null) {
                const showActiveTheme = theme => {
                    const activeThemeIcon = document.querySelector('.theme-icon-active use')
                    const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
                    const svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

                    document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
                        element.classList.remove('active')
                    })

                    btnToActive.classList.add('active')
                    activeThemeIcon.setAttribute('href', svgOfActiveBtn)
                }

                window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
                    if (storedTheme !== 'light' || storedTheme !== 'dark') {
                        setTheme(getPreferredTheme())
                    }
                })

                showActiveTheme(getPreferredTheme())

                document.querySelectorAll('[data-bs-theme-value]')
                    .forEach(toggle => {
                        toggle.addEventListener('click', () => {
                            const theme = toggle.getAttribute('data-bs-theme-value')
                            localStorage.setItem('theme', theme)
                            setTheme(theme)
                            showActiveTheme(theme)
                        })
                    })

            }
        })
    </script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&amp;family=Poppins:wght@400;500;700&amp;display=swap">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="{{url('frontendasset/assets/vendor/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('frontendasset/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('frontendasset/assets/vendor/tiny-slider/tiny-slider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('frontendasset/assets/vendor/glightbox/css/glightbox.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('frontendasset/assets/vendor/flatpickr/css/flatpickr.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('frontendasset/assets/vendor/choices/css/choices.min.css')}}">


    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{url('frontendasset/assets/css/style.css')}}">
    @yield('header')

</head>

<body class="has-navbar-mobile">

    <!-- Header START -->
    <header class="navbar-light header-sticky">
        <!-- Logo Nav START -->
        <nav class="navbar navbar-expand-xl">
            <div class="container">
                <!-- Logo START -->
                <a class="navbar-brand" href="#">
                    <img
                        width="203" height="45" title="DNASound STUDIO.com" alt="DNASoundStudio Logo"
                        aria-label="DNASound STUDIO.com" loading="eager" src="/assets/images/logo/png/Logo-06.png"
                        data-v-c835270e />


                </a>
                <!-- Logo END -->

                <!-- Responsive navbar toggler -->
                <button class="navbar-toggler ms-auto ms-sm-0 p-0 p-sm-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-animation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                    <span class="d-none d-sm-inline-block small">Menu</span>
                </button>

                <!-- Responsive category toggler -->
                <button class="navbar-toggler ms-sm-auto mx-3 me-md-0 p-0 p-sm-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCategoryCollapse" aria-controls="navbarCategoryCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="bi bi-grid-3x3-gap-fill fa-fw"></i><span class="d-none d-sm-inline-block small">Category</span>
                </button>

                <!-- Main navbar START -->
                <div class="navbar-collapse collapse" id="navbarCollapse">
                    <ul class="navbar-nav navbar-nav-scroll me-auto">

                        <!-- Nav item Listing -->
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="#">Home</a>

                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="#">Tracks</a>

                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="#">Artists</a>

                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="#">Producers</a>

                        </li>

                    
                    </ul>
                </div>
                <!-- Main navbar END -->

                <!-- Nav category menu START -->
                <div class="navbar-collapse collapse" id="navbarCategoryCollapse">
                    <ul class="navbar-nav navbar-nav-scroll nav-pills-primary-soft text-center ms-auto p-2 p-xl-0">
                        <!-- Nav item Hotel -->
                        <li class="nav-item">
                          
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search..." aria-label="Search" aria-describedby="search-addon">
                                    <span class="input-group-text" id="search-addon">
                                        <i class="fa-solid fa-search"></i>
                                    </span>
                                </div>
                         
                        </li>


                        <!-- Nav item Flight -->
                        <li class="nav-item"> <a class="btn btn-primary" href="/login">Sign In</a> </li>

                    </ul>
                </div>
                <!-- Nav category menu END -->

            </div>
        </nav>
        <!-- Logo Nav END -->
    </header>
   

    @yield('content')
  
    <footer class="bg-dark pt-5">
        <div class="container">
           
            <!-- Divider -->
            <hr class="mt-4 mb-0">

            <!-- Bottom footer -->
            <div class="row">
                <div class="container">
                    <div class="d-lg-flex justify-content-between align-items-center py-3 text-center text-lg-start">
                        <!-- copyright text -->
                        <div class="text-body-secondary text-primary-hover"> Copyrights ©2024 DNASoundStudio. </div>
                        <!-- copyright links-->
                        <div class="nav mt-2 mt-lg-0">
                            <ul class="list-inline text-primary-hover mx-auto mb-0">
                                <li class="list-inline-item me-0"><a class="nav-link text-body-secondary py-1" href="#">Privacy policy</a></li>
                                <li class="list-inline-item me-0"><a class="nav-link text-body-secondary py-1" href="#">Terms and conditions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- =======================
Footer END -->

    <!-- Back to top -->
    <div class="back-top"></div>

    <!-- Navbar mobile START -->
    <div class="navbar navbar-mobile">
        <ul class="navbar-nav">
           
            <li class="nav-item">
                <a class="nav-link active" href="index.html"><i class="bi bi-house-door fa-fw"></i>
                    <span class="mb-0 nav-text">Home</span>
                </a>
            </li>

           
            <li class="nav-item">
                <a class="nav-link" href="account-bookings.html"><i class="bi bi-briefcase fa-fw"></i>
                    <span class="mb-0 nav-text">Tracks</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="offer-detail.html"><i class="bi bi-person fa-fw"></i>
                    <span class="mb-0 nav-text">Artists</span>
                </a>
            </li>

          
            <li class="nav-item">
                <a class="nav-link" href="account-profile.html"><i class="bi bi-person-circle fa-fw"></i>
                    <span class="mb-0 nav-text">Producers</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- Navbar mobile END -->

    <!-- Bootstrap JS -->
    <script src="{{url('frontendasset/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Vendors -->
    <script src="{{url('frontendasset/assets/vendor/tiny-slider/tiny-slider.js')}}"></script>
    <script src="{{url('frontendasset/assets/vendor/glightbox/js/glightbox.js')}}"></script>
    <script src="{{url('frontendasset/assets/vendor/flatpickr/js/flatpickr.min.js')}}"></script>
    <script src="{{url('frontendasset/assets/vendor/choices/js/choices.min.js')}}"></script>

    <!-- ThemeFunctions -->
    <script src="{{url('frontendasset/assets/js/functions.js')}}"></script>
    @yield('script')

</body>

</html>
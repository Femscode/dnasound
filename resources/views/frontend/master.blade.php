<!DOCTYPE html>
<html lang="en">

<head>
    <title>DNASoundStudio</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Webestica.com">
    <meta name="description" content="Booking - Multipurpose Online Booking Theme">

    <link rel="stylesheet" href="{{url('dna/css/bootstrap-reboot.min.css')}}">
    <link rel="stylesheet" href="{{url('dna/css/bootstrap-grid.min.css')}}">
    <link rel="stylesheet" href="{{url('dna/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('dna/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{url('dna/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{url('dna/css/paymentfont.min.css')}}">
    <link rel="stylesheet" href="{{url('dna/css/slider-radio.css')}}">
    <link rel="stylesheet" href="{{url('dna/css/plyr.css')}}">
    <link rel="stylesheet" href="{{url('dna/css/main.css')}}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100..900&display=swap" rel="stylesheet">

    <!-- <link href="https://fonts.googleapis.com/css2?family=Doto:wght@100..900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> -->

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
                        aria-label="DNASound STUDIO.com" loading="eager" src="/assets/images/logo/png/logo4.png"
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
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link " href="#">Home</a>

                        </li> -->
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="#">About</a>

                        </li>
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link " href="#">Artists</a>

                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="#">Producers</a>

                        </li> -->


                    </ul>
                </div>
                <!-- Main navbar END -->

                <!-- Nav category menu START -->
                <div class="navbar-collapse collapse" id="navbarCategoryCollapse">
                    <ul class="navbar-nav navbar-nav-scroll nav-pills-primary-soft text-center ms-auto p-2 p-xl-0">

                        <li class="nav-item"> <a class="btn text-primary" href="/login">Login</a> </li>
                        <li class="nav-item"> <a class="btn btn-primary" href="/login">Sign Up</a> </li>

                    </ul>
                </div>
                <!-- Nav category menu END -->

            </div>
        </nav>
        <!-- Logo Nav END -->
    </header>


    @yield('content')



    <footer style='background-color: #333333;' class="text-light py-0">
        <div class="container">
            <div class="row">
                <!-- Logo and Short Details -->
                <div class="col-md-6 mb-4 mt-4">
                    <img
                        width="203" height="45" title="DNASound STUDIO.com" alt="DNASoundStudio Logo"
                        aria-label="DNASound STUDIO.com" loading="eager" src="/assets/images/logo/png/logo4.png"
                        data-v-c835270e />

                    <p>
                        DNS Studio is the source for royalty free beats. Elevate your projects with our diverse collection. Simplify your licensing process and unleash your creativity. Join us today!
                    </p>
                </div>
                <!-- Quick Links -->
                <div class="col-md-6 mb-4 mt-4 justify-content-end text-end">

                    <a class='btn login-btn m-0 border-0 text-white' href='/login'>Login</a>
                    <a class='btn btn-primary bg-transparent text-white m-0 border-0' href='/register'>Start Free Trial</a>
                </div>
                <!-- Social Media Links -->

            </div>
            <div class="row">
                <!-- Logo and Short Details -->
                <div class="col-md-4 mb-4">
                    <svg width="352" height="164" viewBox="0 0 352 164" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="176" cy="176.002" r="35" stroke="#6B6B6B" stroke-width="2" />
                        <circle cx="176" cy="176.002" r="58.3333" stroke="#6B6B6B" stroke-width="2" />
                        <circle cx="176" cy="176.002" r="81.6667" stroke="#6B6B6B" stroke-width="2" />
                        <circle cx="176" cy="176.002" r="105" stroke="#6B6B6B" stroke-width="2" />
                        <circle cx="176" cy="176.002" r="128.333" stroke="#6B6B6B" stroke-width="2" />
                        <circle cx="176" cy="176.002" r="151.667" stroke="#6B6B6B" stroke-width="2" />
                        <circle cx="176" cy="176.002" r="175" stroke="#6B6B6B" stroke-width="2" />
                    </svg>

                


                </div>
                <!-- Quick Links -->
                <div class="col-md-2 mb-4">
                    <h5 class="mb-3 f-header">Product</h5>
                    <ul class="list-unstyled">
                        <li><p class='m-2' href="#" >Vocal Music</p></li>
                        <li><p class='m-2' href="#" >Instrumental Music</p></li>
                        <li><p class='m-2' href="#" >Category</p></li>
                        <li><p class='m-2' href="#" >Licensing</p></li>
                    </ul>
                </div>
                <div class="col-md-2 mb-4">
                    <h5 class="mb-3 f-header">Support</h5>
                    <ul class="list-unstyled">
                        <li><p class='m-2' href="#" >FAQ</p></li>
                        <li><p class='m-2' href="#" >Contact Us</p></li>
                        <li><p class='m-2' href="#" >Privacy Policy</p></li>
                        <li><p class='m-2' href="#" >Terms Of Service</p></li>
                    </ul>
                </div>
                <!-- Social Media Links -->
                <div class="col-md-4 mb-4">
                    <h5 class="mb-3 f-header">Social Media</h5>
                    <p>For recent updates and news, follow our social media feeds.</p>
                    <div class="d-flex">
                        <a href="#" class="text-light me-3"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </footer>

    <!-- Add Font Awesome CDN for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <!-- =======================
Footer END -->

    <!-- Back to top -->
    <div class="back-top"></div>

    <!-- Navbar mobile START -->
    <!-- <div class="navbar navbar-mobile">
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
    </div> -->
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
    <script src="{{url('dna/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{url('dna/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('dna/js/owl.carousel.min.js')}}"></script>
    <script src="{{url('dna/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{url('dna/js/smooth-scrollbar.js')}}"></script>
    <script src="{{url('dna/js/select2.min.js')}}"></script>
    <script src="{{url('dna/js/slider-radio.js')}}"></script>
    <script src="{{url('dna/js/jquery.inputmask.min.js')}}"></script>
    <script src="{{url('dna/js/plyr.min.js')}}"></script>
    <script src="{{url('dna/js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @yield('script')

</body>

</html>
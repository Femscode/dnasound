<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Telneting.">
    <meta name="author" content="Inovatik">

    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Sign Up - DNASOUNDSTUDIO</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext"
        rel="stylesheet">
    <link href="landing/css/bootstrap.css" rel="stylesheet">
    <link href="landing/css/fontawesome-all.css" rel="stylesheet">
    <link href="landing/css/swiper.css" rel="stylesheet">
    <link href="landing/css/magnific-popup.css" rel="stylesheet">
    <link href="landing/css/styles.css" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
</head>

<body data-spy="scroll" data-target=".fixed-top"
    style='background:url("assets/images/ds3.jpg");background-repeat:repeat;background-size:cover;'>

    <!-- Preloader -->
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->



    <!-- Header -->
    <header id="header" class="ex-2-header">
        <div class="container" style='opacity:0.9'>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Sign Up Form -->
                    {{-- <h4 class='text-white'>A Banking System</h4> --}}
                    {{-- <img src="telneting-files/png/white@300x.png" alt="alternative"
                        style="width: 200px; height: 40px; margin-bottom: 20px;"> --}}
                    <div class="form-container">
                        <h3 style="color: #000C40">Create An Account with DNA<span style='color:red'>SOUND</span>STUDIO 🤗</h3>
                     
                        <form action='{{ route("register") }}' method='post'>@csrf
                            @if($errors->any())
                            <div class="alert alert-danger">

                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            <div class="form-group">
                                <input name='name' type="text" class="form-control-input" id="sname" required>
                                <label class="label-control" for="sname">Name</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input name='email' type="email" class="form-control-input" id="semail" required>
                                <label class="label-control" for="semail">Email</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input name='phone' type="text" class="form-control-input" id="sname" required>
                                <label class="label-control" for="sname">Phone Number</label>
                                <div class="help-block with-errors"></div>
                            </div>


                            <div class="form-group">
                                <input name='password' type="password" class="form-control-input" id="spassword"
                                    required>
                                <label class="label-control" for="spassword">Password</label>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group">
                                <input name='password_confirmation' type="password" class="form-control-input"
                                    id="spassword" required>
                                <label class="label-control" for="spassword">Confirm Password</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group checkbox">
                                <input type="checkbox" id="sterms" value="Agreed-to-Terms" required>I agree with
                                DNASOUNDSTUDIO <a href="privacy-policy.html">Privacy Policy</a> and <a
                                    href="terms-conditions.html">Terms Conditions</a>
                                <div class="help-block with-errors"></div>
                                <p class="text-dark">Already have an account? click <a href='/login'>here</a> to login.</p>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control-submit-button">SIGN UP</button>
                            </div>
                            <div class="form-message">
                                <div id="smsgSubmit" class="h3 text-center hidden"></div>
                            </div>
                        </form>
                    </div> <!-- end of form container -->
                    <!-- end of sign up form -->

                </div> <!-- end of col -->
            

            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


    <!-- Scripts -->
    <script src="landing/js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="landing/js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="landing/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="landing/js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="landing/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="landing/js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="landing/js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="landing/js/scripts.js"></script> <!-- Custom scripts -->
</body>

</html>
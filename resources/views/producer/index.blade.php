@extends('producer.master')

@section('header')

@endsection

@section('content')
<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card iq-realease">
                    <div class="card-header d-flex justify-content-between border-0">
                        <div class="header-title">
                            <h4 class="card-title">Trending Beats</h4>
                        </div>
                    </div>
                    <div class="card-body  iq-realeses-back">
                        <div class="row">
                            <div class="col-lg-5 iq-realese-box " >
                                <div class="iq-music-img">
                                    <div class="equalizer">
                                        <span class="bar bar-1"></span>
                                        <span class="bar bar-2"></span>
                                        <span class="bar bar-3"></span>
                                        <span class="bar bar-4"></span>
                                        <span class="bar bar-5"></span>
                                    </div>
                                </div>
                                <div class="player1 row" >
                                    <div class="details1 music-list col-6 col-sm-6 col-lg-6" >
                                        <div class="now-playing1"></div>
                                        <div class="track-art1"></div>
                                        <div>
                                            <div class="track-name1">Go baby </div>
                                            <div class="track-artist1">Don Jazzy</div>
                                        </div>
                                    </div>
                                    <div class="buttons1 col-6 col-sm-2 col-lg-3">
                                        <div class="prev-track1" onclick="prevTrack1()"><i class="fa fa-step-backward fa-2x"></i></div>
                                        <div class="playpause-track1" onclick="playpauseTrack1()"><i class="fa fa-play-circle fa-3x"></i></div>
                                        <div class="next-track1" onclick="nextTrack1()"><i class="fa fa-step-forward fa-2x"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <ul class="list-unstyled iq-song-slide mb-0 realeases-banner">
                                    <li class="row">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="media align-items-center col-10 col-md-5">
                                                <div class="iq-realese-song ">
                                                    <a href="music-albums.html"><img src="https://dnasoundstudio.com/producers/assets/images/music-dashboard/realease-song/01.png" class="img-border-radius avatar-60 img-fluid" alt=""></a>
                                                </div>
                                                <div class="media-body text-white ml-3">
                                                    <p class="mb-0 iq-music-title">DJ Khaled Featuring</p>
                                                    <small>DJ Chicken</small>
                                                </div>
                                            </div>
                                            <p class="mb-0 col-md-2  iq-m-time">9:52</p>
                                            <p class="mb-0 col-md-2 iq-m-icon"><i class="lar la-star font-size-20"></i></p>
                                            <p class="mb-0 col-2 col-md-2"><i class="las la-play-circle font-size-32"></i></p>
                                            <div class="card-header-toolbar iq-music-drop d-flex align-items-center  col-md-1">
                                                <div class="dropdown">
                                                    <span class="dropdown-toggle text-primary" id="dropdownMenuButton1" data-toggle="dropdown" aria-expanded="false" role="button">
                                                        <i class="ri-more-2-fill text-primary"></i>
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1" style="">
                                                        <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="row">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="media align-items-center col-10 col-md-5">
                                                <div class="iq-realese-song ">
                                                    <a href="music-albums.html"><img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/realease-song/02.png" class="img-border-radius avatar-60 img-fluid" alt=""></a>
                                                </div>
                                                <div class="media-body text-white ml-3">
                                                    <p class="mb-0 iq-music-title">Cold Outside</p>
                                                    <small>Peruzzi </small>
                                                </div>
                                            </div>
                                            <p class="mb-0 col-md-2 iq-m-time">5:45</p>
                                            <p class="mb-0 col-md-2 iq-m-icon"><i class="lar la-star font-size-20"></i></p>
                                            <p class="mb-0 col-2 col-md-2"><i class="las la-play-circle font-size-32"></i></p>
                                            <div class="card-header-toolbar iq-music-drop  d-flex align-items-center col-md-1">
                                                <div class="dropdown">
                                                    <span class="dropdown-toggle text-primary" id="dropdownMenuButton2" data-toggle="dropdown" aria-expanded="false" role="button">
                                                        <i class="ri-more-2-fill text-primary"></i>
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton2" style="">
                                                        <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="active row">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="media align-items-center col-10 col-md-5">
                                                <div class="iq-realese-song ">
                                                    <a href="music-albums.html"><img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/realease-song/03.png" class="img-border-radius avatar-60 img-fluid" alt=""></a>
                                                </div>
                                                <div class="media-body text-white ml-3">
                                                    <p class="mb-0 iq-music-title">Oti Lo</p>
                                                    <small>Olalomi Portable</small>
                                                </div>
                                            </div>
                                            <p class="mb-0 col-md-2 iq-m-time">7:52</p>
                                            <p class="mb-0 col-md-2 iq-m-icon"><i class="lar la-star font-size-20"></i></p>
                                            <p class="mb-0 col-2 col-md-2"><i class="las la-play-circle font-size-32"></i></p>
                                            <div class="card-header-toolbar iq-music-drop d-flex align-items-center col-md-1">
                                                <div class="dropdown">
                                                    <span class="dropdown-toggle text-primary" id="dropdownMenuButton3" data-toggle="dropdown" aria-expanded="false" role="button">
                                                        <i class="ri-more-2-fill text-primary"></i>
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton3" style="">
                                                        <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="row">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="media align-items-center col-10 col-md-5">
                                                <div class="iq-realese-song ">
                                                    <a href="music-albums.html"><img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/realease-song/04.png" class="img-border-radius avatar-60 img-fluid" alt=""></a>
                                                </div>
                                                <div class="media-body text-white ml-3">
                                                    <p class="mb-0 iq-music-title">Juice </p>
                                                    <small>DJ Chicken</small>
                                                </div>
                                            </div>
                                            <p class="mb-0 col-md-2 iq-m-time">6:18</p>
                                            <p class="mb-0 col-md-2 iq-m-icon"><i class="lar la-star font-size-20"></i></p>
                                            <p class="mb-0 col-2 col-md-2"><i class="las la-play-circle font-size-32"></i></p>
                                            <div class="card-header-toolbar iq-music-drop d-flex align-items-center col-md-1">
                                                <div class="dropdown">
                                                    <span class="dropdown-toggle text-primary" id="dropdownMenuButton4" data-toggle="dropdown" aria-expanded="false" role="button">
                                                        <i class="ri-more-2-fill text-primary"></i>
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton4" style="">
                                                        <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="row">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="media align-items-center col-10 col-md-5">
                                                <div class="iq-realese-song ">
                                                    <a href="music-albums.html"><img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/realease-song/05.png" class="img-border-radius avatar-60 img-fluid" alt=""></a>
                                                </div>
                                                <div class="media-body text-white ml-3">
                                                    <p class="mb-0 iq-music-title">Hmmmm..</p>
                                                    <small>Chris Brown & Davido</small>
                                                </div>
                                            </div>
                                            <p class="mb-0 col-md-2  iq-m-time">9:00</p>
                                            <p class="mb-0 col-md-2  iq-m-icon"><i class="lar la-star font-size-20"></i></p>
                                            <p class="mb-0 col-2 col-md-2"><i class="las la-play-circle font-size-32"></i></p>
                                            <div class="card-header-toolbar iq-music-drop d-flex align-items-center col-md-1">
                                                <div class="dropdown">
                                                    <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown" aria-expanded="false" role="button">
                                                        <i class="ri-more-2-fill text-primary"></i>
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5" style="">
                                                        <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="row">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="media align-items-center col-10 col-md-5">
                                                <div class="iq-realese-song ">
                                                    <a href="music-albums.html"><img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/realease-song/06.png" class="img-border-radius avatar-60 img-fluid" alt=""></a>
                                                </div>
                                                <div class="media-body text-white ml-3">
                                                    <p class="mb-0 iq-music-title">Christ All</p>
                                                    <small>Bidemi Olaoba</small>
                                                </div>
                                            </div>
                                            <p class="mb-0 col-md-2  iq-m-time">6:52</p>
                                            <p class="mb-0 col-md-2  iq-m-icon"><i class="lar la-star font-size-20"></i></p>
                                            <p class="mb-0 col-2 col-md-2"><i class="las la-play-circle font-size-32"></i></p>
                                            <div class="card-header-toolbar iq-music-drop d-flex align-items-center col-md-1">
                                                <div class="dropdown">
                                                    <span class="dropdown-toggle text-primary" id="dropdownMenuButton6" data-toggle="dropdown" aria-expanded="false" role="button">
                                                        <i class="ri-more-2-fill text-primary"></i>
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton6" style="">
                                                        <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="row">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="media align-items-center col-10 col-md-5">
                                                <div class="iq-realese-song ">
                                                    <a href="music-albums.html"><img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/realease-song/07.png" class="img-border-radius avatar-60 img-fluid" alt=""></a>
                                                </div>
                                                <div class="media-body text-white ml-3">
                                                    <p class="mb-0 iq-music-title">Morenidimu </p>
                                                    <small>Afolabi Samson</small>
                                                </div>
                                            </div>
                                            <p class="mb-0 col-md-2 iq-m-time">7:18</p>
                                            <p class="mb-0 col-md-2  iq-m-icon"><i class="lar la-star font-size-20"></i></p>
                                            <p class="mb-0 col-2 col-md-2"><i class="las la-play-circle font-size-32"></i></p>
                                            <div class="card-header-toolbar iq-music-drop d-flex align-items-center col-md-1">
                                                <div class="dropdown">
                                                    <span class="dropdown-toggle text-primary" id="dropdownMenuButton7" data-toggle="dropdown" aria-expanded="false" role="button">
                                                        <i class="ri-more-2-fill text-primary"></i>
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton7" style="">
                                                        <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="row">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="media align-items-center col-10 col-md-5">
                                                <div class="iq-realese-song ">
                                                    <a href="music-albums.html"><img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/realease-song/08.png" class="img-border-radius avatar-60 img-fluid" alt=""></a>
                                                </div>
                                                <div class="media-body text-white ml-3">
                                                    <p class="mb-0 iq-music-title">Kokoro Igbala</p>
                                                    <small>Tope Alabi</small>
                                                </div>
                                            </div>
                                            <p class="mb-0 col-md-2 iq-m-time">8:40</p>
                                            <p class="mb-0 col-md-2 iq-m-icon"><i class="lar la-star font-size-20"></i></p>
                                            <p class="mb-0 col-2 col-md-2"><i class="las la-play-circle font-size-32"></i></p>
                                            <div class="card-header-toolbar iq-music-drop d-flex align-items-center col-md-1">
                                                <div class="dropdown">
                                                    <span class="dropdown-toggle text-primary" id="dropdownMenuButton8" data-toggle="dropdown" aria-expanded="false" role="button">
                                                        <i class="ri-more-2-fill text-primary"></i>
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton8" style="">
                                                        <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="row">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="media align-items-center col-10 col-md-5">
                                                <div class="iq-realese-song ">
                                                    <a href="music-albums.html"><img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/realease-song/09.png" class="img-border-radius avatar-60 img-fluid" alt=""></a>
                                                </div>
                                                <div class="media-body text-white ml-3">
                                                    <p class="mb-0">Come Off It</p>
                                                    <small>David Titus</small>
                                                </div>
                                            </div>
                                            <p class="mb-0 col-md-2 iq-m-time">9:52</p>
                                            <p class="mb-0 col-md-2 iq-m-icon"><i class="lar la-star font-size-20"></i></p>
                                            <p class=" mb-0 col-2 col-md-2"><i class="las la-play-circle font-size-32"></i></p>
                                            <div class="card-header-toolbar iq-music-drop d-flex align-items-center col-md-1">
                                                <div class="dropdown">
                                                    <span class="dropdown-toggle text-primary" id="dropdownMenuButton9" data-toggle="dropdown" aria-expanded="false" role="button">
                                                        <i class="ri-more-2-fill text-primary"></i>
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton9" style="">
                                                        <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div class="header-title">
                            <h4 class="card-title">My Album</h4>
                        </div>
                        <div id="feature-album-slick-arrow" class="slick-aerrow-block"></div>
                    </div>
                    <div class="card-body">
    <ul class="list-unstyled row feature-album iq-box-hover mb-0">
        <li class="col-lg-2 iq-music-box">
            <div class="card mb-0">
                <div class="card-body p-0">
                    <div class="iq-thumb">
                        <div class="iq-music-overlay"></div>
                        <a href="music-albums.html">
                            <img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/feature-album/01.png" class="img-border-radius img-fluid w-100" alt="">
                        </a>
                        <div class="overlay-music-icon">
                            <a href="music-albums.html">
                                <i class="las la-play-circle"></i>
                            </a>
                        </div>
                    </div>
                    <div class="feature-list text-center">
                        <h6 class="font-weight-600 mb-0">Made in Lagos</h6>
                        <p class="mb-0">Wizkid</p>
                    </div>
                </div>
            </div>
        </li>
        <li class="col-lg-2 iq-music-box">
            <div class="card mb-0">
                <div class="card-body p-0">
                    <div class="iq-thumb">
                        <div class="iq-music-overlay"></div>
                        <a href="music-albums.html">
                            <img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/feature-album/02.png" class="img-border-radius img-fluid w-100" alt="">
                        </a>
                        <div class="overlay-music-icon">
                            <a href="music-albums.html">
                                <i class="las la-play-circle"></i>
                            </a>
                        </div>
                    </div>
                    <div class="feature-list text-center">
                        <h6 class="font-weight-600 mb-0">Twice As Tall</h6>
                        <p class="mb-0">Burna Boy</p>
                    </div>
                </div>
            </div>
        </li>
        <li class="col-lg-2 iq-music-box">
            <div class="card mb-0">
                <div class="card-body p-0">
                    <div class="iq-thumb">
                        <div class="iq-music-overlay"></div>
                        <a href="music-albums.html">
                            <img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/feature-album/03.png" class="img-border-radius img-fluid w-100" alt="">
                        </a>
                        <div class="overlay-music-icon">
                            <a href="music-albums.html">
                                <i class="las la-play-circle"></i>
                            </a>
                        </div>
                    </div>
                    <div class="feature-list text-center">
                        <h6 class="font-weight-600 mb-0">A Better Time</h6>
                        <p class="mb-0">Davido</p>
                    </div>
                </div>
            </div>
        </li>
        <li class="col-lg-2 iq-music-box">
            <div class="card mb-0">
                <div class="card-body p-0">
                    <div class="iq-thumb">
                        <div class="iq-music-overlay"></div>
                        <a href="music-albums.html">
                            <img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/feature-album/04.png" class="img-border-radius img-fluid w-100" alt="">
                        </a>
                        <div class="overlay-music-icon">
                            <a href="music-albums.html">
                                <i class="las la-play-circle"></i>
                            </a>
                        </div>
                    </div>
                    <div class="feature-list text-center">
                        <h6 class="font-weight-600 mb-0">Apollo</h6>
                        <p class="mb-0">Fireboy DML</p>
                    </div>
                </div>
            </div>
        </li>
        <li class="col-lg-2 iq-music-box">
            <div class="card mb-0">
                <div class="card-body p-0">
                    <div class="iq-thumb">
                        <div class="iq-music-overlay"></div>
                        <a href="music-albums.html">
                            <img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/feature-album/05.png" class="img-border-radius img-fluid w-100" alt="">
                        </a>
                        <div class="overlay-music-icon">
                            <a href="music-albums.html">
                                <i class="las la-play-circle"></i>
                            </a>
                        </div>
                    </div>
                    <div class="feature-list text-center">
                        <h6 class="font-weight-600 mb-0">Boo of the Booless</h6>
                        <p class="mb-0">Chike</p>
                    </div>
                </div>
            </div>
        </li>
        <li class="col-lg-2 iq-music-box">
            <div class="card mb-0">
                <div class="card-body p-0">
                    <div class="iq-thumb">
                        <div class="iq-music-overlay"></div>
                        <a href="music-albums.html">
                            <img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/feature-album/06.png" class="img-border-radius img-fluid w-100" alt="">
                        </a>
                        <div class="overlay-music-icon">
                            <a href="music-albums.html">
                                <i class="las la-play-circle"></i>
                            </a>
                        </div>
                    </div>
                    <div class="feature-list text-center">
                        <h6 class="font-weight-600 mb-0">African Giant</h6>
                        <p class="mb-0">Burna Boy</p>
                    </div>
                </div>
            </div>
        </li>
        <li class="col-lg-2 iq-music-box">
            <div class="card mb-0">
                <div class="card-body p-0">
                    <div class="iq-thumb">
                        <div class="iq-music-overlay"></div>
                        <a href="music-albums.html">
                            <img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/feature-album/07.png" class="img-border-radius img-fluid w-100" alt="">
                        </a>
                        <div class="overlay-music-icon">
                            <a href="music-albums.html">
                                <i class="las la-play-circle"></i>
                            </a>
                        </div>
                    </div>
                    <div class="feature-list text-center">
                        <h6 class="font-weight-600 mb-0">Ghetto Gospel</h6>
                        <p class="mb-0">Erigga</p>
                    </div>
                </div>
            </div>
        </li>
        <li class="col-lg-2 iq-music-box">
            <div class="card mb-0">
                <div class="card-body p-0">
                    <div class="iq-thumb">
                        <div class="iq-music-overlay"></div>
                        <a href="music-albums.html">
                            <img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/feature-album/08.png" class="img-border-radius img-fluid w-100" alt="">
                        </a>
                        <div class="overlay-music-icon">
                            <a href="music-albums.html">
                                <i class="las la-play-circle"></i>
                            </a>
                        </div>
                    </div>
                    <div class="feature-list text-center">
                        <h6 class="font-weight-600 mb-0">YBNL</h6>
                        <p class="mb-0">Olamide</p>
                    </div>
                </div>
            </div>
        </li>
        <li class="col-lg-2 iq-music-box">
            <div class="card mb-0">
                <div class="card-body p-0">
                    <div class="iq-thumb">
                        <div class="iq-music-overlay"></div>
                        <a href="music-albums.html">
                            <img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/feature-album/09.png" class="img-border-radius img-fluid w-100" alt="">
                        </a>
                        <div class="overlay-music-icon">
                            <a href="music-albums.html">
                                <i class="las la-play-circle"></i>
                            </a>
                        </div>
                    </div>
                    <div class="feature-list text-center">
                        <h6 class="font-weight-600 mb-0">Somewhere Between Beauty & Magic</h6>
                        <p class="mb-0">Joeboy</p>
                    </div>
                </div>
            </div>
        </li>
        <li class="col-lg-2 iq-music-box">
            <div class="card mb-0">
                <div class="card-body p-0">
                    <div class="iq-thumb">
                        <div class="iq-music-overlay"></div>
                        <a href="music-albums.html">
                            <img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/feature-album/08.png" class="img-border-radius img-fluid w-100" alt="">
                        </a>
                        <div class="overlay-music-icon">
                            <a href="music-albums.html">
                                <i class="las la-play-circle"></i>
                            </a>
                        </div>
                    </div>
                    <div class="feature-list text-center">
                        <h6 class="font-weight-600 mb-0">The Evolution</h6>
                        <p class="mb-0">9ice</p>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>

                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div class="header-title">
                            <h4 class="card-title">Featured Artist</h4>
                        </div>
                        <div id="feature-album-artist-slick-arrow" class="slick-aerrow-block"></div>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled row feature-album-artist mb-0">
                            <li class="col-lg-2  iq-music-box">
                                <div class="iq-thumb-artist">
                                    <div class="iq-music-overlay"></div>
                                    <a href="music-albums.html">
                                        <img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/feature-album-artist/01.png" class="w-100 img-fluid" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                        <a href="music-albums.html">
                                            <i class="las la-play-circle"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="feature-list text-center">
                                    <h6 class="font-weight-600  mb-0">Ricado Banks</h6>
                                </div>
                            </li>
                            <li class="col-lg-2  iq-music-box">
                                <div class="iq-thumb-artist">
                                    <div class="iq-music-overlay"></div>
                                    <a href="music-albums.html">
                                        <img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/feature-album-artist/01.png" class="w-100 img-fluid" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                        <a href="music-albums.html">
                                            <i class="las la-play-circle"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="feature-list text-center">
                                    <h6 class="font-weight-600  mb-0">Ricado Banks</h6>
                                </div>
                            </li>
                            <li class="col-lg-2  iq-music-box">
                                <div class="iq-thumb-artist">
                                    <div class="iq-music-overlay"></div>
                                    <a href="music-albums.html">
                                        <img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/feature-album-artist/01.png" class="w-100 img-fluid" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                        <a href="music-albums.html">
                                            <i class="las la-play-circle"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="feature-list text-center">
                                    <h6 class="font-weight-600  mb-0">Ricado Banks</h6>
                                </div>
                            </li>
                            <li class="col-lg-2  iq-music-box">
                                <div class="iq-thumb-artist">
                                    <div class="iq-music-overlay"></div>
                                    <a href="music-albums.html">
                                        <img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/feature-album-artist/01.png" class="w-100 img-fluid" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                        <a href="music-albums.html">
                                            <i class="las la-play-circle"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="feature-list text-center">
                                    <h6 class="font-weight-600  mb-0">Ricado Banks</h6>
                                </div>
                            </li>
                            <li class="col-lg-2  iq-music-box">
                                <div class="iq-thumb-artist">
                                    <div class="iq-music-overlay"></div>
                                    <a href="music-albums.html">
                                        <img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/feature-album-artist/01.png" class="w-100 img-fluid" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                        <a href="music-albums.html">
                                            <i class="las la-play-circle"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="feature-list text-center">
                                    <h6 class="font-weight-600  mb-0">Ricado Banks</h6>
                                </div>
                            </li>
                            <li class="col-lg-2  iq-music-box">
                                <div class="iq-thumb-artist">
                                    <div class="iq-music-overlay"></div>
                                    <a href="music-albums.html">
                                        <img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/feature-album-artist/01.png" class="w-100 img-fluid" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                        <a href="music-albums.html">
                                            <i class="las la-play-circle"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="feature-list text-center">
                                    <h6 class="font-weight-600  mb-0">Ricado Banks</h6>
                                </div>
                            </li>
                            <li class="col-lg-2  iq-music-box">
                                <div class="iq-thumb-artist">
                                    <div class="iq-music-overlay"></div>
                                    <a href="music-albums.html">
                                        <img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/feature-album-artist/01.png" class="w-100 img-fluid" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                        <a href="music-albums.html">
                                            <i class="las la-play-circle"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="feature-list text-center">
                                    <h6 class="font-weight-600  mb-0">Ricado Banks</h6>
                                </div>
                            </li>
                            <li class="col-lg-2  iq-music-box">
                                <div class="iq-thumb-artist">
                                    <div class="iq-music-overlay"></div>
                                    <a href="music-albums.html">
                                        <img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/feature-album-artist/01.png" class="w-100 img-fluid" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                        <a href="music-albums.html">
                                            <i class="las la-play-circle"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="feature-list text-center">
                                    <h6 class="font-weight-600  mb-0">Ricado Banks</h6>
                                </div>
                            </li>
                            <li class="col-lg-2  iq-music-box">
                                <div class="iq-thumb-artist">
                                    <div class="iq-music-overlay"></div>
                                    <a href="music-albums.html">
                                        <img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/feature-album-artist/01.png" class="w-100 img-fluid" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                        <a href="music-albums.html">
                                            <i class="las la-play-circle"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="feature-list text-center">
                                    <h6 class="font-weight-600  mb-0">Ricado Banks</h6>
                                </div>
                            </li>
                            <li class="col-lg-2  iq-music-box">
                                <div class="iq-thumb-artist">
                                    <div class="iq-music-overlay"></div>
                                    <a href="music-albums.html">
                                        <img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/feature-album-artist/01.png" class="w-100 img-fluid" alt="">
                                    </a>
                                    <div class="overlay-music-icon">
                                        <a href="music-albums.html">
                                            <i class="las la-play-circle"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="feature-list text-center">
                                    <h6 class="font-weight-600  mb-0">Ricado Banks</h6>
                                </div>
                            </li>
                        
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Trending Songs</h4>
                        </div>
                        <div class="d-flex align-items-center iq-view">
                            <b class="mb-0 text-primary"><a href="music-albums.html">View More <i class="las la-angle-right"></i></a></b>
                        </div>
                    </div>
                    <div class="card-body">
    <ul class="list-unstyled row iq-box-hover mb-0">
        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
            <div class="card">
                <div class="card-body p-0">
                    <div class="iq-thumb">
                        <div class="iq-music-overlay"></div>
                        <a href="music-albums.html">
                            <img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/tranding-song/01.png" class="img-border-radius img-fluid w-100" alt="">
                        </a>
                        <div class="overlay-music-icon">
                            <a href="music-albums.html">
                                <i class="las la-play-circle"></i>
                            </a>
                        </div>
                    </div>
                    <div class="feature-list text-center">
                        <h6 class="font-weight-600  mb-0">Essence</h6>
                        <p class="mb-0">Wizkid ft. Tems</p>
                    </div>
                </div>
            </div>
        </li>
        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
            <div class="card">
                <div class="card-body p-0">
                    <div class="iq-thumb">
                        <div class="iq-music-overlay"></div>
                        <a href="music-albums.html">
                            <img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/tranding-song/02.png" class="img-border-radius img-fluid w-100" alt="">
                        </a>
                        <div class="overlay-music-icon">
                            <a href="music-albums.html">
                                <i class="las la-play-circle"></i>
                            </a>
                        </div>
                    </div>
                    <div class="feature-list text-center">
                        <h6 class="font-weight-600  mb-0">Ginger</h6>
                        <p class="mb-0">Wizkid ft. Burna Boy</p>
                    </div>
                </div>
            </div>
        </li>
        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
            <div class="card">
                <div class="card-body p-0">
                    <div class="iq-thumb">
                        <div class="iq-music-overlay"></div>
                        <a href="music-albums.html">
                            <img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/tranding-song/03.png" class="img-border-radius img-fluid w-100" alt="">
                        </a>
                        <div class="overlay-music-icon">
                            <a href="music-albums.html">
                                <i class="las la-play-circle"></i>
                            </a>
                        </div>
                    </div>
                    <div class="feature-list text-center">
                        <h6 class="font-weight-600  mb-0">On the Low</h6>
                        <p class="mb-0">Burna Boy</p>
                    </div>
                </div>
            </div>
        </li>
        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
            <div class="card">
                <div class="card-body p-0">
                    <div class="iq-thumb">
                        <div class="iq-music-overlay"></div>
                        <a href="music-albums.html">
                            <img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/tranding-song/04.png" class="img-border-radius img-fluid w-100" alt="">
                        </a>
                        <div class="overlay-music-icon">
                            <a href="music-albums.html">
                                <i class="las la-play-circle"></i>
                            </a>
                        </div>
                    </div>
                    <div class="feature-list text-center">
                        <h6 class="font-weight-600  mb-0">FEM</h6>
                        <p class="mb-0">Davido</p>
                    </div>
                </div>
            </div>
        </li>
        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
            <div class="card">
                <div class="card-body p-0">
                    <div class="iq-thumb">
                        <div class="iq-music-overlay"></div>
                        <a href="music-albums.html">
                            <img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/tranding-song/05.png" class="img-border-radius img-fluid w-100" alt="">
                        </a>
                        <div class="overlay-music-icon">
                            <a href="music-albums.html">
                                <i class="las la-play-circle"></i>
                            </a>
                        </div>
                    </div>
                    <div class="feature-list text-center">
                        <h6 class="font-weight-600  mb-0">Champion</h6>
                        <p class="mb-0">Fireboy DML ft. D Smoke</p>
                    </div>
                </div>
            </div>
        </li>
        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
            <div class="card">
                <div class="card-body p-0">
                    <div class="iq-thumb">
                        <div class="iq-music-overlay"></div>
                        <a href="music-albums.html">
                            <img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/tranding-song/06.png" class="img-border-radius img-fluid w-100" alt="">
                        </a>
                        <div class="overlay-music-icon">
                            <a href="music-albums.html">
                                <i class="las la-play-circle"></i>
                            </a>
                        </div>
                    </div>
                    <div class="feature-list text-center">
                        <h6 class="font-weight-600  mb-0">Away</h6>
                        <p class="mb-0">Ayra Starr</p>
                    </div>
                </div>
            </div>
        </li>
        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
            <div class="card mb-lg-0">
                <div class="card-body p-0">
                    <div class="iq-thumb">
                        <div class="iq-music-overlay"></div>
                        <a href="music-albums.html">
                            <img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/tranding-song/07.png" class="img-border-radius img-fluid w-100" alt="">
                        </a>
                        <div class="overlay-music-icon">
                            <a href="music-albums.html">
                                <i class="las la-play-circle"></i>
                            </a>
                        </div>
                    </div>
                    <div class="feature-list text-center">
                        <h6 class="font-weight-600  mb-0">Duduke</h6>
                        <p class="mb-0">Simi</p>
                    </div>
                </div>
            </div>
        </li>
        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
            <div class="card mb-lg-0">
                <div class="card-body p-0">
                    <div class="iq-thumb">
                        <div class="iq-music-overlay"></div>
                        <a href="music-albums.html">
                            <img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/tranding-song/08.png" class="img-border-radius img-fluid w-100" alt="">
                        </a>
                        <div class="overlay-music-icon">
                            <a href="music-albums.html">
                                <i class="las la-play-circle"></i>
                            </a>
                        </div>
                    </div>
                    <div class="feature-list text-center">
                        <h6 class="font-weight-600  mb-0">Jerusalema</h6>
                        <p class="mb-0">Master KG ft. Nomcebo Zikode</p>
                    </div>
                </div>
            </div>
        </li>
        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
            <div class="card mb-lg-0">
                <div class="card-body p-0">
                    <div class="iq-thumb">
                        <div class="iq-music-overlay"></div>
                        <a href="music-albums.html">
                            <img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/tranding-song/09.png" class="img-border-radius img-fluid w-100" alt="">
                        </a>
                        <div class="overlay-music-icon">
                            <a href="music-albums.html">
                                <i class="las la-play-circle"></i>
                            </a>
                        </div>
                    </div>
                    <div class="feature-list text-center">
                        <h6 class="font-weight-600  mb-0">Godly</h6>
                        <p class="mb-0">Omah Lay</p>
                    </div>
                </div>
            </div>
        </li>
        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
            <div class="card mb-md-0 mb-lg-0">
                <div class="card-body p-0">
                    <div class="iq-thumb">
                        <div class="iq-music-overlay"></div>
                        <a href="music-albums.html">
                            <img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/tranding-song/10.png" class="img-border-radius img-fluid w-100" alt="">
                        </a>
                        <div class="overlay-music-icon">
                            <a href="music-albums.html">
                                <i class="las la-play-circle"></i>
                            </a>
                        </div>
                    </div>
                    <div class="feature-list text-center">
                        <h6 class="font-weight-600  mb-0">Koroba</h6>
                        <p class="mb-0">Tiwa Savage</p>
                    </div>
                </div>
            </div>
        </li>
        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
            <div class="card mb-sm-0 mb-md-0 mb-lg-0">
                <div class="card-body p-0">
                    <div class="iq-thumb">
                        <div class="iq-music-overlay"></div>
                        <a href="music-albums.html">
                            <img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/tranding-song/11.png" class="img-border-radius img-fluid w-100" alt="">
                        </a>
                        <div class="overlay-music-icon">
                            <a href="music-albums.html">
                                <i class="las la-play-circle"></i>
                            </a>
                        </div>
                    </div>
                    <div class="feature-list text-center">
                        <h6 class="font-weight-600  mb-0">In My Maserati</h6>
                        <p class="mb-0">Olakira</p>
                    </div>
                </div>
            </div>
        </li>
        <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
            <div class="card mb-0 mb-sm-0 mb-md-0 mb-lg-0">
                <div class="card-body p-0">
                    <div class="iq-thumb">
                        <div class="iq-music-overlay"></div>
                        <a href="music-albums.html">
                            <img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/tranding-song/12.png" class="img-border-radius img-fluid w-100" alt="">
                        </a>
                        <div class="overlay-music-icon">
                            <a href="music-albums.html">
                                <i class="las la-play-circle"></i>
                            </a>
                        </div>
                    </div>
                    <div class="feature-list text-center">
                        <h6 class="font-weight-600  mb-0">Jowo</h6>
                        <p class="mb-0">Davido</p>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>

                </div>
            </div>
           
            <div class="col-lg-12">
                <div class="row">
                  
                        <div class="card card-block card-stretch card-height">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <div class="header-title">
                                    <h4 class="card-title">Purchased Beat</h4>
                                </div>
                                <div id="hot-song-slick-arrow" class="slick-aerrow-block"></div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled row hot-songs mb-0">
                                    <li class="col-lg-12">
                                        <div class="card card-transparent">
                                            <div class="card-body p-0">
                                                <div class="media align-items-center">
                                                    <div class="iq-thumb-hotsong">
                                                        <div class="iq-music-overlay"></div>
                                                        <a href="music-albums.html"><img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/hot-songs/01.png" class="img-fluid avatar-60" alt="">
                                                        </a>
                                                        <div class="overlay-music-icon">
                                                            <a href="music-albums.html">
                                                                <i class="las la-play-circle font-size-24"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 iq-song-title">God Whispered Your Name</h6>
                                                        <small>Maggie Rogers</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-12">
                                        <div class="card card-transparent">
                                            <div class="card-body p-0">
                                                <div class="media align-items-center">
                                                    <div class="iq-thumb-hotsong">
                                                        <div class="iq-music-overlay"></div>
                                                        <a href="music-albums.html"><img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/hot-songs/02.png" class="img-fluid avatar-60" alt="">
                                                        </a>
                                                        <div class="overlay-music-icon">
                                                            <a href="music-albums.html">
                                                                <i class="las la-play-circle font-size-24"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 iq-song-title">Mood Swings</h6>
                                                        <small>Maren Morris</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-12">
                                        <div class="card card-transparent mb-0 mb-lg-0">
                                            <div class="card-body p-0">
                                                <div class="media align-items-center">
                                                    <div class="iq-thumb-hotsong">
                                                        <div class="iq-music-overlay"></div>
                                                        <a href="music-albums.html"><img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/hot-songs/03.png" class="img-fluid avatar-60" alt=""></a>
                                                        <div class="overlay-music-icon">
                                                            <a href="music-albums.html">
                                                                <i class="las la-play-circle font-size-24"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 iq-song-title">Something Special</h6>
                                                        <small>Rico Nasty</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-12">
                                        <div class="card card-transparent">
                                            <div class="card-body p-0">
                                                <div class="media align-items-center">
                                                    <div class="iq-thumb-hotsong">
                                                        <div class="iq-music-overlay"></div>
                                                        <a href="music-albums.html"><img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/hot-songs/04.png" class="img-fluid avatar-60" alt="">
                                                        </a>
                                                        <div class="overlay-music-icon">
                                                            <a href="music-albums.html">
                                                                <i class="las la-play-circle font-size-24"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 iq-song-title">Tell Me U Luv Me</h6>
                                                        <small>Kali Uchis</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-12">
                                        <div class="card card-transparent">
                                            <div class="card-body p-0">
                                                <div class="media align-items-center">
                                                    <div class="iq-thumb-hotsong">
                                                        <div class="iq-music-overlay"></div>
                                                        <a href="music-albums.html"><img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/hot-songs/05.png" class="img-fluid avatar-60" alt="">
                                                        </a>
                                                        <div class="overlay-music-icon">
                                                            <a href="music-albums.html">
                                                                <i class="las la-play-circle font-size-24"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 iq-song-title">Fighting Demons</h6>
                                                        <small>Juice WRLD</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-12">
                                        <div class="card card-transparent mb-0 mb-lg-0">
                                            <div class="card-body p-0">
                                                <div class="media align-items-center">
                                                    <div class="iq-thumb-hotsong">
                                                        <div class="iq-music-overlay"></div>
                                                        <a href="music-albums.html"><img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/hot-songs/06.png" class="img-fluid avatar-60" alt="">
                                                        </a>
                                                        <div class="overlay-music-icon">
                                                            <a href="music-albums.html">
                                                                <i class="las la-play-circle font-size-24"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0">Up Up And Away</h6>
                                                        <small>Black Eyed Peas</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-12">
                                        <div class="card card-transparent">
                                            <div class="card-body p-0">
                                                <div class="media align-items-center">
                                                    <div class="iq-thumb-hotsong">
                                                        <div class="iq-music-overlay"></div>
                                                        <a href="music-albums.html"><img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/hot-songs/07.png" class="img-fluid avatar-60" alt="">
                                                        </a>
                                                        <div class="overlay-music-icon">
                                                            <a href="music-albums.html">
                                                                <i class="las la-play-circle font-size-24"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 iq-song-title">Fighting Demons</h6>
                                                        <small>Juice WRLD</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-12">
                                        <div class="card card-transparent">
                                            <div class="card-body p-0">
                                                <div class="media align-items-center">
                                                    <div class="iq-thumb-hotsong">
                                                        <div class="iq-music-overlay"></div>
                                                        <a href="music-albums.html"><img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/hot-songs/08.png" class="img-fluid avatar-60" alt="">
                                                        </a>
                                                        <div class="overlay-music-icon">
                                                            <a href="music-albums.html">
                                                                <i class="las la-play-circle font-size-24"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 iq-song-title">More Than My Hometown </h6>
                                                        <small>Keith Urban</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-12">
                                        <div class="card card-transparent mb-0 mb-lg-0">
                                            <div class="card-body p-0">
                                                <div class="media align-items-center">
                                                    <div class="iq-thumb-hotsong">
                                                        <div class="iq-music-overlay"></div>
                                                        <a href="music-albums.html"><img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/hot-songs/09.png" class="img-fluid avatar-60" alt="">
                                                        </a>
                                                        <div class="overlay-music-icon">
                                                            <a href="music-albums.html">
                                                                <i class="las la-play-circle font-size-24"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 iq-song-title">3 Headed Goat</h6>
                                                        <small>Clairo</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
@endsection
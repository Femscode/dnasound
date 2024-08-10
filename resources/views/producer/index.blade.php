@extends('producer.master')

@section('header')

@endsection

@section('content')
<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="card-body iq-total-content">
                <div class="top-block d-flex align-items-center justify-content-between">
                    <p class="mb-1">Available Storage</p>

                </div>
                <h4><span class="counter" style="visibility: visible;">{{$remainingStorageGB}}GB</span> / 5GB</h4>
                <div class="d-flex align-items-center justify-content-between mt-3 position-relative">
                    <div class="iq-progress-bar progress-4 bg-warning-light mt-3 iq-progress-bar-icon">
                        <span class="bg-warning" data-percent="100" style="transition: width 2s; width: 34%;">
                            <span class="progress-text text-warning">100%</span>
                        </span>
                    </div>
                    <div id="total-chart-04" class="ml-4"></div>
                </div>
                <a class="btn btn-warning text-white rounded-normal">Upgrade Plan</a>
            </div>
            <div class="col-lg-12">
                <div class="card iq-realease">
                    <div class="card-header d-flex justify-content-between border-0">
                        <div class="header-title">
                            <h4 class="card-title">Trending Beats</h4>
                        </div>
                    </div>
                    <div class="card-body  iq-realeses-back">
                        <div class="row">
                            <div class="col-lg-5 iq-realese-box ">
                                <div class="iq-music-img">
                                    <div class="equalizer">
                                        <span class="bar bar-1"></span>
                                        <span class="bar bar-2"></span>
                                        <span class="bar bar-3"></span>
                                        <span class="bar bar-4"></span>
                                        <span class="bar bar-5"></span>
                                    </div>
                                </div>
                                <div class="player1 row">
                                    <div class="details1 music-list col-6 col-sm-6 col-lg-6">
                                        <div class="now-playing1"></div>
                                        <div class="track-art1"></div>
                                        <div>
                                            <div class="track-name1">{{ $new->title }} </div>
                                            <div class="track-artist1">{{$new->author->name ?? ""}}</div>
                                        </div>
                                    </div>
                                    <div class="buttons1 col-6 col-sm-2 col-lg-3">
                                        <div class="prev-track1" onclick="prevTrack1()"><i class="fa fa-step-backward fa-2x"></i></div>
                                        <a onclick="playAudio(this, '{{ asset('beatFiles/' . $new->file) }}')"><i class="fa fa-play-circle fa-3x"></i></a>
                                        <div class="next-track1" onclick="nextTrack1()"><i class="fa fa-step-forward fa-2x"></i></div>
                                    </div>
                                    <audio class="audio-player" style="display:none;">
                                        <source src="{{asset('beatFiles/258PcWacKXEKO7cUhvj95PR5WD8ROy62O7RpVzjA.mp3')}}" type="audio/mpeg">
                                        Your browser does not support the audio element.
                                    </audio>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <ul class="list-unstyled iq-song-slide mb-0 realeases-banner">
                                    @foreach($trending as $beat)
                                    <li class="row">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="media align-items-center col-10 col-md-5">
                                                <div class="iq-realese-song ">
                                                    <a href="#">
                                                        @if($beat->image !== null)
                                                        <img src="{{ config('app.env') === 'local' ? asset('beatImages/' . $beat->image) : 'https://dnasoundstudio.com/dnasoundfiles/public/beatImages/' . $beat->image }}"
                                                            class="img-border-radius avatar-60 img-fluid" alt="">
                                                        @else
                                                        <img src="https://dnasoundstudio.com/producers/assets/images/music-dashboard/feature-album/05.png"
                                                            class="img-border-radius avatar-60 img-fluid" alt="">
                                                        @endif


                                                    </a>
                                                </div>
                                                <div class="media-body text-white ml-3">
                                                    <p class="mb-0 iq-music-title">{{$beat->title}}</p>
                                                    <small>{{$beat->author->name ?? ""}}</small>
                                                </div>
                                            </div>
                                            <p class="mb-0 col-md-2 iq-m-time">7:18</p>
                                            <p class="mb-0 col-md-2 iq-m-icon"><i class="lar la-star font-size-20"></i></p>
                                            <p class="mb-0 col-2 col-md-2">
                                                <i class="las la-play-circle font-size-32"
                                                    onclick="playAudio(this, '{{ (config('app.env') === 'local') ? asset('beatFiles/' . $beat->file) : 'https://dnasoundstudio.com/dnasoundfiles/public/beatFiles/' . $beat->file }}')">
                                                </i>


                                                <!-- <i class="las la-play-circle font-size-32" onclick="playAudio(this, '{{ asset('beatFiles/' . $beat->file) }}')"></i> -->
                                            </p>
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
                                        <!-- Hidden audio player -->
                                        <audio class="audio-player" style="display:none;">
                                            <source
                                                src="{{ config('app.env') === 'local' ? asset('beatFiles/'.$beat->file) : 'https://dnasoundstudio.com/dnasoundfiles/public/beatFiles/'.$beat->file }}"
                                                type="audio/mpeg">


                                            Your browser does not support the audio element.
                                        </audio>
                                    </li>
                                    @endforeach

                                    <li class="row">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="media align-items-center col-10 col-md-5">
                                                <div class="iq-realese-song ">
                                                    <a href="#"><img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/realease-song/02.png" class="img-border-radius avatar-60 img-fluid" alt=""></a>
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
                                                    <a href="#"><img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/realease-song/03.png" class="img-border-radius avatar-60 img-fluid" alt=""></a>
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
                                                    <a href="#"><img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/realease-song/04.png" class="img-border-radius avatar-60 img-fluid" alt=""></a>
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
                                                    <a href="#"><img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/realease-song/05.png" class="img-border-radius avatar-60 img-fluid" alt=""></a>
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
                                                    <a href="#"><img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/realease-song/06.png" class="img-border-radius avatar-60 img-fluid" alt=""></a>
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
                                                    <a href="#"><img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/realease-song/07.png" class="img-border-radius avatar-60 img-fluid" alt=""></a>
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
                                                    <a href="#"><img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/realease-song/08.png" class="img-border-radius avatar-60 img-fluid" alt=""></a>
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
                                                    <a href="#"><img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/realease-song/09.png" class="img-border-radius avatar-60 img-fluid" alt=""></a>
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
                            <h4 class="card-title">My Beats</h4>
                            <a href='/create-beat' class='btn btn-primary btn-sm'>Create New Beat</a>
                        </div>
                        <div id="feature-album-slick-arrow" class="slick-aerrow-block"></div>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled row iq-box-hover mb-0">
                            @foreach($beats as $beat)
                            <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                                <div class="card mb-0">
                                    <div class="card-body p-0">
                                        <div class="iq-thumb">
                                            <div class="iq-music-overlay"></div>
                                            <a href="#">
                                                @if($beat->image !== null)
                                                <img src="{{ config('app.env') === 'local' ? asset('beatImages/' . $beat->image) : 'https://dnasoundstudio.com/dnasoundfiles/public/beatImages/' . $beat->image }}"
                                                    class="img-border-radius img-fluid w-100" alt="">
                                                @else
                                                <img src="https://dnasoundstudio.com/producers/assets/images/music-dashboard/feature-album/05.png"
                                                    class="img-border-radius img-fluid w-100" alt="">
                                                @endif
                                            </a>
                                            <div class="overlay-music-icon">
                                                <i class="las la-play-circle font-size-32"
                                                    onclick="playAudio(this, '{{ (config('app.env') === 'local') ? asset('beatFiles/' . $beat->file) : 'https://dnasoundstudio.com/dnasoundfiles/public/beatFiles/' . $beat->file }}')">
                                                </i>
                                            </div>
                                        </div>
                                        <div class="feature-list text-center">
                                            <h6 class="font-weight-600 mb-0">{{$beat->title}}</h6>
                                            <p class="mb-0">{{$beat->author->name ?? ""}}</p>
                                            <div class='actions'>
                                                <a href='#' class='las la-eye'></a>
                                                <a href='#' class='las la-edit'></a>
                                                <a href='/delete-beat/{{$beat->uuid}}' onclick="return confirm('Are you sure you want to delete this beat?')" class='las la-trash'></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hidden audio player -->
                                <audio class="audio-player" style="display:none;">
                                    <source src="" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <style>
                        @media (max-width: 767.98px) {
                            .iq-music-box {
                                flex: 0 0 50%;
                                /* 2 items per row on mobile */
                                max-width: 50%;
                            }
                        }

                        @media (min-width: 768px) {
                            .iq-music-box {
                                flex: 0 0 20%;
                                /* 5 items per row on larger screens */
                                max-width: 20%;
                            }
                        }
                    </style>


                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div class="header-title">
                            <h4 class="card-title">Other Producers</h4>
                        </div>
                        <div id="feature-album-artist-slick-arrow" class="slick-aerrow-block"></div>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled row feature-album-artist mb-0">
                            @foreach($producers as $producer)
                            <li class="col-lg-2 col-md-6 col-6 iq-music-box">
                                <div class="iq-thumb-artist">
                                    <div class="iq-music-overlay"></div>
                                    <a href="#">
                                        @if($user->logo !== null)
                                        <img src="{{ config('app.env') === 'local' ? asset('producerImage/' . $user->logo) : 'https://dnasoundstudio.com/dnasoundfiles/public/producerImage/' . $user->logo }}"
                                            class="w-100 img-fluid" alt="">
                                        @else
                                        <img src="https://dnasoundstudio.com/producers/assets/images/music-dashboard/feature-album/05.png"
                                            class="w-100 img-fluid" alt="">
                                        @endif
                                    </a>
                                    <div class="overlay-music-icon">
                                        <a href="#">
                                            <i class="las la-play-circle"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="feature-list text-center">
                                    <h6 class="font-weight-600  mb-0">{{$producer->name}}</h6>
                                </div>
                            </li>
                            @endforeach
                         

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Trending Beats</h4>
                        </div>
                        <div class="d-flex align-items-center iq-view">
                            <b class="mb-0 text-primary"><a href="#">View More <i class="las la-angle-right"></i></a></b>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled row iq-box-hover mb-0">
                            @foreach($trending as $beat)
                            <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                                <div class="card">
                                    <div class="card-body p-0">
                                        <div class="iq-thumb">
                                            <div class="iq-music-overlay"></div>
                                            <a href="#">
                                                @if($beat->image !== null)
                                                <img src="{{ config('app.env') === 'local' ? asset('beatImages/' . $beat->image) : 'https://dnasoundstudio.com/dnasoundfiles/public/beatImages/' . $beat->image }}"
                                                    class="img-border-radius img-fluid w-100" alt="">
                                                @else
                                                <img src="https://dnasoundstudio.com/producers/assets/images/music-dashboard/feature-album/05.png"
                                                    class="img-border-radius img-fluid w-100" alt="">
                                                @endif

                                            </a>
                                            <div class="overlay-music-icon">
                                                <i class="las la-play-circle font-size-32"
                                                    onclick="playAudio(this, '{{ (config('app.env') === 'local') ? asset('beatFiles/' . $beat->file) : 'https://dnasoundstudio.com/dnasoundfiles/public/beatFiles/' . $beat->file }}')">
                                                </i>
                                            </div>
                                        </div>
                                        <div class="feature-list text-center">
                                            <h6 class="font-weight-600  mb-0">{{$beat->title}}</h6>
                                            <p class="mb-0">{{$beat->author->name ?? ""}}</p>
                                        </div>
                                    </div>
                                </div>
                                <audio class="audio-player" style="display:none;">
                                    <source src="" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                            </li>
                            @endforeach
                          
                        </ul>
                    </div>

                </div>
            </div>

            <!-- <div class="col-lg-12">
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
                                                    <a href="#"><img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/hot-songs/01.png" class="img-fluid avatar-60" alt="">
                                                    </a>
                                                    <div class="overlay-music-icon">
                                                        <a href="#">
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
                                                    <a href="#"><img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/hot-songs/02.png" class="img-fluid avatar-60" alt="">
                                                    </a>
                                                    <div class="overlay-music-icon">
                                                        <a href="#">
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
                                                    <a href="#"><img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/hot-songs/03.png" class="img-fluid avatar-60" alt=""></a>
                                                    <div class="overlay-music-icon">
                                                        <a href="#">
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
                                                    <a href="#"><img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/hot-songs/04.png" class="img-fluid avatar-60" alt="">
                                                    </a>
                                                    <div class="overlay-music-icon">
                                                        <a href="#">
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
                                                    <a href="#"><img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/hot-songs/05.png" class="img-fluid avatar-60" alt="">
                                                    </a>
                                                    <div class="overlay-music-icon">
                                                        <a href="#">
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
                                                    <a href="#"><img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/hot-songs/06.png" class="img-fluid avatar-60" alt="">
                                                    </a>
                                                    <div class="overlay-music-icon">
                                                        <a href="#">
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
                                                    <a href="#"><img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/hot-songs/07.png" class="img-fluid avatar-60" alt="">
                                                    </a>
                                                    <div class="overlay-music-icon">
                                                        <a href="#">
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
                                                    <a href="#"><img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/hot-songs/08.png" class="img-fluid avatar-60" alt="">
                                                    </a>
                                                    <div class="overlay-music-icon">
                                                        <a href="#">
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
                                                    <a href="#"><img src="https://dnasoundstudio.com/producers/assets//images/music-dashboard/hot-songs/09.png" class="img-fluid avatar-60" alt="">
                                                    </a>
                                                    <div class="overlay-music-icon">
                                                        <a href="#">
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
            </div> -->
        </div>
    </div>
</div>
@endsection

@section('script')

<script>
    let currentAudioPlayer = null; // Track the currently playing audio player

    function playAudio(playButton, audioSrc) {
        // Get the parent li element
        const liElement = playButton.closest('li');

        // Get the hidden audio player in the li element
        const audioPlayer = liElement.querySelector('.audio-player');

        // If there is a currently playing audio player and it's not the one clicked, pause it
        if (currentAudioPlayer && currentAudioPlayer !== audioPlayer) {
            currentAudioPlayer.pause();
            currentAudioPlayer.currentTime = 0; // Reset playback position
            const currentPlayButton = document.querySelector('.la-pause-circle');
            if (currentPlayButton) {
                currentPlayButton.classList.remove('la-pause-circle');
                currentPlayButton.classList.add('la-play-circle');
            }
        }

        // Set the new audio source
        audioPlayer.querySelector('source').src = audioSrc;
        audioPlayer.load();

        // Toggle play/pause based on the current state
        if (audioPlayer === currentAudioPlayer) {
            if (audioPlayer.paused) {
                audioPlayer.play();
                playButton.classList.remove('la-play-circle');
                playButton.classList.add('la-pause-circle');
            } else {
                audioPlayer.pause();
                playButton.classList.remove('la-pause-circle');
                playButton.classList.add('la-play-circle');
            }
        } else {
            // If a different audio player is clicked
            audioPlayer.play();
            playButton.classList.remove('la-play-circle');
            playButton.classList.add('la-pause-circle');
            currentAudioPlayer = audioPlayer;

            // When audio ends, change the pause icon back to play icon
            audioPlayer.onended = function() {
                playButton.classList.remove('la-pause-circle');
                playButton.classList.add('la-play-circle');
                currentAudioPlayer = null; // Clear the current audio player
            };
        }
    }
</script>



@endsection
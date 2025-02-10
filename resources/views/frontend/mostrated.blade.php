@extends('frontend.master')
@section('header')
<style>
    .album {
        width: 150px;
        text-align: center;
        display: inline-block;

        vertical-align: top;
    }

    .album__image {
        width: 150px;
        height: 120px;
        overflow: hidden;
        border-radius: 10px;
    }

    .album__image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 10px;
    }

    .album__info {
        text-align: left;
        /* margin-top: 5px; */
        /* Reduced spacing */
    }

    .beat-title {
        font-size: 14px;
        /* Slightly smaller for compact layout */
        font-weight: bold;
        color: #fff;
        margin-bottom: 2px;
    }

    .beat-author {
        font-size: 12px;
        color: #aaa;
        margin-bottom: 5px;
    }

    /* Reduce spacing in the container */
    .owl-item {
        padding: 1px;
        margin-right: 0px !important;
        /* Adjusts spacing within the carousel */
    }

    .custom-stats h1 {
        margin-bottom: 0rem !important;
    }

    .custom-stats p {
        margin-top: 0.1rem;
        margin-bottom: 0;
    }

    .category-container {
        flex-wrap: wrap;
        gap: 10px;
        align-items: center;
        justify-content: center !important;
    }

    .category_list {
        white-space: nowrap;
        margin: 0;
        padding: 8px 15px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 20px;
    }

    @media screen and (max-width: 768px) {
        .category-container {
            flex-wrap: nowrap;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            scrollbar-width: none;
            /* Firefox */
            -ms-overflow-style: none;
            /* IE and Edge */
            padding-bottom: 5px;
        }

        .category-container::-webkit-scrollbar {
            display: none;
            /* Chrome, Safari, Opera */
        }

        .category_list {
            flex: 0 0 auto;
        }
    }

    @media screen and (max-width: 768px) {
        .sidehero {
            display: none;
        }

        p {
            font-size: 15px;
        }
    }
</style>
@endsection

@section('content')
<main>


    
<section class="pt-3 pt-lg-5" style="background-image: linear-gradient(rgba(34, 34, 34, 0.8), rgba(34, 34, 34, 0.8)), url('/assets/images/hero7.png');background-repeat:no-repeat;background-color:#222222">
<div class="container">
            <!-- Content and Image START -->
            <div class="row g-4 g-lg-5">
                <!-- Content -->
                <div class="col-lg-12 position-relative mb-4 mb-md-0">
                    <!-- Title -->

                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Try our new search" aria-label="Search" aria-describedby="search-addon">
                        <span class="input-group-text" id="search-addon">
                            <i class="fa-solid fa-search"></i>
                        </span>
                    </div>
                    <section class='row m-2 p-2'>
                        <div class="d-flex col-md-12 justify-content-start category-container">
                            <h6 class='category_list'>Classical</h6>
                            <h6 class='category_list'>Ambiant</h6>
                            <h6 class='category_list'>Soundtrack</h6>
                            <h6 class='category_list'>Afrobeat</h6>
                            <h6 class='category_list'>Reggea</h6>
                            <h6 class='category_list'>R&B</h6>
                            <h6 class='category_list'>Salsa</h6>
                            <h6 class='category_list'>Trap</h6>
                            <h6 class='category_list'>Hiphop</h6>
                            <h6 class='category_list'>Classical</h6>
                            <h6 class='category_list'>Ambiant</h6>
                            <h6 class='category_list'>Soundtrack</h6>
                            <h6 class='category_list'>Afrobeat</h6>
                            <h6 class='category_list'>Reggea</h6>
                            <h6 class='category_list'>R&B</h6>
                            <h6 class='category_list'>Salsa</h6>
                            <h6 class='category_list'>Trap</h6>
                            <h6 class='category_list'>Hiphop</h6>
                        </div>
                    </section>


                </div>

                <!-- Image -->

            </div>
            <!-- Content and Image END -->

        </div>
    </section>



    <section class="row row--grid m-2 pt-lg-5">
        <!-- title -->
        <div class="col-12">
        <div class="d-flex justify-content-between">
                <h4>Most Rated Beats</h4>
                <div class='d-flex'>
                    <button class="main__nav main__nav--prev" data-nav="#popular" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z"></path>
                        </svg>
                    </button>
                    <button class="main__nav main__nav--next" data-nav="#popular" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z"></path>
                        </svg>
                    </button>

                </div>
               
            </div>
        </div>
        <!-- end title -->

                            @foreach($mostrated as $beat)
                            <div class="col-6 col-sm-4 col-lg-2" style="margin-right:0px !important;">
                                <div class="album">
                                    <div class="album__cover">
                                        <div class="album__image">
                                            @if($beat->image !== null)
                                            <img src="{{ config('app.env') === 'local' ? asset('beatImages/' . $beat->image) : 'https://dnasoundstudio.com/dnasoundfiles/public/beatImages/' . $beat->image }}" alt="{{ $beat->title }}">
                                            @else
                                            <img src="https://dnasoundstudio.com/producers/assets/images/music-dashboard/feature-album/05.png" alt="Default Album Cover">
                                            @endif
                                        </div>
                                        <span class="main__list main__list--playlist main__list--dashbox">
                                            <a href="javascript:void(0)" onclick="playAudio('{{ asset('dnasoundfiles/public/beatFiles/' . $beat->file) }}', '{{$beat->title}}', '{{$beat->author->name}}', '{{ config('app.env') === 'local' ? asset('beatImages/' . $beat->image) : 'https://dnasoundstudio.com/dnasoundfiles/public/beatImages/' . $beat->image }}')">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z" />
                                                </svg>
                                            </a>
                                        </span>
                                    </div>
                                    <div class="album__info">
                                        <h4 class="beat-title">{{ $beat->title }}</h4>
                                        <p class="beat-author">{{ $beat->author->name }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        
    </section>





</main>
@endsection

@section('script')
<script>
    function playAudio(audioSrc, title, artist, coverImage) {
        const audio = document.getElementById('audio');
        const playerTitle = document.querySelector('.audio-player__title');
        const playerArtist = document.querySelector('.audio-player__artist');
        const playerArtwork = document.querySelector('.audio-player__artwork img');

        // Update player info
        playerTitle.textContent = title;
        playerArtist.textContent = artist;
        playerArtwork.src = coverImage;

        // Update audio source and play
        audio.src = audioSrc;
        audio.play();

        // Update play button icon to pause
        const playPauseBtn = document.getElementById('playPauseBtn');
        playPauseBtn.innerHTML = '<svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z"/></svg>';
    }
</script>
@endsection
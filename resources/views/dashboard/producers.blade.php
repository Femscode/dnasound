@extends('dashboard.master')

@section('header')

@endsection

@section('main')
<main class="main">
    <div class="container-fluid">
        <!-- artists -->
        <div class="row row--grid">
            <!-- breadcrumb -->
            <div class="col-12">
                <ul class="breadcrumb">
                    <li class="breadcrumb__item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb__item breadcrumb__item--active">Producers</li>
                </ul>
            </div>
            <!-- end breadcrumb -->

            <!-- title -->
            <div class="col-12">
                <div class="main__title main__title--page">
                    <h1>Producers</h1>
                </div>
            </div>
            <!-- end title -->
        </div>

        <div class="row row--grid">
           
        <div class="col-12">
                <div class="main__carousel-wrap">
                    <div class="main__carousel main__carousel--artists owl-carousel" id="artists">
                        @foreach($producers as $user)
                        <a href="#" class="artist">
                            <div class="artist__cover">
                                @if($user->logo !== null)
                                <img src="{{ config('app.env') === 'local' ? asset('producerImage/' . $user->logo) : 'https://dnasoundstudio.com/dnasoundfiles/public/producerImage/' . $user->logo }}"
                                    alt="">
                                @else
                                <img src="https://dnasoundstudio.com/producers/assets/images/music-dashboard/feature-album/05.png"
                                    alt="">
                                @endif
                            </div>
                            <h3 class="artist__title">{{$user->name}}</h3>
                        </a>
                        @endforeach

                        <a href="#" class="artist">
                            <div class="artist__cover">
                                <img src="/dna/img/artists/artist2.jpg" alt="">
                            </div>
                            <h3 class="artist__title">Jason Aldean</h3>
                        </a>

                        <a href="#" class="artist">
                            <div class="artist__cover">
                                <img src="/dna/img/artists/artist3.jpg" alt="">
                            </div>
                            <h3 class="artist__title">John Doe</h3>
                        </a>

                        <a href="#" class="artist">
                            <div class="artist__cover">
                                <img src="/dna/img/artists/artist4.jpg" alt="">
                            </div>
                            <h3 class="artist__title">Megan Thee</h3>
                        </a>

                        <a href="#" class="artist">
                            <div class="artist__cover">
                                <img src="/dna/img/artists/artist5.jpg" alt="">
                            </div>
                            <h3 class="artist__title">Stefflon Don</h3>
                        </a>

                        <a href="#" class="artist">
                            <div class="artist__cover">
                                <img src="/dna/img/artists/artist6.jpg" alt="">
                            </div>
                            <h3 class="artist__title">Juice WRLD</h3>
                        </a>

                        <a href="#" class="artist">
                            <div class="artist__cover">
                                <img src="/dna/img/artists/artist7.jpg" alt="">
                            </div>
                            <h3 class="artist__title">LOCASH</h3>
                        </a>

                        <a href="#" class="artist">
                            <div class="artist__cover">
                                <img src="/dna/img/artists/artist8.jpg" alt="">
                            </div>
                            <h3 class="artist__title">NLE Choppa</h3>
                        </a>
                    </div>

                    <button class="main__nav main__nav--prev" data-nav="#artists" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z" />
                        </svg></button>
                    <button class="main__nav main__nav--next" data-nav="#artists" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z" />
                        </svg></button>
                </div>
            </div>
        </div>
        <!-- end artists -->


    </div>
</main>
@endsection

@section('script')
@endsection
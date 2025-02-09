@extends('producer.master')

@section('header')

@endsection

@section('main')
<main class="main">
    <div class="container-fluid">
        <!-- slider -->
        <section class="row">
            <div class="col-12">
                <div class="hero owl-carousel" id="hero">
                    <div class="hero__slide" data-bg="/dna/img/home/slide1.jpg">
                        <h1 class="hero__title">DNA Sound Studio</h1>
                        <p class="hero__text">Connecting Music Starss, Producers, and Artists.</p>
                        <div class="hero__btns">
                            <a href="#" class="hero__btn hero__btn--green">Get Started</a>
                            <a href="#" class="hero__btn">About Us</a>
                        </div>
                    </div>

                    <div class="hero__slide" data-bg="/dna/img/home/slide2.jpg">
                        <h2 class="hero__title">A vibrant marketplace </h2>
                        <p class="hero__text">Whether you're a producer, artist, or music enthusiast, join our dynamic community to elevate your creative journey and connect with industry talent.</p>
                        <div class="hero__btns">
                            <a href="#" class="hero__btn hero__btn--green">Access Storage</a>
                            <a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="hero__btn hero__btn--video open-video"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M16,10.27,11,7.38A2,2,0,0,0,8,9.11v5.78a2,2,0,0,0,1,1.73,2,2,0,0,0,2,0l5-2.89a2,2,0,0,0,0-3.46ZM15,12l-5,2.89V9.11L15,12ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z" />
                                </svg> Watch video</a>
                        </div>
                    </div>

                    <div class="hero__slide" data-bg="/dna/img/home/slide3.jpg">
                        <h2 class="hero__title">Grow your music business today!</h2>
                        <p class="hero__text">Join us in making the every beat count. We are proud to be the link every producer and music artist needs.</p>
                        <div class="hero__btns">
                            <a href="#" class="hero__btn">About Us</a>
                        </div>
                    </div>
                </div>

                <button class="main__nav main__nav--hero main__nav--prev" data-nav="#hero" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z" />
                    </svg></button>
                <button class="main__nav main__nav--hero main__nav--next" data-nav="#hero" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z" />
                    </svg></button>
            </div>
        </section>
        <!-- end slider -->

        <!-- releases -->
        @if(count($beats) > 1)
        <section class="row row--grid">
            <!-- title -->
            <div class="col-12">
                <div class="main__title">
                    <h2>My Beats</h2>

                    <a href="/beat/my-beats" class="main__link">See all <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z" />
                        </svg></a>
                </div>
            </div>
           
            @foreach($beats as $beat)

            <div class="col-6 col-sm-4 col-lg-2">
                <div class="album">
                    <div class="album__cover ">
                        @if($beat->image !== null)
                        <img src="{{ config('app.env') === 'local' ? asset('beatImages/' . $beat->image) : 'https://dnasoundstudio.com/dnasoundfiles/public/beatImages/' . $beat->image }}"
                            alt="">
                        @else
                        <img src="https://dnasoundstudio.com/producers/assets/images/music-dashboard/feature-album/05.png"
                            alt="">
                        @endif
                        <!-- <img src="/dna/img/covers/cover2.jpg" alt=""> -->
                        <span class="main__list main__list--playlist main__list--dashbox">
                            <a data-playlist data-title="{{$beat->title}}" data-artist="{{$beat->author->name}}" href="{{ asset('dnasoundfiles/public/beatFiles/' . $beat->file) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z" />
                                </svg></a></span>
                        <span class="album__stat">
                            <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M3.71,16.29a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21,1,1,0,0,0-.21.33,1,1,0,0,0,.21,1.09,1.15,1.15,0,0,0,.33.21.94.94,0,0,0,.76,0,1.15,1.15,0,0,0,.33-.21,1,1,0,0,0,.21-1.09A1,1,0,0,0,3.71,16.29ZM7,8H21a1,1,0,0,0,0-2H7A1,1,0,0,0,7,8ZM3.71,11.29a1,1,0,0,0-1.09-.21,1.15,1.15,0,0,0-.33.21,1,1,0,0,0-.21.33.94.94,0,0,0,0,.76,1.15,1.15,0,0,0,.21.33,1.15,1.15,0,0,0,.33.21.94.94,0,0,0,.76,0,1.15,1.15,0,0,0,.33-.21,1.15,1.15,0,0,0,.21-.33.94.94,0,0,0,0-.76A1,1,0,0,0,3.71,11.29ZM21,11H7a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2ZM3.71,6.29a1,1,0,0,0-.33-.21,1,1,0,0,0-1.09.21,1.15,1.15,0,0,0-.21.33.94.94,0,0,0,0,.76,1.15,1.15,0,0,0,.21.33,1.15,1.15,0,0,0,.33.21,1,1,0,0,0,1.09-.21,1.15,1.15,0,0,0,.21-.33.94.94,0,0,0,0-.76A1.15,1.15,0,0,0,3.71,6.29ZM21,16H7a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Z" />
                                </svg> 7</span>
                            <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M20,13.18V11A8,8,0,0,0,4,11v2.18A3,3,0,0,0,2,16v2a3,3,0,0,0,3,3H8a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1H6V11a6,6,0,0,1,12,0v2H16a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1h3a3,3,0,0,0,3-3V16A3,3,0,0,0,20,13.18ZM7,15v4H5a1,1,0,0,1-1-1V16a1,1,0,0,1,1-1Zm13,3a1,1,0,0,1-1,1H17V15h2a1,1,0,0,1,1,1Z" />
                                </svg> 4 731</span>
                        </span>
                    </div>
                    <div class="album__title">
                        <h3><a href="/beat/beat-details/{{$beat->uuid}}">{{$beat->title}}</a></h3>
                        <span><a href="#">{{$beat->author->name ?? ""}}</a></span>
                    </div>
                </div>
            </div>

            @endforeach


           
        </section>
        @endif
       
        <section class="row row--grid">
            <!-- title -->
            <div class="col-12">
                <div class="main__title">
                    <h2>Producers</h2>

                    <a href="#" class="main__link">See all <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z" />
                        </svg></a>
                </div>
            </div>
            <!-- end title -->

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

                    </div>

                    <button class="main__nav main__nav--prev" data-nav="#artists" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z" />
                        </svg></button>
                    <button class="main__nav main__nav--next" data-nav="#artists" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z" />
                        </svg></button>
                </div>
            </div>
        </section>
        <!-- end articts -->

        <section class="row row--grid">
            <div class="col-12 col-md-6 col-xl-6">
                <div class="row row--grid">
                    <!-- title -->
                    <div class="col-12">
                        <div class="main__title">
                            <h2><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M21.65,2.24a1,1,0,0,0-.8-.23l-13,2A1,1,0,0,0,7,5V15.35A3.45,3.45,0,0,0,5.5,15,3.5,3.5,0,1,0,9,18.5V10.86L20,9.17v4.18A3.45,3.45,0,0,0,18.5,13,3.5,3.5,0,1,0,22,16.5V3A1,1,0,0,0,21.65,2.24ZM5.5,20A1.5,1.5,0,1,1,7,18.5,1.5,1.5,0,0,1,5.5,20Zm13-2A1.5,1.5,0,1,1,20,16.5,1.5,1.5,0,0,1,18.5,18ZM20,7.14,9,8.83v-3L20,4.17Z" />
                                </svg><a href="#">Top Beats</a></h2>
                        </div>
                    </div>
                    <!-- end title -->

                    <div class="col-12">
                        <ul class="main__list">
                            @foreach($top as $key => $beat)
                            <li class="single-item">

                                <span class="single-item__rate"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M12.71,12.54a1,1,0,0,0-1.42,0l-3,3A1,1,0,0,0,9.71,17L12,14.66,14.29,17a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Zm-3-1.08L12,9.16l2.29,2.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-3-3a1,1,0,0,0-1.42,0l-3,3a1,1,0,0,0,1.42,1.42Z" />
                                    </svg>{{++$key}}</span>
                                <a data-link data-playlist data-title="{{$beat->title}}" data-artist="{{$beat->author->name}}" href="{{ asset('dnasoundfiles/public/beatFiles/' . $beat->file) }}" class="single-item__cover">
                                    @if($beat->image !== null)
                                    <img src="{{ config('app.env') === 'local' ? asset('beatImages/' . $beat->image) : 'https://dnasoundstudio.com/dnasoundfiles/public/beatImages/' . $beat->image }}"
                                        alt="">
                                    @else
                                    <img src="https://dnasoundstudio.com/producers/assets/images/music-dashboard/feature-album/05.png"
                                        alt="">
                                    @endif
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M16,2a3,3,0,0,0-3,3V19a3,3,0,0,0,6,0V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-2,0V5a1,1,0,0,1,2,0ZM8,2A3,3,0,0,0,5,5V19a3,3,0,0,0,6,0V5A3,3,0,0,0,8,2ZM9,19a1,1,0,0,1-2,0V5A1,1,0,0,1,9,5Z" />
                                    </svg>
                                </a>
                                <div class="single-item__title">
                                    <h4><a href="#">{{$beat->title}}</a></h4>
                                    <span><a href="#">{{$beat->author->name ?? ""}}</a></span>
                                </div>
                                <span class="single-item__time">2:35</span>
                            </li>

                            @endforeach


                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-xl-6">
                <div class="row row--grid">
                    <!-- title -->
                    <div class="col-12">
                        <div class="main__title">
                            <h2><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M19.12,2.21A1,1,0,0,0,18.26,2l-8,2A1,1,0,0,0,9.5,5V15.35A3.45,3.45,0,0,0,8,15a3.5,3.5,0,1,0,3.5,3.5V10.78L18.74,9l.07,0L19,8.85l.15-.1a.93.93,0,0,0,.13-.15.78.78,0,0,0,.1-.15.55.55,0,0,0,.06-.18.58.58,0,0,0,0-.19.24.24,0,0,0,0-.08V3A1,1,0,0,0,19.12,2.21ZM8,20a1.5,1.5,0,1,1,1.5-1.5A1.5,1.5,0,0,1,8,20ZM17.5,7.22l-6,1.5V5.78l6-1.5Z" />
                                </svg><a href="#">Latest</a></h2>
                        </div>
                    </div>
                    <!-- end title -->

                    <div class="col-12">
                        <ul class="main__list">
                            @foreach($trending as $key => $beat)
                            <li class="single-item">


                                <a data-link data-playlist data-title="{{$beat->title}}" data-artist="{{$beat->author->name}}" href="{{ asset('dnasoundfiles/public/beatFiles/' . $beat->file) }}" class="single-item__cover">
                                    @if($beat->image !== null)
                                    <img src="{{ config('app.env') === 'local' ? asset('beatImages/' . $beat->image) : 'https://dnasoundstudio.com/dnasoundfiles/public/beatImages/' . $beat->image }}"
                                        alt="">
                                    @else
                                    <img src="https://dnasoundstudio.com/producers/assets/images/music-dashboard/feature-album/05.png"
                                        alt="">
                                    @endif
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M16,2a3,3,0,0,0-3,3V19a3,3,0,0,0,6,0V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-2,0V5a1,1,0,0,1,2,0ZM8,2A3,3,0,0,0,5,5V19a3,3,0,0,0,6,0V5A3,3,0,0,0,8,2ZM9,19a1,1,0,0,1-2,0V5A1,1,0,0,1,9,5Z" />
                                    </svg>
                                </a>
                                <div class="single-item__title">
                                    <h4><a href="#">{{$beat->title}}</a></h4>
                                    <span><a href="#">{{$beat->author->name ?? ""}}</a></span>
                                </div>
                                <span class="single-item__time">2:35</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

        </section>


        <!-- end podcasts -->

        <!-- store -->
        <!-- <section class="row row--grid">
           
            <div class="col-12">
                <div class="main__title">
                    <h2>Products</h2>

                    <a href="store.html" class="main__link">See all <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z" />
                        </svg></a>
                </div>
            </div>
           

            <div class="col-12">
                <div class="main__carousel-wrap">
                    <div class="main__carousel main__carousel--store owl-carousel" id="store">
                        <div class="product">
                            <a href="#" class="product__img">
                                <img src="/dna/img/store/item1.jpg" alt="">
                            </a>
                            <h3 class="product__title"><a href="product.html">Vinyl Player</a></h3>
                            <span class="product__price">$1 099</span>
                            <span class="product__new">New</span>
                        </div>

                        <div class="product">
                            <a href="#" class="product__img">
                                <img src="/dna/img/store/item2.jpg" alt="">
                            </a>
                            <h3 class="product__title"><a href="product.html">Microphone R4</a></h3>
                            <span class="product__price">$799</span>
                        </div>

                        <div class="product">
                            <a href="#" class="product__img">
                                <img src="/dna/img/store/item3.jpg" alt="">
                            </a>
                            <h3 class="product__title"><a href="product.html">Music Blank</a></h3>
                            <span class="product__price">$3.99</span>
                            <span class="product__new">New</span>
                        </div>

                        <div class="product">
                            <a href="#" class="product__img">
                                <img src="/dna/img/store/item4.jpg" alt="">
                            </a>
                            <h3 class="product__title"><a href="product.html">Headphones ZR-991</a></h3>
                            <span class="product__price">$199</span>
                        </div>

                        <div class="product">
                            <a href="#" class="product__img">
                                <img src="/dna/img/store/item5.jpg" alt="">
                            </a>
                            <h3 class="product__title"><a href="product.html">Piano</a></h3>
                            <span class="product__price">$11 899</span>
                        </div>

                        <div class="product">
                            <a href="#" class="product__img">
                                <img src="/dna/img/store/item6.jpg" alt="">
                            </a>
                            <h3 class="product__title"><a href="product.html">Vinyl Player</a></h3>
                            <span class="product__price">$2 499</span>
                        </div>

                        <div class="product">
                            <a href="#" class="product__img">
                                <img src="/dna/img/store/item7.jpg" alt="">
                            </a>
                            <h3 class="product__title"><a href="product.html">Guitar</a></h3>
                            <span class="product__price">$299</span>
                        </div>

                        <div class="product">
                            <a href="#" class="product__img">
                                <img src="/dna/img/store/item8.jpg" alt="">
                            </a>
                            <h3 class="product__title"><a href="product.html">Microphone R4s</a></h3>
                            <span class="product__price">$199</span>
                        </div>
                    </div>

                    <button class="main__nav main__nav--prev" data-nav="#store" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z" />
                        </svg></button>
                    <button class="main__nav main__nav--next" data-nav="#store" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z" />
                        </svg></button>
                </div>
            </div>
        </section> -->
        <!-- end store -->

        <!-- news -->
        <section class="row row--grid">
            <!-- title -->
            <div class="col-12">
                <div class="main__title">
                    <h2>News</h2>

                    <a href="news.html" class="main__link">See all <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z" />
                        </svg></a>
                </div>
            </div>
            <!-- end title -->

            <!-- video post -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="post">
                    <a href="article.html" class="post__img">
                        <img src="/dna/img/posts/1.jpg" alt="">
                    </a>

                    <a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="post__video open-video">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M16,10.27,11,7.38A2,2,0,0,0,8,9.11v5.78a2,2,0,0,0,1,1.73,2,2,0,0,0,2,0l5-2.89a2,2,0,0,0,0-3.46ZM15,12l-5,2.89V9.11L15,12ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z" />
                        </svg> Watch backstage
                    </a>

                    <div class="post__content">
                        <a href="#" class="post__category">Music</a>
                        <h3 class="post__title"><a href="article.html">Watch Artist Burna Performance at ...</a></h3>
                        <div class="post__meta">
                            <span class="post__date"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M12,2A10,10,0,1,0,22,12,10.01114,10.01114,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8.00917,8.00917,0,0,1,12,20ZM14.09814,9.63379,13,10.26807V7a1,1,0,0,0-2,0v5a1.00025,1.00025,0,0,0,1.5.86621l2.59814-1.5a1.00016,1.00016,0,1,0-1-1.73242Z" />
                                </svg> 2 hours ago</span>
                            <span class="post__comments"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M13,11H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Zm4-4H7A1,1,0,0,0,7,9H17a1,1,0,0,0,0-2Zm2-5H5A3,3,0,0,0,2,5V15a3,3,0,0,0,3,3H16.59l3.7,3.71A1,1,0,0,0,21,22a.84.84,0,0,0,.38-.08A1,1,0,0,0,22,21V5A3,3,0,0,0,19,2Zm1,16.59-2.29-2.3A1,1,0,0,0,17,16H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4H19a1,1,0,0,1,1,1Z" />
                                </svg> 61</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end video post -->

            <!-- post -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="post">
                    <a href="article.html" class="post__img">
                        <img src="/dna/img/posts/2.jpg" alt="">
                    </a>

                    <div class="post__content">
                        <a href="#" class="post__category">Music</a>
                        <h3 class="post__title"><a href="article.html">DJ Cuppy featured on the new trending movie SUPACELL!</a></h3>
                        <div class="post__meta">
                            <span class="post__date"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M12,2A10,10,0,1,0,22,12,10.01114,10.01114,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8.00917,8.00917,0,0,1,12,20ZM14.09814,9.63379,13,10.26807V7a1,1,0,0,0-2,0v5a1.00025,1.00025,0,0,0,1.5.86621l2.59814-1.5a1.00016,1.00016,0,1,0-1-1.73242Z" />
                                </svg> 3 hours ago</span>
                            <span class="post__comments"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M13,11H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Zm4-4H7A1,1,0,0,0,7,9H17a1,1,0,0,0,0-2Zm2-5H5A3,3,0,0,0,2,5V15a3,3,0,0,0,3,3H16.59l3.7,3.71A1,1,0,0,0,21,22a.84.84,0,0,0,.38-.08A1,1,0,0,0,22,21V5A3,3,0,0,0,19,2Zm1,16.59-2.29-2.3A1,1,0,0,0,17,16H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4H19a1,1,0,0,1,1,1Z" />
                                </svg> 18</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end post -->

            <!-- post -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="post">
                    <a href="article.html" class="post__img">
                        <img src="/dna/img/posts/3.jpg" alt="">
                    </a>

                    <div class="post__content">
                        <a href="#" class="post__category">Features</a>
                        <h3 class="post__title"><a href="article.html">Why should you choose DNA Sound Studio?</a></h3>
                        <div class="post__meta">
                            <span class="post__date"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M12,2A10,10,0,1,0,22,12,10.01114,10.01114,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8.00917,8.00917,0,0,1,12,20ZM14.09814,9.63379,13,10.26807V7a1,1,0,0,0-2,0v5a1.00025,1.00025,0,0,0,1.5.86621l2.59814-1.5a1.00016,1.00016,0,1,0-1-1.73242Z" />
                                </svg> 9 hours ago</span>
                            <span class="post__comments"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M13,11H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Zm4-4H7A1,1,0,0,0,7,9H17a1,1,0,0,0,0-2Zm2-5H5A3,3,0,0,0,2,5V15a3,3,0,0,0,3,3H16.59l3.7,3.71A1,1,0,0,0,21,22a.84.84,0,0,0,.38-.08A1,1,0,0,0,22,21V5A3,3,0,0,0,19,2Zm1,16.59-2.29-2.3A1,1,0,0,0,17,16H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4H19a1,1,0,0,1,1,1Z" />
                                </svg> 54</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end post -->
        </section>
        <!-- end news -->

        <!-- partners -->
        <!-- <div class="row">
            <div class="col-12">
                <div class="partners owl-carousel">
                    <a href="#" class="partners__img">
                        <img src="/dna/img/partners/3docean-light-background.png" alt="">
                    </a>

                    <a href="#" class="partners__img">
                        <img src="/dna/img/partners/activeden-light-background.png" alt="">
                    </a>

                    <a href="#" class="partners__img">
                        <img src="/dna/img/partners/audiojungle-light-background.png" alt="">
                    </a>

                    <a href="#" class="partners__img">
                        <img src="/dna/img/partners/codecanyon-light-background.png" alt="">
                    </a>

                    <a href="#" class="partners__img">
                        <img src="/dna/img/partners/photodune-light-background.png" alt="">
                    </a>

                    <a href="#" class="partners__img">
                        <img src="/dna/img/partners/themeforest-light-background.png" alt="">
                    </a>
                </div>
            </div>
        </div> -->
        <!-- end partners -->
    </div>
</main>
@endsection

@section('script')

@endsection
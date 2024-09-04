@extends('producer.master')

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
                    <li class="breadcrumb__item breadcrumb__item--active">My Beats</li>
                </ul>
            </div>
            <!-- end breadcrumb -->

            <!-- title -->
            <div class="col-12">
                <div class="main__title main__title--page">
                    <h1>My Beats</h1>
                </div>
            </div>
            <!-- end title -->
        </div>

        <div class="row row--grid">
            <div class="col-12">
                <div class="main__filter">
                    <form action="#" class="main__filter-search">
                        <input type="text" placeholder="Search...">
                        <button type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z" />
                            </svg></button>
                    </form>



                    <div class="slider-radio">
                        <a href="/beat/create-beat"><label for="newest">Create Beat</label></a>
                    </div>
                </div>

                <div class="row row--grid">
                    @foreach($beats as $beat)

                    <div class="col-6 col-sm-4 col-lg-2">
                        <div class="album">
                            <div class="album__cover">
                                @if($beat->image !== null)
                                <img src="{{ config('app.env') === 'local' ? asset('beatImages/' . $beat->image) : 'https://dnasoundstudio.com/dnasoundfiles/public/beatImages/' . $beat->image }}"
                                 alt="">
                                @else
                                <img src="https://dnasoundstudio.com/producers/assets/images/music-dashboard/feature-album/05.png"
                                    alt="">
                                @endif
                                <!-- <img src="/dna/img/covers/cover2.jpg" alt=""> -->
                                <span class="main__list main__list--playlist main__list--dashbox">
                        <a data-playlist data-title="{{$beat->title}}" data-artist="{{$beat->author->name}}" href="{{ asset('dnasoundfiles/public/beatFiles/' . $beat->file) }}" >
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
                                <span><a href="/">{{$beat->author->name ?? ""}}</a></span>
                                <span><a href='/beat/edit/{{$beat->uuid}}' style='color:#f25621' >Edit</a> <a style='color:#FF4C4C' href=''>Delete</a></span>
                              
                            </div>

                        </div>
                    </div>

                    @endforeach

                </div>

                <button class="main__load" type="button">Load more</button>
            </div>
        </div>
        <!-- end artists -->


    </div>
</main>
@endsection

@section('script')
@endsection
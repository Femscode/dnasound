@extends('frontend.master')
@section('header')
<style>
    .custom-stats h1 {
        margin-bottom: 0rem !important;
    }

    .custom-stats p {
        margin-top: 0.1rem;
        margin-bottom: 0;
    }
</style>
@endsection

@section('content')
<main>

    <section class="pt-3 pt-lg-5" style="background-image: url('/assets/images/hero6.png');background-repeat:no-repeat;">
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



   
    <section class="row row--grid p-1 m-1">
        <!-- title -->
        <div class="col-12 ">
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
                    <!-- <img src="https://dnasoundstudio.com/dnasoundfiles/public/beatImages/{{$beat->image}}" alt=""> -->
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
                    <h3><a href="/beat/beat-details/{{ $beat->id }}">{{ $beat->title }}</a></h3>
                    <span><a href="#">{{ $beat->author->name ?? 'Unknown' }}</a></span>
                </div>
            </div>
        </div>
        @endforeach
        <div class='justify-content-center d-flex'>
        {!! $mostrated->links('pagination::bootstrap-4') !!}
</div>

    </section>



</main>
@endsection

@section('script')
@endsection
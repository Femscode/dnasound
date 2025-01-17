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
                <div class="col-lg-8 position-relative mb-4 mb-md-0">
                    <!-- Title -->
                    <h3 style='color:#fffdd4' class="mb-4 mt-md-5">One Stop Place To Blaze Your Expression With Powerful Sounds.

                    </h3>
                    <!-- Info -->
                    <div class='d-flex'>

                        <p class='mr-4 fs-bolder' style='color:#D7BBFF'><b>•</b> RIDE THE WAVE</p>
                        <p class='mr-4 fs-bolder' style='color:#D7BBFF'>• WRITE THE JOURNEY </p>
                        <p class='mr-4 fs-bolder' style='color:#D7BBFF'>• TAKE THE DARE </p>

                    </div>
                    <p style='color:#fffdd4' class="mb-4">Find the perfect beat for your project.</p>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Try our new search" aria-label="Search" aria-describedby="search-addon">
                        <span class="input-group-text" id="search-addon">
                            <i class="fa-solid fa-search"></i>
                        </span>
                    </div>


                </div>

                <!-- Image -->
                <div class="col-lg-4 position-relative">

                    <img src="{{url('assets/images/hero2.png')}}" class="rounded" alt="">
                    <!-- <img style='margin-left:40px' src="{{url('assets/images/hero2.png')}}" class="rounded" alt=""> -->


                    <!-- Support guid -->

                    <!-- Round image group -->
                    <!-- <div class="vstack gap-5 align-items-center position-absolute top-0 start-0 d-none d-md-flex mt-4 ms-n3">
                        <img class="icon-xl shadow-lg border border-3 border-white rounded-circle" src="{{url('dna/img/playbutton.png')}}" alt="avatar">
                    </div> -->
                </div>
            </div>
            <!-- Content and Image END -->

        </div>
    </section>
    <!-- <section class='row m-2 p-2'>
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
    </section> -->

    <!-- <section class="row row--grid m-2 p-2">

        <div class="col-12">
            <div class="main__title">
                <h2>My Beats</h2>
                <div class='justify-content-end'>
                    <a href="/beat/my-beats" style='border-color:#fff' class="btn btn-dark bg-transparent border-1">View all→</a>
                </div>
            </div>
        </div>


        <div class="col-6 col-sm-4 col-lg-2">
            <div class="album">
                <div class="album__cover ">
                    <img src="https://dnasoundstudio.com/dnasoundfiles/public/beatImages/N7rA0ZeC69fvetAccnkryRB9Da8Qyg7IS2tuZHio.jpg" alt="">
                  
                    <span class="main__list main__list--playlist main__list--dashbox">
                        <a data-playlist="" data-title="Anikanda - Zino" data-artist="Fasanya Pelumi" href="https://dnasoundstudio.com/dnasoundfiles/public/beatFiles/ib1eHyjx4v1zYoyikNhMhHxgFgyxwiCwW0kT9xUj.mp3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"></path>
                            </svg></a></span>
                    <span class="album__stat">
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M3.71,16.29a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21,1,1,0,0,0-.21.33,1,1,0,0,0,.21,1.09,1.15,1.15,0,0,0,.33.21.94.94,0,0,0,.76,0,1.15,1.15,0,0,0,.33-.21,1,1,0,0,0,.21-1.09A1,1,0,0,0,3.71,16.29ZM7,8H21a1,1,0,0,0,0-2H7A1,1,0,0,0,7,8ZM3.71,11.29a1,1,0,0,0-1.09-.21,1.15,1.15,0,0,0-.33.21,1,1,0,0,0-.21.33.94.94,0,0,0,0,.76,1.15,1.15,0,0,0,.21.33,1.15,1.15,0,0,0,.33.21.94.94,0,0,0,.76,0,1.15,1.15,0,0,0,.33-.21,1.15,1.15,0,0,0,.21-.33.94.94,0,0,0,0-.76A1,1,0,0,0,3.71,11.29ZM21,11H7a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2ZM3.71,6.29a1,1,0,0,0-.33-.21,1,1,0,0,0-1.09.21,1.15,1.15,0,0,0-.21.33.94.94,0,0,0,0,.76,1.15,1.15,0,0,0,.21.33,1.15,1.15,0,0,0,.33.21,1,1,0,0,0,1.09-.21,1.15,1.15,0,0,0,.21-.33.94.94,0,0,0,0-.76A1.15,1.15,0,0,0,3.71,6.29ZM21,16H7a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Z"></path>
                            </svg> 7</span>
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M20,13.18V11A8,8,0,0,0,4,11v2.18A3,3,0,0,0,2,16v2a3,3,0,0,0,3,3H8a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1H6V11a6,6,0,0,1,12,0v2H16a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1h3a3,3,0,0,0,3-3V16A3,3,0,0,0,20,13.18ZM7,15v4H5a1,1,0,0,1-1-1V16a1,1,0,0,1,1-1Zm13,3a1,1,0,0,1-1,1H17V15h2a1,1,0,0,1,1,1Z"></path>
                            </svg> 4 731</span>
                    </span>
                </div>
                <div class="album__title">
                    <h3><a href="/beat/beat-details/24ef567b-d30a-40c3-9274-863f4dd54209">Anikanda - Zino</a></h3>
                    <span><a href="#">Fasanya Pelumi</a></span>
                </div>
            </div>
        </div>


        <div class="col-6 col-sm-4 col-lg-2">
            <div class="album">
                <div class="album__cover ">
                    <img src="https://dnasoundstudio.com/dnasoundfiles/public/beatImages/eVxB2ePDHubSq85uS21zx1GBWhH7tA3Sln9qz2Wd.jpg" alt="">
                   
                    <span class="main__list main__list--playlist main__list--dashbox">
                        <a data-playlist="" data-title="Moving - Omah" data-artist="Fasanya Pelumi" href="https://dnasoundstudio.com/dnasoundfiles/public/beatFiles/Q6dP1hPnIMfo3OX823oaq0ibtJs2aRbxeMqiBpjm.mp3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"></path>
                            </svg></a></span>
                    <span class="album__stat">
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M3.71,16.29a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21,1,1,0,0,0-.21.33,1,1,0,0,0,.21,1.09,1.15,1.15,0,0,0,.33.21.94.94,0,0,0,.76,0,1.15,1.15,0,0,0,.33-.21,1,1,0,0,0,.21-1.09A1,1,0,0,0,3.71,16.29ZM7,8H21a1,1,0,0,0,0-2H7A1,1,0,0,0,7,8ZM3.71,11.29a1,1,0,0,0-1.09-.21,1.15,1.15,0,0,0-.33.21,1,1,0,0,0-.21.33.94.94,0,0,0,0,.76,1.15,1.15,0,0,0,.21.33,1.15,1.15,0,0,0,.33.21.94.94,0,0,0,.76,0,1.15,1.15,0,0,0,.33-.21,1.15,1.15,0,0,0,.21-.33.94.94,0,0,0,0-.76A1,1,0,0,0,3.71,11.29ZM21,11H7a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2ZM3.71,6.29a1,1,0,0,0-.33-.21,1,1,0,0,0-1.09.21,1.15,1.15,0,0,0-.21.33.94.94,0,0,0,0,.76,1.15,1.15,0,0,0,.21.33,1.15,1.15,0,0,0,.33.21,1,1,0,0,0,1.09-.21,1.15,1.15,0,0,0,.21-.33.94.94,0,0,0,0-.76A1.15,1.15,0,0,0,3.71,6.29ZM21,16H7a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Z"></path>
                            </svg> 7</span>
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M20,13.18V11A8,8,0,0,0,4,11v2.18A3,3,0,0,0,2,16v2a3,3,0,0,0,3,3H8a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1H6V11a6,6,0,0,1,12,0v2H16a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1h3a3,3,0,0,0,3-3V16A3,3,0,0,0,20,13.18ZM7,15v4H5a1,1,0,0,1-1-1V16a1,1,0,0,1,1-1Zm13,3a1,1,0,0,1-1,1H17V15h2a1,1,0,0,1,1,1Z"></path>
                            </svg> 4 731</span>
                    </span>
                </div>
                <div class="album__title">
                    <h3><a href="/beat/beat-details/23565b26-77c0-4daa-a3f7-6eaebf810859">Moving - Omah</a></h3>
                    <span><a href="#">Fasanya Pelumi</a></span>
                </div>
            </div>
        </div>


        <div class="col-6 col-sm-4 col-lg-2">
            <div class="album">
                <div class="album__cover ">
                    <img src="https://dnasoundstudio.com/dnasoundfiles/public/beatImages/xqiMkNYANFPKcNCIM0IYYCiQrSOWk46G7SJuMe5O.jpg" alt="">
                   
                    <span class="main__list main__list--playlist main__list--dashbox">
                        <a data-playlist="" data-title="Treasure - Timaya" data-artist="Fasanya Pelumi" href="https://dnasoundstudio.com/dnasoundfiles/public/beatFiles/rqX2tyCXRJaXqE6OgU8MYQqjU2xtk1xfXwZChqdL.mp3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"></path>
                            </svg></a></span>
                    <span class="album__stat">
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M3.71,16.29a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21,1,1,0,0,0-.21.33,1,1,0,0,0,.21,1.09,1.15,1.15,0,0,0,.33.21.94.94,0,0,0,.76,0,1.15,1.15,0,0,0,.33-.21,1,1,0,0,0,.21-1.09A1,1,0,0,0,3.71,16.29ZM7,8H21a1,1,0,0,0,0-2H7A1,1,0,0,0,7,8ZM3.71,11.29a1,1,0,0,0-1.09-.21,1.15,1.15,0,0,0-.33.21,1,1,0,0,0-.21.33.94.94,0,0,0,0,.76,1.15,1.15,0,0,0,.21.33,1.15,1.15,0,0,0,.33.21.94.94,0,0,0,.76,0,1.15,1.15,0,0,0,.33-.21,1.15,1.15,0,0,0,.21-.33.94.94,0,0,0,0-.76A1,1,0,0,0,3.71,11.29ZM21,11H7a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2ZM3.71,6.29a1,1,0,0,0-.33-.21,1,1,0,0,0-1.09.21,1.15,1.15,0,0,0-.21.33.94.94,0,0,0,0,.76,1.15,1.15,0,0,0,.21.33,1.15,1.15,0,0,0,.33.21,1,1,0,0,0,1.09-.21,1.15,1.15,0,0,0,.21-.33.94.94,0,0,0,0-.76A1.15,1.15,0,0,0,3.71,6.29ZM21,16H7a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Z"></path>
                            </svg> 7</span>
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M20,13.18V11A8,8,0,0,0,4,11v2.18A3,3,0,0,0,2,16v2a3,3,0,0,0,3,3H8a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1H6V11a6,6,0,0,1,12,0v2H16a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1h3a3,3,0,0,0,3-3V16A3,3,0,0,0,20,13.18ZM7,15v4H5a1,1,0,0,1-1-1V16a1,1,0,0,1,1-1Zm13,3a1,1,0,0,1-1,1H17V15h2a1,1,0,0,1,1,1Z"></path>
                            </svg> 4 731</span>
                    </span>
                </div>
                <div class="album__title">
                    <h3><a href="/beat/beat-details/90e093d1-adb5-482f-8cb8-a814c27dc97c">Treasure - Timaya</a></h3>
                    <span><a href="#">Fasanya Pelumi</a></span>
                </div>
            </div>
        </div>


        <div class="col-6 col-sm-4 col-lg-2">
            <div class="album">
                <div class="album__cover ">
                    <img src="https://dnasoundstudio.com/dnasoundfiles/public/beatImages/cpMrW5YdozgqJ0suh3SSCNOU0fyA2k1XjLmiYcsx.jpg" alt="">
                   
                    <span class="main__list main__list--playlist main__list--dashbox">
                        <a data-playlist="" data-title="Joy - Davido" data-artist="Fasanya Pelumi" href="https://dnasoundstudio.com/dnasoundfiles/public/beatFiles/wRq6HVZjDoRtB0riujOfyiuQPxKU8fAq1sSxJv84.mp3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"></path>
                            </svg></a></span>
                    <span class="album__stat">
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M3.71,16.29a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21,1,1,0,0,0-.21.33,1,1,0,0,0,.21,1.09,1.15,1.15,0,0,0,.33.21.94.94,0,0,0,.76,0,1.15,1.15,0,0,0,.33-.21,1,1,0,0,0,.21-1.09A1,1,0,0,0,3.71,16.29ZM7,8H21a1,1,0,0,0,0-2H7A1,1,0,0,0,7,8ZM3.71,11.29a1,1,0,0,0-1.09-.21,1.15,1.15,0,0,0-.33.21,1,1,0,0,0-.21.33.94.94,0,0,0,0,.76,1.15,1.15,0,0,0,.21.33,1.15,1.15,0,0,0,.33.21.94.94,0,0,0,.76,0,1.15,1.15,0,0,0,.33-.21,1.15,1.15,0,0,0,.21-.33.94.94,0,0,0,0-.76A1,1,0,0,0,3.71,11.29ZM21,11H7a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2ZM3.71,6.29a1,1,0,0,0-.33-.21,1,1,0,0,0-1.09.21,1.15,1.15,0,0,0-.21.33.94.94,0,0,0,0,.76,1.15,1.15,0,0,0,.21.33,1.15,1.15,0,0,0,.33.21,1,1,0,0,0,1.09-.21,1.15,1.15,0,0,0,.21-.33.94.94,0,0,0,0-.76A1.15,1.15,0,0,0,3.71,6.29ZM21,16H7a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Z"></path>
                            </svg> 7</span>
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M20,13.18V11A8,8,0,0,0,4,11v2.18A3,3,0,0,0,2,16v2a3,3,0,0,0,3,3H8a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1H6V11a6,6,0,0,1,12,0v2H16a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1h3a3,3,0,0,0,3-3V16A3,3,0,0,0,20,13.18ZM7,15v4H5a1,1,0,0,1-1-1V16a1,1,0,0,1,1-1Zm13,3a1,1,0,0,1-1,1H17V15h2a1,1,0,0,1,1,1Z"></path>
                            </svg> 4 731</span>
                    </span>
                </div>
                <div class="album__title">
                    <h3><a href="/beat/beat-details/2f060a16-5bd1-4566-9984-1e6ca71639e5">Joy - Davido</a></h3>
                    <span><a href="#">Fasanya Pelumi</a></span>
                </div>
            </div>
        </div>


        <div class="col-6 col-sm-4 col-lg-2">
            <div class="album">
                <div class="album__cover ">
                    <img src="https://dnasoundstudio.com/dnasoundfiles/public/beatImages/hnIAk3WvHkaOYkoUEZL5WW0riXFZGEaOVasuUYUu.jpg" alt="">
                   
                    <span class="main__list main__list--playlist main__list--dashbox">
                        <a data-playlist="" data-title="MMS - Asake" data-artist="Fasanya Pelumi" href="https://dnasoundstudio.com/dnasoundfiles/public/beatFiles/SezNR3vzigzaY3Sz20pnHhySLjCGZUz0a9h1MOkg.mp3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"></path>
                            </svg></a></span>
                    <span class="album__stat">
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M3.71,16.29a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21,1,1,0,0,0-.21.33,1,1,0,0,0,.21,1.09,1.15,1.15,0,0,0,.33.21.94.94,0,0,0,.76,0,1.15,1.15,0,0,0,.33-.21,1,1,0,0,0,.21-1.09A1,1,0,0,0,3.71,16.29ZM7,8H21a1,1,0,0,0,0-2H7A1,1,0,0,0,7,8ZM3.71,11.29a1,1,0,0,0-1.09-.21,1.15,1.15,0,0,0-.33.21,1,1,0,0,0-.21.33.94.94,0,0,0,0,.76,1.15,1.15,0,0,0,.21.33,1.15,1.15,0,0,0,.33.21.94.94,0,0,0,.76,0,1.15,1.15,0,0,0,.33-.21,1.15,1.15,0,0,0,.21-.33.94.94,0,0,0,0-.76A1,1,0,0,0,3.71,11.29ZM21,11H7a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2ZM3.71,6.29a1,1,0,0,0-.33-.21,1,1,0,0,0-1.09.21,1.15,1.15,0,0,0-.21.33.94.94,0,0,0,0,.76,1.15,1.15,0,0,0,.21.33,1.15,1.15,0,0,0,.33.21,1,1,0,0,0,1.09-.21,1.15,1.15,0,0,0,.21-.33.94.94,0,0,0,0-.76A1.15,1.15,0,0,0,3.71,6.29ZM21,16H7a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Z"></path>
                            </svg> 7</span>
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M20,13.18V11A8,8,0,0,0,4,11v2.18A3,3,0,0,0,2,16v2a3,3,0,0,0,3,3H8a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1H6V11a6,6,0,0,1,12,0v2H16a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1h3a3,3,0,0,0,3-3V16A3,3,0,0,0,20,13.18ZM7,15v4H5a1,1,0,0,1-1-1V16a1,1,0,0,1,1-1Zm13,3a1,1,0,0,1-1,1H17V15h2a1,1,0,0,1,1,1Z"></path>
                            </svg> 4 731</span>
                    </span>
                </div>
                <div class="album__title">
                    <h3><a href="/beat/beat-details/e4fb5ee9-ebae-4242-8908-c8bf535ec652">MMS - Asake</a></h3>
                    <span><a href="#">Fasanya Pelumi</a></span>
                </div>
            </div>
        </div>


        <div class="col-6 col-sm-4 col-lg-2">
            <div class="album">
                <div class="album__cover ">
                    <img src="https://dnasoundstudio.com/dnasoundfiles/public/beatImages/9RPx1PNAmW7UpQRgfDeFtXmAOc6B1ptO3XPLXbxl.jpg" alt="">
                   
                    <span class="main__list main__list--playlist main__list--dashbox">
                        <a data-playlist="" data-title="Everyday - Fireboy" data-artist="Fasanya Pelumi" href="https://dnasoundstudio.com/dnasoundfiles/public/beatFiles/n9WPqTMZQ8DKM6QQZ12olKce6XtyU1Y3JTX2P9uQ.mp3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"></path>
                            </svg></a></span>
                    <span class="album__stat">
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M3.71,16.29a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21,1,1,0,0,0-.21.33,1,1,0,0,0,.21,1.09,1.15,1.15,0,0,0,.33.21.94.94,0,0,0,.76,0,1.15,1.15,0,0,0,.33-.21,1,1,0,0,0,.21-1.09A1,1,0,0,0,3.71,16.29ZM7,8H21a1,1,0,0,0,0-2H7A1,1,0,0,0,7,8ZM3.71,11.29a1,1,0,0,0-1.09-.21,1.15,1.15,0,0,0-.33.21,1,1,0,0,0-.21.33.94.94,0,0,0,0,.76,1.15,1.15,0,0,0,.21.33,1.15,1.15,0,0,0,.33.21.94.94,0,0,0,.76,0,1.15,1.15,0,0,0,.33-.21,1.15,1.15,0,0,0,.21-.33.94.94,0,0,0,0-.76A1,1,0,0,0,3.71,11.29ZM21,11H7a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2ZM3.71,6.29a1,1,0,0,0-.33-.21,1,1,0,0,0-1.09.21,1.15,1.15,0,0,0-.21.33.94.94,0,0,0,0,.76,1.15,1.15,0,0,0,.21.33,1.15,1.15,0,0,0,.33.21,1,1,0,0,0,1.09-.21,1.15,1.15,0,0,0,.21-.33.94.94,0,0,0,0-.76A1.15,1.15,0,0,0,3.71,6.29ZM21,16H7a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Z"></path>
                            </svg> 7</span>
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M20,13.18V11A8,8,0,0,0,4,11v2.18A3,3,0,0,0,2,16v2a3,3,0,0,0,3,3H8a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1H6V11a6,6,0,0,1,12,0v2H16a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1h3a3,3,0,0,0,3-3V16A3,3,0,0,0,20,13.18ZM7,15v4H5a1,1,0,0,1-1-1V16a1,1,0,0,1,1-1Zm13,3a1,1,0,0,1-1,1H17V15h2a1,1,0,0,1,1,1Z"></path>
                            </svg> 4 731</span>
                    </span>
                </div>
                <div class="album__title">
                    <h3><a href="/beat/beat-details/5e002d21-2a2a-426a-8ffd-4303aac8c688">Everyday - Fireboy</a></h3>
                    <span><a href="#">Fasanya Pelumi</a></span>
                </div>
            </div>
        </div>


        <div class="col-6 col-sm-4 col-lg-2">
            <div class="album">
                <div class="album__cover ">
                    <img src="https://dnasoundstudio.com/dnasoundfiles/public/beatImages/yohuPfxUWNc0uihBHEBt0awiGxgbwRp0QCKs3Q6h.jpg" alt="">
                   
                    <span class="main__list main__list--playlist main__list--dashbox">
                        <a data-playlist="" data-title="Everyday - Dbanj" data-artist="Fasanya Pelumi" href="https://dnasoundstudio.com/dnasoundfiles/public/beatFiles/lTkXZ2hrJo5zQW1jKbtlbG70HM7qvxkWNa7w1wPX.mp3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"></path>
                            </svg></a></span>
                    <span class="album__stat">
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M3.71,16.29a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21,1,1,0,0,0-.21.33,1,1,0,0,0,.21,1.09,1.15,1.15,0,0,0,.33.21.94.94,0,0,0,.76,0,1.15,1.15,0,0,0,.33-.21,1,1,0,0,0,.21-1.09A1,1,0,0,0,3.71,16.29ZM7,8H21a1,1,0,0,0,0-2H7A1,1,0,0,0,7,8ZM3.71,11.29a1,1,0,0,0-1.09-.21,1.15,1.15,0,0,0-.33.21,1,1,0,0,0-.21.33.94.94,0,0,0,0,.76,1.15,1.15,0,0,0,.21.33,1.15,1.15,0,0,0,.33.21.94.94,0,0,0,.76,0,1.15,1.15,0,0,0,.33-.21,1.15,1.15,0,0,0,.21-.33.94.94,0,0,0,0-.76A1,1,0,0,0,3.71,11.29ZM21,11H7a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2ZM3.71,6.29a1,1,0,0,0-.33-.21,1,1,0,0,0-1.09.21,1.15,1.15,0,0,0-.21.33.94.94,0,0,0,0,.76,1.15,1.15,0,0,0,.21.33,1.15,1.15,0,0,0,.33.21,1,1,0,0,0,1.09-.21,1.15,1.15,0,0,0,.21-.33.94.94,0,0,0,0-.76A1.15,1.15,0,0,0,3.71,6.29ZM21,16H7a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Z"></path>
                            </svg> 7</span>
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M20,13.18V11A8,8,0,0,0,4,11v2.18A3,3,0,0,0,2,16v2a3,3,0,0,0,3,3H8a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1H6V11a6,6,0,0,1,12,0v2H16a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1h3a3,3,0,0,0,3-3V16A3,3,0,0,0,20,13.18ZM7,15v4H5a1,1,0,0,1-1-1V16a1,1,0,0,1,1-1Zm13,3a1,1,0,0,1-1,1H17V15h2a1,1,0,0,1,1,1Z"></path>
                            </svg> 4 731</span>
                    </span>
                </div>
                <div class="album__title">
                    <h3><a href="/beat/beat-details/b6598dd4-9834-4187-912e-e54612c420dd">Everyday - Dbanj</a></h3>
                    <span><a href="#">Fasanya Pelumi</a></span>
                </div>
            </div>
        </div>




    </section> -->

    <section class="row row--grid m-2 pt-lg-5">
        <!-- title -->
        <div class="col-12">
            <div class="d-flex justify-content-between">
                <h4>Trending Beats</h4>
                <div class='d-flex'>
                    <button class="main__nav main__nav--prev" data-nav="#artists" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z"></path>
                        </svg>
                    </button>
                    <button class="main__nav main__nav--next" data-nav="#artists" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z"></path>
                        </svg>
                    </button>

                </div>
                <div class=''>
                    <a href="/beat/my-beats" style='border-color:#fff' class="btn btn-dark bg-transparent border-1">View all→</a>
                </div>
            </div>
        </div>
        <!-- end title -->

        <div class="col-12">
            <div class="main__carousel-wrap">
                <div class="main__carousel main__carousel--artists owl-carousel owl-loaded owl-drag" id="artists">
                    <div class="owl-stage-outer owl-height">
                        <div class="owl-stage">
                            @foreach($trending as $beat)
                            <div class="owl-item">
                                <div class="album">
                                    <div class="album__cover">
                                        @if($beat->image !== null)
                                        <img src="{{ config('app.env') === 'local' ? asset('beatImages/' . $beat->image) : 'https://dnasoundstudio.com/dnasoundfiles/public/beatImages/' . $beat->image }}"
                                            alt="">
                                        @else
                                        <img src="https://dnasoundstudio.com/producers/assets/images/music-dashboard/feature-album/05.png"
                                            alt="">
                                        @endif
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="row row--grid m-2 pt-lg-5">
        <!-- title -->
        <div class="col-12">
            <div class="d-flex justify-content-between">
                <h4>Most Rated</h4>
                <div class='d-flex'>
                    <button class="main__nav main__nav--prev" data-nav="#mostrated" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z"></path>
                        </svg>
                    </button>
                    <button class="main__nav main__nav--next" data-nav="#mostrated" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z"></path>
                        </svg>
                    </button>

                </div>
                <div class=''>
                    <a href="/beat/my-beats" style='border-color:#fff' class="btn btn-dark bg-transparent border-1">View all→</a>
                </div>
            </div>
        </div>
        <!-- end title -->

        <div class="col-12">
            <div class="main__carousel-wrap">
                <div class="main__carousel main__carousel--artists owl-carousel owl-loaded owl-drag" id="mostrated">
                    <div class="owl-stage-outer owl-height">
                        <div class="owl-stage">
                            @foreach($trending as $beat)
                            <div class="owl-item">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="row row--grid m-2 p-2">
        <div class="col-12 col-md-6 col-xl-6">
            <div class="row row--grid">
                <!-- title -->
                <div class="col-12">
                    <div class="main__title">
                        <h2><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M21.65,2.24a1,1,0,0,0-.8-.23l-13,2A1,1,0,0,0,7,5V15.35A3.45,3.45,0,0,0,5.5,15,3.5,3.5,0,1,0,9,18.5V10.86L20,9.17v4.18A3.45,3.45,0,0,0,18.5,13,3.5,3.5,0,1,0,22,16.5V3A1,1,0,0,0,21.65,2.24ZM5.5,20A1.5,1.5,0,1,1,7,18.5,1.5,1.5,0,0,1,5.5,20Zm13-2A1.5,1.5,0,1,1,20,16.5,1.5,1.5,0,0,1,18.5,18ZM20,7.14,9,8.83v-3L20,4.17Z"></path>
                            </svg><a href="#">Quick Pick</a></h2>
                    </div>
                </div>
                <!-- end title -->

                <div class="col-12">
                    <ul class="main__list">
                        <li class="single-item">

                            <span class="single-item__rate"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M12.71,12.54a1,1,0,0,0-1.42,0l-3,3A1,1,0,0,0,9.71,17L12,14.66,14.29,17a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Zm-3-1.08L12,9.16l2.29,2.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-3-3a1,1,0,0,0-1.42,0l-3,3a1,1,0,0,0,1.42,1.42Z"></path>
                                </svg>1</span>
                            <a data-link="" data-playlist="" data-title="Moving - Omah" data-artist="Fasanya Pelumi" href="https://dnasoundstudio.com/dnasoundfiles/public/beatFiles/Q6dP1hPnIMfo3OX823oaq0ibtJs2aRbxeMqiBpjm.mp3" class="single-item__cover">
                                <img src="https://dnasoundstudio.com/dnasoundfiles/public/beatImages/eVxB2ePDHubSq85uS21zx1GBWhH7tA3Sln9qz2Wd.jpg" alt="">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M16,2a3,3,0,0,0-3,3V19a3,3,0,0,0,6,0V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-2,0V5a1,1,0,0,1,2,0ZM8,2A3,3,0,0,0,5,5V19a3,3,0,0,0,6,0V5A3,3,0,0,0,8,2ZM9,19a1,1,0,0,1-2,0V5A1,1,0,0,1,9,5Z"></path>
                                </svg>
                            </a>
                            <div class="single-item__title">
                                <h4><a href="#">Moving - Omah</a></h4>
                                <span><a href="#">Fasanya Pelumi</a></span>
                            </div>
                            <span class="single-item__time">5:35</span>

                        </li>

                        <li class="single-item">

                            <span class="single-item__rate"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M12.71,12.54a1,1,0,0,0-1.42,0l-3,3A1,1,0,0,0,9.71,17L12,14.66,14.29,17a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Zm-3-1.08L12,9.16l2.29,2.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-3-3a1,1,0,0,0-1.42,0l-3,3a1,1,0,0,0,1.42,1.42Z"></path>
                                </svg>2</span>
                            <a data-link="" data-playlist="" data-title="Everyday - Dbanj" data-artist="Fasanya Pelumi" href="https://dnasoundstudio.com/dnasoundfiles/public/beatFiles/lTkXZ2hrJo5zQW1jKbtlbG70HM7qvxkWNa7w1wPX.mp3" class="single-item__cover">
                                <img src="https://dnasoundstudio.com/dnasoundfiles/public/beatImages/yohuPfxUWNc0uihBHEBt0awiGxgbwRp0QCKs3Q6h.jpg" alt="">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M16,2a3,3,0,0,0-3,3V19a3,3,0,0,0,6,0V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-2,0V5a1,1,0,0,1,2,0ZM8,2A3,3,0,0,0,5,5V19a3,3,0,0,0,6,0V5A3,3,0,0,0,8,2ZM9,19a1,1,0,0,1-2,0V5A1,1,0,0,1,9,5Z"></path>
                                </svg>
                            </a>
                            <div class="single-item__title">
                                <h4><a href="#">Everyday - Dbanj</a></h4>
                                <span><a href="#">Fasanya Pelumi</a></span>
                            </div>
                            <span class="single-item__time">1:45</span>

                        </li>

                        <li class="single-item">

                            <span class="single-item__rate"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M12.71,12.54a1,1,0,0,0-1.42,0l-3,3A1,1,0,0,0,9.71,17L12,14.66,14.29,17a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Zm-3-1.08L12,9.16l2.29,2.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-3-3a1,1,0,0,0-1.42,0l-3,3a1,1,0,0,0,1.42,1.42Z"></path>
                                </svg>3</span>
                            <a data-link="" data-playlist="" data-title="Everyday - Fireboy" data-artist="Fasanya Pelumi" href="https://dnasoundstudio.com/dnasoundfiles/public/beatFiles/n9WPqTMZQ8DKM6QQZ12olKce6XtyU1Y3JTX2P9uQ.mp3" class="single-item__cover">
                                <img src="https://dnasoundstudio.com/dnasoundfiles/public/beatImages/9RPx1PNAmW7UpQRgfDeFtXmAOc6B1ptO3XPLXbxl.jpg" alt="">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M16,2a3,3,0,0,0-3,3V19a3,3,0,0,0,6,0V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-2,0V5a1,1,0,0,1,2,0ZM8,2A3,3,0,0,0,5,5V19a3,3,0,0,0,6,0V5A3,3,0,0,0,8,2ZM9,19a1,1,0,0,1-2,0V5A1,1,0,0,1,9,5Z"></path>
                                </svg>
                            </a>
                            <div class="single-item__title">
                                <h4><a href="#">Everyday - Fireboy</a></h4>
                                <span><a href="#">Fasanya Pelumi</a></span>
                            </div>
                            <span class="single-item__time">2:05</span>

                        </li>

                        <li class="single-item">

                            <span class="single-item__rate"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M12.71,12.54a1,1,0,0,0-1.42,0l-3,3A1,1,0,0,0,9.71,17L12,14.66,14.29,17a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Zm-3-1.08L12,9.16l2.29,2.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-3-3a1,1,0,0,0-1.42,0l-3,3a1,1,0,0,0,1.42,1.42Z"></path>
                                </svg>4</span>
                            <a data-link="" data-playlist="" data-title="Joy - Davido" data-artist="Fasanya Pelumi" href="https://dnasoundstudio.com/dnasoundfiles/public/beatFiles/wRq6HVZjDoRtB0riujOfyiuQPxKU8fAq1sSxJv84.mp3" class="single-item__cover">
                                <img src="https://dnasoundstudio.com/dnasoundfiles/public/beatImages/cpMrW5YdozgqJ0suh3SSCNOU0fyA2k1XjLmiYcsx.jpg" alt="">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M16,2a3,3,0,0,0-3,3V19a3,3,0,0,0,6,0V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-2,0V5a1,1,0,0,1,2,0ZM8,2A3,3,0,0,0,5,5V19a3,3,0,0,0,6,0V5A3,3,0,0,0,8,2ZM9,19a1,1,0,0,1-2,0V5A1,1,0,0,1,9,5Z"></path>
                                </svg>
                            </a>
                            <div class="single-item__title">
                                <h4><a href="#">Joy - Davido</a></h4>
                                <span><a href="#">Fasanya Pelumi</a></span>
                            </div>
                            <span class="single-item__time">3:35</span>

                        </li>

                        <li class="single-item">

                            <span class="single-item__rate"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M12.71,12.54a1,1,0,0,0-1.42,0l-3,3A1,1,0,0,0,9.71,17L12,14.66,14.29,17a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Zm-3-1.08L12,9.16l2.29,2.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-3-3a1,1,0,0,0-1.42,0l-3,3a1,1,0,0,0,1.42,1.42Z"></path>
                                </svg>5</span>
                            <a data-link="" data-playlist="" data-title="MMS - Asake" data-artist="Fasanya Pelumi" href="https://dnasoundstudio.com/dnasoundfiles/public/beatFiles/SezNR3vzigzaY3Sz20pnHhySLjCGZUz0a9h1MOkg.mp3" class="single-item__cover">
                                <img src="https://dnasoundstudio.com/dnasoundfiles/public/beatImages/hnIAk3WvHkaOYkoUEZL5WW0riXFZGEaOVasuUYUu.jpg" alt="">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M16,2a3,3,0,0,0-3,3V19a3,3,0,0,0,6,0V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-2,0V5a1,1,0,0,1,2,0ZM8,2A3,3,0,0,0,5,5V19a3,3,0,0,0,6,0V5A3,3,0,0,0,8,2ZM9,19a1,1,0,0,1-2,0V5A1,1,0,0,1,9,5Z"></path>
                                </svg>
                            </a>
                            <div class="single-item__title">
                                <h4><a href="#">MMS - Asake</a></h4>
                                <span><a href="#">Fasanya Pelumi</a></span>
                            </div>
                            <span class="single-item__time">2:35</span>

                        </li>



                    </ul>
                </div>

            </div>
        </div>

        <div class="col-12 col-md-6 col-xl-6">
            <div class="row row--grid">
                <!-- title -->
                <div class="col-12">
                    <div class="main__title">
                        <br>
                    </div>
                </div>
                <!-- end title -->

                <div class="col-12">
                    <ul class="main__list">
                        <li class="single-item">


                            <a data-link="" data-playlist="" data-title="Anikanda - Zino" data-artist="Fasanya Pelumi" href="https://dnasoundstudio.com/dnasoundfiles/public/beatFiles/ib1eHyjx4v1zYoyikNhMhHxgFgyxwiCwW0kT9xUj.mp3" class="single-item__cover">
                                <img src="https://dnasoundstudio.com/dnasoundfiles/public/beatImages/N7rA0ZeC69fvetAccnkryRB9Da8Qyg7IS2tuZHio.jpg" alt="">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M16,2a3,3,0,0,0-3,3V19a3,3,0,0,0,6,0V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-2,0V5a1,1,0,0,1,2,0ZM8,2A3,3,0,0,0,5,5V19a3,3,0,0,0,6,0V5A3,3,0,0,0,8,2ZM9,19a1,1,0,0,1-2,0V5A1,1,0,0,1,9,5Z"></path>
                                </svg>
                            </a>
                            <div class="single-item__title">
                                <h4><a href="#">Anikanda - Zino</a></h4>
                                <span><a href="#">Fasanya Pelumi</a></span>
                            </div>
                            <span class="single-item__time">2:35</span>

                        </li>
                        <li class="single-item">


                            <a data-link="" data-playlist="" data-title="Moving - Omah" data-artist="Fasanya Pelumi" href="https://dnasoundstudio.com/dnasoundfiles/public/beatFiles/Q6dP1hPnIMfo3OX823oaq0ibtJs2aRbxeMqiBpjm.mp3" class="single-item__cover">
                                <img src="https://dnasoundstudio.com/dnasoundfiles/public/beatImages/eVxB2ePDHubSq85uS21zx1GBWhH7tA3Sln9qz2Wd.jpg" alt="">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M16,2a3,3,0,0,0-3,3V19a3,3,0,0,0,6,0V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-2,0V5a1,1,0,0,1,2,0ZM8,2A3,3,0,0,0,5,5V19a3,3,0,0,0,6,0V5A3,3,0,0,0,8,2ZM9,19a1,1,0,0,1-2,0V5A1,1,0,0,1,9,5Z"></path>
                                </svg>
                            </a>
                            <div class="single-item__title">
                                <h4><a href="#">Moving - Omah</a></h4>
                                <span><a href="#">Fasanya Pelumi</a></span>
                            </div>
                            <span class="single-item__time">1:35</span>

                        </li>
                        <li class="single-item">


                            <a data-link="" data-playlist="" data-title="Treasure - Timaya" data-artist="Fasanya Pelumi" href="https://dnasoundstudio.com/dnasoundfiles/public/beatFiles/rqX2tyCXRJaXqE6OgU8MYQqjU2xtk1xfXwZChqdL.mp3" class="single-item__cover">
                                <img src="https://dnasoundstudio.com/dnasoundfiles/public/beatImages/xqiMkNYANFPKcNCIM0IYYCiQrSOWk46G7SJuMe5O.jpg" alt="">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M16,2a3,3,0,0,0-3,3V19a3,3,0,0,0,6,0V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-2,0V5a1,1,0,0,1,2,0ZM8,2A3,3,0,0,0,5,5V19a3,3,0,0,0,6,0V5A3,3,0,0,0,8,2ZM9,19a1,1,0,0,1-2,0V5A1,1,0,0,1,9,5Z"></path>
                                </svg>
                            </a>
                            <div class="single-item__title">
                                <h4><a href="#">Treasure - Timaya</a></h4>
                                <span><a href="#">Fasanya Pelumi</a></span>
                            </div>
                            <span class="single-item__time">5:35</span>

                        </li>
                        <li class="single-item">


                            <a data-link="" data-playlist="" data-title="Joy - Davido" data-artist="Fasanya Pelumi" href="https://dnasoundstudio.com/dnasoundfiles/public/beatFiles/wRq6HVZjDoRtB0riujOfyiuQPxKU8fAq1sSxJv84.mp3" class="single-item__cover">
                                <img src="https://dnasoundstudio.com/dnasoundfiles/public/beatImages/cpMrW5YdozgqJ0suh3SSCNOU0fyA2k1XjLmiYcsx.jpg" alt="">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M16,2a3,3,0,0,0-3,3V19a3,3,0,0,0,6,0V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-2,0V5a1,1,0,0,1,2,0ZM8,2A3,3,0,0,0,5,5V19a3,3,0,0,0,6,0V5A3,3,0,0,0,8,2ZM9,19a1,1,0,0,1-2,0V5A1,1,0,0,1,9,5Z"></path>
                                </svg>
                            </a>
                            <div class="single-item__title">
                                <h4><a href="#">Joy - Davido</a></h4>
                                <span><a href="#">Fasanya Pelumi</a></span>
                            </div>
                            <span class="single-item__time">2:05</span>

                        </li>
                        <li class="single-item">


                            <a data-link="" data-playlist="" data-title="MMS - Asake" data-artist="Fasanya Pelumi" href="https://dnasoundstudio.com/dnasoundfiles/public/beatFiles/SezNR3vzigzaY3Sz20pnHhySLjCGZUz0a9h1MOkg.mp3" class="single-item__cover">
                                <img src="https://dnasoundstudio.com/dnasoundfiles/public/beatImages/hnIAk3WvHkaOYkoUEZL5WW0riXFZGEaOVasuUYUu.jpg" alt="">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M16,2a3,3,0,0,0-3,3V19a3,3,0,0,0,6,0V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-2,0V5a1,1,0,0,1,2,0ZM8,2A3,3,0,0,0,5,5V19a3,3,0,0,0,6,0V5A3,3,0,0,0,8,2ZM9,19a1,1,0,0,1-2,0V5A1,1,0,0,1,9,5Z"></path>
                                </svg>
                            </a>
                            <div class="single-item__title">
                                <h4><a href="#">MMS - Asake</a></h4>
                                <span><a href="#">Fasanya Pelumi</a></span>
                            </div>
                            <span class="single-item__time">2:35</span>

                        </li>
                    </ul>
                </div>

            </div>
        </div>

    </section>

    <section class="row row--grid m-2 pt-lg-5">
        <!-- title -->
        <div class="col-12">
            <div class="d-flex justify-content-between">
                <h4>Popular Beats</h4>
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
                <div class=''>
                    <a href="/beat/my-beats" style='border-color:#fff' class="btn btn-dark bg-transparent border-1">View all→</a>
                </div>
            </div>
        </div>
        <!-- end title -->

        <div class="col-12">
            <div class="main__carousel-wrap">
                <div class="main__carousel main__carousel--artists owl-carousel owl-loaded owl-drag" id="popular">
                    <div class="owl-stage-outer owl-height">
                        <div class="owl-stage">
                            @foreach($trending as $beat)
                            <div class="owl-item">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    
</main>
@endsection

@section('script')
@endsection
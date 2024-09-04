@extends('producer.master')

@section('header')

@endsection

@section('main')
<main class="main">
    <div class="container-fluid">
        <div class="row row--grid">
            <!-- breadcrumb -->
            <div class="col-12">
                <ul class="breadcrumb">
                    <li class="breadcrumb__item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb__item breadcrumb__item--active">Profile</li>
                </ul>
            </div>
            <!-- end breadcrumb -->

            <!-- title -->
            <div class="col-12">
                <div class="main__title main__title--page">
                    <h1>Profile</h1>
                </div>
            </div>
            <!-- end title -->
        </div>

        <div class="row row--grid">
            <div class="col-12">
                <div class="profile">
                    <div class="profile__user">
                        <div class="profile__avatar">
                            @if($user->logo !== null)
                            <img src="{{ config('app.env') === 'local' ? asset('producerImage/' . $user->logo) : 'https://dnasoundstudio.com/dnasoundfiles/public/producerImage/' . $user->logo }}"
                                alt="">
                            @else
                            <img src="https://dnasoundstudio.com/producers/assets/images/music-dashboard/feature-album/05.png"
                                alt="">
                            @endif

                        </div>
                        <div class="profile__meta">
                            <h3>{{$user->name}}</h3>
                            <span>Username : {{ str_replace(' ', '', $user->name) }} </span>

                        </div>
                    </div>

                    <!-- tabs nav -->
                    <ul class="nav nav-tabs profile__tabs" id="profile__tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Overview</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Transactions</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Pricing</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">Profile</a>
                        </li>
                    </ul>
                    <!-- end tabs nav -->

                    <a onclick="return confirm('Are you sure you want to logout');" href='/logout' class="profile__logout" type="button">
                        <span>Sign out</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M4,12a1,1,0,0,0,1,1h7.59l-2.3,2.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l4-4a1,1,0,0,0,.21-.33,1,1,0,0,0,0-.76,1,1,0,0,0-.21-.33l-4-4a1,1,0,1,0-1.42,1.42L12.59,11H5A1,1,0,0,0,4,12ZM17,2H7A3,3,0,0,0,4,5V8A1,1,0,0,0,6,8V5A1,1,0,0,1,7,4H17a1,1,0,0,1,1,1V19a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V16a1,1,0,0,0-2,0v3a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V5A3,3,0,0,0,17,2Z" />
                        </svg>
                    </a>
                </div>

                <!-- content tabs -->
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab-1" role="tabpanel">
                        <div class="row row--grid">
                            <div class="col-12 col-lg-6 col-xl-3">
                                <div class="stats">
                                    <span>My balance <a href="#modal-topup" class="open-modal">top up</a></span>
                                    <p><b>$0</b></p>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M6,11a1,1,0,1,0,1,1A1,1,0,0,0,6,11Zm12,0a1,1,0,1,0,1,1A1,1,0,0,0,18,11Zm2-6H4A3,3,0,0,0,1,8v8a3,3,0,0,0,3,3H20a3,3,0,0,0,3-3V8A3,3,0,0,0,20,5Zm1,11a1,1,0,0,1-1,1H4a1,1,0,0,1-1-1V8A1,1,0,0,1,4,7H20a1,1,0,0,1,1,1ZM12,9a3,3,0,1,0,3,3A3,3,0,0,0,12,9Zm0,4a1,1,0,1,1,1-1A1,1,0,0,1,12,13Z" />
                                    </svg>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6 col-xl-3">
                                <div class="stats">
                                    <span>Freemium plan</span>
                                    <p><b>$0.00</b>/month</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M9,10a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V11A1,1,0,0,0,9,10Zm12,1a1,1,0,0,0,1-1V6a1,1,0,0,0-1-1H3A1,1,0,0,0,2,6v4a1,1,0,0,0,1,1,1,1,0,0,1,0,2,1,1,0,0,0-1,1v4a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1,1,1,0,0,1,0-2ZM20,9.18a3,3,0,0,0,0,5.64V17H10a1,1,0,0,0-2,0H4V14.82A3,3,0,0,0,4,9.18V7H8a1,1,0,0,0,2,0H20Z" />
                                    </svg>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6 col-xl-3">
                                <div class="stats">
                                    <span>Available Storage</span>
                                    <p><b>{{$remainingStorageGB}}GB</b></p>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M20,13.18V11A8,8,0,0,0,4,11v2.18A3,3,0,0,0,2,16v2a3,3,0,0,0,3,3H8a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1H6V11a6,6,0,0,1,12,0v2H16a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1h3a3,3,0,0,0,3-3V16A3,3,0,0,0,20,13.18ZM7,15v4H5a1,1,0,0,1-1-1V16a1,1,0,0,1,1-1Zm13,3a1,1,0,0,1-1,1H17V15h2a1,1,0,0,1,1,1Z" />
                                    </svg>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6 col-xl-3">
                                <div class="stats">
                                    <span>Promo code</span>

                                    <form action="#" class="stats__form">
                                        <input type="text" placeholder="__-__-__-__">
                                        <button type="button">send</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="row row--grid">

                            <!-- dashbox -->
                            <div class="col-12 col-lg-12">
                                <div class="dashbox">
                                    <div class="dashbox__title">
                                        <h3><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M21.65,2.24a1,1,0,0,0-.8-.23l-13,2A1,1,0,0,0,7,5V15.35A3.45,3.45,0,0,0,5.5,15,3.5,3.5,0,1,0,9,18.5V10.86L20,9.17v4.18A3.45,3.45,0,0,0,18.5,13,3.5,3.5,0,1,0,22,16.5V3A1,1,0,0,0,21.65,2.24ZM5.5,20A1.5,1.5,0,1,1,7,18.5,1.5,1.5,0,0,1,5.5,20Zm13-2A1.5,1.5,0,1,1,20,16.5,1.5,1.5,0,0,1,18.5,18ZM20,7.14,9,8.83v-3L20,4.17Z" />
                                            </svg> My Beats</h3>

                                        <div class="dashbox__wrap">
                                            <a class="dashbox__refresh" href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path d="M12,2A10,10,0,0,0,5.12,4.77V3a1,1,0,0,0-2,0V7.5a1,1,0,0,0,1,1H8.62a1,1,0,0,0,0-2H6.22A8,8,0,1,1,4,12a1,1,0,0,0-2,0A10,10,0,1,0,12,2Zm0,6a1,1,0,0,0-1,1v3a1,1,0,0,0,1,1h2a1,1,0,0,0,0-2H13V9A1,1,0,0,0,12,8Z" />
                                                </svg></a>
                                            <a class="dashbox__more" href="/beat/my-beats">View All</a>
                                        </div>
                                    </div>

                                    <div class="dashbox__list-wrap">
                                        <ul class="main__list main__list--dashbox">
                                            @foreach($beats as $beat)
                                            <li class="single-item">
                                                <a data-link data-title="{{ $beat->title }}" href="https://dmitryvolkov.me/demo/blast2.0/audio/12071151_epic-cinematic-trailer_by_audiopizza_preview.mp3" class="single-item__cover">
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
                                                    <span><a href="#">{{$beat->author->name}}</a></span>
                                                </div>
                                                <a href="#" class="single-item__add">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                        <path d="M19,11H13V5a1,1,0,0,0-2,0v6H5a1,1,0,0,0,0,2h6v6a1,1,0,0,0,2,0V13h6a1,1,0,0,0,0-2Z" />
                                                    </svg>
                                                </a>
                                                <a href="#" class="single-item__export">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                        <path d="M21,14a1,1,0,0,0-1,1v4a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V15a1,1,0,0,0-2,0v4a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V15A1,1,0,0,0,21,14Zm-9.71,1.71a1,1,0,0,0,.33.21.94.94,0,0,0,.76,0,1,1,0,0,0,.33-.21l4-4a1,1,0,0,0-1.42-1.42L13,12.59V3a1,1,0,0,0-2,0v9.59l-2.29-2.3a1,1,0,1,0-1.42,1.42Z" />
                                                    </svg>
                                                </a>
                                                <span class="single-item__time">2:58</span>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end dashbox -->
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab-2" role="tabpanel">
                        <div class="row row--grid">
                            <div class="col-12">
                                <div class="dashbox">
                                    <div class="dashbox__title">
                                        <h3><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M19.05566,2h-14a3.00328,3.00328,0,0,0-3,3V19a3.00328,3.00328,0,0,0,3,3h14a3.00328,3.00328,0,0,0,3-3V5A3.00328,3.00328,0,0,0,19.05566,2Zm-14,2h14a1.001,1.001,0,0,1,1,1v8H17.59082a1.99687,1.99687,0,0,0-1.66406.89062L14.52051,16H9.59082L8.18457,13.89062A1.99687,1.99687,0,0,0,6.52051,13H4.05566V5A1.001,1.001,0,0,1,5.05566,4Zm14,16h-14a1.001,1.001,0,0,1-1-1V15H6.52051l1.40625,2.10938A1.99687,1.99687,0,0,0,9.59082,18h4.92969a1.99687,1.99687,0,0,0,1.66406-.89062L17.59082,15h2.46484v4A1.001,1.001,0,0,1,19.05566,20Z" />
                                            </svg> Transactions <span>0</span></h3>

                                        <div class="dashbox__wrap">
                                            <a class="dashbox__refresh" href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path d="M12,2A10,10,0,0,0,5.12,4.77V3a1,1,0,0,0-2,0V7.5a1,1,0,0,0,1,1H8.62a1,1,0,0,0,0-2H6.22A8,8,0,1,1,4,12a1,1,0,0,0-2,0A10,10,0,1,0,12,2Zm0,6a1,1,0,0,0-1,1v3a1,1,0,0,0,1,1h2a1,1,0,0,0,0-2H13V9A1,1,0,0,0,12,8Z" />
                                                </svg></a>
                                        </div>
                                    </div>

                                    <div class="dashbox__table-wrap">
                                        <div class="dashbox__table-scroll">
                                            <table class="main__table">
                                                <thead>
                                                    <tr>
                                                        <th>№</th>
                                                        <th><a href="#">Beat <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                                    <path d="M9.71,10.21,12,7.91l2.29,2.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-3-3a1,1,0,0,0-1.42,0l-3,3a1,1,0,0,0,1.42,1.42Zm4.58,4.58L12,17.09l-2.29-2.3a1,1,0,0,0-1.42,1.42l3,3a1,1,0,0,0,1.42,0l3-3a1,1,0,0,0-1.42-1.42Z" />
                                                                </svg></a></th>
                                                        <th><a href="#" class="active">Title <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                                    <path d="M17,13.41,12.71,9.17a1,1,0,0,0-1.42,0L7.05,13.41a1,1,0,0,0,0,1.42,1,1,0,0,0,1.41,0L12,11.29l3.54,3.54a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29A1,1,0,0,0,17,13.41Z" />
                                                                </svg></a></th>
                                                        <th><a href="#" class="active">Date <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                                    <path d="M17,9.17a1,1,0,0,0-1.41,0L12,12.71,8.46,9.17a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42l4.24,4.24a1,1,0,0,0,1.42,0L17,10.59A1,1,0,0,0,17,9.17Z" />
                                                                </svg></a></th>
                                                        
                                                        <th><a href="#">Total <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                                    <path d="M9.71,10.21,12,7.91l2.29,2.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-3-3a1,1,0,0,0-1.42,0l-3,3a1,1,0,0,0,1.42,1.42Zm4.58,4.58L12,17.09l-2.29-2.3a1,1,0,0,0-1.42,1.42l3,3a1,1,0,0,0,1.42,0l3-3a1,1,0,0,0-1.42-1.42Z" />
                                                                </svg></a></th>
                                                        <th><a href="#">Status <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                                    <path d="M9.71,10.21,12,7.91l2.29,2.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-3-3a1,1,0,0,0-1.42,0l-3,3a1,1,0,0,0,1.42,1.42Zm4.58,4.58L12,17.09l-2.29-2.3a1,1,0,0,0-1.42,1.42l3,3a1,1,0,0,0,1.42,0l3-3a1,1,0,0,0-1.42-1.42Z" />
                                                                </svg></a></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- <tr>
                                                        <td>
                                                            <div class="main__table-text main__table-text--number"><a href="#modal-info" class="open-modal">631</a></div>
                                                        </td>
                                                        <td>
                                                            <div class="main__table-img">
                                                                <img src="img/store/item3.jpg" alt="">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="main__table-text"><a href="#">Music Blank</a></div>
                                                        </td>
                                                        <td>
                                                            <div class="main__table-text">Aug 21, 2021</div>
                                                        </td>
                                                        
                                                        <td>
                                                            <div class="main__table-text main__table-text--price">$67.83</div>
                                                        </td>
                                                        <td>
                                                            <div class="main__table-text main__table-text--green"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                                    <path d="M14.72,8.79l-4.29,4.3L8.78,11.44a1,1,0,1,0-1.41,1.41l2.35,2.36a1,1,0,0,0,.71.29,1,1,0,0,0,.7-.29l5-5a1,1,0,0,0,0-1.42A1,1,0,0,0,14.72,8.79ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z" />
                                                                </svg> Delivered</div>
                                                        </td>
                                                    </tr> -->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab-3" role="tabpanel">
                        <div class="row row--grid">
                            <div class="col-12 col-md-6 col-lg-6 order-md-2 order-lg-1">
                                <div class="plan plan--green">
                                    <h3 class="plan__title">Freemium</h3>
                                    <span class="plan__price">$0<span>/month</span></span>
                                    <ul class="plan__list">
                                        <li class="green"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M18.71,7.21a1,1,0,0,0-1.42,0L9.84,14.67,6.71,11.53A1,1,0,1,0,5.29,13l3.84,3.84a1,1,0,0,0,1.42,0l8.16-8.16A1,1,0,0,0,18.71,7.21Z" />
                                            </svg> 100MB Free Storage</li>
                                        <li class="green"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M18.71,7.21a1,1,0,0,0-1.42,0L9.84,14.67,6.71,11.53A1,1,0,1,0,5.29,13l3.84,3.84a1,1,0,0,0,1.42,0l8.16-8.16A1,1,0,0,0,18.71,7.21Z" />
                                            </svg> One Time Legal Service</li>
                                        <li class="red"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M13.41,12l4.3-4.29a1,1,0,1,0-1.42-1.42L12,10.59,7.71,6.29A1,1,0,0,0,6.29,7.71L10.59,12l-4.3,4.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l4.29,4.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z" />
                                            </svg> Premium Advertisement</li>
                                        <li class="red"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M13.41,12l4.3-4.29a1,1,0,1,0-1.42-1.42L12,10.59,7.71,6.29A1,1,0,0,0,6.29,7.71L10.59,12l-4.3,4.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l4.29,4.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z" />
                                            </svg> Weekly promotion</li>
                                    </ul>
                                    <button class="plan__btn" type="button">Current plan</button>
                                </div>
                            </div>


                            <div class="col-12 col-md-6 col-lg-6 order-md-3 order-lg-3">
                                <div class="plan plan--purple">
                                    <h3 class="plan__title">Premium</h3>
                                    <span class="plan__price">$39.99<span>/month</span></span>
                                    <ul class="plan__list">
                                        <li class="green"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M18.71,7.21a1,1,0,0,0-1.42,0L9.84,14.67,6.71,11.53A1,1,0,1,0,5.29,13l3.84,3.84a1,1,0,0,0,1.42,0l8.16-8.16A1,1,0,0,0,18.71,7.21Z" />
                                            </svg> Unlimited Storage</li>
                                        <li class="green"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M18.71,7.21a1,1,0,0,0-1.42,0L9.84,14.67,6.71,11.53A1,1,0,1,0,5.29,13l3.84,3.84a1,1,0,0,0,1.42,0l8.16-8.16A1,1,0,0,0,18.71,7.21Z" />
                                            </svg> Free Legal Service</li>
                                        <li class="green"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M18.71,7.21a1,1,0,0,0-1.42,0L9.84,14.67,6.71,11.53A1,1,0,1,0,5.29,13l3.84,3.84a1,1,0,0,0,1.42,0l8.16-8.16A1,1,0,0,0,18.71,7.21Z" />
                                            </svg> Premium Advertisement</li>
                                        <li class="green"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M18.71,7.21a1,1,0,0,0-1.42,0L9.84,14.67,6.71,11.53A1,1,0,1,0,5.29,13l3.84,3.84a1,1,0,0,0,1.42,0l8.16-8.16A1,1,0,0,0,18.71,7.21Z" />
                                            </svg> Weekly Promotion</li>
                                    </ul>
                                    <button class="plan__btn" type="button">Select plan</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab-4" role="tabpanel">
                        <div class="row row--grid">
                            <!-- details form -->
                            <div class="col-12 col-lg-6">
                                <form method='post' action='/update-profile' enctype="multipart/form-data" class="sign__form sign__form--profile">@csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <h4 class="sign__title">Profile details</h4>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                            <div class="sign__group">
                                                <label class="sign__label" for="username">Name</label>
                                                <input id="name" type="text" name="name" class="sign__input" value="{{$user->name}}">
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                            <div class="sign__group">
                                                <label class="sign__label" for="email">Phone Number</label>
                                                <input id="phone" type="number" name="phone" class="sign__input" value="{{$user->phone}}">
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                            <div class="sign__group">
                                                <label class="sign__label" for="firstname">Image</label>
                                                <input id="image" type="file" name="image" class="sign__input">
                                            </div>
                                        </div>



                                        <div class="col-12">
                                            <button class="sign__btn" type="submit">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- end details form -->

                            <!-- password form -->
                            <div class="col-12 col-lg-6">
                                <form action="#" class="sign__form sign__form--profile">
                                    <div class="row">
                                        <div class="col-12">
                                            <h4 class="sign__title">Change password</h4>
                                        </div>

                                        <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                            <div class="sign__group">
                                                <label class="sign__label" for="oldpass">Old password</label>
                                                <input id="oldpass" type="password" name="oldpass" class="sign__input">
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                            <div class="sign__group">
                                                <label class="sign__label" for="newpass">New password</label>
                                                <input id="newpass" type="password" name="newpass" class="sign__input">
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                            <div class="sign__group">
                                                <label class="sign__label" for="confirmpass">Confirm new password</label>
                                                <input id="confirmpass" type="password" name="confirmpass" class="sign__input">
                                            </div>
                                        </div>


                                        <div class="col-12">
                                            <button class="sign__btn" type="button">Change</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- end password form -->
                        </div>
                    </div>
                </div>
                <!-- end content tabs -->
            </div>
        </div>
    </div>
</main>
@endsection

@section('script')

@endsection
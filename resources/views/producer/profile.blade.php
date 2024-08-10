@extends('producer.master')

@section('header')
<style>
    body {
        background-color: #f8f9fa;
    }

    .form-container {
        /* max-width: 600px; */
        margin: 50px auto;
        padding: 20px;
        background: #ffffff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-title {
        margin-bottom: 30px;
    }

    .form-control {
        margin-bottom: 15px;
    }

    .submit-btn {
        background-color: #007bff;
        border-color: #007bff;
    }

    .submit-btn:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }
</style>

@endsection

@section('content')
<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card car-transparent">
                    <div class="card-body p-0">
                        <div class="profile-image position-relative">
                            @if($user->logo !== null)
                            <img src="{{ config('app.env') === 'local' ? asset('producerImage/' . $user->logo) : 'https://dnasoundstudio.com/dnasoundfiles/public/producerImage/' . $user->logo }}"
                                class="img-fluid rounded w-100" alt="">
                            @else
                            <img src="https://dnasoundstudio.com/producers/assets/images/music-dashboard/feature-album/05.png"
                                class="img-fluid rounded w-100" alt="">
                            @endif

                        </div>
                        <div class="profile-overly">
                            <h3>{{$user->name}}</h3>
                            <span>{{$user->email}}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-block card-stretch card-height">
                    <div class="card-header">
                        <div class="header-title">
                            <h4 class="card-title">User Information</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-inline p-0 m-0 iq-contact-rest">

                            <li class="mb-3 d-flex">
                                <span><i class="fas fa-phone-volume mr-3 font-size-20"></i></span>
                                <p class="mb-0 font-size-16 line-height">{{$user->phone}}</p>
                            </li>
                            <li class="mb-3 d-flex">
                                <span><i class="fas fa-envelope-open mr-3 font-size-20"></i></span>
                                <p class="mb-0 font-size-16 line-height">{{$user->email}}</p>
                            </li>
                            <li class="mb-3 d-flex">
                                <a href="javascript:void(0);" class="d-flex">
                                    <i class="fas fa-link  mr-3 font-size-20"></i>
                                    <p class="mb-0 font-size-16 line-height">https://dnasoundstudio.com/{{$user->name}}</p>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body text-center">
                        <svg width="36" height="48" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="10" y="20" width="8" height="24" rx="2" fill="#4788ff" />
                            <rect x="26" y="10" width="8" height="44" rx="2" fill="#4788ff" />
                            <rect x="42" y="16" width="8" height="32" rx="2" fill="#4788ff" />
                        </svg>
                        <h2 class="mb-2 mt-3 text-primary">Producer</h2>
                        <h4>User Type</h4>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body text-center">
                        <svg width="60" height="48" viewBox="0 0 60 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M30 2C15.64 2 4 13.64 4 28s11.64 26 26 26 26-11.64 26-26S44.36 2 30 2zm0 48C13.64 50 0 36.36 0 20S13.64-6 30-6s30 13.64 30 30S46.36 50 30 50zM24 14h4v16h-4V14zm8 0h4v16h-4V14z" fill="#37e6b0" />
                        </svg>
                        <h2 class="mb-2 mt-3 text-success">Plan : Freemium</h2>
                        <a class='btn btn-primary' href='#'>Upgrade Plan</a>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body text-center">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M36 4H12c-1.104 0-2 .896-2 2v40c0 1.104.896 2 2 2h24c1.104 0 2-.896 2-2V6c0-1.104-.896-2-2-2zM24 6c1.657 0 3 1.343 3 3v4h-6V9c0-1.657 1.343-3 3-3zm-8 3c0-1.657 1.343-3 3-3s3 1.343 3 3v4h-6V9zm-4 3h6v6H12V12zm12 0h6v6h-6v-6zm-6 16h6v6h-6v-6zm-6 0h6v6H12v-6zm18 6v-6h6v6h-6zm-6 0h6v6h-6v-6zm-6 0h6v6h-6v-6zm-6 0h6v6H12v-6z" fill="#fe721c" />
                        </svg>
                        <h2 class="mb-2 mt-3 text-warning">{{ number_format(5 - ($user->used_storage/(1024 * 1024 * 1024)), 2) }}GB</h2>
                        <h4>Available Storage</h4>
                    </div>

                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Update Profile</h4>
                        </div>
                    </div>
                    <div class="card-body">

                        <form method='post' action='/update-profile' enctype="multipart/form-data"> @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" value='{{$user->name}}' name='name' id="name">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="phone" name='phone' value='{{$user->phone}}' class="form-control" id="phone">
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name='logo' class="form-control form-control-lg" id="image">
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection

@section('script')
<script>

</script>

@endsection
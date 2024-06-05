@extends('dashboard.master')
@section('header')
@endsection

@section('content')
<section class="section dashboard">
    <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
            <div class="row">

                <!-- Sales Card -->
                {{-- <div class="col-xxl-4 col-md-6">
                    <div class="card info-card sales-card">

                   

                        <div class="card-body" style='background:#cce5ff;border-left-color: #004085;border-left-width:20px'>
                            <h5 class="card-title">Beats</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-house"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ number_format(40) }}</h6>
                                    <a href='#' class="text-primary small pt-1 fw-bold">Add Beat→</a><br>
                                    <a href='#' class="text-primary small pt-1 fw-bold">View Beats→</a>

                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Sales Card -->

                <!-- Revenue Card -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card revenue-card">


                        <div class="card-body" style='background:#d4edda;border-left-color: #155724;border-left-width:20px'>
                            <h5 class="card-title">Clients</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-person"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ number_format(50) }}</h6>
                                    <a href='#' class="text-success small pt-1 fw-bold">Total
                                        Clients→</a><br>
                                    <a href='/viewclients' class="text-success small pt-1 fw-bold">Total
                                        Sales→</a>

                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Revenue Card --> --}}


                <!-- Recent Sales -->
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">

                  

                        <div class="card-body">
                            <h5 class="card-title">Producer's Dashboard</h5>
                            <div class='col-md-12'>
                                <img src='assets/images/ds3.jpg' style='border-radius:10px; width: 100%; height: auto;'/>
                            </div>
                            

                        </div>

                    </div>
                </div><!-- End Recent Sales -->

            </div>
        </div><!-- End Left side columns -->

     

    </div>
</section>
@endsection

@section('script')
@endsection
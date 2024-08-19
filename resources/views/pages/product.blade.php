@extends('layouts.app')

@section('main')
    <!-- service area start -->



    <div class="breadcrumb-area bg-cover" style="background-image: url('./assets/img/bg/3.png');">
        <div class="container">
            <div class="breadcrumb-inner">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2 class="page-title">Services</h2>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <ul class="page-list">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Service</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="service-area bg-relative pd-top-120 pd-bottom-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner style-3">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/service-icon/11.png') }}" alt="img">
                        </div>
                        <div class="details">
                            <h5><a href="service-details.html">iComply</a></h5>
                            <p>You can access SaaS applications through a web browser or mobile app, as long as you have an
                                internet connection</p>
                            <a class="read-more-text"
                                href="{{ url('https://novajii.com/ords/f?p=bulksms:register') }}">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner style-3">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/service-icon/token.png') }}" alt="img">
                        </div>
                        <div class="details">
                            <h5><a href="service-details.html">Soft Tokenn</a></h5>
                            <p>You can access SaaS applications through a web browser or mobile app, as long as you have an
                                internet connection</p>
                            <a class="read-more-text"
                                href="{{ url('https://novajii.com/ords/f?p=bulksms:register') }}">Learn More </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner style-3">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/service-icon/web.png') }}" alt="img">
                        </div>
                        <div class="details">
                            <h5><a href="service-details.html">ERP</a></h5>
                            <p>You can access SaaS applications through a web browser or mobile app, as long as you have an
                                internet connection</p>
                            <a class="read-more-text"
                                href="{{ url('https://novajii.com/ords/f?p=bulksms:register') }}">Learn More </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service area end -->
@endsection

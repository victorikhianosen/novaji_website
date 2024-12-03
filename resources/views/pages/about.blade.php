@extends('layouts.app')

@section('main')
    <!-- page title start -->
    <div class="breadcrumb-area bg-cover" style="background-image: url('{{ asset('assets/img/bg/3.png') }}');">
        <div class="container">
            <div class="breadcrumb-inner">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2 class="page-title">About Us</h2>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <ul class="page-list">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Blog Post</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page title end -->

    <!-- about area start -->
    <div class="about-area pd-top-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-thumb-inner pe-xl-5 me-xl-5">
                        <img class="animate-img-1 top_image_bounce" src="{{ asset('assets/img/about/2.png') }}" alt="img">
                        <img class="animate-img-2 left_image_bounce" src="{{ asset('assets/img/about/3.png') }}" alt="img">
                        <img class="main-img" src="{{ asset('assets/img/about/1.png') }}" alt="img">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-title">
                        <h6 class="sub-title">ABOUT US</h6>
                        <h2 class="title">IT is a critical component of <span>modern</span> businesses</h2>
                        <p class="content mb-4 mb-xl-5">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry Loreaim Ipsum has been the industry's standard dummy
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry Loreaim Ipsum has been the industry's standard dummy
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry Loreaim Ipsum has been the industry's standard dummy
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-about-inner">
                                    <div class="thumb mb-3">
                                        <img src="{{ asset('assets/img/icon/2.png') }}" alt="img">
                                    </div>
                                    <div class="details">
                                        <h5>Our Ambition</h5>
                                        <p>Lorem is Ipsum is simply is design iomyi is text Lorem Ipsum is simply is our
                                            busi designer is our country.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-about-inner">
                                    <div class="thumb mb-3">
                                        <img src="{{ asset('assets/img/icon/3.png') }}" alt="img">
                                    </div>
                                    <div class="details">
                                        <h5>Our Ambition</h5>
                                        <p>Lorem is Ipsum is simply is design iomyi is text Lorem Ipsum is simply is our
                                            busi designer is our country.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about area end -->

    <!-- work-process-area start -->
    <div class="work-process-area pd-top-120 pd-bottom-90">
        <div class="container">
            <div class="section-title text-center">
                <h6 class="sub-title">OUR SIMPLE PROCESS</h6>
                <h2 class="title">World <span>Best Step</span> Our It Process</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-work-process-inner">
                        <div class="thumb mb-3">
                            <img src="{{ asset('assets/img/about/think.png') }}" alt="img">
                        </div>
                        <div class="details">
                            <p class="process-count">Work 01</p>
                            <h5 class="mb-3">Software Research</h5>
                            <p class="content">Research ipsum dolor sit consec tetur sed diam in the aliquam tempor</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-work-process-inner">
                        <div class="thumb mb-3">
                            <img src="{{ asset('assets/img/about/solve.png') }}" alt="img">
                        </div>
                        <div class="details">
                            <p class="process-count">Work 02</p>
                            <h5 class="mb-3">Create Programs</h5>
                            <p class="content">Create ipsum dolor sit consec tetur sed diam in the aliquam tempor</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-work-process-inner">
                        <div class="thumb mb-3">
                            <img src="{{ asset('assets/img/about/think.png') }}" alt="img">
                        </div>
                        <div class="details">
                            <p class="process-count">Work 03</p>
                            <h5 class="mb-3">Develope Software</h5>
                            <p class="content">Develope ipsum dolor sit consec tetur sed diam in the aliquam tempor</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-work-process-inner">
                        <div class="thumb mb-3">
                            <img src="{{ asset('assets/img/about/antenna.png') }}" alt="img">
                        </div>
                        <div class="details">
                            <p class="process-count">Work 04</p>
                            <h5 class="mb-3">Shop software</h5>
                            <p class="content">Shop ipsum dolor sit consec tetur Malesuada sed diam in the aliquam tempor
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- work-process-area end -->
@endsection

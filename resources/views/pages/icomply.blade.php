@extends('layouts.app')

@section('main')
    <!-- page title start -->

    <div class="banner-area bg-relative banner-area-2 bg-cover"
        style="background-image: url('{{ asset('assets/img/banner-3/5.png') }}');">
        <img class="bg-img-2" src="{{ asset('assets/img/banner-3/4.png') }}" alt="img">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="banner-inner pe-xl-5">
                        <h2 class="title wow animated fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.4s">iComply
                            <span>Financial Compliance</span></h2>
                        <p class="content pe-xl-5 wow animated fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.5s">
                            Stay ahead with our industry-leading compliance solutions, ensuring your business adheres to all
                            financial regulations. We provide seamless integration for smooth compliance management.
                        </p>
                        <a class="btn btn-border-base wow animated fadeInLeft" data-wow-duration="1.5s"
                            data-wow-delay="0.6s" href="about.html">Get Started</a>
                        <div class="d-inline-block align-self-center wow animated fadeInLeft" data-wow-duration="1.5s"
                            data-wow-delay="0.7s"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10">
                    <div class="banner-thumb-3 wow animated fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <div class="main-img-wrap">
                            <img class="main-img" src="{{ asset('assets/img/banner-2/1.png') }}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- banner end -->

    <!-- service area start -->
    <div class="service-area bg-relative pd-top-120 pd-bottom-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="section-title text-center">
                        <h6 class="sub-title">CREATIVE SERVICES</h6>
                        <h2 class="title">Best Destination To Get Your Own <span>Application</span> Developed</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner style-3">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/service-icon/11.png') }}" alt="img">
                        </div>
                        <div class="details">
                            <h5><a href="https://novajii.com/ords/f?p=bulksms:register">Only the best</a></h5>
                            <p>You can access SaaS applications through a web browser or mobile app, as long as you have an
                                internet connection</p>
                            <a class="read-more-text" href="https://novajii.com/ords/f?p=bulksms:register">Learn More </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner style-3">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/service-icon/22.png') }}" alt="img">
                        </div>
                        <div class="details">
                            <h5><a href="https://novajii.com/ords/f?p=bulksms:register">Focusing on details</a></h5>
                            <p>You can access SaaS applications through a web browser or mobile app, as long as you have an
                                internet connection</p>
                            <a class="read-more-text" href="https://novajii.com/ords/f?p=bulksms:register">Learn More </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner style-3">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/service-icon/33.png') }}" alt="img">
                        </div>
                        <div class="details">
                            <h5><a href="https://novajii.com/ords/f?p=bulksms:register">No flaws here</a></h5>
                            <p>You can access SaaS applications through a web browser or mobile app, as long as you have an
                                internet connection</p>
                            <a class="read-more-text" href="https://novajii.com/ords/f?p=bulksms:register">Learn More </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service area end -->

    <!-- about area start -->
    <div class="about-area bg-gradient-gray pd-top-120 pd-bottom-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow animated fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <div class="about-thumb-inner mb-4 mb-lg-0">
                        <img class="main-img" src="{{ asset('assets/img/about/11.png') }}" alt="img">
                    </div>
                </div>
                <div class="col-lg-6 wow animated fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <div class="section-title mb-0">
                        <h2 class="title">Advancing <span>Beyond</span> Your Expectations</h2>
                        <p class="content mb-4">You can access SaaS applications through a web browser or mobile app, as
                            long as you have an internet connection.</p>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="single-list-inner style-check style-heading style-check mb-3">
                                    <li><i class="fas fa-check-circle"></i> Mistakes To Avoid to the dum</li>
                                    <li><i class="fas fa-check-circle"></i> Your Startup industry stan</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="single-list-inner style-check style-heading style-check mb-3">
                                    <li><i class="fas fa-check-circle"></i> Mistakes To Avoid to the dum</li>
                                    <li><i class="fas fa-check-circle"></i> Your Startup industry stan</li>
                                </ul>
                            </div>
                        </div>
                        <p class="content">SaaS providers typically invest heavily in security measures to protect customer
                            data, such as encryption and multi-factor authentication. However, it is important to research
                            and choose a reputable provider and also to ensure that</p>
                        <a class="btn btn-border-base" href="about.html">Get started </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about area end -->



    <!-- price-process start -->
    <div class="price-process-area pd-top-120">
        <div class="contact-inner-1 contact-inner-2">
            <div class="row">
                <div class="col-lg-6 wow animated fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.6s">
                    <img class="w-100" src="assets/img/about/12.png" alt="img">
                </div>
                <div class="col-lg-4 wow animated fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.6s">
                    <div class="section-title mb-0">
                        <h2 class="title mb-4">Smarter Applications For The <span>Smarter</span> Individuals</h2>
                        <div class="media mb-3">
                            <div class="media-left me-3">
                                <img src="assets/img/icon/33.svg" alt="img">
                            </div>
                            <div class="media-body">
                                <h5>Felis in quam volutpat </h5>
                                <p class="mb-0">Lorem ipsum dolor consectetur notte massa sapien samet. Aucibus sed sem
                                    non, mattis commodo nisi.</p>
                            </div>
                        </div>
                        <div class="media mb-3">
                            <div class="media-left me-3">
                                <img src="assets/img/icon/33.svg" alt="img">
                            </div>
                            <div class="media-body">
                                <h5>Sed mi et in neque mattis</h5>
                                <p class="mb-0">Lorem ipsum dolor consectetur notte massa sapien samet. Aucibus sed sem
                                    non, mattis commodo nisi.</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left me-3">
                                <img src="assets/img/icon/33.svg" alt="img">
                            </div>
                            <div class="media-body">
                                <h5>Commodo adipiscing </h5>
                                <p class="mb-0">Lorem ipsum dolor consectetur notte massa sapien samet. Aucibus sed sem
                                    non, mattis commodo nisi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- price-process end -->

    <!-- work-process-area start -->
    <div class="work-process-area pd-top-120 pd-bottom-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9">
                    <div class="section-title text-center">
                        <h6 class="sub-title">CREATIVE MEMBERS</h6>
                        <h2 class="title">The Best Development <span>Solutions</span> In The Country</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-work-process-inner-3 text-center">
                        <h2 class="process-count mb-2 color-base">01.</h2>
                        <h5 class="mb-4">Zero to app in no time</h5>
                        <img src="assets/img/testimonial/6.png" alt="img">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-work-process-inner-3 text-center">
                        <h2 class="process-count mb-2 color-base">02.</h2>
                        <h5 class="mb-4">Zero to app in no time</h5>
                        <img src="assets/img/testimonial/7.png" alt="img">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-work-process-inner-3 text-center">
                        <h2 class="process-count mb-2 color-base">03.</h2>
                        <h5 class="mb-4">Zero to app in no time</h5>
                        <img src="assets/img/testimonial/8.png" alt="img">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-work-process-inner-3 text-center">
                        <h2 class="process-count mb-2 color-base">04.</h2>
                        <h5 class="mb-4">Zero to app in no time</h5>
                        <img src="assets/img/testimonial/9.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- work-process-area end -->

    <!-- pricing-area start -->
    <div class="pricing-area bg-gray pd-top-80 pd-bottom-120">
        <div class="container">
            <div class="section-title text-center">
                <h6 class="sub-title">Mobile Partners</h6>
                <h2 class="title">Best plane to get our <span>Services</span></h2>
            </div>
            <div class="row">
                <div class="swiper myPartners">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide swiper-slide-partner">
                            <img src="assets/img/partners/fidelity.png" alt="Fidelity">
                        </div>
                        <div class="swiper-slide swiper-slide-partner">
                            <img src="assets/img/partners/lapo.png" alt="Lapo">
                        </div>
                        <div class="swiper-slide swiper-slide-partner">
                            <img src="assets/img/partners/mtn.png" alt="MTN">
                        </div>
                        <div class="swiper-slide swiper-slide-partner">
                            <img src="assets/img/partners/glo.png" alt="Glo">
                        </div>
                        <div class="swiper-slide swiper-slide-partner">
                            <img src="assets/img/partners/airtel.png" alt="Airtel">
                        </div>
                        <div class="swiper-slide swiper-slide-partner">
                            <img src="assets/img/partners/9mobile.png" alt="9Mobile">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- pricing-area end -->
@endsection

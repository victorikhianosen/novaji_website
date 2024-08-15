@extends('layouts.app')
@section('main')

    <!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- search popup start-->
    <div class="td-search-popup" id="td-search-popup">
        <form action="https://wowtheme7.com/tf/agiletech/index.html" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- search popup end-->
    <div class="body-overlay" id="body-overlay"></div>

    <!-- navbar start -->
    <nav class="navbar navbar-area navbar-area-2 navbar-expand-lg">
        <div class="container nav-container">
            <div class="responsive-mobile-menu">
                <button class="menu toggle-btn d-block d-lg-none" data-target="#itech_main_menu" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="icon-left"></span>
                    <span class="icon-right"></span>
                </button>
            </div>
            <div class="logo">
                <a href="index.html"><img src="assets/img/logos.png" alt="img"></a>
                {{-- <a href="index.html"><img src="assets/img/logo.png" alt="img"></a> --}}
            </div>
            <div class="nav-right-part nav-right-part-mobile">
                <a class="search-bar-btn" href="#">
                    <i class="fa fa-search"></i>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="itech_main_menu">
                <ul class="navbar-nav menu-open text-lg-center ps-lg-5">
                    <li class="menu-item-has-children">
                        <a href="{{ route('home') }}">Home</a>

                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Products</a>
                        <ul class="sub-menu">
                            <li><a href="service.html">USSD</a></li>
                            <li><a href="service-2.html">SMS</a></li>
                            <li><a href="service-3.html">Financal Monitoring Solutions</a></li>
                            <li><a href="service-4.html">Compliance Solutions</a></li>
                            <li><a href="service-5.html">Payment Solutions</a></li>
                            <li><a href="service-5.html">Enterprise Solutions</a></li>
                            <li><a href="service-5.html">Mobile Application</a></li>
                            <li><a href="service-5.html">Web Application</a></li>

                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Service</a>
                    </li>
                    <li class="menu-item-has-children mega-menu">
                        <a href="#">About</a>


                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Contact</a>

                    </li>
                    <li><a href="{{ url('https://novajii.com/ords/f?p=bulksms:login') }}">Login</a></li>
                </ul>
            </div>
            <div class="nav-right-part nav-right-part-desktop align-self-center">
                <a class="btn btn-border-base" href="{{ url('https://novajii.com/ords/f?p=bulksms:register')}}">Sign Up</a>
            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- page title start -->
    <div class="banner-area bg-relative banner-area-1 pd-bottom-100 bg-cover"
        style="background-image: url('assets/img/banner/0.png');">
        <img class="animate-img-1 top_image_bounce" src="assets/img/banner/2.png" alt="img">

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 align-self-center">
                                <div class="banner-inner pe-xl-5">
                                    <h2 class="title wow animated fadeInLeft" data-wow-duration="1.5s"
                                        data-wow-delay="0.4s">Making The <span>Digital</span> World Work For You</h2>
                                    <p class="content pe-xl-5 wow animated fadeInLeft" data-wow-duration="1.5s"
                                        data-wow-delay="0.5s">And In Order To Make A Business, Brand Advertising And
                                        Marketing Plays An Important Role. Similarly, In Making Cultivation Business Are
                                        Necessary.</p>
                                    <a class="btn btn-border-base wow animated fadeInLeft" data-wow-duration="1.5s"
                                        data-wow-delay="0.6s" href="about.html">Get Started </a>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-5 col-md-8 offset-xl-2 offset-lg-1">
                                <div class="banner-thumb mt-5 mt-lg-0 ms-4 ms-lg-0 wow animated fadeInRight"
                                    data-wow-duration="1.5s" data-wow-delay="0.3s">
                                    <img class="banner-animate-img banner-animate-img-1 top_image_bounce"
                                        src="assets/img/banner/2.png" alt="img">
                                    <img class="main-img" src="assets/img/banner/111.jpg" alt="img">
                                    {{-- <img class="main-img" src="assets/img/banner/1.png" alt="img"> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 align-self-center">
                                <div class="banner-inner pe-xl-5">

                                    <h2 class="title wow animated fadeInLeft" data-wow-duration="1.5s"
                                        data-wow-delay="0.4s">Empowering Your <span>Financial</span> Freedom</h2>
                                    <p class="content pe-xl-5 wow animated fadeInLeft" data-wow-duration="1.5s"
                                        data-wow-delay="0.5s">And In Order To Make A Business, Brand Advertising And
                                        Marketing Plays An Important Role. Similarly, In Making Cultivation Business Are
                                        Necessary.</p>
                                    <a class="btn btn-border-base wow animated fadeInLeft" data-wow-duration="1.5s"
                                        data-wow-delay="0.6s" href="about.html">Get Started</a>

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-10">
                                <div class="banner-thumb-3 wow animated fadeInRight" data-wow-duration="1.5s"
                                    data-wow-delay="0.3s">
                                    <div class="main-img-wrap">

                                        <img class="main-img" src="assets/img/banner-3/1.png" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="swiper-slide">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 align-self-center">
                                <div class="banner-inner pe-xl-5">

                                    <h2 class="title wow animated fadeInLeft" data-wow-duration="1.5s"
                                        data-wow-delay="0.4s">Revolutionize Your <span>Workflow</span> With SaaS</h2>
                                    <p class="content pe-xl-5 wow animated fadeInLeft" data-wow-duration="1.5s"
                                        data-wow-delay="0.5s">And In Order To Make A Business, Brand Advertising And
                                        Marketing Plays An Important Role. Similarly, In Making Cultivation Business Are
                                        Necessary.</p>
                                    <a class="btn btn-border-base wow animated fadeInLeft" data-wow-duration="1.5s"
                                        data-wow-delay="0.6s" href="about.html">Get Started </a>

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-9 wow animated fadeInRight" data-wow-duration="1.5s"
                                data-wow-delay="0.3s">
                                <div class="banner-thumb-2 mt-4 mt-lg-0">
                                    <img class="banner-animate-img banner-animate-img-4"
                                        src="assets/img/banner-2/3.png" alt="img">
                                    <div class="main-img-wrap">

                                        <img class="main-img" src="assets/img/banner-2/1.png" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="swiper-slide">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 align-self-center">
                                <div class="banner-inner pe-xl-5">

                                    <h2 class="title wow animated fadeInLeft" data-wow-duration="1.5s"
                                        data-wow-delay="0.4s">Empowering Your <span>Financial</span> Freedom</h2>
                                    <p class="content pe-xl-5 wow animated fadeInLeft" data-wow-duration="1.5s"
                                        data-wow-delay="0.5s">And In Order To Make A Business, Brand Advertising And
                                        Marketing Plays An Important Role. Similarly, In Making Cultivation Business Are
                                        Necessary.</p>
                                    <a class="btn btn-border-base wow animated fadeInLeft" data-wow-duration="1.5s"
                                        data-wow-delay="0.6s" href="about.html">Get Started</a>

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-10">
                                <div class="banner-thumb-3 wow animated fadeInRight" data-wow-duration="1.5s"
                                    data-wow-delay="0.3s">
                                    <div class="main-img-wrap">

                                        <img class="main-img" src="assets/img/banner-3/1.png" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-pagination"></div>
        </div>
        {{-- <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="banner-inner pe-xl-5">
                        <h2 class="title wow animated fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.4s">Making The <span>Digital</span> World Work For You</h2>
                        <p class="content pe-xl-5 wow animated fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.5s">And In Order To Make A Business, Brand Advertising And Marketing Plays An Important Role. Similarly, In Making Cultivation Business Are Necessary.</p>
                        <a class="btn btn-border-base wow animated fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.6s" href="about.html">Get Started </a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-8 offset-xl-2 offset-lg-1">
                    <div class="banner-thumb mt-5 mt-lg-0 ms-4 ms-lg-0 wow animated fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <img class="banner-animate-img banner-animate-img-1 top_image_bounce" src="assets/img/banner/2.png" alt="img">
                        <img class="main-img" src="assets/img/banner/1.png" alt="img">
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    <!-- banner end -->

    <!-- service area start -->
    <div class="service-area bg-relative pd-top-100">
        <img class="position-bottom-left top_image_bounce" src="assets/img/icon/4.png" alt="img">
        <div class="container">
            <div class="section-title text-center">
                <h6 class="sub-title">PRODUCTS</h6>
                <h2 class="title">Your Partner In <span>Digital</span> Success</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner text-center">
                        <div class="thumb">
                            <img src="assets/img/service-icon/ussd.png" alt="img">
                        </div>
                        <div class="details">
                            <h5><a href="service-details.html">USSD</a></h5>
                            <p>Lorem is Ipsum is simply is design iomyi is text Lorem Ipsum is simply is our busi Lorem
                                is Ipsum is</p>
                            <a class="btn btn-border-base" href="service-details.html">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner text-center">
                        <div class="thumb">
                            <img src="assets/img/service-icon/sms.png" alt="img">
                        </div>
                        <div class="details">
                            <h5><a href="service-details.html">SMS</a></h5>
                            <p>Lorem is Ipsum is simply is design iomyi is text Lorem Ipsum is simply is our busi Lorem
                                is Ipsum is</p>
                            <a class="btn btn-border-base" href="service-details.html">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner text-center">
                        <div class="thumb">
                            <img src="assets/img/service-icon/compliance.png" alt="img">
                        </div>
                        <div class="details">
                            <h5><a href="service-details.html">Compliance Solutions</a></h5>
                            <p>Lorem is Ipsum is simply is design iomyi is text Lorem Ipsum is simply is our busi Lorem
                                is Ipsum is</p>
                            <a class="btn btn-border-base" href="service-details.html">Learn More </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner text-center">
                        <div class="thumb">
                            <img src="assets/img/service-icon/payment.png" alt="img">
                        </div>
                        <div class="details">
                            <h5><a href="service-details.html">Payment Solutions</a></h5>
                            <p>Lorem is Ipsum is simply is design iomyi is text Lorem Ipsum is simply is our busi Lorem
                                is Ipsum is</p>
                            <a class="btn btn-border-base" href="service-details.html">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner text-center">
                        <div class="thumb">
                            <img src="assets/img/service-icon/mobile.png" alt="img">
                        </div>
                        <div class="details">
                            <h5><a href="service-details.html">Mobile App Development</a></h5>
                            <p>Lorem is Ipsum is simply is design iomyi is text Lorem Ipsum is simply is our busi Lorem
                                is Ipsum is</p>
                            <a class="btn btn-border-base" href="service-details.html">Learn More </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner text-center">
                        <div class="thumb">
                            <img src="assets/img/service-icon/web.png" alt="img">
                        </div>
                        <div class="details">
                            <h5><a href="service-details.html">Web App Developent</a></h5>
                            <p>Lorem is Ipsum is simply is design iomyi is text Lorem Ipsum is simply is our busi Lorem
                                is Ipsum is</p>
                            <a class="btn btn-border-base" href="service-details.html">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service area end -->


    <!-- about area start -->
    <div class="about-area pd-top-120" style="background-image: url('assets/img/bg/3.png');">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-thumb-inner pe-xl-5 me-xl-5 wow animated fadeInLeft" data-wow-duration="1.5s"
                        data-wow-delay="0.3s">
                        <img class="animate-img-1 top_image_bounce" src="assets/img/about/2.png" alt="img">
                        <img class="animate-img-2 left_image_bounce" src="assets/img/about/3.png" alt="img">
                        <img class="main-img" src="assets/img/about/1.png" alt="img">
                    </div>
                </div>
                <div class="col-lg-6 wow animated fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <div class="section-title mt-5 mt-lg-0">
                        <h6 class="sub-title">ABOUT US</h6>
                        <h2 class="title">It Is A Critical Component Of <span>Modern</span> Businesses</h2>
                        <p class="content mb-4 mb-xl-5">Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry Loreaim Ipsum has been the industry's standard dummy</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-about-inner">
                                    <div class="thumb mb-3">
                                        <img src="assets/img/icon/ambition.png" alt="img">
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
                                        <img src="assets/img/icon/mission.png" alt="img">
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

    <!-- faq area start -->
    <div class="faq-area faq-area-margin-top bg-cover pd-top-90 pd-bottom-110">
        <div class="container">
            <div class="row pd-top-120">
                <div class="col-xl-5 col-lg-6 col-md-8 order-lg-last">
                    <div class="about-thumb-inner pt-lg-3">
                        <img class="main-img" src="assets/img/about/4.png" alt="img">
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="section-title mb-0 mt-4 mt-lg-0">
                        <h6 class="sub-title">SOME FAQ'S</h6>
                        <h2 class="title">Creating <span>Digital</span> Masterpieces</h2>
                        <p class="content">It is a long established fact that a reader will be distr acted bioiiy the
                            end gail designa readable content of a page when looking.</p>
                    </div>
                    <div class="accordion accordion-inner style-2 accordion-icon-left mt-3" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What services do you offer?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                                    default model text, search for 'lorem ipsum' will uncover
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How long does it take for you to complete a project?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                                    default model text, search for 'lorem ipsum' will uncover
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    How much does it cost to work with your agency?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                                    default model text, search for 'lorem ipsum' will uncover
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- faq area end -->

    <!-- case-study area start -->
    <div class="case-study-area bg-relative pd-top-110">
        <img class="animate-img-1 top_image_bounce" src="assets/img/banner/2.png" alt="img">
        <div class="container">
            <div class="section-title text-center">
                <h6 class="sub-title">GALLERY HERE</h6>
                <h2 class="title">Leading The <span>Digital</span> Revolution</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-case-study-inner">
                        <div class="thumb">
                            <img src="assets/img/case-study/1.png" alt="img">
                        </div>
                        <div class="details">
                            <h5><a href="project-details.html">Tecnology Farms</a></h5>
                            <a class="cat" href="#">Las vegas</a>
                            <a class="right-arrow" href="#"><i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-case-study-inner">
                        <div class="thumb">
                            <img src="assets/img/case-study/2.png" alt="img">
                        </div>
                        <div class="details">
                            <h5><a href="project-details.html">Tecnology Farms</a></h5>
                            <a class="cat" href="#">Las vegas</a>
                            <a class="right-arrow" href="#"><i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-case-study-inner">
                        <div class="thumb">
                            <img src="assets/img/case-study/3.png" alt="img">
                        </div>
                        <div class="details">
                            <h5><a href="project-details.html">Tecnology Farms</a></h5>
                            <a class="cat" href="#">Las vegas</a>
                            <a class="right-arrow" href="#"><i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- case-study area end -->


    <!-- counter area start -->
    <div class="counter-area bg-relative bg-cover pd-top-110 pd-bottom-100"
        style="background-image: url('assets/img/bg/55.jpg');">
        <div class="container pd-bottom-90">
        </div>
    </div>
    <!-- counter area end -->

    <!-- contact-inner-1 start -->
    <div class="contact-area">
        <div class="container">
            <div class="contact-inner-1">
                <div class="row">
                    <div class="col-lg-8 wow animated fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <img class="w-100" src="assets/img/bg/4.png" alt="img">
                    </div>
                    <div class="col-lg-4 wow animated fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <div class="section-title mb-0">
                            <h6 class="sub-title">GET IN TOUCH</h6>
                            <h2 class="title">Bringing Your <span>Vision</span> To Life</h2>
                            <p class="content">For your car we will do everything advice design in us repairs and
                                maintenance. We are the some preferred.</p>
                            <form class="mt-4" action="{{ route('contact.store') }}" method="POST">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="single-input-inner style-border">
                                            <input type="text" placeholder="Your Name" name="name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single-input-inner style-border">
                                            <input type="text" placeholder="Your Email" name="email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single-input-inner style-border">
                                            <input type="text" placeholder="Your Phone" name="phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single-input-inner style-border">
                                            <input type="text" placeholder="Your Subject" name="subject">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="single-input-inner style-border">
                                            <textarea placeholder="Message" name="message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-black mt-0 w-100 border-radius-5">Submit</button>
                                        {{-- <a class="btn btn-black mt-0 w-100 border-radius-5" type="submit">Submit
                                            now</a> --}}
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact-inner-1 end -->

    <!-- work-process-area start -->

    <!-- work-process-area end -->

    <!-- pricing-area start -->
    <div class="pricing-area bg-gray pd-top-120 pd-bottom-90">
        <div class="container">
            <div class="section-title text-center">
                <h6 class="sub-title">Partners</h6>
                <h2 class="title">Best plane to get our <span>Services</span></h2>
            </div>
            <div class="row">
                <div class="swiper myPartners">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide swiper-slide-partner"><img src="assets/img/partners/fidelity.png"
                                alt=""></div>
                        <div class="swiper-slide swiper-slide-partner"><img src="assets/img/partners/sterling.png"
                                alt=""></div>
                        <div class="swiper-slide swiper-slide-partner"><img src="assets/img/partners/taj.png"
                                alt=""></div>
                        <div class="swiper-slide swiper-slide-partner"><img src="assets/img/partners/lapo.png"
                                alt=""></div>
                        <div class="swiper-slide swiper-slide-partner"><img src="assets/img/partners/mtn.png"
                                alt=""></div>
                        <div class="swiper-slide swiper-slide-partner"><img src="assets/img/partners/glo.png"
                                alt=""></div>
                        <div class="swiper-slide swiper-slide-partner"><img src="assets/img/partners/airtel.png"
                                alt=""></div>
                        <div class="swiper-slide swiper-slide-partner"><img src="assets/img/partners/9mobile.png"
                                alt=""></div>
                        <div class="swiper-slide swiper-slide-partner"><img src="assets/img/partners/boi.png"
                                alt=""></div>
                        <div class="swiper-slide swiper-slide-partner"><img src="assets/img/partners/credit.png"
                                alt=""></div>
                        <div class="swiper-slide swiper-slide-partner"><img src="assets/img/partners/fiberone.png"
                                alt=""></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- pricing-area start -->

@endsection

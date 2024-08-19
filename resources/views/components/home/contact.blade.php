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
                        @csrf
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

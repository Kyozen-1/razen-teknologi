@extends('landing-page.layouts.app')
@section('title', 'Razen Teknologi | Layanan | Detail')

@section('content')
    <!-- breadcrumb area start -->
    <section class="breadcrumb pt-150 pb-150 bg_img" data-background="{{ asset('techbuzz/assets/images/bg/breadcrumb-bg-1.jpeg') }}"
        data-overlay="dark" data-opacity="5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb__wrap">
                        <h2 class="title">Service Details</h2>
                        <div class="breadcrumb__nav">
                            <ul>
                                <li><span>//</span></li>
                                <li><a href="index.html">Home</a></li>
                                <li>|</li>
                                <li>Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- about area start -->
    <section class="about__area about__area--7 pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 pr-55">
                    <div class="about__bg about__bg--7 bg_img" data-background="{{ asset('techbuzz/assets/images/bg/about-bg-2.jpeg') }}">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 pl-20">
                    <div class="about__wrap about__wrap--4">
                        <div class="section__heading mb-35">
                            <h4 class="section__heading--title-small"><span class="mr-10">//</span>UI/UX Design</h4>
                            <h2 class="section__heading--title">Just Make An Awesome <br>
                                Tour Here<span>.</span></h2>
                            <div class="section__heading--content mt-20">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                            </div>
                        </div>
                        <div class="row mt-none-20">
                            <div class="col-xl-6 mt-20">
                                <ul class="service__box--lists">
                                    <li><span class="icon"><i class="fal fa-check"></i></span> Web Template Design</li>
                                    <li><span class="icon"><i class="fal fa-check"></i></span> Theme Development</li>
                                </ul>
                            </div>
                            <div class="col-xl-6 mt-20">
                                <ul class="service__box--lists">
                                    <li><span class="icon"><i class="fal fa-check"></i></span> Game Design</li>
                                    <li><span class="icon"><i class="fal fa-check"></i></span> Illustration Design</li>
                                </ul>
                            </div>
                        </div>
                        <a href="contact.html" class="site-btn">Get Started Now <span>+ </span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about area end -->

    <!-- feature area start -->
    <section class="feature-area grey-bg pt-95 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 text-center">
                    <div class="section__heading mb-60">
                        <h4 class="section__heading--title-small"><span class="mr-10">//</span>Why Choose Us<span class="ml-10">//</span>
                        </h4>
                        <h1 class="section__heading--transparent white">Features</h1>
                        <h2 class="section__heading--title">Prominent IT Security
                        Services<span>.</span></h2>
                    </div>
                </div>
            </div>
            <div class="row mt-none-30">
                <div class="col-xl-6 col-lg-6 col-md-6 mt-30">
                    <div class="feature__box">
                        <h4 class="title"><span>01</span> Mitech Management Systems.</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                        <div class="icon">
                            <img src="{{ asset('techbuzz/assets/images/icons/feature-icon.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 mt-30">
                    <div class="feature__box">
                        <h4 class="title"><span>02</span> Efficient Database Security.</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                        <div class="icon">
                            <img src="{{ asset('techbuzz/assets/images/icons/feature-icon.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 mt-30">
                    <div class="feature__box">
                        <h4 class="title"><span>03</span> Reliable Multi-function Technology.</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                        <div class="icon">
                            <img src="{{ asset('techbuzz/assets/images/icons/feature-icon.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 mt-30">
                    <div class="feature__box">
                        <h4 class="title"><span>04</span> Highly Professional Staffs.</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                        <div class="icon">
                            <img src="{{ asset('techbuzz/assets/images/icons/feature-icon.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature area end -->
@endsection

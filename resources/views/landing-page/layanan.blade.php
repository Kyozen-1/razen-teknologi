@extends('landing-page.layouts.app')
@section('title', 'Razen Teknologi | Layanan')

@section('content')
    <!-- breadcrumb area start -->
    <section class="breadcrumb pt-150 pb-150 bg_img" data-background="{{ asset('techbuzz/assets/images/bg/breadcrumb-bg-1.jpeg') }}"
        data-overlay="dark" data-opacity="5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb__wrap">
                        <h2 class="title">Our Services.</h2>
                        <div class="breadcrumb__nav">
                            <ul>
                                <li><span>//</span></li>
                                <li><a href="index.html">Home</a></li>
                                <li>|</li>
                                <li>Services</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- service area start -->
    <section class="service-area pt-100 pb-100">
        <div class="container">
            <div class="row mt-none-30">
                <div class="col-xl-4 col-lg-6 col-md-12 mt-30 text-center">
                    <div class="service__box service__box--2 service__box--3 service__box--4">
                        <div class="icon">
                            <img src="{{ asset('techbuzz/assets/images/icons/service-7.png') }}" alt="">
                        </div>
                        <div class="content">
                            <h2 class="title mb-15">Managed IT services</h2>
                            <p>Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                        </div>
                        <a href="{{ route('layanan.detail', ['id'=>1]) }}" class="inline-btn mt-15">Read More</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12 mt-30 text-center">
                    <div class="service__box service__box--2 service__box--3 service__box--4">
                        <div class="icon">
                            <img src="{{ asset('techbuzz/assets/images/icons/service-7.png') }}" alt="">
                        </div>
                        <div class="content">
                            <h2 class="title mb-15">Backup and Recovery</h2>
                            <p>Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                        </div>
                        <a href="service-details.html" class="inline-btn mt-15">Read More</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12 mt-30 text-center">
                    <div class="service__box service__box--2 service__box--3 service__box--4">
                        <div class="icon">
                            <img src="{{ asset('techbuzz/assets/images/icons/service-7.png') }}" alt="">
                        </div>
                        <div class="content">
                            <h2 class="title mb-15">Cyber Security</h2>
                            <p>Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                        </div>
                        <a href="service-details.html" class="inline-btn mt-15">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service area end -->

    <!-- cta area start -->
    <section class="cta__area cta__area--2 cta__area--3 pt-95 pb-95 bg_img" data-background="{{ asset('techbuzz/assets/images/bg/cta-bg-3.jpeg') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="section__heading mb-40">
                        <h4 class="section__heading--title-small"><span class="mr-10">//</span> Call to action</h4>
                        <h2 class="section__heading--title">Just Make An Awesome
                            Tour Here<span>.</span></h2>
                            <div class="section__heading--content mt-20">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                            </div>
                    </div>
                </div>
                <div class="col-xl-6 text-right">
                    <a href="{{ route('kontak') }}" class="site-btn mt-95">Ayo Mulai Sekarang <span>+</span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- cta area end -->
@endsection

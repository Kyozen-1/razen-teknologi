@extends('landing-page.layouts.app')
@section('title', 'Razen Teknologi | Perusahaan')

@section('content')
    <!-- breadcrumb area start -->
    <section class="breadcrumb pt-150 pb-150 bg_img" data-background="{{ asset('techbuzz/assets/images/bg/breadcrumb-bg-1.jpeg') }}" data-overlay="dark" data-opacity="5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb__wrap">
                        <h2 class="title">About Us.</h2>
                        <div class="breadcrumb__nav">
                            <ul>
                                <li><span>//</span></li>
                                <li><a href="index.html">Home</a></li>
                                <li>|</li>
                                <li>about us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- counter area start -->
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="counter__wrap counter__wrap--2">
                    <div class="row mt-none-30">
                        <div class="col-xl-3 col-lg-6 col-md-6 mt-30">
                            <div class="counter__box">
                                <h2 class="title">
                                    <span class="counter big">84</span><span class="big">K</span>+
                                </h2>
                                <p>Projects are Completed</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 mt-30">
                            <div class="counter__box">
                                <h2 class="title">
                                    <span class="counter big">10</span><span class="big">M</span>+
                                </h2>
                                <p>Projects are Completed</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 mt-30">
                            <div class="counter__box">
                                <h2 class="title">
                                    <span class="counter big">02</span><span class="big">K</span>+
                                </h2>
                                <p>Projects are Completed</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 mt-30">
                            <div class="counter__box">
                                <h2 class="title">
                                    <span class="counter big">100</span><span class="big">M</span>+
                                </h2>
                                <p>Projects are Completed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- counter area end -->

    <!-- cta area start -->
    <div class="cta__area cta__area--4 bg_img" data-background="{{ asset('techbuzz/assets/images/bg/cta-bg-4.jpeg') }}" data-overlay="dark"
        data-opacity="5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 text-center">
                    <a href="//www.youtube.com/embed/4xe72U7mXNg?rel=0&amp;controls=0&amp;showinfo=0" data-rel="lightcase:myCollection"
                        data-animation="fadeInLeft" data-delay=".1s" class="video-link">
                        <div class="video-play-wrap">
                            <div class="video-mark">
                                <div class="wave-pulse wave-pulse-1"></div>
                                <div class="wave-pulse wave-pulse-2"></div>
                            </div>
                            <div class="video-play">
                                <i class="fa fa-play"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- cta area end -->

    <!-- about area start -->
    <section class="about__area about__area--4 pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="about__bg about__bg--4">
                        <img src="{{ asset('techbuzz/assets/images/bg/about-bg-3.jpeg') }}" data-tilt data-tilt-perspective="3000" alt="">
                        <img class="f-right" src="{{ asset('techbuzz/assets/images/bg/about-bg-4.jpeg') }}" data-tilt data-tilt-perspective="3000" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 pl-20 mt-70">
                    <div class="section__heading mb-30">
                        <h4 class="section__heading--title-small"><span class="mr-10">//</span>about us</h4>
                        <h2 class="section__heading--title">We’ve Been Thriving In <br>
                            38 Years<span>.</span></h2>
                        <div class="section__heading--content mt-20">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore
                                et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                        </div>
                    </div>
                    <div class="about__box about__box--2">
                        <p>Labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat ion ullamco laboris nisi ut aliquip ex ea
                        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <a href="about.html" class="site-btn mt-35">Learn More <span>+</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about area end -->

    <!-- department area start -->
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="department__wrap department__wrap--2">
                    <div class="row no-gutters mt-none-30">
                        <div class="col-xl-6 mt-30">
                            <div class="department__box department__box--border pr-50">
                                <div class="department__box--icon">
                                    <img src="{{ asset('techbuzz/assets/images/icons/department-1.png') }}" alt="">
                                </div>
                                <div class="department__box--content">
                                    <h4 class="title mb-15">We have an it departments.</h4>
                                    <p>Labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat ion
                                        ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 mt-30">
                            <div class="department__box pl-50">
                                <div class="department__box--icon">
                                    <img src="{{ asset('techbuzz/assets/images/icons/department-2.png') }}" alt="">
                                </div>
                                <div class="department__box--content">
                                    <h4 class="title mb-15">We Don’t have an it departments.</h4>
                                    <p>Labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat ion
                                        ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- department area end -->

    <!-- support area start -->
    <section class="support__area support__area--2 pt-95 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 text-center">
                    <div class="section__heading white mb-60">
                        <h4 class="section__heading--title-small"><span class="mr-10">//</span>services<span
                                class="ml-10">//</span></h4>
                        <h1 class="section__heading--transparent">Hire Us</h1>
                        <h2 class="section__heading--title">IT Services & Support
                            For Business<span>.</span></h2>
                    </div>
                </div>
            </div>
            <div class="row custom-row mt-none-30">
                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mt-30">
                    <div class="support__box">
                        <div class="icon">
                            <img src="{{ asset('techbuzz/assets/images/icons/support-icon-1.png') }}" class="default" alt="">
                            <img src="{{ asset('techbuzz/assets/images/icons/support-icon-h-1.png') }}" class="hover" alt="">
                        </div>
                        <div class="content">
                            <h2 class="title mb-15">Our Approach</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mt-30">
                    <div class="support__box">
                        <div class="icon">
                            <img src="{{ asset('techbuzz/assets/images/icons/support-icon-2.png') }}" class="default" alt="">
                            <img src="{{ asset('techbuzz/assets/images/icons/support-icon-h-2.png') }}" class="hover" alt="">
                        </div>
                        <div class="content">
                            <h2 class="title mb-15">Our Values</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mt-30">
                    <div class="support__box">
                        <div class="icon">
                            <img src="{{ asset('techbuzz/assets/images/icons/support-icon-3.png') }}" class="default" alt="">
                            <img src="{{ asset('techbuzz/assets/images/icons/support-icon-h-3.png') }}" class="hover" alt="">
                        </div>
                        <div class="content">
                            <h2 class="title mb-15">Our Resources</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mt-30">
                    <div class="support__box">
                        <div class="icon">
                            <img src="{{ asset('techbuzz/assets/images/icons/support-icon-4.png') }}" class="default" alt="">
                            <img src="{{ asset('techbuzz/assets/images/icons/support-icon-h-4.png') }}" class="hover" alt="">
                        </div>
                        <div class="content">
                            <h2 class="title mb-15">Growth Process</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mt-30">
                    <div class="support__box">
                        <div class="icon">
                            <img src="{{ asset('techbuzz/assets/images/icons/support-icon-5.png') }}" class="default" alt="">
                            <img src="{{ asset('techbuzz/assets/images/icons/support-icon-h-5.png') }}" class="hover" alt="">
                        </div>
                        <div class="content">
                            <h2 class="title mb-15">Our Support</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- support area end -->

    <!-- tema area start -->
    <section class="team-area pt-95 pb-95">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="section__heading mb-50">
                        <h4 class="section__heading--title-small"><span class="mr-10">//</span>Team</h4>
                        <h2 class="section__heading--title">Our Buddys Always Ready <br>
                            To Solve Your Issues<span>.</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="team-carousel owl-carousel">
                        <div class="team__box">
                            <div class="thumb">
                                <img src="{{ asset('techbuzz/assets/images/team/team-1.jpeg') }}" alt="">
                                <div class="social__icons">
                                    <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#0"><i class="fab fa-twitter"></i></a>
                                    <a href="#0"><i class="fab fa-behance"></i></a>
                                    <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#0"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="content">
                                <span class="designation">Founder</span>
                                <h4 class="name">Rosalina D. William</h4>
                            </div>
                        </div>
                        <div class="team__box">
                            <div class="thumb">
                                <img src="{{ asset('techbuzz/assets/images/team/team-2.jpeg') }}" alt="">
                                <div class="social__icons">
                                    <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#0"><i class="fab fa-twitter"></i></a>
                                    <a href="#0"><i class="fab fa-behance"></i></a>
                                    <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#0"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="content">
                                <span class="designation">CEO</span>
                                <h4 class="name">Miranda H. Halim</h4>
                            </div>
                        </div>
                        <div class="team__box">
                            <div class="thumb">
                                <img src="{{ asset('techbuzz/assets/images/team/team-3.jpeg') }}" alt="">
                                <div class="social__icons">
                                    <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#0"><i class="fab fa-twitter"></i></a>
                                    <a href="#0"><i class="fab fa-behance"></i></a>
                                    <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#0"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="content">
                                <span class="designation">Designer</span>
                                <h4 class="name">Alim D. Dhario</h4>
                            </div>
                        </div>
                        <div class="team__box">
                            <div class="thumb">
                                <img src="{{ asset('techbuzz/assets/images/team/team-4.jpeg') }}" alt="">
                                <div class="social__icons">
                                    <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#0"><i class="fab fa-twitter"></i></a>
                                    <a href="#0"><i class="fab fa-behance"></i></a>
                                    <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#0"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="content">
                                <span class="designation">Developer</span>
                                <h4 class="name">Rosalina D. William</h4>
                            </div>
                        </div>
                        <div class="team__box">
                            <div class="thumb">
                                <img src="{{ asset('techbuzz/assets/images/team/team-1.jpeg') }}" alt="">
                                <div class="social__icons">
                                    <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#0"><i class="fab fa-twitter"></i></a>
                                    <a href="#0"><i class="fab fa-behance"></i></a>
                                    <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#0"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="content">
                                <span class="designation">Founder</span>
                                <h4 class="name">Rosalina D. William</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tema area end -->

    <!-- timeline area start -->
    <section class="timeline-area pt-95 pb-100 bg_img" data-background="{{ asset('techbuzz/assets/images/pattern/timeline-pattern.png') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 text-center">
                    <div class="section__heading white mb-60">
                        <h4 class="section__heading--title-small"><span class="mr-10">//</span>Our Journey<span
                                class="ml-10">//</span>
                        </h4>
                        <h1 class="section__heading--transparent">Timeline</h1>
                        <h2 class="section__heading--title">Having Someone With a Deep
                            &amp; Broad Understanding<span>.</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="timeline">
                        <span class="shape"></span>
                        <span class="shape shape--2"></span>
                        <div class="timeline__box">
                            <span class="year">1990</span>
                            <div class="timeline__box--inner">
                                <div class="thumb">
                                    <img src="{{ asset('techbuzz/assets/images/others/timeline-1.jpeg') }}" alt="">
                                </div>
                                <div class="content">
                                    <h4 class="title">Founded Company</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore.</p>
                                    <span class="number">01</span>
                                </div>
                            </div>
                        </div>
                        <div class="timeline__box">
                            <span class="year">2001</span>
                            <div class="timeline__box--inner">
                                <div class="thumb">
                                    <img src="{{ asset('techbuzz/assets/images/others/timeline-2.jpeg') }}" alt="">
                                </div>
                                <div class="content">
                                    <h4 class="title">Design Award Winning</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore.</p>
                                    <span class="number">02</span>
                                </div>
                            </div>
                        </div>
                        <div class="timeline__box">
                            <span class="year">2008</span>
                            <div class="timeline__box--inner">
                                <div class="thumb">
                                    <img src="{{ asset('techbuzz/assets/images/others/timeline-3.jpeg') }}" alt="">
                                </div>
                                <div class="content">
                                    <h4 class="title">200+ Emploee Join</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore.</p>
                                    <span class="number">03</span>
                                </div>
                            </div>
                        </div>
                        <div class="timeline__box">
                            <span class="year">2020</span>
                            <div class="timeline__box--inner">
                                <div class="thumb">
                                    <img src="{{ asset('techbuzz/assets/images/others/timeline-4.jpeg') }}" alt="">
                                </div>
                                <div class="content">
                                    <h4 class="title">100+ Project Done</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore.</p>
                                    <span class="number">04</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- timeline area end -->
@endsection
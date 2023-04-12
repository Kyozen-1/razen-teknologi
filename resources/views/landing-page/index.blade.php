@extends('landing-page.layouts.app')

@section('content')
    <!-- banner area start -->
    <section class="banner__area pt-135 pb-135 bg_img" data-background="{{ asset('techbuzz/assets/images/bg/banner-bg-1.jpg') }}">
        <div class="banner-wrap">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-7">
                        <div class="bannertext">
                            <h5 class="subheading mb-10"><span class="mr-10">//</span>Best IT Solution provider</h5>
                            <h1 class="heading">Advanced <br>Innovative <br>IT Solutions<span>.</span></h1>
                            <p>We run all kinds of IT services that vowsuccess</p>
                            <div class="buttons mt-35">
                                <a href="contact.html" class="site-btn">Get In Touch <span>+</span></a>
                                <a href="about.html" class="site-btn transparent">Learn More <span>+</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 offset-xl-2 col-md-5 mmt-auto">
                        <div class="banner__rightbox">
                            <div class="banner__rightbox--item">
                                <div class="circle">
                                    <input type="text" class="knob" value="0" data-rel="65" data-linecap="round" data-width="75"
                                        data-height="75" data-bgcolor="#DEF5FF" data-fgcolor="#086AD8" data-thickness=".10"
                                        data-readonly="true" disabled>
                                </div>
                                <div class="content">
                                    <h3 class="title">Business Growth</h3>
                                    <p>Level is high</p>
                                </div>
                            </div>
                            <div class="banner__rightbox--item mt-110 ml-30">
                                <div class="circle">
                                    <input type="text" class="knob" value="0" data-rel="53" data-linecap="round" data-width="75"
                                        data-height="75" data-bgcolor="#DEF5FF" data-fgcolor="#086AD8" data-thickness=".10"
                                        data-readonly="true" disabled>
                                </div>
                                <div class="content">
                                    <h3 class="title">Provide Fund</h3>
                                    <p>Don’t worry about it</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-img">
            <img src="{{ asset('techbuzz/assets/images/banner/banner-1.png') }}" alt="">
        </div>
    </section>
    <!-- banner area end -->

    <!-- service area start -->
    <section class="service-area pt-95 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 text-center">
                    <div class="section__heading mb-60">
                        <h4 class="section__heading--title-small"><span class="mr-10">//</span> services <span class="ml-10">//</span></h4>
                        <h1 class="section__heading--transparent">Services</h1>
                        <h2 class="section__heading--title">Data Analytics, Content & IT <br>
                        Managed Service<span>.</span></h2>
                    </div>
                </div>
            </div>
            <div class="row mt-none-30">
                <div class="col-xl-6 col-lg-6 mt-30">
                    <div class="service__box">
                        <div class="thumb mb-35">
                            <img src="{{ asset('techbuzz/assets/images/service/service-1.jpeg') }}" alt="">
                        </div>
                        <div class="content">
                            <h2 class="title mb-15">Advanced Analytics</h2>
                            <p>Today, the term Information Technology (IT) has
                                ballooned to encompass many aspects of computing and technology.</p>
                            <ul class="service__box--lists mt-45">
                                <li><span class="icon"><i class="fal fa-check"></i></span> The Information Technology
                                    umbrella</li>
                                <li><span class="icon"><i class="fal fa-check"></i></span> Can be quite large, covering many
                                    fields</li>
                                <li><span class="icon"><i class="fal fa-check"></i></span> IT professionals perform a
                                    variety</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 mt-30">
                    <div class="service__box">
                        <div class="thumb mb-35">
                            <img src="{{ asset('techbuzz/assets/images/service/service-2.jpeg') }}" alt="">
                        </div>
                        <div class="content">
                            <h2 class="title mb-15">Content Management</h2>
                            <p>Today, the term Information Technology (IT) has
                                ballooned to encompass many aspects of computing and technology.</p>
                            <ul class="service__box--lists mt-45">
                                <li><span class="icon"><i class="fal fa-check"></i></span> The Information Technology
                                    umbrella</li>
                                <li><span class="icon"><i class="fal fa-check"></i></span> Can be quite large, covering many
                                    fields</li>
                                <li><span class="icon"><i class="fal fa-check"></i></span> IT professionals perform a
                                    variety</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service area end -->

    <!-- about area start -->
    <section class="about__area">
         <div class="container">
             <div class="row">
                 <div class="col-xl-12">
                     <div class="about__wrap pt-95 pb-95" data-overlay>
                        <div class="row justify-content-end">
                            <div class="col-xl-6 col-lg-6">
                                <div class="about__bg">
                                    <img src="{{ asset('techbuzz/assets/images/bg/about-bg-1.jpeg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 mt-30">
                                <div class="section__heading mb-35">
                                    <h4 class="section__heading--title-small"><span class="mr-10">//</span>about us</h4>
                                    <h2 class="section__heading--title">We’ve Been Thriving In <br>
                                        38 Years<span>.</span></h2>
                                    <div class="section__heading--content mt-20">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                            et dolore magna
                                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                                    </div>
                                </div>
                                <div class="about__box">
                                    <div class="row mt-none-30">
                                        <div class="col-xl-6 mt-30">
                                            <div class="about__box--item">
                                                <div class="about__box--icon">
                                                    <img src="{{ asset('techbuzz/assets/images/icons/about-icon-1.png') }}" alt="">
                                                </div>
                                                <div class="about__box--content">
                                                    <h5 class="about__box--title">Business Idea</h5>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 mt-30">
                                            <div class="about__box--item">
                                                <div class="about__box--icon">
                                                    <img src="{{ asset('techbuzz/assets/images/icons/about-icon-2.png') }}" alt="">
                                                </div>
                                                <div class="about__box--content">
                                                    <h5 class="about__box--title">Move Forward</h5>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                 </div>
             </div>
         </div>
    </section>
    <!-- about area end -->

    <!-- why choose area start -->
    <section class="whychoose-area pt-95 pb-55">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 text-center">
                    <div class="section__heading mb-100">
                        <h4 class="section__heading--title-small"><span class="mr-10">//</span>Hire us, why not<span class="ml-10">//</span></h4>
                        <h1 class="section__heading--transparent">Hire Us</h1>
                        <h2 class="section__heading--title">Why Choose Us</h2>
                    </div>
                </div>
            </div>
            <div class="row mt-none-30">
                <div class="col-xl-4 col-lg-6 mt-30">
                    <div class="whychoose__box">
                        <div class="thumb-wrap">
                            <div class="thumb">
                                <img src="{{ asset('techbuzz/assets/images/service/wcu-1.jpeg') }}" alt="">
                            </div>
                            <div class="cat">
                                <div class="icon"><i class="fal fa-cogs"></i></div>
                                <h4 class="cat-ttile">Management System</h4>
                            </div>
                        </div>
                        <div class="content text-center mt-25">
                            <div class="cat__inner">
                                <div class="icon"><i class="fal fa-cogs"></i></div>
                                <h4 class="cat-ttile">Management System</h4>
                            </div>
                            <p>We seamlessly merge two key components – economics and information technology. This is the main actual fact.</p>
                            <a href="service-details.html" class="inline-btn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 mt-30">
                    <div class="whychoose__box">
                        <div class="thumb-wrap">
                            <div class="thumb">
                                <img src="{{ asset('techbuzz/assets/images/service/wcu-2.jpeg') }}" alt="">
                            </div>
                            <div class="cat">
                                <div class="icon"><i class="fal fa-lock"></i></div>
                                <h4 class="cat-ttile">Database Security</h4>
                            </div>
                        </div>
                        <div class="content text-center mt-25">
                            <div class="cat__inner">
                                <div class="icon"><i class="fal fa-lock"></i></div>
                                <h4 class="cat-ttile">Database Security</h4>
                            </div>
                            <p>We seamlessly merge two key components – economics and information technology. This is the main actual fact.</p>
                            <a href="service-details.html" class="inline-btn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 mt-30">
                    <div class="whychoose__box">
                        <div class="thumb-wrap">
                            <div class="thumb">
                                <img src="{{ asset('techbuzz/assets/images/service/wcu-3.jpeg') }}" alt="">
                            </div>
                            <div class="cat">
                                <div class="icon"><i class="fal fa-globe"></i></div>
                                <h4 class="cat-ttile">Multifuction Technology</h4>
                            </div>
                        </div>
                        <div class="content text-center mt-25">
                            <div class="cat__inner">
                                <div class="icon"><i class="fal fa-globe"></i></div>
                                <h4 class="cat-ttile">Multifuction Technology</h4>
                            </div>
                            <p>We seamlessly merge two key components – economics and information technology. This is the main actual fact.</p>
                            <a href="service-details.html" class="inline-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- why choose area end -->

    <!-- video section area start -->
    <section class="video__area bg_img pt-100 pb-130" data-background="{{ asset('techbuzz/assets/images/bg/video-bg.jpeg') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-8">
                    <div class="video-content-wrap">
                        <div class="section__heading mb-35">
                            <h4 class="section__heading--title-small"><span class="mr-10">//</span>Intro video</h4>
                            <h2 class="section__heading--title">Just Make An Awesome <br>
                            Tour Here<span>.</span></h2>
                            <div class="section__heading--content mt-20">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                            </div>
                        </div>
                        <div class="row mt-none-20">
                            <div class="col-xl-6 mt-20">
                                <ul class="service__box--lists">
                                    <li><span class="icon"><i class="fal fa-check"></i></span> Easy To Edit</li>
                                    <li><span class="icon"><i class="fal fa-check"></i></span> 24/ Online Support</li>
                                </ul>
                            </div>
                            <div class="col-xl-6 mt-20">
                                <ul class="service__box--lists">
                                    <li><span class="icon"><i class="fal fa-check"></i></span> Easy To Edit</li>
                                    <li><span class="icon"><i class="fal fa-check"></i></span> 24/ Online Support</li>
                                </ul>
                            </div>
                        </div>
                        <a href="contact.html" class="site-btn">Get Started Now <span>+ </span></a>
                    </div>
                </div>
                <div class="col-xl-2 offset-xl-2 offset-lg-1 col-lg-3 align-self-center video-btn-wrap">
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
    </section>
    <!-- video section area end -->

    <!-- case study area start -->
    <section class="casestudy-area pt-95 pb-100 bg_img" data-background="{{ asset('techbuzz/assets/images/pattern/case-study-pattern.png') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 text-center">
                    <div class="section__heading mb-60">
                        <h4 class="section__heading--title-small"><span class="mr-10">//</span>Case Study<span class="ml-10">//</span></h4>
                        <h1 class="section__heading--transparent">Portfolio</h1>
                        <h2 class="section__heading--title">Our Portfolio/Works</h2>
                    </div>
                </div>
            </div>
            <div class="row mt-none-30">
                <div class="col-xl-4 col-lg-6 mt-30">
                    <div class="casestudy__box">
                        <div class="casestudy__box--thumb">
                            <img src="{{ asset('techbuzz/assets/images/service/case-study-1.jpeg') }}" alt="">
                        </div>
                        <div class="casestudy__box--content">
                            <h5 class="sub-title">Software Solutions</h5>
                            <h4 class="title">Kesemiro Software Solution</h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 mt-30">
                    <div class="casestudy__box">
                        <div class="casestudy__box--thumb">
                            <img src="{{ asset('techbuzz/assets/images/service/case-study-2.jpeg') }}" alt="">
                        </div>
                        <div class="casestudy__box--content">
                            <h5 class="sub-title">App Solutions</h5>
                            <h4 class="title">Kesemiro App Solution</h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 mt-30">
                    <div class="casestudy__box">
                        <div class="casestudy__box--thumb">
                            <img src="{{ asset('techbuzz/assets/images/service/case-study-3.jpeg') }}" alt="">
                        </div>
                        <div class="casestudy__box--content">
                            <h5 class="sub-title">Web Solutions</h5>
                            <h4 class="title">Kesemiro Web Solution</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- case study area end -->

    <!-- news-feed area start -->
    <section class="news-feed-area grey-bg pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="testimonials owl-carousel">
                        <div class="testimonial">
                            <h4 class="title mb-20">Great Quality Software</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore to magna
                            aliqua. Ut enim ad minim veniam, quis nostrud a exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in the voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                            sint occaecat cupidatat non proident.</p>
                            <div class="authore mt-25 d-flex align-items-center">
                                <div class="authore--thumb mr-20">
                                    <img src="{{ asset('techbuzz/assets/images/others/testimonial-authore-1.png') }}" alt="">
                                </div>
                                <div class="authore--content">
                                    <h5 class="name">Rosalina D. William</h5>
                                    <span class="designatin">Founder, Romada Co.</span>
                                </div>
                            </div>
                            <img src="{{ asset('techbuzz/assets/images/icons/quote.png') }}" alt="" class="quote-icon">
                        </div>
                        <div class="testimonial">
                            <h4 class="title mb-20">Great Quality Software</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore to magna
                            aliqua. Ut enim ad minim veniam, quis nostrud a exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in the voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                            sint occaecat cupidatat non proident.</p>
                            <div class="authore mt-25 d-flex align-items-center">
                                <div class="authore--thumb mr-20">
                                    <img src="{{ asset('techbuzz/assets/images/others/testimonial-authore-1.png') }}" alt="">
                                </div>
                                <div class="authore--content">
                                    <h5 class="name">Rosalina D. William</h5>
                                    <span class="designatin">Founder, Romada Co.</span>
                                </div>
                            </div>
                            <img src="{{ asset('techbuzz/assets/images/icons/quote.png') }}" alt="" class="quote-icon">
                        </div>
                        <div class="testimonial">
                            <h4 class="title mb-20">Great Quality Software</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore to magna
                            aliqua. Ut enim ad minim veniam, quis nostrud a exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in the voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                            sint occaecat cupidatat non proident.</p>
                            <div class="authore mt-25 d-flex align-items-center">
                                <div class="authore--thumb mr-20">
                                    <img src="{{ asset('techbuzz/assets/images/others/testimonial-authore-1.png') }}" alt="">
                                </div>
                                <div class="authore--content">
                                    <h5 class="name">Rosalina D. William</h5>
                                    <span class="designatin">Founder, Romada Co.</span>
                                </div>
                            </div>
                            <img src="{{ asset('techbuzz/assets/images/icons/quote.png') }}" alt="" class="quote-icon">
                        </div>
                        <div class="testimonial">
                            <h4 class="title mb-20">Great Quality Software</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore to magna
                            aliqua. Ut enim ad minim veniam, quis nostrud a exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in the voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                            sint occaecat cupidatat non proident.</p>
                            <div class="authore mt-25 d-flex align-items-center">
                                <div class="authore--thumb mr-20">
                                    <img src="{{ asset('techbuzz/assets/images/others/testimonial-authore-1.png') }}" alt="">
                                </div>
                                <div class="testimonial__authore--content">
                                    <h5 class="name">Rosalina D. William</h5>
                                    <span class="designatin">Founder, Romada Co.</span>
                                </div>
                            </div>
                            <img src="{{ asset('techbuzz/assets/images/icons/quote.png') }}" alt="" class="quote-icon">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="newsfeedwrap">
                        <div class="section__heading mb-30">
                            <h4 class="section__heading--title-small"> <span class="mr-10">//</span>news Feeds</h4>
                            <h2 class="section__heading--title">Get Every Single <br>
                            Update Here<span>.</span></h2>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="news__items mt-none-30">
                                    <div class="news__item mt-30">
                                        <div class="thumb">
                                            <img src="{{ asset('techbuzz/assets/images/news/news-small-1.jpeg') }}" alt="">
                                        </div>
                                        <div class="content">
                                            <ul class="meta">
                                                <li><a href="#0"><i class="fa fa-calendar-alt"></i> 24th June 2020</a></li>
                                                <li><a href="#0"><i class="fa fa-user"></i> By Admin</a></li>
                                            </ul>
                                            <h4 class="title"><a href="news-details.html">We are specialists in both economics
                                                    and information technologies.</a></h4>
                                        </div>
                                    </div>
                                    <div class="news__item mt-30">
                                        <div class="thumb">
                                            <img src="{{ asset('techbuzz/assets/images/news/news-small-2.jpeg') }}" alt="">
                                        </div>
                                        <div class="content">
                                            <ul class="meta">
                                                <li><a href="#0"><i class="fa fa-calendar-alt"></i> 24th June 2020</a></li>
                                                <li><a href="#0"><i class="fa fa-user"></i> By Admin</a></li>
                                            </ul>
                                            <h4 class="title"><a href="news-details.html">We are specialists in both economics
                                                    and information technologies.</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- news-feed area end -->
@endsection

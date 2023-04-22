@extends('landing-page.layouts.app')
@section('title', 'Razen Teknologi | Aplikasi')

@section('content')
    @php
        use App\Models\LandingPageAplikasi;

        $aplikasi = LandingPageAplikasi::first();

        $section_1 = json_decode($aplikasi->section_1, true);
    @endphp
    <!-- breadcrumb area start -->
    <section class="breadcrumb pt-150 pb-150 bg_img" data-background="{{ asset('images/landing-page/aplikasi/'.$section_1['gambar']) }}"
        data-overlay="dark" data-opacity="5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb__wrap">
                        <h2 class="title">Aplikasi Kami.</h2>
                        <div class="breadcrumb__nav">
                            <ul>
                                <li><span>//</span></li>
                                <li><a href="{{ route('beranda') }}">Beranda</a></li>
                                <li>|</li>
                                <li>Aplikasi</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <div id="butter" style="width: 100%; transform: translate3d(0px, 0px, 0px);">
        <div class="body_ineer">
            <div class="row no-gutters">
                <div class="col-12 col-lg-6 p-0">
                    <!--banner section start-->
                    <div class="banner">
                        <header class="px-2 pt-2">
                            <nav class="navbar navbar-light px-sm-0 px-md-0 px-0 px-lg-4">
                                <div class="container-fluid py-3 col-sm-12 col-md-11 col-lg-10  d-flex d-lg-block d-xl-flex align-items-center">
                                    <a class="navbar-brand d-block m-0 mx-auto ml-md-0" href="/" target="_blank">
                                        <img src="https://opuslab.works/images/logo.png" class="img-fluid" alt="Opus labworks logo">
                                        <img src="https://opuslab.works/images/logo_light.png" class="img-fluid" alt="Opus labworks logo light">
                                    </a>

                                    <!-- <div class="follow_us align-items-center d-none d-xl-flex pt-3 mx-auto pt-md-0 mr-md-0 pt-lg-3 pt-xl-0">
                                    <h2 class="pl-0">Follow</h2>
                                    <div class="icon_box d-flex">
                                        <a href="https://www.facebook.com/opuslabworks" class="d-block" target="_blank">
                                            <i class="zmdi zmdi-facebook"></i>
                                        </a>
                                        <a href=" https://www.instagram.com/opuslabworks/" class="d-block" target="_blank">
                                            <i class="zmdi zmdi-instagram"></i>
                                        </a>
                                        <a href=" https://www.youtube.com/c/OpusLabWorks" class="d-block" target="_blank">
                                            <i class="zmdi zmdi-youtube-play"></i>
                                        </a>
                                    </div>
                                </div> -->
                                </div>
                            </nav>
                        </header>

                        <div class="container-fluid col-sm-12 col-md-11 col-lg-11 col-xl-9 px-lg-4">
                            <div class="row align-items-center">
                                <div class="col-sm-12 col-md-12 col-lg-12 pb-4 pb-lg-0 px-0">
                                    <div class="banner_text pt-0 pt-md-0 pt-lg-2">
                                        <h3 class="text-center text-lg-left wow fadeInUp pb-3" data-wow-duration=".1s" style="visibility: visible; animation-duration: 0.1s; animation-name: fadeInUp;">
                                            Cryptox                                        </h3>
                                        <h1 class="text-center text-lg-left  wow fadeInUp pb-3 d-none d-lg-block" data-wow-duration=".3s" style="visibility: visible; animation-duration: 0.3s; animation-name: fadeInUp;">
                                            Cryptocurrency app, Wallet &amp; NFT Tracker App                                        </h1>

                                        <div class="d-block d-lg-none pb-0 pb-lg-0 position-relative right_row_inner  right_row_innerMovile mb-5">
                                            <!-- <div class="tabContentBg">
                                            <img src="https://opuslab.works/images/phone_bg.jpg">
                                        </div> -->
                                            <div class="interactWithScreen active" id="interactWithScreenMobile">
                                                <div class="card">
                                                    <h2>Interact with <br>screens</h2>
                                                    <button class="btn primary_button" type="button" id="startNowMobile">
                                                        Start Now
                                                    </button>
                                                    <img src="https://opuslab.works/images/hand.png" class="img-fluid">
                                                </div>
                                            </div>

                                            <div class="tab-content" id="nav-tab">
                                                <button class="btn spinner_box" type="button" disabled="" id="iframe_mobile_loader" style="display: none;">
                                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                                    Please Wait
                                                </button>
                                                                                                    <div class="tab-pane fade  show active" id="user-app_mobile" role="tabpanel" aria-labelledby="user-app_tab">
                                                        <iframe id="frame-0" src="https://template.opuslab.works/templates/MarvelPrototype_cedbiig_19012022040506_v1?emb=1&amp;iosapp=false&amp;frameless=false" allowtransparency="true" frameborder="0" width="100%" height="100%" onload="onFrameLoad()">
                                                        </iframe>
                                                    </div>
                                                                                                </div>

                                            <div class="right_row_header px-sm-0 px-md-0 px-lg-0 px-0 pb-5 pt-2">
                                                <div class="row align-items-center position-relative mt-4">
                                                    <h2 class="px-sm-0 text-center col-12 pb-3 mb-0">It contains
                                                        1 App
                                                                                                            </h2>
                                                </div>
                                                <div class="row align-items-center no-gutters wow fadeInUp animated" data-wow-duration="0.8s" style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInUp;">
                                                    <div class="col-12 col-sm-10 col-md-10 col-lg-12 col-xl-12 mx-auto">
                                                        <div class="nav nav-tabs border-0" id="nav-tab" role="tablist">
                                                            <div class="products-slider owl-carousel owl-theme owl-loaded owl-drag">

                                                                                                                                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s;"><div class="owl-item"><div class="item">
                                                                        <a class="border-0 nav-item nav-link col active" id="user-app_tab" data-toggle="tab" href="#user-app_mobile" role="tab" aria-controls="user-app" aria-selected="true">
                                                                            <span>
                                                                                User App                                                                            </span>
                                                                        </a>
                                                                    </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev disabled"><div class="nav-btn prev-slide"><i class="zmdi zmdi-chevron-left"></i></div></button><button type="button" role="presentation" class="owl-next disabled"><div class="nav-btn next-slide"><i class="zmdi zmdi-chevron-right"></i></div></button></div><div class="owl-dots disabled"></div></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <h1 class="text-center text-lg-left  wow fadeInUp pb-3 d-block d-lg-none animated" data-wow-duration=".3s" style="visibility: visible; animation-duration: 0.3s; animation-name: fadeInUp;">
                                            Cryptocurrency app, Wallet &amp; NFT Tracker App                                        </h1>

                                        <p class="text-center text-lg-left  wow fadeInUp m-0" data-wow-duration=".5s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">
                                            Cryptox is a cryptocurrency-based app where you can easily track cryptocurrency prices, charts, and market capitalizations. Wallet tracking allows to you to track your cryptos such as bitcoin, ethereum, finance that is stored in your wallet such as metamask, trust wallet etc. You can easily track current value of your coins without opening multiple wallets.                                        </p>

                                        <!--
                                    <div class="btn_box get_it_app col-12 col-md-12 col-lg-12 col-xl-12 px-0 mx-auto mx-lg-0 py-5 m-0 pr-xl-4 wow fadeInUp" data-wow-duration=".7s">
                                        <div class="row">
                                            <div class="col-12 col-md-6 mb-3 mb-md-0">
                                                <button type="button" class="btn primary_button btn_GooglePlay  rounded d-flex align-items-center mx-auto mx-md-0" id="GooglePlay">
                                                    <img src="https://opuslab.works/images/ic_playstore.png" class="img-fluid" alt="">
                                                    <span class="text-left">
                                                        <small class="text-left">Get It On</small>
                                                        <strong class="text-left">Google Play</strong>
                                                    </span>
                                                </button>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <button type="button" class="btn primary_button codecanyon_btn rounded d-flex align-items-center mx-auto mx-md-0" id="codecanyon">
                                                    <img src="https://opuslab.works/images/ic_codecanyon.png" class="img-fluid" alt="">

                                                    <span class="text-right">
                                                        <small class="text-right">Buy It On </small>
                                                        <strong class="text-right">codecanyon</strong>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div> -->


                                        <div class="btn_box get_it_app2 w-100 wow fadeInUp mt-3 col-11 col-md-12 mx-auto" data-wow-duration=".5s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">
                                            <div class="row no-gutters">
                                                <div class="col-12 col-md-8 px-0">
                                                    <h4 class="text-center text-md-left pb-2 pb-md-0 pl-md-3">
                                                        <strong>Download app</strong> on your phone
                                                    </h4>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <button type="button" class="btn primary_button  rounded d-flex align-items-center mx-auto ml-md-auto mr-md-0" id="GooglePlay">
                                                        <img src="https://opuslab.works/images/playstore.png" class="img-fluid" alt="">
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="btn_box get_it_app2 w-100 wow fadeInUp  col-11 col-md-12 mx-auto" data-wow-duration=".5s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">
                                            <div class="row no-gutters">
                                                <div class="col-12 col-md-8 px-0">
                                                    <h4 class="text-center text-md-left pb-2 pb-md-0 pl-md-3">
                                                        <strong>Buy</strong> this Product now
                                                    </h4>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <button type="button" class="btn primary_button rounded d-flex align-items-center mx-auto ml-md-auto mr-md-0" id="codecanyon">
                                                        <img src="https://opuslab.works/images/Codecanyon.png" class="img-fluid" alt="">
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                                                                    <div class="btn_box   get_it_app2 w-100 wow fadeInUp  col-11 col-md-12 mx-auto" data-wow-duration=".5s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">
                                                <div class="row no-gutters">
                                                    <div class="col-12 col-md-8 px-0">
                                                        <h4 class="text-center text-md-left pb-2 pb-md-0 pl-md-3">Watch App
                                                            <strong>Demo Video</strong>
                                                        </h4>
                                                    </div>
                                                    <div class="col-12 col-md-4">
                                                        <button type="button" class="btn primary_button  youtube_btn rounded d-flex align-items-center mx-auto ml-md-auto mr-md-0">
                                                            <a href="https://youtu.be/eeqpGYwfvcg" target="_blank"></a><img src="https://opuslab.works/images/Youtube.png" class="img-fluid" alt="">
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                                                                    <!-- <div class="btn_box   get_it_app2 w-100 wow fadeInUp  col-11 col-md-12 mx-auto"
                                            data-wow-duration=".5s">
                                            <div class="row no-gutters">
                                                <div class="col-12 col-md-8 px-0">
                                                    <h4 class="text-center text-md-left pb-2 pb-md-0 pl-md-3">
                                                        Contact us us for full application
                                                    </h4>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <div
                                                        class="contactUsButton d-flex align-items-center mx-auto ml-md-auto mr-md-0">
                                                        <button type="button" class="btn WhatsAppBtn rounded-0">
                                                            <a type="button" data-toggle="modal"
                                                                data-target="#whatsappModal">
                                                                <img src="https://opuslab.works/images/ic_whatsapp2.png" class="img-fluid"
                                                                    alt="">
                                                                <span> Whatsapp</span>
                                                            </a>
                                                        </button>

                                                        <button type="button" class="btn skypeBtn rounded-0">
                                                            <a href="https://join.skype.com/invite/m0bn1xwqaOGL"
                                                                target="_blank">
                                                                <img src="https://opuslab.works/images/ic_skype.png" class="img-fluid"
                                                                    alt="">
                                                                <span>Skype</span>
                                                            </a>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->

                                        <div class="get_admin_backend pt-5">
                                            <h2>Need Full Application (Admin/backend) ?</h2>
                                            <h4>Feel free to connect us on...</h4>
                                            <div class="row align-items-center pt-2 pb-3 no-gutters">
                                                <div class="col-12 col-md-12 col-lg-12 col-xl-9">
                                                    <div class="row align-items-center">
                                                        <div class="col-12 col-md-4 pb-2">
                                                            <button type="button" class="btn WhatsAppBtn">
                                                                <a class="d-flex align-items-center" type="button" data-toggle="modal" data-target="#whatsappModal">
                                                                    <img src="https://opuslab.works/images/ic_whatsapp2.png" class="img-fluid" alt="">
                                                                    <span> Whatsapp</span>
                                                                </a>
                                                            </button>
                                                        </div>
                                                        <div class="col-12 col-md-4 pb-2">
                                                            <button type="button" class="btn skype">
                                                                <a class="d-flex align-items-center" href="https://join.skype.com/invite/m0bn1xwqaOGL" target="_blank">
                                                                    <img src="https://opuslab.works/images/ic_skype.png" class="img-fluid" alt="">
                                                                    <span> Skype</span>
                                                                </a>
                                                            </button>
                                                        </div>
                                                        <div class="col-12 col-md-4 pb-2">
                                                            <button type="button" class="btn messageUs">
                                                                <a class="d-flex align-items-center" id="contactUS_btn">
                                                                    <img src="https://opuslab.works/images/ic_email.png" class="img-fluid" alt="">
                                                                    <span> Message</span>
                                                                </a>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-12 col-lg-3 col-xl-3 pt-3 pt-xl-0 d-flex">
                                                    <div class="icon_box d-flex mx-auto ml-md-auto mr-md-0 pt-3 pt-md-0">
                                                        <a href="https://www.facebook.com/opuslabworks" class="d-block" target="_blank">
                                                            <i class="zmdi zmdi-facebook"></i>
                                                        </a>
                                                        <a href="https://www.instagram.com/opuslabworks/" class="d-block" target="_blank">
                                                            <i class="zmdi zmdi-instagram"></i>
                                                        </a>
                                                        <a href="https://www.youtube.com/c/OpusLabWorks" class="d-block" target="_blank">
                                                            <i class="zmdi zmdi-youtube-play"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-7">
                                </div>
                            </div>
                        </div>

                        <!-- <div class="banner-footer px-lg-2">
                        <div class="container-fluid col-sm-12 col-md-11 col-lg-11 col-xl-9 px-xl-0">
                            <div class="row no-gutters d-block d-md-flex pb-md-4">
                                <div class="col-12 col-md-12 col-lg-12">
                                    <div class="row no-gutters d-block d-md-flex">
                                                                                    <div class="col col-md-6 follow_us align-items-center d-flex mx-auto mx-md-0 px-0">
                                                <div class="icon_box d-flex mx-auto mx-md-0 px-0">
                                                    <a href="https://youtu.be/eeqpGYwfvcg" class="d-flex align-items-center px-0" target="_blank">
                                                        <img src="https://opuslab.works/images/ic_youtube.png" alt="" />
                                                        <h2 class="px-0 pl-3">Watch Demo</h2>
                                                    </a>
                                                </div>
                                            </div>

                                        <div class="col-10 col-md-6 d-flex mx-auto mx-md-0" style="position: relative; z-index: 999;">
                                            <h4 class="mx-auto pt-3 pt-md-0 ml-md-auto mr-md-0"><a class="d-flex align-items-center" target="_blank" href="/apps/crypto-nft">View Similar Apps <i class="zmdi zmdi-open-in-new"></i></a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    </div>
                    <!--banner section end-->
                </div>

                <div class="col-12 col-lg-6 p-0 pt-4  d-none d-lg-block right_row_container">
                    <!--app section start-->
                    <div class="right_row px-2 pt-4 wow fadeInUp m-0" data-wow-duration=".5s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">
                        <div class="right_row_inner pt-3">
                            <div class="interactWithScreen" id="interactWithScreen">
                                <div class="card">
                                    <h2>Interact with <br>screens</h2>
                                    <button class="btn primary_button" type="button" id="startNow">
                                        Start Now
                                    </button>
                                    <img src="https://opuslab.works/images/hand.png" class="img-fluid">
                                </div>
                            </div>

                            <div class="tabContentBg">
                                <img src="https://opuslab.works/images/phone_bg.jpg">
                            </div>
                            <div class="right_row_header px-sm-0 px-md-0 px-lg-0 px-0 pb-5 pt-2">
                                <div class="row align-items-center position-relative mt-4">
                                    <div class="ThemeButtonBox col-12 pb-3 pb-md-0">
                                        <!-- <div class="darkTheme_lightThemeButton d-flex mx-auto" id="darkTheme">
                                        <i class="zmdi zmdi-sun"></i>
                                        <i class="zmdi zmdi-brightness-3"></i>
                                    </div> -->
                                    </div>
                                    <h2 class="px-sm-0 text-center col-12 pb-3 mb-0">It contains
                                        1 App
                                                                            </h2>
                                </div>
                                <div class="row align-items-center no-gutters wow fadeInUp" data-wow-duration="0.8s" style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInUp;">
                                    <div class="col-12 col-sm-10 col-md-10 col-lg-12 col-xl-12 mx-auto">
                                        <div class="nav nav-tabs border-0" id="nav-tab" role="tablist">
                                            <div class="products-slider owl-carousel owl-theme owl-loaded owl-drag">

                                                                                                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 132px;"><div class="owl-item active" style="width: auto; margin-right: 10px;"><div class="item">
                                                        <a class="border-0 nav-item nav-link col active" id="user-app_tab" data-toggle="tab" href="#user-app" role="tab" aria-controls="user-app" aria-selected="true">
                                                            <span>
                                                                User App                                                            </span>
                                                        </a>
                                                    </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev disabled"><div class="nav-btn prev-slide"><i class="zmdi zmdi-chevron-left"></i></div></button><button type="button" role="presentation" class="owl-next disabled"><div class="nav-btn next-slide"><i class="zmdi zmdi-chevron-right"></i></div></button></div><div class="owl-dots disabled"></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-content position-relative" id="nav-tab">
                                <button class="btn spinner_box" type="button" disabled="" id="iframe_loader" style="display: none;">
                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    Please Wait
                                </button>

                                                                    <div class="tab-pane fade  show active" id="user-app" role="tabpanel" aria-labelledby="user-app_tab">
                                        <iframe id="frame-0" src="https://template.opuslab.works/templates/MarvelPrototype_cedbiig_19012022040506_v1?emb=1&amp;iosapp=false&amp;frameless=false" allowtransparency="true" frameborder="0" width="100%" height="100%">
                                        </iframe>
                                    </div>
                                                                </div>
                        </div>
                    </div>
                    <!--app section end-->
                </div>
            </div>
        </div>


        <!-- Similar apps section start-->
        <section class="padding-bottom  products similar_apps pt-3" id="products">
            <div class="container-fluid col-sm-12 col-md-11 col-lg-11 px-0 mx-auto px-lg-4">
                <!--                Tab Content start-->
                <div class="tab-content pt-0 ">
                    <div class="tab-pane fade show active " id="All_Products " role="tabpanel " aria-labelledby="All_Products_tab ">
                        <div class="container-fluid ">
                            <h2 class="similar_apps_heading pb-4">Similar Apps</h2>
                            <div class="row ">
                                                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <div class="card border-0" style="background: #fcc550">
                                            <a class="d-flex w-100" target="_blank" href="https://opuslab.works/apps/crypto-nft/cryptox">
                                                <div class="text-box ">
                                                    <h2>
                                                        Cryptox                                                    </h2>
                                                    <h3>
                                                        Cryptocurrency app, Wallet &amp; NFT Tracker App                                                    </h3>
                                                    <div class="icon_box">
                                                                                                                    <i><img src="https://opuslab.works/images/ic_flutter.png" alt=""></i>
                                                                                                                                                                                                                                </div>
                                                </div>
                                                <div class="img_box ">
                                                    <img src="https://opuslab.works/images/Cryptox.png" alt="Cryptox - Cryptocurrency app, Wallet &amp; NFT Tracker App at opus labworks" class="img-fluid wow slideInUp" data-wow-duration=".5s" style="visibility: visible; animation-duration: 0.5s; animation-name: slideInUp;">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                                                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <div class="card border-0" style="background: #bf91ff">
                                            <a class="d-flex w-100" target="_blank" href="https://opuslab.works/apps/crypto-nft/nftez">
                                                <div class="text-box ">
                                                    <h2>
                                                        NFTez                                                    </h2>
                                                    <h3>
                                                        NFT Buying Selling Marketplace App                                                    </h3>
                                                    <div class="icon_box">
                                                                                                                    <i><img src="https://opuslab.works/images/ic_flutter.png" alt=""></i>
                                                                                                                                                                                                                                </div>
                                                </div>
                                                <div class="img_box ">
                                                    <img src="https://opuslab.works/images/NFTez.png" alt="NFTez - NFT Buying Selling Marketplace App at opus labworks" class="img-fluid wow slideInUp" data-wow-duration=".5s" style="visibility: visible; animation-duration: 0.5s; animation-name: slideInUp;">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                                                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <div class="card border-0" style="background: #6fec8b">
                                            <a class="d-flex w-100" target="_blank" href="https://opuslab.works/apps/crypto-nft/vertulio">
                                                <div class="text-box ">
                                                    <h2>
                                                        Vertulio                                                    </h2>
                                                    <h3>
                                                        Cryptocurrency app, Wallet &amp; NFT Tracker App                                                    </h3>
                                                    <div class="icon_box">
                                                                                                                                                                            <i><img src="https://opuslab.works/images/ic_ionic.png" class="ionic" alt=""></i>
                                                                                                                                                                        </div>
                                                </div>
                                                <div class="img_box ">
                                                    <img src="https://opuslab.works/images/Vertulio.png" alt="Vertulio - Cryptocurrency app, Wallet &amp; NFT Tracker App at opus labworks" class="img-fluid wow slideInUp" data-wow-duration=".5s" style="visibility: visible; animation-duration: 0.5s; animation-name: slideInUp;">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                                                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <div class="card border-0" style="background: #69f1dd">
                                            <a class="d-flex w-100" target="_blank" href="https://opuslab.works/apps/crypto-nft/coinexchange">
                                                <div class="text-box ">
                                                    <h2>
                                                        Coin Exchange                                                    </h2>
                                                    <h3>
                                                        Crypto Exchange app, Wallet &amp; NFT Tracker App                                                    </h3>
                                                    <div class="icon_box">
                                                                                                                    <i><img src="https://opuslab.works/images/ic_flutter.png" alt=""></i>
                                                                                                                                                                                                                                </div>
                                                </div>
                                                <div class="img_box ">
                                                    <img src="https://opuslab.works/images/Coinexchange.png" alt="Coin Exchange - Crypto Exchange app, Wallet &amp; NFT Tracker App at opus labworks" class="img-fluid wow slideInUp" data-wow-duration=".5s" style="visibility: hidden; animation-duration: 0.5s; animation-name: none;">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                                                </div>

                        </div>
                    </div>
                </div>
                <!--                Tab Content end-->
            </div>
        </section>
        <!--Similar apps section end-->
    </div>
@endsection

@section('js')
<script>
    new WOW().init();

    function onFrameLoad() {
        console.log("hide");
        if (document.getElementById("iframe_loader")) {
            console.log("iframe-loader");
            document.getElementById("iframe_loader").style.display = 'none';
        }

        if (document.getElementById("iframe_mobile_loader")) {
            console.log("iframe-loader");
            document.getElementById("iframe_mobile_loader").style.display = 'none';
        }
    }

    var slider = $('.products-slider.owl-carousel');
    $('.products-slider.owl-carousel').owlCarousel({
        margin: 10,
        items: 1,
        dots: false,
        autoWidth: false,
        nav: true,
        navText: ["<div class='nav-btn prev-slide'><i class='zmdi zmdi-chevron-left'></i></div>", "<div class='nav-btn next-slide'><i class='zmdi zmdi-chevron-right'></i></div>"],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 3,
                autoWidth: true,
            },
            1000: {
                items: 5,
                nav: true,
                autoWidth: true,
            }
        }
    });

    $(".darkTheme_lightThemeButton").click(function () {
        $("body").toggleClass("dark_theme");
    });

    $(document).ready(function () {
        var a = $(".owl-item a");
        $(".owl-item a").click(function () {
            a.removeClass('active');
        });
    });

    $("#GooglePlay").click(function () {
        $("#download_app_demo").addClass("active");
        $("#buy_now").removeClass("active");
        $("#contactUS").removeClass("active");
    });
    $("#codecanyon").click(function () {
        $("#buy_now").addClass("active");
        $("#download_app_demo").removeClass("active");
        $("#contactUS").removeClass("active");
    });
    $("#contactUS_btn").click(function () {
        $("#contactUS").addClass("active");
        $("#download_app_demo").removeClass("active");
        $("#buy_now").removeClass("active");
    });
    $("#contactUsFullApp").click(function () {
        $("#contactUS").addClass("active");
        $("#download_app_demo").removeClass("active");
        $("#buy_now").removeClass("active");
    });
    $(".cloesMenu").click(function () {
        $("#download_app_demo").removeClass("active");
        $("#buy_now").removeClass("active");
        $("#contactUS").removeClass("active");
    });


    $("#startNow").click(function () {
        $("#interactWithScreen").removeClass("active");
    });

    $("#startNowMobile").click(function () {
        $("#interactWithScreenMobile").removeClass("active");
    });
</script>=
@endsection

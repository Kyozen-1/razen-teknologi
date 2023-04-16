<!doctype html>
<html class="no-js" lang="zxx">

    @include('landing-page.layouts.head')

<body>
    @php
        use App\Models\Profil;

        $profil = Profil::first();
    @endphp
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- preloader  -->
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    @php
                        $split_nama = str_split($profil->nama);
                    @endphp
                        @for ($i = 0; $i < count($split_nama); $i++)
                            <span data-text-preloader="{{$split_nama[$i]}}" class="letters-loading">
                                {{$split_nama[$i]}}
                            </span>
                        @endfor
					</div>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- preloader end -->

    <!-- header start -->
    @include('landing-page.layouts.header')
    <!-- header end -->

    <div class="menuButton" id="openMenu">
        <i class="zmdi zmdi-menu"></i>
    </div>

    <!--Category menu Start-->
    <div class="categoryMenu" id="categoryMenu">
        <!-- <div class="MenuHeader py-5 col-11 col-md-10 mx-auto px-0">
            <h2 class="d-flex">Mobile App Categories
                <span class="mr-0 ml-auto" id="cloesMenu">
                    <i class="zmdi zmdi-close-circle" style="font-size: 1.6rem;"></i>
                </span>
            </h2>
        </div> -->
        <div class="d-flex">
            <h2 class="header_text">Mobile App Categories</h2>
            <div class="w-100" style="padding-top: 40px;">
                <div class="list-group d-block col-12 col-md-12 col-xl-12 mx-auto px-0">
                    <div class="row">
                                                    <div class="col-12 col-md-4 col-lg-3">
                                <a href="/apps/crypto-nft" class="list-group-item list-group-item-action">
                                    <div class="item-header d-flex">
                                        <h5 class="mb-1">Crypto &amp; NFT</h5>
                                        <div class="img_box mr-0 ml-auto">
                                            <img src="https://opuslab.works/images/CryptoNFT.png" class="img-fluid" alt="Crypto &amp; NFT" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="text_box">
                                        <p>App related to cyptocurrency management and NFTez marketplace</p>
                                    </div>
                                </a>
                            </div>
                                                    <div class="col-12 col-md-4 col-lg-3">
                                <a href="/apps/food-restaurant" class="list-group-item list-group-item-action">
                                    <div class="item-header d-flex">
                                        <h5 class="mb-1">Food &amp; Restaurant</h5>
                                        <div class="img_box mr-0 ml-auto">
                                            <img src="https://opuslab.works/images/Food Restaurant.png" class="img-fluid" alt="Food &amp; Restaurant" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="text_box">
                                        <p>App related to food ordering, delivery, POS and more</p>
                                    </div>
                                </a>
                            </div>
                                                    <div class="col-12 col-md-4 col-lg-3">
                                <a href="/apps/ecommerce-grocery-laundry" class="list-group-item list-group-item-action">
                                    <div class="item-header d-flex">
                                        <h5 class="mb-1">eCommerce, Grocery &amp; Laundry</h5>
                                        <div class="img_box mr-0 ml-auto">
                                            <img src="https://opuslab.works/images/ecommerce.png" class="img-fluid" alt="eCommerce, Grocery &amp; Laundry" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="text_box">
                                        <p>Apps related to online shopping, grocery, laundry and more</p>
                                    </div>
                                </a>
                            </div>
                                                    <div class="col-12 col-md-4 col-lg-3">
                                <a href="/apps/doctor-pharmacy" class="list-group-item list-group-item-action">
                                    <div class="item-header d-flex">
                                        <h5 class="mb-1">Doctor &amp; Pharmacy</h5>
                                        <div class="img_box mr-0 ml-auto">
                                            <img src="https://opuslab.works/images/DoctorPharmacy.png" class="img-fluid" alt="Doctor &amp; Pharmacy" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="text_box">
                                        <p>Apps related to doctor, pharmacy, hospital and more</p>
                                    </div>
                                </a>
                            </div>
                                                    <div class="col-12 col-md-4 col-lg-3">
                                <a href="/apps/online-classes" class="list-group-item list-group-item-action">
                                    <div class="item-header d-flex">
                                        <h5 class="mb-1">Online Classes</h5>
                                        <div class="img_box mr-0 ml-auto">
                                            <img src="https://opuslab.works/images/Online classes.png" class="img-fluid" alt="Online Classes" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="text_box">
                                        <p>App related to online classes, exam, coching, learning and more.</p>
                                    </div>
                                </a>
                            </div>
                                                    <div class="col-12 col-md-4 col-lg-3">
                                <a href="/apps/ott-music" class="list-group-item list-group-item-action">
                                    <div class="item-header d-flex">
                                        <h5 class="mb-1">OTT &amp; Music</h5>
                                        <div class="img_box mr-0 ml-auto">
                                            <img src="https://opuslab.works/images/OTT _ Music.png" class="img-fluid" alt="OTT &amp; Music" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="text_box">
                                        <p>Apps related to OTT, music streaming app, web series app and more</p>
                                    </div>
                                </a>
                            </div>
                                                    <div class="col-12 col-md-4 col-lg-3">
                                <a href="/apps/service-provider" class="list-group-item list-group-item-action">
                                    <div class="item-header d-flex">
                                        <h5 class="mb-1">Service Provider</h5>
                                        <div class="img_box mr-0 ml-auto">
                                            <img src="https://opuslab.works/images/Service.png" class="img-fluid" alt="Service Provider" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="text_box">
                                        <p>Apps related to service provider, service finder, appointment booking and more</p>
                                    </div>
                                </a>
                            </div>
                                                    <div class="col-12 col-md-4 col-lg-3">
                                <a href="/apps/cab-booking" class="list-group-item list-group-item-action">
                                    <div class="item-header d-flex">
                                        <h5 class="mb-1">Cab Booking</h5>
                                        <div class="img_box mr-0 ml-auto">
                                            <img src="https://opuslab.works/images/Cab booking.png" class="img-fluid" alt="Cab Booking" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="text_box">
                                        <p>Apps related to cab booking, car pooling, car ride and more</p>
                                    </div>
                                </a>
                            </div>
                                                    <div class="col-12 col-md-4 col-lg-3">
                                <a href="/apps/social-chatting-calling" class="list-group-item list-group-item-action">
                                    <div class="item-header d-flex">
                                        <h5 class="mb-1">Social, Chatting &amp; Calling</h5>
                                        <div class="img_box mr-0 ml-auto">
                                            <img src="https://opuslab.works/images/social chatting.png" class="img-fluid" alt="Social, Chatting &amp; Calling" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="text_box">
                                        <p>App related to chaating, group chatting, voice/video calling, social sharing and more.</p>
                                    </div>
                                </a>
                            </div>
                                                    <div class="col-12 col-md-4 col-lg-3">
                                <a href="/apps/payment-banking" class="list-group-item list-group-item-action">
                                    <div class="item-header d-flex">
                                        <h5 class="mb-1">Payment &amp; Banking</h5>
                                        <div class="img_box mr-0 ml-auto">
                                            <img src="https://opuslab.works/images/payment _ banking.png" class="img-fluid" alt="Payment &amp; Banking" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="text_box">
                                        <p>Apps related to banking, payment, recharge and more.</p>
                                    </div>
                                </a>
                            </div>
                                                    <div class="col-12 col-md-4 col-lg-3">
                                <a href="/apps/fitness-workout" class="list-group-item list-group-item-action">
                                    <div class="item-header d-flex">
                                        <h5 class="mb-1">Fitness &amp; Workout</h5>
                                        <div class="img_box mr-0 ml-auto">
                                            <img src="https://opuslab.works/images/Fitness.png" class="img-fluid" alt="Fitness &amp; Workout" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="text_box">
                                        <p>Apps related to workout, fitness, yoga and more</p>
                                    </div>
                                </a>
                            </div>
                                                    <div class="col-12 col-md-4 col-lg-3">
                                <a href="/apps/blog-news" class="list-group-item list-group-item-action">
                                    <div class="item-header d-flex">
                                        <h5 class="mb-1">Blog &amp; News</h5>
                                        <div class="img_box mr-0 ml-auto">
                                            <img src="https://opuslab.works/images/Blog _ news.png" class="img-fluid" alt="Blog &amp; News" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="text_box">
                                        <p>Apps related to News, Blogs and more</p>
                                    </div>
                                </a>
                            </div>
                                                    <div class="col-12 col-md-4 col-lg-3">
                                <a href="/apps/booking-apps" class="list-group-item list-group-item-action">
                                    <div class="item-header d-flex">
                                        <h5 class="mb-1">Booking Apps</h5>
                                        <div class="img_box mr-0 ml-auto">
                                            <img src="https://opuslab.works/images/Booked.png" class="img-fluid" alt="Booking Apps" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="text_box">
                                        <p>Apps related to service provider, appointment booking, service finding and more</p>
                                    </div>
                                </a>
                            </div>
                                                    <div class="col-12 col-md-4 col-lg-3">
                                <a href="/apps/community-religious" class="list-group-item list-group-item-action">
                                    <div class="item-header d-flex">
                                        <h5 class="mb-1">Community &amp; Religious</h5>
                                        <div class="img_box mr-0 ml-auto">
                                            <img src="https://opuslab.works/images/community.png" class="img-fluid" alt="Community &amp; Religious" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="text_box">
                                        <p>Apps related to community, religion, society and more</p>
                                    </div>
                                </a>
                            </div>
                                                    <div class="col-12 col-md-4 col-lg-3">
                                <a href="/apps/classified-apps" class="list-group-item list-group-item-action">
                                    <div class="item-header d-flex">
                                        <h5 class="mb-1">Classified Apps</h5>
                                        <div class="img_box mr-0 ml-auto">
                                            <img src="https://opuslab.works/images/classified.png" class="img-fluid" alt="Classified Apps" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="text_box">
                                        <p>Apps related to real estate, classified and more.</p>
                                    </div>
                                </a>
                            </div>
                                                    <div class="col-12 col-md-4 col-lg-3">
                                <a href="/apps/other-popular-apps" class="list-group-item list-group-item-action">
                                    <div class="item-header d-flex">
                                        <h5 class="mb-1">Other Popular Apps</h5>
                                        <div class="img_box mr-0 ml-auto">
                                            <img src="https://opuslab.works/images/Other.png" class="img-fluid" alt="Other Popular Apps" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="text_box">
                                        <p>Apps related to matrimony, astrology, sports and more.</p>
                                    </div>
                                </a>
                            </div>
                                            </div>
                </div>
            </div>

            <i class="zmdi zmdi-close-circle" style="font-size: 1.6rem;" id="cloesMenu"></i>
        </div>

    </div>
    <!--Category menu end-->

    @yield('content')

    @include('landing-page.layouts.footer')

    <!--========= JS Here =========-->
    @include('landing-page.layouts.js')
</body>

</html>

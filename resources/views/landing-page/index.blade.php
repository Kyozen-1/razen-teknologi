@extends('landing-page.layouts.app')
@section('title', 'Razen Teknologi | Beranda')

@section('css')
    <style>
        .products .tab-content .card:hover .img-product {
            /* box-shadow: -25px 18px 37px -10px rgba(158, 158, 158, 0.27); */
            /* box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px; */
            box-shadow: 10px 10px 18px -3px rgba(117, 117, 117, 0.75);
            transform: scale(1.098);
        }

        @media (min-width: 989.5px)
        {
            .products .tab-content .card .img-product {
                min-width: 155px;
                max-width: 155px;
                border-radius: 26px 26px 0 0;
                min-height: 197.25px;
            }
        }
        @media (min-width: 499.5px)
        {
            .products .tab-content .card .img-product {
                min-width: 140px;
                max-width: 140px;
                border-radius: 10px 10px 0 0;
                min-height: 179.25px;
            }
        }

        .products .tab-content .card .img-product {
            min-width: 100px;
            margin-left: auto;
            overflow: hidden;
            transition: all .5s;
            min-height: 92px;
            max-width: 128px;
            display: flex;
            align-items: flex-end;
            border-radius: 10px 10px 0 0;
            /* background-color: #f5f5f5a1; */
        }
    </style>
@endsection

@section('content')
    @php
        use App\Models\LandingPageBeranda;
        use GuzzleHttp\Client as GuzzleHttpClient;

        $beranda = LandingPageBeranda::first();

        $section_1 = json_decode($beranda->section_1, true);
        $section_2 = json_decode($beranda->section_2, true);
        $section_3 = json_decode($beranda->section_3, true);
        $section_4 = json_decode($beranda->section_4, true);
    @endphp
    <!-- banner area start -->
    <section class="banner__area pt-135 pb-135 bg_img" data-background="{{ asset('techbuzz/assets/images/bg/banner-bg-1.jpg') }}">
        <div class="banner-wrap">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="bannertext">
                            <h5 class="subheading mb-10"><span class="mr-10">//</span>{{$section_1?$section_1['sub_judul']:'' }}</h5>
                            <h1 class="heading">{!!$section_1?$section_1['judul']:'' !!}</h1>
                            {!!$section_1?$section_1['deskripsi']:'' !!}
                            <div class="buttons mt-35">
                                <a href="{{ route('kontak') }}" class="site-btn mr-2 mt-3">Kontak Kami <span>+</span></a>
                                <a href="{{ route('perusahaan') }}" class="site-btn mt-3">Pelajari Lebih Banyak <span>+</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-img">
            <img src="{{ asset('images/landing-page/beranda/'.$section_1['gambar']) }}" alt="">
        </div>
    </section>
    <!-- banner area end -->

    <!--Products section start-->
    <section class="padding-bottom  padding-top products  px-lg-4" id="products">
        <div class="container-fluid col-sm-12 col-md-12 col-lg-11">
            <div class="row align-items-center no-gutters">
                <div class="col text-center carousel_btn d-none d-sm-block d-md-block d-lg-block d-xlblock" id="prevItem">
                    <i class="zmdi zmdi-chevron-left"></i>
                </div>
                <!--Tab Button start-->
                <div class="col-12 col-sm-10 col-md-10 col-lg-11 col-xl-11 mx-auto">
                    <div class="nav nav-tabs border-0" id="nav-tab" role="tablist">
                        <div class="products-slider owl-carousel owl-theme owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 3294px;">
                                    <div class="owl-item active" style="width: auto;">
                                        <div class="item">
                                            <a class=" border-0 nav-item nav-link active col" id="All_Products_tab" data-toggle="tab" href="#All_Products" role="tab" aria-controls="All_Products" aria-selected="true">
                                                <span>Semua Aplikasi</span>
                                            </a>
                                        </div>
                                    </div>
                                    @foreach ($kategoris as $kategori)
                                    <div class="owl-item active" style="width: auto;">
                                        <div class="item">
                                            <a class=" border-0 nav-item nav-link active col" id="kategori-{{$kategori->id}}_tab" data-toggle="tab" href="#kategori-{{$kategori->id}}" role="tab" aria-controls="kategori-{{$kategori->id}}" aria-selected="true">
                                                <span>{{$kategori->name}}</span>
                                            </a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="owl-nav disabled">
                                <button type="button" role="presentation" class="owl-prev">
                                    <span aria-label="Previous">‹</span>
                                </button>
                                <button type="button" role="presentation" class="owl-next">
                                    <span aria-label="Next">›</span>
                                </button>
                            </div>
                            <div class="owl-dots disabled"></div>
                        </div>
                    </div>
                </div>
                <!--Tab Button end-->
                <div class="col text-center carousel_btn d-none d-sm-block d-md-block d-lg-block d-xlblock" id="nextItem">
                    <i class="zmdi zmdi-chevron-right "></i>
                </div>
            </div>
            <!--Tab Content start-->
            <div class="tab-content " id="nav-tabContent">
                <div class="tab-pane All_Products_tab fade show active" id="All_Products" role="tabpanel" aria-labelledby="All_Products_tab">
                    <div class="container-fluid col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                            @php
                                $guzzleClient = new GuzzleHttpClient();

                                $get_all_products = $guzzleClient->get(env('RAZEN_URL').'api/product/razen-teknologi/product');
                                $all_products = json_decode($get_all_products->getBody())->data;

                                function random_color_part() {
                                    return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
                                }
                                function random_color() {
                                    return random_color_part() . random_color_part() . random_color_part();
                                }
                            @endphp
                            @foreach ($all_products as $item)
                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                    <div class="card border-0" style="background: #{{random_color()}}">
                                        <a class="d-flex w-100" target="_blank" href="{{ route('aplikasi.detail', ['id'=>$item->id]) }}">
                                            <div class="text-box">
                                                <h2>{{$item->nama}}</h2>
                                                <h3>{{strip_tags($item->deskripsi)}}</h3>
                                            </div>
                                            <img src="{{ env('RAZEN_URL') }}storage/{{json_decode($item->gambar)[0]}}" alt="{{strip_tags($item->deskripsi)}}" class="img-product wow slideInUp animated" data-wow-duration=".5s" loading="lazy" style="visibility: visible; animation-duration: 0.5s; animation-name: slideInUp;">
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="btn_box mx-auto col-8 col-sm-4 col-md-3 col-lg-3 col-xl-2 padding-top" id="products_btn_box">
                        <button type="button" id="show_more" class="btn primary_button rounded-pill btn-outline">
                            <span>Show more</span>
                        </button>

                        <button type="button" id="show_less" class="btn primary_button rounded-pill btn-outline">
                            <span>Show less</span>
                        </button>
                    </div>
                </div>
                @foreach ($kategoris as $kategori)
                    <div class="tab-pane fade" id="kategori-{{$kategori->id}}" role="tabpanel" aria-labelledby="kategori-{{$kategori->id}}_tab">
                        <div class="container-fluid col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="row">
                                @php
                                    $get_kategori_razen_teknologis = $guzzleClient->get(env('RAZEN_URL').'api/product/razen-teknologi/product/kategori/'.$kategori->id);
                                    $kategori_razen_teknologis = json_decode($get_kategori_razen_teknologis->getBody())->data;
                                @endphp
                                @foreach ($kategori_razen_teknologis as $item)
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <div class="card border-0" style="background: #{{random_color()}}">
                                            <a class="d-flex w-100" target="_blank" href="{{ route('aplikasi.detail', ['id'=>$item->id]) }}">
                                                <div class="text-box">
                                                    <h2>{{$item->nama}}</h2>
                                                    <h3>{{strip_tags($item->deskripsi)}}</h3>
                                                </div>
                                                <img src="{{ env('RAZEN_URL') }}storage/{{json_decode($item->gambar)[0]}}" alt="{{strip_tags($item->deskripsi)}}" class="img-product wow slideInUp animated" data-wow-duration=".5s" loading="lazy" style="visibility: visible; animation-duration: 0.5s; animation-name: slideInUp;">
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!--Tab Content end-->
        </div>
    </section>
    <!--Products section end-->

    <!-- timeline area start -->
    <section class="timeline-area pt-95 pb-100 bg_img" data-background="{{ asset('techbuzz/assets/images/pattern/timeline-pattern.png') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 text-center">
                    <div class="section__heading white mb-60">
                        <h4 class="section__heading--title-small"><span class="mr-10">//</span>{{$section_2?$section_2['sub_judul']:'' }}<span
                                class="ml-10">//</span>
                        </h4>
                        <h1 class="section__heading--transparent">Timeline</h1>
                        <h2 class="section__heading--title">{{$section_2?$section_2['judul']:'' }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="timeline">
                        <span class="shape"></span>
                        <span class="shape shape--2"></span>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($timelines as $timeline)
                            <div class="timeline__box">
                                <span class="year">{{$i}}</span>
                                <div class="timeline__box--inner">
                                    <div class="thumb">
                                        <img src="{{ asset('images/razen-teknologi/timeline/'.$timeline->gambar) }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h4 class="title">{{$timeline->judul}}</h4>
                                        <p>{{$timeline->deskripsi}}</p>
                                        <span class="number">{{$i++}}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- timeline area end -->

    <!-- video section area start -->
    <section class="video__area bg_img pt-100 pb-130" data-background="{{ asset('images/landing-page/beranda/'.$section_3['gambar']) }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-8">
                    <div class="video-content-wrap">
                        <div class="section__heading mb-35">
                            <h4 class="section__heading--title-small"><span class="mr-10">//</span>{{$section_3?$section_3['sub_judul'] : ''}}</h4>
                            <h2 class="section__heading--title">{{$section_3?$section_3['judul'] : ''}}</h2>
                            <div class="section__heading--content mt-20">
                                {!! $section_3?$section_3['deskripsi'] : '' !!}
                            </div>
                        </div>
                        <div class="row mt-none-20">
                            <div class="col-xl-12 mt-20">
                                <ul class="service__box--lists">
                                    @foreach ($section_3['konten'] as $item)
                                        <li><span class="icon"><i class="fal fa-check"></i></span> {{$item['item']}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <a href="{{ route('kontak') }}" class="site-btn">Ayo mulai sekarang <span>+ </span></a>
                    </div>
                </div>
                <div class="col-xl-2 offset-xl-2 offset-lg-1 col-lg-3 align-self-center video-btn-wrap">
                    <a href="{{$section_3?$section_3['tautan'] : ''}}" data-rel="lightcase:myCollection"
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

    <!-- news-feed area start -->
    <section class="news-feed-area grey-bg pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="testimonials owl-carousel">
                        @foreach ($testimonis as $testimoni)
                            <div class="testimonial">
                                <h4 class="title mb-20">{{$testimoni->judul_testimoni}}</h4>
                                <p>{{$testimoni->testimoni}}</p>
                                <div class="authore mt-25 d-flex align-items-center">
                                    <div class="authore--thumb mr-20">
                                        <img src="{{ asset('images/razen-teknologi/testimoni/'.$testimoni->foto) }}" alt="">
                                    </div>
                                    <div class="authore--content">
                                        <h5 class="name">{{$testimoni->nama}}</h5>
                                        <span class="designatin">{{$testimoni->jabatan}}</span>
                                    </div>
                                </div>
                                <img src="{{ asset('techbuzz/assets/images/icons/quote.png') }}" alt="" class="quote-icon">
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="newsfeedwrap">
                        <div class="section__heading mb-30">
                            <h4 class="section__heading--title-small"> <span class="mr-10">//</span>{{$section_4?$section_4['sub_judul']:'' }}</h4>
                            <h2 class="section__heading--title">{{$section_4?$section_4['judul']:'' }}</h2>
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

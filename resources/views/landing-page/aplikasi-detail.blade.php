@extends('landing-page.layouts.app')
@section('title', 'Razen Teknologi | Aplikasi')

@section('content')
    @php
        use App\Models\LandingPageAplikasi;
        use GuzzleHttp\Client as GuzzleHttpClient;
        use Carbon\Carbon;
        use App\Models\Profil;
        use App\Models\PivotProfilMediaSosial;

        $aplikasi = LandingPageAplikasi::first();
        $profil = Profil::first();

        $cek_pivot = PivotProfilMediaSosial::where('profil_id', $profil->id)->first();
        $pivot_profil_media_sosial = [];
        if($cek_pivot)
        {
            $pivot_profil_media_sosial = [
                'status' => 'ada',
                'pivot' => PivotProfilMediaSosial::where('profil_id', $profil->id)->get()
            ];
        } else {
            $pivot_profil_media_sosial = [
                'status' => 'tidak ada',
                'pivot' => ''
            ];
        }

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
                                        <img src="{{ asset('images/razen-teknologi/logo/'.$profil->logo) }}" class="img-fluid" alt="Opus labworks logo">
                                        <img src="{{ asset('images/razen-teknologi/logo/'.$profil->logo) }}" class="img-fluid" alt="Opus labworks logo light">
                                    </a>
                                </div>
                            </nav>
                        </header>

                        <div class="container-fluid col-sm-12 col-md-11 col-lg-11 col-xl-9 px-lg-4">
                            <div class="row align-items-center">
                                <div class="col-sm-12 col-md-12 col-lg-12 pb-4 pb-lg-0 px-0">
                                    <div class="banner_text pt-0 pt-md-0 pt-lg-2">
                                        @php
                                            $kategoris = $produk->kategori_produk;
                                            $kategori_produk = '';
                                            foreach ($kategoris as $kategori) {
                                                $kategori_produk .= $kategori->nama . ' ';
                                            }
                                        @endphp
                                        <h3 class="text-center text-lg-left wow fadeInUp pb-3" data-wow-duration=".1s" style="visibility: visible; animation-duration: 0.1s; animation-name: fadeInUp;">
                                            {{$kategori_produk}}
                                        </h3>
                                        <h1 class="text-center text-lg-left  wow fadeInUp pb-3 d-none d-lg-block" data-wow-duration=".3s" style="visibility: visible; animation-duration: 0.3s; animation-name: fadeInUp;">
                                            {{$produk->nama}}
                                        </h1>

                                        <div class="d-block d-lg-none pb-0 pb-lg-0 position-relative right_row_inner  right_row_innerMovile mb-5">
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
                                                <div class="tab-pane fade  show active text-center" id="user-app_mobile" role="tabpanel" aria-labelledby="user-app_tab">
                                                    <iframe id="frame-0" src="https://www.figma.com/embed?embed_host=share&hide-ui=1&show-proto-sidebar=0&url={{$produk->url_figma}}" allowtransparency="true" frameborder="0" height="600px">
                                                    </iframe>
                                                </div>
                                            </div>

                                            <div class="right_row_header px-sm-0 px-md-0 px-lg-0 px-0 pt-2">
                                                <div class="row align-items-center position-relative mt-4">
                                                    <h2 class="px-sm-0 text-center col-12 pb-3 mb-0">{{$produk->nama}}</h2>
                                                </div>
                                            </div>
                                        </div>

                                        <h1 class="text-center text-lg-left  wow fadeInUp pb-3 d-block d-lg-none animated" data-wow-duration=".3s" style="visibility: visible; animation-duration: 0.3s; animation-name: fadeInUp;">
                                            {{$produk->nama}}
                                        </h1>

                                        <p class="text-center text-lg-left  wow fadeInUp m-0" data-wow-duration=".5s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">
                                            {{strip_tags($produk->konten)}}
                                        </p>

                                        <div class="btn_box get_it_app2 w-100 wow fadeInUp mt-3 col-11 col-md-12 mx-auto" data-wow-duration=".5s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">
                                            <div class="row no-gutters">
                                                <div class="col-12 col-md-8 px-0">
                                                    <h4 class="text-center text-md-left pb-2 pb-md-0 pl-md-3">
                                                        Beli Sekarang
                                                    </h4>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <a href="{{preg_replace('#/+#','/',env('RAZEN_URL').$produk->link)}}" target="blank" class="btn btn-light rounded d-flex align-items-center mx-auto ml-md-auto mr-md-0">
                                                        <img src="{{ asset('images/razen-teknologi/logo/'.$profil->logo) }}" class="img-fluid" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="btn_box   get_it_app2 w-100 wow fadeInUp  col-11 col-md-12 mx-auto" data-wow-duration=".5s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">
                                            <div class="row no-gutters">
                                                <div class="col-12 col-md-8 px-0">
                                                    <h4 class="text-center text-md-left pb-2 pb-md-0 pl-md-3">Lihat Demo</h4>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <a href="{{$produk->url_demo_app}}" target="blank" class="btn btn-light rounded d-flex align-items-center mx-auto ml-md-auto mr-md-0">
                                                        <img src="{{ asset('images/razen-teknologi/logo/'.$profil->logo) }}" class="img-fluid" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="get_admin_backend pt-5">
                                            <h2>Butuh Aplikasi Lengkap (Admin/backend) ?</h2>
                                            <h4>Jangan ragu untuk menghubungkan kami...</h4>
                                            <div class="row align-items-center pt-2 pb-3 no-gutters">
                                                <div class="col-12 col-md-12 col-lg-12 col-xl-9">
                                                    <div class="row align-items-center">
                                                        <div class="col-12 col-md-6 pb-2">
                                                            <button type="button" class="btn WhatsAppBtn">
                                                                <a class="d-flex align-items-center" href="//api.whatsapp.com/send?phone={{$profil->no_hp}}&text=Permisi, saya mau diskusi tentang aplikasi">
                                                                    <img src="https://opuslab.works/images/ic_whatsapp2.png" class="img-fluid" alt="">
                                                                    <span class="text-white"> Whatsapp</span>
                                                                </a>
                                                            </button>
                                                        </div>
                                                        <div class="col-12 col-md-6 pb-2">
                                                            <button type="button" class="btn messageUs">
                                                                <a class="d-flex align-items-center" href="{{ route('kontak') }}">
                                                                    <img src="https://opuslab.works/images/ic_email.png" class="img-fluid" alt="">
                                                                    <span class="text-white"> Message</span>
                                                                </a>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-12 col-lg-3 col-xl-3 pt-3 pt-xl-0 d-flex">
                                                    <div class="row">
                                                        @if ($pivot_profil_media_sosial['status'] == 'ada')
                                                            @foreach ($pivot_profil_media_sosial['pivot'] as $item)
                                                                <div class="col">
                                                                    <a href="{{$item->tautan}}" class="d-block" target="_blank">
                                                                        <i class="{{$item->media_sosial->kode_ikon}}"></i>
                                                                    </a>
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--banner section end-->
                </div>

                <div class="col-12 col-lg-6 p-0 pt-4  d-none d-lg-block right_row_container">
                    <!--app section start-->
                    <div class="right_row px-2 pt-4 wow fadeInUp m-0" data-wow-duration=".5s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">
                        <div class="right_row_inner pt-3">
                            <div class="interactWithScreen active" id="interactWithScreen">
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
                            <div class="right_row_header px-sm-0 px-md-0 px-lg-0 px-0 pt-2">
                                <div class="row align-items-center position-relative mt-4">
                                    <h2 class="px-sm-0 text-center col-12 pb-3 mb-0">{{$produk->nama}}</h2>
                                </div>
                            </div>

                            <div class="tab-content position-relative" id="nav-tab">
                                <button class="btn spinner_box" type="button" disabled="" id="iframe_loader" style="display: none;">
                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    Please Wait
                                </button>

                                <div class="tab-pane fade show active text-center" id="user" role="tabpanel" aria-labelledby="user_tab">
                                    <iframe id="frame-0" src="https://www.figma.com/embed?embed_host=share&hide-ui=1&show-proto-sidebar=0&url={{$produk->url_figma}}" allowtransparency="true" frameborder="0" height="600px">
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
                <div class="tab-content ">
                    <div class=" tab-pane fade show active" role="tabpanel">
                        <div class="container-fluid col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="row">
                                @php
                                    function random_color_part() {
                                        return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
                                    }
                                    function random_color() {
                                        return random_color_part() . random_color_part() . random_color_part();
                                    }
                                    $kategori_produk = $produk->kategori_produk;
                                @endphp
                                @for ($i = 0; $i < count($kategori_produk); $i++)
                                    @php
                                        $guzzleClient = new GuzzleHttpClient();

                                        $get_kategori_razen_teknologis = $guzzleClient->get(env('RAZEN_URL').'api/product/razen-teknologi/product/kategori/'.$kategori_produk[$i]->id);
                                        $kategori_razen_teknologis = json_decode($get_kategori_razen_teknologis->getBody())->data;
                                    @endphp
                                    @foreach ($kategori_razen_teknologis as $kategori)
                                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                            <div class="card border-0" style="background: #{{random_color()}}">
                                                <a class="d-flex w-100" target="_blank" href="{{ route('aplikasi.detail', ['id'=>$kategori->id]) }}">
                                                    <div class="text-box">
                                                        <h2>{{$kategori->nama}}</h2>
                                                        <h3>{{strip_tags($kategori->deskripsi)}}</h3>
                                                    </div>
                                                    <div class="img_box">
                                                        <img src="{{ env('RAZEN_URL') }}storage/{{json_decode($kategori->gambar)[0]}}" alt="{{strip_tags($kategori->deskripsi)}}" class="img-fluid wow slideInUp animated" data-wow-duration=".5s" loading="lazy" style="visibility: visible; animation-duration: 0.5s; animation-name: slideInUp;">
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
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
</script>
@endsection

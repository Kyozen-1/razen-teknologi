@extends('landing-page.layouts.app')
@section('title', 'Razen Teknologi | Layanan | Swasta')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/layanan/swasta/animate.compat.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layanan/swasta/simple-line-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layanan/swasta/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layanan/swasta/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layanan/swasta/theme-elements.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layanan/swasta/theme-blog.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layanan/swasta/theme-shop.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layanan/swasta/demo-landing.css') }}">
    <link id="skinCSS" rel="stylesheet" href="{{ asset('css/layanan/swasta/skin-landing.css') }}">
    <script src="{{ asset('css/layanan/swasta/modernizr.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/layanan/swasta/style.css') }}">
@endsection

@section('content')
    @php
        use App\Models\LandingPageLayananSwasta;

        $layanan_pemerintahan = LandingPageLayananSwasta::first();

        $section_1 = json_decode($layanan_pemerintahan->section_1, true);
        $section_2 = json_decode($layanan_pemerintahan->section_2, true);
        $section_3 = json_decode($layanan_pemerintahan->section_3, true);
        $section_4 = json_decode($layanan_pemerintahan->section_4, true);
        $section_5 = json_decode($layanan_pemerintahan->section_5, true);
        $section_6 = json_decode($layanan_pemerintahan->section_6, true);
    @endphp
    <!-- breadcrumb area end -->
    <div role="main" class="main">
        <section class="section section-overlay-opacity section-overlay-opacity-scale-7 border-0 m-0" style="
                background-image: url(https://tech.razen.co.id/swasta/img/landing/header_bg.png);
                background-size: cover;
                background-position: center;
                ">
            <div class="container">
                <div class="row custom-header-min-height-1 align-items-center pt-5">
                    <div class="col-lg-5">
                        <h5 class="text-primary font-weight-bold mb-1 custom-letter-spacing-1"> {{$section_1?$section_1['sub_judul']:''}} </h5>
                        <h1 class="font-weight-bold text-12 line-height-2 mb-3 text-white">
                            {{$section_1?$section_1['judul']:''}}
                        </h1>
                        <p class="custom-font-size-1 pt-2 text-white"> {{$section_1?$section_1['deskripsi']:''}} </p>
                    </div>
                <div class="col-lg-6 offset-lg-1 mb-5">
                    <div class="position-relative border-width-10 border-color-light clearfix border border-radius">
                        <video id="presentation" class="float-start" width="100%" height="100%" muted="" playsinline="" loop="" preload="metadata" poster="https://tech.razen.co.id/swasta/video/presentation.jpg" data-auto-play="true">
                            <source src="{{ asset('video/swasta/'.$section_1['video']) }}" type="video/mp4">
                        </video>
                    </div>
                </div>
                </div>
            </div>
        </section>

        <div class="home-intro" id="home-intro">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 text-center">
                        <p class="mb-0" style="text-align: center"> {{$section_2?$section_2['deskripsi'] : ''}} </p>
                    </div>
                </div>
            </div>
        </div>

        <section class="section section-no-border section-light position-relative z-index-3 pt-0 m-0">
            <div class="container pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="my-3"></div>
                    <div class="col-lg-10 text-center offset-lg-1">
                        <h2 class="font-weight-bold text-9 text-black mb-0"> {{$section_3?$section_3['judul'] : ''}} </h2>
                    </div>
                    <div class="my-3"></div>
                    <div class="row">
                        <div class="col">
                            <div class="tabs tabs-bottom tabs-center tabs-simple">
                                <ul class="nav nav-tabs" role="tablist">
                                    @foreach ($produk_lengkaps as $produk_lengkap)
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link @if($loop->first) active @endif" href="#tabsNavigationSimple{{$produk_lengkap->id}}" data-bs-toggle="tab" @if($loop->first) aria-selected="true" @else aria-selected="false" tabindex="-1" @endif  role="tab">
                                                <img src="{{ asset('images/landing-page/layanan/swasta/data/produk-lengkap/'.$produk_lengkap->logo) }}" style="width: 250px" alt="">
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                                <div class="tab-content">
                                    @foreach ($produk_lengkaps as $produk_lengkap)
                                        <div class="tab-pane  @if($loop->first) active @endif" id="tabsNavigationSimple{{$produk_lengkap->id}}" role="tabpanel">
                                            <div class="row align-items-center">
                                                <div class="col-md-6 position-relative py-5">
                                                    <div class="appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="500" style="animation-delay: 500ms;">
                                                        <img class=" ls-is-cached lazyloaded" src="{{ asset('images/landing-page/layanan/swasta/porto_dots2.png') }}" data-src="{{ asset('images/landing-page/layanan/swasta/porto_dots2.png') }}" alt="" width="149" height="142" style="
                                                                    position: absolute;
                                                                    top: 90px;
                                                                    left: -20%;
                                                                ">
                                                    </div>
                                                    <div class="appear-animation animated fadeInLeftShorter appear-animation-visible" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="0" data-appear-animation-duration="750" style="animation-delay: 0ms;">
                                                        <div class="strong-shadow rounded strong-shadow-top-left">
                                                            <img src="{{ asset('images/landing-page/layanan/swasta/data/produk-lengkap/'.$produk_lengkap->gambar) }}" data-src="{{ asset('images/landing-page/layanan/swasta/data/produk-lengkap/'.$produk_lengkap->gambar) }}" class="img-fluid border border-width-10 border-color-light rounded box-shadow-3 ls-is-cached lazyloaded" alt="ERP">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="border-right-light border-sm-none">
                                                        <h4 class="mb-2">{{$produk_lengkap->judul}}</h4>
                                                        <p class="mb-2">{{$produk_lengkap->deskripsi}}</p>
                                                        <div class="call-to-action-btn appear-animation mt-3 animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                                                            <a href="{{$produk_lengkap->link}}" target="_blank" class="btn btn-primary font-weight-semibold px-3 py-2">Detail Produk</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-funnel position-relative border-0 pt-4 m-0">
            <div class="container">
                <div class="row mt-5 mb-5">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <h2 class="text-color-dark font-weight-semibold text-6 line-height-3 mb-3"> {{$section_4?$section_4['judul'] : ''}} </h2>
                        <p class="mt-lg-5">{{$section_4?$section_4['deskripsi'] : ''}}</p>
                        <div class="call-to-action-btn appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                            <a href="https://api.whatsapp.com/send?phone=6282299449494&amp;text=Hai%20Razen%20Teknologi,%20Saya%20dengan%20:................%20%20Dari%20:................%20Keperluan::................" target="_blank" class="btn btn-dark font-weight-semibold px-5 py-4">Pesan Sekarang</a>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center text-lg-start">
                        <img src="{{ asset('images/landing-page/layanan/swasta/'.$section_4['gambar']) }}" class="w-100" alt="list-product">
                    </div>
                </div>
            </div>
        </section>

        <section class="home-testimonial">
            <div class="container backgroun mt-3">
                <div class="col-lg-10 text-center offset-lg-1 mt-lg-4">
                    <h4 class="text-9 text-black mb-0"> {{$section_5?$section_5['judul'] : ''}} </h4>
                </div>
                <div class="gtco-testimonials">
                    <div class="owl-carousel owl-carousel1 owl-theme owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage" style="transition: all 0s ease 0s; width: 3720px; transform: translate3d(-744px, 0px, 0px);">
                                @if ($section_5['konten'] != '')
                                    @foreach ($section_5['konten'] as $item)

                                        <div class="owl-item @if($loop->first) active @endif" style="width: 372px;">
                                            <div class="card text-center">
                                                <div class="card-body">
                                                    <h5>{{$item['nama']}}</h5>
                                                    <p class="card-text"> {{$item['testimoni']}} </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="owl-nav">
                            <button type="button" role="presentation" class="owl-prev">
                                <span aria-label="Previous">‹</span>
                            </button>
                            <button type="button" role="presentation" class="owl-next">
                                <span aria-label="Next">›</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="call-to-action call-to-action-primary py-3 mt-5 appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" style="animation-delay: 100ms;">
            <div class="container">
                <div class="row py-5 my-5">
                    <div class="col-12">
                        <div class="call-to-action-content appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" style="animation-delay: 100ms;">
                            <h2 class="font-weight-normal text-color-light mb-2 text-center"> {{$section_6?$section_6['judul'] : ''}} </h2>
                            <p class="font-weight-light text-5 opacity-7 mb-0 text-center"> {{$section_6?$section_6['deskripsi'] : ''}} </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('js')
<script src="{{ asset('js/layanan/swasta/plugins.min.js') }}"></script>
<script src="{{ asset('js/layanan/swasta/theme.js') }}"></script>
<script src="{{ asset('js/layanan/swasta/view.contact.js') }}"></script>
<script src="{{ asset('js/layanan/swasta/theme.init.js') }}"></script>
<script>
    (function () {
        var carousels = function () {
            $(".owl-carousel1").owlCarousel({
            loop: true,
            center: true,
            margin: 0,
            responsiveClass: true,
            nav: false,
            responsive: {
                0: {
                items: 1,
                nav: false,
                },
                680: {
                items: 2,
                nav: false,
                loop: false,
                },
                1000: {
                items: 3,
                nav: true,
                },
            },
            });
        };

        (function ($) {
            carousels();
        })(jQuery);
        })();
</script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule="" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script>
    $(".card").click(function () {
        $(".card").removeClass("active");
        $(this).addClass("active");
    });
</script>
@endsection

@extends('landing-page.layouts.app')
@section('title', 'Razen Teknologi | Layanan | Startup')

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
        use App\Models\LandingPageLayananStartup;

        $layanan_startup = LandingPageLayananStartup::first();

        $section_1 = json_decode($layanan_startup->section_1, true);
        $section_2 = json_decode($layanan_startup->section_2, true);
        $section_3 = json_decode($layanan_startup->section_3, true);
        $section_4 = json_decode($layanan_startup->section_4, true);
        $section_5 = json_decode($layanan_startup->section_5, true);
        $section_6 = json_decode($layanan_startup->section_6, true);
        $section_7 = json_decode($layanan_startup->section_7, true);
    @endphp
    <div role="main" class="main">
        <section class="section section-concept section-no-border section-dark section-angled section-angled-reverse pt-5 m-0" id="section-concept" style="background-image: url({{ asset('images/landing-page/layanan/startup/'.$section_1['gambar']) }}); background-size: cover; background-position: center; animation-duration: 750ms; animation-delay: 300ms; animation-fill-mode: forwards;">
            <div class="section-angled-layer-bottom bg-light" style="padding: 8rem 0;"></div>
                <div class="container pt-5 mt-5">
                    <div class="row custom-header-min-height-1 align-items-center pt-3">
                        <div class="col-lg-5 mb-5">
                            <h5 class="text-primary font-weight-bold mb-1 custom-letter-spacing-1">{{$section_1?$section_1['sub_judul']:''}}</h5>
                            <h1 class="font-weight-bold text-12 line-height-2 mb-3">
                                {{$section_1?$section_1['judul']:''}}
                            </h1>
                            <p class="custom-font-size-1 pt-2">{{$section_1?$section_1['deskripsi']:''}}</p>
                            <a href="https://api.whatsapp.com/send?phone=6282299449494&amp;text=Halo%20kak,%20saya%20ingin%20membahas%20sebuah%20proyek" data-hash="" data-hash-offset="0" data-hash-offset-lg="100" class="btn btn-gradient-primary border-primary btn-effect-4 font-weight-semi-bold px-4 btn-py-2 text-3">Hubungi Kami <i class="fas fa-phone ms-1"></i>
                            </a>
                            <a href="#" class="btn btn-light btn-outline btn-outline-thin btn-outline-light-opacity-2 btn-effect-5 font-weight-semi-bold px-4 btn-py-2 text-3 text-color-light text-color-hover-dark ms-2" target="_blank">Lihat Produk <i class="fas fa-external-link-alt ms-1"></i>
                            </a>
                        </div>
                        <div class="col-lg-6 offset-lg-1 mb-5">
                            <div class="position-relative border-width-5 border-color-dark clearfix border border-radius" data-remove-min-height="" style="min-height: 0px;">
                                <video id="presentation" class="float-start" width="100%" height="100%" muted="" playsinline="" loop="" preload="metadata" poster="https://tech.razen.co.id/rintisan-startup/video/presentation.jpg" data-auto-play="true" __idm_id__="761857">
                                    <source src="{{ asset('video/swasta/'.$section_1['video']) }}" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="intro" class="section section-no-border bg-light pt-0 pb-4 m-0">
            <div class="container">
                <div class="row pb-lg-3 counters">
                    <div class="col-lg-10 text-center offset-lg-1">
                        <h2 class="font-weight-bold text-9 mb-0 text-center">{{$section_2?$section_2['sub_judul']:''}}</h2>
                        <p class="sub-title text-primary text-4 font-weight-semibold positive-ls-2 mt-2 mb-4 text-center">
                            {{$section_2?$section_2['judul']:''}}
                        </p>
                        <p class="text-1rem text-color-default negative-ls-05 pt-3 pb-4 mb-5 text-center">
                            {{$section_2?$section_2['deskripsi']:''}}
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-no-border pb-0 mt-3 mb-0">
            <div class="container pt-4 pb-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-4">
                        <h2 class="text-7 font-weight-semibold line-height-2 mb-2">{{$section_3?$section_3['judul'] : ''}}</h2>
                        <p>{{$section_3?$section_3['deskripsi'] : ''}}</p>
                    </div>
                    @if ($section_3['konten'] != '')
                        @foreach ($section_3['konten'] as $item)
                            <div class="col-sm-4 col-lg-auto icon-box text-center mb-4">
                                <i class="icon-bg {{$item['ikon']}}"></i>
                                <h4 class="font-weight-bold custom-font-size-2 line-height-3 mb-0">{{$item['judul']}}</h4>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>

        <section class="section section-no-border section-light position-relative z-index-3 pt-0 m-0">
            <div class="container pt-4">
                <div class="row align-items-center justify-content-between mb-3">
                    <div class="col-lg-10 text-center offset-lg-1">
                        <h2 class="font-weight-bold text-9 mb-0 text-center">{{$section_4?$section_4['judul']:''}} </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="tabs tabs-bottom tabs-center tabs-simple">
                            <ul class="nav nav-tabs" role="tablist">
                                @foreach ($produk_rintisan_unggulan as $item)
                                    <li class="nav-item @if($loop->first) active @endif" role="presentation">
                                        <a class="nav-link @if($loop->first) active @endif" href="#tabsNavigationSimple{{$item->id}}" data-bs-toggle="tab" @if($loop->first) aria-selected="true" @else aria-selected="false" tabindex="-1" @endif role="tab">{{$item->judul}}</a>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="tab-content">
                                @foreach ($produk_rintisan_unggulan as $item)
                                <div class="tab-pane @if($loop->first) active show @endif" id="tabsNavigationSimple{{$item->id}}" role="tabpanel">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            <div class="border-right-light border-sm-none">
                                            <h4 class="mb-2">{{$item->judul}}</h4>
                                            <p class="mb-2">{{$item->deskripsi}}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mx-auto">
                                            <div class="cascading-images-wrapper">
                                                <div class="cascading-images position-relative">
                                                    <img src="{{ asset('images/landing-page/layanan/startup/data/produk-rintisan-unggulan/'.$item->gambar) }}" class="appear-animation box-shadow-3 animated expandIn appear-animation-visible" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-duration="600ms" style="animation-duration: 600ms; animation-delay: 100ms;">
                                                    <div class="position-absolute w-100" style="top: 41%; left: -30%;">
                                                        <img src="{{ asset('images/landing-page/layanan/startup/data/produk-rintisan-unggulan/'.$item->gambar_2) }}" class="appear-animation box-shadow-3 animated expandIn appear-animation-visible" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-delay="300" data-appear-animation-duration="600ms" style="animation-duration: 600ms; animation-delay: 300ms;">
                                                    </div>
                                                    <div class="position-absolute w-100" style="top: 75%; left: 30%;">
                                                        <img src="{{ asset('images/landing-page/layanan/startup/data/produk-rintisan-unggulan/'.$item->gambar_3) }}" class="appear-animation box-shadow-3 animated expandIn appear-animation-visible" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-delay="600" data-appear-animation-duration="600ms" style="animation-duration: 600ms; animation-delay: 600ms;">
                                                    </div>
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
        </section>

        <section class="section section-funnel position-relative border-0 pt-0 m-0">
            <div class="container pb-5 mb-5">
                <h2 class="fotn-weight-extra-bold mb-1 text-center">
                    <div class="py-5"></div>
                    <span class="font-weight-bold text-5 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" data-appear-animation-duration="750" style="animation-delay: 600ms;">{{$section_5?$section_5['sub_judul']:''}}</span>
                </h2>
                <p class="font-weight-bold text-4 text-center appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750" style="animation-delay: 750ms;">{{$section_5?$section_5['judul']:''}}</p>

                <div class="appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="850" data-appear-animation-duration="850" style="animation-delay: 850ms;">
                    <p class="text-default text-center mb-4">{{$section_5?$section_5['deskripsi']:''}}</p>

                    <div class="owl-carousel carousel-center-active-item-2 nav-style-4 mb-4 pb-3 owl-theme owl-loaded owl-drag owl-carousel-init" data-plugin-options="{'items': 1, 'loop': true, 'nav': false, 'dots': false}" style="height: auto;">
                        <div class="owl-stage-outer">
                            <div class="owl-stage" style="transform: translate3d(-5580px, 0px, 0px); transition: all 0s ease 0s; width: 21204px;">
                                @foreach ($produk_rintisan as $item)
                                    <div class="owl-item @if($loop->first) active @endif" style="width: 1116px;">
                                        <div>
                                            <div class="d-flex flex-column flex-md-row justify-content-between mb-4">
                                            <div>
                                                <h4 class="text-5 mb-0">{{$item->nama}}</h4>
                                                <span class="opacity-7">Startup Rintisan</span>
                                            </div>
                                            <span class="star-rating">
                                                <i class="fas fa-star text-color-dark"></i>
                                                <i class="fas fa-star text-color-dark"></i>
                                                <i class="fas fa-star text-color-dark"></i>
                                                <i class="fas fa-star text-color-dark"></i>
                                                <i class="fas fa-star text-color-dark"></i>
                                            </span>
                                            </div>
                                            <img class="card-img-top" src="{{ asset('images/landing-page/layanan/startup/data/produk-rintisan/'.$item->gambar) }}" alt="Card Image">
                                            <div class="py-2"></div>
                                            <p class="mb-0">{{$item->deskripsi}}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-center mb-5">
                    <a class="btn btn-dark btn-modern btn-rounded btn-px-5 btn-py-3 text-2 appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="250" data-appear-animation-duration="600" href="https://api.whatsapp.com/send?phone=6282299449494&amp;text=Halo%20kak,%20saya%20ingin%20membahas%20sebuah%20proyek" target="_blank" style="animation-delay: 250ms;">HUBUNGI KAMI</a>
                </p>
            </div>
            <div class="section-funnel-layer-bottom">
                <div class="section-funnel-layer bg-light"></div>
                <div class="section-funnel-layer bg-light"></div>
            </div>
        </section>

        <section id="support" class="section section-angled bg-light border-0 m-0 position-relative pt-0">
            <div class="container pb-5 mb-5">
                <div class="row align-items-center mb-5">
                    <div class="col-lg-6 pe-xl-5 mb-5 mb-lg-0">
                        <h2 class="font-weight-bold text-9 mb-1">{{$section_6?$section_6['judul'] : ''}}</h2>
                        <p class="ls-0 text-default fw-400 mb-5">{{$section_6?$section_6['deskripsi'] : ''}}</p>

                        @if ($section_6['konten'] != '')
                            @foreach ($section_6['konten'] as $item)
                                <div class="d-flex align-items-center pb-4 mb-4">
                                    <i class="fa fa-check text-color-primary bg-light rounded-circle box-shadow-4 p-2 me-3"></i>
                                    <p class="mb-0">
                                        {{$item['judul']}}
                                    </p>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="col-lg-4 offset-lg-2 position-relative">
                        <img alt="Porto Support" src="{{ asset('images/landing-page/layanan/startup/'.$section_6['gambar']) }}" data-src="{{ asset('images/landing-page/layanan/startup/'.$section_6['gambar']) }}" class="img-fluid border border-width-10 border-color-light rounded box-shadow-3 ms-5 appear-animation lazyloaded animated fadeInUp appear-animation-visible" data-appear-animation="fadeInUp" data-appear-animation-delay="200" style="width: 590px; max-width: none; animation-delay: 200ms;">
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-dark section-angled border-0 pb-0 m-0 lazyloaded" style="background-size: 100%; background-position: center top; background-image: url(&quot;https://tech.razen.co.id/rintisan-startup/img/landing/build_bg.jpg&quot;);" data-bg-src="https://tech.razen.co.id/rintisan-startup/img/landing/build_bg.jpg">
            <div class="section-angled-layer-top section-angled-layer-increase-angle bg-color-light-scale-1" style="padding: 4rem 0;"></div>
                <div class="container text-center my-5 py-5">
                    <h2 class="font-weight-bold line-height-3 text-12 mt-5 mb-3 appear-animation animated fadeInUpShorter appear-animation-visible text-center" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250" data-appear-animation-duration="750" style="animation-delay: 250ms;">{{$section_7?$section_7['judul']:''}}</h2>
                    <div class="appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900" data-appear-animation-duration="750" style="animation-delay: 900ms;">
                        <h4 class="font-weight-light text-4 col-lg-6 px-0 offset-lg-3 fw-400 mb-5 opacity-8 text-center">{{$section_7?$section_7['deskripsi']:''}}</h4>
                    </div>
                    <div class="col-12 px-0 pb-2 mb-4">
                        <div class="row flex-column flex-lg-row justify-content-center">
                            <div class="col-auto">
                            <h5 class="font-weight-semibold text-4 positive-ls-2 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1100" data-appear-animation-duration="750" style="animation-delay: 1100ms;">
                                <i class="fa fa-check"></i> SUPER HIGH PERFORMANCE
                            </h5>
                            </div>
                            <div class="col-auto mx-5 my-2 my-lg-0">
                            <h5 class="font-weight-semibold text-4 positive-ls-2 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1400" data-appear-animation-duration="750" style="animation-delay: 1400ms;">
                                <i class="fa fa-check"></i> Strict Coding Standards
                            </h5>
                            </div>
                            <div class="col-auto">
                            <h5 class="font-weight-semibold text-4 positive-ls-2 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1600" data-appear-animation-duration="750" style="animation-delay: 1600ms;">
                                <i class="fa fa-check"></i> Free Updates
                            </h5>
                            </div>
                        </div>
                    </div>
                    <a href="https://api.whatsapp.com/send?phone=6282299449494&amp;text=Halo%20kak,%20saya%20ingin%20membahas%20sebuah%20proyek" class="btn btn-dark btn-modern btn-rounded px-5 btn-py-3 text-4 appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="1800" data-appear-animation-duration="750" target="_blank" style="animation-delay: 1800ms;">BUY PRODUCT NOW</a>
                </div>
                <div class="row border border-start-0 border-bottom-0 border-end-0 border-color-light-2">
                    <div class="col-6 col-md-4 text-center divider-left-border border-color-light-2 d-flex align-items-center justify-content-center py-4">
                        <a href="#" class="text-decoration-none" target="_blank">
                            <div class="icon-box">
                            <i class="icon-bg icon-menu-2"></i>
                            <h4 class="text-4 mb-0">Support Center</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 text-center divider-left-border border-color-light-2 d-flex align-items-center justify-content-center py-4">
                        <a href="#" class="text-decoration-none" target="_blank">
                            <div class="icon-box">
                            <i class="icon-bg icon-menu-3"></i>
                            <h4 class="text-4 mb-0">Online Documentation</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 text-center divider-left-border border-color-light-2 d-flex align-items-center justify-content-center py-4 opacity-5">
                        <a href="#" class="text-decoration-none" target="_blank">
                            <div class="icon-box">
                            <i class="icon-bg icon-menu-4"></i>
                            <h4 class="font-weight-500 text-color-light line-height-1 text-4 mt-0 mb-2">Video Tutorials <br>
                                <span class="text-2 d-block pt-1">(coming soon)</span>
                            </h4>
                            </div>
                        </a>
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
@endsection

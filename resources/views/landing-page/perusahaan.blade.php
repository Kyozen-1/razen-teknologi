@extends('landing-page.layouts.app')
@section('title', 'Razen Teknologi | Perusahaan')

@section('content')
    @php
        use App\Models\LandingPagePerusahaan;

        $perusahaan = LandingPagePerusahaan::first();

        $section_1 = json_decode($perusahaan->section_1, true);
        $section_2 = json_decode($perusahaan->section_2, true);
        $section_3 = json_decode($perusahaan->section_3, true);
        $section_4 = json_decode($perusahaan->section_4, true);
        $section_5 = json_decode($perusahaan->section_5, true);
    @endphp
    <!-- breadcrumb area start -->
    <section class="breadcrumb pt-150 pb-150 bg_img" data-background="{{ asset('images/landing-page/perusahaan/'.$section_1['gambar']) }}" data-overlay="dark" data-opacity="5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb__wrap">
                        <h2 class="title">Perusahaan Kami.</h2>
                        <div class="breadcrumb__nav">
                            <ul>
                                <li><span>//</span></li>
                                <li><a href="{{ route('beranda') }}">Beranda</a></li>
                                <li>|</li>
                                <li>perusahaan</li>
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
    <div class="cta__area cta__area--4 bg_img" data-background="{{ asset('images/landing-page/perusahaan/'.$section_2['gambar']) }}" data-overlay="dark"
        data-opacity="5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 text-center">
                    <a href="{{$section_2?$section_2['tautan'] : ''}}" data-rel="lightcase:myCollection"
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
                        <img src="{{ asset('images/landing-page/perusahaan/'.$section_3['gambar_kecil']) }}" data-tilt data-tilt-perspective="3000" alt="">
                        <img class="f-right" src="{{ asset('images/landing-page/perusahaan/'.$section_3['gambar_besar']) }}" data-tilt data-tilt-perspective="3000" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 pl-20 mt-70">
                    <div class="section__heading mb-30">
                        <h4 class="section__heading--title-small"><span class="mr-10">//</span>{{$section_3?$section_3['sub_judul'] : ''}}</h4>
                        <h2 class="section__heading--title">{{$section_3?$section_3['judul'] : ''}}</h2>
                        <div class="section__heading--content mt-20">
                            {!!$section_3?$section_3['deskripsi_judul'] : ''!!}
                        </div>
                    </div>
                    <div class="about__box about__box--2">
                        {!! $section_3?$section_3['deskripsi'] : '' !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about area end -->

    {{-- <!-- department area start -->
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
    <!-- department area end --> --}}

    <!-- support area start -->
    <section class="support__area support__area--2 pt-95 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 text-center">
                    <div class="section__heading white mb-60">
                        <h4 class="section__heading--title-small"><span class="mr-10">//</span>services<span
                                class="ml-10">//</span></h4>
                        <h1 class="section__heading--transparent">{{$section_4?$section_4['sub_judul']:'' }}</h1>
                        <h2 class="section__heading--title">{{$section_4?$section_4['judul']:'' }}</h2>
                    </div>
                </div>
            </div>
            <div class="row custom-row mt-none-30">
                @foreach ($layanan_perusahaans as $layanan_perusahaan)
                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mt-30">
                        <div class="support__box">
                            <div class="icon">
                                <img src="{{ asset('images/razen-teknologi/layanan-perusahaan/'.$layanan_perusahaan->gambar_default) }}" class="default" alt="">
                                <img src="{{ asset('images/razen-teknologi/layanan-perusahaan/'.$layanan_perusahaan->gambar_hover) }}" class="hover" alt="">
                            </div>
                            <div class="content">
                                <h2 class="title mb-15">{{$layanan_perusahaan->judul}}</h2>
                                <p>{{$layanan_perusahaan->deskripsi}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
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
                        <h4 class="section__heading--title-small"><span class="mr-10">//</span>{{$section_5?$section_5['sub_judul']:'' }}</h4>
                        <h2 class="section__heading--title">{{$section_5?$section_5['judul']:'' }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="team-carousel owl-carousel">
                        @foreach ($tims as $tim)
                            <div class="team__box">
                                <div class="thumb">
                                    <img src="{{ asset('images/razen-teknologi/tim/'.$tim['foto']) }}" alt="">
                                    <div class="social__icons">
                                        @foreach ($tim['pivot'] as $item)
                                        <a href="{{$item['tautan']}}"><i class="{{$item['kode_ikon']}}"></i></a>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="content">
                                    <span class="designation">{{$tim['jabatan']}}</span>
                                    <h4 class="name">{{$tim['nama']}}</h4>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tema area end -->
@endsection

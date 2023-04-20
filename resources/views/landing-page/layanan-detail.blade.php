@extends('landing-page.layouts.app')
@section('title', 'Razen Teknologi | Layanan | Detail')

@section('content')
    @php
        use App\Models\LandingPageLayanan;

        $layanan = LandingPageLayanan::first();

        $section_1 = json_decode($layanan->section_1, true);
    @endphp
    <!-- breadcrumb area start -->
    <section class="breadcrumb pt-150 pb-150 bg_img" data-background="{{ asset('images/landing-page/layanan/'.$section_1['gambar']) }}"
        data-overlay="dark" data-opacity="5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb__wrap">
                        <h2 class="title">Detail Layanan</h2>
                        <div class="breadcrumb__nav">
                            <ul>
                                <li><span>//</span></li>
                                <li><a href="{{ route('beranda') }}">Beranda</a></li>
                                <li>|</li>
                                <li>Detail</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- about area start -->
    <section class="about__area about__area--7 pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 pr-55">
                    <div class="about__bg about__bg--7 bg_img" data-background="{{ asset('techbuzz/assets/images/bg/about-bg-2.jpeg') }}">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 pl-20">
                    <div class="about__wrap about__wrap--4">
                        <div class="section__heading mb-35">
                            <h4 class="section__heading--title-small"><span class="mr-10">//</span>{{$data_layanan->judul_kecil}}</h4>
                            <h2 class="section__heading--title">{{$data_layanan->judul}}</h2>
                            <div class="section__heading--content mt-20">
                                <p>{{$data_layanan->deskripsi}}</p>
                            </div>
                        </div>
                        <div class="row mt-none-20">
                            <div class="col-xl-12 mt-20">
                                <ul class="service__box--lists">
                                    @foreach ($data_layanan->daftar_layanan as $item)
                                    `<li><span class="icon"><i class="fal fa-check"></i></span> {{$item['judul']}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <a href="{{ route('kontak') }}" class="site-btn">Ayo Mulai Sekarang <span>+ </span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about area end -->

    <!-- feature area start -->
    <section class="feature-area grey-bg pt-95 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 text-center">
                    <div class="section__heading mb-60">
                        <h4 class="section__heading--title-small"><span class="mr-10">//</span>Kenapa Memilih Kami<span class="ml-10">//</span>
                        </h4>
                        <h1 class="section__heading--transparent white">Features</h1>
                        <h2 class="section__heading--title">{{$data_layanan->fitur_layanan[0]['judul']}}</h2>
                    </div>
                </div>
            </div>
            <div class="row mt-none-30">
                @php
                    $a = 1;
                @endphp
                @foreach ($data_layanan->fitur_layanan[0]['item'] as $item)
                    <div class="col-xl-6 col-lg-6 col-md-6 mt-30">
                        <div class="feature__box">
                            <h4 class="title"><span>{{$a++}}</span> {{$item['judul']}}</h4>
                            <p>{{$item['deskripsi']}}</p>
                            <div class="icon">
                                <img src="{{ asset('techbuzz/assets/images/icons/feature-icon.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- feature area end -->
@endsection

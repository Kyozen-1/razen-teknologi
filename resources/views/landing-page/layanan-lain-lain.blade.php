@extends('landing-page.layouts.app')
@section('title', 'Razen Teknologi | Layanan | Lain - Lain')

@section('content')
    @php
        use App\Models\LandingPageLayanan;

        $layanan = LandingPageLayanan::first();

        $section_1 = json_decode($layanan->section_1, true);
        $section_2 = json_decode($layanan->section_2, true);
    @endphp
    <!-- breadcrumb area start -->
    <section class="breadcrumb pt-150 pb-150 bg_img" data-background="{{ asset('images/landing-page/layanan/'.$section_1['gambar']) }}"
        data-overlay="dark" data-opacity="5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb__wrap">
                        <h2 class="title">Layanan Kami.</h2>
                        <div class="breadcrumb__nav">
                            <ul>
                                <li><span>//</span></li>
                                <li><a href="{{ route('beranda') }}">Beranda</a></li>
                                <li>|</li>
                                <li>Layanan</li>
                                <li>|</li>
                                <li>Lain - Lain</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- service area start -->
    <section class="service-area pt-100 pb-100">
        <div class="container">
            <div class="row mt-none-30">
                @foreach ($layanans as $layanan)
                    <div class="col-xl-4 col-lg-6 col-md-12 mt-30 text-center">
                        <div class="service__box service__box--2 service__box--3 service__box--4">
                            <div class="icon">
                                <img src="{{ asset('images/razen-teknologi/layanan/'.$layanan->ikon) }}" alt="">
                            </div>
                            <div class="content">
                                <h2 class="title mb-15">{{$layanan->judul_kecil}}</h2>
                                <p>{{$layanan->deskripsi}}</p>
                            </div>
                            <a href="{{ route('layanan.detail', ['id'=>1]) }}" class="inline-btn mt-15">Baca Lebih Lanjut</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- service area end -->

    <!-- cta area start -->
    <section class="cta__area cta__area--2 cta__area--3 pt-95 pb-95 bg_img" data-background="{{ asset('images/landing-page/layanan/'.$section_2['gambar']) }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="section__heading mb-40">
                        <h4 class="section__heading--title-small"><span class="mr-10">//</span> {{$section_2?$section_2['sub_judul']:'' }}</h4>
                        <h2 class="section__heading--title">{{$section_2?$section_2['judul']:'' }}</h2>
                            <div class="section__heading--content mt-20">
                                {!!$section_2?$section_2['deskripsi']:'' !!}
                            </div>
                    </div>
                </div>
                <div class="col-xl-6 text-right">
                    <a href="{{ route('kontak') }}" class="site-btn mt-95">Ayo Mulai Sekarang <span>+</span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- cta area end -->
@endsection

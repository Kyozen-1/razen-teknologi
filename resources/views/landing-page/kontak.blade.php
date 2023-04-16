@extends('landing-page.layouts.app')
@section('title', 'Razen Teknologi | Kontak')

@section('content')
    @php
        use App\Models\LandingPageKontak;
        use App\Models\Profil;

        $kontak = LandingPageKontak::first();
        $profil = Profil::first();

        $section_1 = json_decode($kontak->section_1, true);
    @endphp
    <!-- breadcrumb area start -->
    <section class="breadcrumb pt-150 pb-150 bg_img" data-background="{{ asset('images/landing-page/kontak/'.$section_1['gambar']) }}"
        data-overlay="dark" data-opacity="5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb__wrap">
                        <h2 class="title">Kontak Kami</h2>
                        <div class="breadcrumb__nav">
                            <ul>
                                <li><span>//</span></li>
                                <li><a href="{{ route('beranda') }}">Beranda</a></li>
                                <li>|</li>
                                <li>Kontak</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- cotact area start -->
    <div class="contact__area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="contact__wrap pt-95 pb-95">
                        <div class="row justify-content-center">
                            <div class="col-xl-10">
                                <div class="contact__form">
                                    <form action="{{ route('kontak-kami') }}" method="POST">
                                        @csrf
                                        <div class="row mt-none-30">
                                            <div class="col-xl-6 mt-30">
                                                <div class="form__group">
                                                    <label for="nama"><i class="fal fa-user"></i></label>
                                                    <input name="nama" type="text" id="nama" placeholder="Masukan nama anda">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 mt-30">
                                                <div class="form__group">
                                                    <label for="email"><i class="fal fa-envelope"></i></label>
                                                    <input name="email" type="email" id="email" placeholder="Masukkan email">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 mt-30">
                                                <div class="form__group">
                                                    <label for="no_hp"><i class="fal fa-phone"></i></label>
                                                    <input name="no_hp" type="tel" id="no_hp" placeholder="Masukan Nomor HP">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 mt-30">
                                                <div class="form__group">
                                                    <label for="subjek"><i class="fal fa-book"></i></label>
                                                    <input name="subjek" type="text" id="subjek" placeholder="Masukan subjek">
                                                </div>
                                            </div>
                                            <div class="col-xl-12 mt-30">
                                                <div class="form__group">
                                                    <label for="message"><i class="fal fa-pen"></i></label>
                                                    <textarea name="message" id="message" placeholder="Masukan pesan"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 mt-30 text-center">
                                                <button class="site-btn" type="submit">Dapatkan Konsultasi Gratis</button>
                                                <p class="ajax-response mt-15" style="color: #fff;"></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cotact area end -->

    <!-- contact info area start -->
    <div class="contactinfo__area">
        <div class="container">
            <div class="row mt-none-30">
                <div class="col-xl-4 col-lg-6 mt-30">
                    <div class="contact__info">
                        <div class="icon">
                            <i class="fal fa-map"></i>
                            <span><i class="fal fa-check"></i></span>
                        </div>
                        <div class="content">
                            <h2 class="title">Alamat Kantor</h2>
                            <p>{{$profil->alamat}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 mt-30">
                    <div class="contact__info contact__info--black">
                        <div class="icon">
                            <i class="fal fa-phone"></i>
                            <span><i class="fal fa-check"></i></span>
                        </div>
                        <div class="content">
                            <h2 class="title">Nomor HP</h2>
                            <a href="tel:{{$profil->no_hp}}">{{$profil->no_hp}}</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 mt-30">
                    <div class="contact__info contact__info--blue">
                        <div class="icon">
                            <i class="fal fa-globe"></i>
                            <span><i class="fal fa-check"></i></span>
                        </div>
                        <div class="content">
                            <h2 class="title">Email</h2>
                            <a href="mailto:{{$profil->email}}">{{$profil->email}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact info area end -->

    <!-- contact-map -->
    <div id="contact-map">
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=razen%20teknologi&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                <a href="https://123movies-i.net">lethal weapon 1987 123movies</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}</style><a href="https://www.embedgooglemap.net">embedding google maps into website</a>
                <style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style>
            </div>
        </div>
    </div>
    <!-- contact-map-end -->
@endsection

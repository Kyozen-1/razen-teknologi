@php
    use App\Models\Profil;
    use Carbon\Carbon;

    $profil = Profil::first();
@endphp
<!-- footer area start -->
<footer class="site-footer bg_img pt-100" data-background="{{ asset('techbuzz/assets/images/pattern/footer-pattern.png') }}">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 text-center">
                <a href="index.html" class="site-logo mb-50">
                    <img src="{{ asset('images/razen-teknologi/logo/'.$profil->logo) }}" alt="Logo">
                </a>
            </div>
            <div class="col-xl-12">
                <div class="footer-top mt-50 mb-80">
                    <div class="footer__info">
                        <div class="footer__info--item d-flex align-items-center">
                            <div class="icon mr-20">
                                <img src="{{ asset('techbuzz/assets/images/icons/footer-info-icon-1.png') }}" alt="">
                            </div>
                            <div class="content">
                                <h4 class="title">Nomor HP</h4>
                                <a href="tel:{{$profil->no_hp}}">{{$profil->no_hp}}</a>
                            </div>
                        </div>
                        <div class="footer__info--item d-flex align-items-center">
                            <div class="icon mr-20">
                                <img src="{{ asset('techbuzz/assets/images/icons/footer-info-icon-2.png') }}" alt="">
                            </div>
                            <div class="content">
                                <h4 class="title">Email</h4>
                                <a href="mailto:{{$profil->email}}">{{$profil->email}}</a>
                            </div>
                        </div>
                        <div class="footer__info--item d-flex align-items-center">
                            <div class="icon mr-20">
                                <img src="{{ asset('techbuzz/assets/images/icons/footer-info-icon-3.png') }}" alt="">
                            </div>
                            <div class="content">
                                <h4 class="title">Alamat Kantor</h4>
                                <span>{{$profil->alamat}}</span>
                            </div>
                        </div>
                    </div>
                    <button id="scroll-top" class="site-btn transparent"><i class="fal fa-long-arrow-up"></i> <span>Back To Top</span> <i class="fal fa-long-arrow-up"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-none-30">
            <div class="col-xl-4 col-lg-6 col-md-12 mt-30">
                <div class="footer__widget">
                    <h4 class="title mb-30">Halaman</h4>
                    <div class="row no-gutters">
                        <div class="col">
                            <ul>
                                <li><a href="{{ route('beranda') }}">Beranda</a></li>
                                <li><a href="{{ route('perusahaan') }}">Perusahaan</a></li>
                                <li><a href="{{ route('layanan') }}">Layanan</a></li>
                                <li><a href="https://shop.razen.co.id/">E-Commerce</a></li>
                                <li><a href="{{ route('aplikasi') }}">Aplikasi</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-sm-6 col-6 mt-30">
                <div class="footer__widget">
                    <h4 class="title mb-30">Bantuan</h4>
                    <ul>
                        <li><a href="#0">Bantuan & FAQ</a></li>
                        <li><a href="{{ route('kontak') }}">Kontak Kami</a>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 mt-30">
                <div class="footer__widget">
                    <h4 class="title mb-30">News Feeds</h4>
                    <div class="newsfeed__wrap">
                        <div class="newsfeed__item mb-20">
                            <div class="thumb">
                                <img src="{{ asset('techbuzz/assets/images/news/news-small-3.jpeg') }}" alt="">
                            </div>
                            <div class="content">
                                <ul class="meta">
                                    <li><a href="#0"><i class="fal fa-calendar-alt"></i> 24th June 2020</a></li>
                                </ul>
                                <h4 class="title"><a href="news-details.html">We are specialists in both
                                economics and information</a></h4>
                            </div>
                        </div>
                        <div class="newsfeed__item">
                            <div class="thumb">
                                <img src="{{ asset('techbuzz/assets/images/news/news-small-4.jpeg') }}" alt="">
                            </div>
                            <div class="content">
                                <ul class="meta">
                                    <li><a href="#0"><i class="fal fa-calendar-alt"></i> 24th June 2020</a></li>
                                </ul>
                                <h4 class="title"><a href="news-details.html">We are specialists in both
                                economics and information</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="copyright-text mt-60">
                    <div class="row">
                        <div class="col-xl-12 text-center">
                            <p>Copyright By {{$profil->pt}} - <span>{{Carbon::now()->year}}</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->

<!-- Fullscreen search -->
<div class="search-wrap">
    <div class="search-inner">
        <i class="fal fa-times search-close" id="search-close"></i>
        <div class="search-cell">
            <form method="get">
                <div class="search-field-holder">
                    <input type="search" class="main-search-input" placeholder="Search Your Keyword...">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end fullscreen search -->

@php
    use App\Models\Profil;

    $profil = Profil::first();
@endphp

<header class="header">
    <div class="header__top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-7 col-md-12">
                    <div class="header__top--info">
                        <ul>
                            <li><a href="mailto:{{$profil->email}}"><span class="icon"><i class="fal fa-envelope"></i></span> {{$profil->email}}</a></li>
                            <li><a href="tel:{{$profil->no_hp}}"><span class="icon"><i class="fal fa-phone"></i></span> {{$profil->no_hp}}</a></li>
                        </ul>
                    </div>
                </div>
                {{-- <div class="col-xl-6 col-lg-5 col-md-12">
                    <div class="header__top--info--right">
                        <div class="lang">
                            <div class="lang__icon">
                                <a href="#0" class="lang__btn">English <i class="fal fa-angle-down"></i></a>
                                <ul class="lang__list">
                                    <li><a href="#0">USA</a></li>
                                    <li><a href="#0">UK</a></li>
                                    <li><a href="#0">CA</a></li>
                                    <li><a href="#0">AU</a></li>
                                </ul>
                            </div>
                        </div>
                        <a href="careers.html" class="job-btn"><i class="fal fa-briefcase"></i> Get Job Feeds</a>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="navarea">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-4 my-auto">
                    <div class="header__logo">
                        <a href="index.html">
                            <img src="{{ asset('images/razen-teknologi/logo/'.$profil->logo) }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-10 col-lg-10">
                    <div class="header__menu">
                        <nav id="mobile-menu">
                            <ul>
                                @if (request()->routeIs('beranda'))
                                <li class="active">
                                @else
                                <li>
                                @endif
                                    <a href="{{ route('beranda') }}">Beranda</a>
                                </li>

                                @if (request()->routeIs('perusahaan'))
                                <li class="active">
                                @else
                                <li>
                                @endif
                                    <a href="{{ route('perusahaan') }}">Perusahaan</a>
                                </li>

                                <li><a href="#">Layanan<span>+</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('layanan.pemerintahan') }}">Pemerintahan</a></li>
                                        <li><a href="{{route('layanan.swasta')}}">Swasta</a></li>
                                        <li><a href="{{route('layanan.startup')}}">Startup</a></li>
                                        <li><a href="{{route('layanan.lain-lain')}}">Lain - Lain</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="https://shop.razen.co.id/stores/razen-teknologi">E - Commerce</a>
                                </li>

                                <li>
                                    <a href="#">E - Learning</a>
                                </li>

                                @if (request()->routeIs('aplikasi'))
                                <li class="active">
                                @else
                                <li>
                                @endif
                                    <a href="{{ route('aplikasi') }}">Aplikasi</a>
                                </li>

                                <li>
                                    <a href="#">Blog</a>
                                </li>

                                @if (request()->routeIs('kontak'))
                                <li class="active">
                                @else
                                <li>
                                @endif
                                    <a href="{{ route('kontak') }}">Kontak</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="mobile-menu"></div>
                    </div>
                </div>
                {{-- <div class="col-xl-3 col-lg-3 col-md-8 my-auto d-none d-xl-block d-lg-block">
                    <div class="navarea__right">
                        <a href="contact.html" class="site-btn">Get A Quote <span>+</span></a>
                        <button class="search-trigger">
                            <i class="fal fa-search"></i>
                        </button>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</header>

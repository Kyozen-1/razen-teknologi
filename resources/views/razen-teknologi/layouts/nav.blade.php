@php
    use App\Models\Profil;

    $profil = Profil::first();
@endphp
<div id="nav" class="nav-container d-flex">
    <div class="nav-content d-flex">
        <!-- Logo Start -->
        <div class="logo position-relative">
            <a href="index.html">
            <!-- Logo can be added directly -->
            <img src="{{ asset('images/razen-teknologi/logo/642b9aa063e73-230404.png') }}" alt="logo" />

            <!-- Or added via css to provide different ones for different color themes -->
            {{-- <div class="img"></div> --}}
            </a>
        </div>
        <!-- Logo End -->

        <!-- User Menu Start -->
        <div class="user-container d-flex">
            <a href="#" class="d-flex user position-relative" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="profile" alt="profile" src="{{ asset('acorn/acorn-elearning-portal/img/profile/profile-3.webp') }}" height="1rem"/>
            <div class="name">{{$profil->nama}}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-end user-menu wide">
            <div class="row mb-3 ms-0 me-0">
                <div class="col-12 ps-1 mb-2">
                    <div class="text-extra-small text-primary">Akun</div>
                </div>
                <div class="col-6 ps-1 pe-1">
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">Info Pengguna</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row mb-1 ms-0 me-0">
                <div class="col-12 p-1 mb-3 pt-3">
                    <div class="separator-light"></div>
                </div>
                <div class="col-6 pe-1 ps-1">
                <ul class="list-unstyled">
                        <li>
                            <a href="{{ route('razen-teknologi.logout') }}">
                                <i data-acorn-icon="logout" class="me-2" data-acorn-size="17"></i>
                                <span class="align-middle">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            </div>
        </div>
        <!-- User Menu End -->

        <!-- Menu Start -->
        <div class="menu-container flex-grow-1">
            <ul id="menu" class="menu">
                <li>
                    @if (request()->routeIs('razen-teknologi.admin.dashboard.index'))
                        <a href="{{ route('razen-teknologi.admin.dashboard.index') }}" class="active">
                    @else
                        <a href="{{ route('razen-teknologi.admin.dashboard.index') }}">
                    @endif
                        <i data-acorn-icon="home-garage" class="icon" data-acorn-size="18"></i>
                        <span class="label">Dashboard</span>
                    </a>
                </li>
                <li>
                    @if (request()->routeIs('razen-teknologi.admin.timeline.index'))
                        <a href="{{ route('razen-teknologi.admin.timeline.index') }}" class="active">
                    @else
                        <a href="{{ route('razen-teknologi.admin.timeline.index') }}">
                    @endif
                        <i data-acorn-icon="home-garage" class="icon" data-acorn-size="18"></i>
                        <span class="label">Timeline</span>
                    </a>
                </li>
                <li>
                    @if (request()->routeIs('razen-teknologi.admin.testimoni.index'))
                        <a href="{{ route('razen-teknologi.admin.testimoni.index') }}" class="active">
                    @else
                        <a href="{{ route('razen-teknologi.admin.testimoni.index') }}">
                    @endif
                        <i data-acorn-icon="home-garage" class="icon" data-acorn-size="18"></i>
                        <span class="label">Testimoni</span>
                    </a>
                </li>
                <li>
                    @if (request()->routeIs('razen-teknologi.admin.layanan-perusahaan.index'))
                        <a href="{{ route('razen-teknologi.admin.layanan-perusahaan.index') }}" class="active">
                    @else
                        <a href="{{ route('razen-teknologi.admin.layanan-perusahaan.index') }}">
                    @endif
                        <i data-acorn-icon="home-garage" class="icon" data-acorn-size="18"></i>
                        <span class="label">Layanan Perusahaan</span>
                    </a>
                </li>
                <li>
                    @if (request()->routeIs('razen-teknologi.admin.tim.index'))
                        <a href="{{ route('razen-teknologi.admin.tim.index') }}" class="active">
                    @else
                        <a href="{{ route('razen-teknologi.admin.tim.index') }}">
                    @endif
                        <i data-acorn-icon="home-garage" class="icon" data-acorn-size="18"></i>
                        <span class="label">Tim</span>
                    </a>
                </li>
                <li>
                    @if (request()->routeIs('razen-teknologi.admin.profil.index'))
                        <a href="{{ route('razen-teknologi.admin.profil.index') }}" class="active">
                    @else
                        <a href="{{ route('razen-teknologi.admin.profil.index') }}">
                    @endif
                        <i data-acorn-icon="home-garage" class="icon" data-acorn-size="18"></i>
                        <span class="label">Profil</span>
                    </a>
                </li>
                <li>
                    @if (request()->routeIs('razen-teknologi.admin.layanan.index') ||
                    request()->routeIs('razen-teknologi.admin.fitur-layanan.index'))
                    <a href="#layanan" class="active">
                    @else
                    <a href="#layanan">
                    @endif
                        <i data-acorn-icon="notebook-1" class="icon" data-acorn-size="18"></i>
                        <span class="label">Layanan</span>
                    </a>
                    <ul id="layanan">
                        <li>
                            @if (request()->routeIs('razen-teknologi.admin.layanan.index'))
                                <a href="{{ route('razen-teknologi.admin.layanan.index') }}" class="active">
                            @else
                                <a href="{{ route('razen-teknologi.admin.layanan.index') }}">
                            @endif
                                <span class="label">Layanan</span>
                            </a>
                        </li>
                        <li>
                            @if (request()->routeIs('razen-teknologi.admin.fitur-layanan.index'))
                                <a href="{{ route('razen-teknologi.admin.fitur-layanan.index') }}" class="active">
                            @else
                                <a href="{{ route('razen-teknologi.admin.fitur-layanan.index') }}">
                            @endif
                                <span class="label">Fitur Layanan</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    @if (request()->routeIs('razen-teknologi.master-data.media-sosial.index'))
                    <a href="#master_data" class="active">
                    @else
                    <a href="#master_data">
                    @endif
                        <i data-acorn-icon="notebook-1" class="icon" data-acorn-size="18"></i>
                        <span class="label">Master Data</span>
                    </a>
                    <ul id="master_data">
                        <li>
                            @if (request()->routeIs('razen-teknologi.master-data.media-sosial.index'))
                                <a href="{{ route('razen-teknologi.master-data.media-sosial.index') }}" class="active">
                            @else
                                <a href="{{ route('razen-teknologi.master-data.media-sosial.index') }}">
                            @endif
                                <span class="label">Media Sosial</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    @if (request()->routeIs('razen-teknologi.landing-page.beranda.index') ||
                    request()->routeIs('razen-teknologi.landing-page.perusahaan.index') ||
                    request()->routeIs('razen-teknologi.landing-page.layanan.index') ||
                    request()->routeIs('razen-teknologi.landing-page.aplikasi.index') ||
                    request()->routeIs('razen-teknologi.landing-page.kontak.index') ||
                    request()->routeIs('razen-teknologi.landing-page.layanan.pemerintahan.index') ||
                    request()->routeIs('razen-teknologi.landing-page.layanan.swasta.index') ||
                    request()->routeIs('razen-teknologi.landing-page.layanan.startup.index') ||
                    request()->routeIs('razen-teknologi.landing-page.layanan.pemerintahan.data.dinas.index') ||
                    request()->routeIs('razen-teknologi.landing-page.layanan.pemerintahan.data.produk-unggulan.index') ||
                    request()->routeIs('razen-teknologi.landing-page.layanan.pemerintahan.data.testimoni-pemerintah.index') ||
                    request()->routeIs('razen-teknologi.landing-page.layanan.swasta.data.produk-lengkap.index') ||
                    request()->routeIs('razen-teknologi.landing-page.layanan.rintisan.data.produk-rintisan-unggulan.index') ||
                    request()->routeIs('razen-teknologi.landing-page.layanan.rintisan.data.produk-rintisan.index'))
                    <a href="#landing_page" class="active">
                    @else
                    <a href="#landing_page">
                    @endif
                        <i data-acorn-icon="notebook-1" class="icon" data-acorn-size="18"></i>
                        <span class="label">Landing Page</span>
                    </a>
                    <ul id="landing_page">
                        <li>
                            @if (request()->routeIs('razen-teknologi.landing-page.beranda.index'))
                                <a href="{{ route('razen-teknologi.landing-page.beranda.index') }}" class="active">
                            @else
                                <a href="{{ route('razen-teknologi.landing-page.beranda.index') }}">
                            @endif
                                <span class="label">Beranda</span>
                            </a>
                        </li>
                        <li>
                            @if (request()->routeIs('razen-teknologi.landing-page.perusahaan.index'))
                                <a href="{{ route('razen-teknologi.landing-page.perusahaan.index') }}" class="active">
                            @else
                                <a href="{{ route('razen-teknologi.landing-page.perusahaan.index') }}">
                            @endif
                                <span class="label">Perusahaan</span>
                            </a>
                        </li>
                        <li>
                            @if (request()->routeIs('razen-teknologi.landing-page.layanan.index') ||
                            request()->routeIs('razen-teknologi.landing-page.layanan.pemerintahan.index') ||
                            request()->routeIs('razen-teknologi.landing-page.layanan.swasta.index') ||
                            request()->routeIs('razen-teknologi.landing-page.layanan.startup.index') ||
                            request()->routeIs('razen-teknologi.landing-page.layanan.pemerintahan.data.dinas.index') ||
                            request()->routeIs('razen-teknologi.landing-page.layanan.pemerintahan.data.produk-unggulan.index') ||
                            request()->routeIs('razen-teknologi.landing-page.layanan.pemerintahan.data.testimoni-pemerintah.index') ||
                            request()->routeIs('razen-teknologi.landing-page.layanan.swasta.data.produk-lengkap.index') ||
                            request()->routeIs('razen-teknologi.landing-page.layanan.rintisan.data.produk-rintisan-unggulan.index') ||
                            request()->routeIs('razen-teknologi.landing-page.layanan.rintisan.data.produk-rintisan.index'))
                            <a href="#landing_page_layanan" class="active">
                            @else
                            <a href="#landing_page_layanan">
                            @endif
                                <span class="label">Layanan</span>
                            </a>
                            <ul id="landing_page_layanan">
                                <li>
                                    @if (request()->routeIs('razen-teknologi.landing-page.layanan.pemerintahan.index'))
                                        <a href="{{ route('razen-teknologi.landing-page.layanan.pemerintahan.index') }}" class="active">
                                    @else
                                        <a href="{{ route('razen-teknologi.landing-page.layanan.pemerintahan.index') }}">
                                    @endif
                                        <span class="label">Layanan Pemerintahan</span>
                                    </a>
                                </li>
                                <li>
                                    @if (request()->routeIs('razen-teknologi.landing-page.layanan.pemerintahan.data.dinas.index') ||
                                    request()->routeIs('razen-teknologi.landing-page.layanan.pemerintahan.data.produk-unggulan.index') ||
                                    request()->routeIs('razen-teknologi.landing-page.layanan.pemerintahan.data.testimoni-pemerintah.index'))
                                    <a href="#data_layanan_pemerintahan" class="active">
                                    @else
                                    <a href="#data_layanan_pemerintahan">
                                    @endif
                                        <span class="label">Data Layanan Pemerintahan</span>
                                    </a>
                                    <ul id="data_layanan_pemerintahan">
                                        <li>
                                            @if (request()->routeIs('razen-teknologi.landing-page.layanan.pemerintahan.data.dinas.index'))
                                                <a href="{{ route('razen-teknologi.landing-page.layanan.pemerintahan.data.dinas.index') }}" class="active">
                                            @else
                                                <a href="{{ route('razen-teknologi.landing-page.layanan.pemerintahan.data.dinas.index') }}">
                                            @endif
                                                <span class="label">Data Dinas</span>
                                            </a>
                                        </li>
                                        <li>
                                            @if (request()->routeIs('razen-teknologi.landing-page.layanan.pemerintahan.data.produk-unggulan.index'))
                                                <a href="{{ route('razen-teknologi.landing-page.layanan.pemerintahan.data.produk-unggulan.index') }}" class="active">
                                            @else
                                                <a href="{{ route('razen-teknologi.landing-page.layanan.pemerintahan.data.produk-unggulan.index') }}">
                                            @endif
                                                <span class="label">Data Produk Unggulan</span>
                                            </a>
                                        </li>
                                        <li>
                                            @if (request()->routeIs('razen-teknologi.landing-page.layanan.pemerintahan.data.testimoni-pemerintah.index'))
                                                <a href="{{ route('razen-teknologi.landing-page.layanan.pemerintahan.data.testimoni-pemerintah.index') }}" class="active">
                                            @else
                                                <a href="{{ route('razen-teknologi.landing-page.layanan.pemerintahan.data.testimoni-pemerintah.index') }}">
                                            @endif
                                                <span class="label">Data Testimoni Pemerintah</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    @if (request()->routeIs('razen-teknologi.landing-page.layanan.swasta.index'))
                                        <a href="{{ route('razen-teknologi.landing-page.layanan.swasta.index') }}" class="active">
                                    @else
                                        <a href="{{ route('razen-teknologi.landing-page.layanan.swasta.index') }}">
                                    @endif
                                        <span class="label">Layanan Swasta</span>
                                    </a>
                                </li>
                                <li>
                                    @if (request()->routeIs('razen-teknologi.landing-page.layanan.swasta.data.produk-lengkap.index'))
                                    <a href="#data_layanan_swasta" class="active">
                                    @else
                                    <a href="#data_layanan_swasta">
                                    @endif
                                        <span class="label">Data Layanan Swasta</span>
                                    </a>
                                    <ul id="data_layanan_swasta">
                                        <li>
                                            @if (request()->routeIs('razen-teknologi.landing-page.layanan.swasta.data.produk-lengkap.index'))
                                                <a href="{{ route('razen-teknologi.landing-page.layanan.swasta.data.produk-lengkap.index') }}" class="active">
                                            @else
                                                <a href="{{ route('razen-teknologi.landing-page.layanan.swasta.data.produk-lengkap.index') }}">
                                            @endif
                                                <span class="label">Produk Lengkap</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    @if (request()->routeIs('razen-teknologi.landing-page.layanan.startup.index'))
                                        <a href="{{ route('razen-teknologi.landing-page.layanan.startup.index') }}" class="active">
                                    @else
                                        <a href="{{ route('razen-teknologi.landing-page.layanan.startup.index') }}">
                                    @endif
                                        <span class="label">Layanan Startup</span>
                                    </a>
                                </li>
                                <li>
                                    @if (request()->routeIs('razen-teknologi.landing-page.layanan.rintisan.data.produk-rintisan.index') ||
                                    request()->routeIs('razen-teknologi.landing-page.layanan.rintisan.data.produk-rintisan-unggulan.index'))
                                    <a href="#data_layanan_startup" class="active">
                                    @else
                                    <a href="#data_layanan_startup">
                                    @endif
                                        <span class="label">Data Layanan Startup</span>
                                    </a>
                                    <ul id="data_layanan_startup">
                                        <li>
                                            @if (request()->routeIs('razen-teknologi.landing-page.layanan.rintisan.data.produk-rintisan.index'))
                                                <a href="{{ route('razen-teknologi.landing-page.layanan.rintisan.data.produk-rintisan.index') }}" class="active">
                                            @else
                                                <a href="{{ route('razen-teknologi.landing-page.layanan.rintisan.data.produk-rintisan.index') }}">
                                            @endif
                                                <span class="label">Produk Rintisan</span>
                                            </a>
                                        </li>
                                        <li>
                                            @if (request()->routeIs('razen-teknologi.landing-page.layanan.rintisan.data.produk-rintisan-unggulan.index'))
                                                <a href="{{ route('razen-teknologi.landing-page.layanan.rintisan.data.produk-rintisan-unggulan.index') }}" class="active">
                                            @else
                                                <a href="{{ route('razen-teknologi.landing-page.layanan.rintisan.data.produk-rintisan-unggulan.index') }}">
                                            @endif
                                                <span class="label">Produk Rintisan Unggulan</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    @if (request()->routeIs('razen-teknologi.landing-page.layanan.index'))
                                        <a href="{{ route('razen-teknologi.landing-page.layanan.index') }}" class="active">
                                    @else
                                        <a href="{{ route('razen-teknologi.landing-page.layanan.index') }}">
                                    @endif
                                        <span class="label">Layanan Lain - Lain</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            @if (request()->routeIs('razen-teknologi.landing-page.aplikasi.index'))
                                <a href="{{ route('razen-teknologi.landing-page.aplikasi.index') }}" class="active">
                            @else
                                <a href="{{ route('razen-teknologi.landing-page.aplikasi.index') }}">
                            @endif
                                <span class="label">Aplikasi</span>
                            </a>
                        </li>
                        <li>
                            @if (request()->routeIs('razen-teknologi.landing-page.kontak.index'))
                                <a href="{{ route('razen-teknologi.landing-page.kontak.index') }}" class="active">
                            @else
                                <a href="{{ route('razen-teknologi.landing-page.kontak.index') }}">
                            @endif
                                <span class="label">Kontak</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Menu End -->

        <!-- Mobile Buttons Start -->
        <div class="mobile-buttons-container">
            <!-- Scrollspy Mobile Button Start -->
            <a href="#" id="scrollSpyButton" class="spy-button" data-bs-toggle="dropdown">
                <i data-acorn-icon="menu-dropdown"></i>
            </a>
            <!-- Scrollspy Mobile Button End -->

            <!-- Scrollspy Mobile Dropdown Start -->
            <div class="dropdown-menu dropdown-menu-end" id="scrollSpyDropdown"></div>
            <!-- Scrollspy Mobile Dropdown End -->

            <!-- Menu Button Start -->
            <a href="#" id="mobileMenuButton" class="menu-button">
                <i data-acorn-icon="menu"></i>
            </a>
            <!-- Menu Button End -->
        </div>
        <!-- Mobile Buttons End -->
    </div>
    <div class="nav-shadow"></div>
</div>

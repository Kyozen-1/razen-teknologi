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
    <div role="main" class="main">
        <section class="section section-concept section-no-border section-dark section-angled section-angled-reverse pt-5 m-0" id="section-concept" style="background-image: url(https://tech.razen.co.id/rintisan-startup/img/landing/header_bg.jpg); background-size: cover; background-position: center; animation-duration: 750ms; animation-delay: 300ms; animation-fill-mode: forwards;">
            <div class="section-angled-layer-bottom bg-light" style="padding: 8rem 0;"></div>
                <div class="container pt-5 mt-5">
                    <div class="row custom-header-min-height-1 align-items-center pt-3">
                        <div class="col-lg-5 mb-5">
                            <h5 class="text-primary font-weight-bold mb-1 custom-letter-spacing-1">Razen Teknologi</h5>
                            <h1 class="font-weight-bold text-12 line-height-2 mb-3">
                                Produk Startup Rintisan oleh Razen
                            </h1>
                            <p class="custom-font-size-1 pt-2">Punya gagasan operasi bisnis Anda di suatu tempat? Tidak masalah! Razen Teknologi adalah layanan yang Anda perlukan untuk mengelola seluruh website Anda dari mana saja, kapan saja!</p>
                            <a href="https://api.whatsapp.com/send?phone=6282299449494&amp;text=Halo%20kak,%20saya%20ingin%20membahas%20sebuah%20proyek" data-hash="" data-hash-offset="0" data-hash-offset-lg="100" class="btn btn-gradient-primary border-primary btn-effect-4 font-weight-semi-bold px-4 btn-py-2 text-3">Hubungi Kami <i class="fas fa-phone ms-1"></i>
                            </a>
                            <a href="#" class="btn btn-light btn-outline btn-outline-thin btn-outline-light-opacity-2 btn-effect-5 font-weight-semi-bold px-4 btn-py-2 text-3 text-color-light text-color-hover-dark ms-2" target="_blank">Lihat Produk <i class="fas fa-external-link-alt ms-1"></i>
                            </a>
                        </div>
                        <div class="col-lg-6 offset-lg-1 mb-5">
                            <div class="position-relative border-width-5 border-color-dark clearfix border border-radius" data-remove-min-height="" style="min-height: 0px;">
                                <video id="presentation" class="float-start" width="100%" height="100%" muted="" playsinline="" loop="" preload="metadata" poster="https://tech.razen.co.id/rintisan-startup/video/presentation.jpg" data-auto-play="true" __idm_id__="761857">
                                    <source src="https://tech.razen.co.id/swasta/video/vidiorazen.mp4" type="video/mp4">
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
                        <h2 class="font-weight-bold text-9 mb-0 text-center">Dapatkan Semua Fitur Menakjubkan <br>Hanya Dalam Satu Website </h2>
                        <p class="sub-title text-primary text-4 font-weight-semibold positive-ls-2 mt-2 mb-4 text-center">Berkualitas dan Teknologi Terkini!
                        </p>
                        <p class="text-1rem text-color-default negative-ls-05 pt-3 pb-4 mb-5 text-center"> Memiliki berbagai macam fiturdesain yang kreatif, <br> konten yang informatif dan bermanfaat, navigasi yang mudah dipahami, <br> tampilan responsif yang memudahkan akses dari berbagai perangkat, <br> kecepatan loading yang cepat dan fitur interaktif seperti forum <br> atau chat yang memungkinkan pengguna berinteraksi satu sama lain. <br>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-no-border pb-0 mt-3 mb-0">
        <div class="container pt-4">
            <div class="row align-items-center justify-content-between">
            <div class="col-lg-4">
                <h2 class="text-7 font-weight-semibold line-height-2 mb-2">Generasi Baru Dari Website Teknologi Terkini Telah Hadir</h2>
                <p>Serangkaian alat lengkap dirancang untuk membuat hidup lebih mudah dengan website berkualitas</p>
            </div>
            <div class="col-sm-4 col-lg-auto icon-box text-center mb-4">
                <i class="icon-bg icon-1"></i>
                <h4 class="font-weight-bold custom-font-size-2 line-height-3 mb-0">Performa <br>Tinggi </h4>
            </div>
            <div class="col-sm-4 col-lg-auto icon-box text-center mb-4">
                <i class="icon-bg icon-2"></i>
                <h4 class="font-weight-bold custom-font-size-2 line-height-3 mb-0">Menggunakan <br>Plugins and Extensions </h4>
            </div>
            <div class="col-sm-4 col-lg-auto icon-box text-center mb-4">
                <i class="icon-bg icon-3"></i>
                <h4 class="font-weight-bold custom-font-size-2 line-height-3 mb-0">Mudah <br>Digunakan </h4>
            </div>
            <div class="my-5"></div>
            </div>
        </div>
        </section>
        <section class="section section-no-border section-light position-relative z-index-3 pt-0 m-0">
        <div class="container pt-4">
            <div class="row align-items-center justify-content-between">
            <div class="my-3"></div>
            <div class="col-lg-10 text-center offset-lg-1">
                <h2 class="font-weight-bold text-9 mb-0">4 Produk Startup Rintisan Unggulan <br>Razen Teknologi </h2>
            </div>
            <div class="my-3"></div>
            <div class="row">
                <div class="col">
                <div class="tabs tabs-bottom tabs-center tabs-simple">
                    <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="#tabsNavigationSimple1" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">Banguntani</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="#tabsNavigationSimple2" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab">Akadsah</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="#tabsNavigationSimple3" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">Pendekar Bengkel</a>
                    </li>
                    <li class="nav-item active" role="presentation">
                        <a class="nav-link active" href="#tabsNavigationSimple4" data-bs-toggle="tab" aria-selected="true" role="tab">Mami Clean</a>
                    </li>
                    </ul>
                    <div class="tab-content">
                    <div class="tab-pane" id="tabsNavigationSimple1" role="tabpanel">
                        <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="border-right-light border-sm-none">
                            <h4 class="mb-2">Banguntani</h4>
                            <p class="mb-2">“Banguntani merupakan e-commerce di Indonesia yang menawarkan berbagai macam produk sayuran, buah-buahan, daging segar, ikan segar, lauk pauk dan berbagai macam sembako.”</p>
                            </div>
                        </div>
                        <div class="col-md-6 mx-auto">
                            <div class="cascading-images-wrapper">
                            <div class="cascading-images position-relative">
                                <img src="https://tech.razen.co.id/rintisan-startup/img/blog/default/blog-9.jpg" class="appear-animation box-shadow-3 animated expandIn appear-animation-visible" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-duration="600ms" style="animation-duration: 600ms; animation-delay: 100ms;">
                                <div class="position-absolute w-100" style="top: 41%; left: -30%;">
                                <img src="https://tech.razen.co.id/rintisan-startup/img/blog/default/blog-8.jpg" class="appear-animation box-shadow-3 animated expandIn appear-animation-visible" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-delay="300" data-appear-animation-duration="600ms" style="animation-duration: 600ms; animation-delay: 300ms;">
                                </div>
                                <div class="position-absolute w-100" style="top: 75%; left: 30%;">
                                <img src="https://tech.razen.co.id/rintisan-startup/img/blog/default/blog-7.jpg" class="appear-animation box-shadow-3 animated expandIn appear-animation-visible" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-delay="600" data-appear-animation-duration="600ms" style="animation-duration: 600ms; animation-delay: 600ms;">
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tabsNavigationSimple2" role="tabpanel">
                        <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="border-right-light border-sm-none">
                            <h4 class="mb-2">Akadsah</h4>
                            <p class="mb-2">“Aplikasi manajemen pernikahan untuk membantu anda mempersiapkan hari spesial. Menyediakan semua kebutuhan pernikahan berkualitas dan terpercaya didalam 1 platform."</p>
                            </div>
                        </div>
                        <div class="col-md-6 mx-auto">
                            <div class="cascading-images-wrapper">
                            <div class="cascading-images position-relative">
                                <img src="https://tech.razen.co.id/rintisan-startup/img/blog/default/blog-3.jpg" class="appear-animation box-shadow-3" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-duration="600ms">
                                <div class="position-absolute w-100" style="top: 41%; left: -30%;">
                                <img src="https://tech.razen.co.id/rintisan-startup/img/blog/default/blog-2.jpg" class="appear-animation box-shadow-3" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-delay="300" data-appear-animation-duration="600ms">
                                </div>
                                <div class="position-absolute w-100" style="top: 75%; left: 30%;">
                                <img src="https://tech.razen.co.id/rintisan-startup/img/blog/default/blog-1.jpg" class="appear-animation box-shadow-3" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-delay="600" data-appear-animation-duration="600ms">
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tabsNavigationSimple3" role="tabpanel">
                        <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="border-right-light border-sm-none">
                            <h4 class="mb-2">Pendekar Bengkel</h4>
                            <p class="mb-2">“Layanan maintenance dan service kendaraan hanya untuk anda. Dapatkan layanan terbaik dari teknisi berpengalaman untuk memastikan kendaraan anda berada pada kondisi maksimal setiap saat.”</p>
                            </div>
                        </div>
                        <div class="col-md-6 mx-auto">
                            <div class="cascading-images-wrapper">
                            <div class="cascading-images position-relative">
                                <img src="https://tech.razen.co.id/rintisan-startup/img/blog/default/blog-6.jpg" class="appear-animation box-shadow-3 animated expandIn appear-animation-visible" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-duration="600ms" style="animation-duration: 600ms; animation-delay: 100ms;">
                                <div class="position-absolute w-100" style="top: 41%; left: -30%;">
                                <img src="https://tech.razen.co.id/rintisan-startup/img/blog/default/blog-5.jpg" class="appear-animation box-shadow-3 animated expandIn appear-animation-visible" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-delay="300" data-appear-animation-duration="600ms" style="animation-duration: 600ms; animation-delay: 300ms;">
                                </div>
                                <div class="position-absolute w-100" style="top: 75%; left: 30%;">
                                <img src="https://tech.razen.co.id/rintisan-startup/img/blog/default/blog-4.jpg" class="appear-animation box-shadow-3 animated expandIn appear-animation-visible" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-delay="600" data-appear-animation-duration="600ms" style="animation-duration: 600ms; animation-delay: 600ms;">
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane active show" id="tabsNavigationSimple4" role="tabpanel">
                        <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="border-right-light border-sm-none">
                            <h4 class="mb-2">Mami Clean</h4>
                            <p class="mb-2">“Layanan Mami Laundry, Mami Clean dan Mami Service.”</p>
                            </div>
                        </div>
                        <div class="col-md-6 mx-auto">
                            <div class="cascading-images-wrapper">
                            <div class="cascading-images position-relative">
                                <img src="https://tech.razen.co.id/rintisan-startup/img/blog/default/blog-10.jpg" class="appear-animation box-shadow-3 animated expandIn appear-animation-visible" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-duration="600ms" style="animation-duration: 600ms; animation-delay: 100ms;">
                                <div class="position-absolute w-100" style="top: 41%; left: -30%;">
                                <img src="https://tech.razen.co.id/rintisan-startup/img/blog/default/blog-11.jpg" class="appear-animation box-shadow-3 animated expandIn appear-animation-visible" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-delay="300" data-appear-animation-duration="600ms" style="animation-duration: 600ms; animation-delay: 300ms;">
                                </div>
                                <div class="position-absolute w-100" style="top: 75%; left: 30%;">
                                <img src="https://tech.razen.co.id/rintisan-startup/img/blog/default/blog-12.jpg" class="appear-animation box-shadow-3 animated expandIn appear-animation-visible" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-delay="600" data-appear-animation-duration="600ms" style="animation-duration: 600ms; animation-delay: 600ms;">
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
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
            <span class="font-weight-bold text-5 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" data-appear-animation-duration="750" style="animation-delay: 600ms;">Startup Rintisan Produk Razen Teknologi</span>
            </h2>
            <p class="font-weight-bold text-4 text-center appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750" style="animation-delay: 750ms;">100+ IN ALL RAZEN TECHNOLOGY VERSIONS</p>
            <div class="appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="850" data-appear-animation-duration="850" style="animation-delay: 850ms;">
            <h5 class="font-weight-semibold positive-ls-2 text-4 text-primary text-center mb-0">TOP 5 STAR RATING</h5>
            <p class="text-default text-center mb-4">Real people, real stories. Hear from our community.</p>
            <div class="owl-carousel carousel-center-active-item-2 nav-style-4 mb-4 pb-3 owl-theme owl-loaded owl-drag owl-carousel-init" data-plugin-options="{'items': 1, 'loop': true, 'nav': true, 'dots': false}" style="height: auto;">
                <div class="owl-stage-outer">
                <div class="owl-stage" style="transform: translate3d(-5580px, 0px, 0px); transition: all 0s ease 0s; width: 21204px;">
                    <div class="owl-item cloned" style="width: 1116px;">
                    <div>
                        <div class="d-flex flex-column flex-md-row justify-content-between mb-4">
                        <div class="author">
                            <h4 class="text-5 mb-0">Subcon</h4>
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
                        <img class="card-img-top" src="https://tech.razen.co.id/rintisan-startup/img/blog/wide/blog-4.jpg" alt="Card Image">
                        <div class="py-2"></div>
                        <p class="mb-0">"Subcon merupakan aplikasi e-commerce di Indonesia yang merupakan Startup Rintisan"</p>
                    </div>
                    </div>
                    <div class="owl-item cloned" style="width: 1116px;">
                    <div>
                        <div class="d-flex flex-column flex-md-row justify-content-between mb-4">
                        <div class="author">
                            <h4 class="text-5 mb-0">Akadsah</h4>
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
                        <img class="card-img-top" src="https://tech.razen.co.id/rintisan-startup/img/blog/wide/blog-5.jpg" alt="Card Image">
                        <div class="py-2"></div>
                        <p class="mb-0">"Aplikasi manajemen pernikahan untuk membantu anda mempersiapkan hari spesial. Menyediakan semua kebutuhan pernikahan berkualitas dan terpercaya didalam 1 platform."</p>
                    </div>
                    </div>
                    <div class="owl-item cloned" style="width: 1116px;">
                    <div>
                        <div class="d-flex flex-column flex-md-row justify-content-between mb-4">
                        <div class="author">
                            <h4 class="text-5 mb-0">Frigle</h4>
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
                        <img class="card-img-top" src="https://tech.razen.co.id/rintisan-startup/img/blog/wide/blog-8.jpg" alt="Card Image">
                        <div class="py-2"></div>
                        <p class="mb-0">"Frigle merupakan aplikasi e-commerce di Indonesia yang merupakan Startup Rintisan"</p>
                    </div>
                    </div>
                    <div class="owl-item cloned" style="width: 1116px;">
                    <div>
                        <div class="d-flex flex-column flex-md-row justify-content-between mb-4">
                        <div class="author">
                            <h4 class="text-5 mb-0">Kolhype</h4>
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
                        <img class="card-img-top" src="https://tech.razen.co.id/rintisan-startup/img/blog/wide/blog-9.jpg" alt="Card Image">
                        <div class="py-2"></div>
                        <p class="mb-0">"Digital Agency Berbasis Komunitas Influencer #1 di Indonesia. Kesempatan terbaik untuk membuat Bisnis anda di kenal luas &amp; mendapatkan Profit Yang Lebih Besar dengan strategi Influencer Marketing."</p>
                    </div>
                    </div>
                    <div class="owl-item cloned" style="width: 1116px;">
                    <div>
                        <div class="d-flex flex-column flex-md-row justify-content-between mb-4">
                        <div class="author">
                            <h4 class="text-5 mb-0">Laden</h4>
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
                        <img class="card-img-top" src="https://tech.razen.co.id/rintisan-startup/img/blog/wide/blog-7.jpg" alt="Card Image">
                        <div class="py-2"></div>
                        <p class="mb-0">"Laden merupakan e-commerce di Indonesia yang menawarkan berbagai macam layanan "serabutan", seperti pembersihan, perbaikan, pemasangan, renovasi pada berbagai macam bidang."</p>
                    </div>
                    </div>
                    <div class="owl-item active" style="width: 1116px;">
                    <div>
                        <div class="d-flex flex-column flex-md-row justify-content-between mb-4">
                        <div class="author">
                            <h4 class="text-5 mb-0">Pendekar Bengkel</h4>
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
                        <img class="card-img-top" src="https://tech.razen.co.id/rintisan-startup/img/blog/wide/blog-2.jpg" alt="Card Image">
                        <div class="py-2"></div>
                        <p class="mb-0">"Layanan maintenance dan service kendaraan hanya untuk anda. Dapatkan layanan terbaik dari teknisi berpengalaman untuk memastikan kendaraan anda berada pada kondisi maksimal setiap saat."</p>
                    </div>
                    </div>
                    <div class="owl-item" style="width: 1116px;">
                    <div>
                        <div class="d-flex flex-column flex-md-row justify-content-between mb-4">
                        <div class="author">
                            <h4 class="text-5 mb-0">Banguntani</h4>
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
                        <img class="card-img-top" src="https://tech.razen.co.id/rintisan-startup/img/blog/wide/blog-3.jpg" alt="Card Image">
                        <div class="py-2"></div>
                        <p class="mb-0">"Banguntani merupakan e-commerce di Indonesia yang menawarkan berbagai macam produk sayuran, buah-buahan, daging segar, ikan segar, lauk pauk dan berbagai macam sembako."</p>
                    </div>
                    </div>
                    <div class="owl-item" style="width: 1116px;">
                    <div>
                        <div class="d-flex flex-column flex-md-row justify-content-between mb-4">
                        <div class="author">
                            <h4 class="text-5 mb-0">Vokasee</h4>
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
                        <img class="card-img-top" src="https://tech.razen.co.id/rintisan-startup/img/blog/wide/blog-6.jpg" alt="Card Image">
                        <div class="py-2"></div>
                        <p class="mb-0">"Belajar tanpa batas secara Online. Mitra Prakerin dan Pengajaran online serta kursus yang akan dipandu oleh para ahli untuk membantu Anda memperoleh keterampilan baru di dunia Industri 4.0."</p>
                    </div>
                    </div>
                    <div class="owl-item" style="width: 1116px;">
                    <div>
                        <div class="d-flex flex-column flex-md-row justify-content-between mb-4">
                        <div class="author">
                            <h4 class="text-5 mb-0">Mami Clean</h4>
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
                        <img class="card-img-top" src="https://tech.razen.co.id/rintisan-startup/img/blog/wide/blog-1.jpg" alt="Card Image">
                        <div class="py-2"></div>
                        <p class="mb-0">"Mami Clean merupakan merupakan Startup Rintisan di Indonesia yang memiliki layanan Layanan Mami Laundry, Mami Clean dan Mami Servic yang dikerjakan oleh para ahlinya"</p>
                    </div>
                    </div>
                    <div class="owl-item" style="width: 1116px;">
                    <div>
                        <div class="d-flex flex-column flex-md-row justify-content-between mb-4">
                        <div class="author">
                            <h4 class="text-5 mb-0">Subcon</h4>
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
                        <img class="card-img-top" src="https://tech.razen.co.id/rintisan-startup/img/blog/wide/blog-4.jpg" alt="Card Image">
                        <div class="py-2"></div>
                        <p class="mb-0">"Subcon merupakan aplikasi e-commerce di Indonesia yang merupakan Startup Rintisan"</p>
                    </div>
                    </div>
                    <div class="owl-item" style="width: 1116px;">
                    <div>
                        <div class="d-flex flex-column flex-md-row justify-content-between mb-4">
                        <div class="author">
                            <h4 class="text-5 mb-0">Akadsah</h4>
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
                        <img class="card-img-top" src="https://tech.razen.co.id/rintisan-startup/img/blog/wide/blog-5.jpg" alt="Card Image">
                        <div class="py-2"></div>
                        <p class="mb-0">"Aplikasi manajemen pernikahan untuk membantu anda mempersiapkan hari spesial. Menyediakan semua kebutuhan pernikahan berkualitas dan terpercaya didalam 1 platform."</p>
                    </div>
                    </div>
                    <div class="owl-item" style="width: 1116px;">
                    <div>
                        <div class="d-flex flex-column flex-md-row justify-content-between mb-4">
                        <div class="author">
                            <h4 class="text-5 mb-0">Frigle</h4>
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
                        <img class="card-img-top" src="https://tech.razen.co.id/rintisan-startup/img/blog/wide/blog-8.jpg" alt="Card Image">
                        <div class="py-2"></div>
                        <p class="mb-0">"Frigle merupakan aplikasi e-commerce di Indonesia yang merupakan Startup Rintisan"</p>
                    </div>
                    </div>
                    <div class="owl-item" style="width: 1116px;">
                    <div>
                        <div class="d-flex flex-column flex-md-row justify-content-between mb-4">
                        <div class="author">
                            <h4 class="text-5 mb-0">Kolhype</h4>
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
                        <img class="card-img-top" src="https://tech.razen.co.id/rintisan-startup/img/blog/wide/blog-9.jpg" alt="Card Image">
                        <div class="py-2"></div>
                        <p class="mb-0">"Digital Agency Berbasis Komunitas Influencer #1 di Indonesia. Kesempatan terbaik untuk membuat Bisnis anda di kenal luas &amp; mendapatkan Profit Yang Lebih Besar dengan strategi Influencer Marketing."</p>
                    </div>
                    </div>
                    <div class="owl-item" style="width: 1116px;">
                    <div>
                        <div class="d-flex flex-column flex-md-row justify-content-between mb-4">
                        <div class="author">
                            <h4 class="text-5 mb-0">Laden</h4>
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
                        <img class="card-img-top" src="https://tech.razen.co.id/rintisan-startup/img/blog/wide/blog-7.jpg" alt="Card Image">
                        <div class="py-2"></div>
                        <p class="mb-0">"Laden merupakan e-commerce di Indonesia yang menawarkan berbagai macam layanan "serabutan", seperti pembersihan, perbaikan, pemasangan, renovasi pada berbagai macam bidang."</p>
                    </div>
                    </div>
                    <div class="owl-item cloned" style="width: 1116px;">
                    <div>
                        <div class="d-flex flex-column flex-md-row justify-content-between mb-4">
                        <div class="author">
                            <h4 class="text-5 mb-0">Pendekar Bengkel</h4>
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
                        <img class="card-img-top" src="https://tech.razen.co.id/rintisan-startup/img/blog/wide/blog-2.jpg" alt="Card Image">
                        <div class="py-2"></div>
                        <p class="mb-0">"Layanan maintenance dan service kendaraan hanya untuk anda. Dapatkan layanan terbaik dari teknisi berpengalaman untuk memastikan kendaraan anda berada pada kondisi maksimal setiap saat."</p>
                    </div>
                    </div>
                    <div class="owl-item cloned" style="width: 1116px;">
                    <div>
                        <div class="d-flex flex-column flex-md-row justify-content-between mb-4">
                        <div class="author">
                            <h4 class="text-5 mb-0">Banguntani</h4>
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
                        <img class="card-img-top" src="https://tech.razen.co.id/rintisan-startup/img/blog/wide/blog-3.jpg" alt="Card Image">
                        <div class="py-2"></div>
                        <p class="mb-0">"Banguntani merupakan e-commerce di Indonesia yang menawarkan berbagai macam produk sayuran, buah-buahan, daging segar, ikan segar, lauk pauk dan berbagai macam sembako."</p>
                    </div>
                    </div>
                    <div class="owl-item cloned" style="width: 1116px;">
                    <div>
                        <div class="d-flex flex-column flex-md-row justify-content-between mb-4">
                        <div class="author">
                            <h4 class="text-5 mb-0">Vokasee</h4>
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
                        <img class="card-img-top" src="https://tech.razen.co.id/rintisan-startup/img/blog/wide/blog-6.jpg" alt="Card Image">
                        <div class="py-2"></div>
                        <p class="mb-0">"Belajar tanpa batas secara Online. Mitra Prakerin dan Pengajaran online serta kursus yang akan dipandu oleh para ahli untuk membantu Anda memperoleh keterampilan baru di dunia Industri 4.0."</p>
                    </div>
                    </div>
                    <div class="owl-item cloned" style="width: 1116px;">
                    <div>
                        <div class="d-flex flex-column flex-md-row justify-content-between mb-4">
                        <div class="author">
                            <h4 class="text-5 mb-0">Mami Clean</h4>
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
                        <img class="card-img-top" src="https://tech.razen.co.id/rintisan-startup/img/blog/wide/blog-1.jpg" alt="Card Image">
                        <div class="py-2"></div>
                        <p class="mb-0">"Mami Clean merupakan merupakan Startup Rintisan di Indonesia yang memiliki layanan Layanan Mami Laundry, Mami Clean dan Mami Servic yang dikerjakan oleh para ahlinya"</p>
                    </div>
                    </div>
                    <div class="owl-item cloned" style="width: 1116px;">
                    <div>
                        <div class="d-flex flex-column flex-md-row justify-content-between mb-4">
                        <div class="author">
                            <h4 class="text-5 mb-0">Subcon</h4>
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
                        <img class="card-img-top" src="https://tech.razen.co.id/rintisan-startup/img/blog/wide/blog-4.jpg" alt="Card Image">
                        <div class="py-2"></div>
                        <p class="mb-0">"Subcon merupakan aplikasi e-commerce di Indonesia yang merupakan Startup Rintisan"</p>
                    </div>
                    </div>
                </div>
                </div>
                <div class="owl-nav">
                <button type="button" role="presentation" class="owl-prev"></button>
                <button type="button" role="presentation" class="owl-next"></button>
                </div>
                <div class="owl-dots disabled"></div>
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
                <h2 class="font-weight-bold text-9 mb-1">Didukung Oleh Tenaga Professional</h2>
                <h5 class="font-weight-semibold positive-ls-2 text-4 text-primary mb-3">Professional</h5>
                <p class="ls-0 text-default fw-400 mb-5">Bermasalah ketika menggunakan produk kami? Kami akan membantu Anda</p>
                <div class="d-flex align-items-center border border-top-0 border-end-0 border-start-0 pb-4 mb-4">
                <i class="fa fa-check text-color-primary bg-light rounded-circle box-shadow-4 p-2 me-3"></i>
                <p class="mb-0">
                    <b class="text-color-dark">Dokumentasi Online -</b> Berisi semua deskripsi terkait dengan penggunaan dan fitur yang tersedia
                </p>
                </div>
                <div class="d-flex align-items-center border border-top-0 border-end-0 border-start-0 pb-4 mb-4">
                <i class="fa fa-check text-color-primary bg-light rounded-circle box-shadow-4 p-2 me-3"></i>
                <p class="mb-0 mb-0 opacity-5">
                    <b class="text-color-dark">Dokumentasi Video (segera hadir) -</b> Butuh instruksi visual? Periksa tutorial video kami
                </p>
                </div>
                <div class="d-flex align-items-center pb-4 mb-4">
                <i class="fa fa-check text-color-primary bg-light rounded-circle box-shadow-4 p-2 me-3"></i>
                <p class="mb-0">
                    <b class="text-color-dark">Dukungan Penuh -</b> Hubungi kami jika Anda mendapatkan masalah saat menggunakan produk kami
                </p>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-2 position-relative">
                <img alt="Porto Support" src="https://tech.razen.co.id/rintisan-startup/img/landing/logo-1.png" data-src="https://tech.razen.co.id/rintisan-startup/img/landing/logo-1.png" class="img-fluid border border-width-10 border-color-light rounded box-shadow-3 ms-5 appear-animation lazyloaded animated fadeInUp appear-animation-visible" data-appear-animation="fadeInUp" data-appear-animation-delay="200" style="width: 590px; max-width: none; animation-delay: 200ms;">
            </div>
            </div>
        </div>
        </section>
        <section class="section section-dark section-angled border-0 pb-0 m-0 lazyloaded" style="background-size: 100%; background-position: center top; background-image: url(&quot;https://tech.razen.co.id/rintisan-startup/img/landing/build_bg.jpg&quot;);" data-bg-src="https://tech.razen.co.id/rintisan-startup/img/landing/build_bg.jpg">
        <div class="section-angled-layer-top section-angled-layer-increase-angle bg-color-light-scale-1" style="padding: 4rem 0;"></div>
        <div class="container text-center my-5 py-5">
            <h2 class="font-weight-bold line-height-3 text-12 mt-5 mb-3 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250" data-appear-animation-duration="750" style="animation-delay: 250ms;">Bangun situs web Anda dengan Razen Teknologi</h2>
            <h4 class="font-weight-bold text-9 mb-4 pb-2 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750" style="animation-delay: 500ms;">Beli sekarang, mulai dari <span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-no-rotate highlighted-word-animation-1 highlighted-word-animation-1-light alternative-font-4 font-weight-extra-bold text-4 light appear-animation animated blurIn appear-animation-visible" data-appear-animation="blurIn" data-appear-animation-delay="800" data-appear-animation-duration="750" style="animation-delay: 800ms;">IDR 2.000K!</span>
            </h4>
            <div class="appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900" data-appear-animation-duration="750" style="animation-delay: 900ms;">
            <h4 class="font-weight-light text-4 col-lg-6 px-0 offset-lg-3 fw-400 mb-5 opacity-8">Razen Teknologi telah berpengalaman sejak 2019 dan merupakan salah satu perusahaan terpercaya dengan penjualan lebih dari 100+.</h4>
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
        </section>
    </div>
@endsection
@section('js')
<script src="{{ asset('js/layanan/swasta/plugins.min.js') }}"></script>
<script src="{{ asset('js/layanan/swasta/theme.js') }}"></script>
<script src="{{ asset('js/layanan/swasta/view.contact.js') }}"></script>
<script src="{{ asset('js/layanan/swasta/theme.init.js') }}"></script>
@endsection

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
                        <h5 class="text-primary font-weight-bold mb-1 custom-letter-spacing-1"> PRODUK SWASTA </h5>
                        <h1 class="font-weight-bold text-12 line-height-2 mb-3 text-white">
                            Beragam Pengelolaan Dalam Menunjang Kebutuhan Bisnis Anda <span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-2 highlighted-word-animation-1 highlighted-word-animation-1-light default-font font-weight-bold highlighted-word-animation-1-end"></span>
                        </h1>
                        <p class="custom-font-size-1 pt-2 text-white"> Performance Power Full, Efisien, dan memiliki berbagai Fitur menarik. </p>
                    </div>
                <div class="col-lg-6 offset-lg-1 mb-5">
                    <div class="position-relative border-width-10 border-color-light clearfix border border-radius">
                        <video id="presentation" class="float-start" width="100%" height="100%" muted="" playsinline="" loop="" preload="metadata" poster="https://tech.razen.co.id/swasta/video/presentation.jpg" data-auto-play="true">
                            <source src="https://tech.razen.co.id/swasta/video/vidiorazen.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
                </div>
            </div>
        </section>
        <div class="home-intro" id="home-intro">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col text-center">
                        <p class="mb-0"> Cara Tercepat untuk Mengembangkan Bisnis Anda dengan Teknologi </p>
                        <br>
                        <p class="custom-font-size-2 pt-2 text-white"> Razen Teknologi Siap Memberikan Fitur - Fitur Terbaik Sesuai Kebutuhan Bisnis Anda </p>
                    </div>
                </div>
            </div>
        </div>
        <section class="section section-no-border section-light position-relative z-index-3 pt-0 m-0">
            <div class="container pt-4">
                <div class="row align-items-center justify-content-between">
                <div class="my-3"></div>
                <div class="col-lg-10 text-center offset-lg-1">
                    <h2 class="font-weight-bold text-9 text-black mb-0"> 5 Produk Lengkap Untuk Menunjang Bisnis Anda </h2>
                </div>
                <div class="my-3"></div>
                <div class="row">
                    <div class="col">
                    <div class="tabs tabs-bottom tabs-center tabs-simple">
                        <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" href="#tabsNavigationSimple1" data-bs-toggle="tab" aria-selected="true" role="tab">
                            <img src="https://tech.razen.co.id/swasta/img/logos/GET-01.png" style="width: 250px" alt="">
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" href="#tabsNavigationSimple2" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab">
                            <img src="https://tech.razen.co.id/swasta/img/logos/GET-02.png" style="width: 250px" alt="">
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" href="#tabsNavigationSimple3" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab">
                            <img src="https://tech.razen.co.id/swasta/img/logos/GET-03.png" style="width: 250px" alt="">
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" href="#tabsNavigationSimple4" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab">
                            <img src="https://tech.razen.co.id/swasta/img/logos/GET-04.png" style="width: 250px" alt="">
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" href="#tabsNavigationSimple5" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab">
                            <img src="https://tech.razen.co.id/swasta/img/logos/GET-05.png" style="width: 250px" alt="">
                            </a>
                        </li>
                        </ul>
                        <div class="tab-content">
                        <div class="tab-pane active" id="tabsNavigationSimple1" role="tabpanel">
                            <div class="row align-items-center">
                            <div class="col-md-6 position-relative py-5">
                                <div class="appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="500" style="animation-delay: 500ms;">
                                <img class=" ls-is-cached lazyloaded" src="https://tech.razen.co.id/swasta/img/landing/porto_dots2.png" data-src="https://tech.razen.co.id/swasta/img/landing/porto_dots2.png" alt="" width="149" height="142" style="
                                            position: absolute;
                                            top: 90px;
                                            left: -20%;
                                        ">
                                </div>
                                <div class="appear-animation animated fadeInLeftShorter appear-animation-visible" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="0" data-appear-animation-duration="750" style="animation-delay: 0ms;">
                                <div class="strong-shadow rounded strong-shadow-top-left">
                                    <img src="https://tech.razen.co.id/swasta/img/zen-erp.png" data-src="https://tech.razen.co.id/swasta/img/zen-erp.png" class="img-fluid border border-width-10 border-color-light rounded box-shadow-3 ls-is-cached lazyloaded" alt="ERP">
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="border-right-light border-sm-none">
                                <h4 class="mb-2">GET ERP</h4>
                                <p class="mb-2"> “Platform Untuk Mengelola Seluruh Bisnis anda untuk operasional lebih produktif &amp; terintegrasi. Kurangi waktu untuk tugas administratif, dan lebih banyak waktu untuk bekerja, menggunakan Zen ERP, SISTEM BISNIS ALL-IN-ONE.” </p>
                                <div class="call-to-action-btn appear-animation mt-3 animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                                    <a href="https://tech.razen.co.id/zen-erp/" target="_blank" class="btn btn-primary font-weight-semibold px-3 py-2">Detail Produk</a>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabsNavigationSimple2" role="tabpanel">
                            <div class="row align-items-center">
                            <div class="col-md-6 position-relative py-5">
                                <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">
                                <img class="lazyload" src="https://tech.razen.co.id/swasta/img/lazy.png" data-src="https://tech.razen.co.id/swasta/img/landing/porto_dots2.png" alt="" width="149" height="142" style="
                                            position: absolute;
                                            top: 90px;
                                            left: -20%;
                                        ">
                                </div>
                                <div class="appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="0" data-appear-animation-duration="750">
                                <div class="strong-shadow rounded strong-shadow-top-left">
                                    <img src="https://tech.razen.co.id/swasta/img/StoreGo.png" data-src="https://tech.razen.co.id/swasta/img/StoreGo.png" class="lazyload img-fluid border border-width-10 border-color-light rounded box-shadow-3" alt="Porto Admin">
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="border-right-light border-sm-none">
                                <h4 class="mb-2">GET STORE</h4>
                                <p class="mb-2"> “Bangun toko merupakan e-commerce online yang bisa Anda gunakan untuk menjual produk Anda dalam hitungan menit. Buat toko impian Anda, tambahkan produk, kelola inventaris dan mulai untuk kembangkan bisnis Anda." </p>
                                <div class="call-to-action-btn appear-animation mt-3" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                    <a href="https://tech.razen.co.id/banguntoko/" target="_blank" class="btn btn-primary font-weight-semibold px-3 py-2">Detail Produk</a>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabsNavigationSimple3" role="tabpanel">
                            <div class="row align-items-center">
                            <div class="col-md-6 position-relative py-5">
                                <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">
                                <img class="lazyload" src="https://tech.razen.co.id/swasta/img/lazy.png" data-src="https://tech.razen.co.id/swasta/img/landing/porto_dots2.png" alt="" width="149" height="142" style="
                                            position: absolute;
                                            top: 90px;
                                            left: -20%;
                                        ">
                                </div>
                                <div class="appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="0" data-appear-animation-duration="750">
                                <div class="strong-shadow rounded strong-shadow-top-left">
                                    <img src="https://tech.razen.co.id/swasta/img/project.png" data-src="https://tech.razen.co.id/swasta/img/project.png" class="lazyload img-fluid border border-width-10 border-color-light rounded box-shadow-3" alt="Project">
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="border-right-light border-sm-none">
                                <h4 class="mb-2">GET PROJECT</h4>
                                <p class="mb-2"> “Semua fitur manajemen tugas diujung jari anda. Sistem dirancang untuk pengusaha dan manajer proyek yang mencari cara efisien untuk mengelola pekerjaan mereka. Buat proyek, tetapkan tugas, lacak waktu, buat faktur untuk klien, dan dapatkan bayaran - dalam beberapa klik.” </p>
                                <div class="call-to-action-btn appear-animation mt-3" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                    <a href="#" target="_blank" class="btn btn-primary font-weight-semibold px-3 py-2">Detail Produk</a>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabsNavigationSimple4" role="tabpanel">
                            <div class="row align-items-center">
                            <div class="col-md-6 position-relative py-5">
                                <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">
                                <img class="lazyload" src="https://tech.razen.co.id/swasta/img/lazy.png" data-src="https://tech.razen.co.id/swasta/img/landing/porto_dots2.png" alt="" width="149" height="142" style="
                                            position: absolute;
                                            top: 90px;
                                            left: -20%;
                                        ">
                                </div>
                                <div class="appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="0" data-appear-animation-duration="750">
                                <div class="strong-shadow rounded strong-shadow-top-left">
                                    <img src="https://tech.razen.co.id/swasta/img/crm.png" data-src="https://tech.razen.co.id/swasta/img/crm.png" class="lazyload img-fluid border border-width-10 border-color-light rounded box-shadow-3" alt="CRM">
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="border-right-light border-sm-none">
                                <h4 class="mb-2">GET CRM</h4>
                                <p class="mb-2"> “Satu - satunya alat yang anda perlukan untuk mengelola seluruh bisnis anda. Kelola setiap aspek bisnis Anda dengan sedikit atau tanpa usaha. Tetapkan proyek, tangani akuntansi, dan berkolaborasi dengan tim Anda. Kelola prospek dan ubah mereka menjadi klien - semuanya di satu tempat.” </p>
                                <div class="call-to-action-btn appear-animation mt-3" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                    <a href="#" target="_blank" class="btn btn-primary font-weight-semibold px-3 py-2">Detail Produk</a>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabsNavigationSimple5" role="tabpanel">
                            <div class="row align-items-center">
                            <div class="col-md-6 position-relative py-5">
                                <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">
                                <img class="lazyload" src="https://tech.razen.co.id/swasta/img/lazy.png" data-src="https://tech.razen.co.id/swasta/img/landing/porto_dots2.png" alt="" width="149" height="142" style="
                                            position: absolute;
                                            top: 90px;
                                            left: -20%;
                                        ">
                                </div>
                                <div class="appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="0" data-appear-animation-duration="750">
                                <div class="strong-shadow rounded strong-shadow-top-left">
                                    <img src="https://tech.razen.co.id/swasta/img/LMS.png" data-src="https://tech.razen.co.id/swasta/img/LMS.png" class="lazyload img-fluid border border-width-10 border-color-light rounded box-shadow-3" alt="LMS">
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="border-right-light border-sm-none">
                                <h4 class="mb-2">GET LMS</h4>
                                <p class="mb-2"> “Platform pendidikan dengan fitur yang lengkap untuk membantu instruktur membuat dan menerbitkan kursus video, kelas langsung serta kursus teks sebagai langkah untuk menghasilkan uang dan membantu siswa belajar dengan mudah.” </p>
                                <div class="call-to-action-btn appear-animation mt-3" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                    <a href="https://tech.razen.co.id/elearning/" target="_blank" class="btn btn-primary font-weight-semibold px-3 py-2">Detail Produk</a>
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
        <section class="section section-funnel position-relative border-0 pt-4 m-0">
            <div class="container">
                <div class="row mt-5 mb-5">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h2 class="text-color-dark font-weight-semibold text-6 line-height-3 mb-3"> Mengembangkan bisnis kecil bersama sama </h2>
                    <p class="mt-lg-5"> Kami membuat aplikasi web &amp; smartphone modern untuk membantu berbagai bisnis Anda. Kami akan memberikan fitur - fitur yang dapat membantu proses bisnis anda secara efisien. Segera menghubungi kami untuk menikmati kemudahan dalam bisnis anda. </p>
                    <div class="call-to-action-btn appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                    <a href="https://api.whatsapp.com/send?phone=6282299449494&amp;text=Hai%20Razen%20Teknologi,%20Saya%20dengan%20:................%20%20Dari%20:................%20Keperluan::................" target="_blank" class="btn btn-dark font-weight-semibold px-5 py-4">Pesan Sekarang</a>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-start">
                    <img src="https://tech.razen.co.id/swasta/img/listproduct.png" class="w-100" alt="list-product">
                </div>
                </div>
            </div>
        </section>
        <section class="home-testimonial">
            <div class="container backgroun mt-3">
                <div class="col-lg-10 text-center offset-lg-1 mt-lg-4">
                    <h4 class="text-9 text-black mb-0"> Testimoni Pengguna Produk Kami </h4>
                </div>
                <div class="gtco-testimonials">
                    <div class="owl-carousel owl-carousel1 owl-theme owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage" style="transition: all 0s ease 0s; width: 3720px; transform: translate3d(-744px, 0px, 0px);">
                                <div class="owl-item cloned" style="width: 372px;">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <h5>Farah Liza</h5>
                                            <p class="card-text"> “ Pendapatan bisnis saya semakin meningkat setelah menggunakan sistem yang disediakan oleh Razen Teknologi. ” </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 372px;">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <h5>Budi Basuki</h5>
                                            <p class="card-text"> “ Fitur - fitur yang di berikan pada sistem aplikasi milik Razen, sangat memberikan kemudahan dalam mengelola penjualan bisnis saya.” </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned active" style="width: 372px;">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <h5>Abdul Rahman</h5>
                                            <p class="card-text"> “ Sebelum menggunakan sistem razen pendatapan bisnis saya begitu - begitu saja, Setelah menggunakan sistem milik Razen Bisnis saya terus berkembang. ” </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active center" style="width: 372px;">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <h5>Halim Podiono</h5>
                                            <p class="card-text"> “ Aplikasi milik razen memiliki performa yang baik dan memiliki berbagai fitur - fitur yang memperluas bisnis saya. ” </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 372px;">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <h5>Farah Liza</h5>
                                            <p class="card-text"> “ Pendapatan bisnis saya semakin meningkat setelah menggunakan sistem yang disediakan oleh Razen Teknologi. ” </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 372px;">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <h5>Budi Basuki</h5>
                                            <p class="card-text"> “ Fitur - fitur yang di berikan pada sistem aplikasi milik Razen, sangat memberikan kemudahan dalam mengelola penjualan bisnis saya.” </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 372px;">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <h5>Abdul Rahman</h5>
                                            <p class="card-text"> “ Sebelum menggunakan sistem razen pendatapan bisnis saya begitu - begitu saja, Setelah menggunakan sistem milik Razen Bisnis saya terus berkembang. ” </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 372px;">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <h5>Halim Podiono</h5>
                                            <p class="card-text"> “ Aplikasi milik razen memiliki performa yang baik dan memiliki berbagai fitur - fitur yang memperluas bisnis saya. ” </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 372px;">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <h5>Farah Liza</h5>
                                            <p class="card-text"> “ Pendapatan bisnis saya semakin meningkat setelah menggunakan sistem yang disediakan oleh Razen Teknologi. ” </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 372px;">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <h5>Budi Basuki</h5>
                                            <p class="card-text"> “ Fitur - fitur yang di berikan pada sistem aplikasi milik Razen, sangat memberikan kemudahan dalam mengelola penjualan bisnis saya.” </p>
                                        </div>
                                    </div>
                                </div>
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
        <section class="call-to-action call-to-action-primary py-5 mt-5 appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" style="animation-delay: 100ms;">
            <div class="container">
                <div class="row py-5 my-5">
                    <div class="col-12 text-center">
                        <div class="call-to-action-content mb-5 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" style="animation-delay: 100ms;">
                            <h2 class="font-weight-normal text-color-light mb-2"> Website Swasta Menjadi Kebutuhkan Bisnis Anda Saat ini! </h2>
                            <p class="font-weight-light text-5 opacity-7 mb-0"> Website Company Profile Untuk UKM adalah Kebutuhan Anda untuk memiliki website profesional yang dibangun dengan web design premium, serta tampilan yang familiar. </p>
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

@extends('landing-page.layouts.app')
@section('title', 'Razen Teknologi | Aplikasi')

@section('content')
    @php
        use App\Models\LandingPageAplikasi;
        use GuzzleHttp\Client as GuzzleHttpClient;

        $aplikasi = LandingPageAplikasi::first();

        $section_1 = json_decode($aplikasi->section_1, true);
    @endphp
    <!-- breadcrumb area start -->
    <section class="breadcrumb pt-150 pb-150 bg_img" data-background="{{ asset('images/landing-page/aplikasi/'.$section_1['gambar']) }}"
        data-overlay="dark" data-opacity="5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb__wrap">
                        <h2 class="title">Aplikasi Kami.</h2>
                        <div class="breadcrumb__nav">
                            <ul>
                                <li><span>//</span></li>
                                <li><a href="{{ route('beranda') }}">Beranda</a></li>
                                <li>|</li>
                                <li>Aplikasi</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!--Products section start-->
    <section class="padding-bottom  padding-top products  px-lg-4" id="products">
        <div class="container-fluid col-sm-12 col-md-12 col-lg-11">
            <div class="row align-items-center no-gutters">
                <div class="col text-center carousel_btn d-none d-sm-block d-md-block d-lg-block d-xlblock" id="prevItem">
                    <i class="zmdi zmdi-chevron-left"></i>
                </div>
                <!--Tab Button start-->
                <div class="col-12 col-sm-10 col-md-10 col-lg-11 col-xl-11 mx-auto">
                    <div class="nav nav-tabs border-0" id="nav-tab" role="tablist">
                        <div class="products-slider owl-carousel owl-theme owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 3294px;">
                                    <div class="owl-item active" style="width: auto;">
                                        <div class="item">
                                            <a class=" border-0 nav-item nav-link active col" id="All_Products_tab" data-toggle="tab" href="#All_Products" role="tab" aria-controls="All_Products" aria-selected="true">
                                                <span>Semua Aplikasi</span>
                                            </a>
                                        </div>
                                    </div>
                                    @foreach ($kategoris as $kategori)
                                    <div class="owl-item active" style="width: auto;">
                                        <div class="item">
                                            <a class=" border-0 nav-item nav-link active col" id="kategori-{{$kategori->id}}_tab" data-toggle="tab" href="#kategori-{{$kategori->id}}" role="tab" aria-controls="kategori-{{$kategori->id}}" aria-selected="true">
                                                <span>{{$kategori->name}}</span>
                                            </a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="owl-nav disabled">
                                <button type="button" role="presentation" class="owl-prev">
                                    <span aria-label="Previous">‹</span>
                                </button>
                                <button type="button" role="presentation" class="owl-next">
                                    <span aria-label="Next">›</span>
                                </button>
                            </div>
                            <div class="owl-dots disabled"></div>
                        </div>
                    </div>
                </div>
                <!--Tab Button end-->
                <div class="col text-center carousel_btn d-none d-sm-block d-md-block d-lg-block d-xlblock" id="nextItem">
                    <i class="zmdi zmdi-chevron-right "></i>
                </div>
            </div>
            <!--Tab Content start-->
            <div class="tab-content " id="nav-tabContent">
                <div class="tab-pane All_Products_tab fade show active" id="All_Products" role="tabpanel" aria-labelledby="All_Products_tab">
                    <div class="container-fluid col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                            @php
                                $guzzleClient = new GuzzleHttpClient();

                                $get_all_products = $guzzleClient->get(env('RAZEN_URL').'api/product/razen-teknologi/product');
                                $all_products = json_decode($get_all_products->getBody())->data;

                                function random_color_part() {
                                    return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
                                }
                                function random_color() {
                                    return random_color_part() . random_color_part() . random_color_part();
                                }
                            @endphp
                            @foreach ($all_products as $item)
                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                    <div class="card border-0" style="background: #{{random_color()}}">
                                        <a class="d-flex w-100" target="_blank" href="{{ route('aplikasi.detail', ['id'=>$item->id]) }}">
                                            <div class="text-box">
                                                <h2>{{$item->nama}}</h2>
                                                <h3>{{strip_tags($item->deskripsi)}}</h3>
                                            </div>
                                            <div class="img_box">
                                                <img src="{{ env('RAZEN_URL') }}storage/{{json_decode($item->gambar)[0]}}" alt="{{strip_tags($item->deskripsi)}}" class="img-fluid wow slideInUp animated" data-wow-duration=".5s" loading="lazy" style="visibility: visible; animation-duration: 0.5s; animation-name: slideInUp;">
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="btn_box mx-auto col-8 col-sm-4 col-md-3 col-lg-3 col-xl-2 padding-top" id="products_btn_box">
                        <button type="button" id="show_more" class="btn primary_button rounded-pill btn-outline">
                            <span>Show more</span>
                        </button>

                        <button type="button" id="show_less" class="btn primary_button rounded-pill btn-outline">
                            <span>Show less</span>
                        </button>
                    </div>
                </div>
                @foreach ($kategoris as $kategori)
                    <div class="tab-pane fade" id="kategori-{{$kategori->id}}" role="tabpanel" aria-labelledby="kategori-{{$kategori->id}}_tab">
                        <div class="container-fluid col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="row">
                                @php
                                    $get_kategori_razen_teknologis = $guzzleClient->get(env('RAZEN_URL').'api/product/razen-teknologi/product/kategori/'.$kategori->id);
                                    $kategori_razen_teknologis = json_decode($get_kategori_razen_teknologis->getBody())->data;
                                @endphp
                                @foreach ($kategori_razen_teknologis as $item)
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                        <div class="card border-0" style="background: #{{random_color()}}">
                                            <a class="d-flex w-100" target="_blank" href="{{ route('aplikasi.detail', ['id'=>$item->id]) }}">
                                                <div class="text-box">
                                                    <h2>{{$item->nama}}</h2>
                                                    <h3>{{strip_tags($item->deskripsi)}}</h3>
                                                </div>
                                                <div class="img_box">
                                                    <img src="{{ env('RAZEN_URL') }}storage/{{json_decode($item->gambar)[0]}}" alt="{{strip_tags($item->deskripsi)}}" class="img-fluid wow slideInUp animated" data-wow-duration=".5s" loading="lazy" style="visibility: visible; animation-duration: 0.5s; animation-name: slideInUp;">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!--Tab Content end-->
        </div>
    </section>
    <!--Products section end-->
@endsection

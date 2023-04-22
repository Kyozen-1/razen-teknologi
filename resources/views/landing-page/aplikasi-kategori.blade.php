@extends('landing-page.layouts.app')
@section('title', 'Razen Teknologi | Aplikasi | Kategori')

@section('content')
    @php
        use App\Models\LandingPageAplikasi;

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
                        <h2 class="title">Aplikasi Berdasarkan Kategori</h2>
                        <div class="breadcrumb__nav">
                            <ul>
                                <li><span>//</span></li>
                                <li><a href="{{ route('beranda') }}">Beranda</a></li>
                                <li>|</li>
                                <li><a href="{{ route('aplikasi') }}">Aplikasi</a></li>
                                <li>|</li>
                                <li>Kategori</li>
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
            <div class="tab-content ">
                <div class=" tab-pane fade show active" role="tabpanel">
                    <div class="container-fluid col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                            @php
                                function random_color_part() {
                                    return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
                                }
                                function random_color() {
                                    return random_color_part() . random_color_part() . random_color_part();
                                }
                            @endphp
                            @foreach ($kategori_razen_teknologis as $kategori)
                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                    <div class="card border-0" style="background: #{{random_color()}}">
                                        <a class="d-flex w-100" target="_blank" href="{{ route('aplikasi.detail', ['id'=>$kategori->id]) }}">
                                            <div class="text-box">
                                                <h2>{{$kategori->nama}}</h2>
                                                <h3>{{strip_tags($kategori->deskripsi)}}</h3>
                                            </div>
                                            <div class="img_box">
                                                <img src="{{ env('RAZEN_URL') }}storage/{{json_decode($kategori->gambar)[0]}}" alt="{{strip_tags($kategori->deskripsi)}}" class="img-fluid wow slideInUp animated" data-wow-duration=".5s" loading="lazy" style="visibility: visible; animation-duration: 0.5s; animation-name: slideInUp;">
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Products section end-->
@endsection

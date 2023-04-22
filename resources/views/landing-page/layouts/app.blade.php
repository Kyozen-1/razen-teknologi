<!doctype html>
<html class="no-js" lang="zxx">

    @include('landing-page.layouts.head')

<body>
    @php
        use App\Models\Profil;
        use GuzzleHttp\Client as GuzzleHttpClient;
        use Carbon\Carbon;

        $profil = Profil::first();

        $guzzleClient = new GuzzleHttpClient();

        $get_kategori_razen_teknologis = $guzzleClient->get(env('RAZEN_URL').'api/product/category/razen-teknologi');
        $kategori_razen_teknologis = json_decode($get_kategori_razen_teknologis->getBody())->data;
        // dd($kategori_razen_teknologis);
    @endphp
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- preloader  -->
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    @php
                        $split_nama = str_split($profil->nama);
                    @endphp
                        @for ($i = 0; $i < count($split_nama); $i++)
                            <span data-text-preloader="{{$split_nama[$i]}}" class="letters-loading">
                                {{$split_nama[$i]}}
                            </span>
                        @endfor
					</div>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- preloader end -->

    <!-- header start -->
    @include('landing-page.layouts.header')
    <!-- header end -->

    <div class="menuButton" id="openMenu">
        <i class="zmdi zmdi-menu"></i>
    </div>

    <!--Category menu Start-->
    <div class="categoryMenu" id="categoryMenu">
        <!-- <div class="MenuHeader py-5 col-11 col-md-10 mx-auto px-0">
            <h2 class="d-flex">Mobile App Categories
                <span class="mr-0 ml-auto" id="cloesMenu">
                    <i class="zmdi zmdi-close-circle" style="font-size: 1.6rem;"></i>
                </span>
            </h2>
        </div> -->
        <div class="d-flex">
            <h2 class="header_text">Kategori Aplikasi</h2>
            <div class="w-100" style="padding-top: 40px;">
                <div class="list-group d-block col-12 col-md-12 col-xl-12 mx-auto px-0">
                    <div class="row">
                        @foreach ($kategori_razen_teknologis as $kategori)
                            <div class="col-12 col-md-4 col-lg-3">
                                <a href="{{ route('aplikasi.kategori', ['id'=>$kategori->id]) }}" class="list-group-item list-group-item-action">
                                    <div class="item-header d-flex">
                                        <h5 class="mb-1">{{$kategori->name}}</h5>
                                        <div class="img_box mr-0 ml-auto">
                                            <img src="https://shop.razen.co.id/storage/{{$kategori->image}}" class="img-fluid" alt="{{$kategori->name}}" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="text_box">
                                        {!! $kategori->description !!}
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <i class="zmdi zmdi-close-circle" style="font-size: 1.6rem;" id="cloesMenu"></i>
        </div>

    </div>
    <!--Category menu end-->

    @yield('content')

    @include('landing-page.layouts.footer')

    <!--========= JS Here =========-->
    @include('landing-page.layouts.js')
</body>

</html>

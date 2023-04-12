<!doctype html>
<html class="no-js" lang="zxx">

    @include('landing-page.layouts.head')

<body>
    @php
        use App\Models\Profil;

        $profil = Profil::first();
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

    @yield('content')

    @include('landing-page.layouts.footer')

    <!--========= JS Here =========-->
    @include('landing-page.layouts.js')
</body>

</html>

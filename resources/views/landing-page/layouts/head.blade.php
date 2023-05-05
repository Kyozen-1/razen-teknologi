@php
    use App\Models\Profil;

    $profil = Profil::first();
@endphp

<head>

    <!--========= Required meta tags =========-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>@yield('title', 'TechBuzz - Multipurpose Technology HTML5 Template')</title>

    <!--====== Favicon ======-->
    <link rel="shortcut icon" href="{{ asset('images/razen-teknologi/logo/'.$profil->logo_kecil) }}" type="images/x-icon" />

    <!--====== CSS Here ======-->
    <link rel="stylesheet" href="{{ asset('techbuzz/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('techbuzz/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('techbuzz/assets/css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset('techbuzz/assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('techbuzz/assets/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('techbuzz/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('techbuzz/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('techbuzz/assets/css/style.css') }}">
    <link rel="stylesheet" href="https://opuslab.works/css/style.css">
    <link rel="stylesheet" href="https://opuslab.works/css/animate.css">
    <link rel="stylesheet" href="https://opuslab.works/css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://opuslab.works/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <style>
        @font-face {
            font-family: 'Google Sans';
            src: url('{{ asset('font/GoogleSans-Medium.ttf') }}') format('truetype');
            font-weight: 500;
            font-style: normal;
            font-display: swap;
        }



        @font-face {
            font-family: 'Google Sans';
            src: url('{{ asset('font/GoogleSans-Regular.ttf') }}') format('truetype');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Google Sans';
            src: url('{{ asset('font/GoogleSans-Bold.ttf') }}') format('truetype');
            font-weight: bold;
            font-style: normal;
            font-display: swap;
        }

    </style>
    @yield('css')
</head>

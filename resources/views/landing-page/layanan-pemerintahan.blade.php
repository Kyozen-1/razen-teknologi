@extends('landing-page.layouts.app')
@section('title', 'Razen Teknologi | Layanan | Pemerintahan')

@section('css')
    <link data-minify="1" rel="stylesheet" href="{{ asset('css/layanan/pemerintahan/plugindc83.css') }}">
    <link data-minify="1" rel="stylesheet" href="{{ asset('css/layanan/pemerintahan/home528a.css') }}">
    <link rel="stylesheet" id="wp-block-library-css" href="{{ asset('css/layanan/pemerintahan/style.minae48.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="classic-theme-styles-css" href="{{ asset('css/layanan/pemerintahan/classic-themes.minae48.css') }}" type="text/css" media="all">

    <style id="global-styles-inline-css" type="text/css">
        body {
        --wp--preset--color--black: #000000;
        --wp--preset--color--cyan-bluish-gray: #abb8c3;
        --wp--preset--color--white: #ffffff;
        --wp--preset--color--pale-pink: #f78da7;
        --wp--preset--color--vivid-red: #cf2e2e;
        --wp--preset--color--luminous-vivid-orange: #ff6900;
        --wp--preset--color--luminous-vivid-amber: #fcb900;
        --wp--preset--color--light-green-cyan: #7bdcb5;
        --wp--preset--color--vivid-green-cyan: #00d084;
        --wp--preset--color--pale-cyan-blue: #8ed1fc;
        --wp--preset--color--vivid-cyan-blue: #0693e3;
        --wp--preset--color--vivid-purple: #9b51e0;
        --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(
            135deg,
            rgba(6, 147, 227, 1) 0%,
            rgb(155, 81, 224) 100%
        );
        --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(
            135deg,
            rgb(122, 220, 180) 0%,
            rgb(0, 208, 130) 100%
        );
        --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(
            135deg,
            rgba(252, 185, 0, 1) 0%,
            rgba(255, 105, 0, 1) 100%
        );
        --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(
            135deg,
            rgba(255, 105, 0, 1) 0%,
            rgb(207, 46, 46) 100%
        );
        --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(
            135deg,
            rgb(238, 238, 238) 0%,
            rgb(169, 184, 195) 100%
        );
        --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(
            135deg,
            rgb(74, 234, 220) 0%,
            rgb(151, 120, 209) 20%,
            rgb(207, 42, 186) 40%,
            rgb(238, 44, 130) 60%,
            rgb(251, 105, 98) 80%,
            rgb(254, 248, 76) 100%
        );
        --wp--preset--gradient--blush-light-purple: linear-gradient(
            135deg,
            rgb(255, 206, 236) 0%,
            rgb(152, 150, 240) 100%
        );
        --wp--preset--gradient--blush-bordeaux: linear-gradient(
            135deg,
            rgb(254, 205, 165) 0%,
            rgb(254, 45, 45) 50%,
            rgb(107, 0, 62) 100%
        );
        --wp--preset--gradient--luminous-dusk: linear-gradient(
            135deg,
            rgb(255, 203, 112) 0%,
            rgb(199, 81, 192) 50%,
            rgb(65, 88, 208) 100%
        );
        --wp--preset--gradient--pale-ocean: linear-gradient(
            135deg,
            rgb(255, 245, 203) 0%,
            rgb(182, 227, 212) 50%,
            rgb(51, 167, 181) 100%
        );
        --wp--preset--gradient--electric-grass: linear-gradient(
            135deg,
            rgb(202, 248, 128) 0%,
            rgb(113, 206, 126) 100%
        );
        --wp--preset--gradient--midnight: linear-gradient(
            135deg,
            rgb(2, 3, 129) 0%,
            rgb(40, 116, 252) 100%
        );
        --wp--preset--duotone--dark-grayscale: url("#wp-duotone-dark-grayscale");
        --wp--preset--duotone--grayscale: url("#wp-duotone-grayscale");
        --wp--preset--duotone--purple-yellow: url("#wp-duotone-purple-yellow");
        --wp--preset--duotone--blue-red: url("#wp-duotone-blue-red");
        --wp--preset--duotone--midnight: url("#wp-duotone-midnight");
        --wp--preset--duotone--magenta-yellow: url("#wp-duotone-magenta-yellow");
        --wp--preset--duotone--purple-green: url("#wp-duotone-purple-green");
        --wp--preset--duotone--blue-orange: url("#wp-duotone-blue-orange");
        --wp--preset--font-size--small: 13px;
        --wp--preset--font-size--medium: 20px;
        --wp--preset--font-size--large: 36px;
        --wp--preset--font-size--x-large: 42px;
        --wp--preset--spacing--20: 0.44rem;
        --wp--preset--spacing--30: 0.67rem;
        --wp--preset--spacing--40: 1rem;
        --wp--preset--spacing--50: 1.5rem;
        --wp--preset--spacing--60: 2.25rem;
        --wp--preset--spacing--70: 3.38rem;
        --wp--preset--spacing--80: 5.06rem;
        --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
        --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1),
            6px 6px rgba(0, 0, 0, 1);
        --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }
        :where(.is-layout-flex) {
        gap: 0.5em;
        }
        body .is-layout-flow > .alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
        }
        body .is-layout-flow > .alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
        }
        body .is-layout-flow > .aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
        }
        body .is-layout-constrained > .alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
        }
        body .is-layout-constrained > .alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
        }
        body .is-layout-constrained > .aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
        }
        body
        .is-layout-constrained
        > :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
        max-width: var(--wp--style--global--content-size);
        margin-left: auto !important;
        margin-right: auto !important;
        }
        body .is-layout-constrained > .alignwide {
        max-width: var(--wp--style--global--wide-size);
        }
        body .is-layout-flex {
        display: flex;
        }
        body .is-layout-flex {
        flex-wrap: wrap;
        align-items: center;
        }
        body .is-layout-flex > * {
        margin: 0;
        }
        :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
        }
        .has-black-color {
        color: var(--wp--preset--color--black) !important;
        }
        .has-cyan-bluish-gray-color {
        color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }
        .has-white-color {
        color: var(--wp--preset--color--white) !important;
        }
        .has-pale-pink-color {
        color: var(--wp--preset--color--pale-pink) !important;
        }
        .has-vivid-red-color {
        color: var(--wp--preset--color--vivid-red) !important;
        }
        .has-luminous-vivid-orange-color {
        color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }
        .has-luminous-vivid-amber-color {
        color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }
        .has-light-green-cyan-color {
        color: var(--wp--preset--color--light-green-cyan) !important;
        }
        .has-vivid-green-cyan-color {
        color: var(--wp--preset--color--vivid-green-cyan) !important;
        }
        .has-pale-cyan-blue-color {
        color: var(--wp--preset--color--pale-cyan-blue) !important;
        }
        .has-vivid-cyan-blue-color {
        color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }
        .has-vivid-purple-color {
        color: var(--wp--preset--color--vivid-purple) !important;
        }
        .has-black-background-color {
        background-color: var(--wp--preset--color--black) !important;
        }
        .has-cyan-bluish-gray-background-color {
        background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }
        .has-white-background-color {
        background-color: var(--wp--preset--color--white) !important;
        }
        .has-pale-pink-background-color {
        background-color: var(--wp--preset--color--pale-pink) !important;
        }
        .has-vivid-red-background-color {
        background-color: var(--wp--preset--color--vivid-red) !important;
        }
        .has-luminous-vivid-orange-background-color {
        background-color: var(
            --wp--preset--color--luminous-vivid-orange
        ) !important;
        }
        .has-luminous-vivid-amber-background-color {
        background-color: var(
            --wp--preset--color--luminous-vivid-amber
        ) !important;
        }
        .has-light-green-cyan-background-color {
        background-color: var(--wp--preset--color--light-green-cyan) !important;
        }
        .has-vivid-green-cyan-background-color {
        background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }
        .has-pale-cyan-blue-background-color {
        background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }
        .has-vivid-cyan-blue-background-color {
        background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }
        .has-vivid-purple-background-color {
        background-color: var(--wp--preset--color--vivid-purple) !important;
        }
        .has-black-border-color {
        border-color: var(--wp--preset--color--black) !important;
        }
        .has-cyan-bluish-gray-border-color {
        border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }
        .has-white-border-color {
        border-color: var(--wp--preset--color--white) !important;
        }
        .has-pale-pink-border-color {
        border-color: var(--wp--preset--color--pale-pink) !important;
        }
        .has-vivid-red-border-color {
        border-color: var(--wp--preset--color--vivid-red) !important;
        }
        .has-luminous-vivid-orange-border-color {
        border-color: var(
            --wp--preset--color--luminous-vivid-orange
        ) !important;
        }
        .has-luminous-vivid-amber-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }
        .has-light-green-cyan-border-color {
        border-color: var(--wp--preset--color--light-green-cyan) !important;
        }
        .has-vivid-green-cyan-border-color {
        border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }
        .has-pale-cyan-blue-border-color {
        border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }
        .has-vivid-cyan-blue-border-color {
        border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }
        .has-vivid-purple-border-color {
        border-color: var(--wp--preset--color--vivid-purple) !important;
        }
        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
        background: var(
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple
        ) !important;
        }
        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
        background: var(
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan
        ) !important;
        }
        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
        background: var(
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange
        ) !important;
        }
        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
        background: var(
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red
        ) !important;
        }
        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
        background: var(
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray
        ) !important;
        }
        .has-cool-to-warm-spectrum-gradient-background {
        background: var(
            --wp--preset--gradient--cool-to-warm-spectrum
        ) !important;
        }
        .has-blush-light-purple-gradient-background {
        background: var(--wp--preset--gradient--blush-light-purple) !important;
        }
        .has-blush-bordeaux-gradient-background {
        background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }
        .has-luminous-dusk-gradient-background {
        background: var(--wp--preset--gradient--luminous-dusk) !important;
        }
        .has-pale-ocean-gradient-background {
        background: var(--wp--preset--gradient--pale-ocean) !important;
        }
        .has-electric-grass-gradient-background {
        background: var(--wp--preset--gradient--electric-grass) !important;
        }
        .has-midnight-gradient-background {
        background: var(--wp--preset--gradient--midnight) !important;
        }
        .has-small-font-size {
        font-size: var(--wp--preset--font-size--small) !important;
        }
        .has-medium-font-size {
        font-size: var(--wp--preset--font-size--medium) !important;
        }
        .has-large-font-size {
        font-size: var(--wp--preset--font-size--large) !important;
        }
        .has-x-large-font-size {
        font-size: var(--wp--preset--font-size--x-large) !important;
        }
        .wp-block-navigation a:where(:not(.wp-element-button)) {
        color: inherit;
        }
        :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
        }
        .wp-block-pullquote {
        font-size: 1.5em;
        line-height: 1.6;
        }
    </style>

    <link data-minify="1" rel="stylesheet" id="wpml-blocks-css" href="{{ asset('css/layanan/pemerintahan/stylesdc83.css') }}" type="text/css" media="all">
    <link data-minify="1" rel="stylesheet" id="lana-downloads-manager-css" href="{{ asset('css/layanan/pemerintahan/lana-downloads-managerdc83.css') }}" type="text/css" media="all">
    <link data-minify="1" rel="stylesheet" id="cms-navigation-style-base-css" href="{{ asset('css/layanan/pemerintahan/cms-navigation-basedc83.css') }}" type="text/css" media="screen">
    <link data-minify="1" rel="stylesheet" id="cms-navigation-style-css" href="{{ asset('css/layanan/pemerintahan/cms-navigationdc83.css') }}" type="text/css" media="screen">
    <noscript>
        <style id="rocket-lazyload-nojs-css">
        .rll-youtube-player,
        [data-lazy-src] {
            display: none !important;
            }
        </style>
    </noscript>
@endsection

@section('content')
    @php
        use App\Models\Profil;
        use App\Models\LandingPageLayananPemerintahan;

        $profil = Profil::first();

        $layanan_pemerintahan = LandingPageLayananPemerintahan::first();

        $section_1 = json_decode($layanan_pemerintahan->section_1, true);
        $section_2 = json_decode($layanan_pemerintahan->section_2, true);
        $section_3 = json_decode($layanan_pemerintahan->section_3, true);
        $section_4 = json_decode($layanan_pemerintahan->section_4, true);
        $section_5 = json_decode($layanan_pemerintahan->section_5, true);
        $section_6 = json_decode($layanan_pemerintahan->section_6, true);
        $section_7 = json_decode($layanan_pemerintahan->section_7, true);
    @endphp
    <div class="web-wrapper">
        <main class="insight">
            <section class="masthead masthead--hero" id="masthead">
                <div class="container masthead__wrap">
                    <div class="masthead__content">
                        <div class="row align-items-center">
                            <div class="col-lg-6 masthead__left">
                                <h1 class="masthead__title" itemprop="headline"> {{$section_1?$section_1['judul'] : ''}} </h1>
                                <div class="masthead__media show-sm">
                                    <div class="media media--video">
                                        <img class="lazyload media__cover"
                                            data-lazy-src="{{ asset('images/landing-page/layanan/pemerintahan/'.$section_1['gambar']) }}">
                                        <a class="btn-play--blue" href="{{$section_1?$section_1['tautan'] : ''}}" data-lity="data-lity">
                                            <span class="bg">
                                                <span>Lihat video</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="masthead__action show-sm">
                                    <a id="" class="btn btn-blue cta-waba text-center show" href="https://api.whatsapp.com/send?phone={{$profil->no_hp}}&text=Hai%20Razen%20Teknologi,%20Saya%20dengan%20:................%20%20Dari%20:................%20Keperluan::................" target="_blank" rel="noreferrer">Hubungi sales</a>
                                    <a id="" class="btn btn-blue-border" href="https://api.whatsapp.com/send?phone={{$profil->no_hp}}&amp;text=hai%20razen%20teknologi,%20saya%20dengan%20:................%20%20dari%20:................%20keperluan::%20ingin%20mencoba%20produk%20dinas%20dari%20razen%20teknologi" target="_blank" rel="noreferrer">Coba Demo</a>
                                </div>
                                <div class="masthead__desc">
                                    <ul class="custom-list">
                                        @if ($section_1['konten'] != '')
                                            @foreach ($section_1['konten'] as $item)
                                                <li>{{$item['item']}}</li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>
                                <div class="masthead__action hidden-sm">
                                    <a id="" class="btn btn-blue cta-waba show" href="https://api.whatsapp.com/send?phone={{$profil->no_hp}}&text=Hai%20Razen%20Teknologi,%20Saya%20dengan%20:................%20%20Dari%20:................%20Keperluan::................" target="_blank" rel="noreferrer">Hubungi sales</a>
                                </div>
                            </div>
                            <div class="col-lg-6 masthead__right">
                                <div class="masthead__media hidden-sm">
                                    <div class="media media--video">
                                        <img class="lazyload media__cover entered lazyloaded"
                                        data-lazy-src="{{ asset('images/landing-page/layanan/pemerintahan/'.$section_1['gambar']) }}">
                                        <a class="btn-play--blue" href="{{$section_1?$section_1['tautan'] : ''}}" data-lity="data-lity">
                                            <span class="bg">
                                                <span>Lihat video</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="our-customer our-customer--alt" id="clients">
                <div class="our-customer__wrap">
                <h2 class="our-customer__title"> {{$section_2?$section_2['judul'] : ''}} </h2>
                </div>
                <div class="logo-marquee__group">
                    <div class="logo-marquee__list" style="min-width: 1764px">
                        @foreach ($dinas as $item)
                            <li class="item">
                                <img data-lazy-src="{{asset('images/landing-page/layanan/pemerintahan/data/dinas/'.$item->foto)}}">
                            </li>
                        @endforeach
                    </div>
                    <div class="logo-marquee__list" aria-hidden="true" style="min-width: 1764px">
                        @foreach ($dinas as $item)
                            <li class="item">
                                <img data-lazy-src="{{asset('images/landing-page/layanan/pemerintahan/data/dinas/'.$item->foto)}}">
                            </li>
                        @endforeach
                    </div>
                </div>
                <div class="logo-marquee__group reverse">
                    <div class="logo-marquee__list" style="min-width: 1764px">
                        @foreach ($dinas as $item)
                            <li class="item">
                                <img data-lazy-src="{{asset('images/landing-page/layanan/pemerintahan/data/dinas/'.$item->foto)}}">
                            </li>
                        @endforeach
                    </div>
                    <div class="logo-marquee__list" aria-hidden="true" style="min-width: 1764px">
                        @foreach ($dinas as $item)
                            <li class="item">
                                <img data-lazy-src="{{asset('images/landing-page/layanan/pemerintahan/data/dinas/'.$item->foto)}}">
                            </li>
                        @endforeach
                    </div>
                </div>
            </section>
            <section class="tab-feature" id="feature">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="tab-feature__head">
                                <h2 class="tab-feature__title"> {{$section_3?$section_3['judul'] : ''}} </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <ul class="tab-feature__nav nav nav-tabs">
                                @foreach ($produk_unggulans as $produk_unggulan)
                                    <li class="nav-item">
                                        <a class="nav-link @if($loop->first) active @endif" href="#tf-{{$produk_unggulan->id}}" data-toggle="tab">{{$produk_unggulan->judul}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-12">
                            <div class="tab-content">
                                @foreach ($produk_unggulans as $produk_unggulan)
                                    <div class="tab-pane fade @if($loop->first) active show @endif" id="tf-{{$produk_unggulan->id}}">
                                        <div class="tab-feature__content">
                                            <div class="row justify-content center align-items-center">
                                                <div class="col-md-6 col-12">
                                                    <div class="tab-feature__toggle">
                                                        <h3 class="tab-feature__title">{{$produk_unggulan->judul}}</h3>
                                                    </div>
                                                    <div class="tab-feature__meta">
                                                        <h3 class="tab-feature__title">{{$produk_unggulan->judul}}</h3>
                                                        <div class="tab-feature__desc">
                                                            <p>{{$produk_unggulan->deskripsi}}</p>
                                                        </div>
                                                        <div class="tab-feature__action">
                                                            <a id="" class="link-more" href="{{$produk_unggulan->link}}" target="blank">Pelajari selengkapnya</a>
                                                        </div>
                                                        <div class="tab-feature__img">
                                                            <div class="media media--video">
                                                                <img class="lazyload media__cover" data-lazy-src="{{ asset('images/landing-page/layanan/pemerintahan/data/produk-unggulan/'.$produk_unggulan->gambar) }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="tab-feature__img">
                                                        <div class="media media--video">
                                                            <img class="lazyload media__cover entered error" data-lazy-src="{{ asset('images/landing-page/layanan/pemerintahan/data/produk-unggulan/'.$produk_unggulan->gambar) }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="items-block items-block--alt" id="items">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="item-block__head">
                                <h2 class="items-block__title"> {{$section_4?$section_4['judul'] : ''}} </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center align-items-top">
                        <div class="col-12">
                            <div class="items-block__wrap">
                                @if ($section_4['konten'] != '')
                                    @foreach ($section_4['konten'] as $item)
                                        <div class="item">
                                            <div class="item__icon">
                                                <img data-lazy-src="{{ asset('images/landing-page/layanan/pemerintahan/'.$item['gambar']) }}" class="entered lazyloaded">
                                            </div>
                                            <div class="item__icon item__icon--sm">
                                                <img data-lazy-src="{{ asset('images/landing-page/layanan/pemerintahan/'.$item['gambar']) }}">
                                            </div>
                                            <label class="item__title">{{$item['item']}}</label>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="items-block__action">
                                <a id="" class="btn btn-blue cta-waba show" href="https://api.whatsapp.com/send?phone={{$profil->no_hp}}&text=Hai%20Razen%20Teknologi,%20Saya%20dengan%20:................%20%20Dari%20:................%20Keperluan::................" target="_blank" rel="noreferrer">Hubungi sales</a>
                                <a id="" class="link-more" href="{{ route('aplikasi') }}" target="_self">Produk Razen</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- testimonial area start -->
            <section class="testimonial__area testimonial__area--2 grey-bg pt-95 pb-95">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-xl-7 text-center">
                            <div class="section__heading mb-50">
                                <h4 class="section__heading--title-small"><span class="mr-10">//</span>{{$section_5?$section_5['sub_judul'] : ''}}<span class="ml-10">//</span></h4>
                                <h1 class="section__heading--transparent white">Testimoni</h1>
                                <h2 class="section__heading--title"> {{$section_5?$section_5['judul'] : ''}}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="testimonials__2 owl-carousel">
                                @foreach ($testimoni_pemerintahs as $testimoni_pemerintah)
                                    <div class="testimonial">
                                        <h4 class="title mb-25">{{$testimoni_pemerintah->judul_testimoni}}</h4>
                                        <p>{{$testimoni_pemerintah->testimoni}}</p>
                                        <div class="authore mt-35 d-flex align-items-center">
                                            <div class="authore--thumb mr-20">
                                                <img src="{{ asset('images/landing-page/layanan/pemerintahan/data/testimoni-pemerintah/'.$testimoni_pemerintah->foto) }}" style="height: 3rem;">
                                            </div>
                                            <div class="authore--content">
                                                <h5 class="name">{{$testimoni_pemerintah->nama}}</h5>
                                                <span class="designatin">{{$testimoni_pemerintah->jabatan}}</span>
                                            </div>
                                        </div>
                                        <img src="{{ asset('techbuzz/assets/images/icons/quote.png') }}" alt="" class="quote-icon">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial area end -->

            <section class="items-accr" id="items-accr">
                <div class="container items-accr__wrap">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-5 col-md-10">
                            <div class="section-head align-left">
                                <h2 class="section-head__title"> {{$section_6?$section_6['judul'] : ''}} </h2>
                                <div class="section-head__content">
                                    <p>{{$section_6?$section_6['deskripsi'] : ''}}</p>
                                </div>
                                <div class="section-head__action">
                                    <a id="" class="btn btn-blue" href="{{ route('kontak') }}" target="_self">Cari Konsultan Sekarang</a>
                                </div>
                            </div>
                            <div class="accordion" id="acchj">
                                @if ($section_6['konten'] != '')
                                    @foreach ($section_6['konten'] as $item)
                                        <div class="card">
                                            <div class="card__header collapsed" id="acchjh{{$item['id']}}" data-toggle="collapse" data-target="#acchjb{{$item['id']}}"
                                                aria-expanded="false" aria-controls="acchjb{{$item['id']}}">
                                                <h3 class="card__title">{{$item['pertanyaan']}}</h3>
                                            </div>
                                            <div class="collapse" id="acchjb{{$item['id']}}" aria-labelledby="acchjh{{$item['id']}}" data-parent="#acchj">
                                                <div class="card__body">
                                                    <p> {{$item['jawaban']}} </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6 offset-lg-1">
                            <div class="items-accr__img hidden">
                                <img class="lazyload" data-bg="" src="#">
                            </div>
                            <img class="hidden-sm entered lazyloaded" data-lazy-src="{{ asset('images/landing-page/layanan/pemerintahan/'.$section_6['gambar']) }}">
                        </div>
                    </div>
                </div>
            </section>

            <section class="faq-block faq-block--alt">
                <div class="container faq-block__wrap">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="section-head align-left">
                                <h2 class="section-head__title"> {{$section_7?$section_7['judul'] : ''}}</h2>
                                <div class="section-head__content" style="max-width: 400px">
                                <p>{{$section_7?$section_7['deskripsi'] : ''}}</p>
                                </div>
                                <div class="section-head__action">
                                    <a id="" class="btn btn-blue cta-waba show" href="https://api.whatsapp.com/send?phone={{$profil->no_hp}}&text=Hai%20Razen%20Teknologi,%20Saya%20dengan%20:................%20%20Dari%20:................%20Keperluan::................" target="_blank" rel="noreferrer">Hubungi sales</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="accordion accordion--faq" id="accfaq">
                                @if ($section_7['konten'] != '')

                                    @foreach ($section_7['konten'] as $item)
                                        <div class="card">
                                            <div class="card__header collapsed" id="accfaqh{{$item['id']}}" data-target="#accfaqb{{$item['id']}}" data-toggle="collapse"
                                            aria-expanded="false" aria-controls="accfaqb{{$item['id']}}">
                                                <h3 class="card__title" style="font-weight: bold"> {{$item['pertanyaan']}} </h3>
                                            </div>
                                            <div class="collapse" id="accfaqb{{$item['id']}}" data-parent="#accfaq">
                                                <div class="card__body" style="font-weight:normal">
                                                    {{$item['jawaban']}}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <div class="tf tf--alt">
                <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-12 tf_item is-highlight text-center">
                        <img class="mb-16 entered lazyloaded" width="80" height="80" src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/ic-user-response.svg" alt="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/ic-user-response.svg" data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/ic-user-response.svg" data-ll-status="loaded">
                        <noscript>
                            <img class="mb-16" width="80" height="80" src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/ic-user-response.svg" alt="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/ic-user-response.svg" />
                        </noscript>
                        <div class="tf-cta__title text-center">Lihat Pitchdeck</div>
                        <p class="text-white">Akses seluruh produk pemerintahan kami, jadwalkan sesi demo dengan sales kami</p>
                        <a class="btn btn-blue" href="https://api.whatsapp.com/send?phone=6282299449494&amp;text=Hai%20Razen%20Teknologi,%20Saya%20dengan%20:................%20%20Dari%20:................%20Keperluan::%20Ingin%20melihat%20demo%20produk%20produk%20Dinas%20dari%20Razen%20Teknologi" target="_blank">Download Penawaran</a>
                    </div>
                    <div class="col-md-6 col-12 tf_item is-highlight text-center">
                        <img class="mb-16 entered lazyloaded" width="80" height="80" src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/calendar.png" alt="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/calendar.png" data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/calendar.png" data-ll-status="loaded">
                        <noscript>
                            <img class="mb-16" width="80" height="80" src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/calendar.png" alt="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/calendar.png" />
                        </noscript>
                        <div class="tf-cta__title text-center">Jadwalkan Demo</div>
                        <p class="text-white"> Jadwalkan sesi demo dan konsultasikan kebutuhan Anda langsung dengan sales kami </p>
                        <a class="btn btn-white" href="https://api.whatsapp.com/send?phone=6282299449494&amp;text=Hai%20Razen%20Teknologi,%20Saya%20dengan%20:................%20%20Dari%20:................%20Keperluan::%20Ingin%20melihat%20demo%20produk%20produk%20Dinas%20dari%20Razen%20Teknologi" target="_blank">Jadwalkan demo</a>
                    </div>
                </div>
                </div>
            </div>
        </main>
    </div>
@endsection

@section('js')
<script>
    $(document).ready(function() {
        $("#show_more").click(function() {
            $("#All_Products").addClass("fullHight");
            $("#products_btn_box").addClass("fullHight");
        });

        $(".darkTheme_lightThemeButton").click(function() {
            $("body").toggleClass("dark_theme");
        });
    });

    $(document).ready(function() {
        $("#show_less").click(function() {
            $("#All_Products").removeClass("fullHight");
            $("#products_btn_box").removeClass("fullHight");
        });
    });

    var slider = $('.products-slider.owl-carousel');
    $('.products-slider.owl-carousel').owlCarousel({
        margin: 0,
        items: 3,
        dots: false,
        autoWidth: true,
        smartSpeed: 200,
    })

    $('#nextItem').click(function() {
        slider.trigger('next.owl.carousel');
    });

    $('#prevItem').click(function() {
        slider.trigger('prev.owl.carousel');
    });

    $(document).ready(function() {
        var a = $(".owl-item a ");
        $(".owl-item a").click(function() {
            a.removeClass('active');
        });
    });

    $('.testimonials_carousel').owlCarousel({
        loop: false,
        items: 3,
        autoplay: false,
        smartSpeed: 2000,
        responsiveClass: true,
        nav: false,
        dots: true,
        margin: 30,
        stagePadding: 50,
        responsive: {
            0: {
                items: 1,
                margin: 10,
                stagePadding: 10,
            },
            1199: {
                items: 2,
                margin: 10,
                stagePadding: 10,
                autoWidth: true,
            },
        },
    });

    $("#openMenu").click(function() {
        $("#categoryMenu").addClass("active");
        $("body").addClass("no-scroll");
    });
    $("#cloesMenu").click(function() {
        $("#categoryMenu").removeClass("active");
        $("body").removeClass("no-scroll");
    });
</script>
    <script>
        window.lazyLoadOptions = [
          {
            elements_selector: "img[data-lazy-src],.rocket-lazyload",
            data_src: "lazy-src",
            data_srcset: "lazy-srcset",
            data_sizes: "lazy-sizes",
            class_loading: "lazyloading",
            class_loaded: "lazyloaded",
            threshold: 300,
            callback_loaded: function (element) {
              if (
                element.tagName === "IFRAME" &&
                element.dataset.rocketLazyload == "fitvidscompatible"
              ) {
                if (element.classList.contains("lazyloaded")) {
                  if (typeof window.jQuery != "undefined") {
                    if (jQuery.fn.fitVids) {
                      jQuery(element).parent().fitVids();
                    }
                  }
                }
              }
            },
          },
          {
            elements_selector: ".rocket-lazyload",
            data_src: "lazy-src",
            data_srcset: "lazy-srcset",
            data_sizes: "lazy-sizes",
            class_loading: "lazyloading",
            class_loaded: "lazyloaded",
            threshold: 300,
          },
        ];
        window.addEventListener(
          "LazyLoad::Initialized",
          function (e) {
            var lazyLoadInstance = e.detail.instance;
            if (window.MutationObserver) {
              var observer = new MutationObserver(function (mutations) {
                var image_count = 0;
                var iframe_count = 0;
                var rocketlazy_count = 0;
                mutations.forEach(function (mutation) {
                  for (var i = 0; i < mutation.addedNodes.length; i++) {
                    if (
                      typeof mutation.addedNodes[i].getElementsByTagName !==
                      "function"
                    ) {
                      continue;
                    }
                    if (
                      typeof mutation.addedNodes[i].getElementsByClassName !==
                      "function"
                    ) {
                      continue;
                    }
                    images = mutation.addedNodes[i].getElementsByTagName("img");
                    is_image = mutation.addedNodes[i].tagName == "IMG";
                    iframes =
                      mutation.addedNodes[i].getElementsByTagName("iframe");
                    is_iframe = mutation.addedNodes[i].tagName == "IFRAME";
                    rocket_lazy =
                      mutation.addedNodes[i].getElementsByClassName(
                        "rocket-lazyload"
                      );
                    image_count += images.length;
                    iframe_count += iframes.length;
                    rocketlazy_count += rocket_lazy.length;
                    if (is_image) {
                      image_count += 1;
                    }
                    if (is_iframe) {
                      iframe_count += 1;
                    }
                  }
                });
                if (image_count > 0 || iframe_count > 0 || rocketlazy_count > 0) {
                  lazyLoadInstance.update();
                }
              });
              var b = document.getElementsByTagName("body")[0];
              var config = { childList: !0, subtree: !0 };
              observer.observe(b, config);
            }
          },
          !1
        );
    </script>
    <script data-no-minify="1" async="" src="{{ asset('js/layanan/pemerintahan/lazyload.min.js') }}"></script>
    <script type="text/javascript" data-minify="1" defer="" src="{{ asset('js/layanan/pemerintahan/lity.js') }}" data-rocket-status="executed"></script>
    <script type="text/javascript" defer="" src="{{ asset('js/layanan/pemerintahan/jquery.marquee.min.js') }}" data-rocket-status="executed"></script>
    <script data-minify="1" type="text/javascript" src="{{ asset('js/layanan/pemerintahan/header528a.js') }}" defer=""></script>
    <script data-minify="1" type="text/javascript" src="{{ asset('js/layanan/pemerintahan/scheduledc83.js') }}" defer=""></script>
    <script type="text/javascript" src="{{ asset('js/layanan/pemerintahan/waba-schedule.js') }}"></script>
@endsection

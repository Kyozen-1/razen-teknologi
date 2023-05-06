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

        $profil = Profil::first();
    @endphp
    <div class="web-wrapper">
        <main class="insight">
            <section class="masthead masthead--hero" id="masthead">
                <div class="container masthead__wrap">
                    <div class="masthead__content">
                        <div class="row align-items-center">
                            <div class="col-lg-6 masthead__left">
                                <h1 class="masthead__title" itemprop="headline"> Produk Pemerintahan Daerah oleh Razen </h1>
                                <div class="masthead__media show-sm">
                                    <div class="media media--video">
                                        <img class="lazyload media__cover"
                                            data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2023/003/hero-homepage-379x235.png">
                                        <a class="btn-play--blue" href="https://www.youtube.com/" data-lity="data-lity">
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
                                        <li> Produk Dinas Razen sistem akuntansi online terbukti handal untuk bisnis </li>
                                        <li> Membantu pencatatan keuangan, pembukuan &amp; operasional bisnis perusahaan menjadi mudah &amp; efisien </li>
                                        <li> Kelola dengan solusi automasi, kapanpun &amp; dimanapun </li>
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
                                        data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2023/003/hero-homepage-694x430.png">
                                        <a class="btn-play--blue" href="https://www.youtube.com/" data-lity="data-lity">
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
                <h2 class="our-customer__title"> Produk Pemerintahan Daerah yang terbukti dipercaya 30 dinas di Indonesia </h2>
                </div>
                <div class="logo-marquee__group">
                    <div class="logo-marquee__list" style="min-width: 1764px">
                        <li class="item">
                            <img data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2023/02/bpbd.png">
                        </li>
                        <li class="item">
                            <img data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2023/02/pariwisata.png">
                        </li>
                        <li class="item">
                            <img data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2023/02/jateng.png" >
                        </li>
                        <li class="item">
                            <img data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2023/02/kabupaten_madiun.png">
                        </li>
                        <li class="item">
                            <img data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2023/02/kemendikbud.png">
                        </li>
                        <li class="item">
                            <img data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2023/02/LOGO_KEMENTERIAN_PERHUBUNGAN_REPUBLIK_INDONESIA.png">
                        </li>
                        <li class="item">
                            <img data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2023/02/Lambang_Kota_Blitar_0.png">
                        </li>
                        <li class="item">
                            <img data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2023/02/logo_pemkab_magelang.png">
                        </li>
                        <li class="item">
                            <img data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2023/02/logo-batam.png" >
                        </li>
                    </div>
                    <div class="logo-marquee__list" aria-hidden="true" style="min-width: 1764px">
                        <li class="item">
                            <img data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2023/02/bpbd.png" >
                        </li>
                        <li class="item">
                            <img data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2023/02/pariwisata.png">
                        </li>
                        <li class="item">
                            <img data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2023/02/jateng.png" >
                        </li>
                        <li class="item">
                            <img data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2023/02/kabupaten_madiun.png" >
                        </li>
                        <li class="item">
                            <img data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2023/02/kemendikbud.png" >
                        </li>
                        <li class="item">
                            <img data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2023/02/LOGO_KEMENTERIAN_PERHUBUNGAN_REPUBLIK_INDONESIA.png" >
                        </li>
                        <li class="item">
                            <img data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2023/02/Lambang_Kota_Blitar_0.png" >
                        </li>
                        <li class="item">
                            <img data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2023/02/logo_pemkab_magelang.png" >
                        </li>
                        <li class="item">
                            <img data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2023/02/logo-batam.png">
                        </li>
                    </div>
                </div>
                <div class="logo-marquee__group reverse">
                    <div class="logo-marquee__list" style="min-width: 1764px">
                        <li class="item">
                            <img data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2023/02/logo-kemendagri.png" >
                        </li>
                        <li class="item">
                            <img data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2023/02/logo-malang.png" >
                        </li>
                        <li class="item">
                            <img data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2023/02/logo-kaltim.png" >
                        </li>
                        <li class="item">
                            <img data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2023/02/logo-kemendag.svg" >
                        </li>
                        <li class="item">
                            <img data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2023/02/logo-kemenparekraf.png" >
                        </li>
                        <li class="item">
                            <img data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2023/02/Logo-Kementan.png" >
                        </li>
                        <li class="item">
                            <img data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2023/02/logo-kemenag.png" >
                        </li>
                        <li class="item">
                            <img data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2023/02/Logo-Kab-Ponorogo.png" >
                        </li>
                        <li class="item">
                            <img data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2023/02/logo-jatim.png" >
                        </li>
                    </div>
                    <div class="logo-marquee__list" aria-hidden="true" style="min-width: 1764px">
                        <li class="item">
                            <img data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2023/02/logo-kemendagri.png">
                        </li>
                        <li class="item">
                            <img data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2023/02/logo-malang.png">
                        </li>
                        <li class="item">
                            <img data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2023/02/logo-kaltim.png">
                        </li>
                        <li class="item">
                            <img data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2023/02/logo-kemendag.svg">
                        </li>
                        <li class="item">
                            <img data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2023/02/logo-kemenparekraf.png">
                        </li>
                        <li class="item">
                            <img data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2023/02/Logo-Kementan.png">
                        </li>
                        <li class="item">
                            <img data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2023/02/logo-kemenag.png">
                        </li>
                        <li class="item">
                            <img data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2023/02/Logo-Kab-Ponorogo.png">
                        </li>
                        <li class="item">
                            <img data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2023/02/logo-jatim.png">
                        </li>
                    </div>
                </div>
            </section>
            <section class="tab-feature" id="feature">
                <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                    <div class="tab-feature__head">
                        <h2 class="tab-feature__title"> 7 Produk pemerintahan unggulan Razen Teknologi </h2>
                    </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12">
                    <ul class="tab-feature__nav nav nav-tabs">
                        <li class="nav-item">
                        <a class="nav-link active" href="#tf-1" data-toggle="tab">Mitigasi Bencana</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#tf-2" data-toggle="tab">Pariwisata</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#tf-3" data-toggle="tab">Sekolah Pro</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#tf-4" data-toggle="tab">Pertanian</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#tf-5" data-toggle="tab">Perpusdes</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#tf-6" data-toggle="tab">Desa Digital</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#tf-7" data-toggle="tab">Smart Kabupaten</a>
                        </li>
                    </ul>
                    </div>
                    <div class="col-12">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="tf-1">
                        <div class="tab-feature__content">
                            <div class="row justify-content center align-items-center">
                            <div class="col-md-6 col-12">
                                <div class="tab-feature__toggle">
                                <h3 class="tab-feature__title"> Laporan Bisnis &amp; Keuangan </h3>
                                </div>
                                <div class="tab-feature__meta">
                                <h3 class="tab-feature__title"> Laporan Bisnis &amp; Keuangan </h3>
                                <div class="tab-feature__desc">
                                    <p> Pantau laporan bisnis &amp; keuangan melalui dasbor performa bisnis dengan template laporan yang lengkap </p>
                                </div>
                                <div class="tab-feature__action">
                                    <a id="" class="link-more" href="fitur/laporan-keuangan-bisnis/index.html" target="_self">Pelajari selengkapnya</a>
                                </div>
                                <div class="tab-feature__img">
                                    <div class="media media--video">
                                    <img class="lazyload media__cover" src="data:image/svg+xml,%3Csvg%20
                                                                                                                                                                                                                            xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201264%201052'%3E%3C/svg%3E" data-lazy-srcset="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero-517x430.png 517w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero-755x628.png 755w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero-768x639.png 768w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero-505x420.png 505w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero-282x235.png 282w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero.png 1264w" data-lazy-sizes="(max-width: 600px) 100vw, 600px" alt="akuntansi online Produk Dinas Razen" width="1264" height="1052" data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero-517x430.png">
                                    <noscript>
                                        <img class="lazyload media__cover" src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero-517x430.png" srcset="
                                                https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero-517x430.png  517w,
                                                https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero-755x628.png  755w,
                                                https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero-768x639.png  768w,
                                                https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero-505x420.png  505w,
                                                https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero-282x235.png  282w,
                                                https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero.png         1264w
                                            " sizes="(max-width: 600px) 100vw, 600px" alt="akuntansi online Produk Dinas Razen" width="1264" height="1052" />
                                    </noscript>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="tab-feature__img">
                                <div class="media media--video">
                                    <img class="lazyload media__cover entered error" data-lazy-srcset="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero-517x430.png 517w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero-755x628.png 755w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero-768x639.png 768w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero-505x420.png 505w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero-282x235.png 282w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero.png 1264w" data-lazy-sizes="(max-width: 600px) 100vw, 600px" alt="akuntansi online Produk Dinas Razen" width="1264" height="1052" data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero-517x430.png" src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero-517x430.png" data-ll-status="error" sizes="(max-width: 600px) 100vw, 600px" srcset="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero-517x430.png 517w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero-755x628.png 755w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero-768x639.png 768w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero-505x420.png 505w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero-282x235.png 282w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero.png 1264w">
                                    <noscript>
                                    <img class="lazyload media__cover" src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero-517x430.png" srcset="
                                            https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero-517x430.png  517w,
                                            https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero-755x628.png  755w,
                                            https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero-768x639.png  768w,
                                            https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero-505x420.png  505w,
                                            https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero-282x235.png  282w,
                                            https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero.png         1264w
                                            " sizes="(max-width: 600px) 100vw, 600px" alt="akuntansi online Produk Dinas Razen" width="1264" height="1052" />
                                    </noscript>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="tab-pane fade" id="tf-2">
                        <div class="tab-feature__content">
                            <div class="row justify-content center align-items-center">
                            <div class="col-md-6 col-12">
                                <div class="tab-feature__toggle">
                                <h3 class="tab-feature__title">Akuntansi</h3>
                                </div>
                                <div class="tab-feature__meta">
                                <h3 class="tab-feature__title">Akuntansi</h3>
                                <div class="tab-feature__desc">
                                    <p> Lebih akurat dengan pembukuan yang lebih mudah dipahami dan sesuai dengan standar akuntansi di Indonesia </p>
                                </div>
                                <div class="tab-feature__action">
                                    <a id="" class="link-more" href="fitur/aplikasi-akuntansi/index.html" target="_self">Pelajari selengkapnya</a>
                                </div>
                                <div class="tab-feature__img">
                                    <div class="media media--video">
                                    <img class="lazyload media__cover" src="data:image/svg+xml,%3Csvg%20
                                                                                                                                                                                                                                    xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201264%201052'%3E%3C/svg%3E" data-lazy-srcset="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero--517x430.png 517w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero--755x628.png 755w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero--768x639.png 768w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero--505x420.png 505w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero--282x235.png 282w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero-.png 1264w" data-lazy-sizes="(max-width: 600px) 100vw, 600px" alt="tampilan buku besar zen smart kabupaten" width="1264" height="1052" data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero--517x430.png">
                                    <noscript>
                                        <img class="lazyload media__cover" src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero--517x430.png" srcset="
                                                https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero--517x430.png  517w,
                                                https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero--755x628.png  755w,
                                                https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero--768x639.png  768w,
                                                https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero--505x420.png  505w,
                                                https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero--282x235.png  282w,
                                                https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero-.png         1264w
                                            " sizes="(max-width: 600px) 100vw, 600px" alt="tampilan buku besar zen smart kabupaten" width="1264" height="1052" />
                                    </noscript>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="tab-feature__img">
                                <div class="media media--video">
                                    <img class="lazyload media__cover" src="data:image/svg+xml,%3Csvg%20
                                                                                                                                                                                                                                    xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201264%201052'%3E%3C/svg%3E" data-lazy-srcset="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero--517x430.png 517w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero--755x628.png 755w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero--768x639.png 768w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero--505x420.png 505w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero--282x235.png 282w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero-.png 1264w" data-lazy-sizes="(max-width: 600px) 100vw, 600px" alt="tampilan buku besar zen smart kabupaten" width="1264" height="1052" data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero--517x430.png">
                                    <noscript>
                                    <img class="lazyload media__cover" src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero--517x430.png" srcset="
                                            https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero--517x430.png  517w,
                                            https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero--755x628.png  755w,
                                            https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero--768x639.png  768w,
                                            https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero--505x420.png  505w,
                                            https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero--282x235.png  282w,
                                            https://tech.razen.co.id/pemerintahan/assets/uploads/2022/07/hero-.png         1264w
                                            " sizes="(max-width: 600px) 100vw, 600px" alt="tampilan buku besar zen smart kabupaten" width="1264" height="1052" />
                                    </noscript>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="tab-pane fade" id="tf-3">
                        <div class="tab-feature__content">
                            <div class="row justify-content center align-items-center">
                            <div class="col-md-6 col-12">
                                <div class="tab-feature__toggle">
                                <h3 class="tab-feature__title">Razen Pay</h3>
                                </div>
                                <div class="tab-feature__meta">
                                <h3 class="tab-feature__title">Razen Pay</h3>
                                <div class="tab-feature__desc">
                                    <p> Terima segala pembayaran lebih mudah dengan satu dompet digital yang keamanannya setara dengan standar bank </p>
                                </div>
                                <div class="tab-feature__action">
                                    <a id="" class="link-more" href="fitur/razen-pay/index.html" target="_self">Pelajari selengkapnya</a>
                                </div>
                                <div class="tab-feature__img">
                                    <div class="media media--video">
                                    <img class="lazyload media__cover" src="data:image/svg+xml,%3Csvg%20
                                                                                                                                                                                                                                            xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20491%20406'%3E%3C/svg%3E" srcset="" data-lazy-sizes="(max-width: 600px) 100vw, 600px" alt="Razen Pay dari akuntansi online" width="491" height="406" data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/Send-maker-simplified.svg">
                                    <noscript>
                                        <img class="lazyload media__cover" src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/Send-maker-simplified.svg" srcset="" sizes="(max-width: 600px) 100vw, 600px" alt="Razen Pay dari akuntansi online" width="491" height="406" />
                                    </noscript>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="tab-feature__img">
                                <div class="media media--video">
                                    <img class="lazyload media__cover" src="data:image/svg+xml,%3Csvg%20
                                                                                                                                                                                                                                            xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20491%20406'%3E%3C/svg%3E" srcset="" data-lazy-sizes="(max-width: 600px) 100vw, 600px" alt="Razen Pay dari akuntansi online" width="491" height="406" data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/Send-maker-simplified.svg">
                                    <noscript>
                                    <img class="lazyload media__cover" src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/Send-maker-simplified.svg" srcset="" sizes="(max-width: 600px) 100vw, 600px" alt="Razen Pay dari akuntansi online" width="491" height="406" />
                                    </noscript>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="tab-pane fade" id="tf-4">
                        <div class="tab-feature__content">
                            <div class="row justify-content center align-items-center">
                            <div class="col-md-6 col-12">
                                <div class="tab-feature__toggle">
                                <h3 class="tab-feature__title"> Invoice &amp; Faktur </h3>
                                </div>
                                <div class="tab-feature__meta">
                                <h3 class="tab-feature__title"> Invoice &amp; Faktur </h3>
                                <div class="tab-feature__desc">
                                    <p> Terima pembayaran lebih cepat dengan fitur otomasi invoice tanpa perlu khawatir lupa kirim atau telat kirim </p>
                                </div>
                                <div class="tab-feature__action">
                                    <a id="" class="link-more" href="fitur/invoice-faktur/index.html" target="_self">Pelajari Selengkapnya</a>
                                </div>
                                <div class="tab-feature__img">
                                    <div class="media media--video">
                                    <img class="lazyload media__cover" src="data:image/svg+xml,%3Csvg%20
                                                                                                                                                                                                                                                    xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201264%201052'%3E%3C/svg%3E" data-lazy-srcset="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-3-517x430.png 517w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-3-755x628.png 755w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-3-768x639.png 768w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-3-505x420.png 505w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-3-282x235.png 282w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-3.png 1264w" data-lazy-sizes="(max-width: 600px) 100vw, 600px" alt="aplikasi invoice online Indonesia" width="1264" height="1052" data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-3-517x430.png">
                                    <noscript>
                                        <img class="lazyload media__cover" src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-3-517x430.png" srcset="
                                                https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-3-517x430.png  517w,
                                                https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-3-755x628.png  755w,
                                                https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-3-768x639.png  768w,
                                                https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-3-505x420.png  505w,
                                                https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-3-282x235.png  282w,
                                                https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-3.png         1264w
                                            " sizes="(max-width: 600px) 100vw, 600px" alt="aplikasi invoice online Indonesia" width="1264" height="1052" />
                                    </noscript>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="tab-feature__img">
                                <div class="media media--video">
                                    <img class="lazyload media__cover" src="data:image/svg+xml,%3Csvg%20
                                                                                                                                                                                                                                                    xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201264%201052'%3E%3C/svg%3E" data-lazy-srcset="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-3-517x430.png 517w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-3-755x628.png 755w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-3-768x639.png 768w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-3-505x420.png 505w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-3-282x235.png 282w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-3.png 1264w" data-lazy-sizes="(max-width: 600px) 100vw, 600px" alt="aplikasi invoice online Indonesia" width="1264" height="1052" data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-3-517x430.png">
                                    <noscript>
                                    <img class="lazyload media__cover" src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-3-517x430.png" srcset="
                                            https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-3-517x430.png  517w,
                                            https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-3-755x628.png  755w,
                                            https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-3-768x639.png  768w,
                                            https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-3-505x420.png  505w,
                                            https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-3-282x235.png  282w,
                                            https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-3.png         1264w
                                            " sizes="(max-width: 600px) 100vw, 600px" alt="aplikasi invoice online Indonesia" width="1264" height="1052" />
                                    </noscript>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="tab-pane fade" id="tf-5">
                        <div class="tab-feature__content">
                            <div class="row justify-content center align-items-center">
                            <div class="col-md-6 col-12">
                                <div class="tab-feature__toggle">
                                <h3 class="tab-feature__title"> Produk &amp; Inventory </h3>
                                </div>
                                <div class="tab-feature__meta">
                                <h3 class="tab-feature__title"> Produk &amp; Inventory </h3>
                                <div class="tab-feature__desc">
                                    <p> Kelola stok barang secara terpusat dan real-time pada setiap gudang hanya melalui satu dasbor </p>
                                </div>
                                <div class="tab-feature__action">
                                    <a id="" class="link-more" href="fitur/produk-inventory/index.html" target="_self">Pelajari selengkapnya</a>
                                </div>
                                <div class="tab-feature__img">
                                    <div class="media media--video">
                                    <img class="lazyload media__cover" src="data:image/svg+xml,%3Csvg%20
                                                                                                                                                                                                                                                            xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201264%201052'%3E%3C/svg%3E" data-lazy-srcset="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/img-asset-hero-517x430.png 517w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/img-asset-hero-755x628.png 755w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/img-asset-hero-768x639.png 768w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/img-asset-hero-505x420.png 505w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/img-asset-hero-282x235.png 282w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/img-asset-hero.png 1264w" data-lazy-sizes="(max-width: 600px) 100vw, 600px" alt="aplikasi inventory barang" width="1264" height="1052" data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/img-asset-hero-517x430.png">
                                    <noscript>
                                        <img class="lazyload media__cover" src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/img-asset-hero-517x430.png" srcset="
                                                https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/img-asset-hero-517x430.png  517w,
                                                https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/img-asset-hero-755x628.png  755w,
                                                https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/img-asset-hero-768x639.png  768w,
                                                https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/img-asset-hero-505x420.png  505w,
                                                https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/img-asset-hero-282x235.png  282w,
                                                https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/img-asset-hero.png         1264w
                                            " sizes="(max-width: 600px) 100vw, 600px" alt="aplikasi inventory barang" width="1264" height="1052" />
                                    </noscript>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="tab-feature__img">
                                <div class="media media--video">
                                    <img class="lazyload media__cover" src="data:image/svg+xml,%3Csvg%20
                                                                                                                                                                                                                                                            xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201264%201052'%3E%3C/svg%3E" data-lazy-srcset="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/img-asset-hero-517x430.png 517w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/img-asset-hero-755x628.png 755w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/img-asset-hero-768x639.png 768w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/img-asset-hero-505x420.png 505w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/img-asset-hero-282x235.png 282w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/img-asset-hero.png 1264w" data-lazy-sizes="(max-width: 600px) 100vw, 600px" alt="aplikasi inventory barang" width="1264" height="1052" data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/img-asset-hero-517x430.png">
                                    <noscript>
                                    <img class="lazyload media__cover" src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/img-asset-hero-517x430.png" srcset="
                                            https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/img-asset-hero-517x430.png  517w,
                                            https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/img-asset-hero-755x628.png  755w,
                                            https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/img-asset-hero-768x639.png  768w,
                                            https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/img-asset-hero-505x420.png  505w,
                                            https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/img-asset-hero-282x235.png  282w,
                                            https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/img-asset-hero.png         1264w
                                            " sizes="(max-width: 600px) 100vw, 600px" alt="aplikasi inventory barang" width="1264" height="1052" />
                                    </noscript>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="tab-pane fade" id="tf-6">
                        <div class="tab-feature__content">
                            <div class="row justify-content center align-items-center">
                            <div class="col-md-6 col-12">
                                <div class="tab-feature__toggle">
                                <h3 class="tab-feature__title"> Biaya &amp; Anggaran </h3>
                                </div>
                                <div class="tab-feature__meta">
                                <h3 class="tab-feature__title"> Biaya &amp; Anggaran </h3>
                                <div class="tab-feature__desc">
                                    <p> Manfaatkan data real-time untuk membuat keputusan perusahaan lebih akurat dengan aplikasi laporan keuangan </p>
                                </div>
                                <div class="tab-feature__action">
                                    <a id="" class="link-more" href="fitur/biaya-anggaran/index.html" target="_self">Pelajari selengkapnya</a>
                                </div>
                                <div class="tab-feature__img">
                                    <div class="media media--video">
                                    <img class="lazyload media__cover" src="data:image/svg+xml,%3Csvg%20
                                                                                                                                                                                                                                                                    xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201264%201052'%3E%3C/svg%3E" data-lazy-srcset="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-4-517x430.png 517w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-4-755x628.png 755w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-4-768x639.png 768w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-4-505x420.png 505w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-4-282x235.png 282w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-4.png 1264w" data-lazy-sizes="(max-width: 600px) 100vw, 600px" alt="manajemen keuangan" width="1264" height="1052" data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-4-517x430.png">
                                    <noscript>
                                        <img class="lazyload media__cover" src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-4-517x430.png" srcset="
                                                https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-4-517x430.png  517w,
                                                https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-4-755x628.png  755w,
                                                https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-4-768x639.png  768w,
                                                https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-4-505x420.png  505w,
                                                https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-4-282x235.png  282w,
                                                https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-4.png         1264w
                                            " sizes="(max-width: 600px) 100vw, 600px" alt="manajemen keuangan" width="1264" height="1052" />
                                    </noscript>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="tab-feature__img">
                                <div class="media media--video">
                                    <img class="lazyload media__cover" src="data:image/svg+xml,%3Csvg%20
                                                                                                                                                                                                                                                                    xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201264%201052'%3E%3C/svg%3E" data-lazy-srcset="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-4-517x430.png 517w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-4-755x628.png 755w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-4-768x639.png 768w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-4-505x420.png 505w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-4-282x235.png 282w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-4.png 1264w" data-lazy-sizes="(max-width: 600px) 100vw, 600px" alt="manajemen keuangan" width="1264" height="1052" data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-4-517x430.png">
                                    <noscript>
                                    <img class="lazyload media__cover" src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-4-517x430.png" srcset="
                                            https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-4-517x430.png  517w,
                                            https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-4-755x628.png  755w,
                                            https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-4-768x639.png  768w,
                                            https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-4-505x420.png  505w,
                                            https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-4-282x235.png  282w,
                                            https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-4.png         1264w
                                            " sizes="(max-width: 600px) 100vw, 600px" alt="manajemen keuangan" width="1264" height="1052" />
                                    </noscript>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="tab-pane fade" id="tf-7">
                        <div class="tab-feature__content">
                            <div class="row justify-content center align-items-center">
                            <div class="col-md-6 col-12">
                                <div class="tab-feature__toggle">
                                <h3 class="tab-feature__title">Perpajakan</h3>
                                </div>
                                <div class="tab-feature__meta">
                                <h3 class="tab-feature__title">Perpajakan</h3>
                                <div class="tab-feature__desc">
                                    <p> Hilangkan risiko kesalahan perhitungan pajak dengan kalkulasi otomatis hanya dengan satu klik </p>
                                </div>
                                <div class="tab-feature__action">
                                    <a id="" class="link-more" href="fitur/pajak/index.html" target="_self">Pelajari selengkapnya</a>
                                </div>
                                <div class="tab-feature__img">
                                    <div class="media media--video">
                                    <img class="lazyload media__cover" src="data:image/svg+xml,%3Csvg%20
                                                                                                                                                                                                                                                                            xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201264%201052'%3E%3C/svg%3E" data-lazy-srcset="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-5-517x430.png 517w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-5-755x628.png 755w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-5-768x639.png 768w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-5-505x420.png 505w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-5-282x235.png 282w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-5.png 1264w" data-lazy-sizes="(max-width: 600px) 100vw, 600px" alt="fitur pajak zen Smart Kabupaten" width="1264" height="1052" data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-5-517x430.png">
                                    <noscript>
                                        <img class="lazyload media__cover" src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-5-517x430.png" srcset="
                                                https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-5-517x430.png  517w,
                                                https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-5-755x628.png  755w,
                                                https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-5-768x639.png  768w,
                                                https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-5-505x420.png  505w,
                                                https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-5-282x235.png  282w,
                                                https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-5.png         1264w
                                            " sizes="(max-width: 600px) 100vw, 600px" alt="fitur pajak zen Smart Kabupaten" width="1264" height="1052" />
                                    </noscript>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="tab-feature__img">
                                <div class="media media--video">
                                    <img class="lazyload media__cover" src="data:image/svg+xml,%3Csvg%20
                                                                                                                                                                                                                                                                            xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201264%201052'%3E%3C/svg%3E" data-lazy-srcset="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-5-517x430.png 517w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-5-755x628.png 755w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-5-768x639.png 768w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-5-505x420.png 505w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-5-282x235.png 282w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-5.png 1264w" data-lazy-sizes="(max-width: 600px) 100vw, 600px" alt="fitur pajak zen Smart Kabupaten" width="1264" height="1052" data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-5-517x430.png">
                                    <noscript>
                                    <img class="lazyload media__cover" src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-5-517x430.png" srcset="
                                            https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-5-517x430.png  517w,
                                            https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-5-755x628.png  755w,
                                            https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-5-768x639.png  768w,
                                            https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-5-505x420.png  505w,
                                            https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-5-282x235.png  282w,
                                            https://tech.razen.co.id/pemerintahan/assets/uploads/2022/02/hero-5.png         1264w
                                            " sizes="(max-width: 600px) 100vw, 600px" alt="fitur pajak zen Smart Kabupaten" width="1264" height="1052" />
                                    </noscript>
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
            <section class="items-block items-block--alt" id="items">
                <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                    <div class="item-block__head">
                        <h2 class="items-block__title"> 3 alasan Produk Dinas Razen jadi Pilihan Pemerintah Daerah </h2>
                    </div>
                    </div>
                </div>
                <div class="row justify-content-center align-items-top">
                    <div class="col-12">
                    <div class="items-block__wrap">
                        <div class="item">
                        <div class="item__icon">
                            <img src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/Image-2-1-235x235.png" data-lazy-srcset="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/Image-2-1-235x235.png 235w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/Image-2-1.png 244w" data-lazy-sizes="(max-width: 236px) 100vw, 236px" alt="mengapa pilih sistem akuntansi Smart Kabupaten" width="236" height="236" data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/Image-2-1-235x235.png" data-ll-status="loaded" class="entered lazyloaded" sizes="(max-width: 236px) 100vw, 236px" srcset="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/Image-2-1-235x235.png 235w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/Image-2-1.png 244w">
                            <noscript>
                            <img src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/Image-2-1-235x235.png" srcset="
                                    https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/Image-2-1-235x235.png 235w,
                                    https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/Image-2-1.png         244w
                                    " sizes="(max-width: 236px) 100vw, 236px" alt="mengapa pilih sistem akuntansi Smart Kabupaten" width="236" height="236" />
                            </noscript>
                        </div>
                        <div class="item__icon item__icon--sm">
                            <img src="data:image/svg+xml,%3Csvg%20
                                                                                                                                                                                                                                                                    xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2044%2044'%3E%3C/svg%3E" srcset="" data-lazy-sizes="(max-width: 44px) 100vw, 44px" alt="Produk Dinas Razen" width="44" height="44" data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/Performance.png">
                            <noscript>
                            <img src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/Performance.png" srcset="" sizes="(max-width: 44px) 100vw, 44px" alt="Produk Dinas Razen" width="44" height="44" />
                            </noscript>
                        </div>
                        <label class="item__title">Pionir sistem akuntansi online pertama di Indonesia</label>
                        </div>
                        <div class="item">
                        <div class="item__icon">
                            <img src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/Image-1-1-235x235.png" data-lazy-srcset="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/Image-1-1-235x235.png 235w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/Image-1-1.png 244w" data-lazy-sizes="(max-width: 236px) 100vw, 236px" alt="fitur smart kabupaten software" width="236" height="236" data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/Image-1-1-235x235.png" data-ll-status="loaded" class="entered lazyloaded" sizes="(max-width: 236px) 100vw, 236px" srcset="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/Image-1-1-235x235.png 235w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/Image-1-1.png 244w">
                            <noscript>
                            <img src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/Image-1-1-235x235.png" srcset="
                                    https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/Image-1-1-235x235.png 235w,
                                    https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/Image-1-1.png         244w
                                    " sizes="(max-width: 236px) 100vw, 236px" alt="fitur smart kabupaten software" width="236" height="236" />
                            </noscript>
                        </div>
                        <div class="item__icon item__icon--sm">
                            <img src="data:image/svg+xml,%3Csvg%20
                                                                                                                                                                                                                                                                            xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2044%2044'%3E%3C/svg%3E" srcset="" data-lazy-sizes="(max-width: 44px) 100vw, 44px" alt="Produk Dinas Razen" width="44" height="44" data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/Add-ons.png">
                            <noscript>
                            <img src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/Add-ons.png" srcset="" sizes="(max-width: 44px) 100vw, 44px" alt="Produk Dinas Razen" width="44" height="44" />
                            </noscript>
                        </div>
                        <label class="item__title">Fitur terlengkap, terintegrasi dalam satu platform</label>
                        </div>
                        <div class="item">
                        <div class="item__icon">
                            <img src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/Image-2-235x235.png" data-lazy-srcset="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/Image-2-235x235.png 235w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/Image-2.png 244w" data-lazy-sizes="(max-width: 236px) 100vw, 236px" alt="CS Smart Kabupaten" width="236" height="236" data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/Image-2-235x235.png" data-ll-status="loaded" class="entered lazyloaded" sizes="(max-width: 236px) 100vw, 236px" srcset="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/Image-2-235x235.png 235w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/Image-2.png 244w">
                            <noscript>
                            <img src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/Image-2-235x235.png" srcset="
                                    https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/Image-2-235x235.png 235w,
                                    https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/Image-2.png         244w
                                    " sizes="(max-width: 236px) 100vw, 236px" alt="CS Smart Kabupaten" width="236" height="236" />
                            </noscript>
                        </div>
                        <div class="item__icon item__icon--sm">
                            <img src="data:image/svg+xml,%3Csvg%20
                                                                                                                                                                                                                                                                                    xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2044%2044'%3E%3C/svg%3E" srcset="" data-lazy-sizes="(max-width: 44px) 100vw, 44px" alt="Produk Dinas Razen" width="44" height="44" data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/Chat.png">
                            <noscript>
                            <img src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/Chat.png" srcset="" sizes="(max-width: 44px) 100vw, 44px" alt="Produk Dinas Razen" width="44" height="44" />
                            </noscript>
                        </div>
                        <label class="item__title">Layanan after sales terbaik dengan fitur live chat</label>
                        </div>
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
                                <h4 class="section__heading--title-small"><span class="mr-10">//</span>Testimoni Pemerintah Derah<span class="ml-10">//</span></h4>
                                <h1 class="section__heading--transparent white">Testimoni</h1>
                                <h2 class="section__heading--title"> Pelajari apa yang Pemerintah daerah katakan tentang kami</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="testimonials__2 owl-carousel">
                                <div class="testimonial">
                                    <h4 class="title mb-25">Great Quality Software</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore to
                                        magna
                                        aliqua. Ut enim ad minim veniam, quis nostrud a exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                                        aute irure dolor in reprehenderit.</p>
                                    <div class="authore mt-35 d-flex align-items-center">
                                        <div class="authore--thumb mr-20">
                                            <img src="{{ asset('techbuzz/assets/images/others/testimonial-authore-1.png') }}" alt="">
                                        </div>
                                        <div class="authore--content">
                                            <h5 class="name">Rosalina D. William</h5>
                                            <span class="designatin">Founder, Romada Co.</span>
                                        </div>
                                    </div>
                                    <img src="{{ asset('techbuzz/assets/images/icons/quote.png') }}" alt="" class="quote-icon">
                                </div>
                                <div class="testimonial">
                                    <h4 class="title mb-25">Great Quality Software</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore to
                                        magna
                                        aliqua. Ut enim ad minim veniam, quis nostrud a exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                                        aute irure dolor in reprehenderit.</p>
                                    <div class="authore mt-35 d-flex align-items-center">
                                        <div class="authore--thumb mr-20">
                                            <img src="{{ asset('techbuzz/assets/images/others/testimonial-authore-1.png') }}" alt="">
                                        </div>
                                        <div class="authore--content">
                                            <h5 class="name">Rosalina D. William</h5>
                                            <span class="designatin">Founder, Romada Co.</span>
                                        </div>
                                    </div>
                                    <img src="{{ asset('techbuzz/assets/images/icons/quote.png') }}" alt="" class="quote-icon">
                                </div>
                                <div class="testimonial">
                                    <h4 class="title mb-25">Great Quality Software</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore to
                                        magna
                                        aliqua. Ut enim ad minim veniam, quis nostrud a exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                                        aute irure dolor in reprehenderit.</p>
                                    <div class="authore mt-35 d-flex align-items-center">
                                        <div class="authore--thumb mr-20">
                                            <img src="{{ asset('techbuzz/assets/images/others/testimonial-authore-1.png') }}" alt="">
                                        </div>
                                        <div class="authore--content">
                                            <h5 class="name">Rosalina D. William</h5>
                                            <span class="designatin">Founder, Romada Co.</span>
                                        </div>
                                    </div>
                                    <img src="{{ asset('techbuzz/assets/images/icons/quote.png') }}" alt="" class="quote-icon">
                                </div>
                                <div class="testimonial">
                                    <h4 class="title mb-25">Great Quality Software</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore to magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud a exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                                    aute irure dolor in reprehenderit.</p>
                                    <div class="authore mt-35 d-flex align-items-center">
                                        <div class="authore--thumb mr-20">
                                            <img src="{{ asset('techbuzz/assets/images/others/testimonial-authore-1.png') }}" alt="">
                                        </div>
                                        <div class="authore--content">
                                            <h5 class="name">Rosalina D. William</h5>
                                            <span class="designatin">Founder, Romada Co.</span>
                                        </div>
                                    </div>
                                    <img src="{{ asset('techbuzz/assets/images/icons/quote.png') }}" alt="" class="quote-icon">
                                </div>
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
                                <h2 class="section-head__title"> Dapatkan solusi lengkap dengan jasa konsultasi bisnis </h2>
                                <div class="section-head__content">
                                    <p> Terbukti dipercaya untuk tumbuh bersama bisnis dan perusahaan terbaik dari beragam skala, usaha kecil, UKM, industri, dan berbagai kota di Indonesia. </p>
                                </div>
                                <div class="section-head__action">
                                    <a id="" class="btn btn-blue" href="jasa-konsultan/index.html" target="_self">Cari Konsultan Sekarang</a>
                                </div>
                                <img class="show-sm" style="margin: 18px auto" src="data:image/svg+xml,%3Csvg%20
                                                                                                                                                                                                                                                                                        xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20351%20292'%3E%3C/svg%3E" data-lazy-srcset="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/image.jpg 600w" data-lazy-sizes="(max-width: 351px) 100vw, 351px" alt="Akuntansi online Produk Dinas Razen" width="351" height="292" data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/image.jpg">
                                <noscript>
                                <img class="show-sm" style="margin: 18px auto" src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/image.jpg" srcset="
                                        https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/image.jpg         600w
                                        " sizes="(max-width: 351px) 100vw, 351px" alt="Akuntansi online Produk Dinas Razen" width="351" height="292" />
                                </noscript>
                            </div>
                            <div class="accordion" id="acchj">
                                <div class="card">
                                    <div class="card__header collapsed" id="acchjh1" data-toggle="collapse" data-target="#acchjb1"
                                        aria-expanded="false" aria-controls="acchjb1">
                                        <h3 class="card__title">Pembukuan jadi lebih akurat</h3>
                                    </div>
                                    <div class="collapse" id="acchjb1" aria-labelledby="acchjh1" data-parent="#acchj">
                                        <div class="card__body">
                                            <p> Keuangan bisnis Anda akan ditangani oleh partner konsultan yang berpengalaman di bidangnya. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card__header collapsed" id="acchjh2" data-toggle="collapse" data-target="#acchjb2"
                                    aria-expanded="false" aria-controls="acchjb2">
                                        <h3 class="card__title"> Pengambilan keputusan lebih instan </h3>
                                    </div>
                                    <div class="collapse" id="acchjb2" aria-labelledby="acchjh2" data-parent="#acchj">
                                        <div class="card__body">
                                            <p> Keuangan bisnis Anda akan ditangani oleh partner konsultan yang berpengalaman di bidangnya. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card__header collapsed" id="acchjh3" data-toggle="collapse" data-target="#acchjb3"
                                    aria-expanded="false" aria-controls="acchjb3">
                                        <h3 class="card__title"> Pengelolaan bisnis jadi lebih mudah </h3>
                                    </div>
                                    <div class="collapse" id="acchjb3" aria-labelledby="acchjh3" data-parent="#acchj">
                                        <div class="card__body">
                                            <p> Keuangan bisnis Anda akan ditangani oleh partner konsultan yang berpengalaman di bidangnya. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-lg-1">
                            <div class="items-accr__img hidden">
                                <img class="lazyload" data-bg="" src="#">
                            </div>
                            <img class="hidden-sm entered lazyloaded" src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/image-123-516x430.png" data-lazy-srcset="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/image-123-516x430.png 516w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/image-123-504x420.png 504w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/image-123-282x235.png 282w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/image.jpg 600w" data-lazy-sizes="(max-width: 600px) 100vw, 600px" alt="Akuntansi online Produk Dinas Razen" width="600" height="500" data-lazy-src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/image-123-516x430.png" data-ll-status="loaded" sizes="(max-width: 600px) 100vw, 600px" srcset="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/image-123-516x430.png 516w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/image-123-504x420.png 504w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/image-123-282x235.png 282w, https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/image.jpg 600w">
                            <noscript>
                                <img class="hidden-sm" src="https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/image-123-516x430.png" srcset="
                                        https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/image-123-516x430.png 516w,
                                        https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/image-123-504x420.png 504w,
                                        https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/image-123-282x235.png 282w,
                                        https://tech.razen.co.id/pemerintahan/assets/uploads/2022/06/image.jpg         600w
                                    " sizes="(max-width: 600px) 100vw, 600px" alt="Akuntansi online Produk Dinas Razen" width="600" height="500" />
                            </noscript>
                        </div>
                    </div>
                </div>
            </section>
            <section class="faq-block faq-block--alt">
                <div class="container faq-block__wrap">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="section-head align-left">
                                <h2 class="section-head__title"> Apa itu zen smart kabupaten? </h2>
                                <div class="section-head__content" style="max-width: 400px">
                                <p> Zen smart kabupaten adalah perangkat lunak untuk mencatat, mengolah, menampilkan data transaksi akuntansi bisnis untuk memberikan solusi bagi UKM &amp; perusahaan terkait pembukuan, laporan keuangan, invoice, dan neraca keuangan secara online serta <em> real-time</em>. </p>
                                <p> Ribuan pemerintah daerah mempercayai kemampuan akuntansi online yang terintegrasi&nbsp; <em>cloud</em>. Saatnya Anda mendapatkan manfaatnya, sekarang. </p>
                                </div>
                                <div class="section-head__action">
                                {{-- <a id="btnsales" class="btn btn-blue cta-waba show" href="https://wa.me/6282299449494?text={{code}}%20-%20Halo,%20Saya%20dengan%20:................%20%20Dari%20:................%20Keperluan::%20Ingin%20mencoba%20produk%20Dinas%20dari%20Razen%20Teknologi{{suf}}" target="_blank" rel="noreferrer">Hubungi sales</a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="accordion accordion--faq" id="accfaq">
                                <div class="card">
                                    <div class="card__header collapsed" id="accfaqh1" data-target="#accfaqb1" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="accfaqb1">
                                        <h3 class="card__title"> Apa manfaat dari produk sistem akuntansi online? </h3>
                                    </div>
                                    <div class="collapse" id="accfaqb1" data-parent="#accfaq">
                                        <div class="card__body">
                                        <p> Ada 5 manfaat besar dari menggunakan software akuntansi online, antara lain: <a href="index.html#memudahkan">1. memudahkan pekerjaan dinas</a>, <a href="index.html#hemat">2. menghemat biaya sistem akuntansi</a>, <a href="index.html#sdm">3. optimalisasi SDM</a>, <a href="index.html#otomasi">4. otomasi</a> dan <a href="index.html#efisiensi">5. efisiensi</a>: </p>
                                        <p>
                                            <strong id="memudahkan">1. Memudahkan pekerjaan dinas</strong>: Sistem akuntansi online bermanfaat untuk membantu dinas atau perusahaan dalam memproses kegiatan pencatatan dan perhitungan transaksi bisnis yang lebih efisien, cepat, instan, serta memudahkan untuk di akses.
                                        </p>
                                        <p>
                                            <strong id="hemat">2. Menghemat biaya sistem akuntansi</strong>: Sistem jenis ini dapat digunakan dengan biaya yang lebih terjangkau sehingga lebih menguntungkan dibandingkan dengan tenaga dan biaya manual.
                                        </p>
                                        <p>
                                            <strong id="sdm">3. Optimalisasi SDM</strong>: Anda tidak perlu banyak tenaga ahli akuntan untuk bisnis, Anda tidak harus paham penggunaan rumus-rumus akuntansi dalam pemakaiannya.
                                        </p>
                                        <p>
                                            <strong id="otomasi">4. Otomasi</strong>: Proses pembukuan yang otomatis dan lebih aman dengan minim risiko kesalahan hitung manusia seperti yang terjadi dalam proses manual.
                                        </p>
                                        <p>
                                            <strong id="efisiensi">5. Efisiensi</strong>: Sistem dapat mengumpulkan seluruh pendataan perusahaan sehingga semua menjadi satu tempat, lebih mudah di kontrol dan diawasi.
                                        </p>
                                        <p> Ada banyak hal yang bisa dilakukan oleh software akuntansi, antara lain: Untuk laporan keuangan, pembukuan, data transaksi, faktur invoice penjualan, pembayaran pesanan. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card__header collapsed" id="accfaqh2" data-target="#accfaqb2" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="accfaqb2">
                                        <h3 class="card__title"> Bagaimana cara memilih sistem akuntansi online untuk bisnis? </h3>
                                    </div>
                                    <div class="collapse" id="accfaqb2" data-parent="#accfaq">
                                        <div class="card__body">
                                        <p> Beberapa kriteria dalam memilih sistem termasuk kemanan data zen antara lain: </p>
                                        <p> Harus memiliki <a href="security/index.html">keamanan yang ber-sertifikat</a>, mudah digunakan, mudah diakses, memiliki <a href="fitur/index.html">fitur lengkap</a>, <a href="integrasi/index.html">sistem terintegrasi</a>, <a href="klien-kami/index.html">sudah dipercaya banyak pengguna</a> dan memiliki customer support yang siap membantu. </p>
                                        <p> Pastikan juga memiliki <a href="harga/index.html">paket dan harga</a> yang bersahabat dan sesuai dengan kebutuhan. </p>
                                        <p> Untuk Anda yang membutuhkan solusi manajemen perhitungan dan pencatatan transaksi bisnis yang murah dan aman, pastikan vendor dan perusahaannya sudah terpercaya. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card__header collapsed" id="accfaqh3" data-target="#accfaqb3" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="accfaqb3">
                                        <h3 class="card__title"> Apa perbedaan akuntansi online dan offline? </h3>
                                    </div>
                                    <div class="collapse" id="accfaqb3" data-parent="#accfaq">
                                        <div class="card__body">
                                        <p> Software offline di install di komputer, bisa dijalankan tanpa terhubung ke internet. Tetapi untuk mendapatkan data yang <em>real-time</em> dan akurat membutuhkan <em>update</em> data secara manual. </p>
                                        <p> Sedangkan <i>sistem</i>&nbsp; <em>online</em> harus terhubung ke internet, tetapi laporan data terintegrasi dan dapat diakses secara <em>real-time</em> kapan saja dan di mana saja, melalui perangkat komputer atau perangkat <a href="fitur/ios-android-app/index.html">Android atau iOS</a>. </p>
                                        <p> Tidak harus di instal atau dipasang di komputer, sehingga membuat proses akuntansi semakin ringan karena <a href="blog/definisi-arti-fungsi-manfaat-platform-cloud-accounting-adalah/index.html">berbasis <em>Web Base (Cloud)</em>
                                            </a>. </p>
                                        <p> Koneksi internet dan kebutuhan olah informasi secara cepat sangat dibutuhkan perusahaan untuk selalu memonitor bisnis secara akurat. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card__header collapsed" id="accfaqh4"  data-target="#accfaqb4" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="accfaqb4">
                                        <h3 class="card__title"> Mengapa harus menggunakan sistem zen yang asli? </h3>
                                    </div>
                                    <div class="collapse" id="accfaqb4" data-parent="#accfaq">
                                        <div class="card__body">
                                        <p> Bagaimana jadinya jika sistem yang sering digunakan di perusahaan adalah produk tidak resmi? Apakah menjadi manfaat dan aman untuk melindungi data perusahaan? </p>
                                        <p>
                                            <em>Download</em> dan gunakan <em>zen original</em> untuk menjaga data dan keamanan bisnis Anda.
                                        </p>
                                        <p>
                                            <em>Software</em> dari dalam dan brand luar negeri, jika tidak resmi dapat membahayakan sistem pengguna, sangat disarankan untuk selalu menggunakan aplikasi resmi untuk keamanan data perusahaan.
                                        </p>
                                        <p> Kelola bisnis lebih tenang dan berkah dengan produk yang terpercaya, murah cukup terjangkau, resmi dan terjamin. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card__header collapsed" id="accfaqh6"  data-target="#accfaqb6" data-toggle="collapse"
                                    aria-expanded="false" aria-controls="accfaqb6">
                                        <h3 class="card__title"> Bagaimana cara memulai menggunakan Smart Kabupaten online? </h3>
                                    </div>
                                    <div class="collapse" id="accfaqb6" data-parent="#accfaq">
                                        <div class="card__body">
                                        <p> Daftar hari ini dan <em>login</em> ke sistem <em>website</em> Smart Kabupaten.id, atau <em>install</em> aplikasi Smart Kabupaten di <a href="fitur/ios-android-app/index.html">Google Play dan App Store</a>. </p>
                                        <p>GRATIS untuk demo!</p>
                                        <p> Tidak perlu melakukan Gunakan <em>browser</em> Anda dan langsung gunakan di <em>browser (web base)</em>, atau dapatkan dan <em>Install</em> aplikasinya. </p>
                                        <p> Paket harga langganan yang <em>bervariasi</em> tergantung kebutuhan bisnis yang Anda miliki, dapatkan langganan harga terjangkau di halaman <a href="harga/index.html">harga software Smart Kabupaten ini</a>. </p>
                                        </div>
                                    </div>
                                </div>
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

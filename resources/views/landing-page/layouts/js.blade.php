<script src="{{ asset('techbuzz/assets/js/jquery-2.2.4.min.js') }}"></script>
<script src="{{ asset('techbuzz/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('techbuzz/assets/js/jquery.meanmenu.min.js') }}"></script>
<script src="{{ asset('techbuzz/assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('techbuzz/assets/js/lightcase.js') }}"></script>
<script src="{{ asset('techbuzz/assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('techbuzz/assets/js/js_jquery.knob.js') }}"></script>
<script src="{{ asset('techbuzz/assets/js/js_jquery.appear.js') }}"></script>
<script src="{{ asset('techbuzz/assets/js/tilt.jquery.min.js') }}"></script>
<script src="{{ asset('techbuzz/assets/js/counterup.min.js') }}"></script>
<script src="{{ asset('techbuzz/assets/js/circle-progress.min.js') }}"></script>
<script src="{{ asset('techbuzz/assets/js/wow.min.js') }}"></script>
<script src="{{ asset('techbuzz/assets/js/waypoint.js') }}"></script>
<script src="{{ asset('techbuzz/assets/js/main.js') }}"></script>
<script src="https://opuslab.works/js/app.js"></script>
<script src="https://opuslab.works/js/owl.carousel.min.js"></script>
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
@yield('js')

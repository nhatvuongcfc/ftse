$(document).ready(function() {
    $(".dropdown").bind("click hover", function() {
        $("dropdown-menu").addClass("active");
    });
    $(".btn-search").click(function() {
        $(".search").addClass("active");
        $(".input-search").focus();
    });
    var mouse_is_inside = false;

    $(document).mouseup(function(e) {
        if (!mouse_is_inside) {
            $("body").removeClass("active");
            $(".menu-mobile").removeClass("active");
            $(".search").removeClass("active");
            $(".container-login100").removeClass("active");
            $(".btn-close-menu").removeClass("active");

        }

    });

    $(".container-login100").mouseleave(function() {
        // if (!mouse_is_inside) {
        $(".container-login100").removeClass("active");

    });
    $(".btn-close-login").click(function() {
        $(".container-login").removeClass("active");
    });
    $(window).resize(function() {
        if ($(window).width() > 1180) {
            $("body").removeClass("active");
        }
    });
    $(".btn-menu").click(function() {
        $("body").addClass("active");
        $(".btn-close-menu").addClass("active");

        $(".menu-mobile").addClass("active");
        $(".container-login100").addClass("active");

    });
    $(".btn-login").click(function() {
        // alert('ok');
        $(".container-login").addClass("active");
        $(".input-email").focus();

        // $(".menu-mobile").addClass("active");
    });
    var navbarCollapse = function() {
        //background menu
        if ($("#mainNav").offset().top > 100) {
            $("#mainNav").addClass("navbar-shrink");
        } else {
            $("#mainNav").removeClass("navbar-shrink");
        }


        // scroll menu mobile

    };
    // 
    $(window).scroll(navbarCollapse);
    navbarCollapse();
    // if ($(document).height() > 400) {
    //     $(".menu-mobile").addClass("scrollbar");
    // } else {
    //     // console.log('no');
    //     $(".menu-mobile").removeClass("scrollbar");
    // }
    //OWN CAROUSEL
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items: 1,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 1000,
        autoplayHoverPause: true,
        mouseDrap: true,
        touchDrap: true,
    });
    $(".next").click(function() {
        owl.trigger('owl.next');
    });
    $(".prev").click(function() {
        owl.trigger('owl.prev');
    });
    $("#icon-eye-password").click(function() {
        var input = $(".input-password");
        if (input.attr('type') == 'text') {
            input.attr('type', 'password');
            $(this).attr('class', 'fa fa-eye-slash');
        } else {
            input.attr('type', 'text');
            $(this).attr('class', 'fa fa-eye');
        }
    });
    $(".input-password").click(function() {
        $(this).focus();
    })
});
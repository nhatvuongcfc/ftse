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

    // function togglePassword(e) {
    //     console.log('ok');
    //     // console.log(e.attr('type'));
    // }
    $("#icon-eye-password").click(function() {
        var input = $("#inputPassword");
        // console.log(input.attr('type'));
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
    });
    $('#modal1').on('hidden.bs.modal', function(e) {
        // do something...
        $('#modal1 iframe').attr("src", $("#modal1 iframe").attr("src"));
    });

    $('#modal2').on('hidden.bs.modal', function(e) {
        // do something...
        $('#modal2 iframe').attr("src", $("#modal2 iframe").attr("src"));
    });

    function showModalAdvisory() {
        $(".button-advisory").css('display', 'none');
        // $(".navbar").css("display", "none");

        $(".overlay").addClass('active');
        $(".content-advisory").addClass('active');

    }
    $(".close-advisory").on('click', function() {
        $(".button-advisory").css('display', 'block');
        $(".content-advisory").removeClass('active');
        $(".overlay").removeClass('active');

    });

    function showSidebar() {
        $(".button-sidebar").css('display', 'none');
        $(".navbar").css("display", "none");

        $(".container-sidebar").addClass('show');

    }
    $(".close-sidebar").on('click', function() {
        $(".navbar").css("display", "block");
        // $(".button-advisory").css('display', 'block');
        $(".content-advisory").removeClass('show');
    });
    // $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
    //     if (!$(this).next().hasClass('show')) {
    //         $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
    //     }
    //     var $subMenu = $(this).next(".dropdown-menu");
    //     $subMenu.toggleClass('show');

    //     $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
    //         $('.dropdown-submenu .show').removeClass("show");
    //     });

    //     return false;
    // });

    function postAdvisory() {
        var name = $('#nameAdvisory').val();
        var email = $('#emailAdvisory').val();
        var phone = $('#phoneAdvisory').val();
        var gender = $('.genderAdvisory').val();
        var text = $('#textAdvisory').val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'post',
            url: './post-advisory',
            dataType: "JSON",
            data: {
                name: name,
                email: email,
                phone: phone,
                gender: gender,
                text: text,
            },
            success: function(result) {
                console.log(result);
                // Swal.fire({
                //     text: 'Xóa thành công',
                //     icon: 'success',
                //     timer: 2000,
                //     showConfirmButton: false
                // });
                // setTimeout(function() {
                //     location.reload();
                // }, 500);
                // checkbox.each(function() {
                //     this.checked = false;
                // });
            }
        });
    }
    $('.dismiss, .overlay').on('click', function() {
        $('.sidebar').removeClass('activeSidebar');
        $('.overlay').removeClass('active');
        $(".button-advisory").css('display', 'block');
        $(".content-advisory").removeClass('active');

    });

    $('.open-menu').on('click', function(e) {
        e.preventDefault();
        $('.sidebar').addClass('activeSidebar');
        $('.overlay').addClass('active');
        // close opened sub-menus
    });
    $(".close-sidebar").on('click', function() {
        $('.sidebar').removeClass('activeSidebar');
        $('.overlay').removeClass('active');
    });
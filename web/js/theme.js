/*
 Theme Name: Pithree Press - Construction Business HTML Template 
 Theme URL: http://eitthemes.com/html/pithree/
 Author: EitThemes.com
 Author URI: http://eitthemes.com
 Description: 
 Version: 1.0
 */


(function($) {
    'use strict';
    if ($(".sliderSection").length > 0)
    {
        $('.tp-banner').revolution({
            delay: 9000,
            startwidth: 1170,
            startheight: 750,
            startWithSlide: 0,
            fullScreenAlignForce: "off",
            navigationType: "bullet",
            navigationArrows: "on",
            navigationStyle: "round",
            touchenabled: "on",
            onHoverStop: "off",
            navOffsetHorizontal: 0,
            navOffsetVertical: 20,
            shadow: 0,
            fullWidth: "off",
            fullScreen: "off",
            navigationVOffset: 35

        });
    }

    //=========================
    // Mixer
    //=========================
    if ($('.filterCont').length > 0) {
        $('.filterCont').themeWar();
    }

    //=======================================================
    // Testmonial
    //=======================================================
    $(".testCaro").owlCarousel({
        nav: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            767: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });

    //=======================================================
    // Testmonial
    //=======================================================
    $(".clientCaro").owlCarousel({
        nav: false,
        dots: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 2
            },
            767: {
                items: 4
            },
            1000: {
                items: 6
            }
        }
    });
    //========================
    // Subscriptions 
    //========================
    if ($("#subscriptionsforms").length > 0)
    {
        $("#subscriptionsforms").on('submit', function(e) {
            e.preventDefault();
            var sub_email = $("#sub_email").val();
            $("#subs_submit").html('<i class="fa fa-spinner"></i>');
            if (sub_email == '')
            {
                $("#sub_email").addClass('reqError');
                $("#subs_submit").html('<i class="fa fa-warning"></i>');
            }
            else
            {
                $("#sub_email").removeClass('reqError');
                $.ajax({
                    type: "POST",
                    url: "php/subscribe.php",
                    data: {sub_email: sub_email},
                    success: function(data)
                    {
                        $("#subscriptionsforms input").val('');
                        $("#subs_submit").html('<i class="fa fa-thumbs-up"></i>');
                    }
                });
            }
        });
        $("#sub_email").on('keyup', function() {
            $(this).removeClass('reqError');
        });
    }


    //========================
    // Contact Submit
    //========================
    if ($("#contactForm").length > 0)
    {
        $("#contactForm").on('submit', function(e) {
            e.preventDefault();
            $("#con_submit").html('Processsing...');
            var con_name = $("#con_name").val();
            var con_email = $("#con_email").val();
            var con_message = $("#con_message").val();


            var required = 0;
            $(".required", this).each(function() {
                if ($(this).val() == '')
                {
                    $(this).addClass('reqError');
                    required += 1;
                }
                else
                {
                    if ($(this).hasClass('reqError'))
                    {
                        $(this).removeClass('reqError');
                        if (required > 0)
                        {
                            required -= 1;
                        }
                    }
                }
            });
            if (required === 0)
            {
                $.ajax({
                    type: "POST",
                    url: 'php/mail.php',
                    data: {con_name: con_name, con_email: con_email, con_message: con_message},
                    success: function(data)
                    {
                        $("#con_submit").html('Done!');
                        $("#contactForm input, #contactForm textarea").val('');
                    }
                });
            }
            else
            {
                $("#con_submit").html('Failed!');
            }

        });

        $(".required").on('keyup', function() {
            $(this).removeClass('reqError');
        });
    }
    //=======================================================
    // Google map
    //=======================================================
    if ($('#map').length > 0) {
        var map;
        map = new GMaps({
            el: '#map',
            lat: 36.7267361,
            lng: 10.2402261,
            zoomControlOpt: {
                style: 'SMALL',
                position: 'TOP_LEFT'
            },
            scrollwheel: false,
            zoom: 16,
            zoomControl: false,
            panControl: false,
            streetViewControl: false,
            mapTypeControl: false,
            overviewMapControl: false,
            clickable: false
        });
    }
    //===================================
    // Fixed Header
    //===================================
    $(window).on('scroll', function() {
        if ($(window).scrollTop() > 80)
        {
            $("header").addClass('fixedHeader animated fadeInUp');
        }
        else
        {
            $("header").removeClass('fixedHeader animated fadeInUp');
        }
    });

    //========================
    // Mobile Menu
    //========================
    if ($('.mobileMenu').length > 0) {
        $('.mobileMenu').on('click', function() {
            $(this).toggleClass('active');
            $('.mainnav > ul').slideToggle('slow');
        });
        if ($(window).width() < 768)
        {
            $(".has-menu-items a").on('click', function() {
                $(this).parent().toggleClass('active');
                $(this).parent().children('.sub-menu').slideToggle('slow');
                return false;
            });
        }

    }
    //========================
    // Flug dropdown
    //========================
    if ($('.countryFlug').length > 0) {
        $('.countryFlug').on('click', function() {
            $(this).toggleClass("active");
            $('.countryFlug > .flagList').slideToggle('slow');
        });

    }
    //=======================================================
    // Color Preset
    //=======================================================
    if ($(".colorPresetArea").length > 0)
    {
        var switchs = true;
        $(".gearBtn").on('click', function(e) {
            e.preventDefault();
            if (switchs)
            {
                $(this).addClass('active');
                $(".colorPresetArea").animate({'left': '0px'}, 400);
                switchs = false;
            } else
            {
                $(this).removeClass('active');
                $(".colorPresetArea").animate({'left': '-290px'}, 400);
                switchs = true;
            }
        });

        $("#patterns a").on('click', function(e) {
            e.preventDefault();
            var bg = $(this).attr('href');

            if ($(".boxed").hasClass('active'))
            {
                //alert(bg);
                $('#patterns a').removeClass('active');
                $(this).addClass('active');
                $('body').removeClass('pat1 pat2 pat3 pat4 pat5 pat6 pat7 pat8 pat9 pat10');
                $('body').addClass(bg);
            } else
            {
                alert('Please, active box layout First.');
            }

        });

        $(".layout").on('click', function(e) {
            e.preventDefault();
            var layout = $(this).attr('href');
            if (layout == 'wide')
            {
                $('body').removeClass('pat1 pat2 pat3 pat4 pat5 pat6 pat7 pat8 pat9 pat10');
            }
            $('.layout').removeClass('active');
            $(this).addClass('active');
            $("#layout").attr('href', 'css/lay_colors/' + layout + '.css');
        });

        $(".lightDark a").click(function(e) {
            e.preventDefault();
            var colorsch = $(this).attr('href');
            $('.lightDark a').removeClass('active');
            $(this).addClass('active');
            $("#lightDark").attr('href', 'css/lay_colors/' + colorsch + '.css');
        });

        $(".mainColors a").click(function(e) {
            e.preventDefault();
            var color = $(this).attr('href');
            $(".mainColors a").removeClass('active');
            $(this).addClass('active');
            $("#colorChem").attr('href', 'css/lay_colors/' + color + '.css');
        });
    }
    ;

    //========================
    // Back To Top
    //========================
    if ($('#backToTop').length) {
        var scrollTrigger = 100, // px
                backToTop = function() {
                    var scrollTop = $(window).scrollTop();
                    if (scrollTop > scrollTrigger) {
                        $('#backToTop').addClass('showit');
                    } else {
                        $('#backToTop').removeClass('showit');
                    }
                };
        backToTop();
        $(window).on('scroll', function() {
            backToTop();
        });
        $('#backToTop').on('click', function(e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: 0
            }, 700);
        });
    }

    //========================
    // Loader 
    //========================
    $(window).load(function() {
        if ($('.preloader').length > 0) {
            $('.preloader').delay(50).fadeOut('fast');
        }
    });




    //=======================================================
    // magnificPopup
    //=======================================================
    if ($('a.popUp').length > 0) {
        $("a.popUp").magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            }
        });
    }

    //========================
    // Wow Js
    //========================
    new WOW().init();


})(jQuery);

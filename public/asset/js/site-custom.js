/* ==================== 
Table of Content 
==================== 

1. Loader Animation
2. Featured Countdown 
3. Select Dropdown Globally
4. Donation Select
5. Select Light
6. Select Charity Home
7. On Scroll Header Animation
8. Search Popup
9. On Scroll Back To Top Arrow
10. Toggles
11. Animated Skill Bars
12. Animated Counter
13. Popup Gallery & Videos
*/

(function ($) {
    "use strict";

    feather.replace({ 'stroke-width': 1.5 });

    $("[data-trigger]").on("click", function(e){
        e.preventDefault();
        e.stopPropagation();
        var offcanvas_id =  $(this).attr('data-trigger');
        $(offcanvas_id).toggleClass("show");
        $('html').toggleClass("offcanvas-active");
        $(".screen-overlay").toggleClass("show");
    });

    $(".navbar-toggler, .close-nav").on("click", function(e){
        $('html').toggleClass("sidenav-open");
    });

    document.getElementById("yearText").innerHTML = new Date().getFullYear();

     // Dropdown Menu For Mobile
     $('.dropdown-menu a.dropdown-toggle-mob').on('click', function (e) {
        if (!$(this).next().hasClass('show')) {
            $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
        }
        var $subMenu = $(this).next(".dropdown-menu");
        //alert(hello);
        $(this).toggleClass('show');
        $subMenu.toggleClass('show');

        $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function (e) {
            $('.dropdown-submenu > .dropdown-toggle-mob').removeClass("show");
            $('.dropdown-toggle-mob').removeClass("show");
        });

        return false;
    });


    $('#basicuse').jflickrfeed({
        limit: 6,
        qstrings: {
            id: '52617155@N08'
        },
        itemTemplate: '<li><a href="{{image_b}}"><img src="{{image_s}}" alt="{{title}}" /></a></li>'
    });
    
    var custom_js = {

        // Loader Animation
        loader_site: function () {

            $(window).on("load",function () {
                $("#pageloader").delay(1200).fadeOut("slow");
                $(".loader-item").delay(700).fadeOut();
            });

        },

        // Featured Countdown
        featured_countdown: function () {
            if ($('#featured-cause').length) {

                var now = new Date();
                var day = now.getDate();
                var month = now.getMonth() + 1;
                var year = now.getFullYear() + 1;

                var nextyear = month + '/' + day + '/' + year + ' 07:07:07';

                $('#featured-cause').countdown({
                    date: nextyear, // TODO Date format: 07/27/2017 17:00:00
                    offset: +2, // TODO Your Timezone Offset
                    day: 'Day',
                    days: 'Days',
                    hideOnComplete: true
                }, function (container) {
                    alert('Done!');
                });
            }
        },

        // Select Dropdown Globally
        select_globally: function () {
            if ($('select').length) {
                $('select').select2({
                    width: 'resolve',
                    theme: "form-dark",
                    minimumResultsForSearch: -1
                });
            }
        },

        // Donation Select
        select_donation: function () {
            if ($('.donation-select').length) {
                $('.donation-select').select2({
                    width: 'resolve',
                    theme: "form-dark",
                    placeholder: "Select Country",
                    minimumResultsForSearch: -1
                });
            }
        },

        // Select Light
        select_light: function () {
            if ($('.form-light-select').length) {
                $('.form-light-select').select2({
                    width: 'resolve',
                    theme: "form-light",
                    minimumResultsForSearch: -1
                });
            }
        },

        // Select Charity Home
        select_charity_home: function () {
            if ($('.home-charity').length) {
                $('.home-charity').select2({
                    width: 'resolve',
                    theme: "form-light",
                    placeholder: "Select Causes",
                    minimumResultsForSearch: -1
                });
            }
        },

        tooltip_globally: function () {
            if ($('[data-bs-toggle="tooltip"]').length) {
                $('[data-bs-toggle="tooltip"]').tooltip();
            }
        },

        // On Scroll Header Animation
        header_anim: function () {
            if ($('.header-fullpage').length) {

                $(window).scroll(function () {
                    if ($(this).scrollTop() > 80) {
                        $('.header-fullpage').addClass('fixed animated fadeInDown fixed-top');
                    } else {
                        $('.header-fullpage').removeClass('fixed animated fadeInDown fixed-top');
                    }
                });
            }
        },

        // Search Popup
        search_overlay: function () {
            if ($('.overlay-close').length) {

                $('#search_home, .overlay-close').on("click", function ($e) {
                    $e.preventDefault();
                    $(".overlay").toggleClass("open");
                });
            }
        },

        // On Scroll Back To Top Arrow
        back_to_top: function () {
            if ($('#mkdf-back-to-top').length) {

                $(window).scroll(function () {
                    if ($(this).scrollTop() > 100) {
                        $('#mkdf-back-to-top').addClass('on');
                    } else {
                        $('#mkdf-back-to-top').removeClass('on');
                    }
                });

                $('#mkdf-back-to-top').click(function () {
                    $("html, body").animate({
                        scrollTop: 0
                    }, 600);
                    return false;
                });
            }
        },

        // Toggles
        toggle_accordion: function () {
            if ($('.toggle').length) {

                $('.toggle').click(function () {

                    $('.toggle').removeClass("arrow-down");

                    if (!$(this).next().hasClass('show')) {
                        $(this).parent().children('.collapse.show').collapse('hide');
                        $(this).toggleClass('arrow-down');

                    }
                    $(this).next().collapse('toggle');

                });
            }
        },

        // Animated Skill Bars  
        animated_skillbar: function () {
            if ($('.skillbar').length) {

                $('.skillbar').appear();
                $('.skillbar').on('appear', function () {
                    $(this).find('.skillbar-bar').animate({
                        width: $(this).attr('data-percent')
                    }, 3000);
                });
            }
        },

        // Animated Counter
        animated_counter: function () {
            if ($('.counter').length) {

                $('.counter').counterUp({
                    delay: 10,
                    time: 1000
                });
            }
        },

        // Popup Gallery & Videos
        magnific_popup: function () {
            if ($('.popup-video').length) {

                $('.popup-video').magnificPopup({
                    type: 'iframe',
                    mainClass: 'mfp-fade',
                    removalDelay: 160,
                    preloader: true,
                    fixedContentPos: true
                });

                $('.img-gallery').each(function () { // the containers for all your galleries
                    $(this).magnificPopup({
                        delegate: 'a', // the selector for gallery item
                        type: 'image',
                        gallery: {
                            enabled: true, // set to true to enable gallery

                            preload: [0, 2], // read about this option in next Lazy-loading section

                            navigateByImgClick: true,

                            arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>', // markup of an arrow button

                            tPrev: 'Previous (Left arrow key)', // title for left button
                            tNext: 'Next (Right arrow key)', // title for right button
                            tCounter: '<span class="mfp-counter">%curr% of %total%</span>' // markup of counter
                        }
                    });
                });
            }
        },

        // Carousel Home Testimonials
        carousel_home_testimonials: function () {
            if ($('#home-client-testimonials').length) {

                $("#home-client-testimonials").owlCarousel({
                    items: 2,
                    margin: 30,
                    loop: true,
                    nav: true,
                    slideBy: 1,
                    dots: false,
                    center: false,
                    autoplay: true,
                    autoheight: true,
                    navText: [
                        '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                        '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'],
                    responsive: {
                        320: {
                            items: 1,
                        },
                        600: {
                            items: 1,
                        },
                        767: {
                            items: 2,
                        },
                        1000: {
                            items: 3,
                            loop: true,
                        },
                        1200: {
                            items: 3,
                            loop: true,
                        }
                    }
                });
            }
        },

        // Carousel Donators
        carousel_our_donator: function () {
            if ($('#our-donator-slider-warp').length) {

                $("#our-donator-slider-warp").owlCarousel({
                    items: 2,
                    margin: 30,
                    loop: true,
                    nav: false,
                    slideBy: 1,
                    dots: false,
                    center: false,
                    autoplay: true,
                    autoheight: true,
                    navText: [
                        '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                        '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'],
                    responsive: {
                        320: {
                            items: 1,
                        },
                        600: {
                            items: 2,
                        },
                        767: {
                            items: 2,
                        },
                        1000: {
                            items: 3,
                            loop: true,
                        },
                        1200: {
                            items: 2,
                            loop: true,
                        }
                    }
                });

            }
        },

        // Carousel Home Clients
        carousel_home_clients: function () {
            if ($('#home-clients').length) {

                $("#home-clients").owlCarousel({
                    items: 2,
                    margin: 30,
                    loop: true,
                    nav: false,
                    slideBy: 1,
                    dots: true,
                    center: false,
                    autoplay: true,
                    autoheight: true,
                    navText: [
                        '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                        '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'],
                    responsive: {
                        320: {
                            items: 2,
                        },
                        600: {
                            items: 3,
                        },
                        767: {
                            items: 4,
                        },
                        1000: {
                            items: 5,
                            loop: true,
                        },
                        1200: {
                            items: 5,
                            loop: true,
                        }
                    }
                });

            }
        },

        // Carousel Home Blog Post
        carousel_home_blog: function () {
            if ($('#home-blog-post').length) {

                $("#home-blog-post").owlCarousel({
                    items: 1,
                    margin: 30,
                    loop: true,
                    nav: true,
                    slideBy: 1,
                    dots: false,
                    center: false,
                    autoplay: true,
                    autoheight: true,
                    navText: [
                        '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                        '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'],
                    responsive: {
                        320: {
                            items: 1,
                        },
                        600: {
                            items: 2,
                        },
                        767: {
                            items: 2,
                        },
                        1000: {
                            items: 3,
                            loop: true,
                        },
                        1200: {
                            items: 3,
                            loop: true,
                        },
                        1920: {
                            items: 3,
                            loop: true,
                        }
                    }
                });

            }
        },

        // Carousel Second Home Blog Post
        carousel_home_second_blog: function () {
            if ($('#home-second-blog-post').length) {

                $("#home-second-blog-post").owlCarousel({
                    items: 1,
                    margin: 30,
                    loop: true,
                    nav: true,
                    slideBy: 1,
                    dots: false,
                    center: false,
                    autoplay: true,
                    autoheight: true,
                    navText: [
                        '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                        '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'],
                    responsive: {
                        320: {
                            items: 1,
                        },
                        600: {
                            items: 1,
                        },
                        767: {
                            items: 2,
                        },
                        1000: {
                            items: 3,
                            loop: true,
                        },
                        1200: {
                            items: 3,
                            loop: true,
                        },
                        1920: {
                            items: 3,
                            loop: true,
                        }
                    }
                });

            }
        },

        // Carousel Sidebar Causes
        carousel_aside_causes: function () {
            if ($('#sidebar-causes').length) {

                $("#sidebar-causes").owlCarousel({
                    items: 1,
                    margin: 30,
                    loop: true,
                    nav: false,
                    slideBy: 1,
                    dots: true,
                    center: false,
                    autoplay: true,
                    autoheight: true,
                    navText: [
                        '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                        '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'],
                });

            }
        },

        // Carousel Home Second Causes
        carousel_home_second_causes: function () {
            if ($('#home-second-causes').length) {

                $("#home-second-causes").owlCarousel({
                    items: 1,
                    margin: 30,
                    loop: true,
                    nav: false,
                    slideBy: 1,
                    dots: true,
                    center: false,
                    autoplay: true,
                    autoheight: true,
                    navText: [
                        '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                        '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'],
                    responsive: {
                        320: {
                            items: 1,
                        },
                        600: {
                            items: 1,
                        },
                        767: {
                            items: 2,
                        },
                        1000: {
                            items: 3,
                            loop: true,
                        }
                    }
                });

            }
        },

        // Carousel Home Second Events
        carousel_home_second_events: function () {
            if ($('#home-second-events').length) {

                $("#home-second-events").owlCarousel({
                    items: 1,
                    margin: 30,
                    loop: true,
                    nav: true,
                    slideBy: 1,
                    dots: false,
                    center: false,
                    autoplay: true,
                    autoheight: true,
                    navText: [
                        '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                        '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'],
                    responsive: {
                        320: {
                            items: 1,
                        },
                        600: {
                            items: 1,
                        },
                        767: {
                            items: 2,
                        },
                        1000: {
                            items: 3,
                            loop: true,
                        }
                    }
                });

            }
        },

        // Carousel Home Second Testimonials
        carousel_home_second_testimonials: function () {
            if ($('#home-second-testimonials').length) {

                $("#home-second-testimonials").owlCarousel({
                    items: 1,
                    margin: 30,
                    loop: true,
                    nav: true,
                    slideBy: 1,
                    dots: false,
                    center: false,
                    autoplay: false,
                    autoheight: true,
                    navText: [
                        '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                        '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>']
                });

            }
        },

        // Carousel Home Second Testimonials
        contact_form: function () {
            if ($('#contact_form').length) {

                $("#contact_form").validate({
                    meta: "validate",
                    submitHandler: function (form) {

                        var s_name = $("#name").val();
                        var s_lastname = $("#lastname").val();
                        var s_email = $("#email").val();
                        var s_phone = $("#phone").val();
                        var s_suject = $("#subject").val();
                        var s_comment = $("#comment").val();
                        $.post("contact.php", {
                            name: s_name,
                            lastname: s_lastname,
                            email: s_email,
                            phone: s_phone,
                            subject: s_suject,
                            comment: s_comment
                        },
                            function (result) {
                                $('#sucessmessage').append(result);
                            });
                        $('#contact_form').hide();
                        return false;
                    },
                    /* */
                    rules: {
                        name: "required",

                        lastname: "required",
                        // simple rule, converted to {required:true}
                        email: { // compound rule
                            required: true,
                            email: true
                        },
                        phone: {
                            required: true,
                        },
                        comment: {
                            required: true
                        },
                        subject: {
                            required: true
                        }
                    },
                    messages: {
                        name: "Please enter your name.",
                        lastname: "Please enter your last name.",
                        email: {
                            required: "Please enter email.",
                            email: "Please enter valid email"
                        },
                        phone: "Please enter a phone.",
                        subject: "Please enter your message.",
                        comment: "Please enter a comment."
                    },
                });

            }
        },


        initializ: function () {

            this.featured_countdown();
            this.select_globally();
            this.select_donation();
            this.select_light();
            this.select_charity_home();
            //this.mobile_dropdown();
            this.tooltip_globally();
            this.header_anim();
            this.search_overlay();
            this.back_to_top();
            this.toggle_accordion();
            this.animated_skillbar();
            this.animated_counter();
            this.magnific_popup();
            this.carousel_home_testimonials();
            this.carousel_our_donator();
            this.carousel_home_clients();
            this.carousel_home_blog();
            this.carousel_home_second_blog();
            this.carousel_aside_causes();
            this.carousel_home_second_causes();
            this.carousel_home_second_events();
            this.carousel_home_second_testimonials();
            this.contact_form();

        }

    }

    /* ---------------------------------------------
    Document ready function
    --------------------------------------------- */
    $(function () {

        custom_js.loader_site();
        custom_js.initializ();
    });

})(jQuery);

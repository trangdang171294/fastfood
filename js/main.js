jQuery(document).on('ready', function ($) {
    "use strict";

    /*--------------------------
        SCROLLSPY ACTIVE
    ---------------------------*/
    $('body').scrollspy({
        target: '.bs-example-js-navbar-scrollspy',
        offset: 50
    });

    /*--------------------------
        STICKY MAINMENU
    ---------------------------*/
    $("#mainmenu-area").sticky({
        topSpacing: 0
    });


    /*-----------------------------
        SLIDER ACTIVE
    ------------------------------*/
    var mySlider = $('.pogoSlider').pogoSlider({
        pauseOnHover: false
    }).data('plugin_pogoSlider');


    /*----------------------------
        OPEN SEARCH FORM
    ----------------------------*/
    var $searchForm = $('.search-form');
    var $searchFormTrigger = $('.search-form-trigger');
    var $formOverlay = $('.search-form-overlay');
    $searchFormTrigger.on('click', function (event) {
        event.preventDefault();
        toggleSearch();
    });

    function toggleSearch(type) {
        if (type === "close") {
            //close serach 
            $searchForm.removeClass('is-visible');
            $searchFormTrigger.removeClass('search-is-visible');
        } else {
            //toggle search visibility
            $searchForm.toggleClass('is-visible');
            $searchFormTrigger.toggleClass('search-is-visible');
            if ($searchForm.hasClass('is-visible')) $searchForm.find('input[type="search"]').focus();
            $searchForm.hasClass('is-visible') ? $formOverlay.addClass('is-visible') : $formOverlay.removeClass('is-visible');
        }
    }

    /*--------------------------------
        DROPDOWN MOBILE MENU
    ----------------------------------*/
    function doneResizing() {
        if (Modernizr.mq('screen and (max-width:991px)')) {
            $('.at-drop-down').on('click', function (e) {
                e.preventDefault();
                $(this).next($('.sub-menu')).slideToggle();
            });
        }
    }
    var id;
    $(window).resize(function () {
        clearTimeout(id);
        id = setTimeout(doneResizing, 0);
    });
    doneResizing();


    /*------------------------------
        TIME PICKER ACTIVE
    -------------------------------*/
    var input = $('#time,#reservation_time').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });


    /*------------------------------
        ABOUT VIDEO POPUP
    --------------------------------*/
    $('.about-video-button,.blog-video-button').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 320,
        preloader: false
    });


    /*------------------------------
        MENU IMAGE POPUP
    -------------------------------*/
    $('.menu-popup').magnificPopup({
        type: 'image',
        removalDelay: 500, //delay removal by X to allow out-animation
        callbacks: {
            beforeOpen: function () {
                // just a hack that adds mfp-anim class to markup 
                this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
                this.st.mainClass = this.st.el.attr('data-effect');
            }
        },
        closeOnContentClick: true,
        midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
    });


    /*---------------------------
        SMOOTH SCROLL
    -----------------------------*/
    $('a.scrolltotop, .slider-area h3 a, .navbar-header a, ul#nav a').on('click', function (event) {
        var id = $(this).attr("href");
        var offset = 40;
        var target = $(id).offset().top - offset;
        $('html, body').animate({
            scrollTop: target
        }, 1500, "easeInOutExpo");
        event.preventDefault();
    });


    /*----------------------------
        SCROLL TO TOP
    ------------------------------*/
    $(window).scroll(function () {
        var totalHeight = $(window).scrollTop();
        if (totalHeight > 300) {
            $(".scrolltotop").fadeIn();
        } else {
            $(".scrolltotop").fadeOut();
        }
    });





}(jQuery));


jQuery(window).on('load', function () {


});
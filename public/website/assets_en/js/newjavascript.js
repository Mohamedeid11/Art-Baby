$(function () {
    "use strict";

    $('.pop_search').on('click', function () {

        $('#show_search').fadeIn(500);

    });

    $('#show_search').on('click', function () {

        $(this).fadeOut(500);

    });

    $('#show_search .insert').on('click', function (e) {

        e.stopPropagation();

    });

    $('.pop_review').on('click', function () {

        $('#pop_reviews').fadeIn(500);

    });

    $('#pop_reviews').on('click', function () {

        $(this).fadeOut(500);

    });

    $('#pop_reviews .insert_1').on('click', function (e) {

        e.stopPropagation();

    });



    $('.login').on('click', function () {

        $('#log_in').fadeIn(500);

    });

    $('#log_in').on('click', function () {

        $(this).fadeOut(500);

    });

    $('#log_in .insert_2').on('click', function (e) {

        e.stopPropagation();

    });

    $('.signup').on('click', function () {
        recaptchaVerifier.render();
        $('#sign_up').fadeIn(500);

    });

    $('#sign_up').on('click', function () {

        $(this).fadeOut(500);

    });

    $('#sign_up .insert_2').on('click', function (e) {

        e.stopPropagation();

    });



    $('.forgertpass').on('click', function () {
        recaptchaVerifier2.render();
        $('#forgert_pass').fadeIn(500);

    });


    $('#forgert_pass').on('click', function () {

        $(this).fadeOut(500);

    });

    $('#forgert_pass .insert_2').on('click', function (e) {

        e.stopPropagation();

    });





    $('.navbar-light .navbar-nav .nav-item').on('click', function () {

        $(this).addClass('active').siblings().removeClass('active');
    });




    $('.thumbnails img').on('click', function () {

        'use strict';

        $('.thumbnails img').removeClass('selected');

        $(this).addClass('selected');

        $('.master-img img').attr('src', $(this).attr('src'));

    });


    $('.my_hover.pe-4.position-relative').mouseenter(function () {

        $('.inside_hover.py-4.px-3.border.index_over.shadow').fadeIn(300);

    });

    $('.inside_hover.py-4.px-3.border.index_over.shadow').mouseleave(function () {

        $(this).fadeOut(100);

    });





    $('.thumbnails img').on('click', function () {

        'use strict';

        $('.thumbnails img').removeClass('selected');

        $(this).addClass('selected');

        $('.master-img img').attr('src', $(this).attr('src'));

    });



    $('i.icon-bin.h3.transition-me.point').on('click', function () {

        var index = $('i.icon-bin.h2.main_icon1.transition-me.point').index(this);

        $('.cart_order.py-4.position-relative').eq(index).fadeOut(500);

    });

    $('.profile .my-new-order .icon-cheveron-down').on('click', function () {

        var index = $('.my-new-order .icon-cheveron-down').index(this);

        $(this).toggleClass('icon-cheveron-up');

        $('.current-inside').eq(index).slideToggle(500);
        $('.previous-inside').eq(index).slideToggle(500);

    });


});

$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('#scroll').fadeIn();
        } else {
            $('#scroll').fadeOut();
        }
    });
    $('#scroll').click(function () {
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
});

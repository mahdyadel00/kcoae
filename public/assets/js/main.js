$(document).ajaxComplete(function() {
    $('input[type=checkbox][data-toggle^=toggle]').bootstrapToggle();
});

function printPageArea(areaID){
    var printContent = document.getElementById(areaID).innerHTML;
    var originalContent = document.body.innerHTML;
    document.body.innerHTML = printContent;
    window.print();
    document.body.innerHTML = originalContent;
}
(function ($) {
    "use strict";
    // $('[data-toggle="tooltip"]').tooltip();

    $(".search-h-icon").on('click', function () {
        $(".header-s-input").slideToggle("slow");
    });
    /*** Menu js ***/
    $('.dropdown-menu a.dropdown-toggle').on('click', function (e) {
        var $el = $(this);
        var $parent = $(this).offsetParent(".dropdown-menu");
        if (!$(this).next().hasClass('show')) {
            $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
        }
        var $subMenu = $(this).next(".dropdown-menu");
        $subMenu.toggleClass('show');

        $(this).parent("li").toggleClass('show');

        $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function (e) {
            $('.dropdown-menu .show').removeClass("show");
        });

        if (!$parent.parent().hasClass('navbar-nav')) {
            $el.next().css({ "top": $el[0].offsetTop, "left": $parent.outerWidth() - 4 });
        }
        return false;
    });

// print js
    /*$('#print').click(function() {
        window.print();
        return false;
    });*/




    //----------------- Client  -----------------//

    // preloader
    var winObj = $(window),
        bodyObj = $('body'),
        headerObj = $('header');
    winObj.on('load', function () {
        var $preloader = $('.preloader');

        $preloader.find('.whirlpool').fadeOut();
        $preloader.delay(350).fadeOut('slow');
    });

    var owl = $('.testimonial');
    owl.owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        margin: 30,
        autoplayHoverPause: true,
        lazyLoad: true,
        rtl:true,
        autoplay: true,
        autoplaySpeed: 600,
        responsive: {
            0: {
                margin: 0,
                items: 1
            },
            480: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 2
            },
            1200: {
                items: 2
            },
            1440: {
                items: 2
            }
        }
    })   


}(jQuery))





// counter





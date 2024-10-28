$(document).ready(function () {
    $(".menu-item-has-children").hover(
        function () {
            $(".sub-menu").fadeIn(400);
        },
        function () {
            $(".sub-menu").fadeOut(400);
        }
    );
    $(".ready-to-adopt__content-wrapper").fadeIn(1000);
    $('.featured-pets').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: false,
        speed: 500,
        dots: false,
        arrows: true,
        variableWidth: true,
        prevArrow: '<button type="button" class="slick-prev"><i class="fa-solid fa-arrow-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fa-solid fa-arrow-right"></i></button>'
    });
    $('.puppies-for-adoption__slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: false,
        speed: 500,
        dots: false,
        arrows: true,
        variableWidth: true,
        prevArrow: '<button type="button" class="slick-prev"><i class="fa-solid fa-arrow-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fa-solid fa-arrow-right"></i></button>'
    });

    $(".pet-card__image").hover(
        function () {
            let img = $(this).find("img");
            img.css('scale', '110%');
        },
        function () {
            let img = $(this).find("img");
            img.css('scale', '100%');
        })
    $("#scroll-to-top").click(function () {
        $("html,body").animate({scrollTop: 0}, 600);
        return false
    })
    $(window).scroll(function () {
        if ($(this).scrollTop() > 600) {
            $("#scroll-to-top").fadeIn(800);
        } else {
            $("#scroll-to-top").fadeOut();
        }
    })
});

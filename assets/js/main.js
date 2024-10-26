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
        autoplaySpeed: 2000,
        dots: false,
        arrows: true,
    });
});

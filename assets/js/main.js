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
    $(".puppies-list-block__filter li").click(function () {
        $(".puppies-list-block__filter li").removeClass("pro-checked")
        $(this).addClass("pro-checked");
    })
    $(".steps-involved > div").click(function () {
        let step = $(this);
        if (step.find("i").hasClass("fa-plus")) {
            $(".steps-involved > div").each((index, element) => {
                let el = $(element);
                if (el.find("i").hasClass("fa-minus")) {
                    el.find(".steps-involved__step-description").slideUp(400);
                    el.find(".fa-minus").removeClass("fa-minus").addClass("fa-plus").css({color: "black"});
                }
            })
            step.find(".steps-involved__step-description").slideDown(400);
            step.find(".fa-plus").removeClass("fa-plus").addClass("fa-minus").css({color: "#FA524F"});
            return 1;
        }
        $(".steps-involved > div").each((index, element) => {
            let el = $(element);
            if (el.find("i").hasClass("fa-minus")) {
                el.find(".steps-involved__step-description").slideUp(400);
                el.find(".fa-minus").removeClass("fa-minus").addClass("fa-plus").css({color: "black"});
                return 1;
            }
        })
    })
    $(".puppies-list-block__filter ul li").click(function () {
        let filter = $(this).attr("data-filter");
        $(`.pet-card:not(${filter})`).hide();
        $(`.pet-card.${filter}`).show(400);

        if (filter === "all") {
            $(".pet-card").show(400);
        }
    })

});

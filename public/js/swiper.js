var swiperheadline = new Swiper("#sec-1 .mySwiper1", {
    centeredSlides: false,
    loop: true,
    slidesPerGroupSkip: 1,
    grabCursor: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    keyboard: {
        enabled: true,
    },
    pagination: {
        el: "#sec-1 .swiper-pagination",
    },
});

var swiper = new Swiper("#sec-2 .mySwiper", {
    loop: true,
    navigation: {
        nextEl: "#sec-2 .swiper-button-next",
        prevEl: "#sec-2 .swiper-button-prev",
    },
    breakpoints: {
        300: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        640: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
    },
    mousewheel: true,
    keyboard: true,
});

var swiperlatest = new Swiper("#sec-3 .mySwiper2", {
    slidesPerView: 1,
    centeredSlides: false,
    slidesPerGroupSkip: 1,
    grabCursor: true,
    keyboard: {
        enabled: true,
    },
    breakpoints: {
        768: {
            slidesPerView: 2,
            slidesPerGroup: 1,
        },
    },
    navigation: {
        nextEl: "#sec-3 .swiper-button-next",
        prevEl: "#sec-3 .swiper-button-prev",
    },
});

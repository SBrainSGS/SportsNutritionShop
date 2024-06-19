var swiper = new Swiper('.swiper-container', {
    slidesPerView: 4,
    spaceBetween: 30,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        renderBullet: function (index, className) {
            return '<span class="' + className + '">' + ('0' + (index + 1)).slice(-2) + '</span>';
        },
    },
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints: {
        1200: {
            slidesPerView: 4,
            spaceBetween: 30
        },
        992: {
            slidesPerView: 3,
            spaceBetween: 20
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 20
        },
        576: {
            slidesPerView: 1,
            spaceBetween: 10
        }
    }
});

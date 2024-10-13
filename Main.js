var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    loop: true,
    slidesPerView: "1",
    coverflowEffect: {
        rotate: 0,
        stretch: 165, 
        depth: 100,
        modifier: 2, 
        slideShadows: false
    },
    breakpoints: {
        640: {
            slidesPerView: 2
        }
    }
});
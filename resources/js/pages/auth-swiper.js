/*
Template Name: CureOS - Responsive Tailwind CSS 3 Admin Dashboard
Author: CoderThemes
Website: https://endbrackets.com/
Contact: support@endbrackets.com
File: Auth Swiper js
*/
import Swiper from "swiper";
import { Autoplay, Navigation, Pagination } from "swiper/modules";

var swiper = new Swiper("#swiper_one", {
    modules: [Autoplay, Pagination, Navigation],
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    rewind: true,
    navigation: {
        nextEl: ".button-next",
        prevEl: ".button-prev",
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
        },
    },
});

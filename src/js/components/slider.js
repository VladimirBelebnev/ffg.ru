import Swiper, {Pagination, Navigation, Autoplay} from "swiper";

Swiper.use([Pagination, Navigation, Autoplay]);

const slider = () => {
    const sliderSlider = new Swiper('.slider__slider', {
        direction: 'horizontal',
        loop: true,
        autoplay: {
            delay: 10000,
        },
        slidesPerView: 1,
        pagination: {
            el: '.slider__pagination',
            clickable: true,
        },
        on: {
            slideChange: function (swiper) {
                document.querySelector('.slider__number').innerHTML =
                    swiper.realIndex + 1 <= 9 ? `0${swiper.realIndex + 1}` : swiper.realIndex + 1;
            }
        },
    });

    const calendarSlider = new Swiper('.calendar__slider', {
        direction: 'horizontal',
        loop: true,
        slidesPerView: 3,
        pagination: {
            el: '.calendar__pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.calendar__next',
            prevEl: '.calendar__prev',
        },
        breakpoints: {
            1171: {
                spaceBetween: 20,
                slidesPerView: 3
            },
            769: {
                slidesPerView: 2,
                spaceBetween: 40,
            },
            301: {
                slidesPerView: 1,
            }
        }
    });
};

window.addEventListener('DOMContentLoaded', () => {
    slider();
});
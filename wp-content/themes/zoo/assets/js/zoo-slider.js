// start banner Slider
$(document).ready(function() {
    const swiper = new Swiper('#baner', {
        slidesPerView: 1,

        navigation: {
            nextEl: '.baner__arrow_next',
            prevEl: '.baner__arrow_prev',
        },
        pagination: {
            el: ".swiper-pagination",
        },
        autoplay: {
            delay: 3000,
        },
        loop: true,
        speed: 300,

    })
});
// end banner Slider

// start instagram Slider
$(document).ready(function() {
    let instagramSlider = null;
    let mediaQuerySize = 768;

    function initSlidet () {
        if (!instagramSlider) {
            // console.log("postSlider on");
            instagramSlider = new Swiper('#instagram', {

                // Optional parameters
                spaceBetween: 20,

                breakpoints: {
                    768: {
                        slidesPerView: 3,
                    },
                    992: {
                        slidesPerView: 4,
                        slidesPerGroup: 2,
                    },
                },

                speed: 300,

                navigation: {
                    nextEl: '.instagram__arrow_next',
                    prevEl: '.instagram__arrow_prev',
                },

            });
        }
    }

    function destroySlider () {
        if (instagramSlider) {
            // console.log("postSlider of");
            instagramSlider.destroy();
            instagramSlider = null;
        }
    }

    $(window).on('load resize', function () {
        // Берём текущую ширину экрана
        let windowWidth = $(this).innerWidth();
        // console.log(windowWidth);

        // Если ширина экрана больше или равна mediaQuerySize
        if (windowWidth >= mediaQuerySize) {
            // Инициализировать слайдер если он ещё не был инициализирован
            initSlidet()
        } else {
            // Уничтожить слайдер если он был инициализирован
            destroySlider()
        }
    });

});
// end instagram Slider
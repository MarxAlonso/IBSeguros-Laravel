/*Funcion para carrusel automatico*/
/*	function slideAutoPaly(glider, selector, delay = 5000, repeat = true) {
		let autoplay = null;
		const slidesCount = glider.track.childElementCount;
		let nextIndex = 1;
		let pause = true;

		function slide() {
			autoplay = setInterval(() => {
				if (nextIndex >= slidesCount) {
					if (!repeat) {
						clearInterval(autoplay);
					} else {
						nextIndex = 0;
					}
				}
				glider.scrollItem(nextIndex++);
			}, delay);
		}

		slide();

		var element = document.querySelector(selector);
		element.addEventListener(
			"mouseover",
			(event) => {
				if (pause) {
					clearInterval(autoplay);
					pause = false;
				}
			},
			300
		);

		element.addEventListener(
			"mouseout",
			(event) => {
				if (!pause) {
					slide();
					pause = true;
				}
			},
			300
		);
	}*/
/*Fin de funcion para carrusel automatico*/
/*Carrusel Blog*/
/*var slider = */
new Glider(document.querySelector(".carousel__lista_blog"), {
    // Mobile-first defaults
    slidesToShow: 1,
    slidesToScroll: 1,
    scrollLock: true,
    draggable: true,
    dots: ".carousel__indicadores_blog",
    arrows: {
        prev: ".carousel__anterior_blog",
        next: ".carousel__siguiente_blog",
    },
    responsive: [{
            breakpoint: 280,
            settings: {
                // Set to `auto` and provide item width to adjust to viewport
                slidesToShow: 1,
                slidesToScroll: 1,
                itemWidth: 150,
                duration: 0.25,
            },
        },
        {
            breakpoint: 463,
            settings: {
                // Set to `auto` and provide item width to adjust to viewport
                slidesToShow: 1,
                slidesToScroll: 1,
                itemWidth: 150,
                duration: 0.25,
            },
        },
        {
            // screens greater than >= 775px
            breakpoint: 768,
            settings: {
                // Set to `auto` and provide item width to adjust to viewport
                slidesToShow: 2,
                slidesToScroll: 1,
                itemWidth: 150,
                duration: 0.25,
            },
        },
        {
            // screens greater than >= 1024px
            breakpoint: 992,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                itemWidth: 150,
                duration: 0.25,
            },
        },
    ],
});
/*slideAutoPaly(slider, ".glider");*/
/*Fin Carrusel Blog*/

(function ($) {
	"use strict";

	const $documentOn = $(document);
	const $windowOn = $(window);

	$documentOn.ready(function () {
		/* ================================
       Mobile Menu Js Start
    ================================ */

		$("#mobile-menu").meanmenu({
			meanMenuContainer: ".mobile-menu",
			meanScreenWidth: "1199",
			meanExpand: ['<i class="far fa-plus"></i>'],
		});

		/* ================================
       Sidebar Toggle Js Start
    ================================ */

		$(".offcanvas__close,.offcanvas__overlay").on("click", function () {
			$(".offcanvas__info").removeClass("info-open");
			$(".offcanvas__overlay").removeClass("overlay-open");
		});
		$(".sidebar__toggle").on("click", function () {
			$(".offcanvas__info").addClass("info-open");
			$(".offcanvas__overlay").addClass("overlay-open");
		});

		/* ================================
       Body Overlay Js Start
    ================================ */

		$(".body-overlay").on("click", function () {
			$(".offcanvas__area").removeClass("offcanvas-opened");
			$(".df-search-area").removeClass("opened");
			$(".body-overlay").removeClass("opened");
		});

		/* ================================
       Sticky Header Js Start
    ================================ */

		$windowOn.on("scroll", function () {
			if ($(this).scrollTop() > 250) {
				$("#header-sticky").addClass("sticky");
			} else {
				$("#header-sticky").removeClass("sticky");
			}
		});

		/* ================================
       Video & Image Popup Js Start
    ================================ */

		$(".img-popup").magnificPopup({
			type: "image",
			gallery: {
				enabled: true,
			},
		});

		$(".video-popup").magnificPopup({
			type: "iframe",
			callbacks: {},
		});

		/* ================================
       Counterup Js Start
    ================================ */

		$(".count").counterUp({
			delay: 15,
			time: 4000,
		});

		/* ================================
       Wow Animation Js Start
    ================================ */

		new WOW().init();

		/* ================================
       Nice Select Js Start
    ================================ */

		if ($(".single-select").length) {
			$(".single-select").niceSelect();
		}

		/* ================================
       Parallaxie Js Start
    ================================ */

		if ($(".parallaxie").length && $(window).width() > 991) {
			if ($(window).width() > 768) {
				$(".parallaxie").parallaxie({
					speed: 0.55,
					offset: 0,
				});
			}
		}

		/* ================================
      Project Slider Js Start
    ================================ */
		if ($(".project-slide").length > 0) {
			const ProjectSlide = new Swiper(".project-slide", {
				spaceBetween: 30,
				speed: 1300,
				loop: true,
				autoplay: {
					delay: 1300,
					disableOnInteraction: false,
				},
				navigation: {
					nextEl: ".array-prev",
					prevEl: ".array-next",
				},
				breakpoints: {
					1199: {
						slidesPerView: 5,
					},
					991: {
						slidesPerView: 4,
					},
					767: {
						slidesPerView: 3,
					},
					575: {
						slidesPerView: 2,
					},
					400: {
						slidesPerView: 1,
					},
				},
			});
		}

		/* ================================
      Project Slider Js Start
    ================================ */
		if ($(".project-slide-3").length > 0) {
			const ProjectSlide3 = new Swiper(".project-slide-3", {
				spaceBetween: 30,
				speed: 1300,
				loop: true,
				autoplay: {
					delay: 1300,
					disableOnInteraction: false,
				},
				navigation: {
					nextEl: ".array-prev",
					prevEl: ".array-next",
				},
				breakpoints: {
					1199: {
						slidesPerView: 4,
					},
					991: {
						slidesPerView: 4,
					},
					767: {
						slidesPerView: 3,
					},
					575: {
						slidesPerView: 2,
					},
					400: {
						slidesPerView: 1,
					},
				},
			});
		}

		//>> Text Slider Start <<//
		if ($(".marque-slider").length > 0) {
			const marqueSlider = new Swiper(".marque-slider", {
				slidesPerView: "auto",
				spaceBetween: 40,
				freemode: true,
				centeredSlides: true,
				loop: true,
				speed: 6000,
				allowTouchMove: false,
				autoplay: {
					delay: 1,
					disableOnInteraction: true,
				},
			});
		}

		/* ================================
      Brand Slider Js Start
    ================================ */
		if ($(".brand-slide").length > 0) {
			const BrandSlide = new Swiper(".brand-slide", {
				spaceBetween: 30,
				speed: 1300,
				loop: true,
				autoplay: {
					delay: 1300,
					disableOnInteraction: false,
				},
				navigation: {
					nextEl: ".array-prev",
					prevEl: ".array-next",
				},
				breakpoints: {
					1600: {
						slidesPerView: 7,
					},
					1399: {
						slidesPerView: 6,
					},
					1199: {
						slidesPerView: 5,
					},
					991: {
						slidesPerView: 4,
					},
					767: {
						slidesPerView: 3,
					},
					575: {
						slidesPerView: 2,
					},
					400: {
						slidesPerView: 1,
					},
				},
			});
		}

		/* ================================
      Service Slider Js Start
    ================================ */
		if ($(".service-slide").length > 0) {
			const ServiceSlide = new Swiper(".service-slide", {
				spaceBetween: 30,
				speed: 1300,
				loop: true,
				autoplay: {
					delay: 1300,
					disableOnInteraction: false,
				},
				navigation: {
					nextEl: ".array-prev",
					prevEl: ".array-next",
				},
				breakpoints: {
					1199: {
						slidesPerView: 4,
					},
					991: {
						slidesPerView: 3,
					},
					767: {
						slidesPerView: 2,
					},
					575: {
						slidesPerView: 2,
					},
					400: {
						slidesPerView: 1,
					},
				},
			});
		}

		if ($(".testi-top-slider").length > 0) {
			const testiTopSlider = new Swiper(".testi-top-slider", {
				spaceBetween: 30,
				speed: 1000,
				loop: true,
				direction: "vertical",
				centeredSlides: true,
				autoplay: {
					delay: 1300,
					disableOnInteraction: false,
				},
				navigation: {
					nextEl: ".array-prev",
					prevEl: ".array-next",
				},
				breakpoints: {
					991: {
						slidesPerView: 3,
					},
					767: {
						slidesPerView: 2,
					},
					575: {
						slidesPerView: 2,
					},
					400: {
						slidesPerView: 2,
					},
				},
			});
		}

		if ($(".testimonial-content-slide").length > 0) {
			const testimonialContentSlide = new Swiper(
				".testimonial-content-slide",
				{
					spaceBetween: 30,
					speed: 1000,
					loop: true,
					autoplay: {
						delay: 1300,
						disableOnInteraction: false,
					},
					navigation: {
						nextEl: ".array-prev",
						prevEl: ".array-next",
					},
				},
			);
		}

		//>> Search Popup Start <<//
		const $searchWrap = $(".search-wrap");
		const $navSearch = $(".nav-search");
		const $searchClose = $("#search-close");

		$(".search-trigger").on("click", function (e) {
			e.preventDefault();
			$searchWrap.animate({ opacity: "toggle" }, 500);
			$navSearch.add($searchClose).addClass("open");
		});

		$(".search-close").on("click", function (e) {
			e.preventDefault();
			$searchWrap.animate({ opacity: "toggle" }, 500);
			$navSearch.add($searchClose).removeClass("open");
		});

		function closeSearch() {
			$searchWrap.fadeOut(200);
			$navSearch.add($searchClose).removeClass("open");
		}

		$(document.body).on("click", function (e) {
			closeSearch();
		});

		$(".search-trigger, .main-search-input").on("click", function (e) {
			e.stopPropagation();
		});

		/* ================================
       Mouse Cursor Animation Js Start
    ================================ */

		if ($(".mouseCursor").length > 0) {
			function itCursor() {
				var myCursor = jQuery(".mouseCursor");
				if (myCursor.length) {
					if ($("body")) {
						const e = document.querySelector(".cursor-inner"),
							t = document.querySelector(".cursor-outer");
						let n,
							i = 0,
							o = !1;
						((window.onmousemove = function (s) {
							(o ||
								(t.style.transform =
									"translate(" +
									s.clientX +
									"px, " +
									s.clientY +
									"px)"),
								(e.style.transform =
									"translate(" +
									s.clientX +
									"px, " +
									s.clientY +
									"px)"),
								(n = s.clientY),
								(i = s.clientX));
						}),
							$("body").on(
								"mouseenter",
								"button, a, .cursor-pointer",
								function () {
									(e.classList.add("cursor-hover"),
										t.classList.add("cursor-hover"));
								},
							),
							$("body").on(
								"mouseleave",
								"button, a, .cursor-pointer",
								function () {
									($(this).is("a", "button") &&
										$(this).closest(".cursor-pointer")
											.length) ||
										(e.classList.remove("cursor-hover"),
										t.classList.remove("cursor-hover"));
								},
							),
							(e.style.visibility = "visible"),
							(t.style.visibility = "visible"));
					}
				}
			}
			itCursor();
		}
	}); // End Document Ready Function

	function loader() {
		$(window).on("load", function () {
			// Animate loader off screen
			$(".preloader").addClass("loaded");
			$(".preloader").delay(600).fadeOut();
		});
	}

	loader();
})(jQuery); // End jQuery

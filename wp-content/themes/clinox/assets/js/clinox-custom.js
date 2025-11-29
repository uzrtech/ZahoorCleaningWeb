(function($) {

	"use strict";

		// Preloader start
		$(window).on('load', function () {
			$(".preloder_part").fadeOut();
			$(".spinner").delay(1000).fadeOut("slow");
		});
		// preloader end
	
		jQuery(document).ready(function (){
			// mobile menu start
			$('#mobile-menu-active').metisMenu();

			$('#mobile-menu-active .dropdown > a').on('click', function (e) {
				e.preventDefault();
			});

			$(".hamburger_menu > a").on("click", function (e) {
				e.preventDefault();
				$(".slide-bar").toggleClass("show");
				$("body").addClass("on-side");
				$('.body-overlay').addClass('active');
				$(this).addClass('active');
			});

			$(".close-mobile-menu > a").on("click", function (e) {
				e.preventDefault();
				$(".slide-bar").removeClass("show");
				$("body").removeClass("on-side");
				$('.body-overlay').removeClass('active');
				$('.hamburger_menu > a').removeClass('active');
			});

			$('.body-overlay').on('click', function () {
				$(this).removeClass('active');
				$(".slide-bar").removeClass("show");
				$("body").removeClass("on-side");
				$('.hamburger-menu > a').removeClass('active');
			});

	    });
	
		/* magnificPopup video view */
		$('.popup-video').magnificPopup({
			type: 'iframe'
		});

	
		// inhover active start
		$(".tab-service__item").on('mouseenter', function () {
			$(".tab-service__item").removeClass("active");
			$(this).addClass("active");
		});
	
		// odometer counter start
		jQuery('.odometer').appear(function (e) {
			var odo = jQuery(".odometer");
			odo.each(function () {
				var countNumber = jQuery(this).attr("data-count");
				jQuery(this).html(countNumber);
			});
		});

	// brand slide
	function brandSlide($scope, $) {
		$('.brand__slide').slick({
			infinite: true,
			speed: 500,
			slidesToShow: 5,
			autoplay: true,
			autoplaySpeed: 3000,
			slidesToScroll: 1,
			dots: false,
			arrows: false,
			responsive: [
				{
				breakpoint: 1024,
				settings: {
					slidesToShow: 4,
				}
				},
				{
				breakpoint: 600,
				settings: {
					slidesToShow: 3,
				}
				},
				{
				breakpoint: 480,
				settings: {
					slidesToShow: 2,
				}
				}
			]
		});
	}

	// service slide
	function serviceSlide($scope, $) {
		$('.service__slide').slick({
			infinite: true,
			speed: 500,
			slidesToShow: 4,
			autoplay: true,
			autoplaySpeed: 3000,
			slidesToScroll: 1,
			dots: false,
			arrows: true,
			prevArrow: '<i class="service-arrow service-prev fal fa-long-arrow-left"></i>',
			nextArrow: '<i class="service-arrow service-next fal fa-long-arrow-right"></i>',
			responsive: [
				{
				breakpoint: 1025,
				settings: {
					slidesToShow: 3,
				}
				},
				{
				breakpoint: 769,
				settings: {
					slidesToShow: 2,
				}
				},
				{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
				}
				}
			]
		});
	}
    
	function projectSlide($scope, $) {
		$('.project__slider').slick({
			infinite: true,
			dots: false,
			arrows: false,
			slidesToShow: 3,
			slidesToScroll: 1,
			centerMode: true,
			centerPadding:'0',
		});
	}

	function testimonialSlide($scope, $) {
		$('.testimonial__slide').slick({
			infinite: true,
			dots: true,
			arrows: false,
			slidesToShow: 1,
			slidesToScroll: 1,
		});
	}

	function testimonialSlideTwo($scope, $) {
		$('.testimonial__slide-two').slick({
			infinite: true,
			dots: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: true,
			prevArrow: '<i class="testimonial__arrow testimonial-prev"></i>',
			nextArrow: '<i class="testimonial__arrow testimonial-next"></i>',
		});
	}

	function blogSlide($scope, $) {
		$('.blog__slide').slick({
			infinite: true,
			speed: 500,
			slidesToShow: 3,
			autoplay: true,
			autoplaySpeed: 3000,
			slidesToScroll: 1,
			dots: false,
			arrows: true,
			prevArrow: '<i class="blog-arrow blog-prev fal fa-long-arrow-left"></i>',
			nextArrow: '<i class="blog-arrow blog-next fal fa-long-arrow-right"></i>',
			responsive: [
				{
				breakpoint: 1024,
				settings: {
					slidesToShow: 3,
				}
				},
				{
				breakpoint: 769,
				settings: {
					slidesToShow: 2,
				}
				},
				{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
				}
				}
			]
		});
	}

	function accordionBox($scope, $) {
		if ($(".accordion_box").length) {
			$(".accordion_box").on("click", ".acc-btn", function () {
				var outerBox = $(this).parents(".accordion_box");
				var target = $(this).parents(".accordion");

				if ($(this).next(".acc_body").is(":visible")) {
					$(this).removeClass("active");
					$(this).next(".acc_body").slideUp(300);
					$(outerBox).children(".accordion").removeClass("active-block");
				} else {
					$(outerBox).find(".accordion .acc-btn").removeClass("active");
					$(this).addClass("active");
					$(outerBox).children(".accordion").removeClass("active-block");
					$(outerBox).find(".accordion").children(".acc_body").slideUp(300);
					target.addClass("active-block");
					$(this).next(".acc_body").slideDown(300);
				}
			});
		}
	}


	function tabinfoDataBackground($scope, $) {
		$('[data-background]').each(function() {
			$(this).css('background-image', 'url('+ $(this).attr('data-background') + ')');
		});
	}
	

	function beforeAfterActive($scope, $) {
		if ($(".beforeafter-wrap").length) {
			$(window).load(function() {
				$(".beforeafter-wrap").twentytwenty();
			});
		}
		$('a[data-toggle="pill"]').on('shown.bs.tab', function (e) {
			$(".beforeafter-wrap[data-orientation!='vertical']").trigger('resize')
		});
	}


	$(window).on('elementor/frontend/init', function () {
		elementorFrontend.hooks.addAction('frontend/element_ready/5-brand.default', brandSlide);
		elementorFrontend.hooks.addAction('frontend/element_ready/4-folio-slide.default', projectSlide);
		elementorFrontend.hooks.addAction('frontend/element_ready/5-long.default', serviceSlide);
		elementorFrontend.hooks.addAction('frontend/element_ready/5-tstm.default', testimonialSlideTwo);
		elementorFrontend.hooks.addAction('frontend/element_ready/5-blog.default', blogSlide);
		elementorFrontend.hooks.addAction('frontend/element_ready/5-faq.default', accordionBox);
		elementorFrontend.hooks.addAction('frontend/element_ready/4-brand.default', brandSlide);
		elementorFrontend.hooks.addAction('frontend/element_ready/4-process.default', beforeAfterActive);
		elementorFrontend.hooks.addAction('frontend/element_ready/4-tabinfo.default', tabinfoDataBackground);
		elementorFrontend.hooks.addAction('frontend/element_ready/4-testimonial.default', testimonialSlide);
	});

})(window.jQuery);
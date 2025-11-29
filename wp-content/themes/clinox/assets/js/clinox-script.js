(function ($) {

    "use strict"; 

	var TxMainSlider = function ($scope, $) { 
			
		$scope.find('.clenix-main-slider-item').each(function () {
			$('.clenix-slider-content').not('.slick-initialized').slick({
				arrow: true,
				dots: false,
				infinite: true,
				slidesToShow: 1,
				fade: true,
				autoplay: false,
				slidesToScroll: 1,
				prevArrow: ".main_left_arrow",
				nextArrow: ".main_right_arrow",
			});
		});

	};

	var TxHome3Counter = function ($scope, $) { 
			
		$scope.find('.clenix-fun-fact-section-3').each(function () {
			$('.counter').counterUp({
				delay: 10,
				time: 1000
			});
		});

	};

	var TxFunFact = function ($scope, $) { 
			
		$scope.find('.clenix-fun-fact-section').each(function () {
			$('.counter').counterUp({
				delay: 10,
				time: 1000
			});
		});

	};

	var TxFunFact2 = function ($scope, $) { 
			
		$scope.find('.clenix-fun-fact-section-2').each(function () {
			$('.counter').counterUp({
				delay: 10,
				time: 1000
			});
		});

	};

	var TxProjectSlide = function ($scope, $) { 
			
		$scope.find('.clenix-project-section').each(function () {
			
			$('.clenix-project-slider').not('.slick-initialized').slick({
				arrow: false,
				dots: true,
				infinite: true,
				slidesToShow: 4,
				autoplay: false,
				slidesToScroll: 1,
				responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 1,
						infinite: true,
						dots: false
					}
				},
				{
					breakpoint: 800,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1
					}
				},
				{
					breakpoint: 600,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				},
				{
					breakpoint: 400,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				},
				]
			});
		});

	};


	jQuery(document).ready(function (){

		if($('.search-box-outer').length) {
			$('.search-box-outer').on('click', function() {
				$('body').addClass('search-active');
			});
			$('.close-search').on('click', function() {
				$('body').removeClass('search-active');
			});
		};
		$('.or-canvas-cart-trigger').on("click", function() {
			$('.or-ofcanvas-cart-wrapper').toggleClass("or-canvas-cart-on");
		});

		$('.open_mobile_menu').on("click", function() {
			$('.mobile_menu_wrap').toggleClass("mobile_menu_on");
		});
		$('.open_mobile_menu').on('click', function () {
			$('body').toggleClass('mobile_menu_overlay_on');
		});
		if($('.mobile_menu li.dropdown ul').length){
			$('.mobile_menu li.dropdown').append('<div class="dropdown-btn"><span class="fas fa-caret-right"></span></div>');
			$('.mobile_menu li.dropdown .dropdown-btn').on('click', function() {
				$(this).prev('ul').slideToggle(500);
			});
		}
		$(".dropdown-btn").on("click", function () {
			$(this).toggleClass("toggle-open");
		});

		jQuery(window).on('scroll', function() {
			if (jQuery(window).scrollTop() > 250) {
				jQuery('.clenix-header-section').addClass('sticky-on')
			} else {
				jQuery('.clenix-header-section').removeClass('sticky-on')
			}
		})
	});

	var TxFlioDetail = function ($scope, $) { 
			
		$scope.find('.clenix-portfolio-details-section').each(function () {

			$('.project-slider-for').not('.slick-initialized').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: false,
				asNavFor: '.project-slider-nav'
			});
			
			$('.project-slider-nav').not('.slick-initialized').slick({
				slidesToShow: 5,
				slidesToScroll: 1,
				infinite: true,
				asNavFor: '.project-slider-for',
				dots: true,
				prevArrow: ".pr-nav-left_arrow",
				nextArrow: ".pr-nav-right_arrow",
				focusOnSelect: true
			});

		});

	};


	var TxFilterFolio = function ($scope, $) { 
			
		$scope.find('.clenix-project-feed-section').each(function () {

			$("#portfolio-flters li").click ( function() {
				
				$("#portfolio-flters li").removeClass('filtr-active');
				$(this).addClass('filtr-active');
			
				var selectedFilter = $(this).data("filter");
				$("#portfolio-wrapper").fadeTo(100, 0);
			
				$(".portfolio-item").fadeOut().css('transform', 'scale(0)');
			
				setTimeout(function() {
				  $(selectedFilter).fadeIn(100).css('transform', 'scale(1)');
				  $("#portfolio-wrapper").fadeTo(300, 1);
				}, 300);
			});
		});

	};


	var TxClientSlider = function ($scope, $) { 
			
		$scope.find('.clenix-sponsor-slider').each(function () {

			$('.clenix-sponsor-slider').not('.slick-initialized').slick({
				arrow: false,
				dots: false,
				infinite: true,
				slidesToShow: 5,
				autoplay: true,
				slidesToScroll: 1,
				responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 1,
						infinite: true,
						dots: false
					}
				},
				{
					breakpoint: 800,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1
					}
				},
				{
					breakpoint: 600,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				},
				{
					breakpoint: 400,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				},
				]
			});
		});
	};


	var TxServiceSlide2 = function ($scope, $) { 
			
		$scope.find('.clenix-service-slider-2').each(function () {

			$('.clenix-service-slider-2').not('.slick-initialized').slick({
				arrow: false,
				dots: true,
				infinite: true,
				slidesToShow: 3,
				autoplay: false,
				slidesToScroll: 1,
				responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 1,
						infinite: true,
						dots: false
					}
				},
				{
					breakpoint: 800,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1
					}
				},
				{
					breakpoint: 600,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				},
				{
					breakpoint: 400,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				},
				]
			});
		});
	};

		var TxSkillbar = function ($scope, $) { 
			
			$scope.find('.skill-progress-bar').each(function () {
				var $progress_bar = $('.progress-bar');
				$progress_bar.appear();
				$(document.body).on('appear', '.progress-bar', function() {
					var current_item = $(this);
					if (!current_item.hasClass('appeared')) {
						var percent = current_item.data('percent');
						current_item.css('width', percent + '%').addClass('appeared').parent().append('<span>' + percent + '%' + '</span>');
					}
					 
				});
			});

		};

		var TxHome3Testimonial = function ($scope, $) { 
			
			$scope.find('.clenix-testimonial-slider-wrap-3').each(function () {

				$('.clenix-testimonial-slider-3').not('.slick-initialized').slick({
					arrow: false,
					dots: true,
					infinite: false,
					slidesToShow: 1,
					slidesToScroll: 1,
				});

			});

		};

		var TxHome3Client = function ($scope, $) { 
			
			$scope.find('.clenix-sponsor-section-3').each(function () {

				$('.clenix-sponsor-slider-3').not('.slick-initialized').slick({
					arrow: false,
					dots: false,
					infinite: true,
					slidesToShow: 5,
					autoplay: true,
					slidesToScroll: 1,
					responsive: [
					{
						breakpoint: 1024,
						settings: {
							slidesToShow: 3,
							slidesToScroll: 1,
							infinite: true,
							dots: false
						}
					},
					{
						breakpoint: 800,
						settings: {
							slidesToShow: 3,
							slidesToScroll: 1
						}
					},
					{
						breakpoint: 600,
						settings: {
							slidesToShow: 3,
							slidesToScroll: 1
						}
					},
					{
						breakpoint: 500,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 1
						}
					},
					]
				});

			});

		};


		var TxHome3Project = function ($scope, $) { 
			
			$scope.find('.clenix-project-slider-3').each(function () {

				$('.clenix-project-slider-3').not('.slick-initialized').slick({
					arrow: false,
					dots: true,
					infinite: false,
					slidesToShow: 3,
					slidesToScroll: 1,
					responsive: [
					{
						breakpoint: 1300,
						settings: {
							slidesToShow: 3,
							slidesToScroll: 3,
							infinite: true,
						}
					},
					{
						breakpoint: 1025,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 2,
							infinite: true,
						}
					},
					{
						breakpoint: 800,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 1
						}
					},
					{
						breakpoint: 600,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1
						}
					},
					{
						breakpoint: 500,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1
						}
					}
				
					]
				});

			});

		};

		var TxHome3Service = function ($scope, $) { 
			
			$scope.find('.clenix-service-section-3').each(function () {

				$('.clenix-service-slider-3').not('.slick-initialized').slick({
					arrow: true,
					dots: false,
					infinite: false,
					slidesToShow: 3,
					slidesToScroll: 1,
					prevArrow: ".ser3_left_arrow",
					nextArrow: ".ser3_right_arrow",
					responsive: [
					{
						breakpoint: 1300,
						settings: {
							slidesToShow: 3,
							slidesToScroll: 3,
							infinite: true,
						}
					},
					{
						breakpoint: 1025,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 2,
							infinite: true,
						}
					},
					{
						breakpoint: 800,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 1
						}
					},
					{
						breakpoint: 600,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1
						}
					},
					{
						breakpoint: 500,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1
						}
					}
				
					]
				});
								
			});
		};

		var TxTestimonial = function ($scope, $) { 
		
			$scope.find('.clenix-testimonial-slider').each(function () {

				$('.clenix-testimonial-slider').not('.slick-initialized').slick({
					arrow: true,
					dots: false,
					infinite: false,
					slidesToShow: 2,
					slidesToScroll: 1,
					prevArrow: ".testi-left_arrow",
					nextArrow: ".testi-right_arrow",
					responsive: [
					{
						breakpoint: 1024,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 1,
							infinite: true,
						}
					},
					{
						breakpoint: 1000,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1
						}
					},
					{
						breakpoint: 800,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1
						}
					},
					{
						breakpoint: 600,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 2
						}
					},
					{
						breakpoint: 500,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1
						}
					}

					]
				});

			});

		};

        var TxTeamSlide = function ($scope, $) { 
    
            $scope.find('.clenix-team-slider-wrap').each(function () {

				$('.clenix-team-slider-wrap').not('.slick-initialized').slick({
					arrow: true,
					dots: false,
					infinite: false,
					slidesToShow: 3,
					slidesToScroll: 1,
					prevArrow: ".team_left_arrow",
					nextArrow: ".team_right_arrow",
					responsive: [
					{
						breakpoint: 1300,
						settings: {
							slidesToShow: 3,
							slidesToScroll: 3,
							infinite: true,
						}
					},
					{
						breakpoint: 1025,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 2,
							infinite: true,
						}
					},
					{
						breakpoint: 800,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 1
						}
					},
					{
						breakpoint: 600,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 1
						}
					},
					{
						breakpoint: 500,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1
						}
					}

					]
				});

            });
    
        };
        
        $(window).on('elementor/frontend/init', function () {
    
            if (elementorFrontend.isEditMode()) {
    
                elementorFrontend.hooks.addAction('frontend/element_ready/clenfix-team-slide.default',TxTeamSlide);
				elementorFrontend.hooks.addAction('frontend/element_ready/clenfix-testimonial.default',TxTestimonial);
				elementorFrontend.hooks.addAction('frontend/element_ready/clenfix_whychoose.default',TxSkillbar);
				elementorFrontend.hooks.addAction('frontend/element_ready/clenfix-client.default',TxClientSlider);
				elementorFrontend.hooks.addAction('frontend/element_ready/clenfix-slider.default',TxMainSlider);
				elementorFrontend.hooks.addAction('frontend/element_ready/clenfix_service_2.default',TxServiceSlide2);
				elementorFrontend.hooks.addAction('frontend/element_ready/clenfix-portfolio-filter.default',TxFilterFolio);			
				elementorFrontend.hooks.addAction('frontend/element_ready/clenfix-portfolio-detail.default',TxFlioDetail);
				elementorFrontend.hooks.addAction('frontend/element_ready/clenfix-project-slider.default',TxProjectSlide);
				elementorFrontend.hooks.addAction('frontend/element_ready/clenfix-funfact.default',TxFunFact);
				elementorFrontend.hooks.addAction('frontend/element_ready/clenfix-funfact-2.default',TxFunFact2);
				elementorFrontend.hooks.addAction('frontend/element_ready/clenfix_home3_service.default',TxHome3Service);
				elementorFrontend.hooks.addAction('frontend/element_ready/clenfix-home3-project.default',TxHome3Project);
				elementorFrontend.hooks.addAction('frontend/element_ready/clenfix-testimonial3.default',TxHome3Testimonial);
				elementorFrontend.hooks.addAction('frontend/element_ready/home3-client.default',TxHome3Client);
				elementorFrontend.hooks.addAction('frontend/element_ready/clenfix-home3-counter.default',TxHome3Counter);
				
            }
            else { 
    
                elementorFrontend.hooks.addAction('frontend/element_ready/clenfix-team-slide.default',TxTeamSlide);
				elementorFrontend.hooks.addAction('frontend/element_ready/clenfix-testimonial.default',TxTestimonial);
				elementorFrontend.hooks.addAction('frontend/element_ready/clenfix_whychoose.default',TxSkillbar);
				elementorFrontend.hooks.addAction('frontend/element_ready/clenfix-client.default',TxClientSlider); 
				elementorFrontend.hooks.addAction('frontend/element_ready/clenfix-slider.default',TxMainSlider);
				elementorFrontend.hooks.addAction('frontend/element_ready/clenfix_service_2.default',TxServiceSlide2);
				elementorFrontend.hooks.addAction('frontend/element_ready/clenfix-portfolio-filter.default',TxFilterFolio);
				elementorFrontend.hooks.addAction('frontend/element_ready/clenfix-portfolio-detail.default',TxFlioDetail);

				elementorFrontend.hooks.addAction('frontend/element_ready/clenfix-project-slider.default',TxProjectSlide);
				elementorFrontend.hooks.addAction('frontend/element_ready/clenfix-funfact.default',TxFunFact);
				elementorFrontend.hooks.addAction('frontend/element_ready/clenfix-funfact-2.default',TxFunFact2);
				elementorFrontend.hooks.addAction('frontend/element_ready/clenfix_home3_service.default',TxHome3Service);
				elementorFrontend.hooks.addAction('frontend/element_ready/clenfix-home3-project.default',TxHome3Project);
				elementorFrontend.hooks.addAction('frontend/element_ready/clenfix-testimonial3.default',TxHome3Testimonial);
				elementorFrontend.hooks.addAction('frontend/element_ready/home3-client.default',TxHome3Client);
				elementorFrontend.hooks.addAction('frontend/element_ready/clenfix-home3-counter.default',TxHome3Counter);

            } 
        });
    
	$(window).scroll(function() {

		if ($(this).scrollTop() > 200) {
		$('.backtotop:hidden').stop(true, true).fadeIn();
		} else {
		$('.backtotop').stop(true, true).fadeOut();
		}
	});
	$(function() {
		$(".scroll").on('click', function() {
		$("html,body").animate({scrollTop: 0}, "slow");
		return false
		});
	});

		$(document).ready(function() {

			if ($("body").hasClass("checkerbody")) {

				$('.open_mobile_menu').on("click", function() {
					$('.mobile_menu_wrap').toggleClass("mobile_menu_on");
				});
				$('.open_mobile_menu').on('click', function () {
					$('body').toggleClass('mobile_menu_overlay_on');
				});
				if($('.mobile_menu li.dropdown ul').length){
					$('.mobile_menu li.dropdown').append('<div class="dropdown-btn"><span class="fas fa-caret-right"></span></div>');
					$('.mobile_menu li.dropdown .dropdown-btn').on('click', function() {
						$(this).prev('ul').slideToggle(500);
					});
				}
				$(".dropdown-btn").on("click", function () {
					$(this).toggleClass("toggle-open");
				});
			
			}

			$('.js-tilt').tilt({

			});

			$('[data-background]').each(function() {
				$(this).css('background-image', 'url('+ $(this).attr('data-background') + ')');
				
			});
			
			var $lat_anim = $('.pr-text-anim');
			var $display = $(window);
	
			function scroll_addclass() {
				var display_long = $(window).height() - 100;
				var display_aim = $display.scrollTop();
				var display_down = (display_aim + display_long);
	
				$.each($lat_anim, function () {
					var $item_s = $(this);
					var items_long = $item_s.outerHeight();
					var item_up = $item_s.offset().top;
					var item_down = (item_up + items_long);
	
					if ((item_down >= display_aim) &&
						(item_up <= display_down)) {
						$item_s.addClass('is_show');
				}
			});
			}
	
			$display.on('scroll resize', scroll_addclass);
			$display.trigger('scroll');
	
	
			var $c_slide_effect = $('.pr-text-in');
			var $display = $(window);
			function c_scroll_addclass() {
				var display_long = $(window).height() - 100;
				var display_aim = $display.scrollTop();
				var display_down = (display_aim + display_long);
	
				$.each($c_slide_effect, function () {
					var $item_s = $(this);
					var items_long = $item_s.outerHeight();
					var item_up = $item_s.offset().top;
					var item_down = (item_up + items_long);
	
					if ((item_down >= display_aim) &&
						(item_up <= display_down)) {
						$item_s.addClass('is_shown');
				}
			});
			}
	
			$display.on('scroll resize', c_scroll_addclass);
			$display.trigger('scroll');
			$(window).on("scroll", function() {
				if ($(this).scrollTop() > 200) {
					$('.scrollup').fadeIn();
				} else {
					$('.scrollup').fadeOut();
				}
			});	
			$('.scrollup').on("click", function()  {
				$("html, body").animate({
					scrollTop: 0
				}, 800);
				return false;
			});								
		});
     
		//if($('.wow').length){
			var wow = new WOW(
			{
				boxClass:     'wow',
				animateClass: 'animated',
				offset:       0,
				mobile:       true,
				live:         true
			}
			);
			wow.init();
		//}

		(function($) {
			$.fn.visible = function(partial) {
				var $t            = $(this),
				$w            = $(window),
				viewTop       = $w.scrollTop(),
				viewBottom    = viewTop + $w.height(),
				_top          = $t.offset().top,
				_bottom       = _top + $t.height(),
				compareTop    = partial === true ? _bottom : _top,
				compareBottom = partial === true ? _top : _bottom;
				return ((compareBottom <= viewBottom) && (compareTop >= viewTop));
			};
		})(jQuery);
		
		$(window).on('scroll', function() {

			$(".bg-shape, .bg-img-area").each(function(i, el) {
				var el = $(el);
				if (el.visible(true)) {
					el.addClass("view-on"); 
				} else {
					el.removeClass("view-on");
				}
			}); 
		});

		$(document).on('ready', function() {
			$(".banner-img1, .banner-img2").each(function(i, el) {
				var el = $(el);
				if (el.visible(true)) {
					el.addClass("view-on"); 
				} else {
					el.removeClass("view-on");
				}
			});
		});


    })(jQuery);
    
    
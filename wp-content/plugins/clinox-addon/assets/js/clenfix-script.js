(function ($) {
    "use strict";
    
        var TxTeamSlide = function ($scope, $) { 
    
            $scope.find('.clenix-team-slider-wrap').each(function () {
 
				$('.clenix-team-slider-wrap').slick({
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
            }
            else { 
    
                elementorFrontend.hooks.addAction('frontend/element_ready/clenfix-team-slide.default',TxTeamSlide);
            }
        });
    
        $('.back-top-btn, .scrollup').on("click", function()  {
            $("html, body").animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        
    })(jQuery);
    
    
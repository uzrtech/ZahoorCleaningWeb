<?php
	$minfo = '';

	foreach ($settings['itms'] as $a) {
	    $minfo.= '
			<div class="testimonial__item testimonial__item-two">
				<div class="testimonial__avatar">
					<img src="'.$a['img']['url'].'" alt="">
				</div>
				<div class="testimonial__content">'.$a['qt'].'</div>
				<div class="testimonial__info">
					<h3>'.$a['nm'].'</h3>
					<span>'.$a['pos'].'</span>
				</div>
			</div>	
		';
	}
 
?>

<div class="testimonial testimonial__bg pb-90" data-background="<?php echo plugins_url('testimonial_bg_img.jpg', __FILE__ );?>">
	<div class="container">
		<div class="testimonial__wrap pos-rel pt-90">
			<div class="testimonial__slide-wrap testimonial__slide-wrap--2">
				<div class="testimonial__slide-two" data-slides-space="30" data-effect="slide" data-slides-min-width="290" data-pagination="custom" data-direction="horizontal" data-mouse-wheel="0" data-autoplay="0" data-loop="1" data-free-mode="0" data-slides-centered="0" data-slides-overflow="0">
					<?php echo $minfo;?>
				</div>
			</div>
			<div class="testimonial__icon">
				<img src="<?php echo plugins_url('t_shape.png', __FILE__ );?>" alt="">
				<img src="<?php echo plugins_url('t_quote.png', __FILE__ );?>" alt="">
			</div>
		</div>
	</div>
</div>

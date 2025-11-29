<div class="cta">
	<div class="cta__wrap ul_li">
		<div class="cta__info ul_li flex-1">
			<div class="icon">
				<img src="<?php echo plugins_url( 'call.svg', __FILE__ ); ?>" alt="">
			</div>
			<span><?php echo $settings['title'];?></span>
			<h3><a href="tel:<?php echo $settings['sub'];?>"><?php echo $settings['sub'];?></a></h3>
		</div>
		<?php echo do_shortcode($settings['shortcode']);?>   
	</div>
</div>
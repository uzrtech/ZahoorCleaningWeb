<?php
$out = '';
foreach ($settings['items'] as $item){
  $out.= '
  	<a '.get_that_link($item['link']).'><i class="'.$item['icon']['value'].'"></i></a>
  '; 
}
?> 

	<section id="clenix-banner-3" class="clenix-banner-section-3 position-relative">
		<div class="clenix-banner-social ul-li position-absolute wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="1500ms">    
			<?php echo $out;?>
		</div>
		<span class="banner-shape1 position-absolute">
			<?php echo wp_get_attachment_image($settings['limg1']['id'], 'full');?>
		</span>
		<span class="banner-shape2 position-absolute wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
			<?php echo wp_get_attachment_image($settings['limg2']['id'], 'full');?>
		</span>
		<div class="line_animation">
			<div class="line_area"><img src="<?php echo plugin_dir_url( __FILE__ ) . 'img/b1.png'; ?>" alt=""></div>
			<div class="line_area"><img src="<?php echo plugin_dir_url( __FILE__ ) . 'img/b2.png'; ?>" alt=""></div>
			<div class="line_area"><img src="<?php echo plugin_dir_url( __FILE__ ) . 'img/b3.png'; ?>" alt=""></div>
			<div class="line_area"><img src="<?php echo plugin_dir_url( __FILE__ ) . 'img/b4.png'; ?>" alt=""></div>
			<div class="line_area"><img src="<?php echo plugin_dir_url( __FILE__ ) . 'img/b5.png'; ?>" alt=""></div>
			<div class="line_area"><img src="<?php echo plugin_dir_url( __FILE__ ) . 'img/b7.png'; ?>" alt=""></div>
			<div class="line_area"><img src="<?php echo plugin_dir_url( __FILE__ ) . 'img/b6.png'; ?>" alt=""></div>
		</div>
		<div class="clenix-banner-img-wrapper-3">
			<div class="inner-img wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
				<?php echo wp_get_attachment_image($settings['rimg1']['id'], 'full');?>
			</div>
			<span class="js-tilt circle-img1 position-absolute wow flipInX" data-wow-delay="500ms" data-wow-duration="1500ms" data-tilt data-tilt-max="8">
				<?php echo wp_get_attachment_image($settings['rimg2']['id'], 'full');?>
			</span>
			<span class="js-tilt circle-img2 position-absolute wow flipInX" data-wow-delay="800ms" data-wow-duration="1500ms" data-tilt data-tilt-max="8">
				<?php echo wp_get_attachment_image($settings['rimg3']['id'], 'full');?>
			</span>
		</div>
		<div class="container">
			<div class="clenix-banner-content-3">
				<div class="banner-text-3">
					<div class="banner-slug text-uppercase wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
						<?php echo $settings['sub'];?>
					</div>
					<h1 class="wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1000ms">
						<?php echo $settings['title'];?>
					</h1>
					<div class="clenix-btn-3 wow fadeInUp" data-wow-delay="700ms" data-wow-duration="1000ms">
						<a class="d-flex justify-content-center align-items-center" <?php echo get_that_link($settings['btn_link']) ;?>><span><?php echo $settings['btn-label'];?></span></a>
					</div>
				</div>
			</div>
		</div>
	</section>
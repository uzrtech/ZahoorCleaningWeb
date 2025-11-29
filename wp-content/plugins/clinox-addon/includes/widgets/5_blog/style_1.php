<?php
$loop = new \WP_Query($query_args);
?>

<div class="blog pt-90" data-background="<?php echo plugins_url('news_bg.jpg', __FILE__ );?>">
	<div class="container maxw_1320">
		<div class="row">
			<div class="col-lg-6">
				<div class="sec-title sec-title__two mb-45">
					<span class="subtitle"><?php echo $settings['pre'];?></span>
					<h2 class="title"><?php echo $settings['ttl'];?></h2>
				</div>
			</div>
		</div>
		<div class="blog__slide">

		<?php if ($loop->have_posts()){ 
			while ($loop->have_posts()) : $loop->the_post();
			
			$img_size = '';
			?>
			<div class="blog__item blog__item--2">
				<figure class="blog__thumb pos-rel">
					<a href="<?php the_permalink();?>">
					<?php the_post_thumbnail($img_size); ?>
					</a>
					<?php echo ae_single_category();?>
				</figure>
				<div class="blog__content">
					<ul class="blog__meta ul_li mb-20">
						<li class="date"><i class="far fa-calendar-alt"></i><?php echo get_the_date();?></li>
						<li><i class="far fa-comments"></i><?php echo get_comments_number();?></li>
					</ul>
					<h2 class="blog__title border_effect"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
					<div class="blog__btn mt-25">
						<a href="<?php the_permalink();?>">Read More<i class="flaticon-right-arrow"></i></a>
					</div>
				</div>
			</div>

			<?php endwhile; ?>
				<?php } 
				wp_reset_query();
				?>

		</div>
	</div>
	<div class="wm-marquee pt-15">
		<div class="text-marquee-track">
			<div class="text-marquee-content"><?php echo $settings['mrq'];?></div>
		</div>
	</div>
</div>	
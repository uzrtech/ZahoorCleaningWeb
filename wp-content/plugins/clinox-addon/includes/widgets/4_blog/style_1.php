<?php
$loop = new \WP_Query($query_args);
?>
 
<section class="blog pt-10 pb-110">
	<div class="container maxw_1320">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="sec-title mb-35 text-center wow fadeInUp" data-wow-delay="0s" data-wow-duration="1500ms">
					<span class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1500ms"><?php echo $settings['pre'];?></span>
					<h2 class="title wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1500ms"><?php echo $settings['ttl'];?></h2>
				</div>
			</div>
		</div>
		<div class="row mt-none-30 justify-content-md-center">
		<?php if ($loop->have_posts()){ 
		while ($loop->have_posts()) : $loop->the_post();?>

			<div class="col-lg-4 col-md-6">
				<div class="blog__item mt-30 wow fadeInUp" data-wow-delay="0s" data-wow-duration="1500ms">
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
							<a href="<?php the_permalink();?>"><?php echo esc_html__("Read More", "clinox"); ?><i class="flaticon-right-arrow"></i></a>
						</div>
					</div>
				</div>
			</div>

			<?php endwhile; ?>
	<?php } 
	wp_reset_query();
	?>

		</div>
	</div>
</section>
<?php
$loop = new \WP_Query($query_args);
?>

<section id="clenix-blog-3" class="clenix-blog-section-3">
	<div class="container">
		<div class="clenix-blog-top-content-3 d-flex justify-content-between align-items-center">
			<div class="clenix-section-title-3 headline pera-content wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
				<div class="subtitle text-uppercase">
					<?php echo $settings['pre'];?>
				</div>
				<h2><?php echo $settings['title'];?></h2>
			</div>
			<div class="clnix-project-title-text-3 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
				<?php echo $settings['desc'];?>
			</div>
		</div>
		<div class="clenix-blog-content-3">
			<div class="row justify-content-center">

				<?php if ($loop->have_posts()){ 
					while ($loop->have_posts()) : $loop->the_post();?>

					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
						<div class="clenix-blog-item-3 position-relative">
							<div class="inner-img">
								<?php the_post_thumbnail($img_size); ?>
							</div>
							<div class="inner-text headline">
								<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
								<div class="blog-meta">
									<a href="<a href="<?php the_permalink();?>"><i class="fal fa-calendar-check"></i> <?php echo get_the_date();?></a>
									<a href="#"><i class="far fa-user"></i> <?php echo get_the_author(); ?></a>
								</div>
								<div class="read-more-btn">
									<a class="d-flex justify-content-center align-items-center" href="<?php the_permalink();?>">Read More</a>
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
	</div>
</section>
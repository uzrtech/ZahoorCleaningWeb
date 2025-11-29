<?php
$loop = new \WP_Query($query_args);
?>

<section id="clenix-blog" class="clenix-blog-section">
	<div class="container">
		<div class="clenix-section-title-2 text-center headline pera-content pr-text-in">
			<h3 class="sub-title d-inline-block">
				<span class="pr-text-in_item1">
					<span class="pr-text-in_item2">
						<span class="pr-text-in_item3">
							<?php echo $settings['pre']; ?>
						</span>
					</span> 
				</span>
			</h3>
			<h2>
				<span class="pr-text-in_item1">
					<span class="pr-text-in_item2">
						<span class="pr-text-in_item3">
							<?php echo $settings['title']; ?>
						</span>
					</span>
				</span>
			</h2>
		</div>
		<div class="clenix-blog-content">
			<div class="row justify-content-center">
				<?php if ($loop->have_posts()){ 
					while ($loop->have_posts()) : $loop->the_post();?>

					<div class="col-lg-4 col-md-6">
						<div class="clenix-blog-inner-item-2">
							<div class="inner-img position-relative">
								<?php the_post_thumbnail($img_size); ?>
								<?php echo ae_single_category();?>
							</div>
							<div class="inner-text headline">
								<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
								<div class="inner-meta">
									<a href="#"><i class="fal fa-calendar-check"></i> <?php echo get_the_date();?></a>
									<a href="#"><i class="fal fa-user"></i> <?php echo get_the_author(); ?></a>
									
								</div>
								<div class="more-btn">
									<a class="d-flex justify-content-center align-items-center" href="<?php the_permalink();?>"><span>Read More</span></a>
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
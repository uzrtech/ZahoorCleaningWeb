<?php
$out = '';
foreach ($settings['items'] as $item){
  $out.= '
  	<li>'.$item['list'].'</li>
  '; 
}
?> 
<section id="clenix-about-3" class="clenix-about-section-3 position-relative">
	<span class="clenix-bg-shape position-absolute">
		<?php echo wp_get_attachment_image($settings['bgshape']['id'], 'full');?>
	</span>
	<div class="container">
		<div class="clenix-about-content-3">
			<div class="row">
				<div class="col-lg-6">
					<div class="clenix-about-img-3 position-relative">
						<span class="ab-shape2 position-absolute wow fadeInUp" data-wow-delay="700ms" data-wow-duration="1500ms">
							<?php echo wp_get_attachment_image($settings['img1']['id'], 'full');?>
						</span>
						<span class="ab-shape3 position-absolute">
							<?php echo wp_get_attachment_image($settings['img2']['id'], 'full');?>
						</span>
						<span class="ab-shape4 position-absolute">
							<?php echo wp_get_attachment_image($settings['img3']['id'], 'full');?>
						</span>
						<div class="inner-img-wrap position-relative wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
							<?php echo wp_get_attachment_image($settings['img4']['id'], 'full');?>
						</div>
						<div class="inner-bottom-img position-absolute wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
							<?php echo wp_get_attachment_image($settings['img5']['id'], 'full');?>
							<span class="ab-shape1 position-absolute wow fadeInRight" data-wow-delay="600ms" data-wow-duration="1500ms">
								<?php echo wp_get_attachment_image($settings['img6']['id'], 'full');?>
							</span>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="clenix-about-text-area-3">
						<div class="clenix-section-title-3 headline pera-content wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
							<div class="subtitle text-uppercase">
								<?php echo $settings['pre'];?>
							</div>
							<h2><?php echo $settings['title'];?></h2>
							<p><?php echo $settings['desc'];?></p>
						</div>
						<div class="clenix-about-text-wrap-3">
							<h3 class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms"><?php echo $settings['thumbtitle'];?></h3>
							<div class="clenix-about-feature-list-3 d-flex align-items-center wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
								<div class="inner-img">
									<?php echo wp_get_attachment_image($settings['thumbnail']['id'], 'full');?>
								</div>
								<div class="inner-text ul-li-block">
									<ul>
										<?php echo $out;?>
									</ul>
								</div>
							</div>
							<div class="clenix-about-cta-btn-grp wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
								<div class="about-cta-btn-wrapper d-flex align-items-center">
									<div class="clenix-btn-3">
										<a class="d-flex justify-content-center align-items-center" href="<?php echo $settings['btn-link']['url'];?>"><span><?php echo $settings['btn-label'];?></span></a>
									</div>
									<div class="about-cta d-flex align-items-center">
										<i class="fas fa-phone-alt"></i> 
										<div class="about-cta-text">
											<span><?php echo $settings['phone-label'];?></span>
											<a href="javascript:void(0)"><?php echo $settings['phone-num'];?></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>    
			</div>
		</div>
	</div>
</section>	

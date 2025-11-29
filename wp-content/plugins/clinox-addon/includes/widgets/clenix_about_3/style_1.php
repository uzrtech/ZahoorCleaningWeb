<?php
$out = '';
foreach ($settings['items'] as $item){
  $out.= '
  	<li>'.$item['list'].'</li>
  ';  
}
?> 
  
<section id="clenix-about" class="clenix-about-section">
	<div class="container">
		<div class="clenix-about-content-2">
			<div class="row">
				<div class="col-lg-6">
					<div class="clenix-about-img-wrapper position-relative">
						<div class="clenix-about-img1">
						   <?php echo wp_get_attachment_image($settings['img']['id'], 'full');?>
						</div>
						<div class="about-exp position-absolute headline d-flex align-items-center justify-content-center">
							<h3><?php echo $settings['num'];?></h3>
							<span><?php echo $settings['ltitle'];?></span>
						</div>
					</div>
				</div> 
				<div class="col-lg-6"> 
					<div class="clenix-about-text-wrap"> 
						<div class="clenix-section-title headline pera-content pr-text-in">
							<h3 class="sub-title d-inline-block">
								<span class="pr-text-in_item1">
									<span class="pr-text-in_item2">
										<span class="pr-text-in_item3">
											<?php echo $settings['pre'];?>
										</span>
									</span>
								</span>
							</h3>
							<h2>
								<span class="pr-text-in_item1">
									<span class="pr-text-in_item2">
										<span class="pr-text-in_item3">
											<?php echo $settings['title'];?>
										</span>
									</span>
								</span>
							</h2>
							<p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
								<?php echo $settings['desc'];?>
						    </p>
						</div>
						<div class="about-feature-item-wrap-2 ul-li-block">
							<ul>
								<?php echo $out;?>
							</ul>
						</div>
						<div class="about-signature-cta-wrap d-flex">
							<div class="about-signature-img-2 d-flex">
								<div class="inner-img">
									<?php echo wp_get_attachment_image($settings['thumbnail']['id'], 'full');?>
								</div>
								<div class="inner-text headline pera-content position-relative">
									<h4><?php echo $settings['thumbtitle'];?></h4>
									<p><?php echo $settings['thumbsub'];?></p>
									<span class="sign-img">
										<?php echo wp_get_attachment_image($settings['sign']['id'], 'full');?>
									</span>
								</div> 
							</div>
							<div class="about-cta-btn d-flex"> 
								<div class="banner-btn-wrapper d-flex">
									<div class="banener-cta d-flex">
										<i class="fal fa-phone-alt"></i>  
										<div class="banener-cta-text">
											<span><?php echo $settings['phone-label'];?></span> 
											<a href="tel:<?php echo $settings['phone-num'];?>"><?php echo $settings['phone-num'];?></a> 
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
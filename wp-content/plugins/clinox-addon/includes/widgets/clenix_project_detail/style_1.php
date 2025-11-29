<?php
	$img = $nav = $item = $list = '';
	foreach ($settings['imgs'] as $a) {
		$img.='
			<div class="slider-inner-img">
				'.wp_get_attachment_image($a['img']['id'], 'full').'
			</div>	
		';
	}

	foreach ($settings['imgs'] as $a) {
		$nav.='
			<div class="nav-inner-img">
				'.wp_get_attachment_image($a['img']['id']).'
			</div>	
		';
	}

	foreach ($settings['items'] as $a) {
		$item.='
			<li>'.$a['title'].'</li>	
		';
	}

	foreach ($settings['lists'] as $a) {
		$list.='
			<li>'.$a['txt'].'</li>	
		';
	}

?>

<section id="clenix-portfolio-details" class="clenix-portfolio-details-section page-section-padding">
	<div class="container">
		<div class="clenix-portfolio-details-content">
			<div class="row">
				<div class="col-lg-8">
					<div class="clenix-project-details-slider position-relative">
						<div class="project-slider-for">
							<?php echo $img;?>
						</div>
						<div class="project-slider-nav">
							<?php echo $nav;?>
						</div>    
						<div class="carousel_nav"> 
							<button type="button" class="pr-nav-left_arrow"><i class="fal fa-arrow-square-left"></i></button>
							<button type="button" class="pr-nav-right_arrow"><i class="fal fa-arrow-square-right"></i></button>  
						</div>  
					</div>  
				</div>  
				<div class="col-lg-4">  
					<div class="clenix-project-details-feature headline">  
						<h3><?php echo $settings['title'];?></h3> 
						<div class="feature-list ul-li-block">  
							<ul>
								<?php echo $item;?>
							</ul>
						</div>
						<div class="project-share d-flex justify-content-between">
							<span class="title">Share</span>
							
							<div class="share-social">
								<?php echo fashmag_social_post_share();?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="clenix-project-details-text-wrapper">
			<div class="project-details-text-content headline pera-content">
				<h3><?php echo $settings['dtitle'];?></h3>
				<p><?php echo $settings['ddesc'];?></p>
			</div>
			<div class="clenix-project-overview">
				<div class="row">
					<div class="col-lg-6">
						<div class="row">
							<div class="col-md-6">
								<div class="clenix-about-service-img-wrap position-relative">
									<span class="img-shape position-absolute"></span>
									<div class="clenix-about-service-img">
										<?php echo wp_get_attachment_image($settings['img']['id'], 'full');?>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="clenix-about-service-img-wrap position-relative">
									<span class="img-shape position-absolute"></span>
									<div class="clenix-about-service-img">
										<?php echo wp_get_attachment_image($settings['img2']['id'], 'full');?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="clenix-service-feature-items headline pera-content ul-li-block position-relative">
							<div class="clenix-service-feature-text position-relative">
								<h3><?php echo $settings['stitle'];?></h3>
								<p><?php echo $settings['sdesc'];?></p>
								<ul>
									<?php echo $list;?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

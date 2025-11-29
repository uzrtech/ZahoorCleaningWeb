<?php
	$minfo = $nav = '';

	$id = 'h' . substr( $this->get_id_int(), 0, 3 );
	$first = 0; foreach ($settings['itms'] as $a) {

	    $first++;
	    if ($first == 1) {
	        $btnclass = 'active';
	        $contentclass = 'show active';
			$expan = 'true';
	    } else {
	        $btnclass = '';
	        $contentclass = '';
			$expan = 'false';
	    }

	    $nav .= '
			<li class="nav-item" role="presentation">
				<button class="nav-link '.$btnclass.'" id="'.$id.$first.'-tab" data-bs-toggle="tab" data-bs-target="#'.$id.$first.'" type="button" >'.$a['lbl'].'</button>
			</li>
		';

		$minfo .='
			<div class="tab-pane fade '.$contentclass.'" id="'.$id.$first.'">
				<div class="row mt-none-30">
					<div class="col-lg-6 col-md-6 mt-30">
						<div class="tab-service__item active d-flex">
							<div class="tab-service__icon">
								<i class="'.$a['icn']['value'].'"></i>
							</div>
							<div class="tab-service__content">
								<h3>'.$a['ttl'].'</h3>
								<p>'.$a['desc'].'</p>
								<a href="'.$a['url']['url'].'">Read More<i class="fa fa-arrow-right"></i></a>
							</div>
							<div class="tab-service__shape">
								<img src="'.plugins_url( 'ts_shape.png', __FILE__ ).'" alt="">
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 mt-30">
						<div class="tab-service__item d-flex">
							<div class="tab-service__icon">
								<i class="'.$a['icn2']['value'].'"></i>
							</div>
							<div class="tab-service__content">
								<h3>'.$a['ttl2'].'</h3>
								<p>'.$a['desc2'].'</p>
								<a href="'.$a['url2']['url'].'">Read More<i class="fa fa-arrow-right"></i></a>
							</div>
							<div class="tab-service__shape">
								<img src="'.plugins_url( 'ts_shape.png', __FILE__ ).'" alt="">
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 mt-30">
						<div class="tab-service__item d-flex">
							<div class="tab-service__icon">
								<i class="'.$a['icn3']['value'].'"></i>
							</div>
							<div class="tab-service__content">
								<h3>'.$a['ttl3'].'</h3>
								<p>'.$a['desc3'].'</p>
								<a href="'.$a['url3']['url'].'">Read More<i class="fa fa-arrow-right"></i></a>
							</div>
							<div class="tab-service__shape">
								<img src="'.plugins_url( 'ts_shape.png', __FILE__ ).'" alt="">
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 mt-30">
						<div class="tab-service__item d-flex">
							<div class="tab-service__icon">
								<i class="'.$a['icn4']['value'].'"></i>
							</div>
							<div class="tab-service__content">
								<h3>'.$a['ttl4'].'</h3>
								<p>'.$a['desc4'].'</p>
								<a href="'.$a['url4']['url'].'">Read More<i class="fa fa-arrow-right"></i></a>
							</div>
							<div class="tab-service__shape">
								<img src="'.plugins_url( 'ts_shape.png', __FILE__ ).'" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>	
		';
	}

?>

<div class="tab-service pt-120 pb-120" data-background="<?php echo plugins_url('tab-service-bg.jpg', __FILE__ );?>">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="sec-title sec-title__two text-center mb-50">
					<span class="subtitle wow fadeInUp" data-wow-delay="0s" data-wow-duration="1500ms"><?php echo $settings['pre'];?></span>
					<h2 class="title wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1500ms">
						<?php echo $settings['ttl'];?>
					</h2>
				</div>
			</div>
		</div>
		<div class="tab-service__wrap pos-rel">
			<ul class="tab-service__nav nav nav-tabs mb-100" id="myTab" role="tablist">
				<?php echo $nav;?>
			</ul>
			<div class="tab-content" id="myTabContent">
				<?php echo $minfo;?>
			</div>
		</div>
	</div>
</div>

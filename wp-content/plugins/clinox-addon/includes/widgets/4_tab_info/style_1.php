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
				<button class="nav-link '.$btnclass.'" id="'.$id.$first.'-tab" data-bs-toggle="tab" data-bs-target="#'.$id.$first.'" type="button" >'.$a['mt'].'</button>
			</li>
		';
 
		$minfo .='
			<div class="tab-pane fade '.$contentclass.'" id="'.$id.$first.'">
				<div class="sec-title sec-title__white mb-55">
					<span class="subtitle">'.$a['pre'].'</span>
					<h2 class="title mb-20">
					 '.$a['tt'].'
					</h2>
					<p>'.$a['des'].'</p>
				</div>
				<div class="tab-info__wrap">
					<div class="tab-info__item d-flex">
						<div class="icon">
							<i class="flaticon-house"></i>
							<img src="'.plugins_url( 'a_shape.svg', __FILE__ ).'" alt="">
						</div>
						<div class="content">
							<h3>'.$a['t1'].'</h3>
							<p>'.$a['d1'].'</p>
						</div>
					</div>
					<div class="tab-info__item d-flex">
						<div class="icon">
							<i class="flaticon-house"></i>
							<img src="'.plugins_url( 'a_shape.svg', __FILE__ ).'" alt="">
						</div>
						<div class="content">
							<h3>'.$a['t2'].'</h3>
							<p>'.$a['d2'].'</p>
						</div>
					</div>
				</div>
			</div>		
		';
	}

?>

<div class="tab-info pt-110 pb-110" data-background="<?php echo plugins_url( 'tab-info-bg.png', __FILE__ );?>">
	<div class="container p-0">
		<div class="row g-0">
			<div class="col-lg-6">
				<div class="tab-info__wrapper">
					<ul class="tab-info__nav nav nav-tabs" id="myTab" role="tablist">
						<?php echo $nav;?>
					</ul>
					<div class="tab-content" id="myTabContent">
						<?php echo $minfo;?>
					</div>
				</div>
			</div>
			<div class="col-lg-6">

			</div>
		</div>
	</div>
	<div class="tab-info__bg" data-background="<?php echo $settings['bg']['url'];?>">
		<a href="<?php echo $settings['url'];?>" class="popup-video"><i class="fas fa-play"></i></a>
	</div>
	<div class="tab-info__shape"><img src="<?php echo plugins_url( 'tab-info-shape.png', __FILE__ );?>" alt=""></div>
</div>

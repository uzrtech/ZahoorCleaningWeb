<?php
	$minfo = '';

	foreach ($settings['itms'] as $a) {
	    $minfo.= '
			<div class="counter__item">
				<h3>'.$a['ttl'].'</h3>
				<p>'.$a['des'].'</p>
				<img src="'.plugins_url( 'world.png', __FILE__ ).'" alt="">
			</div>	
		';
	}

?>

<div class="couter counter__bg">
	<div class="container">
		<div class="counter__wrapper">
			<div class="row align-items-center">
				<div class="col-lg-5">
					<div class="counter__video pos-rel ul_li">
						<a href="<?php echo $settings['vurl'];?>" class="popup-video popup-video__md"><i class="fas fa-play"></i></a>
						<h3><?php echo $settings['ttl'];?></h3>
					</div>
					<div class="counter__item">
						<div class="counter__number">

						</div>
					</div>
				</div> 
				
				<div class="col-lg-7">
					<div class="counter__wrap ul_li_between">
						<?php echo $minfo;?>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<?php
	$minfo = '';

	$first = 0;foreach ($settings['itms'] as $a) {
	    $first++;
	    if ($first == 1) {
	        $btnclass = 'active-block';
	        $btn = 'current';

	    } else {
	        $btnclass = '';
	        $btn = '';
	    }		
	    $minfo.= '
			<li class="accordion block '.$btnclass.'">
				<div class="acc-btn">
					'.$a['ttl'].'
				</div>
				<div class="acc_body '.$btn.'">
					<div class="content">
						'.$a['qt'].'
					</div>
				</div>
			</li>
		';
	}
 
?>

<div class="faq pt-120 pb-110">
	<div class="container">
		<div class="row align-items-center mt-none-30">
			<div class="col-lg-5 mt-30">
				<div class="faa__img pl-50 pos-rel mr-40">
					<img class="wow fadeInLeft" data-wow-delay="0s" data-wow-duration="1500ms" src="<?php echo $settings['thmb']['url'];?>" alt="">
					<div class="faq__shape">
						<img src="<?php echo plugins_url('faq_shape.png', __FILE__ );?>" alt="">
						<img class="wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="1500ms" src="<?php echo plugins_url('f_shape2.png', __FILE__ );?>" alt="">
						<img class="wow fadeInRight" data-wow-delay=".5s" data-wow-duration="1500ms" src="<?php echo plugins_url('f_shape3.png', __FILE__ );?>" alt="">
					</div>
				</div>
			</div>
			<div class="col-lg-7 mt-30">
				<div class="faq__wrap">
					<div class="sec-title sec-title__two mb-50">
						<span class="subtitle wow fadeInUp" data-wow-delay="0s" data-wow-duration="1500ms"><?php echo $settings['pre'];?></span>
						<h2 class="title wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1500ms"><?php echo $settings['ttl'];?></h2>
					</div>
					<ul class="accordion_box clearfix wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1500ms">
						<?php echo $minfo;?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>


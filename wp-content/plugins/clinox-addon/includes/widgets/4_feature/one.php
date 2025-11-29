<?php
	$minfo = '';
	$i = 0;
	foreach ($settings['iconbox'] as $a) {
		$i++;  
		$delay = $i*200;		
	    $minfo.= '

			<div class="col-lg-4 col-md-6 feature__col mt-50">
				<div class="feature__item wow fadeInUp" data-wow-delay="'.$delay.'ms" data-wow-duration="1500ms">
					<div class="icon">
						<i class="'.$a['icon']['value'].'"></i>
					</div>
					<h3 class="feature__title"><a '.get_that_link($a['url']).'>'.$a['lbl'].'</a></h3>
					<p>'.$a['desc'].'</p>
					<div class="feature__link">
						<a '.get_that_link($a['url']).'>'.$settings['btn'].'</a>
					</div>
					<span class="feature__number">'.$a['count'].'</span>
				</div>
			</div>
		';
	}

?>

<div class="feature pt-120 pb-120">
	<div class="container">
		<div class="row feature__row">
			<?php echo $minfo;?>
		</div>
	</div>
</div>
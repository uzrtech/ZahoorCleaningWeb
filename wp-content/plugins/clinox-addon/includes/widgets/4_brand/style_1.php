<?php
	$minfo = '';

	foreach ($settings['itms'] as $a) {
	    $minfo.= '
			<div class="brand__item">
				<a '.get_that_link($a['url']).'>'.wp_get_attachment_image($a['img']['id'], 'full').'</a>
			</div>	
		';
	}

?>

<div class="brand pt-50 pb-50">
	<div class="container">
		<div class="brand__slide">
			<?php echo $minfo;?>
		</div>
	</div>
</div>

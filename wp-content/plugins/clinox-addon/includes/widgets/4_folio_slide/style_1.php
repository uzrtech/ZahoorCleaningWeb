<?php
	$minfo = '';

	foreach ($settings['itms'] as $a) {
	    $minfo.= '

			<div class="project__item">
				<div class="project__img">
					'.wp_get_attachment_image($a['img']['id'], 'full').'
				</div>
				<div class="project__info">
					<h3><a '.get_that_link($a['url']).'>'.$a['ttl'].'</a></h3>
					<span>'.$a['sub'].'</span>
					<a class="project__action" '.get_that_link($a['url']).'><i class="flaticon-right-arrow"></i></a>
				</div>
				<span class="project__number">'.$a['num'].'</span>
			</div>
		';
	}

?>

<div class="project">
	<div class="project__slider">
		<?php echo $minfo;?>
	</div>
</div>

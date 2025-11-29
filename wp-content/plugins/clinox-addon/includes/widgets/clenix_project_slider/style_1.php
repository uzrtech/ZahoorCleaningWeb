<?php
	$html = '';
	foreach ($settings['items'] as $a) {

	    $html .= '
			<div class="clenix-project-item position-relative">
				<div class="read-more position-absolute"><a class="d-flex justify-content-center align-items-center" '.get_that_link($a['link']).'><i class="fal fa-arrow-right"></i></a></div>
				<div class="inner-img">
					'.wp_get_attachment_image($a['img']['id'], 'full').'
				</div>
				<div class="inner-text position-absolute headline">
					<span class="pro-cate"><a '.get_that_link($a['link']).'>'.$a['sub'].'</a></span>
					<h3><a '.get_that_link($a['link']).'>'.$a['title'].'</a></h3>
				</div>
			</div>
		';
	}
?>

<section id="clenix-project" class="clenix-project-section">
	<div class="container">
		<div class="clenix-project-top-content d-flex justify-content-between align-items-center">
			<div class="clenix-section-title-2 headline pera-content pr-text-in">
				<h3 class="sub-title d-inline-block">
					<span class="pr-text-in_item1">
						<span class="pr-text-in_item2">
							<span class="pr-text-in_item3">
								<?php echo $settings['pre']; ?>
							</span>
						</span>
					</span>
				</h3>
				<h2>
					<span class="pr-text-in_item1">
						<span class="pr-text-in_item2">
							<span class="pr-text-in_item3">
								<?php echo $settings['title']; ?>
							</span>
						</span>
					</span>
				</h2>
			</div>
			<div class="clenix-btn-2">
				<a class="d-flex align-items-center justify-content-center" <?php echo get_that_link($settings['btnurl']);?> ><span><?php echo $settings['btn']; ?></span></a>
			</div>
		</div>
	</div>
	<div class="clenix-project-content">
		<div class="clenix-project-slider">
			<?php echo $html;?>
		</div>
	</div>
</section>	
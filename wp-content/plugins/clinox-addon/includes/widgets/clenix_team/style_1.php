<?php
$i = 0;
$out = '';
foreach ($settings['items'] as $item){
  $i++;  
  $delay = $i*200;
  $out.= '
	<div class="slider-inner-item">
		<div class="clenix-team-inner-item position-relative">
			<div class="inner-img">
				'.wp_get_attachment_image($item['img']['id'], 'full').'
			</div>
			<div class="inner-text-social position-absolute headline text-center">
				<h3><a '.get_that_link($item['link']).'>'.$item['name'].'</a></h3>
				<span>Senior Cleaner</span>
				<div class="inner-social">
					<a href="'.$item['fb'].'"><i class="fab fa-facebook-f"></i></a>
					<a href="'.$item['tw'].'"><i class="fab fa-twitter"></i></a>
					<a href="'.$item['be'].'"><i class="fab fa-behance"></i></a>
				</div>
			</div>
		</div>
	</div>
  ';  
}

?> 

<section id="clenix-team" class="clenix-team-section">
		<div class="container">
			<div class="clenix-section-title headline text-center pera-content pr-text-in">
				<h3 class="sub-title d-inline-block">
					<span class="pr-text-in_item1">
						<span class="pr-text-in_item2">
							<span class="pr-text-in_item3">
								<?php echo $settings['sub'];?>
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
			</div>
			<div class="clenix-team-content position-relative">
				<div class="clenix-team-slider-wrap">
					<?php echo $out;?>
				</div>
				<div class="carousel_nav">
					<button type="button" class="team_left_arrow"><i class="fal fa-long-arrow-left"></i></button>
					<button type="button" class="team_right_arrow"><i class="fal fa-long-arrow-right"></i></button>
				</div>
			</div>
		</div>
</section>	


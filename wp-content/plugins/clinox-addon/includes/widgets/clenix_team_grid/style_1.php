<?php
$out = '';
$i = 0;
foreach ($settings['items'] as $item){
  $i++;  
  $delay = $i*200;
  $out.= '
	<div class="col-lg-4 col-md-6">
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
 
 <section id="clenix-team-member-feed" class="clenix-team-member-feed-section page-section-padding">
		<div class="container">
			<div class="clenix-team-member-feed-content">
				<div class="row">
				<?php echo $out;?>
			</div>
		</div>
</section>
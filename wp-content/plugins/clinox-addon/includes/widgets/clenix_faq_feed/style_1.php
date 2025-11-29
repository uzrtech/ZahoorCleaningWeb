<?php
$out = '';
foreach ($settings['litems'] as $item){
  $out.= '
  <div class="col-lg-6">
	<div class="faq-feed-item headline pera-content">
		<h3>'.$item['title'].'</h3>
		<p>'.$item['desc'].'</p>
	</div>
  </div>
  '; 
}
?> 

<section id="clenix-faq-feed" class="clenix-faq-feed-section">
	<div class="container">
		<div class="clenix-section-title text-center headline pera-content">
			<span class="sub-title"><?php echo $settings['sub'];?></span>
			<h2><?php echo $settings['title'];?></h2>
		</div>
		<div class="clenix-faq-feed-content">
			<div class="row">
				<?php echo $out;?>
			</div>
		</div>
	</div>
</section>
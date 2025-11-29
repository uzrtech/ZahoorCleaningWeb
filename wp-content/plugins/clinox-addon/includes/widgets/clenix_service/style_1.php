<?php
$i = 0;
$out = '';
foreach ($settings['items'] as $item){
  $i++;  
  $delay = $i*200;
  $out.= '
    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="'.$delay.'ms" data-wow-duration="1500ms">
      <div class="clenix-service-inner-item d-flex align-items-center flex-wrap">
        <div class="inner-img">
        '.wp_get_attachment_image($item['img']['id'], 'full').'
        </div>
        <div class="inner-icon-text">
          <div class="inner-icon">
          '.wp_get_attachment_image($item['icon']['id'], 'full').'
          </div>
          <div class="inner-text headline pera-content">
            <h3><a '.get_that_link($item['link']).'>'.$item['title'].'</a></h3>
            <p>'.$item['desc'].'</p>
            <a class="read-more position-relative" '.get_that_link($item['link']).'> '.$settings['btn-label'].'</a>
          </div>
        </div>
      </div>
    </div>
  '; 
}
?> 

<section id="clenix-service" class="clenix-service-section"> 
		<div class="container">
			<div class="clenix-section-title text-center headline pera-content pr-text-in">
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
			<div class="clenix-service-content">
				<div class="row">
            <?php echo $out;?>
				</div>
			</div>
		</div>
</section>	
 
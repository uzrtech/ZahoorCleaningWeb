<?php
$i = 0;
$out = '';
foreach ($settings['items'] as $item){
  $i++;  
  $delay = $i*200;
  $out.= '
  <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="'.$delay.'ms" data-wow-duration="1500ms">
    <div class="clenix-feature-inner-item text-center position-relative">
        <div class="inner-icon d-flex justify-content-center align-items-center">
            <span class="line-shape position-absolute"></span>
            '.wp_get_attachment_image($item['img']['id'], 'full').'
        </div>
        <div class="inner-text headline pera-content">
            <h3>'.$item['title'].'</h3>
            <p>'.$item['desc'].'</p>
        </div>
    </div>
  </div>
  '; 
}
?> 

<section id="clenix-feature" class="clenix-feature-section">
		<div class="container">
			<div class="clenix-feature-content">
				<div class="row justify-content-center">
                    <?php echo $out;?>
				</div>
			</div>
		</div>
</section>
 
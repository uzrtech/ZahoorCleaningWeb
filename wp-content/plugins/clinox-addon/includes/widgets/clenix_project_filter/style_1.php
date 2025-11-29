<?php
	$out = $nav = '';
	$cat = [];
	foreach ($settings['lists'] as $a) {
	    $cat[] = $a['title'];
	}
	update_option('clenfix_portfolio_cat', $cat);

	foreach ($settings['itms'] as $a) {
		$array = preg_filter('/^/', 'd', $a['cat']);
		$string = implode(' ', $array);
		$out.='
			<div class="col-lg-4 col-sm-6 portfolio-item '.$string.'">
				<div class="clenix-project-item position-relative">
					<div class="read-more position-absolute"><a class="d-flex justify-content-center align-items-center" '.get_that_link($a['url']).'><i class="fal fa-arrow-right"></i></a></div>
					<div class="inner-img">
						'.wp_get_attachment_image($a['img']['id'], 'full').'
					</div>
					<div class="inner-text position-absolute headline">
						
						<h3><a '.get_that_link($a['url']).'>'.$a['title'].'</a></h3>
					</div>
				</div> 
			</div>		
		';
	}

	foreach ($settings['lists'] as $a => $val) {
	    $nav.= '<li class="filtr-button" data-filter=".d'.$a.'">'.$val['title'].'</li>';
		$navall[]= $a;
	}
	$navarray = preg_filter('/^/', '.d', $navall);
	$navstring = implode(', ', $navarray);
	
?>


<section id="clenix-project-feed" class="clenix-project-feed-section page-section-padding">
		<div class="container">
			<div class="project-feed-filter-btn ul-li">
				<ul id="portfolio-flters" class="nav-gallery  text-center">
					<li data-filter="<?php echo $navstring;?>" class="filtr-button filtr-active">All</li>
					<?php echo $nav;?>
				</ul>
			</div>
			<div class="project-feed-wrap filtr-container row">
				<?php echo $out;?>
			</div>
		</div>
</section>	


 
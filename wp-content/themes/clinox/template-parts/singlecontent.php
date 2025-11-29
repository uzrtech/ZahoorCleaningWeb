<div class="clenix-blog-details-wrap">
    <div class="clenix-blog-details-area  headline pera-content ul-li-block">
        <?php if ( has_post_thumbnail()) : ?>
            <div class="inner-img">
                <?php the_post_thumbnail('full'); ?>                   
            </div>
        <?php endif; ?>
        <div class="inner-text headline pera-content">
            <div class="inner-meta-category d-flex align-items-center">
                <?php clinox_category();?>
                <div class="inner-meta">
                    <a href="javascript:void(0)"><i class="fal fa-calendar-check"></i> <?php echo get_the_date();?></a>
                    <a href="<?php echo get_author_posts_url( get_the_author_meta('ID') ); ?>"><i class="fal fa-user"></i> <?php echo get_the_author(); ?></a>
                </div>
            </div>
            <?php the_content();?>
        </div>     
    </div>
    <?php clinox_share_tags();?> 
    <?php clinox_navigation();?>
    <?php clinox_authorbox();?>
    <?php
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
	  ?>      

</div>
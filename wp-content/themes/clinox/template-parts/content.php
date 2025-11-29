<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */                                                                

?>  

<div id="post-<?php the_ID(); ?>" <?php post_class('clenix-blog-feed-item'); ?>>

    <?php if ( has_post_thumbnail()) : ?>
        <div class="inner-img">
            <?php the_post_thumbnail('full'); ?>                   
        </div>
    <?php endif; ?>

    <div class="inner-text headline pera-content">
        <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
        <div class="inner-meta-category d-flex align-items-center">
            <?php clinox_category();?>
            <div class="inner-meta">
                <a href="javascript:void(0)"><i class="fal fa-calendar-check"></i> <?php echo get_the_date();?></a>
                <a href="<?php echo get_author_posts_url( get_the_author_meta('ID') ); ?>"><i class="fal fa-user"></i> <?php echo get_the_author(); ?></a>
            </div> 
        </div>
        <?php echo clinox_excerpt( get_the_ID() );?>

        <div class="read-more">
            <a class="d-flex justify-content-center align-items-center" href="<?php the_permalink();?>"><span><?php echo esc_html('Read More','clinox');?></span></a>
        </div>
    </div>
</div>





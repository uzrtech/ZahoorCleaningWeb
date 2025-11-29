

<section id="clenix-breadcrumb" data-background="<?php echo $settings['bg']['url'];?>" class="clenix-breadcrumb-section position-relative top-position">
    <div class="container">
        <div class="breadcrumb-content headline ul-li position-relative">

            <?php if(!empty($settings['title'])):?>
                <h2><?php echo wp_kses( $settings['title'], true ); ?></h2>
            <?php else:?>
                <h2><?php the_title(); ?></h2>
            <?php endif;?> 

            <?php echo clinox_the_breadcrumb();?>
            
        </div>
    </div>
</section>
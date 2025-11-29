<?php

if( class_exists( 'CSF' ) ) {

  CSF::createWidget( 'tx_recent_post', array(
    'title'       => 'Tx Post',
    'classname'   => 'tx-post',
    'fields'      => array(
      array(
        'id'      => 'title',
        'type'    => 'text',
        'title'   => 'Title',
      ),
      array(
        'id'    => 'posts',
        'type'  => 'slider',
        'default' => 5,
        'title' => 'Number of post',
      ),      
    )
  ) );

  if( ! function_exists( 'tx_recent_post' ) ) {
    
    function tx_recent_post( $args, $instance ) {

      $title = $instance['title'] ? '<h3 class="widget-title">'.$instance['title'].'</h3>' : '';
      $query_args = [
        'post_type' => 'post',
        'posts_per_page' => $instance['posts']
      ];
      $loop = new \WP_Query($query_args);

      echo $args['before_widget'];
      echo '
          <div class="recent-post-widget">
            '.$title.'
            <div class="recent-post-wrap">';?>

              <?php if ($loop->have_posts()) : ?>
                <?php while ($loop->have_posts()) : $loop->the_post(); ?>

                  <div class="recent-blog-img-text d-flex  align-items-center">
                    <div class="recent-blog-img">
                      <?php the_post_thumbnail('thumbnail'); ?>
                    </div>
                    <div class="recent-blog-text headline">
                      <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                      <span><i class="far fa-calendar-alt"></i> <?php echo get_the_date();?></span>
                    </div>
                  </div>

                <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>

              <?php endif; ?>

            <?php echo '</div>
          </div>  
      ';
      echo $args['after_widget'];

    }
  }

}

?>
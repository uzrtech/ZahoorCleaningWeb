<?php
// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

  //
  // Create a widget 1
  //
  CSF::createWidget( 'tx_subscribe', array(
    'title'       => 'Tx Subscribe',
    'classname'   => 'tx-subscribe',
    'fields'      => array(
      array(
        'id'      => 'title',
        'type'    => 'text',
        'title'   => 'Title',
      ),
      array(
        'id'      => 'shortcode',
        'type'    => 'text',
        'title'   => 'Newsletter shortcode',
      ),
    )
  ) );

  //
  // Front-end display of widget example 1
  // Attention: This function named considering above widget base id.
  //
  if( ! function_exists( 'tx_subscribe' ) ) {
    function tx_subscribe( $args, $instance ) {

      $title = $instance['title'] ? '<h3 class="widget-title">'.$instance['title'].'</h3>' : '';
      echo $args['before_widget'];
      echo '
        <div class="newslatter-widget">
          '.$title.'
          '.do_shortcode($instance['shortcode']).'
        </div>
      ';
      echo $args['after_widget'];

    }
  }

}

?>
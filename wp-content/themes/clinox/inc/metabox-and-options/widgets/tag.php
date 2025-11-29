<?php
// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

  //
  // Create a widget 1
  //
  CSF::createWidget( 'tx_tags', array(
    'title'       => 'Tx Tag',
    'classname'   => 'tx-tag',
    'fields'      => array(
      array(
        'id'      => 'title',
        'type'    => 'text',
        'title'   => 'Title',
      ),

    )
  ) );

  if( ! function_exists( 'tx_tags' ) ) {

    function tx_tags( $args, $instance ) {

      $title = $instance['title'] ? '<h3 class="widget-title">'.$instance['title'].'</h3>' : '';
      echo $args['before_widget'];
      $output = '';
      $categories = get_terms('post_tag');
      if($categories){
        foreach($categories as $category) {
            $output.= '<li><a href="'.get_term_link( $category->term_id ).'">'.$category->name.'</a></li>';
        }
      }

      echo '
          <div class="popular-tag-widget">
            '.$title.'
            <ul>
              '.$output.'
            </ul>
          </div> 
      ';
      echo $args['after_widget'];

    }
  }

}
                                        
?>
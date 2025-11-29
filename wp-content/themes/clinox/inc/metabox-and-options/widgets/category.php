<?php 

if( class_exists( 'CSF' ) ) {

  CSF::createWidget( 'tx_category', array(
    'title'       => 'Tx Category',
    'classname'   => 'tx-category',
    'fields'      => array(

      array(
        'id'      => 'title',
        'type'    => 'text',
        'title'   => 'Title',
      ),

    )
  ) );

  if( ! function_exists( 'tx_category' ) ) {
    function tx_category( $args, $instance ) {
      $output = '';
      $categories = get_terms('category');
      if($categories){
        foreach($categories as $category) {
            $output.= '<li><a href="'.get_term_link( $category->term_id ).'">'.$category->name.'</a></li>';
        }
      }
      $title = $instance['title'] ? '<h3 class="widget-title">'.$instance['title'].'</h3>' : '';
      echo $args['before_widget'];
      echo '
          <div class="category-widget">
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
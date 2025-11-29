<?php
// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

  CSF::createWidget( 'tx_search', array(
    'title'       => 'Tx Search',
    'classname'   => 'tx-search',
    'fields'      => array(

      array(
        'id'      => 'title',
        'type'    => 'text',
        'title'   => 'Title',
      ),

    )
  ) );

  if( ! function_exists( 'tx_search' ) ) {
    function tx_search( $args, $instance ) {

      echo $args['before_widget'];
      echo '
        <div class="search-widget">
            <h3 class="widget-title">Search News</h3>
            <form action="'.home_url('/').'" method="get"> 
                <input type="text" value="'.get_search_query().'" name="s" id="s" placeholder="Type Keywords">
                <button type="submit"><i class="fal fa-search"></i></button>
            </form>
        </div>      
      ';
      echo $args['after_widget'];

    }
  }

}

?>
<?php


function clinox_excerpt($id = ''){

	$my_excerpt = has_excerpt($id);
	if ( $my_excerpt ){
		return '<p>'.get_the_excerpt($id).'</p>';
	} else {
		return '<p>'.get_the_excerpt($id).'</p>';
	}
}

function clinox_comment_nav() {

	if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
	?>
	<nav class="navigation comment-navigation" role="navigation">
		<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'clinox' ); ?></h2>
		<div class="nav-links"> 
			<?php 
				if ( $prev_link = get_previous_comments_link( esc_attr_( 'Older Comments', 'clinox' ) ) ) :
					printf( '<div class="nav-previous">%s</div>', $prev_link );
				endif;

				if ( $next_link = get_next_comments_link( esc_attr_( 'Newer Comments', 'clinox' )) ) :
					printf( '<div class="nav-next">%s</div>', $next_link );
				endif;
			?>
		</div>
	</nav>
	<?php
	endif;
}
remove_action( 'set_comment_cookies', 'wp_set_comment_cookies' );

function clinox_comment_callback($comment, $args, $depth) {

    if ( 'div' === $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    }
    ?>

    <<?php echo esc_attr($tag);?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
    <?php if ( 'div' != $args['style'] ) : ?>
        <div id="div-comment-<?php comment_ID() ?>" class="comment_element d-flex position-relative">
    <?php endif; ?>
  
        <div class="comment_img"><?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, 64 ); ?></div>
        <div class="comment_content pera-content">
 		<div class="author-meta">
	        <?php printf( __( '<div class="name"><h4>%s</h4></div>','clinox' ), get_comment_author_link() ); ?>
	        <div class="date"><span><?php printf( __('%1$s','clinox'),get_comment_date()); ?></span></div>
		</div>
		    <?php if ( $comment->comment_approved == '0' ) : ?>
		         <em class="comment-awaiting-moderation"><?php esc_attr_e( 'Your comment is awaiting moderation.','clinox' ); ?></em>
		    <?php endif; ?>    
	    	
	    	<?php comment_text(); ?>	        
		    <div class="reply-btn position-absolute"><?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) );?></div> 
	   
	</div>
       
    <?php if ( 'div' != $args['style'] ) : ?>
    </div>
    <?php endif; ?>
    <?php
    }


function clinox_logo(){

		echo '<h1 class="theme-logo"><a class="site-logo" href='.esc_url( home_url( '/' ) ).' rel="home">'.get_bloginfo( 'name' ).'</a></h1>';
}

function clinox_post_tag() {
	
	if ( 'post' == get_post_type() ) {
		
    $posttags = get_the_tags();
    $separator = ' ';
    $output = '';
    if ($posttags) {

        foreach($posttags as $tag) {
            $output .='<span><a href="' . get_tag_link($tag->term_id) . '">#'. $tag->name . '</a></span>'.$separator; 
        }

		$tags= trim($output, $separator);
		echo '<div class="clenix-blog-share-tag d-flex justify-content-between ul-li align-items-center"><span class="blog-hash-tag">'.$tags.'</span></div>';
    }
	}
}


/**
 * Check if a post is a custom post type.
 *
 * @param mixed $post Post object or ID
 *
 * @return boolean
 */
function clinox_custom_post_types( $post = null ) {
	$custom_post_list = get_post_types( array( '_builtin' => false ) );

	// there are no custom post types
	if ( empty ( $custom_post_list ) ) {
		return false;
	}

	$custom_types     = array_keys( $custom_post_list );
	$current_post_type = get_post_type( $post );

	// could not detect current type
	if ( ! $current_post_type ) {
		return false;
	}

	return in_array( $current_post_type, $custom_types );
}

function clinox_single_category($default = true) {
					
	if ( 'post' == get_post_type() ) {
		$categories = get_the_category();
		$separator = ', ';
		$output = '';
		if($categories){
			foreach($categories as $category) {
	
				$output .= '<a class="cat-links" href="'.get_category_link( $category->term_id ).'">'.$category->cat_name.'</a>'.$separator;

			}
		$cat= trim($output, $separator);
		echo '<span class="post-cat leffect-1"><i class="dashicons dashicons-category"></i> '.$cat.'</span>';
		}
	}

}

/*Filter searchform button markup*/
add_filter( 'get_search_form','clinox_modify_search_form');

function clinox_modify_search_form( $form ) {
    $form = '<form class="password-form" role="search" method="get" id="search-form" action="' .esc_url(home_url( '/' )) . '" >
    <div><label class="screen-reader-text" for="s">' . esc_attr__( 'Search for:','clinox' ) . '</label>
    <input type="text" placeholder="' . esc_attr__( 'Type and hit enter','clinox' ) . '" class="form-control" value="' . get_search_query() . '" name="s" id="s" />
    
    </div>
    </form>';
 
    return $form;
}
 

/*Filter password form markup*/
add_filter( 'the_password_form', 'clinox_password_form' );
function clinox_password_form() {
	 global $post;
	 $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
	 $o = '<form class="postpass-form" action="' .
    esc_url( site_url( 'wp-login.php?action=postpass',
                      'login_post' ) ) .
    '" method="post">
	 ' . esc_attr__( 'This post is password protected and this is what I want to say about that. To view it please enter your password below:','clinox') . '
	 <input class="post-pass" name="post_password" placeholder="' . esc_attr__( 'Type and hit enter','clinox' ) . '" id="' . $label . '" type="password" />
	 </form>
	 ';
	 return $o;
}

/*No main nav fallback*/
function clinox_no_main_nav( $args ) {
    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }
    extract( $args );

    $link = $link_before.'<a href="' .esc_url(admin_url( 'nav-menus.php' )). '">' . $before . esc_attr__('Please assign PRIMARY menu location','clinox') . $after . '</a>'. $link_after;

    if ( FALSE !== stripos( $items_wrap, '<ul' ) or FALSE !== stripos( $items_wrap, '<ol' ) ){
        $link = "<li>$link</li>";
    }

    $output = sprintf( $items_wrap, $menu_id, $menu_class, $link );
    if ( ! empty ( $container ) ){
        $output  = "<$container class='$container_class' id='$container_id'>$output</$container>";
    }

    if ( $echo ){
        echo clinox_html($output);
    }

    return $output;
}

function clinox_new_excerpt_more($more) {
    return '';
}
add_filter('excerpt_more', 'clinox_new_excerpt_more');

function clinox_excerpt_more_link( $excerpt ){
    $post = get_post();
    $excerpt .= '<a class="read-more" href="'.get_permalink($post->ID).'">'.esc_attr__( 'Read More','clinox').'</a>';
    return $excerpt;
}
add_filter( 'the_excerpt', 'clinox_excerpt_more_link');


function clinox_navigation(){

	if ( clinox_has_footer_customise('navigation') ) {

		do_action('archipress_single_navigation');

	} else {

	  the_post_navigation( array(
	    'prev_text'=> esc_attr__('Newer Post','clinox'),
	    'next_text'=> esc_attr__('Older Post','clinox'),
	  ) );

	}
}

function clinox_pagination(){

	if ( clinox_has_footer_customise('archive_pagination') ) {

		do_action('archipress_pagination');

	} else {
 
	  the_posts_navigation();

	}
}
 
function clinox_share_tags(){

	if ( clinox_has_footer_customise('share_tag') ) {

		do_action('archipress_share_tags');

	} else {
		
		clinox_post_tag();
	}
}

function clinox_authorbox(){

	if ( clinox_has_footer_customise('authorbox') ) {

		do_action('archipress_authorbox');
	}
 
}

function clinox_header_template(){

    if ( clinox_has_footer_customise('header') ) {

        do_action('archipress_header');
    } else {
        get_template_part( 'template-parts/header', 'one' );
    }
}

function clinox_footer_template(){

    if ( clinox_has_footer_customise('footer') ) {
        do_action('archipress_footer');
    } else {

    }
}



function hf_template_select() {
	global $post;
	$args = array('numberposts' => -1,'post_type' => 'elementor-hf',);
	$posts = get_posts($args);
	foreach ($posts as $pn_cat) {
		$categories[$pn_cat->ID] = get_the_title($pn_cat->ID);
	}
	return $categories;
}

/**
 * Get Breadcrumb
 *
 * @return void
 */
function clinox_the_breadcrumb() {
	global $wp_query;
	$queried_object = get_queried_object();
	$breadcrumb     = '';
	$delimiter      = ' / ';
	$before         = '<li class="breadcrumb-item">';
	$after          = '</li>';
	$breadcrumb .='<ul class="bread-crumb clearfix">';
	if ( ! is_front_page() ) {
		$breadcrumb .= $before . '<a href="' . home_url( '/' ) . '">' . esc_html__( 'Home', 'clinox' ) . ' &nbsp;</a>' . $after;
		/** If category or single post */
		if ( is_category() ) {
			$cat_obj       = $wp_query->get_queried_object();
			$this_category = get_category( $cat_obj->term_id );
			if ( $this_category->parent != 0 ) {
				$parent_category = get_category( $this_category->parent );
				$breadcrumb      .= get_category_parents( $parent_category, true, $delimiter );
			}
			$breadcrumb .= $before . '<a href="' . get_category_link( get_query_var( 'cat' ) ) . '">' . single_cat_title( '', false ) . '</a>' . $after;
		} elseif ( $wp_query->is_posts_page ) {
			$breadcrumb .= $before . $queried_object->post_title . $after;
		} elseif ( is_tax() ) {
			$breadcrumb .= $before . '<a href="' . get_term_link( $queried_object ) . '">' . $queried_object->name . '</a>' . $after;
		} elseif ( is_page() ) /** If WP pages */ {
			global $post;
			if ( $post->post_parent ) {
				$anc = get_post_ancestors( $post->ID );
				foreach ( $anc as $ancestor ) {
					$breadcrumb .= $before . '<a href="' . get_permalink( $ancestor ) . '">' . get_the_title( $ancestor ) . ' &nbsp;</a>' . $after;
				}
				$breadcrumb .= $before . '' . get_the_title( $post->ID ) . '' . $after;
			} else {
				$breadcrumb .= $before . '' . get_the_title() . '' . $after;
			}
		} elseif ( is_singular() ) {
			if ( $category = wp_get_object_terms( get_the_ID(), array( 'category', 'location', 'tax_feature' ) ) ) {
				if ( ! is_wp_error( $category ) ) {
					$breadcrumb .= $before . '<a href="' . get_term_link( clinox_set( $category, '0' ) ) . '">' . clinox_set( clinox_set( $category, '0' ), 'name' ) . '&nbsp;</a>' . $after;
					$breadcrumb .= $before . '' . get_the_title() . '' . $after;
				} else {
					$breadcrumb .= $before . '' . get_the_title() . '' . $after;
				}
			} else {
				$breadcrumb .= $before . '' . get_the_title() . '' . $after;
			}
		} elseif ( is_tag() ) {
			$breadcrumb .= $before . '<a href="' . get_term_link( $queried_object ) . '">' . single_tag_title( '', false ) . '</a>' . $after;
		} /**If tag template*/
		elseif ( is_day() ) {
			$breadcrumb .= $before . '<a href="#">' . esc_html__( 'Archive for ', 'clinox' ) . get_the_time( 'F jS, Y' ) . '</a>' . $after;
		} /** If daily Archives */
		elseif ( is_month() ) {
			$breadcrumb .= $before . '<a href="' . get_month_link( get_the_time( 'Y' ), get_the_time( 'm' ) ) . '">' . __( 'Archive for ', 'clinox' ) . get_the_time( 'F, Y' ) . '</a>' . $after;
		} /** If montly Archives */
		elseif ( is_year() ) {
			$breadcrumb .= $before . '<a href="' . get_year_link( get_the_time( 'Y' ) ) . '">' . __( 'Archive for ', 'clinox' ) . get_the_time( 'Y' ) . '</a>' . $after;
		} /** If year Archives */
		elseif ( is_author() ) {
			$breadcrumb .= $before . '<a href="' . esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ) . '">' . __( 'Archive for ', 'clinox' ) . get_the_author() . '</a>' . $after;
		} /** If author Archives */
		elseif ( is_search() ) {
			$breadcrumb .= $before . '' . esc_html__( 'Search Results for ', 'clinox' ) . get_search_query() . '' . $after;
		} /** if search template */
		elseif ( is_404() ) {
			$breadcrumb .= $before . '' . esc_html__( '404 - Not Found', 'clinox' ) . '' . $after;
			/** if search template */
		} elseif ( is_post_type_archive( 'product' ) ) {
			$shop_page_id = wc_get_page_id( 'shop' );
			if ( get_option( 'page_on_front' ) !== $shop_page_id ) {
				$shop_page = get_post( $shop_page_id );
				$_name     = wc_get_page_id( 'shop' ) ? get_the_title( wc_get_page_id( 'shop' ) ) : '';
				if ( ! $_name ) {
					$product_post_type = get_post_type_object( 'product' );
					$_name             = $product_post_type->labels->singular_name;
				}
				if ( is_search() ) {
					$breadcrumb .= $before . '<a href="' . get_post_type_archive_link( 'product' ) . '">' . $_name . '</a>' . $delimiter . esc_html__( 'Search results for &ldquo;', 'clinox' ) . get_search_query() . '&rdquo;' . $after;
				} elseif ( is_paged() ) {
					$breadcrumb .= $before . '<a href="' . get_post_type_archive_link( 'product' ) . '">' . $_name . '</a>' . $after;
				} else {
					$breadcrumb .= $before . $_name . $after;
				}
			}
		} else {
			$breadcrumb .= $before . '<a href="' . get_permalink() . '">' . get_the_title() . '</a>' . $after;
		}
		/** Default value */
	}
	$breadcrumb .='</ul>';

	return $breadcrumb;
}


function clinox_search_form() {
	?>
	<div class="search-popup">
		<button class="close-search style-two"><span class="fal fa-times"></span></button>
		<button class="close-search"><span class="fa fa-arrow-up"></span></button>
		<form  action="<?php print esc_url( home_url( '/' ) );?>">
			<div class="form-group">
				<input type="search" name="s" value="<?php print esc_attr( get_search_query() )?>" placeholder="<?php print esc_attr( 'Search Here', 'clinox' );?>" required="">
				<button type="submit"><i class="fa fa-search"></i></button>
			</div>
		</form>
	</div>
	<?php
}
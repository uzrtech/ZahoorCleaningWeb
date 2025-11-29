<?php

add_filter( 'body_class', 'clinox_bodyclass_checker' );
function clinox_bodyclass_checker( $classes ) {   
    $classes[] = 'checkerbody';
    return $classes;   
} 

add_action('wp_nav_menu','clinox_menu_class');  

function clinox_menu_class($menu){ 
    $menu = preg_replace('/ class="sub-menu"/',' class="submenu"',$menu);     
    return $menu; 
}

function clinox_single_title($arg){

        if ( is_category() ) {
            /* translators: Category archive title. 1: Category name */
            $title = single_cat_title( $arg['cat'], 'clinox',false);
        } elseif ( is_tag() ) {
            /* translators: Tag archive title. 1: Tag name */
            $title = single_cat_title( $arg['tag'], 'clinox',false);
        } elseif ( is_author() ) {
            $title = sprintf( $arg['author'].'%s', '<span>' . get_the_author() . '</span>' );
            //$title = get_the_author( 'Author: ', true );
        } elseif ( is_year() ) {
            /* translators: Yearly archive title. 1: Year */
            $title = sprintf( $arg['yarchive'], '<span>' .get_the_date('F Y', 'yearly archives date format' ). '</span>' );
        } elseif ( is_month() ) {
            /* translators: Monthly archive title. 1: Month name and year */
            $title =  sprintf( $arg['marchive'], '<span>' .get_the_date('F Y', 'monthly archives date format' ). '</span>' );
        } elseif ( is_404() ) {
            /* translators: Daily archive title. 1: Date */
            $title = $arg['notfound'];
        }elseif ( is_post_type_archive() ) {
            /* translators: Post type archive title. 1: Post type name */
            $title = post_type_archive_title( '', false );
        } elseif ( is_tax() ) {
            $tax = get_taxonomy( get_queried_object()->taxonomy );
            /* translators: Taxonomy term archive title. 1: Taxonomy singular name, 2: Current taxonomy term */
            $title = single_term_title( '', false ) ;
        } elseif (is_search()){
            $title = sprintf( $arg['search'].'%s','<span>' . get_search_query() . '</span>' );
        }elseif( is_home() && is_front_page() ){
          $title = esc_html__( 'Home', 'clinox' );
        } elseif( is_singular() ){
          $title = get_the_title();
        }else {
            $title = esc_html__( 'Archives','clinox' );
        }

        return $title;
}

function clinox_unit_breadcumb() {

	/* === OPTIONS === */
	$text['home']     = esc_attr('Home','clinox'); // text for the 'Home' link
	$text['category'] = esc_attr('Archive by Category "%s"','clinox'); // text for a category page
	$text['search']   = esc_attr('Search Results for "%s" Query','clinox'); // text for a search results page
	$text['tag']      = esc_attr('Posts Tagged "%s"','clinox'); // text for a tag page
	$text['author']   = esc_attr('Articles Posted by %s','clinox'); // text for an author page
	$text['404']      = esc_attr('Error 404','clinox'); // text for the 404 page
	$text['page']     = esc_attr('Page %s','clinox'); // text 'Page N'
	$text['cpage']    = esc_attr('Comment Page %s','clinox'); // text 'Comment Page N'

	$wrap_before    = '<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">'; // the opening wrapper tag
	$wrap_after     = '</div><!-- .breadcrumbs -->'; // the closing wrapper tag
	$sep            = '<span class="breadcrumbs__separator"> › </span>'; // separator between crumbs
	$before         = '<span class="breadcrumbs__current">'; // tag before the current crumb
	$after          = '</span>'; // tag after the current crumb

	$show_on_home   = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
	$show_home_link = 1; // 1 - show the 'Home' link, 0 - don't show
	$show_current   = 1; // 1 - show current page title, 0 - don't show
	$show_last_sep  = 1; // 1 - show last separator, when current page title is not displayed, 0 - don't show
	/* === END OF OPTIONS === */

	global $post;
	$home_url       = home_url('/');
	$link           = '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
	$link          .= '<a class="breadcrumbs__link" href="%1$s" itemprop="item"><span itemprop="name">%2$s</span></a>';
	$link          .= '<meta itemprop="position" content="%3$s" />';
	$link          .= '</span>';
	$parent_id      = ( $post ) ? $post->post_parent : '';
	$home_link      = sprintf( $link, $home_url, $text['home'], 1 );

	if ( is_home() || is_front_page() ) {

		if ( $show_on_home ) echo $wrap_before . $home_link . $wrap_after;

	} else {

		$position = 0;

		echo $wrap_before;

		if ( $show_home_link ) {
			$position += 1;
			echo $home_link;
		}

		if ( is_category() ) {
			$parents = get_ancestors( get_query_var('cat'), 'category' );
			foreach ( array_reverse( $parents ) as $cat ) {
				$position += 1;
				if ( $position > 1 ) echo clinox_html($sep);
				echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
			}
			if ( get_query_var( 'paged' ) ) {
				$position += 1;
				$cat = get_query_var('cat');
				echo clinox_html($sep) . sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
				echo clinox_html($sep) . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
			} else {
				if ( $show_current ) {
					if ( $position >= 1 ) echo clinox_html($sep);
					echo $before . sprintf( $text['category'], single_cat_title( '', false ) ) . $after;
				} elseif ( $show_last_sep ) echo clinox_html($sep);
			}

		} elseif ( is_search() ) {
			if ( get_query_var( 'paged' ) ) {
				$position += 1;
				if ( $show_home_link ) echo clinox_html($sep);
				echo sprintf( $link, $home_url . '?s=' . get_search_query(), sprintf( $text['search'], get_search_query() ), $position );
				echo clinox_html($sep) . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
			} else {
				if ( $show_current ) {
					if ( $position >= 1 ) echo clinox_html($sep);
					echo $before . sprintf( $text['search'], get_search_query() ) . $after;
				} elseif ( $show_last_sep ) echo clinox_html($sep);
			}

		} elseif ( is_year() ) {
			if ( $show_home_link && $show_current ) echo clinox_html($sep);
			if ( $show_current ) echo $before . get_the_time('Y') . $after;
			elseif ( $show_home_link && $show_last_sep ) echo clinox_html($sep);

		} elseif ( is_month() ) {
			if ( $show_home_link ) echo clinox_html($sep);
			$position += 1;
			echo sprintf( $link, get_year_link( get_the_time('Y') ), get_the_time('Y'), $position );
			if ( $show_current ) echo clinox_html($sep) . $before . get_the_time('F') . $after;
			elseif ( $show_last_sep ) echo clinox_html($sep);

		} elseif ( is_day() ) {
			if ( $show_home_link ) echo clinox_html($sep);
			$position += 1;
			echo sprintf( $link, get_year_link( get_the_time('Y') ), get_the_time('Y'), $position ) . $sep;
			$position += 1;
			echo sprintf( $link, get_month_link( get_the_time('Y'), get_the_time('m') ), get_the_time('F'), $position );
			if ( $show_current ) echo clinox_html($sep) . $before . get_the_time('d') . $after;
			elseif ( $show_last_sep ) echo clinox_html($sep);

		} elseif ( is_single() && ! is_attachment() ) {
			if ( get_post_type() != 'post' ) {
				$position += 1;
				$post_type = get_post_type_object( get_post_type() );
				if ( $position > 1 ) echo clinox_html($sep);
				echo sprintf( $link, get_post_type_archive_link( $post_type->name ), $post_type->labels->name, $position );
				if ( $show_current ) echo clinox_html($sep) . $before . get_the_title() . $after;
				elseif ( $show_last_sep ) echo clinox_html($sep);
			} else {
				$cat = get_the_category();
				if ($cat){

					$catID = $cat[0]->cat_ID;
					$parents = get_ancestors( $catID, 'category' );
					$parents = array_reverse( $parents );
					$parents[] = $catID;
					foreach ( $parents as $cat ) {
						$position += 1;
						if ( $position > 1 ) echo clinox_html($sep);
						echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
					}

				}
				if ( get_query_var( 'cpage' ) ) {
					$position += 1;
					echo clinox_html($sep) . sprintf( $link, get_permalink(), get_the_title(), $position );
					echo clinox_html($sep) . $before . sprintf( $text['cpage'], get_query_var( 'cpage' ) ) . $after;
				} else {
					if ( $show_current ) echo clinox_html($sep) . $before . get_the_title() . $after;
					elseif ( $show_last_sep ) echo clinox_html($sep);
				}
			}

		} elseif ( is_post_type_archive() ) {
			$post_type = get_post_type_object( get_post_type() );
			if ( get_query_var( 'paged' ) ) {
				$position += 1;
				if ( $position > 1 ) echo clinox_html($sep);
				echo sprintf( $link, get_post_type_archive_link( $post_type->name ), $post_type->label, $position );
				echo clinox_html($sep) . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
			} else {
				if ( $show_home_link && $show_current ) echo clinox_html($sep);
				if ( $show_current ) echo $before . $post_type->label . $after;
				elseif ( $show_home_link && $show_last_sep ) echo clinox_html($sep);
			}

		} elseif ( is_attachment() ) {
			$parent = get_post( $parent_id );
			$cat = get_the_category( $parent->ID ); $catID = $cat[0]->cat_ID;
			$parents = get_ancestors( $catID, 'category' );
			$parents = array_reverse( $parents );
			$parents[] = $catID;
			foreach ( $parents as $cat ) {
				$position += 1;
				if ( $position > 1 ) echo clinox_html($sep);
				echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
			}
			$position += 1;
			echo clinox_html($sep) . sprintf( $link, get_permalink( $parent ), $parent->post_title, $position );
			if ( $show_current ) echo clinox_html($sep) . $before . get_the_title() . $after;
			elseif ( $show_last_sep ) echo clinox_html($sep);

		} elseif ( is_page() && ! $parent_id ) {
			if ( $show_home_link && $show_current ) echo clinox_html($sep);
			if ( $show_current ) echo $before . get_the_title() . $after;
			elseif ( $show_home_link && $show_last_sep ) echo clinox_html($sep);

		} elseif ( is_page() && $parent_id ) {
			$parents = get_post_ancestors( get_the_ID() );
			foreach ( array_reverse( $parents ) as $pageID ) {
				$position += 1;
				if ( $position > 1 ) echo clinox_html($sep);
				echo sprintf( $link, get_page_link( $pageID ), get_the_title( $pageID ), $position );
			}
			if ( $show_current ) echo clinox_html($sep) . $before . get_the_title() . $after;
			elseif ( $show_last_sep ) echo clinox_html($sep);

		} elseif ( is_tag() ) {
			if ( get_query_var( 'paged' ) ) {
				$position += 1;
				$tagID = get_query_var( 'tag_id' );
				echo clinox_html($sep) . sprintf( $link, get_tag_link( $tagID ), single_tag_title( '', false ), $position );
				echo clinox_html($sep) . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
			} else {
				if ( $show_home_link && $show_current ) echo clinox_html($sep);
				if ( $show_current ) echo $before . sprintf( $text['tag'], single_tag_title( '', false ) ) . $after;
				elseif ( $show_home_link && $show_last_sep ) echo clinox_html($sep);
			}

		} elseif ( is_author() ) {
			$author = get_userdata( get_query_var( 'author' ) );
			if ( get_query_var( 'paged' ) ) {
				$position += 1;
				echo clinox_html($sep) . sprintf( $link, get_author_posts_url( $author->ID ), sprintf( $text['author'], $author->display_name ), $position );
				echo clinox_html($sep) . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
			} else {
				if ( $show_home_link && $show_current ) echo clinox_html($sep);
				if ( $show_current ) echo $before . sprintf( $text['author'], $author->display_name ) . $after;
				elseif ( $show_home_link && $show_last_sep ) echo clinox_html($sep);
			}

		} elseif ( is_404() ) {
			if ( $show_home_link && $show_current ) echo clinox_html($sep);
			if ( $show_current ) echo $before . $text['404'] . $after;
			elseif ( $show_last_sep ) echo clinox_html($sep);

		} elseif ( has_post_format() && ! is_singular() ) {
			if ( $show_home_link && $show_current ) echo clinox_html($sep);
			echo get_post_format_string( get_post_format() );
		}

		echo $wrap_after;

	}

}

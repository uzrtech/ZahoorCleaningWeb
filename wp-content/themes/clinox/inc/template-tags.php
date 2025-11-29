<?php

/**
 * 
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 */

function clinox_has_footer_customise($opt){
	$options = get_option('_txriver'); 
	if (isset($options[$opt]) && class_exists('CSF') ){
		return $options[$opt];
	}
}

function clinox_post_author(){
	$byline = sprintf(
		/* translators: %s: post author. */
		esc_html_x( '%s', 'post author', 'clinox' ),
		'<span class="author vcard"> <a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);

	echo '<span class="single-author leffect-1"> <i class="dashicons dashicons-admin-users"></i> '.$byline.'</span>';	
}

function clinox_post_date(){

	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_attr( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_attr( get_the_modified_date() )
	);

	$posted_on = sprintf(
		/* translators: %s: post date. */
		esc_html_x( '%s', 'post date', 'clinox' ),
		$time_string
	);

	echo '<span class="single-date leffect-1"><i class="dashicons dashicons-calendar"></i> '.$posted_on.'</span>';	
}

function clinox_category(){

        if ( 'post' == get_post_type() ) {
            $categories = get_the_category();
            $separator = ''; 
             
            $output = '';
            if($categories){
                foreach($categories as $category) {
          
                    $output .= '<span class="blog-cat"><a class="cat-bg" href="'.get_category_link( $category->term_id ).'">'.$category->cat_name.'</a></span>';
                }
            $cat= trim($output, $separator);
            echo '<span class="catbg-wrap">'.$cat.'</span>';
            }
        }

}

add_filter('wp_list_categories', 'clinox_cat_count_span');
function clinox_cat_count_span($links) {
  $links = str_replace('</a> (', '</a> <span class="cat-num">(', $links);
  $links = str_replace(')', ')</span>', $links);
  return $links;
}
function clinox_style_the_archive_count($links) {
    $links = str_replace('</a>&nbsp;(', '</a> <span class="cat-num">(', $links);
    $links = str_replace(')', ')</span>', $links);
    return $links;
}

add_filter('get_archives_link', 'clinox_style_the_archive_count');

add_filter('wp_generate_tag_cloud', 'clinox_tagcloud_inline_style',10,1);
function clinox_tagcloud_inline_style($input){ 
   return preg_replace('/ style=("|\')(.*?)("|\')/','',$input); 
}

function clinox_html($out){
	return $out;
}



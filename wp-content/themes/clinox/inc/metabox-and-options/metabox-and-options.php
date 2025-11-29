<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
add_filter( 'csf_welcome_page', '__return_false' );
/*
 * Theme options
 */
require_once 'theme-options/theme-options.php';

/*
 * Common metabox
 */
require_once 'metabox/post-format-metaboxes.php';

/*
 * Common metabox
 */
require_once 'metabox/common-metaboxes.php';



/*
 * Widget
 */
require_once 'widgets/search.php';
require_once 'widgets/category.php';
require_once 'widgets/post.php';
require_once 'widgets/tag.php';
require_once 'widgets/subscribe.php';




<?php
/**
 * cad functions and definitions
 *
 *
 *
 * @package WordPress
 * 
 *
 */


// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'cad' ), 'footer' => __( 'Footer Menu', 'cad' ),
) );

add_theme_support( 'custom-logo', array(
	'height'      => 165,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );

// child pages

add_filter('wp_list_pages','wpse241119_replace_class',10,3);
function wpse241119_replace_class ($output, $r, $pages) {
	$output = str_replace ('page_item', 'list-group-item', $output);
	return $output;
}




function wpb_list_child_pages() { 
 
	global $post; 

	global $post;
	
	 
	if ( is_page() && $post->post_parent ) {
		$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );

	} else {
		$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );
	}
	 
	if ( $childpages ) {
	 
		$string = '<ul class="list-group list-group-flush">' . $childpages . '</ul>';
	}

	if ( !isset($string) ) {
		$string = "";
	}
	 
	echo $string;
	 
}

add_shortcode('wpb_childpages', 'wpb_list_child_pages');


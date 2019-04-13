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



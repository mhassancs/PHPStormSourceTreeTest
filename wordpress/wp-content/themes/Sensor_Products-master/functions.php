<?php

add_action('after_setup_theme', 'Sensor_Products_Setup');
function Sensor_Products_Setup(){
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );	
	add_theme_support('html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		));
	add_theme_support('post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		));
	add_theme_support('custom-background', array(
		'default-color' => 'ffffff',
		'default-image' => '',
		));

	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Navigation', 'sensor_products_menu' ),
		'footer' => esc_html__( 'Footer', 'sensor_products_menu' ),
		'mobile' => esc_html__( 'Mobile', 'sensor_products_menu' ),
		));
}
// end of Sensor_Products_Setup

add_action('widgets_init', 'Sensor_Products_Widgets_Init');
function Sensor_Products_Widgets_Init(){
	register_sidebar( array(
		'name'          => esc_html__( 'SP Widget', 'SP Widget' ),
		'id'            => 'SP-Widget',
		'description'   => esc_html__( 'SP Widget', 'SP Widget' ),
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		));
}
//end of Sensor_Products_Widgets_Init

add_action('wp_enqueue_scripts', 'Sensor_Products_Scripts');
function Sensor_Products_Scripts(){
	wp_enqueue_style( 'Sensor_Products-style-reset', get_stylesheet_uri() );
	wp_enqueue_style( 'Sensor_Products-bootstrap', get_template_directory_uri() . '/less/css/bootstrap.min.css' );
	wp_enqueue_style( 'Sensor_Products-fontawesome', get_template_directory_uri() . '/less/css/font-awesome.min.css' );
	wp_enqueue_style( 'Sensor_Products-style', get_template_directory_uri() . '/less/css/style.min.css' );
	wp_enqueue_script('Sensor_Products-jquery', get_template_directory_uri() . '/js/lib/jquery.min.js');
	wp_enqueue_script('Sensor_Products-bootstrap-js', get_template_directory_uri() . '/js/lib/bootstrap.min.js');
	wp_enqueue_script('Sensor_Products-angularjs', get_template_directory_uri() . '/js/lib/angular.min.js');
	wp_enqueue_script('Sensor_Products-angular-route', get_template_directory_uri() . '/js/lib/angular-route.min.js');
	wp_enqueue_script('Sensor_Products-mainjs', get_template_directory_uri() . '/js/main.js');
	wp_enqueue_script('Sensor_Products-app', get_template_directory_uri() . '/js/app.js');
}
// end of Sensor_Products_Scripts

add_action('admin_enqueue_scripts', 'admin_style');
function admin_style() {
	wp_enqueue_style('admin-styles', get_template_directory_uri().'/less/css/admin/admin.css');
	wp_enqueue_script('Sensor_Products-admin-scripts', get_template_directory_uri() . '/js/admin.js');
}
// end of admin_style

add_action('parse_query', 'hide_pages_from_admin');
function hide_pages_from_admin($query){
	if(!is_admin()){
		return $query;
	}
	global $pagenow, $post_type;
	if(!current_user_can( '' ) && $pagenow == 'edit.php' && $post_type == 'page'){
		$query->query_vars['post__not_in'] = array(  ); // Enter your page IDs here
	}
}
// end of hide_pages_from_admin

require('inc/scripts/wp_bootstrap_navwalker.php');
require('inc/custom_post/custom_post_type.php');
require('inc/taxonomy/custom_taxonomies.php');
require('inc/metabox/sensor_products_metabox.php');
require('inc/metabox/products_metabox.php');
require('inc/metabox/video_metabox.php');
require('inc/metabox/dashboard_cpt_metabox.php');



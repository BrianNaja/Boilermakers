<?php

// Custom Post Types


add_action('init', 'video_post_register');

function video_post_register() {
	///Register type and custom taxonomy for type.
	$video_args = array('label' => 'Videos',
				  'public' => true,
				  'show_ui' => true,
				  'capability_type' => 'post',
				  'hierarchical' => true,
				  'has_archive' => true,
				  'taxonomies' => array('post_tag'),
				  'supports' => array('title', 'editor', 'excerpt', 'comments', 'thumbnail'));
 //Register type and custom taxonomy for type.
     
      register_post_type( 'video' , $video_args );}  //Register type and custom taxonomy for type.


function namespace_add_custom_types( $query ) { // Adds custom post type to tag page
  if( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
    $query->set( 'post_type', array(
     'post', 'video', 'retiree-club'
		));
	  return $query;
	}
}
add_filter( 'pre_get_posts', 'namespace_add_custom_types' );// Adds custom post type to tag page



add_action('init', 'sticky_post_register');

function sticky_post_register() {
	///Register type and custom taxonomy for type.
	$sticky_args = array('label' => __('Sticky-Posts'),
				  'singular_label' => __('Sticky-Post'),
				  'public' => true,
				  'show_ui' => true,
				  'capability_type' => 'post',
				  'hierarchical' => true,
				  'has_archive' => true,
				  /* 'taxonomies' => array('post_tag', 'category'), */
				  'supports' => array('title', 'editor')); //Register type and custom taxonomy for type.
     
     register_post_type( 'Sticky-Post' , $sticky_args );} //Register type and custom taxonomy for type.
     

add_action('init', 'present_day_post_register');     
     
function present_day_post_register() {
	///Register type and custom taxonomy for type.
	$sticky_args = array('label' => __('Present Day Photos'),
				  'singular_label' => __('Present Day Photo'),
				  'public' => true,
				  'show_ui' => true,
				  'capability_type' => 'post',
				  'hierarchical' => true,
				  'has_archive' => true,
				  /* 'taxonomies' => array('post_tag', 'category'), */
				  'supports' => array('title', 'thumbnail')); //Register type and custom taxonomy for type.
     
     register_post_type( 'Present Day Photos' , $sticky_args );} //Register type and custom taxonomy for type.
     

add_action('init', 'back_in_the_day_post_register');     
     
function back_in_the_day_post_register() {
	///Register type and custom taxonomy for type.
	$sticky_args = array('label' => __('Back In The Day Photos'),
				  'singular_label' => __('Back In The Day Photo'),
				  'public' => true,
				  'show_ui' => true,
				  'capability_type' => 'post',
				  'hierarchical' => true,
				  'has_archive' => true,
				  /* 'taxonomies' => array('post_tag', 'category'), */
				  'supports' => array('title', 'thumbnail')); //Register type and custom taxonomy for type.
     
     register_post_type( 'Back In The Day Photos' , $sticky_args );} //Register type and custom taxonomy for type.      

add_action('init', 'retiree_post_register');

function retiree_post_register() {
	///Register type and custom taxonomy for type.
	$retiree_args = array('label' => 'Retiree',
				  'public' => true,
				  'show_ui' => true,
				  'capability_type' => 'post',
				  'hierarchical' => true,
				  'has_archive' => true,
				  'taxonomies' => array('post_tag'), 
				  'supports' => array('title', 'editor', 'thumbnail'));
 //Register type and custom taxonomy for type.
     
      register_post_type( 'retiree-club' , $retiree_args );}  //Register type and custom taxonomy for type.


     
?>
<?php
function dstheme_resources(){
	wp_enqueue_style('style', get_stylesheet_uri());
} 
/* This function includes the style sheet in the name */

add_action('wp_enqueue_scripts', 'dstheme_resources');
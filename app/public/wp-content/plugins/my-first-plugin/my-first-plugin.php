<?php  
/*
Plugin Name: My First Plugin
Description: This plugin is the best.
*/

add_shortcode( 'programCount', 'programCountFunction' );
function programCountFunction(){
	$count_posts = wp_count_posts( 'program' );
	$total_posts = $count_posts->publish;
	return $total_posts;
}

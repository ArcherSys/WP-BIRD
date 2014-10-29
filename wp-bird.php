<?php
/*
 
* Plugin Name: WP BIRD
 
* Version: 1.0.1
 
* Plugin URI: https://github.com/ArcherSys/WP-BIRD
 
* Description: Easily integrate the ArcherSys BIRD remote networking  system into a Wordpress site.
 
* Author: ArcherSys Foundation 
* Author URI: https://github.com/ArcherSys 
* Requires at least: 3.3
 
* Tested up to: 3.6.1
 
* 

* @package WordPress
 
*
* @author Ryan Nielson

* @since 1.0.0
 
*/


function add_bird_start_button($wp_admin_bar) {
	
$args = array(
		
'id'    => 'start_bird_button',
		
'title' => '<a href="#" id="start-bird" 
class="bird-button" 
onclick="TogetherJS(this); return false;">Start BIRD</a>',
		
'meta' => array(
			
'class' => 'bird-button-container'
		)
	);


	$wp_admin_bar->add_node( $args );
}


function enqueue_wp_bird_styles_and_scripts() {
	
wp_enqueue_style("wp_bird_style", plugins_url("assets/wp-bird.css", __FILE__ ));
	
wp_enqueue_script("wp_bird_script", plugins_url("assets/wp-bird.js", __FILE__ ), array("jquery"));

	wp_enqueue_script("togetherjs_script", "https://togetherjs.com/togetherjs-min.js");

}


add_action("wp_enqueue_scripts", "enqueue_wp_bird_styles_and_scripts");

add_action("admin_enqueue_scripts", "enqueue_wp_bird_styles_and_scripts");

add_action("login_enqueue_scripts", "enqueue_wp_bird_styles_and_scripts");

add_action("admin_bar_menu", "add_bird_start_button", 999);

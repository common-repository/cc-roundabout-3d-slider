<?php
/******************
* Scripts Control
*******************/
function ccrwp_load_scripts(){
	if (is_singular()){
		wp_register_style( 'ccrwp_roundabout_styles', plugin_dir_url( __FILE__ ) .'../css/cc-roundabout-style.css' );
		wp_enqueue_style( 'ccrwp_roundabout_styles' );
		
		wp_register_script( 'jquery-roundabout', plugin_dir_url( __FILE__ ) . '../js/jquery.roundabout.js', array('jquery'), array(), true);
		wp_enqueue_script( 'jquery-roundabout' );
		
		wp_register_script( 'jquery.roundabout-shapes', plugin_dir_url( __FILE__ ) . '../js/jquery.roundabout-shapes.js', array('jquery'), array(), true);
		wp_enqueue_script( 'jquery.roundabout-shapes' );
		
		wp_register_script( 'jquery-event-drag', plugin_dir_url( __FILE__ ) . '../js/jquery.event.drag-2.2.js', array('jquery'), array(), true);
		wp_enqueue_script( 'jquery-event-drag' );
		
		wp_register_script( 'jquery-event-drop', plugin_dir_url( __FILE__ ) . '../js/jquery.event.drop-2.2.js', array('jquery'), array(), true);
		wp_enqueue_script( 'jquery-event-drop' );
		
		wp_register_script( 'roundabout-settings', plugin_dir_url( __FILE__ ) . '../js/roundabout-settings.js', array('jquery'), array(), true);
		wp_enqueue_script( 'roundabout-settings' );
		
	}
}
add_action('wp_enqueue_scripts', 'ccrwp_load_scripts');

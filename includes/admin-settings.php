<?php
function ccrwp_options_page(){
	global $ccrwp_options;

	ob_start(); ?>
	<div class="wrap">
		<div>
		<h2><?php _e('CC Roundabout 3D Slider Options')?></h2>
		<p><?php _e('Please choose your settings form this page')?></p>
		<p><?php _e('Please use the short code \"[ccrwp_slider]\" in your post of page to show off your testimonial or any images.')?></p>
		<h3><?php _e('Slider shapes', 'ccrwp_domain');?></h3>
			<p><?php _e('It has 12 different shapes by default, i.e. Vertical or Horizontal Wheel, Conveyor Belt right or left, Diagonal ring left or right, Roller Coaster and some others.')?></p>
			<h3><?php _e('Some other settings in the premium vesrion.')?></h3>
			<p><?php _e('next, prev buttons, play, pause, auto play and toggle buttons, Navigation arrows, duration, auto play duration, Control Drag factor, Control Drag axis, pause on hover, Control Tilt factor')?>
			</p>
			<h3><?php _e('Some of the following settings will be available in the next update. If you are in hurry:')?></h3>
			<img src="<?php echo plugins_url('cc-roundabout-3d-slider/images/ccrwp-settings.png');?>" alt="CC Roundabout Settings"></span>
			<p class="submit" style="float:left; margin-right:100px">
				<strong><?php _e('Please')?></strong>&nbsp &nbsp <a href="http://www.mahmudur.info/" class="button-primary"><?php _e('Find the Developer')?></a>
			</p>
		</div>
	</div>
	<?php
	echo ob_get_clean();
}
function ccrwp_add_options_link(){
	add_submenu_page('edit.php?post_type=slide', 'CC Roundabout 3D Slider Options', 'Settings', 'manage_options', 'ccrwp-options', 'ccrwp_options_page');
}
add_action('admin_menu', 'ccrwp_add_options_link');


?>
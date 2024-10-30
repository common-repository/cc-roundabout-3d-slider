<?php
function ccrwp_shortcode($atts){
	extract( shortcode_atts( array(
		'expand' => '',
	), $atts ) );
	
    $q = new WP_Query(
        array('posts_per_page' => '4', 'post_type' => 'slide')
        );		
		
	$list = '<ul id="myRoundabout" class="myRoundabout">';
	while($q->have_posts()) : $q->the_post();
		$idd = get_the_ID();
		$img_img = wp_get_attachment_image_src( get_post_thumbnail_id( $idd ), 'slide-image' );
		$list .= '
				<li>
					<div class="feed_back fix floatleft">
					<img class="feedback_img" src="'.$img_img[0].'" alt="" />
					<h6><a href="'. get_permalink() .'">'. get_the_title() .'</a></h6>
					<p>'.get_the_excerpt().'</p>
					</div>
				</li>
		';        
	endwhile;
	$list.= '</ul>';
	wp_reset_query();
	return $list;
}
add_shortcode('ccrwp_slider', 'ccrwp_shortcode');
?>
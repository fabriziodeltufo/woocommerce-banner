<?php
/*
WP Page Banner Plugin Code.
*/

// Load CSS on the frontend
function wpbanner_style() {

  wp_enqueue_style('wpbanner-style', WPPLUGIN_URL . 'css/wpbanner-style.css',[],time() );

}
add_action( 'wp_enqueue_scripts', 'wpbanner_style' , 100);

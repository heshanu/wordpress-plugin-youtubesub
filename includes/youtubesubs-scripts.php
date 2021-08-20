<?php

//add script

function yts_add_scripts(){
	//add main css
	wp_enqueue_style('yts-main-style',plugins_url(). '/youtubesubs/css/style.css');
	//add main js
	wp_enqueue_script('yts-main-script',plugins_url().'/youtubesubs/js/main.js');

	//add google sub bton
	wp_register_script('google','https://apis.google.com/js/platform.js');

	wp_enqueue_script('google');
}


//add hoook
add_action('wp_enqueue_scripts','yts_add_scripts');


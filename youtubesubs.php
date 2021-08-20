<?php
/**
* Plugin Name:Youtube SUBS-plugin
* Plugin URI: https://www.testsite/
* Description: Display youtube subbutton
* Version: 1.0
* Author: Heshan Umayanga
* Auth
*/
//exits if access directly

if(! defined('ABSPATH')){
	exit();
}

//load script 
require_once(plugin_dir_path(__FILE__).'/includes/youtubesubs-scripts.php');
require_once(plugin_dir_path(__FILE__).'/includes/youtubesubs-class.php');
//load class file

function register_youtubesubs(){
	register_widget('Youtube_Subs_Widget');
}

//hookin

add_action('widgets_init','register_youtubesubs');
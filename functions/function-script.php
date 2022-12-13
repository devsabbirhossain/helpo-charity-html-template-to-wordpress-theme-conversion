<?php 


	add_action('wp_enqueue_scripts','theme_scripts_css');
	function theme_scripts_css(){
		wp_enqueue_style('all', get_theme_file_uri().'/assets/css/css/all.min.css', null, true, 'all');
		wp_enqueue_style('style', get_theme_file_uri().'/assets/css/styles.min.css', null, true, 'all');
		wp_enqueue_style('custom', get_theme_file_uri().'/assets/css/custom.css', null, true, 'all');
		wp_enqueue_style('stylesheet',get_stylesheet_uri(),NULL,true,'all');
	}

	add_action('wp_enqueue_scripts','theme_scripts_js');
	function theme_scripts_js(){
		wp_enqueue_script('libs.min', get_theme_file_uri().'/assets/js/libs.min.js', array('jquery'), true, true);
		wp_enqueue_script('common.min', get_theme_file_uri().'/assets/js/common.min.js', array('jquery'), true, true);
		wp_enqueue_script('custom', get_theme_file_uri().'/assets/js/custom.js', array('jquery'), true, true);
	}
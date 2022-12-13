<?php 

	if(file_exists(get_template_directory().'/functions/function-script.php')){
		require_once(get_template_directory().'/functions/function-script.php');
	}

	//custom Widget 
	if(file_exists(get_template_directory().'/functions/function-customwidget.php')){
		require_once(get_template_directory().'/functions/function-customwidget.php');
	}

	//Register Sidebar
	if(file_exists(get_template_directory().'/functions/function-registersidebar.php')){
		require_once(get_template_directory().'/functions/function-registersidebar.php');
	}

	//Posttype 
	if(file_exists(get_template_directory().'/functions/function-posttype.php')){
		require_once(get_template_directory().'/functions/function-posttype.php');
	}

	//shortcode
	if(file_exists(get_template_directory().'/shortcodes/shortcode-all.php')){
		require_once(get_template_directory().'/shortcodes/shortcode-all.php');
	}
	if(file_exists(get_template_directory().'/shortcodes/shortcode-home.php')){
		require_once(get_template_directory().'/shortcodes/shortcode-home.php');
	}
	if(file_exists(get_template_directory().'/shortcodes/shortcode-contact.php')){
		require_once(get_template_directory().'/shortcodes/shortcode-contact.php');
	}

	if(file_exists(get_template_directory().'/shortcodes/shortcode-volunteer.php')){
		require_once(get_template_directory().'/shortcodes/shortcode-volunteer.php');
	}

	if(file_exists(get_template_directory().'/shortcodes/shortcode-about.php')){
		require_once(get_template_directory().'/shortcodes/shortcode-about.php');
	}

	if(file_exists(get_template_directory().'/shortcodes/shortcode-faq.php')){
		require_once(get_template_directory().'/shortcodes/shortcode-faq.php');
	}
	

	//visual Composer
	if(file_exists(get_template_directory().'/functions/function-visualcomposer.php')){
		require_once(get_template_directory().'/functions/function-visualcomposer.php');
	}
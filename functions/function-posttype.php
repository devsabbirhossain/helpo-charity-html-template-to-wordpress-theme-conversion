<?php

	add_action('init', 'register_faq_posttype');
	function register_faq_posttype(){
		register_post_type('charitybd-faq', [
			'labels'		=>	[
				'name'			=>	__('FAQs', 'charitybd'),
				'singular_name' => 	__( 'FAQ', 'charitybd' ),
				'add_new'		=>	__('Add New FAQ', 'charitybd'),
				'all_items'		=>	__('All FAQs', 'charitybd')
			],
			'public'		=>	true,
			'has_archive' 	=> 	true,
			'menu_icon'		=>	'dashicons-hammer',
			'supports'		=>	['title', 'editor', 'author']

		]);
	}


	add_action('init', 'register_slider_posttype');
	function register_slider_posttype(){
		register_post_type('charitybd-slider', [
			'labels'	=>	[
				'name'			=>	__('Home Sliders', 'charitybd'),
				'singular_name' => 	__( 'Home Slider', 'charitybd' ),
				'add_new'		=>	__('Add Slider', 'charitybd'),
				'all_items'		=>	__('All Sliders', 'charitybd')
			],
			'public'		=>	true,
			'has_archive' 	=> 	true,
			'menu_icon'		=>	'dashicons-slides',
			'supports'		=>	['title', 'editor', 'thumbnail', 'author']
		]);
	}


	add_action('init', 'register_causes_posttype');
	function register_causes_posttype(){
		register_post_type('causes', [
			'labels'	=>	[
				'name'			=>	__('Causes', 'charitybd'),
				'singular_name' => 	__( 'Cause', 'charitybd' ),
				'add_new'		=>	__('Add Cause', 'charitybd'),
				'all_items'		=>	__('All Causes', 'charitybd')
			],
			'public'		=>	true,
			'has_archive' 	=> 	true,
			'menu_icon'		=>	'dashicons-smiley',
			'supports'		=>	['title', 'editor', 'thumbnail', 'author']
		]);

		register_taxonomy('causes-taxonomy', 'causes',[
			'labels'			=>	[
				'name'				=>	__('Categories', 'comettheme'),
				'all_items' 		=> 	__('All Categories', 'comettheme'),
				'edit_item'			=> 	__('Edit Categories', 'comettheme'),
				'update_item'       => 	__('Update Categories', 'comettheme'),
			    'search_items'      => 	__('Search Categories', 'comettheme'),
			    'parent_item'       => 	__('Parent Categories', 'comettheme'),
			    'parent_item_colon' => 	__('Parent Categories:', 'comettheme'),
			    'edit_item'         => 	__('Edit Categories', 'comettheme'),
			    'update_item'       => 	__('Update Categories', 'comettheme'),
			    'add_new_item'      => 	__('Add New Categories', 'comettheme'),
			    'new_item_name'     => 	__('New Categories Name', 'comettheme'),
			    'menu_name'         => 	__('Categories', 'comettheme'),
			    'not_found'			=>	__('No Categories Found', 'comettheme')
			],
			'public'			=>	true,
			'hierarchical'		=> true,
    		'show_admin_column' => true,
    		'query_var'         => true,
            'show_in_rest'      => true
		]);
	}


	add_action('init', 'register_events_posttype');
	function register_events_posttype(){
		register_post_type('events', [
			'labels'	=>	[
				'name'			=>	__('Events', 'charitybd'),
				'singular_name' => 	__( 'Event', 'charitybd' ),
				'add_new'		=>	__('Add Event', 'charitybd'),
				'all_items'		=>	__('All Events', 'charitybd')
			],
			'public'		=>	true,
			'has_archive' 	=> 	true,
			'menu_icon'		=>	'dashicons-calendar-alt',
			'supports'		=>	['title', 'editor', 'thumbnail', 'author']
		]);

		register_taxonomy('events-taxonomy', 'events',[
			'labels'			=>	[
				'name'				=>	__('Categories', 'comettheme'),
				'all_items' 		=> 	__('All Categories', 'comettheme'),
				'edit_item'			=> 	__('Edit Categories', 'comettheme'),
				'update_item'       => 	__('Update Categories', 'comettheme'),
			    'search_items'      => 	__('Search Categories', 'comettheme'),
			    'parent_item'       => 	__('Parent Categories', 'comettheme'),
			    'parent_item_colon' => 	__('Parent Categories:', 'comettheme'),
			    'edit_item'         => 	__('Edit Categories', 'comettheme'),
			    'update_item'       => 	__('Update Categories', 'comettheme'),
			    'add_new_item'      => 	__('Add New Categories', 'comettheme'),
			    'new_item_name'     => 	__('New Categories Name', 'comettheme'),
			    'menu_name'         => 	__('Categories', 'comettheme'),
			    'not_found'			=>	__('No Categories Found', 'comettheme')
			],
			'public'			=>	true,
			'hierarchical'		=> true,
    		'show_admin_column' => true,
    		'query_var'         => true,
            'show_in_rest'      => true
		]);
	}


	add_action('init', 'register_stories_posttype');
	function register_stories_posttype(){
		register_post_type('stories', [
			'labels'	=>	[
				'name'			=>	__('Stories', 'charitybd'),
				'singular_name' => 	__( 'Storie', 'charitybd' ),
				'add_new'		=>	__('Add Storie', 'charitybd'),
				'all_items'		=>	__('All Stories', 'charitybd')
			],
			'public'		=>	true,
			'has_archive' 	=> 	true,
			'menu_icon'		=>	'dashicons-book',
			'supports'		=>	['title', 'editor', 'thumbnail', 'author']
		]);

		register_taxonomy('stories-taxonomy', 'stories',[
			'labels'			=>	[
				'name'				=>	__('Categories', 'comettheme'),
				'all_items' 		=> 	__('All Categories', 'comettheme'),
				'edit_item'			=> 	__('Edit Categories', 'comettheme'),
				'update_item'       => 	__('Update Categories', 'comettheme'),
			    'search_items'      => 	__('Search Categories', 'comettheme'),
			    'parent_item'       => 	__('Parent Categories', 'comettheme'),
			    'parent_item_colon' => 	__('Parent Categories:', 'comettheme'),
			    'edit_item'         => 	__('Edit Categories', 'comettheme'),
			    'update_item'       => 	__('Update Categories', 'comettheme'),
			    'add_new_item'      => 	__('Add New Categories', 'comettheme'),
			    'new_item_name'     => 	__('New Categories Name', 'comettheme'),
			    'menu_name'         => 	__('Categories', 'comettheme'),
			    'not_found'			=>	__('No Categories Found', 'comettheme')
			],
			'public'			=>	true,
			'hierarchical'		=> true,
    		'show_admin_column' => true,
    		'query_var'         => true,
            'show_in_rest'      => true
		]);
	}


	add_action('init', 'register_testimonials_posttype');
	function register_testimonials_posttype(){
		register_post_type('testimonials', [
			'labels'	=>	[
				'name'			=>	__('Testimonials', 'charitybd'),
				'singular_name' => 	__( 'Testimonial', 'charitybd' ),
				'add_new'		=>	__('Add Testimonial', 'charitybd'),
				'all_items'		=>	__('All Testimonials', 'charitybd')
			],
			'public'		=>	true,
			'has_archive' 	=> 	true,
			'menu_icon'		=>	'dashicons-format-status',
			'supports'		=>	['title', 'editor', 'thumbnail', 'author']
		]);

		register_taxonomy('testimonials-taxonomy', 'testimonials',[
			'labels'			=>	[
				'name'				=>	__('Categories', 'comettheme'),
				'all_items' 		=> 	__('All Categories', 'comettheme'),
				'edit_item'			=> 	__('Edit Categories', 'comettheme'),
				'update_item'       => 	__('Update Categories', 'comettheme'),
			    'search_items'      => 	__('Search Categories', 'comettheme'),
			    'parent_item'       => 	__('Parent Categories', 'comettheme'),
			    'parent_item_colon' => 	__('Parent Categories:', 'comettheme'),
			    'edit_item'         => 	__('Edit Categories', 'comettheme'),
			    'update_item'       => 	__('Update Categories', 'comettheme'),
			    'add_new_item'      => 	__('Add New Categories', 'comettheme'),
			    'new_item_name'     => 	__('New Categories Name', 'comettheme'),
			    'menu_name'         => 	__('Categories', 'comettheme'),
			    'not_found'			=>	__('No Categories Found', 'comettheme')
			],
			'public'			=>	true,
			'hierarchical'		=> true,
    		'show_admin_column' => true,
    		'query_var'         => true,
            'show_in_rest'      => true
		]);
	}



	add_action('init', 'register_teams_posttype');
	function register_teams_posttype(){
		register_post_type('teams', [
			'labels'	=>	[
				'name'			=>	__('Teams', 'charitybd'),
				'singular_name' => 	__( 'Team', 'charitybd' ),
				'add_new'		=>	__('Add Team', 'charitybd'),
				'all_items'		=>	__('All Teams', 'charitybd')
			],
			'public'		=>	true,
			'has_archive' 	=> 	true,
			'menu_icon'		=>	'dashicons-groups',
			'supports'		=>	['title', 'editor', 'thumbnail', 'author']
		]);
	}
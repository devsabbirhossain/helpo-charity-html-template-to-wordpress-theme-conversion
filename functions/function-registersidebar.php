<?php 

	add_action('widgets_init', 'custom_widget');
	function custom_widget(){
		register_sidebar([
			'name' 			=> 'Right Sidebar',
			'Description' 	=> 'Drag and Drop widgets',
			'id' 			=> 'right-sidebar',
			'before_widget' => '<div class="blog-post__category-holder">',
			'after_widget' 	=> '</div>',
			'before_title' 	=> '<h6 class="blog-post__title">',
			'after_title' 	=> '</h6>',
		]);

	}
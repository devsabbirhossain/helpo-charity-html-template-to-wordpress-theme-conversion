<?php
	
	add_action( 'vc_before_init', 'home_slider' );
	function home_slider() {
		vc_map([
			"name" 				=> __( "Home Slider", "charitybd" ),
			"base" 				=> "home-slider-1",
			"class" 			=> "",
			"category" 			=> __( "Custom", "charitybd"),
			'show_settings_on_create' => false,
			"icon"				=>	get_template_directory_uri()."/assets/img/element-icon-faq-toggle.svg"
		]);
	}


	add_action( 'vc_before_init', 'about_section' );
	function about_section() {
		vc_map([
			"name" 				=> __( "Home Page About", "charitybd" ),
			"base" 				=> "home-about",
			"class" 			=> "",
			"category" 			=> __( "Custom", "charitybd"),
			'show_settings_on_create' => true,
			"icon"				=>	get_template_directory_uri()."/assets/img/element-icon-faq-toggle.svg",
			"params" =>	array(
				array(
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter Heading", "charitybd" ),
					"param_name" 	=> "heading",
					"value" 		=> __( "About Us", "charitybd" ),
					"description" 	=> __( "Enter heading.", "charitybd" )
				),
				array(
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter Title", "charitybd" ),
					"param_name" 	=> "title",
					"value" 		=> __( "Help is Our", "charitybd" ),
					"description" 	=> __( "Enter about title.", "charitybd" )
				),
				array(
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter Subtitle", "charitybd" ),
					"param_name" 	=> "subtitle",
					"value" 		=> __( "Main Goal", "charitybd" ),
					"description" 	=> __( "Enter about Subtitle.", "charitybd" )
				),
				array(
					"type" 			=> "textarea",
					"class" 		=> "",
					"heading" 		=> __( "Enter About Content", "charitybd" ),
					"param_name" 	=> "content2",
					"value" 		=> __( "<strong>Thresher shark rudd African lungfish silverside, Red salmon rockfish grunion, garpike zebra danio king-of-the-salmon banjo catfish.</strong></p>
							<p>Sea chub demoiselle whalefish zebra lionfish mud cat pelican eel. Minnow snoek icefish velvet-belly shark, California halibut round stingray northern sea robin. Southern grayling trout-perch</p>
							<p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail, Canthigaster rostrata. Midshipman dartfish Modoc sucker, yellowtail kingfish basslet. Buri chimaera triplespine northern sea robin zingel lancetfish galjoen fish, catla wolffish, mosshead warbonnet", "charitybd" ),
					"description" 	=> __( "Enter Text Custom.", "charitybd" )
				),
				array(
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter Button Text", "charitybd" ),
					"param_name" 	=> "aboutbt",
					"value" 		=> __( "More About", "charitybd" ),
					"description" 	=> __( "Enter Button Text.", "charitybd" )
				),
				array(
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter Button Link", "charitybd" ),
					"param_name" 	=> "aboutbl",
					"value" 		=> __( "#", "charitybd" ),
					"description" 	=> __( "Enter Button Link.", "charitybd" )
				),
				array(
					"type" 			=> "attach_image",
					"class" 		=> "",
					"heading" 		=> __( "Select Front Image", "charitybd" ),
					"param_name" 	=> "imagebglink",
					"value" 		=> "",
					"description" 	=> __( "Select Image.", "charitybd" ),
					
				),
				array(
					"type" 			=> "attach_image",
					"class" 		=> "",
					"heading" 		=> __( "Select Backgraound Image", "charitybd" ),
					"param_name" 	=> "imagelink",
					"value" 		=> "",
					"description" 	=> __( "Select Backgraound Image.", "charitybd" ),
					
				),
				array(
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter Image Section Title", "charitybd" ),
					"param_name" 	=> "title2",
					"value" 		=> __( "We are Awesome Volounteer Team", "charitybd" ),
					"description" 	=> __( "Enter image Title.", "charitybd" )
				),
				array(
					"type" 			=> "textarea",
					"class" 		=> "",
					"heading" 		=> __( "Enter Image Section Content", "charitybd" ),
					"param_name" 	=> "content3",
					"value" 		=> __( "Gray eel-catfish longnose whiptail catfish smalleye squaretail queen danio unicorn fish shortnose greeneye fusilier fish silver carp nibbler sharksucker tench lookdown catfish", "charitybd" ),
					"description" 	=> __( "Enter image Custom.", "charitybd" )
				),
				array(
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter image button text", "charitybd" ),
					"param_name" 	=> "aboutbt2",
					"value" 		=> __( "Become a volounteer", "charitybd" ),
					"description" 	=> __( "Enter image button text.", "charitybd" )
				),
				array(
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter image button Link", "charitybd" ),
					"param_name" 	=> "aboutbl2",
					"value" 		=> __( "#", "charitybd" ),
					"description" 	=> __( "Enter image button Link.", "charitybd" )
				)
				
			)
		]);
	}


	add_action( 'vc_before_init', 'home_services' );
	function home_services() {
		vc_map([
			"name" 				=> __( "Services", "charitybd" ),
			"base" 				=> "home-services",
			"class" 			=> "",
			"category" 			=> __( "Custom", "charitybd"),
			'show_settings_on_create' => true,
			"icon"				=>	get_template_directory_uri()."/assets/img/element-icon-faq-toggle.svg",
			"params"			=>	[
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter Heading", "charitybd" ),
					"param_name" 	=> "heading",
					"value" 		=> __( "", "charitybd" ),
					"description" 	=> __( "Enter heading.", "charitybd" )
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter Title", "charitybd" ),
					"param_name" 	=> "title",
					"value" 		=> __( "", "charitybd" ),
					"description" 	=> __( "Enter Title.", "charitybd" )
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter Subtitle", "charitybd" ),
					"param_name" 	=> "subtitle",
					"value" 		=> __( "", "charitybd" ),
					"description" 	=> __( "Enter Subtitle.", "charitybd" )
				],
				[
					"type" 			=> "attach_image",
					"class" 		=> "",
					"heading" 		=> __( "Select 1st Image", "charitybd" ),
					"param_name" 	=> "imagelink",
					"value" 		=> "",
					"description" 	=> __( "Select Image.", "charitybd" ),
					
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter 1st Image Title", "charitybd" ),
					"param_name" 	=> "imagetitle",
					"value" 		=> __( "", "charitybd" ),
					"description" 	=> __( "Enter Image Title", "charitybd" )
				],
				[
					"type" 			=> "textarea",
					"class" 		=> "",
					"heading" 		=> __( "Enter 1st Image Content", "charitybd" ),
					"param_name" 	=> "imagecontent",
					"value" 		=> __( "", "charitybd" ),
					"description" 	=> __( "Enter Image Content", "charitybd" )
				],
				[
					"type" 			=> "attach_image",
					"class" 		=> "",
					"heading" 		=> __( "Select 2nd Image", "charitybd" ),
					"param_name" 	=> "imagelink2",
					"value" 		=> "",
					"description" 	=> __( "Select Image.", "charitybd" ),
					
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter 2nd Image Title", "charitybd" ),
					"param_name" 	=> "imagetitle2",
					"value" 		=> __( "", "charitybd" ),
					"description" 	=> __( "Enter Image Title", "charitybd" )
				],
				[
					"type" 			=> "textarea",
					"class" 		=> "",
					"heading" 		=> __( "Enter 2nd Image Content", "charitybd" ),
					"param_name" 	=> "imagecontent2",
					"value" 		=> __( "", "charitybd" ),
					"description" 	=> __( "Enter Image Content", "charitybd" )
				],
				[
					"type" 			=> "attach_image",
					"class" 		=> "",
					"heading" 		=> __( "Select 3rd Image", "charitybd" ),
					"param_name" 	=> "imagelink3",
					"value" 		=> "",
					"description" 	=> __( "Select Image.", "charitybd" ),
					
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter 3rd Image Title", "charitybd" ),
					"param_name" 	=> "imagetitle3",
					"value" 		=> __( "", "charitybd" ),
					"description" 	=> __( "Enter Image Title", "charitybd" )
				],
				[
					"type" 			=> "textarea",
					"class" 		=> "",
					"heading" 		=> __( "Enter 3rd Image Content", "charitybd" ),
					"param_name" 	=> "imagecontent3",
					"value" 		=> __( "", "charitybd" ),
					"description" 	=> __( "Enter Image Content", "charitybd" )
				],
				[
					"type" 			=> "attach_image",
					"class" 		=> "",
					"heading" 		=> __( "Select 4th Image", "charitybd" ),
					"param_name" 	=> "imagelink4",
					"value" 		=> "",
					"description" 	=> __( "Select Image.", "charitybd" ),
					
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter 4th Image Title", "charitybd" ),
					"param_name" 	=> "imagetitle4",
					"value" 		=> __( "", "charitybd" ),
					"description" 	=> __( "Enter Image Title", "charitybd" )
				],
				[
					"type" 			=> "textarea",
					"class" 		=> "",
					"heading" 		=> __( "Enter 4th Image Content", "charitybd" ),
					"param_name" 	=> "imagecontent4",
					"value" 		=> __( "", "charitybd" ),
					"description" 	=> __( "Enter Image Content", "charitybd" )
				],
			]
		]);
	}

	add_action( 'vc_before_init', 'home_subcriber' );
	function home_subcriber() {
		vc_map([
			"name" 				=> __( "Subscriber", "charitybd" ),
			"base" 				=> "home-subscribe",
			"class" 			=> "",
			"category" 			=> __( "Custom", "charitybd"),
			'show_settings_on_create' => true,
			"icon"				=>	get_template_directory_uri()."/assets/img/element-icon-faq-toggle.svg",
			"params"			=>	[
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter Subscriber Heading", "charitybd" ),
					"param_name" 	=> "heading",
					"value" 		=> __( "", "charitybd" ),
					"description" 	=> __( "Enter heading.", "charitybd" )
					//[contact-form-7 id="478" title="Subcribe Home Page Form"]
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter your shortcode", "charitybd" ),
					"param_name" 	=> "content",
					"value" 		=> __( "", "charitybd" ),
					"description" 	=> __( "Enter your shortcode.", "charitybd" )
				],
			]
		]);
	}

	add_action( 'vc_before_init', 'home_causes' );
	function home_causes() {
		vc_map([
			"name" 				=> __( "Causes", "charitybd" ),
			"base" 				=> "home-causes",
			"class" 			=> "",
			"category" 			=> __( "Custom", "charitybd"),
			'show_settings_on_create' => true,
			"icon"				=>	get_template_directory_uri()."/assets/img/element-icon-faq-toggle.svg",
			"params"			=>	[
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter heading", "charitybd" ),
					"param_name" 	=> "heading",
					"value" 		=> "",
					"description" 	=> __( "Enter heading", "charitybd" ),
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter title", "charitybd" ),
					"param_name" 	=> "title",
					"value" 		=> "",
					"description" 	=> __( "Enter title", "charitybd" ),
				],
				[
					"type" 			=> "textarea",
					"class" 		=> "",
					"heading" 		=> __( "Enter content_text", "charitybd" ),
					"param_name" 	=> "content_text",
					"value" 		=> "",
					"description" 	=> __( "Enter content_text", "charitybd" ),
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter page_botton_text", "charitybd" ),
					"param_name" 	=> "page_button_text",
					"value" 		=> "",
					"description" 	=> __( "Enter page_button_text", "charitybd" ),
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter page_button_link", "charitybd" ),
					"param_name" 	=> "page_button_link",
					"value" 		=> "",
					"description" 	=> __( "Enter page_button_link", "charitybd" ),
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter counter_title", "charitybd" ),
					"param_name" 	=> "counter_title",
					"value" 		=> "",
					"description" 	=> __( "Enter counter_title", "charitybd" ),
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter counter_number", "charitybd" ),
					"param_name" 	=> "counter_number",
					"value" 		=> "",
					"description" 	=> __( "Enter counter_number", "charitybd" ),
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter counter_symbol", "charitybd" ),
					"param_name" 	=> "counter_symbol",
					"value" 		=> "",
					"description" 	=> __( "Enter counter_symbol", "charitybd" ),
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter counter_title2", "charitybd" ),
					"param_name" 	=> "counter_title2",
					"value" 		=> "",
					"description" 	=> __( "Enter counter_title2", "charitybd" ),
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter counter_number2", "charitybd" ),
					"param_name" 	=> "counter_number2",
					"value" 		=> "",
					"description" 	=> __( "Enter counter_number2", "charitybd" ),
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter counter_symbol3", "charitybd" ),
					"param_name" 	=> "counter_symbol3",
					"value" 		=> "",
					"description" 	=> __( "Enter counter_symbol3", "charitybd" ),
				],
				[
					"type" 			=> "attach_image",
					"class" 		=> "",
					"heading" 		=> __( "Select Backgraound Image", "charitybd" ),
					"param_name" 	=> "bg_image",
					"value" 		=> "",
					"description" 	=> __( "Select Backgraound Image", "charitybd" ),
				]			
			]
		]);
	}

	add_action( 'vc_before_init', 'home_project' );
	function home_project() {
		vc_map([
			"name" 				=> __( "Causes Prortfolio", "charitybd" ),
			"base" 				=> "home-project",
			"class" 			=> "",
			"category" 			=> __( "Custom", "charitybd"),
			'show_settings_on_create' => true,
			"icon"				=>	get_template_directory_uri()."/assets/img/element-icon-faq-toggle.svg",
			"params"			=>	[
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter heading", "charitybd" ),
					"param_name" 	=> "heading",
					"value" 		=> "",
					"description" 	=> __( "Enter heading", "charitybd" ),
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter title", "charitybd" ),
					"param_name" 	=> "title",
					"value" 		=> "",
					"description" 	=> __( "Enter title", "charitybd" ),
				],
				[
					"type" 			=> "textarea",
					"class" 		=> "",
					"heading" 		=> __( "Enter content_text", "charitybd" ),
					"param_name" 	=> "content_text",
					"value" 		=> "",
					"description" 	=> __( "Enter content_text", "charitybd" ),
				]
			]
		]);
	}

	add_action( 'vc_before_init', 'home_events' );
	function home_events() {
		vc_map([
			"name" 				=> __( "Charity Events", "charitybd" ),
			"base" 				=> "home-events",
			"class" 			=> "",
			"category" 			=> __( "Custom", "charitybd"),
			'show_settings_on_create' => true,
			"icon"				=>	get_template_directory_uri()."/assets/img/element-icon-faq-toggle.svg",
			"params"			=>	[
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter heading", "charitybd" ),
					"param_name" 	=> "heading",
					"value" 		=> "",
					"description" 	=> __( "Enter heading", "charitybd" ),
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter Title", "charitybd" ),
					"param_name" 	=> "title",
					"value" 		=> "",
					"description" 	=> __( "Enter Title", "charitybd" ),
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter Content Text", "charitybd" ),
					"param_name" 	=> "content_text",
					"value" 		=> "",
					"description" 	=> __( "Enter Content Text", "charitybd" ),
				],
				[
					"type" 			=> "attach_image",
					"class" 		=> "",
					"heading" 		=> __( "Select Backgraound Image", "charitybd" ),
					"param_name" 	=> "bg_image",
					"value" 		=> "",
					"description" 	=> __( "Select Backgraound Image", "charitybd" ),
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter Button Text", "charitybd" ),
					"param_name" 	=> "page_button_text",
					"value" 		=> "",
					"description" 	=> __( "Enter Button Text", "charitybd" ),
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter Button link", "charitybd" ),
					"param_name" 	=> "page_button_link",
					"value" 		=> "",
					"description" 	=> __( "Enter Button link", "charitybd" ),
				]
			]
		]);
	}

	add_action( 'vc_before_init', 'home_becomevolunteer' );
	function home_becomevolunteer() {
		vc_map([
			"name" 				=> __( "Be Volunteer", "charitybd" ),
			"base" 				=> "home-volunteer",
			"class" 			=> "",
			"category" 			=> __( "Custom", "charitybd"),
			'show_settings_on_create' => true,
			"icon"				=>	get_template_directory_uri()."/assets/img/element-icon-faq-toggle.svg",
			"params"			=>	[
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter heading", "charitybd" ),
					"param_name" 	=> "heading",
					"value" 		=> "",
					"description" 	=> __( "Enter heading", "charitybd" ),
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter Title", "charitybd" ),
					"param_name" 	=> "title",
					"value" 		=> "",
					"description" 	=> __( "Enter Title", "charitybd" ),
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter Content Text", "charitybd" ),
					"param_name" 	=> "content_text",
					"value" 		=> "",
					"description" 	=> __( "Enter Content Text", "charitybd" ),
				],
				[
					"type" 			=> "attach_image",
					"class" 		=> "",
					"heading" 		=> __( "Select Backgraound Image", "charitybd" ),
					"param_name" 	=> "bg_image",
					"value" 		=> "",
					"description" 	=> __( "Select Backgraound Image", "charitybd" ),
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter Button Text", "charitybd" ),
					"param_name" 	=> "page_button_text",
					"value" 		=> "",
					"description" 	=> __( "Enter Button Text", "charitybd" ),
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter Button link", "charitybd" ),
					"param_name" 	=> "page_button_link",
					"value" 		=> "",
					"description" 	=> __( "Enter Button link", "charitybd" ),
				]
			]
		]);
	}

	

	add_action( 'vc_before_init', 'charity_blog' );
	function charity_blog() {
		vc_map([
			"name" 				=> __( "Charity Blog", "charitybd" ),
			"base" 				=> "home-blog",
			"class" 			=> "",
			"category" 			=> __( "Custom", "charitybd"),
			'show_settings_on_create' => true,
			"icon"				=>	get_template_directory_uri()."/assets/img/element-icon-faq-toggle.svg",
			"params"			=>	[
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter heading", "charitybd" ),
					"param_name" 	=> "heading",
					"value" 		=> "",
					"description" 	=> __( "Enter heading", "charitybd" ),
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter title", "charitybd" ),
					"param_name" 	=> "title",
					"value" 		=> "",
					"description" 	=> __( "Enter title", "charitybd" ),
				],
				[
					"type" 			=> "attach_image",
					"class" 		=> "",
					"heading" 		=> __( "Select Backgraound Image", "charitybd" ),
					"param_name" 	=> "bg_image",
					"value" 		=> "",
					"description" 	=> __( "Select Backgraound Image", "charitybd" ),
				],
			]
		]);
	}

	//////Testimonial Start///
	add_action( 'vc_before_init', 'charity_image_testimonial' );
	function charity_image_testimonial() {
		vc_map([
			"name" 				=> __( "Image Testimonial", "charitybd" ),
			"base" 				=> "image-testimonial",
			"class" 			=> "",
			"category" 			=> __( "Custom", "charitybd"),
			"show_settings_on_create" => true,
			"icon"				=>	get_template_directory_uri()."/assets/img/element-icon-faq-toggle.svg",
			"params"			=>	[
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter heading", "charitybd" ),
					"param_name" 	=> "heading",
					"value" 		=> "",
					"description" 	=> __( "Enter heading", "charitybd" ),
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter title", "charitybd" ),
					"param_name" 	=> "title",
					"value" 		=> "",
					"description" 	=> __( "Enter title", "charitybd" ),
				]
			]
		]);
	}

	add_action( 'vc_before_init', 'charity_text_testimonial' );
	function charity_text_testimonial() {
		vc_map([
			"name" 				=> __( "Text Testimonial", "charitybd" ),
			"base" 				=> "text-testimonial",
			"class" 			=> "",
			"category" 			=> __( "Custom", "charitybd"),
			'show_settings_on_create' => true,
			"icon"				=>	get_template_directory_uri()."/assets/img/element-icon-faq-toggle.svg",
			"params"			=>	[
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter heading", "charitybd" ),
					"param_name" 	=> "heading",
					"value" 		=> "",
					"description" 	=> __( "Enter heading", "charitybd" ),
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter title", "charitybd" ),
					"param_name" 	=> "title",
					"value" 		=> "",
					"description" 	=> __( "Enter title", "charitybd" ),
				],
				[
					"type" 			=> "attach_image",
					"class" 		=> "",
					"heading" 		=> __( "Select Backgraound Image", "charitybd" ),
					"param_name" 	=> "bg_image",
					"value" 		=> "",
					"description" 	=> __( "Select Backgraound Image", "charitybd" ),
				]
			]
		]);
	}

	//////Testimonial End///


	add_action( 'vc_before_init', 'charity_FAQ' );
	function charity_FAQ() {
		vc_map([
			"name" 				=> __( "Add FAQ", "charitybd" ),
			"base" 				=> "faq",
			"class" 			=> "",
			"category" 			=> __( "Custom", "charitybd"),
			"show_settings_on_create" => true,
			"icon"				=>	get_template_directory_uri()."/assets/img/element-icon-faq-toggle.svg",
			"params"			=>	[
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter FAQ Heading", "charitybd" ),
					"param_name" 	=> "heading",
					"value" 		=> __( "", "charitybd" ),
					"description" 	=> __( "Enter FAQ Heading.", "charitybd" )
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter FAQ Title", "charitybd" ),
					"param_name" 	=> "title",
					"value" 		=> __( "", "charitybd" ),
					"description" 	=> __( "Enter FAQ Title", "charitybd" )
				],
				array(
					"type" 			=> "attach_image",
					"class" 		=> "",
					"heading" 		=> __( "Select Image", "charitybd" ),
					"param_name" 	=> "bg_image",
					"value" 		=> "",
					"description" 	=> __( "Select Image or upload image", "charitybd" ),
					
				),
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter Image Title", "charitybd" ),
					"param_name" 	=> "bg_image_title",
					"value" 		=> __( "", "charitybd" ),
					"description" 	=> __( "Enter Image Title", "charitybd" )
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter Image Content", "charitybd" ),
					"param_name" 	=> "bg_image_content",
					"value" 		=> __( "", "charitybd" ),
					"description" 	=> __( "Enter Image Content", "charitybd" )
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter Image Button Text", "charitybd" ),
					"param_name" 	=> "bg_image_button_text",
					"value" 		=> __( "", "charitybd" ),
					"description" 	=> __( "Enter Image Button Text", "charitybd" )
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter Image Button Link", "charitybd" ),
					"param_name" 	=> "bg_image_button_link",
					"value" 		=> __( "", "charitybd" ),
					"description" 	=> __( "Enter Image Button Link", "charitybd" )
				],
			]
		]);

	}

	add_action( 'vc_before_init', 'charity_custom_bottom_bg' );
	function charity_custom_bottom_bg() {
		vc_map([
			"name" 				=> __( "Add Bottom Backgraound Image", "charitybd" ),
			"base" 				=> "home-bottom-background",
			"class" 			=> "",
			"category" 			=> __( "Custom", "charitybd"),
			"show_settings_on_create" => true,
			"icon"				=>	get_template_directory_uri()."/assets/img/element-icon-faq-toggle.svg",
			"params"			=>	[
				[
					"type" 			=> "attach_image",
					"class" 		=> "",
					"heading" 		=> __( "Select Image", "charitybd" ),
					"param_name" 	=> "image_link",
					"value" 		=> "",
					"description" 	=> __( "Select Image or upload image", "charitybd" ),
				]			
			]
		]);
	}

	add_action( 'vc_before_init', 'charity_custom_bottom_background_full' );
	function charity_custom_bottom_background_full() {
		vc_map([
			"name" 				=> __( "Bottom Background Full Width", "charitybd" ),
			"base" 				=> "home-bottom-background-full",
			"class" 			=> "",
			"category" 			=> __( "Custom", "charitybd"),
			"show_settings_on_create" => true,
			"icon"				=>	get_template_directory_uri()."/assets/img/element-icon-faq-toggle.svg",
			"params"			=>	[
				[
					"type" 			=> "attach_image",
					"class" 		=> "",
					"heading" 		=> __( "Select Image", "charitybd" ),
					"param_name" 	=> "image_link",
					"value" 		=> "",
					"description" 	=> __( "Select Image or upload image", "charitybd" ),
				]			
			]
		]);
	}

	add_action( 'vc_before_init', 'charity_custom_top_background_full' );
	function charity_custom_top_background_full() {
		vc_map([
			"name" 				=> __( "Top Background Full Width", "charitybd" ),
			"base" 				=> "home-top-background-full",
			"class" 			=> "",
			"category" 			=> __( "Custom", "charitybd"),
			"show_settings_on_create" => true,
			"icon"				=>	get_template_directory_uri()."/assets/img/element-icon-faq-toggle.svg",
			"params"			=>	[
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter Top Heading", "charitybd" ),
					"param_name" 	=> "page_top_heading",
					"value" 		=> "",
					"description" 	=> __( "Enter Top Heading", "charitybd" ),
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter Website Title", "charitybd" ),
					"param_name" 	=> "website_title",
					"value" 		=> "",
					"description" 	=> __( "Enter Website Title", "charitybd" ),
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter Page Title Before Text", "charitybd" ),
					"param_name" 	=> "title_prename",
					"value" 		=> "",
					"description" 	=> __( "Enter Page Title Before Text", "charitybd" ),
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Page Title", "charitybd" ),
					"param_name" 	=> "page_title",
					"value" 		=> "",
					"description" 	=> __( "Enter Page Title", "charitybd" ),
				],
				[
					"type" 			=> "attach_image",
					"class" 		=> "",
					"heading" 		=> __( "Select Image", "charitybd" ),
					"param_name" 	=> "bg_image",
					"value" 		=> "",
					"description" 	=> __( "Select Image or upload image", "charitybd" ),
				],			
			]
		]);
	}


	add_action( 'vc_before_init', 'charity_custom_all_causes' );
	function charity_custom_all_causes() {
		vc_map([
			"name" 				=> __( "All Causes", "charitybd" ),
			"base" 				=> "all-causes",
			"class" 			=> "",
			"category" 			=> __( "Custom", "charitybd"),
			"show_settings_on_create" => false,
			"icon"				=>	get_template_directory_uri()."/assets/img/element-icon-faq-toggle.svg",
		]);
	}

	add_action( 'vc_before_init', 'charity_custom_all_events' );
	function charity_custom_all_events() {
		vc_map([
			"name" 				=> __( "All Events", "charitybd" ),
			"base" 				=> "all-events",
			"class" 			=> "",
			"category" 			=> __( "Custom", "charitybd"),
			"show_settings_on_create" => true,
			"icon"				=>	get_template_directory_uri()."/assets/img/element-icon-faq-toggle.svg",
			"params"			=>	[
				[
					"type" 			=> "attach_image",
					"class" 		=> "",
					"heading" 		=> __( "Select Background Image", "charitybd" ),
					"param_name" 	=> "image_link",
					"value" 		=> "",
					"description" 	=> __( "Select Background Image", "charitybd" ),
				]			
			]
		]);
	}


	add_action( 'vc_before_init', 'charity_custom_all_stories' );
	function charity_custom_all_stories() {
		vc_map([
			"name" 				=> __( "All Stories", "charitybd" ),
			"base" 				=> "all-stories",
			"class" 			=> "",
			"category" 			=> __( "Custom", "charitybd"),
			"show_settings_on_create" => false,
			"icon"				=>	get_template_directory_uri()."/assets/img/element-icon-faq-toggle.svg"
		]);
	}

	add_action( 'vc_before_init', 'charity_custom_contact_details' );
	function charity_custom_contact_details() {
		vc_map([
			"name" 				=> __( "Contact Details", "charitybd" ),
			"base" 				=> "contact-address",
			"class" 			=> "",
			"category" 			=> __( "Custom", "charitybd"),
			"show_settings_on_create" => false,
			"icon"				=>	get_template_directory_uri()."/assets/img/element-icon-faq-toggle.svg"
		]);
	}


	add_action( 'vc_before_init', 'charity_custom_contact_map_form' );
	function charity_custom_contact_map_form() {
		vc_map([
			"name" 				=> __( "Contact Form With Map", "charitybd" ),
			"base" 				=> "contact-address-map-form2",
			"class" 			=> "",
			"category" 			=> __( "Custom", "charitybd"),
			"show_settings_on_create" => true,
			"icon"				=>	get_template_directory_uri()."/assets/img/element-icon-faq-toggle.svg",
			"params"			=>	[
				[
					"type" 			=> "textarea",
					"class" 		=> "",
					"heading" 		=> __( "Enter Contact Form Shortcode", "charitybd" ),
					"param_name" 	=> "content",
					"value" 		=> "",
					"description" 	=> __( "Enter Contact Form Shortcode", "charitybd" ),
				],
				[
					"type" 			=> "textarea",
					"class" 		=> "",
					"heading" 		=> __( "Enter Google Map Embed Code", "charitybd" ),
					"param_name" 	=> "google_map_embed_html",
					"value" 		=> "",
					"description" 	=> __( "Enter Google Map Embed Code", "charitybd" ),
				]			
			]
		]);
	}



	add_action( 'vc_before_init', 'charity_custom_team_details' );
	function charity_custom_team_details() {
		vc_map([
			"name" 				=> __( "Team Details", "charitybd" ),
			"base" 				=> "about-team",
			"class" 			=> "",
			"category" 			=> __( "Custom", "charitybd"),
			"show_settings_on_create" => true,
			"icon"				=>	get_template_directory_uri()."/assets/img/element-icon-faq-toggle.svg",
			"params"			=>	[
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter Heading", "charitybd" ),
					"param_name" 	=> "heading",
					"value" 		=> "",
					"description" 	=> __( "Enter Heading", "charitybd" ),
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter Title", "charitybd" ),
					"param_name" 	=> "title",
					"value" 		=> "",
					"description" 	=> __( "Enter Title", "charitybd" ),
				]			
			]
		]);
	}


	add_action( 'vc_before_init', 'charity_custom_about_charity' );
	function charity_custom_about_charity() {
		vc_map([
			"name" 				=> __( "About Charity", "charitybd" ),
			"base" 				=> "about-us",
			"class" 			=> "",
			"category" 			=> __( "Custom", "charitybd"),
			"show_settings_on_create" => true,
			"icon"				=>	get_template_directory_uri()."/assets/img/element-icon-faq-toggle.svg",
			"params"			=>	[
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter Heading", "charitybd" ),
					"param_name" 	=> "heading",
					"value" 		=> "",
					"description" 	=> __( "Enter Heading", "charitybd" ),
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter Title", "charitybd" ),
					"param_name" 	=> "title",
					"value" 		=> "",
					"description" 	=> __( "Enter Title", "charitybd" ),
				],
				[
					"type" 			=> "textarea",
					"class" 		=> "",
					"heading" 		=> __( "Enter Subtitle", "charitybd" ),
					"param_name" 	=> "subtitle",
					"value" 		=> "",
					"description" 	=> __( "Enter Subtitle", "charitybd" ),
				],
				[
					"type" 			=> "textarea",
					"class" 		=> "",
					"heading" 		=> __( "Enter Content Text", "charitybd" ),
					"param_name" 	=> "content_text",
					"value" 		=> "",
					"description" 	=> __( "Enter Content Text", "charitybd" ),
				],
				[
					"type" 			=> "attach_image",
					"class" 		=> "",
					"heading" 		=> __( "Select Image", "charitybd" ),
					"param_name" 	=> "imagelink",
					"value" 		=> "",
					"description" 	=> __( "Select Image", "charitybd" ),
				],
				[
					"type" 			=> "attach_image",
					"class" 		=> "",
					"heading" 		=> __( "Select Background Image", "charitybd" ),
					"param_name" 	=> "bg_image",
					"value" 		=> "",
					"description" 	=> __( "Select Background Image", "charitybd" ),
				]			
			]
		]);
	}


	add_action( 'vc_before_init', 'charity_custom_about_charity_mission' );
	function charity_custom_about_charity_mission() {
		vc_map([
			"name" 				=> __( "About Mission", "charitybd" ),
			"base" 				=> "about-mission",
			"class" 			=> "",
			"category" 			=> __( "Custom", "charitybd"),
			"show_settings_on_create" => true,
			"icon"				=>	get_template_directory_uri()."/assets/img/element-icon-faq-toggle.svg",
			"params"			=>	[
				
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter Title", "charitybd" ),
					"param_name" 	=> "title",
					"value" 		=> "",
					"description" 	=> __( "Enter Title", "charitybd" ),
				],
				[
					"type" 			=> "textarea",
					"class" 		=> "",
					"heading" 		=> __( "Enter Subtitle", "charitybd" ),
					"param_name" 	=> "subtitle",
					"value" 		=> "",
					"description" 	=> __( "Enter Subtitle", "charitybd" ),
				],
				[
					"type" 			=> "textarea",
					"class" 		=> "",
					"heading" 		=> __( "Enter Content Text", "charitybd" ),
					"param_name" 	=> "content_text",
					"value" 		=> "",
					"description" 	=> __( "Enter Content Text", "charitybd" ),
				]			
			]
		]);
	}


	add_action( 'vc_before_init', 'charity_custom_video_blog' );
	function charity_custom_video_blog() {
		vc_map([
			"name" 				=> __( "Video Blog", "charitybd" ),
			"base" 				=> "video-blog",
			"class" 			=> "",
			"category" 			=> __( "Custom", "charitybd"),
			"show_settings_on_create" => true,
			"icon"				=>	get_template_directory_uri()."/assets/img/element-icon-faq-toggle.svg",
			"params"			=>	[
				
				[
					"type" 			=> "attach_image",
					"class" 		=> "",
					"heading" 		=> __( "Select Image", "charitybd" ),
					"param_name" 	=> "video_cover_img",
					"value" 		=> "",
					"description" 	=> __( "Select Image", "charitybd" ),
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter Video link", "charitybd" ),
					"param_name" 	=> "video_link",
					"value" 		=> "",
					"description" 	=> __( "Enter Video link", "charitybd" ),
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter Content Text", "charitybd" ),
					"param_name" 	=> "video_title",
					"value" 		=> "",
					"description" 	=> __( "Enter Content Text", "charitybd" ),
				],
				[
					"type" 			=> "attach_image",
					"class" 		=> "",
					"heading" 		=> __( "Enter Content Text", "charitybd" ),
					"param_name" 	=> "bg_image",
					"value" 		=> "",
					"description" 	=> __( "Enter Content Text", "charitybd" ),
				]			
			]
		]);
	}


	add_action( 'vc_before_init', 'charity_custom_statistics' );
	function charity_custom_statistics() {
		vc_map([
			"name" 				=> __( "Add Statistics", "charitybd" ),
			"base" 				=> "about-statistics",
			"class" 			=> "",
			"category" 			=> __( "Custom", "charitybd"),
			"show_settings_on_create" => true,
			"icon"				=>	get_template_directory_uri()."/assets/img/element-icon-faq-toggle.svg",
			"params"			=>	[
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter Heading", "charitybd" ),
					"param_name" 	=> "heading",
					"value" 		=> "",
					"description" 	=> __( "Enter Heading", "charitybd" ),
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter Title", "charitybd" ),
					"param_name" 	=> "title",
					"value" 		=> "",
					"description" 	=> __( "Enter Title", "charitybd" ),
				],
				[
					"type" 			=> "attach_image",
					"class" 		=> "",
					"heading" 		=> __( "Select 1st Background Image", "charitybd" ),
					"param_name" 	=> "bg_image",
					"value" 		=> "",
					"description" 	=> __( "Select 1st Background Image", "charitybd" ),
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter 1st Counter Number", "charitybd" ),
					"param_name" 	=> "counter_number",
					"value" 		=> "",
					"description" 	=> __( "Enter 1st Counter Number", "charitybd" ),
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter 1st Counter Symbol", "charitybd" ),
					"param_name" 	=> "counter_symbol",
					"value" 		=> "",
					"description" 	=> __( "Enter 1st Counter Symbol", "charitybd" ),
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter 1st After Counter Text", "charitybd" ),
					"param_name" 	=> "counter_symbol_after",
					"value" 		=> "",
					"description" 	=> __( "Enter 1st After Counter Text", "charitybd" ),
				],
				[
					"type" 			=> "attach_image",
					"class" 		=> "",
					"heading" 		=> __( "Select 2nd Background Image", "charitybd" ),
					"param_name" 	=> "bg_image2",
					"value" 		=> "",
					"description" 	=> __( "Select 2nd Background Image", "charitybd" ),
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter 2nd Counter Number", "charitybd" ),
					"param_name" 	=> "counter_number2",
					"value" 		=> "",
					"description" 	=> __( "Enter 2nd Counter Number", "charitybd" ),
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter 2nd Counter Symbol", "charitybd" ),
					"param_name" 	=> "counter_symbol2",
					"value" 		=> "",
					"description" 	=> __( "Enter 2nd Counter Symbol", "charitybd" ),
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter 2nd After Counter Text", "charitybd" ),
					"param_name" 	=> "counter_symbol_after2",
					"value" 		=> "",
					"description" 	=> __( "Enter 2nd After Counter Text", "charitybd" ),
				],
				[
					"type" 			=> "attach_image",
					"class" 		=> "",
					"heading" 		=> __( "Select 3rd Background Image", "charitybd" ),
					"param_name" 	=> "bg_image3",
					"value" 		=> "",
					"description" 	=> __( "Select 3rd Background Image", "charitybd" ),
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter 3rd Counter Number", "charitybd" ),
					"param_name" 	=> "counter_number3",
					"value" 		=> "",
					"description" 	=> __( "Enter 3rd Counter Number", "charitybd" ),
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter 3rd Counter Symbol", "charitybd" ),
					"param_name" 	=> "counter_symbol3",
					"value" 		=> "",
					"description" 	=> __( "Enter 3rd Counter Symbol", "charitybd" ),
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter 3rd After Counter Text", "charitybd" ),
					"param_name" 	=> "counter_symbol_after3",
					"value" 		=> "",
					"description" 	=> __( "Enter 3rd After Counter Text", "charitybd" ),
				],
				[
					"type" 			=> "attach_image",
					"class" 		=> "",
					"heading" 		=> __( "Select 4th Background Image", "charitybd" ),
					"param_name" 	=> "bg_image4",
					"value" 		=> "",
					"description" 	=> __( "Select 4th Background Image", "charitybd" ),
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter 4th Counter Number", "charitybd" ),
					"param_name" 	=> "counter_number4",
					"value" 		=> "",
					"description" 	=> __( "Enter 4th Counter Number", "charitybd" ),
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter 4th Counter Symbol", "charitybd" ),
					"param_name" 	=> "counter_symbol4",
					"value" 		=> "",
					"description" 	=> __( "Enter 4th Counter Symbol", "charitybd" ),
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter 4th After Counter Text", "charitybd" ),
					"param_name" 	=> "counter_symbol_after4",
					"value" 		=> "",
					"description" 	=> __( "Enter 4th After Counter Text", "charitybd" ),
				],			
			]
		]);
	}


	add_action( 'vc_before_init', 'charity_custom_volunteer_form' );
	function charity_custom_volunteer_form() {
		vc_map([
			"name" 				=> __( "Volunteer Form", "charitybd" ),
			"base" 				=> "volunteer-form",
			"class" 			=> "",
			"category" 			=> __( "Custom", "charitybd"),
			"show_settings_on_create" => true,
			"icon"				=>	get_template_directory_uri()."/assets/img/element-icon-faq-toggle.svg",
			"params"			=>	[
				
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter Title", "charitybd" ),
					"param_name" 	=> "title",
					"value" 		=> "",
					"description" 	=> __( "Enter Title", "charitybd" ),
				],
				[
					"type" 			=> "textarea",
					"class" 		=> "",
					"heading" 		=> __( "Enter Subtitle", "charitybd" ),
					"param_name" 	=> "subtitle",
					"value" 		=> "",
					"description" 	=> __( "Enter Subtitle", "charitybd" ),
				],
				[
					"type" 			=> "textarea",
					"class" 		=> "",
					"heading" 		=> __( "Enter Form Shortcode", "charitybd" ),
					"param_name" 	=> "content",
					"value" 		=> "",
					"description" 	=> __( "Enter Form Shortcode", "charitybd" ),
				],
				[
					"type" 			=> "textarea",
					"class" 		=> "",
					"heading" 		=> __( "Enter Content Text", "charitybd" ),
					"param_name" 	=> "small_text",
					"value" 		=> "",
					"description" 	=> __( "Enter Content Text", "charitybd" ),
				]			
			]
		]);
	}

	add_action( 'vc_before_init', 'charity_custom_volunteer_welcome' );
	function charity_custom_volunteer_welcome() {
		vc_map([
			"name" 				=> __( "Volunteer Welcome Blog", "charitybd" ),
			"base" 				=> "volunteer-welcome",
			"class" 			=> "",
			"category" 			=> __( "Custom", "charitybd"),
			"show_settings_on_create" => true,
			"icon"				=>	get_template_directory_uri()."/assets/img/element-icon-faq-toggle.svg",
			"params"			=>	[
				
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter Heading", "charitybd" ),
					"param_name" 	=> "heading",
					"value" 		=> "",
					"description" 	=> __( "Enter Heading", "charitybd" ),
				],
				[
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> __( "Enter Title", "charitybd" ),
					"param_name" 	=> "title",
					"value" 		=> "",
					"description" 	=> __( "Enter Title", "charitybd" ),
				],
				[
					"type" 			=> "textarea",
					"class" 		=> "",
					"heading" 		=> __( "Enter Content Text", "charitybd" ),
					"param_name" 	=> "content_text",
					"value" 		=> "",
					"description" 	=> __( "Enter Content Text", "charitybd" ),
				],
				[
					"type" 			=> "attach_image",
					"class" 		=> "",
					"heading" 		=> __( "Select Image", "charitybd" ),
					"param_name" 	=> "imagelink",
					"value" 		=> "",
					"description" 	=> __( "Select Image", "charitybd" ),
				],
				[
					"type" 			=> "attach_image",
					"class" 		=> "",
					"heading" 		=> __( "Select Background Image", "charitybd" ),
					"param_name" 	=> "bg_image",
					"value" 		=> "",
					"description" 	=> __( "Select Background Image", "charitybd" ),
				]			
			]
		]);
	}




	vc_remove_element( "vc_message" );
	vc_remove_element( "vc_round_chart" );
	vc_remove_element( "vc_pie" );
	vc_remove_element( "vc_progress_bar" );
	//vc_remove_element( "vc_row" );
	vc_remove_element( "vc_gmaps" );
	vc_remove_element( "vc_line_chart" );
	//vc_remove_element( "vc_section" );
	vc_remove_element( "vc_button" );
	vc_remove_element( "vc_icon" );
	vc_remove_element( "vc_separator" );
	vc_remove_element( "vc_text_separator" );
	vc_remove_element( "vc_posts_slider" );
	vc_remove_element( "vc_facebook" );
	vc_remove_element( "vc_zigzag" );
	vc_remove_element( "vc_video" );
	vc_remove_element( "vc_flickr" );
	vc_remove_element( "vc_pinterest" );
	vc_remove_element( "vc_tweetmeme" );
	vc_remove_element( "vc_raw_html" );
	vc_remove_element( "vc_raw_js" );
	vc_remove_element( "vc_images_carousel" );
	vc_remove_element( "vc_gallery" );
	vc_remove_element( "vc_empty_space" );
	vc_remove_element( "vc_accordion" );
	vc_remove_element( "vc_btn" );
	vc_remove_element( "vc_custom_heading" );
	vc_remove_element( "vc_hoverbox" );
	vc_remove_element( "vc_cta" );
	vc_remove_element( "vc_gutenberg" );
	vc_remove_element( "vc_single_image" );
	vc_remove_element( "vc_tta_pageable_section" );
	vc_remove_element( "vc_widget_sidebar" );

	vc_remove_element( "vc_wp_archives" );
	vc_remove_element( "vc_wp_calendar" );
	vc_remove_element( "vc_wp_categories" );
	vc_remove_element( "vc_wp_custommenu" );
	vc_remove_element( "vc_wp_links" );
	vc_remove_element( "vc_wp_meta" );
	vc_remove_element( "vc_wp_pages" );
	vc_remove_element( "vc_wp_posts" );
	vc_remove_element( "vc_wp_recentcomments" );
	vc_remove_element( "vc_wp_search" );
	vc_remove_element( "vc_wp_tagcloud" );
	vc_remove_element( "vc_wp_text" );
	vc_remove_element( "vc_wp_rss" );
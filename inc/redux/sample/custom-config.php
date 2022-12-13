<?php
/**
 * ReduxFramework Sample Config File
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'Redux' ) ) {
	return;
}

// This is your option name where all the Redux data is stored.
$opt_name = 'redux_demo';  // YOU MUST CHANGE THIS.  DO NOT USE 'redux_demo' IN YOUR PROJECT!!!

// Uncomment to disable demo mode.
/* Redux::disable_demo(); */  // phpcs:ignore Squiz.PHP.CommentedOutCode

$dir = dirname( __FILE__ ) . DIRECTORY_SEPARATOR;

/*
 * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
 */

// Background Patterns Reader.
$sample_patterns_path = Redux_Core::$dir . '../sample/patterns/';
$sample_patterns_url  = Redux_Core::$url . '../sample/patterns/';
$sample_patterns      = array();

if ( is_dir( $sample_patterns_path ) ) {
	$sample_patterns_dir = opendir( $sample_patterns_path );

	if ( $sample_patterns_dir ) {

		// phpcs:ignore WordPress.CodeAnalysis.AssignmentInCondition
		while ( false !== ( $sample_patterns_file = readdir( $sample_patterns_dir ) ) ) {
			if ( stristr( $sample_patterns_file, '.png' ) !== false || stristr( $sample_patterns_file, '.jpg' ) !== false ) {
				$name              = explode( '.', $sample_patterns_file );
				$name              = str_replace( '.' . end( $name ), '', $sample_patterns_file );
				$sample_patterns[] = array(
					'alt' => $name,
					'img' => $sample_patterns_url . $sample_patterns_file,
				);
			}
		}
	}
}

// Used to except HTML tags in description arguments where esc_html would remove.
$kses_exceptions = array(
	'a'      => array(
		'href' => array(),
	),
	'strong' => array(),
	'br'     => array(),
	'code'   => array(),
);

/*
 * ---> BEGIN ARGUMENTS
 */

/**
 * All the possible arguments for Redux.
 * For full documentation on arguments, please refer to: https://devs.redux.io/core/arguments/
 */
$theme = wp_get_theme(); // For use with some settings. Not necessary.

// TYPICAL -> Change these values as you need/desire.
$args = array(
	// This is where your data is stored in the database and also becomes your global variable name.
	'opt_name'                  => $opt_name,

	// Name that appears at the top of your panel.
	'display_name'              => $theme->get( 'Name' ),

	// Version that appears at the top of your panel.
	'display_version'           => $theme->get( 'Version' ),

	// Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only).
	'menu_type'                 => 'submenu',

	// Show the sections below the admin menu item or not.
	'allow_sub_menu'            => true,

	// The text to appear in the admin menu.
	'menu_title'                => esc_html__( 'Theme Options', 'charitybd' ),

	// The text to appear on the page title.
	'page_title'                => esc_html__( 'Theme Options', 'charitybd' ),

	// Disable to create your own Google fonts loader.
	'disable_google_fonts_link' => false,

	// Show the panel pages on the admin bar.
	'admin_bar'                 => true,

	// Icon for the admin bar menu.
	'admin_bar_icon'            => 'dashicons-portfolio',

	// Priority for the admin bar menu.
	'admin_bar_priority'        => 50,

	// Sets a different name for your global variable other than the opt_name.
	'global_variable'           => $opt_name,

	// Show the time the page took to load, etc. (forced on while on localhost or when WP_DEBUG is enabled).
	'dev_mode'                  => false,

	// Enable basic customizer support.
	'customizer'                => true,

	// Allow the panel to open expanded.
	'open_expanded'             => false,

	// Disable the save warning when a user changes a field.
	'disable_save_warn'         => false,

	// Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
	'page_priority'             => 90,

	// For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters.
	'page_parent'               => 'themes.php',

	// Permissions needed to access the options panel.
	'page_permissions'          => 'manage_options',

	// Specify a custom URL to an icon.
	'menu_icon'                 => '',

	// Force your panel to always open to a specific tab (by id).
	'last_tab'                  => '',

	// Icon displayed in the admin panel next to your menu_title.
	'page_icon'                 => 'icon-themes',

	// Page slug used to denote the panel, will be based off page title, then menu title, then opt_name if not provided.
	'page_slug'                 => $opt_name,

	// On load save the defaults to DB before user clicks save.
	'save_defaults'             => true,

	// Display the default value next to each field when not set to the default value.
	'default_show'              => false,

	// What to print by the field's title if the value shown is default.
	'default_mark'              => '*',

	// Shows the Import/Export panel when not used as a field.
	'show_import_export'        => false,

	// The time transients will expire when the 'database' arg is set.
	'transient_time'            => 60 * MINUTE_IN_SECONDS,

	// Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output.
	'output'                    => true,

	// Allows dynamic CSS to be generated for customizer and google fonts,
	// but stops the dynamic CSS from going to the page head.
	'output_tag'                => true,

	// Disable the footer credit of Redux. Please leave if you can help it.
	'footer_credit'             => '&copy; This is a product of <a href="#"> Brothers Developer</a>',

	// If you prefer not to use the CDN for ACE Editor.
	// You may download the Redux Vendor Support plugin to run locally or embed it in your code.
	'use_cdn'                   => true,

	// Set the theme of the option panel.  Use 'wp' to use a more modern style, default is classic.
	'admin_theme'               => 'wp',

	// Enable or disable flyout menus when hovering over a menu with submenus.
	'flyout_submenus'           => true,

	// Mode to display fonts (auto|block|swap|fallback|optional)
	// See: https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display.
	'font_display'              => 'swap',

	// HINTS.
	'hints'                     => array(
		'icon'          => 'el el-question-sign',
		'icon_position' => 'right',
		'icon_color'    => 'lightgray',
		'icon_size'     => 'normal',
		'tip_style'     => array(
			'color'   => 'red',
			'shadow'  => true,
			'rounded' => false,
			'style'   => '',
		),
		'tip_position'  => array(
			'my' => 'top left',
			'at' => 'bottom right',
		),
		'tip_effect'    => array(
			'show' => array(
				'effect'   => 'slide',
				'duration' => '500',
				'event'    => 'mouseover',
			),
			'hide' => array(
				'effect'   => 'slide',
				'duration' => '500',
				'event'    => 'click mouseleave',
			),
		),
	),

	// FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
	// possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
	'database'                  => '',
	'network_admin'             => true,
	'search'                    => true,
);


// Panel Intro text -> before the form.
if ( ! isset( $args['global_variable'] ) || false !== $args['global_variable'] ) {
	if ( ! empty( $args['global_variable'] ) ) {
		$v = $args['global_variable'];
	} else {
		$v = str_replace( '-', '_', $args['opt_name'] );
	}


} else {
}

Redux::set_args( $opt_name, $args );

/*
 * ---> END ARGUMENTS
 */

/*
 * ---> START HELP TABS
 */
$help_tabs = array(

);
Redux::set_help_tab( $opt_name, $help_tabs );

// Set the help sidebar.
$content = '<p>' . esc_html__( 'This is the sidebar content, HTML is allowed.', 'your-textdomain-here' ) . '</p>';

Redux::set_help_sidebar( $opt_name, $content );

/*
 * <--- END HELP TABS
 */


// -> START Basic Fields
Redux::set_section(
	$opt_name,
	array(
		'title'            => __( 'Basic Fields', 'charitybd' ),
		'id'               => 'basic',
		'desc'             => __( 'These are really basic fields!', 'charitybd' ),
		'customizer_width' => '400px',
		'icon'             => 'el el-home',
	)
);

Redux::set_section($opt_name, array(
	'title'				=>	esc_html__('Header Area', 'charitybd'),
	'id'				=>	'header-area',
	'desc'				=>	esc_html__('These are really header fields!', 'charitybd'),
	'customizer_width'	=>	'400px',
	'icon'				=>	'el el-star-alt'
	)
);
	Redux::set_section($opt_name, array(
		'title'				=>	__('Logo Area', 'charitybd'),
		'id'				=>	'logo-area',
		'desc'				=>	__('Set your favicon & logo in your theme', 'charitybd'),
		'customizer_width'	=>	'700px',
		'subsection'		=> true,

		'fields'			=> array([
			'title'		=> 	__('Theme Favicon', 'charitybd'),
			'id'		=>	'favicon',
			'type'		=>	'media',
			'desc'		=>	'Enter your favicon logo',
			'url'		=> true,
			'preview'	=> true,
			'default'	=>	[
				'url'	=>	'#'
				],
			'hint'		=>	[
				//'title'		=>	'Favicon',
				'content'	=>	'Set your favicon for your website or theme. favicon size willl be 32x32 pixel'
				]
			],
			[
				'title'		=> 	__('Header Logo', 'charitybd'),
				'id'		=>	'theme-logo',
				'type'		=>	'media',
				'desc'		=>	'Enter your header logo',
				'url'		=> true,
				'preview'	=> true,
				'default'	=>	[
					'url'	=>	'#'
					],
				'hint'		=>	[
					//'title'		=>	'Linkdin hint',
					'content'	=>	'Header logo size best size will be 250x80 pixel'
					]
			],
			[
				'title'		=> 	__('Logo Width', 'charitybd'),
				'id'		=>	'logo-width',
				'type'		=>	'text',
				'desc'		=>	'Enter your logo width',
				'default'	=>	'250px',
				'hint'		=>	[
					//'title'		=>	'Linkdin hint',
					'content'	=>	'Enter your logo width to set in header'
					]
			],
			[
				'title'		=> 	__('Logo Height', 'charitybd'),
				'id'		=>	'logo-height',
				'type'		=>	'text',
				'desc'		=>	'Enter your logo height',
				'default'	=>	'80px',
				'hint'		=>	[
					//'title'		=>	'Linkdin hint',
					'content'	=>	'Enter your logo height to set in header'
					]
			])
		)
	);


Redux::set_section(
	$opt_name,
	array(
		'title'            => __( 'Common Fields', 'charitybd' ),
		'id'               => 'common',
		'desc'             => __( 'All Common Fields', 'charitybd' ),
		'customizer_width' => '400px',
		'icon'             => 'el el-asl',
	)
);

	Redux::set_section(
		$opt_name,
		array(
			'title'            	=>__( 'Social Links', 'charitybd' ),
			'id'               	=> 'so-link',
			'desc'             	=>__( 'All Social Links', 'charitybd' ),
			'customizer_width' 	=> '700px',
			'icon'             	=> 'el el-share',
			'subsection'		=>	true,

			'fields'			=> array([
				'title'		=> 	__('Facebook', 'charitybd'),
				'id'		=>	'facebook',
				'type'		=>	'text',
				'desc'		=>	'Enter your facebook link',
				'default'	=>	'#',
				'hint'		=>	[
					//'title'		=>	'Facebook hint',
					'content'	=>	'Enter your facebook profile or page url'
					]
			],
			[
				'title'		=> 	__('Instagram', 'charitybd'),
				'id'		=>	'instagram',
				'type'		=>	'text',
				'desc'		=>	'Enter your instagram link',
				'default'	=>	'#',
				'hint'		=>	[
					//'title'		=>	'Instagram hint',
					'content'	=>	'Enter your instagram profile or page url'
					]
			],
			[
				'title'		=> 	__('Twitter', 'charitybd'),
				'id'		=>	'tweet',
				'type'		=>	'text',
				'desc'		=>	'Enter your twitter link',
				'default'	=>	'#',
				'hint'		=>	[
					//'title'		=>	'Tweeter hint',
					'content'	=>	'Enter your twitter profile or page url'
					]
			],
			[
				'title'		=> 	__('Google+', 'charitybd'),
				'id'		=>	'googleplus',
				'type'		=>	'text',
				'desc'		=>	'Enter your google+ link',
				'default'	=>	'#',
				'hint'		=>	[
					//'title'		=>	'Dribbble hint',
					'content'	=>	'Enter your google+ profile or page url'
					]
			])
		)
	);

	Redux::set_section(
		$opt_name,
		array(
			'title'            	=> __( 'Donate Button', 'charitybd' ),
			'id'               	=> 'do-link',
			'desc'             	=> __( 'Donate Button Details', 'charitybd' ),
			'customizer_width' 	=> '700px',
			'icon'             	=> 'el el-view-mode',
			'subsection'		=>	true,

			'fields'			=> array([
				'title'		=> 	__('Donate Button Link', 'charitybd'),
				'id'		=>	'dbl',
				'type'		=>	'text',
				'desc'		=>	'Enter your Donate Button Link',
				'default'	=>	'#',
				'hint'		=>	[
					//'title'		=>	'Facebook hint',
					'content'	=>	'Enter your Donate Button url from donate page'
					]
			])
		)
	);

	Redux::set_section(
		$opt_name,
		array(
			'title'            	=> __( 'Contact Details', 'charitybd' ),
			'id'               	=> 'con-details',
			'desc'             	=> __( 'Contact Details', 'charitybd' ),
			'customizer_width' 	=> '700px',
			'icon'             	=> 'el el-child',
			'subsection'		=>	true,

			'fields'			=> array([
				'title'		=> 	__('Address', 'charitybd'),
				'id'		=>	'address',
				'type'		=>	'text',
				'desc'		=>	'Enter your address',
				'default'	=>	'Mouja Sharifpur, Sharifpur, Jamalpur Sadar, Jamalpur-2000',
				'hint'		=>	[
					//'title'		=>	'Facebook hint',
					'content'	=>	'Enter your address'
					]
			],
			[
				'title'		=> 	__('Email', 'charitybd'),
				'id'		=>	'email',
				'type'		=>	'text',
				'desc'		=>	'Enter your email',
				'default'	=>	'sabbir2dev@gmail.com',
				'hint'		=>	[
					//'title'		=>	'Facebook hint',
					'content'	=>	'Enter your Email'
					]
			],
			[
				'title'		=> 	__('Phone Number 1', 'charitybd'),
				'id'		=>	'ph1',
				'type'		=>	'text',
				'desc'		=>	'Enter your Phone Number',
				'default'	=>	'+8801640738342',
				'hint'		=>	[
					//'title'		=>	'Dribbble hint',
					'content'	=>	'Enter your Phone Number'
					]
			],
			[
				'title'		=> 	__('Phone Number 2', 'charitybd'),
				'id'		=>	'ph2',
				'type'		=>	'text',
				'desc'		=>	'Enter your Phone Number',
				'default'	=>	'+8801303127848',
				'hint'		=>	[
					//'title'		=>	'Dribbble hint',
					'content'	=>	'Enter your Phone Number'
					]
			])
		)
	);


Redux::set_section(
	$opt_name,
	array(
		'title'            => __( 'Footer Area', 'charitybd' ),
		'id'               => 'footer-area',
		'desc'             => __( 'All Footer Area', 'charitybd' ),
		'customizer_width' => '400px',
		'icon'             => 'el el-cogs',
	)
);
	Redux::set_section(
		$opt_name,
		array(
			'title'            	=> __( 'Footer Logo', 'charitybd' ),
			'id'               	=> 'footer-logo',
			'desc'             	=> __( 'Footer Logo', 'charitybd' ),
			'customizer_width' 	=> '700px',
			'icon'             	=> 'el el-child',
			'subsection'		=>	true,

			'fields'			=> array([
				'title'		=> 	__('Footer Logo', 'charitybd'),
				'id'		=>	'foo-logo',
				'type'		=>	'media',
				'desc'		=>	'Enter your Footer Logo',
				'url'		=> true,
				'preview'	=> true,
				'default'	=>	[
					'url'	=>	'#'
					],
				'hint'		=>	[
					//'title'		=>	'Linkdin hint',
					'content'	=>	'Footer Logo'
					]
			]
		))
	);

	Redux::set_section(
		$opt_name,
		array(
			'title'            	=> __( 'Footer Contact', 'charitybd' ),
			'id'               	=> 'foo-con',
			'desc'             	=> __( 'Contact Details', 'charitybd' ),
			'customizer_width' 	=> '700px',
			'icon'             	=> 'el el-child',
			'subsection'		=>	true,

			'fields'			=> array([
				'title'		=> 	__('Email', 'charitybd'),
				'id'		=>	'fo-email',
				'type'		=>	'text',
				'desc'		=>	'Enter your email',
				'default'	=>	'sabbir2dev@gmail.com',
				'hint'		=>	[
					//'title'		=>	'Facebook hint',
					'content'	=>	'Enter your Donate Button url from donate page'
					]
			],
			[
				'title'		=> 	__('Phone Number 1', 'charitybd'),
				'id'		=>	'fo-ph1',
				'type'		=>	'text',
				'desc'		=>	'Enter your Phone Number',
				'default'	=>	'+8801640738342',
				'hint'		=>	[
					//'title'		=>	'Dribbble hint',
					'content'	=>	'Enter your Phone Number'
					]
			],
			[
				'title'		=> 	__('Footer Address', 'charitybd'),
				'id'		=>	'fo-address',
				'type'		=>	'textarea',
				'desc'		=>	'Enter your Footer Address',
				'default'	=>	'Mouja Sharifpur, Sharifpur, Jamalpur Sadar, Jamalpur-2000',
				'hint'		=>	[
					//'title'		=>	'Dribbble hint',
					'content'	=>	'Enter your Footer Address'
					]
			])
		)
	);

	Redux::set_section(
		$opt_name,
		array(
			'title'            	=> __( 'Footer Copyright', 'charitybd' ),
			'id'               	=> 'foo-copy',
			'desc'             	=> __( 'Contact Details', 'charitybd' ),
			'customizer_width' 	=> '700px',
			'icon'             	=> 'el el-child',
			'subsection'		=>	true,

			'fields'			=> array([
				'title'		=> 	__('Copyright Text', 'charitybd'),
				'id'		=>	'copy-text',
				'type'		=>	'textarea',
				'desc'		=>	'Enter your Copyright Text',
				'default'	=>	'&copy; 2022 Charity BD Template by Brothers Developer',
				'hint'		=>	[
					//'title'		=>	'Facebook hint',
					'content'	=>	'Enter your custom copyright Text'
					]
			],
			[
				'title'		=> 	__('Privacy Policy Text', 'charitybd'),
				'id'		=>	'ppt',
				'type'		=>	'text',
				'desc'		=>	'Enter your Privacy Policy Text',
				'default'	=>	'Privacy Policy',
				'hint'		=>	[
					//'title'		=>	'Dribbble hint',
					'content'	=>	'Enter your Privacy Policy text'
					]
			],
			[
				'title'		=> 	__('Privacy Policy Link', 'charitybd'),
				'id'		=>	'ppl',
				'type'		=>	'text',
				'desc'		=>	'Enter your Privacy Policy Link',
				'default'	=>	'#',
				'hint'		=>	[
					//'title'		=>	'Dribbble hint',
					'content'	=>	'Enter your Privacy Policy Link'
					]
			],
			[
				'title'		=> 	__('Terms & Condition Text', 'charitybd'),
				'id'		=>	'tct',
				'type'		=>	'text',
				'desc'		=>	'Enter your Terms & Condition Text',
				'default'	=>	'Terms & Condition',
				'hint'		=>	[
					//'title'		=>	'Dribbble hint',
					'content'	=>	'Enter your Terms & Condition Text'
					]
			],
			[
				'title'		=> 	__('Terms & Condition Link', 'charitybd'),
				'id'		=>	'tcl',
				'type'		=>	'text',
				'desc'		=>	'Enter your Terms & Condition Link',
				'default'	=>	'#',
				'hint'		=>	[
					//'title'		=>	'Dribbble hint',
					'content'	=>	'Enter your Terms & Condition Link'
					]
			])
		)
	);



<?php
	////Page Meta Box Start////
	add_action('cmb2_admin_init','charitybd_post_metabox');
	function charitybd_post_metabox(){
		$metabox_page = new_cmb2_box([
			'title'			=>	'Additional Field',
			'id'			=>	'_ppost-additional-box',
			'object_types'	=>	['post']
		]);

		$metabox_page->add_field([
			'name'			=>	'Post Quotation (optional)',
			'id'			=>	'_post-quotation',
			'description'	=>	'Enter your important tagline or quotation',
			'type'			=>	'textarea',
		]);
	}
	////Page Meta Box End////


	////Slider Posttype meta box start////
	add_action('cmb2_admin_init','charitybd_slider_metabox');
	function charitybd_slider_metabox(){
		$metabox_page = new_cmb2_box([
			'title'			=>	'Additional Field',
			'id'			=>	'_slider-additional-box',
			'object_types'	=>	['charitybd-slider']
		]);

		$metabox_page->add_field([
			'name'			=>	'Slider Subtitle',
			'id'			=>	'_slider-subtitle',
			'description'	=>	'Enter your slider subtitle',
			'type'			=>	'text',
		]);

		$metabox_page->add_field([
			'name'			=>	'Slider Button Text',
			'id'			=>	'_slider-btn-text',
			'description'	=>	'Enter your Slider Button Text',
			'type'			=>	'text',
		]);

		$metabox_page->add_field([
			'name'			=>	'Slider Button Link',
			'id'			=>	'_slider-btn-link',
			'description'	=>	'Enter your Slider Button link',
			'type'			=>	'text',
		]);

	}
	////Slider Posttype meta box end////

	///Causes Posttype meta box start///
	add_action('cmb2_admin_init', 'charitybd_causes_metabox');
	function charitybd_causes_metabox(){
		$metabox_page = new_cmb2_box([
			'title'			=>	'Additional Field',
			'id'			=>	'_causes-additional-box',
			'object_types'	=>	['causes']
		]);

		$metabox_page->add_field([
			'name'			=>	'Additional Title',
			'id'			=>	'_causes-add-title',
			'description'	=>	'Enter Additional Title',
			'type'			=>	'text',
		]);

		$metabox_page->add_field([
			'name'			=>	'Additional Editor',
			'id'			=>	'_causes-add-editor',
			'description'	=>	'Enter Additional Editor',
			'type'			=>	'wysiwyg',
		]);

		$metabox_page->add_field([
			'name'			=>	'Goal Amount',
			'id'			=>	'_causes-goal-amount',
			'description'	=>	'Enter your goal amount',
			'type'			=>	'text_medium',
		]);

		$metabox_page->add_field([
			'name'			=>	'Achive Amount',
			'id'			=>	'_causes-achive-amount',
			'description'	=>	'Enter your achive amount to reach the goal amount',
			'type'			=>	'text_medium',
		]);

		$metabox_page->add_field([
			'name'			=>	'Currency Symbol',
			'id'			=>	'_causes-currency-symbol',
			'description'	=>	'Enter Currency Symbol',
			'type'			=>	'text',
		]);

		$metabox_page->add_field([
			'name'			=>	'Causes Video',
			'id'			=>	'_causes-video',
			'description'	=>	'Enter Causes Video Link',
			'type'			=>	'oembed',
		]);

		$metabox_page->add_field([
			'name'			=>	'Causes Gallery',
			'id'			=>	'_causes-gallary',
			'description'	=>	'Select Images to add in Gallery',
			'type'			=>	'file_list',
		]);

		$metabox_page->add_field([
			'name'			=>	'Donate Button Text',
			'id'			=>	'_causes-donate-btn-text',
			'description'	=>	'Enter Donate Button Text',
			'type'			=>	'text',
		]);

		$metabox_page->add_field([
			'name'			=>	'Donate Button Link',
			'id'			=>	'_causes-donate-btn-link',
			'description'	=>	'Enter Donate Button Link',
			'type'			=>	'text',
		]);

		$metabox_page->add_field([
			'name'			=>	'Causes End Date',
			'id'			=>	'_causes-end-date',
			'description'	=>	'Enter Causes End Date',
			'type'			=>	'text_date',
			'date_format' => 'd M, Y',
			'attributes' => array(
			'data-datepicker' => json_encode( array(
				'yearRange'       => '-50:+1'
			) ),
		)
		]);

	}

	///Causes Posttype meta box end///



	///Events Posttype meta box start///
	add_action('cmb2_admin_init', 'charitybd_events_metabox');
	function charitybd_events_metabox(){

		$metabox_page4 = new_cmb2_box([
			'title'			=>	'Additional Post',
			'id'			=>	'_events-additional-post',
			'object_types'	=>	['events']
		]);

		$metabox_page4->add_field([
			'name'			=>	'Enter Event Subtitle',
			'id'			=>	'_events_subtitle',
			'description'	=>	'Enter Event Subtitle',
			'type'			=>	'text',
		]);

		$metabox_page4->add_field([
			'name'			=>	'Enter Event Quatation',
			'id'			=>	'_events_quatation',
			'description'	=>	'Enter Event Quatation',
			'type'			=>	'textarea',
		]);

		$metabox_page2 = new_cmb2_box([
			'title'			=>	'Event Details',
			'id'			=>	'_events-additional-box2',
			'object_types'	=>	['events']
		]);

		$metabox_page2->add_field([
			'name'			=>	'Events Start Date',
			'id'			=>	'_events_start_date',
			'description'	=>	'Enter Events Start Date',
			'type'			=>	'text_date',
			'date_format' => 'd M, Y',
			'time_format' => 'H:i A',
		]);

		$metabox_page2->add_field([
			'name'			=>	'Events End Date',
			'id'			=>	'_events_end_date',
			'description'	=>	'Enter Events End Date',
			'type'			=>	'text_date',
			'date_format' => 'd M, Y',
			'time_format' => 'H:i A',
		]);


		$metabox_page2->add_field([
			'name'			=>	'Events Daily Start Time',
			'id'			=>	'_events_time_start',
			'description'	=>	'Enter Events Daily Start Time',
			'type'			=>	'text_time'
		]);


		$metabox_page2->add_field([
			'name'			=>	'Events Daily End Time',
			'id'			=>	'_events_time_end',
			'description'	=>	'Enter Events Daily End Time',
			'type'			=>	'text_time'
		]);

		$metabox_page2->add_field([
			'name'			=>	'Events Time Zone',
			'id'			=>	'_events_time_zone',
			'description'	=>	'Enter Events End Date',
			'type'			=>	'select_timezone'
		]);



		$metabox_page = new_cmb2_box([
			'title'			=>	'Organizer Details',
			'id'			=>	'_events-organizer-box',
			'object_types'	=>	['events']
		]);

		$metabox_page->add_field([
			'name'			=>	'Organizer Name',
			'id'			=>	'_events-organizer-name',
			'description'	=>	'Enter Event Organizer Name or Organizer Company Name',
			'type'			=>	'text',
		]);

		$metabox_page->add_field([
			'name'			=>	'Organizer Website Link',
			'id'			=>	'_events-organizer-link',
			'description'	=>	'Enter Event Organizer Link or Organizer Company Link',
			'type'			=>	'text',
		]);

		$metabox_page->add_field([
			'name'			=>	'Organizer Number',
			'id'			=>	'_events-organizer-number',
			'description'	=>	'Enter Organizer Number',
			'type'			=>	'text',
		]);

		$metabox_page->add_field([
			'name'			=>	'Organizer Email',
			'id'			=>	'_events-organizer-email',
			'description'	=>	'Enter Organizer Email',
			'type'			=>	'text',
		]);


		$metabox_page3 = new_cmb2_box([
			'title'			=>	'Venue Details',
			'id'			=>	'_events-venue-box',
			'object_types'	=>	['events']
		]);


		$metabox_page3->add_field([
			'name'			=>	'Venue Address',
			'id'			=>	'_events-venue-address',
			'description'	=>	'Enter Event Venue Address',
			'type'			=>	'textarea',
		]);

	}

	///Events Posttype meta box end///


	///Stories Posttype Meta Box Start//

	add_action('cmb2_admin_init', 'charitybd_stories_metabox');
	function charitybd_stories_metabox(){

		$metabox_page = new_cmb2_box([
			'title'			=>	'Additional Post',
			'id'			=>	'_stories-additional-post',
			'object_types'	=>	['stories']
		]);

		$metabox_page->add_field([
			'name'			=>	'Quatation Text',
			'id'			=>	'_stories-quatation-text',
			'description'	=>	'Enter Quatation Text',
			'type'			=>	'textarea',
		]);

		$metabox_page->add_field([
			'name'			=>	'2nd Post Title',
			'id'			=>	'_stories-2nd-title',
			'description'	=>	'Enter 2nd Post Title',
			'type'			=>	'text',
		]);

		$metabox_page->add_field([
			'name'			=>	'2nd Post Text',
			'id'			=>	'_stories-2nd-post-text',
			'description'	=>	'Enter 2nd Post Text',
			'type'			=>	'textarea',
		]);

		$metabox_page->add_field([
			'name'			=>	'3rd Post Title',
			'id'			=>	'_stories-3rd-title',
			'description'	=>	'Enter 3rd Post Title',
			'type'			=>	'text',
		]);

		$metabox_page->add_field([
			'name'			=>	'3rd Post Text',
			'id'			=>	'_stories-3rd-post-text',
			'description'	=>	'Enter 3rd Post Text',
			'type'			=>	'textarea',
		]);

		$metabox_page->add_field([
			'name'			=>	'4th Post Title',
			'id'			=>	'_stories-4th-title',
			'description'	=>	'Enter 4th Post Title',
			'type'			=>	'text',
		]);

		$metabox_page->add_field([
			'name'			=>	'4th Post Text',
			'id'			=>	'_stories-4th-post-text',
			'description'	=>	'Enter 4th Post Text',
			'type'			=>	'textarea',
		]);

		$metabox_page->add_field([
			'name'			=>	'Highlights Text',
			'id'			=>	'_stories-highlights-text',
			'description'	=>	'Enter Highlights Text',
			'type'			=>	'textarea',
		]);

		$metabox_page->add_field([
			'name'			=>	'5th Post Title',
			'id'			=>	'_stories-5th-title',
			'description'	=>	'Enter 5th Post Title',
			'type'			=>	'text',
		]);

		$metabox_page->add_field([
			'name'			=>	'5th Post Text',
			'id'			=>	'_stories-5th-post-text',
			'description'	=>	'Enter 5th Post Text',
			'type'			=>	'textarea',
		]);


		$metabox_page->add_field([
			'name'			=>	'Enter Background Image',
			'id'			=>	'_stories-bg-image',
			'description'	=>	'Enter Background Image',
			'type'			=>	'file',
		]);

		$metabox_page->add_field([
			'name'			=>	'Button Text',
			'id'			=>	'_stories-btn-text',
			'description'	=>	'Enter Button Text',
			'type'			=>	'text',
		]);

	}

	///Stories Posttype Meta Box End//


	///Teams Posttype Meta Box End//
	add_action('cmb2_admin_init', 'charitybd_teams_metabox');
	function charitybd_teams_metabox(){

		$metabox_page = new_cmb2_box([
			'title'			=>	'Additional Post',
			'id'			=>	'_teams-additional-post',
			'object_types'	=>	['teams']
		]);

		$metabox_page->add_field([
			'name'			=>	'Team Member Designation',
			'id'			=>	'_teams-member-designation',
			'description'	=>	'Enter Team Member Designation',
			'type'			=>	'text',
		]);

		$metabox_page->add_field([
			'name'			=>	'Member Phone Number',
			'id'			=>	'_teams-member-phone',
			'description'	=>	'Enter Team Member Phone Number',
			'type'			=>	'text',
		]);

		$metabox_page->add_field([
			'name'			=>	'Team Member Email',
			'id'			=>	'_teams-member-Email',
			'description'	=>	'Enter Team Member Email',
			'type'			=>	'text',
		]);

		$metabox_page->add_field([
			'name'			=>	'Team Member Date Of Birth',
			'id'			=>	'_teams-member-dob',
			'description'	=>	'Enter Team Member Date Of Birth',
			'type'			=>	'text_date',
			'date_format' => 'd M, Y',
			'attributes' => array(
			'data-datepicker' => json_encode( array(
				'yearRange'       => '-60:-14'
			) ),
		),
		]);

		$metabox_page->add_field([
			'name'			=>	'Team Member National ID or Passport',
			'id'			=>	'_teams-member-id',
			'description'	=>	'Enter Team Member Nation Identification Number or Passport Number',
			'type'			=>	'text',
		]);

		$metabox_page->add_field([
			'name'			=>	'Team Member Address',
			'id'			=>	'_teams-member-address',
			'description'	=>	'Enter Team Member Address',
			'type'			=>	'textarea',
		]);


		$metabox_page2 = new_cmb2_box([
			'title'			=>	'Skill Details',
			'id'			=>	'_teams-skill-details',
			'object_types'	=>	['teams']
		]);

		$metabox_page2->add_field([
			'name'			=>	'Skill Text Content',
			'id'			=>	'_teams-skill-text-content',
			'description'	=>	'Enter Skill Text Content',
			'type'			=>	'textarea',
		]);

		$metabox_page2->add_field([
			'name'			=>	'Enter 1st Skill Name',
			'id'			=>	'_teams-skill-name',
			'description'	=>	'Enter Skill Name',
			'type'			=>	'text',
		]);

		$metabox_page2->add_field([
			'name'			=>	'Enter 1st Skill Percentage',
			'id'			=>	'_teams-skill-percentage',
			'description'	=>	'Enter Skill Percentage out of 100%',
			'type'			=>	'text',
		]);

		$metabox_page2->add_field([
			'name'			=>	'Enter 2nd Skill Name',
			'id'			=>	'_teams-skill-name2',
			'description'	=>	'Enter Skill Name',
			'type'			=>	'text',
		]);

		$metabox_page2->add_field([
			'name'			=>	'Enter 2nd Skill Percentage2',
			'id'			=>	'_teams-skill-percentage2',
			'description'	=>	'Enter Skill Percentage out of 100%',
			'type'			=>	'text',
		]);

		$metabox_page2->add_field([
			'name'			=>	'Enter 3rd Skill Name',
			'id'			=>	'_teams-skill-name3',
			'description'	=>	'Enter Skill Name',
			'type'			=>	'text',
		]);

		$metabox_page2->add_field([
			'name'			=>	'Enter 3rd Skill Percentage',
			'id'			=>	'_teams-skill-percentage3',
			'description'	=>	'Enter Skill Percentage out of 100%',
			'type'			=>	'text',
		]);

		$metabox_page2->add_field([
			'name'			=>	'Enter 4th Skill Name',
			'id'			=>	'_teams-skill-name4',
			'description'	=>	'Enter Skill Name',
			'type'			=>	'text',
		]);

		$metabox_page2->add_field([
			'name'			=>	'Enter 4th Skill Percentage2',
			'id'			=>	'_teams-skill-percentage4',
			'description'	=>	'Enter Skill Percentage out of 100%',
			'type'			=>	'text',
		]);


		$metabox_page2->add_field([
			'name'			=>	'Enter 5th Skill Name',
			'id'			=>	'_teams-skill-name5',
			'description'	=>	'Enter Skill Name',
			'type'			=>	'text',
		]);

		$metabox_page2->add_field([
			'name'			=>	'Enter 5th Skill Percentage2',
			'id'			=>	'_teams-skill-percentage5',
			'description'	=>	'Enter Skill Percentage out of 100%',
			'type'			=>	'text',
		]);

		$metabox_page3 = new_cmb2_box([
			'title'			=>	'Background Image',
			'id'			=>	'_teams-bg-img',
			'object_types'	=>	['teams']
		]);

		$metabox_page3->add_field([
			'name'			=>	'Enter Team Member Image Background Image',
			'id'			=>	'_teams-member-img-bg',
			'description'	=>	'Enter Team Member Image Background Image',
			'type'			=>	'file',
		]);


		$metabox_page4 = new_cmb2_box([
			'title'			=>	'Members social Link Details',
			'id'			=>	'_teams-sld',
			'object_types'	=>	['teams']
		]);

		$metabox_page4->add_field([
			'name'			=>	'Team Member Facebook Link',
			'id'			=>	'_teams-fb-link',
			'description'	=>	'Enter Team Member Facebook Link',
			'type'			=>	'text',
		]);

		$metabox_page4->add_field([
			'name'			=>	'Team Member Instagram Link',
			'id'			=>	'_teams-ins-link',
			'description'	=>	'Enter Team Member Instagram Link',
			'type'			=>	'text',
		]);

		$metabox_page4->add_field([
			'name'			=>	'Team Member Twitter Link',
			'id'			=>	'_teams-tw-link',
			'description'	=>	'Enter Team Member Twitter Link',
			'type'			=>	'text',
		]);

		$metabox_page4->add_field([
			'name'			=>	'Team Member Youtube Link',
			'id'			=>	'_teams-yt-link',
			'description'	=>	'Enter Team Member Youtube Link',
			'type'			=>	'text',
		]);

		$metabox_page4->add_field([
			'name'			=>	'Team Member Linkedin Link',
			'id'			=>	'_teams-lk-link',
			'description'	=>	'Enter Team Member Linkedin Link',
			'type'			=>	'text',
		]);
	}

	///Teams Posttype Meta Box End//



	///Testimonials start
	add_action('cmb2_admin_init', 'charitybd_testimonials_metabox');
	function charitybd_testimonials_metabox(){

		$metabox_page = new_cmb2_box([
			'title'			=>	'Additional Post',
			'id'			=>	'_testimonials-additional-post',
			'object_types'	=>	['testimonials']
		]);

		$metabox_page->add_field([
			'name'			=>	'Donor or Charity Member Designation',
			'id'			=>	'_testimonials-designation',
			'description'	=>	'Enter Donor or Charity Member Designation',
			'type'			=>	'text',
		]);


	}
	///Testimonials end
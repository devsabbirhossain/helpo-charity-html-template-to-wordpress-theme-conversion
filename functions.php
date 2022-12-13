<?php 


	add_action('after_setup_theme', 'charitybd_after_setup_file');
	function charitybd_after_setup_file(){

		load_theme_textdomain('charitybd', get_template_directory().'/assets/lang');

		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');


		register_nav_menu('main-menu', __('Main Menu', 'charitybd'));
		register_nav_menu('footer-menu', __('Footer Menu', 'charitybd'));
		register_nav_menu('aside-menu', __('Aside Menu', 'charitybd'));
	
	}

	function disable_wp_auto_p( $content ) {
	  if ( is_singular( 'page' ) ) {
	    remove_filter( 'the_content', 'wpautop' );
	    remove_filter( 'the_excerpt', 'wpautop' );
	  }
	  return $content;
	}
	add_filter( 'the_content', 'disable_wp_auto_p', 0 );


	function add_file_types_to_uploads($file_types){
		$new_filetypes = array();
		$new_filetypes['svg'] = 'image/svg+xml';
		$file_types = array_merge($file_types, $new_filetypes );
		return $file_types;
	}
	add_filter('upload_mimes', 'add_file_types_to_uploads');



	// Comments Form Setup Start
	add_filter('comment_form_defaults', 'adaptive_custom_comment_form');

	function adaptive_custom_comment_form($defaults){
		$defaults['comment_notes_before']	=	'';
		$defaults['comment_notes_after']	=	'';
		$defaults['id_form']		= 'comment-form form comments-form';
		$defaults['comment_field']		= '<div class="col-12">
			<textarea class="form__field form__message" rows="5" cols="25" name="comment" placeholder="Message" required></textarea>
		</div>';

		return $defaults;
	}


	add_filter('comment_form_default_fields', 'adaptive_custom_comment_form_filed');
	function adaptive_custom_comment_form_filed(){
		$commenter = wp_get_current_commenter();
		$req = get_option('require_name_email');
		$aria_req = ($req ? "aria-required='true'" : '');

		$fields = array(
			'author' => '<div class="row"><div class="col-12 custom-field">
							<input class="form__field" value="'.esc_attr($commenter['comment_author']).'" type="text" name="author" placeholder="Full Name" required/>
						</div>',
            'Email' => '<div class="col-12 custom-field">
							<input class="form__field" value="'.esc_attr($commenter['comment_author_email']).'" type="email" name="email" placeholder="Email" required/>
						</div></div>',
		);

		return $fields;
	}

	// Comments Form Setup End

	function mytheme_comment($comment, $args, $depth) {
	    if ( 'div' === $args['style'] ) {
	        $tag       = 'div';
	        $add_below = 'comment';
	    } else {
	        $tag       = 'li';
	        $add_below = 'div-comment';
	    }?>
	    <<?php echo $tag; ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?> id="comment-<?php comment_ID() ?>"> 
	    <div class="comments__item">
	    	<div class="comments__item-img">
	    		
	    		<?php 
	            if ( $args['avatar_size'] != 0 ) {
	                echo get_avatar( $comment, $args['avatar_size'] ); 
	            } ?>
	            
	        </div> 

	    <?php 
	    if ( 'div' != $args['style'] ) { ?>
	        <div id="div-comment-<?php comment_ID() ?>" class="comment-body comments__item-description"><?php
	    } ?>
	        
	        <div class="row align-items-center">
	            <div class="col-9 d-flex flex-wrap align-items-baseline">
	            	<span class="comments__item-name">
	            		<?php printf( __( '<cite class="fn">%s</cite>' ), get_comment_author_link() ); ?>
	            	</span>
	            	<a class="comment-link" href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">
	            		<span class="comments__item-date">
	            			<?php printf( __('%1$s at %2$s'), get_comment_date(), get_comment_time() ); ?>
	            		</span>
	            	</a>
	            	<?php 
	            		edit_comment_link( __( '(Edit)' ), '  ', '' ); ?>
	            </div>
	            <div class="col-3 text-right">
	            	<span class="comments__item-action">
						<?php 
			                comment_reply_link( 
			                    array_merge( 
			                        $args, 
			                        array( 
			                            'add_below' => $add_below, 
			                            'depth'     => $depth, 
			                            'max_depth' => $args['max_depth'] 
			                        ) 
			                    ) 
			                ); 
			            ?>
					</span>
				</div>
				<div class="col-12">
					<div class="comments__item-text">
						<p><?php comment_text(); ?></p>
					</div>
				</div>
	            
	        </div>
	        <?php 
	        if ( $comment->comment_approved == '0' ) { ?>
	            <em class="comment-awaiting-moderation">
	            	<?php _e( 'Waiting For Approve' ); ?>
	            </em>
	            <br/><?php 
	        } ?>

	        <?php 
	    if ( 'div' != $args['style'] ) : ?>
	        </div></div><?php 
	    endif;
	}














	//redux
	if(file_exists(dirname(__file__).'/inc/redux/redux-core/framework.php')){
		require_once(dirname(__file__).'/inc/redux/redux-core/framework.php');
	}
	if(file_exists(dirname(__file__).'/inc/redux/sample/custom-config.php')){
		require_once(dirname(__file__).'/inc/redux/sample/custom-config.php');
	}

	//cmb2
	if(file_exists(dirname(__file__).'/inc/metabox/init.php')){
		require_once(dirname(__file__).'/inc/metabox/init.php');
	}
	if(file_exists(dirname(__file__).'/inc/metabox/custom-metabox.php')){
		require_once(dirname(__file__).'/inc/metabox/custom-metabox.php');
	}

	//All files
	if(file_exists(dirname(__file__).'/functions/function-addfile.php')){
		require_once(dirname(__file__).'/functions/function-addfile.php');
	}
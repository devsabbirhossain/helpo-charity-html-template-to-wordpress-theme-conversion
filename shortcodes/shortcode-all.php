<?php

	add_shortcode('faq', 'custom_faq');
	function custom_faq($attr, $content){
		$attr = extract(shortcode_atts([
			'heading'	=> 'FAQs',
			'title'	=> 'General</span> <span>Questions & Answers</span>',
			'bg_image'	=> '',
			'bg_image_title'	=> 'Any Question?',
			'bg_image_content'	=> 'Gray eel-catfish longnose whiptail catfish smalleye squaretail queen danio unicorn',
			'bg_image_button_text'	=> 'ASk Question',
			'bg_image_button_link'	=> '#',
		], $attr));
	 	ob_start();?>
			<!-- faq start-->
			<section class="section faq">
				<div class="container">
					<div class="row margin-bottom">
						<div class="col-12">
							<div class="heading heading--primary"><span class="heading__pre-title"><?php echo $heading; ?></span>
								<h2 class="heading__title no-margin-bottom"><span><?php echo $title; ?></span></h2>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-8 col-xl-9">
							<!-- loop start-->
							<?php 
								$tempFAQ = new WP_Query([
									'post_type'	=>	'charitybd-faq'
								]);
								while($tempFAQ->have_posts()): $tempFAQ->the_post();
							?>
							<div class="accordion accordion--primary">
								<div class="accordion__title-block">
									<h6 class="accordion__title"><?php do_shortcode(the_title()); ?></h6>
									<span class="accordion__close"></span>
								</div>
								<div class="accordion__text-block">
									<p><?php do_shortcode(the_content()); ?></p>
								</div>
							</div>
							<?php endwhile; ?>
							<!-- loop end -->
						</div>
						<div class="col-lg-4 col-xl-3">
							<div class="faq-aside"><img class="img--bg" src="<?php $image_url = wp_get_attachment_image_src($bg_image, 'full'); echo $image_url[0]; ?>" alt="img"/>
								<h5 class="faq-aside__title"><?php echo do_shortcode($bg_image_title); ?></h5>
								<p><?php echo do_shortcode($bg_image_content); ?></p><a class="faq-aside__link" href="<?php echo $bg_image_button_link; ?>"><?php echo do_shortcode($bg_image_button_text); ?></a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- faq end-->
	 	<?php return ob_get_clean();
	}


	add_shortcode('home-subscribe', 'custom_home_subscribe');
	function custom_home_subscribe($attr, $content=""){
		$attr = extract(shortcode_atts([
			'heading'	=> 'Services',
		], $attr));
	 	ob_start();?>
			<!-- subscribe start-->
			<section class="subscribe">
				<div class="container">
					<div class="row align-items-end">
						<div class="col-lg-4">
							<h2 class="subscribe__title"><?php echo do_shortcode($heading); ?></h2>
						</div>
						<div class="col-lg-8">
							<?php echo do_shortcode($content); ?>
						</div>
					</div>
				</div>
			</section>
			<!-- subscribe end-->
	 	<?php return ob_get_clean();
	}


	add_shortcode('home-bottom-background', 'custom_bottom_bg');
	function custom_bottom_bg($attr, $content=""){
		$attr = extract(shortcode_atts([
			'image_link'	=> '#',
		], $attr));
	 	ob_start();?>

		<section class="bottom-background background--brown">
	      <div class="container">
	        <div class="row">
	          <div class="col-12">
	            <div class="bottom-background__img"><img src="<?php $image_url = wp_get_attachment_image_src($image_link, 'full'); echo $image_url[0]; ?>" alt="img"/></div>
	          </div>
	        </div>
	      </div>
	    </section>

    	<?php return ob_get_clean();
	}


	add_shortcode('home-bottom-background-full', 'custom_bottom_bg_full');
	function custom_bottom_bg_full($attr, $content=""){
		$attr = extract(shortcode_atts([
			'image_link'	=> '#',
		], $attr));
	 	ob_start();?>

		<!-- bottom bg start-->
		<img class="forms-section__bg" src="<?php $image_url = wp_get_attachment_image_src($image_link, 'full'); echo $image_url[0]; ?>" alt="img"/>
		<!-- bottom bg end-->

    	<?php return ob_get_clean();
	}


	add_shortcode('home-top-background-full', 'custom_top_bg_full');
	function custom_top_bg_full($attr, $content=""){
		$attr = extract(shortcode_atts([
			'page_top_heading'	=> 'Charity BD',
			'website_title'		=> 'Helpo',
			'title_prename'		=> 'All',
			'page_title'		=> 'Post',
			'bg_image'			=> '#',
		], $attr));
	 	ob_start();?>
			<section class="promo-primary">
				<picture>
					<source srcset="<?php $image_url = wp_get_attachment_image_src($bg_image, 'full'); echo $image_url[0]; ?>" media="(min-width: 992px)"/>
					<img class="img--bg" src="<?php $image_url = wp_get_attachment_image_src($bg_image, 'full'); echo $image_url[0]; ?>" alt="img"/>
				</picture>
				<div class="promo-primary__description"> <span><?php echo $page_top_heading; ?></span></div>
				<div class="container">
					<div class="row">
						<div class="col-auto">
							<div class="align-container">
								<div class="align-container__item"><span class="promo-primary__pre-title"><?php echo $website_title; ?></span>
									<h1 class="promo-primary__title"><span><?php echo $title_prename; ?></span> <span><?php echo $page_title; ?></span></h1>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		<?php return ob_get_clean();
	}


	add_shortcode('all-causes', 'custom_all_causes');
	function custom_all_causes($attr, $content=""){
		$attr = extract(shortcode_atts([
			'page_top_heading'	=> 'Charity BD',
			
		], $attr));
	 	ob_start();?>
			<!-- causes inner start-->
				<section class="section causes-inner">
					<div class="container">
						<div class="row offset-margin">

							<?php 
								$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
								$tempcauses = new WP_Query([
									'post_type'	=>	'causes',
     								'paged' => $paged
								]);
								while ($tempcauses->have_posts()): $tempcauses->the_post();
									$goal 	=  	get_post_meta(get_the_id(), '_causes-goal-amount', true);
									$achive = 	get_post_meta(get_the_id(), '_causes-achive-amount', true);

									$percentage = intval(($achive/$goal)*100);
									if($percentage<100):
							?>
							<div class="col-md-8 offset-md-2 col-lg-12 offset-lg-0">
								<div class="causes-item causes-item--style-3">
									<div class="causes-item__body">
										<div class="row align-items-center">
											<div class="col-lg-5 col-xl-4">
												<div class="causes-item__img">
													<?php the_post_thumbnail('thumbnail', array('class' => 'img--bg')); ?>
												</div>
											</div>
											<div class="col-lg-7 col-xl-8">
												<div class="causes-item__action">
													<div class="causes-item__badge" style="background-color: #49C2DF"><a href="<?php echo esc_url(''); ?>"><?php echo get_the_term_list(get_the_ID(), 'causes-taxonomy'); ?></a></div>
													<a class="causes-item__link" href="<?php echo get_post_meta(get_the_id(), '_causes-donate-btn-link', true); ?>"><?php echo get_post_meta(get_the_id(), '_causes-donate-btn-text', true); ?></a>
												</div>
												<div class="causes-item__top">
													<h6 class="causes-item__title"> 
														<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
													</h6>
													<p><?php echo wp_trim_words(get_the_content(), 50, ''); ?></p>
												</div>
												<div class="causes-item__lower">
													<div class="progress-bar">
														<div class="progress-bar__inner" style="width: <?php echo $percentage; ?>%;">
															<div class="progress-bar__value"><?php echo $percentage; ?>%</div>
														</div>
													</div>
													<div class="causes-item__details-holder">
														<div class="causes-item__details-item"><span>Goal: </span><span><?php echo get_post_meta(get_the_id(), '_causes-goal-amount', true); ?><?php echo get_post_meta(get_the_id(), '_causes-currency-symbol', true); ?></span></div>
														<div class="causes-item__details-item text-right"><span>Pledged: </span><span><?php echo get_post_meta(get_the_id(), '_causes-achive-amount', true); ?><?php echo get_post_meta(get_the_id(), '_causes-currency-symbol', true); ?></span></div>
													</div>
												</div>
												<div class="read-more">
													<a href="<?php the_permalink(); ?>">Read More</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php endif; endwhile; ?>
						</div>
					</div>

					<div class="pagination">
					     <?php
					     $big = 999999999;
					     echo paginate_links( array(
					          'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
					          'format' => '?paged=%#%',
					          'current' => max( 1, get_query_var('paged') ),
					          'total' => $tempcauses->max_num_pages,
					          'prev_text' => '<i class="fa fa-angle-left" aria-hidden="true"></i>Back',
					          'next_text' => 'Next<i class="fa fa-angle-right" aria-hidden="true"></i>'
					     ) );
					?>
					</div>
					<?php wp_reset_postdata(); ?>
					
				</section>
				<!-- causes inner end-->
		<?php return ob_get_clean();
	}

	add_shortcode('all-events', 'custom_all_events');
	function custom_all_events($attr, $content=""){
		$attr = extract(shortcode_atts([
			'image_link'	=> '#',
			
		], $attr));
	 	ob_start();?>
			<!-- events inner start-->
		<section class="section events-inner"><img class="events-inner__bg" src="<?php $image_url = wp_get_attachment_image_src($image_link, 'full'); echo $image_url[0]; ?>" alt="img"/>
			<div class="container">
				<div class="row offset-30">

					<?php 
						$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
						$tempevents = new WP_Query([
							'post_type'	=>	'events',
 							'paged' => $paged
						]);
						while ($tempevents->have_posts()): $tempevents->the_post();
					?>
					<div class="col-xl-10 offset-xl-1">
						<div class="upcoming-item">
							<div class="upcoming-item__date"><span><?php echo get_post_meta(get_the_id(), '_events_start_date', true); ?></div>
							<div class="upcoming-item__body">
								<div class="row align-items-center">
									<div class="col-lg-5 col-xl-4">
										<div class="upcoming-item__img"><img class="img--bg" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="img"/></div>
									</div>
									<div class="col-lg-7 col-xl-8">
										<div class="upcoming-item__description">
											<h6 class="upcoming-item__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
											<p><?php echo wp_trim_words(get_the_content(), 20, ''); ?></p>
											<div class="upcoming-item__details">
												<p>
													<i class="fa-solid fa-calendar-days"></i> 
													<strong>Start:</strong>
													<?php echo get_post_meta(get_the_id(), '_events_start_date', true); ?> - 
													<strong>End:</strong>
													<?php echo get_post_meta(get_the_id(), '_events_end_date', true); ?>
												</p>
												<p>
													<i class="fa-solid fa-clock"></i>
													<strong>Start:</strong> -
													<?php echo get_post_meta(get_the_id(), '_events_time_start', true); ?>
													<strong> End:</strong>
													<?php echo get_post_meta(get_the_id(), '_events_time_end', true); ?>
													<strong>Time Zone:</strong>
													<?php echo get_post_meta(get_the_id(), '_events_time_zone', true); ?>
												</p>
												<p>
													<i class="fa-solid fa-map"></i> 
													<strong>Venue:</strong>
													<?php echo get_post_meta(get_the_id(),'_events-venue-address',true); ?>
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php endwhile; ?>
				</div>	
			</div>
			<div class="pagination">
		    <?php
		     	$big = 999999999;
		     	echo paginate_links( array(
		        	'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
		          'format' => '?paged=%#%',
		          'current' => max( 1, get_query_var('paged') ),
		          'total' => $tempcauses->max_num_pages,
		          'prev_text' => '<i class="fa fa-angle-left" aria-hidden="true"></i>Back',
		          'next_text' => 'Next<i class="fa fa-angle-right" aria-hidden="true"></i>'
		     	) );
				?>
			</div>
			<?php wp_reset_postdata(); ?>
		</section>
		<!-- events inner end-->
		<?php return ob_get_clean();
	}


	add_shortcode('all-stories', 'custom_all_stories');
	function custom_all_stories($attr, $content=""){
		$attr = extract(shortcode_atts([
			'image_link'	=> '#',
			
		], $attr));
	 	ob_start();?>
			<!-- stories start-->
        <section class="section stories">
          <div class="container">
            <div class="row offset-70">

              <?php 
                $count = 0;
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $tempevents = new WP_Query([
                  'post_type' =>  'stories',
                  'paged' => $paged
                ]);
                while ($tempevents->have_posts()): $tempevents->the_post();
                  $count++;

                  if($count%2==1):
              ?>
              <div class="col-md-10 offset-md-1 col-lg-12 offset-lg-0">
                <div class="stories-item">
                  <div class="row align-items-center">
                    <div class="col-lg-6 col-xl-5">
                      <div class="img-box"><img class="img--layout" src="<?php echo get_post_meta( get_the_ID(), '_events-bg-image', true ); ?>" alt="img"/>
                        <div class="img-box__img"><img class="img--bg" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="img"/></div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 offset-xl-1">
                      <div class="heading heading--primary"><span class="heading__pre-title"><h4><?php echo $count; ?></h4></span>
                        <h2 class="heading__title"><span><a style="text-decoration:none;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span></h2>
                      </div>
                      <p><?php echo wp_trim_words(get_the_content(), 45, '...'); ?></p><a class="button stories-item__button button--primary" href="<?php the_permalink(); ?>"><?php echo get_post_meta( get_the_ID(), '_events-btn-text', true ); ?></a>
                    </div>
                  </div>
                </div>
              </div>

              <?php endif; if($count%2==0): ?>

              <div class="col-md-10 offset-md-1 col-lg-12 offset-lg-0">
                <div class="stories-item">
                  <div class="row align-items-center flex-column-reverse flex-lg-row">
                    <div class="col-lg-6 col-xl-6">
                      <div class="heading heading--primary"><span class="heading__pre-title"><h4><?php echo $count; ?></h4></span>
                        <h2 class="heading__title"><span><a style="text-decoration:none;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span></h2>
                      </div>
                      <p><?php echo wp_trim_words(get_the_content(), 45, '...'); ?></p><a class="button stories-item__button button--primary" href="<?php the_permalink(); ?>"><?php echo get_post_meta( get_the_ID(), '_events-btn-text', true ); ?></a>
                    </div>
                    <div class="col-lg-6 col-xl-5 offset-xl-1">
                      <div class="img-box"><img class="img--layout" src="<?php echo get_post_meta( get_the_ID(), '_events-bg-image', true ); ?>" alt="img"/>
                        <div class="img-box__img"><img class="img--bg" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="img"/></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <?php endif; endwhile; ?>

            </div>
          </div>
          <div class="pagination">
            <?php
              $big = 999999999;
              echo paginate_links( array(
                  'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
                  'format' => '?paged=%#%',
                  'current' => max( 1, get_query_var('paged') ),
                  'total' => $tempcauses->max_num_pages,
                  'prev_text' => '<i class="fa fa-angle-left" aria-hidden="true"></i>Back',
                  'next_text' => 'Next<i class="fa fa-angle-right" aria-hidden="true"></i>'
              ) );
            ?>
          </div>
          <?php wp_reset_postdata(); ?>
        </section>
        <!-- stories end-->
		<?php return ob_get_clean();
	}


	


	


 



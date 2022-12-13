<?php 
	
	add_shortcode('home-slider-1','custom_home_slider_1');
	function custom_home_slider_1($attr, $content){
		ob_start(); ?>
			<!-- promo start-->
			<section class="promo">
				<div class="promo-slider">
					<?php  
						$tempslider = new WP_Query([
							'post_type'	=>	'charitybd-slider',
							'orderby'	=>	'rand',
							'order'		=>	'DESC'
						]);

						while($tempslider->have_posts()): $tempslider->the_post();
					?>
					<div class="promo-slider__item promo-slider__item--style-1">
						<picture>
							<source srcset="<?php echo get_the_post_thumbnail_url(); ?>" media="(min-width: 835px)"/>
							<source srcset="<?php echo get_the_post_thumbnail_url(); ?>" media="(min-width: 376px)"/>
							<img class="img--bg" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="img"/>
						</picture>
						<div class="container">
							<div class="row">
								<div class="col-12">
									<div class="align-container">
										<div class="align-container__item">
											<div class="promo-slider__wrapper-1">
												<h2 class="promo-slider__title">
													<span><?php the_title(); ?></span><br>
													<span><?php echo get_post_meta(get_the_id(),'_slider-subtitle',true) ?></span>
												</h2>
											</div>
											<div class="promo-slider__wrapper-2">
												<p class="promo-slider__subtitle"><?php the_content(); ?></p>
											</div>
											<div class="promo-slider__wrapper-3">
												<a class="button promo-slider__button button--primary" href="<?php echo get_post_meta(get_the_id(),'_slider-btn-link',true) ?>"><?php echo get_post_meta(get_the_id(),'_slider-btn-text',true) ?></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php endwhile; ?>
					
				</div>

				<!-- promo socials start-->
				<ul class="promo-socials">
					<?php global $redux_demo;  if($redux_demo['instagram']) : ?>
					<li class="promo-socials__item">
						<a class="promo-socials__link" href="<?php echo $redux_demo['instagram'] ?>">
							<i class="fa fa-instagram" aria-hidden="true"></i>
						</a>
					</li>
					<?php endif; ?>
					<?php if($redux_demo['googleplus']) : ?>
					<li class="promo-socials__item">
						<a class="promo-socials__link" href="<?php echo $redux_demo['googleplus'] ?>">
							<i class="fa fa-google-plus" aria-hidden="true"></i>
						</a>
					</li>
					<?php endif; ?>
					<?php if($redux_demo['tweet']) : ?>
					<li class="promo-socials__item">
						<a class="promo-socials__link" href="<?php echo $redux_demo['tweet'] ?>">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</a>
					</li>
					<?php endif; ?>
					<?php if($redux_demo['facebook']) : ?>
					<li class="promo-socials__item">
						<a class="promo-socials__link" href="<?php echo $redux_demo['facebook'] ?>">
							<i class="fa fa-facebook" aria-hidden="true"></i>
						</a>
					</li>
					<?php endif; ?>
				</ul>
				<!-- promo socials end-->

				<!-- promo pannel start-->
				<div class="promo-pannel">
					<!-- <a class="anchor promo-pannel__anchor" href="#about"> 
						<span>Scroll Down</span>
					</a> -->
					<div class="promo-pannel__video">
						<img class="img--bg" src="<?php echo get_theme_file_uri(); ?>/assets/img/video_block.jpg" alt="image"/>
						<a class="video-trigger" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk">
							<span>Watch our video</span>
							<i class="fa fa-play" aria-hidden="true"></i>
						</a>
					</div>
					<div class="promo-pannel__phones">
						<p class="promo-pannel__title">Phone numbers</p>
						<a class="promo-pannel__link" href="tel:<?php echo $redux_demo['ph1'] ?>"><?php echo $redux_demo['ph1'] ?></a>
						<a class="promo-pannel__link" href="tel:<?php echo $redux_demo['ph2'] ?>"><?php echo $redux_demo['ph2'] ?></a>
					</div>
					<div class="promo-pannel__email">
						<p class="promo-pannel__title">Email</p>
						<a class="promo-pannel__link" href="mailto:<?php echo $redux_demo['email'] ?>"><?php echo $redux_demo['email'] ?></a>
					</div>
				</div>
				<!-- promo pannel end-->
				<!-- slider nav start-->
				<div class="slider__nav slider__nav--promo">
					<div class="promo-slider__count"></div>
					<div class="slider__arrows">
						<div class="slider__prev">
							<i class="fa fa-chevron-left" aria-hidden="true"></i>
						</div>
						<div class="slider__next">
							<i class="fa fa-chevron-right" aria-hidden="true"></i>
						</div>
					</div>
				</div>
				<!-- slider nav end-->
			</section>
			<!-- promo end-->

		<?php return ob_get_clean();
	}

	add_shortcode('home-about', 'custom_home_about');
	function custom_home_about($attr, $content){
		$attr = extract(shortcode_atts([
			'heading'	=> 'About Us',
			'title'		=> 'Help is Our',
			'subtitle'	=> 'Main Goal',
			'content2'	=> '<strong>Thresher shark rudd African lungfish silverside, Red salmon rockfish grunion, garpike zebra danio king-of-the-salmon banjo catfish.</strong></p>
							<p>Sea chub demoiselle whalefish zebra lionfish mud cat pelican eel. Minnow snoek icefish velvet-belly shark, California halibut round stingray northern sea robin. Southern grayling trout-perch</p>
							<p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail, Canthigaster rostrata. Midshipman dartfish Modoc sucker, yellowtail kingfish basslet. Buri chimaera triplespine northern sea robin zingel lancetfish galjoen fish, catla wolffish, mosshead warbonnet',
			'aboutbt'	=>	'More About',
			'aboutbl'	=>	'#',
			'imagelink'	=>	'#',
			'imagebglink'	=>	'#',
			'title2'	=>	'We are Awesome Volounteer Team',
			'content3'	=>	'Gray eel-catfish longnose whiptail catfish smalleye squaretail queen danio unicorn fish shortnose greeneye fusilier fish silver carp nibbler sharksucker tench lookdown catfish',
			'aboutbt2'	=>	'Become a volounteer',
			'aboutbl2'	=>	'#',
		], $attr));
		ob_start(); ?>
			<!-- about us start-->
			<section class="section about-us" id="about">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<div class="heading heading--primary"><span class="heading__pre-title"><?php echo do_shortcode($heading); ?></span>
								<h2 class="heading__title"><span><?php echo do_shortcode($title); ?></span> <span><?php echo do_shortcode($subtitle); ?></span></h2>
							</div>
							<p><?php echo do_shortcode($content2); ?></p>
							<a class="button button--primary" href="<?php echo do_shortcode($aboutbl); ?>"><?php echo do_shortcode($aboutbt); ?></a>
						</div>
						<div class="col-lg-6 col-xl-5 offset-xl-1">
							<div class="info-box">
								<img class="img--layout" src="<?php $image_url= wp_get_attachment_image_src($imagelink, 'full');echo $image_url[0];?>" alt="img"/>
								<img class="img--bg" src="<?php $image_url = wp_get_attachment_image_src($imagebglink, 'full'); echo $image_url[0]; ?>" alt="img"/>
								<h4 class="info-box__title"><?php echo do_shortcode($title2); ?></h4>
								<p><?php echo do_shortcode($content3); ?></p>
								<a class="info-box__link" href="<?php echo do_shortcode($aboutbl2); ?>"><?php echo do_shortcode($aboutbt2); ?></a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- about us end-->
		<?php return ob_get_clean();
	}

	add_shortcode('home-services', 'custom_home_services');
	function custom_home_services($attr, $content){
		$attr = extract(shortcode_atts([
			'heading'	=> 'Services',
			'title'		=> 'What We do',
			'subtitle'	=> 'for all people',
			'imagelink'	=>	'#',
			'imagetitle' =>	'Medicine Help',
			'imagecontent'	=>	'Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail',
			'imagelink2'	=>	'#',
			'imagetitle2' =>	'Medicine Help',
			'imagecontent2'	=>	'Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail',
			'imagelink3'	=>	'#',
			'imagetitle3' =>	'Medicine Help',
			'imagecontent3'	=>	'Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail',
			'imagelink4'	=>	'#',
			'imagetitle4' =>	'Medicine Help',
			'imagecontent4'	=>	'Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail',
		], $attr));
		ob_start();?>
			<!-- section start-->
			<section class="section">
				<div class="container">
					<div class="row margin-bottom">
						<div class="col-12">
							<div class="heading heading--primary heading--center"><span class="heading__pre-title"><?php echo do_shortcode($heading); ?></span>
								<h2 class="heading__title no-margin-bottom"><span><?php echo do_shortcode($title); ?></span> <span><?php echo do_shortcode($subtitle); ?></span></h2>
							</div>
						</div>
					</div>
					<div class="row offset-margin">
						<div class="col-sm-6 col-lg-3">
							<div class="icon-item text-left text-center text-sm-left">
								<div class="icon-item__img"><img src="<?php $image_url= wp_get_attachment_image_src($imagelink, 'full');echo $image_url[0];?>" alt="icon"/></div>
								<div class="icon-item__text">
									<p><?php echo do_shortcode($imagetitle); ?></p>
									<span><?php echo do_shortcode($imagecontent4); ?></span>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3">
							<div class="icon-item text-left text-center text-sm-left">
								<div class="icon-item__img"><img src="<?php $image_url= wp_get_attachment_image_src($imagelink2, 'full');echo $image_url[0];?>" alt="icon"/></div>
								<div class="icon-item__text">
									<p><?php echo do_shortcode($imagetitle2); ?></p>
									<span><?php echo do_shortcode($imagecontent2); ?></span>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3">
							<div class="icon-item text-left text-center text-sm-left">
								<div class="icon-item__img"><img src="<?php $image_url= wp_get_attachment_image_src($imagelink3, 'full');echo $image_url[0];?>" alt="icon"/></div>
								<div class="icon-item__text">
									<p><?php echo do_shortcode($imagetitle3); ?></p>
									<span><?php echo do_shortcode($imagecontent3); ?></span>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3">
							<div class="icon-item text-left text-center text-sm-left">
								<div class="icon-item__img"><img src="<?php $image_url= wp_get_attachment_image_src($imagelink4, 'full');echo $image_url[0];?>" alt="icon"/></div>
								<div class="icon-item__text">
									<p><?php echo do_shortcode($imagetitle4); ?></p>
									<span><?php echo do_shortcode($imagecontent4); ?></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		<?php return ob_get_clean();
	}

	add_shortcode('home-causes', 'custom_home_causes');
	function custom_home_causes($attr, $content){
		$attr = extract(shortcode_atts([
			'heading'	=> 'What We do',
			'title'		=> 'Helpo Causes',
			'content_text'	=> 'Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail, Canthigaster rostrata. Midshipman dartfish Modoc sucker, yellowtail kingfish',
			'page_button_text'	=>	'More Causes',
			'page_button_link'	=>	'#',
			'counter_title'		=>	'People We Helped on 2018',
			'counter_number'	=>	'200',
			'counter_symbol'	=>	'K',
			'counter_title2'	=>	'Dollars We Collected',
			'counter_number2'	=>	'666',
			'counter_symbol2'	=>	'bil',
			'bg_image'			=>	'#'
		], $attr));
		ob_start();?>
			<!-- causes start-->
			<section class="section causes"><img class="causes__bg" src="<?php $image_url = wp_get_attachment_image_src($bg_image, 'full'); echo $image_url[0]; ?>" alt="img"/>
				<div class="container">
					<div class="row align-items-end">
						<div class="col-xl-5">
							<div class="heading heading--primary"><span class="heading__pre-title"><?php echo $heading; ?></span>
								<h2 class="heading__title"><span><?php echo $title; ?></span></h2>
								<p><?php echo $content_text; ?></p>
							</div>
						</div>
						<div class="col-xl-6 offset-xl-1 d-none d-xl-block">
							<div class="row offset-margin">
								<div class="col-6">
									<div class="counter-item counter-item--style-3">
										<div class="counter-item__top">
											<h6 class="counter-item__title"><?php echo $counter_title; ?></h6>
										</div>
										<div class="counter-item__lower"><span class="js-counter"><?php echo $counter_number; ?></span><span><?php echo $counter_symbol; ?></span></div>
									</div>
								</div>
								<div class="col-6">
									<div class="counter-item counter-item--style-3">
										<div class="counter-item__top">
											<h6 class="counter-item__title"><?php echo $counter_title2; ?></h6>
										</div>
										<div class="counter-item__lower">
											<span class="js-counter"><?php echo $counter_number2; ?></span>
											<span><?php echo $counter_symbol2; ?></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row align-items-end margin-bottom">
						<div class="col-sm-6"><a class="button button--primary" href="<?php echo $page_button_link; ?>"><?php echo $page_button_text; ?></a></div>
						<div class="col-sm-6 d-flex justify-content-sm-end">
							<!-- slider nav start-->
							<div class="slider__nav causes-slider__nav">
								<div class="slider__arrows">
									<div class="slider__prev"><i class="fa fa-chevron-left" aria-hidden="true"></i>
									</div>
									<div class="slider__next"><i class="fa fa-chevron-right" aria-hidden="true"></i>
									</div>
								</div>
							</div>
							<!-- slider nav end-->
						</div>
					</div>
				</div>
				<div class="causes-holder offset-margin">
					<div class="causes-holder__wrapper">
						<div class="causes-slider offset-margin">
							<?php 
								$tempcauses = new WP_Query([
									'post_type'	=>	'causes',
									'posts_per_page'	=> 50,
									'orderby'	=> 'rand',
									'order'		=>	'DESC'
								]);
								while ($tempcauses->have_posts()): $tempcauses->the_post();
									if(get_post_meta(get_the_id(), '_causes-goal-amount', true)){
										$goal 	=  	get_post_meta(get_the_id(), '_causes-goal-amount', true);
									}
									if(get_post_meta(get_the_id(), '_causes-achive-amount', true)){
										$achive = 	get_post_meta(get_the_id(), '_causes-achive-amount', true);
									}
									if($goal > 0 || $achive > 0){
										$percentage = intval(($achive/$goal)*100);
									}
									else{
										$percentage = 0;
									}
									
								if($percentage<100) :
							?>

							<div class="causes-slider__item">
								<div class="causes-item causes-item--primary">
									<div class="causes-item__body">
										<div class="causes-item__top">
											<h6 class="causes-item__title"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
											<p><?php echo wp_trim_words(get_the_content(), 20, '...'); ?></p>
										</div>
										<div class="causes-item__img">
											
											<div class="causes-item__badge" style="background-color: #49C2DF"><a href="<?php echo esc_url(''); ?>"><?php echo get_the_term_list(get_the_ID(), 'causes-taxonomy'); ?></a></div>
											
											<?php the_post_thumbnail('thumbnail', array('class' => 'img--bg')); ?>
											<img class="img--bg" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="img"/>
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
									</div><a class="button causes-item__button button--primary" href="<?php the_permalink(); ?>">+ Donate</a>
								</div>
							</div>

							<?php endif; endwhile; ?>
						</div>
					</div>
				</div>
			</section>
			<!-- causes end-->
		<?php return ob_get_clean();
	}

	add_shortcode('home-project', 'custom_home_project');
	function custom_home_project($attr, $content){
		$attr = extract(shortcode_atts([
			'heading'	=> 'What we Did',
			'title'		=> 'Helpo</span> <span>Projects',
			'content_text'	=> 'Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail, Canthigaster rostrata. Midshipman dartfish Modoc sucker, yellowtail kingfish'
		], $attr));
	 	ob_start();?>
			<!-- projects start-->
			<section class="section projects no-padding-top no-padding-bottom">
				<div class="container">
					<div class="row align-items-end margin-bottom">
						<div class="col-lg-9">
							<div class="heading heading--primary">
								<span class="heading__pre-title"><?php echo $heading; ?></span>
								<h2 class="heading__title"><span><?php echo $title; ?></span></h2>
								<p class="no-margin-bottom"><?php echo $content_text; ?></p>
							</div>
						</div>
					</div>
				</div>
				<div class="row no-gutters projects-masonry">

					<?php 
						$tempcauses = new WP_Query([
							'post_type'	=>	'causes',
							'posts_per_page'	=> 100,
							'orderby'		=> 'rand',
							'order'			=>	'DESC'
						]);
						$count = 0;
						while ($tempcauses->have_posts()): $tempcauses->the_post();
							$goal 	=  	get_post_meta(get_the_id(), '_causes-goal-amount', true);
							$achive = 	get_post_meta(get_the_id(), '_causes-achive-amount', true);

							$percentage = intval(($achive/$goal)*100);
						if($percentage==100):
							//if(get_post_meta(get_the_id(), '_causes-end-date', true)){
								$count++;
							//}
							if($count==1):
					?>
					<div class="col-lg-6 col-xl-4 projects-masonry__item projects-masonry__item--height-1 projects-masonry__item--vertical">
						<div class="projects-masonry__img">
							<img class="img--bg" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="img"/>
						</div>
						<div class="projects-masonry__text" style="background-color: #2EC774;">
							<div class="projects-masonry__inner">
								<span class="projects-masonry__badge" style="background: #49C2DF;"><?php echo get_the_term_list(get_the_ID(), 'causes-taxonomy'); ?></span>
								<h3 class="projects-masonry__title"> 
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h3>
								<p><?php echo wp_trim_words(get_the_content(),15,'...'); ?></p>
								<div class="projects-masonry__details-holder">
									<div class="projects-masonry__details-item">
										<span>Goal: </span>
										<span><?php echo get_post_meta(get_the_id(), '_causes-goal-amount', true); ?><?php echo get_post_meta(get_the_id(), '_causes-currency-symbol', true); ?></span>
									</div>
									<div class="projects-masonry__details-item">
										<span>Date: </span>
										<span><?php echo get_post_meta(get_the_id(), '_causes-end-date', true); ?></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php endif; if($count==2): ?>
					<div class="col-lg-6 col-xl-8 projects-masonry__item projects-masonry__item--height-2 projects-masonry__item--horizontal">
						<div class="projects-masonry__img">
							<img class="img--bg" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="img"/>
						</div>
						<div class="projects-masonry__text" style="background-color: #9BC35E;">
							<div class="projects-masonry__inner">
								<span class="projects-masonry__badge" style="background: #F36F8F;"><?php echo get_the_term_list(get_the_ID(), 'causes-taxonomy'); ?></span>
								<h3 class="projects-masonry__title"> 
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h3>
								<p><?php echo wp_trim_words(get_the_content(),15,'...'); ?></p>
								<div class="projects-masonry__details-holder">
									<div class="projects-masonry__details-item">
										<span>Goal: </span>
										<span><?php echo get_post_meta(get_the_id(), '_causes-goal-amount', true); ?><?php echo get_post_meta(get_the_id(), '_causes-currency-symbol', true); ?></span>
									</div>
									<div class="projects-masonry__details-item">
										<span>Date: </span>
										<span><?php echo get_post_meta(get_the_id(), '_causes-end-date', true); ?></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php endif; if($count==3): ?>
					<div class="col-lg-6 col-xl-8 projects-masonry__item projects-masonry__item--height-1 projects-masonry__item--primary">
						<div class="projects-masonry__img">
							<img class="img--bg" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="img"/>
							<div class="projects-masonry__inner">
								<span class="projects-masonry__badge" style="background: #F8AC3A;"><?php echo get_the_term_list(get_the_ID(), 'causes-taxonomy'); ?></span>
								<h3 class="projects-masonry__title"> 
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h3>
								<p><?php echo wp_trim_words(get_the_content(),15,'...'); ?></p>
								<div class="projects-masonry__details-holder">
									<div class="projects-masonry__details-item">
										<span>Goal: </span>
										<span><?php echo get_post_meta(get_the_id(), '_causes-goal-amount', true); ?><?php echo get_post_meta(get_the_id(), '_causes-currency-symbol', true); ?></span>
									</div>
									<div class="projects-masonry__details-item">
										<span>Date: </span>
										<span><?php echo get_post_meta(get_the_id(), '_causes-end-date', true); ?></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php endif; if($count==4): ?>
					<div class="col-lg-6 col-xl-4 projects-masonry__item projects-masonry__item--height-2 projects-masonry__item--primary">
						<div class="projects-masonry__img">
							<img class="img--bg" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="img"/>
							<div class="projects-masonry__inner">
								<span class="projects-masonry__badge" style="background: #2EC774;"><?php echo get_the_term_list(get_the_ID(), 'causes-taxonomy'); ?></span>
								<h3 class="projects-masonry__title"> 
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h3>
								<p><?php echo wp_trim_words(get_the_content(),15,'...'); ?></p>
								<div class="projects-masonry__details-holder">
									<div class="projects-masonry__details-item">
										<span>Goal: </span>
										<span><?php echo get_post_meta(get_the_id(), '_causes-goal-amount', true); ?><?php echo get_post_meta(get_the_id(), '_causes-currency-symbol', true); ?></span>
									</div>
									<div class="projects-masonry__details-item">
										<span>Date: </span>
										<span><?php echo get_post_meta(get_the_id(), '_causes-end-date', true); ?></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php endif; if($count==5): ?>
					<div class="col-lg-6 col-xl-8 projects-masonry__item projects-masonry__item--height-2 projects-masonry__item--horizontal">
						<div class="projects-masonry__img">
							<img class="img--bg" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="img"/>
						</div>
						<div class="projects-masonry__text" style="background-color: #E78F51;">
							<div class="projects-masonry__inner">
								<span class="projects-masonry__badge" style="background: #2EC774;"><?php echo get_the_term_list(get_the_ID(), 'causes-taxonomy'); ?></span>
								<h3 class="projects-masonry__title"> 
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h3>
								<p><?php echo wp_trim_words(get_the_content(),15,'...'); ?></p>
								<div class="projects-masonry__details-holder">
									<div class="projects-masonry__details-item">
										<span>Goal: </span>
										<span><?php echo get_post_meta(get_the_id(), '_causes-goal-amount', true); ?><?php echo get_post_meta(get_the_id(), '_causes-currency-symbol', true); ?></span>
									</div>
									<div class="projects-masonry__details-item">
										<span>Date: </span>
										<span><?php echo get_post_meta(get_the_id(), '_causes-end-date', true); ?></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php endif; if($count==6): ?>
					<div class="col-lg-6 col-xl-4 projects-masonry__item projects-masonry__item--height-2 projects-masonry__item--primary">
						<div class="projects-masonry__img">
							<img class="img--bg" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="img"/>
							<div class="projects-masonry__inner">
								<span class="projects-masonry__badge" style="background: #F36F8F;"><?php echo get_the_term_list(get_the_ID(), 'causes-taxonomy'); ?></span>
								<h3 class="projects-masonry__title"> 
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h3>
								<p><?php echo wp_trim_words(get_the_content(),15,'...'); ?></p>
								<div class="projects-masonry__details-holder">
									<div class="projects-masonry__details-item">
										<span>Goal: </span>
										<span><?php echo get_post_meta(get_the_id(), '_causes-goal-amount', true); ?><?php echo get_post_meta(get_the_id(), '_causes-currency-symbol', true); ?></span>
									</div>
									<div class="projects-masonry__details-item">
										<span>Date: </span>
										<span><?php echo get_post_meta(get_the_id(), '_causes-end-date', true); ?></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php endif; endif; endwhile; ?>
				</div>
			</section>
			<!-- projects end-->
	 	<?php return ob_get_clean();
	}

	add_shortcode('home-events', 'custom_home_events');
	function custom_home_events($attr, $content){
		$attr = extract(shortcode_atts([
			'heading'	=> 'Events',
			'title'		=> 'Helpo Holds</span> <span>for You',
			'content_text'	=> 'Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail, Canthigaster rostrata. Midshipman dartfish Modoc sucker, yellowtail kingfish',
			'bg_image'	=>	'#',
			'page_button_text'	=>	'View all events',
			'page_button_link'	=>	'#',
		], $attr));
	 	ob_start();?>
			<!-- events start-->
			<section class="section events"><img class="events__bg" src="<?php $image_url = wp_get_attachment_image_src($bg_image, 'full'); echo $image_url[0]; ?>" alt="img"/>
				<div class="container">
					<div class="row margin-bottom">
						<div class="col-12">
							<div class="heading heading--primary heading--center"><span class="heading__pre-title"><?php echo $heading; ?></span>
								<h2 class="heading__title"><span><?php echo $title; ?></span></h2>
								<p class="no-margin-bottom"><?php echo $content_text; ?></p>
							</div>
						</div>
					</div>
					<div class="row">
						<?php 
							$tempevents = new WP_Query([
								'post_type'	=>	'events',
								'posts_per_page'	=> 3,
								'orderby'	=> 'rand'
							]);

							while ($tempevents->have_posts()): $tempevents->the_post();

						?>
						<div class="col-md-6 col-lg-4">
							<div class="event-item">
								<div class="event-item__img"><img class="img--bg" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="img"/></div>
								<div class="event-item__content">
									<h6 class="event-item__title"><a href="#"><?php the_title(); ?></a></h6>
									<p><b><?php echo get_post_meta(get_the_id(),'_events-venue-address',true); ?></b></p>
									<p><?php echo get_post_meta(get_the_id(), '_events_start_date', true); ?><b> to </b><?php echo get_post_meta(get_the_id(), '_events_end_date', true); ?></p>
									<p><b><?php echo get_post_meta(get_the_id(), '_events_time_start', true); ?><b> to </b><?php echo get_post_meta(get_the_id(), '_events_time_end', true); ?></b> Everyday</p>
									<p><b>Time Zone: </b><?php echo get_post_meta(get_the_id(), '_events_time_zone', true); ?></p>
								</div>
							</div>
						</div>
						<?php endwhile; ?>
					</div>
					<div class="row">
						<div class="col-12 text-center"><a class="button button--primary" href="<?php echo $page_button_link; ?>"><?php echo $page_button_text; ?></a></div>
					</div>
				</div>
			</section>
			<!-- events end-->
	 	<?php return ob_get_clean();
	}


	add_shortcode('home-volunteer', 'custom_home_volunteer');
	function custom_home_volunteer($attr, $content){
		$attr = extract(shortcode_atts([
			'heading'	=> 'Volunteer',
			'title'		=> 'Delivering help and hope <br/>to children through sponsorship.',
			'content_text'	=> 'Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail, Canthigaster rostrata. Midshipman dartfish Modoc sucker, yellowtail kingfish',
			'bg_image'	=>	'#',
			'page_button_text'	=>	'Become a Volunteer',
			'page_button_link'	=>	'#',
		], $attr));
	 	ob_start();?>
			<!-- text section start-->
			<section class="section text-section"><img class="text-section__bg" src="<?php $image_url = wp_get_attachment_image_src($bg_image, 'full'); echo $image_url[0]; ?>" alt="img"/>
				<div class="container">
					<div class="row">
						<div class="col-12 text-center">
							<h2 class="text-section__heading"><?php echo $heading; ?></h2>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-8 offset-lg-4 col-xl-7 offset-xl-4">
							<h3 class="text-section__title"><?php echo $title; ?></h3>
							<p><?php echo $content_text; ?></p>
							<a class="button button--primary" href="<?php echo $page_button_link; ?>"><?php echo $page_button_text; ?></a>
						</div>
					</div>
				</div>
			</section>
			<!-- text section end-->
	 	<?php return ob_get_clean();
	}

	add_shortcode('text-testimonial', 'custom_text_testimonial');
	function custom_text_testimonial($attr, $content){
		$attr = extract(shortcode_atts([
			'heading'	=> 'Testimonials',
			'title'		=> 'What People</span><br/><span>Says About Us',
			'bg_image'	=>	'#',
		], $attr));
	 	ob_start();?>
			<!-- testimonials style-2 start-->
			<section class="section testimonials--style-2">
				<div class="testimonials--style-2__bg jarallax">
					<picture>
						<source srcset="<?php $image_url = wp_get_attachment_image_src($bg_image, 'full'); echo $image_url[0]; ?>" media="(min-width: 992px)"/>
						<img class="jarallax-img" src="<?php $image_url = wp_get_attachment_image_src($bg_image, 'full'); echo $image_url[0]; ?>" alt="img"/>
					</picture>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-xl-4">
							<div class="heading heading--primary"><span class="heading__pre-title"><?php echo $heading; ?></span>
								<h2 class="heading__title"><span><?php echo $title; ?></span></h2>
							</div>
							<!-- slider nav start-->
							<div class="slider__nav testimonials-style-2__nav">
								<div class="slider__arrows">
									<div class="slider__prev"><i class="fa fa-chevron-left" aria-hidden="true"></i>
									</div>
									<div class="slider__next"><i class="fa fa-chevron-right" aria-hidden="true"></i>
									</div>
								</div>
							</div>
							<!-- slider nav end-->
						</div>
						<div class="col-xl-8">
							<div class="testimonials-slider testimonials-slider--style-2">

								<?php 
									$categorys = get_terms('testimonials-taxonomy');
                            		foreach($categorys as $category){
                            			$tempcat = $category->name;
                            			if($tempcat == 'Text'){
                            				$tempcat2 = $tempcat;
                            			}
                            		}
                            		$temptestimonials = new WP_Query([
										'post_type'	=>	'testimonials',
										'testimonials-taxonomy' => $tempcat2,
									]);
									while ($temptestimonials->have_posts()): $temptestimonials->the_post();
								?>
								<div class="testimonials-slider__item">
									<div class="testimonials-slider__icon"><i class="fa-solid fa-quote-left"></i></div>
									<div class="testimonials-slider__text">
										<p><?php the_content(); ?></p>
										<div class="testimonials-slider__author">
											<span class="testimonials-slider__name"><?php the_title(); ?> </span><span class="testimonials-slider__position">, <?php echo get_post_meta(get_the_id(), '_testimonials-designation', true); ?></span>
										</div>
									</div>
								</div>
								<?php endwhile; ?>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- testimonials style-2 end-->
	 	<?php return ob_get_clean();
	}


	add_shortcode('home-blog', 'custom_home_blog');
	function custom_home_blog($attr, $content){
		$attr = extract(shortcode_atts([
			'heading'	=> 	'News',
			'title'		=> 	'Helpo</span> <span>Blog',
			'bg_image'	=>	'#'
		], $attr));
		ob_start();?>
			<!-- blog start-->
			<section class="section blog"><img class="blog__bg" src="<?php $image_url = wp_get_attachment_image_src($bg_image, 'full'); echo $image_url[0]; ?>" alt="img"/>
				<div class="container">
					<div class="row margin-bottom">
						<div class="col-12">
							<div class="heading heading--primary heading--center"><span class="heading__pre-title"><?php echo $heading; ?></span>
								<h2 class="heading__title no-margin-bottom"><span><?php echo $title; ?></span></h2>
							</div>
						</div>
					</div>
					<div class="row offset-margin">
						<?php 
							global $post;
							$homeblog = new WP_Query([
								'post_type'	=>	'post',
								'posts_per_page'	=>	4,
								'orderby'		=> 'rand',
							]);
							$count = 0;
							while($homeblog->have_posts()): $homeblog->the_post(); 
								$count = $count+1;
						?>
						<?php  if($count == 1 || $count > 3): ?>
						<div class="col-md-6 col-lg-5 col-xl-4">
							<div class="blog-item blog-item--style-1">
								<div class="blog-item__img">
									<div>
										<?php the_post_thumbnail('thumbnail', array('class' => 'img--bg')); ?>
									</div>
									<?php 
										$category_detail=get_the_category($post->ID);
										foreach($category_detail as $cd): 
											$category_link = get_category_link( $cd);
									?>
									<a style="text-decoration: none" href="<?php echo esc_url( $category_link ); ?>">	<span class="blog-item__badge" style="background-color: #F8AC3A;"><?php echo $cd->cat_name; ?></span></a>
									<?php endforeach; ?>
								</div>
								<div class="blog-item__content">
									<h6 class="blog-item__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
									<p><?php echo wp_trim_words(get_the_content(),30,'...'); ?><a href="<?php the_permalink(); ?>">Read More</a></p>
									<div class="blog-item__details"><span class="blog-item__date"><?php the_time('d M, Y'); ?></span><span>
										<svg class="icon">
											<use xlink:href="#comment"></use>
										</svg><?php echo get_comments_number($post->ID); ?></span></div>
								</div>
							</div>
						</div>
						<?php endif; ?>

						<?php if($count == 2 || $count == 3): ?>
						<div class="col-md-6 col-lg-7 col-xl-8">
							<div class="blog-item blog-item--style-2">
								<div>
									<?php the_post_thumbnail('thumbnail', array('class' => 'img--bg')); ?>
								</div>
								
								<div class="blog-item__content">
									<?php 
										$category_detail=get_the_category($post->ID);
										foreach($category_detail as $cd): 
											$category_link = get_category_link( $cd);
									?>
									<a style="text-decoration: none" href="<?php echo esc_url( $category_link ); ?>">	<span class="blog-item__badge" style="background-color: #F8AC3A;"><?php echo $cd->cat_name; ?></span></a>
									<?php endforeach; ?>

									<h6 class="blog-item__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
									<p><?php echo wp_trim_words(get_the_content(),30,'...'); ?><a href="<?php the_permalink(); ?>">Read More</a></p>
								</div>
								<div class="blog-item__details"><span class="blog-item__date"><?php the_time('d M, Y'); ?></span><span>
									<svg class="icon">
										<use xlink:href="#comment"></use>
									</svg><?php echo get_comments_number($post->ID); ?></span></div>
							</div>
						</div>
						<?php endif; ?>
						
					<?php endwhile; ?>
					</div>
				</div>
			</section>
			<!-- blog end-->
		<?php return ob_get_clean();
	}

	add_shortcode('image-testimonial', 'custom_image_testimonial');
	function custom_image_testimonial($attr, $content){
		$attr = extract(shortcode_atts([
			'heading'	=> 'Donors',
			'title'		=> 'Who Help</span> <span>Us'
		], $attr));
	 	ob_start();?>
			<!-- donors start-->
			<section class="section donors no-padding-top">
				<div class="container">
					<div class="row margin-bottom">
						<div class="col-12">
							<div class="heading heading--primary heading--center"><span class="heading__pre-title"><?php echo $heading; ?></span>
								<h2 class="heading__title no-margin-bottom"><span><?php echo $title; ?></span></h2>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<!-- donors slider start-->
							<div class="slider-holder">
                                <div class="donors-slider donors-slider--style-1">
                                	<?php  

                                		$categorys = get_terms('testimonials-taxonomy');
                                		foreach($categorys as $category){
                                			$tempcat = $category->name;
                                			if($tempcat == 'Image'){
                                				$tempcat2 = $tempcat;
                                			}
                                		}
                                		$temptestimonials = new WP_Query([
											'post_type'	=>	'testimonials',
											'testimonials-taxonomy' => $tempcat2,
										]);
										while ($temptestimonials->have_posts()): $temptestimonials->the_post();
                                	?>
                                    <div class="donors-slider__item">
                                        <div class="donors-slider__img"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="donor"/></div>
                                    </div>

                                   <?php endwhile; ?>
                                </div>
                            </div>
							<!-- donors slider end-->
						</div>
					</div>
				</div>
			</section>
			<!-- donors end-->
	 	<?php return ob_get_clean();
	}


	
	
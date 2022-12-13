<?php

	add_shortcode('about-team', 'custom_about_team');
	function custom_about_team($attr, $content){
		$attr = extract(shortcode_atts([
			'heading'	=> 'Team',
			'title'		=> 'Meet</span> <span>our Team',
		], $attr));
	 	ob_start();?>
			<!-- team start-->
			<section class="section team">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="heading heading--primary">
								<span class="heading__pre-title"><?php echo $heading; ?></span>
								<h2 class="heading__title no-margin-bottom"><span><?php echo $title; ?></span></h2>
							</div>
						</div>
					</div>
					<div class="row margin-bottom">

						<?php 
							$tempteam = new WP_Query([
								'post_type' =>	'teams',
							]);
							while ($tempteam->have_posts()): $tempteam->the_post();
						?>
						<div class="col-sm-6 col-lg-4 col-xl-3">
							<!-- iteam start-->
							<div class="team-item team-item--rounded">
								<ul class="team-item__socials">
									<?php if(get_post_meta( get_the_ID(), '_teams-fb-link', true )): ?>
									<li>
										<a href="<?php echo get_post_meta( get_the_ID(), '_teams-fb-link', true ); ?>">
											<i class="fa-brands fa-facebook"></i>
										</a>
									</li>
									<?php endif; ?>

									<?php if(get_post_meta( get_the_ID(), '_teams-ins-link', true )): ?>
									<li>
										<a href="<?php echo get_post_meta( get_the_ID(), '_teams-ins-link', true ); ?>">
											<i class="fa-brands fa-instagram"></i>
										</a>
									</li>
									<?php endif; ?>

									<?php if(get_post_meta( get_the_ID(), '_teams-tw-link', true )): ?>
									<li>
										<a href="<?php echo get_post_meta( get_the_ID(), '_teams-tw-link', true ); ?>">
											<i class="fa-brands fa-twitter"></i>
										</a>
									</li>
									<?php endif; ?>

									<?php if(get_post_meta( get_the_ID(), '_teams-yt-link', true )): ?>
									<li>
										<a href="<?php echo get_post_meta( get_the_ID(), '_teams-yt-link', true ); ?>">
											<i class="fa-brands fa-youtube"></i>
										</a>
									</li>
									<?php endif; ?>

									
									<?php if(get_post_meta( get_the_ID(), '_teams-lk-link', true )): ?>
									<li>
										<a href="<?php echo get_post_meta( get_the_ID(), '_teams-lk-link', true ); ?>">
											<i class="fa-brands fa-linkedin"></i>
										</a>
									</li>
									<?php endif; ?>
								</ul>
								<div class="team-item__img-holder">
									<img class="img--layout" src="<?php echo get_post_meta( get_the_ID(), '_teams-member-img-bg', true ); ?>" alt="layout"/>
									<div class="team-item__img">
										<img class="img--bg" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="teammate"/>
									</div>
								</div>
								<div class="team-item__description">
									<div class="team-item__name"><a style="text-decoration: none;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
									<div class="team-item__position"><?php echo get_post_meta( get_the_ID(), '_teams-member-designation', true ); ?></div>
								</div>
							</div>
							<!-- iteam end-->
						</div>
						<?php endwhile; ?>
						
					</div>
					
				</div>
			</section>
			<!-- team end-->
	 	<?php return ob_get_clean();
	}

	add_shortcode('about-us', 'custom_about_us');
	function custom_about_us($attr, $content){
		$attr = extract(shortcode_atts([
			'heading'		=> 'About Us',
			'title'			=> 'Help is Our</span> <span>Main Goal',
			'subtitle'		=> 'Thresher shark rudd African lungfish silverside, Red salmon rockfish grunion, garpike zebra danio king-of-the-salmon banjo catfish.',
			'content_text'	=>	'Sea chub demoiselle whalefish zebra lionfish mud cat pelican eel. Minnow snoek icefish velvet-belly shark, California halibut round stingray northern sea robin. Southern grayling trout-perch</p>
							<p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail, Canthigaster rostrata. Midshipman dartfish Modoc sucker, yellowtail kingfish basslet. Buri chimaera triplespine northern sea robin zingel lancetfish galjoen fish, catla wolffish, mosshead warbonnet',
			'imagelink'		=> '#',
			'bg_image'		=>	'#',
		], $attr));
	 	ob_start();?>
	 		<!-- about-us start-->
			<section class="section about-us">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 col-xl-5">
							<div class="img-box">
								<img class="img--layout" src="<?php $image_url= wp_get_attachment_image_src($bg_image, 'full');echo $image_url[0];?>" alt="img"/>
								<div class="img-box__img">
									<img class="img--bg" src="<?php $image_url= wp_get_attachment_image_src($imagelink, 'full');echo $image_url[0];?>" alt="img"/>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-xl-6 offset-xl-1">
							<div class="heading heading--primary"><span class="heading__pre-title"><?php echo $heading; ?></span>
								<h2 class="heading__title"><span><?php echo $title; ?></span></h2>
							</div>
							<p><strong><?php echo $subtitle; ?></strong></p>
							<p><?php echo $content_text; ?></p>
						</div>
					</div>
				</div>
			</section>
			<!-- about-us end-->
	 	<?php return ob_get_clean();
	}

	add_shortcode('about-mission', 'custom_about_mission');
	function custom_about_mission($attr, $content){
		$attr = extract(shortcode_atts([
			'title'	=> 'Our Mission',
			'subtitle'		=> 'We work around the globe to save lives, defeat poverty and achieve social justice.',
			'content_text'		=>	'Sea chub demoiselle whalefish zebra lionfish mud cat pelican eel. Minnow snoek icefish velvet-belly shark, California halibut round stingray northern sea robin. Southern grayling trout-perchSharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail, Canthigaster rostrata.</p>
							<p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail, Canthigaster rostrata. Midshipman dartfish Modoc sucker, yellowtail kingfish basslet. Buri chimaera triplespine northern ',
		], $attr));
	 	ob_start();?>
	 		<!-- about us style-2 start-->
			<section class="section about-us about-us--style-2 no-padding-top">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<h4 class="about-us__subtitle"><?php echo $title; ?></h4>
							<p><?php echo $content_text; ?></p>
						</div>
						<div class="col-lg-6 col-xl-5 offset-xl-1">
							<div class="about-us__text-aside"><?php echo $title; ?></div>
						</div>
					</div>
				</div>
			</section>
			<!-- about us style-2 end-->
	 	<?php return ob_get_clean();
	}

	add_shortcode('video-blog', 'custom_video_blog');
	function custom_video_blog($attr, $content){
		$attr = extract(shortcode_atts([
			'video_cover_img'	=> '#',
			'video_link'		=> 'https://www.youtube.com/watch?v=_sI_Ps7JSEk',
			'video_title'		=>	'Watch The Video',
			'bg_image'			=>	'#',
		], $attr));
	 	ob_start();?>
	 		<!-- video block start-->
			<section class="section video-block no-padding-top">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="video-frame">
								<img class="img--bg" src="<?php $image_url= wp_get_attachment_image_src($video_cover_img, 'full');echo $image_url[0];?>" alt="frame"/>
								<a class="video-trigger video-frame__trigger" href="<?php echo $video_link; ?>">
									<span class="video-frame__icon"><i class="fa fa-play" aria-hidden="true"></i></span>
									<span class="video-frame__text"><?php echo $video_title; ?></span>
								</a>
								<img class="video-frame__img-layout" src="<?php $image_url= wp_get_attachment_image_src($bg_image, 'full');echo $image_url[0];?>" alt="layout"/>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- video block end-->
	 	<?php return ob_get_clean();
	}

	add_shortcode('about-statistics', 'custom_statistics');
	function custom_statistics($attr, $content){
		$attr = extract(shortcode_atts([
			'heading'	=> 'What We do',
			'title'		=> 'Our</span> <span>Statistics',
			'bg_image'		=>	'#',
			'counter_number'	=>	'20',
			'counter_symbol'	=>	'+',
			'counter_symbol_after'	=>	'Years of Experience',
			'bg_image2'	=>	'#',
			'counter_number2'	=>	'30',
			'counter_symbol2'	=>	'+',
			'counter_symbol_after2'	=>	'Country',
			'bg_image3'	=>	'#',
			'counter_number3'	=>	'200',
			'counter_symbol3'	=>	'k',
			'counter_symbol_after3'	=>	'Thousand People Helped',
			'bg_image4'	=>	'#',
			'counter_number4'	=>	'666',
			'counter_symbol4'	=>	'bil',
			'counter_symbol_after4'	=>	'Dollars We Collected'
		], $attr));

	 	ob_start();?>
	 		<!-- statistics start-->
			<section class="section statistics no-padding-top">
				<div class="container">
					<div class="row margin-bottom">
						<div class="col-12">
							<div class="heading heading--primary heading--center"><span class="heading__pre-title"><?php echo $heading; ?></span>
								<h2 class="heading__title no-margin-bottom"><span><?php echo $title; ?></span></h2>
							</div>
						</div>
					</div>
					<div class="row offset-margin">
						<div class="col-sm-6 col-lg-3">
							<div class="icon-item">
								<div class="icon-item__img">
									<img class="img--layout" src="<?php $image_url= wp_get_attachment_image_src($bg_image, 'full');echo $image_url[0];?>" alt="img"/>
									<span class="js-counter"><?php echo $counter_number; ?></span><span><?php echo $counter_symbol; ?></span>
								</div>
								<div class="icon-item__text">
									<p><?php echo $counter_symbol_after; ?></p>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3">
							<div class="icon-item">
								<div class="icon-item__img"><img class="img--layout" src="<?php $image_url= wp_get_attachment_image_src($bg_image2, 'full');echo $image_url[0];?>" alt="img"/><span class="js-counter"><?php echo $counter_number2; ?></span><span><?php echo $counter_symbol2; ?></span></div>
								<div class="icon-item__text">
									<p><?php echo $counter_symbol_after2; ?></p>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3">
							<div class="icon-item">
								<div class="icon-item__img"><img class="img--layout" src="<?php $image_url= wp_get_attachment_image_src($bg_image3, 'full');echo $image_url[0];?>" alt="img"/><span class="js-counter"><?php echo $counter_number3; ?></span><span><?php echo $counter_symbol3; ?></span></div>
								<div class="icon-item__text">
									<p><?php echo $counter_symbol_after3; ?></p>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3">
							<div class="icon-item">
								<div class="icon-item__img"><img class="img--layout" src="<?php $image_url= wp_get_attachment_image_src($bg_image4, 'full');echo $image_url[0];?>" alt="img"/><span class="js-counter"><?php echo $counter_number4; ?></span><span><?php echo $counter_symbol4; ?></span></div>
								<div class="icon-item__text">
									<p><?php echo $counter_symbol_after4; ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- statistics end-->
	 	<?php return ob_get_clean();
	}
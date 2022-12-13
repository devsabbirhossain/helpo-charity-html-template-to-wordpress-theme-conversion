<?php get_header() ?>
			<main class="main">
				<section class="promo-primary">
					<picture>
						<source srcset="<?php echo get_theme_file_uri(); ?>/assets/img/volunteer.jpg" media="(min-width: 992px)"/>
						<img class="img--bg" src="<?php echo get_theme_file_uri(); ?>/assets/img/volunteer.jpg" alt="img"/>
					</picture>
					<div class="promo-primary__description"> <span><?php wp_title(''); ?></span></div>
					<div class="container">
						<div class="row">
							<div class="col-auto">
								<div class="align-container">
									<div class="align-container__item"><span class="promo-primary__pre-title">Helpo</span>
										<h1 class="promo-primary__title"><span>Team Member: </span> <span><?php wp_title(''); ?></span></h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- section start-->
				<section class="section team-member no-padding-bottom">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-6 col-xl-5">
								<div class="img-box">
									<img class="img--layout" src="<?php echo get_theme_file_uri(); ?>/assets/img/about_layout-reverse.png" alt="img"/>
									<div class="img-box__img">
										<img class="img--bg" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="img"/>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-6 offset-xl-1">
								<div class="heading heading--primary"><span class="heading__pre-title"><?php echo get_post_meta( get_the_ID(), '_teams-member-designation', true ); ?></span>
									<h2 class="heading__title"><span><?php the_title(); ?></span></h2>
									<p><?php the_content(); ?></p>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="section team-member">
					<div class="container">
						<div class="row">
							<div class="col-lg-6 col-xl-5">
								<div class="team-member__skills">
									<h4 class="team-member__title">My Skills</h4>
									<p class="margin-bottom"><?php echo get_post_meta( get_the_ID(), '_teams-skill-text-content', true ); ?></p>


									<h6 class="team-member__subtitle"><?php echo get_post_meta( get_the_ID(), '_teams-skill-name', true ); ?></h6>
									<div class="progress-bar">
										<div class="progress-bar__inner" style="width: <?php echo get_post_meta( get_the_ID(), '_teams-skill-percentage', true ); ?>%;">
											<div class="progress-bar__value"><?php echo get_post_meta( get_the_ID(), '_teams-skill-percentage', true ); ?>%</div>
										</div>
									</div>

									<h6 class="team-member__subtitle"><?php echo get_post_meta( get_the_ID(), '_teams-skill-name2', true ); ?></h6>
									<div class="progress-bar">
										<div class="progress-bar__inner" style="width: <?php echo get_post_meta( get_the_ID(), '_teams-skill-percentage2', true ); ?>%;">
											<div class="progress-bar__value"><?php echo get_post_meta( get_the_ID(), '_teams-skill-percentage2', true ); ?>%</div>
										</div>
									</div>

									<h6 class="team-member__subtitle"><?php echo get_post_meta( get_the_ID(), '_teams-skill-name3', true ); ?></h6>
									<div class="progress-bar">
										<div class="progress-bar__inner" style="width: <?php echo get_post_meta( get_the_ID(), '_teams-skill-percentage3', true ); ?>%;">
											<div class="progress-bar__value"><?php echo get_post_meta( get_the_ID(), '_teams-skill-percentage3', true ); ?>%</div>
										</div>
									</div>

									<h6 class="team-member__subtitle"><?php echo get_post_meta( get_the_ID(), '_teams-skill-name4', true ); ?></h6>
									<div class="progress-bar">
										<div class="progress-bar__inner" style="width: <?php echo get_post_meta( get_the_ID(), '_teams-skill-percentage4', true ); ?>%;">
											<div class="progress-bar__value"><?php echo get_post_meta( get_the_ID(), '_teams-skill-percentage4', true ); ?>%</div>
										</div>
									</div>

									<h6 class="team-member__subtitle"><?php echo get_post_meta( get_the_ID(), '_teams-skill-name5', true ); ?></h6>
									<div class="progress-bar">
										<div class="progress-bar__inner" style="width: <?php echo get_post_meta( get_the_ID(), '_teams-skill-percentage5', true ); ?>%;">
											<div class="progress-bar__value"><?php echo get_post_meta( get_the_ID(), '_teams-skill-percentage5', true ); ?>%</div>
										</div>
									</div>

								

								</div>
							</div>
							<div class="col-lg-6 col-xl-6 offset-xl-1">
								<div class="team-member__details">
									<h4 class="team-member__title">Contact details</h4>
									<div class="team-member__details-item"><span>Phone:</span><span><a href="tel:<?php echo get_post_meta( get_the_ID(), '_teams-member-phone', true ); ?>"><?php echo get_post_meta( get_the_ID(), '_teams-member-phone', true ); ?></a></span>
									</div>
									<div class="team-member__details-item"><span>Email:</span><span><a href="mailto:<?php echo get_post_meta( get_the_ID(), '_teams-member-Email', true ); ?>"><?php echo get_post_meta( get_the_ID(), '_teams-member-Email', true ); ?></a></span>
									</div>
									<div class="team-member__details-item"><span>Birthday:</span><span><?php echo get_post_meta( get_the_ID(), '_teams-member-dob', true ); ?></span>
									</div>
									<div class="team-member__details-item"><span>Location:</span><span><?php echo get_post_meta( get_the_ID(), '_teams-member-address', true ); ?></span>
									</div>
									<div class="team-member__details-item">
										<ul class="aside-socials no-margin-top">
											

											<?php if(get_post_meta( get_the_ID(), '_teams-fb-link', true )): ?>
											<li class="aside-socials__item">
												<a class="aside-socials__link" href="<?php echo get_post_meta( get_the_ID(), '_teams-fb-link', true ); ?>">
													<i class="fa-brands fa-facebook"></i>
												</a>
											</li>
											<?php endif; ?>

											<?php if(get_post_meta( get_the_ID(), '_teams-ins-link', true )): ?>
											<li class="aside-socials__item">
												<a class="aside-socials__link" href="<?php echo get_post_meta( get_the_ID(), '_teams-ins-link', true ); ?>">
													<i class="fa-brands fa-instagram"></i>
												</a>
											</li>
											<?php endif; ?>

											<?php if(get_post_meta( get_the_ID(), '_teams-tw-link', true )): ?>
											<li class="aside-socials__item">
												<a class="aside-socials__link" href="<?php echo get_post_meta( get_the_ID(), '_teams-tw-link', true ); ?>">
													<i class="fa-brands fa-twitter"></i>
												</a>
											</li>
											<?php endif; ?>

											<?php if(get_post_meta( get_the_ID(), '_teams-yt-link', true )): ?>
											<li class="aside-socials__item">
												<a class="aside-socials__link" href="<?php echo get_post_meta( get_the_ID(), '_teams-yt-link', true ); ?>">
													<i class="fa-brands fa-youtube"></i>
												</a>
											</li>
											<?php endif; ?>

											
											<?php if(get_post_meta( get_the_ID(), '_teams-lk-link', true )): ?>
											<li class="aside-socials__item">
												<a class="aside-socials__link" href="<?php echo get_post_meta( get_the_ID(), '_teams-lk-link', true ); ?>">
													<i class="fa-brands fa-linkedin"></i>
												</a>
											</li>
											<?php endif; ?>
										</ul>
									</div><a class="button button--primary" href="#">Send Message</a>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- section end-->
				<!-- section start-->
				<section class="section background--brown">
					<div class="container">
						<div class="row align-items-end margin-bottom">
							<div class="col-sm-6">
								<div class="heading heading--primary"><span class="heading__pre-title">What we Did</span>
									<h2 class="heading__title no-margin-bottom"><span>Helpo</span> <span>Projects</span></h2>
								</div>
							</div>
							<div class="col-sm-6 text-sm-right">
								<!-- slider nav start-->
								<div class="slider__nav projects-slider__nav">
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
					<div class="projects-slider">
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
						<div class="projects-slider__item">
							<div class="projects-masonry__item projects-masonry__item--primary projects-masonry__item--height-2">
								<div class="projects-masonry__img">
									<img class="img--bg" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="img"/>
									<div class="projects-masonry__inner">
										<span class="projects-masonry__badge" style="background: #F36F8F;"><a href="<?php echo esc_url(''); ?>"><?php echo get_the_term_list(get_the_ID(), 'causes-taxonomy'); ?></a></span>
										<h3 class="projects-masonry__title"> 
											<a href="cause-details.html"><?php the_title(); ?></a>
										</h3>
										<p><?php echo wp_trim_words(get_the_content(), 15, ''); ?></p>
										<div class="projects-masonry__details-holder">
											<div class="projects-masonry__details-item">
												<span>Goal: </span><span><?php echo get_post_meta(get_the_id(), '_causes-goal-amount', true); ?><?php echo get_post_meta(get_the_id(), '_causes-currency-symbol', true); ?></span>
											</div>
											<div class="projects-masonry__details-item">
												<span>Date: </span><span><?php echo get_post_meta(get_the_id(), '_causes-end-date', true); ?></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php endif; endwhile; ?>
						
					</div>
				</section>
				<!-- section end-->
				<!-- bottom bg start-->
				<section class="bottom-background background--brown">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="bottom-background__img"><img src="<?php echo get_theme_file_uri(); ?>/assets/img/bottom-bg.png" alt="img"/></div>
							</div>
						</div>
					</div>
				</section>
				<!-- bottom bg end-->
			</main>

<?php get_footer(); ?>
		
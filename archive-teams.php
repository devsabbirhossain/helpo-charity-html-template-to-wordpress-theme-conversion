<?php get_header(); ?>

 	<main class="main">
        <section class="promo-primary">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/img/stories.jpg" media="(min-width: 992px)"/><img class="img--bg" src="<?php echo get_theme_file_uri(); ?>/assets/img/stories.jpg" alt="img"/>
          </picture>
          <div class="promo-primary__description"> <span>All <?php wp_title(''); ?></span></div>
          <div class="container">
            <div class="row">
              <div class="col-auto">
                <div class="align-container">
                  <div class="align-container__item"><span class="promo-primary__pre-title">Helpo</span>
                    <h1 class="promo-primary__title"><span>Our</span> <span><?php wp_title(''); ?></span></h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- teams  start-->
        <section class="section team">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="heading heading--primary"><span class="heading__pre-title">Team</span>
								<h2 class="heading__title no-margin-bottom"><span>Meet</span> <span>our Team</span></h2>
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
        <!-- teams end-->
        <!-- text section start-->
		<section class="section text-section text-section--style-2">
			<img class="text-section__bg-left" src="<?php echo get_theme_file_uri(); ?>/assets/img/text-section_left.png" alt="img"/>
			<img class="text-section__bg-right" src="<?php echo get_theme_file_uri(); ?>/assets/img/text-section_right.png" alt="img"/>
			<div class="container">
				<div class="row">
					<div class="col-12 text-center">
						<h2 class="text-section__heading">Thank You</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-8 offset-lg-4 col-xl-7 offset-xl-4">
						<h3 class="text-section__title">To all our donors, <br/>partners and volunteers</h3>
						<p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail, Canthigaster rostrata. Midshipman dartfish Modoc sucker, yellowtail kingfish</p>
					</div>
				</div>
				<div class="row">
					<div class="col-12 text-center"><a class="button button--primary" href="volunteer.html">Become our volunteer</a></div>
				</div>
			</div>
		</section>
		<!-- text section end-->
      </main>

<?php get_footer(); ?>
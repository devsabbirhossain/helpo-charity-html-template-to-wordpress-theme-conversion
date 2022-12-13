<?php get_header(); ?>

	<main class="main">
		<?php 
			while(have_posts()): the_post(); 
		?>
		<section class="promo-primary">
			<picture>
				<source srcset="<?php echo get_the_post_thumbnail_url(); ?>" media="(min-width: 992px)"/>
				<img class="img--bg" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="img"/>
			</picture>
			<div class="promo-primary__description"> <span><?php wp_title(''); ?></span></div>
			<div class="container">
				<div class="row">
					<div class="col-auto">
						<div class="align-container">
							<div class="align-container__item"><span class="promo-primary__pre-title">Helpo</span>
								<h1 class="promo-primary__title"><span>Event:</span> <span><?php wp_title(''); ?></span></h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- article start-->
		<section class="section article"><img class="article__bg" src="<?php echo get_theme_file_uri(); ?>/assets/img/events_inner-bg.png" alt="img"/>
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
						<div class="article__img"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="img"/></div>
						<h2><?php the_title(); ?></h2>
						<p><?php the_content(); ?></p>
						<p class="article__text-filled text-filled"><?php echo get_post_meta(get_the_id(), '_events_quatation', true); ?></p>
						
						<div class="article-information">
							<div class="row offset-30">
								<div class="col-sm-6 col-lg-4">
									<div class="article-information__item" style="background: #32C876;">
										<h6 class="article-information__title">Event Details</h6>
										<div class="article-information__details">
											<h6 class="article-information__title"><i class="fa-solid fa-calendar-days"></i></h6>
											<div class="article-information__details-item">
												<span>Start:</span><span><?php echo get_post_meta(get_the_id(), '_events_start_date', true); ?></span>
											</div>
											<div class="article-information__details-item">
												<span>Finish:</span><span><?php echo get_post_meta(get_the_id(), '_events_end_date', true); ?></span>
											</div>
											<h6 class="article-information__title"><i class="fa-solid fa-clock"></i></h6>
											<div class="article-information__details-item">
												<span>Start Time:</span><span><?php echo get_post_meta(get_the_id(), '_events_time_start', true); ?></span>
											</div>
											<div class="article-information__details-item">
												<span>End Time:</span><span><?php echo get_post_meta(get_the_id(), '_events_time_end', true); ?></span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-lg-4">
									<div class="article-information__item" style="background: #F76588;">
										<h6 class="article-information__title">Organizer Details</h6>
										<div class="article-information__details">
											<div class="article-information__details-item">
												<span>Organizer Name:</span>
												<a href="<?php echo get_post_meta(get_the_id(), '_events-organizer-link', true); ?>"><?php echo get_post_meta(get_the_id(), '_events-organizer-name', true); ?></a>
											</div>
											<div class="article-information__details-item">
												<i class="fa-solid fa-phone"></i>
												<a href="tel:<?php echo get_post_meta(get_the_id(), '_events-organizer-number', true); ?>"><?php echo get_post_meta(get_the_id(), '_events-organizer-number', true); ?></a>
											</div>
											<div class="article-information__details-item">
												<i class="fa-solid fa-envelope"></i>
												<a href="mailto:<?php echo get_post_meta(get_the_id(), '_events-organizer-email', true); ?>"><?php echo get_post_meta(get_the_id(), '_events-organizer-email', true); ?></a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-lg-4">
									<div class="article-information__item" style="background: #49C2DF;">
										<h6 class="article-information__title">Venue Details</h6>
										<div class="article-information__details">
											<div class="article-information__details-item">
												<i class="fa-solid fa-map-location-dot"></i>
												<span>Event Location:</span><br>
												<span><?php echo get_post_meta(get_the_id(), '_events-venue-address', true); ?></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php endwhile; ?>
		<!-- article end-->
		<!-- additional events start-->
		<section class="section additional-events no-padding-top no-padding-bottom">
			<div class="row no-gutters">
				<?php 
					$tempevents = new WP_Query([
						'post_type'	=>	'events',
						'posts_per_page'	=> 2,
						'orderby'	=> 'rand',
						'order'		=> 'DESC'
					]);
					while ($tempevents->have_posts()): $tempevents->the_post();
				?>
				<div class="col-md-6">
					<div class="additional-event">
						<a class="additional-event__img" href="<?php the_permalink(); ?>">
							<img class="img--bg" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="img"/>
							<div class="additional-event__text">
								<span><?php the_title(); ?></span><span><?php echo get_post_meta(get_the_id(), '_events_subtitle', true); ?></span>
							</div>
						</a>
					</div>
				</div>
				<?php endwhile; ?>
			</div>
		</section>
		<!-- additional events end-->
	</main>
<?php get_footer(); ?>
			
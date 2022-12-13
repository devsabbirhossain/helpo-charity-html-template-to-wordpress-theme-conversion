<?php 

/* 
  Template Name: Events
*/

 get_header();

?>


	<main class="main">
		<section class="promo-primary">
			<picture>
				<source srcset="<?php echo get_theme_file_uri(); ?>/assets/img/events.jpg" media="(min-width: 992px)"/><img class="img--bg" src="<?php echo get_theme_file_uri(); ?>/assets/img/events.jpg" alt="img"/>
			</picture>
			<div class="promo-primary__description"> <span>Happiness</span></div>
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
		<!-- events inner start-->
		<section class="section events-inner"><img class="events-inner__bg" src="<?php echo get_theme_file_uri(); ?>/assets/img/events_inner-bg.png" alt="img"/>
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
							<div class="upcoming-item__date"><span><?php echo get_post_meta(get_the_id(), '_events_start_date', true); ?></span></div>
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


				<?php while(have_posts()): the_post(); ?>
		      <?php the_content(); ?>
		    <?php endwhile; ?>




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
<?php 
 	global $redux_demo;
	get_header();
?>
			<main class="main">
				<section class="promo-primary">
					<picture>
						<source srcset="<?php echo get_theme_file_uri(); ?>/assets/img/causes.jpg" media="(min-width: 992px)"/><img class="img--bg" src="<?php echo get_theme_file_uri(); ?>/assets/img/causes.jpg" alt="img"/>
					</picture>
					<div class="promo-primary__description"> <span>All <?php wp_title(''); ?></span></div>
					<div class="container">
						<div class="row">
							<div class="col-auto">
								<div class="align-container">
									<div class="align-container__item"><span class="promo-primary__pre-title">Helpo</span>
										<h1 class="promo-primary__title"><span>All</span> <span><?php wp_title(''); ?></span></h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
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

									
							?>
							<div class="col-md-8 offset-md-2 col-lg-12 offset-lg-0">
								<div class="causes-item causes-item--style-3">
									<div class="causes-item__body">
										<div class="row align-items-center">
											<div class="col-lg-5 col-xl-4">
												<div class="causes-item__img">
													<img class="img--bg" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="img">
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
														<div class="causes-item__details-item">
															<span>Goal: </span>
															<span><?php echo get_post_meta(get_the_id(), '_causes-goal-amount', true); ?><?php echo get_post_meta(get_the_id(), '_causes-currency-symbol', true); ?></span>
														</div>
														<div class="causes-item__details-item text-right">
															<span>Pledged: </span>
															<span><?php echo get_post_meta(get_the_id(), '_causes-achive-amount', true); ?><?php echo get_post_meta(get_the_id(), '_causes-currency-symbol', true); ?></span>
														</div>

														
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
				<!-- causes inner end-->
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

<?php 

/* 
  Template Name: Volunteer
*/

?>
<?php get_header(); ?>
	<main class="main">
		<section class="promo-primary">
			<picture>
				<source srcset="<?php echo get_theme_file_uri(); ?>/assets/img/volunteer.jpg" media="(min-width: 992px)"/><img class="img--bg" src="<?php echo get_theme_file_uri(); ?>/assets/img/volunteer.jpg" alt="img"/>
			</picture>
			<div class="promo-primary__description"> <span>Compassion</span></div>
			<div class="container">
				<div class="row">
					<div class="col-auto">
						<div class="align-container">
							<div class="align-container__item"><span class="promo-primary__pre-title">Helpo</span>
								<h1 class="promo-primary__title"><span>Become</span> <span>a <?php wp_title(''); ?></span></h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<?php while(have_posts()): the_post(); ?>
		    <?php the_content(); ?>
		<?php endwhile; ?>

	    <!-- bottom bg start-->
		<img class="forms-section__bg" src="<?php echo get_theme_file_uri(); ?>/assets/img/volunteer-2.png" alt="img"/>
		<!-- bottom bg end-->
	</main>
<?php get_footer(); ?>
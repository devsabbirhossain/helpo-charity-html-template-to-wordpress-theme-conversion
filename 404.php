<?php get_header(); ?>

	<main class="main">
		<?php while(have_posts()): the_post(); ?>
	      	<?php the_content(); ?>
	    <?php endwhile; ?>
    </main>
    <main class="main"><img class="img--bg" src="<?php echo get_theme_file_uri(); ?>/assets/img/404.jpg" alt="img"/>
		<section class="section error">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-xl-6">
						<div class="align-container">
							<div class="align-container__item">
								<h1 class="error__title">404</h1>
								<h3 class="error__subtitle"><?php wp_title(''); ?></h3>
								<p class="error__text"></p><a class="button button--primary" href="<?php echo get_home_url(); ?>">Home Page</a>
								
							</div>

						</div>
					</div>
					<div class="col-lg-8 col-xl-6 errorpage">
						<h2>Search...</h2>
						<?php get_search_form(); ?>
					</div>
				</div>
			</div>
		</section>
	</main>

<?php get_footer(); ?>
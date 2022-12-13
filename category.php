<?php get_header(); ?>

<main class="main">
	<section class="promo-primary">
		<picture>
			<source srcset="<?php echo get_theme_file_uri(); ?>/assets/img/blog.jpg" media="(min-width: 992px)"/>
				<img class="img--bg" src="<?php echo get_theme_file_uri(); ?>/assets/img/blog.jpg" alt="img"/>
		</picture>
		<div class="promo-primary__description"> <span>Dhaka Child</span></div>
		<div class="container">
			<div class="row">
				<div class="col-auto">
					<div class="align-container">
						<div class="align-container__item"><span class="promo-primary__pre-title">Helpo</span>
							<h1 class="promo-primary__title"><span><?php wp_title(''); ?></span></h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- blog start-->
	<section class="section blog background--brown">
		<img class="blog__bg" src="<?php echo get_theme_file_uri(); ?>/assets/img/events_inner-bg.png" alt="img"/>
		<div class="container">
			<div class="row offset-margin">
				<?php 
					$count = 0;
					while(have_posts()): the_post(); 
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
							<a href="<?php echo esc_url( $category_link ); ?>">	<span class="blog-item__badge" style="background-color: #F8AC3A;"><?php echo $cd->cat_name; ?></span></a>
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
							<a style="text-decoration: none;" href="<?php echo esc_url( $category_link ); ?>">	<span class="blog-item__badge" style="background-color: #F8AC3A;"><?php echo $cd->cat_name; ?></span></a>
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
			<!-- pagination Start-->
			<?php
	            if(function_exists('the_posts_pagination')){
	              	the_posts_pagination([
	                	'prev_text' => '<p><i class="fa fa-angle-left" aria-hidden="true"></i><span>Back</span></p>',
	                	'next_text' => '<p><span>Next</span><i class="fa fa-angle-right" aria-hidden="true"></i></p>',
	                	'' => ''
	              	]);
	            }
	        ?>
	        <!-- pagination End-->
			
		</div>
	</section>
	<!-- blog end-->
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
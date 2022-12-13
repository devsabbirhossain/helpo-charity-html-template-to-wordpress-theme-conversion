<?php get_header(); ?>
<main class="main">
	<section class="promo-primary">
		<picture>
			<source srcset="<?php echo get_theme_file_uri(); ?>/assets/img/blog.jpg" media="(min-width: 992px)"/><img class="img--bg" src="<?php echo get_theme_file_uri(); ?>/assets/img/blog.jpg" alt="img"/>
		</picture>
		<div class="promo-primary__description"> 
			<span>Compassion</span>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-auto">
					<div class="align-container">
						<div class="align-container__item"><span class="promo-primary__pre-title">Helpo</span>
							<h1 class="promo-primary__title"><span>Blog</span> <span>Post</span></h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- blog post start-->
	<section class="section blog-post">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9">
					<div class="blog-post__top">
						<div class="blog-post__img">
							<div>
								<?php the_post_thumbnail('thumbnail', array('class' => 'img--bg')); ?>
							</div>
						</div>
						<div class="blog-post__description">
							<div class="row">
								<div class="col-6">
									<span class="blog-post__name">
										<?php 
											global $post;
											///category
												$get_cat = get_the_category($post->ID);
												//$temp = array();
												foreach($get_cat as $cat){
													$temp = $cat->name;
												}

											///
											$author_id=$post->post_author;
											echo get_the_author_meta('display_name', $author_id); 
										?>	
									</span>
								</div>
								<div class="col-6 text-right"><span class="blog-post__date"><?php the_time('d M, Y'); ?></span><span>
									<svg class="icon">
										<use xlink:href="#comment"></use>
									</svg><?php echo get_comments_number($post->ID); ?></span></div>
							</div>
						</div>
					</div>
					<h5 class="blog-post__title"><?php the_title(); ?></h5>
					<p><?php the_content(); ?></p>
					
					<?php if(get_post_meta(get_the_id(),'_post-quotation')): ?>

					<p class="text-filled"><?php echo get_post_meta(get_the_id(), '_post-quotation', true); ?></p>

					<?php endif; ?>
					
					<div class="blog-post__details">
						<div class="row align-items-center">
							<div class="col-lg-3 text-center text-lg-left">
								<span class="blog-post__name">
									<?php
										echo get_the_author_meta('display_name', $author_id); 
									?>
								</span>
							</div>
							<div class="col-lg-6 text-center">
								<div class="tags">
									<?php 
										$tags=get_the_tags($post->ID);
										foreach($tags as $tag):
									?>
									<a class="blog-post__tag" href="<?php echo $tag_link = get_tag_link( $tag->term_id ); ?>">#<?php echo $tag->name; ?></a>
									
									<?php endforeach; ?>
								</div>
							</div>
							<div class="col-lg-3">
								<ul class="blog-post__socials">
									<li>
										<a href="#">
											<i class="fa fa-facebook" aria-hidden="true"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-twitter" aria-hidden="true"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-youtube-play" aria-hidden="true"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-instagram" aria-hidden="true"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<?php comments_template(); ?>
				</div>


				<!-- Sidebar Start -->
				<div class="col-md-4 col-lg-3">
					<?php get_sidebar(); ?>
				</div>
				<!-- Sidebar End -->
			</div>
		</div>
	</section>
	<!-- blog post end-->
	<!-- section start-->
	<section class="section background--brown">
		<div class="container">
			<div class="row margin-bottom">
				<div class="col-12">
					<div class="heading heading--primary">
						<h2 class="heading__title no-margin-bottom"><span>Similar</span> <span>Posts</span></h2>
					</div>
				</div>
			</div>
			<div class="row offset-margin">
				<?php
					$tempsim = new WP_Query([
						'post_type' 		=> 'post',
						'category_name'		=> $temp,
						'posts_per_page'	=> 3,
						'orderby'			=> 'rand'
					]);
					while($tempsim->have_posts()): $tempsim->the_post(); 
				?>
				<div class="col-md-6 col-lg-4">
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
							<p><?php echo wp_trim_words(get_the_content(), 30, '...'); ?><a href="<?php the_permalink(); ?>">Read More</a></p>
							<div class="blog-item__details"><span class="blog-item__date"><?php the_time('d M, Y'); ?></span><span>
								<svg class="icon">
									<use xlink:href="#comment"></use>
								</svg><?php echo get_comments_number($post->ID); ?></span></div>
						</div>
					</div>
				</div>
				<?php endwhile; ?>
			</div>
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
<?php 
	get_header(); 
	global $redux_demo;
?>
        <main class="main">
            <section class="promo-primary">
                <picture>
                    <source srcset="<?php echo get_the_post_thumbnail_url(); ?>" media="(min-width: 992px)"/><img class="img--bg" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="img"/>
                </picture>
                <div class="promo-primary__description"> <span><?php wp_title(''); ?></span></div>
                <div class="container">
                    <div class="row">
                        <div class="col-auto">
                            <div class="align-container">
                                <div class="align-container__item"><span class="promo-primary__pre-title">Helpo</span>
                                    <h1 class="promo-primary__title"><span>Story:</span> <span><?php wp_title(''); ?></span></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- storie details start-->
            <section class="section storie-details"><img class="storie-details__bg" src="<?php echo get_theme_file_uri(); ?>/assets/img/storie_details-bg.png" alt="img"/>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 offset-xl-2">
                            <div class="storie-details__top">
                                <div class="storie-details__img"><img class="img--bg" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="img"/></div>
                                <div class="storie-details__description">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 text-center text-md-left">
                                            <h5 class="storie-details__name"><?php the_title(); ?></h5>
                                        </div>
                                        <div class="col-md-4 text-center text-md-left"><span>Donation So Far: <strong>845$</strong></span></div>
                                        <div class="col-md-4 text-center text-md-right"><a class="storie-details__button button button--primary" href="#">+ Donate</a></div>
                                    </div>
                                </div>
                            </div>

                            <p><?php the_content(); ?></p>


                            <?php if(get_post_meta( get_the_ID(), '_stories-bg-image', true )): ?>
                            <blockquote class="storie-details__blockquote blockquote">
                            	<span class="blockquote__icon">“</span>
                                <p class="blockquote__text">
                                	<?php echo get_post_meta( get_the_ID(), '_stories-quatation-text', true ); ?>
                                </p>
                            </blockquote>
                            <?php endif; ?>


                            <h6 class="storie-details__title">
                            	<?php echo get_post_meta( get_the_ID(), '_stories-2nd-title', true ); ?>
                            </h6>
                            <p><?php echo get_post_meta( get_the_ID(), '_stories-2nd-post-text', true ); ?></p>
                            
                            <h6 class="storie-details__title">
                            	<?php echo get_post_meta( get_the_ID(), '_stories-3rd-title', true ); ?>
                            </h6>
                            <p><?php echo get_post_meta( get_the_ID(), '_stories-3rd-post-text', true ); ?></p>
                            
                            <h6 class="storie-details__title">
                            	<?php echo get_post_meta( get_the_ID(), '_stories-4th-title', true ); ?>
                            </h6>
                            <p><?php echo get_post_meta( get_the_ID(), '_stories-4th-post-text', true ); ?></p>

                            <?php if(get_post_meta( get_the_ID(), '_stories-highlights-text', true )): ?>
                            <p class="text-filled">
                            	<?php echo get_post_meta( get_the_ID(), '_stories-highlights-text', true ); ?>
                            </p>
                        	<?php endif; ?>

                            <h6 class="storie-details__title">
                            	<?php echo get_post_meta( get_the_ID(), '_stories-5th-title', true ); ?>
                            </h6>
                            <p><?php echo get_post_meta( get_the_ID(), '_stories-5th-post-text', true ); ?></p>
                            
                            <div class="storie-details__details">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="storie-details__tags">Category: 
                                        	<?php 
                                        		$categorys = get_terms('stories-taxonomy');
                                        		foreach($categorys as $category):
                                        	?> 
                                        		<a class="storie-details__tag" href="<?php echo get_term_link($category->slug, 'stories-taxonomy'); ?>">#<?php echo $category->name; ?></a> 
                                        	
                                        	<?php endforeach; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="storie-details__socials">
                                        	<?php if($redux_demo['facebook']) : ?>
                                            <li>
                                            	<a href="<?php echo $redux_demo['facebook'] ?>">
                                            		<i class="fa fa-facebook" aria-hidden="true"></i>
                                            	</a>
                                            </li>
                                            <?php endif; ?>
                                            <?php if($redux_demo['tweet']) : ?>
                                            <li>
                                            	<a href="<?php echo $redux_demo['tweet'] ?>">
                                            		<i class="fa fa-twitter" aria-hidden="true"></i>
                                            	</a>
                                            </li>
                                            <?php endif; ?>
                                            <?php if($redux_demo['googleplus']) : ?>
                                            <li>
                                            	<a href="<?php echo $redux_demo['googleplus'] ?>">
                                            		<i class="fa fa-youtube-play" aria-hidden="true"></i>
                                            	</a>
                                            </li>
                                            <?php endif; ?>
											<?php if($redux_demo['instagram']) : ?>
                                            <li>
                                            	<a href="<?php echo $redux_demo['instagram'] ?>">
                                            		<i class="fa fa-instagram" aria-hidden="true"></i>
                                            	</a>
                                            </li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- storie details end-->


            <!-- donors start-->
            <section class="section donors donors--style-2 no-padding-top">
                <div class="container">
                    <div class="row margin-bottom">
                        <div class="col-12">
                            <div class="heading heading--primary heading--center"><span class="heading__pre-title">Donors</span>
                                <h2 class="heading__title no-margin-bottom"><span>Who Help</span> <span>Us</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <!-- donors slider start-->
                            <div class="slider-holder">
                                <div class="donors-slider donors-slider--style-1">
                                	<?php  

                                		$categorys = get_terms('testimonials-taxonomy');
                                		foreach($categorys as $category){
                                			$tempcat = $category->name;
                                			if($tempcat == 'Image'){
                                				$tempcat2 = $tempcat;
                                			}
                                		}
                                		$temptestimonials = new WP_Query([
											'post_type'	=>	'testimonials',
											'testimonials-taxonomy' => $tempcat2,
										]);
										while ($temptestimonials->have_posts()): $temptestimonials->the_post();
                                	?>
                                    <div class="donors-slider__item">
                                        <div class="donors-slider__img"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="donor"/></div>
                                    </div>

                                   <?php endwhile; ?>
                                </div>
                            </div>
                            <!-- donors slider end-->
                        </div>
                    </div>
                </div>
            </section>
            <!-- donors end-->
            <!-- bottom bg start-->
            <section class="bottom-background">
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
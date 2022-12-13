<?php 
	get_header(); 
?>

    <main class="main">
    	<?php 
    		while(have_posts()): the_post();
    			$goal 	=  	get_post_meta(get_the_id(), '_causes-goal-amount', true);
				$achive = 	get_post_meta(get_the_id(), '_causes-achive-amount', true);

				$percentage = intval(($achive/$goal)*100);
    	?>
		<section class="promo-primary">
			<picture class="top-image">
				<source srcset="<?php echo get_the_post_thumbnail_url(); ?>" media="(min-width: 992px)"/>
				<img class="img--bg" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="img"/>
			</picture>
			<div class="promo-primary__description"> <span><?php wp_title(''); ?></span></div>
			<div class="container">
				<div class="row">
					<div class="col-auto">
						<div class="align-container custom-causes">
							<div class="align-container__item"><span class="promo-primary__pre-title">Helpo</span>
								<h1 class="promo-primary__title"><span>Cause : </span> <span><?php wp_title(''); ?></span></h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- donation start-->
		<section class="section donation"><img class="donation__bg" src="<?php echo get_theme_file_uri(); ?>/assets/img/donation_img.png" alt="img"/>
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="donation-item">
							<div class="donation-item__img"><img class="img--bg" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="img"/></div>
							<div class="donation-item__body">
								<div class="row">
									<div class="col-12">
										<h5 class="donation-item__title"><?php the_title(); ?></h5>
									</div>
								</div>
								<div class="row align-items-end">
									<div class="col-lg-7">
										<div class="progress-bar">
											<div class="progress-bar__inner" style="width: <?php echo $percentage; ?>%;">
												<div class="progress-bar__value"><?php echo $percentage; ?>%</div>
											</div>
										</div>
									</div>
									<div class="col-lg-5">
										<div class="donation-item__details-holder">
											<div class="donation-item__details-item"><span>Goal: </span><span><?php echo get_post_meta(get_the_id(), '_causes-goal-amount', true); ?><?php echo get_post_meta(get_the_id(), '_causes-currency-symbol', true); ?></span></div>
											<div class="donation-item__details-item"><span>Pledged: </span><span><?php echo get_post_meta(get_the_id(), '_causes-achive-amount', true); ?><?php echo get_post_meta(get_the_id(), '_causes-currency-symbol', true); ?></span></div>
										</div>
									</div>
								</div>
								<form class="form donation-form" action="javascript:void(0);">
									<div class="row align-items-baseline margin-bottom">
										<div class="col-lg-5 col-xl-6">
											<label class="form__label"><span class="form__icon">$</span>
												<input class="form__field form__input-number" type="number"/>
											</label>
										</div>
										<div class="col-lg-7 col-xl-6 text-lg-right">
											<label class="form__radio-label">
												<span class="form__label-text">$100.00</span>
												<input class="form__input-radio" type="radio" name="value-select" value="100" checked="checked"/>
												<span class="form__radio-mask form__radio-mask"></span>
											</label>
											<label class="form__radio-label">
												<span class="form__label-text">$200.00</span>
												<input class="form__input-radio" type="radio" name="value-select" value="200"/>
												<span class="form__radio-mask form__radio-mask"></span>
											</label>
											<label class="form__radio-label">
												<span class="form__label-text">$500.00</span>
												<input class="form__input-radio" type="radio" name="value-select" value="500"/>
												<span class="form__radio-mask form__radio-mask"></span>
											</label>
											<label class="form__radio-label">
												<span class="form__label-text">$1000.00</span>
												<input class="form__input-radio" type="radio" name="value-select" value="1000"/>
												<span class="form__radio-mask form__radio-mask"></span>
											</label>
										</div>
									</div>
									<div class="row margin-bottom">
										<div class="col-12">
											<h6 class="form__title">Payment Method</h6>
										</div>
										<div class="col-12">
											<label class="form__radio-label">
												<img class="form__label-img" src="<?php echo get_theme_file_uri(); ?>/assets/img/paypal.png" alt="paypal"/>
												<input class="form__input-radio" type="radio" name="method-select" value="paypal" checked=""/>
												<span class="form__radio-mask form__radio-mask"></span>
											</label>
											<label class="form__radio-label">
												<img class="form__label-img" src="<?php echo get_theme_file_uri(); ?>/assets/img/klarna.png" alt="klarna"/>
												<input class="form__input-radio" type="radio" name="method-select" value="klarna"/>
												<span class="form__radio-mask form__radio-mask"></span>
											</label>
											<label class="form__radio-label">
												<img class="form__label-img" src="<?php echo get_theme_file_uri(); ?>/assets/img/visa.png" alt="visa"/>
												<input class="form__input-radio" type="radio" name="method-select" value="visa"/>
												<span class="form__radio-mask form__radio-mask"></span>
											</label>
										</div>
									</div>
									<div class="row">
										<div class="col-12">
											<h6 class="form__title">Personal Info</h6>
										</div>
										<div class="col-lg-4 margin-30">
											<input class="form__field" type="text" name="first-name" placeholder="First Name"/>
										</div>
										<div class="col-lg-4 margin-30">
											<input class="form__field" type="text" name="last-name" placeholder="Last Name"/>
										</div>
										<div class="col-lg-4 margin-30">
											<input class="form__field" type="email" name="email" placeholder="Email"/>
										</div>
										<div class="col-lg-4">
											<button class="form__submit" type="submit">+ Donate</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- donation end-->
		<section class="section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!-- cause details tabs start-->
						<div class="tabs horizontal-tabs cause-details-tabs">
							<ul class="horizontal-tabs__header">
								<li><a href="#horizontal-tabs__item-1"><span>Description </span></a></li>
								<li><a href="#horizontal-tabs__item-2"><span>Donors</span></a></li>
								<li><a href="#horizontal-tabs__item-3"><span>Video</span></a></li>
								<li><a href="#horizontal-tabs__item-4"><span>Gallery</span></a></li>
							</ul>
							<div class="horizontal-tabs__content">
								<div class="horizontal-tabs__item" id="horizontal-tabs__item-1">
									<?php the_content(); ?>
									<h6 class="tabs__title"><?php echo get_post_meta(get_the_id(), '_causes-add-title', true); ?></h6>
									<p><?php echo get_post_meta(get_the_id(), '_causes-add-editor', true); ?></p>
									<h6 class="tabs__title">Behaviour change</h6>
									<p>This project uses SABC interventions to engage Sheohar communities with respect to embracing healthy behaviours around water, sanitation, and hygiene — behaviours such as handwashing with soap at key moments, using household latrines, and the safe storage and handling of water.</p>
									<h6 class="tabs__title">Capital</h6>
									<p>In a region where the majority of the population consists of subsistence farmers, access to capital and the development of markets systems is crucial. In response to this, the Sheohar 2 project’s C component focuses specifically on people’s livelihoods, access to credit, and the provision of WASH-related products and services.</p>
								</div>
								<div class="horizontal-tabs__item" id="horizontal-tabs__item-2">
									<div class="row offset-30">
										<div class="col-md-6 col-xl-4">
											<!-- item start-->
											<div class="donor-item">
												<div class="row align-items-center">
													<div class="col-lg-7">
														<div class="donor-item__info">
															<div class="donor-item__img"><img class="img--bg" src="<?php echo get_theme_file_uri(); ?>/assets/img/face_1.jpg" alt="face"/></div>
															<div class="donor-item__description">
																<div class="donor-item__name">Chris Patt</div>
																<div class="donor-item__date">23 Jan'19</div>
															</div>
														</div>
													</div>
													<div class="col-lg-5">
														<h5 class="donor-item__value">$ 200.00</h5>
													</div>
												</div>
											</div>
											<!-- item end-->
										</div>
										<div class="col-md-6 col-xl-4">
											<!-- item start-->
											<div class="donor-item">
												<div class="row align-items-center">
													<div class="col-lg-7">
														<div class="donor-item__info">
															<div class="donor-item__img"><img class="img--bg" src="<?php echo get_theme_file_uri(); ?>/assets/img/face_2.jpg" alt="face"/></div>
															<div class="donor-item__description">
																<div class="donor-item__name">Ched Bonq</div>
																<div class="donor-item__date">23 Jan'19</div>
															</div>
														</div>
													</div>
													<div class="col-lg-5">
														<h5 class="donor-item__value">$ 500.00</h5>
													</div>
												</div>
											</div>
											<!-- item end-->
										</div>
										<div class="col-md-6 col-xl-4">
											<!-- item start-->
											<div class="donor-item">
												<div class="row align-items-center">
													<div class="col-lg-7">
														<div class="donor-item__info">
															<div class="donor-item__img"><img class="img--bg" src="<?php echo get_theme_file_uri(); ?>/assets/img/face_3.jpg" alt="face"/></div>
															<div class="donor-item__description">
																<div class="donor-item__name">Lisa Tactics</div>
																<div class="donor-item__date">23 Jan'19</div>
															</div>
														</div>
													</div>
													<div class="col-lg-5">
														<h5 class="donor-item__value">$ 300.00</h5>
													</div>
												</div>
											</div>
											<!-- item end-->
										</div>
										<div class="col-md-6 col-xl-4">
											<!-- item start-->
											<div class="donor-item">
												<div class="row align-items-center">
													<div class="col-lg-7">
														<div class="donor-item__info">
															<div class="donor-item__img"><img class="img--bg" src="<?php echo get_theme_file_uri(); ?>/assets/img/face_4.jpg" alt="face"/></div>
															<div class="donor-item__description">
																<div class="donor-item__name">Mike Bloom</div>
																<div class="donor-item__date">23 Jan'19</div>
															</div>
														</div>
													</div>
													<div class="col-lg-5">
														<h5 class="donor-item__value">$ 1000.00</h5>
													</div>
												</div>
											</div>
											<!-- item end-->
										</div>
										<div class="col-md-6 col-xl-4">
											<!-- item start-->
											<div class="donor-item">
												<div class="row align-items-center">
													<div class="col-lg-7">
														<div class="donor-item__info">
															<div class="donor-item__img"><img class="img--bg" src="<?php echo get_theme_file_uri(); ?>/assets/img/face_5.jpg" alt="face"/></div>
															<div class="donor-item__description">
																<div class="donor-item__name">Taya Marsh</div>
																<div class="donor-item__date">23 Jan'19</div>
															</div>
														</div>
													</div>
													<div class="col-lg-5">
														<h5 class="donor-item__value">$ 100.00</h5>
													</div>
												</div>
											</div>
											<!-- item end-->
										</div>
										<div class="col-md-6 col-xl-4">
											<!-- item start-->
											<div class="donor-item">
												<div class="row align-items-center">
													<div class="col-lg-7">
														<div class="donor-item__info">
															<div class="donor-item__img"><img class="img--bg" src="<?php echo get_theme_file_uri(); ?>/assets/img/face_6.jpg" alt="face"/></div>
															<div class="donor-item__description">
																<div class="donor-item__name">Ion Malanik</div>
																<div class="donor-item__date">23 Jan'19</div>
															</div>
														</div>
													</div>
													<div class="col-lg-5">
														<h5 class="donor-item__value">$ 400.00</h5>
													</div>
												</div>
											</div>
											<!-- item end-->
										</div>
									</div>
								</div>
								<div class="horizontal-tabs__item" id="horizontal-tabs__item-3">
									<div class="video-frame">
										<img class="img--bg" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="frame"/>
										<?php if(get_post_meta( get_the_ID(), '_causes-video', true )): ?>
										<a class="video-trigger video-frame__trigger" href="<?php echo esc_url(get_post_meta( get_the_ID(), '_causes-video', true )); ?>">
											<span class="video-frame__icon">
												<i class="fa fa-play" aria-hidden="true"></i>
											</span>
											<span class="video-frame__text">Click or Tap to Watch our video</span>
										</a>
									<?php endif; ?>
									</div>
								</div>
								<div class="horizontal-tabs__item" id="horizontal-tabs__item-4">
									<div class="gallery-simple">
										<div class="row offset-30">
											<?php 
												if($images = get_post_meta( get_the_ID(), '_causes-gallary', true )):
												$images = get_post_meta( get_the_ID(), '_causes-gallary', true );
												foreach ( $images as $attachment_id => $attachment_url ):

											?>

											<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
												<a class="gallery-simple__item" href="<?php echo $attachment_url; ?>" data-fancybox="simple-gallery">
												<img class="img--bg" src="<?php echo $attachment_url; ?>" alt="img"/>
												</a>
											</div>
											<?php  endforeach; endif;?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- cause details tabs end-->
					</div>
				</div>
			</div>
		</section>
		<?php endwhile; ?>
		<!-- causes start-->
		<section class="section causes causes--style-2"><img class="causes__bg" src="<?php echo get_theme_file_uri(); ?>/assets/img/causes_img-2.png" alt="img"/>
			<div class="container">
				<div class="row align-items-end margin-bottom">
					<div class="col-md-6 col-xl-5">
						<div class="heading heading--primary no-margin-bottom"><span class="heading__pre-title">What we Do</span>
							<h2 class="heading__title no-margin-bottom"><span>Helpo</span> <span>Causes</span></h2>
						</div>
					</div>
					<div class="col-md-6 col-xl-6 offset-xl-1 d-flex justify-content-md-end">
						<!-- slider nav start-->
						<div class="slider__nav causes-slider__nav">
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
			<div class="causes-holder offset-margin">
				<div class="causes-holder__wrapper">
					<div class="causes-slider offset-margin">

						<?php 
							//wp_reset_postdata();
							$tempcauses2 = new WP_Query([
								'post_type'	=>	'causes',
								'posts_per_page'	=> 10,
								'orderby'	=> 'rand'
							]);
							while ($tempcauses2->have_posts()): $tempcauses2->the_post();
								$goal2 	=  	get_post_meta(get_the_id(), '_causes-goal-amount', true);
								$achive2 = 	get_post_meta(get_the_id(), '_causes-achive-amount', true);

								$percentage2 = intval(($achive2/$goal2)*100);
								if($percentage2<100):
						?>

						<div class="causes-slider__item">
								<div class="causes-item causes-item--primary">
									<div class="causes-item__body">
										<div class="causes-item__top">
											<h6 class="causes-item__title"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
											<p><?php echo wp_trim_words(get_the_content(), 20, '...'); ?></p>
										</div>
										<div class="causes-item__img">
											<div class="causes-item__badge" style="background-color: #49C2DF"><a href="<?php echo esc_url(''); ?>"><?php echo get_the_term_list(get_the_ID(), 'causes-taxonomy', '', '', '', ''); ?></a></div>
											<?php the_post_thumbnail('thumbnail', array('class' => 'img--bg')); ?>
										</div>
										<div class="causes-item__lower">
											<div class="progress-bar">
												<div class="progress-bar__inner" style="width: <?php echo $percentage2; ?>%;">
													<div class="progress-bar__value"><?php echo $percentage2; ?>%</div>
												</div>
											</div>
											<div class="causes-item__details-holder">
												<div class="causes-item__details-item"><span>Goal: </span><span><?php echo get_post_meta(get_the_id(), '_causes-goal-amount', true); ?><?php echo get_post_meta(get_the_id(), '_causes-currency-symbol', true); ?></span></div>
												<div class="causes-item__details-item text-right"><span>Pledged: </span><span><?php echo get_post_meta(get_the_id(), '_causes-achive-amount', true); ?><?php echo get_post_meta(get_the_id(), '_causes-currency-symbol', true); ?></span></div>
											</div>
										</div>
									</div><a class="button causes-item__button button--primary" href="<?php the_permalink(); ?>">+ Donate</a>
								</div>
							</div>
						<?php endif; endwhile; ?>
						
						
					</div>
				</div>
			</div>
		</section>
		<!-- causes end-->
	</main>
<?php get_footer(); ?>
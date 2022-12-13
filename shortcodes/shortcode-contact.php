<?php 


	add_shortcode('contact-address-map-form2', 'contact_address_map_form');
	function contact_address_map_form($attr, $content=""){
		$attr = extract(shortcode_atts([
			'shortcode_contact'			=> '[contact-form-7 id="473" title="Contact Page Form"]',
			'google_map_embed_html'		=> '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1279.5534262060485!2d89.9900613482145!3d24.893764659808948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc05435dfa695cf39!2sBrothers%20Developer!5e0!3m2!1sen!2sbd!4v1661437735981!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'
		], $attr));
	 	ob_start(); ?>
	 		<!-- contacts start-->
			<section class="section contacts no-padding-top">
				<div class="contacts-wrapper">
					<div class="container">
						<div class="row justify-content-end">
							<div class="col-xl-6 message-form">
								<?php echo do_shortcode($shortcode_contact); ?>
							</div>
						</div>
					</div>
					<div class="contacts-wrapper__map">
						<?php echo do_shortcode($google_map_embed_html); ?>
					</div>

				</div>
			</section>
			<!-- contacts end-->
	 	<?php return ob_get_clean();
	}


	add_shortcode('contact-address', 'contact_address');
	function contact_address($attr, $content){
	 	ob_start(); ?>
	 		<!-- section start-->
			<section class="section contacts">
				<div class="container">
					<div class="row offset-margin">
						<div class="col-sm-6 col-lg-3">
							<div class="icon-item">
								<div class="icon-item__img">
									<img class="img--layout" src="<?php echo get_theme_file_uri(); ?>/assets/img/icon_1-1.png" alt="img"/>
									<h2><i class="fa-solid fa-map-location"></i></h2>
								</div>
								<div class="icon-item__text">
									<p>Address: 
										<br>
										<p><?php global $redux_demo; echo $redux_demo['address'] ?></p>
									</p>
									
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3">
							<div class="icon-item">
								<div class="icon-item__img">
									<img class="img--layout" src="<?php echo get_theme_file_uri(); ?>/assets/img/icon_2-2.png" alt="img"/>
									<h2><i class="fa-solid fa-phone"></i></h2>
								</div>
								<div class="icon-item__text">
									<p>Phone: 
										<br>
										<p><a class="icon-item__link" href="tel:<?php echo $redux_demo['ph1'] ?>"><?php echo $redux_demo['ph1'] ?></a> 
										<br>
										<a class="icon-item__link" href="tel:<?php echo $redux_demo['ph2'] ?>"><?php echo $redux_demo['ph2'] ?></a></p>
									</p>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3">
							<div class="icon-item">
								<div class="icon-item__img">
									<img class="img--layout" src="<?php echo get_theme_file_uri(); ?>/assets/img/icon_3-3.png" alt="img"/>
									<h2><i class="fa-solid fa-envelope"></i></h2>
								</div>
								<div class="icon-item__text">
									<p>Email: <br> 
										<p><a class="icon-item__link" href="mailto:<?php echo $redux_demo['email'] ?>"><?php echo $redux_demo['email'] ?></a></p>
									</p>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3">
							<div class="icon-item">
								<div class="icon-item__img">
									<img class="img--layout" src="<?php echo get_theme_file_uri(); ?>/assets/img/icon_4-4.png" alt="img"/>
									<h2><i class="fa-solid fa-share-nodes"></i></h2>
								</div>
								<div class="icon-item__text">
									<!-- socials start-->
									<p>Social Link:
									<ul class="socials">
										<?php if($redux_demo['instagram']) : ?>
										<li class="socials__item">
											<a class="socials__link" href="<?php echo $redux_demo['instagram'] ?>">
												<h5><i class="fa fa-instagram" aria-hidden="true"></i></h5>
											</a>
										</li>
										<?php endif; ?>
										<?php if($redux_demo['googleplus']) : ?>
										<li class="socials__item">
											<a class="socials__link" href="<?php echo $redux_demo['googleplus'] ?>">
												<h5><i class="fa fa-google-plus" aria-hidden="true"></i></h5>
											</a>
										</li>
										<?php endif; ?>
										<?php if($redux_demo['tweet']) : ?>
										<li class="socials__item">
											<a class="socials__link" href="<?php echo $redux_demo['tweet'] ?>">
												<h5><i class="fa fa-twitter" aria-hidden="true"></i></h5>
											</a>
										</li>
										<?php endif; ?>
										<?php if($redux_demo['facebook']) : ?>
										<li class="socials__item">
											<a class="socials__link" href="<?php echo $redux_demo['facebook'] ?>">
												<h5><i class="fa fa-facebook" aria-hidden="true"></i></h5>
											</a>
										</li>
										<?php endif; ?>
									</ul>
									</p>
									<!-- socials end-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- section end-->
	 	<?php return ob_get_clean();
	}
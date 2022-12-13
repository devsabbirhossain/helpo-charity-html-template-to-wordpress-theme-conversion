<!-- footer start-->
<?php
	global $redux_demo; 
?>
			<footer class="footer">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-lg-3">
							<div class="footer-logo">
								<a class="footer-logo__link" href="<?php echo home_url(); ?>">
									<img class="footer-logo__img" src="<?php echo $redux_demo['foo-logo']['url']; ?>" alt="logo"/>
								</a>
							</div>
							<!-- footer socials start-->
							<ul class="footer-socials">
								<?php if($redux_demo['facebook']) : ?>
								<li class="footer-socials__item">
									<a class="footer-socials__link" href="<?php echo $redux_demo['facebook'] ?>">
										<i class="fa fa-facebook" aria-hidden="true"></i>
									</a>
								</li>
								<?php endif; ?>

								<?php if($redux_demo['tweet']) : ?>
								<li class="footer-socials__item">
									<a class="footer-socials__link" href="<?php echo $redux_demo['tweet'] ?>">
										<i class="fa fa-twitter" aria-hidden="true"></i>
									</a>
								</li>
								<?php endif; ?>

								<?php if($redux_demo['googleplus']) : ?>
								<li class="footer-socials__item">
									<a class="footer-socials__link" href="S">
										<i class="fa fa-google-plus" aria-hidden="true"></i>
									</a>
								</li>
								<?php endif; ?>
								<?php if($redux_demo['instagram']) : ?>
								<li class="footer-socials__item">
									<a class="footer-socials__link" href="<?php echo $redux_demo['instagram'] ?>">
										<i class="fa fa-instagram" aria-hidden="true"></i>
									</a>
								</li>
								<?php endif; ?>
							</ul>
							<!-- footer socials end-->
						</div>
						<div class="col-sm-6 col-lg-3">
							<h4 class="footer__title">Contacts</h4>
							<div class="footer-contacts">
								<p class="footer-contacts__address"><?php echo $redux_demo['fo-address']; ?></p>
								<p class="footer-contacts__phone">Phone: <a href="tel:<?php echo $redux_demo['fo-ph1']; ?>"><?php echo $redux_demo['fo-ph1']; ?></a></p>
								<p class="footer-contacts__mail">Email: <a href="mailto:<?php echo $redux_demo['fo-email']; ?>"><?php echo $redux_demo['fo-email']; ?></a></p>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3">
							<h4 class="footer__title">Menu & Links</h4>
							<!-- footer nav start-->
							<?php 
				              wp_nav_menu([
				                'theme_location'  =>  'footer-menu',
				                'menu_class'      =>  'footer-menu',
				                'container'       =>  ' '
				              ]);
				            ?>
							<!-- footer nav end-->
						</div>
						<div class="col-sm-6 col-lg-3">
							<h4 class="footer__title">Donate</h4>
							<p>Help Us Change the Lives of Children in World</p><a class="button footer__button button--filled" href="<?php echo $redux_demo['dbl'] ?>">Donate</a>
						</div>
					</div>
					<div class="row align-items-baseline">
						<div class="col-md-6">
							<p class="footer-copyright"><?php echo $redux_demo['copy-text']; ?></p>
						</div>
						<div class="col-md-6">
							<div class="footer-privacy">
								<a class="footer-privacy__link" href="<?php echo $redux_demo['ppl']; ?>"><?php echo $redux_demo['ppt']; ?></a>
								<span class="footer-privacy__divider">|</span>
								<a class="footer-privacy__link" href="<?php echo $redux_demo['tcl']; ?>"><?php echo $redux_demo['tct']; ?></a>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- footer end-->
		</div>
	<?php wp_footer(); ?>
	</body>
</html>
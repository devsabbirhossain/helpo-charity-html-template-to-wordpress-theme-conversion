<?php 
	global $redux_demo; 
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>"/>
	<meta name="description" content="description"/>
	<meta name="keywords" content="keywords"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta http-equiv="X-UA-Compatible" content="ie=edge"/>

	<link rel="shortcut icon" href="<?php echo $redux_demo['favicon']['url']; ?>"/>
	
	<!-- web-font loader-->
	<script>
		WebFontConfig = {
			google: {
				families: ['Quicksand:300,400,500,700', 'Permanent+Marker:400'],
			}
		}

		function font() {
			var wf = document.createElement('script')
			wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js'
			wf.type = 'text/javascript'
			wf.async = 'true'
			var s = document.getElementsByTagName('script')[0]
			s.parentNode.insertBefore(wf, s)
		}
		font()
	</script>
	<?php wp_head(); ?>

</head <?php body_class(); ?>>
<body>
	<div class="page-wrapper">
		<!-- aside dropdown start-->
		<div class="aside-dropdown">
			<div class="aside-dropdown__inner">
				<span class="aside-dropdown__close">
					<!-- <svg class="icon">
						<use xlink:href="#close"></use>
					</svg> -->
					<span><i class="fa-solid fa-xmark"></i></span>
				</span>
			<div class="aside-dropdown__item d-lg-none d-block">
				<nav class="menu-nav">
					<?php 
						wp_nav_menu([
			               'theme_location'  =>  'main-menu',
			               'menu_class'      =>  'aside-menu',
			               'container'       =>  ' '
			            ]);
					?>
				</nav>
			</div>
			<div class="aside-dropdown__item">
				<!-- aside menu start-->
				
				<?php 
					wp_nav_menu([
		               'theme_location'  =>  'aside-menu',
		               'menu_class'      =>  'aside-menu custom-aside',
		               'container'       =>  ' '
		            ]);
				?>
				<!-- aside menu end-->
				<div class="aside-inner">
					<span class="aside-inner__title">Email</span>
					<a class="aside-inner__link" href="mailto:<?php echo $redux_demo['email'] ?>"><?php echo $redux_demo['email'] ?></a>
				</div>
				<div class="aside-inner">
					<span class="aside-inner__title">Phone numbers</span>
					<a class="aside-inner__link" href="tel:<?php echo $redux_demo['ph1'] ?>"><?php echo $redux_demo['ph1'] ?></a>
					<a class="aside-inner__link" href="tel:<?php echo $redux_demo['ph2'] ?>"><?php echo $redux_demo['ph2'] ?></a>
				</div>
				<ul class="aside-socials">
					<?php if($redux_demo['instagram']) : ?>
					<li class="aside-socials__item">
						<a class="aside-socials__link" href="<?php echo $redux_demo['instagram'] ?>">
							<i class="fa fa-instagram" aria-hidden="true"></i>
						</a>
					</li>
					<?php endif; ?>

					<?php if($redux_demo['googleplus']) : ?>
					<li class="aside-socials__item">
						<a class="aside-socials__link" href="<?php echo $redux_demo['googleplus'] ?>">
							<i class="fa fa-google-plus" aria-hidden="true"></i>
						</a>
					</li>
					<?php endif; ?>

					<?php if($redux_demo['tweet']) : ?>
					<li class="aside-socials__item">
						<a class="aside-socials__link aside-socials__link--active" href="<?php echo $redux_demo['tweet'] ?>">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</a>
					</li>
					<?php endif; ?>

					<?php if($redux_demo['facebook']) : ?>
					<li class="aside-socials__item">
						<a class="aside-socials__link" href="<?php echo $redux_demo['facebook'] ?>">
							<i class="fa fa-facebook" aria-hidden="true"></i>
						</a>
					</li>
					<?php endif; ?>

				</ul>
			</div>
			<div class="aside-dropdown__item">
				<a class="button button--squared" href="<?php echo $redux_demo['dbl'] ?>">
					<span>Donate</span>
				</a>
			</div>
			</div>
		</div>
		<!-- aside dropdown end-->

		<!-- header start-->
		<header class="header header--inner">
			<div class="container-fluid">
				<div class="row no-gutters justify-content-between">
					<div class="col-auto d-flex align-items-center">
						<div class="dropdown-trigger dropdown-trigger--inner d-none d-sm-block">
							<div class="dropdown-trigger__item"></div>
						</div>
						<div class="header-logo">
							<a class="header-logo__link" href="<?php echo home_url(); ?>">
								<img class="header-logo__img" src="<?php echo $redux_demo['theme-logo']['url']; ?>" alt="logo"/>
							</a>
						</div>
					</div>
					<div class="col-auto">
						<!-- main menu start-->
						<nav class="menu-nav">
							<?php 
								wp_nav_menu([
					               'theme_location'  =>  'main-menu',
					               'menu_class'      =>  'main-menu main-menu--inner',
					               'container'       =>  ' '
					            ]);
							?>
						</nav>
						<!-- main menu end-->
					</div>
					<div class="col-auto d-flex align-items-center">
						<a class="button button--squared" href="<?php echo $redux_demo['dbl'] ?>"> <span>Donate</span></a>
						<div class="dropdown-trigger dropdown-trigger--inner d-block d-sm-none">
							<div class="dropdown-trigger__item"></div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- header end-->
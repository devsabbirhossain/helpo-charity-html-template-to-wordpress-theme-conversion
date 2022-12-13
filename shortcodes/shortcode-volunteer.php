<?php
	
	add_shortcode('volunteer-welcome', 'custom_volunteer_whatwedo');
	function custom_volunteer_whatwedo($attr, $content){
		$attr = extract(shortcode_atts([
			'heading'	=>	'What we Do',
			'title'	=>	'We Need</span> <span>Your Help',
			'content_text'		=> 'Burma danio black bass straptail southern Dolly Varden orbicular velvetfish trumpetfish; bluntnose minnow. Hatchetfish pricklefish sixgill ray sawfish scaly dragonfish! Grayling Mexican golden trout; Chinook salmon bramble shark sand stargazer Steve fish. Scat zebra pleco graveldiver river shark tripod fish; flagtail bala shark warbonnet.</p>
							<p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail, Canthigaster rostrata. Midshipman dartfish Modoc sucker, yellowtail kingfish basslet. Buri chimaera triplespine northern sea robin zingel lancetfish galjoen fish, catla wolffish, mosshead warbonnet.</p>
							<p>Sea chub demoiselle whalefish zebra lionfish mud cat pelican eel. Minnow snoek icefish velvet-belly shark, California halibut round stingray northern sea robin. Southern grayling trout-perch',
			'imagelink'	=>	'#',
			'bg_image'	=>	'#',
		], $attr));
	 	ob_start();?>
			<!-- section start-->
			<section class="section">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 col-xl-5">
							<div class="img-box">
								<img class="img--layout" src="<?php $image_url = wp_get_attachment_image_src($bg_image, 'full'); echo $image_url[0]; ?>" alt="img"/>
								<div class="img-box__img">
									<img class="img--bg" src="<?php $image_url = wp_get_attachment_image_src($imagelink, 'full'); echo $image_url[0]; ?>" alt="img"/>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-xl-6 offset-xl-1">
							<div class="heading heading--primary">
								<span class="heading__pre-title"><?php echo do_shortcode($heading); ?></span>
								<h2 class="heading__title"><span><?php echo do_shortcode($title); ?></span></h2>
							</div>
							<p><?php echo do_shortcode($content_text); ?></p>
						</div>
					</div>
				</div>
			</section>
			<!-- section end-->
	 	<?php return ob_get_clean();
	}

	add_shortcode('volunteer-form', 'custom_volunteer_form');
	function custom_volunteer_form($attr, $content=""){
		$attr = extract(shortcode_atts([
			'title'	=>	'Complete</span> <span>the Form',
			'subtitle'	=>	'Fill Form and Beacame Volonteer',
			'small_text'		=> 'Sea chub demoiselle whalefish zebra lionfish mud cat pelican eel. Minnow snoek icefish velvet-belly shark, California halibut round stingray northern sea robin. Southern grayling trout-perch',
		], $attr));
	 	ob_start();?>
			<!-- section start-->
			<section class="section forms-section no-padding-top no-padding-bottom">
				<div class="container">
					<div class="row margin-bottom">
						<div class="col-lg-6">
							<div class="heading heading--primary"><span class="heading__pre-title"><?php echo do_shortcode($title); ?></span>
								<h2 class="heading__title"><span><?php echo do_shortcode($subtitle); ?></span></h2>
							</div>
						</div>
						<div class="col-lg-6">
							<p><?php echo do_shortcode($small_text); ?></p>
						</div>
					</div>
					<div class="row">
						<div class="col-12 user-form">
							<?php echo do_shortcode($content); ?>
						</div>
					</div>
				</div>
			</section>
			<!-- section end-->
	 	<?php return ob_get_clean();
	}
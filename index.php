	<?php 
	include_once('header.php'); 
	include_once('includes/application_top.php'); 
	?>
		<div class="header-video">
			<div id="hero_video">
				<div class="content">
					<h3>Find a Doctor!</h3>
					<p>
						A Wealth of Experience To Heal and Help You.
					</p>
					<form method="post" action="list.php" name="list_information" id="list_information">
					
						<div id="custom-search-input">
							<div class="input-group">
								<input type="text" id="skill_input" name="skill_input" class="search-query" placeholder="Ex.Specialization ....">
								<input type="submit" class="btn_search" value="Search">
							</div>
							<ul>
								<li>
									<input type="radio" id="all" name="radio_search" value="all" checked>
									<label for="all">All</label>
								</li>
								<li>
									<input type="radio" id="doctor" name="radio_search" value="doctor">
									<label for="doctor">Doctor</label>
								</li>
								<li>
									<input type="radio" id="clinic" name="radio_search" value="clinic">
									<label for="clinic">Clinic</label>
								</li>
							</ul>
						</div>
					</form>
				</div>
			</div>
			<img src="img/video_fix.png" alt="" class="header-video--media" data-video-src="video/intro" data-teaser-source="video/intro" data-provider="" data-video-width="1920" data-video-height="750">
		</div>
		<!-- /Header video -->

		<div class="container margin_120_95">
			<div class="main_title">
				<h2>Find by specialization</h2>
				<p>Nec graeci sadipscing disputationi ne, mea ea nonumes percipitur. Nonumy ponderum oporteat cu mel, pro movet cetero at.</p>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<a href="list.html" class="box_cat_home">
						<i class="icon-info-4"></i>
						<img src="img/icon_cat_1.svg" width="60" height="60" alt="">
						<h3>Primary Care</h3>
						<ul class="clearfix">
							<li><strong>124</strong>Doctors</li>
							<li><strong>60</strong>Clinics</li>
						</ul>
					</a>
				</div>
				<div class="col-lg-3 col-md-6">
					<a href="list.html" class="box_cat_home">
						<i class="icon-info-4"></i>
						<img src="img/icon_cat_2.svg" width="60" height="60" alt="">
						<h3>Cardiology</h3>
						<ul class="clearfix">
							<li><strong>124</strong>Doctors</li>
							<li><strong>60</strong>Clinics</li>
						</ul>
					</a>
				</div>
				<div class="col-lg-3 col-md-6">
					<a href="list.html" class="box_cat_home">
						<i class="icon-info-4"></i>
						<img src="img/icon_cat_3.svg" width="60" height="60" alt="">
						<h3>MRI Resonance</h3>
						<ul class="clearfix">
							<li><strong>124</strong>Doctors</li>
							<li><strong>60</strong>Clinics</li>
						</ul>
					</a>
				</div>
				<div class="col-lg-3 col-md-6">
					<a href="list.html" class="box_cat_home">
						<i class="icon-info-4"></i>
						<img src="img/icon_cat_4.svg" width="60" height="60" alt="">
						<h3>Blood test</h3>
						<ul class="clearfix">
							<li><strong>124</strong>Doctors</li>
							<li><strong>60</strong>Clinics</li>
						</ul>
					</a>
				</div>
				<div class="col-lg-3 col-md-6">
					<a href="list.html" class="box_cat_home">
						<i class="icon-info-4"></i>
						<img src="img/icon_cat_7.svg" width="60" height="60" alt="">
						<h3>Laboratory</h3>
						<ul class="clearfix">
							<li><strong>124</strong>Doctors</li>
							<li><strong>60</strong>Clinics</li>
						</ul>
					</a>
				</div>
				<div class="col-lg-3 col-md-6">
					<a href="list.html" class="box_cat_home">
						<i class="icon-info-4"></i>
						<img src="img/icon_cat_5.svg" width="60" height="60" alt="">
						<h3>Dentistry</h3>
						<ul class="clearfix">
							<li><strong>124</strong>Doctors</li>
							<li><strong>60</strong>Clinics</li>
						</ul>
					</a>
				</div>
				<div class="col-lg-3 col-md-6">
					<a href="list.html" class="box_cat_home">
						<i class="icon-info-4"></i>
						<img src="img/icon_cat_6.svg" width="60" height="60" alt="">
						<h3>X - Ray</h3>
						<ul class="clearfix">
							<li><strong>124</strong>Doctors</li>
							<li><strong>60</strong>Clinics</li>
						</ul>
					</a>
				</div>
				<div class="col-lg-3 col-md-6">
					<a href="list.html" class="box_cat_home">
						<i class="icon-info-4"></i>
						<img src="img/icon_cat_8.svg" width="60" height="60" alt="">
						<h3>Piscologist</h3>
						<ul class="clearfix">
							<li><strong>124</strong>Doctors</li>
							<li><strong>60</strong>Clinics</li>
						</ul>
					</a>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->

		<div class="bg_color_1">
			<div class="container margin_120_95">
				<div class="main_title">
					<h2>Most Viewed doctors</h2>
					<p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri.</p>
				</div>
				<div id="reccomended" class="owl-carousel owl-theme">
					<div class="item">
						<a href="detail-page.html">
							<div class="views"><i class="icon-eye-7"></i>140</div>
							<div class="title">
								<h4>Dr. Julia Holmes<em>Pediatrician - Cardiologist</em></h4>
							</div><img src="img/doctor_1_carousel.jpg" alt="">
						</a>
					</div>
					<div class="item">
						<a href="detail-page.html">
							<div class="views"><i class="icon-eye-7"></i>120</div>
							<div class="title">
								<h4>Dr. Julia Holmes<em>Pediatrician</em></h4>
							</div><img src="img/doctor_2_carousel.jpg" alt="">
						</a>
					</div>
					<div class="item">
						<a href="detail-page.html">
							<div class="views"><i class="icon-eye-7"></i>115</div>
							<div class="title">
								<h4>Dr. Julia Holmes<em>Pediatrician</em></h4>
							</div><img src="img/doctor_3_carousel.jpg" alt="">
						</a>
					</div>
					<div class="item">
						<a href="detail-page.html">
							<div class="views"><i class="icon-eye-7"></i>98</div>
							<div class="title">
								<h4>Dr. Julia Holmes<em>Pediatrician</em></h4>
							</div><img src="img/doctor_4_carousel.jpg" alt="">
						</a>
					</div>
					<div class="item">
						<a href="detail-page.html">
							<div class="views"><i class="icon-eye-7"></i>98</div>
							<div class="title">
								<h4>Dr. Julia Holmes<em>Pediatrician</em></h4>
							</div><img src="img/doctor_5_carousel.jpg" alt="">
						</a>
					</div>
				</div>
				<!-- /carousel -->
			</div>
			<!-- /container -->
		</div>
		<!-- /white_bg -->
		
		<div class="container margin_120_95">
			<div class="main_title">
				<h2>Discover the <strong>online</strong> appointment!</h2>
				<p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel.</p>
			</div>
			<div class="row add_bottom_30">
				<div class="col-lg-4">
					<div class="box_feat" id="icon_1">
						<span></span>
						<h3>Find a Doctor</h3>
						<p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie.</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="box_feat" id="icon_2">
						<span></span>
						<h3>View profile</h3>
						<p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie.</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="box_feat" id="icon_3">
						<h3>Book a visit</h3>
						<p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie.</p>
					</div>
				</div>
			</div>
			<!-- /row -->
			<p class="text-center"><a href="list.html" class="btn_1 medium">Find Doctor</a></p>
		</div>
		<!-- /container -->

		<div id="app_section">
			<div class="container">
				<div class="row justify-content-around">
					<div class="col-md-5">
						<p><img src="img/app_img.svg" alt="" class="img-fluid" width="500" height="433"></p>
					</div>
					<div class="col-md-6">
						<small>Application</small>
						<h3>Download <strong>Findoctor App</strong> Now!</h3>
						<p class="lead">Tota omittantur necessitatibus mei ei. Quo paulo perfecto eu, errem percipit ponderum no eos. Has eu mazim sensibus. Ad nonumes dissentiunt qui, ei menandri electram eos. Nam iisque consequuntur cu.</p>
						<div class="app_buttons wow" data-wow-offset="100">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 43.1 85.9" style="enable-background:new 0 0 43.1 85.9;" xml:space="preserve">
							<path stroke-linecap="round" stroke-linejoin="round" class="st0 draw-arrow" d="M11.3,2.5c-5.8,5-8.7,12.7-9,20.3s2,15.1,5.3,22c6.7,14,18,25.8,31.7,33.1" />
							<path stroke-linecap="round" stroke-linejoin="round" class="draw-arrow tail-1" d="M40.6,78.1C39,71.3,37.2,64.6,35.2,58" />
							<path stroke-linecap="round" stroke-linejoin="round" class="draw-arrow tail-2" d="M39.8,78.5c-7.2,1.7-14.3,3.3-21.5,4.9" />
						</svg>
							<a href="#0" class="fadeIn"><img src="img/apple_app.png" alt="" width="150" height="50" data-retina="true"></a>
							<a href="#0" class="fadeIn"><img src="img/google_play_app.png" alt="" width="150" height="50" data-retina="true"></a>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /app_section -->
	<?php include_once('footer.php'); ?>
	
	<!-- SPECIFIC SCRIPTS -->
	<script src="js/video_header.js"></script>
	<script>
		'use strict';
		HeaderVideo.init({
			container: $('.header-video'),
			header: $('.header-video--media'),
			videoTrigger: $("#video-trigger"),
			autoPlayVideo: true
		});
	</script>
	
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

	<script>
	$(function() {
		$("#skill_input").autocomplete({
			source: "demo.php",
		});
	});
	</script>


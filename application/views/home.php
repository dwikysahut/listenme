<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
		============================================= -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,400i,600,700|Montserrat:300,400,700|Caveat+Brush&display=swap" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/style.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/dark.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/swiper.css" type="text/css" />

		<!-- Music Specific Stylesheet -->
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/demos/music/music.css" type="text/css" />
		<!-- / -->

		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-icons.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/one-page/css/et-line.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/animate.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/magnific-popup.css" type="text/css" />

		<link rel="stylesheet" href="<?php echo base_url() ?>assets/demos/music/css/fonts.css" type="text/css" />

		<!-- Bootstrap Switch CSS -->
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/components/bs-switches.css" type="text/css" />

		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/custom.css" type="text/css" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- Theme color -->
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/colors.php?color=ed215e" type="text/css" />

		<!-- Audio Player Plugin CSS -->
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/demos/music/css/mediaelement/mediaelementplayer.css">

	<!-- Document Title
		============================================= -->
		<title>Listen Me</title>

		<style>
			.css3-spinner { background-color: #131722; }
		</style>

	</head>

	<body class="stretched bg-color2" data-loader="4" data-loader-color="theme">

	<!-- Document Wrapper
		============================================= -->
		<div id="wrapper" class="clearfix" style="margin-bottom: 40px">

		<!-- Header
			============================================= -->
			<header id="header" class="full-header transparent-header dark no-sticky header-size-md">
				<div id="header-wrap">
					<div class="container">
						<div class="header-row">

						<!-- Logo
							============================================= -->
							<div id="logo">
								<a href="index.html" class="standard-logo" data-dark-logo="<?php echo base_url() ?>assets/demos/music/images/logo-dark.png"><img src="<?php echo base_url() ?>assets/demos/music/images/logo.png" alt="Canvas Logo"></a>
								<a href="index.html" class="retina-logo" data-dark-logo="<?php echo base_url() ?>assets/demos/music/images/logo-dark@2x.png"><img src="<?php echo base_url() ?>assets/demos/music/images/logo@2x.png" alt="Canvas Logo"></a>
							</div><!-- #logo end -->

							<div class="header-misc">

							<!-- Top Search
								============================================= -->
								<div id="top-search" class="header-misc-icon">
									<a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>
								</div><!-- #top-search end -->

							</div>

							<div id="primary-menu-trigger">
								<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
							</div>

						<!-- Primary Navigation
							============================================= -->
							<nav class="primary-menu not-dark">

								<ul class="menu-container">
									<li class="menu-item active"><a class="menu-link" href="#"><div>Home</div></a></li>
									<li class="menu-item"><a class="menu-link" href="#"><div>Musics</div></a>
										<ul class="sub-menu-container">
											<li class="menu-item"><a class="menu-link" href="#"><div>Featured</div></a></li>
											<li class="menu-item"><a class="menu-link" href="#"><div>New Arrivals</div></a></li>
											<li class="menu-item"><a class="menu-link" href="#"><div>Old Popular</div></a></li>
											<li class="menu-item"><a class="menu-link" href="#"><div>Top 90's</div></a></li>
										</ul>
									</li>
									<li class="menu-item"><a class="menu-link" href="#"><div>About</div></a></li>
									<li class="menu-item"><a class="menu-link" href="#"><div>Discover</div></a></li>
									<li class="menu-item"><a class="menu-link" href="#"><div>Artists</div></a>
										<ul class="sub-menu-container">
											<li class="menu-item"><a class="menu-link" href="#"><div>A-Z Artists</div></a></li>
											<li class="menu-item"><a class="menu-link" href="#"><div>New Artists</div></a></li>
											<li class="menu-item"><a class="menu-link" href="#"><div>Popular Artists</div></a></li>
										</ul>
									</li>
									<li class="menu-item"><a class="menu-link" href="#"><div>Videos</div></a></li>
									<li class="menu-item"><a class="menu-link" href="#"><div>Contact</div></a></li>
									<li class="menu-item"><a class="menu-link" href="<?php echo site_url('premium') ?>"><div><b>Join VIP</b></div></a></li>
								</ul>

							</nav><!-- #primary-menu end -->

							<form class="top-search-form" action="search.html" method="get">
								<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
							</form>

						</div>
					</div>
				</div>
				<div class="header-wrap-clone"></div>
			</header><!-- #header end -->

		<!-- Slider
			============================================= -->
			<section id="slider" class="slider-element swiper_wrapper min-vh-60 min-vh-md-100 include-header" style="background: #131722;" data-effect="fade" data-loop="true" data-speed="1000">
				<div class="swiper-container swiper-parent">
					<div class="swiper-wrapper">
						<div class="swiper-slide dark">
							<div class="container">
								<div class="slider-caption justify-content-end">
									<div>
										<h2 class="font-primary nott">The Terror Of Highway.</h2>
										<p class="d-none d-md-block">From the New York City of the World.</p>
										<a class="button button-rounded font-weight-normal ls1 track-list mt-3 clearfix" data-track="<?php echo base_url() ?>assets/demos/music/tracks/the-terror-of-highway.mp3" data-poster="<?php echo base_url() ?>assets/demos/music/tracks/poster-images/the-terror-of-highway.jpg" data-title="The Terror Of Highway" data-singer="United Album"><i class="icon-play"></i>Play Now</a>
										<a href="#" class="button d-none d-md-inline-block button-rounded mt-3 px-3" style="background-color: #1f2330;"><i class="icon-line-ribbon mr-0"></i></a>
										<a href="#" class="button d-none d-md-inline-block button-rounded mt-3 px-3" style="background-color: #1f2330;"><i class="icon-line-heart mr-0"></i></a>
										<a href="#" class="button d-none d-md-inline-block bg-transparent font-weight-light nott mt-3 px-3"><i class="icon-line-share color"></i>Share</a>
										<a href="#" class="button d-none d-md-inline-block bg-transparent font-weight-light nott mt-3 px-3 ml-0"><i class="icon-line-plus color"></i>Add</a>
									</div>
								</div>
							</div>
							<div class="swiper-slide-bg" style="background-image: url('<?php echo base_url() ?>assets/demos/music/images/slider/1.jpg'); background-position: bottom center;"></div>
						</div>
						<div class="swiper-slide dark">
							<div class="container">
								<div class="slider-caption justify-content-end">
									<div>
										<h2 class="font-primary nott">sgt. peppers heart club band Edition</h2>
										<p class="d-none d-md-block">The Beatles Club</p>
										<a href="#" class="button button-rounded font-weight-normal ls1 track-list mt-3 clearfix" data-track="<?php echo base_url() ?>assets/demos/music/tracks/tammy-stan-devereaux.mp3" data-poster="<?php echo base_url() ?>assets/demos/music/tracks/poster-images/tammy-stan-devereaux.jpg" data-title="sgt. peppers heart club band Edition" data-singer="the bettles 2021"><i class="icon-play"></i>Play Now</a>
										<a href="#" class="button d-none d-md-inline-block button-rounded mt-3 px-3" style="background-color: #1f2330;"><i class="icon-line-ribbon mr-0"></i></a>
										<a href="#" class="button d-none d-md-inline-block button-rounded mt-3 px-3" style="background-color: #1f2330;"><i class="icon-line-heart mr-0"></i></a>
										<a href="#" class="button d-none d-md-inline-block mt-3 px-3 bg-transparent font-weight-light nott" style="background-color: #1f2330;"><i class="icon-line-share color"></i>Share</a>
										<a href="#" class="button d-none d-md-inline-block mt-3 px-3 bg-transparent font-weight-light nott ml-0" style="background-color: #1f2330;"><i class="icon-line-plus color"></i>Add</a>
									</div>
								</div>
							</div>
							<div class="swiper-slide-bg" style="background-image: url('<?php echo base_url() ?>assets/demos/music/images/slider/2.jpg');"></div>
						</div>
						<div class="swiper-slide dark">
							<div class="container">
								<div class="slider-caption justify-content-end">
									<div>
										<h2 class="font-primary nott">The End Of The Beginning</h2>
										<p class="d-none d-md-block">The Unplugged Editions</p>
										<a href="#" class="button button-rounded font-weight-normal ls1 track-list mt-3 clearfix" data-track="<?php echo base_url() ?>assets/demos/music/tracks/the-end-of-the-beginning.mp3" data-poster="<?php echo base_url() ?>assets/demos/music/tracks/poster-images/the-end-of-the-beginning.jpg" data-title="The End Of The Beginning" data-singer="The Unplugged Editions" style="margin-top: 15px"><i class="icon-play"></i>Play Now</a>
										<a href="#" class="button d-none d-md-inline-block button-rounded mt-3 px-3" style="background-color: #1f2330;"><i class="icon-line-ribbon mr-0"></i></a>
										<a href="#" class="button d-none d-md-inline-block button-rounded mt-3 px-3" style="background-color: #1f2330;"><i class="icon-line-heart mr-0"></i></a>
										<a href="#" class="button d-none d-md-inline-block mt-3 px-3 bg-transparent font-weight-light nott"><i class="icon-line-share color"></i>Share</a>
										<a href="#" class="button d-none d-md-inline-block mt-3 px-3 bg-transparent font-weight-light nott ml-0"><i class="icon-line-plus color"></i>Add</a>
									</div>
								</div>
							</div>
							<div class="swiper-slide-bg" style="background-image: url('<?php echo base_url() ?>assets/demos/music/images/slider/3.jpg'); background-position: bottom left;"></div>
						</div>
					</div>
					<div class="slider-arrow-left bg-transparent"><i class="icon-line-arrow-left"></i></div>
					<div class="slider-arrow-right bg-transparent"><i class="icon-line-arrow-right"></i></div>
				</div>
			</section>

		<!-- Content
			============================================= -->
			<section id="content" class="bg-color2">
				<div class="content-wrap py-0" style="overflow: visible;">
					<div class="container clearfix" style="z-index: 7;">

						<div class="fancy-title title-border title-center dark">
							<h3>ADS</h3>
						</div>

						<div id="section-pricing" class="page-section p-0 m-0">

						
							<div id="pricing-switch" class="row pricing col-mb-50 mb-0">
								

										<div class="col-md-8">

									<div class="pricing-box pricing-simple p-5 bg-dark border-danger dark">
										<div class="pricing-title">
											
											<h3>WIN $5.000.000 NOW</h3>
										</div>
										<div class="pricing-price">
										<img src="../assets/demos/music/images/ads2.jpeg" alt="Girl in a jacket" width="500" height="300">
										</div>
										
										<div class="pricing-action">
											<a href="#" class="btn btn-danger btn-lg">JOIN NOW</a>
										</div>
									</div>

								</div>
								<div class="col-md-4">

									<div class="pricing-box pricing-simple p-5 bg-dark border-danger dark">
										<div class="pricing-title">
											
											<h3>GET $30.000.000 </h3>
										</div>
										<div class="pricing-price">
										<img src="../assets/demos/music/images/ads1.jpeg" alt="Girl in a jacket" width="500" height="300">
										</div>
										
										<div class="pricing-action">
											<a href="#" class="btn btn-danger btn-lg">JOIN NOW</a>
										</div>
									</div>

								</div>

								
							</div>

						</div>
						<div class="fancy-title title-border title-center dark">
							<h3>Listen Me Premium Prices</h3>
						</div>

						<div id="section-pricing" class="page-section p-0 m-0">

							<div class="pricing-tenure-switcher row align-items-center justify-content-center mb-4 dark" data-container="#pricing-switch">
								<span class="pts-left">Monthly</span>
								<div class="pts-switcher mx-3">
									<div class="switch">
										<input id="switch-toggle-pricing-tenure" class="switch-toggle switch-toggle-round" type="checkbox">
										<label for="switch-toggle-pricing-tenure" class="mb-0"></label>
									</div>
								</div>
								<span class="pts-right">Yearly</span>
							</div>

							<div id="pricing-switch" class="row pricing col-mb-50 mb-0">
								<div class="col-md-6">

									<div class="pricing-box pricing-simple p-5 bg-dark border-top border-primary dark">
										<div class="pricing-title">
											<span>Try Now</span>
											<h3>Free 1 Month</h3>
										</div>
										<div class="pricing-price">
											<span class="price-unit">Rp.</span>0
										</div>
										<div class="pricing-features dark">
											<ul>
												<li><strong>Limited</strong> Access</li>
												<li>Contains Ads</li>
												<li><strong>100</strong> User Accounts</li>
												<li><strong>1 Year</strong> License</li>
												<li>Phone &amp; Email Support</li>
											</ul>
										</div>
										<div class="pricing-action">
											<a href="#" class="btn btn-primary btn-lg">Get Started</a>
										</div>
									</div>

								</div>

								<div class="col-md-6">

								<div class="pricing-box pricing-simple p-5 bg-dark border-top border-success dark">
										<div class="pricing-title">
										<span class="text-success">Full Featured</span>
											<h3>Premium</h3>
										</div>
										<div class="pricing-price">
											<div class="pts-switch-content-left"><span class="price-unit">Rp</span>50.000</div>
										
										</div>
										<div class="pricing-features dark">
											<ul>
												<li><strong>Full</strong> Access</li>
												<li>Free Ads</li>
												<li><strong>100</strong> User Accounts</li>
												<li><strong>1 Year</strong> License</li>
												<li>Phone &amp; Email Support</li>
											</ul>
										</div>
										<div class="pricing-action">
											<a href="#" class="btn btn-danger btn-lg">Get Started</a>
										</div>
									</div>

								</div>

								
							</div>

						</div>

						<div class="heading-block bottommargin-sm border-0 dark">
							<h3>Popular Songs of the Week</h3>
							<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
						</div>

					<!-- Carousel
						============================================= -->
						<div id="oc-popular-songs" class="owl-carousel image-carousel carousel-widget" data-margin="20" data-nav="true" data-pagi="false" data-items-xs="2" data-items-sm="3" data-items-md="4" data-items-lg="6" data-items-xl="6">

						<!-- Carousel Items
							============================================= -->
							<div class="oc-item" data-animate="fadeInDown">
								<img src="<?php echo base_url() ?>assets/demos/music/images/popular-songs/8.jpg" alt="Image 1">
								<div class="bg-overlay">
									<div class="bg-overlay-content text-overlay-mask dark desc-sm align-items-center justify-content-between">
										<div class="portfolio-desc py-0">
											<h3><a href="#">Maq Amor</a></h3>
											<span><a href="#">The Universe</a></span>
										</div>
										<div data-hover-animate="fadeIn" data-hover-speed="400">
											<a href="#" class="text-light mx-0 track-list" data-track="<?php echo base_url() ?>assets/demos/music/tracks/maq-amor.mp3" data-poster="<?php echo base_url() ?>assets/demos/music/tracks/poster-images/maq-amor.jpg" data-title="Maq Amor" data-singer="The Universe"><i class="icon-play"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="oc-item" data-animate="fadeInDown" data-delay="100">
								<img src="<?php echo base_url() ?>assets/demos/music/images/popular-songs/9.jpg" alt="Image 1">
								<div class="bg-overlay">
									<div class="bg-overlay-content text-overlay-mask dark desc-sm align-items-center justify-content-between">
										<div class="portfolio-desc py-0">
											<h3><a href="#">Stagger Lee</a></h3>
											<span><a href="#">Ed Sheeran</a></span>
										</div>
										<div data-hover-animate="fadeIn" data-hover-speed="400">
											<a href="#" class="text-light mx-0 track-list" data-track="<?php echo base_url() ?>assets/demos/music/tracks/stagger-lee.mp3" data-poster="<?php echo base_url() ?>assets/demos/music/tracks/poster-images/stagger-lee.jpg" data-title="Stagger Lee" data-singer="Ed Sheeran"><i class="icon-play"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="oc-item" data-animate="fadeInDown" data-delay="250">
								<img src="<?php echo base_url() ?>assets/demos/music/images/popular-songs/7.jpg" alt="Image 1">
								<div class="bg-overlay">
									<div class="bg-overlay-content text-overlay-mask dark desc-sm align-items-center justify-content-between">
										<div class="portfolio-desc py-0">
											<h3><a href="#">Clean Clean</a></h3>
											<span><a href="#">R Costello</a></span>
										</div>
										<div data-hover-animate="fadeIn" data-hover-speed="400">
											<a href="#" class="text-light mx-0 track-list" data-track="<?php echo base_url() ?>assets/demos/music/tracks/clean-clean.mp3" data-poster="<?php echo base_url() ?>assets/demos/music/images/popular-songs/7.jpg" data-title="Clean Clean" data-singer="R Costello"><i class="icon-play"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="oc-item" data-animate="fadeInDown" data-delay="400">
								<img src="<?php echo base_url() ?>assets/demos/music/images/popular-songs/1.jpg" alt="Image 1">
								<div class="bg-overlay">
									<div class="bg-overlay-content text-overlay-mask dark desc-sm align-items-center justify-content-between">
										<div class="portfolio-desc py-0">
											<h3><a href="#">Take The Dare</a></h3>
											<span><a href="#">Bruno Mars</a></span>
										</div>
										<div data-hover-animate="fadeIn" data-hover-speed="400">
											<a href="#" class="text-light mx-0 track-list" data-track="<?php echo base_url() ?>assets/demos/music/tracks/take_the_dare.mp3" data-poster="<?php echo base_url() ?>assets/demos/music/images/popular-songs/1.jpg" data-title="Take The Dare" data-singer="Bruno Mars"><i class="icon-play"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="oc-item" data-animate="fadeInDown" data-delay="550">
								<img src="<?php echo base_url() ?>assets/demos/music/images/popular-songs/3.jpg" alt="Image 1">
								<div class="bg-overlay">
									<div class="bg-overlay-content text-overlay-mask dark desc-sm align-items-center justify-content-between">
										<div class="portfolio-desc py-0">
											<h3><a href="#">Fallin Extended Mix</a></h3>
											<span><a href="#">Justin</a></span>
										</div>
										<div data-hover-animate="fadeIn" data-hover-speed="400">
											<a href="#" class="text-light mx-0 track-list" data-track="<?php echo base_url() ?>assets/demos/music/tracks/fallin-extended-mix.mp3" data-poster="<?php echo base_url() ?>assets/demos/music/tracks/poster-images/fallin-extended-mix.jpg" data-title="Fallin Extended Mix" data-singer="Justin"><i class="icon-play"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="oc-item" data-animate="fadeInDown" data-delay="700">
								<img src="<?php echo base_url() ?>assets/demos/music/images/popular-songs/4.jpg" alt="Image 1">
								<div class="bg-overlay">
									<div class="bg-overlay-content text-overlay-mask dark desc-sm align-items-center justify-content-between">
										<div class="portfolio-desc py-0">
											<h3><a href="#">I Need You Now</a></h3>
											<span><a href="#">Skelton</a></span>
										</div>
										<div data-hover-animate="fadeIn" data-hover-speed="400">
											<a href="#" class="text-light mx-0 track-list" data-track="<?php echo base_url() ?>assets/demos/music/tracks/i-need-you-now.mp3" data-poster="<?php echo base_url() ?>assets/demos/music/tracks/poster-images/i-need-you-now.jpg" data-title="I Need You Now" data-singer="Skelton"><i class="icon-play"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="oc-item" data-animate="fadeInDown">
								<img src="<?php echo base_url() ?>assets/demos/music/images/popular-songs/2.jpg" alt="Image 1">
								<div class="bg-overlay">
									<div class="bg-overlay-content text-overlay-mask dark desc-sm align-items-center justify-content-between">
										<div class="portfolio-desc py-0">
											<h3><a href="#">Tammy Stan Devereaux</a></h3>
											<span><a href="#">Devereaux</a></span>
										</div>
										<div data-hover-animate="fadeIn" data-hover-speed="400">
											<a href="#" class="text-light mx-0 track-list" data-track="<?php echo base_url() ?>assets/demos/music/tracks/tammy-stan-devereaux.mp3" data-poster="<?php echo base_url() ?>assets/demos/music/tracks/poster-images/tammy-stan-devereaux.jpg" data-title="Tammy Stan Devereaux" data-singer="Devereaux"><i class="icon-play"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="oc-item" data-animate="fadeInDown">
								<img src="<?php echo base_url() ?>assets/demos/music/images/popular-songs/5.jpg" alt="Image 1">
								<div class="bg-overlay">
									<div class="bg-overlay-content text-overlay-mask dark desc-sm align-items-center justify-content-between">
										<div class="portfolio-desc py-0">
											<h3><a href="#">Something About Love</a></h3>
											<span><a href="#">Sian</a></span>
										</div>
										<div data-hover-animate="fadeIn" data-hover-speed="400">
											<a href="#" class="text-light mx-0 track-list" data-track="<?php echo base_url() ?>assets/demos/music/tracks/something-about-love.mp3" data-poster="<?php echo base_url() ?>assets/demos/music/tracks/poster-images/something-about-love.jpg" data-title="Something About Love" data-singer="Sian"><i class="icon-play"></i></a>
										</div>
									</div>
								</div>
							</div>

						</div>

						<div class="row topmargin-lg clearfix">
							<div class="col-lg-6">
								<div class="heading-block border-0 dark" style="margin-bottom: 15px;">
									<h3>Hot Tracks</h3>
									<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
								</div>

							<!-- Song Lists Items
								============================================= -->
								<div class="songs-lists-wrap">

								<!-- List Items
									============================================= -->

									<?php 
									$i=1;
									foreach($data as $item): ?>
									<div class="songs-list">
										<div class="songs-number"><?php echo $i?></div>
										<div class="songs-image track-image">
											<a href="#" class="track-list"  data-track="<?php echo base_url() ?>assets/demos/music/tracks/<?php echo $item['track_name'] ?>" data-poster="<?php echo base_url() ?>assets/demos/music/tracks/poster-images/<?php echo $item['poster'] ?>" data-title="<?php echo $item['title'] ?>" data-singer="<?php echo $item['artist'] ?>">
												<img src="<?php echo base_url() ?>assets/demos/music/tracks/poster-images/<?php echo $item['poster'] ?>" alt="Image 1"><span><i class="icon-play"></i></span>
											</a>
										</div>
										<div class="songs-name track-name"><a href="#"><?php echo $item['title'] ?><br><span><?php echo $item['artist'] ?></span></a></div>
										<div class="songs-time">03:28</div>
										<div class="songs-button"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-line-ellipsis"></i></a>
											<ul class="dropdown-menu dropdown-menu-right">
												<li>
													<a class="dropdown-item" href="#"><span class="icon-line-plus"></span> Add to Queue</a>
													<a class="dropdown-item" href="#"><span class="icon-music"></span> Add to Playlist</a>
													<a class="dropdown-item" href="#"><span class="icon-line-cloud-download"></span> Download Offline</a>
													<a class="dropdown-item" href="#"><span class="icon-line-heart"></span> Love</a>
													<div class="dropdown-divider"></div>
													<a class="dropdown-item" href="#"><span class="icon-line-share"></span> Share</a>
												</li>
											</ul>
										</div>
									</div>
									<?php 
									$i++;
								endforeach; ?>

								<!-- List Items
									============================================= -->
									<!-- <div class="songs-list">
										<div class="songs-number">02</div>
										<div class="songs-image track-image">
											<a href="#" class="track-list" data-track="<?php echo base_url() ?>assets/demos/music/tracks/i-need-you-now.mp3" data-poster="<?php echo base_url() ?>assets/demos/music/tracks/poster-images/i-need-you-now.jpg" data-title="I Need You Now" data-singer="Skelton">
												<img src="<?php echo base_url() ?>assets/demos/music/tracks/poster-images/i-need-you-now.jpg" alt="Image 1"><span><i class="icon-play"></i></span></a>
											</div>
											<div class="songs-name track-name"><a href="#">I Need You Now<br><span>Skelton</span></a></div>
											<div class="songs-time">03:33</div>
											<div class="songs-button"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-line-ellipsis"></i></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li>
														<a class="dropdown-item" href="#"><span class="icon-line-plus"></span> Add to Queue</a>
														<a class="dropdown-item" href="#"><span class="icon-music"></span> Add to Playlist</a>
														<a class="dropdown-item" href="#"><span class="icon-line-cloud-download"></span> Download Offline</a>
														<a class="dropdown-item" href="#"><span class="icon-line-heart"></span> Love</a>
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" href="#"><span class="icon-line-share"></span> Share</a>
													</li>
												</ul>
											</div>
										</div> -->

								<!-- List Items
									============================================= -->
									<!-- <div class="songs-list">
										<div class="songs-number">03</div>
										<div class="songs-image track-image">
											<a href="#" class="track-list" data-track="<?php echo base_url() ?>assets/demos/music/tracks/something-about-love.mp3" data-poster="<?php echo base_url() ?>assets/demos/music/tracks/poster-images/something-about-love.jpg" data-title="Something About Love" data-singer="Sian">
												<img src="<?php echo base_url() ?>assets/demos/music/tracks/poster-images/something-about-love.jpg" alt="Image 1"><span><i class="icon-play"></i></span></a>
											</div>
											<div class="songs-name track-name"><a href="#">Something About Love<br><span>Sian</span></a></div>
											<div class="songs-time">03:43</div>
											<div class="songs-button"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-line-ellipsis"></i></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li>
														<a class="dropdown-item" href="#"><span class="icon-line-plus"></span> Add to Queue</a>
														<a class="dropdown-item" href="#"><span class="icon-music"></span> Add to Playlist</a>
														<a class="dropdown-item" href="#"><span class="icon-line-cloud-download"></span> Download Offline</a>
														<a class="dropdown-item" href="#"><span class="icon-line-heart"></span> Love</a>
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" href="#"><span class="icon-line-share"></span> Share</a>
													</li>
												</ul>
											</div>
										</div> -->

								<!-- List Items
									============================================= -->
									<!-- <div class="songs-list">
										<div class="songs-number">04</div>
										<div class="songs-image track-image">
											<a href="#" class="track-list" data-track="<?php echo base_url() ?>assets/demos/music/tracks/maq-amor.mp3" data-poster="<?php echo base_url() ?>assets/demos/music/tracks/poster-images/maq-amor.jpg" data-title="Maq Amor" data-singer="The Universe">
												<img src="<?php echo base_url() ?>assets/demos/music/tracks/poster-images/maq-amor.jpg" alt="Image 1"><span><i class="icon-play"></i></span></a>
											</div>
											<div class="songs-name track-name"><a href="#">Maq Amor<br><span>The Universe</span></a></div>
											<div class="songs-time">04:08</div>
											<div class="songs-button"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-line-ellipsis"></i></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li>
														<a class="dropdown-item" href="#"><span class="icon-line-plus"></span> Add to Queue</a>
														<a class="dropdown-item" href="#"><span class="icon-music"></span> Add to Playlist</a>
														<a class="dropdown-item" href="#"><span class="icon-line-cloud-download"></span> Download Offline</a>
														<a class="dropdown-item" href="#"><span class="icon-line-heart"></span> Love</a>
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" href="#"><span class="icon-line-share"></span> Share</a>
													</li>
												</ul>
											</div>
										</div> -->

								<!-- List Items
									============================================= -->
									<!-- <div class="songs-list">
										<div class="songs-number">05</div>
										<div class="songs-image track-image">
											<a href="#" class="track-list" data-track="<?php echo base_url() ?>assets/demos/music/tracks/searchin-lost-european.mp3" data-poster="<?php echo base_url() ?>assets/demos/music/tracks/poster-images/searchin-lost-european.jpg" data-title="Searchin Lost European" data-singer="Lost European">
												<img src="<?php echo base_url() ?>assets/demos/music/tracks/poster-images/searchin-lost-european.jpg" alt="Image 1"><span><i class="icon-play"></i></span></a>
											</div>
											<div class="songs-name track-name"><a href="#">Searchin Lost European<br><span>Lost European</span></a></div>
											<div class="songs-time">02:54</div>
											<div class="songs-button"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-line-ellipsis"></i></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li>
														<a class="dropdown-item" href="#"><span class="icon-line-plus"></span> Add to Queue</a>
														<a class="dropdown-item" href="#"><span class="icon-music"></span> Add to Playlist</a>
														<a class="dropdown-item" href="#"><span class="icon-line-cloud-download"></span> Download Offline</a>
														<a class="dropdown-item" href="#"><span class="icon-line-heart"></span> Love</a>
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" href="#"><span class="icon-line-share"></span> Share</a>
													</li>
												</ul>
											</div>
										</div> -->

								<!-- List Items
									============================================= -->
									<!-- <div class="songs-list">
										<div class="songs-number">06</div>
										<div class="songs-image track-image">
											<a href="#" class="track-list" data-track="<?php echo base_url() ?>assets/demos/music/tracks/fallin-extended-mix.mp3" data-poster="<?php echo base_url() ?>assets/demos/music/tracks/poster-images/fallin-extended-mix.jpg" data-title="Fallin Extended Mix" data-singer="Justin">
												<img src="<?php echo base_url() ?>assets/demos/music/tracks/poster-images/fallin-extended-mix.jpg" alt="Image 1"><span><i class="icon-play"></i></span></a>
											</div>
											<div class="songs-name track-name"><a href="#">Fallin Extended Mix<br><span>Justin</span></a></div>
											<div class="songs-time">03:21</div>
											<div class="songs-button"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-line-ellipsis"></i></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li>
														<a class="dropdown-item" href="#"><span class="icon-line-plus"></span> Add to Queue</a>
														<a class="dropdown-item" href="#"><span class="icon-music"></span> Add to Playlist</a>
														<a class="dropdown-item" href="#"><span class="icon-line-cloud-download"></span> Download Offline</a>
														<a class="dropdown-item" href="#"><span class="icon-line-heart"></span> Love</a>
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" href="#"><span class="icon-line-share"></span> Share</a>
													</li>
												</ul>
											</div>
										</div> -->
									</div>
									<a href="#" class="button bg-transparent font-weight-light nott float-right ml-0" style="color: #AAA; padding: 0 16px;">See More..</a>
								</div>

								<div class="w-100 d-block d-md-block d-lg-none topmargin-lg clear"></div>

								<div class="col-lg-6">
									<div class="heading-block border-0 dark" style="margin-bottom: 15px;">
										<h3>Latest Tracks</h3>
										<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
									</div>
									<div class="songs-lists-wrap">

								<!-- List Items
									============================================= -->
									<?php
									$i=1;
									foreach($dataNew as $item): ?>
									<div class="songs-list">
										<div class="songs-number"><?php echo $i?></div>
										<div class="songs-image track-image">
											<a href="#" class="track-list"  data-track="<?php echo base_url() ?>assets/demos/music/tracks/<?php echo $item['track_name'] ?>" data-poster="<?php echo base_url() ?>assets/demos/music/tracks/poster-images/<?php echo $item['poster'] ?>" data-title="<?php echo $item['title'] ?>" data-singer="<?php echo $item['artist'] ?>">
												<img src="<?php echo base_url() ?>assets/demos/music/tracks/poster-images/<?php echo $item['poster'] ?>" alt="Image 1"><span><i class="icon-play"></i></span>
											</a>
										</div>
										<div class="songs-name track-name"><a href="#"><?php echo $item['title'] ?><br><span><?php echo $item['artist'] ?></span></a></div>
										<div class="songs-time">03:28</div>
										<div class="songs-button"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-line-ellipsis"></i></a>
											<ul class="dropdown-menu dropdown-menu-right">
												<li>
													<a class="dropdown-item" href="#"><span class="icon-line-plus"></span> Add to Queue</a>
													<a class="dropdown-item" href="#"><span class="icon-music"></span> Add to Playlist</a>
													<a class="dropdown-item" href="#"><span class="icon-line-cloud-download"></span> Download Offline</a>
													<a class="dropdown-item" href="#"><span class="icon-line-heart"></span> Love</a>
													<div class="dropdown-divider"></div>
													<a class="dropdown-item" href="#"><span class="icon-line-share"></span> Share</a>
												</li>
											</ul>
										</div>
									</div>
									<?php 
									$i++;
								endforeach; ?>

								<!-- List Items
									============================================= -->
									<!-- <div class="songs-list">
										<div class="songs-number">02</div>
										<div class="songs-image track-image">
											<a href="#" class="track-list" data-track="<?php echo base_url() ?>assets/demos/music/tracks/fallin-extended-mix.mp3" data-poster="<?php echo base_url() ?>assets/demos/music/tracks/poster-images/fallin-extended-mix.jpg" data-title="Fallin Extended Mix" data-singer="Justin">
												<img src="<?php echo base_url() ?>assets/demos/music/tracks/poster-images/fallin-extended-mix.jpg" alt="Image 1"><span><i class="icon-play"></i></span></a>
											</div>
											<div class="songs-name track-name"><a href="#">Fallin Extended Mix<br><span>Justin</span></a></div>
											<div class="songs-time">03:21</div>
											<div class="songs-button"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-line-ellipsis"></i></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li>
														<a class="dropdown-item" href="#"><span class="icon-line-plus"></span> Add to Queue</a>
														<a class="dropdown-item" href="#"><span class="icon-music"></span> Add to Playlist</a>
														<a class="dropdown-item" href="#"><span class="icon-line-cloud-download"></span> Download Offline</a>
														<a class="dropdown-item" href="#"><span class="icon-line-heart"></span> Love</a>
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" href="#"><span class="icon-line-share"></span> Share</a>
													</li>
												</ul>
											</div>
										</div> -->

								<!-- List Items
									============================================= -->
									<!-- <div class="songs-list">
										<div class="songs-number">03</div>
										<div class="songs-image track-image">
											<a href="#" class="track-list" data-track="<?php echo base_url() ?>assets/demos/music/tracks/maq-amor.mp3" data-poster="<?php echo base_url() ?>assets/demos/music/tracks/poster-images/maq-amor.jpg" data-title="Maq Amor" data-singer="The Universe">
												<img src="<?php echo base_url() ?>assets/demos/music/tracks/poster-images/maq-amor.jpg" alt="Image 1"><span><i class="icon-play"></i></span></a>
											</div>
											<div class="songs-name track-name"><a href="#">Maq Amor<br><span>The Universe</span></a></div>
											<div class="songs-time">04:08</div>
											<div class="songs-button"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-line-ellipsis"></i></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li>
														<a class="dropdown-item" href="#"><span class="icon-line-plus"></span> Add to Queue</a>
														<a class="dropdown-item" href="#"><span class="icon-music"></span> Add to Playlist</a>
														<a class="dropdown-item" href="#"><span class="icon-line-cloud-download"></span> Download Offline</a>
														<a class="dropdown-item" href="#"><span class="icon-line-heart"></span> Love</a>
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" href="#"><span class="icon-line-share"></span> Share</a>
													</li>
												</ul>
											</div>
										</div> -->

								<!-- List Items
									============================================= -->
									<!-- <div class="songs-list">
										<div class="songs-number">04</div>
										<div class="songs-image track-image">
											<a href="#" class="track-list" data-track="<?php echo base_url() ?>assets/demos/music/tracks/i-need-you-now.mp3" data-poster="<?php echo base_url() ?>assets/demos/music/tracks/poster-images/i-need-you-now.jpg" data-title="I Need You Now" data-singer="Skelton">
												<img src="<?php echo base_url() ?>assets/demos/music/tracks/poster-images/i-need-you-now.jpg" alt="Image 1"><span><i class="icon-play"></i></span></a>
											</div>
											<div class="songs-name track-name"><a href="#">I Need You Now<br><span>Skelton</span></a></div>
											<div class="songs-time">03:33</div>
											<div class="songs-button"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-line-ellipsis"></i></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li>
														<a class="dropdown-item" href="#"><span class="icon-line-plus"></span> Add to Queue</a>
														<a class="dropdown-item" href="#"><span class="icon-music"></span> Add to Playlist</a>
														<a class="dropdown-item" href="#"><span class="icon-line-cloud-download"></span> Download Offline</a>
														<a class="dropdown-item" href="#"><span class="icon-line-heart"></span> Love</a>
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" href="#"><span class="icon-line-share"></span> Share</a>
													</li>
												</ul>
											</div>
										</div> -->

									<!-- List Items
									============================================= -->
									<!-- <div class="songs-list">
										<div class="songs-number">05</div>
										<div class="songs-image track-image">
											<a href="#" class="track-list" data-track="<?php echo base_url() ?>assets/demos/music/tracks/something-about-love.mp3" data-poster="<?php echo base_url() ?>assets/demos/music/tracks/poster-images/something-about-love.jpg" data-title="Something About Love" data-singer="Sian">
												<img src="<?php echo base_url() ?>assets/demos/music/tracks/poster-images/something-about-love.jpg" alt="Image 1"><span><i class="icon-play"></i></span></a>
											</div>
											<div class="songs-name track-name"><a href="#">Something About Love<br><span>Sian</span></a></div>
											<div class="songs-time">03:43</div>
											<div class="songs-button"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-line-ellipsis"></i></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li>
														<a class="dropdown-item" href="#"><span class="icon-line-plus"></span> Add to Queue</a>
														<a class="dropdown-item" href="#"><span class="icon-music"></span> Add to Playlist</a>
														<a class="dropdown-item" href="#"><span class="icon-line-cloud-download"></span> Download Offline</a>
														<a class="dropdown-item" href="#"><span class="icon-line-heart"></span> Love</a>
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" href="#"><span class="icon-line-share"></span> Share</a>
													</li>
												</ul>
											</div>
										</div> -->

									<!-- List Items
									============================================= -->
									<!-- <div class="songs-list">
										<div class="songs-number">06</div>
										<div class="songs-image track-image">
											<a href="#" class="track-list"  data-track="<?php echo base_url() ?>assets/demos/music/tracks/ibelieveinyou.mp3" data-poster="<?php echo base_url() ?>assets/demos/music/tracks/poster-images/ibelieveinyou.jpg" data-title="i Believe In You" data-singer="Lost European">
												<img src="<?php echo base_url() ?>assets/demos/music/tracks/poster-images/ibelieveinyou.jpg" alt="Image 1"><span><i class="icon-play"></i></span>
											</a>
										</div>
										<div class="songs-name track-name"><a href="#">i Believe In You<br><span>Lost European</span></a></div>
										<div class="songs-time">03:28</div>
										<div class="songs-button"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-line-ellipsis"></i></a>
											<ul class="dropdown-menu dropdown-menu-right">
												<li>
													<a class="dropdown-item" href="#"><span class="icon-line-plus"></span> Add to Queue</a>
													<a class="dropdown-item" href="#"><span class="icon-music"></span> Add to Playlist</a>
													<a class="dropdown-item" href="#"><span class="icon-line-cloud-download"></span> Download Offline</a>
													<a class="dropdown-item" href="#"><span class="icon-line-heart"></span> Love</a>
													<div class="dropdown-divider"></div>
													<a class="dropdown-item" href="#"><span class="icon-line-share"></span> Share</a>
												</li>
											</ul>
										</div>
									</div> -->
								</div>

								<a href="#" class="button bg-transparent font-weight-light nott float-right ml-0" style="color: #AAA; padding: 0 16px;">See More..</a>
							</div>
						</div>

					<!-- Tabs
						============================================= -->
						<div class="tabs tabs-bb tabs-music-demo tabs-responsive dark topmargin-lg clearfix" id="album-tab" data-accordion-style="accordion-bg">

							<ul class="tab-nav border-bottom-0 clearfix">
								<li><a href="#tabs-1">Featured</a></li>
								<li><a href="#tabs-2">Recommended</a></li>
								<li><a href="#tabs-3">Popular</a></li>
								<li><a href="#tabs-4">Latest</a></li>
							</ul>

						<!-- Tabs Container
							============================================= -->
							<div class="tab-container music-tabs-albums">

							<!-- Tab Content 1
								============================================= -->
								<div class="tab-content clearfix" id="tabs-1">
									<div class="row gutter-20 align-items-stretch">

										<div class="col-md-6 min-vh-40">
											<div class="grid-inner h-100" style="background-image: url('<?php echo base_url() ?>assets/demos/music/images/album-artworks/1/1.jpg');">
												<div class="bg-overlay">
													<div class="bg-overlay-content text-overlay-mask dark align-items-start justify-content-between">
														<div>
															<div class="portfolio-desc">
																<span class="font-primary text-uppercase">Justin Bieber</span>
																<h3><a href="#" class="font-secondary">Collections of My Worlds</a></h3>
															</div>
															<div>
																<a href="#" class="button button-circle button-small font-weight-normal ls1 ml-0 track-list" data-track="<?php echo base_url() ?>assets/demos/music/tracks/fallin-extended-mix.mp3" data-poster="<?php echo base_url() ?>assets/demos/music/tracks/poster-images/fallin-extended-mix.jpg" data-title="Fallin Extended Mix" data-singer="Justin"><i class="icon-play"></i>Play Now</a>
																<a href="#" class="button button-circle button-small button-border button-white font-weight-normal ls1">View All</a>
															</div>
														</div>
													</div>
													<div class="bg-overlay-floating" data-hover-animate="fadeIn">
														<a href="#"><i class="icon-line-heart"></i></a>
														<a href="#" data-toggle="dropdown"><i class="icon-line-ellipsis"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#"><span class="icon-line-plus"></span> Add to Queue</a>
															<a class="dropdown-item" href="#"><span class="icon-music"></span> Add to Playlist</a>
															<a class="dropdown-item" href="#"><span class="icon-line-cloud-download"></span> Download Offline</a>
															<a class="dropdown-item" href="#"><span class="icon-line-heart"></span> Love</a>
															<div class="dropdown-divider"></div>
															<a class="dropdown-item" href="#"><span class="icon-line-share"></span> Share</a>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="col-md-6 px-0">
											<div class="row mx-0 gutter-20">
												<div class="col-6">
													<div class="grid-inner">
														<img src="<?php echo base_url() ?>assets/demos/music/images/album-artworks/1/2.jpg" alt="Locked Steel Gate">
														<div class="bg-overlay">
															<div class="bg-overlay-content text-overlay-mask dark align-items-start justify-content-between">
																<div class="portfolio-desc py-0">
																	<span class="font-primary text-uppercase">Nicki Minaj</span>
																	<h3><a href="#" class="font-secondary">Pills n Positions</a></h3>
																</div>
															</div>
															<div class="bg-overlay-floating" data-hover-animate="fadeIn">
																<a href="#"><i class="icon-line-heart"></i></a>
																<a href="#"><i class="icon-line-ellipsis"></i></a>
															</div>
														</div>
													</div>
												</div>

												<div class="col-6">
													<div class="grid-inner">
														<img src="<?php echo base_url() ?>assets/demos/music/images/album-artworks/1/3.jpg" alt="Mac Sunglasses">
														<div class="bg-overlay">
															<div class="bg-overlay-content text-overlay-mask dark align-items-start justify-content-between">
																<div class="portfolio-desc py-0">
																	<span class="font-primary text-uppercase">Rihanna</span>
																	<h3><a href="#" class="font-secondary">Latest Collections of Rihanna</a></h3>
																</div>
															</div>
															<div class="bg-overlay-floating" data-hover-animate="fadeIn">
																<a href="#"><i class="icon-line-heart"></i></a>
																<a href="#"><i class="icon-line-ellipsis"></i></a>
															</div>
														</div>
													</div>
												</div>

												<div class="col-12">
													<div class="grid-inner">
														<img src="<?php echo base_url() ?>assets/demos/music/images/album-artworks/1/4.jpg" alt="Image">
														<div class="bg-overlay">
															<div class="bg-overlay-content text-overlay-mask dark align-items-start justify-content-between">
																<div>
																	<div class="portfolio-desc">
																		<span class="font-primary text-uppercase">David Guetta</span>
																		<h3><a href="#" class="font-secondary">Collections of David Guetta</a></h3>
																	</div>
																	<div>
																		<a href="#" class="button button-circle button-small font-weight-normal ls1 ml-0 track-list" data-track="<?php echo base_url() ?>assets/demos/music/tracks/fallin-extended-mix.mp3" data-poster="<?php echo base_url() ?>assets/demos/music/tracks/poster-images/fallin-extended-mix.jpg" data-title="Fallin Extended Mix" data-singer="Justin"><i class="icon-play"></i>Play Now</a>
																		<a href="#" class="button button-circle button-small button-border button-white font-weight-normal ls1">View All</a>
																	</div>
																</div>
															</div>
															<div class="bg-overlay-floating" data-hover-animate="fadeIn">
																<a href="#"><i class="icon-line-heart"></i></a>
																<a href="#"><i class="icon-line-ellipsis"></i></a>
															</div>
														</div>
													</div>
												</div>

											</div>
										</div>

									</div>
								</div>

							<!-- Tab Content 2
								============================================= -->
								<div class="tab-content" id="tabs-2">
									<div class="row gutter-20 align-items-stretch">

										<div class="col-md-6 min-vh-40">
											<div class="grid-inner h-100" style="background-image: url('<?php echo base_url() ?>assets/demos/music/images/album-artworks/2/1.jpg');">
												<div class="bg-overlay">
													<div class="bg-overlay-content text-overlay-mask dark desc-sm align-items-start justify-content-between">
														<div>
															<div class="portfolio-desc">
																<span class="font-primary text-uppercase">Katy Perry</span>
																<h3><a href="#" class="font-secondary">Collections of Katy Perry</a></h3>
															</div>
															<div>
																<a href="#" class="button button-circle button-small font-weight-normal ls1 ml-0 track-list" data-track="<?php echo base_url() ?>assets/demos/music/tracks/fallin-extended-mix.mp3" data-poster="<?php echo base_url() ?>assets/demos/music/tracks/poster-images/fallin-extended-mix.jpg" data-title="Fallin Extended Mix" data-singer="Justin"><i class="icon-play"></i>Play Now</a>
																<a href="#" class="button button-circle button-small button-border button-white font-weight-normal ls1">View All</a>
															</div>
														</div>
													</div>
													<div class="bg-overlay-floating" data-hover-animate="fadeIn">
														<a href="#"><i class="icon-line-heart"></i></a>
														<a href="#" data-toggle="dropdown"><i class="icon-line-ellipsis"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#"><span class="icon-line-plus"></span> Add to Queue</a>
															<a class="dropdown-item" href="#"><span class="icon-music"></span> Add to Playlist</a>
															<a class="dropdown-item" href="#"><span class="icon-line-cloud-download"></span> Download Offline</a>
															<a class="dropdown-item" href="#"><span class="icon-line-heart"></span> Love</a>
															<div class="dropdown-divider"></div>
															<a class="dropdown-item" href="#"><span class="icon-line-share"></span> Share</a>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="col-md-6 px-0">
											<div class="row mx-0 gutter-20">
												<div class="col-6">
													<div class="grid-inner">
														<img src="<?php echo base_url() ?>assets/demos/music/images/album-artworks/2/2.jpg" alt="Locked Steel Gate">
														<div class="bg-overlay">
															<div class="bg-overlay-content text-overlay-mask dark align-items-start justify-content-between">
																<div class="portfolio-desc">
																	<span class="font-primary text-uppercase">Bruno Mars</span>
																	<h3><a href="#" class="font-secondary">Just The Way You Are</a></h3>
																</div>
															</div>
															<div class="bg-overlay-floating" data-hover-animate="fadeIn">
																<a href="#"><i class="icon-line-heart"></i></a>
																<a href="#" data-toggle="dropdown"><i class="icon-line-ellipsis"></i></a>
																<div class="dropdown-menu dropdown-menu-right">
																	<a class="dropdown-item" href="#"><span class="icon-line-plus"></span> Add to Queue</a>
																	<a class="dropdown-item" href="#"><span class="icon-music"></span> Add to Playlist</a>
																	<a class="dropdown-item" href="#"><span class="icon-line-cloud-download"></span> Download Offline</a>
																	<a class="dropdown-item" href="#"><span class="icon-line-heart"></span> Love</a>
																	<div class="dropdown-divider"></div>
																	<a class="dropdown-item" href="#"><span class="icon-line-share"></span> Share</a>
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="col-6">
													<div class="grid-inner">
														<img src="<?php echo base_url() ?>assets/demos/music/images/album-artworks/2/3.jpg" alt="Mac Sunglasses">
														<div class="bg-overlay">
															<div class="bg-overlay-content text-overlay-mask dark align-items-start justify-content-between">
																<div class="portfolio-desc">
																	<span class="font-primary text-uppercase">Jennifer Lopez</span>
																	<h3><a href="#" class="font-secondary">Ain’t Your Mama</a></h3>
																</div>
															</div>
															<div class="bg-overlay-floating" data-hover-animate="fadeIn">
																<a href="#"><i class="icon-line-heart"></i></a>
																<a href="#" data-toggle="dropdown"><i class="icon-line-ellipsis"></i></a>
																<div class="dropdown-menu dropdown-menu-right">
																	<a class="dropdown-item" href="#"><span class="icon-line-plus"></span> Add to Queue</a>
																	<a class="dropdown-item" href="#"><span class="icon-music"></span> Add to Playlist</a>
																	<a class="dropdown-item" href="#"><span class="icon-line-cloud-download"></span> Download Offline</a>
																	<a class="dropdown-item" href="#"><span class="icon-line-heart"></span> Love</a>
																	<div class="dropdown-divider"></div>
																	<a class="dropdown-item" href="#"><span class="icon-line-share"></span> Share</a>
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="col-12">
													<div class="grid-inner">
														<img src="<?php echo base_url() ?>assets/demos/music/images/album-artworks/2/4.jpg" alt="Image">
														<div class="bg-overlay">
															<div class="bg-overlay-content text-overlay-mask dark align-items-start justify-content-between">
																<div>
																	<div class="portfolio-desc">
																		<span class="font-primary text-uppercase">Taylor Swift</span>
																		<h3><a href="#" class="font-secondary">Shake It Off</a></h3>
																	</div>
																	<div>
																		<a href="#" class="button button-circle button-small font-weight-normal ls1 ml-0 track-list" data-track="<?php echo base_url() ?>assets/demos/music/tracks/fallin-extended-mix.mp3" data-poster="<?php echo base_url() ?>assets/demos/music/tracks/poster-images/fallin-extended-mix.jpg" data-title="Fallin Extended Mix" data-singer="Justin"><i class="icon-play"></i>Play Now</a>
																		<a href="#" class="button button-circle button-small button-border button-white font-weight-normal ls1">View All</a>
																	</div>
																</div>
															</div>
															<div class="bg-overlay-floating" data-hover-animate="fadeIn">
																<a href="#"><i class="icon-line-heart"></i></a>
																<a href="#" data-toggle="dropdown"><i class="icon-line-ellipsis"></i></a>
																<div class="dropdown-menu dropdown-menu-right">
																	<a class="dropdown-item" href="#"><span class="icon-line-plus"></span> Add to Queue</a>
																	<a class="dropdown-item" href="#"><span class="icon-music"></span> Add to Playlist</a>
																	<a class="dropdown-item" href="#"><span class="icon-line-cloud-download"></span> Download Offline</a>
																	<a class="dropdown-item" href="#"><span class="icon-line-heart"></span> Love</a>
																	<div class="dropdown-divider"></div>
																	<a class="dropdown-item" href="#"><span class="icon-line-share"></span> Share</a>
																</div>
															</div>
														</div>
													</div>
												</div>

											</div>
										</div>

									</div>
								</div>

							<!-- Tab Content 3
								============================================= -->
								<div class="tab-content" id="tabs-3">
									<div class="row gutter-20 align-items-stretch">

										<div class="col-md-6 min-vh-40">
											<div class="grid-inner h-100" style="background-image: url('<?php echo base_url() ?>assets/demos/music/images/album-artworks/1/1.jpg');">
												<div class="bg-overlay">
													<div class="bg-overlay-content text-overlay-mask dark align-items-start justify-content-between">
														<div>
															<div class="portfolio-desc">
																<span class="font-primary text-uppercase">Justin Bieber</span>
																<h3><a href="#" class="font-secondary">Collections of My Worlds</a></h3>
															</div>
															<div>
																<a href="#" class="button button-circle button-small font-weight-normal ls1 ml-0 track-list" data-track="<?php echo base_url() ?>assets/demos/music/tracks/fallin-extended-mix.mp3" data-poster="<?php echo base_url() ?>assets/demos/music/tracks/poster-images/fallin-extended-mix.jpg" data-title="Fallin Extended Mix" data-singer="Justin"><i class="icon-play"></i>Play Now</a>
																<a href="#" class="button button-circle button-small button-border button-white font-weight-normal ls1">View All</a>
															</div>
														</div>
													</div>
													<div class="bg-overlay-floating" data-hover-animate="fadeIn">
														<a href="#"><i class="icon-line-heart"></i></a>
														<a href="#" data-toggle="dropdown"><i class="icon-line-ellipsis"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#"><span class="icon-line-plus"></span> Add to Queue</a>
															<a class="dropdown-item" href="#"><span class="icon-music"></span> Add to Playlist</a>
															<a class="dropdown-item" href="#"><span class="icon-line-cloud-download"></span> Download Offline</a>
															<a class="dropdown-item" href="#"><span class="icon-line-heart"></span> Love</a>
															<div class="dropdown-divider"></div>
															<a class="dropdown-item" href="#"><span class="icon-line-share"></span> Share</a>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="col-md-6 px-0">
											<div class="row mx-0 gutter-20">
												<div class="col-6">
													<div class="grid-inner">
														<img src="<?php echo base_url() ?>assets/demos/music/images/album-artworks/1/2.jpg" alt="Locked Steel Gate">
														<div class="bg-overlay">
															<div class="bg-overlay-content text-overlay-mask dark align-items-start justify-content-between">
																<div class="portfolio-desc py-0">
																	<span class="font-primary text-uppercase">Nicki Minaj</span>
																	<h3><a href="#" class="font-secondary">Pills n Positions</a></h3>
																</div>
															</div>
															<div class="bg-overlay-floating" data-hover-animate="fadeIn">
																<a href="#"><i class="icon-line-heart"></i></a>
																<a href="#"><i class="icon-line-ellipsis"></i></a>
															</div>
														</div>
													</div>
												</div>

												<div class="col-6">
													<div class="grid-inner">
														<img src="<?php echo base_url() ?>assets/demos/music/images/album-artworks/1/3.jpg" alt="Mac Sunglasses">
														<div class="bg-overlay">
															<div class="bg-overlay-content text-overlay-mask dark align-items-start justify-content-between">
																<div class="portfolio-desc py-0">
																	<span class="font-primary text-uppercase">Rihanna</span>
																	<h3><a href="#" class="font-secondary">Latest Collections of Rihanna</a></h3>
																</div>
															</div>
															<div class="bg-overlay-floating" data-hover-animate="fadeIn">
																<a href="#"><i class="icon-line-heart"></i></a>
																<a href="#"><i class="icon-line-ellipsis"></i></a>
															</div>
														</div>
													</div>
												</div>

												<div class="col-12">
													<div class="grid-inner">
														<img src="<?php echo base_url() ?>assets/demos/music/images/album-artworks/1/4.jpg" alt="Image">
														<div class="bg-overlay">
															<div class="bg-overlay-content text-overlay-mask dark align-items-start justify-content-between">
																<div>
																	<div class="portfolio-desc">
																		<span class="font-primary text-uppercase">David Guetta</span>
																		<h3><a href="#" class="font-secondary">Collections of David Guetta</a></h3>
																	</div>
																	<div>
																		<a href="#" class="button button-circle button-small font-weight-normal ls1 ml-0 track-list" data-track="<?php echo base_url() ?>assets/demos/music/tracks/fallin-extended-mix.mp3" data-poster="<?php echo base_url() ?>assets/demos/music/tracks/poster-images/fallin-extended-mix.jpg" data-title="Fallin Extended Mix" data-singer="Justin"><i class="icon-play"></i>Play Now</a>
																		<a href="#" class="button button-circle button-small button-border button-white font-weight-normal ls1">View All</a>
																	</div>
																</div>
															</div>
															<div class="bg-overlay-floating" data-hover-animate="fadeIn">
																<a href="#"><i class="icon-line-heart"></i></a>
																<a href="#"><i class="icon-line-ellipsis"></i></a>
															</div>
														</div>
													</div>
												</div>

											</div>
										</div>

									</div>
								</div>

							<!-- Tab Content 4
								============================================= -->
								<div class="tab-content" id="tabs-4">
									<div class="row gutter-20 align-items-stretch">

										<div class="col-md-6 min-vh-40">
											<div class="grid-inner h-100" style="background-image: url('<?php echo base_url() ?>assets/demos/music/images/album-artworks/2/1.jpg');">
												<div class="bg-overlay">
													<div class="bg-overlay-content text-overlay-mask dark desc-sm align-items-start justify-content-between">
														<div>
															<div class="portfolio-desc">
																<span class="font-primary text-uppercase">Katy Perry</span>
																<h3><a href="#" class="font-secondary">Collections of Katy Perry</a></h3>
															</div>
															<div>
																<a href="#" class="button button-circle button-small font-weight-normal ls1 ml-0 track-list" data-track="<?php echo base_url() ?>assets/demos/music/tracks/fallin-extended-mix.mp3" data-poster="<?php echo base_url() ?>assets/demos/music/tracks/poster-images/fallin-extended-mix.jpg" data-title="Fallin Extended Mix" data-singer="Justin"><i class="icon-play"></i>Play Now</a>
																<a href="#" class="button button-circle button-small button-border button-white font-weight-normal ls1">View All</a>
															</div>
														</div>
													</div>
													<div class="bg-overlay-floating" data-hover-animate="fadeIn">
														<a href="#"><i class="icon-line-heart"></i></a>
														<a href="#" data-toggle="dropdown"><i class="icon-line-ellipsis"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#"><span class="icon-line-plus"></span> Add to Queue</a>
															<a class="dropdown-item" href="#"><span class="icon-music"></span> Add to Playlist</a>
															<a class="dropdown-item" href="#"><span class="icon-line-cloud-download"></span> Download Offline</a>
															<a class="dropdown-item" href="#"><span class="icon-line-heart"></span> Love</a>
															<div class="dropdown-divider"></div>
															<a class="dropdown-item" href="#"><span class="icon-line-share"></span> Share</a>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="col-md-6 px-0">
											<div class="row mx-0 gutter-20">
												<div class="col-6">
													<div class="grid-inner">
														<img src="<?php echo base_url() ?>assets/demos/music/images/album-artworks/2/2.jpg" alt="Locked Steel Gate">
														<div class="bg-overlay">
															<div class="bg-overlay-content text-overlay-mask dark align-items-start justify-content-between">
																<div class="portfolio-desc">
																	<span class="font-primary text-uppercase">Bruno Mars</span>
																	<h3><a href="#" class="font-secondary">Just The Way You Are</a></h3>
																</div>
															</div>
															<div class="bg-overlay-floating" data-hover-animate="fadeIn">
																<a href="#"><i class="icon-line-heart"></i></a>
																<a href="#" data-toggle="dropdown"><i class="icon-line-ellipsis"></i></a>
																<div class="dropdown-menu dropdown-menu-right">
																	<a class="dropdown-item" href="#"><span class="icon-line-plus"></span> Add to Queue</a>
																	<a class="dropdown-item" href="#"><span class="icon-music"></span> Add to Playlist</a>
																	<a class="dropdown-item" href="#"><span class="icon-line-cloud-download"></span> Download Offline</a>
																	<a class="dropdown-item" href="#"><span class="icon-line-heart"></span> Love</a>
																	<div class="dropdown-divider"></div>
																	<a class="dropdown-item" href="#"><span class="icon-line-share"></span> Share</a>
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="col-6">
													<div class="grid-inner">
														<img src="<?php echo base_url() ?>assets/demos/music/images/album-artworks/2/3.jpg" alt="Mac Sunglasses">
														<div class="bg-overlay">
															<div class="bg-overlay-content text-overlay-mask dark align-items-start justify-content-between">
																<div class="portfolio-desc">
																	<span class="font-primary text-uppercase">Jennifer Lopez</span>
																	<h3><a href="#" class="font-secondary">Ain’t Your Mama</a></h3>
																</div>
															</div>
															<div class="bg-overlay-floating" data-hover-animate="fadeIn">
																<a href="#"><i class="icon-line-heart"></i></a>
																<a href="#" data-toggle="dropdown"><i class="icon-line-ellipsis"></i></a>
																<div class="dropdown-menu dropdown-menu-right">
																	<a class="dropdown-item" href="#"><span class="icon-line-plus"></span> Add to Queue</a>
																	<a class="dropdown-item" href="#"><span class="icon-music"></span> Add to Playlist</a>
																	<a class="dropdown-item" href="#"><span class="icon-line-cloud-download"></span> Download Offline</a>
																	<a class="dropdown-item" href="#"><span class="icon-line-heart"></span> Love</a>
																	<div class="dropdown-divider"></div>
																	<a class="dropdown-item" href="#"><span class="icon-line-share"></span> Share</a>
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="col-12">
													<div class="grid-inner">
														<img src="<?php echo base_url() ?>assets/demos/music/images/album-artworks/2/4.jpg" alt="Image">
														<div class="bg-overlay">
															<div class="bg-overlay-content text-overlay-mask dark align-items-start justify-content-between">
																<div>
																	<div class="portfolio-desc">
																		<span class="font-primary text-uppercase">Taylor Swift</span>
																		<h3><a href="#" class="font-secondary">Shake It Off</a></h3>
																	</div>
																	<div>
																		<a href="#" class="button button-circle button-small font-weight-normal ls1 ml-0 track-list" data-track="<?php echo base_url() ?>assets/demos/music/tracks/fallin-extended-mix.mp3" data-poster="<?php echo base_url() ?>assets/demos/music/tracks/poster-images/fallin-extended-mix.jpg" data-title="Fallin Extended Mix" data-singer="Justin"><i class="icon-play"></i>Play Now</a>
																		<a href="#" class="button button-circle button-small button-border button-white font-weight-normal ls1">View All</a>
																	</div>
																</div>
															</div>
															<div class="bg-overlay-floating" data-hover-animate="fadeIn">
																<a href="#"><i class="icon-line-heart"></i></a>
																<a href="#" data-toggle="dropdown"><i class="icon-line-ellipsis"></i></a>
																<div class="dropdown-menu dropdown-menu-right">
																	<a class="dropdown-item" href="#"><span class="icon-line-plus"></span> Add to Queue</a>
																	<a class="dropdown-item" href="#"><span class="icon-music"></span> Add to Playlist</a>
																	<a class="dropdown-item" href="#"><span class="icon-line-cloud-download"></span> Download Offline</a>
																	<a class="dropdown-item" href="#"><span class="icon-line-heart"></span> Love</a>
																	<div class="dropdown-divider"></div>
																	<a class="dropdown-item" href="#"><span class="icon-line-share"></span> Share</a>
																</div>
															</div>
														</div>
													</div>
												</div>

											</div>
										</div>

									</div>
								</div>

							</div>
						</div>

					<!-- Top Charts
						============================================= -->
						<div class="heading-block bottommargin-sm topmargin border-0 dark">
							<h3>Top Charts</h3>
							<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
						</div>


						<div id="top-charts" class="portfolio grid-container row dark gutter-20 desc-sm" data-layout="fitRows">

							<article class="portfolio-item col-6 col-md-3 col-lg-2" data-animate="fadeIn">
								<div class="grid-inner">
									<div class="portfolio-image">
										<a href="#">
											<img src="<?php echo base_url() ?>assets/demos/music/images/charts/1.jpg" alt="Image">
										</a>
										<div class="bg-overlay">
											<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
												<a href="#" class="overlay-trigger-icon bg-dark text-ts text-light h-text-color" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-folder"></i></a>
												<a href="#" class="overlay-trigger-icon bg-dark text-ts text-light h-text-color" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-share"></i></a>
											</div>
											<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
										</div>
									</div>
									<div class="portfolio-desc">
										<h3><a href="#">Am I that easy</a></h3>
										<span><a href="#">Jim Reeves</a></span>
									</div>
								</div>
							</article>

							<article class="portfolio-item col-6 col-md-3 col-lg-2" data-animate="fadeIn" data-delay="100">
								<div class="grid-inner">
									<div class="portfolio-image">
										<a href="#">
											<img src="<?php echo base_url() ?>assets/demos/music/images/charts/2.jpg" alt="Image">
										</a>
										<div class="bg-overlay">
											<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
												<a href="#" class="overlay-trigger-icon bg-dark text-ts text-light h-text-color" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-folder"></i></a>
												<a href="#" class="overlay-trigger-icon bg-dark text-ts text-light h-text-color" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-share"></i></a>
											</div>
											<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
										</div>
									</div>
									<div class="portfolio-desc">
										<h3><a href="#">Bachelor boy</a></h3>
										<span><a href="#">Arcade Fire</a></span>
									</div>
								</div>
							</article>

							<article class="portfolio-item col-6 col-md-3 col-lg-2" data-animate="fadeIn" data-delay="200">
								<div class="grid-inner">
									<div class="portfolio-image">
										<a href="#">
											<img src="<?php echo base_url() ?>assets/demos/music/images/charts/3.jpg" alt="Image">
										</a>
										<div class="bg-overlay">
											<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
												<a href="#" class="overlay-trigger-icon bg-dark text-ts text-light h-text-color" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-folder"></i></a>
												<a href="#" class="overlay-trigger-icon bg-dark text-ts text-light h-text-color" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-share"></i></a>
											</div>
											<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
										</div>
									</div>
									<div class="portfolio-desc">
										<h3><a href="#">I don’t like it, I love it </a></h3>
										<span><a href="#">Flo Rida ft. Robin Thicke</a></span>
									</div>
								</div>
							</article>

							<article class="portfolio-item col-6 col-md-3 col-lg-2" data-animate="fadeIn" data-delay="300">
								<div class="grid-inner">
									<div class="portfolio-image">
										<a href="#">
											<img src="<?php echo base_url() ?>assets/demos/music/images/charts/4.jpg" alt="Image">
										</a>
										<div class="bg-overlay">
											<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
												<a href="#" class="overlay-trigger-icon bg-dark text-ts text-light h-text-color" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-folder"></i></a>
												<a href="#" class="overlay-trigger-icon bg-dark text-ts text-light h-text-color" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-share"></i></a>
											</div>
											<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
										</div>
									</div>
									<div class="portfolio-desc">
										<h3><a href="#">Into the night</a></h3>
										<span><a href="#">Benny Mardones</a></span>
									</div>
								</div>
							</article>

							<article class="portfolio-item col-6 col-md-3 col-lg-2" data-animate="fadeIn" data-delay="400">
								<div class="grid-inner">
									<div class="portfolio-image">
										<a href="#">
											<img src="<?php echo base_url() ?>assets/demos/music/images/charts/5.jpg" alt="Image">
										</a>
										<div class="bg-overlay">
											<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
												<a href="#" class="overlay-trigger-icon bg-dark text-ts text-light h-text-color" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-folder"></i></a>
												<a href="#" class="overlay-trigger-icon bg-dark text-ts text-light h-text-color" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-share"></i></a>
											</div>
											<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
										</div>
									</div>
									<div class="portfolio-desc">
										<h3><a href="#">Missing you </a></h3>
										<span><a href="#">John Waite</a></span>
									</div>
								</div>
							</article>

							<article class="portfolio-item col-6 col-md-3 col-lg-2" data-animate="fadeIn" data-delay="500">
								<div class="grid-inner">
									<div class="portfolio-image">
										<a href="#">
											<img src="<?php echo base_url() ?>assets/demos/music/images/charts/6.jpg" alt="Image">
										</a>
										<div class="bg-overlay">
											<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
												<a href="#" class="overlay-trigger-icon bg-dark text-ts text-light h-text-color" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-folder"></i></a>
												<a href="#" class="overlay-trigger-icon bg-dark text-ts text-light h-text-color" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-share"></i></a>
											</div>
											<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
										</div>
									</div>
									<div class="portfolio-desc">
										<h3><a href="#">Only you</a></h3>
										<span><a href="#">Ayo</a></span>
									</div>
								</div>
							</article>

							<article class="portfolio-item col-6 col-md-3 col-lg-2" data-animate="fadeIn" data-delay="50">
								<div class="grid-inner">
									<div class="portfolio-image">
										<a href="#">
											<img src="<?php echo base_url() ?>assets/demos/music/images/charts/7.jpg" alt="Image">
										</a>
										<div class="bg-overlay">
											<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
												<a href="#" class="overlay-trigger-icon bg-dark text-ts text-light h-text-color" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-folder"></i></a>
												<a href="#" class="overlay-trigger-icon bg-dark text-ts text-light h-text-color" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-share"></i></a>
											</div>
											<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
										</div>
									</div>
									<div class="portfolio-desc">
										<h3><a href="#">Over and over again </a></h3>
										<span><a href="#">Nathan Sykes</a></span>
									</div>
								</div>
							</article>

							<article class="portfolio-item col-6 col-md-3 col-lg-2" data-animate="fadeIn" data-delay="150">
								<div class="grid-inner">
									<div class="portfolio-image">
										<a href="#">
											<img src="<?php echo base_url() ?>assets/demos/music/images/charts/8.jpg" alt="Image">
										</a>
										<div class="bg-overlay">
											<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
												<a href="#" class="overlay-trigger-icon bg-dark text-ts text-light h-text-color" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-folder"></i></a>
												<a href="#" class="overlay-trigger-icon bg-dark text-ts text-light h-text-color" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-share"></i></a>
											</div>
											<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
										</div>
									</div>
									<div class="portfolio-desc">
										<h3><a href="#">Rolling in the deep</a></h3>
										<span><a href="#">Adele</a></span>
									</div>
								</div>
							</article>

							<article class="portfolio-item col-6 col-md-3 col-lg-2" data-animate="fadeIn" data-delay="250">
								<div class="grid-inner">
									<div class="portfolio-image">
										<a href="#">
											<img src="<?php echo base_url() ?>assets/demos/music/images/charts/9.jpg" alt="Image">
										</a>
										<div class="bg-overlay">
											<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
												<a href="#" class="overlay-trigger-icon bg-dark text-ts text-light h-text-color" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-folder"></i></a>
												<a href="#" class="overlay-trigger-icon bg-dark text-ts text-light h-text-color" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-share"></i></a>
											</div>
											<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
										</div>
									</div>
									<div class="portfolio-desc">
										<h3><a href="#">Story of my life</a></h3>
										<span><a href="#">One Direction</a></span>
									</div>
								</div>
							</article>

							<article class="portfolio-item col-6 col-md-3 col-lg-2" data-animate="fadeIn" data-delay="350">
								<div class="grid-inner">
									<div class="portfolio-image">
										<a href="#">
											<img src="<?php echo base_url() ?>assets/demos/music/images/charts/10.jpg" alt="Image">
										</a>
										<div class="bg-overlay">
											<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
												<a href="#" class="overlay-trigger-icon bg-dark text-ts text-light h-text-color" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-folder"></i></a>
												<a href="#" class="overlay-trigger-icon bg-dark text-ts text-light h-text-color" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-share"></i></a>
											</div>
											<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
										</div>
									</div>
									<div class="portfolio-desc">
										<h3><a href="#">Take me to church</a></h3>
										<span><a href="#">Hozier</a></span>
									</div>
								</div>
							</article>

							<article class="portfolio-item col-6 col-md-3 col-lg-2" data-animate="fadeIn" data-delay="450">
								<div class="grid-inner">
									<div class="portfolio-image">
										<a href="#">
											<img src="<?php echo base_url() ?>assets/demos/music/images/charts/11.jpg" alt="Image">
										</a>
										<div class="bg-overlay">
											<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
												<a href="#" class="overlay-trigger-icon bg-dark text-ts text-light h-text-color" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-folder"></i></a>
												<a href="#" class="overlay-trigger-icon bg-dark text-ts text-light h-text-color" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-share"></i></a>
											</div>
											<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
										</div>
									</div>
									<div class="portfolio-desc">
										<h3><a href="#">Want to want me</a></h3>
										<span><a href="#">Jason Derulo</a></span>
									</div>
								</div>
							</article>

							<article class="portfolio-item col-6 col-md-3 col-lg-2" data-animate="fadeIn" data-delay="550">
								<div class="grid-inner">
									<div class="portfolio-image">
										<a href="#">
											<img src="<?php echo base_url() ?>assets/demos/music/images/charts/12.jpg" alt="Image">
										</a>
										<div class="bg-overlay">
											<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
												<a href="#" class="overlay-trigger-icon bg-dark text-ts text-light h-text-color" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-folder"></i></a>
												<a href="#" class="overlay-trigger-icon bg-dark text-ts text-light h-text-color" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-share"></i></a>
											</div>
											<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
										</div>
									</div>
									<div class="portfolio-desc">
										<h3><a href="#">What's going on</a></h3>
										<span><a href="#">Marvin Gaye</a></span>
									</div>
								</div>
							</article>

							<article class="portfolio-item col-6 col-md-3 col-lg-2" data-animate="fadeIn" data-delay="200">
								<div class="grid-inner">
									<div class="portfolio-image">
										<a href="#">
											<img src="<?php echo base_url() ?>assets/demos/music/images/charts/13.jpg" alt="Image">
										</a>
										<div class="bg-overlay">
											<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
												<a href="#" class="overlay-trigger-icon bg-dark text-ts text-light h-text-color" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-folder"></i></a>
												<a href="#" class="overlay-trigger-icon bg-dark text-ts text-light h-text-color" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-share"></i></a>
											</div>
											<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
										</div>
									</div>
									<div class="portfolio-desc">
										<h3><a href="#">Whispering hope</a></h3>
										<span><a href="#">Jim Reeves</a></span>
									</div>
								</div>
							</article>

							<article class="portfolio-item col-6 col-md-3 col-lg-2" data-animate="fadeIn" data-delay="300">
								<div class="grid-inner">
									<div class="portfolio-image">
										<a href="#">
											<img src="<?php echo base_url() ?>assets/demos/music/images/charts/14.jpg" alt="Image">
										</a>
										<div class="bg-overlay">
											<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
												<a href="#" class="overlay-trigger-icon bg-dark text-ts text-light h-text-color" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-folder"></i></a>
												<a href="#" class="overlay-trigger-icon bg-dark text-ts text-light h-text-color" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-share"></i></a>
											</div>
											<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
										</div>
									</div>
									<div class="portfolio-desc">
										<h3><a href="#">With or without you</a></h3>
										<span><a href="#">U2</a></span>
									</div>
								</div>
							</article>

							<article class="portfolio-item col-6 col-md-3 col-lg-2" data-animate="fadeIn" data-delay="400">
								<div class="grid-inner">
									<div class="portfolio-image">
										<a href="#">
											<img src="<?php echo base_url() ?>assets/demos/music/images/charts/15.jpg" alt="Image">
										</a>
										<div class="bg-overlay">
											<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
												<a href="#" class="overlay-trigger-icon bg-dark text-ts text-light h-text-color" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-folder"></i></a>
												<a href="#" class="overlay-trigger-icon bg-dark text-ts text-light h-text-color" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-share"></i></a>
											</div>
											<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
										</div>
									</div>
									<div class="portfolio-desc">
										<h3><a href="#">Seasons in the sun </a></h3>
										<span><a href="#">Westlife</a></span>
									</div>
								</div>
							</article>

							<article class="portfolio-item col-6 col-md-3 col-lg-2" data-animate="fadeIn" data-delay="500">
								<div class="grid-inner">
									<div class="portfolio-image">
										<a href="#">
											<img src="<?php echo base_url() ?>assets/demos/music/images/charts/16.jpg" alt="Image">
										</a>
										<div class="bg-overlay">
											<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
												<a href="#" class="overlay-trigger-icon bg-dark text-ts text-light h-text-color" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-folder"></i></a>
												<a href="#" class="overlay-trigger-icon bg-dark text-ts text-light h-text-color" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-share"></i></a>
											</div>
											<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
										</div>
									</div>
									<div class="portfolio-desc">
										<h3><a href="#">Red River Valley</a></h3>
										<span><a href="#">Marty Robbins</a></span>
									</div>
								</div>
							</article>

							<article class="portfolio-item col-6 col-md-3 col-lg-2" data-animate="fadeIn" data-delay="600">
								<div class="grid-inner">
									<div class="portfolio-image">
										<a href="#">
											<img src="<?php echo base_url() ?>assets/demos/music/images/charts/17.jpg" alt="Image">
										</a>
										<div class="bg-overlay">
											<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
												<a href="#" class="overlay-trigger-icon bg-dark text-ts text-light h-text-color" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-folder"></i></a>
												<a href="#" class="overlay-trigger-icon bg-dark text-ts text-light h-text-color" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-share"></i></a>
											</div>
											<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
										</div>
									</div>
									<div class="portfolio-desc">
										<h3><a href="#">My happiness</a></h3>
										<span><a href="#">Connie Francis</a></span>
									</div>
								</div>
							</article>

							<article class="portfolio-item col-6 col-md-3 col-lg-2" data-animate="fadeIn" data-delay="700">
								<div class="grid-inner">
									<div class="portfolio-image">
										<a href="#">
											<img src="<?php echo base_url() ?>assets/demos/music/images/charts/18.jpg" alt="Image">
										</a>
										<div class="bg-overlay">
											<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
												<a href="#" class="overlay-trigger-icon bg-dark text-ts text-light h-text-color" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-folder"></i></a>
												<a href="#" class="overlay-trigger-icon bg-dark text-ts text-light h-text-color" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-share"></i></a>
											</div>
											<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
										</div>
									</div>
									<div class="portfolio-desc">
										<h3><a href="#">Good kisser</a></h3>
										<span><a href="#">Usher</a></span>
									</div>
								</div>
							</article>

						</div>

					<!-- Singers
						============================================= -->
						<div class="section bg-transparent topmargin-sm mb-0 clearfix">
							<div class="heading-block center border-0 dark">
								<h2 class="nott">Top Singers</h2>
								<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
							</div>
							<div class="singer-wrap clearfix">
								<a href="#" class="singer-bb-image big" style="background-image: url('<?php echo base_url() ?>assets/demos/music/images/singers/david.jpg');"><span>David Guetta</span></a>
								<a href="#" class="singer-bb-image" style="background-image: url('<?php echo base_url() ?>assets/demos/music/images/singers/jennifer-lopez.jpg'); top: 0px; left: 3%;"><span>Jennifer Lopez</span></a>
								<a href="#" class="singer-bb-image" style="background-image: url('<?php echo base_url() ?>assets/demos/music/images/singers/selena-gomez.jpg'); top: 43%; margin-left: -49%;"><span>Selena Gomez</span></a>
								<a href="#" class="singer-bb-image" style="background-image: url('<?php echo base_url() ?>assets/demos/music/images/singers/bruno-mars.jpg'); top: 34%; margin-left: -38%;"><span>Bruno Mars</span></a>
								<a href="#" class="singer-bb-image" style="background-image: url('<?php echo base_url() ?>assets/demos/music/images/singers/lady-gaga.jpg'); top: 0; margin-left: -33%;"><span>Lady Gaga</span></a>
								<a href="#" class="singer-bb-image" style="background-image: url('<?php echo base_url() ?>assets/demos/music/images/singers/ariana-grande.jpg'); top: 0; margin-left: -20%;"><span>Ariana Grande</span></a>
								<a href="#" class="singer-bb-image" style="background-image: url('<?php echo base_url() ?>assets/demos/music/images/singers/chris-brown.jpg'); top: auto; bottom: 0%; margin-left: -42%;"><span>Chris Brown</span></a>
								<a href="#" class="singer-bb-image" style="background-image: url('<?php echo base_url() ?>assets/demos/music/images/singers/katy-perry.jpg'); top: 34%; margin-left: -27%;"><span>Katy Perry</span></a>
								<a href="#" class="singer-bb-image" style="background-image: url('<?php echo base_url() ?>assets/demos/music/images/singers/flo-rida.jpg'); top: auto; bottom: 0; margin-left: -31%;"><span>Flo Rida</span></a>
								<a href="#" class="singer-bb-image" style="background-image: url('<?php echo base_url() ?>assets/demos/music/images/singers/martin-garrix.jpg'); top: auto; bottom: 5%; margin-left: -21%;"><span>Martin Garrix</span></a>
								<a href="#" class="singer-bb-image" style="background-image: url('<?php echo base_url() ?>assets/demos/music/images/singers/nicki-minaj.jpg'); top: 0px; left: auto; right: 4%;"><span>Nicki Minaj</span></a>
								<a href="#" class="singer-bb-image" style="background-image: url('<?php echo base_url() ?>assets/demos/music/images/singers/justin-bieber.jpg'); top: 44%; margin-left: 41%;"><span>Justin Bieber</span></a>
								<a href="#" class="singer-bb-image" style="background-image: url('<?php echo base_url() ?>assets/demos/music/images/singers/rihanna.jpg'); top: 32%; margin-left: 30%;"><span>Rihanna</span></a>
								<a href="#" class="singer-bb-image" style="background-image: url('<?php echo base_url() ?>assets/demos/music/images/singers/ed-sheeran.jpg'); top: auto; bottom: 2%; margin-left: 34%;"><span>Ed Sheeran</span></a>
								<a href="#" class="singer-bb-image" style="background-image: url('<?php echo base_url() ?>assets/demos/music/images/singers/u2.jpg'); top: 1%; margin-left: 26%;"><span>U2</span></a>
								<a href="#" class="singer-bb-image" style="background-image: url('<?php echo base_url() ?>assets/demos/music/images/singers/drake.jpg'); top: 4%; margin-left: 14%;"><span>Drake</span></a>
								<a href="#" class="singer-bb-image" style="background-image: url('<?php echo base_url() ?>assets/demos/music/images/singers/taylor-swift.jpg'); top: auto; bottom: 0; margin-left: 23%;"><span>Taylor Swift</span></a>
								<a href="#" class="singer-bb-image" style="background-image: url('<?php echo base_url() ?>assets/demos/music/images/singers/eminem.jpg'); top: auto; bottom: 36%; margin-left: 19%;"><span>Eminem</span></a>
								<a href="#" class="singer-bb-image" style="background-image: url('<?php echo base_url() ?>assets/demos/music/images/singers/sia.jpg'); top: auto; bottom: 0; margin-left: 12.5%;"><span>Sia</span></a>
							</div>
						</div>

						<div class="clear"></div>

						<!-- <div class="row topmargin-lg dark clearfix"> -->
						<!-- Soundcloud
							============================================= -->
							<!-- <div class="col-lg-4 col-md-6">
								<h3>Soundcloud Embed</h3>
								<iframe height="130" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/301161123&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe><br><br>
								<iframe height="130" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/278002889&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
							</div> -->

						<!-- Mobile App
							============================================= -->
							<!-- <div class="col-lg-7 col-md-5 offset-md-1 overflow-hidden">
								<div class="row clearfix">
									<div class="col-lg-6 order-lg-12">
										<div class="d-block d-md-none d-lg-none d-xl-block topmargin clear"></div>
										<h3>Grab it Now in Mobile</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, impedit.</p>
										<a href="#" class="button button-small button-rounded button-desc ml-0 clearfix"><i class="icon-apple"></i><div>App Store<span>Free Forever, Downlod It Now</span></div></a>
										<a href="#" class="button button-small button-rounded button-desc ml-0 clearfix" style="margin-top: 10px"><i class="icon-android"></i><div>Google Play<span>Free Forever, Downlod It Now</span></div></a>
									</div>
									<div class="d-block d-md-block d-lg-none topmargin clear"></div>
									<div class="col-lg-6 order-lg-1 d-sm-none d-md-none d-lg-block">
										<img src="<?php echo base_url() ?>assets/demos/music/images/iphone.png" alt="Mobile" data-animate="fadeInUp">
									</div>
								</div>
							</div> -->
						<!-- </div> -->

					</div>
				</div>
			</section><!-- #content end -->

		<!-- Footer
			============================================= -->
			<footer id="footer" class="border-0 dark" style="background-color: #111;">
			<!-- Copyrights
				============================================= -->
				<div id="copyrights" style="color: #444;">
					<div class="container clearfix">

						<div class="row justify-content-between col-mb-30">
							<div class="col-12 col-lg-auto text-center text-lg-left">
								Copyrights &copy; 2021 All Rights Reserved by Listen Me Inc.
							</div>

							<div class="col-12 col-lg-auto text-center text-lg-right">
								<a href="#" class="social-icon inline-block si-small si-borderless si-facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="#" class="social-icon inline-block si-small si-borderless si-twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>

								<a href="#" class="social-icon inline-block si-small si-borderless si-gplus">
									<i class="icon-gplus"></i>
									<i class="icon-gplus"></i>
								</a>

								<a href="#" class="social-icon inline-block si-small si-borderless si-pinterest">
									<i class="icon-pinterest"></i>
									<i class="icon-pinterest"></i>
								</a>

								<a href="#" class="social-icon inline-block si-small si-borderless si-vimeo">
									<i class="icon-vimeo"></i>
									<i class="icon-vimeo"></i>
								</a>

								<a href="#" class="social-icon inline-block si-small si-borderless si-github">
									<i class="icon-github"></i>
									<i class="icon-github"></i>
								</a>

								<a href="#" class="social-icon inline-block si-small si-borderless si-yahoo">
									<i class="icon-yahoo"></i>
									<i class="icon-yahoo"></i>
								</a>

								<a href="#" class="social-icon inline-block si-small si-borderless si-linkedin">
									<i class="icon-linkedin"></i>
									<i class="icon-linkedin"></i>
								</a>
							</div>
						</div>

					</div>
				</div><!-- #copyrights end -->
			</footer><!-- #footer end -->

		</div><!-- #wrapper end -->

	<!-- Audio Player
		============================================= -->
		<audio id="audio-player" preload="none" class="mejs__player" controls data-mejsoptions='{"defaultAudioHeight": "50", "alwaysShowControls": "true"}' style="max-width:100%;">
			<source src="<?php echo base_url() ?>assets/demos/music/src/audios/nashe-si.mp3" type="audio/mp3">
			</audio>

	<!-- Default Track - onLoad
		============================================= -->
		<div id="track-onload" data-track="<?php echo base_url() ?>assets/demos/music/tracks/clean-clean.mp3" data-poster="<?php echo base_url() ?>assets/demos/music/images/popular-songs/7.jpg" data-title="Clean Clean" data-singer="R Costello"></div>

	<!-- Go To Top
		============================================= -->
		<div id="gotoTop" class="icon-angle-up" style="bottom: 70px;"></div>

	<!-- JavaScripts
		============================================= -->
		<script src="<?php echo base_url() ?>assets/js/jquery.js"></script>
		<script src="<?php echo base_url() ?>assets/js/plugins.min.js"></script>

	<!-- Audio player Plugin
		============================================= -->
		<script src="<?php echo base_url() ?>assets/demos/music/js/mediaelement/mediaelement-and-player.js"></script>

	<!-- Footer Scripts
		============================================= -->
		<script src="<?php echo base_url() ?>assets/js/functions.js"></script>

		<script>

		// Custom Tab jQuery
		// jQuery( '.tabs' ).on( 'tabsactivate', function( event, ui ) {
		// 	var gridContainerAvailable = jQuery( ui.newPanel ).find('.grid-container');

		// 	if( gridContainerAvailable.length > 0 ) {
		// 		gridContainerAvailable.each( function(){
		// 			var portfolioGrid = jQuery(this);

		// 			if( !portfolioGrid.hasClass('tabs-enabled-grid-container') ) {
		// 				portfolioGrid.isotope('layout');
		// 				jQuery(window).trigger('resize');
		// 				portfolioGrid.addClass('tabs-enabled-grid-container');
		// 			}
		// 		});
		// 	}
		// });

		// Music playing Scripts
		var trackPlaying = '',
		audioPlayer = document.getElementById('audio-player');

		audioPlayer.addEventListener("ended", function(){
			jQuery('.track-list').find('i').removeClass('icon-pause').addClass('icon-play');
		});

		audioPlayer.addEventListener("pause", function(){
			jQuery('.track-list').find('i').removeClass('icon-pause').addClass('icon-play');
		});

		function changeAudio( sourceUrl, posterUrl, trackTitle, trackSinger, playAudio = true ) {
			var audio = $("#audio-player"),
			clickEl = jQuery('[data-track="'+sourceUrl+'"]'),
			playerId = audio.closest('.mejs__container').attr('id'),
			playerObject = mejs.players[playerId];

			jQuery('.track-list').find('i').removeClass('icon-pause').addClass('icon-play');

			if( sourceUrl == trackPlaying ) {
				if (playerObject.node.paused) {
					playerObject.play();
					clickEl.find('i').removeClass('icon-play').addClass('icon-pause');
				} else {
					playerObject.pause();
					clickEl.find('i').removeClass('icon-pause').addClass('icon-play');
				}
				return true;
			}

			trackPlaying = sourceUrl;

			audio.attr( 'poster', posterUrl );
			audio.attr( 'title', trackTitle );

			jQuery('.mejs__layers').html('').html('<div class="mejs-track-artwork"><img src="'+ posterUrl +'" alt="Track Poster" /></div><div class="mejs-track-details"><h3>'+ trackTitle +'<br><span>'+ trackSinger +'</span></h3></div>');

			if( sourceUrl != '' ) {
				playerObject.setSrc( sourceUrl );
			}
			playerObject.pause();
			playerObject.load();

			if( playAudio == true ) {
				playerObject.play();
				jQuery(clickEl).find('i').removeClass('icon-play').addClass('icon-pause');
			}
		}

		jQuery('.track-list').on( 'click', function(){
			var audioTrack = jQuery(this).attr('data-track'), // Track url
				posterUrl = jQuery(this).attr('data-poster'), // Track Poster Image
				trackTitle = jQuery(this).attr('data-title'); // Track Title
				trackSinger = jQuery(this).attr('data-singer'); // Track Singer Name

				changeAudio( audioTrack, posterUrl, trackTitle, trackSinger );
				return false;
			});

		jQuery(window).on( 'load', function(){
			var trackOnload = jQuery('#track-onload');

			if( trackOnload.length > 0 ) {
				var audioTrack = trackOnload.attr('data-track'), // Track url
					posterUrl = trackOnload.attr('data-poster'), // Track Poster Image
					trackTitle = trackOnload.attr('data-title'); // Track Title
					trackSinger = trackOnload.attr('data-singer'); // Track Singer Name

					setTimeout( function(){
						changeAudio( audioTrack, posterUrl, trackTitle, trackSinger, false );
					}, 500);
				}
			});

		</script>

	</body>
	</html>
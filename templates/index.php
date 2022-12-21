<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta content="ie=edge" http-equiv="x-ua-compatible">
	<title>Spartaz Official | Music is Life</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7cOverpass+Mono:700&amp;display=swap">
	<link rel="stylesheet" href="<?php echo SpartazMusic::assetsUrl(); ?>use.fontawesome.com/releases/v5.13.0/css/all.css">
	<link rel="stylesheet" href="<?php echo SpartazMusic::assetsUrl(); ?>css/libs.min.css">
	<link rel="stylesheet" href="<?php echo SpartazMusic::assetsUrl(); ?>css/styles.css">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo SpartazMusic::assetsUrl(); ?>img/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo SpartazMusic::assetsUrl(); ?>img/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo SpartazMusic::assetsUrl(); ?>img/favicons/favicon-16x16.png">
	<link rel="manifest" href="<?php echo SpartazMusic::assetsUrl(); ?>img/favicons/site.webmanifest">
	<link rel="mask-icon" href="<?php echo SpartazMusic::assetsUrl(); ?>img/favicons/safari-pinned-tab.svg" color="#080618">
	<link rel="shortcut icon" href="<?php echo SpartazMusic::assetsUrl(); ?>img/favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-config" content="img/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
</head>

<body class="loading">
	<div class="js-preloader preloader"></div>
	<header class="panel js-panel">
		<div class="container--panel uk-container uk-height-1-1">
			<div class="uk-flex uk-flex-middle uk-height-1-1" data-uk-grid>
				<div class="uk-width-1-3 uk-width-1-6@m">
					<div class="logo logo--panel uk-visible@m">
						<a href="#intro" data-uk-scroll><img src="<?php echo SpartazMusic::assetsUrl(); ?>img/DTD-SpartazOfficial-300x115-300x115.png" alt="" style="max-height: 30px;"></a>
					</div>
					<div class="logo logo--panel uk-hidden@m">
						<a href="#intro" data-uk-scroll><img src="<?php echo SpartazMusic::assetsUrl(); ?>img/DTD-SpartazOfficial-300x115-300x115.png" alt="" style="max-height: 30px;"></a>
					</div>
				</div>
				<div class="uk-width-2-3 uk-visible@m">
					<ul class="nav nav--panel js-scrollspy-nav uk-flex uk-flex-wrap">
						<li><a href="<?php echo esc_url(site_url('blog')); ?>">Blog</a></li>
						<li><a href="#music">Music</a></li>
						<li><a href="#contacts">Contacts</a></li>
					</ul>
				</div>
				<div class="uk-width-1-3 uk-width-1-6@m">
					<div class="panel__player">
						<audio class="js-audio" preload="metadata"></audio>
						<button type="button" class="icon icon--play-pause icon--play js-panel-play"></button>
						<a class="mejs__horizontal-volume-slider js-panel-volume">
							<div class="mejs__horizontal-volume-total">
								<div class="mejs__horizontal-volume-current"></div>
							</div>
						</a>
					</div>
				</div>
				<div class="uk-width-1-3 uk-hidden@m uk-text-right"><a href="#" data-uk-toggle="target: #offcanvas-nav">Menu</a></div>
			</div>
		</div>
	</header>
	<div id="offcanvas-nav" data-uk-offcanvas="flip: true; mode: push; overlay: true">
		<div class="uk-offcanvas-bar">
			<button class="modal__close uk-offcanvas-close" type="button" data-uk-close></button>
			<ul class="nav nav--offcanvas js-scrollspy-nav js-offcanvas-nav uk-flex">
				<li><a href="<?php echo esc_url(site_url('blog')); ?>">Blog</a></li>
				<li><a href="#music">Music</a></li>
				<li><a href="#contacts">Contacts</a></li>
			</ul>
		</div>
	</div>
	<section class="intro uk-margin-large-bottom">
		<div class="uk-container uk-container-large">
			<div class="uk-grid-collapse" data-uk-grid>
				<div class="intro__sidebar uk-width-1-4@m uk-visible@m uk-position-relative">
					<div class="logo logo--intro"><img src="<?php echo SpartazMusic::assetsUrl(); ?>img/DTD-SpartazOfficial-300x115-300x115.png" alt="" style="height:45px;"></div>
					<ul class="nav nav--intro uk-list js-scrollspy-nav">
						<li><a href="<?php echo esc_url(site_url('blog')); ?>">Blog</a></li>
						<li><a href="#music">Music</a></li>
						<li><a href="#contacts">Contacts</a></li>
					</ul>
					<div class="social__wrapper">
						<div class="social social--intro">
							<h6 class="uk-h4 social__title c-dark--4">Social media</h6>
							<ul class="social__list uk-list uk-align-center">
								<li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
								<li><a href="#"><span class="fab fa-youtube"></span></a></li>
								<li><a href="#"><span class="fab fa-instagram"></span></a></li>
								<li><a href="#"><span class="fab fa-twitter"></span></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="uk-width-3-4@m">
					<div class="slider slider--intro uk-position-relative" data-uk-slideshow="animation: push">
						<ul class="slider__items uk-slideshow-items">
							<li>
								<div class="slider__screen">
									<div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center"><img class="slider__image" src="<?php echo SpartazMusic::assetsUrl(); ?>img/spartazofficial.jpeg" alt="" data-uk-cover></div>
									<div class="slider__inner uk-position-top">
										<div data-uk-slideshow-parallax="scale: 1,1,0.8">
											<h2 class="intro__title"><span class="js-intro-title uk-hidden">We offer top professional PR/Media Campaigns services to Musicians, with their best interest as our primary goal we showcase them to the world</span></h2>
										</div>
									</div>
								</div>
							</li>
						</ul>
						<a class="slider__control" href="#" data-uk-slidenav-next data-uk-slideshow-item="next"></a>
						<ul class="js-slider-intro-nav uk-slideshow-nav uk-dotnav uk-flex-column uk-flex-center"></ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="music" class="music uk-section" data-uk-scrollspy="cls:uk-animation-fade; offset-top: 80px; delay: 300">
		<div class="container--min uk-container">
			<h2 class="uk-h2">Music</h2>
			<div class="uk-child-width-1-1 uk-child-width-1-2@m" data-uk-grid>
				<div class="uk-flex-last">
					<div class="albums albums--list" data-uk-switcher="connect: .playlist__wrap>.uk-switcher; animation: uk-animation-fade" style="height: 352px;overflow: scroll;">
						<div class="albums__item uk-active">
							<div class="albums__cover">
								<div class="cover__photo uk-background-cover" data-src="https://www.spartazofficial.com.ng/wp-content/uploads/2019/01/Spartaz-696x696.jpg" data-uk-img><span class="cover__link boxshadow icon icon--pause"></span></div>
							</div>
							<div class="album__details"><span class="albums__title">Spartaz Freak</span> <span class="albums__year">2019</span> <span class="albums__buy"><span class="albums__buy_buttons"><a href="#" target="_blank"><span class="fab fa-apple"></span></a> <a href="#" target="_blank"><span class="fab fa-spotify"></span></a> <a href="#" target="_blank"><span class="fab fa-amazon"></span></a></span>
								</span>
							</div>
						</div>
						<div class="albums__item">
							<div class="albums__cover">
								<div class="cover__photo uk-background-cover" data-src="https://www.spartazofficial.com.ng/wp-content/uploads/2019/12/80537403_581515756030080_4902158646680485888_n.jpg" data-uk-img><span class="cover__link boxshadow icon icon--pause"></span></div>
							</div>
							<div class="album__details"><span class="albums__title">At All At All – Denrynz HBK</span> <span class="albums__year">2019</span> <span class="albums__buy"><span class="albums__buy_buttons"><a href="#" target="_blank"><span class="fab fa-apple"></span></a> <a href="#" target="_blank"><span class="fab fa-spotify"></span></a> <a href="#" target="_blank"><span class="fab fa-amazon"></span></a></span>
								</span>
							</div>
						</div>
						<div class="albums__item">
							<div class="albums__cover">
								<div class="cover__photo uk-background-cover" data-src="https://www.spartazofficial.com.ng/wp-content/uploads/2019/11/74786695_395075674713890_6456679273003483136_n.jpg" data-uk-img><span class="cover__link boxshadow icon icon--pause"></span></div>
							</div>
							<div class="album__details"><span class="albums__title">Make We Dance - Razzy</span> <span class="albums__year">2019</span> <span class="albums__buy"><span class="albums__buy_buttons"><a href="#" target="_blank"><span class="fab fa-apple"></span></a> <a href="#" target="_blank"><span class="fab fa-spotify"></span></a> <a href="#" target="_blank"><span class="fab fa-amazon"></span></a></span>
								</span>
							</div>
						</div>
						<div class="albums__item">
							<div class="albums__cover">
								<div class="cover__photo uk-background-cover" data-src="https://www.spartazofficial.com.ng/wp-content/uploads/2019/06/64424001_394231537853506_137502102376153088_n.jpg" data-uk-img><span class="cover__link boxshadow icon icon--pause"></span></div>
							</div>
							<div class="album__details"><span class="albums__title">Fiesta by Chino La Mala Ft. Razzy</span> <span class="albums__year">2019</span> <span class="albums__buy"><span class="albums__buy_buttons"><a href="#" target="_blank"><span class="fab fa-apple"></span></a> <a href="#" target="_blank"><span class="fab fa-spotify"></span></a> <a href="#" target="_blank"><span class="fab fa-amazon"></span></a></span>
								</span>
							</div>
						</div>
						<div class="albums__item">
							<div class="albums__cover">
								<div class="cover__photo uk-background-cover" data-src="https://www.spartazofficial.com.ng/wp-content/uploads/2018/07/IMG-20180713-WA0007-300x300.jpg" data-uk-img><span class="cover__link boxshadow icon icon--pause"></span></div>
							</div>
							<div class="album__details"><span class="albums__title">Razzy Ft Taller Calling</span> <span class="albums__year">2018</span> <span class="albums__buy"><span class="albums__buy_buttons"><a href="#" target="_blank"><span class="fab fa-apple"></span></a> <a href="#" target="_blank"><span class="fab fa-spotify"></span></a> <a href="#" target="_blank"><span class="fab fa-amazon"></span></a></span>
								</span>
							</div>
						</div>
						<div class="albums__item">
							<div class="albums__cover">
								<div class="cover__photo uk-background-cover" data-src="https://1.bp.blogspot.com/-STTJeASehTk/WBYMJLHDwgI/AAAAAAAAAC8/QvrTkzkIkasxv3ectiyvy5LnW8xKb6uXwCLcB/s400/IMG-20161023-WA0000.jpg" data-uk-img><span class="cover__link boxshadow icon icon--pause"></span></div>
							</div>
							<div class="album__details"><span class="albums__title">Cucumber - Spartaz</span> <span class="albums__year">2016</span> <span class="albums__buy"><span class="albums__buy_buttons"><a href="#" target="_blank"><span class="fab fa-apple"></span></a> <a href="#" target="_blank"><span class="fab fa-spotify"></span></a> <a href="#" target="_blank"><span class="fab fa-amazon"></span></a></span>
								</span>
							</div>
						</div>
						<div class="albums__item">
							<div class="albums__cover">
								<div class="cover__photo uk-background-cover" data-src="https://3.bp.blogspot.com/-y6W8LQNSco8/V9ZVrA-X3dI/AAAAAAAKcfE/PfuYYNw8CiI00JMH-aPmwQG4F6eaM9VbACLcB/s400/unnamed.jpg" data-uk-img><span class="cover__link boxshadow icon icon--pause"></span></div>
							</div>
							<div class="album__details"><span class="albums__title">Spartaz Iyanumasele</span> <span class="albums__year">2016</span> <span class="albums__buy"><span class="albums__buy_buttons"><a href="#" target="_blank"><span class="fab fa-apple"></span></a> <a href="#" target="_blank"><span class="fab fa-spotify"></span></a> <a href="#" target="_blank"><span class="fab fa-amazon"></span></a></span>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="playlist__wrap">
					<div class="uk-switcher">
						<div class="playlist bg-dark--1">
							<div class="albums albums--playlist albums__item">
								<div class="albums__cover"><img src="https://www.spartazofficial.com.ng/wp-content/uploads/2019/01/Spartaz-696x696.jpg" alt="" data-uk-img></div>
								<div class="album__details"><span class="albums__title">Spartaz Freak</span> <span class="albums__year">2019</span></div>
								<div class="albums__buy uk-visible@s">
									<h6 class="albums__buy_title uk-h6">Available on</h6>
									<div class="albums__buy_buttons"><a href="#" target="_blank"><span class="fab fa-apple"></span></a> <a href="#" target="_blank"><span class="fab fa-spotify"></span></a> <a href="#" target="_blank"><span class="fab fa-amazon"></span></a></div>
								</div>
							</div>
							<ul class="js-audio-items tracks list--striped">
								<li class="list__item" data-audio="https://www.spartazofficial.com.ng/wp-content/uploads/audio/Spartaz_Freak(spartazofficial.com.ng).mp3">
									<button type="button" class="icon icon--play-pause icon--play js-audio-play"></button> <span class="tracks__title">Spartaz Freak</span> <span class="js-audio-time tracks__time"></span>
									<a class="mejs__horizontal-volume-slider js-panel-volume">
										<div class="mejs__horizontal-volume-total">
											<div class="mejs__horizontal-volume-current"></div>
										</div>
									</a>
								</li>
							</ul>
						</div>
						<div class="playlist bg-dark--1">
							<div class="albums albums--playlist albums__item">
								<div class="albums__cover"><img src="https://www.spartazofficial.com.ng/wp-content/uploads/2019/12/80537403_581515756030080_4902158646680485888_n.jpg" data-src="https://www.spartazofficial.com.ng/wp-content/uploads/2019/12/80537403_581515756030080_4902158646680485888_n.jpg" alt="" data-uk-img></div>
								<div class="album__details"><span class="albums__title">At All At All – Denrynz HBK</span> <span class="albums__year">2019</span></div>
								<div class="albums__buy uk-visible@s">
									<h6 class="albums__buy_title uk-h6">Available on</h6>
									<div class="albums__buy_buttons"><a href="#" target="_blank"><span class="fab fa-apple"></span></a> <a href="#" target="_blank"><span class="fab fa-spotify"></span></a> <a href="#" target="_blank"><span class="fab fa-amazon"></span></a></div>
								</div>
							</div>
							<ul class="js-audio-items tracks list--striped">
								<li class="list__item" data-audio="https://www.spartazofficial.com.ng/wp-content/uploads/2019/12/Denrynz-At-All-At-All.mp3">
									<button type="button" class="icon icon--play-pause icon--play js-audio-play"></button> <span class="tracks__title">At All At All – Denrynz HBK</span> <span class="js-audio-time tracks__time"></span>
									<a class="mejs__horizontal-volume-slider js-panel-volume">
										<div class="mejs__horizontal-volume-total">
											<div class="mejs__horizontal-volume-current"></div>
										</div>
									</a>
								</li>
							</ul>
						</div>
						<div class="playlist bg-dark--1">
							<div class="albums albums--playlist albums__item">
								<div class="albums__cover"><img src="https://www.spartazofficial.com.ng/wp-content/uploads/2019/11/74786695_395075674713890_6456679273003483136_n.jpg" data-src="https://www.spartazofficial.com.ng/wp-content/uploads/2019/11/74786695_395075674713890_6456679273003483136_n.jpg" alt="" data-uk-img></div>
								<div class="album__details"><span class="albums__title">Make We Dance - Razzy</span> <span class="albums__year">2019</span></div>
								<div class="albums__buy uk-visible@s">
									<h6 class="albums__buy_title uk-h6">Available on</h6>
									<div class="albums__buy_buttons"><a href="#" target="_blank"><span class="fab fa-apple"></span></a> <a href="#" target="_blank"><span class="fab fa-spotify"></span></a> <a href="#" target="_blank"><span class="fab fa-amazon"></span></a></div>
								</div>
							</div>
							<ul class="js-audio-items tracks list--striped">
								<li class="list__item" data-audio="https://www.spartazofficial.com.ng/wp-content/uploads/2019/11/Razzy-Make-We-Dance.mp3">
									<button type="button" class="icon icon--play-pause icon--play js-audio-play"></button> <span class="tracks__title">Make We Dance - Razzy</span> <span class="js-audio-time tracks__time"></span>
									<a class="mejs__horizontal-volume-slider js-panel-volume">
										<div class="mejs__horizontal-volume-total">
											<div class="mejs__horizontal-volume-current"></div>
										</div>
									</a>
								</li>
							</ul>
						</div>
						<div class="playlist bg-dark--1">
							<div class="albums albums--playlist albums__item">
								<div class="albums__cover"><img src="https://www.spartazofficial.com.ng/wp-content/uploads/2019/06/64424001_394231537853506_137502102376153088_n.jpg" data-src="https://www.spartazofficial.com.ng/wp-content/uploads/2019/06/64424001_394231537853506_137502102376153088_n.jpg" alt="" data-uk-img></div>
								<div class="album__details"><span class="albums__title">Fiesta by Chino La Mala Ft. Razzy</span> <span class="albums__year">2019</span></div>
								<div class="albums__buy uk-visible@s">
									<h6 class="albums__buy_title uk-h6">Available on</h6>
									<div class="albums__buy_buttons"><a href="#" target="_blank"><span class="fab fa-apple"></span></a> <a href="#" target="_blank"><span class="fab fa-spotify"></span></a> <a href="#" target="_blank"><span class="fab fa-amazon"></span></a></div>
								</div>
							</div>
							<ul class="js-audio-items tracks list--striped">
								<li class="list__item" data-audio="https://www.spartazofficial.com.ng/wp-content/uploads/audio/Fiesta%20by%20Chino%20La%20Mala%20Ft.%20Razzy(spartazofficial.com.ng).mp3">
									<button type="button" class="icon icon--play-pause icon--play js-audio-play"></button> <span class="tracks__title">Fiesta by Chino La Mala Ft. Razzy</span> <span class="js-audio-time tracks__time"></span>
									<a class="mejs__horizontal-volume-slider js-panel-volume">
										<div class="mejs__horizontal-volume-total">
											<div class="mejs__horizontal-volume-current"></div>
										</div>
									</a>
								</li>
							</ul>
						</div>
						<div class="playlist bg-dark--1">
							<div class="albums albums--playlist albums__item">
								<div class="albums__cover"><img src="https://www.spartazofficial.com.ng/wp-content/uploads/2018/07/IMG-20180713-WA0007-300x300.jpg" data-src="https://www.spartazofficial.com.ng/wp-content/uploads/2018/07/IMG-20180713-WA0007-300x300.jpg" alt="" data-uk-img></div>
								<div class="album__details"><span class="albums__title">Razzy Ft Taller Calling</span> <span class="albums__year">2018</span></div>
								<div class="albums__buy uk-visible@s">
									<h6 class="albums__buy_title uk-h6">Available on</h6>
									<div class="albums__buy_buttons"><a href="#" target="_blank"><span class="fab fa-apple"></span></a> <a href="#" target="_blank"><span class="fab fa-spotify"></span></a> <a href="#" target="_blank"><span class="fab fa-amazon"></span></a></div>
								</div>
							</div>
							<ul class="js-audio-items tracks list--striped">
								<li class="list__item" data-audio="https://www.spartazofficial.com.ng/wp-content/uploads/audio/Razzy-Ft-Taller_Calling.mp3">
									<button type="button" class="icon icon--play-pause icon--play js-audio-play"></button> <span class="tracks__title">Razzy Ft Taller Calling</span> <span class="js-audio-time tracks__time"></span>
									<a class="mejs__horizontal-volume-slider js-panel-volume">
										<div class="mejs__horizontal-volume-total">
											<div class="mejs__horizontal-volume-current"></div>
										</div>
									</a>
								</li>
							</ul>
						</div>
						<div class="playlist bg-dark--1">
							<div class="albums albums--playlist albums__item">
								<div class="albums__cover"><img src="https://1.bp.blogspot.com/-STTJeASehTk/WBYMJLHDwgI/AAAAAAAAAC8/QvrTkzkIkasxv3ectiyvy5LnW8xKb6uXwCLcB/s400/IMG-20161023-WA0000.jpg" data-src="https://1.bp.blogspot.com/-STTJeASehTk/WBYMJLHDwgI/AAAAAAAAAC8/QvrTkzkIkasxv3ectiyvy5LnW8xKb6uXwCLcB/s400/IMG-20161023-WA0000.jpg" alt="" data-uk-img></div>
								<div class="album__details"><span class="albums__title">Cucumber - Spartaz</span> <span class="albums__year">2016</span></div>
								<div class="albums__buy uk-visible@s">
									<h6 class="albums__buy_title uk-h6">Available on</h6>
									<div class="albums__buy_buttons"><a href="#" target="_blank"><span class="fab fa-apple"></span></a> <a href="#" target="_blank"><span class="fab fa-spotify"></span></a> <a href="#" target="_blank"><span class="fab fa-amazon"></span></a></div>
								</div>
							</div>
							<ul class="js-audio-items tracks list--striped">
								<li class="list__item" data-audio="https://www.spartazofficial.com.ng/wp-content/uploads/audio/CUCUMBER-mp3.mp3">
									<button type="button" class="icon icon--play-pause icon--play js-audio-play"></button> <span class="tracks__title">Cucumber - Spartaz</span> <span class="js-audio-time tracks__time"></span>
									<a class="mejs__horizontal-volume-slider js-panel-volume">
										<div class="mejs__horizontal-volume-total">
											<div class="mejs__horizontal-volume-current"></div>
										</div>
									</a>
								</li>
							</ul>
						</div>
						<div class="playlist bg-dark--1">
							<div class="albums albums--playlist albums__item">
								<div class="albums__cover"><img src="https://3.bp.blogspot.com/-y6W8LQNSco8/V9ZVrA-X3dI/AAAAAAAKcfE/PfuYYNw8CiI00JMH-aPmwQG4F6eaM9VbACLcB/s400/unnamed.jpg" alt="" data-uk-img></div>
								<div class="album__details"><span class="albums__title">Spartaz Iyanumasele</span> <span class="albums__year">2016</span></div>
								<div class="albums__buy uk-visible@s">
									<h6 class="albums__buy_title uk-h6">Available on</h6>
									<div class="albums__buy_buttons"><a href="#" target="_blank"><span class="fab fa-apple"></span></a> <a href="#" target="_blank"><span class="fab fa-spotify"></span></a> <a href="#" target="_blank"><span class="fab fa-amazon"></span></a></div>
								</div>
							</div>
							<ul class="js-audio-items tracks list--striped">
								<li class="list__item" data-audio="https://www.spartazofficial.com.ng/wp-content/uploads/audio/Spartaz-Iyanumasele.mp3">
									<button type="button" class="icon icon--play-pause icon--play js-audio-play"></button> <span class="tracks__title">Spartaz Iyanumasele</span> <span class="js-audio-time tracks__time"></span>
									<a class="mejs__horizontal-volume-slider js-panel-volume">
										<div class="mejs__horizontal-volume-total">
											<div class="mejs__horizontal-volume-current"></div>
										</div>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<svg class="tracks__volume_mask">
		<defs>
			<clipPath id="volumeClipMask">
				<path d="M7 27.605H4v-7.5h3v7.5zm20 0h-3v-25h3v25zm-10 0h-3v-16.25h3v16.25zm-5.167 0h-3V15.876h3v11.729zm10 0h-3V7.126h3v20.479z" fill="#FFF" />
			</clipPath>
		</defs>
	</svg>

	<section class="team uk-section uk-overflow-hidden" data-uk-scrollspy="cls:uk-animation-fade; offset-top: 80px; delay: 300">
		<div class="container--min uk-container uk-position-relative">
			<h3 class="team__title uk-h3"><span class="team__title_inner">Artist</span></h3>
			<div class="team__members uk-flex uk-flex-center" data-uk-grid data-uk-scrollspy="cls:uk-animation-fade; target: .team__member__wrap; delay: 300">
				<div class="team__member__wrap uk-width-1-2 uk-width-1-4@m">
					<a class="team__member" href="#contacts">
						<div class="cover__photo uk-background-cover uk-transition-toggle" data-src="<?php echo SpartazMusic::assetsUrl(); ?>img/team/1.jpg" data-uk-img><span class="cover__link boxshadow icon icon--dots uk-transition-scale-up"></span></div><span class="team__name">Denrynz HBK</span> <span class="team__vocation">(Mr. Impressive) Artist
						</span>
					</a>
				</div>
				<div class="team__member__wrap uk-width-1-2 uk-width-1-4@m">
					<a class="team__member" href="#contacts">
						<div class="cover__photo uk-background-cover uk-transition-toggle" data-src="https://res.cloudinary.com/biggidroid/image/upload/v1671531079/ferrari_eodhlx.jpg" data-uk-img><span class="cover__link boxshadow icon icon--dots uk-transition-scale-up"></span></div><span class="team__name">Ferrari Boss
							(Gorgeous Gorvnor)</span> <span class="team__vocation">Artist/Media Director</span>
					</a>
				</div>
				<div class="team__member__wrap uk-width-1-2 uk-width-1-4@m">
					<a class="team__member" href="#contacts">
						<div class="cover__photo uk-background-cover uk-transition-toggle" data-src="https://res.cloudinary.com/biggidroid/image/upload/v1671531063/Desmond_ptfq0n.jpg" data-uk-img><span class="cover__link boxshadow icon icon--dots uk-transition-scale-up"></span></div><span class="team__name">Desmond Bimes</span> <span class="team__vocation">Artist</span>
					</a>
				</div>
				<div class="team__member__wrap uk-width-1-2 uk-width-1-4@m">
					<a class="team__member" href="#contacts">
						<div class="cover__photo uk-background-cover uk-transition-toggle" data-src="https://res.cloudinary.com/biggidroid/image/upload/v1671531067/Razzy_lfpstg.jpg" data-uk-img><span class="cover__link boxshadow icon icon--dots uk-transition-scale-up"></span></div><span class="team__name">Razzy</span> <span class="team__vocation">Artist</span>
					</a>
				</div>
			</div>
		</div>
	</section>

	<section id="news" class="news uk-section uk-scrollspy-inview uk-animation-fade" data-uk-scrollspy="cls:uk-animation-fade; offset-top: 80px; delay: 300">
		<div class="container--min uk-container uk-margin-large-bottom">
			<h2 class="uk-h2">Blog</h2>
		</div>
		<div class="container--special uk-container uk-container-large">
			<div class="slider slider--news uk-position-relative uk-slider uk-slider-container" tabindex="-1" data-uk-slider="finite: true">
				<ul class="uk-slider-items uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l uk-child-width-1-5@xl uk-grid" data-uk-grid="" style="transform: translate3d(0px, 0px, 0px);">
					<?php
					$posts = get_posts();
					//loop
					foreach ($posts as $post) {
					?>
						<li tabindex="-1" class="uk-active">
							<div class="uk-card">
								<div class="uk-card-media-top"><a href="<?php echo esc_url(get_permalink($post->ID)); ?>" class="cover__photo uk-background-cover uk-transition-toggle" data-src="<?php echo esc_url(get_the_post_thumbnail_url($post->ID)); ?>" data-uk-img=""><span class="cover__link boxshadow icon icon--dots uk-transition-scale-up"></span></a>
								</div>
								<div class="uk-card-body">
									<h3 class="news__title"><?php echo esc_html($post->post_title); ?></h3>
									<div class="uk-flex uk-flex-middle uk-flex-between">
										<div class="events__date uk-width-auto"><span class="events__day"><?php echo get_the_date('j', $post->ID); ?></span> <span class="events__month"><?php echo get_the_date('F', $post->ID); ?></span> <span class="events__year"><?php echo get_the_date('Y', $post->ID); ?></span>
										</div><a href="<?php echo esc_url(get_permalink($post->ID)); ?>" class="news__more btn btn--more">Read more<span class="icon icon--dots"></span></a>
									</div>
								</div>
							</div>
						</li>
					<?php
					}
					?>
				</ul>
				<a class="slider__control uk-position-center-left uk-icon uk-slidenav-previous uk-slidenav uk-invisible" href="#" data-uk-slidenav-previous="" data-uk-slider-item="previous" style="left: 5.5px;">
					<svg width="14px" height="24px" viewBox="0 0 14 24" xmlns="http://www.w3.org/2000/svg" data-svg="slidenav-previous">
						<polyline fill="none" stroke="#000" stroke-width="1.4" points="12.775,1 1.225,12 12.775,23 "></polyline>
					</svg>
				</a>
				<a class="slider__control uk-position-center-right uk-icon uk-slidenav-next uk-slidenav" href="#" data-uk-slidenav-next="" data-uk-slider-item="next" style="right: 5.5px;">
					<svg width="14px" height="24px" viewBox="0 0 14 24" xmlns="http://www.w3.org/2000/svg" data-svg="slidenav-next">
						<polyline fill="none" stroke="#000" stroke-width="1.4" points="1.225,23 12.775,12 1.225,1 "></polyline>
					</svg>
				</a>
			</div>
		</div>
	</section>

	<section class="team uk-section uk-overflow-hidden" data-uk-scrollspy="cls:uk-animation-fade; offset-top: 80px; delay: 300">
		<div class="container--min uk-container uk-position-relative">
			<h1 style="text-align: center; margin-bottom: 75px;"> Meet the Team </h1>
			<!-- <h3 class="team__title uk-h3"><span class="team__title_inner">Meet the Team</span></h3> -->
			<div class="team__members uk-flex uk-flex-center" data-uk-grid data-uk-scrollspy="cls:uk-animation-fade; target: .team__member__wrap; delay: 300">
				<div class="team__member__wrap uk-width-1-2 uk-width-1-4@m">
					<a href="#contacts" class="team__member">
						<div class="cover__photo uk-background-cover uk-transition-toggle" data-src="https://res.cloudinary.com/biggidroid/image/upload/v1671566326/image_50435329_afaibi.jpg" data-uk-img><span class="cover__link boxshadow icon icon--dots uk-transition-scale-up"></span></div><span class="team__name">Phonkey Nation</span> <span class="team__vocation">Label Manager
						</span>
					</a>
				</div>
				<div class="team__member__wrap uk-width-1-2 uk-width-1-4@m">
					<a href="#contacts" class="team__member">
						<div class="cover__photo uk-background-cover uk-transition-toggle" data-src="" data-uk-img><span class="cover__link boxshadow icon icon--dots uk-transition-scale-up"></span></div><span class="team__name">Oscar Snuggles</span> <span class="team__vocation">PRO</span>
					</a>
				</div>
				<div class="team__member__wrap uk-width-1-2 uk-width-1-4@m">
					<a href="#contacts" class="team__member">
						<div class="cover__photo uk-background-cover uk-transition-toggle" data-src="<?php echo SpartazMusic::assetsUrl(); ?>img/team/producer.jpg" data-uk-img><span class="cover__link boxshadow icon icon--dots uk-transition-scale-up"></span></div><span class="team__name">Deano</span> <span class="team__vocation">OFFICAL IN-HOUSE PRODUCER</span>
					</a>
				</div>
			</div>
		</div>
	</section>

	<section id="contacts" class="contacts uk-section" data-uk-scrollspy="cls:uk-animation-fade; offset-top: 80px; delay: 300">
		<div class="container--min uk-container">
			<h2 class="uk-h2">Contacts</h2>
			<div data-uk-grid>
				<div class="uk-width-1-3@m">
					<div data-uk-grid>
						<p class="contacts__info uk-width-1-1 uk-width-1-2@s uk-width-1-1@m"><strong class="contacts__subtitle">Call us:</strong>
							<br><a href="tel:+999999999999">+234-813-5632-327</a>
						</p>
						<p class="contacts__info uk-width-1-1 uk-width-1-2@s uk-width-1-1@m"><strong class="contacts__subtitle">E-mail:</strong>
							<br><a href="mailto:info@spartazofficial.com.ng">info@spartazofficial.com.ng</a>
						</p>
					</div>
				</div>
				<div class="uk-width-2-3@m">
					<div class="uk-card bg-dark--1">
						<div class="contacts__form uk-card-body">
							<h3 class="uk-h3">Get in touch</h3>
							<form id="contactmessage" data-uk-grid>
								<input type="hidden" name="action" value="spartaz_contact">
								<div class="uk-width-1-2@s">
									<input name="name" class="uk-input" type="text" required placeholder="Name">
								</div>
								<div class="uk-width-1-2@s">
									<input name="email" class="uk-input" type="email" required placeholder="E-mail*" data-require="true">
								</div>
								<div class="uk-width-1-1">
									<textarea name="message" class="uk-textarea" rows="5" required placeholder="Message*" data-require="true"></textarea>
								</div>
								<div class="uk-width-1-1 uk-text-center">
									<p class="form__respond js-respond"></p>
									<input class="btn" type="submit" value="Send">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="instagram" class="instagram" data-uk-scrollspy="cls:uk-animation-fade; offset-top: 80px; delay: 300">
		<div class="container--min uk-container">
			<h2 class="uk-h3 c-dark--4 uk-flex uk-flex-middle uk-flex-between uk-flex-wrap uk-margin-bottom">Follow us <span>@spartaz_dtd</span></h2>
		</div>
		<div class="uk-container uk-container-large">
			<div id="instafeed" class="grid--wide uk-grid-small uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-expand@m" data-uk-grid></div>
		</div>
	</section>
	<footer class="footer bg-dark--1 uk-section uk-section-small">
		<div class="container--min uk-container">
			<div class="uk-flex uk-flex-between uk-child-width-auto" data-uk-grid>
				<ul class="nav nav--footer js-scrollspy-nav uk-flex uk-flex-wrap">
					<li><a href="<?php echo esc_url(site_url('blog')); ?>">Blog</a></li>
					<li><a href="#music">Music</a></li>
					<li><a href="#contacts">Contacts</a></li>
				</ul>
			</div>
			<div class="social social--footer">
				<ul class="social__list uk-list uk-align-center">
					<li><a href=""><span class="fab fa-facebook-f"></span></a></li>
					<li><a href="#"><span class="fab fa-youtube"></span></a></li>
					<li><a href="#"><span class="fab fa-instagram"></span></a></li>
					<li><a href="#"><span class="fab fa-twitter"></span></a></li>
				</ul>
			</div>
			<p class="footer__copyrights">&copy; <?php echo esc_html(date("Y")); ?> Spartaz Official. | Designed by <a href="https://adeleyeayodeji.com">Adeleye Ayodeji</a></p>
		</div>
		<a href="#" class="footer__totop" data-uk-totop data-uk-scroll></a>
	</footer>
	<script src="<?php echo SpartazMusic::assetsUrl(); ?>js/libs.min.js"></script>
	<script src="<?php echo SpartazMusic::assetsUrl(); ?>js/scripts.js"></script>
	<script type="text/javascript">
		var Tawk_API = Tawk_API || {},
			Tawk_LoadStart = new Date();
		(function() {
			var s1 = document.createElement("script"),
				s0 = document.getElementsByTagName("script")[0];
			s1.async = true;
			s1.src = 'https://embed.tawk.to/5c7caf96a726ff2eea5a6a9d/default';
			s1.charset = 'UTF-8';
			s1.setAttribute('crossorigin', '*');
			s0.parentNode.insertBefore(s1, s0);
		})();
	</script>
	<script>
		$(document).ready(function() {
			$('#contactmessage').submit(function(e) {
				e.preventDefault();
				$.ajax({
					type: "POST",
					url: "<?php echo esc_url(admin_url('admin-ajax.php')); ?>",
					data: $(this).serialize(),
					beforeSend: () => {
						//disable all input fields
						$('#contactmessage').find('input, textarea').attr('disabled', true);
						$('#contactmessage').find('input[type="submit"]').val('Sending...');
					},
					success: function(response) {
						//if code is 200
						if (response.code == 200) {
							//enable all input fields
							$('#contactmessage').find('input, textarea').attr('disabled', false);
							$('#contactmessage').find('input[type="submit"]').val('Send');
							//show success message
							$('.js-respond').html(response.message).addClass('uk-text-success');
							//reset form
							$('#contactmessage').trigger('reset');
						} else {
							//enable all input fields
							$('#contactmessage').find('input, textarea').attr('disabled', false);
							$('#contactmessage').find('input[type="submit"]').val('Send');
							//show error message
							$('.js-respond').html(response.message).addClass('uk-text-danger');
						}
					}
				});
			});
		});
	</script>
</body>

</html>
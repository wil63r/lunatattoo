<?php include "App/app.php"; ?>
<!doctype html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="<?=trans('home.meta.description')?>">
	<meta name="keywords" content="<?=trans('home.meta.keyword')?>">
	<meta name="google-site-verification" content="U5PIk3QJzDAVR76V2Ybk4l_aEUGogSOKSg-64U9Gfwk" />
	<title><?=trans('home.title')?></title>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

	<link href="static/plugin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="static/plugin/et-line/style.css" rel="stylesheet">
	<link href="static/plugin/owl-carousel/css/owl.carousel.min.css" rel="stylesheet">
	<link href="static/plugin/magnific/magnific-popup.css" rel="stylesheet">

	<link href="static/css/header.css" rel="stylesheet">
	<link href="static/css/style.css" rel="stylesheet">
	<link href="static/css/color/default.css" rel="stylesheet" id="color_theme">
	<!-- <link href="https://fonts.googleapis.com/css?family=Merienda+One|Roboto:400,700" rel="stylesheet"> -->

	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107502397-2"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-107502397-2');
	</script>

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="73">

	<header class="header header-black header-height">
		<div class="fixed-header-bar">
			<div class="container">
				<nav class="navbar navbar-expand-lg menu-hover-text">
					<a class="navbar-brand" href="index.html">
						<img src="static/img/logo-white.png" title="" alt="">
					</a>

					<button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#header-01" aria-controls="header-01" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
					<div id="header-01" class="collapse navbar-collapse top-menu">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item">
								<a class="nav-link" href="#home"><?=trans('home.navigation.home')?></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#about"><?=trans('home.navigation.about')?></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#services"><?=trans('home.navigation.services')?></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#team"><?=trans('home.navigation.team')?></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#portfolio"><?=trans('home.navigation.gallery')?></a>
							</li>
							<!-- <li class="nav-item">
								<a class="nav-link" href="#post"><?=trans('home.navigation.post')?></a>
							</li> -->
							<li class="nav-item">
								<a class="nav-link" href="#contact"><?=trans('home.navigation.contact')?></a>
							</li>
						</ul>
						<?php partial('langSelectorTemplate') ?>
					</div>
				</nav>
			</div>
			
		</div>
	</header>

	<main>

		<section id="home" class="home-banner bg-cover bg-no-repeat bg-center-left bg-fixed" style="background-image: url(static/img/banner-6.jpg);">
			<div class="container">
				<div class="row justify-content-end align-items-center min-h-100vh text-left">
					<div class="col-12 col-lg-7 p-100px-b p-50px-t">
						<div class="color-theme font-30 text-uppercase font-w-700 m-20px-b"><?=trans('home.home.intro')?></div>
						<div class="font-alt font-75 md-font-45 sm-font-35 color-white font-w-900 text-uppercase letter-spacing-3 m-30px-b"><?=trans('home.home.title')?></div>
						<span class="w-80px h-2px theme-bg display-table"></span>
					</div>
				</div>
			</div>
		</section>

		<section id="about" class="section black-bg">
			<div class="container">
				<div class="row justify-content-center align-items-center">
					<div class="col-12 col-md-7 got-to">
						<h2 class="font-alt color-white m-0px m-15px-b"><?=trans('home.about.title')?></h2>
						<span class="w-80px h-2px theme-bg display-table"></span>
						<p class="font-16 m-25px-t m-30px-b"><?=trans('home.about.text1')?></p>
						<p class="font-16 m-25px-t m-30px-b"><?=trans('home.about.text2')?></p>
						<p class="font-16 m-25px-t m-30px-b"><?=trans('home.about.text3')?></p>
						<a href="#contact" class="m-btn m-btn-t-white"><?=trans('home.about.btnmap')?></a><a href="#team" class="m-btn m-btn-t-white"><?=trans('home.about.btnteam')?></a>
					</div>
					<div class="col-12 col-md-5">
						<img src="static/img/escalera-entrada.jpg" title="escaleras a LunaTattoo" alt="escaleras a LunaTattoo" />
					</div>
				</div>
			</div>
		</section>

		<section id="services" class="section light-gray-bg">
			<div class="container">
				<div class="row justify-content-center m-55px-b  md-m-35px-b sm-m-25px-b">
					<div class="col-12 col-md-10 col-lg-8 text-center">
						<h2 class="font-alt color-extra-dark-gray m-0px m-15px-b"><?=trans('home.services.title')?></h2>
						<p class="font-17 m-0px m-20px-t sm-font-14 color-extra-dark-gray"><?=trans('home.services.intro')?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-md-6 col-lg-4">
						<div class="feature-box p-30px white-bg m-15px-tb box-shadow hover-shadow">
							<i class="icon-catalog color-theme icon-xxl"></i>
							<div class="feature-content">
								<div class="font-alt font-16 font-w-600 letter-spacing-1 m-15px-b m-25px-t color-extra-dark-gray"><?=trans('home.services.design.title')?></div>
								<p><?=trans('home.services.design.description')?></p>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4">
						<div class="feature-box p-30px white-bg m-15px-tb box-shadow hover-shadow">
							<i class="icon-hand color-theme icon-xxl"></i>
							<div class="feature-content">
								<div class="font-alt font-16 font-w-600 letter-spacing-1 m-15px-b m-25px-t color-extra-dark-gray"><?=trans('home.services.covers.title')?></div>
								<p><?=trans('home.services.covers.description')?></p>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4">
						<div class="feature-box p-30px white-bg m-15px-tb box-shadow hover-shadow">
							<i class="icon-shoulder color-theme icon-xxl"></i>
							<div class="feature-content">
								<div class="font-alt font-16 font-w-600 letter-spacing-1 m-15px-b m-25px-t color-extra-dark-gray"><?=trans('home.services.retouch.title')?></div>
								<p><?=trans('home.services.retouch.description')?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="section black-bg" id="team">
			<div class="container">
				<div class="row justify-content-center m-65px-b md-m-40px-b sm-m-30px-b">
					<div class="col-12 col-md-10 col-lg-8 text-center">
						<h2 class="font-alt color-white m-0px m-15px-b"><?=trans('home.team.title')?></h2>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-12 col-sm-6 col-md-6 col-lg-4 md-m-15px-tb">
						<div class="our-team-02 white-bg box-shadow hover-shadow">
							<div class="team-img p-10px">
								<img src="static/img/team-gray2.jpg" title="Mrig" alt="Mrig">
								<div class="overlay dark-bg"></div>
								<div class="hover p-10px text-center">
									<ul class="social-icons-01 social-icons-small m-20px-b">
										<li><a class="facebook" href="https://www.facebook.com/yunior.lunalorente" target="_blank"><i class="icon-facebook"></i></a></li>
										<li><a class="instagram" href="https://www.instagram.com/lorenteluna/" target="_blank"><i class="icon-instagram"></i></a></li>
									</ul>
									<p class="m-0px color-white">
										<?=trans('home.team.social')?>
									</p>
								</div>
							</div>
							<div class="p-15px text-center white-bg">
								<div class="color-extra-dark-gray font-w-700 text-uppercase">Yunior Lorente Luna</div>
								<span class="font-14"><?=trans('home.team.job')?></span>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-md-6 col-lg-4 md-m-15px-tb">
						<div class="our-team-02 white-bg box-shadow hover-shadow">
							<div class="team-img p-10px">
								<img src="static/img/team-gray4.jpg" title="Mrig" alt="Mrig">
								<div class="overlay dark-bg"></div>
								<div class="hover p-10px text-center">
									<ul class="social-icons-01 social-icons-small m-20px-b">
										<li><a class="facebook" href="https://www.facebook.com/baileyjrm" target="_blank"><i class="icon-facebook"></i></a></li>
										<li><a class="instagram" href="https://www.instagram.com/baileyramirezmadrigal/" target="_blank"><i class="icon-instagram"></i></a></li>
									</ul>
									<p class="m-0px color-white">
										<?=trans('home.team.social')?>
									</p>
								</div>
							</div>
							<div class="p-15px text-center white-bg">
								<div class="color-extra-dark-gray font-w-700 text-uppercase">Bailey Ramirez Madrigal</div>
								<span class="font-14"><?=trans('home.team.job')?></span>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>

		<section id="portfolio" class="section dark-bg">
			<div class="container-fluid">
				<div class="row justify-content-center m-60px-b sm-m-10px-b">
					<div class="col-12 col-md-10 col-lg-8 text-center">
						<h2 class="font-alt color-white m-0px m-20px-b"><?=trans('home.gallery.title')?></h2>
						<span class="w-80px h-2px theme-bg display-table m-auto"></span>
					</div>
				</div>

				<div class="portfolio-content">
					<ul class="portfolio-cols portfolio-cols-3" id="instafeed">
						
					</ul>
				</div>
			</div>
		</section>
		
		<div id="contact"></div>
		<div id="map"></div>
		<section class="section dark-bg">
			<div class="container"> 
				<div class="row justify-content-center">
					<div class="col-12 col-md-6 col-lg-4 md-m-30px-b">
						<div class="m-50px-b">
							<h5 class="color-white font-alt m-0px p-10px-b"><?=trans('home.contact.title')?></h5>
							<span class="display-block theme-bg w-50px h-2px"></span>
						</div>
						<div class="m-15px-b">
							<div class="font-alt font-18 m-5px-b m-15px-t color-white"><?=trans('home.contact.adress')?></div>
							<p class="font-16 m-0px">Empedrado #217 Apto. 8<br>e/ Cuba y San Ignacio<br>La Habana, Cuba</p>
						</div>
						<div class="m-15px-b">
							<div class="font-alt font-18 m-5px-b m-15px-t color-white"><?=trans('home.contact.telf')?></div>
							<p class="font-16 m-0px">+53 5 511 0363</p>
							<p class="font-16 m-0px">+53 5 511 2704</p>
						</div>
						<div class="m-15px-b">
							<div class="font-alt font-18 m-5px-b m-15px-t color-white">E-mail</div>
							<p class="font-16 m-0px">studiomoontattoo@gmail.com</p>
						</div>
						<div class="m-15px-b">
							<div class="font-alt font-18 m-5px-b m-15px-t color-white"><?=trans('home.contact.social')?></div>
							<ul class="social-icons social-icons-small m-40px-b sm-m-20px-b">
								<li><a class="facebook" href="http://facebook.com/studiomoontattoo" target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a class="instagram" href="http://instagram.com/studiomoontattoo" target="_blank"><i class="icon-instagram"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-8">
						<div class="m-50px-b">
							<h5 class="color-white font-alt m-0px p-10px-b"><?=trans('home.contact.form.title')?></h5>
							<p class="font-17 m-0px"><?=trans('home.contact.form.text')?></p>
						</div>
						<form method="POST" action="https://formspree.io/studiomoontattoo@gmail.com">
							<input name="name" placeholder="<?=trans('home.contact.form.name')?>" class="border-form input-medium" type="text">
							<input name="name" placeholder="E-mail *" class="border-form input-medium" type="email">
							<textarea name="name" placeholder="<?=trans('home.contact.form.msg')?>" rows="6" class="border-form textarea-medium"></textarea>
							<input type="hidden" name="_next" value="http://tattoosincuba.com/thanks.html" />
							<button type="submit" class="m-btn m-btn-t-white text-uppercase"><?=trans('home.contact.form.btn')?> <i class="icon-paper-plane"></i></button>
						</form>
					</div>
				</div>
			</div>
		</section>

	</main>

	<footer>
		<div class="black-bg section">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center">
						<p class="m-0px color-medium-gray letter-spacing-1 font-14">© Copyright Luna Tattoo.</p>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<script src="static/js/jquery-3.2.1.min.js"></script>
	<script src="static/js/jquery-migrate-3.0.0.min.js"></script>
	<script src="static/plugin/appear/jquery.appear.js"></script>
	<script src="static/plugin/bootstrap/js/popper.min.js"></script>
	<script src="static/plugin/bootstrap/js/bootstrap.js"></script>
	<script src="static/plugin/instafeed.js"></script>
	<script>
		function initMap() {
			var uluru = {lat: 23.140724, lng: -82.352644};
			var map = new google.maps.Map(document.getElementById('map'), {
				zoom: 20,
				center: uluru
			});
		}
	</script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgv8hh6IslVorrAu3vIEnsaVXfMwShmkU&callback=initMap"></script>
	<script src="static/js/custom.js"></script>

</body>
</html>
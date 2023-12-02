<?php 
session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet">

	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/ionicons.min.css">
	<link rel="stylesheet" href="css/plyr.css">
	<link rel="stylesheet" href="css/photoswipe.css">
	<link rel="stylesheet" href="css/default-skin.css">
	<link rel="stylesheet" href="css/main.css">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="icon/favicon-32x32.jpg" sizes="32x32">
	<link rel="apple-touch-icon" href="icon/favicon-32x32.png">
	<link rel="apple-touch-icon" sizes="72x72" href="icon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="icon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="icon/apple-touch-icon-144x144.png">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>The borojo movie</title>

</head>
<body class="body">
	
	<!-- header -->
	<header class="header">
		<div class="header__wrap">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__content">
							<!-- header logo -->
							<a href="index2.php" class="header__logo">
								<img src="img/logo.png" alt="">
							</a>
							<!-- end header logo -->

							<!-- header nav -->
							<ul class="header__nav">
								<!-- seccion -->
								<li class="header__nav-item">
									<a href="index2.php" class="header__nav-link">Inicio</a>
								</li>
								<!-- end seccion -->

								<!-- seccion -->
								<li class="header__nav-item">
									<a href="catalog1.php" class="header__nav-link">Catalogo</a>
								</li>
								<!-- end seccion -->

								<!-- seccion -->
								<li class="header__nav-item">
									<a href="faq.php" class="header__nav-link">Ayuda</a>
								</li>
								<!-- end seccion -->
							</ul>
							<!-- end header nav -->

							<!-- header auth -->
							<div class="header__auth">
								<button class="header__search-btn" type="button">
									<i class="icon ion-ios-search"></i>
								</button>

								<a href="../backend/logout.php" class="header__sign-in">
									<i class="icon ion-ios-log-in"></i>
									<span> <?php if (isset($_SESSION['nombreusuario'])) {
										
   											 echo '<p> ' . $_SESSION['nombreusuario'] . '</p>';
											}else{     header("Location:../frontend/pages/login.php");}?></span>
								</a>
							</div>
							<!-- end header auth -->

							<!-- header menu btn -->
							<button class="header__btn" type="button">
								<span></span>
								<span></span>
								<span></span>
							</button>
							<!-- end header menu btn -->
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- header search -->
		<form action="#" class="header__search">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__search-content">
							<input type="text" placeholder="Search for a movie, TV Series that you are looking for">

							<button type="button">buscar</button>
						</div>
					</div>
				</div>
			</div>
		</form>
		<!-- end header search -->
	</header>
	<!-- end header -->

	<!-- page title -->
	<section class="section section--first section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section__wrap">
						<!-- section title -->
						<h2 class="section__title">FAQ</h2>
						<!-- end section title -->

						<!-- breadcrumb -->
						<ul class="breadcrumb">
							<li class="breadcrumb__item"><a href="#">Home</a></li>
							<li class="breadcrumb__item breadcrumb__item--active">FAQ</li>
						</ul>
						<!-- end breadcrumb -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end page title -->

	<!-- faq -->
	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6">
					<div class="faq">
						<h3 class="faq__title">¿Por qué no se carga un vídeo?</h3>
						<p class="faq__text">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
						<p class="faq__text">Varias versiones han evolucionado a lo largo de los años, a veces por accidente, a veces a propósito (humor inyectado y cosas por el estilo).</p>
					</div>

					<div class="faq">
						<h3 class="faq__title">¿Por qué no hay una versión HD de este video?</h3>
						<p class="faq__text">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
					</div>

					<div class="faq">
						<h3 class="faq__title">¿Por qué se distorsiona el sonido?</h3>
						<p class="faq__text">Varias versiones han evolucionado a lo largo de los años, a veces por accidente, a veces a propósito (humor inyectado y cosas por el estilo).</p>
					</div>

					<div class="faq">
						<h3 class="faq__title">¿Por qué el vídeo tartamudea, se almacena en el búfer o se detiene aleatoriamente?</h3>
						<p class="faq__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
					</div>

					<div class="faq">
						<h3 class="faq__title">Cuando cambio la calidad de un vídeo, no pasa nada.</h3>
						<p class="faq__text">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
					</div>
				</div>

				<div class="col-12 col-md-6">
					<div class="faq">
						<h3 class="faq__title">¿Por qué el vídeo no empieza por el principio?</h3>
						<p class="faq__text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non dignissimos consequuntur nemo quos cumque, ipsa officia? Assumenda esse minus consequatur aliquid pariatur quo? Veniam facere iure velit voluptates. Labore, odio?</p>
					</div>

					<div class="faq">
						<h3 class="faq__title">¿Cómo hago para que el vídeo pase a pantalla completa?</h3>
						<p class="faq__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus ipsam impedit similique quam aut, tempora obcaecati voluptatem sint temporibus, fugit earum fugiat saepe pariatur aliquam maxime deserunt minus? Culpa, possimus.</p>
					</div>

					<div class="faq">
						<h3 class="faq__title">¿Qué navegadores son compatibles?</h3>
						<p class="faq__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur voluptates voluptas sequi? Eos, iusto. Possimus earum similique quibusdam voluptas dolorum inventore obcaecati doloribus officiis consequuntur rem nam, blanditiis enim nobis?</p>
					</div>

					<div class="faq">
						<h3 class="faq__title">¿Cómo manejan mi privacidad?</h3>
						<p class="faq__text">Varias versiones han evolucionado a lo largo de los años, a veces por accidente, a veces a propósito (humor inyectado y cosas por el estilo).</p>
					</div>

					<div class="faq">
						<h3 class="faq__title">¿Cómo puedo contactarte?</h3>
						<p class="faq__text">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end faq -->

	<!-- footer -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<!-- footer list -->
				<div class="col-12 col-md-3">
					<h6 class="footer__title">Descarga nuestra aplicación</h6>
					<ul class="footer__app">
						<li><a href="#"><img src="img/Download_on_the_App_Store_Badge.svg" alt=""></a></li>
						<li><a href="#"><img src="img/google-play-badge.png" alt=""></a></li>
					</ul>
				</div>
				<!-- end footer list -->

				<!-- footer list -->
				<div class="col-6 col-sm-4 col-md-3">
					<h6 class="footer__title">Recursos</h6>
					<ul class="footer__list">
						<li><a href="#">Sobre nosotros</a></li>
						<li><a href="#">Ayuda</a></li>
					</ul>
				</div>
				<!-- end footer list -->

				<!-- footer list -->
				<div class="col-6 col-sm-4 col-md-3">
					<h6 class="footer__title">Legal</h6>
					<ul class="footer__list">
						<li><a href="#">Condiciones de uso</a></li>
						<li><a href="#">política de privacidad</a></li>
						<li><a href="#">Seguridad</a></li>
					</ul>
				</div>
				<!-- end footer list -->

				<!-- footer list -->
				<div class="col-12 col-sm-4 col-md-3">
					<h6 class="footer__title">Contactanos</h6>
					<ul class="footer__list">
						<li><a href="tel:+18002345678">+57 3114002029</a></li>
						<li><a href="mailto:support@moviego.com">support@flixgo.com</a></li>
					</ul>
					<ul class="footer__social">
						<li class="facebook"><a href="#"><i class="icon ion-logo-facebook"></i></a></li>
						<li class="instagram"><a href="#"><i class="icon ion-logo-instagram"></i></a></li>
						<li class="twitter"><a href="#"><i class="icon ion-logo-twitter"></i></a></li>
						<li class="vk"><a href="#"><i class="icon ion-logo-vk"></i></a></li>
					</ul>
				</div>
				<!-- end footer list -->

				<!-- footer copyright -->
				<div class="col-12">
					<div class="footer__copyright">
						<ul>
							<li><a href="#">Condiciones de uso</a></li>
							<li><a href="#">Politica de privaciadad</a></li>
						</ul>
					</div>
				</div>
				<!-- end footer copyright -->
			</div>
		</div>
	</footer>
	<!-- end footer -->

	<!-- JS -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.mousewheel.min.js"></script>
	<script src="js/jquery.mCustomScrollbar.min.js"></script>
	<script src="js/wNumb.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/plyr.min.js"></script>
	<script src="js/jquery.morelines.min.js"></script>
	<script src="js/photoswipe.min.js"></script>
	<script src="js/photoswipe-ui-default.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>
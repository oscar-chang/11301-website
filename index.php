<?php include_once "api/base.php"; ?>

<?php
$header = $Header->find(['sh' => 1]);
$menu = $Menu->all(['sh' => 1]);
$about = $About->find(['sh' => 1]);

$service = $Service->find(['sh' => 1]);
$service_item = $Service_item->all(['sh' => 1]);

$gallery = $Gallery->find(['sh' => 1]);
$gallery_item = $Gallery_item->all(['sh' => 1]);

$cooperation = $Cooperation->find(['sh' => 1]);

$contact = $Contact->find(['sh' => 1]);
$contact_item = $Contact_item->find(['sh' => 1]);

$footer = $Footer->find(['sh' => 1]);
?>

<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <!--<![endif]-->
<html xmlns:og='http://ogp.me/ns#'>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="description" content="Redefine Happiness In Your Life">
	<meta name="author" content="Mr. Opengate">
	<link rel="Shortcut Icon" type="image/x-icon" href="img/icon/top_icon.png" />
	<title>活動、婚禮、抓週、業配、產品、空間、寵物、人像 | 奧攝影像</title>
	<meta property="og:title" content="NTUBDC 台大氣球社">
	</meta>
	<meta property="og:image" content="https://picsum.photos/1200/630/?random=50">
	</meta>
	<meta property="og:description" content="Redefine Happiness In Your Life">
	</meta>

	<!-- Bootstrap JS -->
	<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

	<!-- Bootstrap CSS -->
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
	<!-- <link href="css/bootstrap.css" rel="stylesheet"> -->

	<!-- Custom Google Web Font -->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>

	<!-- Custom CSS-->
	<link href="css/general.css?t=1" rel="stylesheet">

	<!-- Owl-Carousel -->
	<link href="css/custom.css" rel="stylesheet">
	<link href="css/owl.carousel.css" rel="stylesheet">
	<link href="css/owl.theme.css" rel="stylesheet">
	<link href="css/style.css?t=123" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">

	<!-- Magnific Popup core CSS file -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/site.css">

	<!-- Modernizr /-->
	<script src="js/modernizr-2.8.3.min.js"></script>

	<style>
		.intro-header {
			background: url(./images/<?= $header['img']; ?>) no-repeat center center;
			background-size: cover;
		}

		.banner {
			background: url(./images/<?= $cooperation['img']; ?>) no-repeat center center;
			background-size: cover;
		}

		/* #navbar {
			display: none;
		} */
	</style>
</head>

<body id="home">
	<!-- Preloader -->
	<div id="preloader">
		<div id="status"></div>
	</div>
	<!-- FullScreen -->
	<div class="intro-header">
		<div class="col-xs-12 text-center abcen1">
			<h1 class="h2_home wow fadeIn" data-wow-delay="0.4s"><?= $header['title'] ?></h1>
			<h3 class="h3_home wow fadeIn" data-wow-delay="0.75s"><?= $header['subtitle'] ?></h3>
		</div>
	</div>

	<nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto navbar-nav me-auto mb-2 mb-lg-0">

					<?php foreach ($menu as $key => $value) { ?>
						<li class="nav-item"><a class="nav-link" href="#<?= $value['en_title'] ?>">
								<div class="ch-item"><?= $value['title'] ?></div>
								<div class="en-item"><?= $value['en_title'] ?></div>
							</a></li>
					<?php } ?>

				</ul>
			</div>
		</div>
	</nav>
	<div data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="0" class="scrollspy-example" tabindex="0">
		<!-- about -->
		<div id="about" class="content-section-b">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 wow fadeInLeftBig">
						<div id="" class="">
							<a href="./images/<?= $about['img']; ?>" class="image-link">
								<div class="item">
									<img class="img-responsive img-rounded" src="./images/<?= $about['img']; ?>" alt="About me">
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-6 wow fadeInRightBig" data-animation-delay="200">
						<h2 class="section-heading"><?= $about['title'] ?></h2>
						<p class="lead">
							<?= $about['description'] ?>
						</p>
					</div>
				</div>
			</div>
		</div>

		<!-- service -->
		<div id="service" class="content-section-a">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center wrap_title">
						<h2><?= $service['title'] ?></h2>
						<p class="lead-text mx-2" style="margin-top:0"><?= $service['description'] ?></p>
					</div>
				</div>

				<div class="row tworow">
					<?php foreach ($service_item as $key => $value) { ?>
						<div class="col-sm-6  block wow bounceIn">
							<div class="row row-item">
								<div class="col-md-4 text-center s-icon">
									<img class="rotate" src="./images/<?= $value['img']; ?>" alt="Service Item" title="<?= $value['title'] ?>">
								</div>
								<div class="col-md-8 box-ct">
									<h3> <?= $value['title'] ?> </h3>
									<p> <?= $value['description'] ?> </p>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>

		<!-- gallery -->
		<div id="gallery" class="content-section-b">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center wrap_title">
						<h2><?= $gallery['title'] ?></h2>
						<p class="lead" style="margin-top:0"><?= $gallery['description'] ?></p>
					</div>
				</div>
				<div class="row wow fadeInDown">
					<div id="owl-demo" class="owl-carousel">

						<?php foreach ($gallery_item as $key => $value) { ?>
							<a href="./images/<?= $value['img'] ?>" class="image-link">
								<div class="item">
									<img class="img-responsive img-rounded" src="./images/<?= $value['img'] ?>" alt="Owl Image">
								</div>
							</a>
						<?php } ?>

					</div>
				</div>
			</div>
		</div>

		<!-- cooperation -->
		<div id="cooperation" class="banner">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center wrap_title">
						<h2><?= $cooperation['title'] ?></h2>
						<p class="lead" style="margin-top:0"><?= $cooperation['description'] ?></p>
					</div>
				</div>
			</div>
		</div>

		<!-- contact -->
		<div id="contact" class="content-section-a">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center wrap_title">
						<h2><?= $contact['title'] ?></h2>
						<p class="lead" style="margin-top:0"><?= $contact['description'] ?></p>
					</div>
					<div class="col-md-6 col-md-offset-3 fadeInDown text-center">
						<img class="img-responsive " src="./images/<?= $contact['img'] ?>" alt="">
					</div><!-- /.col-lg-4 -->
					<div class="col-md-6 col-md-offset-3 fadeInDown text-center">
						<div class="sub-title lead3 mt-3">Line: <a href="https://line.me/ti/p/xk0sDmKd5D"><?= $contact_item['line'] ?></a></div>
						<div class="sub-title lead3 mt-3">Mobile: <a href="tel:0919413308"><?= $contact_item['tel'] ?></a></div>
						<div class="sub-title lead3 mt-3">FB: <a href="<?= $contact_item['facebook'] ?>" target="_blank">O.C Photography</a></div>
						<div class="sub-title lead3 mt-3">IG: <a href="https://www.instagram.com/<?= $contact_item['instagram'] ?>/" target="_blank"><?= $contact_item['instagram'] ?></a></div>
					</div>
				</div>
			</div>
		</div>

		<!-- footer -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="footer-banner">
							<h3 class="footer-title"></h3>
							<?= $footer['footer'] ?>
						</div>
					</div>
				</div>
			</div>
		</footer>

		<!-- Top Btn-->
		<div class="scroll-top" style="display:none;">
			<img class="top-img" src="./img/scroll-top.png" title="Top">
		</div>

		<!-- JavaScript -->
		<script src="js/jquery-1.10.2.js"></script>
		<!-- <script src="js/bootstrap.js"></script>-->
		<script src="js/owl.carousel.js"></script>
		<script src="js/script.js?t=1"></script>
		<!-- StikyMenu -->
		<!-- <script src="js/stickUp.min.js"></script> -->

		<script type="text/javascript">
			jQuery(function($) {
				$(document).ready(function() {
					// $('.navbar-default').stickUp();
				});
			});
		</script>

		<!-- Smoothscroll -->
		<script type="text/javascript" src="js/jquery.corner.js"></script>
		<script src="js/wow.min.js"></script>
		<script>
			new WOW().init();
		</script>
		<script src="js/classie.js"></script>
		<script src="js/uiMorphingButton_inflow.js"></script>
		<!-- Magnific Popup core JS file -->
		<script src="js/jquery.magnific-popup.js"></script>
</body>

</html>
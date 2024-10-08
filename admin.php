﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include_once "api/base.php"; ?>
<?php
	// $menu = $Menu->all();
	$header = $Header->find(['sh' => 1]);
	$footer = $Footer->find(['sh' => 1]);
	// $do = $_GET['do'] ?? 'menu';
	// $menu_result = $Menu->count(['en_title' => $do]);
?>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>活動、婚禮、抓週、業配、產品、空間、寵物、人像 | 奧攝影像</title>
	<link href="./css/bootstrap.css" rel="stylesheet" type="text/css">
	<!-- Custom CSS-->
	<!-- <link href="css/general.css" rel="stylesheet"> -->

	<!-- Owl-Carousel -->
	<link href="css/custom.css" rel="stylesheet">
	<link href="css/owl.carousel.css" rel="stylesheet">
	<link href="css/owl.theme.css" rel="stylesheet">
	<link href="css/style.css?t=1" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">

	<!-- Magnific Popup core CSS file -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/site.css">
	<link href="./css/css.css" rel="stylesheet" type="text/css">
	<script src="./js/jquery-3.4.1.min.js"></script>
	<script src="./js/js.js"></script>
	<style>
		.intro-header {
			height: 35vh;
			/*100%;*/
			/* Full PAge */
			padding-top: 50px;
			/* If you're making other pages, make sure there is 50px of padding to make sure the navbar doesn't overlap content! */
			padding-bottom: 50px;
			color: #f8f8f8;
			text-align: center;
			background: url(./images/<?= $header['img']; ?>) no-repeat center center;
			background-size: cover;
		}

		footer {
			background-color: #34495e;
			color: #bac1c8;
			font-size: 15px;
			padding: 0;
			position: absolute;
			bottom: 0;
			width: 100%;
		}

		form {
			margin: 10vh;
		}
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
			<h1 class="h2_home wow fadeIn" data-wow-delay="0.4s"><?= $header['title']?></h1>
			<h3 class="h3_home wow fadeIn" data-wow-delay="0.75s"><?= $header['subtitle']?></h3>
		</div>
	</div>
	<div id="login">
		<?php include_once "./api/base.php";
		if (empty($_SESSION['login'])) {
			/* 尚未登入 */
		?>
			<form method="post" action="api/login.php" style="background-color: white;padding:0;">
				<p class="t t_admin">管理員登入區</p>
				<p class="cent t_acc">帳號 ： <input style="width:auto;" name="acc" autofocus="" type="text"></p>
				<p class="cent t_pwd">密碼 ： <input style="width:auto;" name="pw" type="password"></p><br>
				<p class="cent"><input class="btn btn-dark" value="送出" type="submit"><input class="btn btn-dark" type="reset" value="清除"></p>
			</form>
		<?php
		} else {
			/* 登入成功 */
			to("admin.php");
			exit();
		}
		?>
	</div>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="footer-banner">
						<h3 class="footer-title"></h3>
						<?php
							echo $Footer->find(1)['footer'];
						?>
						&nbsp;&nbsp;
						<a class="link-web" title="前往<?= $header['title']; ?>官網" href="./">
							前往官網
						</a>
					</div>
				</div>
			</div>
		</div>
	</footer>

</body>
</html>
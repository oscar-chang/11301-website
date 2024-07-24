<?php
// ob_start();
session_start();
// ob_end_flush();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0068)?do=admin&redo=title -->
<html xmlns="http://www.w3.org/1999/xhtml">

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
			height: 100vh;
			/*100%;*/
			/* Full PAge */
			padding-top: 50px;
			/* If you're making other pages, make sure there is 50px of padding to make sure the navbar doesn't overlap content! */
			padding-bottom: 50px;
			color: #f8f8f8;
			background: url(https://picsum.photos/2010/976/?random=55) no-repeat center center;
			background-size: cover;
			text-align: center;
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
			<h1 class="h2_home wow fadeIn" data-wow-delay="0.4s">O.C Photography</h1>
			<h3 class="h3_home wow fadeIn" data-wow-delay="0.75s">Capture the landscape of the soul.</h3>
			<ul class="list-inline intro-social-buttons">
				<!-- <li><a href="https://www.facebook.com/%E5%8F%B0%E5%A4%A7%E6%B0%A3%E7%90%83%E7%A4%BENTUBDC-423960331057203/" class="btn  btn-lg mybutton_cyano wow fadeIn" data-wow-delay="0.9s"><span class="network-name">加入我們!</span></a> -->
				</li>
				<!---<li id="download" ><a href="https://www.facebook.com/%E5%8F%B0%E5%A4%A7%E6%B0%A3%E7%90%83%E7%A4%BENTUBDC-423960331057203/" class="btn  btn-lg mybutton_standard wow swing wow fadeIn" data-wow-delay="1.2s"><span class="network-name">粉絲專頁</span></a>
				</li>-->
			</ul>
		</div>
		<div id="main">
			<?php
			// ob_start();
			// session_start();
			// echo 'login:' . $_SESSION['login'];
			if (empty($_SESSION['login'])) {
				// to("index.php?do=login");
				// exit();
			?>
				<form method="post" action="api/login.php">
					<p class="t botli">管理員登入區</p>
					<p class="cent">帳號 ： <input name="acc" autofocus="" type="text"></p>
					<p class="cent">密碼 ： <input name="pw" type="password"></p>
					<p class="cent"><input value="送出" type="submit"><input type="reset" value="清除"></p>
				</form>
			<?php
			} else {
				$do = $_GET['do'] ?? 'main';
				$file = "./backend/{$do}.php";
				if (file_exists($file)) {
					include $file;
				} else {
					include "./backend/main.php";
				}
				// to("admin.php?do=login");
				// exit();
			}
			?>
		</div>
		<!-- /.container -->
		<!-- <div class="col-xs-12 text-center abcen wow fadeIn">
			<div class="button_down ">
				<a class="imgcircle wow bounceInUp" data-wow-duration="1.5s" href="#aboutus"> <img class="img_scroll" src="img/icon/circle.png" alt=""> </a>
			</div>
		</div> -->
	</div>
	<!-- <div id="cover" style="display:none; ">
		<div id="coverr">
			<a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;" onclick="cl(&#39;#cover&#39;)">X</a>
			<div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;">

			</div>
		</div>
	</div> -->



</body>

</html>
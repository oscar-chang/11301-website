<?php include_once "../api/base.php";
if (empty($_SESSION['login'])) {
	to("../admin.php");
	exit();
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0068)?do=admin&redo=title -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>活動、婚禮、抓週、業配、產品、空間、寵物、人像 | 奧攝影像</title>
	<link href="../css/css.css" rel="stylesheet" type="text/css">
	<script src="../js/jquery-3.4.1.min.js"></script>
	<script src="../js/js.js"></script>
</head>

<body>
	<div id="cover" style="display:none; ">
		<div id="coverr">
			<a class="close-btn" style="position: absolute;right: 1%;top: 1%;cursor: pointer;z-index: 9999;font-size: 1.4em;border-width: thin;border-style: solid;border-radius: 50%;width: 35px;height: 35px;text-align: center;line-height: 35px;" onclick="cl(&#39;#cover&#39;)">X</a>
			<div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;">

			</div>
		</div>
	</div>

	<div id="main">
		<?php
		$menu = $Menu->all();
		$header = $Header->find(['sh' => 1]);
		$footer = $Footer->find(['sh' => 1]);
		$do = $_GET['do'] ?? 'menu';
		$menu_result = $Menu->count(['en_title' => $do]);
		// echo $result;
		// dd($result);

		// dd($banner);
		// dd($menu);
		?>
		<a title="<?= $header['title']; ?>" href="../backend/dashboard.php">
			<div class="ti" style="background:url(&#39;../images/<?= $header['img']; ?>&#39;); background-size:cover;"><?= $header['title']; ?></div><!--標題-->
		</a>
		<div id="ms">
			<div id="lf" style="float:left;overflow: auto;">
				<div id="menuput" class="dbor">
					<!--主選單放此-->
					<span class="t botli">後台管理選單</span>
					<?php foreach ($menu as $key => $value) { ?>
						<a style="color:#000; font-size:13px; text-decoration:none;" href="?do=<?= strtolower($value['en_title']); ?>">
							<div class="mainmu <?= strtolower($value['en_title']); ?>">
								<?= $value['title']; ?> <span class="en_title">&nbsp;&nbsp;<?= $value['en_title']; ?></span></div>
						</a>
					<?php } ?>

					<!-- <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=title">
						<div class="mainmu">
						Banner 廣告管理 </div>
					</a>
					<a style="color:#000; font-size:13px; text-decoration:none;" href="?do=ad">
						<div class="mainmu">
						Menu 選單管理 </div>
					</a>
					<a style="color:#000; font-size:13px; text-decoration:none;" href="?do=mvim">
						<div class="mainmu">
						About 關於管理 </div>
					</a>
					<a style="color:#000; font-size:13px; text-decoration:none;" href="?do=image">
						<div class="mainmu">
							校園映象資料管理 </div>
					</a>
					<a style="color:#000; font-size:13px; text-decoration:none;" href="?do=total">
						<div class="mainmu">
							進站總人數管理 </div>
					</a>
					<a style="color:#000; font-size:13px; text-decoration:none;" href="?do=bottom">
						<div class="mainmu">
							頁尾版權資料管理 </div>
					</a>
					<a style="color:#000; font-size:13px; text-decoration:none;" href="?do=news">
						<div class="mainmu">
							最新消息資料管理 </div>
					</a>
					<a style="color:#000; font-size:13px; text-decoration:none;" href="?do=admin">
						<div class="mainmu">
							管理者帳號管理 </div>
					</a>
					<a style="color:#000; font-size:13px; text-decoration:none;" href="?do=menu">
						<div class="mainmu">
							選單管理 </div>
					</a> -->


				</div>
				<!-- <div class="dbor" style="margin:3px; width:95%; height:20%; line-height:100px;">
					<span class="t">進站總人數 :
						<?php //echo $Total->find(1)['view']; 
						?>
					</span>
				</div> -->
			</div>
			<div class="di" style="height:670px; /*border:#999 1px solid;*/ width:76.5%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
				<!--正中央-->
				<table width="100%">
					<tbody>
						<tr>
							<td style="padding-left: 30px;width:88%;font-weight:800; /*border:#333 1px solid;*/ border-radius:3px;" class="">
								<!--a href="?do=admin" style="color:#000; text-decoration:none;">後台管理區</a-->
								🔳 &nbsp; 網站內容管理 &nbsp; > &nbsp;
								<?php
								if ($menu_result == '0') {
									echo '404 Error Page';
								} else {
									echo ucfirst($do);
								}
								?>
							</td>
							<td>
								<button class="cursor-pointer" onclick="location.href='../api/logout.php'" style="width:100%; /*margin-right:2px;*/ height: 35px;line-height: 13px;">管理者登出</button>
							</td>
						</tr>
					</tbody>
				</table>
				<?php

				// $do = $_GET['do'] ?? 'menu';

				// $result = $Menu->count(['en_title' => $do]);
				// echo $result;
				// dd($result);

				if (empty($do) || $menu_result == '0') {
					include "./404.php";
					// header("location:" . "../backend/dashboard.php?do=menu");
					// to("../backend/dashboard.php?do=menu");
				} else {
					$file = "./{$do}.php";
					if (file_exists($file)) {
						include $file;
					} else {
						include "./menu.php";
					}
				}

				?>
			</div>

		</div>
		<div style="clear:both;"></div>
		<div style="/*width:1024px;*/width:100%; left:0px; position:relative; background:black; margin-top:4px; height:50px; display:block;color:white">
			<span class="t" style="line-height:35px;">
				<?php
				echo $footer['footer'];
				// echo $Footer->find(1)['footer'];
				// dd($footer);
				//echo $Bottom->find(1)['bottom']; 
				?>
			</span>
		</div>
	</div>

</body>

</html>
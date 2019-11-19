		<?php
		$db = new SQLite3('shadow.db');
		$results = $db->query('select * from shadow_soup order by RANDOM() desc limit 1');
		while ($row = $results->fetcharray()) {
		$shadowsoup=$row["title"];
			}
		?>
        	
	<!DOCTYPE html>
	<html>
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
			<title><?php echo $shadowsoup?> - 人生苦短，鸡汤很毒！</title>
			<meta name="description" content="人生苦短，鸡汤很毒，快来吧我们精心熬制了有屎以来最毒1000多条经典毒鸡汤,句句“治愈”人心! 只为了帮你更好的看清人生认识自己，直面现实,直面惨淡的人生,不给你励志.像一根鞭猛的抽你一下,使你清醒,知道这个世界和你自己最真实的一面,是青少年手机里的必备宝典。">
			<meta name="keywords" content="鸡汤,毒鸡汤,馊鸡汤">
			<meta http-equiv="Cache-Control" content="no-siteapp">
			<meta property="og:description" content="我们精心熬制了有屎以来最毒1000多条经典毒鸡汤,句句“治愈”人心! 只为了帮你更好的看清人生认识自己，直面现实,直面惨淡的人生,不给你励志,不给你慰藉,像一根鞭猛的抽你一下,使你清醒,知道这个世界和你自己最真实的一面,是青少年手机里的必备宝典。"/>
			<link rel="icon" href="./img/favicon.ico" type="image/x-icon" id="page_favionc">
			<link href="./img/min.css" rel="stylesheet">
			<link rel="alternate icon" type="image/png" href="icon.png">

		</head>
		<body>
		<div class="top-wrap" style="position: absolute; top: 1vh;width: 100%;z-index: 999"> 
		<div class="container">
			<div class="row" style="margin-top: 30px;">
				  <a onClick="document.location.reload()"><img src="./img/logo.png"></a>
				</div>
				<div class="col">
					<div class="float-right" style="padding-top: 0px;">
						<a class="btn btn-primary btn-filled btn-xs" target="_blank" href="https://shadow-forum.com" >影子论坛</a>
					</div>
				</div>
				</div>
		</div>
		</div>

			<div class="main-wrapper" style="position: relative; top: -6vh;">
				<div class="container main-sentence justify-content-center text-center">
					<span id="sentence" style="font-size: 2rem;"><?php echo $shadowsoup ?></span>
				</div>
			</div>

		<div class="foot-1" style="position: absolute; bottom: 7vh;width: 100%;">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<img src="./img/core.png" alt="MgKsUI.png" border="0" width="100" height="100" />
						<p class="lead text">截屏分享给朋友</p>
						<p class="lead text">群：<a href="https://jq.qq.com/?_wv=1027&k=53XRgHk">203584952</a></p>
						<p class="lead text">www.shadow-forum.com</p>
						<span class="btn btn-primary btn-filled btn-xs" onClick="document.location.reload()">再饮一杯毒鸡汤</span>
					</div>
				</div>
			</div>
		</div>

		<div style="display:none;">
		<script type="text/javascript" src=""></script>
		</div>

		</body>
	</html>
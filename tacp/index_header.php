<?
	$web_site = "http://www.pjchender.com/tacp";
	include("./files/function.php");
?>
<!doctype html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>台灣臨床心理學會</title>
		<link type="text/css" rel="Stylesheet" href= "<?=$web_site?>/files/header_footer.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<script src="<?=$web_site?>/files/jquery-2.1.4.min.js"></script>
		<script src="<?=$web_site?>/files/header.js"></script>
	</head>

	<body>
		<header>
			<div class='mobile_menu'>
				<!--Menu-->
				<ul class='slideMenuMain'>
					<li><a href = "#">回首頁</a></li>
					<li class='more_item'>
						<a href = "#">最新消息</a>
						<ul class='submenu'>
							<li><a href="#">學會公告</a></li>
							<li><a href="#">繼續教育公告</a></li>
							<li><a href="#">人力資源公告</a></li>
							<li><a href="#">佳文共賞</a></li>
							<li><a href="#">活動公告</a></li>
						</ul>
					</li>
					<li>
						<a href = "#">認識學會</a>
					</li>
					<li><a href = "#">出版刊物</a></li>
					<li><a href = "#">繼續教育</a></li>
					<li><a href = "#">年會專區</a></li>
					<li><a href = "#">會員登入</a></li>
					<li><a href = "#">聯絡我們</a></li>
					<!--
					<li><a href = "#">英文版</a></li>
					-->
				</ul>
			</div>
			<div class="topBar">
				<div class="topNav">
					<ul>
						<li><a href = "#">回首頁</a></li>
						<li><a href = "#">會員登入</a></li>
						<li><a href = "#">聯絡我們</a></li>
						<!--
						<li><a href = "#">英文版</a></li>
						-->
						<li><a href = "#">中文版</a></li>
					</ul>
				</div>
			</div>
			<nav>
				<h1 class = 'textHidden'>台灣臨床心理學會</h1>
				<div class = 'logo'>
					<i class="fa fa-bars fa-2x hamburger"></i>
					<a href = "<?=$web_site?>/index.php" title = "台灣臨床心理學會">
						<img src="<?=$web_site?>/img/logo.png">
					</a>
				</div>
				<ul>
					<li><a href = "#" title = "最新消息" class="menu-menu01"><span>最新消息</span></a></li>
					<li><a href = "#" title = "認識學會" class="menu-menu02"><span>認識學會</span></a></li>
					<li><a href = "#" title = "出版刊物" class="menu-menu03"><span>出版刊物</span></a></li>
					<li><a href = "#" title = "繼續教育" class="menu-menu04"><span>繼續教育</span></a></li>
					<li><a href = "#" title = "年會專區" class="menu-menu05"><span>年會專區</span></a></li>
				</ul>
			</nav>
		</header>
		<div class = "UpperSpace">
			<nav id = "mainSubMenu">
				<!--最新消息-->
				<div class = "jsMenu">
					<ul>
						<li><a href="#" title="學會公告">學會公告</a></li>
						<li><a href="#" title="繼續教育公告">繼續教育公告</a></li>
						<li><a href="#" title="人力資源公告">人力資源公告</a></li>
						<li><a href="#" title="佳文共賞">佳文共賞</a></li>
						<li><a href="#" title="活動公告">活動公告</a></li>
					</ul>
				</div>
				<!--認識學會-->
				<div class = "jsMenu">
					<ul>
						<li><a href="#" title="理事長的話">理事長的話</a></li>
						<li><a href="#" title="本會簡介">本會簡介</a></li>
						<li><a href="#" title="學會章程">學會章程</a></li>
						<li><a href="#" title="學會組織">學會組織</a></li>
						<li><a href="#" title="歷屆理事長">歷屆理事長</a></li>
						<li><a href="#" title="入會辦法">入會辦法</a></li>
					</ul>
				</div>
				<!--出版品及刊物-->
				<div class = "jsMenu">
					<ul>
						<li><a href="#" title="臨床心理學刊">臨床心理學刊</a></li>
						<li><a href="#" title="臨床心理通訊">臨床心理通訊</a></li>
					</ul>
				</div>
				<!--繼續教育-->
				<div class = "jsMenu">
					<ul>
						<li><a href="#" title="申請流程">申請流程</a></li>
						<li><a href="#" title="相關法規">相關法規</a></li>
					</ul>
				</div>
				<!--年會專區-->
				<div class = "jsMenu">
					<ul>
						<li><a href="#" title="年會最新消息">年會最新消息</a></li>
						<li><a href="#" title="年會議程">年會議程</a></li>
						<li><a href="#" title="臨床服務獎">臨床服務獎</a></li>
						<li><a href="#" title="學術論文獎">學術論文獎</a></li>
						<li><a href="#" title="年會活動報名">年會活動報名</a></li>
						<li><a href="#" title="各類投稿報名區">各類投稿報名區</a></li>
						<li><a href="#" title="住宿交通旅遊資訊">住宿交通旅遊資訊</a></li>
					</ul>
				</div>
			</nav>
		</div>
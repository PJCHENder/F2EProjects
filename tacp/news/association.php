<? include("../index_header.php"); ?>
<link type="text/css" rel="Stylesheet" href= "<?=$web_site?>/files/content.css"/>
<script>
	var ArticlePerPage = 6;
	$(document).ready(function(){
		//	初始化狀態
		$(".pageNav li:eq(0)").addClass("selected");
		for(var k = 0; k < ArticlePerPage; k++){
			$(".ArticleTitle").eq(k).css("display","block");
		}

		//	換頁效果
		for(var i = 0; i < 5; i++){
			$(".pageNav li:eq("+ i +")").click({id : i},function(e){
				$(".ArticleTitle").css("display","none");
				$(".pageNav li").removeClass("selected");
				n = e.data.id;
				$(".pageNav li:eq(" + n + ")").addClass("selected");
				for(var j = ArticlePerPage*n; j < ArticlePerPage*(n+1); j++){
					$(".ArticleTitle").eq(j).css("display","block");
				}
			})
		}
	})
</script>
<?=location("最新消息","學會公告");?>
<div class = "WhiteSpace"></div>
<div class = "wrapper clear">
	<aside>
		<div class = "asideHeader">最新消息</div>
		<ul>
			<li class = "selected"><a href = "#">學會公告</a></li>
			<li><a href = "#">繼續教育公告</a></li>
			<li><a href = "#">人力資源公告</a></li>
			<li><a href = "#">佳文共賞</a></li>
			<li><a href = "#">活動公告</a></li>
		</ul>
	</aside>
	<div class = "panel clear">
		<div class = "panelHeading">學會訊息</div>
		<div class = "panelBody">
			<div class = "pageContainer">
				<ul>
					<li class = "ArticleTitle"><a href = "#">產業典範人物座談會，歡迎踴躍報名參加</a><p>2015-10-05</p></li>
					<li class = "ArticleTitle"><a href = "#">104年綠色大學永續校園營造論壇</a><p>2015-10-05</p></li>
					<li class = "ArticleTitle"><a href = "#">IEEE學術經驗分享盛會，敬邀您一同學術成就更上層樓</a><p>2015-10-05</p></li>
					<li class = "ArticleTitle"><a href = "#">教學技巧工作坊暑假班招生中! 歡迎老師與同學報名參加</a><p>2015-10-05</p></li>
					<li class = "ArticleTitle"><a href = "#">如何提升學生學習動機? 不仿從課程設計上著手</a><p>2015-10-05</p></li>
					<li class = "ArticleTitle"><a href = "#">老師、研究生看過來!為您揭開學術領導力 (Academic Leadershi...</a><p>2015-10-05</p></li>
					<li class = "ArticleTitle"><a href = "#">「科學教育還能怎麼做! 邀您一探新加坡的科學教育創新</a><p>2015-10-05</p></li>
					<li class = "ArticleTitle"><a href = "#">「人文與科學大師講座」─ 朱敬一院士</a><p>2015-10-05</p></li>
					<li class = "ArticleTitle"><a href = "#">產業典範人物座談會，歡迎踴躍報名參加</a><p>2015-10-06</p></li>
					<li class = "ArticleTitle"><a href = "#">104年綠色大學永續校園營造論壇</a><p>2015-10-05</p></li>
					<li class = "ArticleTitle"><a href = "#">IEEE學術經驗分享盛會，敬邀您一同學術成就更上層樓</a><p>2015-10-05</p></li>
					<li class = "ArticleTitle"><a href = "#">教學技巧工作坊暑假班招生中! 歡迎老師與同學報名參加</a><p>2015-10-05</p></li>
					<li class = "ArticleTitle"><a href = "#">如何提升學生學習動機? 不仿從課程設計上著手</a><p>2015-10-05</p></li>
					<li class = "ArticleTitle"><a href = "#">老師、研究生看過來!為您揭開學術領導力 (Academic Leadershi...</a><p>2015-10-05</p></li>
					<li class = "ArticleTitle"><a href = "#">「科學教育還能怎麼做! 邀您一探新加坡的科學教育創新</a><p>2015-10-05</p></li>
					<li class = "ArticleTitle"><a href = "#">「人文與科學大師講座」─ 朱敬一院士</a><p>2015-10-05</p></li>
				</ul>
				<ul class = "pageNav">
					<li>1</li>
					<li>2</li>
					<li>3</li>
					<li>4</li>
					<li>5</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class = "WhiteSpace"></div>
<? include("../index_footer.php"); ?>
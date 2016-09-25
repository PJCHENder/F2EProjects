<? include("../index_header.php"); ?>
<link type="text/css" rel="Stylesheet" href= "<?=$web_site?>/files/content.css"/>

<?=location("我的帳號","帳號登入");?>
<style>
.message.warning {
	margin: auto;
	width: 26%;
}
.login-panel{
	-webkit-box-shadow: 0px 3px 17px 0px rgba(51,51,51,1);
	-moz-box-shadow: 0px 3px 17px 0px rgba(51,51,51,1);
	box-shadow: 0px 3px 17px 0px rgba(51,51,51,1);
	-webkit-border-radius: 6px;
	-moz-border-radius: 6px;
	border-radius: 6px;
}
.login-head {
	padding: 1.5em 0;
	background: #314D68;
	position: relative;
}
.login-head h1 {
	color: #fff;
	font-size: 1.5em;
	text-align: left;
	margin: 0 23px;
}
form{
	padding: 3em 2em;
	background: #F2F2F2;
}
form li{
	list-style:none;
	margin-bottom:12px;
	text-align: center;
}

input[type="email"], input[type="password"] {
	font-family: '微軟正黑體','Droid Sans', sans-serif;
	width: 90%;
	padding: 0.5em 2em 0.5em 0.5em;
	color: #314D68;
	font-size:20px;
	outline: none;
	background: none;
	border: 2px ridge rgba(187, 185, 189, 0.11);
	border-radius: 0.3em;
	-webkit-border-radius:0.3em;
	-moz-border-radius:0.3em;
	-o-border-radius:0.3em;
}
input[type="email"]:focus, input[type="password"]:focus{
	border: 2px ridge #98a6b3;
}

/*************************/
.submit{
	padding-top:1.5em;
	width: 95%;
}
input[type="submit"] {
	float: right;
	color: #fff;
	cursor: pointer;
	font-weight: 900;
	outline: none;
	font-family: '微軟正黑體','Raleway', sans-serif;
	padding: 12px 0px;
	width: 35%;
	font-size: 18px;
	background:#314D68;
	border:2px solid #314D68;
	border-radius: 0.5em;
	-webkit-border-radius:0.5em;
	-moz-border-radius:0.5em;
	-o-border-radius:0.5em;
}
input[type="submit"]:hover {
	background: #4a749c;
	color:#FFF;
	border:2px solid #4a749c;
}

.submit h4 a{
	float:left;
	font-size: 16px;
	color: #999;
	font-weight: 400;
	font-family: 微軟正黑體;
	margin-top: 15px;
	margin-left: 21px;
	text-decoration: none;
}
.submit h4 a:hover{
	color:#666666;
}
/*-----start-responsive-design------*/
@media (max-width:1440px){
.message.warning {
		margin: 7% auto 0;
		width: 30%;
	}
}
@media (max-width:1366px){
	.message.warning{
		margin: auto;
		width: 35%;
	}
}

@media (max-width:1024px){
	.message.warning{
		margin: auto;
		width: 47%;
	}
}
@media (max-width:768px){
	.message.warning{
		margin: auto;
		width: 65%;
	}
}
@media (max-width:640px){
	.message.warning{
		margin: auto;
		width: 100%;
	}
	.login-panel{
		box-shadow: none;
	}
}
@media (max-width:480px){
	.message.warning  {
		margin: auto;
		width: 100%;
	}
	.login-panel{
		box-shadow: none;
	}
}
@media (max-width:320px){
	.message.warning  {
		margin: auto;
		width: 100%;
	}
	.login-panel{
		box-shadow: none;
	}
	.login-head {
	padding: 1.45em 0;
	}
	.login-head h1 {
	font-size: 1.15em;
	}
	input[type="email"], input[type="password"] {
		font-size: 16px;
	}
	form {
	padding: 1.5em 1.5em;
	}
	.submit {
	padding-top: 0.4em;
	}
	input[type="submit"] {
		float:none;
		padding: 11px 0px;
		width: 52%;
		font-size: 15px;
	}
	.submit h4 {
		margin-top: 15px;
		margin-bottom: 20px;
	}
	.submit h4 a {
	float: none;
	font-size: 15px;
	}	
}
</style>
<script>
	
</script>
<div class = "WhiteSpace"></div>
<!-- contact-form -->	
<div class="message warning">
	<div class="login-panel">
		<div class="login-head">
			<h1>帳號登入</h1>
		</div>
		<form id = "login" name = "login" method = "post" action = "">
			<li>
				<input type="email"  placeholder = "電子郵件">
			</li>
				<div class="clear"> </div>
			<li>
				<input type="password"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" placeholder = "密碼"> 
			</li>
			<div class="clear"> </div>
			<div class="submit">
				<input type="submit"  value="登入" >
				<h4>
					<a href = "#">註冊帳號</a>
				</h4>
				<h4>
					<a href = "#">忘記密碼</a>
				</h4>
					<div class="clear"></div>	
			</div>
		</form>
		</div>					
	</div>
</div>
<div class="clear"> </div>
<div class = "WhiteSpace"></div>
<? include("../index_footer.php"); ?>
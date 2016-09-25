<? include("../index_header.php"); ?>
<link type="text/css" rel="Stylesheet" href= "<?=$web_site?>/files/content.css"/>
<link type="text/css" rel="Stylesheet" href= "<?=$web_site?>/files/register.css"/>
<script type = 'text/javascript'>
	$(document).ready(function(){

		var rule_email = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z]+$/;
		$("#email").on('blur',function(){
			if(rule_email.test($("#email").val())){
				$(this).css("border-color","");
			}else{
				$(this).css("border-color","#D0001D");
			}
		})

		var rule_password = /^([A-Za-z0-9]{8,12})$/;
		$("#password").on('blur',function(){
			if(rule_password.test($("#password").val())){
				$(this).css("border-color","");
			}else{
				$(this).css("border-color","#D0001D");
			}
		})
		
		$("#rePassword").on('blur',function(){
			if($("#password").val() == $("#rePassword").val()){
				$(this).css("border-color","");
			}else{
				$(this).css("border-color","#D0001D");
			}
		})
		
		$("input[type='text']").on('blur',function(){
			if($(this).val() != ""){
				$(this).css("border-color","");
			}else{
				$(this).css("border-color","#D0001D");
			}
		})
		
		var rule_psyNumber = /^\d{6}$/;
		$("#psyNumber").on('blur',function(){
			if(rule_psyNumber.test($("#psyNumber").val())){
				$(this).css("border-color","");
			}else{
				$(this).css("border-color","#D0001D");
			}
		})

		var valid = true;
		var warning = "請您確認以下填寫欄位\n";
		$('#register').submit(function(){

			if($("#email").val() == "" || rule_email.test($("#email").val()) != true){
				$("#email").css("border-color","#D0001D");
				valid = false;
				warning += "電子郵件\n";
			}

			if($("#password").val() == "" || rule_password.test($("#password").val()) != true){
				$("#password").css("border-color","#D0001D");
				valid = false;
				warning += "密碼\n";
			}

			if($("#rePassword").val() == "" || $("#password").val() != $("#rePassword").val()){
				$("#rePassword").css("border-color","#D0001D");
				valid = false;
				warning += "驗證密碼\n";
			}
			
			if($("#name").val() == ""){
				$("#name").css("border-color","#D0001D");
				valid = false;
				warning += "姓名\n";
			}
			
			if($("input[name='sex']:checked").val() == undefined){
				valid = false;
				warning += "性別\n";
			}

			if($("#psyNumber").val() == "" || rule_psyNumber.test($("#psyNumber").val()) != true){
				$("#psyNumber").css("border-color","#D0001D");
				valid = false;
				warning += "證書字號\n";
			}

			if($("input[name='eduLevel']:checked").val() == undefined){
				valid = false;
				warning += "最高學位\n";
			}
			
			if($("#eduSchool").val() == ""){
				$("#eduSchool").css("border-color","#D0001D");
				valid = false;
				warning += "最高學歷\n";
			}

			if($("#affiliation").val() == ""){
				$("#affiliation").css("border-color","#D0001D");
				valid = false;
				warning += "最職單位\n";
			}

			if($("#phone").val() == ""){
				$("#phone").css("border-color","#D0001D");
				valid = false;
				warning += "聯絡電話\n";
			}

			if($("#address").val() == ""){
				$("#address").css("border-color","#D0001D");
				valid = false;
				warning += "聯絡地址\n";
			}
			
			if($("input[name='agree']:checked").val() == undefined){
				valid = false;
				warning += "同意隱私權條款\n";
			}

			if(valid){
				return true;
			}else{
				alert(warning);
				warning = "";
				return false;
			}
		})
    })
</script>
<?=location("會員專區","會員註冊");?>

<div class = "WhiteSpace"></div>
<div class = "RegisterForm wrapper clear">
	<h2>會員註冊</h2>
	<p>
	目前僅開放臨床心理師申請網站帳戶，建立學會網站帳戶，可讓您在本學會官網上查看會費繳費紀錄，歡迎臨床心理師加入!<br>
	攸關您的權益，請務必詳實填寫以下資料，已是本會會員者請勿再重新申請帳號，請先與學會秘書處確認帳號及密碼。
	</p>
	<form id = "register" name = "register" method = "post" action = "">
		<ul>
			<li><label for='email'>電子郵件</label>：<input type='email' id='email' placeholder='此為日後登入帳號'></li>
			<li><label for='password'>密　　碼</label>：<input type='password' id='password' placeholder = '8-12位英文數字組合'></li>
			<li><label for='rePassword'>驗證密碼</label>：<input type='password' id='rePassword' placeholder='請再輸入一次您的密碼'></li>
		</ul>
		<h2>基本資料</h2>
		<ul>
			<li><label for='name'>姓　　名</label>：<input type='text' id='name' name='name'></li>
			<li>
				<label>性　　別</label>：
				<input type="radio" class='radio' name="sex" id="male" value="m"><label for="male">男</label>
				<input type="radio" class='radio' name="sex" id="female" value="f"><label for="female">女</label>
			</li>
			<li><label for='psyNumber'>證書字號</label>：<input type='text' id='psyNumber' name='psyNumber' placeholder='心理師證字號請填寫完整六碼'></li>
			<li>
				<label>最高學位</label>：
				<input type="radio" class='radio' name="eduLevel" id="md" value="md">	<label for="md">碩士</label>
				<input type="radio" class='radio' name="eduLevel" id="phd" value="phd"><label for="phd">博士</label>
			</li>
			<li><label for='eduSchool'>最高學歷</label>：<input type='text' id='eduSchool' name='eduSchool' placeholder = '最高學歷畢業學校'></li>
			<li><label for='affiliation'>現職單位</label>：<input type='text' id='affiliation' name='affiliation'></li>
			<li><label for='phone'>聯絡電話</label>：<input type='text' id='phone' name='phone' placeholder = '請填入市話或手機'></li>
			<li><label for='address'>聯絡地址</label>：<input type='text' id='address' name='address'></li>
			<li><input type='checkbox' id='agree' name='agree'><label for='agree'>我已詳細閱讀且同意<a href = "#id01">台灣臨床心理學會(TACP)隱私權條款</a></label></li>
		</ul>
		<div class = "submit">
			<input type="submit"  value="註冊">
		</div>
	</form>
</div>
<div id="id01" class="modal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header ModalContainer clear">
				<a href="#" class="closebtn">×</a>
				<h2>台灣臨床心理學會隱私權條款</h2>
			</div>
			<div class="ModalContainer">
				<p>「台灣臨床心理學會」非常尊重您的隱私權，對於資料的蒐集、處理及利用均遵守中華民國政府之「個人資料保護法」及相關法令規範，您可以參照以下隱私權政策，了解我們的具體措施。</p>
				<p>一、資料蒐集方式，是由您註冊TACP帳號時所提供的基本資料：包含您提供之姓名、性別、聯絡電話、聯絡地址、電子郵件信箱及其他您主動提供之資料。</p>
				<p>二、依據法務部頒佈之「個人資料保護法之特定目的及個人資料之類別」，本學會蒐集、處理、利用及保有您個人資料之種類列示如下： •Ｃ○○一 辨識個人者。(姓名、職稱、住址、工作地址、以前地址、住家電話號碼、行動電話、網路平臺申請之帳號、通訊及戶籍地址、電子郵遞地址及其他任何可辨識資料本人者等。)</p>
				<p>三、資料蒐集目的、可以讓你在本學會官網查詢會費繳費之情形。</p>
				<p>四、資料儲存及保管 關於您提供的個人資料，我們將就資訊系統及公司作業規則制定嚴格規範，任何人均須在本學會明定的授權規範下才能處理及利用必要之資料。</p>
			</div>
			<!--
			<div class="ModalFooter ModalContainer">
				<p>Modal footer</p>
		    </div>
			-->
	    </div>
	</div>
</div>
<div class = "WhiteSpace"></div>
<? include("../index_footer.php"); ?>
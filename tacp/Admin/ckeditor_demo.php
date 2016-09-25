<?
$text = $_POST['content'];
echo "##".$text."##<br>";
?>
<!doctype html>
<html>
 <head>
  <meta charset="UTF-8">
  <script src="ckeditor/ckeditor.js"></script>
  <script src="ckfinder/ckfinder.js"></script>
  <title>CKEditor</title>
  <script>
	  function processData(){
			//	getting data
			var data = CKEDITOR.instances.content.getData()
			alert(data);
			form.submit();
		}
	</script>
 </head>
 <body>
	 <form name = 'form' action = '#' method='post'>
            <textarea name="content" id="content" rows="10" cols="80"></textarea>
            <script>
				CKFinder.setupCKEditor();
		        CKEDITOR.replace( 'content', {
				});
            </script>
			<input type = 'button' value = '送出' onclick = 'processData()'>
        </form>
 </body>
</html>

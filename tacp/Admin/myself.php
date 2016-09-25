<?
$text = $_POST['content'];
echo "##".$text."##<br>";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>A Simple Page with CKEditor</title>
        <!-- Make sure the path to CKEditor is correct. -->
        <script src="ckeditor/ckeditor.js"></script>
        <script src="ckfinder/ckfinder.js"></script>
		<script type='text/javascript'>
		function processData(){
			var form = document.forms['form'];
			var textarea = form.elements['content'].value;
			//getting data
			var data = CKEDITOR.instances.content.getData()
			console.log(data);
			form.submit();
		}
		</script>
    </head>
    <body>
        <form name = 'form' action = '#' method='post'>
            <textarea name="content" id="content" rows="10" cols="80"></textarea>
            <script>
			/*
			CKFinder.setupCKEditor();
			CKEDITOR.replace( 'content' );
			*/
			
				CKFinder.setupCKEditor();
                CKEDITOR.replace( 'content', {
				});
				
            </script>
			<input type = 'button' value = '送出' onclick = 'processData()'>
        </form>
    </body>
</html>
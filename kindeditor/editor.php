<?php
	$htmlData = '';
	if (!empty($_POST['content1'])) {
		if (get_magic_quotes_gpc()) {
			$htmlData = stripslashes($_POST['content1']);
		} else {
			$htmlData = $_POST['content1'];
		}
	}
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>KindEditor PHP</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
	<link rel="stylesheet" href="kindeditor/themes/default/default.css" />
	<link rel="stylesheet" href="kindeditor/plugins/code/prettify.css" />
	<script charset="utf-8" src="kindeditor/kindeditor-all-min.js"></script>
	<script charset="utf-8" src="kindeditor/lang/zh-CN.js"></script>
	<script charset="utf-8" src="kindeditor/plugins/code/prettify.js"></script>
	<script>
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="content1"]', {
				cssPath : 'kindeditor/plugins/code/prettify.css',
				uploadJson : 'kindeditor/upload_json.php',
				fileManagerJson : 'kindeditor/file_manager_json.php',
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
				}
			});
			prettyPrint();
		});
	</script>
</head>
<body>
	<?php echo $htmlData; ?>
	<form  name="editorForm" method="post" action="editor.php">
	   <div class="input-group">
      <div class="input-group-btn">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">新闻 <span class="caret"></span></button>
        <ul class="dropdown-menu">
          <li><a href="#">新闻</a></li>
          <li><a href="#">讲座</a></li>
          <li><a href="#">活动</a></li>
          <li><a href="#">会议</a></li>
        </ul>
      </div><!-- /btn-group -->
      <input type="text" class="form-control" style="width:620px"  placeholder="文章名称" aria-label="...">
    </div><!-- /input-group -->
	  <hr class="featurette-divider" style="margin: 15px 0px 15px 0px">
		<textarea name="content1" style="width:700px;height:600px;visibility:hidden;"><?php echo htmlspecialchars($htmlData); ?></textarea>
		<br />
		<input type="submit" name="button" value="预览内容" onClick="document.editorForm.action='preview.php';" /> 
		<input type="submit" name="button" value="提交内容" onClick="document.editorForm.action='editor.php';" /> 
	</form>
</body>
</html>


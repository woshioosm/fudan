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
	<form  name="editorForm" method="post" action="editor.php" >
	   <div class="input-group" style="width:800px">
         <div style="height:34px;width:70px;float:left">	          
           <select name="newstype" style="width:70px;height:34px;font-size:13px">
             <option value ="1">新闻</option>
             <option value ="2">会议</option>
             <option value="3">通知</option>
             <option value="4">讲座</option>
          </select>
         </div><!-- /btn-group -->	   
         <input name="title" type="text" class="form-control" style="margin-left:5px;width:620px;float:left"  placeholder="文章名称" aria-label="...">
      </div><!-- /input-group -->
	  <hr class="featurette-divider" style="margin: 15px 0px 15px 0px">
		<textarea name="content1" style="width:700px;height:600px;visibility:hidden;"><?php echo htmlspecialchars($htmlData); ?></textarea>
		<br />
		<input type="submit" name="button" value="预览" onClick="document.editorForm.action='preview.php';document.editorForm.target='_blank'" /> 
		<input type="submit" name="button" value="保存" onClick="document.editorForm.action='editor.php';document.editorForm.target='_self'"" /> 
		
	</form>
</body>
</html>


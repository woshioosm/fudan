<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>KindEditor PHP</title>
    <link rel="stylesheet" href="resource/css/bootstrap.css" />
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
		
		function typeSelect(type){
			if(type==1){
				$("#otherFun").hide();
			}else{
				$("#otherFun").show();
			}
		}
	</script>
</head>
<body>

	<form  name="editorForm" method="post" action="document.editorForm.action='editor.php?mode=<?php echo $mode ?>" >
	   <div class="input-group" style="width:800px">
         <div style="height:34px;width:70px;float:left">	          
           <select id="newstype" name="newstype" style="width:70px;height:34px;font-size:13px" onchange="typeSelect(this.options[this.options.selectedIndex].value)">
             <option value ="1">新闻</option>
             <option value ="2">会议</option>
             <option value="3">讲座</option>
             <option value="4">活动</option>
          </select>
         </div><!-- /btn-group -->	   
         <input name="title" type="text" class="form-control" style="margin-left:5px;width:620px;float:left"  placeholder="文章名称" aria-label="..." value="<?php echo $title ?>">
		 <textarea name="subContent" style="margin-left:0px;margin-top:10px;width:696px;height:100px;float:left"  placeholder="&nbsp&nbsp文章概述" ><?php echo $subContent ?></textarea>
         
		 <div id="otherFun" style="width:700px;float:left;margin-top:10px;display:none">
		      <input value="<?php echo $contentLocation ?>" name="contentLocation" type="text" class="form-control" style="margin-left:0px;width:400;float:left;margin-top:10px;margin-bottom:10px"  placeholder="通知的地点" aria-label="...">
              <input value="<?php echo $people ?>" name="people" type="text" class="form-control" style="margin-left:0px;width:200;float:left;margin-top:10px;margin-bottom:10px"  placeholder="相关人物" aria-label="...">
		     		     
			  <span>选择通知时间:</span><br>
			  <input value="<?php echo $date?>" type="date" style="margin-top:5px" name="user_date">
			  <input value="<?php echo $time?>" type="time" style="margin-top:5px" name="user_time">
	     </div>
		 
      </div><!-- /input-group -->
	  <hr class="featurette-divider" style="margin: 15px 0px 15px 0px">
		<textarea name="content1" style="width:700px;height:600px;visibility:hidden;"><?php echo htmlspecialchars($htmlData); ?></textarea>
		<br />
		<input type="submit" name="button" value="预览" onClick="document.editorForm.action='preview.php';document.editorForm.target='_blank'" /> 
		<input type="submit" name="button" value="保存" onClick="document.editorForm.action='editor.php?mode=<?php echo $mode ?>&id=<?php echo $id ?>&type=<?php echo $type ?>';document.editorForm.target='_self'"" /> 
		
	</form>
</body>
</html>


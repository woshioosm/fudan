<?php
   require("code/util/util.php");
    require("code/util/mysql.php");
	
	$htmlData = '';
	$title='';
	$newsType='';
	$subContent='';
	$contentdate='';
	$contentLocation='';
	$arr;
	$date="";
	$time="";
	$mode="";
	$id="";
	$type=1;
	if(isset($_SERVER['REQUEST_URI'])){ 
	  if(isset($_SERVER['REQUEST_URI'])){ 
	    $url=$_SERVER['REQUEST_URI']; 
	    $params = getParam($url);
        if($params!=null){
		  $mode= $params["mode"];
		  $id= $params["id"];
		  $type=$params["type"];	
		}	  	
	  }
	}	
	if (!empty($_POST['newstype'])) {
	    $newsType=$_POST['newstype'];
	}
	if (!empty($_POST['title'])) {
		$title=$_POST['title'];
	}
	if (!empty($_POST['contentLocation'])) {
		$contentLocation=$_POST['contentLocation'];
	}
	if (!empty($_POST['user_date']) ){
		$contentdate=$_POST['user_date']." ".$_POST['user_time'];
	}
	if (!empty($_POST['subContent'])) {
		$subContent=$_POST['subContent'];
	}
	
	
	if (!empty($_POST['content1'])) {
		if (get_magic_quotes_gpc()) {
			$htmlData = stripslashes($_POST['content1']);
		} else {
			$htmlData = $_POST['content1'];
		}			
	}
		
	if (!empty($_POST['newstype'])) {  
		$newsType=$_POST['newstype'];
		$result;
		if($mode=='update'){
			$result = PdoMysql::getInstance()->updateNews($id,$newsType,$title,$subContent,$htmlData,$contentdate,$contentLocation);	
		    echo "<script type='text/javascript'>alert('save successfully');window.location.href='manager1.php' </script>";	
		}else{
			$result = PdoMysql::getInstance()->saveNews($newsType,$title,$subContent,$htmlData,$contentdate,$contentLocation);	
		    echo "<script type='text/javascript'>alert('save successfully');window.location.href='news.php' </script>";	
		}
		
		
		exit();
	}else{
		$result;
	    if(isset($_SERVER['REQUEST_URI'])){ 
	        $url=$_SERVER['REQUEST_URI']; 
	    	$params = getParam($url);	
            if($params!=null){
				$id= $params["id"];
	    	    $result= PdoMysql::getInstance()->getNews($params["id"])[0];
			    $title = $result['title'];
			    $subContent = $result['subContent'];
	    	    $htmlData = $result['content'];
				$contentLocation = $result['contentLocation'];
				$contentdate = $result['contentdate'];
                $arr = explode(" ",$contentdate);
				if($arr!=null){
					$date=$arr[0];
					$time=$arr[1];
				}
			}
			
	    }	
	}
?>
<!DOCTYPE html>
<!-- saved from url=(0046)http://v3.bootcss.com/examples/carousel/#about -->
<html lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="resource/img/ico.jpg">

    <title>复旦大学海关史与海关文献国际研究中心欢迎您</title>

    <!-- Bootstrap core CSS -->
	 <link href="resource/css/style.css" rel="stylesheet">
    <link href="resource/css/bootstrap.css" rel="stylesheet">
    <link href="resource/css/base.css" rel="stylesheet">
	
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="resource/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
    <script src="./js/respond.js"></script>
    <script src="./js/html5shiv.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
   <link href="resource/css/carousel.css" rel="stylesheet">
	<!--[if IE 8]><body class="ie">
	  <style type="text/css">
             #contentView{ padding-right:0px;}
      </style>
	<![endif]-->
  </head>
<!-- NAVBAR
================================================== -->
  <body style="font-family:微软雅黑 !important;background-color:#f8f8f8">
     
    <div class="container">
	  <?php include("header.php") ?>
	 </div>     
 	<div id="myCarousel" class="carousel slide" data-ride="carousel" >
      <!-- Indicators -->
      <div class="carousel-inner" role="listbox" >
        <div class="item active">
          <img class="first-slide" src="resource/img/banner2.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
             
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.carousel -->	  
    <div class="container" style="margin-top:-320px;padding-left:0px">
	     <div class="jumbotron" style="padding:1px 40px 5px 15px;margin-bottom:-3px;opacity:0.9;background-color:#f8f8f8">
         <h1 class="subTitle"><b>编辑器· Editor</b></h1>
		</div>
	  </div>				
	<div class="container" style="margin-top:0px">
            <div class="row">
              <div id="contentView" class="col-sm-12" style="padding-left:0px !important">
		         <div class="panel panel-default" style="border-color:#f8f8f8;background-color:#f8f8f8">
                    <div class="row" style="margin:15px 0px 0px 4px" id="fudanNews">   
			            <div class="wrapper" style="padding: 20px 7% 20px 3%;">
                              <a name="main-content" class="top-anchor"></a>                                    
                                   <section class="region region-content">
								       <div class="ds-1col node node-page view-mode-full clearfix">
								          <div class="field field-name-title field-type-ds field-label-hidden"><div class="field-items"><div class="field-item even"><h1 style="display:none">News</h1></div></div></div></div>
								          <div id="block-views-hy-news-news" class="block block-views plain last even">
								           <div class="content">
								               <div class="view view-hy-news view-id-hy_news view-display-id-news">
								                   <div class="view-content">
								                   
								                       
								                          <div id="view1" class="clearfix">
								                            <div class="group-center">								                           
																<?php include("kindeditor/editor.php"); ?>
															</div>    
															  
								                          </div>
								                        
								                        
								                       
								                   </div>
								               </div>
								           </div>
										
								         
								       </div>  
								       </div>
								      
								   </section>
						</div>
				
				 
			        </div><!-- /.row -->
                 </div> <!-- /.panel -->    		    
	           </div><!-- /.col-sm-9 -->
             </div> <!--row-->      
   <?php
	   include("footer.php");
	?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="resource/js/jquery.min.js"></script>
    <script src="resource/js/bootstrap.min.js"></script>
    <script src="resource/js/main.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <!--<script src="resource/js/holder.min.js"></script>-->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="resource/js/ie10-viewport-bug-workaround.js"></script>
    <script type="text/javascript">	
	var bodyBgs = [];    //创建一个数组变量来存储背景图片的路径
   bodyBgs[0] = "resource/img/banner9.png";
   bodyBgs[1] = "resource/img/banner2.jpg";
   bodyBgs[2] = "resource/img/banner2.png";
   bodyBgs[3] = "resource/img/banner9.png";
   bodyBgs[4] = "resource/img/banner8.jpg";
   var randomBgIndex = Math.round( Math.random() * 4 );
   $("#slider").attr("src",bodyBgs[randomBgIndex]);
    
   $('#newstype').get(0).selectedIndex =<?php echo $type-1 ?>;
   <?php 
      if($type!=1){
		 echo "$('#otherFun').show()";
	  }
   ?>
</script>

</body></html>

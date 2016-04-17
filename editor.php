<?php
    require("code/util/mysql.php");
	$htmlData = '';
	$title='';
	$newsType='';
	$subContent='';
	$contentDate='';
	$contentLocation='';
			
	if (!empty($_POST['newstype'])) {
	    $newsType=$_POST['newstype'];
	}
	if (!empty($_POST['title'])) {
		$title=$_POST['title'];
	}
	if (!empty($_POST['contentLocation'])) {
		$contentLocation=$_POST['contentLocation'];
	}
	if (!empty($_POST['date']) && !empty($_POST['time'])) {
		
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
		$result = PdoMysql::getInstance()->saveNews($newsType,$title,$subContent,$htmlData,$contentDate,$contentLocation);	
		echo "<script type='text/javascript'>alert('save successfully');window.location.href='news.php' </script>";	
		exit();
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
    <footer>
		   <div id="footer">
              <section style="width:100%">
	            <div class="row" >
	             <div class="col-sm-5">
                   <p class="link">
	   	               <b>友情链接: </b>
		               <br>
		               <a href="http://www.customsmuseum.cn/" target="_blank">中国海关博物馆</a>
		               <a href="http://www.shac.net.cn/" target="_blank">南京第二历史档案馆</a>		 
		               <br>
		               <a href="http://hcl.harvard.edu/libraries/harvard-yenching/" target="_blank">哈佛燕京图书馆</a>	 
		                <a href="http://yugong.fudan.edu.cn/" target="_blank">复旦大学中国历史地理研究所</a>
		               <br>
		               <a href="http://www.soas.ac.uk/" target="_blank">伦敦大学亚非学院</a>
		               <a href="http://www.fas.harvard.edu/~chgis/" target="_blank">哈佛地理空间研究中心</a>
		               <br>
	                   <a href="https://www.bris.ac.uk/history/customs/resources/archives/" target="_blank">布里斯托尔大学近代海关史项目</a>
		            </p>
	             </div>
	             <div class="col-sm-7">
                    <p class="info" style="margin-top:40px"> 复旦大学·海关史与海关文献国际研究中心 （口岸·中国·世界）</p>
		            <p class="info">上海市杨浦区邯郸路220号</p>
	             </div>
	            </div>	
	          </section>
              <p class="copyright">
		        © 2016 复旦大学, 上海. · <a href="">Privacy</a> · <a href="">Terms</a>		
		      </p>
           </div>
        </footer>    

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
</script>

</body></html>

<?php
    require("code/util/util.php");
    require("code/util/mysql.php");
	
	$result;
	if(isset($_SERVER['REQUEST_URI'])){ 
	    $url=$_SERVER['REQUEST_URI']; 
		$params = getParam($url);	
        if($params==null){
			$params["id"] = 6;
			$params["type"] = 1;
		}
        if(!isset($params["type"])){
			$params["type"] = 1;
		}
		$type=	$params["type"];
		 
		$result= PdoMysql::getInstance()->getNews($params["id"]);
		$result = $result[0];
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
    <script src="resource/js/respond.js"></script>
    <script src="resource/js/html5shiv.js"></script>
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
        
        </div>
      </div>
    </div><!-- /.carousel -->	  
	  <div class="container" style="margin-top:-320px;padding-left:0px">
	     <div class="jumbotron" style="padding:1px 40px 5px 15px;margin-bottom:-3px;opacity:0.9;background-color:#f8f8f8">
         <h1 class="subTitle"><b><a style="cursor:pointer;color: rgba(206, 27, 27, 0.85098) !important;"
		 <?php		 
		 
		  if($type==1) echo " href='news.php'>新闻·News";
		  else if($type==2) echo " href='notifications.php?type=2'>会议·Conference";
		  else if($type==3) echo " href='notifications.php?type=3'>讲座·Lectures";
		  else if($type==4) echo " href='notifications.php?type=4'>活动·Activities";
		 ?>
		 
		 </a></b></h1>
		</div>
	  </div>
	  <div class="container" style="margin-top:0px">
            <div class="row">
              <div class="col-md-9 panelCol2">
		         <div class="panel panel-default" style="border-color:#f8f8f8;background-color:#f8f8f8">                   
                    <div class="row" style="margin:15px 0px 0px 2px" id="fudanNews">   
			            <div class="wrapper" style="padding-top:0px">
                              <a name="main-content" class="top-anchor"></a>                                    
                                   <section class="region region-content">
								       <div class="ds-1col node node-page view-mode-full clearfix">
								          <div class="field field-name-title field-type-ds field-label-hidden"><div class="field-items"><div class="field-item even"><h1 style="display:none">News</h1></div></div></div></div>
								          <div id="block-views-hy-news-news" class="block block-views plain last even">
								           <div class="content">
								               <div class="view view-hy-news view-id-hy_news view-display-id-news">
								                   <div class="view-content">
								                   								                       
								                        <div id="view1" class="clearfix">
								                            <div class="group-right">								                           
															     <div>
															        <div><?php $d=strtotime($result['date']);echo date("Y-m-d", $d);?></div>
																 </div>
																 <div>															     
																    <h2 style="font-size: 35px;margin-top:6px">
															           <a href="#" class="TitlePreview"><?php echo $result["title"]  ?></a>
																    </h2>
																 </div>
																
																 <div class="newsAbstract" style="word-break: break-all;word-wrap: break-word;">
																   <?php echo $result["content"]  ?>

																 </div>
														    </div>    
															  
								                          </div> <!-- view1 -->
								                        															
								                   </div>
								               </div>
								           </div>
								       </div>
								      
								   </section>
						</div>
				
				 
			        </div><!-- /.row -->
                 </div> <!-- /.panel -->    		    
	           </div><!-- /.col-sm-9 -->

	          <div class="col-md-3" style="padding-left:0px;padding-right:15px">		
		        <div class="panel panel-default" style="border-color:#f8f8f8;background-color:#f8f8f8;margin-left:-50px;padding-right:50px">
            <div class="panel-heading" style="background-color:#f8f8f8;border:none">
                <!--<i class="fa fa-link"></i>-->
                
                <div class="pull-right" style="">

                </div>
                <div class="clearfix"></div>
		   </div>
             <div class="row" style="margin:40px 10px 0px 2px;padding:2px" id="fudanNews">   
			   <div class="sideNav">

                        <nav class="sidebar-navigation">
                            <ul>
                               <li <?php if($type==1) echo "class='active'" ?>><a class="sideBar" href="news.php" >新闻<span class="sidebarEn">&nbsp News</span></a></li>
                                <li <?php if($type==2) echo "class='active'" ?>><a class="sideBar" href="notifications.php?type=2">会议<span class="sidebarEn">&nbsp Conference</span></a></li>
                                <li <?php if($type==3) echo "class='active'" ?>><a class="sideBar" href="notifications.php?type=3">讲座<span class="sidebarEn">&nbsp Lectures</span></a></li>
                                <li <?php if($type==4) echo "class='active'" ?>><a class="sideBar" href="notifications.php?type=4">活动<span class="sidebarEn">&nbsp Activity</span></a></li>
                             </ul>
                        </nav> <!-- /sidebar-navigation -->

                        
                    </div>
				
				
			</div>
          </div>  
         
              </div><!-- /.col-sm-3 -->
             </div> <!--row-->
   
	        <br><br>
         
         </div>  
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
   bodyBgs[0] = "resource/img/banner9.jpg";
   bodyBgs[1] = "resource/img/banner2.jpg";
   bodyBgs[2] = "resource/img/banner1.jpg";
   bodyBgs[3] = "resource/img/banner9.jpg";
   bodyBgs[4] = "resource/img/banner8.jpg";
   bodyBgs[5] = "resource/img/banner10.jpg";
   bodyBgs[6] = "resource/img/banner9.jpg";
   var randomBgIndex = Math.round( Math.random() * 6 );
   $("#slider").attr("src",bodyBgs[randomBgIndex]);
</script>

</body></html>

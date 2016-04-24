<?php
    require("code/util/util.php");
    require("code/util/mysql.php");
	
	$paper;
	if(isset($_SERVER['REQUEST_URI'])){ 
	    $url=$_SERVER['REQUEST_URI']; 
		$params = getParam($url);	
        if($params==null){
			$params["id"] = 1;
			$params["type"] = 1;
		}
        if(!isset($params["type"])){
			$params["type"] = 1;
		}
		$type=	$params["type"];
		 
		$paper= PdoMysql::getInstance()->getPublictaion($params["id"]);
                $paper = $paper[0];
		
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
             #rightContent{ padding-right:0px !important;}
			 
      </style>
	<![endif]-->
  </head>
<!-- NAVBAR
================================================== -->
  <body style="font-family:微软雅黑 !important;background-color:#f8f8f8">
     <div class="container">
	  <?php include("header.php") ?>
	 </div>       
    <div id="myCarousel"  class="carousel slide" data-ride="carousel" >
      <!-- Indicators -->
      <div class="carousel-inner" role="listbox" >
        <div class="item active">
          <img id="slider" class="first-slide"  alt="First slide">
         
        </div>
      </div>
    </div><!-- /.carousel -->
  	<div class="container" style="margin-top:-320px;padding-left:0px">
	     <div class="jumbotron" style="padding:1px 40px 5px 15px;margin-bottom:-3px;opacity:0.9;background-color:#f8f8f8">
         <h1 class="subTitle"><b>文库·Publication</b></h1>
		</div>
	  </div>		
	<div class="container" style="margin-top:0px">
            <div class="row">
              <div class="col-md-9 panelCol2">
		         <div class="panel panel-default" style="border-color:#f8f8f8;background-color:#f8f8f8">
                   <div class="row" style="margin:15px 0px 0px 2px;" id="fudanNews">   
			            <div class="wrapper">
                              <a name="main-content" class="top-anchor"></a>                                    
                                   <section class="region region-content">								       
								          <div id="block-views-hy-news-news" class="block block-views plain last even">
								            <div class="content">
								                <div class="view view-hy-news view-id-hy_news view-display-id-news">
								                    <div class="view-content">								             
								                         <div id="view1" class="clearfix">
								                             <div>	
															   <div style="width:195px;height:230px;float:left;margin-top:15px">
															     <img src="resource/img/paper/<?php echo $paper['img'] ?>" style="width:150px;height:200px">
																 </img>
															   </div>
                                                               <div class="group-right2;float:left">															 
											 				     
											 					 <div>															     
											 					    <h2 >
											 				           <a target="_blank" class="TitlePreview" style="font-size: 25px;"><?php echo $paper['title'] ?></a>
											 					    </h2>
											 					 </div>
																 <div>	
											 				       <div style="margin-top:15px;font-size:16px"><?php echo $paper['subtitle'] ?></div>																   
											 					 </div>	
                                                                																 
											 					  <div  style="margin-top:15px;font-size:15px;line-height: 33px;">
																     <b>摘要：</b> <?php echo $paper['abstract'] ?>
																
											 					  </div>
															      <div>	
											 				       <div style="margin-top:15px;font-size:15px"><b>关键词：</b><?php echo $paper['keyword'] ?></div>																   
											 					 </div>
																 <div>	
											 				       <div style="margin-top:15px;font-size:15px"><a target="_blank" href="generic/web/viewer.html?file=<?php echo $paper['pdf'] ?>">>>阅读文章</a></div>																   
											 					 </div>
																</div>
											 			    </div>    
											 				  
								                           </div>
								                         
								                         <hr class="featurette-divider" style="margin: 15px 0px 15px 0px">
								                                                                                       
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
            <div class="panel-heading" style="background-color:#f8f8f8">
                <!--<i class="fa fa-link"></i>-->
                
                <div class="pull-right" style="">

                </div>
                <div class="clearfix"></div>
		   </div>
             <div class="row" style="margin:40px 10px 60px 2px;padding:2px" id="fudanNews">   
			   <div class="sideNav">

                        <nav class="sidebar-navigation">
                            <ul>
						    	<li <?php if($paper['type']==1) echo "class='active'" ?>><a class="sideBar" href="paper.php?type=1">文章<span class="sidebarEn">&nbsp Paper</span></a></li>
                                <li <?php if($paper['type']==2) echo "class='active'" ?>><a class="sideBar" href="paper.php?type=2" >著作<span class="sidebarEn">&nbsp Publication</span></a></li>
                                
                               
                            </ul>
                        </nav> <!-- /sidebar-navigation -->

                        
                    </div>
				
				
			</div>
          </div>  
         
        </div><!-- /.col-sm-4 -->
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
    <!--<script src="./js/holder.min.js"></script>-->
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

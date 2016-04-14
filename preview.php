<?php
	$htmlData = '';
	$title=$_POST['newstype'];
    $time = time();
    $timeStr = date("Y-m-d",$time); //2010-08-29
	if (!empty($_POST['content1'])) {
		if (get_magic_quotes_gpc()) {
			$htmlData = stripslashes($_POST['content1']);
		} else {
			$htmlData = $_POST['content1'];
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
    <link rel="icon" href="img/ico.jpg">

    <title>复旦大学海关史与海关文献国际研究中心欢迎您</title>

    <!-- Bootstrap core CSS -->
	 <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/base.css" rel="stylesheet">
	
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
   <link href="css/carousel.css" rel="stylesheet">
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
	    <header class="header  clearfix navbar navbar-fixed-top" style="background-color:rgba(0, 0, 0, 0.4380392);margin-bottom:0px;padding-bottom:0px;padding-top:0px">
			<div class="container">
				<div class="row">
					<div class="col-md-3" style="padding-left:0px;padding-right:0px">

						<!-- header-left start -->
						<!-- ================ -->
						<div class="header-left clearfix">

							<!-- logo -->
							<div class="logo smooth-scroll" style="margin-bottom:0px">
								<a href="index.html"><img id="logo" src="img/logo.png" alt="Worthy"></a>
							</div>

							<!-- name-and-slogan -->

						</div>
						<!-- header-left end -->

					</div>
					<div class="col-md-9">

						<!-- header-right start -->
						<!-- ================ -->
						<div class="header-right clearfix">

							<!-- main-navigation start -->
							<!-- ================ -->
							<div class="main-navigation animated">

								<!-- navbar start -->
								<!-- ================ -->
								<nav class="navbar navbar-default" role="navigation">
									<div class="container-fluid">

										<!-- Toggle get grouped for better mobile display -->
										<div class="navbar-header">
											<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
												<span class="sr-only">Toggle navigation</span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
											</button>
										</div>

										<!-- Collect the nav links, forms, and other content for toggling -->
										<div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
											<ul class="nav navbar-nav navbar-right" >
												<li><a href="#banner"></a></li>
												<li><a href="news.html">新闻</a></li>
												<li><a href="paper.html">文库</a></li>
												<li><a href="people.html">成员</a></li>	
												<li><a href="http://yarwen.com/discuss/forum.php">讨论组 </a></li>
                                                <li><a href="blog.html">海关史园地</a></li>												
												<li class="dropdown">
                                                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">数据库<span class="caret"></span></a>
                                                    <ul class="dropdown-menu" style="background-color:rgba(0, 0, 0, 0.4380392)">
													  <li style="margin-top:3px"><a class="subList" href="#">历史地图与地理信息系统</a></li>
                                                      <li style="margin-top:3px"><a class="subList" href="#">海关文献目录查询</a></li>
                                                      <li style="margin-top:3px"><a class="subList" href="#">统计数据</a></li>
                                                      <li style="margin-top:3px"><a class="subList" href="#">照片资料</a></li>
                                                    </ul>
                                                </li>
												<li><a href="aboutus.html">关于我们</a></li>
											</ul>
										</div>

									</div>
								</nav>
								<!-- navbar end -->

							</div>
							<!-- main-navigation end -->

						</div>
						<!-- header-right end -->

					</div>
				</div>
			</div>
		</header>
	 </div>    	  

 	<div id="myCarousel" class="carousel slide" data-ride="carousel" >
      <!-- Indicators -->
      <div class="carousel-inner" role="listbox" >
        <div class="item active">
          <img class="first-slide" src="img/banner2.jpg" alt="First slide">
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
								                            <div class="group-right">								                           
															     <div>
															       <div><?php echo $timeStr ?></div>
																 </div>
																 <div>															     
																    <h2 style="font-size: 35px;margin-top:6px">
															           <a href="#" class="TitlePreview">
																	   <?php echo $title ?>
																	   </a>
																    </h2>
																 </div>
																
																 <div class="newsAbstract">
																   <?php echo $htmlData?>
																 </div>
														    </div>    
															  
								                          </div> <!-- view1 -->
								                        
								                        
								                       
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
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/main.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <!--<script src="./js/holder.min.js"></script>-->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./js/ie10-viewport-bug-workaround.js"></script>
    <script type="text/javascript">	
	var bodyBgs = [];    //创建一个数组变量来存储背景图片的路径
   bodyBgs[0] = "img/banner9.png";
   bodyBgs[1] = "img/banner2.jpg";
   bodyBgs[2] = "img/banner2.png";
   bodyBgs[3] = "img/banner9.png";
   bodyBgs[4] = "img/banner8.jpg";
   var randomBgIndex = Math.round( Math.random() * 4 );
   $("#slider").attr("src",bodyBgs[randomBgIndex]);
</script>

</body></html>

<?php
require("code/util/mysql.php");
$result = PdoMysql::getInstance()->getPeople();
?>
<!DOCTYPE html>
<!-- saved from url=(0046)http://v3.bootcss.com/examples/carousel/#about -->
<html lang="zh-CN">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
	<link href="resource/css/jquery.fancybox.css" rel="stylesheet">
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
             #rightContent{ padding-left:0px !important;padding-right:0px !important;}
      </style>
	<![endif]-->
  </head>
<!-- NAVBAR
================================================== -->
  <body style="font-family:微软雅黑 !important;background-color:#f8f8f8">
	  <div class="container">
	  <?php include("header.php") ?>
	 </div> 
 	<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <div class="carousel-inner" role="listbox" >
        <div class="item active">
          <img id="slider" class="first-slide" alt="First slide">
         
        </div>
      </div>
    </div><!-- /.carousel -->
	<div class="container" style="margin-top:-320px;padding-left:0px">
	     <div class="jumbotron" style="padding:1px 40px 5px 15px;margin-bottom:-3px;opacity:0.9;background-color:#f8f8f8">
         <h1 class="subTitle"><b>中心人员·People</b></h1>
		</div>
	  </div>				
    <div class="container" style="margin-top:0px">
        <div class="row">
           <div id="contentView" class="col-sm-12" style="padding-left:0px !important">
		         <div class="panel panel-default" style="border-color:#f8f8f8;background-color:#f8f8f8">
                    <div class="row" style="margin:15px 0px 0px 2px" id="fudanNews">   
			            <div class="wrapper">
                              <a name="main-content" class="top-anchor"></a>                                    
                                   <section class="region region-content">
								       <div class="ds-1col node node-page view-mode-full clearfix">
								          <div class="field field-name-title field-type-ds field-label-hidden"><div class="field-items"><div class="field-item even"><h1 style="display:none">News</h1></div></div></div></div>
								          <div id="block-views-hy-news-news" class="block block-views plain last even">
								           <div class="content">
								               <div class="view view-hy-news view-id-hy_news view-display-id-news">
								                   <div class="view-content">
												     <div id="viewTitle1" class="TitlePreview" style="font-size:30px;margin-left:10px;margin-bottom:20px">
													   中心主任
													 </div>
													
												     <div id="view1" class="clearfix">
													   <ul class="peopleList">
													    <?php
													   
                                                        foreach ($result as $people) {
															if($people["level"]==1){
													    ?>
                                                          <li>
														   <div style="float:left;width:190px">
														    <a class="fancybox" href="#inline" onclick="setCurrent(<?php echo $people["id"]?>);">
															<img  src="resource/img/people/<?php echo $people["img"]?>.jpg" class="peopleImg img-thumbnail"></img>
															</a>
                                                            <span style="width:190px;float:left;font-size:25px;margin:8px 0px 0px 5px"><?php echo $people["name"]?></span>
															<span style="width:190px;float:left;font-size:16px;margin:8px 0px 0px 5px"><?php echo $people["department"]?></span>
														   </div>														
														 </li>
											             <?php
															} }
													     ?>
                                                       </ul>	
													 </div>
													 
													 <hr class="featurette-divider" style="margin: 15px 0px 15px 0px">
													   <div id="viewTitle2" class="TitlePreview" style="font-size:30px;margin-left:10px;margin-bottom:20px">
													   中心成员<span style="font-size:15px">（排名不分先后）</span>
													 </div>
													 <div id="view2" class="clearfix">
													  <ul class="peopleList">
													      <?php
													   
                                                        foreach ($result as $people) {
															if($people["level"]==2){
													    ?>
                                                         <li>
														   <div style="float:left;width:190px">
														    <a class="fancybox" href="#inline" onclick="setCurrent(<?php echo $people["id"]?>);">
															<img  src="resource/img/people/<?php echo $people["img"]?>.jpg" class="peopleImg img-thumbnail"></img>
															</a>
                                                            <span style="width:190px;float:left;font-size:25px;margin:8px 0px 0px 5px"><?php echo $people["name"]?></span>
															<span style="width:190px;float:left;font-size:16px;margin:8px 0px 0px 5px"><?php echo $people["department"]?></span>
														   </div>														
														 </li>
											             <?php
															} }
													     ?>
													  </ul>	
													 </div>								                       							                   
								                   </div>
								               </div>
								           </div>
										  <hr class="featurette-divider" style="margin: 15px 0px 15px 0px">
								          										  
								       </div>
								      
								   </section>
						</div>
				
				 
			        </div><!-- /.row -->
                 </div> <!-- /.panel -->    		    
	           </div><!-- /.col-sm-9 -->

	   
        </div> <!--row-->
	    <br><br> 
    </div>  	   	  
	
    <?php
	   include("footer.php");
	?>   
     <!-- hidden inline form --> 
    <div id="inline" class="mode" style="width:600px;height:350px;overflow:hidden;margin-left:15px;margin-top:15px;display:none; ">
<img id="peopleImg" class="img-thumbnail" style="height:300px;float:left;margin-top:10px" src="resource/img/people/wusongdi2.jpg"> </img>
<div style="width:280px;float:left;margin-left:40px">
  <div style="margin-top:10px"> 
      <span id="peopleName" style="font-size:30px;margin-top:5px">吴松弟</span> <span id="peopleTitle" style="font-size:15px">教授</span>
   </div>
  <hr class="featurette-divider" style="margin: 10px 0px 10px 0px">
  <div style="margin-top:2px"> 
       <p style="font-size:15px" id="peopleDep">复旦大学中国历史地理研究所教授、复旦海关史中心主任</p>
  </div>
  <hr class="featurette-divider" style="margin: 10px 0px 10px 0px">
  <div style="margin-top:2px">
      <p style="font-size:15px" id="peopleRe">中国经济史、历史经济地理</p>
  </div>
  <hr class="featurette-divider" style="margin: 10px 0px 10px 0px">
  <div style="margin-top:2px">
	 <p style="font-size:15px" id="peoplePub">《2014中国区域经济发展报告——中国城市群资源环境承载力》、《2013中国区域经济发展报告——中国城市群的崛起与协调发展》</p>
  </div>
  
 </div>
</div>
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="resource/js/jquery.min.js"></script>
    <script src="resource/js/bootstrap.min.js"></script>
    <script src="resource/js/main.js"></script>
	 <script src="resource/js/jquery.fancybox.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <!--<script src="./js/holder.min.js"></script>-->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="resource/js/ie10-viewport-bug-workaround.js"></script>
  <script type="text/javascript">
	$(document).ready(function() {
		$('.fancybox').fancybox();
	});
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
   
   function setCurrent(id){
	   $.ajax({ 
          type: "post", 
          async:false,
          url: "code/util/getPeopleDetail.php?id="+id, 
          dataType: "json", 
          success: function (data) { 
		          $('#peopleName').html(data["name"]);
				  $('#peopleTitle').html(data["title"]);
				  $('#peopleDep').html(data["department2"]);
				  $('#peopleRe').html(data["research"]);
			      $('#peoplePub').html(data["publication"]);
				  $('#peopleImg').attr("src","resource/img/people/"+data["img"]+"2.jpg");
				  
                 
           }, 
           error: function (XMLHttpRequest, textStatus, errorThrown) { 
                  alert(errorThrown); 
             } 
          });
   }
</script>

</body></html>

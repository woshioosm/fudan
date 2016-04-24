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
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=akqci1dq5BtLnO3kzGUsHInF"></script>
	<script type="text/javascript" src="http://api.map.baidu.com/library/SearchInfoWindow/1.5/src/SearchInfoWindow_min.js"></script>
	<link rel="stylesheet" href="http://api.map.baidu.com/library/SearchInfoWindow/1.5/src/SearchInfoWindow_min.css" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
    <script src="resource/js/respond.js"></script>
    <script src="resource/js/html5shiv.js"></script>
    <![endif]-->
	
    <!-- Custom styles for this template -->
   <link href="resource/css/carousel.css" rel="stylesheet">
   
   <style type="text/css">
	body, html{width: 100%;height: 100%;margin:0;font-family:"微软雅黑";}
	#allmap {height: 500px;width:100%;overflow: hidden;}
	#result {width:100%;font-size:12px;}
	dl,dt,dd,ul,li{
		margin:0;
		padding:0;
		list-style:none;
	}
	dt{
		font-size:14px;
		font-family:"微软雅黑";
		font-weight:bold;
		border-bottom:1px dotted #000;
		padding:5px 0 5px 5px;
		margin:5px 0;
	}
	dd{
		padding:5px 0 0 5px;
	}
	li{
		line-height:28px;
	}
	</style>
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
    <div class="container" style="margin-top:-340px;padding-left:0px">
	     <div class="jumbotron" style="padding:1px 40px 5px 15px;margin-bottom:-3px;opacity:0.9;background-color:#f8f8f8">
         <h1 class="subTitle"><b>中心地图·关于我们</b></h1>
		</div>
	  </div>
    <div  class="container" style="padding-left:0px !important">
	  <div id="container" style="widht:100%;height:600px"></div> 
	</div>	  
	
    <script type="text/javascript"> 
       var map = new BMap.Map('container');
    var poi = new BMap.Point(121.511,31.305);
    map.centerAndZoom(poi, 17);
    map.enableScrollWheelZoom();

    var content = '<div style="margin:0;line-height:20px;padding:2px;">' +
                    '<img src="resource/img/fudan.jpg" alt="" style="float:right;zoom:1;overflow:hidden;width:90px;height:90px;margin-left:3px;"/>' +
                    '地址：上海杨浦区邯郸路220号<br/>电话：(010)59928888<br/>简介：海关史与海关文献国际研究中心' +
                  '</div>';

    //创建检索信息窗口对象
    var searchInfoWindow = null;
	searchInfoWindow = new BMapLib.SearchInfoWindow(map, content, {
			title  : "海关史与海关文献国际研究中心",      //标题
			width  : 290,             //宽度
			height : 105,              //高度
			panel  : "panel",         //检索结果面板
			enableAutoPan : true,     //自动平移
			searchTypes   :[
				BMAPLIB_TAB_SEARCH,   //周边检索
				BMAPLIB_TAB_TO_HERE,  //到这里去
				BMAPLIB_TAB_FROM_HERE //从这里出发
			]
		});
    var marker = new BMap.Marker(poi); //创建marker对象
    marker.enableDragging(); //marker可拖拽
    marker.addEventListener("click", function(e){
	    searchInfoWindow.open(marker);
    })
    map.addOverlay(marker); //在地图中添加marker
	//样式1
	var searchInfoWindow1 = new BMapLib.SearchInfoWindow(map, "信息框1内容", {
		title: "信息框1", //标题
		panel : "panel", //检索结果面板
		enableAutoPan : true, //自动平移
		searchTypes :[
			BMAPLIB_TAB_FROM_HERE, //从这里出发
			BMAPLIB_TAB_SEARCH   //周边检索
		]
	});
	function openInfoWindow1() {
		searchInfoWindow1.open(new BMap.Point(116.319852,40.057031));
	}
	//样式2
	var searchInfoWindow2 = new BMapLib.SearchInfoWindow(map, "信息框2内容", {
		title: "信息框2", //标题
		panel : "panel", //检索结果面板
		enableAutoPan : true, //自动平移
		searchTypes :[
			BMAPLIB_TAB_SEARCH   //周边检索
		]
	});
	function openInfoWindow2() {
		searchInfoWindow2.open(new BMap.Point(116.324852,40.057031));
	}
	//样式3
	var searchInfoWindow3 = new BMapLib.SearchInfoWindow(map, "信息框3内容", {
		title: "信息框3", //标题
		width: 290, //宽度
		height: 40, //高度
		panel : "panel", //检索结果面板
		enableAutoPan : true, //自动平移
		searchTypes :[
		]
	});
	function openInfoWindow3() {
		searchInfoWindow3.open(new BMap.Point(116.328852,40.057031)); 
	}
     </script>  
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
    <script src="./js/ie10-viewport-bug-workaround.js"></script>
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

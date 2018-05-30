<?php
require_once("../rand.inc.php");
include ("../include/config.php");
include("../include/function.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo $title;?></title>
<meta name="keywords" content="<?php echo $keyword;?>" />
<meta name="description" content="<?php echo $descr;?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="stylesheet" href="/m/css/index.css">
</head>
<body>
<div style="max-width:720px; margin:auto;"> <img src="/m/images/1_01.jpg" width="100%">
  <div id="slider">
    <ul class="slides clearfix">
      <li><img class="responsive" src="/m/images/banner1.jpg"></li>
      <li><img class="responsive" src="/m/images/banner2.jpg"></li>
    </ul>
    <ul class="pagination">
      <li class="active"></li>
      <li></li>
    </ul>
  </div>
  <a href="#"><img src="/m/images/1_021.jpg" width="25%" border="0"></a><a href="http://www.cjmjw.cn/vip/"><img src="/m/images/1_022.jpg" width="25%" border="0"></a><a href="http://www.cjmjw.cn/system/anli.php"><img src="/m/images/1_023.jpg" width="25%" border="0"></a><a href="#"><img src="/m/images/1_024.jpg" width="25%" border="0"></a>
  <div style="height:15px"></div>

  <div class='top'>—<span>我们能做什么？</span>—</div>
  <div class="topcon">慈溪市易创信息技术有限公司为企业提供"全方位"的互联网品牌推广营销服务！<br>
    致力于打造"中国互联网新闻营销第一品牌"，以"多、快、好、省"的良好的口碑，赢得市场和企业的一致认可。</div>
	<div class="con">
	<div class="cona">
	<a href=""><img src="//pic.kuaizhan.com/g1/M01/B0/CA/wKjmqVdSQPyAAstrAAA6TY1H0vY7654054/imageView/v1/thumbnail/640x0" ></a>
	<div class="conb">
	<h1><a href="">软文推广</a></h1>
	<p>为企业提供各种形式的软文推广服务，发布在权威的网络媒体上，塑造良好品牌形象，起到宣传效果。</p>
	
	</div>
	</div>
	<div class="cona">
	<a href=""><img src="//pic.kuaizhan.com/g1/M01/B0/CA/wKjmqVdSQPyAAstrAAA6TY1H0vY7654054/imageView/v1/thumbnail/640x0" ></a>
	<div class="conb">
	<h1><a href="">软文推广</a></h1>
	<p>为企业提供各种形式的软文推广服务，发布在权威的网络媒体上，塑造良好品牌形象，起到宣传效果。</p>
	
	</div>
	</div>
	<div class="cona">
	<a href=""><img src="//pic.kuaizhan.com/g1/M01/B0/CA/wKjmqVdSQPyAAstrAAA6TY1H0vY7654054/imageView/v1/thumbnail/640x0" ></a>
	<div class="conb">
	<h1><a href="">软文推广</a></h1>
	<p>为企业提供各种形式的软文推广服务，发布在权威的网络媒体上，塑造良好品牌形象，起到宣传效果。</p>
	
	</div>
	</div>
	<div class="cona">
	<a href=""><img src="//pic.kuaizhan.com/g1/M01/B0/CA/wKjmqVdSQPyAAstrAAA6TY1H0vY7654054/imageView/v1/thumbnail/640x0" ></a>
	<div class="conb">
	<h1><a href="">软文推广</a></h1>
	<p>为企业提供各种形式的软文推广服务，发布在权威的网络媒体上，塑造良好品牌形象，起到宣传效果。</p>
	
	</div>
	</div>
	<div class="clear"></div>
	</div>
	
	
	
	
	
  
  <div style="height:15px"></div>
  <img src="/m/images/1_05.jpg" width="100%"> <img src="/m/images/1_06.jpg" width="100%">
  <div style="height:20px"></div>
  <img src="/m/images/1_08.jpg" width="100%">
  <div style="height:20px"></div>
  <img src="/m/images/1_10.jpg" width="100%">
  <div style="height:15px"></div>
  <img src="/m/images/1_12.jpg" width="100%">
  <div style="height:15px"></div>
  <img src="/m/images/1_14.jpg" width="100%">
  <div class="footer">Copyright &copy; 2018 超级媒介 备案：浙ICP备16040543号
  <br>【软文推广】【新闻营销】 首选（超级媒介）新闻稿自动发布平台<br>
    咨询电话：<span>0574-63036705</span></div>
</div>
<script src="/m/js/jquery.min.js"></script>
<script src="/m/js/easySlider.js"></script>
<script type="text/javascript">
	$(function() {
		$("#slider").easySlider( {
			slideSpeed:1000,
			automatic:true,
			paginationSpacing: "15px",
			paginationDiameter: "12px",
			paginationPositionFromBottom: "40px",
			slidesClass: ".slides",
			controlsClass: ".controls",
			paginationClass: ".pagination"			
		});
	});
</script>
</body>
</html>

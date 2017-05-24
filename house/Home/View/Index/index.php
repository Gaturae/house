<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>DIYHeaven</title>
	

	<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/style.css">

	<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
	<script type="text/javascript" src="__PUBLIC__/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="__PUBLIC__/js/bootstrap.js"></script>
	<script type="text/javascript" src="__PUBLIC__/js/myjs.js"></script>
	<script type="text/javascript" src="__PUBLIC__/js/npm.js"></script>
	<script type="text/javascript" src="__PUBLIC__/js/angular.min.js"></script>

</head>
<body>
<include file="Public/title" location='__PUBLIC__'/>
<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="5000" style="margin: auto;width: 60%;">
	<!-- 轮播（Carousel）指标 -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>   
	<!-- 轮播（Carousel）项目 -->
	<div class="carousel-inner" style="height: 200px;width: 100%;">
        	<div class="item active" style="height: 100%;width: 100%;">
            	<img class="img-responsive" src="__PUBLIC__/img/firstSlide.png" alt="First slide" style="height: 100%;width: 100%;">
        	</div>
        	<div class="item"  style="height: 100%;width: 100%;">
            	<img class="img-responsive" src="__PUBLIC__/img/secondSlide.png" alt="Second slide" style="height: 100%;width: 100%;"> 
        	</div>
        	<div class="item"  style="height: 100%;width: 100%;">
            	<img class="img-responsive" src="__PUBLIC__/img/thirdSlide.png" alt="Third slide" style="height: 100%;width: 100%;">
        	</div>
	</div>
	<!-- 轮播（Carousel）导航 -->
	<a class="carousel-control right" href="#myCarousel" 
	   data-slide="prev"></a>
	<a class="carousel-control left" href="#myCarousel" 
	   data-slide="next"></a>
</div> 
<div style="height: 20px;"></div>
<include file="Public/head" location='__PUBLIC__'/>
<div id="local">
	<div style="margin-left: 2%" id="local_label">
		<a href="#" >上海转租 > </a>
	</div>
</div>
<div id="list_panel">
	<dl>
		<dt>位置</dt>
		<dd>
			<a href="javascript:#">区域</a>
			<a href="javascript:#">地铁</a>
			<ul id="list_panel_ul" style="padding-top: 5px;height: 20px;">
				<li><a href="javascript:#">不限</a></li>
				<li><a href="javascript:#">地铁1</a></li>
				<li><a href="javascript:#">地铁2</a></li>
				<li><a href="javascript:#">地铁3</a></li>
			</ul>
		</dd>
	</dl>
	<div style="height: 20px"></div>
	<dl>
		<dt>方式</dt>
		<dd>
			<a href="javascript:#">整租</a>
			<a href="javascript:#">合租</a>
		</dd>
	</dl>
	<div style="height: 20px"></div>
	<dl>
		<dt>租金</dt>
		<dd>
			<a href="javascript:#">1000以下</a>
			<a href="javascript:#">1000-3000</a>
		</dd>
	</dl>
	<div style="height: 20px"></div>
	<dl>
		<dt>房型</dt>
		<dd>
			<a href="javascript:#">一室</a>
			<a href="javascript:#">二室</a>
		</dd>
	</dl>
	<div style="height: 20px"></div>
	<dl>
		<dt>更多</dt>
		<dd>
		</dd>
	</dl>
</div>
<div id="detail">
	<include file="Public/detail" location='__PUBLIC__'/>
</div>
<div id="foot" style="height: 100px;"></div>
</body>
</html>
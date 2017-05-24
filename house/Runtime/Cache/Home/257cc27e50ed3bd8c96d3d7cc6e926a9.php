<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>DIYHeaven</title>
	

	<link rel="stylesheet" type="text/css" href="/think/Public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/think/Public/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="/think/Public/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/think/Public/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="/think/Public/css/style.css">

	<script type="text/javascript" src="/think/Public/js/jquery.min.js"></script>
	<script type="text/javascript" src="/think/Public/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/think/Public/js/bootstrap.js"></script>
	<script type="text/javascript" src="/think/Public/js/myjs.js"></script>
	<script type="text/javascript" src="/think/Public/js/npm.js"></script>
	<script type="text/javascript" src="/think/Public/js/angular.min.js"></script>

</head>
<body>
<!DOCTYPE html>
<html lang="en">
<body>
	<div id="title_panel">
		<div id="left" style="float: left;">
            <a id="city">上海</a>
			<a id="chooseCity" href="#">[选择城市]</a>
			<a id="homePage" href="#">转租宝</a>	
		</div>
		<div id="right" style="float: right;">
			<a  href="/think/Home/Index/login">用户登录</a>
		</div>
	</div>

</body>
</html>
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
            	<img class="img-responsive" src="/think/Public/img/firstSlide.png" alt="First slide" style="height: 100%;width: 100%;">
        	</div>
        	<div class="item"  style="height: 100%;width: 100%;">
            	<img class="img-responsive" src="/think/Public/img/secondSlide.png" alt="Second slide" style="height: 100%;width: 100%;"> 
        	</div>
        	<div class="item"  style="height: 100%;width: 100%;">
            	<img class="img-responsive" src="/think/Public/img/thirdSlide.png" alt="Third slide" style="height: 100%;width: 100%;">
        	</div>
	</div>
	<!-- 轮播（Carousel）导航 -->
	<a class="carousel-control right" href="#myCarousel" 
	   data-slide="prev"></a>
	<a class="carousel-control left" href="#myCarousel" 
	   data-slide="next"></a>
</div> 
<div style="height: 20px;"></div>
<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
<div style="height: 90px;">
<div class="title" style="width: 77%;float: left;padding-left: 2%">
	<div class="title_img" style="float: left;width: 20%;margin-top: -20px;padding-left: 2%">
		<a href="#" data-toggle="tooltip" data-placement="right" title="<h3>租房子找图图</h3>" class="tooltip-a">
			<img src="/think/Public/img/logo.jpg">
		</a>
	</div>

	<div style="float: right;width: 80%;">
		<ul id="ul1" style="float: right;">
			<li><a href="headline.php">转租前沿</a></li>
			<li><a href="price.php">租客信用</a></li>
			<li><a href="record.php">热租排行</a></li>
			<li><a href="communit.php">租客论坛</a></li>
		</ul>
	</div>
</div>
<div class="title1" style="width: 20%;float: right;margin-top: 10px;margin-right: 5px">
	<div class="input-group" >
		<input type="text" class="form-control" placeholder="开始找房子" id="textfind">
			<span class="input-group-btn">
				<button class="btn btn-warning" type="button" onclick="findMsg()" >
					<span class="glyphicon glyphicon-search"></span>
				</button>
			</span>
	</div>
</div>
</div>
</body>
</html>
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
	<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<ul id="myTab" class="nav nav-tabs">
	<li class="active">
		<a href="#cityhome" data-toggle="tab">上海出租</a>
	</li>
	<li>
		<a href="#male" data-toggle="tab">男性租客</a>
	</li>
	<li>
		<a href="#female" data-toggle="tab">女性租客</a>
	</li>
	<li>
		<a href="#mixsex" data-toggle="tab">混合租客</a>
	</li>
	
</ul>
<div id="myTabContent" class="tab-content">
	<div class="tab-pane in active" id="cityhome">
		<p>cityhome</p>
	</div>
	<div class="tab-pane" id="male">
		<p>male</p>
	</div>
	<div class="tab-pane" id="female">
		<p>female</p>
	</div>
	<div class="tab-pane" id="mixsex">
		<p>mixsex</p>
	</div>
</div>
</body>
</html>
</div>
<div id="foot" style="height: 100px;"></div>
</body>
</html>
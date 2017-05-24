<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head> 
	<meta charset="UTF-8">
	<title>regist</title>

	<link rel="stylesheet" type="text/css" href="/think/Public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/think/Public/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="/think/Public/css/style.css">

	<script type="text/javascript" src="/think/Public/js/jquery.min.js"></script>
	<script type="text/javascript" src="/think/Public/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/think/Public/js/myjs.js"></script>
	<script type="text/javascript" src="/think/Public/js/npm.js"></script>
	<script type="text/javascript" src="/think/Public/js/angular.min.js"></script>
    <script>

        var formApp = angular.module('loginPanel', []);

		formApp.controller('loginPanelCtrl', function($scope,$http) {
   

        	 	$scope.user={};
        		
        	 	$scope.processForm = function(){
        	 
    				$http({
        					method  : 'POST',
        					url     : '/think/Home/Index/loginAction',
        					data    : $.param($scope.user),  
        					headers : { 'Content-Type': 'application/x-www-form-urlencoded' } 
    					}).then(function successCallback(data) {
    							//返回的是json数据对象
    							//var jsonStr = JSON.stringify(data)
    							if(data['data'].code=="success"){
    								window.location.href="/think/Home/Index/index";
    							}else {
    								alert("用户名密码错误")
    							}
    
								}, function errorCallback(data) {
									//var jsonStr = JSON.stringify(data)
									alert(data)
					});

				}

		});

    </script>
	<script>
    	$(function () { $("[data-toggle='tooltip']").tooltip(); });
	</script>

</head>
<body onload="fade()" ng-app="loginPanel" ng-controller="loginPanelCtrl">
	<div id="login" style="background: url(/think/Public/img/bg.png) no-repeat;background-size: 100% 100%;"></div>
	<form ng-submit="processForm()">
	<div id="loginPanel">
	
		<h2 style="text-align: center;font-weight: normal;font-size: 4rem">登录</h2>
	
		<div class="input-group" style="margin-top: 30px;margin-left: 8px">
			<span class="input-group-addon btn-info">				
					<a class="glyphicon glyphicon-user" style="width: 30px;" href="#"
					 data-toggle="tooltip" data-placement="left" title="什么是用户名?"></a>	
			</span>
			<input type="text" class="form-control" placeholder="手机/邮箱/用户名" ng-model="user.name">
		</div>
		<div class="input-group" style="margin-top: 50px;margin-left: 8px">
			<span class="input-group-addon btn-info">				
					<a class="glyphicon glyphicon-lock" style="width: 30px;" href="#" data-toggle="tooltip" data-placement="left" title="忘记密码,怎么办?">
					</a>			
			</span>
			<input type="password" class="form-control" placeholder="密码" ng-model="user.password" >
		</div>

		<input type="submit" class="btn btn-success" id="login_btn" value="Login">
	</div>
	</form>

	<div id="registPanel">
		<a type="button" class="btn btn-info" href="/think/Home/Index/regist" id="regist_btn">注册新用户</a>
		<ul style="margin-left:33px;margin-top: 10px;">
			<li><a href="/think/Home/Index/index" style="color: black">@租房宝 |</a></li>
			<li><a href="#" style="color: black">| 法律说明 |</a></li>
			<li><a href="#" style="color: black">| 使用条款 | </a></li>
			<li><a href="#" style="color: black">| 隐私政策</a></li>
		</ul>	
	</div>
</body>
</html>
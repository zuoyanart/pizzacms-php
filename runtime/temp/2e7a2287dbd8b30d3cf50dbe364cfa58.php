<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:64:"F:\php\pizzacms\public/../application/home\view\index_index.html";i:1464059315;}*/ ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui"> 
    <title>
 我的后台
 </title>

    <link rel="stylesheet" media="screen" charset="utf-8" href="/static/pkg/base.css" />
    <link rel="stylesheet" href="/static/pkg/view/home/index_index.html_aio.css" />
</head>
<body>
	<div id="header">
		<h1><i class="icon-pizza"></i>Pizza Admin</h1>
	</div>
	<div id="user-nav">
		<ul>
			<li><i class="icon-person"></i><span id="userinfo"></span></li>
			<li><a href="javascript:void(0);" id="loginout"><i class="icon-loginout"></i>退出</a></li>
		</ul>
	</div>
	<div id="search">
		<input type="search" id="searchkw">
	</div>
	<div id="sidebar">
		<ul>
			<li><a href="/" class=""><i class="icon-home"></i>主页</a></li>
			<li>
				<a href="#" class="submenu"><i class="icon-article"></i>信息管理</a>
				<ul>
					<li><a href="/tree">节点管理</a></li>
					<li><a href="/article">文章管理</a></li>
					<li><a href="/block">模块管理</a></li>
				</ul>
			</li>
			<li>
        <a href="#" class="submenu"><i class="icon-setting"></i>系统管理</a>
        <ul>
					<li><a href="/user">管理员管理</a></li>
					<li><a href="/usergroup">用户组管理</a></li>
					<li><a href="/power">权限分配</a></li>
					<!-- <li><a href="/article">系统设置</a></li>
					<li><a href="/module"></a></li> -->
				</ul>
      </li>
		</ul>
	</div>
	<div id="main">
		

<ul class="indexlist" id="indexlist">
  <li class="li1"><a href="/home/article"><i class="icon-article"></i>文章管理</a></li>
  <li class="li2"><a href="#"><i class="icon-chat"></i><span class="tip">5</span>统计图表</a></li>
  <li class="li3"><a href="#"><i class="icon-setting"></i>系统设置</a></li>
  <li class="li4"><a href="#"><i class="icon-noti"></i><span class="tip">320</span>系统通知</a></li>


</ul>
<div style="margin:20px;line-height:30px;">
  <h2>关于</h2>
  当前版本号：1.0<br/>
  开发者: <a href="#">左盐</a><br/>
  E-mail: <a href="mailto:huabinglan@163.com">huabinglan@163.com</a><br/>
  github: <a href="http://github.com/zuoyanart" target="_blank">http://github.com/zuoyanart</a><br/>
  blog: <a href="http://www.zuoyan.space" target="_blank">www.zuoyan.space</a><br/>
  ui框架： <a href="http://ui.zuoyan.space" target="_blank">Pizza UI</a>
</div>



 
	</div>
	<div class="row-fluid"></div> 

<script charset="utf-8" src="/static/lib/mod.js"></script>
<script type="text/javascript" src="/static/pkg/base.js"></script>
<script type="text/javascript" src="/static/pkg/base-a.js"></script>
<script type="text/javascript">
  var globleConfig = require('globle/globle');
  globleConfig.init();
	var common = require('common/common');
	common.init();
	


 </script>
<script type="text/javascript" charset="utf-8" src="http://192.168.1.43:8132/livereload.js"></script></body>

</html>

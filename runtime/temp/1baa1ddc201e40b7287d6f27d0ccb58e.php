<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"F:\php\pizzacms\public/../application/login\view\index_index.html";i:1464059315;}*/ ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">  <title>登录</title>

    <link rel="stylesheet" media="screen" charset="utf-8" href="/static/pkg/base.css" />
    <link rel="stylesheet" media="screen" title="no title" charset="utf-8" href="/static/site/login/login.css" />
</head>

<body>
  <div class="login">
    <h2>PizzaAdmin</h2>
    <div class="login-content" id="form1">
        <div><input type="text" name="name" id="name" placeholder="用户名"></div>
        <div><input type="password" name="password" id="password" placeholder="密码"></div>
        <div>
          <button class="btn btn-success">登录</button>
        </div>
    </div>
  </div>
<script charset="utf-8" src="/static/lib/mod.js"></script>
<script type="text/javascript" src="/static/pkg/base.js"></script>
<script type="text/javascript" src="/static/pkg/base-a.js"></script>
<script type="text/javascript" src="/static/site/login/login.js"></script>
<script type="text/javascript">
    var login = require('login/login');
    login.init();
  </script>
<script type="text/javascript" charset="utf-8" src="http://192.168.1.43:8132/livereload.js"></script></body>

</html>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>测试微信公众号菜单</title>
</head>
<body>
<div style="display: flex;">
    <div>{!! $menuHtml !!}</div>
    <div>
        <h1>测试微信号</h1>
        <img width="200" height="200" src="{{ asset('0.jpg') }}"/>
    </div>
</div>
<h1><a href="/admin/wechat-menu">接入 laravel-admin 后台</a></h1>
<p>帐号密码：admin</p>
</body>
</html>

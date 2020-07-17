<!doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>登录</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<center>
    <h2>登录</h2>
    <hr>
    <form action="{{url('/user/login')}}" method="POST">
        {{csrf_field()}}
        Email：<input type="text" name="email"><br>
        密码：<input type="password" name="password"><br>
        <input type="submit" name="登录">
    </form>
</center>
</body>
</html>

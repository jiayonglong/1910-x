<!-- <!doctype <!DOCTYPE html> -->
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>注册</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<center>
    <h2>注册</h2>
    <hr>
    <form action="{{url('/user/reg')}}" method="POST">
        {{csrf_field()}}
        用户名：<input type="text" name="user_name" placeholder="请输入用户名"><br>
        Email：<input type="text" name="email" placeholder="请输入email"><br>
        密码：<input type="password" name="password" placeholder="请输入密码"><br>
        确认密码：<input type="password" name="pass1" placeholder="请次输入密码"><br>
        <input type="submit" class="but" value="注册">
    </form>
</center>
</body>
</html>


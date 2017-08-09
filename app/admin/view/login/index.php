<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台登陆页面</title>
    <link rel="stylesheet" href="./static/bt3/css/bootstrap.min.css">
    <link rel="stylesheet" href="./static/css/animate.css">
</head>
<body>
<div class="container animated fadeInUpBig"  style="width:50%;margin-top: 100px;">
    <div class="panel panel-default">
        <div class="panel-heading">
            <label for="exampleInputEmail1" class="panel-title">后台登陆</label>
        </div>
        <div class="panel-body">
            <form method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">用户名：</label>
                    <input type="text" class="form-control" name="username" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">密码：</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">验证码：</label>
                    <input type="text" class="form-control" name="captcha" id="exampleInputEmail1">
                </div>
                <br>
                <img src="?s=admin/login/captcha" onclick="this.src=this.src+'&mt='+Math.random()">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="auto"> 7天免登陆
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">登录</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
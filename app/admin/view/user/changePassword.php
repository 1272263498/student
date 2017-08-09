<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>密码修改</title>
    <link rel="stylesheet" href="./static/css/animate.css">
</head>
<body>
<?php include "./view/admin/header.php"?>
<div class="container animated fadeInUpBig"  style="width:70%;margin-top: 70px;">
    <div class="row">
        <?php include './view/admin/left.php'?>
        <div class="col-xs-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <label for="exampleInputEmail1" class="panel-title">修改密码</label>
                </div>
                <div class="panel-body">
                    <form method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">旧密码：</label>
                            <input type="password" class="form-control" name="oldPassword" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">新密码：</label>
                            <input type="password" class="form-control" name="newPassword" id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">确认新密码：</label>
                            <input type="password" class="form-control" name="confirmPassword" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary">修改</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>个人资料</title>
    <link rel="stylesheet" href="./static/bt3/css/bootstrap.min.css">
    <link rel="stylesheet" href="./static/css/animate.css">
</head>
<body>
<div class="container animated fadeInUpBig"  style="margin-top: 100px;">
    <div class="panel panel-default">
        <div class="panel-heading">
            <label for="exampleInputEmail1" class="panel-title">学生个人资料</label>
        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>编号</th>
                    <th>头像</th>
                    <th>姓名</th>
                    <th>性别</th>
                    <th>个人爱好</th>
                    <th>出生日期</th>
                    <th>所在班级</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($data as $k=> $v ): ?>
                    <tr>
                        <td><?php echo $k+1 ?></td>
                        <td><img src="<?php echo $v['profile'] ?>" width="80"></td>
                        <td><?php echo $v['sname'] ?></td>
                        <td><?php echo $v['sex'] ?></td>
                        <td><?php echo $v['hobby'] ?></td>
                        <td><?php echo $v['birthday'] ?></td>
                        <td><?php echo $v['gname'] ?></td>
                        <td></td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
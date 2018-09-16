<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>p2p金融借贷平台</title>
  
    <!-- 引入样式 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- bootstrapvaildator的样式 -->
    <link rel="stylesheet" href="./lib/bootstrapvaildator/css/bootstrapValidator.min.css">
    <!-- 自定义样式 -->
    <link rel="stylesheet" href="./dist/css/minCss/index.min.css">
    <!-- 登入样式 -->
    <link rel="stylesheet" href="./dist/css/minCss/login.min.css">
</head>
<body>
    <!-- 顶部导航栏 -->
    <?php
        require_once("./topnav.php")
    ?>
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
            <a class="navbar-brand" href="#"><img src="./images/logo.png" /></a>
            <span>用户登入</span>
            </div>
        </div><!-- /.container-fluid -->
    </nav>

    <!-- 登入界面 -->
    <div class="container login">
        <div class="panel panel-default">
            <div class="panel-heading">
                用户登入
            </div>
            <div class="panel-body center-block text-center">
                <form id="loginform" class="form-horizontal" method="post">
                    <p class="h4">请输入用户名和密码</p>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-5 control-label">用户名</label>
                        <div class="col-sm-3">
                        <input type="text" class="form-control" name="username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-5 control-label">密&emsp;码</label>
                        <div class="col-sm-3">
                        <input type="password" class="form-control" name="password">
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">登入</button>
                        <a href="./Register.php" class="aa">新用户，马上注册</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    
   
    <!-- 蒙层 -->
    <div class="modal fade" id="msgShowModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="msgShowTitle2">标题</h4>
            </div>
            <div class="modal-body" id="msgShowContent2">
                内容
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">关闭窗口</button>
            </div>
            </div>
        </div>
    </div>

    <!-- 引入页脚 -->
    <?php
        require_once('./footer.php')
    ?>
    <script src="./lib/jquery/jquery.min.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="./lib/bootstrapvaildator/js/bootstrapValidator.min.js"></script>
    <script src="./dist/js/index.min.js"></script>
    <script src="./dist/js/formcheck.min.js"></script>
</body>
</html>
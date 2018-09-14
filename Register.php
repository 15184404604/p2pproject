<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>p2p金融借贷平台</title>
  
    <!-- 引入样式 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- 自定义样式 -->
    <link rel="stylesheet" href="./dist/css/minCss/index.min.css">
    <!-- 登入样式 -->
    <link rel="stylesheet" href="./dist/css/minCss/register.min.css">
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
            <span>用户注册</span>
            </div>
        </div><!-- /.container-fluid -->
    </nav>

    <!-- 登入界面 -->
    <div class="container login">
        <div class="panel panel-default">
            <div class="panel-heading">
                用户注册
            </div>
            <div class="panel-body center-block text-center">
                <form class="form-horizontal">
                    <p class="h4">请填写注册信息，点击“提交注册”即可完成注册！</p>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-5 control-label">用&nbsp;户&nbsp;名:</label>
                        <div class="col-sm-3">
                        <input type="text" class="form-control" name="username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-5 control-label">密&emsp;&emsp;码:</label>
                        <div class="col-sm-3">
                        <input type="password" class="form-control" name="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-5 control-label">确认密码:</label>
                        <div class="col-sm-3">
                        <input type="password" class="form-control" name="repeatPassword">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-5 control-label">手机号码:</label>
                        <div class="col-sm-3">
                        <input type="text" class="form-control" name="phone">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-5 control-label">电子邮箱:</label>
                        <div class="col-sm-3">
                        <input type="text" class="form-control" name="email">
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-sm-offset-2 col-sm-10">
                        <button class="btn btn-success">同意协议并注册</button>
                        <a href="" class="aa">已有账号，马上登入</a>
                        </div>
                    </div>
                    <a href="" class="center-block text-center">《使用协议说明书》</a>
                </form>

            </div>
        </div>
    </div>


    <!-- 引入页脚 -->
    <?php
        require_once('./footer.php')
    ?>
    <script src="./lib/jquery/jquery.min.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="./dist/js/index.min.js"></script>
</body>
</html>
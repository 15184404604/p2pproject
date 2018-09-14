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
                <form class="form-horizontal">
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
                        <button class="btn btn-success">登入</button>
                        <a href="" class="aa">新用户，马上注册</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    


    <!-- 页脚 -->
    <div id="footer" class="row el-footer">
        <div class="container">
            <div class="col-sm-8 col-xs-12">
                <p>专业Java培训、PHP培训、UI培训、iOS培训、高级Web前端培训机构</p>
                <p>版权所有:&emsp;&emsp;2006-2015成都源代码教育咨询有限公司</p>
                <p>地&emsp;&emsp;址:&emsp;&emsp;成都市高新区府城大道西段399号天府新谷1号楼620-625</p>
                <p>电&emsp;&emsp;话:&emsp;&emsp;028-86261949&emsp;/&emsp;400-808-6840 
                邮箱： yuandaima@itsource.cn</p>
                <p>
                    <a href="">蜀ICP备14030149号-1</a>&emsp;&emsp;
                    <a href="">蜀公网安备510114990541</a>
                </p>
            </div>
            <div class="col-sm-2 col-xs-6">
                <p>官方微博:</p>
                <a href="">
                    <img class="img-responsive" src="./images/tecent.png" class="img-responsive">
                </a>
                <a href="">
                    <img class="img-responsive" src="./images/sina.png" >
                </a>
            </div>
            <div class="col-sm-2 col-xs-6">
                <p>官方微信:</p>
                <a href="">
                    <img class="img-responsive" src="./images/wx.jpg" >
                </a>
            </div>
        </div>
    </div>
    <script src="./lib/jquery/jquery.min.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="./dist/js/index.min.js"></script>
</body>
</html>
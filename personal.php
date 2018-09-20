<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>个人中心</title>
  
    <!-- 引入样式 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- 自定义样式 -->
    <link rel="stylesheet" href="./dist/css/minCss/personal.min.css">

    <script src="./lib/jquery/jquery.min.js"></script>
    <script src="./dist/js/userstateCheck.min.js"></script>
</head>
<body>
    <!-- 引入导航栏 -->
   <?php
    require_once('./header.php')
   ?>

   <!-- 主体内容 -->
   <div class="container" id="personal">
        <div class="row">
            <!-- 左侧的菜单 -->
            <?php
                require_once("./leftTreeMenu.php")
            ?>
            <!-- 右侧的内容 -->
            <div class="col-sm-9 col-xs-12" id="mainContent">
                <button type="button" class="btn btn-primary btn-xs" id="btnOnOff">隐藏</button>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <!-- 1 -->
                        <div class="row" id="userHeader">
                            <div class="col-sm-2 col-xs-12" id="userHeaderLeft">
                                <img src="./images/head_icon.jpg" class="img-thumbnail">
                            </div>
                            <div class="col-sm-10 col-xs-12" id="userHeaderRight">
                                <p>昵 称：源代码教育</p>
                                <p>用户名：小强</p>
                                <p>最后登录时间：2016-10-25 15:30:10</p>
                            </div>
                        </div>
                        <!-- 2 -->
                        <div class="row" id="money">
                           <div class="col-md-4 col-sm-12">总金额：<span>10000元</span></div>
                           <div class="col-md-4 col-sm-12">可用金额：<span>8000元</span></div>
                           <div class="col-md-4 col-sm-12">冻结金额：<span>2000元</span></div>
                        </div>
                        <!-- 3 -->
                        <div id="myButton">
                            <button type="button" class="btn btn-primary btn-lg">账户充值</button>
                            <button type="button" class="btn btn-danger btn-lg">账户提现</button>
                        </div>
                        <!-- 4 -->
                        <div id="attestation">
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <div class="attestation-auch">
                                        <div class="attestation-auch-left pull-left">
                                            <img src="./images/shiming.png" alt="">
                                        </div>
                                        <div class="attestation-auch-right pull-left">
                                            <h5>实名认证</h5>
                                            <p>
                                                <span>未认证</span>
                                                <a href="">马上认证</a>
                                            </p>
                                        </div>
                                        <div class="clearfix">

                                        </div>
                                        <p>实名认证之后才能在平台投资</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="attestation-auch">
                                        <div class="attestation-auch-left pull-left">
                                            <img src="./images/shouji.jpg" alt="">
                                        </div>
                                        <div class="attestation-auch-right pull-left">
                                            <h5>手机认证</h5>
                                            <p>
                                                <span>已认证</span>
                                                <a href="">查看</a>
                                            </p>
                                        </div>
                                        <div class="clearfix">

                                        </div>
                                        <p>可以收到系统操作信息,并增加使用安全性</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="attestation-auch">
                                        <div class="attestation-auch-left pull-left">
                                            <img src="./images/youxiang.jpg" alt="">
                                        </div>
                                        <div class="attestation-auch-right pull-left">
                                            <h5>邮箱认证</h5>
                                            <p>
                                                <span>已认证</span>
                                                <a href="">查看</a>
                                            </p>
                                        </div>
                                        <div class="clearfix">

                                        </div>
                                        <p>您可以设置邮箱来接收重要信息</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="attestation-auch">
                                        <div class="attestation-auch-left pull-left">
                                            <img src="./images/baozhan.jpg" alt="">
                                        </div>
                                        <div class="attestation-auch-right pull-left">
                                            <h5>VIP会员</h5>
                                            <p>
                                                <span>普通用户</span>
                                                <a href="">查看</a>
                                            </p>
                                        </div>
                                        <div class="clearfix">

                                        </div>
                                        <p>VIP会员，让你更快捷的投资</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- 引入页脚 -->
<?php
    require_once('./footer.php')
?>
    
<script src="./lib/bootstrap/js/bootstrap.min.js"></script>
<script src="./dist/js/index.min.js"></script>
<script src="./dist/js/personal.min.js"></script>
</body>
</html>
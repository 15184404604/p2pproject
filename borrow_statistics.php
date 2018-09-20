<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>借款报表统计</title>
  
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
                    <div class="panel-heading">
                        <h3 class="panel-title">借款类别及金额统计</h3>
                    </div>
                    <div class="panel-body">
                        <!-- 1. 为ECharts准备一个具备大小（宽高）的Dom -->    
                        <div id="mybox" style="width: 100%; height:400px"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- 引入页脚 -->
<?php
    require_once('./footer.php')
?>
<!-- 引入jqueryTemplate模板引擎的库文件 -->
<script src="./lib/jqueryTemplate/jquery.tmpl.js"></script>   
<script src="./lib/bootstrap/js/bootstrap.min.js"></script>
<script src="./dist/js/index.min.js"></script>
<script src="./dist/js/personal.min.js"></script>

<!-- 引入百度的echarts -->
<script src="./lib/echarts/echarts-all.js"></script>
<!-- 报表统计的js -->
<script src="./dist/js/myCharts.min.js"></script>
</body>
</html>
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
    <!-- 引入分页的css -->
    <link href="./lib/JqueryPagination/jquery.pagination.css" rel="stylesheet">
</head>
<body>
<!-- 引入导航栏 -->
<?php
require_once('./header.php')
?>

<!-- 主体内容 -->
<!-- 模板的内容开始 -->
<div class="container">
    <h4>投资列表</h4>
    <form action="invest_list.html" id="searchForm">
        <div style="margin: 20px 0px;">
                <span class="text-muted">标的状态</span><div style="margin-left: 30px" class="btn-group" data-toggle="buttons">
                <label class="btn btn-default active">
                <input type="radio" name="bidRequestState" value="-1" autocomplete="off" checked />&emsp;全部&emsp;
                </label>
                <label class="btn btn-default">
                <input type="radio" name="bidRequestState" value="2" autocomplete="off" />&emsp;招标中&emsp;
                </label>
                <label class="btn btn-default">
                <input type="radio" name="bidRequestState" value="8" autocomplete="off" />&emsp;还款中&emsp;
                </label>
            </div>
        </div>
    </form>
    <table class="table el-table table-hover">
        <thead id="gridHead">
            <tr>
                <th>借款人</th>
                <th width="180px">借款标题</th>
                <th>年利率</th>
                <th>金额</th>
                <th>还款方式</th>
                <th>进度</th>
                <th width="80px">操作</th>
            </tr>
        </thead>
        <tbody id="gridBody">
        
        </tbody>
    </table>
    <!-- 此处是分页插件  4. 拷贝页面结构-->
    <div style="text-align:center">
        <div id="page" class="m-pagination"></div>
    </div>
</div>
<!-- 引入页脚 -->
<?php
    require_once('./footer.php')
?>
<!-- jquery --> 
<script src="./lib/jquery/jquery.min.js"></script>
<!-- 引入jqueryTemplate模板引擎的库文件 -->
<script src="./lib/jqueryTemplate/jquery.tmpl.js"></script>   
<!-- 分页 -->
<script src="./lib/JqueryPagination/jquery.pagination-1.2.7.js"></script>
<!-- bootstrap -->
<script src="./lib/bootstrap/js/bootstrap.min.js"></script>
<script src="./dist/js/index.min.js"></script>
<!-- 定义模板： 用户渲染数据 -->
<script id="borrowTmpl" type="text/html">
    <tr>
        <td>zs</td>
        <td>${borrowTitle}</td>
        <td class="text-info">${currentRate}%</td>
        <td class="text-info">${borrowAmount}</td>
        <td>${repayment}</td>
        <td>100.00%</td>
        <td><a class="btn btn-danger btn-sm" href="">查看</a></td>
    </tr>
</script>
<script>
    //投资页面加载时自动发起ajax请求到后台的api获取当前的借款信息
    // $.get("./api/borrowAll.php",function(data){
    //     //console.log(data);
    //     var htmlStr=$("#borrowTmpl").tmpl(data);
    //     $("#gridBody").html(htmlStr)

    // },"json");
    $("#page").page({
        debug: true, //开启调试
        showInfo: false, //显示调试信息
        pageSize: 5, //定义每页的数据条数
        showJump: true, //开启跳转功能
        showPageSizes: true, //用户自定义每页大小
        remote: {
        //请求数据的地址
        url: './api/borrowAll.php', //请求的数据
        //请求成功的回调函数
        success: function (data) {
            //console.log("获取api回来的数据",data);
            //渲染模板
            var htmlStr=$("#borrowTmpl").tmpl(data.list)
            //把渲染后的结果更新到页面
            $("#gridBody").html(htmlStr);
            //$("#eventLog").append(' remote callback : ' + JSON.stringify(data) + '<br />');
            }
        }
    });
    $("#page").on("pageClicked", function (event, pageIndex) {
        //$("#eventLog").append('EventName = pageClicked , pageIndex = ' + pageIndex + '<br />');
    }).on('jumpClicked', function (event, pageIndex) {
        //$("#eventLog").append('EventName = jumpClicked , pageIndex = ' + pageIndex + '<br />');
    }).on('pageSizeChanged', function (event, pageSize) {
        //$("#eventLog").append('EventName = pageSizeChanged , pageSize = ' + pageSize + '<br />');
    });
</script>
</body>
</html>
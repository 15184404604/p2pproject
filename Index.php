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
</head>
<body>
    <!-- 引入导航栏 -->
   <?php
    require_once('./header.php')
   ?>

    <!-- 轮播图 -->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- 原点提示当前在那张图片 -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        </ol>

        <!-- 滚动的内容 -->
        <div class="carousel-inner" role="listbox">
            <!-- 第一图 -->
            <div class="item active">
                <img src="./images/banner01.jpg" alt="第一图">
                <div class="carousel-caption"></div>
            </div>

            <!-- 第二图 -->
            <div class="item">
                <img src="./images/banner02.jpg" alt="第二图">
                <div class="carousel-caption"></div>
            </div>
        </div>

        <!-- 左右的控制按钮 -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- 三大核心产品 -->
    <div class="container box">
        <div class="row">
            <div class="col-sm-4 col-xs-12">
                <dl class="dp">
                    <dt>投资理财</dt>
                    <dd>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</dd>
                </dl>
                
            </div>
            <div class="col-sm-4 col-xs-12">
                <dl class="dp">
                    <dt>投资理财</dt>
                    <dd>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</dd>
                </dl>
            </div>
            <div class="col-sm-4 col-xs-12">
                <dl class="dp">
                    <dt>投资理财</dt>
                    <dd>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</dd>
                </dl>
            </div>
            
        </div>
    </div>

    <!-- 进行中的借款 -->
    <div class="proceed container">
        <div class="proceed-title clearfix">
            <span class="pull-left">
                进行中的借款
            </span>
            <i class="pull-right">
                <a href="">进入投资列表</a>
            </i>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>借款人</th>
                    <th class="dn">借款标题</th>
                    <th>年利率</th>
                    <th>金额</th>
                    <th class="dn">还款方式</th>
                    <th>进度</th>
                    <th width="80">操作</th> 
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>张三</td>
                    <td class="dn">给我2000度过难关</td>
                    <td>10%</td>
                    <td>2000.00</td>
                    <td class="dn">按月分期还款</td>
                    <td>78.00%</td>
                    <td><a class="btn btn-danger btn-sm" href="">查看</a></td>                    
                </tr>
                <tr>
                    <td>张三</td>
                    <td class="dn">给我2000度过难关</td>
                    <td>10%</td>
                    <td>2000.00</td>
                    <td class="dn">按月分期还款</td>
                    <td>78.00%</td>
                    <td><a class="btn btn-danger btn-sm" href="">查看</a></td>                   
                </tr>
            </tbody>
        </table>
    </div>

    <!-- 新闻列表 用户反馈 理财经验 活动分享  -->
    <div class="container list">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <div class="list-title">
                    <span>
                        企业最新咨询
                    </span>
                    <i>
                        <a href="">更多咨询</a>
                    </i>
                </div>
                <ul>
                    <li>
                        <a href="">
                            <span>央视力挺互联网金融</span>
                            <span>发表日期：2015-03-23</span>
                        </a>                                                    
                    </li>
                    <li>
                        <a href="">
                            <span>央视力挺互联网金融</span>
                            <span>发表日期：2015-03-23</span>
                        </a>                                                        
                    </li>
                    <li>
                        <a href="">
                            <span>央视力挺互联网金融</span>
                            <span>发表日期：2015-03-23</span>
                        </a>                                                        
                    </li>
                </ul>
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="list-title">
                    <span>
                        用户反馈
                    </span>
                    <i>
                        <a href="">更多咨询</a>
                    </i>
                </div>
                <ul>
                    <li>
                        <a href="">
                            <span>央视力挺互联网金融</span>
                            <span>发表日期：2015-03-23</span>
                        </a>                                                        
                    </li>
                    <li>
                        <a href="">
                            <span>央视力挺互联网金融</span>
                            <span>发表日期：2015-03-23</span>
                        </a>                                                        
                    </li>
                    <li>
                        <a href="">
                            <span>央视力挺互联网金融</span>
                            <span>发表日期：2015-03-23</span>
                        </a>                                                        
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <div class="list-title">
                    <span>
                        理财经验
                    </span>
                    <i>
                        <a href="">更多咨询</a>
                    </i>
                </div>
                <ul>
                    <li>
                        <a href="">
                            <span>央视力挺互联网金融</span>
                            <span>发表日期：2015-03-23</span>
                        </a>                                                        
                    </li>
                    <li>
                        <a href="">
                            <span>央视力挺互联网金融</span>
                            <span>发表日期：2015-03-23</span>
                        </a>                                                        
                    </li>
                    <li>
                        <a href="">
                            <span>央视力挺互联网金融</span>
                            <span>发表日期：2015-03-23</span>
                        </a>                                                        
                    </li>
                </ul>
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="list-title">
                    <span>
                        活动分享
                    </span>
                    <i>
                        <a href="">更多咨询</a>
                    </i>
                </div>
                <ul>
                    <li>
                        <a href="">
                            <span>央视力挺互联网金融</span>
                            <span>发表日期：2015-03-23</span>
                        </a>                                                        
                    </li>
                    <li>
                        <a href="">
                            <span>央视力挺互联网金融</span>
                            <span>发表日期：2015-03-23</span>
                        </a>                                                        
                    </li>
                    <li>
                        <a href="">
                            <span>央视力挺互联网金融</span>
                            <span>发表日期：2015-03-23</span>
                        </a>                                                        
                    </li>
                </ul>
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
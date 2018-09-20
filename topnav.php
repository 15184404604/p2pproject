<nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-phone-alt"></span><i>028-86261949</i></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li id="homepage"><a href="./Index.php">首页</a></li>
                    <!-- 登录后 -->
                    
                    <!-- 登录前 -->
                    
                    <li><a href="#">帮助</a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="bottom" data-html="true" title="<img src='./images/contract.png'/>">联系客服</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <script src="./lib/jquery/jquery.min.js"></script>
    <script>
        $.get('./api/checkState.php',function(data){
            console.log(data);
            if(data.isSuccess){
                var htmlStr=`<li><a href="#">${data.username}</a></li>
                    <li><a href="#">赶快充值</a></li>
                    <li><a href="./api/loginOut.php">注销</a></li>`;
                $('#homepage').after(htmlStr)
            }else{
                var htmlStr=`<li><a href="./Register.php">注册</a></li>
                    <li><a href="./Login.php">登入</a></li>`;
                $('#homepage').after(htmlStr)
            }
        },"json")
    </script>
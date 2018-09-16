<?php
    //1.接收前端传来的数据
    $username=$_POST['username'];
    $password=md5($_POST['password']);

    //2.链接数据库
    //$link=mysqli_connect("localhost","root","root","p2p",3306);
    require_once("conn.php");

    //3.构造sql语句
    $sql="select * from userinfo where username='".$username."' and pwd='".$password."'"; //字符串值必须有引号

    //4. 执行sql语句
    $result=mysqli_query($link,$sql);

    //5.获取查询的结果集
    $rs=mysqli_fetch_assoc($result);

    //var_dump($rs);

    //6.根据是否执行成功返回json结果到前端
    if($rs!=null){
        //登录成功就创建seesion对象
        seesion_start();
        $_SESSION["username"]=$rs["username"];
        $_SESSION["userid"]=$rs["userid"];
        $reArrey=["isSueecss"=>true,"msg"=>"用户登录成功","username"=$_SESSION["username"]];
        //把要返回的数据转成json格式
        echo json_encode($reArrey);
    }else{
        $reArrey=["isSueecss"=>false,"msg"=>"请确认您的账号或是密码是否正确"];
        //把要返回的数据转成json格式
        echo json_encode($reArrey);
    };
    //6. 释放内存资源
    require_once("freeClose.php");
?>
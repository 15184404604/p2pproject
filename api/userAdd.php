<?php
    //1.接收前端传来的数据
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $phone=$_POST['phone'];
    $email=$_POST['email'];

    //2.链接数据库
    //$link=mysqli_connect("localhost","root","root","p2p",3306);
    require_once("conn.php");

    //3.构造sql语句
    $sql="insert into userinfo(username,pwd,mobile,email) values('".$username."','".$password."','".$phone."','".$email."')";

    //4. 执行sql语句
    $result=mysqli_query($link,$sql);

    //5.根据是否执行成功返回json结果到前端
    if($result){
        $reArrey=["isSueecss"=>true,"msg"=>"用户注册成功"];
        //把要返回的数据转成json格式
        echo json_encode($reArrey);
    }else{
        $reArrey=["isSueecss"=>false,"msg"=>"用户注册失败"];
        //把要返回的数据转成json格式
        echo json_encode($reArrey);
    };

    //6. 释放内存资源
    require_once("freeClose.php");
?>
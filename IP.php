<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>个人信息</title>
</head>
<body>

<div id="photo" style="background-color:#E0FFFF;height:35%;width:96%;float:left;">
<img src="/home/leerxing/图片/摄像头/123321.jpeg" alt="user photo" width="304" height="228"></div>

<div id="message" style="background-color:#E0FFFF;height:60%;width:96%;float:left;">
<?php
session_start();
echo "用户名：".$_SESSION["yhname"];
?>
<br>

    <script>
        function login(){
            window.location= "http://localhost/IPchange.php";
        }
    </script>
<button type="button" target="_blank" onclick="login()">修改测试1</button>
<input type="button" value="修改个人信息(失败)" οnclick="window.location.href='http://localhost/IPchange.php'"/>
<input type="button" value="测试(失败)" οnclick="window.location='http://localhost/IPchange.php'">

<a href="http://localhost/IPchange.php" target="_blank" rel="noopener noreferrer">测试!</a>


</div>
</body>


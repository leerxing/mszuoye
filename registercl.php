<?php

$servername = "localhost";
$username = "debian-sys-maint";
$password = "zPsHNW94dM9V1Zuz";
$dbname = "gouwu";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO consumer (username,password)
    VALUES ('$_POST[nname]','$_POST[npwd]')";
    $conn->exec($sql);
    echo "用户注册成功";
    header("http:location:login.php");
}
catch (PDOException $e) {
    echo $e->getMessage();
    exit;
}
?>

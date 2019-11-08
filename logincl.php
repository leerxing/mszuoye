<?php
session_start();
$yhname =$_POST["yhname"];
$pwd =$_POST["pwd"];


$servername = "localhost";
$username = "debian-sys-maint";
$password = "zPsHNW94dM9V1Zuz";
$dbname = "gouwu";
try {

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

    $sql = "select password from consumer where username = '$yhname'";
    $stmt = $conn->prepare($sql);
    $res=$stmt->execute();
     if ($res){
        while ($row = $stmt->fetch()){
            print_r($row);
            echo '<br/>';
    if($row['password']==$pwd)
    {
    $_SESSION["yhname"] =$yhname;

    header("location:main.php");
    }
    else
    {
    echo"登录失败";
    }

        }
     }else{
        echo '预处理语句执行失败';
     }



} catch (PDOException $e) {
    echo $e->getMessage();
    exit;
}
?>


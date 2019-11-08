<?php
session_start();
$servername = "localhost";
$username = "debian-sys-maint";
$password = "zPsHNW94dM9V1Zuz";
$dbname = "gouwu";
 
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

    $stmt = $conn->prepare("UPDATE consumer SET username=?,password=? 
WHERE username='$_SESSION[yhname]'");
    $stmt->bindParam(1, $nyhname);
    $stmt->bindParam(2, $npwd);

    $nyhname=$_POST[nname];
    $npwd=$_POST[npwd];
    $stmt->execute();

    echo "用户信息修改成功";
    echo $_SESSION["yhname"];
    echo "abc";
    echo $nyhname;
    echo $npwd;
    header("location:main.php");
    
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
?>

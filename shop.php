<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>商品</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "debian-sys-maint";
$password = "zPsHNW94dM9V1Zuz";
$dbname = "gouwu";
 
try {
    $dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    $a=$_POST["shopname"];
    $stmt = $dbh->prepare("SELECT * FROM goods WHERE goodsname =?");
    $stmt->bindParam(1,$a);
    $stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($results);
//另一个方法
       if ($stmt->execute(array($_POST['shopname']))) {
       while ($row = $stmt->fetch()) {
       print_r($row);
        }
}

   
}

catch(PDOException $e)
{
    echo $e->getMessage();
}
?>
</body>
</html>


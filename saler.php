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
    $stmt = $dbh->prepare("SELECT * FROM goods where shopname = ?");
       if ($stmt->execute(array($_POST['businessname']))) {
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


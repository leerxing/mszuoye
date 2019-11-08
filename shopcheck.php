<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>商品查询</title>
</head>
<body>

<div id="querysystem" style="background-color:#F5DEB3;height:800px;width:72%;float:left;">
<form action="shop.php" method="post">
<br><br>
商品名: <input type="text" name="shopname"><input type="submit" value="查询">
</form><br><br>
<form action="saler.php" method="post">
商家名: <input type="text" name="businessname"><input type="submit" value="查询">
	</form>
</div>
<div id="commodityrankings " style="background-color:#F5DEB3;height:800px;width:24%;float:left;">
<h1>人气商品排行榜</h1>
<?php    
    $servername = "localhost";
    $username = "debian-sys-maint";
    $password = "zPsHNW94dM9V1Zuz";
    $dbname = "gouwu";
 
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    $sql = "SELECT goodsname FROM goods ORDER BY stock asc LIMIT 10";
	
    foreach ($conn->query($sql) as $row) {
        print $row['goodsname'] . "\n";
        
    }
    
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
?>	
	
	
	
</div>

</body>
</html>

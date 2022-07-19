<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>私のPHP,MYSQL用語辞典</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<?php

try
{



$pro_comment=$_POST['topics'];



$dsn='mysql:dbname=portfolio;host=localhost;charset=utf8';
$user='root';
$password='';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='INSERT INTO topics (comment) VALUES (?)';
$stmt=$dbh->prepare($sql);
$data[]=$pro_comment;



$stmt->execute($data);

$dbh=null;


print '一件追加しました。<br />';

}
catch (Exception $e)
{
	print 'ただいま障害により大変ご迷惑をお掛けしております。';
	exit();
}

?>

<a href="dictionary_top.php"> 戻る</a>

</body>
</html>



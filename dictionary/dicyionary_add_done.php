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


$genre=$_POST['genre'];
$name=$_POST['name'];
$comment=$_POST['comment'];



$dsn='mysql:dbname=portfolio;host=localhost;charset=utf8';
$user='root';
$password='';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='INSERT INTO dictionary (genre,name,comment) VALUES (?,?,?)';
$stmt=$dbh->prepare($sql);
$data[]=$genre;
$data[]=$name;
$data[]=$comment;


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


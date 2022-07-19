


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>私のPHP,MYSQL用語辞典</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<?php



$id=$_GET['id'];

$dsn='mysql:dbname=portfolio;host=localhost;charset=utf8';
$user='root';
$password='';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='SELECT comment FROM topics WHERE id=?';
$stmt=$dbh->prepare($sql);
$data[]=$id;
$stmt->execute($data);

$rec=$stmt->fetch(PDO::FETCH_ASSOC);
$pro_comment=$rec['comment'];



$dbh=null;



?>

お知らせ<br />
<br />
<?php print $pro_comment; ?>
<br />

こちらを削除してよろしいですか？<br />
<br />
<form method="post" action="topics_delete_done.php">
<input type="hidden" name="id" value="<?php print $id; ?>">

<input type="button" onclick="history.back()" value="戻る">
<input type="submit" value="ＯＫ">
</form>

</body>
</html>


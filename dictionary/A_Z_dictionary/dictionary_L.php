<link rel="stylesheet" href="../style.css">
<?php

try
{

$dsn='mysql:dbname=portfolio;host=localhost;charset=utf8';
$user='root';
$password='';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='SELECT * FROM dictionary WHERE genre="L"';
$stmt=$dbh->prepare($sql);
$stmt->execute();

$dbh=null;

print '用語、コメント一覧<br /><br />';

print '<form method="post" action="dictionary_delete.php">';
while(true)
{
	$rec=$stmt->fetch(PDO::FETCH_ASSOC);
	if($rec==false)
	{
		break;
	}
	print '<input type="radio" name="id" value="'.$rec['id']. '">';
	print '用語--'. $rec['name'].'</br>';
        print 'コメント--'.$rec['comment'];
       
	print '<br />';
}



print '<input type="submit" name="delete" value="削除">';
print '</form>';

}
catch (Exception $e)
{
	 print 'ただいま障害により大変ご迷惑をお掛けしております。';
	 exit();
}

?>
<h2><a href="../dictionary_top.php">戻る<a/><h2/>



<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>私のPHP,MYSQL用語辞典</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<?php



//$post= sanitize($_POST);
$genre=$_POST['genre'];
$name=$_POST['name'];
$comment=$_POST['comment'];

print "頭文字:".$genre."</br>"; 
if($name=='')
{
	print '用語が入力されていません。<br />';
}
else
{
	print '用語:';
	print $name;
	print '<br />';
}


if($comment=='')
{
	print 'コメントが入力されていません。<br />';
}
else
{
	print 'コメント:';
	print $comment;
	print '<br />';
}





if($name=='' || $comment=='' )
{
	print '<form>';
	print '<input type="button" onclick="history.back()" value="戻る">';
	print '</form>';
}
else
{
	print '上記の内容を追加します。<br />';
	print '<form method="post" action="dicyionary_add_done.php">';
        print '<input type="hidden" name="genre" value="'.$genre.'">';
	print '<input type="hidden" name="name" value="'.$name.'">';
	print '<input type="hidden" name="comment" value="'.$comment.'">';
	
	print '<br />';
	print '<input type="button" onclick="history.back()" value="戻る">';
	print '<input type="submit" value="ＯＫ">';
	print '</form>';
}

?>
</body>
</html>



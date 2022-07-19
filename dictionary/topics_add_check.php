
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
$pro_comment=$_POST['topics'];



if($pro_comment=='')
{
	print 'お知らせが入力されていません。<br />';
}
else
{
	print 'お知らせ:';
	print $pro_comment;
	print '<br />';
}




if($pro_comment==''  )
{
	print '<form>';
	print '<input type="button" onclick="history.back()" value="戻る">';
	print '</form>';
}
else
{
	print '上記の内容を追加します。<br />';
	print '<form method="post" action="topics_add_done.php">';
	print '<input type="hidden" name="topics" value="'.$pro_comment.'">';
	
	
	print '<br />';
	print '<input type="button" onclick="history.back()" value="戻る">';
	print '<input type="submit" value="ＯＫ">';
	print '</form>';
}

?>
</body>
</html>



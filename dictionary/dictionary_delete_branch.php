<?php








if(isset($_POST['delete'])==true)
{
	if(isset($_POST['id'])==false)
	{
		header('Location:topics_ng.html');
		exit();
	}
	$id=$_POST['id'];
    
	header('Location:dictionary_delete.php?id='.$id);
	exit();
}

?>






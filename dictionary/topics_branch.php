<?php




if(isset($_POST['add'])==true)
{
    
	
	header('Location:topics_add.html');
	exit();
}




if(isset($_POST['delete'])==true)
{
	if(isset($_POST['id'])==false)
	{
		header('Location:topics_ng.html');
		exit();
	}
	$id=$_POST['id'];
    
	header('Location:topics_delete.php?id='.$id);
	exit();
}

?>





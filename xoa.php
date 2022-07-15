<?php  
	require_once('kiemtraconnect.php');
	
	if (isset($_GET['id'])) 
	{
		$id=$_GET['id'];
		$query ="DELETE FROM tbl_sach WHERE id={$id}";
		$result=mysqli_query($connect,$query);
		header('Location: index.php');
	}
	else
	{
		header('Location: index.php');
	}
?>
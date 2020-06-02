<?php 
	session_start();
	
	$id = $_GET['id'];

	unset($_SESSION['info'][$id]);

	header("Location: list.php");
	

?>
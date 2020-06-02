<?php 
	require_once('connection.php');

	$id = $_GET['id'];
	
	$query = "DELETE FROM sinhvien WHERE id =".$id;

	$sv = $conn->query($query);

	if ($sv == true) {
		setcookie('msg','Xóa thành công',time()+5);
	} else {
		setcookie('msg','Xóa không thành công',time()+5);
	}
	header('Location: list.php');
	

?>
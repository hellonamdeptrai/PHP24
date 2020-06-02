<?php 
	session_start();

	$info = array();
	$id = $_POST['id'];
	$info['id'] = $id;
	$info['name'] = $_POST['name'];
	$info['sdt'] = $_POST['phone_number'];
	$info['email'] = $_POST['email'];
	$info['gioitinh'] = $_POST['gioi_tinh'];
	$info['diachi'] = $_POST['dia_chi'];

	$_SESSION['info'][$id] = $info;

    if ($_SESSION == true) {
		setcookie('msg','Thêm mới thành công',time()+5);
		header('Location: list.php');
	} else {
		setcookie('msg','Thêm mới không thành công',time()+5);
		header('Location: add.php');
	}
?>
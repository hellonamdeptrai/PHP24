<?php 
	session_start();

	$info = array();
	$info['id'] = $_POST['id'];
	$info['name'] = $_POST['name'];
	$info['sdt'] = $_POST['phone_number'];
	$info['email'] = $_POST['email'];
	$info['gioitinh'] = $_POST['gioi_tinh'];
	$info['diachi'] = $_POST['dia_chi'];

	$_SESSION['info'] = $info;

    // if(isset($_SESSION['info']){  // Kiểm tra sự tồn tại của SESSION trước khi sử dụng
    //    	$_SESSION['info']['id'];
    //    	$_SESSION['info']['name'];
    //    	$_SESSION['info']['email'];
    // }

   //   echo "<pre>";
   //     print_r($_SESSION);
   // echo "</pre>";
    if ($_SESSION == true) {
		setcookie('msg','Thêm mới thành công',time()+5);
		header('Location: list.php');
	} else {
		setcookie('msg','Thêm mới không thành công',time()+5);
		header('Location: add.php');
	}
?>
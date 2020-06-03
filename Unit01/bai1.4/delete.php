<?php 
	session_start();
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	// B1: Lấy mã sản phẩm được chọn
	$maSP = $_GET['MaSp'];

	// Kiểm tra số lượng
	if($_SESSION['cart'][$maSP]['SoLuong'] > 1){
		// Giảm số lượng
		$_SESSION['cart'][$maSP]['SoLuong']--;
		$_SESSION['cart'][$maSP]['time']= date('Y-m-d H:i:s');
	}else{
		// Bước 2: Xóa sản phẩm khỏi giỏ hàng
		unset($_SESSION['cart'][$maSP]);
	}

	header("Location: cart.php");
 ?>
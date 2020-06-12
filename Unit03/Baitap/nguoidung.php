<?php

	class nguoidung
	{
		public $ten;
		public $email;
		public $matkhau;
		public $anhdaidien;

		function __construct($ten, $email, $matkhau, $anhdaidien)
    	{

        	$this->ten 			= $ten;
        	$this->email 		= $email;
        	$this->matkhau 		= $matkhau;
        	$this->anhdaidien 	= $anhdaidien;

    	}

    	function thongtin()
    	{

    		echo "Tên người dùng: " . $this->ten;
			echo "<br>Email: " . $this->email;
			echo "<br>Mật khẩu: " . $this->matkhau;
			echo "<br>Ảnh đại diện: " . $this->anhdaidien;

    	}

	}


	$nguoidung = new nguoidung("Lò Tuấn Nam","nam@gmail.com","123","https://icdn.dantri.com.vn/thumb_w/640/2017/1-1510967806416.jpg");

	$nguoidung->thongtin();
	
	


?>
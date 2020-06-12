<?php

	class danhmuc
	{
		public $ten;
		public $duongdan;
		public $danhmuccha;
		public $anhhienthi;
		public $mota;

		function __construct($ten, $duongdan, $danhmuccha, $anhhienthi,$mota)
    	{

        	$this->ten 			= $ten;
        	$this->duongdan 	= $duongdan;
        	$this->danhmuccha 	= $danhmuccha;
        	$this->anhhienthi 	= $anhhienthi;
        	$this->mota 		= $mota;

    	}

    	function thongtin()
    	{

    		echo "Tên danh mục: " . $this->ten;
			echo "<br>Đường dẫn: " . $this->duongdan;
			echo "<br>Danh mục cha: " . $this->danhmuccha;
			echo "<br>Ảnh hiện thị: " . $this->anhhienthi;
			echo "<br>Mô tả: " . $this->mota;

    	}

	}


	$game = new danhmuc("GTA V","E:\GTA V","E","https://cheapgame.asia/1441-large_default/gta-5-rockstar-social-club-global-cd-key.jpg","Game cướp đường phố");

	$game->thongtin();
	
?>
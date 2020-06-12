<?php
	
	class baiviet
	{
		public $tieude;
		public $duongdan;
		public $mota;
		public $noidung;

		function __construct($tieude, $duongdan, $mota, $noidung)
    	{

        	$this->tieude 		= $tieude;
        	$this->duongdan 	= $duongdan;
        	$this->mota 		= $mota;
        	$this->noidung 		= $noidung;

    	}

    	function thongtin()
    	{

    		echo "Tên tiêu đề: " . $this->tieude;
			echo "<br>Đường dẫn: " . $this->duongdan;
			echo "<br>Mô tả: " . $this->mota;
			echo "<br>Nội dung: " . $this->noidung;

    	}

	}


	$baiviet = new baiviet("Một người nổi tiếng tên Nam","google.com","Nam đẹp trai kinh khủng khiếp","Nam rất đẹp trai và cực kỳ nổi tiếng :)))");

	$baiviet->thongtin();
	

?>
<?php 
	require_once('Model.php');
	
	class Post extends Model{
		var $table = 'posts';


		function cate(){
		    // Cau lenh truy van co so du lieu
		    $query = "SELECT * FROM categories";

		    $data = array();

		    // Thuc thi cau lenh truy van co so du lieu
		    $result = $this->connection->query($query);

		    while($row = $result->fetch_assoc()) { 
		    	$data[] = $row;
		    }

		    return $data;
		}
	}
 ?>
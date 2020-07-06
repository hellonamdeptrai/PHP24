<?php 
	require_once('Model.php');
	class Login extends Model{

		function Log($data){
			
		    $query = "SELECT * FROM authors a where a.email = '".$data['email']."' and a.password = '".$data['password']."' and a.status = 1";

		

			// Thuc thi cau lenh truy van co so du lieu
			return $this->connection->query($query)->fetch_assoc();
		}	
	}
 ?>
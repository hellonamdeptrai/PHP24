<?php 
	require_once('Connection.php');
	class Author{
		var $connection;

		function __construct(){
			$conn_obj = new Connection();
			$this->connection = $conn_obj->conn;
		}

		function All(){
		    // Cau lenh truy van co so du lieu
		    $query = "SELECT * FROM authors";

		    $data = array();

		    // Thuc thi cau lenh truy van co so du lieu
		    $result = $this->connection->query($query);

		    while($row = $result->fetch_assoc()) { 
		    	$data[] = $row;
		    }

		    return $data;
		}

		function find($id){
			// Cau lenh truy van co so du lieu
			 $query = "SELECT * FROM authors WHERE id =" .$id;

			 $data = array();

		    // Thuc thi cau lenh truy van co so du lieu
		    return $this->connection->query($query)->fetch_assoc();
		}

		// function create($data){
		// 	$query = "INSERT INTO categories(title,description) VALUES ('".$data['title']."','".$data['description']."')";

		// 	return $this->connection->query($query);
		// }

	}
 ?>
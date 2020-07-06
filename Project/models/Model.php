<?php 
	require_once('Connection.php');
	class Model{
		var $connection;
		// var $table = '';

		function __construct(){
			$conn_obj = new Connection();
			$this->connection = $conn_obj->conn;
		}

		function searchPost(){
			$valueToSearch = $_POST['search'];

    		$query = "SELECT * FROM `posts` WHERE CONCAT(`id`, `title`, `description`, `contents`) LIKE '%".$valueToSearch."%'";

		    // Thuc thi cau lenh truy van co so du lieu
		    $result = $this->connection->query($query);

		    while($row = $result->fetch_assoc()) { 
		    	$search[] = $row;
		    }

		    return $search;
		}

		function category(){
			// Cau lenh truy van co so du lieu
		    $query = "SELECT * FROM categories";

		    $categories = array();

		    // Thuc thi cau lenh truy van co so du lieu
		    $result = $this->connection->query($query);

		    while($row = $result->fetch_assoc()) { 
		    	$categories[] = $row;
		    }

		    return $categories;
		}

		function detailcate($id){
			// 1 Khối
			//Câu lệnh truy vấn
			$query = "SELECT p.*, c.title AS 'category' FROM posts p LEFT JOIN categories c ON p.category_id = c.id WHERE p.status = 1 and p.category_id = ".$id." ORDER BY p.created_at DESC LIMIT 1";

			$data = array();

		    return $this->connection->query($query)->fetch_assoc();
		}

		function detailcate2($id){
			// 2 Khối
			//Câu lệnh truy vấn
			$query = "SELECT p.*, c.title AS 'category' FROM posts p LEFT JOIN categories c ON p.category_id = c.id WHERE p.status = 1 and p.category_id = ".$id." ORDER BY p.created_at DESC LIMIT 1,2";

			$data = array();

			 // Thuc thi cau lenh truy van co so du lieu
		    $result = $this->connection->query($query);

			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}

		    return $data;
		}

		function detailcate3($id){
			// 2 Khối
			//Câu lệnh truy vấn
			$query = "SELECT p.*, c.title AS 'category' FROM posts p LEFT JOIN categories c ON p.category_id = c.id WHERE p.status = 1 and p.category_id = ".$id." ORDER BY p.created_at DESC LIMIT 3,16";

			$data = array();

			 // Thuc thi cau lenh truy van co so du lieu
		    $result = $this->connection->query($query);

			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}

		    return $data;
		}

		function detail($id){
			// Cau lenh truy van co so du lieu
			 $query = "SELECT p.*, c.title AS 'cate', a.* FROM posts p LEFT JOIN categories c ON p.category_id = c.id LEFT JOIN authors a on p.authors_id = a.id where p.id=".$id;

			 $data = array();

		    // Thuc thi cau lenh truy van co so du lieu
		    return $this->connection->query($query)->fetch_assoc();
		}

		function lienquan($category_id){
			// 2 Khối đầu
		    // Cau lenh truy van co so du lieu
		    $query = "SELECT p.*, c.title AS 'category' FROM posts p LEFT JOIN categories c ON p.category_id = c.id WHERE p.status = 1 and p.category_id = ".$category_id." ORDER BY RAND() DESC LIMIT 5";

		    $data = array();

		    // Thuc thi cau lenh truy van co so du lieu
		    $result = $this->connection->query($query);

		    while($row = $result->fetch_assoc()) { 
		    	$data[] = $row;
		    }

		    return $data;
		}

		function chudekhac(){
			//KHỐI TO NỔI BẬT

			//Câu lệnh truy vấn
			$query = "SELECT p.*, c.title AS 'category' FROM posts p LEFT JOIN categories c ON p.category_id = c.id WHERE p.`status` = 1 ORDER BY RAND() LIMIT 2";

			$data = array();

			 // Thuc thi cau lenh truy van co so du lieu
		    $result = $this->connection->query($query);

			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}

		    return $data;
		}

		function post(){
			// 2 Khối đầu
		    // Cau lenh truy van co so du lieu
		    $query = "SELECT p.*, c.title AS 'category' FROM posts p LEFT JOIN categories c ON p.category_id = c.id WHERE p.`status` = 1 ORDER BY p.created_at DESC LIMIT 2";

		    $data = array();

		    // Thuc thi cau lenh truy van co so du lieu
		    $result = $this->connection->query($query);

		    while($row = $result->fetch_assoc()) { 
		    	$data[] = $row;
		    }

		    return $data;
		}

		function post2(){
			// 6 Khối
			//Câu lệnh truy vấn
			$query = "SELECT p.*, c.title AS 'category' FROM posts p LEFT JOIN categories c ON p.category_id = c.id WHERE p.`status` = 1 ORDER BY p.created_at DESC LIMIT 2,6";

			$data = array();

			 // Thuc thi cau lenh truy van co so du lieu
		    $result = $this->connection->query($query);

			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}

		    return $data;
		}

		function post3(){
			//KHỐI TO NỔI BẬT

			//Câu lệnh truy vấn
			$query = "SELECT p.*, c.title AS 'category' FROM posts p LEFT JOIN categories c ON p.category_id = c.id WHERE p.`status` = 1 ORDER BY RAND() LIMIT 1";

			$data = array();

			 // Thuc thi cau lenh truy van co so du lieu
		    $result = $this->connection->query($query);

			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}

		    return $data;
		}

		function post4(){
			//KHỐI TO NỔI BẬT

			//Câu lệnh truy vấn
			$query = "SELECT p.*, c.title AS 'category' FROM posts p LEFT JOIN categories c ON p.category_id = c.id WHERE p.`status` = 1 ORDER BY RAND() LIMIT 2";

			$data = array();

			 // Thuc thi cau lenh truy van co so du lieu
		    $result = $this->connection->query($query);

			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}

		    return $data;
		}
		function post42(){
			//KHỐI TO NỔI BẬT

			//Câu lệnh truy vấn
			$query = "SELECT p.*, c.title AS 'category' FROM posts p LEFT JOIN categories c ON p.category_id = c.id WHERE p.`status` = 1 ORDER BY RAND() LIMIT 2,2";

			$data = array();

			 // Thuc thi cau lenh truy van co so du lieu
		    $result = $this->connection->query($query);

			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}

		    return $data;
		}
		function post43(){
			//KHỐI TO NỔI BẬT

			//Câu lệnh truy vấn
			$query = "SELECT p.*, c.title AS 'category' FROM posts p LEFT JOIN categories c ON p.category_id = c.id WHERE p.`status` = 1 ORDER BY RAND() LIMIT 4,2";

			$data = array();

			 // Thuc thi cau lenh truy van co so du lieu
		    $result = $this->connection->query($query);

			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}

		    return $data;
		}

		function post5(){
			//KHỐI TO NỔI BẬT

			//Câu lệnh truy vấn
			$query = "SELECT p.*, c.title AS 'category' FROM posts p LEFT JOIN categories c ON p.category_id = c.id WHERE p.`status` = 1 ORDER BY RAND() LIMIT 5";

			$data = array();

			 // Thuc thi cau lenh truy van co so du lieu
		    $result = $this->connection->query($query);

			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}

		    return $data;
		}

		function post6(){
			//KHỐI TO NỔI BẬT

			//Câu lệnh truy vấn
			$query = "SELECT p.*, c.title AS 'category' FROM posts p LEFT JOIN categories c ON p.category_id = c.id WHERE p.`status` = 1 and p.`category_id` = 1 ORDER BY RAND() LIMIT 2";

			$data = array();

			 // Thuc thi cau lenh truy van co so du lieu
		    $result = $this->connection->query($query);

			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}

		    return $data;
		}

		function post7(){
			//KHỐI TO NỔI BẬT

			//Câu lệnh truy vấn
			$query = "SELECT p.*, c.title AS 'category' FROM posts p LEFT JOIN categories c ON p.category_id = c.id WHERE p.`status` = 1 and p.`category_id` = 2 ORDER BY RAND() LIMIT 3";

			$data = array();

			 // Thuc thi cau lenh truy van co so du lieu
		    $result = $this->connection->query($query);

			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}

		    return $data;
		}

		function post8(){
			//KHỐI TO NỔI BẬT

			// //Câu lệnh truy vấn
			$query = "SELECT p.*, c.title AS 'category' FROM posts p LEFT JOIN categories c ON p.category_id = c.id WHERE p.`status` = 1";

			$data = array();

			 // Thuc thi cau lenh truy van co so du lieu
		    $result = $this->connection->query($query);

			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}

		    return $data;

		}

		function post9($n){
			//Catagories

			// //Câu lệnh truy vấn
			$query = "SELECT COUNT(category_id), p.category_id, c.title AS 'category' FROM posts p LEFT JOIN categories c ON p.category_id = c.id WHERE p.category_id =".$n;


			 // Thuc thi cau lenh truy van co so du lieu
		    $result = $this->connection->query($query);

			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}

		    return $data;

		}

	}
 ?>
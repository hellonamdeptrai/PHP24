<?php 
	require_once('models/Author.php');
	class AuthorController{
		var $auth_model;

		function __construct(){
			$this->auth_model = new Author();
		}

		public function list(){
			$data = array();
			$data = $this->auth_model->All();
			require_once('views/author/list.php');
		}

		public function detail(){
			$id = (isset($_GET['id'])?$_GET['id']:0);

			$auth = $this->auth_model->find($id);
			require_once('views/author/detail.php');
		}

		// public function add(){
		// 	require_once('views/category/add.php');
		// }

		// public function store(){
		// 	$data = array();

		// 	$data['title'] = $_POST['title'];
		// 	$data['description'] = $_POST['description'];

		// 	$status = $this->cate_model->create($data);

		// 	if ($status == true) {
		// 		header('Location: ?mod=category');
		// 	} else {
		// 		header('Location: ?mod=category&act=add');
		// 	}
			
		// }
	}
 ?>
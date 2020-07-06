<?php 
	require_once('models/Post.php');
	class PostController{
		var $post_model;

		function __construct(){
			$this->post_model = new Post();
		}

		public function list(){
			
			$data = array();

			$data = $this->post_model->All();
			require_once('views/post/list.php');
		}

		public function detail(){
			$id = (isset($_GET['id'])?$_GET['id']:0);

			$post = $this->post_model->find($id);
			require_once('views/post/detail.php');
		}

		public function add(){

			$categories = $this->post_model->cate();
			require_once('views/post/add.php');
		}

		public function store(){
			date_default_timezone_set('Asia/Ho_Chi_Minh');
			$data = array();

			$target_dir = "../public/img/";
			$thumbnail = "";

			$target_file = $target_dir . basename($_FILES["thumbnail"]["name"]); // link sẽ upload file lên

			$status_upload = move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file);

			if ($status_upload) { // nếu upload file không có lỗi 
			    $data['thumbnail'] = basename( $_FILES["thumbnail"]["name"]);
			}

			if ($_SESSION['author']['user'] == 1) {
				$a = $_POST['status'];
			}else{
				$a = -1;
			}

			$data['title'] = $_POST['title'];
			$data['description'] = $_POST['description'];
			$data['contents'] = $_POST['contents'];
			$data['status'] = $a;
			$data['category_id'] = $_POST['category_id'];
			$data['authors_id'] = $_SESSION['author']['id'];
			$data['created_at'] = date('Y-m-d H:i:s');

			$status = $this->post_model->create($data);

			if ($status == true) {
				header('Location: ?mod=post');
			} else {
				header('Location: ?mod=post&act=add');
			}
			
		}

		public function edit(){
			$id = (isset($_GET['id'])?$_GET['id']:0);

			$categories = $this->post_model->cate();
			$post = $this->post_model->find($id);
			
			if ($_SESSION['author']['user'] != 1) {
				if($_SESSION['author']['id'] != $post['authors_id']){
					header('Location: ?mod=error&act=error403');
				}
			}

			require_once('views/post/edit.php');
		}

		public function update(){
			date_default_timezone_set('Asia/Ho_Chi_Minh');
			$data = array();

			$target_dir = "../public/img/";
			$thumbnail = "";

			$target_file = $target_dir . basename($_FILES["thumbnail"]["name"]); // link sẽ upload file lên

			$status_upload = move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file);

			if ($status_upload) { // nếu upload file không có lỗi 
			    $data['thumbnail'] = basename( $_FILES["thumbnail"]["name"]);
			}

			$data['id'] = $_POST['id'];
			$data['title'] = $_POST['title'];
			$data['description'] = $_POST['description'];
			$data['contents'] = $_POST['contents'];
			$data['status'] = $_POST['status'];
			$data['category_id'] = $_POST['category_id'];
			
			$data['created_at'] = date('Y-m-d H:i:s');

			$status = $this->post_model->update($data);

			if ($status == true) {
				header('Location: ?mod=post');
			} else {
				header('Location: ?mod=post&act=edit&id='.$data['id']);
			}
			
		}

		public function delete(){
			$id = (isset($_GET['id'])?$_GET['id']:0);
			$post = $this->post_model->delete($id);
			if ($post == true) {
				header('Location: ?mod=post');
			}
		}
	}
 ?>
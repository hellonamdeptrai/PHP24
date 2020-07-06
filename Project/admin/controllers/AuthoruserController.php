<?php 
	require_once('models/Author.php');
	class AuthoruserController{
		var $auth_model;

		function __construct(){
			$this->auth_model = new Author();
		}

		public function edit(){
			$id = (isset($_GET['id'])?$_GET['id']:0);
			$auth = $this->auth_model->find($id);

			if ($_SESSION['author']['user'] != 1) {
				if($_SESSION['author']['id'] != $id){
					header('Location: ?mod=error&act=error403');
				}
			}
			require_once('views/authoruser/edit.php');
		}

		public function update(){
			$data = array();

			$data['id'] = $_POST['id'];
			$data['name'] = $_POST['name'];
			$data['email'] = $_POST['email'];
			$data['password'] = md5($_POST['password']);
			$data['about'] = $_POST['about'];
			$data['status'] = $_POST['status'];

			$status = $this->auth_model->update($data);

			if ($status == true) {
				header('Location: ?mod=home');
			} else {
				header('Location: ?mod=authoruser&act=edit&id='.$data['id']);
			}
			
		}

	}
 ?>
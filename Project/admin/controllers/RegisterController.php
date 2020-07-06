<?php 
	require_once('models/Author.php');
	class RegisterController{
		var $regi_model;

		function __construct(){
			$this->regi_model = new Author();
		}

		public function list(){
			require_once('views/register/register.php');
		}

		public function register(){

			$data['name'] = $_POST['name'];
			$data['email'] = $_POST['email'];
			$data['password'] = md5($_POST['password']);
			$data['status'] = 1;
			$data['user'] = 0;

			$status = $this->regi_model->create($data);

			if ($status == true) {
				header('Location: ?mod=login');
			} else {
				header('Location: ?mod=register');
			}
			
		}
	}
 ?>
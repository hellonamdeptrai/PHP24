<?php 
	require_once('models/Login.php');
	class LoginController{
		var $login_model;

		function __construct(){
			$this->login_model = new Login();
		}

		public function list(){
			require_once('views/login/login.php');
		}

		public function login(){
			session_start();
			$data = array();

			$data['email'] = $_POST['email'];
			$data['password'] = md5($_POST['password']);

			$author = $this->login_model->Log($data);
			
			if ($author !== NULL) {
				$_SESSION['isLogin'] = true;
				$_SESSION['author'] = $author;
				header("Location: ?mod=home");
			} else {
				setcookie('msg','Đăng nhập thất bại',time()+1);
				header("Location: ?mod=login");
			}
			
		}
	}
 ?>
<?php 
	class HomeController{

		public function home(){
			require_once('views/home/home.php');
		}

		public function logout(){
		    session_start();
		    unset($_SESSION['author']);
		    unset($_SESSION['isLogin']);
		    header("Location: http://localhost/hoctap/PHP24/Project/admin/?mod=login");
		}
	}
 ?>
<?php 
	class ErrorController{

		public function error404(){
			require_once('views/error/404.php');
		}
		public function error403(){
			require_once('views/error/403.php');
		}
	}
 ?>
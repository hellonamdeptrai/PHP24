<?php 
	session_start();

	$mod = (isset($_GET['mod'])?$_GET['mod']:'');
	$act = (isset($_GET['act'])?$_GET['act']:'list');
	
	switch ($mod) {
		case 'category':
			checkAuth();
			checkUser();
			require_once('controllers/CategoryController.php');
			$controller_obj = new CategoryController();
			switch ($act) {
				case 'list':
					$controller_obj->list();
					break;
				case 'detail':
					$controller_obj->detail();
					break;
				case 'add':
					$controller_obj->add();
					break;
				case 'store':
					$controller_obj->store();
					break;
				case 'edit':
					$controller_obj->edit();
					break;
				case 'update':
					$controller_obj->update();
					break;
				case 'delete':
					$controller_obj->delete();
					break;
				default:
					require_once('controllers/ErrorController.php');
					$controller_er = new ErrorController();
					$controller_er->error404();
					break;
			}
			break;
		case 'author':
			checkAuth();
			checkUser();
			require_once('controllers/AuthorController.php');
			$controller_obj = new AuthorController();
			switch ($act) {
				case 'list':
					$controller_obj->list();
					break;
				case 'detail':
					$controller_obj->detail();
					break;
				case 'add':
					$controller_obj->add();
					break;
				case 'store':
					$controller_obj->store();
					break;
				case 'edit':
					$controller_obj->edit();
					break;
				case 'update':
					$controller_obj->update();
					break;
				case 'delete':
					$controller_obj->delete();
					break;
				default:
					require_once('controllers/ErrorController.php');
					$controller_er = new ErrorController();
					$controller_er->error404();
					break;
			}
			break;
		case 'post':
			checkAuth();
			require_once('controllers/PostController.php');
			$controller_obj = new PostController();
			switch ($act) {
				case 'list':
					$controller_obj->list();
					break;
				case 'detail':
					$controller_obj->detail();
					break;
				case 'add':
					$controller_obj->add();
					break;
				case 'store':
					$controller_obj->store();
					break;
				case 'edit':
					$controller_obj->edit();
					break;
				case 'update':
					$controller_obj->update();
					break;
				case 'delete':
					$controller_obj->delete();
					break;
				default:
					require_once('controllers/ErrorController.php');
					$controller_er = new ErrorController();
					$controller_er->error404();
					break;
			}
			break;
		case 'login':
			checkLogin();
			require_once('controllers/LoginController.php');
			$controller_obj = new LoginController();
			switch ($act) {
				case 'list':
					$controller_obj->list();
					break;
				case 'login':
					$controller_obj->login();
					break;
				default:
					require_once('controllers/ErrorController.php');
					$controller_er = new ErrorController();
					$controller_er->error404();
					break;
			}
			break;
		case 'register':
			checkLogin();
			require_once('controllers/RegisterController.php');
			$controller_obj = new RegisterController();
			switch ($act) {
				case 'list':
					$controller_obj->list();
					break;
				case 'register':
					$controller_obj->register();
					break;
				default:
					require_once('controllers/ErrorController.php');
					$controller_er = new ErrorController();
					$controller_er->error404();
					break;
			}
			break;
		case 'authoruser':
			checkAuth();
			require_once('controllers/AuthoruserController.php');
			$controller_obj = new AuthoruserController();
			switch ($act) {
				case 'edit':
					$controller_obj->edit();
					break;
				case 'update':
					$controller_obj->update();
					break;
				default:
					require_once('controllers/ErrorController.php');
					$controller_er = new ErrorController();
					$controller_er->error404();
					break;
			}
			break;
		case 'home':
			checkAuth();
			require_once('controllers/HomeController.php');
			$controller_obj = new HomeController();
			switch ($act) {
				case 'list':
					$controller_obj->home();
					break;
				case 'logout':
					$controller_obj->logout();
					break;
				default:
					require_once('controllers/ErrorController.php');
					$controller_er = new ErrorController();
					$controller_er->error404();
					break;
			}
			break;
		case 'error':
			checkAuth();
			require_once('controllers/ErrorController.php');
			$controller_er = new ErrorController();
			switch ($act) {
				case 'error403':
					$controller_er->error403();
					break;
				default:
					$controller_er->error404();
					break;
			}
			break;
		default:
			require_once('controllers/ErrorController.php');
			$controller_er = new ErrorController();
			$controller_er->error404();
			break;
	}

	function checkAuth()
	{
		if(empty($_SESSION['isLogin']))
		{
			header('Location: ?mod=login');
		}
	}
	function checkLogin()
	{
		if(!empty($_SESSION['isLogin']))
		{
			header('Location: ?mod=home');
		}
	}
	function checkUser()
	{
		if($_SESSION['author']['user'] != 1)
		{
			header('Location: ?mod=error&act=error403');
		}
	}
 ?>
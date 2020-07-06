<?php 
	$mod = (isset($_GET['mod'])?$_GET['mod']:'');
	$act = (isset($_GET['act'])?$_GET['act']:'list');
	
	switch ($mod) {
		case 'blog':
			require_once('controllers/PostController.php');
			$controller_obj = new PostController();
			switch ($act) {
				case 'list':
					$controller_obj->list();
					break;
				case 'blogpost':
					$controller_obj->blogpost();
					break;
				case 'category':
					$controller_obj->categorydetail();
					break;
				case 'about':
					$controller_obj->about();
					break;
				case 'contact':
					$controller_obj->contact();
					break;
				case 'email':
					$controller_obj->email();
					break;
				case 'search':
					$controller_obj->search();
					break;
				default:
					require_once('controllers/ErrorController.php');
					$controller_er = new ErrorController();
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
 ?>
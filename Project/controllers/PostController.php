<?php 
	require_once('models/Model.php');
	class PostController{
		var $post_model;

		function __construct(){
			$this->post_model = new Model();
		}

		public function search(){
			$cate_name = $_GET['act'];
			$search_name = $_POST['search'];

			$categories = $this->post_model->category();

    		$search = $this->post_model->searchPost();
    		//Đề xuất
			$data5 = $this->post_model->post5();
			
			require_once('views/blog/search.php');
		}

		public function list(){
			$categories = array();
			$categories = $this->post_model->category();

			$data = array();
			//hai khối đầu
			$data = $this->post_model->post();
			//6 khối
			$data2 = $this->post_model->post2();
			$data23 = $this->post_model->post23();
			//khối 1 to
			$data3 = $this->post_model->post3();
			//khối nhỏ dưới khối to
			$data4 = $this->post_model->post4();
			$data42 = $this->post_model->post42();
			$data43 = $this->post_model->post43();
			//Bài viết nổi bật
			$data5 = $this->post_model->post5();
			//Bài viết giải trí
			$data6 = $this->post_model->post6();
			//Bài viết thể thao
			$data7 = $this->post_model->post7();
			//Bài viết cũ
			$data8 = $this->post_model->post8();
			//Catagories
			$data9 = $this->post_model->post9(1);
			$data10 = $this->post_model->post9(2);
			$data11 = $this->post_model->post9(3);
			$data12 = $this->post_model->post9(4);
			$data13 = $this->post_model->post9(5);

			require_once('views/blog/index.php');
		}

		public function blogpost(){
			$id = (isset($_GET['id'])?$_GET['id']:0);

			$categories = array();
			$categories = $this->post_model->category();

			$post = $this->post_model->detail($id);
			$category_id = $post['category_id'];
			$post2 = $this->post_model->lienquan($category_id);
			$post3 = $this->post_model->chudekhac();
			//Catagories
			$data9 = $this->post_model->post9(1);
			$data10 = $this->post_model->post9(2);
			$data11 = $this->post_model->post9(3);
			$data12 = $this->post_model->post9(4);
			$data13 = $this->post_model->post9(5);

			//comment
			// $comment = $this->post_model->comment();
			require_once('views/blog/blog-post.php');
		}

		public function categorydetail(){
			$id = (isset($_GET['id'])?$_GET['id']:0);
			$cate_name = $_GET['cate'];
			$color = $_GET['id'];

			$categories = array();
			$categories = $this->post_model->category();

			$post1 = $this->post_model->detailcate($id);
			$post2 = $this->post_model->detailcate2($id);
			$post3 = $this->post_model->detailcate3($id);

			$post4 = $this->post_model->chudekhac();
			//Catagories
			$data9 = $this->post_model->post9(1);
			$data10 = $this->post_model->post9(2);
			$data11 = $this->post_model->post9(3);
			$data12 = $this->post_model->post9(4);
			$data13 = $this->post_model->post9(5);

			require_once('views/blog/category.php');
		}

		public function about(){
			$cate_name = $_GET['act'];

			$categories = array();
			$categories = $this->post_model->category();

			$data = array();
			//Đề xuất
			$data5 = $this->post_model->post5();
			
			require_once('views/blog/about.php');
		}

		public function contact(){
			$cate_name = $_GET['act'];

			$categories = array();
			$categories = $this->post_model->category();
			
			require_once('views/blog/contact.php');
		}

		public function email(){
			$email_recive = $_POST['email'];
			$name = "Nam Blog";
			$contents = "Cảm ơn bạn đã đăng ký nhận tin tức :)))";
			$subject = "Đăng ký tin tức";
			//https://www.google.com/settings/security/lesssecureapps
			// Khai báo thư viên phpmailer
	        require "phpmailer/PHPMailerAutoload.php";
	        require "phpmailer/class.phpmailer.php";
	        // Khai báo tạo PHPMailer
	        $mail = new PHPMailer();
	        //Khai báo gửi mail bằng SMTP
	        $mail->IsSMTP();
	        //Tắt mở kiểm tra lỗi trả về, chấp nhận các giá trị 0 1 2
	        // 0 = off không thông báo bất kì gì, tốt nhất nên dùng khi đã hoàn thành.
	        // 1 = Thông báo lỗi ở client
	        // 2 = Thông báo lỗi cả client và lỗi ở server
	        // To load the French version
	        $mail->setLanguage('vi', '/optional/path/to/language/directory/');
	        $mail->SMTPDebug  = 1;
					$mail->SMTPOptions = array (
			        'ssl' => array(
		        	'verify_peer'  => false,
		        	'verify_peer_name'  => false,
		        	'allow_self_signed' => true)
					);
	        $mail->CharSet="UTF-8";
	        $mail->Debugoutput = "html"; // Lỗi trả về hiển thị với cấu trúc HTML
	        $mail->Host       = "smtp.gmail.com"; //host smtp để gửi mail
	        $mail->Port       = 587; // cổng để gửi mail
	        $mail->SMTPSecure = "tls"; //Phương thức mã hóa thư - ssl hoặc tls
	        $mail->SMTPAuth   = true; //Xác thực SMTP
	        $mail->Username   = "lamhoa6699@gmail.com"; // Tên đăng nhập tài khoản Gmail
	        $mail->Password   = "lamthihoa"; //Mật khẩu của gmail
	       
	        $mail->AddAddress($email_recive, $name);//Email của người nhận
	        //$mail->AddCC($email_recive, $name);//Email của người nhận
	        $mail->Subject = $subject; //Tiêu đề của thư
	        $mail->MsgHTML($contents); //Nội dung của bức thư.
	        // $mail->MsgHTML(file_get_contents("email-template.html"), dirname(__FILE__));
	        // Gửi thư với tập tin html
	        $mail->AltBody = "Nội dung thư";//Nội dung rút gọn hiển thị bên ngoài thư mục thư.
	        //$mail->AddAttachment("images/attact-tui.gif");//Tập tin cần attach

	        //Tiến hành gửi email và kiểm tra lỗi
	        if(!$mail->Send()) {
	          echo "Có lỗi khi gửi mail: " . $mail->ErrorInfo;
						return false;
	        } else {
	          header('Location: ?mod=blog');
						return true;
        	}
		}

	}
 ?>
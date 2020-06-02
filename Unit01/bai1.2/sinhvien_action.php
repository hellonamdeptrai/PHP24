<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zent - Education And Technology Group</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
    	<h3 class="font-weight-bolder" align="center">Zent - Education And Technology Group</h3>
    	<h3 align="center">Thực hành về gửi dữ liệu dùng POST</h3>
    	<hr>
    	<h4 align="center">Thông tin sinh viên</h4>
        <p><span style="font-weight: bold;">Mã sinh viên: </span><?= $_POST['id'] ?></p>
		<p><span style="font-weight: bold;">Họ và tên: </span><?= $_POST['name'] ?></p>
		<p><span style="font-weight: bold;">Số điện thoại: </span><?= $_POST['phone_number'] ?></p>
   		<p><span style="font-weight: bold;">Email: </span><?= $_POST['email'] ?></p>
   		<p><span style="font-weight: bold;">Giới tinh: </span><?= $_POST['gioi_tinh'] ?></p>
   		<p><span style="font-weight: bold;">Địa chỉ: </span><?= $_POST['dia_chi'] ?></p>
    </div>
</body>
</html>
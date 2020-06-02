<?php 
	require_once('products.php');
	session_start();
	// session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cửa hàng tạp hóa</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<h1 class="text-center font-weight-bold">CỬA HÀNG</h1>
		<div class="container">
			<a href="cart.php" class="btn btn-success">Xem giỏ hàng</a>
			<table class="table">
				<thead>
					<tr>
						<th>Mã SP</th>
						<th>Tên sản phẩm</th>
						<th>Số tiền</th>
						<th>Số lượng</th>
						<th>Ảnh SP</th>
						<th>Hành động</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($products as $product) { ?>
					<tr>
						<td class="font-weight-bold"><?= $product['MaSp'] ?></td>
						<td><?= $product['TenSp'] ?></td>
						<td><?= number_format($product['GiaTien']) ?>đ</td>
						<td><?= $product['SoLuong'] ?></td>
						<td><img src="<?= $product['Anh'] ?>" width="200px" hight="200px"></td>
						<td><a href="add2cart.php?MaSp=<?= $product['MaSp'] ?>" class="btn btn-primary">Thêm vào giỏ hàng</a></td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>
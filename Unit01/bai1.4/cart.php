<?php 
	session_start();
	// session_destroy();
	$products = $_SESSION['cart'];
	
    
  // 	 echo "<pre>";
  // var_dump($tg);
  // echo "</pre>";
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
<body>
	<div class="container">
		<h1 class="text-center font-weight-bold">Giỏ hàng</h1>
		<div class="container">
			<a href="index.php" class="btn btn-success">Trang chủ</a>
			<table class="table">
				<thead>
					<tr>
						<th>Mã SP</th>
						<th>Tên sản phẩm</th>
						<th>Số tiền</th>
						<th>Số lượng</th>
						<th>Thời gian cập nhật</th>
						<th class="text-right">Tổng tiền</th>
						<th class="text-right">Hành động</th>
					</tr>
				</thead>
				<tbody>
				<?php 
					$sum_amount = 0;
					foreach ($products as $product) { 
						$sum_amount += ($product['GiaTien']*$product['SoLuong']);
				?>
					<tr>
						<td><?= $product['MaSp'] ?></td>
						<td><?= $product['TenSp'] ?></td>
						<td><?= number_format($product['GiaTien']) ?></td>
						<td>
							<a href="add2cart.php?MaSp=<?= $product['MaSp'] ?>" class="btn btn-primary">+</a>
							<?= $product['SoLuong'] ?>
							<a href="delete.php?MaSp=<?= $product['MaSp'] ?>" class="btn btn-warning">-</a>
						</td>
						<td>
							<?= $product['time'] ?>
						</td>
						<td align="right"><?= number_format($product['GiaTien']*$product['SoLuong']) ?>đ</td>
						<th class="text-right"><a href="delete2.php?MaSp=<?= $product['MaSp'] ?>" class="btn btn-outline-warning">Xóa khỏi giỏ hàng</a></th>
					</tr>
				<?php } ?>
				<thead>
					<tr class="font-weight-bold">
						<td colspan="5">Tổng thanh toán</td>
						<td align="right"><?= number_format($sum_amount) ?>đ</td>
					</tr>
				</thead>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>
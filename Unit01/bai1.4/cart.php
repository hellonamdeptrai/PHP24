<?php 
	session_start();
	//session_destroy();
	$products = $_SESSION['cart'];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h2 class="text-center">--CART--</h2>
		<div class="container">
			<a href="index.php" class="btn btn-success">Home >>></a>
			<table class="table">
				<thead>
					<tr>
						<th>Code</th>
						<th>Name</th>
						<th>Price</th>
						<th>Quality</th>
						<th>Amount</th>
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
						<td align="right"><?= number_format($product['GiaTien']*$product['SoLuong']) ?></td>
					</tr>
				<?php } ?>
				<thead>
					<tr>
						<td colspan="4">Sum Amount</td>
						<td align="right"><?= number_format($sum_amount) ?></td>
					</tr>
				</thead>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>
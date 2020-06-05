<?php 
	session_start();
	// session_destroy();
	$products = $_SESSION['cart'];
 ?>
<?php require_once('header/header.php') ?>
        <!-- pages-title-start -->
		<div class="pages-title section-padding">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="pages-title-text text-center">
							<h2>Cart</h2>
							<ul class="text-left">
								<li><a href="shop.php">Home </a></li>
								<li><span> // </span>Cart</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- pages-title-end -->
		<!-- cart content section start -->
		<section class="pages cart-page section-padding">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="table-responsive padding60">
							<table class="wishlist-table text-center">
								<thead>
									<tr>
										<th>Sản phẩm</th>
										<th>Giá bán</th>
										<th>Số lượng</th>
										<th>Tổng giá</th>
										<th>Xóa</th>
									</tr>
								</thead>
								<tbody>
									<?php 
										$sum_amount = 0;
										$phivc = 0;
										$vat = 0;
										foreach ($products as $product) { 
										$sum_amount += ($product['GiaTien']*$product['SoLuong']);
										$phivc += ($product['vanchuyen']*$product['SoLuong']);
										$vat += ($product['thue']*$product['SoLuong']);
									?>
									<tr>
										<td class="td-img text-left">
											<a><img src="<?= $product['Anh'] ?>" alt="Add Product" /></a>
											<div class="items-dsc" style="padding: 42px;">
												<h5><a style="cursor: pointer;"><?= $product['TenSp'] ?></a></h5>
											</div>
										</td>
										<td><?= number_format($product['GiaTien']) ?>đ</td>
										<td>
											<form action="#" method="POST">
												<div class="plus-minus">
													<a class="dec qtybutton" href="addcart.php?MaSp=<?= $product['MaSp'] ?>">+</a>
													<input type="text" value="<?= $product['SoLuong'] ?>" name="qtybutton" class="plus-minus-box">
													<a class="inc qtybutton" href="delete.php?MaSp=<?= $product['MaSp'] ?>">-</a>
												</div>
											</form>
										</td>
										<td>
											<strong><?= number_format($product['GiaTien']*$product['SoLuong']) ?>đ</strong>
										</td>
										<td><a href="delete2.php?MaSp=<?= $product['MaSp'] ?>" class="mdi mdi-close" title="Remove this product"></a></td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="row margin-top">
					<div class="col-sm-6">
						<div class="single-cart-form padding60">
							<div class="log-title">
								<h3><strong>Chi tiết thanh toán</strong></h3>
							</div>
							<div class="cart-form-text pay-details table-responsive">
								<table>
									<tbody>
										<tr>
											<th>Tổng giỏ hàng</th>
											<td><?= number_format($sum_amount) ?>đ</td>
										</tr>
										<tr>
											<th>Phí vận chuyển</th>
											<td><?= number_format($phivc) ?>đ</td>
										</tr>
										<tr>
											<th>Vat</th>
											<td><?= number_format($vat) ?>đ</td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<th class="tfoot-padd">Tổng tất cả giỏ hàng</th>
											<td class="tfoot-padd"><?= number_format($sum_amount+$phivc+$vat) ?>đ</td>
										</tr>
									</tfoot>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
        
		<!-- all js here -->
		<!-- jquery latest version -->
        <script src="js/vendor/jquery-1.12.3.min.js"></script>
		<!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
		<!-- owl.carousel js -->
        <script src="js/owl.carousel.min.js"></script>
		<!-- meanmenu js -->
        <script src="js/jquery.meanmenu.js"></script>
		<!-- countdown JS -->
        <script src="js/countdown.js"></script>
		<!-- nivo.slider JS -->
        <script src="js/jquery.nivo.slider.pack.js"></script>
		<!-- simpleLens JS -->
        <script src="js/jquery.simpleLens.min.js"></script>
		<!-- jquery-ui js -->
        <script src="js/jquery-ui.min.js"></script>
		<!-- load-more js -->
        <script src="js/load-more.js"></script>
		<!-- plugins js -->
        <script src="js/plugins.js"></script>
		<!-- main js -->
        <script src="js/main.js"></script>
    </body>
</html>

<?php 
	require_once('products.php');
	session_start();
	// session_destroy();
?>
<?php require_once('header/header.php') ?>
        <!-- pages-title-start -->
		<div class="pages-title section-padding">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="pages-title-text text-center">
							<h2>Shop</h2>
							<ul class="text-left">
								<li><a href="shop.php">Home </a></li>
								<li><span> // </span>Shop</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- pages-title-end -->
		<!-- shop content section start -->
		<div class="pages products-page section-padding text-center">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="right-products">
							<div class="row">
								<div class="grid-content">
									<?php foreach ($products as $product) { ?>
									<div class="col-xs-12 col-sm-6 col-md-3">
										<div class="single-product">
											<div class="product-img">
												<div class="pro-type">
												</div>
												<a><img src="<?= $product['Anh'] ?>" alt="Product Title" /></a>
												<div class="actions-btn" style="left: 43%;
												margin-left: 0;">
													<a href="addcart.php?MaSp=<?= $product['MaSp'] ?>"><i class="mdi mdi-cart"></i></a>
												</div>
											</div>
											<div class="product-dsc">
												<p><a style="cursor: pointer;"><?= $product['TenSp'] ?></a></p>
												<span><?= number_format($product['GiaTien']) ?>đ</span>
											</div>
										</div>
									</div>
									<!-- single product end -->
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
        
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

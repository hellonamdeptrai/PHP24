<!-- Footer -->
		<footer id="footer">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-5">
						<div class="footer-widget">
							<div class="footer-logo">
								<a href="index.html" class="logo"><img src="./img/logo.png" alt=""></a>
							</div>
							<ul class="footer-nav">
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Advertisement</a></li>
							</ul>
							<div class="footer-copyright">
								<span>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="row">
							<div class="col-md-6">
								<div class="footer-widget">
									<h3 class="footer-title">Chúng tôi</h3>
									<ul class="footer-links">
										<li><a href="?mod=blog&act=about">Thông tin về chúng tôi</a></li>
										<li><a href="?mod=blog&act=contact">Liên lạc</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-6">
								<div class="footer-widget">
									<h3 class="footer-title">Danh mục</h3>
									<ul class="footer-links">
										<?php foreach ($categories as $cate) { ?>

											<li><a href="?mod=blog&act=category&id=<?= $cate['id'] ?>&cate=<?= $cate['title'] ?>"><?= $cate['title']?></a></li>
										
										<?php } ?>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="footer-widget">
							<h3 class="footer-title">Tham gia bản tin của chúng tôi</h3>
							<div class="footer-newsletter">
								<form action="?mod=blog&act=email" method="post" enctype="multipart/form-data">
									<input class="input" type="email" name="email" placeholder="Nhập email">
									<button type="submit" class="newsletter-btn"><i class="fa fa-paper-plane"></i></button>
								</form>
							</div>
							<ul class="footer-social">
								<li><a href="https://facebook.com/namteo2505"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://www.instagram.com/tnam05"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</footer>
		<!-- /Footer -->

		<!-- jQuery Plugins -->
		<script src="public/js/jquery.min.js"></script>
		<script src="public/js/bootstrap.min.js"></script>
		<script src="public/js/main.js"></script>

		<script type="text/javascript">
			$(document).ready(function(){
  				$(".content1").slice(0, 4).show();
  					$("#loadMore").on("click", function(e){
   	 					e.preventDefault();
    				$(".content1:hidden").slice(0, 4).slideDown();
    				if($(".content1:hidden").length == 0) {
      					$("#loadMore").text("Hết...");
    				}
  				});
			})
		</script>

	</body>
</html>

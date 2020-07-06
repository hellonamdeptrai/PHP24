			<!-- Nav -->
			<div id="nav">
				<!-- Main Nav -->
				<div id="nav-fixed">
					<div class="container">
						<!-- logo -->
						<div class="nav-logo">
							<a href="?mod=blog" class="logo"><img src="public/img/logo1.png" alt=""></a>
						</div>
						<!-- /logo -->

						<!-- nav -->
						<ul class="nav-menu nav navbar-nav">
							<?php 
							$i = 1;
							foreach ($categories as $cate) {
							?>
								<li class="cat-<?= $i ?>"><a href="?mod=blog&act=category&id=<?= $cate['id'] ?>&cate=<?= $cate['title'] ?>"><?= $cate['title']?></a></li>
							<?php 
							$i++;
							if ($i==5) $i=1;
							} ?>
						</ul>
						<!-- /nav -->

						<!-- search & aside toggle -->
						<div class="nav-btns">
							<button class="aside-btn"><i class="fa fa-bars"></i></button>
							<button class="search-btn"><i class="fa fa-search"></i></button>
							<form class="search-form" action="?mod=blog&act=search" method="post" enctype="multipart/form-data">
								<input class="search-input" type="text" name="search" placeholder="Tìm Kiếm Gì Đó ...">
								<button type="submit" name="searchsubmit" class="search-close"><i class="fa fa-times"></i></button>
							</form>
						</div>
						<!-- /search & aside toggle -->
					</div>
				</div>
				<!-- /Main Nav -->

				<!-- Aside Nav -->
				<div id="nav-aside">
					<!-- nav -->
					<div class="section-row">
						<ul class="nav-aside-menu">
							<li><a href="?mod=blog">Trang Chủ</a></li>
							<?php
								foreach ($categories as $cate) { ?>
									<li><a href="?mod=blog&act=category&id=<?= $cate['id'] ?>&cate=<?= $cate['title'] ?>"><?= $cate['title']?></a></li>
							<?php } ?>
						</ul>
					</div>
					<!-- /nav -->

					<!-- widget posts -->
					<div class="section-row">
						<a href="admin/?mod=login"><h1>Admin</h1></a>
					</div>
					<!-- /widget posts -->

					<div class="section-row">
						<a href="?mod=blog&act=about"><p>Thông tin về chúng tôi</p></a>
						<a href="?mod=blog&act=contact"><p>Liên lạc</p></a>
					</div>

					<!-- social links -->
					<div class="section-row">
						<h3>Follow us</h3>
						<ul class="nav-aside-social">
							<li><a href="https://facebook.com/namteo2505"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://www.instagram.com/tnam05"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
					<!-- /social links -->

					<!-- aside nav close -->
					<button class="nav-aside-close"><i class="fa fa-times"></i></button>
					<!-- /aside nav close -->
				</div>
				<!-- Aside Nav -->
			</div>
			<!-- /Nav -->
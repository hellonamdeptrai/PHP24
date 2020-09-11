<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Nam Blog</title>
		<link rel="shortcut icon" type="image/png" href="public/img/logo2.png">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet"> 

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="public/css/bootstrap.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="public/css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="public/css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>

		<!-- Header -->
		<header id="header">
			<?php require_once('MainNav.php') ?>
		</header>
		<!-- /Header -->

		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<?php
						foreach ($data as $post) {
					?>	
					<!-- post -->
					<div class="col-md-6">
						<div class="post post-thumb">
							<a class="post-img" href="?mod=blog&act=blogpost&id=<?= $post['id'] ?>"><img style="height: 330px;" src="public/img/<?= $post['thumbnail'] ?>" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-<?php
										if ($post['category_id'] == 5){
											$post['category_id'] = 1;
										}
										echo($post['category_id']);
									?>" href="?mod=blog&act=category&id=<?= $post['category_id'] ?>&cate=<?= $post['category'] ?>"><?= $post['category'] ?></a>
									<span class="post-date"><?= $post['created_at'] ?></span>
								</div>
								<h3 class="post-title"><a href="?mod=blog&act=blogpost&id=<?= $post['id'] ?>"><?= $post['title'] ?></a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->
					<?php } ?>

				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>Bài viết mới gần đây</h2>
						</div>
					</div>

					<?php
						foreach ($data2 as $post) {
					?>
					<!-- post -->
					<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="?mod=blog&act=blogpost&id=<?= $post['id'] ?>"><img style="height: 220px;" src="public/img/<?= $post['thumbnail'] ?>" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-<?php
										if ($post['category_id'] == 5){
											$post['category_id'] = 1;
										}
										echo($post['category_id']);
									?>" href="?mod=blog&act=category&id=<?= $post['category_id'] ?>&cate=<?= $post['category'] ?>"><?= $post['category'] ?></a>
									<span class="post-date"><?= $post['created_at'] ?></span>
								</div>
								<h3 class="post-title"><a href="?mod=blog&act=blogpost&id=<?= $post['id'] ?>"><?= $post['title'] ?></a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->
					<?php } ?>
					<div class="clearfix visible-md visible-lg"></div>

					<?php
						foreach ($data23 as $post) {
					?>
					<!-- post -->
					<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="?mod=blog&act=blogpost&id=<?= $post['id'] ?>"><img style="height: 220px;" src="public/img/<?= $post['thumbnail'] ?>" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-<?php
										if ($post['category_id'] == 5){
											$post['category_id'] = 1;
										}
										echo($post['category_id']);
									?>" href="?mod=blog&act=category&id=<?= $post['category_id'] ?>&cate=<?= $post['category'] ?>"><?= $post['category'] ?></a>
									<span class="post-date"><?= $post['created_at'] ?></span>
								</div>
								<h3 class="post-title"><a href="?mod=blog&act=blogpost&id=<?= $post['id'] ?>"><?= $post['title'] ?></a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->
					<?php } ?>

				<!-- row -->
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<?php
								foreach ($data3 as $post) {
							?>
							<!-- post -->
							<div class="col-md-12">
								<div class="post post-thumb">
									<a class="post-img" href="?mod=blog&act=blogpost&id=<?= $post['id'] ?>"><img src="public/img/<?= $post['thumbnail'] ?>" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-<?php
										if ($post['category_id'] == 5){
											$post['category_id'] = 1;
										}
										echo($post['category_id']);
									?>" href="?mod=blog&act=category&id=<?= $post['category_id'] ?>&cate=<?= $post['category'] ?>"><?= $post['category'] ?></a>
											<span class="post-date"><?= $post['created_at']; ?></span>
										</div>
										<h3 class="post-title"><a href="?mod=blog&act=blogpost&id=<?= $post['id'] ?>"><?= $post['title']; ?></a></h3>
									</div>
								</div>
							</div>
							<!-- /post -->
							<?php } ?>

							<?php
								foreach ($data4 as $post) {
							?>
							<!-- post -->
							<div class="col-md-6">
								<div class="post">
									<a class="post-img" href="?mod=blog&act=blogpost&id=<?= $post['id'] ?>"><img style="height: 220px;" src="public/img/<?= $post['thumbnail'] ?>" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-<?php
										if ($post['category_id'] == 5){
											$post['category_id'] = 1;
										}
										echo($post['category_id']);
									?>" href="?mod=blog&act=category&id=<?= $post['category_id'] ?>&cate=<?= $post['category'] ?>"><?= $post['category'] ?></a>
											<span class="post-date"><?= $post['created_at']; ?></span>
										</div>
										<h4 class="post-title"><a href="?mod=blog&act=blogpost&id=<?= $post['id'] ?>"><?= $post['title']; ?></a></h4>
									</div>
								</div>
							</div>
							<!-- /post -->
							<?php } ?>
							<div class="clearfix visible-md visible-lg"></div>

							<?php
								foreach ($data42 as $post) {
							?>
							<!-- post -->
							<div class="col-md-6">
								<div class="post">
									<a class="post-img" href="?mod=blog&act=blogpost&id=<?= $post['id'] ?>"><img style="height: 220px;" src="public/img/<?= $post['thumbnail'] ?>" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-<?php
										if ($post['category_id'] == 5){
											$post['category_id'] = 1;
										}
										echo($post['category_id']);
									?>" href="?mod=blog&act=category&id=<?= $post['category_id'] ?>&cate=<?= $post['category'] ?>"><?= $post['category'] ?></a>
											<span class="post-date"><?= $post['created_at']; ?></span>
										</div>
										<h4 class="post-title"><a href="?mod=blog&act=blogpost&id=<?= $post['id'] ?>"><?= $post['title']; ?></a></h4>
									</div>
								</div>
							</div>
							<!-- /post -->
							<?php } ?>
							<div class="clearfix visible-md visible-lg"></div>

							<?php
								foreach ($data43 as $post) {
							?>
							<!-- post -->
							<div class="col-md-6">
								<div class="post">
									<a class="post-img" href="?mod=blog&act=blogpost&id=<?= $post['id'] ?>"><img style="height: 220px;" src="public/img/<?= $post['thumbnail'] ?>" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-<?php
										if ($post['category_id'] == 5){
											$post['category_id'] = 1;
										}
										echo($post['category_id']);
									?>" href="?mod=blog&act=category&id=<?= $post['category_id'] ?>&cate=<?= $post['category'] ?>"><?= $post['category'] ?></a>
											<span class="post-date"><?= $post['created_at']; ?></span>
										</div>
										<h4 class="post-title"><a href="?mod=blog&act=blogpost&id=<?= $post['id'] ?>"><?= $post['title']; ?></a></h4>
									</div>
								</div>
							</div>
							<!-- /post -->
							<?php } ?>
							<div class="clearfix visible-md visible-lg"></div>
							
						</div>
					</div>

					<div class="col-md-4">
						<!-- post widget -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Đề xuất</h2>
							</div>
							<?php
								foreach ($data5 as $post) {
							?>
							<div class="post post-widget">
								<a class="post-img" href="?mod=blog&act=blogpost&id=<?= $post['id'] ?>"><img src="public/img/<?= $post['thumbnail'] ?>" alt=""></a>
								<div class="post-body">
									<h3 class="post-title"><a href="?mod=blog&act=blogpost&id=<?= $post['id'] ?>"><?= $post['title']; ?></a></h3>
								</div>
							</div>
							<?php } ?>
						</div>
						<!-- /post widget -->

						<!-- post widget -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>giải trí</h2>
							</div>
							<?php
								foreach ($data6 as $post) {
							?>
							<div class="post post-thumb">
								<a class="post-img" href="?mod=blog&act=blogpost&id=<?= $post['id'] ?>"><img src="public/img/<?= $post['thumbnail'] ?>" alt=""></a>
								<div class="post-body">
									<div class="post-meta">
										<a class="post-category cat-1" href="?mod=blog&act=category&id=<?= $post['category_id'] ?>&cate=<?= $post['category'] ?>"><?= $post['category'] ?></a>
										<span class="post-date"><?= $post['created_at']; ?></span>
									</div>
									<h3 class="post-title"><a href="?mod=blog&act=blogpost&id=<?= $post['id'] ?>"><?= $post['title']; ?></a></h3>
								</div>
							</div>
							<?php } ?>
						</div>
						<!-- /post widget -->
						
						<!-- ad -->
						<div class="aside-widget text-center">
							<a href="#" style="display: inline-block;margin: auto;">
								<img class="img-responsive" src="./img/ad-1.jpg" alt="">
							</a>
						</div>
						<!-- /ad -->
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->
		
		<!-- section -->
		<div class="section section-grey">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title text-center">
							<h2>Thể thao</h2>
						</div>
					</div>
					<?php
						foreach ($data7 as $post) {
					?>
					<!-- post -->
					<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="?mod=blog&act=blogpost&id=<?= $post['id'] ?>"><img style="height: 220px;" src="public/img/<?= $post['thumbnail'] ?>" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-2" href="?mod=blog&act=category&id=<?= $post['category_id'] ?>&cate=<?= $post['category'] ?>"><?= $post['category'] ?></a>
									<span class="post-date"><?= $post['created_at']; ?></span>
								</div>
								<h3 class="post-title"><a href="?mod=blog&act=blogpost&id=<?= $post['id'] ?>"><?= $post['title']; ?></a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->
					<?php } ?>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->

		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-12">
								<div class="section-title">
									<h2>bài viết cũ</h2>
								</div>
							</div>
							<?php
								foreach ($data8 as $post) {
							?>
							<!-- post -->
							<div style="display: none;" class="col-md-12 content1">
								<div class="post post-row">
									<a class="post-img" href="?mod=blog&act=blogpost&id=<?= $post['id'] ?>"><img src="public/img/<?= $post['thumbnail'] ?>" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-<?php
										if ($post['category_id'] == 5){
											$post['category_id'] = 1;
										}
										echo($post['category_id']);
									?>" href="?mod=blog&act=category&id=<?= $post['category_id'] ?>&cate=<?= $post['category'] ?>"><?= $post['category'] ?></a>
											<span class="post-date"><?= $post['created_at']; ?></span>
										</div>
										<h3 class="post-title"><a href="?mod=blog&act=blogpost&id=<?= $post['id'] ?>"><?= $post['title']; ?></a></h3>
										<p><?= $post['description']; ?></p>
									</div>
								</div>
							</div>
							<!-- /post -->
							<?php } ?>

							<div class="col-md-12">
								<div class="section-row">
									<button id="loadMore" class="primary-button center-block">Tải Thêm</button>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<!-- ad -->
						<div class="aside-widget text-center">
							<a href="#" style="display: inline-block;margin: auto;">
								<img class="img-responsive" src="./img/ad-1.jpg" alt="">
							</a>
						</div>
						<!-- /ad -->
						
						<!-- catagories -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Danh mục</h2>
							</div>
							<div class="category-widget">
								<ul>
									<?php foreach ($data9 as $post) { ?>
									<li><a href="?mod=blog&act=category&id=<?= $post['category_id'] ?>&cate=<?= $post['category'] ?>" class="cat-1"><?= $post['category'] ?><span><?= $post['COUNT(category_id)'] ?></span></a></li>
									<?php } ?>
									<?php foreach ($data10 as $post) { ?>
									<li><a href="?mod=blog&act=category&id=<?= $post['category_id'] ?>&cate=<?= $post['category'] ?>" class="cat-2"><?= $post['category'] ?><span><?= $post['COUNT(category_id)'] ?></span></a></li>
									<?php } ?>
									<?php foreach ($data11 as $post) { ?>
									<li><a href="?mod=blog&act=category&id=<?= $post['category_id'] ?>&cate=<?= $post['category'] ?>" class="cat-3"><?= $post['category'] ?><span><?= $post['COUNT(category_id)'] ?></span></a></li>
									<?php } ?>
									<?php foreach ($data12 as $post) { ?>
									<li><a href="?mod=blog&act=category&id=<?= $post['category_id'] ?>&cate=<?= $post['category'] ?>" class="cat-4"><?= $post['category'] ?><span><?= $post['COUNT(category_id)'] ?></span></a></li>
									<?php } ?>
									<?php foreach ($data13 as $post) { ?>
									<li><a href="?mod=blog&act=category&id=<?= $post['category_id'] ?>&cate=<?= $post['category'] ?>" class="cat-1"><?= $post['category'] ?><span><?= $post['COUNT(category_id)'] ?></span></a></li>
									<?php } ?>

								</ul>
							</div>
						</div>
						<!-- /catagories -->
						
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->

<?php require_once('footer.php') ?>
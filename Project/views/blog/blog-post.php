<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Nam Blog</title>
		<link rel="shortcut icon" type="image/png" href="public/img/logo2.png">

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
			<?php require_once('MainNav.php'); ?>
			
			<!-- Page Header -->
			<div id="post-header" class="page-header">
				<div class="background-img" style="background-image: url('public/img/<?= $post['thumbnail'] ?>');"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-10">
							<div class="post-meta">
								<a class="post-category cat-2" href="?mod=blog&act=category&id=<?= $post['category_id'] ?>&cate=<?= $post['cate'] ?>"><?= $post['cate'] ?></a>
								<span class="post-date"><?= $post['created_at'] ?></span>
							</div>
							<h1><?= $post['title'] ?></h1>
						</div>
					</div>
				</div>
			</div>
			<!-- /Page Header -->
		</header>
		<!-- /Header -->

		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Post content -->
					<div class="col-md-8">
						<div class="section-row sticky-container">
							<div class="main-post">
								<h1><?= $post['title'] ?></h1>
								<h3><?= $post['description'] ?></h3>
								<p><?= $post['contents'] ?></p>
								<p><span style="font-weight: bold;">Đăng bởi:</span><em> <?= $post['name'] ?></em></p>
							</div>
							<div class="post-shares sticky-shares">
								<a href="https://facebook.com/namteo2505" class="share-facebook"><i class="fa fa-facebook"></i></a>
								<a href="https://www.instagram.com/tnam05" class="share-twitter"><i class="fa fa-instagram"></i></a>
							</div>
						</div>

						<!-- ad -->
						<div class="section-row text-center">
							<a href="#" style="display: inline-block;margin: auto;">
								<img class="img-responsive" src="./img/ad-2.jpg" alt="">
							</a>
						</div>
						<!-- ad -->
						
						<!-- author -->
						<div class="section-row">
							<div class="post-author">
								<div class="media">
									<div class="media-left">
										<img class="media-object" src="./img/author.png" alt="">
									</div>
									<div class="media-body">
										<div class="media-heading">
											<h3><?= $post['name'] ?></h3>
										</div>
										<p><?= $post['about'] ?></p>
										<ul class="author-social">
											<li><a href="https://facebook.com/namteo2505"><i class="fa fa-facebook"></i></a></li>
											<li><a href="https://www.instagram.com/tnam05"><i class="fa fa-instagram"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- /author -->

						<!-- comments -->
						<div class="section-row">
							<div class="section-title">
								<h2>Nhận xét</h2>
							</div>

							<div class="post-comments">
								<!-- comment -->
								
								<div id="fb-root"></div>
								<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0" nonce="us85l8Rj"></script>

								<div class="fb-comments" data-href="http://localhost/hoctap/PHP24/Project/?mod=blog&amp;act=blogpost&amp;id=<?= $id ?>" data-numposts="5" data-width=""></div>

								<!-- /comment -->
							</div>
						</div>
						<!-- /comments -->

						
					</div>
					<!-- /Post content -->

					<!-- aside -->
					<div class="col-md-4">

						<!-- post widget -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Bài viết liên quan</h2>
							</div>

							<?php foreach ($post2 as $post) { ?>

							<div class="post post-widget">
								<a class="post-img" href="?mod=blog&act=blogpost&id=<?= $post['id'] ?>"><img src="public/img/<?= $post['thumbnail'] ?>" alt=""></a>
								<div class="post-body">
									<h3 class="post-title"><a href="?mod=blog&act=blogpost&id=<?= $post['id'] ?>"><?= $post['title'] ?></a></h3>
								</div>
							</div>

							<?php } ?>
						</div>
						<!-- /post widget -->

						<!-- post widget -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Chủ đề khác</h2>
							</div>
							<?php foreach ($post3 as $post) { ?>

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

							<?php } ?>
						</div>
						<!-- /post widget -->
						
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
					<!-- /aside -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->

<?php require_once('footer.php') ?>
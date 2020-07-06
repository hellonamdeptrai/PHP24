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
			<?php require_once('MainNav.php') ?>
			
			<!-- Page Header -->
			<div class="page-header">
				<div class="container">
					<div class="row">
						<div class="col-md-10">
							<ul class="page-header-breadcrumb">
								<li><a href="index.html">Home</a></li>
								<li><?= $cate_name ?></li>
							</ul>
							<h1><?= $cate_name ?></h1>
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
					<div class="col-md-8">
						<div class="row">
							<!-- post -->
							<div class="col-md-12">
								<div class="post post-thumb">
									<a class="post-img" href="?mod=blog&act=blogpost&id=<?= $post1['id'] ?>"><img src="public/img/<?= $post1['thumbnail']?>" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-<?php
												if($color == 5){
													$color = 1;
												}
												echo($color);
											 ?>" href="?mod=blog&act=category&id=<?= $post1['category_id'] ?>&cate=<?= $post1['category'] ?>"><?= $post1['category'] ?></a>
											<span class="post-date"><?= $post1['created_at'] ?></span>
										</div>
										<h3 class="post-title"><a href="?mod=blog&act=blogpost&id=<?= $post1['id'] ?>"><?= $post1['title']?></a></h3>
									</div>
								</div>
							</div>
							<!-- /post -->
										
							<?php foreach ($post2 as $post) {
							?>
							<!-- post -->
							<div class="col-md-6">
								<div class="post">
									<a class="post-img" href="?mod=blog&act=blogpost&id=<?= $post['id'] ?>"><img style="height: 220px;" src="public/img/<?= $post['thumbnail'] ?>" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-<?php
												if($color == 5){
													$color = 1;
												}
												echo($color);
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
							
							<?php foreach ($post3 as $post) { ?>
							
							<!-- post -->
							<div class="col-md-12 content1" style="display: none;">
								<div class="post post-row">
									<a class="post-img" href="?mod=blog&act=blogpost&id=<?= $post['id'] ?>"><img src="public/img/<?= $post['thumbnail'] ?>" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-<?php
												if($color == 5){
													$color = 1;
												}
												echo($color);
											 ?>" href="?mod=blog&act=category&id=<?= $post['category_id'] ?>&cate=<?= $post['category'] ?>"><?= $post['category'] ?></a>
											<span class="post-date"><?= $post['created_at'] ?></span>
										</div>
										<h3 class="post-title"><a href="?mod=blog&act=blogpost&id=<?= $post['id'] ?>"><?= $post['title'] ?></a></h3>
										<p><?= $post['description'] ?></p>
									</div>
								</div>
							</div>
							<!-- /post -->
							<?php } ?>
							
							<div class="col-md-12">
								<div class="section-row">
									<button id="loadMore" class="primary-button center-block">Tải thêm</button>
								</div>
							</div>
						</div>
					</div>
					
					<!-- aside -->
					<div class="col-md-4">

						<!-- post widget -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Chủ đề khác</h2>
							</div>
							<?php foreach ($post4 as $post) { ?>

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
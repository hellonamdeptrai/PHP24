<?php require_once('views/require/header.php'); ?>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 style="margin-bottom: 100px;" class="title-1">tổng quát</h2>
                                </div>
                            </div>
                        </div>
                        <?php 
                            if(isset($_SESSION['author']['user'])){
                                if ($_SESSION['author']['user']==1) { ?>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <a href="?mod=author" class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2>Tác giả</h2>
                                                <span>xem chi tiết tác giả</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <a href="?mod=category" class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-labels"></i>
                                            </div>
                                            <div class="text">
                                                <h2>Danh mục</h2>
                                                <span>xem chi tiết danh mục</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <?php
                                    }
                                } 
                            ?>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <a href="?mod=post" class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <h2>Bài viết</h2>
                                                <span>xem chi tiết bài viết</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->

<?php require_once('views/require/footer.php') ?>
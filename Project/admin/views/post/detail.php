<?php require_once('views/require/header.php') ?>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="table-data__tool">
                            <div class="table-data__tool-right">
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                    <i class="fa fa-chevron-left" aria-hidden="true"></i><a style="color: white;" href="?mod=post">quay lại</a> 
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Xem</strong>
                                        <small> Bài Viết</small>
                                    </div>
                                    <div class="card-body card-block">
                                        <div class="form-group">
                                            <p><span class="font-weight-bold">Trạng thái: </span>
                                                <?php if ($post['status'] == 1) {
                                                        echo "Hiện thị";
                                                    } else {
                                                        echo "Ngừng Hiện thị";
                                                    }
                                                ?> 
                                            </p>
                                        </div>
                                        <div class="form-group">
                                            <p><span class="font-weight-bold">Ngày cập nhật: </span><?= $post['created_at'] ?></p>
                                        </div>
                                        <div class="form-group">
                                            <img width="100%" src="../public/img/<?= $post['thumbnail'] ?>" alt="">
                                        </div>
                                        <div class="form-group">
                                            <h1 class="font-weight-bold"><?= $post['title'] ?></h1>
                                        </div>
                                        <div class="form-group">
                                            <h4 class="font-weight-bold"><?= $post['description'] ?></h4>
                                        </div>
                                        <div class="form-group">
                                            <p><?= $post['contents'] ?></p>
                                        </div>
                                        
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
<?php require_once('views/require/footer.php') ?>
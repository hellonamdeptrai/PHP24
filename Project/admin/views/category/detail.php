<?php require_once('views/require/header.php') ?>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="table-data__tool">
                            <div class="table-data__tool-right">
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                    <i class="fa fa-chevron-left" aria-hidden="true"></i><a style="color: white;" href="?mod=category">quay lại</a> 
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Xem</strong>
                                        <small> Danh Mục</small>
                                    </div>
                                    <div class="card-body card-block">
                                        <div class="form-group">
                                            <p><span class="font-weight-bold">Id: </span><?= $cate['id'] ?></p>
                                        </div>
                                        <div class="form-group">
                                            <p><span class="font-weight-bold">Tên: </span><?= $cate['title'] ?></p>
                                        </div>
                                        <div class="form-group">
                                            <p><span class="font-weight-bold">Mô tả: </span><?= $cate['description'] ?></p>
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
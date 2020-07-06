<?php require_once('views/require/header.php') ?>

        <!-- PAGE CONTENT-->
        <div class="main-content page-content--bgf7">

            <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">bảng danh mục</h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    
                                </div>
                                <div class="table-data__tool-right">
                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                        <i class="zmdi zmdi-plus"></i><a style="color: white;" href="?mod=category&act=add">thêm danh mục</a> 
                                    </button>
                                </div>
                            </div>
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>tiêu đề</th>
                                            <th>mô tả</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($data as $row) {?>
                                        <tr class="tr-shadow">
                                            <td><?= $row['id'] ?></td>
                                            <td class="desc"><?= $row['title'] ?></td>
                                            <td>
                                                <span class="block-email"><?= $row['description'] ?></span>
                                            </td>
                                            <td>
                                                <div class="table-data-feature">
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Xem">
                                                        <a href="?mod=category&act=detail&id=<?= $row['id'] ?>"><i class="zmdi zmdi-eye"></i></a>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Sửa">
                                                        <a href="?mod=category&act=edit&id=<?= $row['id'] ?>"><i class="zmdi zmdi-edit"></i></a>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Xóa">
                                                        <a href="?mod=category&act=delete&id=<?= $row['id'] ?>"><i class="zmdi zmdi-delete"></i></a>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="spacer"></tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END DATA TABLE-->

            <!-- COPYRIGHT-->
            <section class="p-t-60 p-b-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END COPYRIGHT-->
        </div>

    </div>

<?php require_once('views/require/footer.php') ?>
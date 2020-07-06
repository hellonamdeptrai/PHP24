<?php require_once('views/require/header.php') ?>

        <!-- PAGE CONTENT-->
        <div class="main-content page-content--bgf7">

            <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">bảng tác giả</h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    
                                </div>
                                <div class="table-data__tool-right">
                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                        <i class="zmdi zmdi-plus"></i><a style="color: white;" href="?mod=author&act=add">thêm tác giả</a> 
                                    </button>
                                </div>
                            </div>
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>tên</th>
                                            <th>email</th>
                                            <th>người dùng</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($data as $row) {?>
                                        <tr class="tr-shadow">
                                            <td><?= $row['id'] ?></td>
                                            <td class="desc"><?= $row['name'] ?></td>
                                            <td>
                                                <span class="block-email"><?= $row['email'] ?></span>
                                            </td>
                                            <td>
                                                <?php  
                                                    if ($row['user'] == 1) {
                                                        echo "Quản trị viên";
                                                    }else{
                                                        echo "Người dùng";
                                                    }
                                                ?>
                                            </td>
                                            <td>
                                                <div class="table-data-feature">
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Xem">
                                                        <a href="?mod=author&act=detail&id=<?= $row['id'] ?>"><i class="zmdi zmdi-eye"></i></a>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Sửa">
                                                        <a href="?mod=author&act=edit&id=<?= $row['id'] ?>"><i class="zmdi zmdi-edit"></i></a>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Xóa">
                                                        <a href="?mod=author&act=delete&id=<?= $row['id'] ?>"><i class="zmdi zmdi-delete"></i></a>
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
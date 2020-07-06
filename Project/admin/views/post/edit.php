<?php require_once('views/require/header.php') ?>

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
                                        <strong>Bảng Chỉnh Sửa</strong> Bài Viết
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="?mod=post&act=update" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <input type="hidden" name="id" value="<?= $post['id'] ?>">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Tiêu đề</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="title" value="<?= $post['title'] ?>" placeholder="Text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Mô tả</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="description" value="<?= $post['description'] ?>" placeholder="Text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Văn bản</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="contents" id="summernote"><?= $post['contents'] ?></textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Danh mục</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="category_id" id="select" class="form-control">
                                                        <?php foreach ($categories as $cate) { ?>
                                                            <option <?= ($post['category_id'] == $cate['id'])?'selected':'' ?> value="<?= $cate['id'] ?>"><?= $cate['title'] ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Tải ảnh lên</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <img width="50%" src="../public/img/<?= $post['thumbnail'] ?>" alt="">
                                                    <input type="file" id="file-input" name="thumbnail" class="form-control-file">
                                                </div>
                                            </div>
                                            <?php if ($_SESSION['author']['user'] == 1 || $post['status'] == 1 || $post['status'] == 0) { ?>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Hiện thị bài viết</label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <div class="form-check-inline form-check">
                                                        <label for="inline-checkbox1" class="form-check-label ">
                                                            <input <?= ($post['status'] == 1)?'checked':'' ?> type="checkbox" id="inline-checkbox1" name="status" value="1" class="form-check-input">Kích hoạt
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php } ?>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Submit
                                                </button>
                                                <button type="reset" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-ban"></i> Reset
                                                </button>
                                            </div>
                                        </form>
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

    </div>

<?php require_once('views/require/footer.php') ?>
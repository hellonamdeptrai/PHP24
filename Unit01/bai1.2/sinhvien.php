<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zent - Education And Technology Group</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
    <h3 class="font-weight-bolder" align="center">Zent - Education And Technology Group</h3>
    <h3 align="center">Thực hành về gửi dữ liệu dùng POST</h3>
    <hr>
        <form id="xoa" action="sinhvien_action.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label class="font-weight-bolder" for="">Mã sinh viên</label>
                <input type="text" class="form-control" id="" placeholder="Nhập mã sinh viên" name="id">
            </div>
            <div class="form-group">
                <label class="font-weight-bolder" for="">Họ và tên</label>
                <input type="text" class="form-control" id="" placeholder="Họ và tên" name="name">
            </div>
            <div class="form-group">
                <label class="font-weight-bolder" for="">Số điện thoại</label>
                <input type="number" class="form-control" id="" placeholder="Nhập số điện thoại" name="phone_number">
            </div>
            <div class="form-group">
                <label class="font-weight-bolder" for="">Email</label>
                <input type="email" class="form-control" id="" placeholder="Nhập vào email" name="email">
            </div>
            <div class="form-group">
                <label class="font-weight-bolder" for="">Giới tính</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" value="Nam" name="gioi_tinh" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" value="Nữ" name="gioi_tinh" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" value="Khác" name="gioi_tinh" id="inlineRadio3" value="option3">
                    <label class="form-check-label" for="inlineRadio3">Other</label>
                </div>
            </div>
            <div class="form-group">
                <label class="font-weight-bolder" for="">Địa chỉ</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào địa chị" name="dia_chi">
            </div>
            <button type="submit" class="btn btn-primary font-weight-bolder">Lưu thông tin</button>
        </form>
    </div>
    <div style="margin-bottom: 100px;"></div>
</body>
</html>
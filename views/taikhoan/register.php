<div class="container mt-3 mb-3">
    <form class="form-horizontal col-sm-9" action="./index.php?controller=khachhang&action=register" method="POST"
        style="margin: auto;">
        <div class="row form-group">
            <div class="col col-sm-3"><label for="email">Email:</label></div>
            <div class="col-sm-9">
                <input type="email" class="form-control" placeholder="email@gmail.com" id="email" name="email" required>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-sm-3"><label for="password">Mật khẩu:</label></div>
            <div class="col-sm-9">
                <input type="password" class="form-control" placeholder="Mật khẩu" id="password" name="password"
                    required>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-sm-3"><label for="name">Họ và tên:</label></div>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Họ và tên" id="name" name="name" required>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-sm-3"><label for="gioitinh">Giới tính:</label></div>
            <div class="col-sm-9">
                <div class="form-check-inline">
                    <label class="form-check-label" for="nam">
                        <input type="radio" class="form-check-input" id="nam" name="gioitinh" value="1" checked>Nam
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label" for="nu">
                        <input type="radio" class="form-check-input" id="nu" name="gioitinh" value="0">Nữ
                    </label>
                </div>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-sm-3"><label for="sdt">Số điện thoại:</label></div>
            <div class="col-sm-9">
                <input type="number" class="form-control" placeholder="Số điện thoại" id="sdt" name="sdt" required>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-sm-3"><label for="ngaysinh">Ngày sinh:</label></div>
            <div class="col-sm-9">
                <input type="date" class="form-control" placeholder="Ngày sinh" id="ngaysinh" name="ngaysinh" required>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-sm-3"><label for="diachi">Địa chỉ:</label></div>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Địa chỉ" id="diachi" name="diachi" required>
            </div>
        </div>
        <div class="row form-group" style="text-align:center;">
            <div class="col col-sm-12">
                <button type="submit" class="btn btn-success" name="btn_action" value="">Đăng ký</button>
            </div>
        </div>
    </form>
    <div class="mr-auto text-center">Bạn đã có tài khoản, hãy truy cập <a
            href="./index.php?controller=khachhang&action=dangnhap">Đăng nhập</a></div>
</div>
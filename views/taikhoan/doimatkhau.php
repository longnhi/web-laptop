<div class="container mt-3 mb-3">
    <form class="form-horizontal col-sm-9" action="./index.php?controller=khachhang&action=xulydoimatkhau" method="POST" style="margin: auto;">
        <div class="row form-group">
            <div class="col col-sm-4"><label for="oldpassword">Mật khẩu cũ:</label></div>
            <div class="col-sm-8">
                <input type="password" class="form-control" placeholder="Mật khẩu cũ" id="oldpassword" name="oldpassword" required>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-sm-4"><label for="newpassword">Mật khẩu mới:</label></div>
            <div class="col-sm-8">
                <input type="password" class="form-control" placeholder="Mật khẩu" id="newpassword" name="newpassword" required>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-sm-4"><label for="retypenewpassword">Nhập lại mật khẩu mới:</label></div>
            <div class="col-sm-8">
                <input type="password" class="form-control" placeholder="Nhập lại mật khẩu mới" id="retypenewpassword" name="retypenewpassword" required>
            </div>
        </div>
        <div class="row form-group text-center">
            <div class="col col-sm-12">
                <button type="submit" class="btn btn-success" name="btn_action" value="">Đổi</button>
            </div>
        </div>
    </form>
</div>
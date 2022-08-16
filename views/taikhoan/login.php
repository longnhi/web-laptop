<div class="container mt-3 mb-3">
    <form class="form-horizontal col-sm-9" action="./user.php?action=login" method="POST" style="margin: auto;">
        <div class="row form-group">
            <div class="col col-sm-3"><label for="email">Email:</label></div>
            <div class="col-sm-9">
                <input type="email" class="form-control" placeholder="email@gmail.com" id="email" name="email" required>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-sm-3"><label for="password">Mật khẩu:</label></div>
            <div class="col-sm-9">
                <input type="password" class="form-control" placeholder="Mật khẩu" id="password" name="password" required>
            </div>
        </div>
        <div class="row form-group" style="text-align:center;">
            <div class="col col-sm-12">
                <button type="submit" class="btn btn-success" name="btn_action" value="">Đăng nhập</button>
            </div>
        </div>
    </form>
    <div class="mr-auto text-center">
        Bạn chưa có tài khoản, hãy truy cập
        <a href="./index.php?controller=khachhang&action=dangky">Đăng ký</a>
    </div>
</div>
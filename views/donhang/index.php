<div class="container mt-3 mb-3">
    <form class="form-horizontal col-sm-12" action="index.php?controller=donhang&action=thanhtoan" method="POST"
        style="margin: auto;">
        <div class="row form-group">
            <div class="col col-sm-4"><label for="name">Tên người nhận:</label></div>
            <div class="col-sm-8">
                <input type="text" class="form-control" placeholder="Tên người nhận" id="name" name="name" required>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-sm-4"><label for="sdt">Số điện thoại:</label></div>
            <div class="col-sm-8">
                <input type="number" class="form-control" placeholder="Số điện thoại người nhận" id="sdt" name="sdt" required>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-sm-4"><label for="diachi">Địa chỉ nhận:</label></div>
            <div class="col-sm-8">
                <input type="text" class="form-control" placeholder="Địa chỉ nhận" id="diachi" name="diachi" required>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-sm-4"><label for="gioitinh">Phương thức thanh toán:</label></div>
            <div class="col-sm-8">
                <div class="form-check-inline">
                    <label class="form-check-label" for="pttt">
                        <input type="radio" class="form-check-input" id="tructiep" name="pttt" value="1" checked>Thanh toán khi nhận hàng
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label" for="nu">
                        <input type="radio" class="form-check-input" id="the" name="pttt" value="0">Thanh toán qua thẻ
                    </label>
                </div>
            </div>
        </div>
        <div class="row form-group" style="text-align:center;">
            <div class="col col-sm-12">
                <button type="submit" class="btn btn-success" name="btn_action" value="">Đặt hàng</button>
            </div>
        </div>
    </form>
</div>
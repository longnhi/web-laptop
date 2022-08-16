<div class="container-fluid">
    <div class="container justify-content-center">
        <div class="row">
            <div class="card col-12">
                <div class="card-header text-center">
                    <h4 class="card-title">Thay đổi thông tin cá nhân</h4>
                </div>
                <div class="card-body">
                    <form class="form-horizontal col-sm-9" action="./index.php?controller=khachhang&action=xulythaydoi"
                        method="POST" style="margin: auto;">
                        <div class="row form-group">
                            <div class="col col-sm-3"><label for="email">Email:</label></div>
                            <div class="col-sm-9">
                                <input class="form-control" name="makh" type="text" value="<?php echo $itemkh[0]['makh']; ?>" hidden readonly>
                                <input type="email" class="form-control" placeholder="email@gmail.com" id="email"
                                    name="email" value="<?php echo $itemkh[0]['email']; ?>" readonly required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-sm-3"><label for="name">Họ và tên:</label></div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Họ và tên" id="name" name="name"
                                    value="<?php echo $itemkh[0]['tenkh']; ?>" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-sm-3"><label for="gioitinh">Giới tính:</label></div>
                            <div class="col-sm-9">
                                <div class="form-check-inline">
                                    <label class="form-check-label" for="nam">
                                        <input type="radio" class="form-check-input" id="nam" name="gioitinh" value="1"
                                        <?php echo $itemkh[0]['gioitinh']==1?'checked':''; ?> >Nam
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label" for="nu">
                                        <input type="radio" class="form-check-input" id="nu" name="gioitinh"
                                        <?php echo $itemkh[0]['gioitinh']==0?'checked':''; ?> value="0">Nữ
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-sm-3"><label for="sdt">Số điện thoại:</label></div>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" placeholder="Số điện thoại" id="sdt" name="sdt"
                                    value="<?php echo $itemkh[0]['sdt']; ?>" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-sm-3"><label for="ngaysinh">Ngày sinh:</label></div>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" placeholder="Ngày sinh" id="ngaysinh"
                                    name="ngaysinh" value="<?php echo $itemkh[0]['ngaysinh']; ?>" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-sm-3"><label for="diachi">Địa chỉ:</label></div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Địa chỉ" id="diachi" name="diachi"
                                    value="<?php echo $itemkh[0]['diachi']; ?>" required>
                            </div>
                        </div>
                        <div class="row form-group" style="text-align:center;">
                            <div class="col col-sm-12">
                                <button type="submit" class="btn btn-success" name="btn_action" value="">Lưu thông tin</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
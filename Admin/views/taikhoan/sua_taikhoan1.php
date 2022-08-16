<div class="m-auto border border-secondary p-2" style="width:1000px">
    <?php
    foreach ($data

             as $r) {
        ?>
        <div class="container">

            <form method="post" action="index.php?controller=xuly&action=suataikhoan1" class="row"
                  enctype='multipart/form-data'>
                <div class="mb-3 col-12">
                    <label class="form-label">ID</label>
                    <input readonly name="ID" class="form-control" type="text" value="<?php echo $r['makh'] ?>">
                </div>
                <div class="mb-3 col-12">
                    <label class="form-label">Tên Tài Khoản</label>
                    <input name="tenkh" type="text" class="form-control" value="<?php echo $r['tenkh'] ?>">
                </div>

                <div class="mb-3 col-12">
                    <label class="form-label">Email</label>
                    <input name="email" class="form-control" type="text" value="<?php echo $r['email'] ?>">
                </div>

                <div class="mb-3 col-12">
                    <label class="form-label">Mật Khẩu</label>
                    <input name="password" class="form-control" type="text" value="<?php echo $r['password'] ?>">
                </div>

                <div class="mb-3 col-12">
                    <label class="form-label">Số Điện Thoại</label>
                    <input name="sdt" class="form-control" type="number" value="<?php echo $r['sdt'] ?>">
                </div>

                <div class="mb-3 col-12">
                    <label class="form-label">Giới Tính</label>
                    <select name="gioitinh" class="browser-default custom-select custom-select-lg">
                        <option value="<?php echo $r['gioitinh'] ?>">
                            <?php if ($r['gioitinh'] == 0) {
                                echo 'Nam';
                            } else {
                                echo 'Nữ';
                            } ?></option>
                        <option value="0">Nam</option>
                        <option value="1">Nữ</option>
                    </select>
                </div>

                <div class="mb-3 col-12">
                    <label class="form-label">Ngày Sinh</label>
                    <input name="ngaysinh" class="form-control" type="date" value="<?php echo $r['ngaysinh'] ?>">
                </div>

                <div class="mb-3 col-12">
                    <label class="form-label">Địa Chỉ</label>
                    <input name="diachi" class="form-control" type="text" value="<?php echo $r['diachi'] ?>">
                </div>

                <div class="mb-3 col-6" style="text-align: center">
                    <button name="btnLuu" type="submit" class="btn btn-primary py-1 px-5">Lưu dữ liệu</button>
                </div>

                <div class="mb-3 col-6" style="text-align: center">
                    <button type="reset" class="btn btn-danger py-1 px-5">Xóa làm lại</button>
                </div>
            </form>
        </div>
        <?php
    }
    ?>
</div>

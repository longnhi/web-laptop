<div class="m-auto border border-secondary p-2" style="width:1000px">
    <div class="container">
        <form method="post" action="index.php?controller=xuly&action=suathongbao" class="row"
              enctype='multipart/form-data'>
            <?php
            foreach ($data

                     as $r) {
                ?>
                <div class="mb-3 col-12">
                    <label class="form-label">ID</label>
                    <input readonly name="ID" type="text" class="form-control" value="<?php echo $r['matb'] ?>">
                </div>

                <div class="mb-3 col-12">
                    <label class="form-label">Tiêu Đề</label>
                    <input name="tieude" type="text" class="form-control" value="<?php echo $r['tieude'] ?>">
                </div>

                <div class="mb-3 col-12">
                    <label class="form-label">Nội Dung</label>
                    <input name="noidung" class="form-control" type="text" value="<?php echo $r['noidung'] ?>">
                </div>

                <div class="mb-3 col-12">
                    <label class="form-label">Ngày Đăng</label>
                    <input name="ngaydang" class="form-control" type="date" value="<?php echo $r['ngaydang'] ?>">
                </div>

                <div class="mb-3 col-12">
                    <label class="form-label">Người Quản Trị</label>
                    <select name="quantri" class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option value="<?php echo $r['maqt']; ?>"></option>
                        <?php
                        $nqt = new TaiKhoan();
                        $datatk = $nqt->alladmin();
                        foreach ($datatk as $n) {
                            ?>
                            <option value="<?php echo $n['maqt']; ?>"><?php echo $n['tendangnhap']; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>

                <div class="mb-3 col-12">
                    <label class="form-label">Khách Hàng</label>
                    <select name="khachhang" class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option value="<?php echo $r['makh']; ?>"></option>
                        <?php
                        $nqt = new TaiKhoan();
                        $datakh = $nqt->allkh();
                        foreach ($datakh as $m) {
                            ?>
                            <option value="<?php echo $m['makh']; ?>"><?php echo $m['tenkh']; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>

                <div class="mb-3 col-6" style="text-align: center">
                    <button name="btnLuu" type="submit" class="btn btn-primary py-1 px-5">Lưu dữ liệu</button>
                </div>

                <div class="mb-3 col-6" style="text-align: center">
                    <button type="reset" class="btn btn-danger py-1 px-5">Xóa làm lại</button>
                </div>
                <?php
            }
            ?>
        </form>
    </div>
</div>

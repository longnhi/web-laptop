<div class="m-auto border border-secondary p-2" style="width:1000px">
    <div class="container">
        <form method="post" action="index.php?controller=xuly&action=thembanner" class="row" enctype='multipart/form-data'>
            <div class="mb-3 col-12">
                <label class="form-label">Hình</label>
                <input name="hinh" type="file" class="form-control">
            </div>

            <div class="mb-3 col-12">
                <label class="form-label">Địa chỉ URL</label>
                <input name="url" class="form-control" type="text">
            </div>

            <div class="mb-3 col-12">
                <label class="form-label">Người Quản Trị</label>
                <select name="quantri" class="form-select form-select-sm" aria-label=".form-select-sm example">
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

            <div class="mb-3 col-6" style="text-align: center">
                <button name="btnLuu" type="submit" class="btn btn-primary py-1 px-5">Lưu dữ liệu</button>
            </div>

            <div class="mb-3 col-6" style="text-align: center">
                <button type="reset" class="btn btn-danger py-1 px-5">Xóa làm lại</button>
            </div>
        </form>
    </div>
</div>

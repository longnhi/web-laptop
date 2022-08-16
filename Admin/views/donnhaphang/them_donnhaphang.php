<div class="m-auto border border-secondary p-2" style="width:1000px">
    <div class="container">
        <form method="post" action="index.php?controller=xuly&action=themdonnhaphang" class="row" enctype='multipart/form-data'>
            <div class="mb-3 col-12">
                <label class="form-label">Ngày Nhập</label>
                <input name="ngaynhap" type="date" class="form-control">
            </div>

            <div class="mb-3 col-12">
                <label class="form-label">Số Lượng</label>
                <input name="soluong" class="form-control" type="number">
            </div>

            <div class="mb-3 col-12">
                <label class="form-label">Nhà Sản Xuất</label>
                <select name="nhasanxuat" class="form-select form-select-sm" aria-label=".form-select-sm example"">
                <?php
                $nhasx = new NhaSanXuat();
                $datansx = $nhasx->all();
                foreach ($datansx as $n) {
                    ?>
                    <option value="<?php echo $n['mansx']; ?>"><?php echo $n['tennsx']; ?></option>
                    <?php
                }
                ?>
                </select>
            </div>

            <div class="mb-3 col-12">
                <label class="form-label">Sản Phẩm</label>
                <select name="sanpham" class="form-select form-select-sm" aria-label=".form-select-sm example"">
                <?php
                $sp = new SanPham();
                $datasp = $sp->all();
                foreach ($datasp as $n) {
                    ?>
                    <option value="<?php echo $n['masp']; ?>"><?php echo $n['tensp']; ?></option>
                    <?php
                }
                ?>
                </select>
            </div>

            <div class="mb-3 col-12">
                <label class="form-label">Người Quản Trị</label>
                <select name="nguoiquantri" class="form-select form-select-sm" aria-label=".form-select-sm example"">
                <?php
                $qt = new TaiKhoan();
                $dataqt = $qt->alladmin();
                foreach ($dataqt as $n) {
                    ?>
                    <option value="<?php echo $n['maqt']; ?>"><?php echo $n['tenquantri']; ?></option>
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

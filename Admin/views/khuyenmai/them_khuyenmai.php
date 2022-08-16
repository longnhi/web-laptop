<div class="m-auto border border-secondary p-2" style="width:1000px">
    <div class="container">
        <form method="post" action="index.php?controller=xuly&action=themkhuyenmai" class="row" enctype='multipart/form-data'>
            <div class="mb-3 col-12">
                <label class="form-label">Tên Khuyến Mãi</label>
                <input name="tenkm" type="text" class="form-control">
            </div>

            <div class="mb-3 col-12">
                <label class="form-label">Sản Phẩm</label>
                <select name="sanpham" class="form-select form-select-sm" aria-label=".form-select-sm example">
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
                <label class="form-label">Giá Giảm</label>
                <input name="giagiam" class="form-control" type="number">
            </div>

            <div class="mb-3 col-12">
                <label class="form-label">Ngày Tạo</label>
                <input name="ngaytao" class="form-control" type="date">
            </div>

            <div class="mb-3 col-12">
                <label class="form-label">Ngày Hết Hạn</label>
                <input name="ngayhethan" class="form-control" type="date">
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

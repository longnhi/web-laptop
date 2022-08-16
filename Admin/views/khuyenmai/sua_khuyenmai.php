<div class="m-auto border border-secondary p-2" style="width:1000px">
    <?php
    foreach ($data

             as $r) {
        ?>
        <div class="container">
            <form method="post" action="index.php?controller=xuly&action=suakhuyenmai" class="row" enctype='multipart/form-data'>
                <div class="mb-3 col-12">
                    <label class="form-label">ID</label>
                    <input readonly name="ID" class="form-control" type="text" value="<?php echo $r['makm']; ?>">
                </div>

                <div class="mb-3 col-12">
                    <label class="form-label">Tên Khuyến Mãi</label>
                    <input name="tenkm" type="text" class="form-control" value="<?php echo $r['tenkm']; ?>">
                </div>

                <div class="mb-3 col-12">
                    <label class="form-label">Mã sp</label>
                    <input name="masp" class="form-control" type="number" value="<?php echo $r['masp']; ?>">
                </div>

                <div class="mb-3 col-12">
                    <label class="form-label">Giá Giảm</label>
                    <input name="giagiam" class="form-control" type="number" value="<?php echo $r['giagiam']; ?>">
                </div>

                <div class="mb-3 col-12">
                    <label class="form-label">Ngày Bắt Đầu</label>
                    <input name="ngaybd" class="form-control" type="text" value="<?php echo $r['ngaybd']; ?>">
                </div>

                <div class="mb-3 col-12">
                    <label class="form-label">Ngày Hết Hạn</label>
                    <input name="ngaykt" class="form-control" type="text" value="<?php echo $r['ngaykt']; ?>">
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

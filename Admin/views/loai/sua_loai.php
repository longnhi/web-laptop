<div class="container">
    <form method="post" action="index.php?controller=xuly&action=sualoai" class="row" enctype='multipart/form-data'>
        <?php
        foreach ($data as $r) {
            ?>
            <div class="mb-3 col-12">
                <label class="form-label">Mã loại</label>
                <input readonly name="ID" class="form-control" type="text" value="<?php echo $r['maloai']; ?>">
            </div>

            <div class="mb-3 col-12">
                <label class="form-label">Tên Loại</label>
                <input name="tenloai" class="form-control" type="text" value="<?php echo $r['tenloai']; ?>">
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
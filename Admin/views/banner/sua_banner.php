<div class="m-auto border border-secondary p-2" style="width:1000px">
    <?php
    foreach ($data

             as $r) {
        ?>
        <div class="container">
            <form method="post" action="index.php?controller=xuly&action=suabanner" class="row" enctype='multipart/form-data'>
                <div class="mb-3 col-12">
                    <label class="form-label">ID</label>
                    <input name="ID" readonly class="form-control" type="text" value="<?php echo $r['mabanner']; ?>" >
                </div>

                <div class="mb-3 col-12">
                    <label class="form-label">Hình Ảnh(Thay đổi nếu muốn)</label>
                    <input name="hinh" type="file" class="form-control">
                    <input name="hinhcu" type="text" class="form-control" hidden value="<?php echo $r['hinhanh']; ?>">
                </div>

                <div class="mb-3 col-12">
                    <label class="form-label">Url</label>
                    <input name="url" class="form-control" type="text" value="<?php echo $r['url']; ?>">
                </div>

                <div class="mb-3 col-12">
                    <label class="form-label">Mã Quản Trị</label>
                    <input name="maqt" class="form-control" type="text" value="<?php echo $r['maqt']; ?>">
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

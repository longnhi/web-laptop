<div class="m-auto border border-secondary p-2" style="width:1000px">
    <div class="container">
        <form method="post" action="index.php?controller=xuly&action=themnsx" class="row" enctype='multipart/form-data'>
            <div class="mb-3 col-12">
                <label class="form-label">Tên Nhà Sản Xuất</label>
                <input name="tennsx" type="text" class="form-control">
            </div>

            <div class="mb-3 col-12">
                <label class="form-label">Địa Chỉ</label>
                <input name="diachi" class="form-control" type="text">
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

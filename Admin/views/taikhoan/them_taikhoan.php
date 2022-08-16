<div class="m-auto border border-secondary p-2" style="width:1000px">
    <div class="container">
        <form method="post" action="index.php?controller=xuly&action=themtaikhoan" class="row" enctype='multipart/form-data'>
            <div class="mb-3 col-12">
                <label class="form-label">Tên Tài Khoản</label>
                <input name="ten" type="text" class="form-control">
            </div>

            <div class="mb-3 col-12">
                <label class="form-label">Password</label>
                <input name="pass" class="form-control" type="text">
            </div>

            <div class="mb-3 col-12">
                <label class="form-label">Tên Quản Trị</label>
                <input name="tenqt" type="text" class="form-control">
            </div>

            <div class="mb-3 col-12">
                <label class="form-label">Email</label>
                <input name="email" class="form-control" type="text">
            </div>

            <div class="mb-3 col-12">
                <label class="form-label">Số Điện Thoại</label>
                <input name="sdt" class="form-control" type="number">
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

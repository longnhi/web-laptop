<div class="m-auto border border-secondary p-2" style="width:1000px">
    <div class="container">
        <form method="post" action="index.php?controller=xuly&action=themtaikhoan1" class="row"
              enctype='multipart/form-data'>
            <div class="mb-3 col-12">
                <label class="form-label">Tên Tài Khoản</label>
                <input name="tenkh" type="text" class="form-control">
            </div>

            <div class="mb-3 col-12">
                <label class="form-label">Email</label>
                <input name="email" class="form-control" type="text">
            </div>

            <div class="mb-3 col-12">
                <label class="form-label">Mật Khẩu</label>
                <input name="password" class="form-control" type="text">
            </div>

            <div class="mb-3 col-12">
                <label class="form-label">Số Điện Thoại</label>
                <input name="sdt" class="form-control" type="number">
            </div>

            <div class="mb-3 col-12">
                <label class="form-label">Giới Tính</label>
                <select name="gioitinh" class="browser-default custom-select custom-select-lg">
                    <option value="0">Nam</option>
                    <option value="1">Nữ</option>
                </select>
            </div>

            <div class="mb-3 col-12">
                <label class="form-label">Ngày Sinh</label>
                <input name="ngaysinh" class="form-control" type="date">
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

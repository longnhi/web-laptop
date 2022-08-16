<div class="container-fluid">
    <div class="container justify-content-center">
        <div class="row">
            <div class="card col-12">
                <div class="card-header text-center">
                    <h4 class="card-title">Thông tin cá nhân</h4>
                </div>
                <div class="card-body">
                    <h4 class="card-title"><?php echo $itemkh[0]['tenkh']; ?></h4>
                    <p class="card-text">Email: <?php echo $itemkh[0]['email']; ?></p>
                    <p class="card-text">Số điện thoại: <?php echo $itemkh[0]['sdt']; ?></p>
                    <p class="card-text">Giới tính: <?php echo $itemkh[0]['gioitinh']==1?'Nam':'Nữ'; ?></p>
                    <p class="card-text">Ngày sinh: <?php echo $itemkh[0]['ngaysinh']; ?></p>
                    <p class="card-text">Địa chỉ: <?php echo $itemkh[0]['diachi']; ?></p>
                </div>
                <div class="text-center mb-4">
                    <a class="btn btn-outline-success" href="index.php?controller=khachhang&action=edit">Thay đổi</a>
                </div>
            </div>
        </div>
    </div>
</div>
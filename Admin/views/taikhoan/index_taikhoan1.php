<div class="container">
    <div style="text-align: right">
        <a class="btn btn-primary" href="index.php?controller=taikhoan&action=them" role="button">Thêm Tài Khoản</a>
    </div>
    <br>
    <table class='table table-bordered'>
        <tr>
            <td>ID</td>
            <td>Tên Khách Hàng</td>
            <td>Email</td>
            <td>Password</td>
            <td>SDT</td>
            <td>Giới Tính</td>
            <td>Ngày sinh</td>
            <td>Địa chỉ</td>
            <td></td>
        </tr>
        <?php
        $userkh = new TaiKhoan();
        $data = $userkh->allkh();
        foreach ($data as $r) {
            ?>
            <tr>
                <td><?php echo $r['makh']; ?></td>
                <td><?php echo $r['tenkh']; ?></td>
                <td><?php echo $r['email']; ?></td>
                <td><?php echo $r['password']; ?></td>
                <td><?php echo $r['sdt']; ?></td>
                <td><?php echo $r['gioitinh']; ?></td>
                <td><?php echo $r['ngaysinh']; ?></td>
                <td><?php echo $r['diachi']; ?></td>

                <td>
                    <a class="btn btn-primary"
                       href="./index.php?controller=taikhoan&action=sua1&id=<?php echo $r['makh']; ?>"
                       role="button">
                        Sửa
                    </a>

                    <a class="btn btn-danger"
                       href="./index.php?controller=taikhoan&action=xoa1&id=<?php echo $r['makh'] ?>"
                       role="button">
                        Xóa
                    </a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>
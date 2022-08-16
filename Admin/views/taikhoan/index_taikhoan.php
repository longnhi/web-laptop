<div class="container">
    <div style="text-align: right">
        <a class="btn btn-primary" href="index.php?controller=taikhoan&action=them" role="button">Thêm Tài Khoản</a>
    </div>
    <br>
    <table class='table table-bordered'>
        <tr>
            <td>ID</td>
            <td>Tên Tài Khoản</td>
            <td>Password</td>
            <td>Tên Quản Trị</td>
            <td>Email</td>
            <td>SDT</td>
            <td></td>
        </tr>
        <?php
        $useradmin = new TaiKhoan();
        $data = $useradmin->alladmin();
        foreach ($data as $r) {
            ?>
            <tr>
                <td><?php echo $r['maqt']; ?></td>
                <td><?php echo $r['tendangnhap']; ?></td>
                <td><?php echo $r['password']; ?></td>
                <td><?php echo $r['tenquantri']; ?></td>
                <td><?php echo $r['email']; ?></td>
                <td><?php echo $r['sdt']; ?></td>

                <td>
                    <a class="btn btn-primary"
                       href="./index.php?controller=taikhoan&action=sua&id=<?php echo $r['maqt']; ?>"
                       role="button">
                        Sửa
                    </a>

                    <a class="btn btn-danger"
                       href="./index.php?controller=taikhoan&action=xoa&id=<?php echo $r['maqt'] ?>"
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
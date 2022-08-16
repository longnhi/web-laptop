<div class="container">
    <div style="text-align: right">
        <a class="btn btn-primary" href="index.php?controller=donnhaphang&action=them" role="button">Thêm Đơn Nhập Hàng</a>
    </div>
    <br>
    <table class='table table-bordered'>
        <tr>
            <td>ID</td>
            <td>Ngày Nhập</td>
            <td>Số Lượng</td>
            <td>Mã Nhà Sản Xuất</td>
            <td>Mã Sản Phẩm</td>
            <td>Mã Quản Trị</td>
            <td style="text-align: right">Hành Động</td>
        </tr>

        <?php
        $dnh = new DonNhapHang();
        $data = $dnh->all();
        foreach ($data as $r) {
            ?>
            <tr style="text-align: left; font-size: 16px;">
                <td> <?php echo $r['madnh']; ?></td>
                <td><?php echo $r['ngaynhap']; ?></td>
                <td><?php echo $r['soluong']; ?></td>
                <td><?php echo $r['tennsx']; ?></td>
                <td><?php echo $r['tensp']; ?></td>
                <td><?php echo $r['tenquantri']; ?></td>

                <td style="text-align: right">
                    <a class="btn btn-primary"
                       href="index.php?controller=donnhaphang&action=sua&id=<?php echo $r['madnh']; ?> " role="button">
                        Sửa
                    </a>

                    <a class="btn btn-danger"
                       href="index.php?controller=donnhaphang&action=xoa&id=<?php echo $r['madnh'] ?>" role="button">
                        Xóa
                    </a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>




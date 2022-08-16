<div class="container">
    <div style="text-align: right">
        <a class="btn btn-primary" href="index.php?controller=thongbao&action=them" role="button">Thêm Thông Báo</a>
    </div>
    <br>
    <table class='table table-bordered'>
        <tr>
            <td>ID</td>
            <td>Tiêu Đề</td>
            <td>Nội Dung</td>
            <td>Ngày Đăng</td>
            <td>Quản Trị</td>
            <td>Khách Hàng</td>
            <td style="text-align: right">Hành Động</td>
        </tr>

        <?php
        $tb = new ThongBao();
        $data = $tb->all();
        foreach ($data as $r) {
            ?>
            <tr style="text-align: left; font-size: 16px;">
                <td> <?php echo $r['matb']; ?></td>
                <td><?php echo $r['tieude']; ?></td>
                <td><?php echo $r['noidung']; ?></td>
                <td><?php echo $r['ngaydang']; ?></td>
                <td><?php echo $r['tenquantri']; ?></td>
                <td><?php echo $r['tenkh']; ?></td>

                <td style="text-align: right">
                    <a class="btn btn-primary"
                       href="index.php?controller=thongbao&action=sua&id=<?php echo $r['matb']; ?> " role="button">
                        Sửa
                    </a>

                    <a class="btn btn-danger"
                       href="index.php?controller=thongbao&action=xoa&id=<?php echo $r['matb'] ?>" role="button">
                        Xóa
                    </a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>




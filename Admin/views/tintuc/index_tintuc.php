<div class="container">
    <div style="text-align: right">
        <a class="btn btn-primary" href="index.php?controller=tintuc&action=them" role="button">Thêm Tin Tức</a>
    </div>
    <br>
    <table class='table table-bordered'>
        <tr>
            <td>ID</td>
            <td>Tiêu Đề</td>
            <td>Nội Dung</td>
            <td>Ngày Đăng</td>
            <td>Mã Quản Trị</td>
            <td style="text-align: right">Hành Động</td>
        </tr>

        <?php
        $tt = new TinTuc();
        $data = $tt->all();
        foreach ($data as $r) {
            ?>
            <tr style="text-align: left; font-size: 16px;">
                <td> <?php echo $r['matt']; ?></td>
                <td><?php echo $r['tieude']; ?></td>
                <td><?php echo $r['noidung']; ?></td>
                <td><?php echo $r['ngaydang']; ?></td>
                <td><?php echo $r['maqt']; ?></td>

                <td style="text-align: right">
                    <a class="btn btn-primary"
                       href="index.php?controller=tintuc&action=sua&id=<?php echo $r['matt']; ?> " role="button">
                        Sửa
                    </a>

                    <a class="btn btn-danger"
                       href="index.php?controller=tintuc&action=xoa&id=<?php echo $r['matt'] ?>" role="button">
                        Xóa
                    </a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>




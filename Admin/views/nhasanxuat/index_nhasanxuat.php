<div class="container">
    <div style="text-align: right">
        <a class="btn btn-primary" href="index.php?controller=nhasanxuat&action=them" role="button">Thêm Nhà Sản Xuất</a>
    </div>
    <br>
    <table class='table table-bordered'>
        <tr>
            <td>ID</td>
            <td>Tên Nhà Sản Xuất</td>
            <td>Địa Chỉ</td>
            <td>Action</td>
        </tr>
        <?php
        $nhasanxuat = new NhaSanXuat();
        $data = $nhasanxuat->all();
        foreach ($data as $r) {
            ?>
            <tr>
                <td><?php echo $r['mansx']; ?></td>
                <td><?php echo $r['tennsx']; ?></td>
                <td><?php echo $r['diachi']; ?></td>
                <td>
                    <a class="btn btn-primary"
                       href="./index.php?controller=nhasanxuat&action=sua&id=<?php echo $r['mansx']; ?> " role="button">
                        Sửa
                    </a>

                    <a class="btn btn-danger"
                       href="./index.php?controller=nhasanxuat&action=xoa&id=<?php echo $r['mansx'] ?>" role="button">
                        Xóa
                    </a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>
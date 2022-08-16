<div class="container">
    <div style="text-align: right">
        <a class="btn btn-primary" href="index.php?controller=loaisanpham&action=them" role="button">Thêm Loại</a>
    </div>
    <br>
    <table class='table table-bordered'>
        <tr>
            <td>ID</td>
            <td>Tên Loại</td>
            <td style="text-align: right">Hành Động</td>
        </tr>

        <?php
        $loai = new LoaiSanPham();
        $data = $loai->all();
        foreach ($data as $r) {
            ?>
            <tr style="text-align: left; font-size: 16px;">
                <td> <?php echo $r['maloai']; ?></td>
                <td><?php echo $r['tenloai']; ?></td>

                <td style="text-align: right">
                    <a class="btn btn-primary"
                       href="index.php?controller=loaisanpham&action=sua&id=<?php echo $r['maloai']; ?> " role="button">
                        Sửa
                    </a>

                    <a class="btn btn-danger"
                       href="index.php?controller=loaisanpham&action=xoa&id=<?php echo $r['maloai'] ?>" role="button">
                        Xóa
                    </a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>




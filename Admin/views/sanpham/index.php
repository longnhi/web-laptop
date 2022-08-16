<div class="container">
    <div style="text-align: right">
        <a class="btn btn-primary" href="index.php?controller=sanpham&action=them" role="button">Thêm Sản Phẩm</a>
    </div>
    <br>
    <table class='table table-bordered'>
        <tr>
            <td>ID</td>
            <td>Hình</td>
            <td>Tên SP</td>
            <td>Giá</td>
            <td>Nhà Sản Xuất</td>
            <td>Loại</td>
            <td style="text-align: right">Hành Động</td>
        </tr>

        <?php
        foreach ($data as $r) {
            ?>
            <tr style="text-align: left; font-size: 16px;">
                <td> <?php echo $r['masp']; ?></td>
                <td><img src="<?php echo IMG_BOOK . $r['hinhanh']; ?>" alt="" style="width: 100px; height: 100px; object-fit: cover;"><br></td>
                <td><?php echo $r['tensp']; ?></td>
                <td> <?php echo number_format($r['gia']); ?> VND</td>
                <td><?php echo $r['tennsx']; ?></td>
                <td> <?php echo $r['tenloai']; ?></td>
                <td style="text-align: right">
                    <a class="btn btn-primary"
                       href="index.php?controller=sanpham&action=chitiet&id=<?php echo $r['masp']; ?> " role="button">
                        Chi Tiết
                    </a>

                    <a class="btn btn-primary"
                       href="index.php?controller=sanpham&action=sua&id=<?php echo $r['masp']; ?> " role="button">
                        Sửa
                    </a>

                    <a class="btn btn-danger"
                       href="index.php?controller=sanpham&action=xoa&id=<?php echo $r['masp'] ?>" role="button">
                        Xóa
                    </a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>




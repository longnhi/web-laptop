<div class="container">
    <div style="text-align: right">
        <a class="btn btn-primary" href="index.php?controller=khuyenmai&action=them" role="button">Thêm Khuyến Mãi</a>
    </div>
    <br>
    <table class='table table-bordered'>
        <tr>
            <td>ID</td>
            <td>Tên Khuyến Mãi</td>
            <td>Sản Phẩm</td>
            <td>Giá Giảm</td>
            <td>Ngày Tạo</td>
            <td>Ngày Hết Hạn</td>
            <td>Action</td>
        </tr>
        <?php
        $km = new KhuyenMai();
        $data = $km->all();
        foreach ($data as $r) {
            ?>
            <tr>
                <td><?php echo $r['makm']; ?></td>
                <td><?php echo $r['tenkm']; ?></td>
                <td><?php echo $r['tensp']; ?></td>
                <td><?php echo number_format($r['giagiam']); ?> VND</td>
                <td><?php echo $r['ngaybd']; ?></td>
                <td><?php echo $r['ngaykt']; ?></td>
                <td>
                    <a class="btn btn-primary"
                       href="./index.php?controller=khuyenmai&action=sua&id=<?php echo $r['makm']; ?> "
                       role="button">
                        Sửa
                    </a>
                    <a class="btn btn-danger"
                       href="./index.php?controller=khuyenmai&action=xoa&id=<?php echo $r['makm'] ?>"
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
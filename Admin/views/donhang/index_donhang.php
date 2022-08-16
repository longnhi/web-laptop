<div class="container">
    <table class='table table-bordered'>
        <tr>
            <td>ID</td>
            <td>Tên Người Đặt</td>
            <td>Tên Người Nhận</td>
            <td>SĐT Người Nhận</td>
            <td>Ngày Đặt</td>
            <td>Địa Chỉ Nhận</td>
            <td>Phương Thức Thanh Toán</td>
            <td>Trạng Thái</td>
            <td>Action</td>
        </tr>
        <?php
        $dh = new DonHang();
        $data = $dh->all();
        foreach ($data as $r) {
            ?>
            <tr>
                <td><?php echo $r['madh']; ?></td>
                <td><?php echo $r['tenkh']; ?></td>
                <td><?php echo $r['tennguoinhan']; ?></td>
                <td><?php echo $r['sdtnguoinhan']; ?></td>
                <td><?php echo $r['ngaydat']; ?></td>
                <td><?php echo $r['diachinhan']; ?></td>
                <td><?php
                    if ($r['phuongthucthanhtoan'] == 1) {
                        echo 'Thanh Toán Khi Nhận Hàng';
                    } else {
                        echo 'Thanh Toán Qua Thẻ';
                    }
                    ?></td>
                <td><?php echo $r['trangthai']; ?></td>
                <td>
                    <a class="btn btn-danger"
                       href="./index.php?controller=donhang&action=chitiet&id=<?php echo $r['madh'] ?>"
                       role="button">Chi Tiết
                    </a>
                    <br><br>
                    <a class="btn btn-danger"
                       href="./index.php?controller=donhang&action=doitrangthaigiaohang&id=<?php echo $r['madh'] ?>"
                       role="button">Giao Hàng
                    </a>
                    <br><br>
                    <a class="btn btn-danger"
                       href="./index.php?controller=donhang&action=doitrangthainhanhang&id=<?php echo $r['madh'] ?>"
                       role="button">Nhận Hàng
                    </a>
                    <br><br>
                    <a class="btn btn-danger"
                       href="./index.php?controller=donhang&action=doitrangthaihuyhang&id=<?php echo $r['madh'] ?>"
                       role="button">Hủy Hàng
                    </a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>
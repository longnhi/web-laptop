<div class="container">
    <table class='table table-bordered'>
        <tr>
            <td>ID</td>
            <td>Nội dung</td>
            <td>Thời gian</td>
            <td>Tên khách hàng</td>
            <td>Tên sản phẩm</td>
            <td>Action</td>
        </tr>
        <?php
        $bl = new BinhLuan();
        $data = $bl->all();
        foreach ($data as $r) {
            ?>
            <tr>
                <td><?php echo $r['mabl']; ?></td>
                <td><?php echo $r['noidung']; ?></td>
                <td><?php echo $r['ngaydang']; ?></td>
                <td><?php echo $r['tenkh']; ?></td>
                <td><?php echo $r['tensp']; ?></td>
                <td>
                    <a class="btn btn-danger"
                       href="./index.php?controller=binhluan&action=xoa&id=<?php echo $r['mabl'] ?>"
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
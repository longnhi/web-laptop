<div class="container">
    <div style="text-align: right">
        <a class="btn btn-primary" href="index.php?controller=banner&action=them" role="button">Thêm Banner</a>
    </div>
    <br>
    <table class='table table-bordered'>
        <tr>
            <td>ID</td>
            <td>Hình</td>
            <td>Địa chỉ URL</td>
            <td>Action</td>
        </tr>
        <?php
        $banner = new Banner();
        $data = $banner->all();
        foreach ($data as $r) {
            ?>
            <tr>
                <td><?php echo $r['mabanner']; ?></td>
                <td><img src="<?php echo IMG_BANNER . $r['hinhanh']; ?>"></td>
                <td><?php echo $r['url']; ?></td>
                <td>
                    <a class="btn btn-primary"
                       href="./index.php?controller=banner&action=sua&id=<?php echo $r['mabanner']; ?>"
                       role="button">
                        Sửa
                    </a>

                    <a class="btn btn-danger"
                       href="./index.php?controller=banner&action=xoa&id=<?php echo $r['mabanner'] ?>"
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
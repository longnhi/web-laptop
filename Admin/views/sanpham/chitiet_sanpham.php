<style>
    .chitiet {
        font-size: 20px;
        font-weight: bold;
    }
</style>
<div class="container">
    <div style="text-align: right">
        <a class="btn btn-danger"
           href="index.php?controller=sanpham&action=index1" role="button">Trở về</a>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-6">
            <?php
            foreach ($data

            as $r) {
            ?>
            <div class="card-img-top"><img src="<?php echo IMG_SANPHAM . $r['hinhanh']; ?>" alt=""
                                           style="width: 400px; height: 400px; object-fit: cover;"></div>
        </div>

        <div class="col-lg-6">
            <?php if (isset($r['tensp'])) {
                echo '<div class="chitiet">' . $r["tensp"] . '</div>';
            } else {
                echo "";
            } ?>

            <?php if (isset($r['gia']) and $r['gia'] != '') {
                echo '<div class="chitiet">Giá: ' . number_format($r["gia"]) . ' VND</div>';
            } else {
                echo "";
            } ?>

            <?php if (isset($r['tennsx']) and $r['tennsx'] != '') {
                echo '<div class="chitiet">Nhà Sản Xuất: ' . $r["tennsx"] . '</div>';
            } else {
                echo "";
            } ?>

            <?php if (isset($r['tenloai']) and $r['tenloai'] != '') {
                echo '<div class="chitiet">Loại: ' . $r["tenloai"] . '</div>';
            } else {
                echo "";
            } ?>

            <?php if (isset($r['baohanh']) and $r['baohanh'] != '') {
                echo '<div class="chitiet">Bảo Hành: ' . $r["baohanh"] . '</div>';
            } else {
                echo "";
            } ?>

            <?php if (isset($r['mausac']) and $r['mausac'] != '') {
                echo '<div class="chitiet">Màu Sắc: ' . $r["mausac"] . '</div>';
            } else {
                echo "";
            } ?>

            <?php if (isset($r['cpu']) and $r['cpu'] != '') {
                echo '<div class="chitiet">Cpu: ' . $r["cpu"] . '</div>';
            } else {
                echo "";
            } ?>

            <?php if (isset($r['ram']) and $r['ram'] != '') {
                echo '<div class="chitiet">Ram: ' . $r["ram"] . '</div>';
            } else {
                echo "";
            } ?>

            <?php if (isset($r['gpu']) and $r['gpu'] != '') {
                echo '<div class="chitiet">Gpu: ' . $r["gpu"] . '</div>';
            } else {
                echo "";
            } ?>

            <?php if (isset($r['dophangiai']) and $r['dophangiai'] != '') {
                echo '<div class="chitiet">Độ phân giải màng hình: ' . $r["dophangiai"] . '</div>';
            } else {
                echo "";
            } ?>

            <?php if (isset($r['ocung']) and $r['ocung'] != '') {
                echo '<div class="chitiet">Ổ cứng: ' . $r["ocung"] . '</div>';
            } else {
                echo "";
            } ?>

            <?php if (isset($r['pin']) and $r['pin'] != '') {
                echo '<div class="chitiet">Pin: ' . $r["pin"] . '</div>';
            } else {
                echo "";
            } ?>

            <?php if (isset($r['trongluong']) and $r['trongluong'] != '') {
                echo '<div class="chitiet">Trọng lượng: ' . $r["trongluong"] . '</div>';
            } else {
                echo "";
            } ?>

            <?php if (isset($r['hedieuhanh']) and $r['hedieuhanh'] != '') {
                echo '<div class="chitiet">Hệ Điều Hành: ' . $r["hedieuhanh"] . '</div>';
            } else {
                echo "";
            } ?>

            <?php if (isset($r['ketnoi']) and $r['ketnoi'] != '') {
                echo '<div class="chitiet">Kết Nối: ' . $r["ketnoi"] . '</div>';
            } else {
                echo "";
            } ?>

            <?php if (isset($r['camera']) and $r['camera'] != '') {
                echo '<div class="chitiet">Camera: ' . $r["camera"] . '</div>';
            } else {
                echo "";
            } ?>

            <?php if (isset($r['soluongtonkho']) and $r['soluongtonkho'] != '') {
                echo '<div class="chitiet">Còn Lại: ' . $r["soluongtonkho"] . ' Đơn vị</div>';
            } else {
                echo "";
            } ?>
        </div>
        <?php
        }
        ?>
    </div>
</div>




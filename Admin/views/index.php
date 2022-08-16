<div class="container">
    <div class="row">
        <div class="col-lg-5">

            <div class="card bg-primary text-white">
                <div class="card-body">
                    <h4 class="card-title" style="text-align: center">Sản Phẩm</h4>
                    <p class="card-text">Tổng số sản phẩm:
                        <?php
                        $sp = new SanPham();
                        $datasp = $sp->tongsp();
                        foreach ($datasp as $e){
                            foreach ($e as $a){
                                echo $a;
                            }
                        }
                        ?>
                    </p>
                    <div style="text-align: right">
                        <a class="btn btn-danger" href="index.php?controller=sanpham&action=index1" role="button">Chi
                            Tiết</a>
                    </div>
                </div>
            </div>
            <div class="card bg-primary text-white mt-3">
                <div class="card-body">
                    <h4 class="card-title" style="text-align: center">Tài khoản khách hàng</h4>
                    <p class="card-text">Tổng số tài khoản khách hàng đã đăng ký:
                        <?php
                        $tk = new TaiKhoan();
                        $datatk = $tk->allkh();
                        echo count($datatk)
                        ?>
                    </p>
                    <div style="text-align: right">
                        <a class="btn btn-danger" href="index.php?controller=taikhoan&action=user" role="button">Chi
                            Tiết</a>
                    </div>
                </div>
            </div>
            <div class="card bg-primary text-white mt-3">
                <div class="card-body">
                    <h4 class="card-title" style="text-align: center">Đơn đặt hàng</h4>
                    <p class="card-text">Tổng số đơn đặt hàng:
                        <?php
                        $dh = new DonHang();
                        $datadh = $dh->all();
                        echo count($datadh)
                        ?>
                    </p>
                    <div style="text-align: right">
                        <a class="btn btn-danger" href="index.php?controller=donhang&action=index" role="button">Chi
                            Tiết</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-7">
            <div class="card bg-warning text-black">
                <div class="card-body">
                    <?php
                    $tb = new ThongBao();
                    $ngaymax = $tb->ngaymax();
                    foreach ($ngaymax as $r) {
                        foreach ($r as $e) {
                            $data = $tb->tbmoi($e);
                            foreach ($data as $q) {

                                ?>
                                <h4 class="card-title" style="text-align: center">Thông Báo Mới Nhất</h4>
                                <h5 class="card-text" style="text-align: center"><?php echo $q['tieude'] ?></h5>
                                <i class="card-text">Ngày Đăng: <?php echo $q['ngaydang'] ?></i>
                                <p class="card-text"><?php echo $q['noidung'] ?></p>
                                <?php
                            }
                        }
                    }
                    ?>
                    <div style="text-align: right">
                        <a class="btn btn-danger" href="index.php?controller=thongbao&action=index" role="button">Chi
                            Tiết</a>
                    </div>
                </div>
            </div>
            <br>
            <div class="card bg-warning text-black" style="height: 250px; overflow-y: scroll">
                <div class="card-body">
                    <h4 class="card-title" style="text-align: center">Bình Luận Của Khách</h4>
                    <div style="text-align: right">
                        <a class="btn btn-danger" href="index.php?controller=binhluan&action=index" role="button">Chi
                            Tiết</a>
                    </div>
                    <br>
                    <?php
                    $bl = new BinhLuan();
                    $databl = $bl->all();
                    foreach ($databl as $bl) {
                        ?>
                        <div class="card bg-primary text-white" style="padding: 15px">
                            <p class="card-text"><?php echo $bl['ngaydang'] ?></p>
                            <p class="card-text">Tên: <?php echo $bl['tenkh'] ?></p>
                            <p class="card-text">Nội Dung: <?php echo $bl['noidung'] ?></p>
                            <p class="card-text">Sản Phẩm: <?php echo $bl['tensp'] ?></p>
                        </div>
                        <br>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mb-3 shadow">
    <div class="row">
    <?php 
    foreach($data as $r){
        $itemkm = $km->detailByMaSP($r['masp']);
    ?>
        <div class="col-lg-3 mb-3 mt-3">
            <div class="card h-100">
                <div class="card-header text-center">
                    <a href="index.php?controller=sanpham&action=chitiet&masp=<?php echo $r['masp']; ?>">
                        <img src="<?php echo IMG_SANPHAM.$r['hinhanh']; ?>"
                            alt="" class="img-thumbnail" style="width: 150px;height: 150px;">
                    </a>
                </div>
                <div class="card-body" style="height:110px;">
                    <h6 class="card-title font-bold">
                        <a class="text-dark" href="index.php?controller=sanpham&action=chitiet&masp=<?php echo $r['masp']; ?>">
                            <?php echo $r['tensp']; ?>
                        </a>
                    </h6>
                    <?php if($itemkm==null)
                    {
                        echo ' <p class="cart-text">Giá: '.number_format($r['gia']).' VNĐ</p>';
                    }else{ ?>
                    <p class="cart-text">Giá gốc: <del><?php echo number_format($r['gia']); ?> VNĐ</del></p>
                    <p class="cart-text">Giá km: <?php echo number_format($r['gia']-$r['giagiam']); ?> VNĐ</p>
                    <?php }?>
                </div>
                <div class="card-body d-flex align-items-center justify-content-center">
                    <a class="page-link mr-3" href="index.php?controller=giohang&action=them&masp=<?php echo $r['masp'] ?>">Giỏ hàng</a>
                </div>
            </div>
        </div>
    <?php }?>
    </div>
</div>
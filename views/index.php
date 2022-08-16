<?php 
foreach ($dataloai as $r){
    if($sp->allByLoai($r['maloai'])==null){}else{?>
    <div class="container mb-3 shadow">
    <div class="d-flex bg-primary">
        <div class="p-3 flex-grow-1 text-light"><?php echo $r['tenloai']; ?></div>
        <div class="p-2"><a class="form-control btn-outline-light" href="./index.php?controller=sanpham&action=lsp&maloai=<?php echo $r['maloai'] ?>">Xem thêm<span
                    class="sr-only">(current)</span></a></div>
    </div>
    
    <div class="row">
        <?php $datasp=$sp->randomByLoai(4,$r['maloai']);
        foreach($datasp as $k){
            $itemkm = $km->detailByMaSP($k['masp']);
        ?>
        <div class="col-lg-3 mb-3 mt-3">
            <div class="card h-100">
                <div class="card-header text-center">
                    <a href="index.php?controller=sanpham&action=chitiet&masp=<?php echo $k['masp']; ?>">
                        <img src="<?php echo IMG_SANPHAM.$k['hinhanh']; ?>"
                            alt="" class="img-thumbnail" style="width: 150px;height: 150px;">
                    </a>
                </div>
                <div class="card-body" style="height:110px;">
                    <h6 class="card-title font-bold">
                        <a class="text-dark" href="index.php?controller=sanpham&action=chitiet&masp=<?php echo $k['masp']; ?>">
                            <?php echo $k['tensp']; ?>
                        </a>
                    </h6>
                    <?php if($itemkm==null)
                    {
                        echo ' <p class="cart-text">Giá: '.number_format($k['gia']).' VNĐ</p>';
                    }else{ ?>
                    <p class="cart-text">Giá gốc: <del><?php echo number_format($k['gia']); ?> VNĐ</del></p>
                    <p class="cart-text">Giá km: <?php echo number_format($k['gia']-$itemkm[0]['giagiam']); ?> VNĐ</p>
                    <?php }?>
                </div>
                <div class="card-body d-flex align-items-center justify-content-center">
                    <a class="page-link mr-3" href="index.php?controller=giohang&action=them&masp=<?php echo $k['masp'] ?>">Giỏ hàng</a>
                </div>
            </div>
        </div>
        <?php }; ?>
    </div>
</div>
<?php }} ?>
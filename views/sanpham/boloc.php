<div class="row">
    <div class="col-sm-3">
        <nav class="navbar navbar-dark bg-primary text-light">
            <div class="flex" id="collapsibleNavIdLoc">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0 flex-column">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php?controller=sanpham&action=loc">Tất cả sản phẩm<span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Loại sản phẩm</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <?php include './views/loaisanpham/menu.php'; ?>
                        </div>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Nhà sản xuất</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <?php include './views/nhasanxuat/menu.php'; ?>
                        </div>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Giá</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="./index.php?controller=sanpham&action=gia&id=1">Dưới
                                15.000.000</a>
                            <a class="dropdown-item" href="./index.php?controller=sanpham&action=gia&id=2">15.000.000 -
                                25.000.000</a>
                            <a class="dropdown-item" href="./index.php?controller=sanpham&action=gia&id=3">25.000.000 -
                                40.000.000</a>
                            <a class="dropdown-item" href="./index.php?controller=sanpham&action=gia&id=4">Trên
                                40.000.000</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <hr class="d-sm-none">
    </div>

    <div class="col-sm-9">
        <div class="container-fluid mb-3 shadow">
            <div class="d-flex bg-primary">
                <div class="p-3 flex-grow-1 text-light"><?php echo $tilte ?></div>
            </div>
            <div class="row">
                <?php
                    foreach($datasp as $k){
                        $itemkm = $km->detailByMaSP($k['masp']);
                    ?>
                <div class="col-lg-3 mb-3 mt-3">
                    <div class="card h-100">
                        <div class="card-header text-center">
                            <a href="index.php?controller=sanpham&action=chitiet&masp=<?php echo $k['masp']; ?>">
                                <img src="<?php echo IMG_SANPHAM.$k['hinhanh']; ?>" alt=""
                                    class="img-thumbnail" style="width: 150px;height: 150px;">
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
    </div>
</div>
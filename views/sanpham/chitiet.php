<style>
.chitiet {
    font-size: 18px;
}
</style>

<!--Chi tiết-->
<div class="container" style="margin-top:30px">
    <div class="row">
        <div class="col-sm-6">
            <img src="<?php echo IMG_SANPHAM.$itemsp['hinhanh']; ?>" alt="" class="img-thumbnail"
                style="width: 500px;height: 500px;">
        </div>
        <div class="col-sm-6">
            <h4><?php echo $itemsp['tensp'] ?></h4>
            <?php if ($itemsp['gia'] != '') {
              if($itemkm==null)
              {
                echo '<div class="chitiet">Giá: ' . number_format($itemsp["gia"]) . ' VND</div>';
              }else{ 
                echo '<div class="chitiet">Giá gốc: <del>' . number_format($itemsp["gia"]) . '</del> VND</div>';
                echo '<div class="chitiet">Giá khuyến mãi: ' . number_format($itemsp["gia"]-$itemkm[0]['giagiam']) . ' VND</div>';
              }
            } else {
                echo "";
            } ?>

            <?php if ($itemsp['tennsx'] != '') {
                echo '<div class="chitiet">Nhà Sản Xuất: 
                <a href="./index.php?controller=sanpham&action=nsx&mansx='.$itemsp['mansx'].'">' . $itemsp["tennsx"] . '</a></div>';
            } else {
                echo "";
            } ?>

            <?php if ($itemsp['tenloai'] != '') {
                echo '<div class="chitiet">Loại: 
                <a href="./index.php?controller=sanpham&action=lsp&maloai='.$itemsp['maloai'].'">' . $itemsp["tenloai"] . '</a></div>';
            } else {
                echo "";
            } ?>

            <?php if ($itemsp['baohanh'] != '') {
                echo '<div class="chitiet">Bảo Hành: ' . $itemsp["baohanh"] . '</div>';
            } else {
                echo "";
            } ?>

            <?php if ($itemsp['mausac'] != '') {
                echo '<div class="chitiet">Màu Sắc: ' . $itemsp["mausac"] . '</div>';
            } else {
                echo "";
            } ?>

            <?php if ($itemsp['cpu'] != '') {
                echo '<div class="chitiet">Cpu: ' . $itemsp["cpu"] . '</div>';
            } else {
                echo "";
            } ?>

            <?php if ($itemsp['ram'] != '') {
                echo '<div class="chitiet">Ram: ' . $itemsp["ram"] . '</div>';
            } else {
                echo "";
            } ?>

            <?php if ($itemsp['gpu'] != '') {
                echo '<div class="chitiet">Gpu: ' . $itemsp["gpu"] . '</div>';
            } else {
                echo "";
            } ?>

            <?php if ($itemsp['dophangiai'] != '') {
                echo '<div class="chitiet">Độ phân giải màn hình: ' . $itemsp["dophangiai"] . '</div>';
            } else {
                echo "";
            } ?>

            <?php if ($itemsp['ocung'] != '') {
                echo '<div class="chitiet">Ổ cứng: ' . $itemsp["ocung"] . '</div>';
            } else {
                echo "";
            } ?>

            <?php if ($itemsp['pin'] != '') {
                echo '<div class="chitiet">Pin: ' . $itemsp["pin"] . '</div>';
            } else {
                echo "";
            } ?>

            <?php if ($itemsp['trongluong'] != '') {
                echo '<div class="chitiet">Trọng lượng: ' . $itemsp["trongluong"] . '</div>';
            } else {
                echo "";
            } ?>

            <?php if ($itemsp['hedieuhanh'] != '') {
                echo '<div class="chitiet">Hệ Điều Hành: ' . $itemsp["hedieuhanh"] . '</div>';
            } else {
                echo "";
            } ?>

            <?php if ($itemsp['ketnoi'] != '') {
                echo '<div class="chitiet">Kết Nối: ' . $itemsp["ketnoi"] . '</div>';
            } else {
                echo "";
            } ?>

            <?php if ($itemsp['camera'] != '') {
                echo '<div class="chitiet">Camera: ' . $itemsp["camera"] . '</div>';
            } else {
                echo "";
            } ?>

            <?php if ($itemsp['soluongtonkho'] != '') {
                echo '<div class="chitiet">Còn Lại: ' . $itemsp["soluongtonkho"] . ' sản phẩm</div>';
            } else {
                echo "";
            } ?>
            <div class="row mt-5">
                <div class="col-6 text-center"><a class="btn btn-outline-success" href="index.php?controller=giohang&action=them&masp=<?php echo $itemsp['masp'] ?>">Giỏ hàng</a></div>
            </div>
        </div>
    </div>
</div>
<!--Chi tiết-->

<div class="container-fluid mt-5"><hr></div>

<!--Bình luận-->
<div class="container"><h2>Bình luận</h2></div>

<!--Form bình luận-->
<?php if(!isset($_SESSION['email'])){ ?>
<div class="container mt-3">
    <div class="media border p-3">
        <div class="media-body">
            <form action="" method="POST">
                <textarea class="form-control" name="binhluan" id="" placeholder="Đăng nhập để bình luận" cols="30"
                    rows="3" readonly></textarea>
                <div class="d-flex justify-content-end mt-3 ">
                    <button type="submit" class="btn btn-outline-primary disabled" href="">Đăng</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php }else{?>
<div class="container mt-3">
    <div class="media border p-3">
        <div class="media-body">
            <form action="./index.php?controller=sanpham&action=binhluan" method="POST">
                <input class="form-control" type="text" name="masp" value="<?php echo $itemsp['masp']; ?>" hidden>
                <input class="form-control" type="text" name="email" value="<?php echo $_SESSION['email']; ?>" hidden>
                <textarea required class="form-control" name="binhluan" id="" placeholder="Thêm bình luận... " cols="30"
                    rows="3"></textarea>
                <div class="d-flex justify-content-end mt-3 ">
                    <button type="submit" class="btn btn-outline-primary ">Đăng</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--Form bình luận-->

<!--Danh sách bình luận-->
<?php }?>
<?php
$bl=new BinhLuan();
$kh = new TaiKhoan();
$databl = $bl->all();
if(count($bl->detail($itemsp['masp']))==0){?>
<div class="container mt-3">
    <div class="media border p-3">
        <div class="media-body">
            <h4><small><i>Chưa có bình luận nào</i></small></h4>
        </div>
    </div>
</div>
<?php } else{
foreach($databl as $itembl){
  if($itembl['masp']==$itemsp['masp'])
  {?>
<div class="container mt-3">
    <div class="media border p-3">
        <div class="media-body">
            <h4><?php echo $kh->timkiem($itembl['makh'])[0]['tenkh']; ?>
                <small><i><?php echo $itembl['ngaydang'];?></i></small>
            </h4>
            <p><?php echo $itembl['noidung'] ?></p>
        </div>
    </div>
</div>
<?php }}}?>
<!--Danh sách bình luận-->
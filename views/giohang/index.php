<?php
echo '<script>
document.getElementById("tilte").innerHTML = "Giỏ hàng";
</script>';
if(!isset($_SESSION['giohang'])||count($_SESSION['giohang'])==0){?>
<div class="container mt-3">
    <div class="media border p-3">
        <div class="media-body col-10">
            <h4>Chưa có sản phẩm nào
                <small><i>Hãy đến mua hàng</i></small>
            </h4>
        </div>
    </div>
</div>
<?php }else{?>

<div class="container mt-3">
    <table class="table table-responsive-xl text-center">
        <thead>
            <tr>
                <th>Sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>Giá tiền</th>
                <th>Xoá</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($_SESSION['giohang'] as $item){
                $itemkm=$km->detailByMaSP($item['sanpham']['masp']);?>
            <tr>
                <td class="align-middle"><a class="nav-link" href="index.php?controller=sanpham&action=chitiet&masp=<?php echo $item['sanpham']['masp'];?>"><img src="<?php echo IMG_SANPHAM.$item['sanpham']['hinhanh']; ?>" alt="" class="mr-3 mt-3 rounded"
                        style="width:60px;"></a>
                </td>
                <td class="align-middle">
                    <a class="nav-link" href="index.php?controller=sanpham&action=chitiet&masp=<?php echo $item['sanpham']['masp'];?>"><h4><?php echo $item['sanpham']['tensp']; ?></h4></a>
                </td>
                <td class="align-middle"><ul class="pagination">
                        <?php if($item['sl']==1){?>
                        <li class="page-item disabled"><a class="page-link" href="#">-</a></li>
                        <?php }else{?>
                        <li class="page-item"><a class="page-link" href="index.php?controller=giohang&action=giam&masp=<?php echo $item['sanpham']['masp']?>">-</a></li>
                        <?php }?>
                        <li class="page-item"><a class="page-link" href="#"><?php echo $item['sl']; ?></a></li>
                        <?php if($item['sl']==$item['sanpham']['soluongtonkho']){?>
                        <li class="page-item disabled"><a class="page-link" href="#">+</a></li>
                        <?php }else{?>
                        <li class="page-item"><a class="page-link" href="index.php?controller=giohang&action=tang&masp=<?php echo $item['sanpham']['masp']?>">+</a></li>
                        <?php }?>
                    </ul>
                </td>
                <td class="align-middle">
                    <p><?php if($itemkm==null){ echo number_format( $item['sanpham']['gia']*$item['sl']);
                            }else{echo number_format( $item['sanpham']['gia']*$item['sl'] - $itemkm[0]['giagiam']);}?> VNĐ</p>
                </td>
                <td class="align-middle"><a class="btn btn-outline-success"
                        href="index.php?controller=giohang&action=xoa&masp=<?php echo $item['sanpham']['masp'];?>">Xoá</a>
                </td>
            </tr>
            <?php }?>
        </tbody>
        <tbody>
            <tr>
                <th colspan="2">Tổng tiền</th>
                <th colspan="2"><?php echo number_format($tongtien); ?> VNĐ</th>
            </tr>
        </tbody>
    </table>
</div>
<div class="container text-center">
    <a class="btn btn-outline-success"
                        href="index.php?controller=donhang">Thanh toán</a>
</div>
<?php $_SESSION['tongtien']=$tongtien; }?>
<?php
if(!isset($_SESSION['email']))
{
    echo '<script> location.replace("index.php?controller=khachhang"); </script>';
}
$action = Utilities::get('action', 'index');
$dh= new DonHang();
$kh= new TaiKhoan();
$ctdh=new ChiTietDonHang();
$km=new KhuyenMai();
$sp=new SanPham();

if($action=='index')
{
    if((!isset($_SESSION['giohang']) || count($_SESSION['giohang']) == 0)&&$action!='theodoi'){
        echo '<script> location.replace("index.php?controller=giohang"); </script>';
    }
    echo '<script>
    document.getElementById("tilte").innerHTML = "Thanh toán";
    </script>';
    include 'views/donhang/index.php';
}
if($action=='thanhtoan')
{
    if((!isset($_SESSION['giohang']) || count($_SESSION['giohang']) == 0)&&$action!='theodoi'){
        echo '<script> location.replace("index.php?controller=giohang"); </script>';
    }
    $tennguoinhan= Utilities::post('name');
    $sdtnn=Utilities::post('sdt');
    $diachi=Utilities::post('diachi');
    $pttt=Utilities::post('pttt');
    $makh=$kh->timkiemEmail($_SESSION['email'])[0]['makh'];
    $trangthai = 'Đang Chờ Xử Lý';
    $tongtien = $_SESSION['tongtien'];
    $ngaydat = date("Y-m-d");
    $dh->them($makh, $tennguoinhan, $sdtnn, $ngaydat,$diachi,$tongtien,$pttt,$trangthai);
    $madh=$dh->laycuoi()[0]['madh'];
    foreach($_SESSION['giohang'] as $item){
        $itemkm=$km->detailByMaSP($item['sanpham']['masp']);
        $masp=$item['sanpham']['masp'];
        $sl=$item['sl'];
        $thanhtien = $item['sanpham']['gia']*$item['sl'] - ($itemkm!=null?$itemkm[0]['giagiam']:0);
        $ctdh->them($madh,$masp,$sl,$thanhtien);
    }
    unset($_SESSION['giohang']);
    unset($_SESSION['tongtien']);
    echo '<script> location.replace("index.php?controller=giohang"); </script>';
}
if($action=='theodoi')
{
    $tk=$kh->timkiemEmail($_SESSION['email'])[0];
    $datadh = $dh->allByKH($tk['makh']);
    echo '<script>
    document.getElementById("tilte").innerHTML = "Theo dõi đơn hàng";
    </script>';
    include 'views/donhang/danhsach.php';
}
if($action=='huydh')
{
    $madh=Utilities::get('madh');
    $dh->suatrangthai($madh,'Đã Hủy');
    echo '<script> location.replace("index.php?controller=donhang&action=theodoi"); </script>';
}
if($action=='nhandh')
{
    $madh=Utilities::get('madh');
    $dh->suatrangthai($madh,'Đã Nhận');
    echo '<script> location.replace("index.php?controller=donhang&action=theodoi"); </script>';
}
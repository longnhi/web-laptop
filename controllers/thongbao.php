<?php
if(!isset($_SESSION['email']))
{
    echo '<script> location.replace("index.php?controller=khachhang"); </script>';
}
$action = Utilities::get('action', 'index');
$tb=new ThongBao();
$kh= new TaiKhoan();
if($action=='index')
{
    $makh=$kh->timkiemEmail($_SESSION['email'])[0]['makh'];
    $datatb = $tb->allByKH($makh);
    echo '<script>
    document.getElementById("tilte").innerHTML = "Thông báo";
    </script>';
    include './views/thongbao/index.php';
}
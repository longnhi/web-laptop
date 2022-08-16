<?php
if (!isset($_SESSION['username'])) {
    echo '<script> location.replace("index.php"); </script>';
}
$action = Utilities::get('action', 'index');
$donhang = new DonHang();
$chitietdh = new ChiTietDonHang();
$km = new KhuyenMai();

if ($action == 'index') {
    include './views/donhang/index_donhang.php';
}
if ($action == 'chitiet') {
    $id = Utilities::get('id');
    $data = $chitietdh->detail($id);
    foreach ($data as $q) {
       $masp = $q['masp'];
    }
    $datakm = $km->detailByMaSanPham($masp);
    include './views/donhang/chitiet_donhang.php';
}
if ($action == 'them') {
    include './views/donhang/them_donhang.php';
}
if ($action == 'sua') {
    include './views/donhang/sua_donhang.php';
}
if ($action == 'doitrangthaigiaohang') {
    $id = Utilities::get('id');
    $trangthai = 'Đang Vận Chuyển';
    $donhang->suatrangthai($id, $trangthai);
    $data = $donhang->all();
    include './views/donhang/index_donhang.php';
}
if ($action == 'doitrangthainhanhang') {
    $id = Utilities::get('id');
    $trangthai = 'Đã Nhận';
    $donhang->suatrangthai($id, $trangthai);
    $data = $donhang->all();
    include './views/donhang/index_donhang.php';
}
if ($action == 'doitrangthaihuyhang') {
    $id = Utilities::get('id');
    $trangthai = 'Đã Hủy';
    $donhang->suatrangthai($id, $trangthai);
    $data = $donhang->all();
    include './views/donhang/index_donhang.php';
}
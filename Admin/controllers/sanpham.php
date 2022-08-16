<?php
if (!isset($_SESSION['username'])) {
    echo '<script> location.replace("index.php"); </script>';
}  
$action = Utilities::get('action', 'index');
$sp = new SanPham();
$loai = new LoaiSanPham();
$nsx = new NhaSanXuat();

if ($action == 'index') {
    include './views/index.php';
}

if ($action == 'index1') {
    include './views/sanpham/index_sanpham.php';
}

if ($action == 'chitiet') {
    $id = Utilities::get('id');
    $data = $sp->laysanphamtheoid($id);
    include './views/sanpham/chitiet_sanpham.php';
}

if ($action == 'them') {
    include './views/sanpham/them_sanpham.php';
}

if ($action == 'sua') {
    $id = Utilities::get('id');
    $data = $sp->laysanphamtheoid($id);
    include './views/sanpham/sua_sanpham.php';
}

if ($action == 'xoa') {
    $id = Utilities::get('id');
    $xoa = $sp->xoa($id);
    $data = $sp->all();
    include './views/sanpham/index_sanpham.php';
}


<?php
if (!isset($_SESSION['username'])) {
    echo '<script> location.replace("index.php"); </script>';
}  
$action = Utilities::get('action', 'index');
$khuyenmai = new KhuyenMai();

if ($action == 'index') {
    $data = $khuyenmai->all();
    include './views/khuyenmai/index_khuyenmai.php';
}

if ($action == 'them') {
    include './views/khuyenmai/them_khuyenmai.php';
}

if ($action == 'sua') {
    $id = Utilities::get('id');
    $data = $khuyenmai->timkiem($id);
    include './views/khuyenmai/sua_khuyenmai.php';
}

if ($action == 'xoa') {
    $id = Utilities::get('id');
    $xoa = $khuyenmai->xoa($id);
    $data = $khuyenmai->all();
    include './views/khuyenmai/index_khuyenmai.php';
}
<?php
if (!isset($_SESSION['username'])) {
    echo '<script> location.replace("index.php"); </script>';
}  
$action = Utilities::get('action', 'index');
$loai = new LoaiSanPham();

if ($action == 'index') {
    $data = $loai->all();
    include './views/loai/index_loai.php';
}

if ($action == 'them') {
    include './views/loai/them_loai.php';
}

if ($action == 'sua') {
    $ma = Utilities::get('id');
    $data = $loai->timkiem($ma);
    include './views/loai/sua_loai.php';
}
if ($action == 'xoa') {
    $ma = Utilities::get('id');
    $xoa = $loai->xoa($ma);
    $data = $loai->all();
    include './views/loai/index_loai.php';
}

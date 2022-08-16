<?php
if (!isset($_SESSION['username'])) {
    echo '<script> location.replace("index.php"); </script>';
}  
$action = Utilities::get('action', 'index');
$thongbao = new ThongBao();

if ($action == 'index') {
    include './views/thongbao/index_thongbao.php';
}

if ($action == 'them') {
    include './views/thongbao/them_thongbao.php';
}
if ($action == 'sua') {
    $ma = Utilities::get('id');
    $data = $thongbao->tiemkiem($ma);
    include './views/thongbao/sua_thongbao.php';
}
if ($action == 'xoa') {
    $ma = Utilities::get('id');
    $thongbao->xoa($ma);
    include './views/thongbao/index_thongbao.php';
}
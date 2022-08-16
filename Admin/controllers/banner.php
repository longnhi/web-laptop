<?php
if (!isset($_SESSION['username'])) {
    echo '<script> location.replace("index.php"); </script>';
}  
$action = Utilities::get('action', 'index');
$banner = new Banner();

if ($action == 'index') {
    include './views/banner/index_banner.php';
}

if ($action == 'them') {
    include './views/banner/them_banner.php';
}

if ($action == 'sua') {
    $id = Utilities::get('id');
    $data = $banner->tiemkiem($id);
    include './views/banner/sua_banner.php';
}

if ($action == 'xoa') {
    $id = Utilities::get('id');
    $banner->del($id);
    $data = $banner->all();
    include './views/banner/index_banner.php';
}
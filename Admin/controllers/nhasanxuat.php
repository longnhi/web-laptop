<?php
if (!isset($_SESSION['username'])) {
    echo '<script> location.replace("index.php"); </script>';
}  
$action = Utilities::get('action', 'index');
$nhasanxuat = new NhaSanXuat();

if ($action == 'index') {
    include './views/nhasanxuat/index_nhasanxuat.php';
}

if ($action == 'them') {
    include './views/nhasanxuat/them_nhasanxuat.php';
}

if ($action == 'sua') {
    $id = Utilities::get('id');
    $data = $nhasanxuat->tiemkiem($id);
    include './views/nhasanxuat/sua_nhasanxuat.php';
}

if ($action == 'xoa') {
    $id = Utilities::get('id');
    $xoa = $nhasanxuat->xoa($id);
    $data = $nhasanxuat->all();
    include './views/nhasanxuat/index_nhasanxuat.php';
}

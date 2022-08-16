<?php
if (!isset($_SESSION['username'])) {
    echo '<script> location.replace("index.php"); </script>';
}  
$action = Utilities::get('action', 'index');
$tintuc = new TinTuc();

if ($action == 'index') {
    include './views/tintuc/index_tintuc.php';
}

if ($action == 'them') {
    include './views/tintuc/them_tintuc.php';
}
if ($action == 'sua') {
    $ma = Utilities::get('id');
    $data = $tintuc->tiemkiem($ma);
    include './views/tintuc/sua_tintuc.php';
}
if ($action == 'xoa') {
    $ma = Utilities::get('id');
    $tintuc->xoa($ma);
    include './views/tintuc/index_tintuc.php';
}
<?php
if (!isset($_SESSION['username'])) {
    echo '<script> location.replace("index.php"); </script>';
}  
$action = Utilities::get('action', 'index');
$bl = new BinhLuan();

if ($action == 'index') {
    include './views/binhluan/index_binhluan.php';
}

if ($action == 'them') {
    include './views/binhluan/them_binhluan.php';
}
if ($action == 'sua') {
    include './views/binhluan/sua_binhluan.php';
}
if ($action == 'xoa') {
    $id = Utilities::get('id');
    $bl->xoa($id);
    include './views/binhluan/index_binhluan.php';
}
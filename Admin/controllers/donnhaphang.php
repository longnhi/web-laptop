<?php
if (!isset($_SESSION['username'])) {
    echo '<script> location.replace("index.php"); </script>';
}  
$action = Utilities::get('action', 'index');
$donnhaphang = new DonNhapHang();

if ($action == 'index') {
    include './views/donnhaphang/index_donnhaphang.php';
}

if ($action == 'them') {
    include './views/donnhaphang/them_donnhaphang.php';
}
if ($action == 'sua') {
    $id = Utilities::get('id');
    $data = $donnhaphang->tiemkiem($id);
    include './views/donnhaphang/sua_donnhaphang.php';
}
if ($action == 'xoa') {
    $id = Utilities::get('id');
    $donnhaphang->xoa($id);
    include './views/donnhaphang/index_donnhaphang.php';
}
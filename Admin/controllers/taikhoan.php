<?php
if (!isset($_SESSION['username'])) {
    echo '<script> location.replace("index.php"); </script>';
}  
$action = Utilities::get('action', 'index');
$tk = new TaiKhoan();

if ($action == 'index') {
    include './views/taikhoan/index_taikhoan.php';
}

if ($action == 'admin') {
    include './views/taikhoan/index_taikhoan.php';
}

if ($action == 'user') {
    include './views/taikhoan/index_taikhoan1.php';
}

if ($action == 'them') {
    include './views/taikhoan/them_taikhoan.php';
}

if ($action == 'sua') {
    $id = Utilities::get('id');
    $data = $tk->tiemkiem($id);
    include './views/taikhoan/sua_taikhoan.php';
}

if ($action == 'xoa') {
    $id = Utilities::get('id');
    $tk->xoa($id);
    include './views/taikhoan/index_taikhoan.php';
}

if ($action == 'them1') {
    include './views/taikhoan/them_taikhoan1.php';
}

if ($action == 'sua1') {
    $id = Utilities::get('id');
    $data = $tk->tiemkiem1($id);
    include './views/taikhoan/sua_taikhoan1.php';
}

if ($action == 'xoa1') {
    $id = Utilities::get('id');
    $tk->xoa1($id);
    include './views/taikhoan/index_taikhoan1.php';
}
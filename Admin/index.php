<?php
include "config.php";
function loadClass($className)
{
    if (is_file("models/$className.php"))
        include "./models/$className.php";
    else {
        echo 'Err';
        exit;
    }
}

spl_autoload_register('loadClass');
session_start();
$x = new Database();
$controller = Utilities::get('controller', 'sanpham');
//<đăng nhập admin
if (!isset($_SESSION['username'])) {
    $controller = Utilities::get('controller', 'login');
} else {
    $controller = Utilities::get('controller', 'sanpham');
}
//đăng nhập admin>
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Admin</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

<div class="sidebar">
    <?php
    include './pages/sidebar.php';
    ?>
    <div class="container">
        <?php
        if ($controller == 'nhasanxuat') {
            include './controllers/nhasanxuat.php';
        }
        if ($controller == 'sanpham') {
            include './controllers/sanpham.php';
        }
        if ($controller == 'taikhoan') {
            include './controllers/taikhoan.php';
        }
        if ($controller == 'khuyenmai') {
            include './controllers/khuyenmai.php';
        }
        if ($controller == 'loaisanpham') {
            include './controllers/loaisanpham.php';
        }
        if ($controller == 'tintuc') {
            include './controllers/tintuc.php';
        }
        if ($controller == 'thongbao') {
            include './controllers/thongbao.php';
        }
        if ($controller == 'binhluan') {
            include './controllers/binhluan.php';
        }
        if ($controller == 'banner') {
            include './controllers/banner.php';
        }
        if ($controller == 'donnhaphang') {
            include './controllers/donnhaphang.php';
        }
        if ($controller == 'donhang') {
            include './controllers/donhang.php';
        }
        if ($controller == 'xuly') {
            include './controllers/xuly.php';
        }
        if ($controller == 'login') {
            include './controllers/login.php';
        }
        ?>
    </div>
</div>
</div>

</body>
</html>
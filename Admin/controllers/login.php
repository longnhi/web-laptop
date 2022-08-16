<?php
//<đăng nhập admin
$action = Utilities::get('action', 'login');
if ($action == 'login') {
    include './views/login.php';
}
if ($action == 'logout') {
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    unset($_SESSION['hoten']);
    echo '<script> location.replace("index.php"); </script>';
}
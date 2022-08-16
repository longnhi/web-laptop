<?php
//<đăng nhập admin-->
include 'config.php';
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

$x = new Database();
$ad = new TaiKhoan();
$action = Utilities::get('action');

if($action == 'dangnhap'){
    session_start();
    $username = Utilities::post('username');
    $password = Utilities::post('password');
    $data = $ad->getAdminLogin($username,$password);
    if($data!=null)
    {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['hoten']=$data[0]['tenquantri'];
        echo '<script> location.replace("index.php"); </script>';
    }else{
        echo '<script> location.replace("index.php"); </script>';
    }
}
//<đăng nhập admin>
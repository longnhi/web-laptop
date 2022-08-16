<?php
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
$kh = new TaiKhoan();
$action = Utilities::get('action');
if($action == 'login'){
    session_start();
    $email = Utilities::post('email');
    $password=Utilities::post('password');
    $data = $kh->login($email,$password);
    if($data!=null)
    {
        $_SESSION['email'] = $email;
        $_SESSION['tenkh'] = $data[0]['tenkh'];
        echo '<script> location.replace("index.php"); </script>';
    }else{
        echo '<script>alert("Email hoặc mật khẩu không chính xác!");</script>';
        echo '<script> location.replace("index.php?controller=khachhang&action=dangnhap"); </script>';
    }
}
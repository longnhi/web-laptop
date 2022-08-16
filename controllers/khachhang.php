<?php
$action = Utilities::get('action','dangnhap');

$kh = new TaiKhoan();
if($action=='dangxuat'){
    unset($_SESSION['email']);
    unset($_SESSION['tenkh']);
    echo '<script> location.replace("index.php"); </script>';
}
else if($action=='info')
{
    if(!isset($_SESSION['email']))
    {
        echo '<script> location.replace("index.php"); </script>';
    }
    $itemkh=$kh->timkiemEmail($_SESSION['email']);
    echo '<script>
    document.getElementById("tilte").innerHTML = "Thông tin cá nhân";
    </script>';
    include './views/taikhoan/info.php';
}
if ($action == 'dangnhap') {
    if(isset($_SESSION['email']))
    {
        echo '<script> location.replace("index.php"); </script>';
    }
    echo '<script>
    document.getElementById("tilte").innerHTML = "Đăng nhập";
    </script>';
    include './views/taikhoan/login.php';
}

if($action=='xulydoimatkhau')
{
    if(!isset($_SESSION['email']))
    {
        echo '<script> location.replace("index.php"); </script>';
    }
    $oldpassword=Utilities::post('oldpassword');
    $newpassword=Utilities::post('newpassword');
    $retypenewpassword=Utilities::post('retypenewpassword');
    $tk=$kh->timkiemEmail($_SESSION['email'])[0];
    if($tk['password']!=$oldpassword){
        echo '<div class="container alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Warning!</strong> Sai mật khẩu cũ.
            </div>';
        include './views/taikhoan/doimatkhau.php';
    }
    if($newpassword!=$retypenewpassword){
        echo '<div class="container alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Warning!</strong> Nhập lại mật khẩu mới phải giống mật khẩu mới.
            </div>';
        include './views/taikhoan/doimatkhau.php';
    }
    if($tk['password']==$oldpassword&& $newpassword==$retypenewpassword)
    {
        $kh->doimatkhau($_SESSION['email'],$newpassword);
        echo '<script> location.replace("index.php"); </script>';
    }
}

if ($action == 'doimatkhau') {
    if(!isset($_SESSION['email']))
    {
        echo '<script> location.replace("index.php"); </script>';
    }
    echo '<script>
    document.getElementById("tilte").innerHTML = "Đổi mật khẩu";
    </script>';
    include './views/taikhoan/doimatkhau.php';
}

if ($action == 'dangky') {
    if(isset($_SESSION['email']))
    {
        echo '<script> location.replace("index.php"); </script>';
    }
    echo '<script>
    document.getElementById("tilte").innerHTML = "Đăng ký";
    </script>';
    include './views/taikhoan/register.php';
}
if($action == 'register'){
    if(isset($_SESSION['email']))
    {
        echo '<script> location.replace("index.php"); </script>';
    }
    $email = Utilities::post('email');
    $password=Utilities::post('password');
    $hoten=Utilities::post('name');
    $gioitinh=Utilities::post('gioitinh');
    $sdt=Utilities::post('sdt');
    $ngaysinh=Utilities::post('ngaysinh');
    $diachi=Utilities::post('diachi');
    $data = $kh->timkiemEmail($email);
    if($data!=null)
    {
        header('Location: index.php?controller=khachhang&action=dangky');
    }else{
        $kh->them($hoten, $email, $password, $sdt, $gioitinh, $ngaysinh, $diachi);
        echo '<script> location.replace("index.php?controller=khachhang&action=dangnhap"); </script>';
    }
}
if($action == 'edit'){
    if(!isset($_SESSION['email']))
    {
        echo '<script> location.replace("index.php"); </script>';
    }
    $itemkh=$kh->timkiemEmail($_SESSION['email']);
    echo '<script>
    document.getElementById("tilte").innerHTML = "Thay đổi thông tin cá nhân";
    </script>';
    include './views/taikhoan/editinfo.php';
}
if($action == 'xulythaydoi'){
    if(!isset($_SESSION['email']))
    {
        echo '<script> location.replace("index.php"); </script>';
    }
    $makh = Utilities::post('makh');
    $email = Utilities::post('email');
    $hoten=Utilities::post('name');
    $gioitinh=Utilities::post('gioitinh');
    $sdt=Utilities::post('sdt');
    $ngaysinh=Utilities::post('ngaysinh');
    $diachi=Utilities::post('diachi');
    $data = $kh->timkiem($makh);
    if($data==null)
    {
        echo '<script> location.replace("index.php"); </script>';
    }else{
        $kh->thaydoi($makh, $hoten, $sdt, $gioitinh, $ngaysinh, $diachi);
        echo '<script> location.replace("index.php?controller=khachhang&action=info"); </script>';
    }
}
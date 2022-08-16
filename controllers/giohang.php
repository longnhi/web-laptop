    <?php
$action = Utilities::get('action', 'index');
$sp = new SanPham();
$km = new KhuyenMai();
switch ($action) {
    case "index":
        $tongtien = 0;
        if (!isset($_SESSION['giohang']) || count($_SESSION['giohang']) == 0) {
        } else {
            foreach ($_SESSION['giohang'] as $r) {
                $ikm = $km->detailByMaSP($r['sanpham']['masp']);
                if ($ikm == null) {
                    $tongtien = $tongtien + $r['sanpham']['gia'] * $r['sl'];
                } else {
                    $tongtien = $tongtien + $r['sanpham']['gia'] * $r['sl'] - $ikm[0]['giagiam'];
                }
            }
        }
        include './views/giohang/index.php';
        break;
    case "them":
        $masp = Utilities::get('masp');
        if ($sp->detail($masp)['soluongtonkho'] == 0) {
        } else {
            if (isset($_SESSION['giohang'][$masp])) {
                $_SESSION['giohang'][$masp]['sl'] = $_SESSION['giohang'][$masp]['sl'] + 1;
            } else {
                $_SESSION['giohang'][$masp]['sanpham'] = $sp->detail($masp);
                $_SESSION['giohang'][$masp]['sl'] = 1;
            }
        }
        echo '<script> location.replace("index.php?controller=giohang&action=index"); </script>';
        break;
    case "giam":
        $masp = Utilities::get('masp');
        if (isset($_SESSION['giohang'][$masp])) {
            if($_SESSION['giohang'][$masp]['sl']<=1){
                $_SESSION['giohang'][$masp]['sl']=1;
            }else{
                $_SESSION['giohang'][$masp]['sl'] = $_SESSION['giohang'][$masp]['sl'] - 1;
            }
        }
        echo '<script> location.replace("index.php?controller=giohang&action=index"); </script>';
        break;
    case "tang":
        $masp = Utilities::get('masp');
        if (isset($_SESSION['giohang'][$masp])) {
            if($_SESSION['giohang'][$masp]['sl']>=$_SESSION['giohang'][$masp]['sanpham']['soluongtonkho'])
            { 
                $_SESSION['giohang'][$masp]['sl'] = $_SESSION['giohang'][$masp]['sanpham']['soluongtonkho'];
            }else{
                $_SESSION['giohang'][$masp]['sl'] = $_SESSION['giohang'][$masp]['sl'] + 1;
            }
        } else {
            $_SESSION['giohang'][$masp]['sanpham'] = $sp->detail($masp);
            $_SESSION['giohang'][$masp]['sl'] = 1;
        }
        echo '<script> location.replace("index.php?controller=giohang&action=index"); </script>';
        break;
    case "xoa":
        $masp = Utilities::get('masp');
        unset($_SESSION['giohang'][$masp]);
        include './views/giohang/index.php';
        echo '<script> location.replace("index.php?controller=giohang&action=index"); </script>';
        break;
}

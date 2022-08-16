<?php
if (!isset($_SESSION['username'])) {
    echo '<script> location.replace("index.php"); </script>';
}  
$action = Utilities::get('action', 'index');
$sanpham = new SanPham();
$loai = new LoaiSanPham();
$nhasanxuat = new NhaSanXuat();
$banner = new Banner();
$khuyenmai = new KhuyenMai();
$donhang = new DonHang();
$donnhaphang = new DonNhapHang();
$tintuc = new TinTuc();
$thongbao = new ThongBao();
$taikhoan = new TaiKhoan();

if ($action == 'themsp') {
    $gia = Utilities::post('gia');
    $tensp = Utilities::post('tensp');
    $gpu = Utilities::post('gpu');
    $webcam = Utilities::post('webcam');
    $pin = Utilities::post('pin');
    $trongluong = Utilities::post('trongluong');
    $loai = Utilities::post('loai');
    $baohanh = Utilities::post('baohanh');
    $cpu = Utilities::post('cpu');
    $soluong = Utilities::post('soluong');
    $nhasanxuat = Utilities::post('nhasanxuat');
    $hedieuhanh = Utilities::post('hedieuhanh');
    $ram = Utilities::post('ram');
    $dophangiai = Utilities::post('dophangiai');
    $ocung = Utilities::post('ocung');
    $mausac = Utilities::post('mausac');
    $ketnoi = Utilities::post('ketnoi');

    if (!$_FILES) {
        echo '';
    } else {
        $hinhanhpath = basename($_FILES['hinh']['name']);
        $target_dir = "../assets/img/sanpham/";
        $target_file = $target_dir . $hinhanhpath;
        move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file);
    }

    if (!$_FILES) {
        echo 'no Image';
    } else {
        $hinhanhpath = basename($_FILES['hinh']['name']);
        $sanpham->them($tensp, $gia, $hinhanhpath, $loai, $nhasanxuat, $baohanh, $mausac, $cpu, $ram, $gpu, $dophangiai, $ocung, $pin, $trongluong, $hedieuhanh, $ketnoi, $webcam, $soluong);
    }
    include './views/sanpham/index_sanpham.php';
}
if ($action == 'suasp') {
    $id = Utilities::post('ID');
    $gia = Utilities::post('gia');
    $tensp = Utilities::post('tensp');
    $gpu = Utilities::post('gpu');
    $webcam = Utilities::post('webcam');
    $pin = Utilities::post('pin');
    $trongluong = Utilities::post('trongluong');
    $loai = Utilities::post('loai');
    $baohanh = Utilities::post('baohanh');
    $cpu = Utilities::post('cpu');
    $soluong = Utilities::post('soluong');
    $nhasanxuat = Utilities::post('nhasanxuat');
    $hedieuhanh = Utilities::post('hedieuhanh');
    $ram = Utilities::post('ram');
    $dophangiai = Utilities::post('dophangiai');
    $ocung = Utilities::post('ocung');
    $mausac = Utilities::post('mausac');
    $ketnoi = Utilities::post('ketnoi');
    $hinhcu = Utilities::post('hinhcu');
    if (basename($_FILES['hinh']['name'])=='') {
        $hinhanhpath = $hinhcu;
    } else {
        $hinhanhpath = basename($_FILES['hinh']['name']);
        $target_dir = "../assets/img/sanpham/";
        $target_file = $target_dir . $hinhanhpath;
        move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file);
    }
    $sanpham->sua($id, $tensp, $gia, $hinhanhpath, $loai, $nhasanxuat, $baohanh, $mausac, $cpu, $ram, $gpu, $dophangiai, $ocung, $pin, $trongluong, $hedieuhanh, $ketnoi, $webcam, $soluong);
    include './views/sanpham/index_sanpham.php';
}
if ($action == 'themnsx') {
    $tennsx = Utilities::post('tennsx');
    $diachi = Utilities::post('diachi');
    if ($tennsx == ' ') {
        echo '';
    } else {
        $nhasanxuat->them($tennsx, $diachi);
        include './views/nhasanxuat/index_nhasanxuat.php';
    }
}
if ($action == 'suansx') {
    $id = Utilities::post('ID');
    $tennsx = Utilities::post('tennsx');
    $diachi = Utilities::post('diachi');

    $nhasanxuat->sua($id, $tennsx, $diachi);
    include './views/nhasanxuat/index_nhasanxuat.php';
}
if ($action == 'themloai') {
    $tenloai = Utilities::post('tenloai');

    if ($tenloai == '') {
        echo '';
    } else {
        $loai->them($tenloai);
        include './views/loai/index_loai.php';
    }
}
if ($action == 'sualoai') {
    $id = Utilities::post('ID');
    $tenloai = Utilities::post('tenloai');

    $loai->sua($id, $tenloai);
    include './views/loai/index_loai.php';
}
if ($action == 'thembanner') {
    $url = Utilities::post('url');
    $quantri = Utilities::post('quantri');

    if (!$_FILES) {
        echo '';
    } else {
        $hinhanhpath = basename($_FILES['hinh']['name']);
        $target_dir = "../assets/img/banner/";
        $target_file = $target_dir . $hinhanhpath;
        move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file);
    }

    if (!$_FILES) {
        echo '';
    } else {
        $hinhanhpath = basename($_FILES['hinh']['name']);
        $banner->them($hinhanhpath, $url, $quantri);
        include './views/banner/index_banner.php';
    }
}
if ($action == 'suabanner') {
    $id = Utilities::post('ID');
    $url = Utilities::post('url');
    $quantri = Utilities::post('maqt');
    $hinh = Utilities::post('hinhcu');
    var_export(basename($_FILES['hinh']['name']));
    if (basename($_FILES['hinh']['name'])=='') {
        $hinhanhpath = $hinh;
    } else {
        $hinhanhpath = basename($_FILES['hinh']['name']);
        $target_dir = "../assets/img/banner/";
        $target_file = $target_dir . $hinhanhpath;
        move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file);

    }
    $banner->sua($id, $hinhanhpath, $url, $quantri);
    include './views/banner/index_banner.php';
}
if ($action == 'themkhuyenmai') {
    $tenkm = Utilities::post('tenkm');
    $sanpham = Utilities::post('sanpham');
    $giaGiam = Utilities::post('giagiam');
    $ngaybd = Utilities::post('ngaytao');
    $ngaykt = Utilities::post('ngayhethan');

    if ($tenkm == '') {
        echo '';
    } else {
        $khuyenmai->them($tenkm, $sanpham, $giaGiam, $ngaybd, $ngaykt);
        include './views/khuyenmai/index_khuyenmai.php';
    }
}
if ($action == 'suakhuyenmai') {
    $id = Utilities::post('ID');
    $tenkm = Utilities::post('tenkm');
    $sanpham = Utilities::post('masp');
    $giaGiam = Utilities::post('giagiam');
    $ngaybd = Utilities::post('ngaybd');
    $ngaykt = Utilities::post('ngaykt');

    $khuyenmai->sua($id, $tenkm, $sanpham, $giaGiam, $ngaybd, $ngaykt);
    include './views/khuyenmai/index_khuyenmai.php';
}
if ($action == 'themdonnhaphang') {
    $ngaynhap = Utilities::post('ngaynhap');
    $soluong = Utilities::post('soluong');
    $nhasanxuat = Utilities::post('nhasanxuat');
    $sanpham = Utilities::post('sanpham');
    $nguoiquantri = Utilities::post('nguoiquantri');

    if ($soluong == '') {
        echo '';
    } else {
        $donnhaphang->them($ngaynhap, $soluong, $nhasanxuat, $sanpham, $nguoiquantri);
        include './views/donnhaphang/index_donnhaphang.php';
    }
}
if ($action == 'suadonnhaphang') {
    $id = Utilities::post('ID');
    $ngaynhap = Utilities::post('ngaynhap');
    $soluong = Utilities::post('soluong');
    $nhasanxuat = Utilities::post('nhasanxuat');
    $sanpham = Utilities::post('sanpham');
    $nguoiquantri = Utilities::post('nguoiquantri');

    $donnhaphang->sua($id, $ngaynhap, $soluong, $nhasanxuat, $sanpham, $nguoiquantri);
    include './views/donnhaphang/index_donnhaphang.php';
}
if ($action == 'themtintuc') {
    $tieude = Utilities::post('tieude');
    $noidung = Utilities::post('noidung');
    $ngaydang = Utilities::post('ngaydang');
    $maqt = Utilities::post('quantri');

    if ($tieude == '') {
        echo '';
    } else {
        $tintuc->them($tieude, $noidung, $ngaydang, $maqt);
        include './views/tintuc/index_tintuc.php';
    }
}
if ($action == 'suatintuc') {
    $ma = Utilities::post('ID');
    $tieude = Utilities::post('tieude');
    $noidung = Utilities::post('noidung');
    $ngaydang = Utilities::post('ngaydang');
    $maqt = Utilities::post('quantri');

    $tintuc->sua($ma, $tieude, $noidung, $ngaydang, $maqt);
    include './views/tintuc/index_tintuc.php';
}
if ($action == 'themthongbao') {
    $tieude = Utilities::post('tieude');
    $noidung = Utilities::post('noidung');
    $ngaydang = Utilities::post('ngaydang');
    $maqt = Utilities::post('quantri');
    $makh = Utilities::post('khachhang');

    if ($tieude == '') {
        echo '';
    } else {
        $thongbao->them($tieude, $noidung, $ngaydang, $maqt, $makh);
        include './views/thongbao/index_thongbao.php';
    }
}
if ($action == 'suathongbao') {
    $ma = Utilities::post('ID');
    $tieude = Utilities::post('tieude');
    $noidung = Utilities::post('noidung');
    $ngaydang = Utilities::post('ngaydang');
    $maqt = Utilities::post('quantri');
    $makh = Utilities::post('khachhang');

    $thongbao->sua($ma, $tieude, $noidung, $ngaydang, $maqt, $makh);
    include './views/thongbao/index_thongbao.php';
}
if ($action == 'themtaikhoan') {
    $ten = Utilities::post('ten');
    $pass = Utilities::post('pass');
    $tenqt = Utilities::post('tenqt');
    $email = Utilities::post('email');
    $sdt = Utilities::post('sdt');

    if ($ten == '') {
        echo '';
    } else {
        $taikhoan->them($ten, $pass, $tenqt, $email, $sdt);
        include './views/taikhoan/index_taikhoan.php';
    }
}
if ($action == 'suataikhoan') {
    $id = Utilities::post('ID');
    $ten = Utilities::post('ten');
    $pass = Utilities::post('pass');
    $tenqt = Utilities::post('tenqt');
    $email = Utilities::post('email');
    $sdt = Utilities::post('sdt');

    $taikhoan->sua($id,$ten, $pass, $tenqt, $email, $sdt);
    include './views/taikhoan/index_taikhoan.php';
}
if ($action == 'themtaikhoan1') {
    $tenkh = Utilities::post('tenkh');
    $email = Utilities::post('email');
    $password = Utilities::post('password');
    $sdt = Utilities::post('sdt');
    $gioitinh = Utilities::post('gioitinh');
    $ngaysinh = Utilities::post('ngaysinh');
    $diachi = Utilities::post('diachi');

    if ($tenkh == '') {
        echo '';
    } else {
        $taikhoan->them1($tenkh, $email, $password, $sdt, $gioitinh, $ngaysinh, $diachi);
        include './views/taikhoan/index_taikhoan1.php';
    }
}
if ($action == 'suataikhoan1') {
    $id = Utilities::post('ID');
    $tenkh = Utilities::post('tenkh');
    $email = Utilities::post('email');
    $password = Utilities::post('password');
    $sdt = Utilities::post('sdt');
    $gioitinh = Utilities::post('gioitinh');
    $ngaysinh = Utilities::post('ngaysinh');
    $diachi = Utilities::post('diachi');

    $taikhoan->sua1($id, $tenkh, $email, $password, $sdt, $gioitinh, $ngaysinh, $diachi);
    include './views/taikhoan/index_taikhoan1.php';
}
<?php
$action = Utilities::get('action', 'index');
$loai = new LoaiSanPham();
$sp = new SanPham();
$km = new KhuyenMai();
$nsx= new NhaSanXuat();
if($action=='loc')
{
    $tilte = 'Tất cả sản phẩm';
    $datasp = $sp->all();
    echo '<script>
    document.getElementById("tilte").innerHTML = "Tất cả sản phẩm";
    </script>';
    include 'views/sanpham/boloc.php';
}
if($action=='tatca')
{
    $dataloai = $loai->all();
    echo '<script>
    document.getElementById("tilte").innerHTML = "Tất cả sản phẩm";
    </script>';
    include 'views/index.php';
}
if($action=='lsp')
{
    $maloai = Utilities::get('maloai');
    $tilte = 'Sản phẩm thuộc loại '. $loai->timkiem($maloai)[0]['tenloai'];
    $datasp = $sp->allByLoai($maloai);
    echo '<script>
    document.getElementById("tilte").innerHTML = "Sản phẩm loại '.$loai->timkiem($maloai)[0]['tenloai'].'";
    </script>';
    include 'views/sanpham/boloc.php';
}
if($action=='nsx')
{
    $mansx = Utilities::get('mansx');
    $tilte = 'Sản phẩm thuộc nhà sản xuất '. $nsx->timkiem($mansx)[0]['tennsx'];
    $datasp = $sp->allByNSX($mansx);
    echo '<script>
    document.getElementById("tilte").innerHTML = "Sản phẩm của nhà sản xuất '.$nsx->timkiem($mansx)[0]['tennsx'].'";
    </script>';
    include 'views/sanpham/boloc.php';
}

if($action=='search')
{
    $kw = Utilities::get('kw');
    $datasp = $sp->Search($kw);
    echo '<script>
    document.getElementById("tilte").innerHTML = "Tìm kiếm";
    </script>';
    $tilte = 'Sản phẩm có tên '. $kw;
    include 'views/sanpham/boloc.php';
}
if($action=='chitiet')
{
    $masp=Utilities::get('masp');
    $itemsp=$sp->detail($masp);
    $itemkm = $km->detailByMaSP($itemsp['masp']);
    echo '<script>
    document.getElementById("tilte").innerHTML = "'.$itemsp['tensp'].'";
    </script>';
    include 'views/sanpham/chitiet.php';
}
if($action=='binhluan')
{
    if(!isset($_SESSION['email']))
    {
        echo '<script> location.replace("index.php"); </script>';
    }
    $bl = new BinhLuan();
    $tk = new TaiKhoan();
    $masp=Utilities::post('masp');
    $email = Utilities::post('email');
    $binhluan=Utilities::post('binhluan');
    $makh=$tk->timkiemEmail($email)[0]['makh'];
    $date = date("Y-m-d");
    $bl->them($binhluan, $date, $makh, $masp);
    echo '<script> location.replace("index.php?controller=sanpham&action=chitiet&masp='.$masp.'"); </script>';
}
if($action=='gia')
{
    $id = Utilities::get('id');
    if($id==1){
        $tilte = 'Sản phẩm có giá dưới 15.000.000 ';
        $datasp = $sp->allGiaMax(15000000);
        echo '<script>
        document.getElementById("tilte").innerHTML = "Giá dưới 15.000.000";
        </script>';
        include 'views/sanpham/boloc.php';
    }else if($id==2){
        $tilte = 'Sản phẩm có giá từ 15.000.000 đến 25.000.000';
        $datasp = $sp->allGia(15000000,25000000);
        echo '<script>
        document.getElementById("tilte").innerHTML = "Giá từ 15.000.000 - 25.000.000";
        </script>';
        include 'views/sanpham/boloc.php';
    }else if($id == 3){
        $tilte = 'Sản phẩm có giá từ 25.000.000 đến 40.000.000 ';
        $datasp = $sp->allGia(25000000,40000000);
        echo '<script>
        document.getElementById("tilte").innerHTML = "Giá từ 25.000.000 - 40.000.000";
        </script>';
        include 'views/sanpham/boloc.php';
    }else{
        $tilte = 'Sản phẩm có giá trên 40.000.000 ';
        $datasp = $sp->allGiaMin(40000000);
        echo '<script>
        document.getElementById("tilte").innerHTML = "Giá trên 40.000.000";
        </script>';
        include 'views/sanpham/boloc.php';
    }
}
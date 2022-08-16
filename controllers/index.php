<?php
$action = Utilities::get('action', 'index');
$km = new KhuyenMai();
if($action=='index')
{
    $datakm=$km->randomSP(8);
    echo '<script>
    document.getElementById("tilte").innerHTML = "Home";
    </script>';
    include 'views/khuyenmai/index.php';
}
if($action=='khuyenmai')
{
    $data=$km->allSP(8);
    echo '<div class="container text-center"><p>Danh sách sản phẩm khuyến mãi</p></div>';
    echo '<script>
    document.getElementById("tilte").innerHTML = "Sản phẩm khuyến mãi";
    </script>';
    include 'views/sanpham/index.php';
}
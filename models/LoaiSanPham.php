<?php
if (!defined('HOST')) {
    exit;
}

class LoaiSanPham extends Database
{
    function all()
    {
        return $this->selectQuery("Select * from loaisanpham");
    }

    function timkiem($ma)
    {
        return $this->selectQuery("Select * from loaisanpham where maloai=?", [$ma]);
    }

    function tongloai()
    {
        $sql_tong = "select count(maloai) from loaisanpham";
        return $this->updateQuery($sql_tong);
    }

    function getLoaiContainSP()
    {
        return $this->selectQuery("Select * from loaisanpham join sanpham on loaisanpham.maloai=sanpham.maloai");
    }
}
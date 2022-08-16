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

    function them($tenloai)
    {
        $sql_them = "INSERT INTO `loaisanpham`(`maloai`, `tenloai`)
                    VALUES (?,?)";
        return $this->updateQuery($sql_them, [NULL, $tenloai]);
    }

    function sua($ma, $tenloai)
    {
        $sql_sua = "UPDATE `loaisanpham` SET tenloai=? WHERE maloai=?";
        return $this->updateQuery($sql_sua, [$tenloai, $ma]);
    }

    function xoa($ma)
    {
        $sql_xoa = "DELETE FROM `loaisanpham` WHERE maloai=?";
        return $this->updateQuery($sql_xoa, [$ma]);

    }

    function tongloai()
    {
        $sql_tong = "select count(maloai) from loaisanpham";
        return $this->updateQuery($sql_tong);
    }
}
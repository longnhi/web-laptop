<?php
if (!defined('HOST')) {
    exit;
}

class DonHang extends Database
{
    function all()
    {
        return $this->selectQuery("Select * from donhang, user_kh where donhang.makh = user_kh.makh");
    }
    function xoa($id)
    {
        $sql_xoa = "DELETE FROM `donhang` 
                    WHERE madh=?";
        return $this->updateQuery($sql_xoa, [$id]);
    }
    function suatrangthai($madh,$trangthai)
    {
        $sql_sua = "UPDATE `donhang` 
        SET trangthai=?
        WHERE madh=?";
        return $this->updateQuery($sql_sua, [$trangthai,$madh]);
    }
}
<?php
if (!defined('HOST')) {
    exit;
}

class BinhLuan extends Database
{
    function all()
    {
        return $this->selectQuery("SELECT * FROM binhluan, user_kh, sanpham 
                                        WHERE binhluan.makh=user_kh.makh 
                                        and binhluan.masp=sanpham.masp
                                        ORDER BY ngaydang DESC");
    }

    function detail($masp)
    {
        return $this->selectQuery("SELECT * FROM binhluan, user_kh, sanpham 
                                        WHERE binhluan.makh=user_kh.makh 
                                        and binhluan.masp=sanpham.masp and binhluan.masp=?
                                        ORDER BY ngaydang DESC",[$masp]);
    }

    function them($noidung, $ngaydang, $makh, $masp)
    {
        $sql_them = "INSERT INTO `binhluan`( `noidung`, `ngaydang`, `makh`,`masp`)
                    VALUES (?,?,?,?)";
        return $this->updateQuery($sql_them, [$noidung, $ngaydang, $makh, $masp]);
    }

    function xoa($id)
    {
        $sql_xoa = "DELETE FROM `binhluan` 
                    WHERE mabl=?";
        return $this->updateQuery($sql_xoa, [$id]);
    }
}
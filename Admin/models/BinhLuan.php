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

    function xoa($id)
    {
        $sql_xoa = "DELETE FROM `binhluan` 
                    WHERE mabl=?";
        return $this->updateQuery($sql_xoa, [$id]);
    }
}
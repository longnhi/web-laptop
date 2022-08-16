<?php
if (!defined('HOST')) {
    exit;
}

class ChiTietDonHang extends Database
{
    function all()
    {
        return $this->selectQuery("Select * from chitietdonhang");
    }

    function detail($madh){
        return $this->selectQuery("Select * from chitietdonhang where madh=?",[$madh]);
    }
    
    function xoa($id)
    {
        $sql_xoa = "DELETE FROM `chitietdonhang` 
                    WHERE mactdh=?";
        return $this->updateQuery($sql_xoa, [$id]);
    }
    function them($madh, $masp, $soluong, $thanhtien)
    {
        $sql_them = "INSERT INTO `chitietdonhang`( `madh`, `masp`, `soluong`,`thanhtien`)
                    VALUES (?,?,?,?)";
        return $this->updateQuery($sql_them, [$madh, $masp, $soluong, $thanhtien]);
    }
}
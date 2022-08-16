<?php
if (!defined('HOST')) {
    exit;
}

class DonNhapHang extends Database
{
    function all()
    {
        return $this->selectQuery("Select * 
                                        from donnhaphang, user_admin, nhasanxuat, sanpham
                                        WHERE donnhaphang.maqt = user_admin.maqt
                                        and donnhaphang.mansx = nhasanxuat.mansx
                                        and donnhaphang.masp = sanpham.masp");
    }

    function tiemkiem($id)
    {
        return $this->selectQuery("Select * 
                                        from donnhaphang, user_admin, nhasanxuat, sanpham
                                        WHERE donnhaphang.maqt = user_admin.maqt
                                        and donnhaphang.mansx = nhasanxuat.mansx
                                        and donnhaphang.masp = sanpham.masp
                                        and donnhaphang.madnh=?", [$id]);
    }

    function them($ngaynhap, $soluong, $mansx, $masp, $maqt)
    {
        $sql_them = "INSERT INTO `donnhaphang`(`madnh`, `ngaynhap`, `soluong`, `mansx`, `masp`, `maqt`)
                    VALUES (?,?,?,?,?,?)";
        return $this->updateQuery($sql_them, [NULL, $ngaynhap, $soluong, $mansx, $masp, $maqt]);
    }

    function sua($id, $ngaynhap, $soluong, $mansx, $masp, $maqt)
    {
        $sql_sua = "UPDATE `donnhaphang` 
                    SET ngaynhap=?, soluong=?, mansx=?, masp=?, maqt=?
                    WHERE madnh=?";
        return $this->updateQuery($sql_sua, [$ngaynhap, $soluong, $mansx, $masp, $maqt, $id]);
    }

    function xoa($id)
    {
        $sql_xoa = "DELETE FROM `donnhaphang` 
                    WHERE madnh=?";
        return $this->updateQuery($sql_xoa, [$id]);
    }
}
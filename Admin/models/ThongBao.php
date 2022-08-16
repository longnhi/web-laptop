<?php
if (!defined('HOST')) {
    exit;
}

class ThongBao extends Database
{
    function all()
    {
        return $this->selectQuery("Select * 
                                        from thongbao, user_kh, user_admin
                                        where thongbao.makh = user_kh.makh
                                        and thongbao.maqt = user_admin.maqt");
    }

    function ngaymax()
    {
        return $this->selectQuery("SELECT MAX(ngaydang) FROM `thongbao`");
    }

    function tbmoi($ngaymax)
    {
        return $this->selectQuery("SELECT * FROM `thongbao` where ngaydang=?", [$ngaymax]);
    }

    function tiemkiem($ma)
    {
        return $this->selectQuery("Select * 
                                        from thongbao
                                        where matb=?", [$ma]);
    }

    function them($tieude, $noidung, $ngaydang, $maqt, $makh)
    {
        $sql_them = "INSERT INTO `thongbao`(`matb`, `tieude`, `noidung`, `ngaydang`, `maqt`, `makh`)
                    VALUES (?,?,?,?,?,?)";
        return $this->updateQuery($sql_them, [NULL, $tieude, $noidung, $ngaydang, $maqt, $makh]);
    }

    function sua($ma, $tieude, $noidung, $ngaydang, $maqt, $makh)
    {
        $sql_sua = "UPDATE `thongbao` SET tieude=?, noidung=?, ngaydang=?, maqt=?, makh=? WHERE matb=?";
        return $this->updateQuery($sql_sua, [$tieude, $noidung, $ngaydang, $maqt, $makh, $ma]);
    }

    function xoa($ma)
    {
        $sql_xoa = "DELETE FROM `thongbao` WHERE matb=?";
        return $this->updateQuery($sql_xoa, [$ma]);
    }
}
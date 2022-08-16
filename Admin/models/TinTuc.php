<?php
if (!defined('HOST')) {
    exit;
}

class TinTuc extends Database
{
    function all()
    {
        return $this->selectQuery("Select * from tintuc");
    }
    function tiemkiem($ma)
    {
        return $this->selectQuery("Select * 
                                        from tintuc
                                        where matt=?", [$ma]);
    }
    function them($tieude, $noidung, $ngaydang, $maqt)
    {
        $sql_them = "INSERT INTO `tintuc`(`matt`, `tieude`, `noidung`, `ngaydang`, `maqt`)
                    VALUES (?,?,?,?,?)";
        return $this->updateQuery($sql_them, [NULL, $tieude, $noidung, $ngaydang, $maqt]);
    }

    function sua($ma, $tieude, $noidung, $ngaydang, $maqt)
    {
        $sql_sua = "UPDATE `tintuc` SET tieude=?, noidung=?, ngaydang=?, maqt=? WHERE matt=?";
        return $this->updateQuery($sql_sua, [$tieude, $noidung, $ngaydang, $maqt, $ma]);
    }


    function xoa($ma)
    {
        $sql_xoa = "DELETE FROM `tintuc` WHERE matt=?";
        return $this->updateQuery($sql_xoa, [$ma]);
    }
}
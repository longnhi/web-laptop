<?php
if (!defined('HOST')) {
    exit;
}

class NhaSanXuat extends Database
{
    function all()
    {
        return $this->selectQuery("Select * from nhasanxuat");
    }

    function tiemkiem($id)
    {
        return $this->selectQuery("Select * from nhasanxuat where mansx=?",[$id]);
    }

    function them($tennsx, $diachi)
    {
        $sql_them = "INSERT INTO `nhasanxuat`(`mansx`, `tennsx`, `diachi`) 
                    VALUES (?,?,?)";
        return $this->updateQuery($sql_them, [NULL, $tennsx, $diachi]);
    }

    function sua($id, $tennsx, $diachi)
    {
        $sql_sua = "UPDATE nhasanxuat 
        SET tennsx=?, diachi=? WHERE mansx=?";
        return $this->updateQuery($sql_sua, [$tennsx, $diachi, $id]);
    }

    function xoa($id)
    {
        $sql_sua = "DELETE FROM `nhasanxuat` WHERE mansx=?";
        return $this->updateQuery($sql_sua, [$id]);
    }

}
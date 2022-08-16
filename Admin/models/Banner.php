<?php
if (!defined('HOST')) {
    exit;
}

class Banner extends Database
{
    function all()
    {
        return $this->selectQuery("Select * from banner");
    }

    function tiemkiem($id)
    {
        return $this->selectQuery("Select * 
                                        from banner
                                        where mabanner=?", [$id]);
    }

    function them($hinhanhpath, $url, $quantri)
    {
        $sql_them = "INSERT INTO `banner`(`mabanner`, `hinhanh`, `url`, `maqt`)
                    VALUES (?,?,?,?)";
        return $this->updateQuery($sql_them, [NULL, $hinhanhpath, $url, $quantri]);
    }

    function sua($id, $hinhanhpath, $url, $quantri)
    {
        $sql_sua = "UPDATE `banner` 
                    SET hinhanh=?, url=?, maqt=?
                    WHERE mabanner=?";
        return $this->updateQuery($sql_sua, [$hinhanhpath, $url, $quantri, $id]);
    }

    function del($id)
    {
        $sql_xoa = "DELETE FROM `banner` 
                    WHERE mabanner=?";
        return $this->updateQuery($sql_xoa, [$id]);
    }
}
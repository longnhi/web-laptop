<?php
if (!defined('HOST')) {
    exit;
}

class KhuyenMai extends Database
{
    function all()
    {
        return $this->selectQuery("Select * 
                                        from khuyenmai, sanpham
                                        where khuyenmai.masp = sanpham.masp");
    }

    function detailByMaSanPham($idsp)
    {
        return $this->selectQuery("Select * from khuyenmai where masp=? ", [$idsp]);
    }

    function timkiem($id)
    {
        return $this->selectQuery("Select * 
                                        from khuyenmai
                                        where makm=?", [$id]);
    }

    function them($tenkm, $sp, $giaGiam, $ngaybd, $ngaykt)
    {
        $sql_them = "INSERT INTO `khuyenmai`(`makm`, `tenkm`, `masp`, `giagiam`, `ngaybd`, `ngaykt`)
                    VALUES (?,?,?,?,?,?)";
        return $this->updateQuery($sql_them, [NULL, $tenkm, $sp, $giaGiam, $ngaybd, $ngaykt]);
    }

    function sua($id, $tenkm, $sp, $giaGiam, $ngaybd, $ngaykt)
    {
        $sql_sua = "UPDATE `khuyenmai` 
                    SET tenkm=?, masp=?, giagiam=?, ngaybd=?, ngaykt=?
                    WHERE makm=?";
        return $this->updateQuery($sql_sua, [$tenkm, $sp, $giaGiam, $ngaybd, $ngaykt, $id]);
    }

    function xoa($id)
    {
        $sql_xoa = "DELETE FROM `khuyenmai` WHERE makm=?";
        return $this->updateQuery($sql_xoa, [$id]);
    }
}
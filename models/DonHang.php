<?php
if (!defined('HOST')) {
    exit;
}

class DonHang extends Database
{
    function all()
    {
        return $this->selectQuery("Select * from donhang");
    }

    function allByKH($makh)
    {
        return $this->selectQuery("Select * from donhang where makh=? order by madh desc",[$makh]);
    }

    function detail($madh)
    {
        return $this->selectQuery("Select * from donhang where madh=?",[$madh]);
    }

    function suatrangthai($madh,$trangthai)
    {
        $sql_sua = "UPDATE `donhang` 
        SET trangthai=?
        WHERE madh=?";
        return $this->updateQuery($sql_sua, [$trangthai,$madh]);
    }

    function xoa($id)
    {
        $sql_xoa = "DELETE FROM `donhang` 
                    WHERE madh=?";
        return $this->updateQuery($sql_xoa, [$id]);
    }
    function them($makh, $tennguoinhan, $sdt, $ngaydat,$diachi,$thanhtien,$pttt,$trangthai)
    {
        $sql_them = "INSERT INTO `donhang`( `makh`, `tennguoinhan`, `sdtnguoinhan`,`ngaydat`,`diachinhan`,`thanhtien`,`phuongthucthanhtoan`,`trangthai`)
                    VALUES (?,?,?,?,?,?,?,?)";
        return $this->updateQuery($sql_them, [$makh, $tennguoinhan, $sdt, $ngaydat,$diachi,$thanhtien,$pttt,$trangthai]);
    }
    function laycuoi()
    {
        return $this->selectQuery("Select * from donhang order by madh desc");
    }
}
<?php
if (!defined('HOST')) {
    exit;
}

class ThongBao extends Database
{
    function all()
    {
        return $this->selectQuery("Select * from thongbao");
    }

    function allByKH($makh)
    {
        return $this->selectQuery("Select * from thongbao where makh=? order by matb desc",[$makh]);
    }

    function ngaymax()
    {
        return $this->selectQuery("SELECT MAX(ngaydang) FROM `thongbao`");
    }

    function tbmoi($ngaymax)
    {
        return $this->selectQuery("SELECT * FROM `thongbao` where ngaydang=?", [$ngaymax]);
    }

    function timkiem($ma)
    {
        return $this->selectQuery("Select * 
                                        from thongbao
                                        where matb=?", [$ma]);
    }
}
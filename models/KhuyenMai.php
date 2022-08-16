<?php
if (!defined('HOST')) {
    exit;
}

class KhuyenMai extends Database
{
    function all()
    {
        return $this->selectQuery("Select * 
                                        from khuyenmai");
    }

    function timkiem($id)
    {
        return $this->selectQuery("Select * 
                                        from khuyenmai
                                        where makm=?", [$id]);
    }

    function detailByMaSP($masp){
        return $this->selectQuery("Select * from khuyenmai where masp = ? ",[$masp]);
    }

    function randomSP($n)
    {
        return $this->selectQuery("Select * from khuyenmai,sanpham where khuyenmai.masp = sanpham.masp and ngaybd <= curdate() and ngaykt >= curdate() order by rand() limit 0, $n");
    }

    function allSP()
    {
        return $this->selectQuery("Select * from khuyenmai,sanpham where khuyenmai.masp = sanpham.masp and ngaybd <= curdate() and ngaykt >= curdate()");
    }
}
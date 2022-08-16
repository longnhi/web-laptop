<?php
if (!defined('HOST')) {
    exit;
}

class SanPham extends Database
{
    function all()
    {
        return $this->selectQuery("Select * 
                                        from sanpham, loaisanpham, nhasanxuat
                                        where sanpham.maloai = loaisanpham.maloai
                                        and sanpham.mansx = nhasanxuat.mansx");
    }

    function laysanphamtheoid($id)
    {
        return $this->selectQuery("Select * 
                                        from sanpham, loaisanpham, nhasanxuat
                                        where sanpham.maloai = loaisanpham.maloai
                                        and sanpham.mansx = nhasanxuat.mansx
                                        and sanpham.masp=?", [$id]);
    }

    function them($tensp, $gia, $hinhanhpath, $loai, $nhasanxuat, $baohanh, $mausac, $cpu, $ram, $gpu, $dophangiai, $ocung, $pin, $trongluong, $hedieuhanh, $ketnoi, $webcam, $soluong)
    {
        $sql_them = "INSERT INTO `sanpham` (`masp`,`tensp`,`gia`,`hinhanh`,`maloai`, `mansx`,`baohanh`,`mausac`,`cpu`,`ram`,`gpu`,`dophangiai`,`ocung`,`pin`,`trongluong`,`hedieuhanh`,`ketnoi`,`camera`,`soluongtonkho`) 
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        return $this->updateQuery($sql_them, [NULL, $tensp, $gia, $hinhanhpath, $loai, $nhasanxuat, $baohanh, $mausac, $cpu, $ram, $gpu, $dophangiai, $ocung, $pin, $trongluong, $hedieuhanh, $ketnoi, $webcam, $soluong]);
    }

    function sua($id, $tensp, $gia, $hinhanhpath, $loai, $nhasanxuat, $baohanh, $mausac, $cpu, $ram, $gpu, $dophangiai, $ocung, $pin, $trongluong, $hedieuhanh, $ketnoi, $webcam, $soluong)
    {
        $sql_sua = "UPDATE `sanpham` 
                    SET tensp=?, gia=?, hinhanh=?, maloai=?, mansx=?, baohanh=?, mausac=?, cpu=?, ram=?, gpu=?, dophangiai=?, ocung=?, pin=?, trongluong=?, hedieuhanh=?, ketnoi=?, camera=?, soluongtonkho=? WHERE masp=?";
        return $this->updateQuery($sql_sua, [$tensp, $gia, $hinhanhpath, $loai, $nhasanxuat, $baohanh, $mausac, $cpu, $ram, $gpu, $dophangiai, $ocung, $pin, $trongluong, $hedieuhanh, $ketnoi, $webcam, $soluong, $id]);
    }

    function xoa($id)
    {
        $sql_xoa = "DELETE FROM `sanpham` WHERE masp=?";
        return $this->updateQuery($sql_xoa, [$id]);
    }

    function tongsp()
    {
        $sql = "select COUNT(masp) from sanpham";
        return $this->selectQuery($sql);
    }

    function allC($start, $limit)
    {
        return $this->selectQuery("Select * 
                                        from sanpham, loaisanpham, nhasanxuat
                                        where sanpham.maloai = loaisanpham.maloai
                                        and sanpham.mansx = nhasanxuat.mansx
                                        ORDER BY sanpham.masp 
                                        ASC LIMIT $start,$limit");
    }
}


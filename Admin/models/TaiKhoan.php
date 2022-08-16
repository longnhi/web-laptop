<?php
if (!defined('HOST')) {
    exit;
}

class TaiKhoan extends Database
{
    function allkh()
    {
        return $this->selectQuery("Select * from user_kh");
    }

    function getAdminLogin($username,$password)
    {
        $data= $this->selectQuery('select * from user_admin where tendangnhap like ? and password like ?',[$username,$password]);
        return $data;
    }

    function alladmin()
    {
        return $this->selectQuery("Select * from user_admin");
    }

    function tiemkiem($id)
    {
        return $this->selectQuery("Select * 
                                        from user_admin
                                        where maqt=?", [$id]);
    }

    function tiemkiem1($id)
    {
        return $this->selectQuery("Select * 
                                        from user_kh
                                        where makh=?", [$id]);
    }

    function them($ten, $pass, $tenqt, $email, $sdt)
    {
        $sql_them = "INSERT INTO `user_admin`(`maqt`, `tendangnhap`, `password`, `tenquantri`, `email`, `sdt`) 
                    VALUES (?,?,?,?,?,?)";
        return $this->updateQuery($sql_them, [NULL, $ten, $pass, $tenqt, $email, $sdt]);
    }

    function sua($id, $ten, $pass, $tenqt, $email, $sdt)
    {
        $sql_sua = "UPDATE `user_admin` 
                    SET tendangnhap=?, password=?, tenquantri=?, email=?, sdt=?
                    WHERE maqt=?";
        return $this->updateQuery($sql_sua, [$ten, $pass, $tenqt, $email, $sdt, $id]);
    }

    function xoa($id)
    {
        $sql_xoa = "DELETE FROM `user_admin` WHERE maqt=?";
        return $this->updateQuery($sql_xoa, [$id]);
    }

    function them1($tenkh, $email, $password, $sdt, $gioitinh, $ngaysinh, $diachi)
    {
        $sql_them = "INSERT INTO `user_kh`(`makh`, `tenkh`, `email`, `password`, `sdt`, `gioitinh`, `ngaysinh`, `diachi`) 
                    VALUES (?,?,?,?,?,?,?,?)";
        return $this->updateQuery($sql_them, [NULL, $tenkh, $email, $password, $sdt, $gioitinh, $ngaysinh, $diachi]);
    }

    function sua1($id, $tenkh, $email, $password, $sdt, $gioitinh, $ngaysinh, $diachi)
    {
        $sql_sua = "UPDATE `user_kh` 
                    SET tenkh=?, email=?, password=?, sdt=?, gioitinh=?, ngaysinh=?, diachi=?
                    WHERE makh=?";
        return $this->updateQuery($sql_sua, [$tenkh, $email, $password, $sdt, $gioitinh, $ngaysinh, $diachi, $id]);
    }

    function xoa1($id)
    {
        $sql_xoa = "DELETE FROM `user_kh` WHERE makh=?";
        return $this->updateQuery($sql_xoa, [$id]);
    }
}
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

    function login($email,$password)
    {
        return $this->selectQuery("Select * from user_kh where email like ? and password like ?", [$email,$password]);
    }

    function doimatkhau($email, $password)
    {
        $sql_sua = "UPDATE `user_kh` 
                    SET password=?
                    WHERE email=?";
        return $this->updateQuery($sql_sua, [ $password,$email]);
    }

    function timkiemEmail($email)
    {
        return $this->selectQuery("Select * from user_kh where email like ?", [$email]);
    }

    function timkiem($id)
    {
        return $this->selectQuery("Select * from user_kh where makh=?", [$id]);
    }

    function them($tenkh, $email, $password, $sdt, $gioitinh, $ngaysinh, $diachi)
    {
        $sql_them = "INSERT INTO `user_kh`(`makh`, `tenkh`, `email`, `password`, `sdt`, `gioitinh`, `ngaysinh`, `diachi`) 
                    VALUES (?,?,?,?,?,?,?,?)";
        return $this->updateQuery($sql_them, [NULL, $tenkh, $email, $password, $sdt, $gioitinh, $ngaysinh, $diachi]);
    }

    function sua($id, $tenkh, $email, $password, $sdt, $gioitinh, $ngaysinh, $diachi)
    {
        $sql_sua = "UPDATE `user_kh` 
                    SET tenkh=?, email=?, password=?, sdt=?, gioitinh=?, ngaysinh=?, diachi=?
                    WHERE makh=?";
        return $this->updateQuery($sql_sua, [$tenkh, $email, $password, $sdt, $gioitinh, $ngaysinh, $diachi, $id]);
    }
    function thaydoi($id, $tenkh,  $sdt, $gioitinh, $ngaysinh, $diachi)
    {
        $sql_sua = "UPDATE `user_kh` 
                    SET tenkh=?, sdt=?, gioitinh=?, ngaysinh=?, diachi=?
                    WHERE makh=?";
        return $this->updateQuery($sql_sua, [$tenkh, $sdt, $gioitinh, $ngaysinh, $diachi, $id]);
    }
}
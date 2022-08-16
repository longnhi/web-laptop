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

    function timkiem($id)
    {
        return $this->selectQuery("Select * from nhasanxuat where mansx=?",[$id]);
    }
}
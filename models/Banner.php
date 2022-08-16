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

    function timkiem($id)
    {
        return $this->selectQuery("Select * 
                                        from banner
                                        where mabanner=?", [$id]);
    }
}
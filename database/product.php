<?php
class product
{
    public $db = null;

    public function __construct(DBcontroller $db)
    {
        if(!isset($db->con)) return null;
        $this->db = $db;
    }

    public function getData($table = 'product'){
        $result = $this->db->con->query("SELECT *FROM {$table}");
        $resultArray = array();
        while($item = mysqli_fetch_array($result,MYSQLI_ASSOC))
        {
            $resultArray[] = $item;
        }
        return $resultArray;
    }





}


<?php

class cart
{
    public $db = null;

    public function __construct(DBcontroller $db)
    {
        if(!isset($db->con))return null;
        $this->db = $db;
    }

    public function instertintocart($params = null,$table = "cart")
    {
        if($this->db->con != null)
        {
            if($params != null)
            {
                $columns = implode(',',array_keys($params));

                $values = implode(',',array_values($params));

                $query_string = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);

                $result = $this->db->con->query($query_string);
                return $result;

            }
        }
    }





    public function addtocart($userid,$itemid)
    {
        if(isset($userid) && isset($itemid))
        {
            $params = array(
                "user_id" => $userid,
                "item_id" => $itemid
            );

            $result = $this->instertintocart($params);
            if($result)
            {
                header("Location:".$_SERVER['PHP_SELF']);
            }
        }
    }

    public function deleteitem($item_id = null, $table = 'cart'){
        if($item_id != null){
            $res = $this->db->con->query("DELETE FROM {$table} WHERE item_id={$item_id}");
            if($res){
                header("Location:" . $_SERVER['PHP_SELF']);
            }
            return $res;
        }
    }

    public function getSum($arr){
        if(isset($arr)){
            $sum = 0;
            foreach ($arr as $item){
                $sum += floatval($item[0]);
            }
            return sprintf('%.2f' , $sum);
        }
    }

    public function getcartid($cartarray=null,$key ="item_id")
    {
        if($cartarray != null)
        {
            $cart_id = array_map(function($value)use($key) {
                return $value[$key];
            },$cartarray);
            return $cart_id;
        }
    }

}

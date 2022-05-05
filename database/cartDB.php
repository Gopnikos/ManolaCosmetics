<?php 

class cartDB
{

    public $db = null;

    public function __construct(controllerDB $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }


    public function insertCart($param = null, $table = "cart"){
        if($this->db->con != null){
            if ($param != null){

                $columns = implode(',', array_keys($param));
                
                $values = implode(',', array_values($param));

                $query_string = sprintf("INSERT INTO %s(%s) VALUES(%s)",$table, $columns, $values);
                
                $result = $this->db->con->query($query_string);
                return $result;
            }
        }
    }

    public function addCart($userid, $itemid){
        if(isset($userid) && isset($itemid)){
            $param = array(
                "user_id" => $userid,
                "item_id" => $itemid
            );

            $result = $this->insertCart($param);
            if($result){
                header("Location:" . $_SERVER['PHP_SELF']);
            }

        }
    }

    public function deleteCart($item_id = null, $table = 'cart'){
        if($item_id != null){
            $result = $this->db->con->query("DELETE FROM {$table} WHERE item_id={$item_id}");
            if($result){
                header("Location:" . $_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }

    public function getSum($arr){
        if(isset($arr)){
            $sum = 0;
            foreach($arr as $item){
                $sum += floatval($item[0]);
            }
            return sprintf('%.2f' , $sum);
        }
    }

}
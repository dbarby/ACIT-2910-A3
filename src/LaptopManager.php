<?php

//require_once('./DBConnector.php');

//$um = new CustomerManager();

// Facade
class LaptopManager {

    private $db;

    public function __construct() {
        $this->db = DBConnector::getInstance();
    }

    public function listColumns() {
        $sql = "select distinct column_name from information_schema.columns where table_name = 'product'";
        $rows = $this->db->query($sql);
        return $rows;
    }

    
        public function addLaptopInfo($laptopInfo) {
        $rowExists = false;
        $count = 0;
        foreach($laptopInfo as $info) {
            $columnName = $info['info'];
            $columnValue = $info['value'];

            if($rowExists == false){
            $sql = "INSERT INTO product ($columnName)
                VALUES (" . "'" . $columnValue . "'".")";
                $rowKey = $columnName;
                $rowValue = "'". $columnValue. "'";
            }elseif($rowExists == true){
                $sql = "UPDATE product SET $columnName = " . "'" . $columnValue . "'"." WHERE $rowKey = $rowValue";
            }
            
            
            $count += $this->db->affectRows($sql);
            
            $rowExists = true;
            
            
        }
        return $count;

    }
    
    

}

?>

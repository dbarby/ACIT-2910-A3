<?php

//require_once('./DBConnector.php');

//$um = new CustomerManager();

// Facade
class CustomerManager {

    private $db;

    public function __construct() {
        $this->db = DBConnector::getInstance();
    }

    public function listProducts() {
        $sql = "SELECT SKU, item_price, description FROM product";
        $rows = $this->db->query($sql);
        return $rows;
    }
    
    public function listColumns() {
        $sql = "select distinct column_name from information_schema.columns where table_name = 'customer_info'";
        $rows = $this->db->query($sql);
        return $rows;
    }

    public function findProduct($SKU) {
        $params = array(":sku" => $SKU);
        $sql = "SELECT SKU, item_price, description FROM product WHERE SKU = :sku";

        $rows = $this->db->query($sql, $params);
        if(count($rows) > 0) {
            return $rows[0];
        }

        return null;
    }


}

?>

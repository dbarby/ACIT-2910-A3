<?php

//require_once('./DBConnector.php');

//$um = new UserManager();

// Facade
class ServiceDetailManager {

    private $db;

    public function __construct() {
        $this->db = DBConnector::getInstance();
    }

    public function getUserProfile($userName) {

        $rows = $this->db->query("select * from service where user_name = :name",
            array(':name' => $userName));
        //var_dump($rows[0]);
        if(count($rows) == 1) {
            return $rows[0];
        }
        // otherwise
        return null;
    }

    public function listUsers() {
        $sql = "SELECT user_name, service_name, short_description,long_description, price FROM service";
        $rows = $this->db->query($sql);
        return $rows;
    }

    public function updateUserServiceName($login, $newServiceName) {
        $sql = "UPDATE service SET service_name = '$newServiceName' WHERE user_name = '$login'";
        $affectedRows = $this->db->affectRows($sql);
        return $affectedRows;
    }
    public function updatePrice($login, $newPrice) {
        $sql = "UPDATE service SET price = '$newPrice' WHERE user_name = '$login'";
        $affectedRows = $this->db->affectRows($sql);
        
        echo $affectedRows . $sql;
        
        return $affectedRows;
    }
    public function updateShortDescription($login, $newShortDescription) {
        $sql = "UPDATE service SET short_description = '$newShortDescription' WHERE user_name = '$login'";
        $affectedRows = $this->db->affectRows($sql);
        
        echo $affectedRows . $sql;
        
        return $affectedRows;
    }
    public function updateLongDescription($login, $newLongDescription) {
        $sql = "UPDATE service SET long_description = '$newLongDescription' WHERE user_name = '$login'";
        $affectedRows = $this->db->affectRows($sql);
        
        echo $affectedRows . $sql;
        
        return $affectedRows;
    }

    public function deleteUser($login) {
        $sql = "DELETE FROM service WHERE user_name = '$login'";
        $affectedRows = $this->db->affectRows($sql);
        return $affectedRows;
    }

    public function addUser($serviceName, $shortDescription, $longDescription, $userName, $price) {

        $sql = "INSERT INTO service (service_Name, short_description, long_description, user_name, price, type)
            VALUES ('$serviceName', '$shortDescription', '$userName', '$price', 'admin')";
        $affectedRows = $this->db->affectRows($sql);
        return $affectedRows;
    }

    public function findUser($usr, $pwd) {   
        $params = array(":usr" => $usr, ":pwd" => $pwd);
        $sql = "SELECT * FROM service WHERE user_name = :usr AND password = :pwd";

        $rows = $this->db->query($sql, $params);
        if(count($rows) > 0) {
            return $rows[0];
        }

        return null;
    }
    
    public function displayName(){
        $xxx =  "hello";
        return $xxx;
    }
    
    
    public function listUser() {
        $sql = "SELECT service_name FROM service WHERE user_name = '1'";
        $rows = $this->db->query($sql);
        return $rows;
    }
    public function showPrice($servicenum){
     $sql = "SELECT price from service WHERE user_name = '$servicenum'";
     $rows = $this->db->query($sql);
     return $rows;
    }
    
    public function showShortDescription($servicenum){
     $sql = "SELECT short_description from service WHERE user_name = '$servicenum'";
     $rows = $this->db->query($sql);
     return $rows;
    }
    public function showServiceName($servicenum){
     $sql = "SELECT service_name from service WHERE user_name = '$servicenum'";
     $rows = $this->db->query($sql);
     return $rows;
    }
    public function showLongDescription($servicenum){
     $sql = "SELECT long_description from service WHERE user_name = '$servicenum'";
     $rows = $this->db->query($sql);
     return $rows;
    }
    


}

?>

<?php

//require_once('./DBConnector.php');

//$um = new UserManager();

// Facade
class UserManager {

    private $db;

    public function __construct() {
        $this->db = DBConnector::getInstance();
    }

    public function getUserProfile($userName) {

        $rows = $this->db->query("select * from admin where user_name = :name",
            array(':name' => $userName));
        //var_dump($rows[0]);
        if(count($rows) == 1) {
            return $rows[0];
        }
        // otherwise
        return null;
    }

    public function listUsers() {
        $sql = "SELECT user_name, first_name, last_name, shipping_address, email_address, password FROM admin";
        $rows = $this->db->query($sql);
        
        echo count($rows);
        
        return $rows;
    }

    public function updateUserFirstName($login, $newFirstName) {
        $sql = "UPDATE admin SET first_name = '$newFirstName' WHERE user_name = '$login'";
        $affectedRows = $this->db->affectRows($sql);
        return $affectedRows;
    }

    public function deleteUser($login) {
        $sql = "DELETE FROM admin WHERE user_name = '$login'";
        $affectedRows = $this->db->affectRows($sql);
        return $affectedRows;
    }

    public function addUser($firstName, $lastName, $userName) {

        $sql = "INSERT INTO user (first_name, last_name, user_name, type)
            VALUES ('$firstName', '$lastName', '$userName', 'admin')";
        $affectedRows = $this->db->affectRows($sql);
        return $affectedRows;
    }

    public function checkUser($usr, $pwd){
        $sql = "SELECT * from Admin WHERE username='$usr' and password='$pwd'";
        $affectedRows = $this->db->affectRows($sql);
        return $affectedRows;
    }
    
    public function findUser($usr, $pwd) {
        $params = array(":usr" => $usr, ":pwd" =>md5($pwd));
        $sql = "SELECT * FROM user WHERE user_name = :usr AND password = :pwd";

        $rows = $this->db->query($sql, $params);
        if(count($rows) > 0) {
            return $rows[0];
        }

        return null;
    }


}

?>

<?php

//require_once('./DBConnector.php');

//$um = new UserManager();

// Facade
class Result Calculator {

    private $db;

    public function __construct() {
        $this->db = DBConnector::getInstance();             
    }
    
    //SHould the handling be done in the constructor?
    //Grab cookies here and assign them to $Q1Answer etc.
    //Question 1 Handling
    if(Q1Answer == 1){
            $Q1A == "`screen_size` < 13";
        }elseif (Q1Answer == 2){
            $Q1A == "`screen_size` < 15 AND `screen_size` >= 13";
        }elseif (Q1Answer == 3){
            $Q1A == "`screen_size` < 16 AND `screen_size` >= 15 ";
        }elseif (Q1Answer == 4){
            $Q1A == "`screen_size` >= 16";
        }
    //Question 2 Handling
        if(Q2Answer == 1){
            $Q2A == " `price` < 420";
        }elseif (Q2Answer == 2){
            $Q2A == "`price` < 620 AND `price` > 400";
        }elseif (Q2Answer == 3){
            $Q2A == "`price` < 1050 AND `price` > 620";
        }elseif (Q2Answer == 4){
            $Q2A == "`price` > 1000";
        }



    public function calculateResults($Q1A, $Q2A, $Q3A, $Q4A, $Q5A, $Q6A, $Q7A, $Q8A, $Q9A, $Q10A, $Q11A) {
        $sql = "SELECT * FROM `product` WHERE '$Q1A' AND '$Q2A' AND '$Q3A' AND '$Q4A' AND '$Q5A' AND '$Q6A' AND '$Q7A' AND '$Q8A' AND '$Q9A' AND '$Q10A' AND '$Q11A' ";
        
        $affectedRows = $this->db->affectRows($sql);
        return $affectedRows;
    }
    


}

?>

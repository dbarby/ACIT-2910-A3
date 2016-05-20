<?php

//require_once('./DBConnector.php');

//$um = new UserManager();

// Facade
// class Result Calculator {

//     private $db;

//     public function __construct() {
//         $this->db = DBConnector::getInstance();             
//     }
    //SHould the handling be done in the constructor?
    //Grab cookies here and assign them to $Q1Answer etc.
    //Question 1 Handling
    if($_COOKIE['q1'] == 1){
            $Q1A = "screen_size < 13";
        }elseif ($_COOKIE['q1'] == 2){
            $Q1A = "screen_size < 15 AND screen_size >= 13";
        }elseif ($_COOKIE['q1'] == 3){
            $Q1A = "screen_size < 16 AND screen_size >= 15";
        }elseif ($_COOKIE['q1'] == 4){
            $Q1A = "screen_size >= 16";
        }
    //Question 2 Handling
        if($_COOKIE['q2'] == 1){
            $Q2A = "price < 420";
        }elseif ($_COOKIE['q2'] == 2){
            $Q2A = "price < 620 AND price > 400";
        }elseif ($_COOKIE['q2'] == 3){
            $Q2A = "price < 1050 AND price > 620";
        }elseif ($_COOKIE['q2'] == 4){
            $Q2A = "price > 1000";
        }
    //Q3
        if($_COOKIE['q3'] == 1){
            $Q3A = "performance_rating <= 2";
        }elseif ($_COOKIE['q3'] == 2){
            $Q3A = "performance_rating <= 3 AND performance_rating >= 2";
        }else if ($_COOKIE['q3'] == 3){
            $Q3A = "performance_rating <= 5 AND performance_rating >= 4";
        }else if ($_COOKIE['q3'] == 4){
            $Q3A = "performance_rating = 5 AND battery > 10";
        }
    //Q4
        if($_COOKIE['q4'] == 1){
            $Q4A = "performance_rating <= 2";
        }elseif ($_COOKIE['q4'] == 2){
            $Q4A = "performance_rating <= 4 AND performance_rating >= 2";
        }else if ($_COOKIE['q4'] == 3){
            $Q4A = "performance_rating = 5 AND battery > 8";
        }
    //Q5
        if($_COOKIE['q5'] == 1){
            $Q5A = "battery <=5";
        }elseif ($_COOKIE['q5'] == 2){
            $Q5A = "battery <=7 AND battery >=5";
        }else if ($_COOKIE['q5'] == 3){
            $Q5A = "battery <=11 AND battery >=8";
        }else if ($_COOKIE['q5'] == 4){
            $Q5A = "battery > 10";
        }
    //Q6
        if($_COOKIE['q6'] == 1){
            $Q6A = "LOWER (product.os) like '%windows%'";
        }elseif ($_COOKIE['q6'] == 2){
            $Q6A = "LOWER (product.os) like '%windows%'";
        }else if ($_COOKIE['q6'] == 3){
            $Q6A = "LOWER (product.os) like ‘'%chrome%'";
        }
    //Q7
        if($_COOKIE['q7'] == 1){
            $Q7A = "storage_size <= 128";
        }elseif ($_COOKIE['q7'] == 2){
            $Q7A = "storage_size <= 512 AND storage_size >=128";
        }else if ($_COOKIE['q7'] == 3){
            $Q7A = "storage_size >= 512";
        }
    //Q8
        if($_COOKIE['q8'] == 1){
            $Q8A = "storage_type = 'SSD' OR storage_type = 'HDD'";
        }elseif ($_COOKIE['q8'] == 2){
            $Q8A = "storage_type = 'HDD'";
        }elseif ($_COOKIE['q8'] == 3){
            $Q8A = "storage_type = 'SSD'";
        }
    //Q9
        if($_COOKIE['q9'] == 1){
            $Q9A = "touch = 0";
        }elseif ($_COOKIE['q9'] == 2){
            $Q9A = "touch = 1";
        }
    //Q10
        if($_COOKIE['q10'] == 1){
            $Q10A = "touch = 1 OR touch = 0";
        }elseif ($_COOKIE['q10'] == 2){
            $Q10A = "touch = 1";
        }else if ($_COOKIE['q10'] == 3){
            $Q10A = "touch = 0";
        }
    //Q11, need to make raiting for ports
        if($_COOKIE['q11'] == 1){
            $Q11A = "port_rating >=0";
        }elseif ($_COOKIE['q11'] == 2){
            $Q11A = "port_rating = 2";
        }
    //Q12
        if($_COOKIE['q12'] == 1){
            //need to make rating columns for laptops still
            $Q12A = "performance_rating desc";
        }elseif ($_COOKIE['q12'] == 2){
            $Q12A = "battery";
        }else if ($_COOKIE['q12'] == 3){
            $Q12A = "price desc";
        }


   // public function calculateResults($Q1A, $Q2A, $Q3A, $Q4A, $Q5A, $Q6A, $Q7A, $Q8A, $Q9A, $Q10A, $Q11A) {
        $sql = "SELECT * FROM product WHERE " . $Q1A . " AND " . $Q2A . " AND " . $Q3A . " AND " . $Q4A . " AND " . $Q5A . " AND " . $Q6A . " AND " . $Q7A . " AND " . $Q8A . " AND " . $Q9A . " AND " . $Q11A . " ORDER BY " . $Q12A;
        
    //     $affectedRows = $this->db->affectRows($sql);
    //     return $affectedRows;
    // }
    


//}

?>

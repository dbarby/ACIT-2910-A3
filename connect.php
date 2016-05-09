<?php
$servername = "localhost";
<<<<<<< HEAD
$dbName = "laptopfinder";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
=======
$username = "root";
$password = "";
$dbname = "laptopfinder";

try {
    $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
>>>>>>> refs/remotes/origin/Database-integration
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?> 
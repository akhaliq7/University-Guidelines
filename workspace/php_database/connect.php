<?php
function db(){
    //connection values for string
    static $conn;
    $servername = "localhost";
    $username = "ak1989";
    $password = "";
    $database = "universityGuidelines";
    
    try {
        //create a connetion
        $conn = new PDO("mysql:host=$servername;dbname=$database",$username, $password);
        //connect to the database
        $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        // echo "well done";
    }
    catch(PDOException $e) {
        //if the connection fails
        echo "Error connecting".$e->getMessage();
    }
    return $conn;
}
?>
<?php
    $host = "localhost";
    $db_name = "belajarshoppingcart";
    $username = "root";
    $password = "";

    try {
        $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
    }
    
    //to handle connection error
    catch(PDOException $exception){
        echo "Connection error: " . $exception->getMessage();
    }
?>
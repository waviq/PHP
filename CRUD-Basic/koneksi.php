<?php

$namaServer = "localhost";
$username = "root";
$password = "";
$namaDatabase = "surat";

try{
    $con = new PDO("mysql:host={$namaServer};dbname={$namaDatabase}", $username, $password);
}
// Buat kalo koneksi error
catch(PDOException $exception){
    echo "Connection error : " . $exception->getMessage();
}
?>

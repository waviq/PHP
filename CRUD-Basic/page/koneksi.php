<?php

$namaServer = "localhost";
$username = "root";
$password = "";
$namaDatabase = "surat";


    //create connection
    $conn = new mysqli($namaServer, $username, $password, $namaDatabase);
    //cek koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal : " . $conn->connect_error);
    }

?>

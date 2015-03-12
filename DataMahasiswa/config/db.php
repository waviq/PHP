<?php

$namaServer = "localhost";
$username = "root";
$password = "";
$namaDatabase = "db_mahasiswa";



$koneksi = mysql_connect($namaServer, $username, $password) or die(mysql_error());
$db = mysql_select_db($namaDatabase, $koneksi)or die(mysql_error());


?>

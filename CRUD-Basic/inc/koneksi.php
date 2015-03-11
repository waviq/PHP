<?php

$namaServer = "localhost";
$username = "root";
$password = "";
$namaDatabase = "surat";

$conn_error = 'gagal konek';

if (@mysql_connect($namaServer, $username, $password)) {
    //echo 'sukses konek server dan ';
} else {
    die($conn_error);
}

if (@mysql_select_db($namaDatabase)) {
    //echo 'sukses konek DB';
} else {
    die($conn_error);
}


//@mysql_connect($namaServer, $username, $password) or die ($conn_error);
//@mysql_select_db($namaDatabase)or die($conn_error);
?>

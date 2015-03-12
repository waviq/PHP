<?php

$nim = filter_input(INPUT_POST, 'nim');
$nama = filter_input(INPUT_POST, 'nama');
$email = filter_input(INPUT_POST, 'email');

$sql = mysql_query("INSERT INTO tbl_mahasiswa(nim, nama, email) "
        . "VALUES ('$nim','$nama','$email')");

if ($sql) {
    echo 'simpan data berhasil';
} else {
    echo 'simpan data gagal';
}
?>

<a class="btn btn-default" href="?page=mahasiswa">Lanjutkan</a>
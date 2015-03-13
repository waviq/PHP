<?php
//EDIT
$op = filter_input(INPUT_POST, 'op');
$id_mahasiswa = filter_input(INPUT_POST, 'id_mahasiswa');


$nim = filter_input(INPUT_POST, 'nim');
$nama = filter_input(INPUT_POST, 'nama');
$email = filter_input(INPUT_POST, 'email');

if ($op == 'update') {
    $sql = mysql_query("UPDATE tbl_mahasiswa SET nim='$nim', nama='$nama', "
            . "email = '$email' WHERE id_mahasiswa ='$id_mahasiswa'");
} else {
    $sql = mysql_query("INSERT INTO tbl_mahasiswa(nim, nama, email) "
            . "VALUES ('$nim','$nama','$email')");
}

if ($sql) {
    echo 'simpan data berhasil';
} else {
    echo 'simpan data gagal';
}
?>

<a class="btn btn-default" href="?page=mahasiswa">Lanjutkan</a>
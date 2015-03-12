<?php

$id_mahasiswa = filter_input(INPUT_GET, 'id_mahasiswa');
$sql = mysql_query("DELETE FROM tbl_mahasiswa WHERE id_mahasiswa = '$id_mahasiswa'");

if ($sql) {
    echo 'data berhasil di hapus';
} else {
    echo 'gagal menghapus';
}

?>

<a class="btn btn-default" href="?page=mahasiswa">Lanjutkan</a>
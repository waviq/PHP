<?php
include 'koneksi.inc.php';

$query = "SELECT * FROM surat_masuk ORDER BY id_surat_masuk ASC";
//$queryRun = mysql_query($query);

if ($queryRun = mysql_query($query)) {

    while ($query_row = mysql_fetch_array($queryRun)) {
        $tanggalTerima = $query_row['tgl_terima'];
        $AsalSurat = $query_row['asal_surat_masuk'];
        $noSurat = $query_row['no_surat_masuk'];
        $perihal = $query_row['hal_surat_masuk'];
        ?>
        <a href="index.php?route=suratMasukAdd">Add</a>
        <table border ="1">
            <tr>
                <th>Tanggal Terima</th>
                <th>Asal Surat</th>
                <th>No Surat</th>
                <th>Perihal Surat</th>
            </tr>

            <tr>
                <td><?php echo $tanggalTerima ?></td>
                <td><?php echo $AsalSurat ?></td>
                <td><?php echo $noSurat ?></td>
                <td><?php echo $perihal ?></td>
                <td>
                    <a href="#">Edit</a>
                    <a href="#">Delete</a>

                </td>
            </tr>
        </table>

        <?php
    }
} else {
    echo mysql_error();
}
?>


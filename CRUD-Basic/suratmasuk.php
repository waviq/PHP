<?php
include 'koneksi.php';

$query = "SELECT * FROM surat_masuk ORDER BY id_surat_masuk ASC";
$stmt = $con->prepare($query);
$stmt->execute();

$num = $stmt->rowCount();

if ($num>0) {
    
    echo "<a href='suratMasukAdd.php'>Add</a>";
    echo "<table class='table table-hover table-responsive table-bordered' border=1>";
        echo "<tr>";
            echo "<th>Tanggal Terima</th>";
            echo "<th>Asal Surat</th>";
            echo "<th>No Surat</th>";
            echo "<th>Perihal Surat</th>";
            echo "<th>Edit</th>";
            echo "<th>Delete</th>";
        echo"</tr>";
        
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            echo "<tr>";
                echo "<td>{$tgl_terima}</td>";
                echo "<td>{$asal_surat_masuk}</td>";
                echo "<td>{$no_surat_masuk}</td>";
                echo "<td>{$hal_surat_masuk}</td>";
                echo "<td><a href='edit.php?id_surat_masuk={$id_surat_masuk}'>Edit</a></td>";
                echo "<td><a href='delete.php?id_surat_masuk={$id_surat_masuk}'>Delete</a></td>";
            echo "</tr>";
    }
    echo "</table>";
} else {
    echo "no surat found";
}
?>
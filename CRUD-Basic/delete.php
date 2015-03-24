<?php
include 'koneksi.php';
$query = "DELETE FROM surat_masuk WHERE id_surat_masuk = ?";
    $stmt = $con->prepare($query);
    
$stmt->bindParam(1, $_REQUEST['id_surat_masuk']);

 if($stmt->execute()){
     echo "Record was updated.";?><br /><?php
            echo "<a href='index.php'>Back to index</a>";
        }else{
            die('Unable to delete record.');
        }
?>
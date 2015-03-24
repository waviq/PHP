<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if($_POST){
    include 'koneksi.php';
  
    try{
  
        $query = "INSERT INTO surat_masuk SET tgl_terima = ?, asal_surat_masuk = ?,  no_surat_masuk = ?, hal_surat_masuk = ?";
  
        $stmt = $con->prepare($query);
        
        $stmt->bindParam(1, $_POST['tanggal']);
  
        $stmt->bindParam(2, $_POST['asal']);

        $stmt->bindParam(3, $_POST['nomor']);
  
        $stmt->bindParam(4, $_POST['perihal']);
 
        if($stmt->execute()){
            echo "Record was saved.";?></br><?php
            echo "<a href='index.php'>Back to index</a>";
        }else{
            die('Unable to save record.');
        }
  
    }catch(PDOException $exception){ //to handle error
        echo "Error: " . $exception->getMessage();
    }
}
?>

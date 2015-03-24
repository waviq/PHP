<!DOCTYPE html>
<?php 
include 'koneksi.php';
include 'header.php';

if($_POST){
    try{
        $query = "update surat_masuk
                    set tgl_terima = ?, asal_surat_masuk = ?, no_surat_masuk = ?, hal_surat_masuk  = ?
                    where id_surat_masuk = ?";
 
        
        $stmt = $con->prepare($query);
 
       
        $stmt->bindParam(1, $_POST['tgl_terima']);
        $stmt->bindParam(2, $_POST['asal_surat_masuk']);
        $stmt->bindParam(3, $_POST['no_surat_masuk']);
        $stmt->bindParam(4, $_POST['hal_surat_masuk']);
        $stmt->bindParam(5, $_POST['id_surat_masuk']);
 
        
        if($stmt->execute()){
            echo "Record was updated.";
        }else{
            die('Unable to update record.');
        }
 
    }catch(PDOException $exception){
        echo "Error: " . $exception->getMessage();
    }
}

try{
$query = "select id_surat_masuk, tgl_terima, asal_surat_masuk, no_surat_masuk, hal_surat_masuk from surat_masuk where id_surat_masuk = ? limit 0,1";
    $stmt = $con->prepare($query);
    
$stmt->bindParam(1, $_REQUEST['id_surat_masuk']);

$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);

$id = $row['id_surat_masuk'];
$tanggal = $row['tgl_terima'];
$asal = $row['asal_surat_masuk'];
$nomor = $row['no_surat_masuk'];
$perihal = $row['hal_surat_masuk'];

}catch(PDOException $exception){ //to handle error
    echo "Error: " . $exception->getMessage();
}

?>
<form action='#' method='post'>
    <table>
        <tr>
            <td>Tanggal</td>
            <td><input type='text' name='tgl_terima' value='<?php echo $tanggal;  ?>' /></td>
        </tr>
        <tr>
            <td>Asal</td>
            <td><input type='text' name='asal_surat_masuk' value='<?php echo $asal;  ?>' /></td>
        </tr>
        <tr>
            <td>Nomor</td>
            <td><input type='text' name='no_surat_masuk'  value='<?php echo $nomor;  ?>' /></td>
        </tr>
        <tr>
            <td>Perihal</td>
            <td><input type='text' name='hal_surat_masuk'  value='<?php echo $perihal;  ?>' /></td>
        <tr>
            <td></td>
            <td>
                <input type='hidden' name='id_surat_masuk' value='<?php echo $id ?>' /> 

                <input type='submit' value='Edit' />
 
                <a href='index.php'>Back to index</a>
            </td>
        </tr>
    </table>
</form>
<?php include 'footer.php';?>
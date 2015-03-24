<!DOCTYPE html>
<?php include 'header.php';?>
<form action="add.php" method="post">
    <table>
        <tr>
            <td>Tanggal Surat</td>
            <td><input type="text" name="tanggal" required /></td>
        </tr>
        
        <tr>
            <td>Asal Surat</td>
            <td><input type="text" name="asal" required /></td>
        </tr>
        
        <tr>
            <td>Nomor</td>
            <td><input type="text" name="nomor" required /></td>
        </tr>
        
        <tr>
            <td>Perihal</td>
            <td><input type="text" name="perihal" required /></td>
        </tr>
        <tr>
            <td>Save</td>
            <td><input type="submit" value="add" name="submit" /></td>
        </tr>
    </table>
</form>
<?php include 'footer.php';?>
<form action="index.php?route=suratMasukAdd" method="post">
    <table>
        <tr>
            <td>Asal Surat</td>
            <td><input type="text" name="asal" placeholder="asal surat" value="<?php echo $_POST['asal']; ?>" /></td>
        </tr>
        
        <tr>
            <td>Nomor</td>
            <td><input type="text" name="nomor" placeholder="nomor surat" value="<?php echo $_POST['nomor']; ?>" /></td>
        </tr>
        
        <tr>
            <td>Perihal</td>
            <td><textarea name="perihal" placeholder="Perihal surat"><?php echo $_POST['perihal']; ?></textarea></td>
        </tr>
        
        <tr>
            <td>Asal Surat</td>
            <td><input type="submit" value="add" name="submit" /></td>
        </tr>
    </table>
</form>
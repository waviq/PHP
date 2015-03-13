<?php 
    $id_mahasiswa = filter_input(INPUT_GET, 'id_mahasiswa');
    $sql = mysql_query("SELECT * FROM tbl_mahasiswa WHERE id_mahasiswa = '$id_mahasiswa'");
    
    if($tampil = mysql_fetch_array($sql)){
        //untuk update yg 'op'
        $op = "update";
        
        $id_mahasiswa = $tampil['id_mahasiswa'];
        $nim = $tampil['nim'];
        $nama = $tampil['nama'];
        $email = $tampil['email'];
    }
?>


<form class="form-horizontal" role="form" action="?page=mahasiswa_save" method="POST">
    <!-- Menambahkan form hidden biar kelihatan ID ne udh k select/belom -->
    <input type="hidden" name="id_mahasiswa" value="<?php echo $id_mahasiswa ?>" />
    <!-- Membedakana ntara save dg Edit -->
<!--    <input type="hidden" name="op" value="<?php echo $op ?>" />-->
    
    <div class="form-group">
        <label class="col-sm-2 control-label">NIM</label>
        <div class="col-sm-10">
            <input type="text" name="nim" value="<?php echo $nim ?>" class="form-control" placeholder="NIM">
        </div>
    </div>
    
    <div class="form-group">
        <label class="col-sm-2 control-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" name="nama" value="<?php echo $nama ?>" class="form-control" placeholder="Nama">
        </div>
    </div>
    
    <div class="form-group">
        <label class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
            <input type="email" name="email" value="<?php echo $email ?>" class="form-control" placeholder="Email">
        </div>
    </div>

   
    
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Simpan</button>
        </div>
    </div>
</form>
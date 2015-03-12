<h3>Data Mahasiswa</h3>
<a class="btn btn-danger" href="?page=mahasiswa_add">Add</a>

<table class="table table-striped table-bordered">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Aksi</th>
    </tr>

    <?php
    //include 'db.php';
    //nomor = 0, maka akan di turunkan kebawah, 
    //jd biar urut otomatis sesuai jumlah data

    $no = 0;
    $sql = mysql_query("SELECT * FROM tbl_mahasiswa");

    while ($tampil = mysql_fetch_array($sql)) {
        $no++;
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $tampil['nim'];  ?></td>
            <td><?php echo $tampil['nama']  ?></td>
            <td><?php echo $tampil['email'] ?></td>
            <td>
                <a href="?page=mahasiswa_edit&id_mahasiswa=<?php echo $tampil['id_mahasiswa'] ?>">Edit</a>
                <a href="?page=mahasiswa_del&id_mahasiswa=<?php echo $tampil['id_mahasiswa'] ?>">Hapus</a>
            </td>
        </tr>
        <?php
    }
    ?>

</table>

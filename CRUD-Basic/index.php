<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!--
    1.  membuat file indext.php
    2.  memecah file indext.php menjadi header.php, menu.php, dan footer.php
    3.  membuat loader.php guna menampilkan halaman sesuai menu yang dipilih
    4.  membuat koneksi database d folder inc
    5.  Membuat tabel
    6.  Menampilkan data dalam tabel
    7.  Membuat form tambah data

-->

<?php 
include 'inc/koneksi.php';
include 'page/header.php';?>
    </head>
    <body>
        
        <?php include 'page/menu.php'; ?>
        <br /><br />
        <div> <?php include 'loader.php'; ?></div>
        
<?php include 'page/footer.php';

        
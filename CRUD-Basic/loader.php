<?php

    //iseet = menentukan/memastikan jika variabel telah d tentukan 
    //        dan tidak sama dengan nol/tidak kosong
    //isset bernilai true jika variabelnya sudah ada nilainya (tidak kosong), 
    //bernilai false jika tidak d deklarasikan nilai variabelnya

    if(isset($_GET['route'])){
        include 'page/'.$_GET['route'].'.php';
    }else{
        //ini adalah halaman default
        include 'page/suratmasuk.php';
    }
?>
function ganti_ukuran(element, size){
    var ukuran = parseInt(element.css('font-size'));
    if(size == 'kecil'){
        var ukuranBaru = ukuran-2;
    }else if(size == 'besar'){
        var ukuranBaru = ukuran+2;
    }
    //px = digunakan untuk mengubah ke standarisasi ukuran/pixel ukuran font
    //tanpa d tulis px pun tidak masalah
    element.css('font-size', ukuranBaru + 'px');
}


$('#kecil').click(function (){
   ganti_ukuran($('p'),'kecil') ;
});

$('#besar').click(function (){
    ganti_ukuran($('p'),'besar');
});
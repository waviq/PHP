$(document).ready(function (){
   $('#cariNama').keyup(function (){
       cariNama = $(this).val();
       
       //kalo text d hapus, maka warna akan ilang
       $('#nama li').removeClass('higlig');
       
       //Jika cari nama tidak kosong, maka keluar higlight yg d cari
       //contains = digunakan untuk seleksi String tertentu
       if(jQuery.trim(cariNama)!==''){
           $("#nama li:contains('"+cariNama+"')").addClass('higlig');
       }
       
       
   }) ;
});
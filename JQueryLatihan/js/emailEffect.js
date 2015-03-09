$(document).ready(function() {
   var emailDefault = 'Enter your email address...'; 
   
   $('input[type="email"]').attr('value', emailDefault).focus(function (){
      if($(this).val()=== emailDefault){
          $(this).attr('value','');
      }
   }).blur(function (){
       if($(this).val() === ''){
           $(this).attr('value',emailDefault);
       }
   });
});

$(document).ready(function (){
    var namaDefault = 'nama anda';
    //buat munculin nama anda d textField
    $('input[type="text"]').attr('value', namaDefault).focus(function (){
        //focus =  digunakan untuk focus event di kursor ketika d arahkan ke textfield, 
        //jika kursor d  arahkan k textfiled, maka akan melakukan aksi textFiled menjadi kosong
        if($(this).val() === namaDefault){
            $(this).attr('value','');
        }
        
        //jika textfield == kosong, maka akan d isi namaDefault
        //blue = event ketika kursor meninggalkan textfield
    }).blur(function (){
       if($(this).val()===''){
           $(this).attr('value',namaDefault);
       } 
    });
});
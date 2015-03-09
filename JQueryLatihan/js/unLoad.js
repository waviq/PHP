$(window).on("click", function  (){
    var c = confirm('Yakin mau keluar ?');
    var txt;
    if(c){
        return true;
     }else{
         txt = 'kamu mencet batal';
    }
});
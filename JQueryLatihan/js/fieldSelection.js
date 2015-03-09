//focusin = fungsi ketika d kursor mouse d arahkan ke textfield
// atau selector lainya
//this = digunakan ketika yg sesuatu yg akan tuju baru akan jalan fungsinya
$(':text').focusin(function (){
    $(this).css('background-color','yellow');
});

$(':text').blur(function (){
   $(':text').css('background-color','white');
});

$(':button').click(function (){
   $(this).attr('value','tunggu sebentar');
   $(this).attr('disabled', true);
});


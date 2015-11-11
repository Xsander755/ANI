$(document).ready(function(){

    fn_Hidden_menu();

});

function fn_Hidden_menu(){
//$('#contentforstart div div:contains("Новости")').addClass('sp_hide');
$('#nav li ul:contains("История")').css('right', '-30px');
//$('.entry div div:contains("История")').addClass('sp_hide');
}
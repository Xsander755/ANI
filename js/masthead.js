$(document).ready(function() {
var start_pos=$('#masthead').offset().top;
 $(window).scroll(function(){
  if ($(window).scrollTop()>=start_pos) {
      if ($('#masthead').hasClass()==false)

if ($(window).width()<730){
$('#masthead').attr('style','position:fixed;top:0px;');}
else
{$('#masthead').attr('style','position:fixed;top:0px;')}
  }
  else $('#masthead').removeAttr('style');
 });
});

jQuery(document).ready(function() {
	jQuery('span#cyt').click( function(){
var valu=jQuery(this).text();
jQuery.removeCookie('gorodok');
jQuery.cookie('gorodok', ''+valu+'',{ expires: 7, path: '/' });
location.reload();
	});
});
jQuery.noConflict();
jQuery(document).ready(function(){
     setTimeout(function() {
     jQuery('#fancy_close').click(function(){
         location.reload();
        });
        }, 0);
});
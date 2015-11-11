
<?php 
	$in5 = in_category(5);
	$in4 = in_category(4);
	if (is_front_page() or  $in4 or $in5) { ?>
		<div id="footer">
	<?php } else { ?>
		<div id="footer2">
	<?php } 
?>


<div class="fcred">
<?php wp_nav_menu(array(
  'menu' => 'fota', // название меню
  'container' => 'navic', // контейнер для меню, по умолчанию 'div', в нашем случае ставим 'nav', пустая строка - нет контейнера
  'container_class' => '', // класс для контейнера
  'container_id' => 'nav-wrapi', // id для контейнера
  'menu_class' => '', // класс для меню
  'menu_id' => '0', // id для меню
)); ?>
<span class="soc_b">
<a target=_blank href="https://www.facebook.com/relottirussia"><img src="/wp-content/themes/Kapitan/images/fb.png"></a>
<a target=_blank href="http://vk.com/relottirussia"><img src="/wp-content/themes/Kapitan/images/vk.png" style="margin-left:5px"></a>
<a target=_blank href="https://instagram.com/relotti_divani/"><img src="/wp-content/themes/Kapitan/images/ig.png" style="margin-left:5px"></a>
<a target=_blank href="https://plus.google.com/u/0/103483326125103908758"><img src="/wp-content/uploads/2015/09/icon.jpg" style="margin-left:5px"></a>
<a target=_blank href="http://www.youtube.com/channel/UCDvBtdxCLOCa2GxLWeyfHGQ"><img src="/wp-content/themes/Kapitan/images/Y.png" style="margin-left:5px"></a>
</span>
</div>	
<div class='clear'></div>
<div class="niz">	
<div align="center" class="niz_cop">&copy; Relotti 2015</div>
</div>
<?php wp_footer(); ?>

</div>
<div id="modal_form_2">
<span id="modal_close_2">X</span> <!-- Кнопка закрыть --> 
<?php $count = 0;?>
<?php query_posts('category_name=city&orderby=title&order=ASC&posts_per_page=300'); ?>
<?php while (have_posts()) : the_post(); ?>
<div class="box<?php if( $count%3 == 0 ) { echo '-1'; }; $count++; ?>">
<a href="">
<span id="cyt" value="<?php the_title(); ?>"><?php the_title(); ?></span>
</a>
</div>
<?php endwhile; ?>

<?php wp_reset_query();?>     
</div>
<div id="overlay"></div><link rel="stylesheet" type="text/css" href="/wp-content/fancybox/jquery.fancybox.css" media="screen" />

	


				
												
	<!--<script type="text/javascript" src="/wp-content/fancybox/jquery.easing.1.3.js"></script>-->
	<script type="text/javascript" src="/wp-content/fancybox/jquery.fancybox-1.2.1.pack.js"></script>
<script type="text/javascript">
jQuery(document).ready(function() {
    jQuery("a.fancy").fancybox();
});
</script>



<script type='text/javascript' src='http://test.relotti.ru/wp-content/themes/Kapitan/js/masthead.js'></script>
<script type='text/javascript' src='http://test.relotti.ru/wp-content/themes/Kapitan/js/modal.js'></script>
<script type='text/javascript' src='http://test.relotti.ru/wp-content/themes/Kapitan/js/modal2.js'></script>
<script type='text/javascript' src='http://test.relotti.ru/wp-content/themes/Kapitan/js/jquery.cookie.js'></script>
<script type='text/javascript' src='http://test.relotti.ru/wp-content/themes/Kapitan/js/cook.js'></script>
<script type='text/javascript' src='http://test.relotti.ru/wp-content/themes/Kapitan/js/mains_fn.js'></script>


<a id="toTop" href="#"><img src="/wp-content/uploads/2015/08/downarrow.png" align="absmiddle" border="0"/></a>
<script type="text/javascript" src="http://test.relotti.ru/wp-content/themes/Kapitan/js/verx.js"></script><script type="text/javascript">// <![CDATA[
$(function() {
$("#toTop").scrollToTop();
});
// ]]></script>

</body>

</html>      
		



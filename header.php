<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>



<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
 <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/supersized.css" media="screen" />

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>


<link href='http://fonts.googleapis.com/css?family=EB+Garamond&subset=cyrillic,latin' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css"  media="print" href="/wp-content/themes/Kapitan/print.css" />
<script type="text/javascript">
jQuery(document).ready(function($){

	/* Подготавливаем иконку меню */
	$('#nav-wrap').prepend('<div id="menu-icon">Меню</div>');

	/* Переключаем навигацию */
	$("#menu-icon").on("click", function(){
		$("#nav").slideToggle();
		$(this).toggleClass("active");
	});
     //$('#contentforstart div div:contains("Новости")').addClass('sp_hide');
               // $('#nav li ul:contains("История")').css('right', '-30px');

});
</script>

<script  type='text/javascript' src='http://relotti.ru/wp-content/themes/Kapitan/js/jquery.liTranslit.js'></script>
<script type='text/javascript'>
jQuery(document).ready(function(){
var gor = jQuery('#gorod').text();
var translit = $.fn.liTranslit({string: [gor]}).text();
jQuery('li a:contains(Магазины)').attr('href', '/'+translit+'');
jQuery('.magaz').attr('href', '/'+translit+'');
jQuery('#pr').attr('href', '/'+translit+'');
});
</script>
<?php wp_head(); ?>
</head>
<!--    <div class="sm"><img src="/wp-content/uploads/2015/09/fon_print.jpg" alt=""></div> -->
<?php if ( in_category( array('classical','sametime') )) {?>
<?php $image = get_post_meta($post->ID, 'fon_big', $single = true); ?>
<body style="background:url('<?php echo $image;?>') top center no-repeat;overflow-x:hidden; background-size: 2200px 1027px;">
<?php } else {?>

<body>
<?php }?>

<?php
include('geo.php');
$geo = new Geo();
$city = $geo->get_value('city', true);
$query = "SELECT post_title FROM wp_posts WHERE post_title = '$city'";
$result = $wpdb->get_var($query);
if(empty($result)){$city="Москва";}
if(isset ($_COOKIE['gorodok'])){$gorod=$_COOKIE['gorodok'];}
else{$gorod="$city";}
?>

<?php if ( in_category( array('classical','sametime') )) {?>
<div class="head_gorod">
<span align="left" class="choise_gorod">Ваш город: <a id="gorod" class="go2" style="color:red;text-decoration:underline;" href="#"><?php echo $gorod;?></a></span>
<!--<span align="left" class="choise_lang">RU  <a target=_blank style="color:red;margin-left:10px;" href="http://relotti.com">EN</a>  <a target=_blank style="color:red;margin-left:10px;" href="http://relotti.it">IT</a></span>-->
</div>
<div class="tel_white">
            <p class="tel_white_big">8 (800) 505 83 74</p>
	<p class="tel_white_small">Бесплатно по России</p>
</div>
<div id="masthead"><!-- masthead begin -->
<?php } else {?>
<div class="head_gorod">
<span align="left" class="choise_gorod2">Ваш город: <a id="gorod" class="go2" style="color:red;text-decoration:underline;" href="#"><?php echo $gorod;?></a></span>
<!--<span align="left" style="text-align:center;font-size: 16px; color: white;margin-left:20px;background:#000;padding:5px 15px 5px 15px;border:0px;border-radius:5px;font-weight:bold;">RU  <a target=_blank style="color:red;margin-left:10px;" href="http://relotti.com">EN</a>  <a target=_blank style="color:red;margin-left:10px;" href="http://relotti.it">IT</a></span>-->
</div>
<div class="tel_white">
            <p class="tel_black_big">8 (800) 505 83 74</p>
	<p class="tel_black_small">Бесплатно по России</p>
</div>
<div id="masthead2"><!-- masthead begin -->
<?php }?>




	<div id="top">
		<h1 class="logo"><a href="<?php bloginfo('siteurl');?>/" title="<?php bloginfo('name');?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png"/></a></h1>

	</div>

	<div id="botmenu">

<?php wp_nav_menu(array(
  'menu' => 'nav', // название меню
  'container' => 'nav', // контейнер для меню, по умолчанию 'div', в нашем случае ставим 'nav', пустая строка - нет контейнера
  'container_class' => '', // класс для контейнера
  'container_id' => 'nav-wrap', // id для контейнера
  'menu_class' => '', // класс для меню
  'menu_id' => '', // id для меню
));
?>

	</div><div class="strana"><span align="right" class="choise_lang_2">RU  <a target=_blank style="color:red;margin-left:10px;" href="http://relotti.com">EN</a>  <a target=_blank style="color:red;margin-left:10px;" href="http://relotti.it">IT</a></span></div>

</div><!--end masthead-->





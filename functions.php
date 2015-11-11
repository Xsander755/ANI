<?php

include 'theme_options.php';
include 'guide.php';
include 'slider.php';
include 'metabox.php';


add_filter('single_template', create_function('$t', 'foreach( (array) get_the_category() as $cat ) { if ( file_exists(TEMPLATEPATH . "/single-{$cat->term_id}.php") ) return TEMPLATEPATH . "/single-{$cat->term_id}.php"; } return $t;' ));


/* SIDEBARS */
if ( function_exists('register_sidebar') )

	register_sidebar(array(
	'name' => 'Sidebar',
    'before_widget' => '<li class="sidebox %2$s">',
    'after_widget' => '</li>',
	'before_title' => '<h3 class="sidetitl">',
    'after_title' => '</h3>',
	
    ));


	
	
	
/* CUSTOM MENUS */	

register_nav_menus( array(
		'primary' => __( 'Primary Navigation', '' ),
	) );

function fallbackmenu(){ ?>
			<div id="submenu">
				<ul><li> Меню будет выводиться тут</li></ul>
			</div>
<?php }	


/* CUSTOM EXCERPTS */

function GetArrayS ($array, $strnum){
                if ($strnum == 0) return;
                $count = ceil(count($array)/$strnum);
                $num = 0;
               
                foreach($array as $k => $v){
                        if ($num == $count) $num = 0;
                                $arr[$num][$k] = $v;
                        $num++;
                }
                return $arr;
}

	
	
function wpe_excerptlength_index($length) {
    return 30;
}



function wpe_excerpt($length_callback='', $more_callback='') {
    global $post;
    if(function_exists($length_callback)){
        add_filter('excerpt_length', $length_callback);
    }
    if(function_exists($more_callback)){
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>'.$output.'</p>';
    echo $output;
}

function new_excerpt_more($more) {
return '<a style="color:red;" class="rmore" href="'. get_permalink($post->ID) . '">' . '&nbsp;&nbsp; Подробнее ...' . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');


function add_rel_to_gallery($link) {
$link = str_replace("'><img", "' class=\"fancy\" rel=\"group1\" ><img", $link);
return $link;
}


/* SHORT TITLES */

function short_title($after = '', $length) {
   $mytitle = explode(' ', get_the_title(), $length);
   if (count($mytitle)>=$length) {
       array_pop($mytitle);
       $mytitle = implode(" ",$mytitle). $after;
   } else {
       $mytitle = implode(" ",$mytitle);
   }
       return $mytitle;
}


/* FEATURED THUMBNAILS */

if ( function_exists( 'add_theme_support' ) ) { // Added in 2.9
	add_theme_support( 'post-thumbnails' );


}

/* GET THUMBNAIL URL */

function get_image_url(){
	$image_id = get_post_thumbnail_id();
	$image_url = wp_get_attachment_image_src($image_id,'large');
	$image_url = $image_url[0];
	echo $image_url;
	}	



/* PAGE NAVIGATION */


function getpagenavi(){
?>
<div id="tnavigation">
<?php if(function_exists('wp_pagenavi')) : ?>
<?php wp_pagenavi() ?>
<?php else : ?>
        <div class="alignleft"><?php next_posts_link(__('&laquo; Older Entries','arclite')) ?></div>
        <div class="alignright"><?php previous_posts_link(__('Newer Entries &raquo;','arclite')) ?></div>
        <div class="clear"></div>
<?php endif; ?>

</div>

<?php
}

function remove_menus(){
  remove_menu_page( 'themes.php?page=user_guide' );
}
add_action( 'admin_menu', 'remove_menus' );

function format_shop_record( $content ) {
	$content = preg_replace('/\[shop\]/', '<table class="shop-record"><tr><td class="small-r"></td><td class="shop-record"><p>', $content);
	$content = preg_replace('/\[\/shop\]/', '</td></tr></table>', $content);
	$content = preg_replace('/\<p\>\<table\>/', '<table>', $content);
	$content = preg_replace('/\<\/table\>\<\/p\>/', '</table>', $content);
	$content = preg_replace('/\<br \/\>\n\<\/td\>/', '</p></td>', $content);
	$content = preg_replace('/\<br \/\>\n/', "</p>\n<p>", $content);
	$content = preg_replace('/\<p\>\n/', "<p>", $content);
	return $content;
}
?>

<?php
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );
add_filter( 'the_content', 'format_shop_record', 100 );
function remove_width_attribute( $html ) {
$html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
return $html;
}

?>

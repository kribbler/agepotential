<?php 
/* Plugin Name: WP RoundAbout Pro
Plugin URI:http://roundabout.phploaded.com/
Description: Create awesome 3D rotating or flying slides with this plugin.
Author: Satish Kumar Sharma
Version: 4.1
Author URI: http://phploaded.com/index.php?user=23
*/
//error_reporting(E_ERROR | E_WARNING | E_PARSE);

define('RBTPATH', dirname(__FILE__).'/');
define('RBTURL', plugins_url( '/', __FILE__ ));

function include_wprbtsetting_page(){
  global $wpdb;
  if(isset($_GET['edit'])){
    include('rbt-manage.php');
  } elseif(isset($_GET['options'])){
    include('rbt-options.php');
  } else {
    include('rbt-settings.php');
  }
}

function get_image_thumb($thumb, $query){
  $path_parts = pathinfo($thumb);
  $thumb2 = $path_parts['filename'].'.'.$path_parts['extension'];
  $domain = plugins_url( '', __FILE__ );
  $cmt = $path_parts['dirname'];
  $query2=str_replace('|', '-pipe-', $query);
  if(file_exists(RBTPATH.'cache/'.$query2.'___'.$thumb2)){
    return $domain.'/cache/'.$query2.'___'.$thumb2;
  } else {
  $get_file1 = file_get_contents($domain.'/rbt-timthumb.php?src='.urlencode($thumb).'&'.$query);
$new_file1 = fopen(RBTPATH.'cache/'.$query2.'___'.$thumb2, "w");
fwrite($new_file1, $get_file1);
fclose($new_file1);
return $domain.'/cache/'.$query2.'___'.$thumb2;
}}

function wprbt_admin_actions() {  
add_menu_page('RoundAbout Pro', 'RoundAbout Pro',0,'rbt-settings.php', 'include_wprbtsetting_page',plugins_url( 'icon.png', __FILE__ ),480); 
}  

add_action('admin_menu', 'wprbt_admin_actions');


function init_wprbt_admin() {
wp_enqueue_script( 'jquery' );
wp_register_script( 'wprbtajs', plugins_url( 'js/admin.js', __FILE__ ));
wp_enqueue_script( 'wprbtajs' );
wp_register_style( 'wprbtacss', plugins_url( 'css/admin.css', __FILE__ ));
wp_enqueue_style( 'wprbtacss' );
wp_enqueue_script('thickbox');  
wp_enqueue_style('thickbox'); 
wp_enqueue_script('word-count');
wp_enqueue_script('post');
wp_enqueue_script('editor');
wp_enqueue_script('media-upload');
wp_enqueue_style( 'farbtastic' );
wp_enqueue_script( 'farbtastic' );
}

function init_wprbt_plugin() {
wp_enqueue_script( 'jquery' );
  
wp_register_script( 'roundjs', plugins_url( 'js/round/jquery.roundabout.min.js', __FILE__ ));
wp_enqueue_script( 'roundjs' );
wp_register_script( 'shapejs', plugins_url( 'js/shape/jquery.roundabout-shapes-s11.min.js', __FILE__ ));
wp_enqueue_script( 'shapejs' );
wp_register_script( 'rbtjs', plugins_url( 'js/js.js', __FILE__ ));
wp_enqueue_script( 'rbtjs' );
wp_register_script( 'jqeasing', plugins_url( 'js/jquery.easing.1.3.js', __FILE__ ));
wp_enqueue_script( 'jqeasing' );
wp_register_script( 'jqdrag', plugins_url( 'js/jquery.event.drag-2.2/jquery.event.drag-2.2.js', __FILE__ ));
wp_enqueue_script( 'jqdrag' );
wp_register_script( 'jqdrop', plugins_url( 'js/jquery.event.drop-2.2/jquery.event.drop-2.2.js', __FILE__ ));
wp_enqueue_script( 'jqdrop' );
wp_register_style( 'rbtcss', plugins_url( 'css/style.css', __FILE__ ));
wp_enqueue_style( 'rbtcss' );

}

function wprbt_install(){

global $wpdb;

$wpdb->query("CREATE TABLE IF NOT EXISTS `".$wpdb->prefix."rbt_sliders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(5000) NOT NULL,
  `date` varchar(5000) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `type` varchar(5000) NOT NULL,
  `opt1` varchar(50) NOT NULL,
  `opt2` varchar(50) NOT NULL,
  `opt3` varchar(50) NOT NULL,
  `opt4` varchar(50) NOT NULL,
  `opt5` varchar(50) NOT NULL,
  `opt6` varchar(50) NOT NULL,
  `opt7` varchar(50) NOT NULL,
  `opt8` varchar(50) NOT NULL,
  `opt9` varchar(50) NOT NULL,
  `opt10` varchar(50) NOT NULL,
  `opt11` varchar(50) NOT NULL,
  `opt12` varchar(50) NOT NULL,
  `opt13` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1");

$wpdb->query("CREATE TABLE IF NOT EXISTS `".$wpdb->prefix."rbt_slides` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sliderid` varchar(5000) NOT NULL,
  `date` varchar(5000) NOT NULL,
  `title` varchar(5000) NOT NULL,
  `desc` varchar(5000) NOT NULL,
  `url` varchar(5000) NOT NULL,
  `color` varchar(5000) NOT NULL,
  `text_position` varchar(250) NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1");

}

function wprbt_shortcode($atts){
global $wpdb;

extract(shortcode_atts(array(
"slider_id" => 'slider_id',
"animation" => 'animation'
), $atts));

$data = $wpdb->get_results("SELECT * FROM `".$wpdb->prefix."rbt_sliders` WHERE `id`='$slider_id'", ARRAY_A);

$res = $wpdb->get_results("SELECT * FROM `".$wpdb->prefix."rbt_slides` WHERE `sliderid`='$slider_id'", ARRAY_A);
$data = $data[0];
if($data['type']=='Simple Roundabout 3D slider'){
include('front/simple.php');
}

if($data['type']=='Facade Slideshow'){
include('front/facade.php');
}

return $out;
}

function render_wprbt($sid, $anim = 'lazySusan'){
return do_shortcode('[wprbt  animation="'.$anim.'" slider_id="'.$sid.'"]');
}


function footer_linking_data(){
global $wpdb;
$settingsxx=$wpdb->get_results("SELECT * FROM `wp_roundabout_settings`limit 1", ARRAY_A);

}

add_action('wp_footer', 'footer_linking_data',1);

add_action('admin_print_scripts', 'init_wprbt_admin');

add_action('wp_enqueue_scripts', 'init_wprbt_plugin');

register_activation_hook(__FILE__,'wprbt_install'); 

add_shortcode("wprbt", "wprbt_shortcode");
?>


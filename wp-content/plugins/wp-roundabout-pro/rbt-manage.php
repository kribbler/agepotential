<?php
global $wpdb;
$query = "SELECT * FROM `".$wpdb->prefix."rbt_sliders` WHERE `id`='$_GET[edit]'";

$slider = $wpdb->get_results($query, ARRAY_A);
$slider = $slider[0];
if($slider[type]=='Simple Roundabout 3D slider'){
include('admin/simple.php');
}

if($slider[type]=='Facade Slideshow'){
include('admin/facade.php');
}

?>
<?php

$anims = array('lazySusan', 'waterWheel', 'figure8', 'square', 'conveyorBeltLeft', 'conveyorBeltRight', 'diagonalRingLeft', 'diagonalRingRight', 'rollerCoaster', 'tearDrop', 'theJuggler', 'goodbyeCruelWorld');

if(!in_array($animation, $anims)){
$animation='tearDrop';
$asclass = '';
} else {
$asclass = 'class="hideflow"';
}

$sid = 'rbt-'.uniqid();
$out = '<ul '.$asclass.' id="'.$sid.'">';

$fwidth = intval($data[opt1]);
$fheight = intval($data[opt2]);
var_dump($res);
foreach($res as $row){
if($row[url]!='' && trim($row[url])!=' '){
$img = '<img src="'.get_image_thumb($row[url], 'w='.$fwidth.'&h='.$fheight).'" />';
} else {
$img = '';
}
var_dump($img);

if ($row[text_position] == 'bottom'){
	$ttlxz = '<div class="slider_text_bottom">';
} else if ($row[text_position] == 'top'){
	$ttlxz = '<div class="slider_text_top">';
} else if ($row[text_position] == 'left'){
	$ttlxz = '<div class="slider_text_left">';
} else if ($row[text_position] == 'right'){
	$ttlxz = '<div class="slider_text_right">';
} else {
	$ttlxz = '<div class="slider_text_bottom">';
}
if($row[title]!='' && trim($row[title])!=' '){
$ttlxz.='<div><span class="rbt-title"><span>'.$row[title].'</span></span>';
} else {
$ttlxz.='';
}


if($row[desc]!='' && trim($row[desc])!=' '){
$descxz='<span class="rbt-content"><span>'.html_entity_decode($row[desc]).'</span></span>';
} else {
$descxz='';
}
$descxz .= "</div></div>";
$out = $out.'<li style="background-color:'.$row[color].'">'.$ttlxz.''.$descxz.''.$img.'</li>';
}

$out = $out.'</ul>
<style type="text/css">
#'.$sid.' {
list-style: none;
padding: 0;
margin: 0 auto;
width: '.$data[opt5].'px;
height: '.$data[opt6].'px;
}

#'.$sid.' .roundabout-moveable-item {
height: '.$fheight.'px;
width: '.$fwidth.'px;
background-color: '.$data[opt4].';
text-align: left;
cursor: pointer;
overflow:hidden;
}
</style>
<script>
jQuery(document).ready(function() {
jQuery("#'.$sid.'").roundabout({
autoplay: '.$data[opt7].',
autoplayDuration: '.$data[opt9].'000,
minOpacity: '.$data[opt10].',
maxOpacity: '.$data[opt11].',
reflect: '.$data[opt12].',
enableDrag: '.$data[opt13].',
dragAxis:"'.$data[opt3].'",
shape: "'.$animation.'",
autoplayPauseOnHover: '.$data[opt8].'
});
});
</script>
';

?>
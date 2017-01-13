<?php

$sid = 'rbt-'.uniqid();
$out = '<div class="facade" id="'.$sid.'"><div class="interact">
<a id="unadvance" href="javascript:void(0)">&lt;&lt;</a>
<a id="advance" href="javascript:void(0)">&gt;&gt;</a>
</div>';
$out2 = '';

$fwidth = intval(1.4*$data[opt1]);
$fheight = intval(1.2*$data[opt2]);

$colwidth = ($data[opt1]/4);

foreach($res as $row){
if($row[url]!='' && trim($row[url])!=' '){
$img = '<img src="'.get_image_thumb($row[url], 'w='.$data[opt1].'&h='.$data[opt2]).'" />';
} else {
$img = '';
}
$out2 = $out2.'<li>'.$img.'</li>';
}

$out = $out.'<ul class="column1">'.$out2.'</ul>
<ul class="column2">'.$out2.'</ul>
<ul class="column3">'.$out2.'</ul>
<ul class="column4">'.$out2.'</ul>';

$out = $out.'</div>
<style type="text/css">
#'.$sid.'.facade {
width: '.($data[opt1]-5).'px;
height: '.($data[opt2]-2).'px;
overflow: hidden;
margin: 0 auto;
position: relative;
border: '.$data[opt3].'px solid '.$data[opt4].';
}

.facade img{
max-width:none !important;
}

#'.$sid.' ul { 
list-style: none; 
margin: 0; 
padding: 0; 
width: '.$colwidth.'px; 
height: '.$data[opt2].'px; 
position: absolute; 
overflow: hidden; 
top: 0px; 
z-index: 100;
background: '.$data[opt5].';
}

#'.$sid.' .interact{
position:relative;
z-index:999;
width:'.$data[opt1].'px;
padding-top:'.($data[opt2]/2-22).'px;
}

#'.$sid.' ul.column1 { left: 0px; }
#'.$sid.' ul.column2 { left: '.($colwidth-1).'px; }
#'.$sid.' ul.column3 { left: '.($colwidth*2-2).'px; }
#'.$sid.' ul.column4 { left: '.($colwidth*3-3).'px; }

#'.$sid.' ul li { overflow: hidden; height: '.$data[opt2].'px; width: '.$colwidth.'px; margin:0;  }
#'.$sid.' ul li img { position: absolute; top: 0; }
#'.$sid.' ul.column1 img { left: 0px; }
#'.$sid.' ul.column2 img { left: -'.$colwidth.'px; }
#'.$sid.' ul.column3 img { left: -'.($colwidth*2).'px; }
#'.$sid.' ul.column4 img { left: -'.($colwidth*3).'px; }
</style>
<script>
jQuery(document).ready(function($) {

var i = 0,
settings = [
{ duration: 1200, easing: "easeOutBounce" },
{ duration: 1600, easing: "easeOutElastic" },
{ duration: 600, easing: "easeOutQuad" },
{ duration: 1000, easing: "easeOutBack" }
];

$("#'.$sid.' ul.column1, #'.$sid.' ul.column3").roundabout({
clickToFocus: false,
minOpacity: 0,
minScale: 0,
minZ: 0,
duration: 1500,
shape: "rollerCoaster"
});

$("#'.$sid.' ul.column2, #'.$sid.' ul.column4").roundabout({
clickToFocus: false,
minOpacity: 0,
minScale: 0,
minZ: 0,
reflect: true,
duration: 1500,
shape: "rollerCoaster"
});

$("#advance").click(function() {
if ($("#'.$sid.' .column1").data("roundabout").animating || $("#'.$sid.' .column4").data("roundabout").animating) {
return false;
}

i++;
i = i++ % settings.length;

// fade out link
$(this).fadeTo(400, 0.5);

$("#'.$sid.' .column1").roundabout("animateToNextChild", settings[i].duration, settings[i].easing);
setTimeout(function() { $("#'.$sid.' .column2").roundabout("animateToNextChild", settings[i].duration + 100, settings[i].easing); }, 100);
setTimeout(function() { $("#'.$sid.' .column3").roundabout("animateToNextChild", settings[i].duration + 200, settings[i].easing); }, 200);
setTimeout(function() { $("#'.$sid.' .column4").roundabout("animateToNextChild", settings[i].duration + 250, settings[i].easing, function() { $("#advance").fadeTo(400, 1); }); }, 300);

return false;
});




$("#unadvance").click(function() {
if ($("#'.$sid.' .column1").data("roundabout").animating || $("#'.$sid.' .column4").data("roundabout").animating) {
return false;
}

i++;
i = i++ % settings.length;

// fade out link
$(this).fadeTo(400, 0.5);

$("#'.$sid.' .column1").roundabout("animateToPreviousChild", settings[i].duration, settings[i].easing);
setTimeout(function() { $("#'.$sid.' .column2").roundabout("animateToPreviousChild", settings[i].duration + 100, settings[i].easing); }, 100);
setTimeout(function() { $("#'.$sid.' .column3").roundabout("animateToPreviousChild", settings[i].duration + 200, settings[i].easing); }, 200);
setTimeout(function() { $("#'.$sid.' .column4").roundabout("animateToPreviousChild", settings[i].duration + 250, settings[i].easing, function() { $("#unadvance").fadeTo(400, 1); }); }, 300);

return false;
});

});
</script>';

?>
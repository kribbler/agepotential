var switchTo5x=true;
jQuery(document).ready(function() {

jQuery('#upload_image').after('<div title="Clear Image" class="img-unselect"></div>');
jQuery('.img-unselect').live('click', function(){
jQuery('#upload_image').attr('value','');
});

jQuery('.color-picker').each(function(){
if(jQuery(this).val()=='' || jQuery(this).val()==' '){
jQuery(this).attr('value', '#eeeeee');
}
});

jQuery('#color_picker_color1, #color_picker_color2, #color_picker_color3, #color_picker_color4, #color_picker_color5, #color_picker_color6').hide();



jQuery(".color-picker").live('focus blur', function(){
var xid = jQuery(this).attr('id');
var idnum = xid.replace('color', '');
jQuery('#color_picker_color'+idnum).slideToggle();
});


/*
jQuery('#upload_image').click(function() {
formfield = jQuery('#upload_image').attr('name');
tb_show('', 'media-upload.php?type=image&TB_iframe=true');
return false;
});

window.send_to_editor = function(html) {
imgurl = jQuery('img',html).attr('src');
jQuery('#upload_image').val(imgurl);
tb_remove();
}
*/
});

function post_chk(){
document.bbb.submit();
}

function del_rbts(sid){
if(confirm("This action will delete this slider including its settings and contents. Are you sure?")){
document.location.href='admin.php?page=rbt-settings.php&delete='+sid;
}
}

function del_slide(sid, xid){
if(confirm("This action will delete this slide. Are you sure?")){
document.location.href='admin.php?page=rbt-settings.php&edit='+xid+'&del='+sid;
}
}

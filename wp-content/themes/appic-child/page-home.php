<?php
/*
 * Template Name: Home Page Child
 */

// hiding breadcrumbs for this template
ThemeFlags::set('hide_breadcrumbs', true);

get_header();
?>

<div class="white-wrap container page-content" style="display: none">
	<?php if (have_posts()): ?>
		<?php while(have_posts()) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
	<?php endif; ?>
</div>

<div id="home_block1" class="greener margin_40">
	<div class="container">
		<?php
			if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') 
				echo do_shortcode('[content_block id=96 ]');
			else 
				echo do_shortcode('[content_block id=1729 ]'); 
		?>
	</div>
</div>

<div class="clearfix"></div>

<div id="home_block2" class="greenish margin_40">
	<div class="container">
		<?php
			if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') 
				echo do_shortcode('[content_block id=98 ]');
			else 
				echo do_shortcode('[content_block id=1731 ]'); 
		?>
	</div>
</div>

<div class="clearfix"></div>

<div id="home_block3" class="whiteish margin_40">
	<div class="container">
		<?php
			if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') 
				echo do_shortcode('[content_block id=100 ]');
			else 
				echo do_shortcode('[content_block id=1733 ]'); 
		?>
	</div>
</div>

<div class="clearfix"></div>

<div id="home_block4" class="whiteish margin_40">
	<div class="container">
		<?php
			if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') 
				echo do_shortcode('[content_block id=105 ]');
			else 
				echo do_shortcode('[content_block id=1735 ]'); 
		?>
	</div>
</div>

<div class="clearfix"></div>

<div id="home_block5" class="whiteish margin_40">
	<div class="container">
		<?php
			if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') 
				echo do_shortcode('[content_block id=108 ]');
			else 
				echo do_shortcode('[content_block id=1737 ]'); 
		?>
	</div>
</div>

<div class="clearfix"></div>


<script type="text/javascript">
/*
	jQuery(document).ready(function($){
		$("#watch_the_video").hover(function () {
		    var src = $(this).prop('src');
		    src = src.replace("video1", "video2");
		    $(this).attr("src", src);
		}, function(){
		    var src = $(this).prop('src');
		    src = src.replace("video2", "video1");
		    $(this).attr("src", src);
		});
	});
*/	
</script>

<?php get_footer(); ?>
<div id="slides">
	<?php
	$dir = 'data/uploads/slides/'.get_page_slug(false).'/';
	$files = glob(preg_replace('/(\*|\?|\[)/', '[$1]', $dir).'*.jpg');
	foreach ($files as $filename) { ?>
	    <div class="slide" style="background-image: url(<?php echo get_site_url(false).$filename; ?>); background-size: cover; background-position: center;">&nbsp;</div>
	<?php } ?>
</div>
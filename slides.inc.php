<div class="slidesholder">
    <div class="slides cycle-slideshow"
         data-cycle-fx="carousel"
         data-cycle-timeout="1000"
         data-cycle-speed="5000"
         data-cycle-carousel-visible="3.52"
         data-cycle-carousel-fluid="false">
        <?php
        //	$dir = 'data/uploads/slides/'.get_page_slug(false).'/';
        $dir = 'data/uploads/slides/';
        $files = glob(preg_replace('/(\*|\?|\[)/', '[$1]', $dir) . '*.jpg');
        foreach ($files as $filename) {
            ?>
            <img src="<?php echo get_site_url(false) . $filename; ?>" alt="slide" class="slide"/>
        <?php } ?>
    </div>
</div>
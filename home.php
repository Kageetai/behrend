<?php if (!defined('IN_GS')) {
    die('you cannot load this page directly.');
} ?>

<!DOCTYPE html>
<!--[if IE 8]>
<html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->

<head>
    <title><?php get_site_name(); ?> - <?php get_page_clean_title(); ?></title>
    <?php get_header(); ?>
    <meta name="robots" content="index, follow"/>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width"/>
    <link href="<?php get_theme_url(); ?>/css/app.css" media="screen, projector, print" rel="stylesheet"
          type="text/css"/>
    <script src="<?php get_theme_url(); ?>/js/vendor/custom.modernizr.js"></script>

</head>
<body id="<?php get_page_slug(); ?>">

<div id="wrapper">

    <section class="header index">
        <div class="logoblock">
            <h1 class="logo">Zahnarztpraxis Wolfgang Behrend</h1>
        </div>

        <ul class="navcolumn">
            <?php get_navigation(true); ?>
        </ul>
    </section>

    <section class="mainrow">
        <div class="addresscolumn">
            <div class="address">
                <?php get_component('address1'); ?>
            </div>
        </div>
        <div class="addresscolumn">
            <div class="address">
                <?php get_component('address2'); ?>
            </div>
        </div>
    </section>

    <section class="mainrow">
        <div class='gallerycolumn'>
            <?php include('slides.inc.php'); ?>
        </div>
    </section>

    <section class="mainrow">
        <div class="contactcolumn">
            <div class="openingtimes">
                <?php get_component('sprechzeiten'); ?>
            </div>
            <div class="contact">
                <?php get_component('contact'); ?>
            </div>
        </div>
        <div class="contentcolumn">
            <div class="content">
                <?php get_page_content(); ?>
            </div>
        </div>
    </section>

    <section class="footer">
        <div class="webmaster">Webmaster <a href="http://Kageetai.net">Kageetai.net</a></div>
    </section>
</div>

<?php get_footer(); ?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!--<script src="--><?php //get_theme_url(); ?><!--/js/jquery-1.9.1.min.js"></script>-->
<script src="<?php get_theme_url(); ?>/js/foundation/foundation.js"></script>
<script src="<?php get_theme_url(); ?>/js/jquery.cycle.lite.js" type="text/javascript" charset="utf-8"></script>
<script>
    $(function () {
        $(".navcolumn").hide();
        $(".address").click(function () {
            var url = "/team";
            var duration = 1000;

            $(".addresscolumn").remove();
            $(".header").removeClass("index");

            $(".logoblock").animate({
                marginLeft: '0',
                marginRight: '0'
            }, duration, function() {
//                window.location.href = url;
            });
            $(".navcolumn").show().children().animate({
                width: '24.4%'
            }, duration);

            // doesn't put this link in the browser history
//            $(location).attr('href', url);

            // simulate user clicking link
//            window.location.href = url;
        });
    });
</script>

</body>
</html>
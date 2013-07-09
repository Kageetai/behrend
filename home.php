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

    <div class="header index">
        <div class="logoblock">
            <h1 class="logo">Zahnarztpraxis Wolfgang Behrend</h1>
        </div>
    </div>

    <section class="content">
        <div class="contentrow">
            <div class="addressblock">
                <div class="address">
                    <?php get_component('adress1'); ?>
                </div>
            </div>
            <div class="addressblock">
                <div class="address">
                    <?php get_component('adress2'); ?>
                </div>
            </div>
            <div class='contentcolumn'>
                    <?php include('slides.inc.php'); ?>
            </div>
        </div>
    </section>

    <div class="footer">
        <div class="webmaster">Webmaster <a href="http://Kageetai.net">Kageetai.net</a></div>
    </div>
</div>

<?php get_footer(); ?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!--<script src="--><?php //get_theme_url(); ?><!--/js/jquery-1.9.1.min.js"></script>-->
<script src="<?php get_theme_url(); ?>/js/foundation/foundation.js"></script>
<!--<script src="js/foundation/foundation.alerts.js"></script>-->
<!--<script src="js/foundation/foundation.clearing.js"></script>-->
<!--<script src="js/foundation/foundation.cookie.js"></script>-->
<!--<script src="js/foundation/foundation.dropdown.js"></script>-->
<!--<script src="js/foundation/foundation.forms.js"></script>-->
<!--<script src="js/foundation/foundation.joyride.js"></script>-->
<!--<script src="js/foundation/foundation.magellan.js"></script>-->
<!--<script src="js/foundation/foundation.orbit.js"></script>-->
<!--<script src="js/foundation/foundation.placeholder.js"></script>-->
<!--<script src="js/foundation/foundation.reveal.js"></script>-->
<!--<script src="js/foundation/foundation.section.js"></script>-->
<!--<script src="js/foundation/foundation.tooltips.js"></script>-->
<!--<script src="js/foundation/foundation.topbar.js"></script>-->
<script src="<?php get_theme_url(); ?>/js/jquery.cycle.lite.js" type="text/javascript" charset="utf-8"></script>
<script>
    $(function () {
        $(".contentcolumn").hide();
//        $(".content").append("<div class='contentcolumn'><div class='gallery' ></div></div>");

        $(".address").click(function () {
            var url = "/team";
            var duration = 700;

            $(".addressblock").remove();
            $(".contentcolumn").show();

            $(".logoblock").animate({
                marginLeft: '0'
            }, duration, function() {
//                window.location.href = url;
            });

            // doesn't put this link in the browser history
//            $(location).attr('href', url);

            // simulate user clicking link
//            window.location.href = url;
        });
        $(".address").click();
    });
</script>

</body>
</html>
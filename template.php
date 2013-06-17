<?php
if (!defined('IN_GS')) {
    die('you cannot load this page directly.');
}
?>

<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
    <title><?php get_site_name(); ?> - <?php get_page_clean_title(); ?></title>
    <?php get_header(); ?>
    <meta name="robots" content="index, follow"/>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width"/>
    <link href="<?php get_theme_url(); ?>/css/app.css" media="screen, projector, print" rel="stylesheet" type="text/css"/>
    <script src="<?php get_theme_url(); ?>/js/vendor/custom.modernizr.js"></script>

</head>
<body id="<?php get_page_slug(); ?>">

<div id="header">
    <div class="headerbox">
        <a class="headertext" href="<?php get_site_url(); ?>">
            <p>Dietmar Overhage</p>

            <p class="subheader">Malermeisterbetrieb</p>
        </a>
        <div class="headerlogo"></div>
    </div>
</div>

<div id="wrapper">

    <div id="left">
        <ul id="nav">
            <li><a href="<?php get_site_url(); ?>">Start</a></li>
            <?php get_navigation(return_page_slug()); ?>
        </ul>
        <div class="address">
            <?php get_component("address"); ?>
        </div>
    </div>

    <section id="content">
        <article class="page-text">
            <?php get_page_content(); ?>
        </article>
    </section>

    <section id="right">
        <?php //get_component('slides'); ?>
        <?php include('slides.inc.php'); ?>
    </section>

    <!--	<div class="clear"></div>-->

    <?php get_footer(); ?>

</div>

<div class="footer">
    <div class="webmaster">Webmaster <a href="http://Kageetai.net">Kageetai.net</a></div>
</div>

<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
<script src="<?php get_theme_url(); ?>/js/jquery-1.9.1.min.js"></script>
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
    $(document).foundation();
//    $('.headerlogo').click(function() {
//        $('.headertext').toggleClass('clicked');
//        $('.headertext > p').fadeToggle();
    $('#slides').cycle({
        fit: 1,
        nowrap: 1,
        random: 1,
        speed: 5000,
        timeout: 5000
    });
</script>

</body>
</html>
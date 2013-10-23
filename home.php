<?php if (!defined('IN_GS')) {
    die('you cannot load this page directly.');
} ?>

<!DOCTYPE html>
<!--[if IE 8]>
<html class="no-js lt-ie9" lang="de"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="de"> <!--<![endif]-->

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
            <a href="<?php get_site_url(); ?>">
                <h1 class="logo">Zahnarztpraxis Wolfgang Behrend</h1>
            </a>
        </div>

        <ul class="navcolumn">
            <li><a href="team-moabit">Team</a></li><li><a href="praxis-moabit">Praxis</a></li><li><a href="leistungen-moabit">Leistungen</a></li><li><a href="anfahrt-moabit">Anfahrt</a></li>
        </ul>
    </section>

    <section class="mainrow addr">
        <div class="addresscolumn">
            <a class="address" href="<?php get_site_url(); ?>team-moabit">
                <?php get_component('address-moabit'); ?>
            </a>
        </div>
        <div class="addresscolumn">
            <a class="address" href="<?php get_site_url(); ?>team-wittstock">
                <?php get_component('address-wittstock'); ?>
            </a>
        </div>
    </section>

    <section class="mainrow sdl">
        <div class='gallerycolumn'>
            <?php include('slides.inc.php'); ?>
        </div>
    </section>

    <section class="mainrow cnt">
        <div class="contactcolumn">
            <div class="openingtimes">
                <?php get_component('sprechzeiten'); ?>
            </div>
            <div class="contact">
                <?php get_component('contact'); ?>
            </div>
        </div>
        <div class="contentcolumn">
            <!--            <div class="content">-->
            <?php //get_page_content(); ?>
            <!--            </div>-->
        </div>
    </section>

    <section class="footer">
        <!--        <div class="webmaster">Webmaster <a href="http://Kageetai.net">Kageetai.net</a></div>-->
    </section>
</div>

<?php get_footer(); ?>

<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
<script src="<?php get_theme_url(); ?>/js/jquery-1.9.1.min.js"></script>
<!--<script src="--><?php //get_theme_url(); ?><!--/js/foundation/foundation.js"></script>-->
<script>
    $(function () {
        $(".mainrow").hide();
        $(".mainrow.addr").show();
        $(".navcolumn").hide();
        $(".address").click(function (e) {
            e.preventDefault();
            var url = this.href;
            var duration = 1000;

            $(".mainrow.addr").remove();
            $(".header").removeClass("index");

            $(".logoblock").animate({
                marginLeft: '0',
                marginRight: '0'
            }, duration, function () {
                window.location.href = url;
            });

            $(".contentcolumn").load(url + " .content", function () {
                $(".sdl, .cnt").slideDown(duration);
            });

            $(".navcolumn").show().children().animate({
                width: '24.1%'
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
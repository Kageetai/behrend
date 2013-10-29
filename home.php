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

    <section class="header index row">
        <div class="large-4 columns" style="width: 300px; left: 50%; margin-left: -150px; float: left;">
            <div class="logo">
                <a href="<?php get_site_url(); ?>">
                    <h1>Zahnarztpraxis<br />Wolfgang Behrend</h1>
                </a>
            </div>
        </div>

        <div class="large-8 columns">
            <ul class="nav">
                <li><a href="team-">Team</a></li>
                <li><a href="praxis-">Praxis</a></li>
                <li><a href="leistungen-">Leistungen</a></li>
                <li><a href="anfahrt-">Anfahrt</a></li>
            </ul>
        </div>
    </section>

    <section class="row addr">
        <div class="small-12 large-6 columns">
            <a class="address" href="<?php get_site_url(); ?>team-moabit">
                <?php get_component('address-moabit'); ?>
            </a>
        </div>
        <div class="small-12 large-6 columns">
            <a class="address" href="<?php get_site_url(); ?>team-wittstock">
                <?php get_component('address-wittstock'); ?>
            </a>
        </div>
    </section>

    <section class="row galleryrow">
        <div class="small-12 columns">
            <?php include('slides.inc.php'); ?>
        </div>
    </section>

    <section class="row mainrow">
        <div class="large-8 push-4 columns">
            <div class="content">
                <?php get_page_content(); ?>
            </div>
        </div>

        <div class="large-4 pull-8 columns">
            <div class="openingtimes">
                <?php get_component('sprechzeiten'); ?>
            </div>
            <div class="contact">
                <?php get_component('contact'); ?>
            </div>
        </div>
    </section>

    <section class="footer row">
        <div class="small-12 columns">
            <div class="webmaster">Webmaster <a href="http://Kageetai.net">Kageetai.net</a></div>
        </div>
    </section>
</div>

<?php get_footer(); ?>

<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
<script src="<?php get_theme_url(); ?>/js/jquery-1.9.1.min.js"></script>
<script src="<?php get_theme_url(); ?>/js/foundation/foundation.js"></script>
<script src="<?php get_theme_url(); ?>/js/jquery.cycle2.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php get_theme_url(); ?>/js/jquery.cycle2.carousel.min.js" type="text/javascript" charset="utf-8"></script>
<script>
    $(function () {
        $(document).foundation();

        $("body").height($(window).height());
        //hide elements before the animation
        $(".nav").hide().children().css("width", "0");
        $(".galleryrow").hide();
        $(".mainrow").hide();

        $(".address").click(function (e) {
            //only do the animation of not on mobile
            if($(window).width() > 768) {
                e.preventDefault();
                var url = this.href;
                var location = url.split(/[\s-]+/).pop();
                var duration = 1000;

                $(".header").removeClass("index");
                $(".row.addr").remove();

                $(".logo h1").text("Zahnarztpraxis "+capitalise(location)+" Wolfgang Behrend")
                    .filter(function () {
                        return location == "wittstock";
                    })
                    .css("margin-bottom", "0.2em")
                    .css("line-height", "1.115em");

                $(".content").parent().load(url + " .content", function () {
                    $(".galleryrow").slideDown(duration);
                    $(".mainrow").slideDown(duration);
                });

                $(".logo").parent().removeClass("large-centered")
                    .animate({
//                    marginLeft: '0',
//                    marginRight: '0'
                    left: "0",
                    marginLeft: "0"
                }, duration/2, function () {
                    $(".nav").show().children().animate({
                        width: '23.5%'
                    }, duration/2)
                    .children().attr("href", function() {
                        return $(this).text().toLowerCase() + "-" + location;
                    });
//                    window.location.href = url;
                });
            }
        });
    });

    function capitalise(string)
    {
        return string.charAt(0).toUpperCase() + string.slice(1);
    }
</script>

</body>
</html>
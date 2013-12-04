<?php if (!defined('IN_GS')) {
    die('you cannot load this page directly.');
} ?>

<!DOCTYPE html>
<!--[if IE 8]>
<html class="no-js lt-ie9" lang="de"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="ru"> <!--<![endif]-->

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

    <section class="header row">
        <div class="large-8 push-4 columns">
            <a href="#" class="dropdown-nav-dropper hide-for-medium-up" data-dropdown="dropdown-nav">=</a>
            <ul id="dropdown-nav" class="nav f-dropdown hide-for-medium-up" data-dropdown-content>
                <?php go_child_menu(); ?>
            </ul>
            <ul class="nav hide-for-small">
                <?php go_child_menu(); ?>
            </ul>
        </div>

        <div class="large-4 pull-8 columns">
            <div class="logo">
                <a href="<?php get_site_url(); ?>">
                    <?php
                    $array = explode("-", get_parent(false));
                    $location = ucfirst($array[0]);
                    ?>
                    <h1>Zahnarztpraxis <?= $location ?><br />Wolfgang Behrend</h1>
                </a>
            </div>
        </div>
    </section>

    <section class="row hide-for-small galleryrow">
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
                <?php get_component('sprechzeiten-ru'); ?>
            </div>
            <div class="contact">
                <?php get_component('contact-ru'); ?>
            </div>
        </div>
    </section>

    <section class="footer row">
        <div class="small-12 columns"><div class="webmaster">Webmaster <a href="http://Kageetai.net">Kageetai.net</a></div></div>
    </section>
</div>

<?php get_footer(); ?>

<script src="<?php get_theme_url(); ?>/js/jquery-1.9.1.min.js"></script>
<script src="<?php get_theme_url(); ?>/js/foundation/foundation.js"></script>
<script src="<?php get_theme_url(); ?>/js/foundation/foundation.dropdown.js"></script>
<script src="<?php get_theme_url(); ?>/js/jquery.cycle2.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php get_theme_url(); ?>/js/jquery.cycle2.carousel.min.js" type="text/javascript" charset="utf-8"></script>
<script>
    $(function () {
        $(document).foundation();
    });
</script>
</body>
</html>
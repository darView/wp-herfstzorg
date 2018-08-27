<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp-herfstzorg
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <link href="https://fonts.googleapis.com/css?family=Istok+Web" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/eju4phm.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/animate.css">

	<?php wp_head(); ?>

    <!-- HTML5 shiv goes here! -->
    <!-- todo -->

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-herfstzorg' ); ?></a>


    <nav id="mainNavbar" class="navbar sticky-top navbar-expand-sm mb-2">

        <a class="navbar-brand" href="/index.html">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/navbar_logo.jpg" alt="HerfstZorg"/>
        </a>

        <button class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <?php
            wp_nav_menu([
                'container_id'      => 'navbarSupportedContent',
                'theme_location'    => 'menu-1',
                'container'         => 'nav',
                'container_class'   => 'collapse navbar-collapse',
                'menu_item_class'          => 'guido',
                'menu_class'        => 'navbar-nav ml-auto',
                'walker'            => new WP_Bootstrap_Navwalker(),
            ]);

        ?>
    </nav>

	<div id="content" class="site-content">

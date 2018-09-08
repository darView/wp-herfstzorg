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
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <link href="https://fonts.googleapis.com/css?family=Istok+Web" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/animate.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/rpi.bundle.css">

	<?php wp_head(); ?>

    <!-- HTML5 shiv goes here! -->
    <!-- todo -->

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-herfstzorg' ); ?></a>

    <?php if (is_front_page()) : ?>
        <?php get_template_part( 'template-parts/content-carousel', 'carousel' ); ?>
    <?php endif; ?>

    <?php get_template_part('template-parts/content-navbar', 'navbar'); ?>


	<div id="content" class="site-content">
`
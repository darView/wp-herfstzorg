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
$cta_phrase = get_field('cta_phrase');
$cta_action = get_field('cta_action');

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <link href="https://fonts.googleapis.com/css?family=Istok+Web&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/animate.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/slick.css">
	<?php wp_head(); ?>

    <!-- HTML5 shiv goes here! -->
    <!-- todo -->

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-herfstzorg' ); ?></a>
    <div class="sticky-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-4 text-center">
                    <img class="mt-2" src="<?php bloginfo('template_directory'); ?>/assets/img/head-logo.png" alt="HerfstZorg"/>
                </div>
                <?php if (strlen($cta_phrase)) { ?>
                    <div class="col-md-4 text-center">
                        <a href="<?php echo $cta_action;?>" class="btn btn-primary btn-md"><?php echo $cta_phrase; ?></a>
                    </div>
                <?php } ?>
            </div>
        </div>
        <?php get_template_part('template-parts/content-navbar', 'navbar'); ?>
    </div>
    <?php get_template_part('template-parts/content-heading', 'heading'); ?>
    <div class="container">
        <?php
        if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb(
                '<p id="breadcrumbs">',
                '</p>'
            );
        }
        ?>
    </div>
	<div id="content" class="site-content">
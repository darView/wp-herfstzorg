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
// Advanced Custom Fields
$carousel_image_1   = get_field('carousel_image_1');
$carousel_caption_1 = get_field('carousel_caption_1');
$carousel_lead_1    = get_field('carousel_lead_1');

$carousel_image_2   = get_field('carousel_image_2');
$carousel_caption_2 = get_field('carousel_caption_2');
$carousel_lead_2    = get_field('carousel_lead_2');

$carousel_image_3   = get_field('carousel_image_3');
$carousel_caption_3 = get_field('carousel_caption_3');
$carousel_lead_3    = get_field('carousel_lead_3');
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

    <link rel="icon" href="favicon.ico">

	<?php wp_head(); ?>


    <!-- HTML5 shiv goes here! -->
    <!-- todo -->

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-herfstzorg' ); ?></a>

    <?php if (is_front_page()) : ?>
        <section id="showcase">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item carousel-image-1 active">
                        <img class="d-block mx-auto img-fluid"
                             src="<?php echo $carousel_image_1['url']; ?>"
                             alt="<?php echo $carousel_image_1['alt']; ?>"
                        >
                        <div class="container">
                            <div class="carousel-caption d-none d-sm-block mb-auto">
                                <h1 class="display-3"><?php echo $carousel_caption_1; ?></h1>
                                <p class="lead d-none d-md-inline"><?php echo $carousel_lead_1; ?></p>
                                <!--a href="#cards-section" class="btn btn-primary btn-lg">Kom meer te weten</a-->
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item carousel-image-2">
                        <img class="d-block mx-auto img-fluid"
                             src="<?php echo $carousel_image_2['url']; ?>"
                             alt="<?php echo $carousel_image_2['alt']; ?>"
                        >
                        <div class="container">
                            <div class="carousel-caption d-none d-sm-block mb-auto">
                                <h1 class="display-3"><?php echo $carousel_caption_2; ?></h1>
                                <p class="lead d-none d-md-inline"><?php echo $carousel_lead_2; ?></p>
                                <!--a href="#cards-section" class="btn btn-primary btn-lg">Kom meer te weten</a-->
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item carousel-image-3">
                        <img class="d-block mx-auto img-fluid"
                             src="<?php echo $carousel_image_3['url']; ?>"
                             alt="<?php echo $carousel_image_3['alt']; ?>"
                        >
                        <div class="container">
                            <div class="carousel-caption d-none d-sm-block mb-auto">
                                <h1 class="display-3"><?php echo $carousel_caption_3; ?></h1>
                                <p class="lead d-none d-md-inline"><?php echo $carousel_lead_3; ?></p>
                                <!--a href="#cards-section" class="btn btn-primary btn-lg">Kom meer te weten</a-->
                            </div>
                        </div>
                    </div>
                </div>

                <a href="#myCarousel" data-slide="prev" class="carousel-control-prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>

                <a href="#myCarousel" data-slide="next" class="carousel-control-next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </section>
    <?php endif; ?>

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

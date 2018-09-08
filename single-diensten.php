<?php
/*
    Template Name: Dienst Page
*/
$services_intro             = get_field('services_intro');
$services_body              = get_field('services_body');
$services_image             = get_field('services_image');
$services_parallax_heading  = get_field('services_parallax_heading');
$services_parallax_lead     = get_field('services_parallax_lead');

get_header();


?>

<div id="diensten">
    <div class="container">

        <?php
        if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb(
                '<p id="breadcrumbs">',
                '</p>'
            );
        }
        ?>
        <h1 class="js-wp js-wp-title h1 my-5 text-center"><?php echo the_title(); ?></h1>
        <p><?php echo $services_intro; ?></p>
    </div>

    <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo $services_image['url']; ?>" data-ios-fix="true" data-android-fix="true">
        <div class="row">
            <div class="col">
                <div class="container py-sm-5 py-4">
                    <?php if (!empty($services_parallax_heading)) : ?>
                        <h1 class="js-wp js-wp-home-1"><?php echo $services_parallax_heading; ?></h1>
                    <?php endif; ?>
                    <?php if (!empty($services_parallax_lead)) : ?>
                        <p class="js-wp js-wp-home-1 d-none d-sm-block pb-5"><?php echo $services_parallax_lead; ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <?php if (!empty($services_body)) : ?>
            <p><?php echo $services_body; ?></p>
        <?php endif; ?>
    </div>
</div>


<?php
get_footer();

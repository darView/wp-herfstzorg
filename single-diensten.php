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
    <div class="container mb-5">
        <p><?php echo $services_intro; ?></p>
    </div>

    <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo get_the_post_thumbnail_url(null,'large') ?>" data-ios-fix="true" data-android-fix="true">
        <div class="row">
            <div class="col">
                <div class="container py-sm-5 py-4">
                    <?php if (!empty($services_parallax_heading)) : ?>
                        <h2 class="h1 js-wp js-wp-home-1"><?php echo $services_parallax_heading; ?></h2>
                    <?php endif; ?>
                    <?php if (!empty($services_parallax_lead)) : ?>
                        <p class="js-wp js-wp-home-1 d-none d-sm-block pb-5"><?php echo $services_parallax_lead; ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <?php if (!empty($services_body)) : ?>
            <p><?php echo $services_body; ?></p>
        <?php endif; ?>
    </div>
</div>


<?php
get_footer();

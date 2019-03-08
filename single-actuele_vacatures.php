<?php
/*
    Template Name: Dienst Page
*/
$vacature_intro             = get_field('vacature_intro');
$vacature_body              = get_field('vacature_body');
$vacature_image             = get_field('vacature_image');
$vacature_parallax_heading  = get_field('vacature_parallax_heading');
$vacature_parallax_lead     = get_field('vacature_functie');
$vacature_lokaal            = get_field('vacature_lokaal');
$vacature_deeltijd          = get_field('vacature_deeltijd');
$vacature_gesloten          = get_field('vacature_gesloten');
if ($vacature_gesloten) {
    $vacature_intro = '';
    $vacature_body = '';
    $vacature_parallax_heading = 'Helaas, deze vacature is inmiddels gesloten.';
    $vacature_parallax_lead = '';
    $vacature_deeltijd = false;
    $vacature_lokaal = false;
}
get_header();


?>
<div id="vacature">
    <div class="container mb-5">

        <?php
        if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb(
                '<p id="breadcrumbs">',
                '</p>'
            );
        }
        ?>
        <h1 class="js-wp js-wp-title h1 my-5 text-center"><?php echo the_title(); ?></h1>
        <p><?php echo $vacature_intro; ?></p>
    </div>

    <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo $vacature_image['url']; ?>" data-ios-fix="true" data-android-fix="true">
        <div class="row">
            <div class="col">
                <div class="container py-sm-5 py-4">
                    <?php if (!empty($vacature_parallax_heading)) : ?>
                        <h1 class="js-wp js-wp-home-1"><?php echo $vacature_parallax_heading; ?></h1>
                    <?php endif; ?>
                    <?php if (!empty($vacature_parallax_lead)) : ?>
                        <p class="js-wp js-wp-home-1 d-none d-sm-block pb-5"><?php echo $vacature_parallax_lead; ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <?php if (!empty($vacature_body)) : ?>
            <p><?php echo $vacature_body; ?></p>
        <?php endif; ?>
        <?php if ($vacature_lokaal): ?>
            <p>Woon je in de (directe omgeving van) <?php the_field('vacature_locatie'); ?>, dan is dat een pre.</p>
        <?php endif; ?>
        <?php if ($vacature_deeltijd): ?>
            <p>Deze vacature kan door meerdere personen ingevuld worden op de verschillende dagen. Dus ook al ben je
                niet op alle dagen beschikbaar, neem dan toch gerust contact met ons op.</p>
        <?php endif; ?>
        <?php if (!$vacature_gesloten): ?>
            <p>Spreekt deze vacature je aan? Stuur je CV met motivatie en pasfoto naar
            <a title="" href="mailto:hr@herfstzorg.nl" data-toggle="tooltip" data-placement="top" data-original-title="E-mailadres">hr@herfstzorg.nl</a>
            of neem telefonisch contact met ons op via 06 24 127 539 onder vermelding van ‘<strong>V<?php echo get_the_ID() ?></strong>’.</p>
        <?php endif; ?>
    </div>
</div>


<?php
get_footer();

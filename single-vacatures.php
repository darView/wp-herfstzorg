<?php
/*
    Template Name: Single actuele vacatures Page
*/
$currentId = (int)get_the_ID();

$page_path = "/" . $post->post_type . "/";
$parent_page = get_page_by_path($page_path, OBJECT, 'page');

$vacature_lokaal            = get_field('vacature_lokaal');
$vacature_deeltijd          = get_field('vacature_deeltijd');
$vacature_gesloten          = get_field('vacature_gesloten');
if ($vacature_gesloten) {
    $textGesloten = '<div class="text-center mb-5"><h2 class="h2">Helaas, deze vacature is inmiddels gesloten.</h2></div>';
    $vacature_deeltijd = false;
    $vacature_lokaal = false;
}
$loop = new WP_Query([
    'nopaging' => true,
    'post_type' => 'vacatures',
    'orderby' => 'post_id',
    'order' => 'ASC',
    'meta_query' => [
        [
            'key' => 'vacature_gesloten',
            'value' => 0
        ]
    ]]);


get_header();
?>
    <div id="vacatures">
        <div class="container">
            <?php if ($vacature_gesloten): ?>
                <p><?php echo $textGesloten; ?></p>;
            <?php else: ?>
                <?php the_content(); ?>
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
            <?php endif; ?>
        </div>

        <?php if (count($loop->posts) > 1): ?>
        <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo get_the_post_thumbnail_url($parent_page->ID, 'full'); ?>" data-ios-fix="true" data-android-fix="true">
            <div class="row">
                <div class="col">
                    <div class="container py-sm-5 py-4">
                        <h2 class="h1 js-wp js-wp-home-1"><?php echo get_the_title($parent_page->ID); ?></h2>
                        <p class="js-wp js-wp-home-1 d-none d-sm-block pb-5"><?php echo get_post_meta($parent_page->ID, 'heading_lead', true); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <div class="container">
            <div class="row mb-5">
                <?php while ($loop->have_posts()): ?>
                    <?php $loop->the_post(); ?>
                    <?php if ((int)get_the_ID() != $currentId): ?>
                        <div class="col-sm-6 col-md-4">
                            <a href="<?php the_permalink(); ?>" data-toggle="tooltip" data-placement="top" title="Klik om verder te lezen">
                                <div class="card mt-5">
                                    <?php the_post_thumbnail( 'medium', ['class' => 'card-img-top img-fluid img-tension']); ?>
                                    <div class="card-img-overlay">
                                        <h3 class="card-title"><?php the_field('vacature_termijn'); ?>:</h3>
                                        <p class="card-text">
                                        <p><?php the_field('vacature_functie'); ?></p>
                                        <p><?php the_field('vacature_locatie'); ?></p>
                                        </p>
                                    </div>
                                </div>
                            </a>
                            </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            </div>
        </div>
    </div>


<?php
get_footer();
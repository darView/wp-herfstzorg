<?php
/*
    Template Name: Vacatures Page
*/
get_header();

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
?>

    <section id="vacatures" class="the-content mb-5 mt-3">

        <div class="container">

            <?php the_content(); ?>

            <div class="row">
            <?php while ($loop->have_posts()): ?>
                <?php $loop->the_post(); ?>
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
            <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php
get_footer();

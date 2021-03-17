<?php
/*
    Template Name: Actueel Page
*/
get_header();

$loop = new WP_Query([
    'post_type' => 'actueel',
    'orderby' => 'post_id',
    'order' => 'DESC',
//    'meta_query' => [
//        [
//            'key' => 'vacature_gesloten',
//            'value' => 0
//        ]
//    ]
]);
?>
    <section id="actueel" class="the-content mb-5 mt-3">

        <div class="container">

            <?php the_content(); ?>
            <div class="row">
                <?php while ($loop->have_posts()): ?>
                    <?php $loop->the_post(); ?>
                    <div class="col-sm-6 col-md-4">
                        <?php get_template_part( 'template-parts/content-actueel', get_post_type() ); ?>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>

<?php
get_footer();

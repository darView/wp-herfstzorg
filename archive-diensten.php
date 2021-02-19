<?php
/**
 * Project: wp-herfstzorg
 * User:    g.scholtes@darview.com
 * Date:    02/09/18
 * Time:    09:56
 */
get_header();
?>
<!-- CARD COLUMNS -->
    <div class="container">

        <?php
        if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb(
                '<p id="breadcrumbs">',
                '</p>'
            );
        }
        ?>

        <h1 class="js-wp js-wp-title h1 py-5 text-center">Dienstens</h1>

        <section id="cards-section">
            <div class="container py-5" id="card-columns">
                <div class="row">

                    <div class="card-columns w-100">

                        <?php $loop = new WP_Query(['post_type' => 'diensten', 'orderby' => 'post_id', 'order' => 'ASC']); ?>
                        <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                            <?php get_template_part( 'template-parts/content-card', 'card' ); ?>
                        <?php endwhile; ?>

                    </div>
                </div>
            </div>
        </section>
    </div>
<?php
get_footer();
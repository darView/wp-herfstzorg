<?php
/*
    Template Name: Diensten Page
*/
$about_image        = get_field('about_image');
$about_story        = substr(get_field('about_story'), 3); // strip leading <p>
$about_story        = substr($about_story, 0, -5); // strip trailing </p>

get_header();
?>
<section id="diensten">

    <div class="container">

        <div class="row mb-5">

            <div class="the-content"><?php the_content(); ?></div>

            <!-- CARD COLUMNS -->
            <section id="cards-section">
                <div class="container py-5">
                    <div class="row">
                        <?php $loop = new WP_Query(['post_type' => 'diensten', 'orderby' => 'post_id', 'order' => 'ASC']); ?>
                        <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                            <?php get_template_part( 'template-parts/content-card', 'card' ); ?>
                        <?php endwhile; ?>
                    </div>
                </div>
            </section>

        </div>
    </div>
</section>

<?php
get_footer();

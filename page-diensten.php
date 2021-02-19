<?php
/*
    Template Name: About Page
*/
$about_image        = get_field('about_image');
$about_story        = substr(get_field('about_story'), 3); // strip leading <p>
$about_story        = substr($about_story, 0, -5); // strip trailing </p>

get_header();
?>
<section id="about">

    <div class="container">

        <h1 class="my-5 text-center"><?php single_post_title(); ?></h1>

        <div class="row mb-5">

            <div class="js-wp js-wp-about-1 col col-lg-3 col-md-4 col-sm-6 text-center mb-5">
                <img class="image" src="<?php echo $about_image['url']; ?>" alt="<?php echo $about_image['alt']; ?>"/>
            </div>

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

<?php
/*
    Template Name: Reviews Page
*/
$about_image        = get_field('about_image');
$about_story        = substr(get_field('about_story'), 3); // strip leading <p>
$about_story        = substr($about_story, 0, -5); // strip trailing </p>

$google_review_code_block = get_field('google_review_code_block');

$google_reviews_image = get_field('google_reviews_image');
get_header();
?>
<div id="testimonials">
    <div class="container">

        <div class="row mb-5">

            <div class="the-content">
                <?php the_content(); ?>
            </div>

            <div class="section-testimonials mt-5">
                <div class="container">
                    <div class="row">
                        <?php $loop = new WP_Query(['post_type' => 'reviews', 'orderby' => 'post_id', 'order' => 'DESC']); ?>
                        <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                            <?php get_template_part( 'template-parts/content-testimonial', 'testimonial' ); ?>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- GOOGLE REVIEWS HEADING SECTION -->
    <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo $google_reviews_image['url'] ?>" data-ios-fix="true" data-android-fix="true">
        <div class="row">
            <div class="col py-5">
                <h2 class="js-wp js-wp-home-5 h1"><?php echo $google_reviews_image['title']; ?></h2>
                <p class="js-wp js-wp-home-5 pb-5"><?php echo $google_reviews_image['description']; ?></p>
            </div>
        </div>
    </div>

    <!-- GOOGLE REVIEWS SECTION -->
    <section id="google-reviews">
        <div class="container">
            <div class="mt-5 pb-5">
                <?php
                    echo $google_review_code_block;
                ?>

            </div>
        </div>
    </section>
</div>

<?php
get_footer();

//<div class="text-center"><a href="/over-ons/reviews/"  target="_self" rel="noopener" data-toggle="tooltip" data-placement="top" data-original-title="Bezoek onze reviews pagina">Bekijk al onze reviews!</a></div
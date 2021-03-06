<?php
/*
    Template Name: Home Page
*/
get_header();

// home parallax section
$home_parallax_image        = get_field('home_parallax_image');
$home_parallax_heading      = get_field('home_parallax_heading');
$home_parallax_lead         = get_field('home_parallax_lead');

// home reviews section
$home_reviews_image         = get_field('home_reviews_image');
$home_reviews_heading       = get_field('home_reviews_heading');
$home_reviews_lead          = get_field('home_reviews_lead');

$home_google_review_code_block = get_field('home_google_review_code_block');

?>
    <div id="home">
    <div class="container">

        <div class="pb-5 the-content"><?php the_content(); ?></div>

        <?php get_template_part( 'template-parts/content-home-icons', 'home-icons' ); ?>

        <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo $home_parallax_image['url']; ?>" data-ios-fix="true" data-android-fix="true">
            <div class="row">
                <div class="col">
                    <div class="container py-sm-5 py-4">
                        <h2 class="js-wp js-wp-home-1 h1"><?php echo $home_parallax_heading; ?></h2>
                        <p class="js-wp js-wp-home-1 d-none d-sm-block pb-5"><?php echo $home_parallax_lead; ?></p>
                    </div>
                </div>
            </div>
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

        <!-- TESTIMONIALS HEADING SECTION -->
        <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo $home_reviews_image['url']; ?>" data-ios-fix="true" data-android-fix="true">
            <div class="row">
                <div class="col py-5">
                    <h2 class="js-wp js-wp-home-5 h1"><?php echo $home_reviews_heading; ?></h2>
                    <p class="js-wp js-wp-home-5 pb-5"><?php echo $home_reviews_lead; ?></p>
                </div>
            </div>
        </div>

        <!-- GOOGLE REVIEWS SECTIN -->
        <section id="google-reviews">
            <div class="container">
                <div class="pb-5">
                    <?php echo $home_google_review_code_block; ?>
                </div>
            </div>
        </section>
    </div>
</div>
<?php
get_footer();

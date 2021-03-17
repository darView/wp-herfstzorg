<?php
/*
    Template Name: Home Page
*/
get_header();

$id_diensten_page = getPageIdFromSlug('slug_diensten_page');
$id_reviews_page = getPageIdFromSlug('slug_reviews_page');
$google_review_code_block = get_field('google_review_code_block');
$google_reviews_image = get_field('google_reviews_image', $id_reviews_page);

?>
    <div id="home">
        <div class="container">

            <div class="pb-5 the-content"><?php the_content(); ?></div>

            <?php get_template_part( 'template-parts/content-home-icons', 'home-icons' ); ?>

            <?php if ($id_diensten_page) { ?>
            <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo get_the_post_thumbnail_url($id_diensten_page, 'full'); ?>" data-ios-fix="true" data-android-fix="true">
                <div class="row">
                    <div class="col">
                        <div class="container py-sm-5 py-4">
                            <h2 class="js-wp js-wp-home-1 h1"><?php echo get_the_title($id_diensten_page); ?></h2>
                            <p class="js-wp js-wp-home-1 d-none d-sm-block pb-5"><?php echo get_post_meta($id_diensten_page, 'heading_lead', true); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>

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
                        <?php echo $google_review_code_block; ?>
                    </div>
                </div>
            </section>
        </div>
    </div>
<?php
get_footer();

<?php
/*
    Template Name: Dienst Page
*/
$currentId = (int)get_the_ID();

$services_parallax_heading  = get_field('services_parallax_heading');
$services_parallax_lead     = get_field('services_parallax_lead');

get_header();

$page_path = "/" . $post->post_type . "/";
$parent_page = get_page_by_path($page_path, OBJECT, 'page');
?>
<div id="diensten">
    <div class="container mb-5">
        <p><?php  the_content(); ?></p>
    </div>

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

    <!-- CARD COLUMNS -->
    <section id="cards-section">
        <div class="container py-5">
            <div class="row">
                <?php $loop = new WP_Query(['post_type' => 'diensten', 'orderby' => 'post_id', 'order' => 'ASC']); ?>
                <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                    <?php if ((int) get_the_ID() !== $currentId): ?>
                        <?php get_template_part( 'template-parts/content-card', 'card' ); ?>
                    <?php endif; ?>
                <?php endwhile; ?>
            </div>
        </div>
    </section>

</div>


<?php
get_footer();

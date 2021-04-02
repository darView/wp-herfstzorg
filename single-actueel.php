<?php
/*
    Template Name: Single actueel Page
*/
$currentId = (int)get_the_ID();

get_header();

$page_path = "/" . $post->post_type . "/";
$parent_page = get_page_by_path($page_path, OBJECT, 'page');

$loop = new WP_Query([
    'nopaging' => true,
    'post_type' => 'actueel',
    'orderby' => 'post_id',
    'order' => 'DESC',
    'meta_query' => [
        [
            'key' => 'categorie',
            'value' => get_field('categorie'),
        ]
    ]
]);

?>
    <div id="actueel-<?php the_ID(); ?>">
        <div class="container mb-2">
            <div class="blog-header">
                <span>
                    <i class="fa fa-clock-o"></i><time><?php the_date(); ?></time>
                    <span class="categorie"><?php the_field('categorie'); ?></span>
                </span>
            </div>
            <div class="actueel-content">
                <p><?php  the_content(); ?></p>
            </div>
        </div>
        <?php if (count($loop->posts) > 1): ?>
        <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo get_the_post_thumbnail_url($parent_page->ID, 'full'); ?>" data-ios-fix="true" data-android-fix="true">
            <div class="row">
                <div class="col">
                    <div class="container py-sm-5 py-4">
                        <h2 class="h1 js-wp js-wp-home-1">Gerelateerde artikelen</h2>
                        <p class="js-wp js-wp-home-1 d-none d-sm-block pb-5"><?php echo get_field('categorie'); ?></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- CARD COLUMNS -->
        <section id="actueel-cards">
            <div class="container py-5">
                <div class="row">
                    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                        <?php if ((int) get_the_ID() !== $currentId): ?>
                            <div class="col-sm-6 col-md-4">
                                <?php get_template_part( 'template-parts/content-actueel', get_post_type() ); ?>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>
        <?php endif; ?>
    </div>


<?php
get_footer();





return;
?>
    <div id="blog">
        <div class="container blog">
LEEF, ALSOF HET JE LAATSTE DAG IS!
            <div class="row" id="primary">
                <main id="content" class="col-sm-8" role="main">
                    <?php if ( have_posts() ) : ?>

                        <?php if ( is_home() && ! is_front_page() ) : ?>
                            <header>
                                <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                            </header>
                        <?php endif; ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <?php get_template_part( 'template-parts/content', get_post_type() ); ?>
                        <?php endwhile; ?>

                        <?php the_posts_navigation(); ?>

                    <?php else : ?>
                        <?php get_template_part( 'template-parts/content', 'none' ); ?>
                    <?php endif; ?>
                </main> <!-- content -->
                <!-- === SIDEBAR === -->
                <aside class="col-sm-4">
                    <?php get_sidebar(); ?>
                </aside>

            </div> <!-- primary -->
        </div> <!-- container -->
    </div> <!-- blog -->

<?php
get_footer();
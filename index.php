<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp-herfstzorg
 */

get_header();
?>
    <div id="blog">
        <div class="container blog">

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

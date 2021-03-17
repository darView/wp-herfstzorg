<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package wp-herfstzorg
 */

get_header();
?>
<div id="blog">
    <div class="container single blog">
        <div class="row" id="primary">
            <main id="content" class="col-sm-8">

            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'template-parts/content', 'single'); ?>

                <?php if ( comments_open() || get_comments_number() ) :?>
                    <?php comments_template(); ?>
                <?php endif; ?>

            <?php endwhile; ?>
            </main> <!-- content -->

            <aside class="col-sm-4">
                <?php get_sidebar(); ?>
            </aside>

        </div> <!-- primary -->
    </div> <!- container -->
</div> <!- blog -->
<?php
get_footer();

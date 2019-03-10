<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp-herfstzorg
 */

get_header();
?>
    <div id="archive">
    <div class="container blog">
		<?php if ( have_posts() ) : ?>

        <div class="js-wp js-wp-title">
            <?php

            the_archive_title( '<h1 class="h1 py-5 text-center">', '</h1>' );
            the_archive_description( '<div class="archive-description">', '</div>' );
            ?>
        </div>
            <div class="row" id="primary">
            <main id="content" class="col-sm-8 js-wp js-wp-about-1" role="main">

    <?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
        </main>
                <aside class="js-wp js-wp-about-2 col-sm-4">
                    <?php get_sidebar(); ?>
                </aside>

            </div>
    </div>
    </div>
<?php
get_footer();

<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package wp-herfstzorg
 */

get_header();
?>      <h1 class="js-wp js-wp-title h1 py-5 text-center page-title">
            <?php
            /* translators: %s: search query. */
            printf( esc_html__( 'Zoekresultaat voor: "%s"', 'wp-herfstzorg' ), '<span>' . get_search_query() . '</span>' );
            ?>
        </h1>

        <div class="container blog">
            <div id="primary" class="row ">
                <main id="content" class="col-sm-8 js-wp js-wp-about-1">
                    <?php if ( have_posts() ) : ?>


                        <?php
                        /* Start the Loop */
                        while ( have_posts() ) :
                            the_post();

                            /**
                             * Run the loop for the search to output the results.
                             * If you want to overload this in a child theme then include a file
                             * called content-search.php and that will be used instead.
                             */
                            get_template_part( 'template-parts/content', 'single' );

                        endwhile;

                    else :

                        get_template_part( 'template-parts/content', 'none' );

                    endif;
                    ?>
                </main> <!-- content -->
                <aside class="js-wp js-wp-about-2 col-sm-4">
                    <?php get_sidebar(); ?>
                </aside>
            </div> <!-- primary -->
        </div><!-- container -->
<?php
get_sidebar();
get_footer();

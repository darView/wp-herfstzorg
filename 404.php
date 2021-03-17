<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package wp-herfstzorg
 */
get_header(null, ['404' => true]);
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<section class="error-404 not-found">
                <div class="container mt-5 mb-5">
                    <h2 class="h1">Helaas, we kunnen de pagina die u zoekt niet (meer) vinden.</h2>
                    <p class="mt-4">Excuses voor het ongemak.</p>
                    <div class="mt-4 alert alert-light" role="alert"">Foutmelding: 404</div>
                </div>
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

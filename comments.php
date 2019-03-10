<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp-herfstzorg
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">
    <div class="comments-wrap">
	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h3 class="comments-title">
			<?php
			$wp_herfstzorg_comment_count = get_comments_number();
			if ( '1' === $wp_herfstzorg_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'Een reactie op: &ldquo;%1$s&rdquo;', 'wp-herfstzorg' ),
					'<span>' . get_the_title() . '</span>'
				);
			} else {
				printf( // WPCS: XSS OK.
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s reacties op: &ldquo;%2$s&rdquo;', $wp_herfstzorg_comment_count, 'comments title', 'wp-herfstzorg' ) ),
					number_format_i18n( $wp_herfstzorg_comment_count ),
					'<span>' . get_the_title() . '</span>'
				);
			}
			?>
		</h3><!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
			wp_list_comments( array(
				'style'      => 'ol',
				'short_ping' => true,
			) );
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'wp-herfstzorg' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().

	comment_form();
	?>
    </div>
</div><!-- #comments -->

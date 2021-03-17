<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp-herfstzorg
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h3 class="entry-title">', '</h3>' );
		else :
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif;
		?>
	</header><!-- .entry-header -->

    <?php if (has_post_thumbnail()): ?>
        <div class="post-image">
            <?php the_post_thumbnail('medium_large'); ?>
        </div> <!-- post-image -->
    <?php endif; ?>

    <div class="post-excerpt">
        <?php the_excerpt(); ?>
        <div class="fadeout"></div>
        <a href="<?php the_permalink(); ?>">Lees verder</a>
    </div> <!-- post -excerpt -->
</article><!-- #post-<?php the_ID(); ?> -->

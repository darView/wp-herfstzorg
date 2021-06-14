<?php
/**
 * Template part for displaying actueel teasers.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp-herfstzorg
 */
$categorie = get_field('categorie');
$teaser = get_field('teaser');
$titel = get_field('korte_titel');
if (!strlen(trim($titel))) {
    $titel = get_the_title();
}
?>
<div id="post-<?php the_ID(); ?>" <?php post_class('actueel'); ?>>
    <a href="<?php esc_url(the_permalink()); ?>">
        <div class="card mt-4">
            <div class="card-img">
                <?php the_post_thumbnail('medium_large', ['class' => 'card-img-top img-fluid img-tension']); ?>
<!--                  <div class="card-meta top-left">-->
<!--                    <i class="fa fa-clock-o"></i><time>--><?php //echo get_the_date(); ?><!--</time>-->
<!--                </div>-->
                <div class="card-header centered">
                    <?php echo $titel; ?>
                </div>
            </div>

            <div class="card-body">
                <h5 class="card-title"><?php echo $categorie; ?></h5>
                <p class="card-text"><?php echo $teaser; ?></p>
                <p class="read-more" href="<?php esc_url(the_permalink()); ?>"  data-toggle="tooltip" data-placement="top" title="Klik om verder te lezen">Lees verder&#8594;</p>
            </div>
        </div>
    </a>
</div> <!-- post -->

<?php
return;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h3 class="entry-title">', '</h3>' );
		else :
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif;

		if ( 'actueel' === get_post_type() ) :
			?>
            <div class="post-details top-left">
                <i class="fa fa-user"></i><?php the_author(); ?>
                <?php edit_post_link('Bewerken', '<i class="fa fa-pencil"></i>'); ?>
                <i class="fa fa-clock-o"></i><time><?php the_date(); ?></time>
                <i class="fa fa-folder"></i><?php the_category(', '); ?>
                <i class="fa fa-tags"></i><?php the_tags(); ?>

                <div class="post-comments-badge" data-toggle="tooltip" data-placement="top" title="<?php comments_number(0, 1, '%'); ?> reacties">
                    <a href="<?php comments_link(); ?>"><i class="fa fa-comments"></i><?php comments_number(0, 1, '%'); ?></a>
                </div> <!-- post-comments-badge -->


            </div> <!-- post-details -->
		<?php endif; ?>
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

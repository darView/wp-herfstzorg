<?php
/*
    Template Name: Text Only Page
*/
$text_only_text     = get_field('text_only_text');

get_header();
?>
<section id="privacy-statement">

    <div class="container">

        <h1 class="js-wp js-wp-title h1 my-5 text-center"><?php single_post_title(); ?></h1>

        <?php echo $text_only_text; ?>

    </div>
</section>

<?php
get_footer();

<?php
/*
    Template Name: Text Round Image Page
*/
$about_image        = get_field('about_image');
$about_story        = get_field('about_story');

get_header();
?>
<section id="text-round-image">

    <div class="container">


        <h1 class="js-wp js-wp-title h1 my-5 text-center"><?php single_post_title(); ?></h1>

        <div class="row mb-5">

            <div class="js-wp js-wp-about-1 col col-lg-3 col-md-4 col-sm-6 text-center mb-5">
                <img class="image" src="<?php echo $about_image['url']; ?>" alt="<?php echo $about_image['alt']; ?>"/>
            </div>

            <div class="js-wp js-wp-about-2 col col-lg-9 col-md-8 col-sm-6">
                <?php echo ($about_story); ?>
            </div>

        </div>
    </div>
</section>

<?php
get_footer();

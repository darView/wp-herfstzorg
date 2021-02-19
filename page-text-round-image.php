<?php
/*
    Template Name: Text Round Image Page
*/
$about_image        = get_field('about_image');
$about_story        = get_field('about_story');
$vacatures_found    = false;
get_header();
$loop = new WP_Query(['post_type' => 'actuele_vacatures', 'orderby' => 'post_id', 'order' => 'ASC']);
while ($loop->have_posts()) {
    $loop->the_post();
    if (!get_field('vacature_gesloten')) {
        $vacatures_found = true;
        break;
    }
}
$loop->rewind_posts();
?>

    <section id="text-round-image">

        <div class="container">

            <div class="row mb-5">

                <div class="col col-lg-3 col-md-4 col-sm-6 text-center mb-5">
                    <img class="image" src="<?php echo $about_image['url']; ?>" alt="<?php echo $about_image['alt']; ?>"/>
                    <?php if (single_post_title("", false) == 'Vacatures'): ?>
                        <?php if ($vacatures_found): ?>
                            <div class="current-vacancies text-left">
                                <div class="head">Actuele vacatures</div>
                                <ul class="list-unstyled">
                                    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                                        <?php if (!get_field('vacature_gesloten')): ?>
                                            <?php $tooltip = get_field('vacature_parallax_heading') . ": " . lcfirst(get_field('vacature_functie')) . " te " . get_field('vacature_locatie'); ?>
                                            <li><a href="<?php echo the_permalink();?>" data-toggle="tooltip" data-placement="top" title="<?php echo $tooltip ?>"><?php the_field('vacature_functie');  ?> <small>(V<?php echo get_the_ID(); ?>)</small></a></li>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>

                <div class="col col-lg-9 col-md-8 col-sm-6">
                    <?php echo ($about_story); ?>
                </div>

            </div>
        </div>
    </section>

<?php
get_footer();
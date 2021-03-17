<?php
// get the post id for the blog page.
define('HOME_PAGE', 'nieuws');

$post_id = null;
if (is_home() || (is_single() && 'post' === get_post_type())) {
    $page = get_page_by_path(HOME_PAGE);
    $post_id = $page->ID;
}
$heading_lead = get_field('heading_lead', $post_id);
$heading_background_position_y = get_field('heading_background_position_y', $post_id);
$hero_image = get_the_post_thumbnail_url($post_id, 'full');
?>

<div class="jumbotron d-flex align-items-center" style="background-image:url(<?php echo $hero_image; ?>); background-position-y: <?php echo $heading_background_position_y; ?>% ">
    <div class="container align-items-center text-center">
        <h1 class="h1 mt-3"><?php single_post_title(); ?></h1>
        <p class="lead d-none d-sm-inline"><?php echo $heading_lead; ?></p>
    </div>
</div>
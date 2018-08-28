<?php

// home icons section
$home_icons_fa_class_1      = get_field('home_icons_fa_class_1');
$home_icons_heading_1       = get_field('home_icons_heading_1');
$home_icons_lead_1          = get_field('home_icons_lead_1');
$home_icons_fa_class_2      = get_field('home_icons_fa_class_2');
$home_icons_heading_2       = get_field('home_icons_heading_2');
$home_icons_lead_2          = get_field('home_icons_lead_2');
$home_icons_fa_class_3      = get_field('home_icons_fa_class_3');
$home_icons_heading_3       = get_field('home_icons_heading_3');
$home_icons_lead_3          = get_field('home_icons_lead_3');

?>
<div class="container">
    <h1 class="js-wp js-wp-title h1 py-5 text-center"><?php single_post_title(); ?></h1>
<!-- HOME ICON SECTION -->
<section id="home-icons" class="mb-5">
    <div class="row">
        <div class="js-wp js-wp-home-2 col-md-4 text-center">
            <i class="<?php echo $home_icons_fa_class_1; ?> mb-2"></i>
            <h3><?php echo $home_icons_heading_1; ?></h3>
            <p><?php echo $home_icons_lead_1; ?></p>
        </div>
        <div class="js-wp js-wp-home-4 col-md-4 mb-4 text-center">
            <i class="<?php echo $home_icons_fa_class_2; ?> mb-2"></i>
            <h3><?php echo $home_icons_heading_2; ?></h3>
            <p><?php echo $home_icons_lead_2; ?></p>
        </div>
        <div class="js-wp js-wp-home-3 col-md-4 mb-4 text-center">
            <i class="<?php echo $home_icons_fa_class_3; ?> mb-2"></i>
            <h3><?php echo $home_icons_heading_3; ?></h3>
            <p><?php echo $home_icons_lead_3; ?></p>
        </div>
    </div>
</section>
</div>
<?php
$home_testimonial_image = get_field('home_testimonial_image');
?>
<div class="col-sm-12 col-md-4">
    <div class="row testimonial">
        <div class="col-sm-4 text-center">
            <img
                src="<?php echo $home_testimonial_image['url']; ?>"
                alt="<?php echo $home_testimonial_image['alt']; ?>"
            >
        </div>
        <div class="col-sm-8">
            <blockquote>
                <p><i class="fa fa-quote-right"></i><?php echo the_field('home_testimonial_text'); ?></p>
                <cite>&#8212 <?php echo the_field('home_testimonial_gender'); ?> <?php echo the_field('home_testimonial_surname'); ?>, <?php echo the_field('home_testimonial_city'); ?></cite>
                <?php get_template_part( 'template-parts/content-stars', 'stars' ); ?>
                <hr class="testumonials-hr"/>
            </blockquote>
        </div>
    </div>
</div>
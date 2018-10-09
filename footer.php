<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp-herfstzorg
 */

?>

<?php wp_footer(); ?>


<footer class="footer">
    <div class="container pt-4">
        <div class="row">

            <!-- first column -->
            <div class="col col-12 col-sm-6 pl-1">
                <div class="row follow-us">
                    <div class="col">
                        <p class="text-uppercase">Volg ons</p>
                        <hr/>
                        <?php
                        wp_nav_menu([
                            'theme_location'    => 'social',
                            'container_class'   => 'clearfix',
                            'menu_class'        => 'social-links float-left',
                            'walker'            =>  new WP_Social_Navwalker()
                        ]);
                        ?>
                        <!--<div class="clearfix">-->
                        <!--    <ul class="social-links float-left">-->
                        <!--        <li>-->
                        <!--            <a href="https://www.facebook.com/HerfstZorg/" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Volg ons op Facebook"></i></a>-->
                        <!--        </li>-->
                        <!--        <li>-->
                        <!--            <a href="https://twitter.com/herfstzorg" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"  data-toggle="tooltip" data-placement="top" title="Volg ons op Twitter"></i></a>-->
                        <!--        </li>-->
                        <!--        <li>-->
                        <!--            <a href="https://www.linkedin.com/company/herfstzorg/" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"  data-toggle="tooltip" data-placement="top" title="Volg ons op LinkedIn"></i></a>-->
                        <!--        </li>-->
                        <!--        <li>-->
                        <!--            <a href="https://www.instagram.com/herfstzorg/" TARGET="_blank"><i class="fa fa-instagram" aria-hidden="true"  data-toggle="tooltip" data-placement="top" title="Volg ons op Instagram"></i></a>-->
                        <!--        </li>-->
                        <!--    </ul>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>


            <!-- second column -->
            <div class="col col-12 col-sm-6 pl-1">
                <div class="row information">
                    <div class="col-12">
                        <p class="text-uppercase">Informatie</p>
                        <hr/>
                        <div class="row">

                            <?php
                                wp_nav_menu([
                                    'theme_location' => 'primary',
                                    'container_class' => 'col col-sm-12 col-md-6'
                                ]);
                            ?>

                            <?php
                                wp_nav_menu([
                                    'theme_location' => 'footer',
                                    'container_class' => 'col col-sm-12 col-md-6'
                                ]);
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>

<?php get_template_part('template-parts/content-copyright', 'copyright'); ?>

<script src="<?php echo  bloginfo('template_directory'); ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/assets/js/parallax.min.js"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/assets/js/popper.min.js"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/assets/js/jquery.waypoints.min.js"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/assets/js/scripts.min.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-124643036-1"></script>
<script async>

        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-124643036-1');

</script>

<?php if (isset($wp_query->queried_object->post_name) && ($wp_query->queried_object->post_name == "contact")): ?>
<script async>

        function initMap()
        {
            var location = {lat: <?php echo get_field('google_maps_lat'); ?>, lng: <?php echo get_field('google_maps_lng'); ?>};
            var map      = new google.maps.Map(
            document.getElementById('map'), {zoom: 10, center: location});
            var marker   = new google.maps.Marker({position: location, map: map});
        }

</script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=<?php echo get_field('google_maps_javascript_api'); ?>&callback=initMap"></script>
<?php endif; ?>
</body>
</html>

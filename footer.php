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
                        <div class="clearfix">
                            <ul class="social-links float-left">
                                <li>
                                    <a href="https://www.facebook.com/HerfstZorg/" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Volg ons op Facebook"></i></a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/herfstzorg" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"  data-toggle="tooltip" data-placement="top" title="Volg ons op Twitter"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/company/herfstzorg/" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"  data-toggle="tooltip" data-placement="top" title="Volg ons op LinkedIn"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/herfstzorg/" TARGET="_blank"><i class="fa fa-instagram" aria-hidden="true"  data-toggle="tooltip" data-placement="top" title="Volg ons op Instagram"></i></a>
                                </li>
                            </ul>
                        </div>
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
                            <div class="col col-sm-12 col-md-6">
                                <ul class="information-links">
                                    <li class="active">
                                        <a href="/index.html">Particuliere mantelzorg</a>
                                    </li>
                                    <li>
                                        <a href="/about.html">Over ons</a>
                                    </li>
                                    <li>
                                        <a href="/pricing.html">Tarieven</a>
                                    </li>
                                    <li>
                                        <a href="/vacancies.html">Vacatures</a>
                                    </li>
                                    <li>
                                        <a href="/contact.html">Contact</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col col-sm-12 col-md-6">
                                <ul class="information-links">
                                    <!--li>
                                        <a href="#">Nieuws</a>
                                    </li-->
                                    <li>
                                        <a href="/privacy-statement.html">Privacy verklaring</a>
                                    </li>
                                    <li>
                                        <a href="/terms-and-conditions.html">Algemene voorwaarden</a>
                                    </li>
                                </ul>
                            </div>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>

<section id="copyright">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 text-white">
                <span class="copyright">Copyright &copy; 2018 HerfstZorg</span>
                |
                <span class="website"> Website door <a href="http://www.darview.com" target="_blank" data-toggle="tooltip" data-placement="top" title="Bezoek de website van darView (opent in een nieuw tabblad)">darView</a></span>
            </div>
            <div class="col-sm-6 text-white text-capitalize">
                <!--span class="disclaimer"><a href="#">disclaimer</a></span>
                |
                <span class="sitemap"><a href="#">sitemap</a></span-->
            </div>
        </div>
    </div>
</section>

<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.min.js"></script>
<!--<script src="<?php bloginfo('template_directory'); ?>/assets/js/loadCSS.min.js"></script>-->

<script src="<?php bloginfo('template_directory'); ?>/assets/js/parallax.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/popper.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.waypoints.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/scripts.min.js"></script>

<script>
    <!--$(function ()-->
    <!--{-->
        <!--loadCSS("https://fonts.googleapis.com/css?family=Istok+Web")-->
        <!--loadCSS("--><?php //bloginfo('template_directory'); ?><!--/assets/css/style.css");-->
        <!--loadCSS("--><?php //bloginfo('template_directory'); ?><!--/assets/css/font-awesome.min.css");-->
        <!--loadCSS("--><?php //bloginfo('template_directory'); ?><!--/assets/css/bootstrap.css");-->
        <!--loadCSS("--><?php //bloginfo('template_directory'); ?><!--/assets/css/style.css");-->
        <!--loadCSS("--><?php //bloginfo('template_directory'); ?><!--/assets/css/animate.css");-->

        $('parallax-window').parallax();
    });
</script>

</body>
</html>

<?php
/*
    Template Name: Home Page
*/
get_header();

$fa_class_1 = get_field('fa_class_1');
$fa_class_2 = get_field('fa_class_2');
$fa_class_3 = get_field('fa_class_3');

?>

<div id="home">

<div class="container">
    <h1 class="js-wp js-wp-title h1 py-5 text-center"><?php single_post_title(); ?></h1>
    <!-- HOME ICON SECTION -->
    <section id="home-icons" class="mb-5">
        <div class="row">
            <div class="js-wp js-wp-home-2 col-md-4 text-center">
                <i class="fa <?php echo $fa_class_1; ?> mb-2"></i>
                <h3>Zelfstandig</h3>
                <p>Laat uw naaste langer aangenaam wonen en leven in hun eigen vertrouwde omgeving.</p>
            </div>
            <div class="js-wp js-wp-home-4 col-md-4 mb-4 text-center">
                <i class="fa <?php echo $fa_class_2; ?> mb-2"></i>
                <h3>Tijd</h3>
                <p>Draag zorgtaken over zodat u meer quality-time met uw naaste kunt doorbrengen.</p>
            </div>
            <div class="js-wp js-wp-home-3 col-md-4 mb-4 text-center">
                <i class="fa <?php echo $fa_class_3; ?> mb-2"></i>
                <h3>Gezelschap</h3>
                <p>Een luisterend oor, herinneringen van vroeger delen, aandacht.</p>
            </div>
        </div>
    </section>
</div>

<div class="parallax-window" data-parallax="scroll" data-image-src="<?php bloginfo('template_directory'); ?>/assets/img/heading.jpg" data-ios-fix="true" data-android-fix="true">
    <div class="row">
        <div class="col">
            <div class="container py-sm-5 py-4">
                <h1 class="js-wp js-wp-home-1">Wij zijn gespecialiseerd in de zorg voor ouderen.</h1>
                <p class="js-wp js-wp-home-1 d-none d-sm-block pb-5">
                    HerfstZorg ontzorgt en maakt dat u gewoon weer bij uw naaste op visite kunt gaan als dochter
                    of zoon in plaats van als mantelzorger.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- CARD COLUMNS -->
<section id="cards-section">
    <div class="container py-5" id="card-columns">
        <div class="row">

            <div class="card-columns w-100">

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Doktersbezoek</h4>
                        <p class="card-text">Onze mantelzorgers gaan mee naar het ziekenhuis,
                            zodat uw naaste niet alleen het gesprek met de arts hoeft te voeren.</p>
                        <!--div class="read-more text-right"><a href="/doktersbezoek.html" data-toggle="tooltip" data-placement="top" title="Klik om verder te lezen"><i class="fa fa-arrow-right"></i>Lees verder</a></div-->
                    </div>
                    <!--a href="/doktersbezoek.html" -->
                    <img class="card-img-top img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/img/doktersbezoek.jpg" alt="Doktersbezoek"/>
                    <!--/a-->

                </div>

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Boodschappen en koken</h4>
                        <p class="card-text">Wij gaan samen met uw naaste boodschappen halen, brood voor de
                            lunch, of de boodschappen voor een heel diner. Samen bereiden we de
                            lievelings&shy;maaltijd van vroeger.</p>
                        <!--div class="read-more text-right"><a href="/boodschappen-en-koken.html" data-toggle="tooltip" data-placement="top" title="Klik om verder te lezen"><i class="fa fa-arrow-right"></i>Lees verder</a></div-->
                    </div>
                    <!--a href="boodschappen-en-koken.html"-->
                    <img class="card-img-top img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/img/boodschappen-en-koken.jpg" alt="Boodschappen en koken" />
                    <!--/a-->
                </div>

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Eropuit</h4>
                        <p class="card-text">Het is goed om iedere dag naar buiten te gaan. Samen gaan wandelen in
                            de buurt, het bos of op het strand. Gezellig naar een museum, naar de
                            film, naar een theater of concertgebouw of gewoon naar de kapper.
                        </p>
                        <!--div class="read-more text-right"><a href="eropuit.html" data-toggle="tooltip" data-placement="top" title="Klik om verder te lezen"><i class="fa fa-arrow-right"></i>Lees verder</a></div-->
                    </div>
                    <!--a href="eropuit.html"-->
                    <img class="card-img-top img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/img/eropuit.jpg" alt="Eropuit" />
                    <!--/a-->
                </div>

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Dagindeling</h4>
                        <p id="test" class="card-text">HerfstZorg begeleidt mensen met geheugen- en
                            ori&euml;ntatie&shy;problemen. Zaken als het plannen van activiteiten en het begeleiden
                            van de dagelijkse gang van zaken, het nemen van
                            besluiten en het structureren van de dag.
                        </p>
                        <!--div class="read-more text-right"><a href="dagindeling.html" data-toggle="tooltip" data-placement="top" title="Klik om verder te lezen"><i class="fa fa-arrow-right"></i>Lees verder</a></div-->
                    </div>
                    <!--a href="dagindeling.html"-->
                    <img class="card-img-top img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/img/dagindeling.jpg" alt="Dagindeling" />
                    <!--/a-->
                </div>

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Bijzondere momenten</h4>
                        <p class="card-text">In overleg begeleiden wij uw naaste tijdens bijzondere
                            momenten in het leven, zoals een bruiloft, een jubileum, een bezoek aan vrienden of
                            een begrafenis. </p>
                        <!--div class="read-more text-right"><a href="bijzondere-momenten.html" data-toggle="tooltip" data-placement="top" title="Klik om verder te lezen"><i class="fa fa-arrow-right"></i>Lees verder</a></div-->
                    </div>
                    <!--a href="bijzondere-momenten.html"-->
                    <img class="card-img-top img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/img/bijzondere-momenten.jpg" alt="Bijzondere momenten" />
                    <!--/a-->
                </div>
            </div>
        </div>
    </div>
</section>


<!-- TESTIMONIALS HEADING SECTION -->
<div class="parallax-window" data-parallax="scroll" data-image-src="<?php bloginfo('template_directory'); ?>/assets/img/testimonials.jpg" data-ios-fix="true" data-android-fix="true">
    <div class="row">
        <div class="col py-5">
            <h1 class="js-wp js-wp-home-5">Reviews</h1>
            <p class="js-wp js-wp-home-5 pb-5">Ervaringen van klanten</p>
        </div>
    </div>
</div>



<!-- TESTIMONIALS -->
<section id="testimonials">
    <div class="section-testimonials mt-5">
        <div class="container">

            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="row testimonial">
                        <div class="col-sm-4">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/vandijk.jpg" alt="Mevrouw Van Dijk">
                        </div>
                        <div class="col-sm-8">
                            <blockquote>
                                <i class="fa fa-quote-right"></i>Iedere keer als de bel gaat, weet ik dat het weer
                                een leuke dag wordt.
                                <hr class="testumonials-hr"/>

                                <cite>&#8212 Mevrouw Van Dijk, Santpoort</cite>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="row testimonial">
                        <div class="col-sm-4">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/mulder.jpg" alt="De heer Mulder">
                        </div>
                        <div class="col-sm-8">
                            <blockquote>
                                <i class="fa fa-quote-right"></i>Ze neemt de tijd voor mij om naar mij te luisteren en
                                aandacht te geven.
                                <hr class="testumonials-hr"/>
                                <cite>&#8212 De heer Mulder, Amstelveen</cite>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="row testimonial">
                        <div class="col-sm-4">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/rentenaar.jpg" alt="Mevrouw Rentenaar">
                        </div>
                        <div class="col-sm-8">
                            <blockquote>
                                <i class="fa fa-quote-right"></i>Het is fijn dat ik niet alleen naar het ziekenhuis
                                ga, en dat er iemand meeluistert naar de arts.
                                <hr class="testumonials-hr"/>
                                <cite>&#8212 Mevrouw Rentenaar, Heemsteede</cite>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
            </p>
        </div>
    </div>
</section>
</div>
<?php
get_footer();

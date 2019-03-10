<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp-herfstzorg
 */

get_header();
?>
<?php if (false): ?>
  <div id="blog">
    <div class="container">

        <h1 class="js-wp js-wp-title h1 py-5 text-center"><?php single_post_title(); ?></h1>


        <div class="row" id="primary">
            <main id="content" class="col-sm-8 js-wp js-wp-about-1" role="main">

                <article class="post">
                    <header>
                        <h3><a href="#">Cor</a></h3>
                        <div class="post-details">
                            <i class="fa fa-user"></i><a href="#">Astrid</a>
                            <i class="fa fa-clock-o"></i><a href="#"><time>August 7, 2018 </time></a>
                            <i class="fa fa-folder"></i><a href="#">Ervaringen</a>
                            <i class="fa fa-tags"></i><a href="#">Tag 1</a>, <a href="#">Tag 2</a>

                            <div class="post-comments-badge">
                                <a href="#"><i class="fa fa-comments"></i>168</a>
                            </div> <!-- post-comments-badge -->
                        </div> <!-- post-details -->
                    </header> <!-- header -->
                    <div class="post-image">
                        <img src="http://herfstzorg.test/wp-content/uploads/2019/03/WhatsApp-Image-2019-03-10-at-10.34.55-e1552213681882.jpeg" alt="Hero image"/>
                    </div> <!-- post-image -->
                    <div class="post-excerpt">
                        <p>
                            De deur gaat open, een hoogbejaarde dame staat voor me. Vriendelijk kijkt ze me aan. Ergens bespeur ik iets terughoudends en tegelijkertijd neemt ze me nieuwsgierig in zich op. Haar gezicht is verouderd, haar ogen nog vol leven. We schudden de hand en stellen ons aan ...
                            <!--elkaar voor. Voordat ik het weet zitten we op de bank, haar vaste verzorgster veilig aan haar zijde, en praat ze honderd uit. Over haar leven, korte verhaaltjes van toen, maar ook van nu. Met haar ietwat krakerige stem rijgt ze ze moeiteloos aan elkaar. Geen haast, maar bedachtzaam en kalm. Trots, lichte weemoed en humor wisselen elkaar af.-->
                            <!--Even later, in de keuken, met ieder een dampende kop thee voor ons. Oh ja...een glimlach verschijnt op haar gezicht, oh kind, daar kom ik weer met mijn levensverhalen. Stom he. Nee, juist niet, leuk! Roepen we in koor. Voor haar aanleiding om verder te vertellen.-->
                            <!--In een oogopslag reist ze terug in de tijd. Een verlegen meisje was ze, dat er van hield zich op te tutten en zich mooi te kleden. Niet voor de jongens, maar voor zichzelf. Door haar leeftijd heen zie ik een knappe vrouw, vast en zeker bewonderd door menig man.-->
                            <!--Een jaar of zestien was ze en werd uitgevraagd door een jongeman, Cor. Ondanks haar bedankje verzocht haar moeder haar vriendelijk doch dringend het aanbod te accepteren, het was tenslotte een leuke vent en zo ging dat vroeger. Tijdens de afspraak belandde ze met de jongen in kwestie op het politiebureau waar ze verhoord werden. Cor had een botsing veroorzaakt met haar naast zich in de bijrijdersstoel. Ze hadden waarschijnlijk zitten zoenen was de conclusie van de diender. Verontwaardigd ontkende ze deze aanname, ze wilde tenslotte niets van de beste knaap. Uiteindelijk werd ze naar huis gestuurd en zo liep alles met een sisser af. Cor heeft ze niet meer gezien. Haar ogen knijpen zich even samen, dan weer die glimlach. Een trotse en tevreden blik trekken over haar gezicht.-->
                            <!--In een fractie van een seconde is ze terug, zittend aan de keukentafel met ons naast en tegenover haar. Een voor een kijkt ze ons aan, wat denken jullie? Zullen we nog een kopje thee?-->
                        <div class="fadeout"></div>
                        <a href="#">Lees verder</a>
                        </p>
                    </div> <!-- post -excerpt -->
                </article>
            </main> <!-- main -->

            <!-- === SIDEBAR === -->
            <aside class="js-wp js-wp-about-2 col-sm-4">

                <div class="widget">
                    <h4>Join our Mailing List</h4>
                    <p>Keep up to date with the latest news, and we'll <strong>send you something special as a thank you!</strong></string></p>
                    <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">
                        Click here to subscribe
                    </button>
                </div> <!-- widget -->

                <div class="widget">
                    <form role="form" class="search-form">
                        <label for="sidebar-search" class="sr-only">Search the blog</label>
                        <input type="text" id="sidebar-search" placeholder="Search the blog..." />
                    </form>
                </div> <!-- widget -->

                <div class="widget">
                    <h4>Recent Posts</h4>
                    <ul>
                        <li>
                            <a href="#">Blog post #1</a>
                        </li>
                        <li>
                            <a href="#">Blog post #2</a>
                        </li>
                        <li>
                            <a href="#">Blog post #3</a>
                        </li>
                        <li>
                            <a href="#">Blog post #4</a>
                        </li>
                        <li>
                            <a href="#">Blog post #5</a>
                        </li>
                    </ul>
                </div> <!-- widget -->

                <div class="widget">
                    <h4>Categories</h4>
                    <ul>
                        <li>
                            <a href="#">Category #1</a>
                        </li>
                        <li>
                            <a href="#">Category #2</a>
                        </li>
                        <li>
                            <a href="#">Category #3</a>
                        </li>
                        <li>
                            <a href="#">Category #4</a>
                        </li>
                        <li>
                            <a href="#">Category #5</a>
                        </li>
                        <li>
                            <a href="#">Category #6</a>
                        </li>
                    </ul>
                </div> <!-- widget -->
            </aside>
        </div> <!-- primary -->
    </div> <!-- container -->
  </div>
<?php endif ?>

    <div id="blog">
        <div class="container blog">

            <h1 class="js-wp js-wp-title h1 py-5 text-center"><?php single_post_title(); ?></h1>

            <div class="row" id="primary">
                <main id="content" class="col-sm-8 js-wp js-wp-about-1" role="main">
                    <?php if ( have_posts() ) : ?>

                        <?php if ( is_home() && ! is_front_page() ) : ?>
                            <header>
                                <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                            </header>
                        <?php endif; ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <?php get_template_part( 'template-parts/content', get_post_type() ); ?>
                        <?php endwhile; ?>

                        <?php the_posts_navigation(); ?>

                    <?php else : ?>
                        <?php get_template_part( 'template-parts/content', 'none' ); ?>
                    <?php endif; ?>
                </main> <!-- content -->
                <!-- === SIDEBAR === -->
                <aside class="js-wp js-wp-about-2 col-sm-4">
                    <?php get_sidebar(); ?>
                </aside>

            </div> <!-- primary -->
        </div> <!-- container -->
    </div> <!-- blog -->

<?php
get_footer();

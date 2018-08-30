<?php
/*
    Template Name: Contact Page
*/
$contact_postadres  = get_field('contact_postadres');
$contact_whatsapp   = get_field('contact_whatsapp');
$contact_kvk        = get_field('contact_kvk');
$contact_emailadres = get_field('contact_emailadres');
$contact_route_ov   = get_field('contact_route_ov');
$contact_route_car  = get_field('contact_route_car');


get_header();
?>
    <section id="contact">


        <div class="container">

            <h1 class="js-wp js-wp-title h1 my-5 text-center">Contact</h1>

            <div class="row mb-5">

                <div class="js-wp js-wp-contact-2 col-sm-6 address">
                    <table class="table">
                        <tr>
                            <td><i class="fa fa-envelope-open" data-toggle="tooltip" data-placement="top" title="Postadres"></i></td>
                            <td><span data-toggle="tooltip" data-placement="top" title="Postadres"><?php echo $contact_postadres; ?></span></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-whatsapp" data-toggle="tooltip" data-placement="top" title="WhatsApp"></i></td>
                            <td><span data-toggle="tooltip" data-placement="top" title="WhatsApp"><?php echo $contact_whatsapp; ?></span></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-briefcase" data-toggle="tooltip" data-placement="top" title="Kamer van Koophandel"></i></td>
                            <td><span data-toggle="tooltip" data-placement="top" title="Kamer van Koophandel"><?php echo $contact_kvk; ?></span></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-at" data-toggle="tooltip" data-placement="top" title="E-mailadres"></i></td>
                            <td><span data-toggle="tooltip" data-placement="top" title="E-mailadres"><a href="mailto:<?php echo $contact_emailadres; ?>"><?php echo $contact_emailadres; ?></a></span></td>
                        </tr>

                    </table>
                </div>

                <div class="js-wp js-wp-contact-3 col-sm-6 directions">

                    <!-- ACCORDION -->
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <i class="fa fa-train active" data-toggle="tooltip" data-placement="top" title="Routebeschrijving openbaar vervoer"></i>
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <?php echo $contact_route_ov; ?>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <i class="fa fa-car"  data-toggle="tooltip" data-placement="top" title="Routebeschrijving auto"></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    <?php echo $contact_route_car; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- GOOGLE MAP -->
    <div id="map"></div>

<?php
get_footer();

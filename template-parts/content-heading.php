<?php
// Advanced Custom Fields
$heading_image          = get_field('heading_image');
$heading_caption        = get_field('heading_caption');
$heading_lead           = get_field('heading_lead');
$heading_call_to_action = get_field('heading_call_to_action')
?>
<section id="showcase">
    <div id="myCarousel" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item carousel-image-1 active">
                <img class="d-block mx-auto img-fluid"
                     src="<?php echo $heading_image['url']; ?>"
                     alt="<?php echo $heading_image['alt']; ?>"
                >
                <div class="container">
                    <div class="carousel-caption d-none d-sm-block mb-auto">
                        <h2 class="display-3"><?php echo $heading_caption; ?></h2>
                        <p class="lead d-none d-md-inline"><?php echo $heading_lead; ?></p>
                        <?php if (strlen(trim($heading_call_to_action))) { ?>
                            <p>
                                <a href="#cards-section" class="btn btn-primary btn-md"><?php echo $heading_call_to_action; ?></a>
                            </p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
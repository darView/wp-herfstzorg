<?php
// Advanced Custom Fields
$carousel_image_1   = get_field('carousel_image_1');
$carousel_caption_1 = get_field('carousel_caption_1');
$carousel_lead_1    = get_field('carousel_lead_1');

$carousel_image_2   = get_field('carousel_image_2');
$carousel_caption_2 = get_field('carousel_caption_2');
$carousel_lead_2    = get_field('carousel_lead_2');

$carousel_image_3   = get_field('carousel_image_3');
$carousel_caption_3 = get_field('carousel_caption_3');
$carousel_lead_3    = get_field('carousel_lead_3');
?>
<section id="showcase">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item carousel-image-1 active">
                <img class="d-block mx-auto img-fluid"
                     src="<?php echo $carousel_image_1['url']; ?>"
                     alt="<?php echo $carousel_image_1['alt']; ?>"
                >
                <div class="container">
                    <div class="carousel-caption d-none d-sm-block mb-auto">
                        <h1 class="display-3"><?php echo $carousel_caption_1; ?></h1>
                        <p class="lead d-none d-md-inline"><?php echo $carousel_lead_1; ?></p>
                        <!--a href="#cards-section" class="btn btn-primary btn-lg">Kom meer te weten</a-->
                    </div>
                </div>
            </div>

            <div class="carousel-item carousel-image-2">
                <img class="d-block mx-auto img-fluid"
                     src="<?php echo $carousel_image_2['url']; ?>"
                     alt="<?php echo $carousel_image_2['alt']; ?>"
                >
                <div class="container">
                    <div class="carousel-caption d-none d-sm-block mb-auto">
                        <h1 class="display-3"><?php echo $carousel_caption_2; ?></h1>
                        <p class="lead d-none d-md-inline"><?php echo $carousel_lead_2; ?></p>
                        <!--a href="#cards-section" class="btn btn-primary btn-lg">Kom meer te weten</a-->
                    </div>
                </div>
            </div>

            <div class="carousel-item carousel-image-3">
                <img class="d-block mx-auto img-fluid"
                     src="<?php echo $carousel_image_3['url']; ?>"
                     alt="<?php echo $carousel_image_3['alt']; ?>"
                >
                <div class="container">
                    <div class="carousel-caption d-none d-sm-block mb-auto">
                        <h1 class="display-3"><?php echo $carousel_caption_3; ?></h1>
                        <p class="lead d-none d-md-inline"><?php echo $carousel_lead_3; ?></p>
                        <!--a href="#cards-section" class="btn btn-primary btn-lg">Kom meer te weten</a-->
                    </div>
                </div>
            </div>
        </div>

        <a href="#myCarousel" data-slide="prev" class="carousel-control-prev">
            <span class="carousel-control-prev-icon"></span>
        </a>

        <a href="#myCarousel" data-slide="next" class="carousel-control-next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</section>
<?php

if ( !($alt = get_the_post_thumbnail_caption()) ) {
    $alt = get_the_title();
}

?>
<div class="col-sm-6 col-md-4">
    <div class="card mb-3 mt-3">
        <a href="<?php echo the_permalink();?>" data-toggle="tooltip" data-placement="top" title="Klik om verder te lezen">

            <?php
                // ensure 3000px x 2000px when uploading to library */
                the_post_thumbnail( 'medium', ['class' => 'card-img-top img-fluid img-tension'] );
                ?>
            <div class="card-img-overlay">
                <h3 class="card-title"><?php echo the_title(); ?></h3>
            </div>
        </a>
    </div>
</div>
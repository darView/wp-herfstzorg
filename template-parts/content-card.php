<?php
    $services_image = get_field('services_image');
//    print_r($serices_image); die();
?>
<div class="col-sm-4">
    <div class="card">
        <a href="<?php echo the_permalink();?>" data-toggle="tooltip" data-placement="top" title="Klik om verder te lezen">
                <img
                class="card-img-top img-fluid"
                src="<?php echo $services_image['sizes']['medium']; ?>"
                alt="<?php echo $services_image['alt'] ?>"
            />

            <div class="card-img-overlay">
                <h3 class="card-title"><?php echo the_title(); ?></h3>
            </div>
        </a>
    </div>
</div>
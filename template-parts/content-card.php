<div class="card">
    <div class="card-body">
        <h4 class="card-title"><?php echo the_title(); ?></h4>
        <p class="card-text"><?php echo the_field('services_intro'); ?></p>
        <!--div class="read-more text-right"><a href="/doktersbezoek.html" data-toggle="tooltip" data-placement="top" title="Klik om verder te lezen"><i class="fa fa-arrow-right"></i>Lees verder</a></div-->
    </div>
    <!--a href="/doktersbezoek.html" -->
    <?php $serices_image = get_field('services_image'); ?>
    <img
        class="card-img-top img-fluid"
        src="<?php echo $serices_image['url']; ?>"
        alt="<?php echo $serices_image['alt'] ?>"
    />
    <!--/a-->
</div>
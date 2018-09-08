<div class="card">
    <div class="card-body">
        <h4 class="card-title"><?php echo the_title(); ?></h4>
        <p class="card-text"><?php echo the_field('services_intro'); ?></p>
        <?php if (!empty(get_field('services_body'))) : ?>
            <div class="fadeout"></div>
            <div class="read-more text-left"><a href="<?php echo the_permalink();?>" data-toggle="tooltip" data-placement="top" title="Klik om verder te lezen"><i class="fa fa-arrow-right"></i>Lees verder</a></div>
        <?php endif; ?>
    </div>
    <?php $serices_image = get_field('services_image'); ?>
    <img
        class="card-img-top img-fluid"
        src="<?php echo $serices_image['url']; ?>"
        alt="<?php echo $serices_image['alt'] ?>"
    />
</div>
<?php
// get the post id for the blog page.

$heading_background_position_y = 30;
?>

<div class="jumbotron d-flex align-items-center" style="background-image:url(<?php echo  bloginfo('template_directory'); ?>/assets/img/404.jpg); background-position-y: <?php echo $heading_background_position_y; ?>% ">
    <div class="container align-items-center text-center">
        <h1 class="h1 mt-3">Oeps!</h1>
        <p class="lead d-none d-sm-inline">Dit is niet de pagina waarnaar u op zoek bent.</p>
    </div>
</div>
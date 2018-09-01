<nav id="mainNavbar" class="navbar sticky-top navbar-expand-sm mb-2">

    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php bloginfo('template_directory'); ?>/assets/img/navbar_logo.jpg" alt="HerfstZorg"/>
    </a>

    <button class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <?php
        wp_nav_menu([
            'container_id'      => 'navbarSupportedContent',
            'theme_location'    => 'primary',
            'container'         => 'nav',
            'container_class'   => 'collapse navbar-collapse',
            'menu_class'        => 'navbar-nav ml-auto',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ]);
    ?>
    <div class="rpi-progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
        <div class="rpi-progress-bar__position" aria-hidden="true"></div>
    </div>
</nav>
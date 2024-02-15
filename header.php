<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php bloginfo('name'); ?>
        <?php wp_title(); ?>
        <?php if (is_front_page()) {
            echo "| ", bloginfo('description');
        } ?>
    </title>
    <?php wp_head() ?>
</head>

<body <?php body_class('bodyDark'); ?>>

    <!-- Navbar -->

    <header id="header">
        <nav id="navigation" class="navbar container navbar-expand-lg ">
            <div class="container-fluid">
                <?php
                $logoURL = get_header_image();
                $site_title = get_option('prathamspace_site_title', get_bloginfo('name'));
                ?>
                <a class="navbar-brand" href="<?php echo site_url(); ?>">
                    <!-- <img class="logo" src="<?php echo $logoURL ?>" alt=""> -->
                    <!-- प्रथम -->
                    <?= $site_title; ?>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarZone"
                    aria-controls="navbarZone" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon "></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarZone">
                    <?php
                    wp_nav_menu(
                        array(
                            'menu' => 'primary-menu',
                            'theme_location' => 'primary',
                            'depth' => 2,
                            'container' => 'false',
                            'menu_class' => 'navbar-nav me-auto',
                            'fallback_cb' => 'wp_bootstrap_navlist_walker::fallback',
                            'walker' => new wp_bootstrap_navlist_walker()
                        )
                    );
                    ?>
                    <div class="d-flex searchBox">
                        <i class="bi bi-search searchIcon"></i>
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Navbar Ending  -->
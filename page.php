<?php get_header();  ?>


<!-- Main -->

<section class="container zoro-main">

    <!-- Breadcrumb -->
    <div class="zoro-breadcrumb text-light">
        <span class="text">Home</span>
        <span class="text">><a href=""> <?php echo the_title(); ?></a></span>
        <h1><?php echo the_title(); ?></h1>
    </div>
    <!--  -->

    <div class="row">
        <div class="col-sm-12 col-md-9 col-lg-9 text-light">
            <h2>🚧Working on it🚧</h2>
            <div class="mBottom"></div>
        </div>
        <div class="col-sm-12 col-md-9 col-lg-3 zoroWidget">
            <div class="text-light">
                <!-- Toggle Slider -->
                <label class="switch">
                    <input id="mode" type="checkbox">
                    <span class="slider round"></span>
                </label>
                <!-- Toggle Slider Ending  -->


            </div>
            <!-- Sidebar -->
            <?php dynamic_sidebar('zoro-sidebar'); ?>
            <!-- Sidebar Ending  -->
        </div>
    </div>
</section>

<!-- Ending Main -->






<? get_footer(); ?>
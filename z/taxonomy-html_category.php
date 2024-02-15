<?php get_header();  ?>


<!-- Main -->

<section class="container zoro-main">

    <!-- Breadcrumb -->
    <div class="zoro-breadcrumb text-light">
        <span class="text">Home</span>
        <h1 class="text-capitalize green"><?php echo get_the_title( ); ?></a></h1>
    </div>
    <!--  -->

    <div class="row">
        <div class="col-sm-12 col-md-9 col-lg-9 text-light zoroBlogPosts">

            <div class="singlePost">
                <div class="entry"><?php the_excerpt(); ?></div>
                <span class="postcategory">
                    <?php the_category(' '); ?>

                </span>
                <?php if (has_tag()) : ?>
                    <?php echo get_the_tag_list(); // Display tags as links 
                    ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 zoroWidget">
            <div class="text-light">
                <!-- Toggle Slider -->
                <!-- <label class="switch">
                    <input id="mode" type="checkbox">
                    <span class="slider round"></span>
                </label> -->
                <!-- Toggle Slider Ending  -->


            </div>
            <!-- Sidebar -->
            <div class="codesidebar">
                <div id="mainSidebar">
                    <h2 class="widget-title"><i class="bi bi-code-slash"></i> HTML Tutorial</h2>
                    <ul class="">
                        <?php
                        $args = array(
                            'taxonomy' => 'html_category',
                            'orderby' => 'name',
                            'order'   => 'ASC'
                        );

                        $cats = get_categories($args);

                        foreach ($cats as $cat) {
                        ?>
                            <li>
                                <a href="<?php echo get_category_link($cat->term_id) ?>">
                                    <?php echo $cat->name; ?>
                                </a>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <!-- Sidebar Ending  -->
        </div>
    </div>
</section>

<!-- Ending Main -->






<? get_footer(); ?>
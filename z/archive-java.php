<?php get_header();  ?>


<!-- Main -->

<section class="container zoro-main">

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item breadcrumb-active yellow text-capitalize" aria-current="page"><?php echo get_post_type(); ?></a></li>
        </ol>
        <h1 class="green text-capitalize"><?php echo get_post_type(); ?></h1>
    </nav>
    <!--  -->

    <div class="row zoroBlogBox">
        <div class="col-sm-12 col-md-9 col-lg-9 text-light zoroBlogPosts">
            <?php
            $args = array(
                'post_type' => 'java',
                "order" => "ASC",
            );
            $posts = get_posts($args);
            if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="singlePost">
                        <h2 class="blogHeading green"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="entry"><?php the_excerpt(); ?></div>
                        <p class="text-end readMore"><a href="<?php the_permalink(); ?>">Read More</a></p>
                        <span class="postcategory">
                            <?php the_category(' '); ?>

                        </span>
                        <?php if (has_tag()) : ?>
                            <?php echo get_the_tag_list(); // Display tags as links 
                            ?>
                        <?php endif; ?>
                        <div class="authorCard d-flex">

                        </div>
                    </div>
                <?php endwhile;
            else : ?>
                <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
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
                    <h2 class="widget-title"><i class="bi bi-code-slash"></i> Java Tutorial</h2>
                    <ul class="">
                        <?php
                        $args = array(
                            'taxonomy' => 'java_category',
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
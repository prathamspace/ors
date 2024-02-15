<?php get_header();  ?>


<!-- Main -->

<section class="container zoro-main">

    <!-- Breadcrumb -->

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item breadcrumb-active yellow" aria-current="page"><a class="yellow" href=""> <?php single_cat_title('', true); ?></a></li>
        </ol>
        <h1> <?php single_cat_title('', true); ?></h1>
        <?php
        $category = get_category(get_query_var('cat'));
        $cat_id = $category->cat_ID;
        ?>
    </nav>
    <!--  -->

    <div class="row zoroBlogBox" >
        <div class="col-sm-12 col-md-9 col-lg-9 text-light zoroBlogPosts">
            <?php
            $args = array(
                "category" => $cat_id,
            );
            $posts = get_posts($args);
            if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="singlePost">
                        <h2 class="blogHeading green "><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <span class="blogDate"><?php the_time('F jS, Y'); ?></span>
                        <div class="entry"><?php the_excerpt(); ?></div>
                        <p class="text-end readMore"><a href="<?php the_permalink(); ?>">Read More</a></p>
                        <span class="postcategory">
                            <?php the_category(' '); ?>

                        </span>
                        <div class="authorCard d-flex">
                            <div><?php echo get_avatar(get_the_author_meta('ID'), 96); ?></div>
                            <div class="authorMeta">
                                <span class="author name"><?php the_author_posts_link(); ?></span>
                                <span class="blogDate"><?php the_time('F jS, Y'); ?></span>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
            else : ?>
                <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
        </div>
        <div class="col-sm-12 col-md-9 col-lg-3 zoroWidget">
            <div class="text-light">
                <!-- Toggle Slider -->
                <!-- <label class="switch">
                    <input id="mode" type="checkbox">
                    <span class="slider round"></span>
                </label> -->
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
<?php get_header();  ?>


<!-- Main -->

<section class="container zoro-main">

    <!-- Breadcrumb -->
    <div class="zoro-breadcrumb text-light">
        <span class="text"><a href="<?php echo site_url(); ?>">Home</a></span>
        <span class="text">><a href=""> <?php single_tag_title('', true); ?></a></span>
        <h1>Category: <?php single_tag_title('', true); ?></h1>

    </div>
    <!--  -->

    <div class="row">
        <div class="col-sm-12 col-md-9 col-lg-9 text-light zoroBlogPosts">
            <?php
            $tag_name = single_tag_title('', true);
            $tag = get_term_by('name', $tag_name, 'post_tag');
            $args =
                array(
                   'tag_id'


                );
            $posts = get_posts($args);
            if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="singlePost">
                        <h2 class="blogHeading "><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <span class="blogDate"><?php the_time('F jS, Y'); ?></span>
                        <div class="entry"><?php the_content(); ?></div>
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
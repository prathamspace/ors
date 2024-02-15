<?php get_header(); ?>


<section class="container authorPage">
    <div class="authorBox"> 
        <div class="authorImage">
            <?php echo get_avatar(get_the_author_meta('ID'),); ?>
        </div>
        <h1><?php the_author_posts_link(); ?></h1>
        <h2 class="text-center"><span>Full-Stack </span>Software Engineer.</h2>
        <p class="text-center text-light"><?php $authorDesc = the_author_meta('description'); echo $authorDesc; ?></p>
    </div>
</section>

<?php get_footer(); ?>
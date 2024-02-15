<?php get_header();  ?>


<!-- Main -->

<section class="container zoro-main ZoroBLOG">

    <!-- Breadcrumb -->
   
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item breadcrumb-active yellow" aria-current="page"><?php echo the_title(); ?></a></li>
        </ol>
        <h1 class="green"><?php echo the_title(); ?></h1>
    </nav>
    <!--  -->

    <div class="row singlePost">
        <div class=" text-light">
            <p><?php the_content(); ?></p>
            <div class="mBottom"></div>
        </div>

      
       
    </div>
</section>

<!-- Ending Main -->






<?php get_footer(); ?>
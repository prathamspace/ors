<?php

// Template Name: Websites
get_header();
?>

<section class="container websitePage">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item breadcrumb-active yellow" aria-current="page">Websites</li>
        </ol>
        <h1>Websites</h1>
    </nav>
    <div class="projects">
        <div class="row projectBox">
            <div class="col-md-6 col-lg-6 projectBoxImg">
                <img class="w-100" src="<?php echo get_template_directory_uri() . "/assets/img/sharingan.png" ?>">
            </div>
            <div class="col-md-6 col-lg-6 projectBoxContent">
                <h3>Sharingan</h3>
                <p> Online Study Material like notes, questions papers, programming problems solutions.</p>
                <h5>Languages Used</h5>
                <div>
                    <span class="badge rounded-pill green-background">HTML</span>
                    <span class="badge rounded-pill blue-background">CSS</span>
                    <span class="badge rounded-pill blue-background">JS</span>
                    <span class="badge rounded-pill green-background">HTML</span>
                </div>
                <div id="contactMe">
                    <a class="btn btn-light border-0 yellow-background contactMe" href="#" role="button">View More</a>
                </div>
            </div>
        </div>
        <div class="row projectBox mobileProject">
            <div class="col-md-6 col-lg-6 projectBoxContent">
                <h3>Sharingan</h3>
                <p> Online Study Material like notes, questions papers, programming problems solutions.</p>
                <h5>Languages Used</h5>
                <div>
                    <span class="badge rounded-pill green-background">HTML</span>
                    <span class="badge rounded-pill blue-background">CSS</span>
                    <span class="badge rounded-pill blue-background">JS</span>
                    <span class="badge rounded-pill green-background">HTML</span>
                </div>
                <div id="contactMe">
                    <a class="btn btn-light border-0 yellow-background contactMe" href="#" role="button">View More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 projectBoxImg">
                <img class="w-100" src="<?php echo get_template_directory_uri() . "/assets/img/sharingan.png" ?>">
            </div>

        </div>
    </div>
</section>


<?php get_footer(); ?>
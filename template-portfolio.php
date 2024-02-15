<?php

// Template Name: Websites
get_header();
?>

<section class="container websitePage">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item breadcrumb-active yellow" aria-current="page"><?php echo get_the_title() ?></li>
        </ol>
        <h1>Websites</h1>
    </nav>
    <div class="projects">
    <div class="row projectBox">
            <div class="col-md-6 col-lg-6 projectBoxImg">
                <img class="w-100" src="<?php echo get_template_directory_uri() . "/assets/img/ultradreamerz.png" ?>">
            </div>
            <div class="col-md-6 col-lg-6 projectBoxContent">
                <h3>Ultra Dreamerz</h3>
                <p> Online Study Material like notes, questions papers, programming problems solutions.</p>
                <h5>Languages Used</h5>
                <div>
                    <span class="badge rounded-pill green-background">HTML</span>
                    <span class="badge rounded-pill blue-background">CSS</span>
                    <span class="badge rounded-pill blue-background">JS</span>
                    <span class="badge rounded-pill green-background">HTML</span>
                </div>
                <div id="buttons">
                    <a class=" contactMe" href="https://ultradreamerz.co.uk/" role="button" target="_blank"> <button class="draw meet contactMe">View More</button></a>
                </div>
            </div>
        </div>
        <div class="row projectBox mobileProject">
            <div class="col-md-6 col-lg-6 projectBoxContent">
                <h3>Hotel Shiva Sanctuary</h3>
                <p> Online Study Material like notes, questions papers, programming problems solutions.</p>
                <h5>Languages Used</h5>
                <div>
                    <span class="badge rounded-pill green-background">HTML</span>
                    <span class="badge rounded-pill blue-background">CSS</span>
                    <span class="badge rounded-pill blue-background">JS</span>
                    <span class="badge rounded-pill green-background">PHP</span>
                    <span class="badge rounded-pill green-background">WordPress</span>
                    <span class="badge rounded-pill green-background">SQL</span>
                </div>
                <div id="buttons">
                    <a class=" contactMe" href="https://shivasanctuary.com/" role="button" target="_blank"> <button class="draw meet contactMe">View More</button></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 projectBoxImg">
                <img class="w-100" src="<?php echo get_template_directory_uri() . "/assets/img/shivasanctuary.png" ?>">
            </div>

        </div>
        <div class="row projectBox">
            <div class="col-md-6 col-lg-6 projectBoxImg">
                <img class="w-100" src="<?php echo get_template_directory_uri() . "/assets/img/thelimpo.png" ?>">
            </div>
            <div class="col-md-6 col-lg-6 projectBoxContent">
                <h3>The Limpo</h3>
                <p> Dry Car Wash business supporting online booking through there website.</p>
                <h5>Languages Used</h5>
                <div>
                    <span class="badge rounded-pill green-background">HTML</span>
                    <span class="badge rounded-pill blue-background">CSS</span>
                    <span class="badge rounded-pill blue-background">JS</span>
                    <span class="badge rounded-pill blue-background">jQuery</span>
                    <span class="badge rounded-pill green-background">PHP</span>
                    <span class="badge rounded-pill green-background">WordPress</span>
                    <span class="badge rounded-pill green-background">SQL</span>
                </div>
                <div id="buttons">
                    <a class=" contactMe" href="https://thelimpo.com/" role="button" target="_blank"> <button class="draw meet contactMe">View More</button></a>
                </div>
            </div>
        </div>
        <div class="row projectBox mobileProject">
            <div class="col-md-6 col-lg-6 projectBoxContent">
                <h3>Smag Selling Solutions</h3>
                <p> Real Estate websites deals in buying and selling propertises.</p>
                <h5>Languages Used</h5>
                <div>
                    <span class="badge rounded-pill green-background">HTML</span>
                    <span class="badge rounded-pill blue-background">CSS</span>
                    <span class="badge rounded-pill blue-background">JS</span>
                    <span class="badge rounded-pill green-background">PHP</span>
                    <span class="badge rounded-pill green-background">WordPress</span>
                    <span class="badge rounded-pill green-background">SQL</span>
                </div>
                <div id="buttons">
                    <a class=" contactMe" href="https://smagsellingsolutions.com/" role="button" target="_blank"> <button class="draw meet contactMe">View More</button></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 projectBoxImg">
                <img class="w-100" src="<?php echo get_template_directory_uri() . "/assets/img/smagsellingsolutions.png" ?>">
            </div>

        </div>
    </div>
</section>


<?php get_footer(); ?>
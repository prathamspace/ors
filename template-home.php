<?php
// Template Name: Home
get_header();
?>

<section class="homepage container">
    <!-- Banner -->

    <div class="banner">
        <h1 class="text-center">Pratham Kumar </h1>
        <h2 class="text-center"><span>Full-Stack </span>Software Engineer.</h2>
        <p class="text-center"> Based in Chandigarh, India. I have developed many websites for different niches starting from business portfolio to full-fledged E-commerce solutions. I'm passionate about cutting-edge technologies, pixel-prefect, interactive interfaces and intutively implemented UX</p>
        <div id="buttons">
            <a class=" contactMe" href="<?php echo site_url(); ?>/contact" role="button"> <button class="draw meet contactMe">Contact Me</button></a>
        </div>
    </div>

    <!-- Banner Ending -->

    <!-- Skills -->

    <div class="skills">
        <h2 class="text-center"><span>Skills</span> </h2>
        <div class="skillsSlider text-light text-center">
            <div><img src="<?php echo get_template_directory_uri() . "/assets/img/react.js.png" ?>" alt=""></div>
            <div><img src="<?php echo get_template_directory_uri() . "/assets/img/js.png" ?>" alt=""></div>
            <div><img src="<?php echo get_template_directory_uri() . "/assets/img/jquery.png" ?>" alt=""></div>
            <div><img src="<?php echo get_template_directory_uri() . "/assets/img/php.png" ?>" alt=""></div>
            <div><img src="<?php echo get_template_directory_uri() . "/assets/img/sql.png" ?>" alt=""></div>
            <div><img src="<?php echo get_template_directory_uri() . "/assets/img/node.js.png" ?>" alt=""></div>
            <div><img src="<?php echo get_template_directory_uri() . "/assets/img/bootstrap.png" ?>" alt=""></div>
            <div><img src="<?php echo get_template_directory_uri() . "/assets/img/sass.png" ?>" alt=""></div>
            <div><img src="<?php echo get_template_directory_uri() . "/assets/img/css3.png" ?>" alt=""></div>
            <div><img src="<?php echo get_template_directory_uri() . "/assets/img/html.png" ?>" alt=""></div>
        </div>
    </div>

    <!-- Skills ending -->


    <!-- Projects -->
    <div class="projects">
        <h2 class="text-center"><span>Projects</span> </h2>
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
        <div id="buttons">
                    <a class=" contactMe" href="https://smagsellingsolutions.com/" role="button" target="_blank"> <button class="draw meet contactMe">View More</button></a>
                </div>
        
    </div>
    <!-- Projects  Ending-->


    <!-- Contact Me -->
    <section class="container contactpage">
        <h2 class="text-center"><span>Contact Me</span></h2>
        <?php echo do_shortcode('[contact-form-7 id="72" title="Contact Me"]'); ?>
    </section>



    <!-- Contact Me Ending -->



</section>


<?php get_footer(); ?>
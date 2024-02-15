<?php
// Template Name: Resume
get_header();
?>

<main class="container">




    <div class="row resume">
        <div class=" col-sm-12 col-md-9 col-lg-9">
            <h1>Resume</h1>
            <h2>Links</h2>
            <!-- Social Buttons -->
            <div class="row sButtons">
                <div class="col green-background">
                    <a href="">Download Resume</a>
                </div>
                <div class="col yellow-background">
                    <a href="https://www.linkedin.com/in/prathamspace/">Linkdln</a>
                </div>

                <div class="col red-background">
                    <a href="https://github.com/prathamspace">Github</a>
                </div>
            </div>

            <!-- Ending -->
            <div class="space"></div>
            <h2>Work Experience</h2>
            <table class="table">
                <thead class="">
                    <tr>
                        <th scope="col">COMPANY</th>
                        <th scope="col">DESCRIPTION</th>
                        <th scope="col">YEAR</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Appzroot Innovation Inc.</td>
                        <td>Appzroot specialized in building WebRTC & IoT based apps that are secure and high on performance.</td>
                        <td>Nov 2022 - Present</td>
                    </tr>
                    <tr>
                        <td>Hansy Global EXIM</td>
                        <td>Hansy Global Exim LLP importers of industrial commercial products including Galvalume, colour coated products , etc.</td>
                        <td>Aug 2022 - Nov 2022</td>
                    </tr>
                </tbody>
            </table>
            <div class="space"></div>
            <h2>Skills</h2>
            <div>
                <span class="badge rounded-pill yellow-background text-bg-light">HTML</span>
                <span class="badge rounded-pill  green-background text-bg-light">CSS</span>
                <span class="badge rounded-pill red-background text-bg-light">SASS</span>
                <span class="badge rounded-pill  yellow-background text-bg-light">Bootstrap</span>
                <span class="badge rounded-pill  green-background text-bg-light">JavaScript</span>
                <span class="badge rounded-pill  yellow-background text-bg-light">jQuery</span>
                <span class="badge rounded-pill  red-background text-bg-light">PHP</span>
                <span class="badge rounded-pill  green-background text-bg-light">SQL</span>
                <span class="badge rounded-pill yellow-background text-bg-light">MongoDB</span>
                <span class="badge rounded-pill red-background text-bg-light">Node.js</span>
                <span class="badge rounded-pill green-background text-bg-light">React.js</span>
                <span class="badge rounded-pill yellow-background text-bg-light">Java</span>
                <span class="badge rounded-pill red-background text-bg-light">Git</span>
                <span class="badge rounded-pill  green-background text-bg-light">GitHub</span>
                <span class="badge rounded-pill  yellow-background text-bg-light">WordPress</span>
                <span class="badge rounded-pill green-background text-bg-light">Shopify</span>
            </div>

            <div class="space"></div>
            <h2>Projects</h2>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">PROJECT</th>
                        <th scope="col">DESCRIPTION</th>
                        <th scope="col">YEAR</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Sharingan</td>
                        <td>Online Study Material like notes, questions papers, programming problems solutions.</td>
                        <td>2018-2019</td>
                    </tr>
                    <tr>
                        <td>Uptoshop4u</td>
                        <td>Affilation Marketing Website for selling Amazon products</td>
                        <td>2017-2018</td>
                    </tr>
                </tbody>
            </table>
            <div class="space"></div>
            <h2>Education Qualifications</h2>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">SCHOOL</th>
                        <th scope="col">QUALIFICATION</th>
                        <th scope="col">YEAR</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Govt. College Dharamshala</td>
                        <td>Bachelor Of Computer Applications Specialized in Web Services</td>
                        <td>2019-2022</td>
                    </tr>
                    <tr>
                        <td>Govt. School Kuther</td>
                        <td>12th Standard</td>
                        <td>2016-2017</td>
                    </tr>
                </tbody>
            </table>


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

</main>

<?php

get_footer();
?>
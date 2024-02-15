<?php
// Template Name: Contact
get_header();
?>


<section class="container contactpage">
    <h1 class="text-center"><span>Contact Me</span></h1>
    <?php echo do_shortcode('[contact-form-7 id="72" title="Contact Me"]');?>
</section>


<?php get_footer();?>
<?php
/* Template Name: Contact templates */
get_header('contact');
?>

<main class="bg-colored-verylight contact-form-section">
    <div class="container">
        <h1 class="text-center">Demande de brochure
        </h1>
        <div class="container container-form">
            <div class="d-flex flex-wrap justify-content-center">

                <!-- Wordpress - Contact Form 7 -->
                <?php echo do_shortcode('[contact-form-7 id="216" title="Contact form 1"]'); ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer('contact'); ?>
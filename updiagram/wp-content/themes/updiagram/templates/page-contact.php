<?php

/*
    Template Name: Page Contact Us
*/

include get_template_directory()."/includes/header.php"; ?>

<div id="main-content">
    <div class="contac-info">
        <h2>Contact Us</h2>
        <p class="info"> Thank you for your interest in UpDiagram!
            <br> Please share the following details and we will be in touch within one business day.
            <br> If you have other questions, you can contact UpDiagram at
            <a href="mailto:info@updiagram.com">info@updiagram.com</a>
        </p>
        <div class="contact-us">
            <?php echo do_shortcode('[contact-form-7 id="1371" title="Contact form 1"]'); ?>
        </div>
    </div>
</div>

<?php include get_template_directory()."/includes/footer.php"; ?>
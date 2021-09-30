<?php include get_template_directory()."/includes/header.php"; ?>

<div class="content">
    <div id="main-content">
        <?php
            _e('<h1>Page Not Found</h1>', 'Updigram');
            _e('<p>Error code: 404 - We can’t seem to find the page you’re looking for.<p>', 'updiagram');
        ?>
    </div>
    <div class="sidebar">
        <?php get_sidebar(); ?>
    </div>
</div>

<?php include get_template_directory()."/includes/footer.php"; ?>
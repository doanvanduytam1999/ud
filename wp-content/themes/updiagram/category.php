<?php include get_template_directory()."/includes/header.php"; ?>
<div class="content">
    <div id="main-content">
        <section class="hero-blog">
            <h1 style="color: red;" class="entry-title">
                <?php
                if ($headline != '') {
                    echo $headline;
                } else {
                    the_title();
                }
                ?>
            </h1>
            <p style="color: red;" class="entry-text-intro"><?php echo $introText ?></p>
        </section>
        <?php if (have_posts()) {
            while (have_posts()) {
                the_post();
                get_template_part('content');
            }
            updiagram_pagination();
        } else {
            get_template_part('content', 'none');
        } ?>
    </div>
    <!-- <div class="sidebar">
    <?php //get_sidebar(); ?>
    </div> -->
</div>
<?php include get_template_directory()."/includes/footer.php"; ?>
<?php include get_template_directory()."/includes/header.php"; 
    $post_id = get_option( 'page_for_posts' );
    $headline = get_post_meta($post_id, '_ud_headline', true);
    $introText = get_post_meta($post_id, '_ud_intro_text', true);
?>
<div class="content">
    <div id="main-content">
        <div class="archive-title">
            <?php
            if (is_category()) {
                printf(__('%1$s', 'updiagram'), single_cat_title('', false));
            }
            ?>
        </div>
        <?php
        if (is_category()) { ?>
        <div class="archive-description">
            <?php echo term_description(); ?>
        </div>
        <?php }
        ?>
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
    <div class="sidebar">
        <?php get_sidebar(); ?>
    </div>
</div>
<?php include get_template_directory()."/includes/footer.php"; ?>
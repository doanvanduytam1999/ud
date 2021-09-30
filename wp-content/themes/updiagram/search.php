<?php include get_template_directory()."/includes/header.php"; ?>
<div class="content">
    <div id ="main-content">
        <div class="search-info">
            <?php
            $search_query = new WP_Query('s=' . $s . '&showpost=-1');
            $search_keyword = _wp_specialchars($s, 1);
            $search_count = $search_query->post_count;
            printf(__('Wa found %1$s articles for your search query.', 'updiagram'), $search_count);
            ?>
        </div>
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
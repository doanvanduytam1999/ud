<?php 

/*
    Template Name: Page All Posts
*/

include get_template_directory()."/includes/header.php";?>

<?php
    //constructor
    global $post;
    $post_id = $post->ID;
    $headline = get_post_meta($post_id, '_ud_headline', true);
    $introText = get_post_meta($post_id, '_ud_intro_text', true);

?>

<div class="content">
    <div id="main-content">
        <section class="hero-blog">
            <h1 style="color: blue;" class="entry-title">
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
                the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="entry-thumbnail">
                <?php updiagram_thumbnail('thumbnail'); ?>
            </div>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
        </article>
        <?php
            }
        } else {
            get_template_part('content', 'none');
        } ?>
    </div>
    <!-- <div class="sidebar">
    <?php //get_sidebar(); 
    ?>
    </div> -->
</div>

<?php include get_template_directory()."/includes/footer.php"; ?>
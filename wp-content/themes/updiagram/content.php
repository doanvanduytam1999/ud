<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-thumbnail">
        <?php updiagram_thumbnail('thumbnail'); ?>
    </div>
    <div class="entry-header">
        <?php updiagram_enrty_meta(); ?>
        <?php updiagram_enrty_header(); ?>
    </div>
    <div class="entry-content">
        <?php updiagram_entry_content(); ?>
    </div>
</article>
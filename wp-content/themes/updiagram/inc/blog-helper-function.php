<?php

function get_primary_category_linked($post_id) {
    $category = $post_id ? get_the_category($post_id) : get_the_category();
    $useCatLink = true;
    // If post has a category assigned.
    if ($category) {
        $category_display = '';
        $category_link = '';
        if (class_exists('WPSEO_Primary_Term')) {
            // Show the post's 'Primary' category, if this Yoast feature is available, & one is set
            $wpseo_primary_term = new WPSEO_Primary_Term('category', get_the_id());
            $wpseo_primary_term = $wpseo_primary_term->get_primary_term();
            $term = get_term($wpseo_primary_term);
            if (is_wp_error($term)) {
                // Default to first category (not Yoast) if an error is returned
                $category_display = $category[0]->name;
                $category_link = get_category_link($category[0]->term_id);
            } else {
                // Yoast Primary category
                $category_display = $term->name;
                $category_link = get_category_link($term->term_id);
            }
        } else {
            // Default, display the first category in WP's list of assigned categories
            $category_display = $category[0]->name;
            $category_link = get_category_link($category[0]->term_id);
        }

        return '#' . $category_display;
    }
}

function exe_get_related_posts_by_common_terms($post_id, $number_posts = 0, $taxonomy = 'category', $post_type = 'post') {
    global $wpdb;
    $post_id = (int) $post_id;
    $number_posts = (int) $number_posts;
    $limit = $number_posts > 0 ? ' LIMIT ' . $number_posts : '';
    $related_posts_records = $wpdb->get_results(
        $wpdb->prepare(
            "SELECT tr.object_id, count( tr.term_taxonomy_id ) AS common_tax_count
             FROM {$wpdb->term_relationships} AS tr
             INNER JOIN {$wpdb->term_relationships} AS tr2 ON tr.term_taxonomy_id = tr2.term_taxonomy_id
             INNER JOIN {$wpdb->term_taxonomy} as tt ON tt.term_taxonomy_id = tr2.term_taxonomy_id
             INNER JOIN {$wpdb->posts} as p ON p.ID = tr.object_id
             WHERE
                tr2.object_id = %d
                AND tt.taxonomy = %s
                AND p.post_type = %s
             GROUP BY tr.object_id
             HAVING tr.object_id != %d
             ORDER BY common_tax_count DESC" . $limit,
            $post_id,
            $taxonomy,
            $post_type,
            $post_id
        )
    );

    if (count($related_posts_records) === 0)
        return false;
    $related_posts = array();

    foreach ($related_posts_records as $record) {
        $related_posts[] = array(
            'post_id' => (int) $record->object_id,
            'common_tax_count' => $record->common_tax_count
        );
    }

    return $related_posts;
}

function get_related_posts_desc($taxonomy, $post_type) {
    global $post;
    $post_id = $post->ID;
    $related_posts = exe_get_related_posts_by_common_terms($post_id, 3, $taxonomy, $post_type);

    foreach ($related_posts as $post) { ?>
<a class="card" href="<?php the_permalink($post['post_id']); ?>">
    <div class="card__header">
        <span
            class="card__header__tag"><?php echo $post_type == 'post' ? get_tags_single_post($post['post_id']) : get_case_study_tags($post['post_id']) ?></span>
        <span class="card__header__reading-time">
            <i class="card__header__reading-time__icon">
                <svg class="colored" width="18" height="18" viewBox="0 0 18 18" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1.5 2.25H6C6.79565 2.25 7.55871 2.56607 8.12132 3.12868C8.68393 3.69129 9 4.45435 9 5.25V15.75C9 15.1533 8.76295 14.581 8.34099 14.159C7.91903 13.7371 7.34674 13.5 6.75 13.5H1.5V2.25Z"
                        stroke="#757575" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M16.5 2.25H12C11.2044 2.25 10.4413 2.56607 9.87868 3.12868C9.31607 3.69129 9 4.45435 9 5.25V15.75C9 15.1533 9.23705 14.581 9.65901 14.159C10.081 13.7371 10.6533 13.5 11.25 13.5H16.5V2.25Z"
                        stroke="#757575" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </i>
            <?php echo get_estimated_reading_time($post['post_id']); ?>
        </span>
    </div>
    <div class="card__body responsive-img responsive-img--16/9">
        <img class="card__body__banner" src="<?php echo get_the_post_thumbnail_url($post['post_id']); ?>"
            alt="<?php get_the_title($post['post_id']); ?>" />
    </div>
    <div class="card__footer">
        <h6 class="card__footer__title">
            <?php $rel_title = get_the_title($post['post_id']);
                                    echo mb_strimwidth($rel_title, 0, 60, '...'); ?></h6>
        <p class="card__footer__desc"> <?php echo get_post_meta($post['post_id'], '_yoast_wpseo_metadesc', true); ?></p>
    </div>
</a>
<?php
    }
}

function get_highlight_single_post() {
    $the_query = new WP_Query(array(
        'post_type'      => 'post',
        'posts_per_page' => 1,
        'orderby'        => 'modified',
        'order'          => 'DESC',
        'tag'            => 'highlight'
    ));
    if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post(); ?>

<a class="large-card blog__hero-banner__body__card" href="<?php the_permalink(); ?>">
    <div class="large-card__header">
        <span class="large-card__header__tag"><?php echo get_tags_single_post(null); ?></span>
        <span class="large-card__header__reading-time">
            <i class="large-card__header__reading-time__icon">
                <svg class="colored" width="18" height="18" viewBox="0 0 18 18" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1.5 2.25H6C6.79565 2.25 7.55871 2.56607 8.12132 3.12868C8.68393 3.69129 9 4.45435 9 5.25V15.75C9 15.1533 8.76295 14.581 8.34099 14.159C7.91903 13.7371 7.34674 13.5 6.75 13.5H1.5V2.25Z"
                        stroke="#757575" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M16.5 2.25H12C11.2044 2.25 10.4413 2.56607 9.87868 3.12868C9.31607 3.69129 9 4.45435 9 5.25V15.75C9 15.1533 9.23705 14.581 9.65901 14.159C10.081 13.7371 10.6533 13.5 11.25 13.5H16.5V2.25Z"
                        stroke="#757575" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </i>
            <?php echo get_estimated_reading_time(null); ?>
        </span>
    </div>
    <div class="large-card__body responsive-img responsive-img--16/9">
        <img class="large-card__body__banner" src="<?php echo get_the_post_thumbnail_url(); ?>"
            alt="<?php get_the_title(); ?>" />
    </div>
    <div class="large-card__info">
        <h6 class="large-card__info__title">
            <?php $rel_title = get_the_title();
                        echo mb_strimwidth($rel_title, 0, 60, '...'); ?></h6>
        <p class="large-card__info__desc"> <?php echo get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true); ?></p>
    </div>
</a>

<?php
        endwhile;
    endif;
}

function get_tags_single_post($post_id) {
    $post_tags = $post_id ? get_the_tags($post_id) : get_the_tags();
    $count = 0;
    $result = '';
    
    if ($post_tags) {
        foreach ($post_tags as $tag) {
            $result .= '#' . $tag->name . ' ';
            $count++;
            if ($count == 3) break;
        }
        return $result;
    } else {
        $post_category = $post_id ? get_primary_category_linked($post_id) : get_primary_category_linked(null);
        return $post_category;
    }
}

function get_estimated_reading_time($post_id) {
    $post = $post_id ? get_post($post_id) : get_post();
    $the_content = $post->post_content;
    $words = str_word_count(strip_tags($the_content));
    $minute = floor($words / 220);
    
    if ($minute > 1) {
        $estimate = $minute . ' mins';
    } else {
        $estimate = $minute . ' min';
    }
    $output = $estimate . ' read';
    
    return $output;
}
?>
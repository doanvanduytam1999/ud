<?php

function get_case_study_tags($cs_id) {
    if (!$cs_id) {
        $cs_id = get_the_ID();
    }
    $cs_tags = wp_get_post_terms($cs_id, 'cs-tags');
    $count = 0;
    $result = '';

    if ($cs_tags) {
        foreach ($cs_tags as $tag) {
            $result .= '#' . $tag->name . ' ';
            $count++;
            if ($count == 3) break;
        }
    } else {
        $cs_category = wp_get_post_terms($cs_id, 'cs-categories', array('limit' => 1));
        $result = '#' . $cs_category[0]->name;
    }
    return $result;
}

?>
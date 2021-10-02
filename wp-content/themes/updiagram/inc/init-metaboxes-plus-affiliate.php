<?php 

add_action('cmb2_admin_init', 'cmb2_updiagram_hero_banner_metaboxes');
function cmb2_updiagram_hero_banner_metaboxes() {
    $prefix = '_ud_';
    $cmb = new_cmb2_box(array(
        'id'            => 'up_hero_banner',
        'title'         => __('Hero Banner Mange', 'cmb2'),
        'object_types'  => array('page'),
        'show_on'       => array('key' => 'page-template', 'value' => ['templates/page-updiagram-plus.php', 'templates/page-updiagram-affiliate.php']),
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true,
    ));
    
    $cmb->add_field(array('name'=>'Page Title','id'=> $prefix .'page_title','type'=> 'text'));
    $cmb->add_field(array('name'=>'Page Subtitle','id'=> $prefix .'page_subtitle','type'=> 'text'));
    $cmb->add_field(array('name'=>'Page Description','id'=> $prefix .'page_desc','type'=> 'text'));
    $cmb->add_field(array('name'=>'Button Title','id'=> $prefix .'btn_title','type'=> 'text'));
    $cmb->add_field(array('name'=>'Button Description','id'=> $prefix .'btn_desc','type'=> 'text'));

}

add_action('cmb2_admin_init', 'cmb2_updiagram_faqs_metaboxes');
function cmb2_updiagram_faqs_metaboxes() {
    $prefix = '_ud_';
    $cmb = new_cmb2_box(array(
        'id'            => 'up_faq_section',
        'title'         => __('FAQs Manage', 'cmb2'),
        'object_types'  => array('page'),
        'show_on'       => array('key' => 'page-template', 'value' => ['templates/page-updiagram-plus.php', 'templates/page-updiagram-affiliate.php']),
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true,
    ));

    $cmb->add_field(array('name'=>'FAQs Section Title','id'=> $prefix .'faqs_title','type'=> 'text'));
 
    $feeBlock = $cmb->add_field(array(
        'id'          => $prefix.'up_question_columns',
        'type'        => 'group',
        'options'     => array(
            'group_title'   => __('Question {#}', 'cmb2'),
            'sortable'      => true,          
            'closed'        => true, 
            'limit'         => 3
        ),
    ));

    $cmb->add_group_field($feeBlock, array(
        'name' => 'Question',
        'id'   => 'question',
        'type' => 'text',
    ));  
    $cmb->add_group_field($feeBlock, array(
        'name' => 'Answer',
        'id'   => 'answer',
        'type' => 'textarea',
    ));  
}

add_action('cmb2_admin_init', 'cmb2_updiagram_plus_reward_metaboxes');
function cmb2_updiagram_plus_reward_metaboxes() {
    $prefix = '_ud_';
    $cmb = new_cmb2_box(array(
        'id'            => 'up_plus_reward',
        'title'         => __('Updiagram Plus Reward Manage', 'cmb2'),
        'object_types'  => array('page'),
        'show_on'       => array('key' => 'page-template', 'value' => ['templates/page-updiagram-plus.php']),
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true,
    ));
    
    $cmb->add_field(array('name'=>'Reward Section Title','id'=> $prefix .'reward_title','type'=> 'text'));
    
    $rewardBlock = $cmb->add_field(array(
        'id'          => $prefix.'up_reward_rows',
        'type'        => 'group',
        'options'     => array(
            'group_title'   => __('Block {#}', 'cmb2'),
            'sortable'      => true,          
            'closed'        => true, 
            'limit'         => 3
        ),
    ));

    $cmb->add_group_field($rewardBlock, array(
        'name' => 'Index',
        'id'   => 'reward_index',
        'type' => 'text',
    ));  
    $cmb->add_group_field($rewardBlock, array(
        'name' => 'Title',
        'id'   => 'reward_title',
        'type' => 'text',
    ));   
    $cmb->add_group_field($rewardBlock, array(
        'name' => 'Description',
        'id'   => 'reward_description',
        'type' => 'text',
    ));
    $cmb->add_group_field($rewardBlock, array(
        'name' => 'Color',
        'id'   => 'reward_block_color',
        'type' => 'colorpicker',
    ));
}

add_action('cmb2_admin_init', 'cmb2_updiagram_plus_fee_metaboxes');
function cmb2_updiagram_plus_fee_metaboxes() {
    $prefix = '_ud_';
    $cmb = new_cmb2_box(array(
        'id'            => 'up_plus_fee',
        'title'         => __('Updiagram Plus Fee Manage', 'cmb2'),
        'object_types'  => array('page'),
        'show_on'       => array('key' => 'page-template', 'value' => ['templates/page-updiagram-plus.php']),
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true,
    ));
 
    $feeBlock = $cmb->add_field(array(
        'id'          => $prefix.'up_fee_rows',
        'type'        => 'group',
        'options'     => array(
            'group_title'   => __('Block {#}', 'cmb2'),
            'sortable'      => true,          
            'closed'        => true, 
            'limit'         => 3
        ),
    ));

    $cmb->add_group_field($feeBlock, array(
        'name' => 'Amount',
        'id'   => 'fee_amount',
        'type' => 'text',
    ));  
    $cmb->add_group_field($feeBlock, array(
        'name' => 'Fee Price',
        'id'   => 'fee_price',
        'type' => 'text',
    ));  
    $cmb->add_group_field($feeBlock, array(
        'name' => 'Description',
        'id'   => 'fee_desc',
        'type' => 'textarea',
    )); 
    $cmb->add_group_field($feeBlock, array(
        'name' => 'Block Linear color',
        'id'   => 'fee_color',
        'type' => 'text',
    )); 
}

add_action('cmb2_admin_init', 'cmb2_updiagram_affiliate_work_metaboxes');
function cmb2_updiagram_affiliate_work_metaboxes() {
    $prefix = '_ud_';
    $cmb = new_cmb2_box(array(
        'id'            => 'up_affiliate_work',
        'title'         => __('Updiagram Affiliate Work Manage', 'cmb2'),
        'object_types'  => array('page'),
        'show_on'       => array('key' => 'page-template', 'value' => ['templates/page-updiagram-affiliate.php']),
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true,
    ));
    
    $cmb->add_field(array('name'=>'How It Works Section Title','id'=> $prefix .'hiw_title','type'=> 'text'));
    
    $workBlock = $cmb->add_field(array(
        'id'          => $prefix.'up_hiw_rows',
        'type'        => 'group',
        'options'     => array(
            'group_title'   => __('Block {#}', 'cmb2'),
            'sortable'      => true,          
            'closed'        => true, 
            'limit'         => 3
        ),
    ));

    $cmb->add_group_field($workBlock, array(
        'name' => 'Index',
        'id'   => 'hiw_index',
        'type' => 'text',
    ));  
    $cmb->add_group_field($workBlock, array(
        'name' => 'Title',
        'id'   => 'hiw_title',
        'type' => 'text',
    ));   
    $cmb->add_group_field($workBlock, array(
        'name' => 'Description',
        'id'   => 'hiw_description',
        'type' => 'text',
    ));
    $cmb->add_group_field($workBlock, array(
        'name' => 'Color',
        'id'   => 'hiw_block_color',
        'type' => 'colorpicker',
    ));
}

add_action('cmb2_admin_init', 'cmb2_updiagram_affiliate_commissions_metaboxes');
function cmb2_updiagram_affiliate_commissions_metaboxes() {
    $prefix = '_ud_';
    $cmb = new_cmb2_box(array(
        'id'            => 'up_affiliate_commission',
        'title'         => __('Updiagram Affiliate Commissions Manage', 'cmb2'),
        'object_types'  => array('page'),
        'show_on'       => array('key' => 'page-template', 'value' => ['templates/page-updiagram-affiliate.php']),
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true,
    ));
 
    $commissionsBlock = $cmb->add_field(array(
        'id'          => $prefix.'up_commission_rows',
        'type'        => 'group',
        'options'     => array(
            'group_title'   => __('Block {#}', 'cmb2'),
            'sortable'      => true,          
            'closed'        => true, 
            'limit'         => 3
        ),
    ));

    $cmb->add_field(array('name'=>'Commissions Section Title','id'=> $prefix .'commissions_title','type'=> 'text'));

    $cmb->add_group_field($commissionsBlock, array(
        'name' => 'Commissions Rule',
        'id'   => 'commission_rule',
        'type' => 'text',
    ));  
    $cmb->add_group_field($commissionsBlock, array(
        'name' => 'Commissions Rule Description',
        'id'   => 'commission_desc',
        'type' => 'textarea',
    )); 
    $cmb->add_group_field($commissionsBlock, array(
        'name' => 'Block Linear color',
        'id'   => 'commission_color',
        'type' => 'text',
    )); 
}

add_action('cmb2_admin_init', 'cmb2_updiagram_affiliate_audience_metaboxes');
function cmb2_updiagram_affiliate_audience_metaboxes() {
    $prefix = '_ud_';
    $cmb = new_cmb2_box(array(
        'id'            => 'up_affiliate_audience',
        'title'         => __('Updiagram Affiliate Audience Manage', 'cmb2'),
        'object_types'  => array('page'),
        'show_on'       => array('key' => 'page-template', 'value' => ['templates/page-updiagram-affiliate.php']),
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true,
    ));


    $cmb->add_field(array('name'=>'Title','id'=> $prefix .'audience_title','type'=> 'text'));
    $cmb->add_field(array('name'=>'Description','id'=> $prefix .'audience_desc','type'=> 'text'));

}


?>
<?php 

add_action('cmb2_admin_init', 'cmb2_about_hero_banner_metaboxes');
function cmb2_about_hero_banner_metaboxes() {
    $prefix = '_ud_';
    $cmb = new_cmb2_box(array(
        'id'            => 'about_hero_banner',
        'title'         => __('Hero Banner Mange', 'cmb2'),
        'object_types'  => array('page'),
        'show_on'       => array('key' => 'page-template', 'value' => ['templates/page-about-us.php']),
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true,
    ));
    
    $cmb->add_field(array('name'=>'Page Title','id'=> $prefix .'page_title','type'=> 'text'));
    $cmb->add_field(array('name'=>'Page Description','id'=> $prefix .'page_desc','type'=> 'textarea'));
}

add_action('cmb2_admin_init', 'cmb2_about_mission_metaboxes');
function cmb2_about_mission_metaboxes() {
    $prefix = '_ud_';
    $cmb = new_cmb2_box(array(
        'id'            => 'about_mission',
        'title'         => __('Mission Mange', 'cmb2'),
        'object_types'  => array('page'),
        'show_on'       => array('key' => 'page-template', 'value' => ['templates/page-about-us.php']),
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true,
    ));

    $cmb->add_field(array('name'=>'Block 1 Description','id'=> $prefix .'block1_desc','type'=> 'text'));
    $cmb->add_field(array('name'=>'Block 2 Title','id'=> $prefix .'block2_title','type'=> 'text'));
    $cmb->add_field(array('name'=>'Block 2 Description','id'=> $prefix .'block2_desc','type'=> 'textarea'));
    $cmb->add_field(array('name'=>'Block 3 Description','id'=> $prefix .'block3_desc','type'=> 'text'));
    $cmb->add_field(array('name'=>'Block 3 Button Text','id'=> $prefix .'block3_btn','type'=> 'text'));
    $cmb->add_field(array('name'=>'Block 4 Title','id'=> $prefix .'block4_title','type'=> 'text'));
    $cmb->add_field(array('name'=>'Block 4 Description','id'=> $prefix .'block4_desc','type'=> 'textarea'));
}

add_action('cmb2_admin_init', 'cmb2_about_values_metaboxes');
function cmb2_about_values_metaboxes() {
    $prefix = '_ud_';
    $cmb = new_cmb2_box(array(
        'id'            => 'about_values_section',
        'title'         => __('Values Manage', 'cmb2'),
        'object_types'  => array('page'),
        'show_on'       => array('key' => 'page-template', 'value' => ['templates/page-about-us.php']),
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true,
    ));

    $cmb->add_field(array('name'=>'Values Section Title','id'=> $prefix .'values_title','type'=> 'text'));
 
    $valuesBlock = $cmb->add_field(array(
        'id'          => $prefix.'up_values_blocks',
        'type'        => 'group',
        'options'     => array(
            'group_title'   => __('Block {#}', 'cmb2'),
            'sortable'      => true,          
            'closed'        => true, 
            'limit'         => 3
        ),
    ));

    $cmb->add_group_field($valuesBlock, array(
        'name' => 'Block Index',
        'id'   => 'index',
        'type' => 'text',
    )); 
    $cmb->add_group_field($valuesBlock, array(
        'name' => 'Block Title',
        'id'   => 'title',
        'type' => 'text',
    ));  
    $cmb->add_group_field($valuesBlock, array(
        'name' => 'Block Description',
        'id'   => 'desc',
        'type' => 'textarea',
    ));  
    $cmb->add_group_field($valuesBlock, array(
        'name' => 'Block Color',
        'id'   => 'block_color',
        'type' => 'colorpicker',
    ));
}

?>
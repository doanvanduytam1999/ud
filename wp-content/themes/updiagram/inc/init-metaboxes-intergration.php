<?php 

/**
 * Define the metabox and field configurations.
 */
function cmb2_integration_site_list_metaboxes() {
    $cmb = new_cmb2_box( array(
		'id'            => 'integration_box',  // Belgrove Bouncing Castles
		'title'         => 'Integration site list',
        'show_on'       => array('key' => 'page-template', 'value' => ['templates/page-integration.php', 'templates/page-integration-detail.php']),
		'object_types'  => array( 'page', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );

	$integration_site_list_id = $cmb->add_field( array(
		'id'          => 'integration_site_list',
		'type'        => 'group',
		'repeatable'  => true,
		'options'     => array(
			'group_title'   => 'Site {#}',
			'add_button'    => 'Add another site',
			'remove_button' => 'Remove site',
			'closed'        => true,  // Repeater fields closed by default - neat & compact.
			'sortable'      => true,  // Allow changing the order of repeated groups.
		),
	) );
	
    $cmb->add_group_field( $integration_site_list_id, array(
        'name'    => 'Integration site image',
        'desc'    => 'Upload integration site description',
        'id'      => 'integration_site_img',
        'type'    => 'file',
        // Optional:
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
        'text'    => array(
            'add_upload_file_text' => 'Add File' // Change upload button text. Default: "Add or Upload File"
        ),
        // query_args are passed to wp.media's library query.
        'query_args' => array(
            'type' => array(
            	'image/gif',
            	'image/jpeg',
            	'image/png',
            ),
        ),
        'preview_size' => 'large', // Image size to use when previewing in the admin.
    ) );

    $cmb->add_group_field( $integration_site_list_id, array(
        'name'    => 'Integration site description',
        'desc'    => '(optional)',
        'default' => '',
        'id'      => 'integration_site_desc',
        'type'    => 'text',
    ) );

    $cmb->add_group_field( $integration_site_list_id, array(
        'name'    => 'Integration site url',
        'desc'    => '(compulsory)',
        'default' => '',
        'id'      => 'integration_site_url',
        'type'    => 'text',
    ) );
}

function cmb2_recognition_metaboxes() {
    $cmb = new_cmb2_box( array(
		'id'            => 'recognition_box',  // Belgrove Bouncing Castles
		'title'         => 'Recognition list',
        'show_on'       => array('key' => 'page-template', 'value' => ['templates/page-integration.php', 'templates/page-integration-detail.php']),
		'object_types'  => array( 'page', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );

    $recognition_list = $cmb->add_field( array(
		'id'          => 'recognition_list',
		'type'        => 'group',
		'repeatable'  => true,
		'options'     => array(
			'group_title'   => 'Recognition List {#}',
			'add_button'    => 'Add another recognition',
			'remove_button' => 'Remove recognition',
			'closed'        => true,  // Repeater fields closed by default - neat & compact.
			'sortable'      => true,  // Allow changing the order of repeated groups.
		),
	) );

    $cmb->add_group_field( $recognition_list, array(
        'name'    => 'Recognition image',
        'desc'    => 'Upload recognition image',
        'id'      => 'recognition_img',
        'type'    => 'file',
        // Optional:
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
        'text'    => array(
            'add_upload_file_text' => 'Add File' // Change upload button text. Default: "Add or Upload File"
        ),
        // query_args are passed to wp.media's library query.
        'query_args' => array(
            'type' => array(
            	'image/gif',
            	'image/jpeg',
            	'image/png',
            ),
        ),
        'preview_size' => 'large', // Image size to use when previewing in the admin.
    ) );
}

function cmb2_integration_detail_demo_content_metaboxes() {
    $cmb = new_cmb2_box( array(
		'id'            => 'demo_content_box',  // Belgrove Bouncing Castles
		'title'         => 'Demo content list',
        'show_on'       => array('key' => 'page-template', 'value' => ['templates/page-integration.php', 'templates/page-integration-detail.php']),
		'object_types'  => array( 'page', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );

    $demo_content_list = $cmb->add_field( array(
		'id'          => 'demo_content_list',
		'type'        => 'group',
		'repeatable'  => true,
		'options'     => array(
			'group_title'   => 'Demo Content List {#}',
			'add_button'    => 'Add another demo content',
			'remove_button' => 'Remove demo content',
			'closed'        => true,  // Repeater fields closed by default - neat & compact.
			'sortable'      => true,  // Allow changing the order of repeated groups.
		),
	) );

    $cmb->add_group_field( $demo_content_list, array(
        'name'    => 'Demo content image',
        'desc'    => 'Upload demo content image',
        'id'      => 'demo_content_img',
        'type'    => 'file',
        // Optional:
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
        'text'    => array(
            'add_upload_file_text' => 'Add File' // Change upload button text. Default: "Add or Upload File"
        ),
        // query_args are passed to wp.media's library query.
        'query_args' => array(
            'type' => array(
            	'image/gif',
            	'image/jpeg',
            	'image/png',
            ),
        ),
        'preview_size' => 'large', // Image size to use when previewing in the admin.
    ) );

    $cmb->add_group_field( $demo_content_list, array(
        'name'    => 'Demo content heading',
        'desc'    => '(optional)',
        'default' => '',
        'id'      => 'demo_content_heading',
        'type'    => 'text',
    ) );

    $cmb->add_group_field( $demo_content_list, array(
        'name'    => 'Demo content description',
        'desc'    => '(optional)',
        'default' => '',
        'id'      => 'demo_content_desc',
        'type'    => 'text',
    ) );
}

add_action( 'cmb2_admin_init', 'cmb2_integration_site_list_metaboxes' );
add_action( 'cmb2_admin_init', 'cmb2_recognition_metaboxes' );
add_action( 'cmb2_admin_init', 'cmb2_integration_detail_demo_content_metaboxes' );

?>
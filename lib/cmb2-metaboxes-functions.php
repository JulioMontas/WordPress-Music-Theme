<?php
/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB2 directory)
 *
 * Be sure to replace all instances of 'yourprefix_' with your project's prefix.
 * http://nacin.com/2010/05/11/in-wordpress-prefix-everything/
 *
 * @category YourThemeOrPlugin
 * @package  Demo_CMB2
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/WebDevStudios/CMB2
 */

/**
 * Get the bootstrap! If using the plugin from wordpress.org, REMOVE THIS!
 */

// if ( file_exists( dirname( __FILE__ ) . '/cmb2/init.php' ) ) {
// 	require_once dirname( __FILE__ ) . '/cmb2/init.php';
// } elseif ( file_exists( dirname( __FILE__ ) . '/CMB2/init.php' ) ) {
// 	require_once dirname( __FILE__ ) . '/CMB2/init.php';
// }

/**
 * Conditionally displays a metabox when used as a callback in the 'show_on_cb' cmb2_box parameter
 *
 * @param  CMB2 object $cmb_header_text CMB2 object
 *
 * @return bool             True if metabox should show
 */
function yourprefix_show_if_front_page( $cmb_header_text ) {
	// Don't show this metabox if it's not the front page template
	if ( $cmb_header_text->object_id !== get_option( 'page_on_front' ) ) {
		return false;
	}
	return true;
}

/**
 * Conditionally displays a field when used as a callback in the 'show_on_cb' field parameter
 *
 * @param  CMB2_Field object $field Field object
 *
 * @return bool                     True if metabox should show
 */
function yourprefix_hide_if_no_cats( $field ) {
	// Don't show this field if not in the cats category
	if ( ! has_tag( 'cats', $field->object_id ) ) {
		return false;
	}
	return true;
}

/**
 * Manually render a field.
 *
 * @param  array      $field_args Array of field arguments.
 * @param  CMB2_Field $field      The field object
 */
function yourprefix_render_row_cb( $field_args, $field ) {
	$classes     = $field->row_classes();
	$id          = $field->args( 'id' );
	$label       = $field->args( 'name' );
	$name        = $field->args( '_name' );
	$value       = $field->escaped_value();
	$description = $field->args( 'description' );
	?>
	<div class="custom-field-row <?php echo $classes; ?>">
		<p><label for="<?php echo $id; ?>"><?php echo $label; ?></label></p>
		<p><input id="<?php echo $id; ?>" type="text" name="<?php echo $name; ?>" value="<?php echo $value; ?>"/></p>
		<p class="description"><?php echo $description; ?></p>
	</div>
	<?php
}

/**
 * Manually render a field column display.
 *
 * @param  array      $field_args Array of field arguments.
 * @param  CMB2_Field $field      The field object
 */
function yourprefix_display_text_small_column( $field_args, $field ) {
	?>
	<div class="custom-column-display <?php echo $field->row_classes(); ?>">
		<p><?php echo $field->escaped_value(); ?></p>
		<p class="description"><?php echo $field->args( 'description' ); ?></p>
	</div>
	<?php
}

/**
 * Conditionally displays a message if the $post_id is 2
 *
 * @param  array             $field_args Array of field parameters
 * @param  CMB2_Field object $field      Field object
 */
function yourprefix_before_row_if_2( $field_args, $field ) {
	if ( 2 == $field->object_id ) {
		echo '<p>Testing <b>"before_row"</b> parameter (on $post_id 2)</p>';
	} else {
		echo '<p>Testing <b>"before_row"</b> parameter (<b>NOT</b> on $post_id 2)</p>';
	}
}



add_action( 'cmb2_admin_init', 'yourprefix_register_julio_metabox' );
/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_admin_init' or 'cmb2_init' hook.
 */
function yourprefix_register_julio_metabox() {

	// Start with an underscore to hide fields from custom fields list
	 $prefix = 'wgmdt_term_';

	 /**
		* Initiate the metabox
		*/
	 $cmb_header_text = new_cmb2_box( array(
			 'id'            => 'headerText_metabox',
			 'title'         => __( 'Header Text', 'cmb2' ),
			 'object_types'  => array( 'page', ), // Post type
			 'context'       => 'normal',
			 'priority'      => 'high',
			 'show_names'    => true, // Show field names on the left
			 // 'cmb_styles' => false, // false to disable the CMB stylesheet
			 'closed'     => true, // Keep the metabox closed by default
	 ) );


	 // Regular text field
	 $cmb_header_text->add_field( array(
			 'name'       => __( 'Page Tittle', 'cmb2' ),
			 'desc'       => __( 'field description (optional)', 'cmb2' ),
			 'id'         => $prefix . 'title',
			 'type'       => 'text',
			 'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
			 // 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
			 // 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
			 // 'on_front'        => false, // Optionally designate a field to wp-admin only
			 // 'repeatable'      => true,
	 ) );

	 // Regular text field
	$cmb_header_text->add_field( array(
			'name'       => __( 'Page Summary', 'cmb2' ),
			'desc'       => __( 'field description (optional)', 'cmb2' ),
			'id'         => $prefix . 'summary',
			'type'       => 'textarea',
			'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
			// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
			// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
			// 'on_front'        => false, // Optionally designate a field to wp-admin only
			// 'repeatable'      => true,
	) );







	add_action( 'cmb2_init', 'yourprefix_register_biography_page' );
	/**
	 * Hook in and add a box to be available in the CMB2 REST API. Can only happen on the 'cmb2_init' hook.
	 * More info: https://github.com/WebDevStudios/CMB2/wiki/REST-API
	 */
	function yourprefix_register_biography_page() {
		$prefix = 'wgmdt_term_biography';

		$cmb_biography_page = new_cmb2_box( array(
			'id'            => $prefix . 'biography_page_metabox',
			'title'         => __( 'Biography Page', 'cmb2' ),
			'object_types'  => array( 'page', ), // Post type
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true, // Show field names on the left
			// 'cmb_styles' => false, // false to disable the CMB stylesheet
			// 'closed'     => true, // Keep the metabox closed by default
		) );

		$cmb_biography_page->add_field( array(
			'name' => esc_html__( 'Intro Summary', 'cmb2' ),
			'id'   => $prefix . 'textareasmall',
			'type' => 'textarea_small',
		) );

		$cmb_biography_page->add_field( array(
			'name' => esc_html__( 'Artist Image', 'cmb2' ),
			'desc' => esc_html__( 'Upload an image or enter a URL.', 'cmb2' ),
			'id'   => $prefix . 'image',
			'type' => 'file',
		) );

		$cmb_biography_page->add_field( array(
			'name' => esc_html__( 'Full summary', 'cmb2' ),
			'id'   => $prefix . 'textarea',
			'type' => 'textarea',
		) );

		$cmb_biography_page->add_field( array(
    'name'    => 'Songs Credits',
    'desc'    => 'field description (optional)',
    'id'      => 'songs_credits_wysiwyg',
    'type'    => 'wysiwyg',
    'options' => array(),
		) );

		$cmb_biography_page->add_field( array(
    'name'    => 'Awards',
    'desc'    => 'field description (optional)',
    'id'      => 'awards_wysiwyg',
    'type'    => 'wysiwyg',
    'options' => array(),
		) );




	}




}

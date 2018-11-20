<?php
/**
 * Lecture Notes Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Lecture_Notes extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Lecture Notes Form', 'wpforms-form-templates-pack' );
		$this->slug = 'lecture-notes';
		$this->data = array(
			'field_id' => 5,
			'fields' => array(
				1 => array(
					'id' => '1',
					'type' => 'text',
					'label' => __( 'Subject', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				2 => array(
					'id' => '2',
					'type' => 'textarea',
					'label' => __( 'Cues', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				3 => array(
					'id' => '3',
					'type' => 'textarea',
					'label' => __( 'Notes', 'wpforms-form-templates-pack' ),
					'size' => 'large',
				),
				4 => array(
					'id' => '4',
					'type' => 'textarea',
					'label' => __( 'Summary', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
			),
			'settings' => array(
				'honeypot' => '1',
				'confirmation_message_scroll' => '1',
				'submit_text_processing' => __( 'Sending...', 'wpforms-form-templates-pack' ),
			),
			'meta' => array(
				'template' => $this->slug,
			),
		);
	}
}
new WPForms_Template_Lecture_Notes;

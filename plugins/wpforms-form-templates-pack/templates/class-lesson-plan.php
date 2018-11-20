<?php
/**
 * Lesson Plan Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Lesson_Plan extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Lesson Plan Form', 'wpforms-form-templates-pack' );
		$this->slug = 'lesson-plan';
		$this->data = array(
			'field_id' => 11,
			'fields' => array(
				1 => array(
					'id' => '1',
					'type' => 'text',
					'label' => __( 'Subject', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				2 => array(
					'id' => '2',
					'type' => 'text',
					'label' => __( 'Teaching Topic', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				3 => array(
					'id' => '3',
					'type' => 'text',
					'label' => __( 'Lesson Plan Title', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				4 => array(
					'id' => '4',
					'type' => 'checkbox',
					'label' => __( 'Standards Addressed', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'First Choice', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Second Choice', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Third Choice', 'wpforms-form-templates-pack' ),
						),
					),
				),
				5 => array(
					'id' => '5',
					'type' => 'textarea',
					'label' => __( 'Goals/Objectives of Lesson Plans', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				6 => array(
					'id' => '6',
					'type' => 'checkbox',
					'label' => __( 'Required Materials', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Photos', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Electronic Devices', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Paper and Pencil', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Audio', 'wpforms-form-templates-pack' ),
						),
					),
				),
				7 => array(
					'id' => '7',
					'type' => 'textarea',
					'label' => __( 'Step-by-Step Procedure', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				8 => array(
					'id' => '8',
					'type' => 'textarea',
					'label' => __( 'Additional Comments', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				9 => array(
					'id' => '9',
					'type' => 'name',
					'label' => __( 'Name', 'wpforms-form-templates-pack' ),
					'format' => 'first-last',
					'required' => '1',
					'size' => 'medium',
				),
				10 => array(
					'id' => '10',
					'type' => 'email',
					'label' => __( 'Email', 'wpforms-form-templates-pack' ),
					'required' => '1',
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
new WPForms_Template_Lesson_Plan;

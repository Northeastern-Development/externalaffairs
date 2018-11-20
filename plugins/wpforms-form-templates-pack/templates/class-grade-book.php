<?php
/**
 * Grade Book Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Grade_Book extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Grade Book Form', 'wpforms-form-templates-pack' );
		$this->slug = 'grade-book';
		$this->data = array(
			'field_id' => 7,
			'fields' => array(
				1 => array(
					'id' => '1',
					'type' => 'name',
					'label' => __( 'Student Name', 'wpforms-form-templates-pack' ),
					'format' => 'first-last',
					'required' => '1',
					'size' => 'medium',
				),
				2 => array(
					'id' => '2',
					'type' => 'text',
					'label' => __( 'Student ID', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				3 => array(
					'id' => '3',
					'type' => 'text',
					'label' => __( 'Assignment name', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				4 => array(
					'id' => '4',
					'type' => 'select',
					'label' => __( 'Status', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Complete', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Late', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Incomplete', 'wpforms-form-templates-pack' ),
						),
					),
					'size' => 'medium',
				),
				5 => array(
					'id' => '5',
					'type' => 'select',
					'label' => __( 'Grade', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'A', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'B', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'C', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'D', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( 'F', 'wpforms-form-templates-pack' ),
						),
					),
					'size' => 'medium',
				),
				6 => array(
					'id' => '6',
					'type' => 'textarea',
					'label' => __( 'Comments', 'wpforms-form-templates-pack' ),
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
new WPForms_Template_Grade_Book;

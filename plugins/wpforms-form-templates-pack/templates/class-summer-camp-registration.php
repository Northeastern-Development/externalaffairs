<?php
/**
 * Summer Camp Registration Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Summer_Camp_Registration extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Summer Camp Registration Form', 'wpforms-form-templates-pack' );
		$this->slug = 'summer-camp-registration';
		$this->data = array(
			'field_id' => 15,
			'fields' => array(
				1 => array(
					'id' => '1',
					'type' => 'divider',
					'label' => __( 'Child Information', 'wpforms-form-templates-pack' ),
					'label_disable' => '1',
				),
				2 => array(
					'id' => '2',
					'type' => 'name',
					'label' => __( 'Name', 'wpforms-form-templates-pack' ),
					'format' => 'first-last',
					'required' => '1',
					'size' => 'medium',
				),
				3 => array(
					'id' => '3',
					'type' => 'date-time',
					'label' => __( 'Date of Birth', 'wpforms-form-templates-pack' ),
					'format' => 'date',
					'required' => '1',
					'size' => 'medium',
					'date_format' => 'm/d/Y',
					'date_type' => 'dropdown',
					'time_format' => 'g:i A',
					'time_interval' => '30',
				),
				4 => array(
					'id' => '4',
					'type' => 'select',
					'label' => __( 'Grade', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( '1st Grade', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( '2nd Grade', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( '3rd Grade', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( '4th Grade', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( '5th Grade', 'wpforms-form-templates-pack' ),
						),
						6 => array(
							'label' => __( '6th Grade', 'wpforms-form-templates-pack' ),
						),
						7 => array(
							'label' => __( '7th Grade', 'wpforms-form-templates-pack' ),
						),
						8 => array(
							'label' => __( '8th Grade', 'wpforms-form-templates-pack' ),
						),
					),
					'required' => '1',
					'size' => 'medium',
				),
				5 => array(
					'id' => '5',
					'type' => 'text',
					'label' => __( 'Name of School', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				6 => array(
					'id' => '6',
					'type' => 'divider',
					'label' => __( 'Parent/Guardian Information', 'wpforms-form-templates-pack' ),
					'label_disable' => '1',
				),
				7 => array(
					'id' => '7',
					'type' => 'name',
					'label' => __( 'Name', 'wpforms-form-templates-pack' ),
					'format' => 'first-last',
					'required' => '1',
					'size' => 'medium',
				),
				8 => array(
					'id' => '8',
					'type' => 'email',
					'label' => __( 'Email', 'wpforms-form-templates-pack' ),
					'required' => '1',
					'size' => 'medium',
				),
				9 => array(
					'id' => '9',
					'type' => 'phone',
					'label' => __( 'Phone', 'wpforms-form-templates-pack' ),
					'format' => 'us',
					'required' => '1',
					'size' => 'medium',
				),
				10 => array(
					'id' => '10',
					'type' => 'address',
					'label' => __( 'Address', 'wpforms-form-templates-pack' ),
					'scheme' => 'us',
					'required' => '1',
					'size' => 'medium',
				),
				11 => array(
					'id' => '11',
					'type' => 'divider',
					'label' => __( 'Section Divider', 'wpforms-form-templates-pack' ),
					'label_disable' => '1',
				),
				12 => array(
					'id' => '12',
					'type' => 'name',
					'label' => __( 'Name', 'wpforms-form-templates-pack' ),
					'format' => 'first-last',
					'required' => '1',
					'size' => 'medium',
				),
				13 => array(
					'id' => '13',
					'type' => 'phone',
					'label' => __( 'Emergency Contact', 'wpforms-form-templates-pack' ),
					'format' => 'us',
					'required' => '1',
					'size' => 'medium',
				),
				14 => array(
					'id' => '14',
					'type' => 'textarea',
					'label' => __( 'Medical Concerns', 'wpforms-form-templates-pack' ),
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
new WPForms_Template_Summer_Camp_Registration;

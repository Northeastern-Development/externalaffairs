<?php
/**
 * Enrollment Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Enrollment extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Enrollment Form', 'wpforms-form-templates-pack' );
		$this->slug = 'enrollment';
		$this->data = array(
			'field_id' => 11,
			'fields' => array(
				1 => array(
					'id' => '1',
					'type' => 'date-time',
					'label' => __( 'Anticipated Start Date', 'wpforms-form-templates-pack' ),
					'format' => 'date',
					'size' => 'medium',
					'date_format' => 'm/d/Y',
					'date_type' => 'dropdown',
					'time_format' => 'g:i A',
					'time_interval' => '30',
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
					'type' => 'phone',
					'label' => __( 'Phone', 'wpforms-form-templates-pack' ),
					'format' => 'us',
					'size' => 'medium',
				),
				4 => array(
					'id' => '4',
					'type' => 'email',
					'label' => __( 'Email', 'wpforms-form-templates-pack' ),
					'required' => '1',
					'size' => 'medium',
				),
				5 => array(
					'id' => '5',
					'type' => 'address',
					'label' => __( 'Address', 'wpforms-form-templates-pack' ),
					'scheme' => 'us',
					'size' => 'medium',
				),
				6 => array(
					'id' => '6',
					'type' => 'radio',
					'label' => __( 'Gender', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Male', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Female', 'wpforms-form-templates-pack' ),
						),
					),
				),
				7 => array(
					'id' => '7',
					'type' => 'date-time',
					'label' => __( 'Birthday', 'wpforms-form-templates-pack' ),
					'format' => 'date',
					'size' => 'medium',
					'date_format' => 'm/d/Y',
					'date_type' => 'dropdown',
					'time_format' => 'g:i A',
					'time_interval' => '30',
				),
				8 => array(
					'id' => '8',
					'type' => 'text',
					'label' => __( 'High School Name', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				9 => array(
					'id' => '9',
					'type' => 'address',
					'label' => __( 'High School Address', 'wpforms-form-templates-pack' ),
					'scheme' => 'us',
					'size' => 'medium',
				),
				10 => array(
					'id' => '10',
					'type' => 'text',
					'label' => __( 'GPA', 'wpforms-form-templates-pack' ),
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
new WPForms_Template_Enrollment;

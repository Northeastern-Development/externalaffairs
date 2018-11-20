<?php
/**
 * Travel Request Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Travel_Request extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Travel Request Form', 'wpforms-form-templates-pack' );
		$this->slug = 'travel-request';
		$this->data = array(
			'field_id' => 12,
			'fields' => array(
				1 => array(
					'id' => '1',
					'type' => 'name',
					'label' => __( 'Employee Name', 'wpforms-form-templates-pack' ),
					'format' => 'first-last',
					'required' => '1',
					'size' => 'medium',
				),
				2 => array(
					'id' => '2',
					'type' => 'text',
					'label' => __( 'Employee ID', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				10 => array(
					'id' => '10',
					'type' => 'text',
					'label' => __( 'Manager / Supervisor', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				4 => array(
					'id' => '4',
					'type' => 'text',
					'label' => __( 'Reason for travel', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				5 => array(
					'id' => '5',
					'type' => 'checkbox',
					'label' => __( 'Travel arrangements needed', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Flight', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Hotel', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Rental Car', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Other', 'wpforms-form-templates-pack' ),
						),
					),
				),
				6 => array(
					'id' => '6',
					'type' => 'text',
					'label' => __( 'Departure City', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				8 => array(
					'id' => '8',
					'type' => 'text',
					'label' => __( 'Arrival City', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				7 => array(
					'id' => '7',
					'type' => 'date-time',
					'label' => __( 'Departure Date', 'wpforms-form-templates-pack' ),
					'format' => 'date-time',
					'size' => 'medium',
					'date_format' => 'm/d/Y',
					'date_type' => 'datepicker',
					'time_format' => 'g:i A',
					'time_interval' => '30',
				),
				9 => array(
					'id' => '9',
					'type' => 'date-time',
					'label' => __( 'Return Date', 'wpforms-form-templates-pack' ),
					'format' => 'date-time',
					'size' => 'medium',
					'date_format' => 'm/d/Y',
					'date_type' => 'datepicker',
					'time_format' => 'g:i A',
					'time_interval' => '30',
				),
				11 => array(
					'id' => '11',
					'type' => 'textarea',
					'label' => __( 'Additional Information', 'wpforms-form-templates-pack' ),
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
new WPForms_Template_Travel_Request;

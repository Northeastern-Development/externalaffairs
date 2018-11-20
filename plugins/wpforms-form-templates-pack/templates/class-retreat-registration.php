<?php
/**
 * Retreat Registration form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Retreat_Registration extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Retreat Registration Form', 'wpforms-form-templates-pack' );
		$this->slug = 'retreat-registration';
		$this->data = array(
			'field_id' => 9,
			'fields' => array(
				1 => array(
					'id' => '1',
					'type' => 'name',
					'label' => __( 'Name', 'wpforms-form-templates-pack' ),
					'format' => 'first-last',
					'required' => '1',
					'size' => 'medium',
				),
				2 => array(
					'id' => '2',
					'type' => 'address',
					'label' => __( 'Address', 'wpforms-form-templates-pack' ),
					'scheme' => 'us',
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
					'type' => 'date-time',
					'label' => __( 'Arrival Date', 'wpforms-form-templates-pack' ),
					'format' => 'date',
					'size' => 'medium',
					'date_format' => 'm/d/Y',
					'date_type' => 'datepicker',
					'time_format' => 'g:i A',
					'time_interval' => '30',
				),
				6 => array(
					'id' => '6',
					'type' => 'date-time',
					'label' => __( 'Departure Date', 'wpforms-form-templates-pack' ),
					'format' => 'date',
					'size' => 'medium',
					'date_format' => 'm/d/Y',
					'date_type' => 'datepicker',
					'time_format' => 'g:i A',
					'time_interval' => '30',
				),
				7 => array(
					'id' => '7',
					'type' => 'select',
					'label' => __( 'Accommodation Status', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Single', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Couple', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Group', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Family', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( 'Roommate Selected', 'wpforms-form-templates-pack' ),
						),
						6 => array(
							'label' => __( 'Need Roommate', 'wpforms-form-templates-pack' ),
						),
						7 => array(
							'label' => __( 'Without Accommodations', 'wpforms-form-templates-pack' ),
						),
					),
					'size' => 'medium',
				),
				8 => array(
					'id' => '8',
					'type' => 'textarea',
					'label' => __( 'Special Needs', 'wpforms-form-templates-pack' ),
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
new WPForms_Template_Retreat_Registration;

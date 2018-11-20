<?php
/**
 * Race Registration form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Race_Registration extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Race Registration Form', 'wpforms-form-templates-pack' );
		$this->slug = 'race-registration';
		$this->data = array(
			'field_id' => 9,
			'fields' => array(
				1 => array(
					'id' => '1',
					'type' => 'checkbox',
					'label' => __( 'Which race will you participate in?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( '5k', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( '10k', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Half Marathon', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Marathon', 'wpforms-form-templates-pack' ),
						),
					),
					'required' => '1',
				),
				2 => array(
					'id' => '2',
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
				5 => array(
					'id' => '5',
					'type' => 'select',
					'label' => __( 'What size t-shirt do you wear?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Small', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Medium', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Large', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Extra Large', 'wpforms-form-templates-pack' ),
						),
					),
					'size' => 'medium',
				),
				4 => array(
					'id' => '4',
					'type' => 'name',
					'label' => __( 'Name', 'wpforms-form-templates-pack' ),
					'format' => 'first-last',
					'required' => '1',
					'size' => 'medium',
				),
				6 => array(
					'id' => '6',
					'type' => 'email',
					'label' => __( 'Email', 'wpforms-form-templates-pack' ),
					'required' => '1',
					'size' => 'medium',
				),
				7 => array(
					'id' => '7',
					'type' => 'phone',
					'label' => __( 'Phone', 'wpforms-form-templates-pack' ),
					'format' => 'us',
					'size' => 'medium',
				),
				8 => array(
					'id' => '8',
					'type' => 'address',
					'label' => __( 'Address', 'wpforms-form-templates-pack' ),
					'scheme' => 'us',
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
new WPForms_Template_Race_Registration;

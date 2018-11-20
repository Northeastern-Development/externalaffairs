<?php
/**
 * Gym Registration Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Gym_Registration extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Gym Registration Form', 'wpforms-form-templates-pack' );
		$this->slug = 'gym-registration';
		$this->data = array(
			'field_id' => 8,
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
					'type' => 'email',
					'label' => __( 'Email', 'wpforms-form-templates-pack' ),
					'required' => '1',
					'size' => 'medium',
				),
				3 => array(
					'id' => '3',
					'type' => 'date-time',
					'label' => __( 'Membership Start Date', 'wpforms-form-templates-pack' ),
					'format' => 'date',
					'size' => 'medium',
					'date_format' => 'm/d/Y',
					'date_type' => 'datepicker',
					'time_format' => 'g:i A',
					'time_interval' => '30',
				),
				4 => array(
					'id' => '4',
					'type' => 'radio',
					'label' => __( 'Membership Duration', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( '1 month', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( '3 month', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( '6 months', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( '1 year', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( '2 year', 'wpforms-form-templates-pack' ),
						),
						6 => array(
							'label' => __( 'Lifetime', 'wpforms-form-templates-pack' ),
						),
					),
				),
				6 => array(
					'id' => '6',
					'type' => 'checkbox',
					'label' => __( 'Pre-existing medical conditions', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Diabetes', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Heart disease', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Chest pains', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Shortness of breath', 'wpforms-form-templates-pack' ),
						),
						12 => array(
							'label' => __( 'Broken bones', 'wpforms-form-templates-pack' ),
						),
						11 => array(
							'label' => __( 'Allergies', 'wpforms-form-templates-pack' ),
						),
						10 => array(
							'label' => __( 'Heart murmur', 'wpforms-form-templates-pack' ),
						),
						9 => array(
							'label' => __( 'Pneumonia', 'wpforms-form-templates-pack' ),
						),
						8 => array(
							'label' => __( 'Epilepsy', 'wpforms-form-templates-pack' ),
						),
						7 => array(
							'label' => __( 'Tachycardia', 'wpforms-form-templates-pack' ),
						),
						6 => array(
							'label' => __( 'Oedema', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( 'Heart attack', 'wpforms-form-templates-pack' ),
						),
						17 => array(
							'label' => __( 'Recent surgery', 'wpforms-form-templates-pack' ),
						),
						16 => array(
							'label' => __( 'Palpitations', 'wpforms-form-templates-pack' ),
						),
						15 => array(
							'label' => __( 'High blood pressure', 'wpforms-form-templates-pack' ),
						),
						14 => array(
							'label' => __( 'Low blood pressure', 'wpforms-form-templates-pack' ),
						),
						13 => array(
							'label' => __( 'Asthma', 'wpforms-form-templates-pack' ),
						),
						18 => array(
							'label' => __( 'Seizures', 'wpforms-form-templates-pack' ),
						),
						19 => array(
							'label' => __( 'Fainting', 'wpforms-form-templates-pack' ),
						),
					),
					'input_columns' => '2',
				),
				7 => array(
					'id' => '7',
					'type' => 'textarea',
					'label' => __( 'Additional Medical Notes', 'wpforms-form-templates-pack' ),
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
new WPForms_Template_Gym_Registration;

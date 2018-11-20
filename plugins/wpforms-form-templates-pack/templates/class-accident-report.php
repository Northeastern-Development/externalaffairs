<?php
/**
 * Accident Report Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Accident_Report extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Accident Report Form', 'wpforms-form-templates-pack' );
		$this->slug = 'accident-report';
		$this->data = array(
			'field_id' => 9,
			'fields' => array(
				1 => array(
					'id' => '1',
					'type' => 'checkbox',
					'label' => __( 'I am reporting a', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Loss of time/injury', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'First aid incident', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Close call', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Observation', 'wpforms-form-templates-pack' ),
						),
					),
				),
				2 => array(
					'id' => '2',
					'type' => 'name',
					'label' => __( 'Person Reporting Incident', 'wpforms-form-templates-pack' ),
					'format' => 'first-last',
					'required' => '1',
					'size' => 'medium',
				),
				3 => array(
					'id' => '3',
					'type' => 'name',
					'label' => __( 'Person Involved in Incident', 'wpforms-form-templates-pack' ),
					'format' => 'first-last',
					'required' => '1',
					'size' => 'medium',
				),
				4 => array(
					'id' => '4',
					'type' => 'date-time',
					'label' => __( 'Date / Time of Incident', 'wpforms-form-templates-pack' ),
					'format' => 'date-time',
					'size' => 'medium',
					'date_format' => 'm/d/Y',
					'date_type' => 'datepicker',
					'time_format' => 'g:i A',
					'time_interval' => '30',
				),
				5 => array(
					'id' => '5',
					'type' => 'text',
					'label' => __( 'Location of Incident', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				6 => array(
					'id' => '6',
					'type' => 'textarea',
					'label' => __( 'Please describe the event in detail.', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				7 => array(
					'id' => '7',
					'type' => 'radio',
					'label' => __( 'Was damage done to the property?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Yes', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'No', 'wpforms-form-templates-pack' ),
						),
					),
				),
				8 => array(
					'id' => '8',
					'type' => 'radio',
					'label' => __( 'Could this incident been avoided?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Yes', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'No', 'wpforms-form-templates-pack' ),
						),
					),
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
new WPForms_Template_Accident_Report;

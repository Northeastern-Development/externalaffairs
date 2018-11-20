<?php
/**
 * Employee Incident Report Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Employee_Incident_Report extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Employee Incident Report Form', 'wpforms-form-templates-pack' );
		$this->slug = 'employee-incident-report';
		$this->data = array(
			'field_id' => 9,
			'fields' => array(
				1 => array(
					'id' => '1',
					'type' => 'name',
					'label' => __( 'Violating employee\'s name', 'wpforms-form-templates-pack' ),
					'format' => 'first-last',
					'required' => '1',
					'size' => 'medium',
				),
				2 => array(
					'id' => '2',
					'type' => 'name',
					'label' => __( 'Reporting employee\'s name', 'wpforms-form-templates-pack' ),
					'format' => 'first-last',
					'required' => '1',
					'size' => 'medium',
				),
				3 => array(
					'id' => '3',
					'type' => 'email',
					'label' => __( 'Reporting employee\'s email', 'wpforms-form-templates-pack' ),
					'required' => '1',
					'size' => 'medium',
				),
				4 => array(
					'id' => '4',
					'type' => 'date-time',
					'label' => __( 'Date / Time of incident', 'wpforms-form-templates-pack' ),
					'format' => 'date-time',
					'size' => 'medium',
					'date_format' => 'm/d/Y',
					'date_type' => 'datepicker',
					'time_format' => 'g:i A',
					'time_interval' => '30',
				),
				5 => array(
					'id' => '5',
					'type' => 'radio',
					'label' => __( 'What violation has the employee committed?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Neglect of Duty', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Failure to Follow Instructions', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Inappropriate Behavior', 'wpforms-form-templates-pack' ),
						),
						6 => array(
							'label' => __( 'Attendance Related', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( 'Damage to Company Property', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Theft', 'wpforms-form-templates-pack' ),
						),
						8 => array(
							'label' => __( 'Harassement', 'wpforms-form-templates-pack' ),
						),
						7 => array(
							'label' => __( 'Poor Work Performance', 'wpforms-form-templates-pack' ),
						),
						9 => array(
							'label' => __( 'Violation of Company Policy', 'wpforms-form-templates-pack' ),
						),
					),
				),
				6 => array(
					'id' => '6',
					'type' => 'textarea',
					'label' => __( 'Please describe the incident.', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				8 => array(
					'id' => '8',
					'type' => 'name',
					'label' => __( 'Report prepared by', 'wpforms-form-templates-pack' ),
					'format' => 'first-last',
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
new WPForms_Template_Employee_Incident_Report;

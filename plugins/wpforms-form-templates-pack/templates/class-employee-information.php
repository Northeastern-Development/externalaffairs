<?php
/**
 * Employee Information Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Employee_Information extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Employee Information Form', 'wpforms-form-templates-pack' );
		$this->slug = 'employee-information';
		$this->data = array(
			'field_id' => 18,
			'fields' => array(
				1 => array(
					'id' => '1',
					'type' => 'divider',
					'label' => __( 'Personal Information', 'wpforms-form-templates-pack' ),
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
					'type' => 'email',
					'label' => __( 'Email', 'wpforms-form-templates-pack' ),
					'required' => '1',
					'size' => 'medium',
				),
				4 => array(
					'id' => '4',
					'type' => 'phone',
					'label' => __( 'Phone', 'wpforms-form-templates-pack' ),
					'format' => 'us',
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
					'type' => 'date-time',
					'label' => __( 'Date of Birth', 'wpforms-form-templates-pack' ),
					'format' => 'date',
					'size' => 'medium',
					'date_format' => 'm/d/Y',
					'date_type' => 'dropdown',
					'time_format' => 'g:i A',
					'time_interval' => '30',
				),
				7 => array(
					'id' => '7',
					'type' => 'divider',
					'label' => __( 'Office Information', 'wpforms-form-templates-pack' ),
					'label_disable' => '1',
				),
				8 => array(
					'id' => '8',
					'type' => 'text',
					'label' => __( 'Job Title', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				9 => array(
					'id' => '9',
					'type' => 'text',
					'label' => __( 'Supervisor Name', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				10 => array(
					'id' => '10',
					'type' => 'text',
					'label' => __( 'Department', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				11 => array(
					'id' => '11',
					'type' => 'phone',
					'label' => __( 'Office Phone', 'wpforms-form-templates-pack' ),
					'format' => 'us',
					'size' => 'medium',
				),
				12 => array(
					'id' => '12',
					'type' => 'date-time',
					'label' => __( 'Start Date', 'wpforms-form-templates-pack' ),
					'format' => 'date',
					'size' => 'medium',
					'date_format' => 'm/d/Y',
					'date_type' => 'dropdown',
					'time_format' => 'g:i A',
					'time_interval' => '30',
				),
				13 => array(
					'id' => '13',
					'type' => 'payment-single',
					'label' => __( 'Salary', 'wpforms-form-templates-pack' ),
					'format' => 'user',
					'size' => 'medium',
				),
				14 => array(
					'id' => '14',
					'type' => 'divider',
					'label' => __( 'Emergency Contact', 'wpforms-form-templates-pack' ),
					'label_disable' => '1',
				),
				15 => array(
					'id' => '15',
					'type' => 'name',
					'label' => __( 'Name', 'wpforms-form-templates-pack' ),
					'format' => 'first-last',
					'required' => '1',
					'size' => 'medium',
				),
				16 => array(
					'id' => '16',
					'type' => 'phone',
					'label' => __( 'Phone', 'wpforms-form-templates-pack' ),
					'format' => 'us',
					'size' => 'medium',
				),
				17 => array(
					'id' => '17',
					'type' => 'text',
					'label' => __( 'Relationship', 'wpforms-form-templates-pack' ),
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
new WPForms_Template_Employee_Information;

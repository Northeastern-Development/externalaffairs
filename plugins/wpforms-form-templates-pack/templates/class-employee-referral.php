<?php
/**
 * Employee Referral Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Employee_Referral extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Employee Referral Form', 'wpforms-form-templates-pack' );
		$this->slug = 'employee-referral';
		$this->data = array(
			'field_id' => 11,
			'fields' => array(
				1 => array(
					'id' => '1',
					'type' => 'divider',
					'label' => __( 'Employee Information', 'wpforms-form-templates-pack' ),
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
					'type' => 'divider',
					'label' => __( 'Referral Information', 'wpforms-form-templates-pack' ),
					'label_disable' => '1',
				),
				6 => array(
					'id' => '6',
					'type' => 'name',
					'label' => __( 'Candidate\'s Name', 'wpforms-form-templates-pack' ),
					'format' => 'first-last',
					'required' => '1',
					'size' => 'medium',
				),
				7 => array(
					'id' => '7',
					'type' => 'email',
					'label' => __( 'Candidate\'s email', 'wpforms-form-templates-pack' ),
					'required' => '1',
					'size' => 'medium',
				),
				8 => array(
					'id' => '8',
					'type' => 'phone',
					'label' => __( 'Candidate\'s phone', 'wpforms-form-templates-pack' ),
					'format' => 'us',
					'size' => 'medium',
				),
				9 => array(
					'id' => '9',
					'type' => 'text',
					'label' => __( 'Position applied for', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				10 => array(
					'id' => '10',
					'type' => 'textarea',
					'label' => __( 'Why is this candidate qualified for the position?', 'wpforms-form-templates-pack' ),
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
new WPForms_Template_Employee_Referral;

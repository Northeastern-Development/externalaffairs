<?php
/**
 * Change Request Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Change_Request extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Change Request Form', 'wpforms-form-templates-pack' );
		$this->slug = 'change-request';
		$this->data = array(
			'field_id' => 11,
			'fields' => array(
				1 => array(
					'id' => '1',
					'type' => 'name',
					'label' => __( 'Requestor Name', 'wpforms-form-templates-pack' ),
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
					'type' => 'phone',
					'label' => __( 'Phone', 'wpforms-form-templates-pack' ),
					'format' => 'us',
					'size' => 'medium',
				),
				4 => array(
					'id' => '4',
					'type' => 'text',
					'label' => __( 'Company Name', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				5 => array(
					'id' => '5',
					'type' => 'text',
					'label' => __( 'Client ID Number', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				6 => array(
					'id' => '6',
					'type' => 'text',
					'label' => __( 'Project Name', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				7 => array(
					'id' => '7',
					'type' => 'radio',
					'label' => __( 'What type of change are you requesting?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Update to Account Information', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Project or Product Enhancement', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Update to Project Requirements/Deliverables', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Update to Project Schedule', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( 'Bug/Defect Fix', 'wpforms-form-templates-pack' ),
						),
					),
				),
				8 => array(
					'id' => '8',
					'type' => 'text',
					'label' => __( 'Reason for change', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				9 => array(
					'id' => '9',
					'type' => 'radio',
					'label' => __( 'Priority', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Low', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Medium', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'High', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Critical', 'wpforms-form-templates-pack' ),
						),
					),
				),
				10 => array(
					'id' => '10',
					'type' => 'textarea',
					'label' => __( 'Please describe in detail the change being requested.', 'wpforms-form-templates-pack' ),
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
new WPForms_Template_Change_Request;

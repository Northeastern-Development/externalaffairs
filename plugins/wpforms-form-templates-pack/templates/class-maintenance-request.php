<?php
/**
 * Maintenance Request Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Maintenance_Request_Form extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Maintenance Request Form', 'wpforms-form-templates-pack' );
		$this->slug = 'maintenance-request-form';
		$this->data = array(
			'field_id' => 11,
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
					'type' => 'phone',
					'label' => __( 'Phone', 'wpforms-form-templates-pack' ),
					'format' => 'us',
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
					'type' => 'address',
					'label' => __( 'Property Address', 'wpforms-form-templates-pack' ),
					'scheme' => 'us',
					'required' => '1',
					'size' => 'medium',
				),
				5 => array(
					'id' => '5',
					'type' => 'select',
					'label' => __( 'Priority Level', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Normal', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Low', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'High', 'wpforms-form-templates-pack' ),
						),
					),
					'size' => 'medium',
				),
				6 => array(
					'id' => '6',
					'type' => 'select',
					'label' => __( 'Type of problem', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'AC', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Heating', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Plumbing', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Electrical', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( 'Other / NA', 'wpforms-form-templates-pack' ),
						),
					),
					'size' => 'medium',
				),
				7 => array(
					'id' => '7',
					'type' => 'select',
					'label' => __( 'Location of problem', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Living room', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Kitchen', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Bathroom', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Bedroom', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( 'Patio', 'wpforms-form-templates-pack' ),
						),
						6 => array(
							'label' => __( 'Other / NA', 'wpforms-form-templates-pack' ),
						),
					),
					'size' => 'medium',
				),
				8 => array(
					'id' => '8',
					'type' => 'textarea',
					'label' => __( 'Please describe the issue', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				9 => array(
					'id' => '9',
					'type' => 'radio',
					'label' => __( 'Does our maintenance team have permission to enter your residence without you present?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Yes', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'No', 'wpforms-form-templates-pack' ),
						),
					),
					'required' => '1',
				),
				10 => array(
					'id' => '10',
					'type' => 'radio',
					'label' => __( 'Do you have any pets?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Yes', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'No', 'wpforms-form-templates-pack' ),
						),
					),
					'required' => '1',
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
new WPForms_Template_Maintenance_Request_Form;

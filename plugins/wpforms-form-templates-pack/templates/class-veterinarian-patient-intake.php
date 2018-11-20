<?php
/**
 * Veterinarian Patient Intake Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Veterinarian_Patient_Intake extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Veterinarian Patient Intake Form', 'wpforms-form-templates-pack' );
		$this->slug = 'veterinarian-patient-intake';
		$this->data = array(
			'field_id' => 13,
			'fields' => array(
				5 => array(
					'id' => '5',
					'type' => 'divider',
					'label' => __( 'Owner Information', 'wpforms-form-templates-pack' ),
					'label_disable' => '1',
				),
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
					'type' => 'phone',
					'label' => __( 'Phone', 'wpforms-form-templates-pack' ),
					'format' => 'us',
					'required' => '1',
					'size' => 'medium',
				),
				4 => array(
					'id' => '4',
					'type' => 'address',
					'label' => __( 'Address', 'wpforms-form-templates-pack' ),
					'scheme' => 'us',
					'size' => 'medium',
				),
				6 => array(
					'id' => '6',
					'type' => 'divider',
					'label' => __( 'Pet Information', 'wpforms-form-templates-pack' ),
					'label_disable' => '1',
				),
				7 => array(
					'id' => '7',
					'type' => 'text',
					'label' => __( 'Name', 'wpforms-form-templates-pack' ),
					'required' => '1',
					'size' => 'medium',
				),
				8 => array(
					'id' => '8',
					'type' => 'text',
					'label' => __( 'Age', 'wpforms-form-templates-pack' ),
					'required' => '1',
					'size' => 'medium',
				),
				10 => array(
					'id' => '10',
					'type' => 'text',
					'label' => __( 'Species and Breed', 'wpforms-form-templates-pack' ),
					'required' => '1',
					'size' => 'medium',
				),
				12 => array(
					'id' => '12',
					'type' => 'textarea',
					'label' => __( 'Please describe the problem or issue', 'wpforms-form-templates-pack' ),
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
new WPForms_Template_Veterinarian_Patient_Intake;

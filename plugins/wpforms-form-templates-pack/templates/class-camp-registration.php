<?php
/**
 * Camp Registration Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Camp_Registration extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Camp Registration Form', 'wpforms-form-templates-pack' );
		$this->slug = 'camp-registration';
		$this->data = array(
			'field_id' => 13,
			'fields' => array(
				1 => array(
					'id' => '1',
					'type' => 'name',
					'label' => __( 'Camper Name', 'wpforms-form-templates-pack' ),
					'format' => 'first-last',
					'required' => '1',
					'size' => 'medium',
				),
				2 => array(
					'id' => '2',
					'type' => 'select',
					'label' => __( 'Camer Age Group', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( '6-8 years old', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( '9-12 years old', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( '13-15 years old', 'wpforms-form-templates-pack' ),
						),
					),
					'required' => '1',
					'size' => 'medium',
				),
				3 => array(
					'id' => '3',
					'type' => 'radio',
					'label' => __( 'Desired Cabin', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Cabin 1', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Cabin 2', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Cabin 3', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Cabin 4', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( 'Cabin 5', 'wpforms-form-templates-pack' ),
						),
					),
				),
				4 => array(
					'id' => '4',
					'type' => 'radio',
					'label' => __( 'Does the camper have any known allergies?', 'wpforms-form-templates-pack' ),
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
				5 => array(
					'id' => '5',
					'type' => 'radio',
					'label' => __( 'Has the camper been camping before?', 'wpforms-form-templates-pack' ),
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
				6 => array(
					'id' => '6',
					'type' => 'divider',
					'label' => __( 'Emergency Contact Information', 'wpforms-form-templates-pack' ),
					'description' => 'Please enter the name of the parent or guardian who should be contacted in the case of an emergency.',
					'label_disable' => '1',
				),
				7 => array(
					'id' => '7',
					'type' => 'radio',
					'label' => __( 'Relationship', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Parent', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Sibling', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Relative', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Friend', 'wpforms-form-templates-pack' ),
						),
					),
					'required' => '1',
				),
				9 => array(
					'id' => '9',
					'type' => 'name',
					'label' => __( 'Name', 'wpforms-form-templates-pack' ),
					'format' => 'first-last',
					'required' => '1',
					'size' => 'medium',
				),
				10 => array(
					'id' => '10',
					'type' => 'email',
					'label' => __( 'Email', 'wpforms-form-templates-pack' ),
					'required' => '1',
					'size' => 'medium',
				),
				11 => array(
					'id' => '11',
					'type' => 'address',
					'label' => __( 'Address', 'wpforms-form-templates-pack' ),
					'scheme' => 'us',
					'size' => 'medium',
				),
				12 => array(
					'id' => '12',
					'type' => 'textarea',
					'label' => __( 'Questions or Comments', 'wpforms-form-templates-pack' ),
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
new WPForms_Template_Camp_Registration;

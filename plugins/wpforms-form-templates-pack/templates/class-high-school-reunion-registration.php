<?php
/**
 * High School Reunion Registration Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_High_School_Reunion_Registration extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'High School Reunion Registration Form', 'wpforms-form-templates-pack' );
		$this->slug = 'high-school-reunion-registration';
		$this->data = array(
			'field_id' => 9,
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
					'type' => 'name',
					'label' => __( 'Spouse or Guest Name', 'wpforms-form-templates-pack' ),
					'format' => 'first-last',
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
					'type' => 'email',
					'label' => __( 'Email', 'wpforms-form-templates-pack' ),
					'required' => '1',
					'size' => 'medium',
				),
				6 => array(
					'id' => '6',
					'type' => 'checkbox',
					'label' => __( 'Which events will you be attending?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Friday night cookout', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Saturday breakfast', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Saturday lunch', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Saturday formal dinner', 'wpforms-form-templates-pack' ),
						),
					),
				),
				7 => array(
					'id' => '7',
					'type' => 'radio',
					'label' => __( 'Would you like to pre-order a reunion DVD ($19.95)?', 'wpforms-form-templates-pack' ),
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
				8 => array(
					'id' => '8',
					'type' => 'textarea',
					'label' => __( 'Comments or Questions', 'wpforms-form-templates-pack' ),
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
new WPForms_Template_High_School_Reunion_Registration;

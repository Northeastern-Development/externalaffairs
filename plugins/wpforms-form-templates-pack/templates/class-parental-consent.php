<?php
/**
 * Parental Consent Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Parental_Consent extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Parental Consent Form', 'wpforms-form-templates-pack' );
		$this->slug = 'parental-consent';
		$this->data = array(
			'field_id' => 9,
			'fields' => array(
				1 => array(
					'id' => '1',
					'type' => 'name',
					'label' => __( 'Child Name', 'wpforms-form-templates-pack' ),
					'format' => 'first-last',
					'required' => '1',
					'size' => 'medium',
				),
				2 => array(
					'id' => '2',
					'type' => 'text',
					'label' => __( 'Child Classroom / Teacher', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				8 => array(
					'id' => '8',
					'type' => 'name',
					'label' => __( 'Parent Name', 'wpforms-form-templates-pack' ),
					'format' => 'first-last',
					'required' => '1',
					'size' => 'medium',
				),
				3 => array(
					'id' => '3',
					'type' => 'email',
					'label' => __( 'Parent Email', 'wpforms-form-templates-pack' ),
					'required' => '1',
					'size' => 'medium',
				),
				4 => array(
					'id' => '4',
					'type' => 'phone',
					'label' => __( 'Parent Phone Number', 'wpforms-form-templates-pack' ),
					'format' => 'us',
					'size' => 'medium',
				),
				5 => array(
					'id' => '5',
					'type' => 'phone',
					'label' => __( 'Emergency Contact Number', 'wpforms-form-templates-pack' ),
					'format' => 'us',
					'size' => 'medium',
				),
				6 => array(
					'id' => '6',
					'type' => 'textarea',
					'label' => __( 'Special Instructions', 'wpforms-form-templates-pack' ),
					'size' => 'small',
				),
				7 => array(
					'id' => '7',
					'type' => 'radio',
					'label' => __( 'Parental Consent for Child', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Yes, I provide consent', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'No, I do not provide consent', 'wpforms-form-templates-pack' ),
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
new WPForms_Template_Parental_Consent;

<?php
/**
 * Online Event Registration Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Online_Event_Registration extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Online Event Registration Form', 'wpforms-form-templates-pack' );
		$this->slug = 'online-event-registration';
		$this->data = array(
			'field_id' => 10,
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
					'type' => 'address',
					'label' => __( 'Address', 'wpforms-form-templates-pack' ),
					'scheme' => 'us',
					'size' => 'medium',
				),
				3 => array(
					'id' => '3',
					'type' => 'phone',
					'label' => __( 'Home Phone', 'wpforms-form-templates-pack' ),
					'format' => 'us',
					'size' => 'medium',
				),
				4 => array(
					'id' => '4',
					'type' => 'phone',
					'label' => __( 'Work Phone', 'wpforms-form-templates-pack' ),
					'format' => 'us',
					'size' => 'medium',
				),
				5 => array(
					'id' => '5',
					'type' => 'email',
					'label' => __( 'Email', 'wpforms-form-templates-pack' ),
					'required' => '1',
					'size' => 'medium',
				),
				6 => array(
					'id' => '6',
					'type' => 'radio',
					'label' => __( 'How did you hear about this event?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Friend or colleague', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Radio / TV', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Social Media', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Other', 'wpforms-form-templates-pack' ),
						),
					),
				),
				7 => array(
					'id' => '7',
					'type' => 'text',
					'label' => __( 'If other', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				8 => array(
					'id' => '8',
					'type' => 'select',
					'label' => __( 'Number of tickets needed', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( '1', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( '2', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( '3', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( '4', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( '5', 'wpforms-form-templates-pack' ),
						),
					),
					'size' => 'medium',
				),
				9 => array(
					'id' => '9',
					'type' => 'text',
					'label' => __( 'Company', 'wpforms-form-templates-pack' ),
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
new WPForms_Template_Online_Event_Registration;

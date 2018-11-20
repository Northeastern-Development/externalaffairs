<?php
/**
 * Family Reunion Registration Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Family_Reunion_Registration extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Family Reunion Registration Form', 'wpforms-form-templates-pack' );
		$this->slug = 'family-reunion-registration';
		$this->data = array(
			'field_id' => 7,
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
					'type' => 'checkbox',
					'label' => __( 'What activities do you want to play?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Football', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Baseball', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Kickball', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Volleyball', 'wpforms-form-templates-pack' ),
						),
					),
				),
				5 => array(
					'id' => '5',
					'type' => 'radio',
					'label' => __( 'What will you be bringing?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Snacks', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Lunch', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Drinks', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Dessert', 'wpforms-form-templates-pack' ),
						),
					),
				),
				6 => array(
					'id' => '6',
					'type' => 'textarea',
					'label' => __( 'Comments', 'wpforms-form-templates-pack' ),
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
new WPForms_Template_Family_Reunion_Registration;

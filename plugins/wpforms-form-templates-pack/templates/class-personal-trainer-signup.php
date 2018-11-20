<?php
/**
 * Personal Trainer Sign-Up Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Personal_Trainer_Signup extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Personal Trainer Sign-Up Form', 'wpforms-form-templates-pack' );
		$this->slug = 'personal-trainer-sign-up';
		$this->data = array(
			'field_id' => 12,
			'fields' => array(
				11 => array(
					'id' => '11',
					'type' => 'name',
					'label' => __( 'Name', 'wpforms-form-templates-pack' ),
					'format' => 'first-last',
					'required' => '1',
					'size' => 'medium',
				),
				2 => array(
					'id' => '2',
					'type' => 'number',
					'label' => __( 'Age', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				3 => array(
					'id' => '3',
					'type' => 'number',
					'label' => __( 'Weight (lbs)', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				4 => array(
					'id' => '4',
					'type' => 'address',
					'label' => __( 'Address', 'wpforms-form-templates-pack' ),
					'scheme' => 'us',
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
					'type' => 'phone',
					'label' => __( 'Phone', 'wpforms-form-templates-pack' ),
					'format' => 'us',
					'size' => 'medium',
				),
				7 => array(
					'id' => '7',
					'type' => 'radio',
					'label' => __( 'Trainer Preference', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Male', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Female', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'No preference', 'wpforms-form-templates-pack' ),
						),
					),
				),
				8 => array(
					'id' => '8',
					'type' => 'checkbox',
					'label' => __( 'Desired Days', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Monday', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Tuesday', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Wednesday', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Thursday', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( 'Friday', 'wpforms-form-templates-pack' ),
						),
					),
				),
				9 => array(
					'id' => '9',
					'type' => 'text',
					'label' => __( 'Desired Times', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				10 => array(
					'id' => '10',
					'type' => 'radio',
					'label' => __( 'Select a package', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Fitness Assesement', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'One session', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( '4 weekly sessions', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( '12 weekly sessions', 'wpforms-form-templates-pack' ),
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
new WPForms_Template_Personal_Trainer_Signup;

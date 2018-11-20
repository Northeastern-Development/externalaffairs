<?php
/**
 * Conference Registration Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Conference_Registration extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Conference Registration Form', 'wpforms-form-templates-pack' );
		$this->slug = 'conference-registration';
		$this->data = array(
			'field_id' => 8,
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
					'type' => 'radio',
					'label' => __( 'Which access pass would you like to purchase?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Bronze - $199.95', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Silver - $299.95', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Gold - $399.95', 'wpforms-form-templates-pack' ),
						),
					),
					'required' => '1',
				),
				4 => array(
					'id' => '4',
					'type' => 'checkbox',
					'label' => __( 'Which sessions do you plan on attending?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Session 1', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Session 2', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Session 3', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Session 4', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( 'Session 5', 'wpforms-form-templates-pack' ),
						),
					),
					'required' => '1',
				),
				5 => array(
					'id' => '5',
					'type' => 'radio',
					'label' => __( 'Will you be staying overnight?', 'wpforms-form-templates-pack' ),
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
					'type' => 'checkbox',
					'label' => __( 'Email Newsletter', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'I would like to receive email updates regarding future conferences', 'wpforms-form-templates-pack' ),
						),
					),
					'label_hide' => '1',
				),
				7 => array(
					'id' => '7',
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
new WPForms_Template_Conference_Registration;

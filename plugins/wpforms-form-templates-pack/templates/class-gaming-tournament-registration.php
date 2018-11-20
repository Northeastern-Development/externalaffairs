<?php
/**
 * Gaming Tournament Registration Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Gaming_Tournament_Registration extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Gaming Tournament Registration Form', 'wpforms-form-templates-pack' );
		$this->slug = 'gaming-tournament-registration';
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
					'type' => 'email',
					'label' => __( 'Email', 'wpforms-form-templates-pack' ),
					'required' => '1',
					'size' => 'medium',
				),
				3 => array(
					'id' => '3',
					'type' => 'radio',
					'label' => __( 'Will you be participating or just watching games?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Participating', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Watching', 'wpforms-form-templates-pack' ),
						),
					),
					'required' => '1',
				),
				4 => array(
					'id' => '4',
					'type' => 'checkbox',
					'label' => __( 'If you\'re participating, which tournaments will you participate in?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Warhammer', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Lord of the Rings', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Warhammer 40k', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Magic the Gathering', 'wpforms-form-templates-pack' ),
						),
					),
				),
				9 => array(
					'id' => '9',
					'type' => 'checkbox',
					'label' => __( 'If you\'re watching, which tournaments do you look forward to seeing?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Warhammer', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Lord of the Rings', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Warhammer 40k', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Magic the Gathering', 'wpforms-form-templates-pack' ),
						),
					),
				),
				6 => array(
					'id' => '6',
					'type' => 'radio',
					'label' => __( 'Will you being staying overnight?', 'wpforms-form-templates-pack' ),
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
				7 => array(
					'id' => '7',
					'type' => 'checkbox',
					'label' => __( 'Email Newsletter', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'I would like to receive email updates on future events', 'wpforms-form-templates-pack' ),
						),
					),
					'label_hide' => '1',
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
new WPForms_Template_Gaming_Tournament_Registration;

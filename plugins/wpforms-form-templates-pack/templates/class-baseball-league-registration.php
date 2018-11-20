<?php
/**
 * Baseball League Registration Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Baseball_League_Registration extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Baseball League Registration Form', 'wpforms-form-templates-pack' );
		$this->slug = 'baseball-league-registration';
		$this->data = array(
			'field_id' => 8,
			'fields' => array(
				1 => array(
					'id' => '1',
					'type' => 'name',
					'label' => __( 'Player Name', 'wpforms-form-templates-pack' ),
					'format' => 'first-last',
					'required' => '1',
					'size' => 'medium',
				),
				2 => array(
					'id' => '2',
					'type' => 'select',
					'label' => __( 'Player Age Group', 'wpforms-form-templates-pack' ),
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
					'label' => __( 'Desired Team', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Tigers', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Orioles', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Yankees', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Rangers', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( 'Astros', 'wpforms-form-templates-pack' ),
						),
					),
				),
				4 => array(
					'id' => '4',
					'type' => 'radio',
					'label' => __( 'Desired Position', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Pitcher', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Catcher', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Outfield', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Infield', 'wpforms-form-templates-pack' ),
						),
					),
				),
				5 => array(
					'id' => '5',
					'type' => 'name',
					'label' => __( 'Guardian Name', 'wpforms-form-templates-pack' ),
					'format' => 'first-last',
					'required' => '1',
					'size' => 'medium',
				),
				6 => array(
					'id' => '6',
					'type' => 'email',
					'label' => __( 'Guardian Email', 'wpforms-form-templates-pack' ),
					'required' => '1',
					'size' => 'medium',
				),
				7 => array(
					'id' => '7',
					'type' => 'address',
					'label' => __( 'Guardian Address', 'wpforms-form-templates-pack' ),
					'scheme' => 'us',
					'required' => '1',
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
new WPForms_Template_Baseball_League_Registration;

<?php
/**
 * Fitness Interest Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Fitness_Interest extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Fitness Interest Form', 'wpforms-form-templates-pack' );
		$this->slug = 'fitness-interest';
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
					'type' => 'phone',
					'label' => __( 'Phone', 'wpforms-form-templates-pack' ),
					'format' => 'us',
					'required' => '1',
					'size' => 'medium',
				),
				3 => array(
					'id' => '3',
					'type' => 'email',
					'label' => __( 'Email', 'wpforms-form-templates-pack' ),
					'required' => '1',
					'size' => 'medium',
				),
				6 => array(
					'id' => '6',
					'type' => 'radio',
					'label' => __( 'Best time to call', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Mornings', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Afternoons', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Evenings', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Weekends', 'wpforms-form-templates-pack' ),
						),
					),
				),
				4 => array(
					'id' => '4',
					'type' => 'checkbox',
					'label' => __( 'Which of the following are important to you?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Fat reduction and weight loss', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Energy and endurance', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Building lean muscle mass', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Healthier digestive system', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( 'Vitality, longevity, and positive outlook', 'wpforms-form-templates-pack' ),
						),
					),
				),
				5 => array(
					'id' => '5',
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
new WPForms_Template_Fitness_Interest;

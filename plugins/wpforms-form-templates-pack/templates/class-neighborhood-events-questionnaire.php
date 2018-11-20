<?php
/**
 * Neighborhood Events Questionnaire Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Neighborhood_Events_Questionnaire extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Neighborhood Events Questionnaire Form', 'wpforms-form-templates-pack' );
		$this->slug = 'neighborhood-events-questionnaire';
		$this->data = array(
			'field_id' => 7,
			'fields' => array(
				1 => array(
					'id' => '1',
					'type' => 'radio',
					'label' => __( 'How often do you attend events in this neighborhood?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Extremely often', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Very often', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Moderately often', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Slightly often', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( 'Never', 'wpforms-form-templates-pack' ),
						),
					),
				),
				2 => array(
					'id' => '2',
					'type' => 'textarea',
					'label' => __( 'If you do not attend events in this neighborhood, why not?', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				3 => array(
					'id' => '3',
					'type' => 'textarea',
					'label' => __( 'What types of events would you attend if they were held in this neighborhood?', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				4 => array(
					'id' => '4',
					'type' => 'radio',
					'label' => __( 'How often do you participate in activities in this neighborhood?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Extremely often', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Very often', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Moderately often', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Slightly often', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( 'Never', 'wpforms-form-templates-pack' ),
						),
					),
				),
				5 => array(
					'id' => '5',
					'type' => 'textarea',
					'label' => __( 'If you do not participate in activities in this neighborhood, why not?', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				6 => array(
					'id' => '6',
					'type' => 'textarea',
					'label' => __( 'What types of activities would you participate in if they were available in this neighborhood?', 'wpforms-form-templates-pack' ),
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
new WPForms_Template_Neighborhood_Events_Questionnaire;

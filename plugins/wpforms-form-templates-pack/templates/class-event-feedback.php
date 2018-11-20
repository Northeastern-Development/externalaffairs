<?php
/**
 * Event Feedback Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Event_Feedback extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Event Feedback Form', 'wpforms-form-templates-pack' );
		$this->slug = 'event-feedback';
		$this->data = array(
			'field_id' => 22,
			'fields' => array(
				18 => array(
					'id' => '18',
					'type' => 'radio',
					'label' => __( 'Please rate your overall experience at our event', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Very satisfied', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Satisfied', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Neutral', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Unsatisfied', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( 'Very Unsatisified', 'wpforms-form-templates-pack' ),
						),
					),
					'required' => '1',
				),
				19 => array(
					'id' => '19',
					'type' => 'radio',
					'label' => __( 'Would you return again next year?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Yes', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'No', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Undecided', 'wpforms-form-templates-pack' ),
						),
					),
					'required' => '1',
				),
				20 => array(
					'id' => '20',
					'type' => 'textarea',
					'label' => __( 'What could we have improved?', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				21 => array(
					'id' => '21',
					'type' => 'textarea',
					'label' => __( 'Do you have any additional feedback?', 'wpforms-form-templates-pack' ),
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
new WPForms_Template_Event_Feedback;

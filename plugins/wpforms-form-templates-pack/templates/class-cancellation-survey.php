<?php
/**
 * Cancellation Survey Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Cancellation_Survey extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Cancellation Survey Form', 'wpforms-form-templates-pack' );
		$this->slug = 'cancellation-survey';
		$this->data = array(
			'field_id' => 9,
			'fields' => array(
				1 => array(
					'id' => '1',
					'type' => 'radio',
					'label' => __( 'How long had you been using the subscription / service?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Less than a month', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( '1-6 months', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( '1-3 years', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Over 3 years', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( 'Never used', 'wpforms-form-templates-pack' ),
						),
					),
				),
				2 => array(
					'id' => '2',
					'type' => 'radio',
					'label' => __( 'How often did you use the subscription / service?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Once a week', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( '2 to 3 times a month', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Once a month', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Less than once a month', 'wpforms-form-templates-pack' ),
						),
					),
				),
				3 => array(
					'id' => '3',
					'type' => 'radio',
					'label' => __( 'Overall, how satisfied were you with the subscription / service?', 'wpforms-form-templates-pack' ),
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
							'label' => __( 'Very Unsatisfied', 'wpforms-form-templates-pack' ),
						),
					),
				),
				4 => array(
					'id' => '4',
					'type' => 'radio',
					'label' => __( 'What was the primary reason for canceling your subscription / service?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'No longer need it', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'It didn\'t meet my needs', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Found an alternative', 'wpforms-form-templates-pack' ),
						),
						7 => array(
							'label' => __( 'Quality was less than expected', 'wpforms-form-templates-pack' ),
						),
						6 => array(
							'label' => __( 'Ease of use was less than expected', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( 'Access to the service was less than expected', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Customer service was less than expected', 'wpforms-form-templates-pack' ),
						),
						8 => array(
							'label' => __( 'Other', 'wpforms-form-templates-pack' ),
						),
					),
				),
				5 => array(
					'id' => '5',
					'type' => 'textarea',
					'label' => __( 'If other, please specify', 'wpforms-form-templates-pack' ),
					'size' => 'small',
				),
				6 => array(
					'id' => '6',
					'type' => 'radio',
					'label' => __( 'Would you use the product / service in the future?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Definitely', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Probably', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Not sure', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Probably not', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( 'Definitely not', 'wpforms-form-templates-pack' ),
						),
					),
				),
				7 => array(
					'id' => '7',
					'type' => 'radio',
					'label' => __( 'Would you recommend our product / service to colleagues or contacts within your industry?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Definitely', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Probably', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Not sure', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Probably not', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( 'Definitely not', 'wpforms-form-templates-pack' ),
						),
					),
				),
				8 => array(
					'id' => '8',
					'type' => 'textarea',
					'label' => __( 'What could we do to improve our subscription / service?', 'wpforms-form-templates-pack' ),
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
new WPForms_Template_Cancellation_Survey;

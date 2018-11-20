<?php
/**
 * Neighborhood Feedback Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Neighborhood_Feedback extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Neighborhood Feedback Form', 'wpforms-form-templates-pack' );
		$this->slug = 'neighborhood-feedback';
		$this->data = array(
			'field_id' => 20,
			'fields' => array(
				1 => array(
					'id' => '1',
					'type' => 'radio',
					'label' => __( 'How many of your neighbors do you know?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'All of them', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Most of them', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Some of them', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'A few of them', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( 'None of them', 'wpforms-form-templates-pack' ),
						),
					),
				),
				2 => array(
					'id' => '2',
					'type' => 'radio',
					'label' => __( 'How strong is the sense of community in this neighborhood?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Extremely strong', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Very strong', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Moderately strong', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Slightly strong', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( 'Not at all strong', 'wpforms-form-templates-pack' ),
						),
					),
				),
				3 => array(
					'id' => '3',
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
							'label' => __( 'Not at all often', 'wpforms-form-templates-pack' ),
						),
					),
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
							'label' => __( 'Not at all often', 'wpforms-form-templates-pack' ),
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
					'label' => __( 'If you do not participate in activities in this neighborhood, why not?', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				7 => array(
					'id' => '7',
					'type' => 'textarea',
					'label' => __( 'What types of events would you attend if they were held in this neighborhood?', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				8 => array(
					'id' => '8',
					'type' => 'textarea',
					'label' => __( 'What types of activities would you participate in if they were available in this neighborhood?', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				9 => array(
					'id' => '9',
					'type' => 'radio',
					'label' => __( 'How often do you visit the parks in this neighborhood?', 'wpforms-form-templates-pack' ),
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
							'label' => __( 'Not at all often', 'wpforms-form-templates-pack' ),
						),
					),
				),
				10 => array(
					'id' => '10',
					'type' => 'radio',
					'label' => __( 'Are you satisfied with the parks in this neighborhood, neither satisfied nor dissatisfied with them, or dissatisfied with them?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Extremely satisfied', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Moderately satisfied', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Slightly satisfied', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Neither satisfied nor dissatisfied', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( 'Slightly dissatisfied', 'wpforms-form-templates-pack' ),
						),
						6 => array(
							'label' => __( 'Extremely dissatisfied', 'wpforms-form-templates-pack' ),
						),
					),
				),
				11 => array(
					'id' => '11',
					'type' => 'radio',
					'label' => __( 'How well are the streets in this neighborhood maintained?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Extremely well', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Very well', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Moderately well', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Slightly well', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( 'Not at all well', 'wpforms-form-templates-pack' ),
						),
					),
				),
				12 => array(
					'id' => '12',
					'type' => 'radio',
					'label' => __( 'How safe do you feel in this neighborhood?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Extremely safe', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Very safe', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Moderately safe', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Slightly safe', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( 'Not at all safe', 'wpforms-form-templates-pack' ),
						),
					),
				),
				13 => array(
					'id' => '13',
					'type' => 'radio',
					'label' => __( 'How clean is this neighborhood?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Extremely clean', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Very clean', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Moderately clean', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Slightly clean', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( 'Not at all clean', 'wpforms-form-templates-pack' ),
						),
					),
				),
				14 => array(
					'id' => '14',
					'type' => 'radio',
					'label' => __( 'How proud are you to live in this neighborhood?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Extremely proud', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Very proud', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Moderately proud', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Slightly proud', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( 'Not at all proud', 'wpforms-form-templates-pack' ),
						),
					),
				),
				15 => array(
					'id' => '15',
					'type' => 'textarea',
					'label' => __( 'What do you like most about this neighborhood?', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				16 => array(
					'id' => '16',
					'type' => 'textarea',
					'label' => __( 'What do you like least about this neighborhood?', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				17 => array(
					'id' => '17',
					'type' => 'textarea',
					'label' => __( 'What changes would most improve this neighborhood?', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				18 => array(
					'id' => '18',
					'type' => 'radio',
					'label' => __( 'How promising is the future of this neighborhood?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Extremely promising', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Very promising', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Moderately promising', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Slightly promising', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( 'Not at all promising', 'wpforms-form-templates-pack' ),
						),
					),
				),
				19 => array(
					'id' => '19',
					'type' => 'radio',
					'label' => __( 'Overall, are you satisfied with your experience living in this neighborhood, neither satisfied nor dissatisfied with it, or dissatisfied with it?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Extremely satisfied', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Moderately satisfied', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Slightly satisfied', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Neither satisfied or dissatisfied', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( 'Slightly dissatisfied', 'wpforms-form-templates-pack' ),
						),
						6 => array(
							'label' => __( 'Moderately dissatisfied', 'wpforms-form-templates-pack' ),
						),
						7 => array(
							'label' => __( 'Extremely dissatisfied', 'wpforms-form-templates-pack' ),
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
new WPForms_Template_Neighborhood_Feedback;

<?php
/**
 * Volunteer Recruitment Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Volunteer_Recruitment extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Volunteer Recruitment Form', 'wpforms-form-templates-pack' );
		$this->slug = 'volunteer-recruitment';
		$this->data = array(
			'field_id' => 11,
			'fields' => array(
				1 => array(
					'id' => '1',
					'type' => 'radio',
					'label' => __( 'Which programs are you interested in volunteering for?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Homelessness', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Child abuse and neglect', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Drug and alcohol addiction', 'wpforms-form-templates-pack' ),
						),
						6 => array(
							'label' => __( 'Medical research', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( 'Health and safety', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Other', 'wpforms-form-templates-pack' ),
						),
					),
				),
				2 => array(
					'id' => '2',
					'type' => 'radio',
					'label' => __( 'Which events are you interested in volunteering for?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Annual walk-a-thon', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Quarterly raffle', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Black-tie Gala', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Other', 'wpforms-form-templates-pack' ),
						),
					),
				),
				3 => array(
					'id' => '3',
					'type' => 'radio',
					'label' => __( 'How many hours per week would you be able to dedicate?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( '3 hour or less', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( '3 to 5 hours', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( '5 to 10 hours', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( '10 to 20 hours', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( '20 or more hours', 'wpforms-form-templates-pack' ),
						),
					),
				),
				4 => array(
					'id' => '4',
					'type' => 'checkbox',
					'label' => __( 'What days of the week are you available?', 'wpforms-form-templates-pack' ),
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
						6 => array(
							'label' => __( 'Saturday', 'wpforms-form-templates-pack' ),
						),
						7 => array(
							'label' => __( 'Sunday', 'wpforms-form-templates-pack' ),
						),
					),
				),
				5 => array(
					'id' => '5',
					'type' => 'textarea',
					'label' => __( 'Please list any relevant experiences you have that you feel would benefit any of the above programs or events.', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				6 => array(
					'id' => '6',
					'type' => 'radio',
					'label' => __( 'How did you find out about our organization?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Direct mail', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Advertisement', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Online Search', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Friend / Family', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( 'Business Colleague ', 'wpforms-form-templates-pack' ),
						),
						6 => array(
							'label' => __( 'Other', 'wpforms-form-templates-pack' ),
						),
					),
				),
				7 => array(
					'id' => '7',
					'type' => 'name',
					'label' => __( 'Name', 'wpforms-form-templates-pack' ),
					'format' => 'first-last',
					'required' => '1',
					'size' => 'medium',
				),
				8 => array(
					'id' => '8',
					'type' => 'address',
					'label' => __( 'Address', 'wpforms-form-templates-pack' ),
					'scheme' => 'us',
					'size' => 'medium',
				),
				9 => array(
					'id' => '9',
					'type' => 'email',
					'label' => __( 'Email', 'wpforms-form-templates-pack' ),
					'required' => '1',
					'size' => 'medium',
				),
				10 => array(
					'id' => '10',
					'type' => 'phone',
					'label' => __( 'Phone', 'wpforms-form-templates-pack' ),
					'format' => 'us',
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
new WPForms_Template_Volunteer_Recruitment;

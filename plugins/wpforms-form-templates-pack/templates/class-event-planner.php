<?php
/**
 * Event Planner form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Event_Planner extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Event Planner Form', 'wpforms-form-templates-pack' );
		$this->slug = 'event-planner';
		$this->data = array(
			'field_id' => 12,
			'fields' => array(
				10 => array(
					'id' => '10',
					'type' => 'name',
					'label' => __( 'Your Name', 'wpforms-form-templates-pack' ),
					'format' => 'first-last',
					'required' => '1',
					'size' => 'medium',
				),
				11 => array(
					'id' => '11',
					'type' => 'email',
					'label' => __( 'Your Email', 'wpforms-form-templates-pack' ),
					'required' => '1',
					'size' => 'medium',
				),
				1 => array(
					'id' => '1',
					'type' => 'text',
					'label' => __( 'Event Name', 'wpforms-form-templates-pack' ),
					'required' => '1',
					'size' => 'medium',
				),
				2 => array(
					'id' => '2',
					'type' => 'select',
					'label' => __( 'Event Type', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Banquet', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Fund Raiser', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Dinner Party', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Wedding', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( 'Other', 'wpforms-form-templates-pack' ),
						),
					),
					'size' => 'medium',
				),
				3 => array(
					'id' => '3',
					'type' => 'select',
					'label' => __( 'Status', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Planning', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'In Progress', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Finished', 'wpforms-form-templates-pack' ),
						),
					),
					'size' => 'medium',
				),
				4 => array(
					'id' => '4',
					'type' => 'textarea',
					'label' => __( 'Event Description', 'wpforms-form-templates-pack' ),
					'required' => '1',
					'size' => 'medium',
				),
				5 => array(
					'id' => '5',
					'type' => 'date-time',
					'label' => __( 'Event Begin Date and Time ', 'wpforms-form-templates-pack' ),
					'format' => 'date-time',
					'size' => 'medium',
					'date_format' => 'm/d/Y',
					'date_type' => 'datepicker',
					'time_format' => 'g:i A',
					'time_interval' => '30',
				),
				6 => array(
					'id' => '6',
					'type' => 'date-time',
					'label' => __( 'Event End Date and Time', 'wpforms-form-templates-pack' ),
					'format' => 'date-time',
					'size' => 'medium',
					'date_format' => 'm/d/Y',
					'date_type' => 'datepicker',
					'time_format' => 'g:i A',
					'time_interval' => '30',
				),
				7 => array(
					'id' => '7',
					'type' => 'address',
					'label' => __( 'Address', 'wpforms-form-templates-pack' ),
					'scheme' => 'us',
					'size' => 'medium',
				),
				8 => array(
					'id' => '8',
					'type' => 'checkbox',
					'label' => __( 'Requirements', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Staffing', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Catering', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Bar Tending', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Security', 'wpforms-form-templates-pack' ),
						),
					),
				),
				9 => array(
					'id' => '9',
					'type' => 'payment-single',
					'label' => __( 'Cost Per Person', 'wpforms-form-templates-pack' ),
					'format' => 'user',
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
new WPForms_Template_Event_Planner;

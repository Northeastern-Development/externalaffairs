<?php
/**
 * Exercise Log Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Exercise_Log extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Exercise Log Form', 'wpforms-form-templates-pack' );
		$this->slug = 'exercise-log';
		$this->data = array(
			'field_id' => 9,
			'fields' => array(
				1 => array(
					'id' => '1',
					'type' => 'select',
					'label' => __( 'Dropdown', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Running', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Walking', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Swimming', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Spinning', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( 'Weights', 'wpforms-form-templates-pack' ),
						),
					),
					'size' => 'medium',
				),
				2 => array(
					'id' => '2',
					'type' => 'date-time',
					'label' => __( 'Date / Time', 'wpforms-form-templates-pack' ),
					'format' => 'date-time',
					'size' => 'medium',
					'date_format' => 'm/d/Y',
					'date_type' => 'datepicker',
					'time_format' => 'g:i A',
					'time_interval' => '30',
				),
				4 => array(
					'id' => '4',
					'type' => 'text',
					'label' => __( 'Calories burned', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				5 => array(
					'id' => '5',
					'type' => 'text',
					'label' => __( 'Distance traveled', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				6 => array(
					'id' => '6',
					'type' => 'text',
					'label' => __( 'Maximum pulse', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				7 => array(
					'id' => '7',
					'type' => 'text',
					'label' => __( 'Resting pulse', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				8 => array(
					'id' => '8',
					'type' => 'textarea',
					'label' => __( 'Comments on workout', 'wpforms-form-templates-pack' ),
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
new WPForms_Template_Exercise_Log;

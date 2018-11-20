<?php
/**
 * Time Sheet Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Time_Sheet extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Time Sheet Form', 'wpforms-form-templates-pack' );
		$this->slug = 'time-sheet';
		$this->data = array(
			'field_id' => 7,
			'fields' => array(
				1 => array(
					'id' => '1',
					'type' => 'name',
					'label' => __( 'Employee Name', 'wpforms-form-templates-pack' ),
					'format' => 'first-last',
					'required' => '1',
					'size' => 'medium',
				),
				2 => array(
					'id' => '2',
					'type' => 'select',
					'label' => __( 'Project / Client', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Acme Corp', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'John Doe LLC', 'wpforms-form-templates-pack' ),
						),
					),
					'size' => 'medium',
				),
				3 => array(
					'id' => '3',
					'type' => 'date-time',
					'label' => __( 'Date / Time', 'wpforms-form-templates-pack' ),
					'format' => 'date',
					'size' => 'medium',
					'date_format' => 'm/d/Y',
					'date_type' => 'datepicker',
					'time_format' => 'g:i A',
					'time_interval' => '30',
				),
				5 => array(
					'id' => '5',
					'type' => 'text',
					'label' => __( 'Hours', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				4 => array(
					'id' => '4',
					'type' => 'payment-single',
					'label' => __( 'Hourly Rate', 'wpforms-form-templates-pack' ),
					'format' => 'user',
					'size' => 'medium',
				),
				6 => array(
					'id' => '6',
					'type' => 'textarea',
					'label' => __( 'Notes', 'wpforms-form-templates-pack' ),
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
new WPForms_Template_Time_Sheet;

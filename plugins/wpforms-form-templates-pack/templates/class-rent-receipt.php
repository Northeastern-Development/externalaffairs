<?php
/**
 * Rent Receipt Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Rent_Receipt extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Rent Receipt Form', 'wpforms-form-templates-pack' );
		$this->slug = 'rent-receipt';
		$this->data = array(
			'field_id' => 9,
			'fields' => array(
				1 => array(
					'id' => '1',
					'type' => 'date-time',
					'label' => __( 'Date / Time', 'wpforms-form-templates-pack' ),
					'format' => 'date-time',
					'size' => 'medium',
					'date_format' => 'm/d/Y',
					'date_type' => 'datepicker',
					'time_format' => 'g:i A',
					'time_interval' => '30',
				),
				2 => array(
					'id' => '2',
					'type' => 'name',
					'label' => __( 'Tenant Name', 'wpforms-form-templates-pack' ),
					'format' => 'first-last',
					'required' => '1',
					'size' => 'medium',
				),
				8 => array(
					'id' => '8',
					'type' => 'email',
					'label' => __( 'Tenant Email', 'wpforms-form-templates-pack' ),
					'required' => '1',
					'size' => 'medium',
				),
				3 => array(
					'id' => '3',
					'type' => 'payment-single',
					'label' => __( 'Amount Paid', 'wpforms-form-templates-pack' ),
					'format' => 'user',
					'size' => 'medium',
				),
				4 => array(
					'id' => '4',
					'type' => 'address',
					'label' => __( 'Property Address', 'wpforms-form-templates-pack' ),
					'scheme' => 'us',
					'size' => 'medium',
				),
				5 => array(
					'id' => '5',
					'type' => 'radio',
					'label' => __( 'Payment Type', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Cash', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Check', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Money order', 'wpforms-form-templates-pack' ),
						),
					),
				),
				7 => array(
					'id' => '7',
					'type' => 'name',
					'label' => __( 'Payment Received By', 'wpforms-form-templates-pack' ),
					'format' => 'first-last',
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
new WPForms_Template_Rent_Receipt;

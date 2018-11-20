<?php
/**
 * Gift Card Order form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Gift_Card_Order extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Gift Card Order Form', 'wpforms-form-templates-pack' );
		$this->slug = 'gift-card-order';
		$this->data = array(
			'field_id' => '10',
			'fields' => array(
				9 => array(
					'id' => '9',
					'type' => 'payment-single',
					'label' => __( 'Gift Card Amount', 'wpforms-form-templates-pack' ),
					'format' => 'user',
					'required' => '1',
					'size' => 'medium',
				),
				3 => array(
					'id' => '3',
					'type' => 'name',
					'label' => __( 'Recipient\'s Name', 'wpforms-form-templates-pack' ),
					'format' => 'first-last',
					'required' => '1',
					'size' => 'medium',
				),
				4 => array(
					'id' => '4',
					'type' => 'address',
					'label' => __( 'Shipping', 'wpforms-form-templates-pack' ),
					'scheme' => 'us',
					'required' => '1',
					'size' => 'medium',
				),
				5 => array(
					'id' => '5',
					'type' => 'name',
					'label' => __( 'Purchaser\'s Name', 'wpforms-form-templates-pack' ),
					'format' => 'first-last',
					'required' => '1',
					'size' => 'medium',
				),
				6 => array(
					'id' => '6',
					'type' => 'address',
					'label' => __( 'Billing Address', 'wpforms-form-templates-pack' ),
					'scheme' => 'us',
					'required' => '1',
					'size' => 'medium',
				),
				7 => array(
					'id' => '7',
					'type' => 'phone',
					'label' => __( 'Phone', 'wpforms-form-templates-pack' ),
					'format' => 'us',
					'size' => 'medium',
				),
				8 => array(
					'id' => '8',
					'type' => 'email',
					'label' => __( 'Email', 'wpforms-form-templates-pack' ),
					'required' => '1',
					'size' => 'medium',
				),
			),
			'settings' => array(
				'honeypot'                    => '1',
				'confirmation_message_scroll' => '1',
				'submit_text_processing'      => __( 'Sending...', 'wpforms-form-templates-pack' ),
			),
			'meta'     => array(
				'template' => $this->slug,
			),
		);
	}
}
new WPForms_Template_Gift_Card_Order;

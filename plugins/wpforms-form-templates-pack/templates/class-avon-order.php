<?php
/**
 * Avon Order form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Avon_Order extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Avon Order Form', 'wpforms-form-templates-pack' );
		$this->slug = 'avon-order';
		$this->data = array(
			'field_id' => 11,
			'fields' => array(
				1 => array(
					'id' => '1',
					'type' => 'text',
					'label' => __( 'Catalogue Name', 'wpforms-form-templates-pack' ),
					'required' => '1',
					'size' => 'medium',
				),
				2 => array(
					'id' => '2',
					'type' => 'number',
					'label' => __( 'Page Number', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				3 => array(
					'id' => '3',
					'type' => 'number',
					'label' => __( 'Quantity', 'wpforms-form-templates-pack' ),
					'required' => '1',
					'size' => 'medium',
				),
				4 => array(
					'id' => '4',
					'type' => 'text',
					'label' => __( 'Product #', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				5 => array(
					'id' => '5',
					'type' => 'textarea',
					'label' => __( 'Product Description', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				6 => array(
					'id' => '6',
					'type' => 'payment-single',
					'label' => __( 'Cost', 'wpforms-form-templates-pack' ),
					'format' => 'user',
					'size' => 'medium',
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
					'type' => 'email',
					'label' => __( 'Email', 'wpforms-form-templates-pack' ),
					'required' => '1',
					'size' => 'medium',
				),
				9 => array(
					'id' => '9',
					'type' => 'phone',
					'label' => __( 'Phone', 'wpforms-form-templates-pack' ),
					'format' => 'us',
					'size' => 'medium',
				),
				10 => array(
					'id' => '10',
					'type' => 'address',
					'label' => __( 'Address', 'wpforms-form-templates-pack' ),
					'scheme' => 'us',
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
new WPForms_Template_Avon_Order;

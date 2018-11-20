<?php
/**
 * Takeout Order form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Takeout_Order extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Takeout Order Form', 'wpforms-form-templates-pack' );
		$this->slug = 'takeout-order';
		$this->data = array(
			'field_id' => '7',
			'fields'   => array(
				1 => array(
					'id'      => '1',
					'type'    => 'select',
					'label'   => __( 'What type of pizza would you like?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Cheese', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Pepperoni (+ $0.50)', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Sausage (+ $0.50)', 'wpforms-form-templates-pack' ),
						),
					),
					'required' => '1',
					'size'     => 'medium',
				),
				2 => array(
					'id'      => '2',
					'type'    => 'radio',
					'label'   => __( 'How many pizzas would you like to order?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( '1 - $10', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( '2 - $20', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( '3 - $30', 'wpforms-form-templates-pack' ),
						),
					),
					'required' => '1',
				),
				3 => array(
					'id'       => '3',
					'type'     => 'name',
					'label'    => __( 'Name', 'wpforms-form-templates-pack' ),
					'format'   => 'first-last',
					'required' => '1',
					'size'     => 'medium',
				),
				4 => array(
					'id'       => '4',
					'type'     => 'email',
					'label'    => __( 'Email', 'wpforms-form-templates-pack' ),
					'required' => '1',
					'size'     => 'medium',
				),
				5 => array(
					'id'       => '5',
					'type'     => 'phone',
					'label'    => __( 'Phone', 'wpforms-form-templates-pack' ),
					'format'   => 'us',
					'required' => '1',
					'size'     => 'medium',
				),
				6 => array(
					'id'     => '6',
					'type'   => 'address',
					'label'  => __( 'Address', 'wpforms-form-templates-pack' ),
					'scheme' => 'us',
					'size'   => 'medium',
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
new WPForms_Template_Takeout_Order;

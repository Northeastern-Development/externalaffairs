<?php
/**
 * Tshirt Order form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Tshirt_Order extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Tshirt Order Form', 'wpforms-form-templates-pack' );
		$this->slug = 'tshirt-order';
		$this->data = array(
			'field_id' => '10',
			'fields' => array(
				1 => array(
					'id'            => '1',
					'type'          => 'divider',
					'label'         => __( 'T-Shirt Details', 'wpforms-form-templates-pack' ),
					'label_disable' => '1',
				),
				2 => array(
					'id'      => '2',
					'type'    => 'select',
					'label'   => __( 'Design', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Ninja Shirt', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Robot Shirt', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Pirate Shirt', 'wpforms-form-templates-pack' ),
						),
					),
					'required' => '1',
					'size'     => 'medium',
				),
				3 => array(
					'id'      => '3',
					'type'    => 'select',
					'label'   => __( 'Size', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Small', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Medium', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Large', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Extra Large', 'wpforms-form-templates-pack' ),
						),
					),
					'required' => '1',
					'size'     => 'medium',
				),
				4 => array(
					'id'      => '4',
					'type'    => 'select',
					'label'   => __( 'Color', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Red', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Blue', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Green', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Black', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( 'White', 'wpforms-form-templates-pack' ),
						),
					),
					'required' => '1',
					'size'     => 'medium',
				),
				5 => array(
					'id'            => '5',
					'type'          => 'divider',
					'label'         => __( 'Your Details', 'wpforms-form-templates-pack' ),
					'label_disable' => '1',
				),
				6 => array(
					'id'       => '6',
					'type'     => 'name',
					'label'    => __( 'Name', 'wpforms-form-templates-pack' ),
					'format'   => 'first-last',
					'required' => '1',
					'size'     => 'medium',
				),
				7 => array(
					'id' => '7',
					'type'     => 'email',
					'label'    => __( 'Email', 'wpforms-form-templates-pack' ),
					'required' => '1',
					'size'     => 'medium',
				),
				8 => array(
					'id'       => '8',
					'type'     => 'address',
					'label'    => __( 'Address', 'wpforms-form-templates-pack' ),
					'scheme'   => 'us',
					'required' => '1',
					'size'     => 'medium',
				),
				9 => array(
					'id'      => '9',
					'type'    => 'checkbox',
					'label'   => __( 'Gift', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'This is a gift', 'wpforms-form-templates-pack' ),
						),
					),
					'label_hide' => '1',
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
new WPForms_Template_Tshirt_Order;

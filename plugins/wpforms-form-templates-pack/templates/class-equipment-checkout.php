<?php
/**
 * Equipment Checkout Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Equipment_Checkout extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Equipment Checkout Form', 'wpforms-form-templates-pack' );
		$this->slug = 'equipment-checkout';
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
					'type' => 'text',
					'label' => __( 'Employee ID', 'wpforms-form-templates-pack' ),
					'required' => '1',
					'size' => 'medium',
				),
				3 => array(
					'id' => '3',
					'type' => 'email',
					'label' => __( 'Email', 'wpforms-form-templates-pack' ),
					'required' => '1',
					'size' => 'medium',
				),
				4 => array(
					'id' => '4',
					'type' => 'phone',
					'label' => __( 'Phone', 'wpforms-form-templates-pack' ),
					'format' => 'us',
					'size' => 'medium',
				),
				5 => array(
					'id' => '5',
					'type' => 'checkbox',
					'label' => __( 'Equipment Checked Out', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Laptop', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Laptop Carrying Case', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'AC Power Cord', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Docking Station', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( 'Bluetooth Mouse', 'wpforms-form-templates-pack' ),
						),
					),
				),
				6 => array(
					'id' => '6',
					'type' => 'checkbox',
					'label' => __( 'Agreement', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'I acknowledge the equipment I have received is in good physical working condition and I will return the equipment in the same condition. I take financial responsibility for any damages to the equipment upon return.', 'wpforms-form-templates-pack' ),
						),
					),
					'required' => '1',
					'label_hide' => '1',
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
new WPForms_Template_Equipment_Checkout;

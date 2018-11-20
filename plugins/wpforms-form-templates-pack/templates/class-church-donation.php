<?php
/**
 * Church Donaton form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Church_Donation extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Church Donation Form', 'wpforms-form-templates-pack' );
		$this->slug = 'church-donation';
		$this->data = array(
			'field_id' => 9,
			'fields' => array(
				1 => array(
					'id' => '1',
					'type' => 'name',
					'label' => __( 'Name', 'wpforms-form-templates-pack' ),
					'format' => 'first-last',
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
				2 => array(
					'id' => '2',
					'type' => 'payment-single',
					'label' => __( 'Donation Amount', 'wpforms-form-templates-pack' ),
					'price' => '0.00',
					'format' => 'user',
					'required' => '1',
					'size' => 'medium',
				),
				7 => array(
					'id' => '7',
					'type' => 'text',
					'label' => __( 'This donation is in memory of', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				8 => array(
					'id' => '8',
					'type' => 'radio',
					'label' => __( 'Please direct my gift to one of the following areas', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Youth', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Family', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Seniors', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Ministry', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( 'Where it is needed most', 'wpforms-form-templates-pack' ),
						),
					),
				),
				5 => array(
					'id' => '5',
					'type' => 'textarea',
					'label' => __( 'Additional Comments', 'wpforms-form-templates-pack' ),
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
new WPForms_Template_Church_Donation;

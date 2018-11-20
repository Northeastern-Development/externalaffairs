<?php
/**
 * General Donaton form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_General_Donation extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'General Donation Form', 'wpforms-form-templates-pack' );
		$this->slug = 'general-donation';
		$this->data = array(
			'field_id' => 7,
			'fields' => array(
				1 => array(
					'id' => '1',
					'type' => 'name',
					'label' => __( 'Name', 'wpforms-form-templates-pack' ),
					'format' => 'first-last',
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
				3 => array(
					'id' => '3',
					'type' => 'email',
					'label' => __( 'Email', 'wpforms-form-templates-pack' ),
					'required' => '1',
					'size' => 'medium',
				),
				6 => array(
					'id' => '6',
					'type' => 'checkbox',
					'label' => __( 'Other Options', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'I prefer to make my donation anonymously.', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Please sign me up to the newsletter.', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'I wish to volunteer to help with fundraising.', 'wpforms-form-templates-pack' ),
						),
					),
					'label_hide' => '1',
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
new WPForms_Template_General_Donation;

<?php
/**
 * Pledge Drive form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Pledge_Drive extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Pledge Drive Form', 'wpforms-form-templates-pack' );
		$this->slug = 'pledge-drive';
		$this->data = array(
			'field_id' => 8,
			'fields' => array(
				1 => array(
					'id' => '1',
					'type' => 'name',
					'label' => __( 'Name', 'wpforms-form-templates-pack' ),
					'format' => 'first-last',
					'description' => __( 'As you wish listed.', 'wpforms-form-templates-pack' ),
					'required' => '1',
					'size' => 'medium',
				),
				4 => array(
					'id' => '4',
					'type' => 'email',
					'label' => __( 'Email', 'wpforms-form-templates-pack' ),
					'required' => '1',
					'size' => 'medium',
				),
				3 => array(
					'id' => '3',
					'type' => 'phone',
					'label' => __( 'Phone', 'wpforms-form-templates-pack' ),
					'format' => 'us',
					'size' => 'medium',
				),
				2 => array(
					'id' => '2',
					'type' => 'address',
					'label' => __( 'Address', 'wpforms-form-templates-pack' ),
					'scheme' => 'us',
					'size' => 'medium',
				),
				5 => array(
					'id' => '5',
					'type' => 'radio',
					'label' => __( 'I am pledging support to this campaign as a/an :', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Student: $20', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Individual: $45', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Family: $60', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Sustainer: $150', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( 'Friend: $300', 'wpforms-form-templates-pack' ),
						),
						6 => array(
							'label' => __( 'Patron: $500', 'wpforms-form-templates-pack' ),
						),
						7 => array(
							'label' => __( 'Benefactor: $1000', 'wpforms-form-templates-pack' ),
						),
					),
					'required' => '1',
				),
				6 => array(
					'id' => '6',
					'type' => 'text',
					'label' => __( 'In Memory Of', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				7 => array(
					'id' => '7',
					'type' => 'text',
					'label' => __( 'In Honor Of', 'wpforms-form-templates-pack' ),
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
new WPForms_Template_Pledge_Drive;

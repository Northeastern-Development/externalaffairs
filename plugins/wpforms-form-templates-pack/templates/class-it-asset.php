<?php
/**
 * IT Asset Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_IT_Asset extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'IT Asset Form', 'wpforms-form-templates-pack' );
		$this->slug = 'it-asset';
		$this->data = array(
			'field_id' => 8,
			'fields' => array(
				1 => array(
					'id' => '1',
					'type' => 'select',
					'label' => __( 'Asset Category', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Building Key/Keycard', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Cell phone', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Desktop Computer', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Notebook Computer', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( 'Keyboard', 'wpforms-form-templates-pack' ),
						),
						6 => array(
							'label' => __( 'Mouse', 'wpforms-form-templates-pack' ),
						),
						7 => array(
							'label' => __( 'Monitor', 'wpforms-form-templates-pack' ),
						),
						8 => array(
							'label' => __( 'Printer', 'wpforms-form-templates-pack' ),
						),
					),
					'size' => 'medium',
				),
				2 => array(
					'id' => '2',
					'type' => 'name',
					'label' => __( 'Asset Owner Name', 'wpforms-form-templates-pack' ),
					'format' => 'first-last',
					'required' => '1',
					'size' => 'medium',
				),
				3 => array(
					'id' => '3',
					'type' => 'text',
					'label' => __( 'Asset Description', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				4 => array(
					'id' => '4',
					'type' => 'text',
					'label' => __( 'Serial #', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				5 => array(
					'id' => '5',
					'type' => 'text',
					'label' => __( 'Model #', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				6 => array(
					'id' => '6',
					'type' => 'payment-single',
					'label' => __( 'Asset Cost', 'wpforms-form-templates-pack' ),
					'format' => 'user',
					'size' => 'medium',
				),
				7 => array(
					'id' => '7',
					'type' => 'text',
					'label' => __( 'Condition', 'wpforms-form-templates-pack' ),
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
new WPForms_Template_IT_Asset;

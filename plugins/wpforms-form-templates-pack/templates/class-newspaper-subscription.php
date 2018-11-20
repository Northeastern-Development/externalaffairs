<?php
/**
 * Newspaper form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Newspaper_Subscription extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Newspaper Subscription Form', 'wpforms-form-templates-pack' );
		$this->slug = 'newspaper-subscription';
		$this->data = array(
			'field_id' => '4',
			'fields' => array(
				1 => array(
					'id'      => '1',
					'type'    => 'radio',
					'label'   => __( 'How often would you like the paper?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Daily: $150', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Weekend (Thurs-Sun): $100', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Sunday Only: $50', 'wpforms-form-templates-pack' ),
						),
					),
					'required' => '1',
				),
				2 => array(
					'id'       => '2',
					'type'     => 'name',
					'label'    => __( 'Name', 'wpforms-form-templates-pack' ),
					'format'   => 'first-last',
					'required' => '1',
					'size'     => 'medium',
				),
				3 => array(
					'id'       => '3',
					'type'     => 'address',
					'label'    => __( 'Address', 'wpforms-form-templates-pack' ),
					'scheme'   => 'us',
					'required' => '1',
					'size'     => 'medium',
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
new WPForms_Template_Newspaper_Subscription;

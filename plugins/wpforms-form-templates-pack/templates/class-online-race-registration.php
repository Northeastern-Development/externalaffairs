<?php
/**
 * Online Race Registration Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Online_Race_Registration extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Online Race Registration Form', 'wpforms-form-templates-pack' );
		$this->slug = 'online-race-registration';
		$this->data = array(
			'field_id' => 11,
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
					'type' => 'email',
					'label' => __( 'Email', 'wpforms-form-templates-pack' ),
					'required' => '1',
					'size' => 'medium',
				),
				3 => array(
					'id' => '3',
					'type' => 'text',
					'label' => __( 'Company (if applicable)', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				9 => array(
					'id' => '9',
					'type' => 'select',
					'label' => __( 'Dropdown', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( '5k', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Half marathon', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Marathon', 'wpforms-form-templates-pack' ),
						),
					),
					'size' => 'medium',
				),
				4 => array(
					'id' => '4',
					'type' => 'radio',
					'label' => __( 'Running speed', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Slower', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Moderate', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Faster', 'wpforms-form-templates-pack' ),
						),
					),
				),
				5 => array(
					'id' => '5',
					'type' => 'radio',
					'label' => __( 'Shirt size', 'wpforms-form-templates-pack' ),
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
				),
				6 => array(
					'id' => '6',
					'type' => 'radio',
					'label' => __( 'How did you hear about this event?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Word of mouth', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Participated in the past', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Advertisement', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( 'Social Media', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Other', 'wpforms-form-templates-pack' ),
						),
					),
				),
				7 => array(
					'id' => '7',
					'type' => 'text',
					'label' => __( 'If other', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				10 => array(
					'id' => '10',
					'type' => 'textarea',
					'label' => __( 'Comments or Requests', 'wpforms-form-templates-pack' ),
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
new WPForms_Template_Online_Race_Registration;
